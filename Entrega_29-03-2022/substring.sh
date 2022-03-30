#!/bin/bash
RES=$(echo "$2" | grep -e "$1")
[[ ! -z "$RES" ]] && echo "$1 está contida em $2"