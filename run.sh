#!/usr/bin/env bash
echo \
| php generate/01*.php \
| php generate/02*.php \
| php generate/03*.php \
| php generate/04*.php \
| php generate/05*.php \
| php generate/06*.php \
| sort -u \
| php display.php
