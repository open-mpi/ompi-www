<?php

/////////////////////////////////////////////////////////////////////////

$q[] = "What OpenFlow Controllers are supported by netloc?";

$anchor[] = "reader-of-support";

$a[] = "
We currently support the following OpenFlow controllers:
<ul>
 <li>OpenDaylight<br>
   <a href=\"http://www.opendaylight.org/\">http://www.opendaylight.org/</a>
 <li>Cisco eXtensible Network Controller (XNC)<br>
   <a href=\"http://www.cisco.com/web/solutions/netsys/CiscoLive/xnc/index.html\">http://www.cisco.com/web/solutions/netsys/CiscoLive/xnc/index.html</a>
 <li>Floodlight (v0.90)<br>
     <a href=\"http://www.projectfloodlight.org/floodlight/\">http://www.projectfloodlight.org/floodlight/</a>
</ul>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I discover the topology of an Ethernet network using OpenFlow?";

$anchor[] = "reader-of-discover";

$a[] = "
There are a few tools involved in discovering the topology of an Ethernet
network managed with an OpenFlow controller. The following [README] provides
more information about this process:<br>
<a href=\"https://github.com/open-mpi/netloc/blob/master/doc/README.openflow\">README.openflow</a>
";

/////////////////////////////////////////////////////////////////////////

