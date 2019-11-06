#!/usr/bin/env bash
echo \
| php 01*.php \
| php 02*.php \
| php 03*.php \
| php 04*.php \
| php 05*.php \
| php 06*.php \
| php 07*.php \
| sort -u \
label.php \
 >out.html


