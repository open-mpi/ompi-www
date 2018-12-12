<?php

/////////////////////////////////////////////////////////////////////////

function udaplrow($ver, $support) {
    return "<tr>
<td align=\"left\" valign=\"top\">$ver</td>
<td align=\"middle\" valign=\"top\">$support</td>
</tr>\n";
}

$th = '<th style="border-bottom:1px solid black; padding:5px">';

$q[] = "What versions of Open MPI contain support for uDAPL?";

$anchor[] = "udapl-ompi-versions";

$a[] = "The following versions of Open MPI contain support for uDAPL:

<div align=\"center\">
<table style=\"border:0px; padding:15px\">
<tr>
$th Open MPI series </th>
$th uDAPL supported </th>
</tr>
". udaplrow("v1.0 series", "No") . "
". udaplrow("v1.1 series", "No") . "
". udaplrow("v1.2 series", "Yes") . "
". udaplrow("v1.3 / v1.4 series", "Yes") . "
". udaplrow("v1.5 / v1.6 series", "Yes") . "
". udaplrow("v1.7 and beyond", "No") . "
</table>
</div>";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is different between Sun Microsystems ClusterTools 7 and Open
MPI in regards to the uDAPL BTL?";

$anchor[] = "udapl";

$a[] = "Sun's ClusterTools is based off of Open MPI with one significant
difference: Sun's ClusterTools includes uDAPL RDMA capabilities in the
uDAPL BTL. Open MPI v1.2 uDAPL BTL does not include the RDMA
capabilities. These improvements do exist today in the Open MPI master
and will be included in future Open MPI releases.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What values are expected to be used by the <code>btl_udapl_if_include</code> and <code>btl_udapl_if_exclude</code> MCA parameters?";

$anchor[] = "include-exclude";

$a[] = "The uDAPL BTL looks for a match from the uDAPL static registry which is contained in the [dat.conf] file. Each non commented or blank line is considered an interface. The first field of each interface entry is the value which must be supplied to the MCA parameter in question.

Solaris Example:

<geshi bash>
shell% datadm -v
ibd0  u1.2  nonthreadsafe  default  udapl_tavor.so.1  SUNW.1.0  \" \"  \"driver_name=tavor\"
shell% mpirun --mca btl_udapl_if_include ibd0 ...
</geshi>

Linux Example:

<geshi bash>
shell% cat /etc/dat.conf
OpenIB-cma u1.2 nonthreadsafe default /usr/local/ofed/lib64/libdaplcma.so dapl.1.2 \"ib0 0\" \"\"
OpenIB-bond u1.2 nonthreadsafe default /usr/local/ofed/lib64/libdaplcma.so dapl.1.2 \"bond0 0\" \"\"
shell% mpirun --mca btl_udapl_if_exclude OpenIB-bond ...
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Where is the static uDAPL Registry found?";

$anchor[] = "udapl-registry";

$a[] = "Solaris: [/etc/dat/dat.conf]

Linux: [/etc/dat.conf]
";

/////////////////////////////////////////////////////////////////////////

$q[] = "How come the value reported by <code>ifconfig</code> is not accepted by the <code>btl_udapl_if_include</code>/<code>btl_udapl_if_exclude</code> MCA parameter?";

$anchor[] = "ifconfig-interface";

$a[] = "uDAPL queries a static registry defined in the [dat.conf] file to find available interfaces which can be used. As such, the uDAPL BTL needs to match the names found in the registry and these may differ from what is reported by [ifconfig].";

/////////////////////////////////////////////////////////////////////////

$q[] = "I get a warning message about not being able to register memory and possibly out of privileged memory while running on Solaris; what can I do?";

$anchor[] = "privileged-memory";

$a[] = "The error message probably looks something like this:

<geshi text>
WARNING: The uDAPL BTL is not able to register memory. Possibly out of
allowed privileged memory (i.e. memory that can be pinned). Increasing
the allowed privileged memory may alleviate this issue.
</geshi>

One thing to do is increase the amount of available privileged
memory. On Solaris your system adminstrator can increase the amount of
available privileged memory by editing the [/etc/project] file on the
nodes. For more information see the Solaris [project] man page.

<geshi bash>
shell% man project
</geshi>

As an example of increasing the privileged memory, first determine the
amount available (example of typical value is 978 MB):

<geshi bash>
shell% prctl -n project.max-device-locked-memory -i project default
NAME    PRIVILEGE       VALUE    FLAG   ACTION          RECIPIENT
project.max-device-locked-memory
        privileged       978MB      -   deny            -
        system          16.0EB    max   deny            -
</geshi>

To increase the amount of privileged memory, edit the [/etc/project] file:

Default [/etc/project] file.

<geshi text>
system:0::::
user.root:1::::
noproject:2::::
default:3::::
group.staff:10::::
</geshi>

Change to, for example, 4 GB.

<geshi text>
system:0::::
user.root:1::::
noproject:2::::
default:3::::project.max-device-locked-memory=(priv, 4294967296, deny)
group.staff:10::::
</geshi>
";
