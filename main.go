package main

import (
	"fmt"
)

func main() {
	var n int
	fmt.Print("MASUKAN ANGKA : ")
	fmt.Scan(&n)
	fmt.Printf("\n==#Basic#==\n\n")
	
	for i:=1; i <= n; i++ {
		for j:=1; j <= n; j++ {
			fmt.Printf("*")
		}
		fmt.Println("")
	}

	fmt.Printf("\n")

	fmt.Println("==#LEVEL1==")
	for i := 1; i <= n; i++ {
		for j := 1; j <= n; j++ {
			if i == 1 || i == n || j == 1 || j == n {
				fmt.Printf("*");
			}else {
				fmt.Printf(" ")
			}
		}
		fmt.Println("")
	}

	fmt.Printf("\n")

	fmt.Println("==#LEVEL2==")
	for i := 1; i <= n; i++ {
		for j := 1; j <= n; j++ {
			if i == 1 || i == n || j == 1 || j == n || i == j {
				fmt.Printf("*");
			}else {
				fmt.Printf(" ")
			}
		}
		fmt.Println("")
	}

	fmt.Printf("\n")

	fmt.Println("==#LEVEL3==")
	for i := 1; i <= n; i++ {
		for j := 1; j <= n; j++ {
			if i == 1 || i == n || j == 1 || j == n || j == n-(i-1) {
				fmt.Printf("*");
			}else {
				fmt.Printf(" ")
			}
		}
		fmt.Println("")
	}
}