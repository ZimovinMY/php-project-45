# Brain games

## Hexlet tests and linter status:
[![Actions Status](https://github.com/ZimovinMY/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/ZimovinMY/php-project-45/actions)
<a href="https://codeclimate.com/github/ZimovinMY/php-project-45/maintainability"><img src="https://api.codeclimate.com/v1/badges/cc5768fa4dd4e1019794/maintainability" /></a>

## About
 
Brain-games is a set of mini-math games launched from the console. In each game, players are presented with questions that must be answered correctly. 
After three correct answers, the game is considered to be completed. Wrong answers end the game and offer to play it again.
 
## Requirements

* php 8.0+
* composer 2.6.5
* make 4.3
 
## Setup
 
```sh
$ git clone https://github.com/ZimovinMY/php-project-45.git
$ cd php-project-45
$ make install
```

## Launch games
```sh
$ make brain-even
$ make brain-calc
$ make brain-gcd
$ make brain-progression
$ make brain-prime
```
## Games list
- brain-even - specify if the number is even or not
- brain-calc - find the result of simple math expression
- brain-gcd - find the greatest common divisor of two given numbers
- brain-progression - find a missed number in the arithmetic progression
- brain-prime - specify if the number is prime or not

## Launch linter
```sh
$ make lint
```

## Asciinema recordings

<details>
<summary>brain-even</summary>
<a href="https://asciinema.org/a/M2f2WmcuvXmZqVQRMYMKnQd7x" target="_blank"><img src="https://asciinema.org/a/M2f2WmcuvXmZqVQRMYMKnQd7x.svg" /></a>
</details>

<details>
<summary>brain-calc</summary>
<a href="https://asciinema.org/a/Z3irOEcfooROuUCDNUt4R0f8w" target="_blank"><img src="https://asciinema.org/a/Z3irOEcfooROuUCDNUt4R0f8w.svg" /></a>
</details>

<details>
<summary>brain-gcd</summary>
<a href="https://asciinema.org/a/i2OWE7maD9geRnlZW2ZYz7UJz" target="_blank"><img src="https://asciinema.org/a/i2OWE7maD9geRnlZW2ZYz7UJz.svg" /></a>
</details>

<details>
<summary>brain-progression</summary>
<a href="https://asciinema.org/a/J8TUs2zGhQCGljVGAxcpQ81q3" target="_blank"><img src="https://asciinema.org/a/J8TUs2zGhQCGljVGAxcpQ81q3.svg" /></a>
</details>

</details>
<details>
<summary>brain-prime</summary>
<a href="https://asciinema.org/a/8elw515NpKlQifTy2byqcKsB0" target="_blank"><img src="https://asciinema.org/a/8elw515NpKlQifTy2byqcKsB0.svg" /></a>
</details>
