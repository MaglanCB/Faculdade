#!/bin/bash
if test $1 -ge $2
then
  echo "$1 é maior que $2"
elif test $2 -ge $1
then
  echo "$1 é menor que $2"
else
  echo "$1 é igual a $2"
fi