function generateNicks(length){
	if (length > 10 || length < 3) {
	    return 'Invalid length';
	}

	const letters = [
	    ['a', 'e', 'i', 'o', 'u', 'y'],
	    ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'w', 'z'],
	];

	const patterns = [
	    [1, 0, 0, 1, 1, 0, 1, 1, 0, 1],
	    [1, 0, 1, 0, 1, 0, 1, 1, 0, 1],
	    [1, 0, 0, 1, 0, 1, 1, 0, 1, 0],
	];

	const randPatternIndex = Math.floor(Math.random() * patterns.length);
	const pattern = patterns[randPatternIndex];

	let name = '';
	for (let i = 0; i < length; i++) {
	    const letterType = pattern[i];
	    const randLetterIndex = Math.floor(Math.random() * letters[letterType].length);
	    name += letters[letterType][randLetterIndex];
	    letters[letterType].splice(randLetterIndex, 1);
	    if(i==0){name = name.toUpperCase()}
	}

	return name;
}

document.getElementById("length").addEventListener("change", function(event){
	document.getElementById("nick").value = generateNicks(this.value);
});