<?php

function moved($anchor) {
    return "This FAQ entry <a href=\"?category=openfabrics#$anchor\">has moved here.</a>";
}

/////////////////////////////////////////////////////////////////////////

$q[] = "What InfiniBand-based components does Open MPI have?";

$n = "ib-components";
$anchor[] = $n;
$a[] = moved($n);

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I specify to use the InfiniBand network for MPI messages?";

$n = "ib-btl";
$anchor[] = $n;
$a[] = moved($n);

/////////////////////////////////////////////////////////////////////////

$q[] = "But wait -- I also have a TCP network.  Do I need to explicitly
disable the TCP BTL?";

$n = "ib-tcp-disable";
$anchor[] = $n;
$a[] = moved($n);

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I know what MCA parameters are available for tuning MPI performance?";

$n = "ib-params";
$anchor[] = $n;
$a[] = moved($n);

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm getting errors about \"error registering openib memory\";
what do I do?";

$n = "ib-locked-pages";
$anchor[] = $n;
$a[] = moved($n);

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm <em>still</em> getting errors about \"error registering openib memory\"; what do I do?";

$n = "ib-locked-pages-more";
$anchor[] = $n;
$a[] = moved($n);

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm getting \"ibv_create_qp: returned 0 byte(s) for max inline
data\" errors; what is this, and how do I fix it?";

$n = "ibv_create_qp_equals_0";
$anchor[] = $n;
$a[] = moved($n);

/////////////////////////////////////////////////////////////////////////

$q[] = "My bandwidth seems [far] smaller than it should be; why?  Can this be fixed?";

$n = "ib-leave-pinned";
$anchor[] = $n;
$a[] = moved($n);

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I tune small messages in Open MPI v1.1 and later versions?";

$n = "ib-small-message-rdma";
$anchor[] = $n;
$a[] = moved($n);

/////////////////////////////////////////////////////////////////////////

$q[] = "I get bizarre linker warnings / errors / run-time faults when I try to compile my OpenIB / OFED MPI application staticaly.  How do I fix this?";

$n = "ib-static-mpi-apps";
$anchor[] = $n;
$a[] = moved($n);
