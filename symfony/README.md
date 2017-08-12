songbird
========

A Symfony project created on January 18, 2017, 6:55 am.


BUILD:
adding write restrictions
from http://symfony.com/doc/current/setup/file_permissions.html

HTTPDUSER=$(ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1)

and twice for 2 catalogues:
when in symfony:
sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX var
sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX var

when in songbird:
sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX logs
sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX logs
