<?php

function myrirow($ver, $gm, $mx) {
    return "<tr>
<td align=\"left\" valign=\"top\">$ver</td>
<td align=\"middle\" valign=\"top\">$gm</td>
<td align=\"middle\" valign=\"top\">$mx</td>
</tr>\n";
}

$th = '<th style="border-bottom:1px solid black; padding:5px">';

$q[] = "What Myrinet-based components does Open MPI have?";

$anchor[] = "myri-components";

$a[] = "Some versions of Open MPI support both GM and MX for MPI
communications.

<div align=\"center\">
<table style=\"border:0px; padding:15px\">
<tr>
$th Open MPI series </th>
$th GM supported </th>
$th MX supported </th>
</tr>
". myrirow("v1.0 series", "Yes", "Yes") . "
". myrirow("v1.1 series", "Yes", "Yes") . "
". myrirow("v1.2 series", "Yes", "Yes (BTL and MTL)") . "
". myrirow("v1.3 / v1.4 series", "Yes", "Yes (BTL and MTL)") . "
". myrirow("v1.5 / v1.6 series", "No", "Yes (MTL and MTL)") . "
". myrirow("v1.7 / v1.8 series", "No", "Yes (MTL only)") . "
". myrirow("v1.9 and beyond", "No", "No") . "
</table>
</div>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I specify to use the Myrinet GM network for MPI messages?";

$anchor[] = "myri-btl-gm";

$a[] = "In general, you specify that the [gm] BTL component should be used.
However, note that you should _also_ specify that the [self] BTL component 
should be used.  [self] is for loopback communication (i.e., when an MPI 
process sends to itself). This is technically a different 
communication channel than Myrinet.  For example:

<faqcode>
shell$ mpirun --mca btl gm,self ...
</faqcode>

Failure to specify the [self] BTL may result in Open MPI being unable
to complete send-to-self scenarios (meaning that your program will run
fine until a process tries to send to itself).

To use Open MPI's shared memory support for on-host communication
instead of GM's shared memory support, simply include the [sm] BTL.
For example:

<faqcode>
shell$ mpirun --mca btl gm,sm,self ...
</faqcode>

Finally, note that if the [gm] component is
available at run time, Open MPI should automatically use it by
default (ditto for [self] and [sm]).  Hence, it's _usually_ unnecessary to
specify these options on the [mpirun] command line.  They are
typically only used when you want to be absolutely positively
definitely sure to use the specific BTL.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I specify to use the Myrinet MX network for MPI messages?";

$anchor[] = "myri-btl-mx";

$a[] = "As of version 1.2, Open MPI has two different components
to support Myrinet MX, the [mx] BTL and the [mx] MTL, only one of which can be 
used at a time. Prior versions only have the [mx] BTL. 

If available, the [mx] BTL is used by default. However, to be sure it is 
selected you can specify it. Note that you should _also_ specify the 
[self] BTL component (for loopback communication) and the [sm] BTL
component (for on-host communication). For example:

<faqcode>
shell$ mpirun --mca btl mx,sm,self ...
</faqcode>

To use the [mx] MTL component, it _must_ be specified. Also, you _must_ use
the [cm] PML component. For example:

<faqcode>
shell$ mpirun --mca mtl mx --mca pml cm ...
</faqcode>

Note that one cannot use both the [mx] MTL and the [mx] BTL components
at once. Deciding which to use largely depends on the application being 
run.";

/////////////////////////////////////////////////////////////////////////

$q[] = "But wait -- I also have a TCP network.  Do I need to explicitly
disable the TCP BTL?";

$anchor[] = "myri-tcp-disable";

$a[] = "No.  See <a href=\"?category=tcp#tcp-auto-disable\">this FAQ entry for more details.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I know what MCA parameters are available for tuning MPI performance?";

$anchor[] = "myri-params";

$a[] = "The [ompi_info] command can display all the parameters
available for the [gm] and [mx] BTL components and the [mx] MTL component:

<faqcode>
# Show the gm BTL parameters
shell$ ompi_info <font color=red><strong>--param btl gm</strong></font>

# Show the mx BTL parameters
shell$ ompi_info <font color=red><strong>--param btl mx</strong></font>

# Show the mx MTL parameters
shell$ ompi_info <font color=red><strong>--param mtl mx</strong></font>
</faqcode>";

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm experiencing a problem with Open MPI on my Myrinet-based network; how do I troubleshoot and get help?";

$anchor[] = "myri-troubleshoot";

$a[] ="In order for us to help you, it is *most* helpful if you can
run a few steps before sending an e-mail to both perform some basic
troubleshooting and provide us with enough information about your
environment to help you.  Please include answers to the following
questions in your e-mail:

<ol>

<li> Which Myricom software stack are you running: GM or MX?  Which
version?</li>

<li> Are you using \"fma\", the \"gm_mapper\", or the \"mx_mapper\"?</li>

<li> If running GM, include the output from running the [gm_board_info]
from a known \"good\" node and a known \"bad\" node.<br />
If running MX, include the output from running [mx_info] from a known
\"good\" node and a known \"bad\" node.</li>

<ul>

<li> Is the \"Map version\" value from this output is the same across
all nodes?</li>

<li> <strong><font color=red>NOTE:</font></strong> If the map version
is not the same, ensure that you are not running a mixture of FMA on
some nodes and the mapper on others.  Also check the connectivity of
nodes that seem to have an inconsistent map version.</li>

</ul>

<li> What are the contents of the file
<code>/var/run/fms/fma.log</code>?</li>

</ol>

Gather up this information and <a href=\"$topdir/community/help/\">see
this page</a> about how to submit a help request to the user's mailing
list.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I adjust the MX first fragment size?  Are there constraints?";

$anchor[] = "mx-first-frag-size";

$a[] = "The MX library limits the maximum message fragment size for
both on-node and off-node messages.  As of MX v1.0.3, the inter-node
maximum fragment size is 32k, and the intra-node maximum fragment size
is 16k -- fragments sent larger than these sizes will fail.  

Open MPI automatically fragments large messages; it currently limits
its first fragment size on MX networks to the lower of these two
values -- 16k.  As such, increasing the value of the MCA parameter
named [btl_mx_first_frag_size] larger than 16k may cause failures in
some cases (i.e., when using MX to send large messages to processes on
the same node); it will cause failures in all cases if it is set above
32k.  

Note that this only affects the *first* fragment of messages; latter
fragments do not have this size restriction.  The MCA parameter
[btl_mx_max_send_size] can be used to vary the maximum size of
subsequent fragments.";
