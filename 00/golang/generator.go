package main

import (
	"fmt"
	"math/rand"
	"time"
	"strings"
)

func main() {

	var length int
	n, err := fmt.Scanf("%d", &length)

	if err != nil || n != 1 {
		fmt.Println(n, err)
		return
	}

	if length > 10 || length < 3 {
		fmt.Println("Invalid length")
		return
	}

	letters := [2][]string{
		{"a", "e", "i", "o", "u", "y"},
		{"b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "r", "s", "t", "w", "z"},
	}

	patterns := [3][10]int{
		{1, 0, 0, 1, 1, 0, 1, 1, 0, 1},
		{1, 0, 1, 0, 1, 0, 1, 1, 0, 1},
		{1, 0, 0, 1, 0, 1, 1, 0, 1, 0},
	}

	rand.Seed(time.Now().Unix()) // initialize global pseudo random generator
	pattern := patterns[rand.Intn(len(patterns))]
	var buffer strings.Builder

	for i := 0; i < length; i++ {
		letterType := pattern[i]
		randPosition := rand.Intn(len(letters[letterType]))
		letter := letters[letterType][randPosition]

		buffer.WriteString(letter)

		remove(letters[letterType], randPosition)
	}

	name := strings.Title(buffer.String())
	fmt.Println(name)
}

func remove(s []string, i int) []string {
	s[i] = s[len(s)-1]
	return s[:len(s)-1]
}
