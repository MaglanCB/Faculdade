#!/bin/bash
for i in $*
do
  echo -n "$i" | tr -d " "
done
echo