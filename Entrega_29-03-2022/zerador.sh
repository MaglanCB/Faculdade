#!/bin/bash
VAR=$1
while [ $VAR -ge 0 ]
do
  [[ -z $RES ]] && RES="$VAR" || RES="$RES,$VAR"
  VAR=$((VAR-1))
done
echo "$RES"