<?php

include_once("$topdir/software/ompi/current/version.inc");

$note = "*<font color=red>NOTE:</font>*";

$mlp = "$note The [mpi_leave_pinned] parameter was
broken in Open MPI v1.3 and v1.3.1 (<a
href=\"https://www.open-mpi.org/community/lists/announce/2009/03/0029.php\">see
this announcement</a>).  [mpi_leave_pinned] functionality was fixed in v1.3.2.";

#
# Define some bug tracking URLs
#
include_once("bug-functions.inc");

$ofa = "<a href=\"http://www.openfabrics.org/\">";

/////////////////////////////////////////////////////////////////////////

function ofarow($ver, $support) {
    return "<tr>
<td align=\"left\" valign=\"top\">$ver</td>
<td align=\"middle\" valign=\"top\">$support</td>
</tr>\n";
}

$th = '<th style="border-bottom:1px solid black; padding:5px">';

$q[] = "What OpenFabrics-based components does Open MPI have?";

$anchor[] = "ib-components";

$a[] = "Current versions of Open MPI support the UCX and verbs APIs
for the ${ofa}OpenFabrics Alliance</a> (OFA) software stack.  The
OpenFabrics software stack supports both InfiniBand and iWARP
networks.  Open MPI's support of the OpenFabrics stack is provided
through multiple different components; see the table below.

Note that the OpenFabrics Alliance used to be known as the OpenIB
project.  Hence, Open MPI's initial InfiniBand support was in a module
named [openib].

Older versions of Open MPI supported the uDAPL and Mellanox VAPI
(mVAPI) APIs through the v1.2 series.  See <a
href=\"#vapi-support\">this FAQ entry</a> for more details on VAPI
support.

<div align=\"center\">
<table style=\"border:0px; padding:15px\">
<tr>
$th Open MPI series </th>
$th OpenFabrics support </th>
</tr>
". ofarow("v1.0 series", " [openib] and [mvapi] BTLs") . "
". ofarow("v1.1 series", " [openib] and [mvapi] BTLs") . "
". ofarow("v1.2 series", " [openib] and [mvapi] BTLs") . "
". ofarow("v1.3 / v1.4 series", " [openib] BTL") . "
". ofarow("v1.5 / v1.6 series", " [openib] BTL, [mxm] MTL, [fca] coll") . "
". ofarow("v1.7 / v1.8 series", " [openib] BTL, [mxm] MTL, [fca] and [ml] and [hcoll] coll") . "
". ofarow("v2.x series", " [openib] BTL, [yalla] (MXM) PML, [ml] and [hcoll] coll") . "
". ofarow("v3.x series", " [openib] BTL, [ucx] and [yalla] (MXM) PML, [hcoll] coll") . "
". ofarow("v4.x series", " [openib] BTL, [ucx] PML, [hcoll] coll") . "
</table>
</div>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "What component will my OpenFabrics-based network use by default?";

$anchor[] = "openfabrics-default-stack";

$a[] = "Per <a href=\"#ib-components\">this FAQ item</a>,
OpenFabrics-based networks have generally used the [openib] BTL for
native verbs-based communication for MPI point-to-point
communications.  Because of this history, many of the questions below
refer to the [openib] BTL, and are specifically marked as such.

The following are exceptions to this general rule:

<ul>
<li> In the v2.x and v3.x series, Mellanox InfiniBand devices
     defaulted to MXM-based components (e.g., [mxm] and/or [yalla]).</li>
<li> In the v4.0.x series, Mellanox InfiniBand devices default to the
     [ucx] PML.  The use of InfiniBand over the [openib] BTL is
     officially deprecated in the v4.0.x series.</li>
</ul>

That being said, it is generally possible for any OpenFabrics device
to use the [openib] BTL or the [ucx] PML:

<ul>
<li> To make the [openib] BTL use InfiniBand in v4.0.x, set the
     [btl_openib_allow_ib] parameter to [1].</li>
<li> <a href=\"#run-ucx\">See this FAQ item</a> for information about
     using the [ucx] PML with arbitrary OpenFabrics devices.</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support iWARP?";

$anchor[] = "iwarp-support";

$a[] = "iWARP is fully supported via the [openib] BTL as of the Open
MPI v1.3 release.

As of Open MPI v4.0.0, iWARP is also supported via the [ucx] PML, but
iWARP devices still default to using the [openib] BTL.  <a
href=\"#run-ucx\">Users can force the use of the [ucx] PML</a> with
iWARP devices, if desired.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support RoCE (RDMA over Converged Ethernet)?";

$anchor[] = "roce-support";

$a[] = "RoCE is fully supported as of the Open MPI v1.4.4 release.

For more details on how to run Open MPI over RoCE, see <a
href=\"#ompi-over-roce\">this FAQ entry</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I have an OFED-based cluster; will Open MPI work with that?";

$anchor[] = "ofed";

$a[] = "Yes.

OFED (OpenFabrics Enterprise Distribution) is basically the release
mechanism for the OpenFabrics software packages.  OFED releases are
officially tested and released versions of the OpenFabrics stacks.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Where do I get the OFED software from?";

$anchor[] = "ofed-software";

$a[] = "The \"Download\" section of the ${ofa}OpenFabrics web site</a> has
links for the various OFED releases.

Additionally, Mellanox distributes Mellanox OFED and Mellanox-X binary
distributions.  Consult with your IB vendor for more details.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Isn't Open MPI included in the OFED software package?  Can I install another copy of Open MPI besides the one that is included in OFED? ";

$anchor[] = "ofed-and-ompi";

$a[] = "Yes, Open MPI _used to be_ included in the OFED software.  And
yes, you can _easily_ install a later version of Open MPI on
OFED-based clusters, even if you're also using the Open MPI that was
included in OFED.

You can simply download the Open MPI version that you want and install
it to an alternate directory from where the OFED-based Open MPI was
installed.  You therefore have multiple copies of Open MPI that do not
conflict with each other.  Make sure you set the PATH and
LD_LIBRARY_PATH variables to point to exactly one of your Open MPI
installations at a time, and never try to run an MPI executable
compiled with one version of Open MPI with a different version of Open
MPI.

Ensure to specify to build Open MPI with OpenFabrics support; <a
href=\"./#category=building#build-p2p\">see this FAQ item for more
information</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What versions of Open MPI are in OFED?";

$anchor[] = "ofed-and-ompi-versions";

$a[] = "The following versions of Open MPI shipped in OFED (note that
OFED stopped including MPI implementations as of OFED 1.5):

<ul>

<li> *OFED 1.4.1:* Open MPI v1.3.2.</li>

<li> *OFED 1.4:* Open MPI v1.2.8.</li>

<li> *OFED 1.3.1:* Open MPI v1.2.6.</li>

<li> *OFED 1.3:* Open MPI v1.2.5.</li>

<li> *OFED 1.2:* Open MPI v1.2.1.

$note A prior version of this
FAQ entry specified that \"v1.2ofed\" would be included in OFED v1.2,
representing a temporary branch from the v1.2 series that included
some OFED-specific functionality.  All of this functionality was
included in the v1.2.1 release, so OFED v1.2 simply included that.
Some public betas of \"v1.2ofed\" releases were made available, but
this version was never officially released.

<li> *OFED 1.1:* Open MPI v1.1.1.</li>

<li> *OFED 1.0:* Open MPI v1.1b1.</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why are you using the name \"openib\" for the BTL name?";

$anchor[] = "why-openib-name";

$a[] = "Before the iWARP vendors joined the OpenFabrics Alliance, the
project was known as OpenIB.  Open MPI's support for this software
stack was originally written during this timeframe &mdash; the name of the
group was \"OpenIB\", so we named the BTL [openib].

Since then, iWARP vendors joined the project and it changed names to
\"OpenFabrics\".  Open MPI did not rename its BTL mainly for
historical reasons &mdash; we didn't want to break compatibility for users
who were already using the [openib] BTL name in scripts, etc.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Is the mVAPI-based BTL still supported?";

$anchor[] = "vapi-support";

$a[] = "Yes, but only through the Open MPI v1.2 series; mVAPI support
was removed starting with v1.3.

The mVAPI support is an InfiniBand-specific BTL (i.e., it will not
work in iWARP networks), and reflects a prior generation of
InfiniBand software stacks.

The Open MPI team is doing no new work with mVAPI-based networks.

Generally, much of the information contained in this FAQ category
applies to both the OpenFabrics [openib] BTL and the mVAPI [mvapi] BTL
&mdash; simply replace [openib] with [mvapi] to get similar results.
However, new features and options are continually being added to the
[openib] BTL (and are being listed in this FAQ) that will not be
back-ported to the [mvapi] BTL.  So not all [openib]-specific items in
this FAQ category will apply to the [mvapi] BTL.

All that being said, as of Open MPI v4.0.0, the use of InfiniBand over
the [openib] BTL is deprecated &mdash; <a href=\"#run-ucx\">the UCX PML</a>
is the preferred way to run over InfiniBand.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I specify to use the OpenFabrics network for MPI messages? (openib BTL)";

$anchor[] = "ib-btl";

$a[] = "In general, you specify that the [openib] BTL
components should be used.  However, note that you should _also_
specify that the [self] BTL component should be used.  [self] is for
loopback communication (i.e., when an MPI process sends to itself),
and is technically a different communication channel than the
OpenFabrics networks.  For example:

<geshi bash>
shell$ mpirun --mca btl openib,self ...
</geshi>

Failure to specify the [self] BTL may result in Open MPI being unable
to complete send-to-self scenarios (meaning that your program will run
fine until a process tries to send to itself).

Note that [openib,self] is the _minimum_ list of BTLs that you might
want to use.  It is *highly* likely that you also want to include the
[vader] (shared memory) BTL in the list as well, like this:

<geshi bash>
shell$ mpirun --mca btl openib,self,vader ...
</geshi>

<strong>NOTE:</strong> Prior versions of Open MPI used an [sm] BTL for
shared memory.  [sm] was effectively replaced with [vader] starting in
Open MPI v3.0.0.

See <a href=\"?category=tuning#selecting-components\">this FAQ
entry</a> for more details on selecting which MCA plugins are used at
run-time.

Finally, note that if the [openib] component is available at run time,
Open MPI should automatically use it by default (ditto for [self]).
Hence, it's _usually_ unnecessary to specify these options on the
[mpirun] command line.  They are typically only used when you want to
be absolutely positively definitely sure to use the specific BTL.";

/////////////////////////////////////////////////////////////////////////

$q[] = "But wait &mdash; I also have a TCP network.  Do I need to explicitly
disable the TCP BTL?";

$anchor[] = "ib-tcp-disable";

$a[] = "No.  See <a href=\"?category=tcp#tcp-auto-disable\">this FAQ entry for more details.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I know what MCA parameters are available for tuning MPI performance?";

$anchor[] = "ib-params";

$a[] = "The [ompi_info] command can display all the parameters
available for any Open MPI component.  For example:

<geshi bash>
# Note that Open MPI v1.8 and later will only show an abbreviated list
# of parameters by default.  Use \"--level 9\" to show all available
# parameters.

# Show the UCX PML parameters
shell$ ompi_info --param pml ucx --level 9

# Show the openib BTL parameters
shell$ ompi_info --param btl openib --level 9
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm experiencing a problem with Open MPI on my OpenFabrics-based network; how do I troubleshoot and get help?";

$anchor[] = "ofa-troubleshoot";

$a[] ="In order for us to help you, it is *most* helpful if you can
run a few steps before sending an e-mail to both perform some basic
troubleshooting and provide us with enough information about your
environment to help you.  Please include answers to the following
questions in your e-mail:

<ol>

<li> Which Open MPI component are you using?  Possibilities include:
the [ucx] PML, the [yalla] PML, the [mxm] MTL, the [openib] BTL.</li>

<li> Which OpenFabrics version are you running?  Please specify where
you got the software from (e.g., from the OpenFabrics community web
site, from a vendor, or it was already included in your Linux
distribution).</li>

<li> What distro and version of Linux are you running?  What is your
kernel version?</li>

<li> Which subnet manager are you running?  (e.g., OpenSM, a
vendor-specific subnet manager, etc.)</li>

<li> What is the output of the [ibv_devinfo] command on a known
\"good\" node and a known \"bad\" node?  (<strong>NOTE:</strong> there
must be at least one port listed as \"PORT_ACTIVE\" for Open MPI to
work.  If there is not at least one PORT_ACTIVE port, something is
wrong with your OpenFabrics environment and Open MPI will not be able
to run).</li>

<li> What is the output of the [ifconfig] command on a known \"good\"
node and a known \"bad\" node? (Mainly relevant for IPoIB
installations.) Note that some Linux distributions do not put
[ifconfig] in the default path for normal users; look for it at
[/sbin/ifconfig] or [/usr/sbin/ifconfig].</li>

<li> If running under Bourne shells, what is the output of the [ulimit
-l] command? <br /> If running under C shells, what is the output of
the [limit | grep memorylocked] command?  <br />
(<strong>NOTE:</strong> If the value is not \"unlimited\", see <a
href=\"#ib-locked-pages\">this FAQ entry</a> and <a
href=\"#ib-locked-pages-more\">this FAQ entry</a>).</li>

</ol>

Gather up this information and <a href=\"$topdir/community/help/\">see
this page</a> about how to submit a help request to the user's mailing
list.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is \"registered\" (or \"pinned\") memory?";

$anchor[] = "registered-memory";

$a[] = "\"Registered\" memory means two things:

<ol>

<li> The memory has been \"pinned\" by the operating system such that
the virtual memory subsystem will not relocate the buffer (until it
has been unpinned).</li>

<li> The network adapter has been notified of the virtual-to-physical
address mapping.</li>

</ol>

These two factors allow network adapters to move data between the
network fabric and physical RAM without involvement of the main CPU or
operating system.

Note that many people say \"pinned\" memory when they actually mean
\"registered\" memory.

However, a host can only support so much registered memory, so it is
treated as a precious resource.  Additionally, the cost of registering
(and unregistering) memory is fairly high.  Open MPI takes aggressive
steps to use as little registered memory as possible (balanced against
performance implications, of course) and mitigate the cost of
registering and unregistering memory.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm getting errors about \"error registering openib memory\";
what do I do? (openib BTL)";

$anchor[] = "ib-locked-pages";

$a[] = "With OpenFabrics (and therefore the [openib] BTL component),
you need to set the available locked memory to a large number (or
better yet, unlimited) &mdash; the defaults with most Linux installations
are usually too low for most HPC applications that utilize
OpenFabrics.  Failure to do so will result in a error message similar
to one of the following (the messages have changed throughout the
release versions of Open MPI):

<ol>
<li><geshi text>
WARNING: It appears that your OpenFabrics subsystem is configured to only
allow registering part of your physical memory.  This can cause MPI jobs to
run with erratic performance, hang, and/or crash.

This may be caused by your OpenFabrics vendor limiting the amount of
physical memory that can be registered.  You should investigate the
relevant Linux kernel module parameters that control how much physical
memory can be registered, and increase them to allow registering all
physical memory on your machine.

See this Open MPI FAQ item for more information on these Linux kernel
module parameters:

    http://www.linux-pam.org/Linux-PAM-html/sag-pam_limits.html

  Local host:              node02
  Registerable memory:     32768 MiB
  Total memory:            65476 MiB

Your MPI job will continue, but may be behave poorly and/or hang.
</geshi></li>

<li><geshi text>
[node06:xxxx] mca_mpool_openib_register: \
error registering openib memory of size yyyy errno says Cannot allocate memory
</geshi></li>

<li><geshi text>
[x,y,z][btl_openib.c:812:mca_btl_openib_create_cq_srq] \
error creating low priority cq for mthca0 errno says Cannot allocate memory
</geshi></li>

<li><geshi text>
libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
    This will severely limit memory registrations.
</geshi></li>

<li><geshi text>
The OpenIB BTL failed to initialize while trying to create an internal
queue.  This typically indicates a failed OpenFabrics installation or
faulty hardware.  The failure occurred here:

    Host:        compute_node.example.com
    OMPI source: btl_openib.c:828
    Function:    ibv_create_cq()
    Error:       Invalid argument (errno=22)
    Device:      mthca0

You may need to consult with your system administrator to get this
problem fixed.
</geshi></li>

<li><geshi text>
The OpenIB BTL failed to initialize while trying to allocate some
locked memory.  This typically can indicate that the memlock limits
are set too low.  For most HPC installations, the memlock limits
should be set to \"unlimited\".  The failure occurred here:

    Host:          compute_node.example.com
    OMPI source:   btl_opebib.c:114
    Function:      ibv_create_cq()
    Device:        Out of memory
    Memlock limit: 32767

You may need to consult with your system administrator to get this
problem fixed.  This FAQ entry on the Open MPI web site may also be
helpful:

    http://www.linux-pam.org/Linux-PAM-html/sag-pam_limits.html
</geshi></li>

<li><geshi text>
error creating qp errno says Cannot allocate memory
</geshi></li>
</ol>

There are two typical causes for Open MPI being unable to register
memory, or warning that it might not be able to register enough memory:

<ol>

<li> Linux kernel module parameters that control the amount of
available registered memory are set too low;
<a href=\"#ib-low-reg-mem\">see this FAQ entry</a>.</li>
<li> System / user needs to increase locked memory limits: see <a
href=\"#ib-locked-pages-user\">this FAQ entry</a> and <a
href=\"#ib-locked-pages-more\">this FAQ entry</a>.</li>

</ol>\n";

/////////////////////////////////////////////////////////////////////////

$q[] = "How can a system administrator (or user) change locked memory limits?";

$anchor[] = 'ib-locked-pages-user';

$a[] = "There are two ways to control the amount of memory that a user
process can lock:

<ol>

<li>Assuming that the PAM limits module is being used (see <a
href=\"http://www.linux-pam.org/Linux-PAM-html/sag-pam_limits.html\">
full docs for the Linux PAM limits module</a>, or 
<a href=\"http://soc.if.usp.br/manual/libpam-doc/html/sag-pam_limits.html\">this mirror</a>), the system-level
default values are controlled by putting a file in
[/etc/security/limits.d/] (or directly editing the
[/etc/security/limits.conf] file on older systems).  Two limits are
configurable:

<ul>
<li> *Soft:* The \"soft\" value is how much memory is allowed to be
locked by user processes by default.  Set it by creating a file in
[/etc/security/limits.d/] (e.g., [95-openfabrics.conf]) with the line
below (or, if your system doesn't have a [/etc/security/limits.d/]
directory, add a line directly to [/etc/security/limits.conf]):

<geshi text>
* soft memlock <number>
</geshi>

where [&lt;number&gt;] is the number of bytes that you want user
processes to be allowed to lock by default (presumably rounded down to
an integral number of pages).  [&lt;number&gt;] can also be
[unlimited].

<li> *Hard:* The \"hard\" value is the maximum amount of memory that a
user process can lock.  Similar to the soft lock, add it to the file
you added to [/etc/security/limits.d/] (or editing
[/etc/security/limits.conf] directly on older systems):

<geshi text>
* hard memlock <number>
</geshi>

where [&lt;number&gt;] is the maximum number of bytes that you want
user processes to be allowed to lock (presumably rounded down to an
integral number of pages).  [&lt;number&gt;] can also be
[unlimited].</li>
</ul>
</li>

<li>Per-user default values are controlled via the [ulimit] command (or
[limit] in [csh]).  The default amount of memory allowed to be
locked will correspond to the \"soft\" limit set in
[/etc/security/limits.d/] (or [limits.conf] &mdash; see above); users
cannot use [ulimit] (or [limit] in csh) to set their amount to be more
than the hard limit in [/etc/security/limits.d] (or [limits.conf]).

Users can increase the default limit by adding the following to their
shell startup files for Bourne style shells (sh, bash):

<geshi bash>
shell$ ulimit -l unlimited
</geshi>

Or for C style shells (csh, tcsh):

<geshi bash>
shell% limit memorylocked unlimited
</geshi>

This effectively sets their limit to the hard limit in
[/etc/security/limits.d] (or [limits.conf]).  Alternatively, users can
set a specific number instead of \"unlimited\", but this has limited
usefulness unless a user is aware of exactly how much locked memory they
will require (which is difficult to know since Open MPI manages locked
memory behind the scenes).

It is important to realize that this must be set in _all_ shells where
Open MPI processes using OpenFabrics will be run.  For example, if you are
using [rsh] or [ssh] to start parallel jobs, it will be necessary to
set the [ulimit] in your shell startup files so that it is effective
on the processes that are started on each node.

More specifically: it may not be sufficient to simply execute the
following, because the [ulimit] may not be in effect on all nodes
where Open MPI processes will be run:

<geshi bash>
shell$ ulimit -l unlimited
shell$ mpirun -np 2 my_mpi_application
</geshi>
</li>
</ol>";

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm <em>still</em> getting errors about \"error registering openib memory\"; what do I do? (openib BTL)";

$anchor[] = "ib-locked-pages-more";

$url = "https://www.open-mpi.org/community/lists/users/2006/02/0724.php";

$a[] = "Ensure that the limits you've set (see <a
href=\"#ib-locked-pages\">this FAQ entry</a>) are actually being
used.  There are two general cases where this can happen:

<ol>
<li> Your memory locked limits are not actually being applied for
interactive and/or non-interactive logins.</li>
<li> You are starting MPI jobs under a resource manager / job
scheduler that is either explicitly resetting the memory limited or
has daemons that were (usually accidentally) started with very small
memory locked limits.</li>
</ol>

That is, in some cases, it is possible to login to a node and
not have the \"limits\" set properly.  For example, consider the
following post on the Open MPI User's list:

<div align=center>
" . "<a href=\"$url\">" . "$url</a>
</div>

In this case, the user noted that the default configuration on his
Linux system did not automatically load the <code>pam_limits.so</code>
upon <code>rsh</code>-based logins, meaning that the hard and soft
limits were not set.

There are also some default configurations where, even though the
maximum limits are initially set system-wide in [limits.d] (or
[limits.conf] on older systems), something
during the boot procedure sets the default limit back down to a low
number (e.g., 32k).  In this case, you may need to override this limit
on a per-user basis (described in <a href=\"#ib-locked-pages\">this FAQ
entry</a>), or effectively system-wide by putting [ulimit -l unlimited]
(for Bourne-like shells) in a strategic location, such as:

<ul>
<li> [/etc/init.d/sshd] (or wherever the script is that starts up your
SSH daemon) and restarting the SSH daemon</li>
<li> In a script in [/etc/profile.d], or wherever system-wide shell
startup scripts are located (e.g., [/etc/profile] and
[/etc/csh.cshrc])</li>
</ul>

Also, note that resource managers such as Slurm, Torque/PBS, LSF,
etc. may affect OpenFabrics jobs in two ways:

<ol>

<li> Make sure that the resource manager daemons are started with
unlimited memlock limits (which may involve editing the resource
manager daemon startup script, or some other system-wide location that
allows the resource manager daemon to get an unlimited limit of locked
memory).
Otherwise, jobs that are started under that resource manager
will get the default locked memory limits, which are far too small for
Open MPI.</li>

*The files in [limits.d] (or the [limits.conf] file) do not usually
apply to resource daemons!* The [limits.s] files usually only applies
to [rsh] or [ssh]-based logins.  Hence, daemons usually inherit the
system default of maximum 32k of locked memory (which then gets passed
down to the MPI processes that they start).  To increase this limit,
you typically need to modify daemons' startup scripts to increase the
limit before they drop root privliedges.

<li> Some resource managers can limit the amount of locked
memory that is made available to jobs.  For example, Slurm has some
fine-grained controls that allow locked memory for _only_ Slurm jobs
(i.e., the system's default is low memory lock limits, but Slurm jobs
can get high memory lock limits).  See these FAQ items on the Slurm
web site for more details: " .
"<a href=\"http://www.llnl.gov/linux/slurm/faq.html#rlimit\">" .
"propagating limits</a> and " .
"<a href=\"http://www.llnl.gov/linux/slurm/faq.html#pam\">" .
"using PAM</a>.</li>
</ol>

Finally, note that some versions of SSH have problems with getting
correct values from [/etc/security/limits.d/] (or [limits.conf]) when
using privilege separation.  You may notice this by ssh'ing into a
node and seeing that your memlock limits are far lower than what you
have listed in [/etc/security/limits.d/] (or [limits.conf]) (e.g., 32k
instead of unlimited).  Several web sites suggest disabling privilege
separation in ssh to make PAM limits work properly, but others imply
that this may be fixed in recent versions of OpenSSH.

If you do disable privilege separation in ssh, be sure to check with
your local system administrator and/or security officers to understand
the full implications of this change.  See " .
"<a href=\"http://www.google.com/search?q=ssh+privilege+separation+limits.conf&hl=en\">" .
"this Google search link</a> for more information.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Open MPI is warning me about limited registered memory; what does this mean?";

$anchor[] = 'ib-low-reg-mem';

$a[] = "OpenFabrics network vendors provide Linux kernel module
parameters controlling the size of the size of the memory translation
table (MTT) used to map virtual addresses to physical addresses. The
size of this table controls the amount of physical memory that can be
registered for use with OpenFabrics devices.

With *Mellanox* hardware, two parameters are provided to control the
size of this table:

<ul>
<li> [log_num_mtt] (on some older Mellanox hardware, the parameter may be
[num_mtt], not [log_num_mtt]): number of memory translation tables</li>
<li> [log_mtts_per_seg]:  </li>
</ul>

The amount of memory that can be registered is calculated using this
formula:

<geshi text>
In newer hardware:
    max_reg_mem = (2^log_num_mtt) * (2^log_mtts_per_seg) * PAGE_SIZE

In older hardware:
    max_reg_mem = num_mtt * (2^log_mtts_per_seg) * PAGE_SIZE
</geshi>

*<font color=\"red\">At least some versions of OFED (community OFED,
Mellanox OFED, and upstream OFED in Linux distributions) set the
default values of these variables FAR too low!</font>* For example, in
some cases, the default values may only allow registering 2 GB &mdash; even
if the node has much more than 2 GB of physical memory.

Mellanox has advised the Open MPI community to increase the
[log_num_mtt] value (or [num_mtt] value), _not the [log_mtts_per_seg]
value_ (even though <a
href=\"https://www.ibm.com/developerworks/community/wikis/home?lang=en#!/wiki/General%20Parallel%20File%20System%20%28GPFS%29/page/Using%20RDMA%20with%20pagepool%20larger%20than%208GB\">an
IBM article suggests increasing the [log_mtts_per_seg] value</a>).

It is recommended that you adjust [log_num_mtt] (or [num_mtt]) such
that your [max_reg_mem] value is at least twice the amount of physical
memory on your machine (setting it to a value higher than the amount
of physical memory present allows the internal Mellanox driver tables
to handle fragmentation and other overhead).  For example, if a node
has 64 GB of memory and a 4 KB page size, [log_num_mtt] should be set
to 24 and (assuming [log_mtts_per_seg] is set to 1). This will allow
processes on the node to register:

<geshi text>
max_reg_mem = (2^24) * (2^1) * (4 kB) = 128 GB
</geshi>

*NOTE:* Starting with OFED 2.0, OFED's default kernel parameter values
should allow registering twice the physical memory size.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm using Mellanox ConnectX HCA hardware and seeing terrible
latency for short messages; how can I fix this?";

$anchor[] = "mellanox-connectx-poor-latency";

$a[] = "Open MPI prior to v1.2.4 did not include specific
configuration information to enable RDMA for short messages on
ConnectX hardware.  As such, Open MPI will default to the safe setting
of using send/receive semantics for short messages, which is slower
than RDMA.

To enable RDMA for short messages, you can add this snippet to the
bottom of the [\$prefix/share/openmpi/mca-btl-openib-hca-params.ini]
file:

<geshi ini>
[Mellanox Hermon]
vendor_id = 0x2c9,0x5ad,0x66a,0x8f1,0x1708
vendor_part_id = 25408,25418,25428
use_eager_rdma = 1
mtu = 2048
</geshi>

Enabling short message RDMA will significantly reduce short message
latency, especially on ConnectX (and newer) Mellanox hardware.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How much registered memory is used by Open MPI?  Is there a way to limit it? (openib BTL)";

$anchor[] = "limiting-registered-memory-usage";

function row($desc, $amt, $exp) {
    return "<tr>
<td valign=top> $desc </td>
<td valign=top> $amt </td>
<td valign=top> $exp </td>
</tr>\n\n";
}

$a[] = "Open MPI uses registered memory in several places, and
therefore the total amount used is calculated by a somewhat-complex
formula that is directly influenced by MCA parameter values.

It can be desirable to enforce a hard limit on how much registered
memory is consumed by MPI applications.  For example, some platforms
have limited amounts of registered memory available; setting limits on
a per-process level can ensure fairness between MPI processes on the
same host.  Another reason is that registered memory is not swappable;
as more memory is registered, less memory is available for
(non-registered) process code and data.  When little unregistered
memory is available, swap thrashing of unregistered memory can occur.

_Each instance of the [openib] BTL module in an MPI process_ (i.e.,
one per HCA port and LID) will use up to a maximum of the sum of the
following quantities:

<div align=center>
<table border=1 cellpadding=3>
<tr>
<th>Description</th>
<th>Amount</th>
<th>Explanation</th>
</tr>

" .

row("User memory", "[mpool_rdma_rcache_size_limit]", "By default Open
    MPI will register as much user memory as necessary (upon demand).
    However, if [mpool_rdma_cache_size_limit] is greater than zero, it
    is the upper limit (in bytes) of user memory that will be
    registered.  User memory is registered for ongoing MPI
    communications (e.g., long message sends and receives) and via the
    MPI_ALLOC_MEM function.

    Note that this MCA parameter was introduced in <a
    href=\"#ofed-and-ompi-versions\">v1.2.1</a>.") .

row("Internal eager fragment buffers", "2 &times;
    <code>btl_openib_free_list_max</code> &times;
    (<code>btl_openib_eager_limit</code> + overhead)",

    "A \"free list\" of buffers used in the [openib] BTL for \"eager\"
    fragments (e.g., the first fragment of a long message).  Two free
    lists are created; one for sends and one for receives.

    By default, [btl_openib_free_list_max] is -1, and the list size is
    unbounded, meaning that Open MPI will try to allocate as many
    registered buffers as it needs.  If [btl_openib_free_list_max] is
    greater than 0, the list will be limited to this size.  Each entry
    in the list is approximately [btl_openib_eager_limit] bytes &mdash;
    some additional overhead space is required for alignment and
    internal accounting.  <code>btl_openib_eager_limit</code> is the
    maximum size of an eager fragment.") .

row("Internal send/receive buffers", "2 &times;
    <code>btl_openib_free_list_max</code> &times;
    (<code>btl_openib_max_send_size</code> + overhead)",

    "A \"free list\" of buffers used for send/receive communication in
    the [openib] BTL.  Two free lists are created; one for sends and
    one for receives.

    By default, [btl_openib_free_list_max] is -1, and the list size is
    unbounded, meaning that Open MPI will allocate as many registered
    buffers as it needs.  If [btl_openib_free_list_max] is greater
    than 0, the list will be limited to this size.  Each entry in the
    list is approximately [btl_openib_max_send_size] bytes &mdash; some
    additional overhead space is required for alignment and internal
    accounting.  <code>btl_openib_max_send_size</code> is the maximum
    size of a send/receive fragment.") .

row("Internal \"eager\" RDMA buffers",
    "<code>btl_openib_eager_rdma_num</code> &times;
    <code>btl_openib_max_eager_rdma</code> &times; (<code>btl_openib_eager_limit</code>
    + overhead)",

    "If <code>btl_openib_user_eager_rdma</code> is true, RDMA buffers are used
    for eager fragments (because RDMA semantics can be faster than
    send/receive semantics in some cases), and an additional set of
    registered buffers is created (as needed).

    Each MPI process will use RDMA buffers for eager fragments up to
    <code>btl_openib_eager_rdma_num</code> MPI peers.  Upon receiving the
    <code>btl_openib_eager_rdma_threshhold</code>'th message from an MPI peer
    process, if both sides have not yet setup
    <code>btl_openib_eager_rdma_num</code> sets of eager RDMA buffers, a new set
    will be created.  The set will contain <code>btl_openib_max_eager_rdma</code>
    buffers; each buffer will be <code>btl_openib_eager_limit</code> bytes (i.e.,
    the maximum size of an eager fragment).") .

"</table>
</div>

In general, when any of the individual limits are reached, Open MPI
will try to free up registered memory (in the case of registered user
memory) and/or wait until message passing progresses and more
registered memory becomes available.

Use the [ompi_info] command to view the values of the MCA parameters
described above in your Open MPI installation:

<geshi bash>
# Note that Open MPI v1.8 and later require the \"--level 9\"
# CLIP option to display all available MCA parameters.
shell$ ompi_info --param btl openib --level 9
</geshi>

See <a href=\"?category=tuning#setting-mca-params\">this FAQ entry</a>
for information on how to set MCA parameters at run-time.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I get Open MPI working on Chelsio iWARP devices? (openib BTL)";

$anchor[] = "iwarp-chelsio-enablement";

$a[] = "iWARP support is only available in Open MPI v1.3 or
greater.

For the Chelsio T3 adapter, you must have at least OFED v1.3.1 and
Chelsio firmware v6.0.  Download the firmware from "
. "<a href=\"http://service.chelsio.com/\">" .
"service.chelsio.com</a> and put the *uncompressed* [t3fw-6.0.0.bin]
file in [/lib/firmware].  Then reload the [iw_cxgb3] module and bring
up the ethernet interface to flash this new firmware.  For example:

<geshi bash>
# Note that the URL for the firmware may change over time
shell# cd /lib/firmware
shell# wget http://service.chelsio.com/drivers/firmware/t3/t3fw-6.0.0.bin.gz
[...wget output...]
shell# gunzip t3fw-6.0.0.bin.gz
shell# rmmod iw_cxgb3 cxgb3
shell# modprobe iw_cxgb3

# This last step *may* happen automatically, depending on your
# Linux distro (assuming that the ethernet interface has previously
# been properly configured and is ready to bring up).  Substitute the
# proper ethernet interface name for your T3 (vs. ethX).
shell# ifup ethX
</geshi>

If all goes well, you should see a message similar to the following in
your syslog 15-30 seconds later:

<geshi text>
kernel: cxgb3 0000:0c:00.0: successful upgrade to firmware 6.0.0
</geshi>

Open MPI will work without any specific configuration to the [openib]
BTL.  Users wishing to performance tune the configurable options may
wish to inspect the receive queue values.  Those can be found in the
\"Chelsio T3\" section of [mca-btl-openib-hca-params.ini].";

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm getting \"ibv_create_qp: returned 0 byte(s) for max inline
data\" errors; what is this, and how do I fix it? (openib BTL)";

$anchor[] = "ibv_create_qp_equals_0";

$url = "https://www.open-mpi.org/community/lists/users/2006/03/0737.php";

$a[] = "Prior to Open MPI v1.0.2, the OpenFabrics (then known as
\"OpenIB\") verbs BTL component did not check for where the OpenIB API
could return an erroneous value (0) and it would hang during startup.
Starting with v1.0.2, error messages of the following form are
reported:

<geshi text>
[0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
ibv_create_qp: returned 0 byte(s) for max inline data
</geshi>

This is caused by an error in older versions of the OpenIB user
library.  Upgrading your OpenIB stack to recent versions of the
OpenFabrics software should resolve the problem.  See this post on the
Open MPI user's list for more details:

<div align=center>
" . "<a href=\"$url\">" . "$url</a>
</div>";

/////////////////////////////////////////////////////////////////////////

$q[] = "My bandwidth seems [far] smaller than it should be; why?  Can this be fixed? (openib BTL)";

$anchor[] = "ib-leave-pinned";

$a[] = "Open MPI, by default, uses a pipelined RDMA protocol.
Additionally, in the v1.0 series of Open MPI, small messages use
send/receive semantics (instead of RDMA &mdash; small message RDMA <a
href=\"#ib-small-message-rdma\">was added in the v1.1 series</a>).
For some applications, this may result in lower-than-expected
bandwidth.  However, Open MPI also supports caching of registrations
in a most recently used (MRU) list &mdash; this bypasses the pipelined RDMA
and allows messages to be sent faster (in some cases).

For version the v1.1 series, see <a
href=\"#ib-small-message-rdma\">this FAQ entry</a> for more
information about small message RDMA, its effect on latency, and how
to tune it.

To enable the \"leave pinned\" behavior, set the MCA parameter
[mpi_leave_pinned] to 1. For example:

<geshi bash>
shell$ mpirun --mca mpi_leave_pinned 1 ...
</geshi>

$mlp

This will enable the MRU cache and will typically increase bandwidth
performance for applications which reuse the same send/receive
buffers.

$note The v1.3 series enabled \"leave
pinned\" behavior by default when applicable; it is usually
unnecessary to specify this flag anymore.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I tune small messages in Open MPI v1.1 and later versions? (openib BTL)";

$anchor[] = "ib-small-message-rdma";

$a[] = "Starting with Open MPI version 1.1, \"short\" MPI messages are
sent, by default, via RDMA to a limited set of peers (for versions
prior to v1.2, only when the shared receive queue is not used).  This
provides the lowest possible latency between MPI processes.

However, this behavior is not enabled between _all_ process peer pairs
because it can quickly consume large amounts of resources on nodes
(specifically: memory must be individually pre-allocated for _each_
process peer to perform small message RDMA; for large MPI jobs, this
can quickly cause individual nodes to run out of memory).  Outside the
limited set of peers, send/receive semantics are used (meaning that
they will generally incur a greater latency, but not consume as many
system resources).

This behavior is tunable via several MCA parameters:

<ul>

<li> [btl_openib_use_eager_rdma] (default value: 1): These both
default to 1, meaning that the small message behavior described above
(RDMA to a limited set of peers, send/receive to everyone else) is
enabled.  Setting these parameters to 0 disables all small message
RDMA in the [openib] BTL component. </li>

<li> [btl_openib_eager_rdma_threshold] (default value: 16): This is
the number of short messages that must be received from a peer before
Open MPI will setup an RDMA connection to that peer.  This mechanism
tries to setup RDMA connections only to those peers who will
frequently send around a lot of short messages (e.g., avoid consuming
valuable RDMA resources for peers who only exchange a few \"startup\"
control messages). </li>

<li> [btl_openib_max_eager_rdma] (default value: 16): This parameter
controls the maximum number of peers that can receive an RDMA
connection for short messages.  It is not advisable to change this
value to a very large number because the polling time increase with
the number of the connections; as a direct result, short message
latency will increase.</li>

<li> [btl_openib_eager_rdma_num] (default value: 16): This parameter
controls the maximum number of pre-allocated buffers allocated to each
peer for small messages. </li>

<li> [btl_openib_eager_limit] (default value: 12k): The maximum size
of small messages (in bytes). </li>

</ul>

Note that long messages use a different protocol than short messages;
messages over a certain size _always_ use RDMA.  Long messages are not
affected by the [btl_openib_use_eager_rdma] MCA parameter.

Also note that, as stated above, prior to v1.2, small message RDMA is
not used when the shared receive queue is used.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I tune large message behavior in Open MPI the v1.2 series? (openib BTL)";

$anchor[] = "large-message-tuning-1.2";

$img = "openfabrics/ompi-v1.2-ofa-long-message-mca-params.jpg";
$size = GetImageSize($img);

$a[] = "Note that this answer generally pertains to the Open MPI v1.2
series.  Later versions slightly changed how large messages are
handled.

Open MPI uses a few different protocols for large messages.  Much
detail is provided in <a
href=\"$topdir/papers/euro-pvmmpi-2006-hpc-protocols/\">this
paper</a>.

The [btl_openib_flags] MCA parameter is a set of bit flags that
influences which protocol is used; they generally indicate what kind
of transfers are allowed to send the bulk of long messages.
Specifically, these flags do not regulate the behavior of \"match\"
headers or other intermediate fragments.

The following flags are available:

<ul>

<li> Use send/receive semantics (1): Allow the use of send/receive
semantics.</li>
<li> Use PUT semantics (2): Allow the sender to use RDMA writes.</li>
<li> Use GET semantics (4): Allow the receiver to use RDMA reads.</li>

</ul>

Open MPI defaults to setting both the PUT and GET flags (value 6).

Open MPI uses the following long message protocols:

<ol>

<li> *RDMA Direct*: If RDMA writes or reads are allowed by
[btl_openib_flags] and the sender's message is already registered
(either by use of <a href=\"#large-message-leave-pinned\">the
[mpi_leave_pinned] MCA parameter</a> or if the buffer was allocated
via MPI_ALLOC_MEM), a slightly simpler protocol is used:

<ol>

<li> Send the \"match\" fragment: the sender sends the MPI message
information (communicator, tag, etc.) to the receiver using copy
in/copy out semantics.  No data from the user message is included in
the match header.</li>
<li> Use RDMA to transfer the message:
<ul>
<li> If RDMA reads are enabled *and* only one network connection is
available between the pair of MPI processes, once the receiver has
posted a matching MPI receive, it issues an RDMA read to get the
message, and sends an ACK back to the sender when the transfer has
completed.</li>
<li> If the above condition is not met, then RDMA writes must be
enabled (or we would not have chosen this protocol).  The receiver
sends an ACK back when a matching MPI receive is posted and the sender
issues an RDMA write across each available network link (i.e., BTL
module) to transfer the message.  The RDMA write sizes are weighted
across the available network links.  For example, if two MPI processes
are connected by both SDR and DDR IB networks, this protocol will
issue an RDMA write for 1/3 of the entire message across the SDR
network and will issue a second RDMA write for the remaining 2/3 of
the message across the DDR network.
The sender then sends an ACK to the receiver when the transfer has
completed.</li>
</ul>

$note Per above, if striping across multiple
network interfaces is available, only RDMA writes are used.  The
reason that RDMA reads are not used is solely because of an
implementation artifact in Open MPI; we didn't implement it because
using RDMA reads only saves the cost of a short message round trip,
the extra code complexity didn't seem worth it for long messages
(i.e., the performance difference will be negligible).</li>

</ol>

Note that the user buffer is *not* unregistered when the RDMA
transfer(s) is (are) completed.

</li>

<!----->

<li> *RDMA Pipeline*: If *RDMA Direct* was not used *and* RDMA writes
are allowed by [btl_openib_flags] *and* the sender's message is not
already registered, a 3-phase pipelined protocol is used:

<ol>

<li> Send the \"match\" fragment: the sender sends the MPI message
information (communicator, tag, etc.) and the first fragment of the
user's message using copy in/copy out semantics.</li>
<li> Send \"intermediate\" fragments: once the receiver has posted a
matching MPI receive, it sends an ACK back to the sender.  The sender
and receiver then start registering memory for RDMA.  To cover the
cost of registering the memory, several more fragments are sent to the
receiver using copy in/copy out semantics.</li>
<li> Transfer the remaining fragments: once memory registrations start
completing on both the sender and the receiver (see the paper for
details), the sender uses RDMA writes to transfer the remaining
fragments in the large message.</li>

</ol>

Note that phases 2 and 3 occur in parallel.  Each phase 3 fragment is
unregistered when its transfer completes (<a
href=\"$topdir/papers/euro-pvmmpi-2006-hpc-protocols/\">see the
paper</a> for more details).

Also note that one of the benefits of the pipelined protocol is that
large messages will naturally be striped across all available network
interfaces.

The sizes of the fragments in each of the three phases are tunable by
the MCA parameters shown in the figure below (all sizes are in units
of bytes):

<div align=center><img src=\"$img\" $size[3]></div>

<!----->

<li> *Send/Receive*: If *RDMA Direct* and *RDMA Pipeline* were not
used, copy in/copy out semantics are used for the whole message (note
that this will happen even if the SEND flag is not set in
[btl_openib_flags]):

<ol>
<li> Send the \"match\" fragment: the sender sends the MPI message
information (communicator, tag, etc.) and the first fragment of the
user's message using copy in/copy out semantics.</li>
<li> Send remaining fragments: once the receiver has posted a
matching MPI receive, it sends an ACK back to the sender.  The sender
then uses copy in/copy out semantics to send the remaining fragments
to the receiver.</li>

</ol>

This protocol behaves the same as the *RDMA Pipeline* protocol when
the [btl_openib_min_rdma_size] value is infinite.

</ol>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I tune large message behavior in the Open MPI v1.3 (and later) series? (openib BTL)";

$anchor[] = "large-message-tuning-1.3";

$img = "openfabrics/ompi-v1.3-ofa-long-message-mca-params.jpg";
$size = GetImageSize($img);

$a[] = "The Open MPI v1.3 (and later) series generally use the same
protocols for sending long messages <a
href=\"#large-message-tuning-1.2\">as described for the v1.2
series</a>, but the MCA parameters for the *RDMA Pipeline* protocol
were both moved and renamed (all sizes are in units of bytes):

<div align=center><img src=\"$img\" $size[3]></div>

The change to move the \"intermediate\" fragments to the end of the
message was made to better support applications that call [fork()].
Specifically, there is a problem in Linux when a process with
registered memory calls [fork()]: the registered memory will
physically not be available to the child process (touching memory in
the child that is registered in the parent will cause a segfault or
other error).  Because memory is registered in units of pages, the end
of a long message is likely to share the same page as other heap
memory in use by the application.  If this last page of the large
message is registered, then all the memory in that page &mdash; to include
other buffers that are not part of the long message &mdash; will not be
available to the child.  By moving the \"intermediate\" fragments to
the end of the message, the end of the message will be sent with copy
in/copy out semantics and, more importantly, will not have its page
registered.  This increases the chance that child processes will be
able to access other memory in the same page as the end of the large
message without problems.

Some notes about these parameters:

<ul>

<li> [btl_openib_rndv_eager_limit] defaults to the same value as
[btl_openib_eager_limit] (the size for \"small\" messages).  It is a
separate parameter in case you want/need different values.</li>
<li> The [btl_openib_min_rdma_size] parameter was an absolute _offset_
into the message; it was replaced by
[btl_openib_rdma_pipeline_send_length], which is a _length_.

</ul>

Note that messages must be larger than
[btl_openib_min_rdma_pipeline_size] (a new MCA parameter to the v1.3
series) to use the *RDMA Direct* or *RDMA Pipeline* protocols.
Messages shorter than this length will use the *Send/Receive* protocol
(even if the SEND flag is not set on [btl_openib_flags]).
";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does the <code>mpi_leave_pinned</code> parameter affect
large message transfers? (openib BTL)";

$anchor[] = "large-message-leave-pinned";

$a[] = "$mlp

When [mpi_leave_pinned] is set to 1, Open MPI aggressively
tries to pre-register user message buffers so that the *RDMA Direct*
protocol can be used.  Additionally, user buffers are _left_
registered so that the de-registration and re-registration costs are
not incurred if the same buffer is used in a future message passing
operation.

$note Starting with Open MPI v1.3,
[mpi_leave_pinned] is automatically set to 1 by default when
applicable.  It is therefore usually unnecessary to set this value
manually.

$note The [mpi_leave_pinned] MCA parameter
has some restrictions on how it can be set starting with Open MPI
v1.3.2.  <a href=\"#setting-mpi-leave-pinned-1.3.2\">See this FAQ
entry for details</a>.

Leaving user memory registered when sends complete can be extremely
beneficial for applications that repeatedly re-use the same send
buffers (such as ping-pong benchmarks).  Additionally, the fact that a
single RDMA transfer is used and the entire process runs in hardware
with very little software intervention results in utilizing the
maximum possible bandwidth.

Leaving user memory registered has disadvantages, however.  Bad Things
happen if registered memory is <code>free()</code>ed, for example &mdash;
it can silently invalidate Open MPI's cache of knowing which memory is
registered and which is not.  The MPI layer usually has no visibility
on when the MPI application calls [free()] (or otherwise frees memory,
such as through [munmap()] or [sbrk()]).  Open MPI has implemented
complicated schemes that intercept calls to return memory to the OS.
Upon intercept, Open MPI examines whether the memory is registered,
and if so, unregisters it before returning the memory to the OS.

These schemes are best described as \"icky\" and can actually cause
real problems in applications that provide their own internal memory
allocators.  Additionally, only _some_ applications (most notably,
ping-pong benchmark applications) benefit from \"leave pinned\"
behavior &mdash; those who consistently re-use the same buffers for sending
and receiving long messages.

*It is for these reasons that \"leave pinned\" behavior is not enabled
by default.* Note that other MPI implementations enable \"leave
pinned\" behavior by default.

Also note that another pipeline-related MCA parameter also exists:
[mpi_leave_pinned_pipeline].  Setting this parameter to 1 enables the
use of the *RDMA Pipeline* protocol, but simply leaves the user's
memory registered when RDMA transfers complete (eliminating the cost
of registering / unregistering memory during the pipelined sends /
receives).  This can be beneficial to a small class of user MPI
applications.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does the <code>mpi_leave_pinned</code> parameter affect
memory management? (openib BTL)";

$anchor[] = "leave-pinned-memory-management";

$a[] = "$mlp

When [mpi_leave_pinned] is set to 1, Open MPI aggressively
leaves user memory registered with the OpenFabrics network stack after
the first time it is used with a send or receive MPI function.  This
allows Open MPI to avoid expensive registration / deregistration
function invocations for each send or receive MPI function.

$note The [mpi_leave_pinned] MCA parameter
has some restrictions on how it can be set starting with Open MPI
v1.3.2.  <a href=\"#setting-mpi-leave-pinned-1.3.2\">See this FAQ
entry for details</a>.

However, registered memory has two drawbacks:

<ul>
<li> There is only so much registered memory available.</li>
<li> User applications may free the memory, thereby invalidating Open
MPI's internal table of what memory is already registered.</li>
</ul>

The second problem can lead to silent data corruption or process
failure.  As such, this behavior must be disallowed.  Note that the
real issue is not simply freeing memory, but rather returning
registered memory to the OS (where it can potentially be used by a
different process).  Open MPI has two methods of solving the issue:

<ul>
<li> Using an internal memory manager; effectively overriding calls to
[malloc()], [free()], [mmap()], [munmap()], etc.</li>
<li> Telling the OS to never return memory from the process to the
OS</li>
</ul>

How these options are used differs between <a
href=\"#leave-pinned-memory-management-v1.2\">Open MPI v1.2 (and
earlier)</a> and <a href=\"#leave-pinned-memory-management-v1.3\">Open
MPI v1.3 (and later)</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does the <code>mpi_leave_pinned</code> parameter affect
memory management in Open MPI v1.2? (openib BTL)";

$anchor[] = "leave-pinned-memory-management-v1.2";

$a[] = "Be sure to read <a
href=\"#leave-pinned-memory-management\">this FAQ entry</a> first.

Open MPI 1.2 and earlier on Linux used the ptmalloc2 memory allocator
linked into the Open MPI libraries to handle memory deregistration.
On Mac OS X, it uses an interface provided by Apple for hooking into
the virtual memory system, and on other platforms no safe memory
registration was available.  The ptmalloc2 code could be disabled at
Open MPI configure time with the option [--without-memory-manager],
however it could not be avoided once Open MPI was built.

ptmalloc2 can cause large memory utilization numbers for a small
number of applications and has a variety of link-time issues.
Therefore, by default Open MPI did not use the registration cache,
resulting in lower peak bandwidth.  The inability to disable ptmalloc2
after Open MPI was built also resulted in headaches for users.

<a href=\"#leave-pinned-memory-management-v1.3\">Open MPI v1.3 handles
leave pinned memory management differently</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does the <code>mpi_leave_pinned</code> parameter affect
memory management in Open MPI v1.3? (openib BTL)";

$anchor[] = "leave-pinned-memory-management-v1.3";

$a[] = "$mlp

Be sure to read <a
href=\"#leave-pinned-memory-management\">this FAQ entry</a> first.

$note The [mpi_leave_pinned] MCA parameter
has some restrictions on how it can be set starting with Open MPI
v1.3.2.  <a href=\"#setting-mpi-leave-pinned-1.3.2\">See this FAQ
entry for details</a>.

With Open MPI 1.3, Mac OS X uses the same hooks <a
href=\"#leave-pinned-memory-management-v1.2\">as the 1.2 series</a>,
and most operating systems do not provide pinning support.  However,
the pinning support on Linux has changed.  ptmalloc2 is now by default
built as a standalone library (with dependencies on the internal Open
MPI [libopen-pal] library), so that users by default do not have the
problematic code linked in with their application.  Further, if
OpenFabrics networks are being used, Open MPI will use the [mallopt()]
system call to disable returning memory to the OS if no other hooks
are provided, resulting in higher peak bandwidth by default.

To utilize the independent ptmalloc2 library, users need to add
[-lopenmpi-malloc] to the link command for their application:

<geshi bash>
shell$ mpicc foo.o -o foo -lopenmpi-malloc
</geshi>

Linking in libopenmpi-malloc will result in the OpenFabrics BTL not
enabling [mallopt()] but using the hooks provided with the ptmalloc2
library instead.

To revert to the v1.2 (and prior) behavior, with ptmalloc2 folded into
libopen-pal, Open MPI can be built with the
[--enable-ptmalloc2-internal] configure flag.

When not using ptmalloc2, [mallopt()] behavior can be disabled by
disabling [mpi_leave_pined]:

<geshi bash>
shell$ mpirun --mca mpi_leave_pinned 0 ...
</geshi>

Because [mpi_leave_pinned] behavior is usually only useful for
synthetic MPI benchmarks, the never-return-behavior-to-the-OS behavior
was resisted by the Open MPI developers for a long time.  Ultimately,
it was adopted because a) it is less harmful than imposing the
ptmalloc2 memory manager on all applications, and b) it was deemed
important to enable [mpi_leave_pinned] behavior by default since Open
MPI performance kept getting negatively compared to other MPI
implementations that enable similar behavior by default.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How can I set the <code>mpi_leave_pinned</code> MCA parameter? (openib BTL)";

$anchor[] = "setting-mpi-leave-pinned-1.3.2";

$a[] = "$mlp

As with all MCA parameters, the [mpi_leave_pinned] parameter (and
[mpi_leave_pinned_pipeline] parameter) can be set from the [mpirun]
command line:

<geshi bash>
shell$ mpirun --mca mpi_leave_pinned 1 ...
</geshi>

Prior to the v1.3 series, <a
href=\"./?category=tuning#setting-mca-params\">all the usual methods
to set MCA parameters</a> could be used to set [mpi_leave_pinned].

However, starting with v1.3.2, not all of the <a
href=\"./?category=tuning#setting-mca-params\">usual methods to set
MCA parameters</a> apply to [mpi_leave_pinned].  Due to various
operating system memory subsystem constraints, Open MPI must react to
the setting of the [mpi_leave_pinned] parameter in each MPI process
_before MPI_INIT is invoked._ Specifically, some of Open MPI's MCA
parameter propagation mechanisms are not activated until during
MPI_INIT &mdash; which is too late for [mpi_leave_pinned].

As such, only the following MCA parameter-setting mechanisms can be
used for [mpi_leave_pinned] and [mpi_leave_pinned_pipeline]:

<ul>
<li> *Command line:* See the example above.</li>
<li> *Environment variable:* Setting [OMPI_MCA_mpi_leave_pinned] to 1
before invoking [mpirun].
</ul>

To be clear: you _cannot_ set the [mpi_leave_pinned] MCA parameter via
Aggregate MCA parameter files or normal MCA parameter files.  This is
expected to be an acceptable restriction, however, since the default
value of the [mpi_leave_pinned] parameter is \"-1\", meaning
\"determine at run-time if it is worthwhile to use leave-pinned
behavior.\" Specifically, if [mpi_leave_pinned] is set to -1, if any
of the following are true when each MPI processes starts, then Open
MPI will use leave-pinned bheavior:

<ul>
<li> Either the environment variable [OMPI_MCA_mpi_leave_pinned] or
[OMPI_MCA_mpi_leave_pinned_pipeline] is set to a positive value (note
that the \"[mpirun --mca mpi_leave_pinned 1 ...\"] command-line syntax
simply results in setting these environment variables in each MPI
process)</li>
<li> Any of the following files / directories can be found in the
filesystem where the MPI process is running:
<ul>
<li> [/sys/class/infiniband] </li>
<li> [/dev/open-mx] </li>
<li> [/dev/myri[0-9]] </li>
</ul>
</ul>

Note that if either the environment variable
[OMPI_MCA_mpi_leave_pinned] or [OMPI_MCA_mpi_leave_pinned_pipeline] is
set to to \"-1\", then the above indicators are ignored and Open MPI
will _not_ use leave-pinned behavior.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I got an error message from Open MPI about not using the
default GID prefix.  What does that mean, and how do I fix it? (openib BTL)";

$anchor[] = "ofa-default-subnet-gid";

$a[] = "Users may see the following error message from Open MPI v1.2:

<geshi text>
WARNING: There are more than one active ports on host '%s', but the
default subnet GID prefix was detected on more than one of these
ports.  If these ports are connected to different physical OFA
networks, this configuration will fail in Open MPI.  This version of
Open MPI requires that every physically separate OFA subnet that is
used between connected MPI processes must have different subnet ID
values.
</geshi>

This is a complicated issue.

What it *usually* means is that you have a host connected to multiple,
physically separate OFA-based networks, at least 2 of which are using
the factory-default subnet ID value (FE:80:00:00:00:00:00:00).  Open
MPI can therefore not tell these networks apart during its
reachability computations, and therefore will likely fail.  You need
to reconfigure your OFA networks to have different subnet ID values,
and then Open MPI will function properly.

Please note that the same issue can occur when any two physically
separate subnets share the same subnet ID value &mdash; not just the
factory-default subnet ID value.  However, Open MPI only warns about
the factory default subnet ID value because most users do not bother
to change it unless they know that they have to.

All this being said, note that there are valid network configurations
where multiple ports on the same host can share the same subnet ID
value.  For example, two ports from a single host can be connected to
the *same* network as a bandwidth multiplier or a high-availability
configuration.  For this reason, Open MPI only *warns* about finding
duplicate subnet ID values, and that warning can be disabled.  Setting
the [btl_openib_warn_default_gid_prefix] MCA parameter to 0 will
disable this warning.

<a href=\"#ofa-set-subnet-id\">See this FAQ entry</a> for instructions
on how to set the subnet ID.

Here's a more detailed explanation:

Since Open MPI can utilize multiple network links to send MPI traffic,
it needs to be able to compute the \"reachability\" of all network
endpoints that it can use.  Specifically, for each network endpoint,
Open MPI calculates which other network endpoints are reachable.

In OpenFabrics networks, Open MPI uses the subnet ID to differentiate
between subnets &mdash; assuming that if two ports share the same subnet
ID, they are reachable from each other.  If multiple, physically
separate OFA networks use the same subnet ID (such as the default
subnet ID), it is not possible for Open MPI to tell them apart and
therefore reachability cannot be computed properly.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What subnet ID / prefix value should I use for my OpenFabrics networks?";

$anchor[] = "ofa-which-subnet-id";

$a[] = "You can use any subnet ID / prefix value that you want.
However, Open MPI v1.1 and v1.2 both require that every physically
separate OFA subnet that is used between connected MPI processes must
have *different* subnet ID values.

For example, if you have two hosts (A and B) and each of these
hosts has two ports (A1, A2, B1, and B2).  If A1 and B1 are connected
to Switch1, and A2 and B2 are connected to Switch2, and Switch1 and
Switch2 are not reachable from each other, then these two switches
*must* be on subnets with different ID values.

<a href=\"#ofa-set-subnet-id\">See this FAQ entry</a> for instructions
on how to set the subnet ID.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I set my subnet ID?";

$anchor[] = "ofa-set-subnet-id";

$a[] = "It depends on what Subnet Manager (SM) you are using.  <font
color=red><strong>Note that changing the subnet ID will likely kill
any jobs currently running on the fabric!</strong></font>

<ul>

<li> OpenSM: The SM contained in the OpenFabrics Enterprise
Distribution (OFED) is called OpenSM.  The instructions below pertain
to OFED v1.2 and beyond; they may or may not work with earlier
versions.

<ol>
<li>Stop any OpenSM instances on your cluster:
<geshi bash>
shell# /etc/init.d/opensm stop
</geshi></li>
<li> Run a single OpenSM iteration:
<geshi bash>
shell# opensm -c -o
</geshi>
The [-o] option causes OpenSM to run for one loop and exit.
The [-c] option tells OpenSM to create an \"options\" text file.</li>

<li> The OpenSM options file will be generated under
[/var/cache/opensm/opensm.opts].  Open the file and find the line with
[subnet_prefix]. Replace the default value prefix with the new one.
</li>

<li> Restart OpenSM:
<geshi bash>
shell# /etc/init.d/opensm start
</geshi>
OpenSM will automatically load the options file from the cache
repository and will use new prefix.</li>
</ol>

<li> Cisco High Performance Subnet Manager (HSM): The Cisco HSM has a
console application that can dynamically change various
characteristics of the IB fabrics without restarting.  The Cisco HSM
works on both the OFED InfiniBand stack and an older,
Cisco-proprietary \"Topspin\" InfiniBand stack.  Please consult the
Cisco HSM (or switch) documentation for specific instructions on how
to change the subnet prefix.</li>

<li> Other SM: Consult that SM's instructions for how to change the
subnet prefix.</li>

</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "In a configuration with multiple host ports on the same fabric, what connection pattern does Open MPI use? (openib BTL)";

$anchor[] = "ofa-port-wireup";

$a[] = "When multiple active ports exist on the same physical fabric
between multiple hosts in an MPI job, Open MPI will attempt to use
them all by default.  Open MPI makes several assumptions regarding
active ports when establishing connections between two hosts. Active
ports that have the same subnet ID are assumed to be connected to the
same physical fabric &mdash; that is to say that communication is possible
between these ports. Active ports with different subnet IDs
are assumed to be connected to different physical fabric &mdash; no
communication is possible between them. It is therefore very important
that if active ports on the same host are on physically separate
fabrics, they must have different subnet IDs.  Otherwise Open MPI may
attempt to establish communication between active ports on different
physical fabrics. The subnet manager allows subnet prefixes to be
assigned by the administrator, which should be done when multiple
fabrics are in use.

The following is a brief description of how connections are
established between multiple ports. During initialization, each
process discovers all active ports (and their corresponding subnet IDs)
on the local host and shares this information with every other process
in the job. Each process then examines all active ports (and the
corresponding subnet IDs) of every other process in the job and makes a
one-to-one assignment of active ports within the same subnet. If the
number of active ports within a subnet differ on the local process and
the remote process, then the smaller number of active ports are
assigned, leaving the rest of the active ports out of the assignment
between these two processes. Connections are not established during
MPI_INIT, but the active port assignment is cached and upon the first
attempted use of an active port to send data to the remote process
(e.g., via MPI_SEND), a queue pair (i.e., a connection) is established
between these ports. Active ports are used for communication in a
round robin fashion so that connections are established and used in a
fair manner.

$note This FAQ entry generally applies to v1.2 and beyond.  Prior to
v1.2, Open MPI would follow the same scheme outlined above, but would
not correctly handle the case where processes within the same MPI job
had differing numbers of active ports on the same physical fabric.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm getting lower performance than I expected.  Why?";

$anchor[] = "ofa-benchmarks";

$a[] = "Measuring performance accurately is an extremely difficult
task, especially with fast machines and networks.  Be sure to read <a
href=\"?category=tuning#running-perf-numbers\">this FAQ entry</a> for
many suggestions on benchmarking performance.

_Pay particular attention to the discussion of processor affinity and
NUMA systems_ &mdash; running benchmarks without processor affinity and/or
on CPU sockets that are not directly connected to the bus where the
HCA is located can lead to confusing or misleading performance
results.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I get bizarre linker warnings / errors / run-time faults when
I try to compile my OpenFabrics MPI application statically.  How do I
fix this?";

$anchor[] = "ib-static-mpi-apps";

$a[] = "Fully static linking is not for the weak, and is not
recommended.  But it is possible.

Read both <a href=\"?category=mpi-apps#static-mpi-apps\">this
FAQ entry</a> and <a
href=\"?category=mpi-apps#static-ofa-mpi-apps\">this FAQ entry</a>
in their entirety.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I use <code>system()</code>, <code>popen()</code>, or <code>fork()</code> in an MPI application that uses the OpenFabrics support? (openib BTL)";

$anchor[] = "ofa-fork";

$a[] = "The answer is, unfortunately, complicated.  Be sure to also
see <a href=\"?category=tuning#fork-warning\">this FAQ entry</a> as
well.

<ul>

<li> If you have a Linux kernel before version 2.6.16: no.  Some
distros may provide patches for older versions (e.g, RHEL4 may someday
receive a hotfix).</li>

<li>If you have a version of OFED before v1.2: sort of.  Specifically,
newer kernels with OFED 1.0 and OFED 1.1 may generally allow the use
of [system()] and/or the use of [fork()] as long as the parent does
nothing until the child exits.</li>

<li>If you have a Linux kernel >= v2.6.16 and OFED >= v1.2 and Open MPI >=
<a href=\"#ofed-and-ompi-versions\">v1.2.1</a>: yes.  Open MPI
v1.2.1 added two MCA values relevant to arbitrary [fork()] support
in Open MPI:

<ul>
<li> [btl_openib_have_fork_support]: This is a \"read-only\" MCA
value, meaning that users cannot change it in the normal ways that MCA
parameter values are set.  It can be queried via the [ompi_info]
command; it will have a value of 1 if this installation of Open MPI
supports [fork()]; 0 otherwise.</li>

<li> [btl_openib_want_fork_support]: This MCA parameter can be used to
request conditional, absolute, or no [fork()] support.  The following
values are supported:
<ol>
<li> Negative values: try to enable fork support, but continue even if
it is not available.</li>
<li> Zero: Do not try to enable fork support.</li>
<li> Positive values: Try to enable fork support and fail if it is not
available.</li>
</ol>
</li>
</ul>

</ul>

Hence, you can reliably query Open MPI to see if it has support for
[fork()] and force Open MPI to abort if you request fork support and
it doesn't have it.

This feature is helpful to users who switch around between multiple
clusters and/or versions of Open MPI; they can script to know whether
the Open MPI that they're using (and therefore the underlying IB stack)
has fork support.  For example:

<geshi bash>
#!/bin/sh

have_fork_support=`ompi_info --param btl openib --level 9 --parsable | grep have_fork_support:value | cut -d: -f7`
if test \"\$have_fork_support\" = \"1\"; then
    # Happiness / world peace / birds are singing
else
    # Despair / time for Häagen-Dazs
fi
</geshi>

Alternatively, you can skip querying and simply try to run your job:

<geshi bash>
shell\$ mpirun --mca btl_openib_want_fork_support 1 --mca btl openib,self ...
</geshi>

Which will abort if Open MPI's openib BTL does not have fork support.

All this being said, even if Open MPI is able to enable the
OpenFabrics [fork()] support, <font color=\"red\">it does not mean
that your [fork()]-calling application is safe.</font>

<ul>
<li>In general, if your application calls [system()] or [popen()], it
will likely be safe.</li>

<li>However, note that arbitrary [fork()] support is *not* supported
in the OpenFabrics software stack.  If you use [fork()] in your
application, you *must* not touch any registered memory before calling
some form of [exec()] to launch another process.  Doing so will cause
an immediate seg fault / program crash.

It is important to note that memory is registered on a per-page basis;
it is therefore possible that your application may have memory
co-located on the same page as a buffer that was passed to an MPI
communications routine (e.g., [MPI_Send()] or [MPI_Recv()]) or some
other internally-registered memory inside Open MPI.  You may therefore
accidentally \"touch\" a page that is registered without even
realizing it, thereby crashing your application.

There is unfortunately no way around this issue; it was intentionally
designed into the OpenFabrics software stack.  Please complain to the
OpenFabrics Alliance that they should really fix this problem!</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "My MPI application sometimes hangs when using the
<code>openib</code> BTL; how can I fix this? (openib BTL)";

$anchor[] = "v1.2-use-early-completion";

$a[] = "Starting with v1.2.6, the MCA [pml_ob1_use_early_completion]
parameter allows the user (or administrator) to turn off the \"early
completion\" optimization.  Early completion may cause \"hang\"
problems with some MPI applications running on OpenFabrics networks,
particularly loosely-synchronized applications that do not call MPI
functions often.  The default is 1, meaning that early completion
optimization semantics are enabled (because it can reduce
point-to-point latency).

See Open MPI <a href=\"https://svn.open-mpi.org/trac/ompi/ticket/1224\">
legacy Trac ticket #1224</a> for further
information.

$note This FAQ entry only applies to the v1.2 series.  This
functionality is _not_ required for v1.3 and beyond because of changes
in how message passing progress occurs.  Specifically, this MCA
parameter will only exist in the v1.2 series.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does InfiniBand support QoS (Quality of Service)?";

$anchor[] = "ib-qos";

$a[] = "Yes.

InfiniBand QoS functionality is configured and enforced by the Subnet
Manager/Administrator (e.g., OpenSM).

Open MPI (or any other ULP/application) sends traffic on a specific IB
Service Level (SL). This SL is mapped to an IB Virtual Lane, and all
the traffic arbitration and prioritization is done by the InfiniBand
HCAs and switches in accordance with the priority of each Virtual
Lane.

For details on how to tell Open MPI which IB Service Level to use,
please see <a href=\"#ib-sl\">this FAQ entry</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support InfiniBand clusters with torus/mesh topologies? (openib BTL)";

$anchor[] = "ib-3d-torus";

$a[] = "Yes.

InfiniBand 2D/3D Torus/Mesh topologies are different from the more
common fat-tree topologies in the way that routing works: different IB
Service Levels are used for different routing paths to prevent the
so-called \"credit loops\" (cyclic dependencies among routing path
input buffers) that can lead to deadlock in the network.

Open MPI complies with these routing rules by querying the OpenSM
for the Service Level that should be used when sending traffic to
each endpoint.

Note that this Service Level will vary for different endpoint pairs.

For details on how to tell Open MPI to dynamically query OpenSM for
IB Service Level, please refer to <a href=\"#ib-sl\">this FAQ entry</a>.

$note 3D-Torus and other torus/mesh IB
topologies are supported as of version 1.5.4.
";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I tell Open MPI which IB Service Level to use? (openib BTL)";

$anchor[] = "ib-sl";

$a[] = "There are two ways to tell Open MPI which SL to use:
<ol>
<li>By providing the SL value as a command line parameter to the
[openib] BTL</li>
<li>By telling [openib] BTL to dynamically query OpenSM for
SL that should be used for each endpoint</li>
</ol>

*1. Providing the SL value as a command line parameter for the <code>openib</code> BTL*

Use the <code>btl_openib_ib_service_level</code> MCA parameter to tell
<code>openib</code> BTL which IB SL to use:

<geshi bash>
shell$ mpirun --mca btl openib,self,vader --mca btl_openib_ib_service_level N ...
</geshi>

The value of IB SL *N* should be between 0 and 15, where 0 is the
default value.

$note Open MPI will use the *same* SL value
for all the endpoints, which means that this option is not valid for
3D torus and other torus/mesh IB topologies.

*2. Querying OpenSM for SL that should be used for each endpoint*

Use the <code>btl_openib_ib_path_record_service_level</code> MCA
parameter to tell the [openib] BTL to query OpenSM for the IB SL
that should be used for each endpoint.  Open MPI will send a
PathRecord query to OpenSM in the process of establishing connection
between two endpoints, and will use the IB Service Level from the
PathRecord response:

<geshi bash>
shell$ mpirun --mca btl openib,self,sm --mca btl_openib_ib_path_record_service_level 1 ...
</geshi>

$note The
[btl_openib_ib_path_record_service_level] MCA parameter is supported
as of version 1.5.4.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is RDMA over Converged Ethernet (RoCE)?";

$anchor[] = "what-is-roce";

$a[] = "RoCE (which stands for _RDMA over Converged Ethernet_)
provides InfiniBand native RDMA transport (OFA Verbs) on top of
lossless Ethernet data link.

Since we're talking about Ethernet, there's no Subnet Manager, no
Subnet Administrator, no InfiniBand SL, nor any other InfiniBand Subnet
Administration parameters.

Connection management in RoCE is based on the OFED RDMACM (RDMA
Connection Manager) service:
<ul>
<li>The OS IP stack is used to resolve remote (IP,hostname) tuples to
a DMAC.</li>
<li>The outgoing Ethernet interface and VLAN are determined according
to this resolution.</li>
<li>The appropriate RoCE device is selected accordingly.</li>
<li>Network parameters (such as MTU, SL, timeout) are set locally by
the RDMACM in accordance with kernel policy.</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I run Open MPI over <code>RoCE</code>? (openib BTL)";

$anchor[] = "ompi-over-roce";

$a[] = "Open MPI can use the OFED Verbs-based [openib] BTL for traffic
and its internal [rdmacm] CPC (Connection Pseudo-Component) for
establishing connections for MPI traffic.

So if you just want the data to run over <code>RoCE</code> and you're
not interested in VLANs, PCP, or other VLAN tagging parameters, you
can just run Open MPI with the [openib] BTL and [rdmacm] CPC:

<geshi bash>
shell$ mpirun --mca btl openib,self,vader --mca btl_openib_cpc_include rdmacm ...
</geshi>

(or set these MCA parameters <a
href=\"./?category=tuning#setting-mca-params\">in other ways</a>)

*How does Open MPI run with Routable RoCE (RoCEv2)?*

Routable RoCE is supported in Open MPI starting v1.8.8.

In order to use it, RRoCE needs to be enabled from the command line.
<geshi bash>
shell$ mpirun --mca pml ob1 --mca btl openib,self,vader --mca btl_openib_cpc_include rdmacm ****--mca btl_openib_rroce_enable 1**** ...
</geshi>

*How do I tell Open MPI to use a specific RoCE VLAN?*

When a system administrator configures VLAN in RoCE, every VLAN is
assigned with its own GID. The QP that is created by the
<code>rdmacm</code> CPC uses this GID as a Source GID.  When Open MPI
(or any other application for that matter) posts a send to this QP,
the driver checks the source GID to determine which VLAN the traffic
is supposed to use, and marks the packet accordingly.

Note that InfiniBand SL (Service Level) is not involved in this
process &mdash; marking is done in accordance with local kernel policy.

To control which VLAN will be selected, use the
[btl_openib_ipaddr_include/exclude] MCA parameters and
provide it with the required IP/netmask values.  For
example, if you want to use a VLAN with IP 13.x.x.x:

<geshi bash>
shell$ mpirun --mca btl openib,self,vader --mca btl_openib_cpc_include rdmacm \
    --mca btl_openib_ipaddr_include \"13.0.0.0/8\" ...
</geshi>

$note VLAN selection in the Open MPI v1.4 series works only with
version v1.4.4 or later.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I run Open MPI over <code>RoCE</code>? (UCX PML)";

$anchor[] = "ompi-over-roce-ucx-pml";

$a[] = "In order to use RoCE with <a href=\"#run-ucx\">UCX</a>, the
Ethernet port must be specified using the [UCX_NET_DEVICES] environment
variable.  For example:

<geshi bash>
shell$ mpirun --mca pml ucx -x UCX_NET_DEVICES=mlx5_0:1 ...
</geshi>

*How does UCX run with Routable RoCE (RoCEv2)?*

UCX selects IPV4 RoCEv2 by default. If a different behavior is needed,
it's possible to set a speific GID index to use:

<geshi bash>
shell$ mpirun --mca pml ucx -x UCX_NET_DEVICES=mlx5_0:1 -x UCX_IB_GID_INDEX=1 ...
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support XRC? (openib BTL)";
$anchor[] = "ib-xrc";
$a[] = "Older versions of Open MPI support XRC.

*XRC* (eXtended Reliable Connection) decreases the memory consumption
of Open MPI and improves its scalability by significantly decreasing
number of QPs per machine.

XRC is available on Mellanox ConnectX family HCAs with OFED 1.4 and
later.

XRC was was removed in the middle of multiple release streams (which
were effectively concurrent in time) because there were known problems
with it and no one was going to fix it.  Here are the versions where
XRC support was disabled:

<ul>
<li> In then 2.0.x series, XRC was disabled in v2.0.4.</li>
<li> In then 2.1.x series, XRC was disabled in v2.1.2.</li>
<li> In then 3.0.x series, XRC was disabled prior to the v3.0.0
release.</li>
</ul>

Specifically: v2.1.1 was the latest release that contained XRC
support.  Note that it is not known whether it actually works,
however.

See <a href=\"#ib-receive-queues\">this FAQ entry</a> for instructions
how to tell Open MPI to use XRC receive queues.  ";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I specify the type of receive queues that I want Open MPI to use? (openib BTL)";

$anchor[] = "ib-receive-queues";

$a[] = "You can use the [btl_openib_receive_queues] MCA parameter to
specify the exact type of the receive queues for the Open MPI to use.
This can be advantageous, for example, when you know the exact sizes
of messages that your MPI application will use &mdash; Open MPI can
internally pre-post receive buffers of exactly the right size.  See <a
href=\"$topdir/papers/euro-pvmmpi-2007-ib/\">this paper</a> for more
details.

The [btl_openib_receive_queues] parameter
takes a colon-delimited string listing one or more receive queues of
specific sizes and characteristics. For now, all processes in the job
*must* use the same string. You can specify three kinds of receive
queues:

<ul>
<li> *P* : Per-Peer Receive Queues</li>
<li> *S* : Shared Receive Queues (SRQ) </li>
<li> *X* : eXtended Reliable Connection queues (see <a
href=\"#ib-xrc\">this FAQ item</a> to see when XRC support was removed
from Open MPI)</li>
</ul>

The default value of the [btl_openib_receive_queues] MCA parameter
is sometimes equivalent to the following command line:

<geshi bash>
shell$ mpirun ... --mca btl_openib_receive_queues P,128,256,192,128:S,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32 ...
</geshi>

In particular, note that XRC is (currently) _not_ used by default (and
is no longer supported &mdash; see <a href=\"#ib-xrc\">this FAQ item</a>
for more information).

$note Open MPI chooses a default value of [btl_openib_receive_queues]
based on the type of OpenFabrics network device that is found.  The
text file [\$openmpi_packagedata_dir/mca-btl-openib-device-params.ini]
(which is typically
[\$openmpi_installation_prefix_dir/share/openmpi/mca-btl-openib-device-params.ini])
contains a list of default values for different OpenFabrics devices.
See that file for further explanation of how default values are
chosen.

*Per-Peer Receive Queues*

Per-peer receive queues require between 1 and 5 parameters:
<ol>
<li> Buffer size in bytes: mandatory</li>
<li> Number of buffers: optional; defaults to 8</li>
<li> Low buffer count watermark: optional; defaults to (num_buffers / 2)</li>
<li> Credit window size: optional; defaults to (low_watermark / 2)</li>
<li> Number of buffers reserved for credit messages: optional; defaults to
((num_buffers &times; 2 - 1) / credit_window)</li>
</ol>

Example: *<code>P,128,256,128,16</code>*
<ol>
<li> 128 byte buffers</li>
<li> 256 buffers to receive incoming MPI messages</li>
<li> When the number of available buffers reaches 128, re-post 128 more
buffers to reach a total of 256</li>
<li> If the number of available credits reaches 16, send an explicit
credit message to the sender</li>
<li> Defaulting to ((256 &times; 2) - 1) / 16 = 31; this many buffers are
reserved for explicit credit messages</li>
</ol>

*Shared Receive Queues*

Shared Receive Queues can take between 1 and 4 parameters:
<ol>
<li> Buffer size in bytes: mandatory</li>
<li> Number of buffers: optional; defaults to 16</li>
<li> Low buffer count watermark: optional; defaults to (num_buffers / 2)</li>
<li> Maximum number of outstanding sends a sender can have: optional;
defaults to (low_watermark / 4)</li>
</ol>

Example: *<code>S,1024,256,128,32</code>*
<ol>
<li> 1024 byte buffers</li>
<li> 256 buffers to receive incoming MPI messages</li>
<li> When the number of available buffers reaches 128, re-post 128 more
buffers to reach a total of 256</li>
<li> A sender will not send to a peer unless it has less than 32 outstanding
sends to that peer</li>
</ol>

*XRC Queues*

Note that XRC is no longer supported in Open MPI.  See <a
href=\"#ib-xrc\">this FAQ item</a> for more details.

XRC queues take the same parameters as SRQs.  Note that if you use
*any* XRC queues, then *all* of your queues must be XRC.  Therefore,
to use XRC, specify the following:

<geshi bash>
shell$ mpirun --mca btl openib... --mca btl_openib_receive_queues X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32 ...
</geshi>

$note the [rdmacm] CPC is not supported with
XRC. Also, XRC cannot be used when [btls_per_lid] &gt; 1.</br>
$note the [rdmacm] CPC cannot be used unless the first QP is per-peer.";


/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support <code>FCA</code>?";
$anchor[] = "fca";
$a[] = "Yes.

*FCA* (which stands for _<strong>F</strong>abric <strong>C</strong>ollective
<strong>A</strong>ccelerator_) is a Mellanox MPI-integrated software package
that utilizes "
. "<a href=\"http://www.mellanox.com/related-docs/whitepapers/TB_CORE-Direct.pdf\" target=\"&#95;blank\">" .
"CORE-Direct</a>
technology for implementing the MPI collectives communications. </br>

You can find more information about FCA on the product web page.
FCA is available for download here: "
. "<a href=\"http://www.mellanox.com/products/fca\" target=\"_blank\">" .
"http://www.mellanox.com/products/fca</a>

*Building Open MPI 1.5.x or later with FCA support*

By default, FCA is installed in [/opt/mellanox/fca]. Use the following
configure option to enable FCA integration in Open MPI:
<geshi bash>
shell$ ./configure --with-fca=/opt/mellanox/fca ...
</geshi>

*Verifying the FCA Installation*

To verify that Open MPI is built with FCA support, use the following command:
<geshi bash>
shell$ ompi_info --param coll fca --level 9 | grep fca_enable
</geshi>

A list of FCA parameters will be displayed if Open MPI has FCA support.

</br>
* How do I tell Open MPI to use <code>FCA</code>? *
<geshi bash>
shell$ mpirun --mca coll_fca_enable 1 ...
</geshi>

By default, FCA will be enabled only with 64 or more MPI processes.
To turn on FCA for an arbitrary number of ranks ( [N] ), please use
the following MCA parameters:

<geshi bash>
shell$ mpirun --mca coll_fca_enable 1 --mca coll_fca_np <N>; ...
</geshi>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support <code>MXM</code>?";
$anchor[] = "mxm";
$a[] = "MXM support is currently deprecated and replaced by <a href=\"#run-ucx\">UCX</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support <code>UCX</code>?";
$anchor[] = "run-ucx";
$a[] = "Yes.

<a href=\"http://www.openucx.org/\">UCX</a> is an open-source
optimized communication library which supports multiple networks,
including RoCE, InfiniBand, uGNI, TCP, shared memory, and others. UCX
mixes-and-matches transports and protocols which are available on the
system to provide optimal performance. It also has built-in support
for GPU transports (with CUDA and RoCM providers) which lets
RDMA-capable transports access the GPU memory directly.

<a href=\"./?category=building#build-p2p\">Make sure Open MPI was
built with UCX support</a>.

UCX is enabled and selected by default; typically, no additional
parameters are required.  In this case, the network port with the
highest bandwidth on the system will be used for inter-node
communication, and shared memory will be used for intra-node
communication.  To select a specific network device to use (for
example, [mlx5_0] device port 1):

<geshi bash>
shell$ mpirun -x UCX_NET_DEVICES=mlx5_0:1 ...
</geshi>

It's also possible to force using UCX for MPI point-to-point and
one-sided operations:

<geshi bash>
shell$ mpirun --mca pml ucx --mca osc ucx ...
</geshi>

For OpenSHMEM, in addition to the  above, it's possible to force using
UCX for remote memory access and atomic memory operations:

<geshi bash>
shell$ mpirun --mca pml ucx --mca osc ucx --mca scoll ucx --mca atomic ucx ...
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm getting errors about \"initializing an OpenFabrics device\" when running v4.0.0 with UCX support enabled.  What should I do?";
$anchor[] = "ofa-device-error";

$a[] = "The short answer is that you should probably just disable
verbs support in Open MPI.

The messages below were observed by at least one site where Open MPI
v4.0.0 was built with support for InfiniBand verbs ([--with-verbs]),
OFA UCX ([--with-ucx]), and CUDA ([--with-cuda]) with applications
running on GPU-enabled hosts:

<geshi>
WARNING: There was an error initializing an OpenFabrics device.

    Local host: c36a-s39
    Local device: mlx4_0
</geshi>

and

<geshi>
By default, for Open MPI 4.0 and later, infiniband ports on a device
are not used by default.  The intent is to use UCX for these devices.
You can override this policy by setting the btl_openib_allow_ib MCA parameter
to true.

    Local host:              c36a-s39
    Local adapter:           mlx4_0
    Local port:              1
</geshi>

These messages are coming from the [openib] BTL.  As noted in the
messages above, Open MPI deprecated the openib BTL (enabled when Open
MPI is configured [--with-verbs]) is deprecated in favor of the UCX
PML, which includes support for OpenFabrics devices.  The [openib] BTL
is therefore not needed.

You can disable the [openib] BTL (and therefore avoid these messages)
in a few different ways:

<ul>
<li> Configure Open MPI [--without-verbs].  This will prevent building
the [openib] BTL in the first place.</li>
<li> Disable the [openib] BTL via the [btl] MCA param (see <a
href=\"?category=tuning#setting-mca-params\">this FAQ item</a> for
information on how to set MCA params).  For example,
<geshi bash>
shell$ mpirun --mca btl '^openib' ...
</geshi></li>
</ul>

Note that simply selecting a different PML (e.g., the UCX PML) is
*not* sufficient to avoid these messages.  For example:

<geshi bash>
shell$ mpirun --mca pml ucx ...
</geshi>

You will still see these messages because the [openib] BTL is not only
used by the PML, it is also used in other contexts internally in Open
MPI.  Hence, it is not sufficient to simply choose a non-OB1 PML; you
need to actually disable the [openib] BTL to make the messages go
away.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How can I find out what devices and transports are supported by UCX on my system?";
$anchor[] = "ucx-supported-devices";

$a[] = "Check out the <a
href=\"http://www.openucx.org/documentation/\">UCX documentation</a>
for more information, but you can use the [ucx_info] command.  For
example:

<gesh bash>
shell$ ucx_info -d
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is <code>cpu-set</code>?";
$anchor[] = "cpu-set";
$a[] = "
The [--cpu-set] parameter allows you to specify the logical CPUs to use in an MPI job.

From [mpirun --help]:
Comma-separated list of ranges specifying logical cpus allocated to this job.

<geshi bash>
shell$ mpirun -cpu-set 0,1,2,3 ...
</geshi>

The hwloc package can be used to get information about the topology on your host.
More information about hwloc is available <a href=\"https://www.open-mpi.org/projects/hwloc\">here</a>.

Here is a usage example with [hwloc-ls].<br>
Consider the following command line:
<geshi bash>
shell$ mpirun --report-bindings -n 4 --oversubscribe --cpu-set 14,15,0,1 --bind-to hwthread --map-by hwthread  hostname
</geshi><br>
The output of the [--report-bindings] is:
<geshi text>
[clx-orion-001:25028] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B./../../../../../../../../../../../../..][../../../../../../../../../../../../../..]
[clx-orion-001:25028] MCW rank 1 bound to socket 0[core 0[hwt 1]]: [.B/../../../../../../../../../../../../..][../../../../../../../../../../../../../..]
[clx-orion-001:25028] MCW rank 2 bound to socket 0[core 7[hwt 0]]: [../../../../../../../B./../../../../../..][../../../../../../../../../../../../../..]
[clx-orion-001:25028] MCW rank 3 bound to socket 0[core 7[hwt 1]]: [../../../../../../../.B/../../../../../..][../../../../../../../../../../../../../..]
</geshi>

The explanation is as follows.
When [hwloc-ls] is run, the output will show the mappings of physical cores to logical ones.<br>
As per the example in the command line, the logical PUs 0,1,14,15 match the physical cores &mdash; 0 and 7 (as shown in the map above).

<pre>
    NUMANode L#0 (P#0 128GB)
        Socket L#0 + L3 L#0 (35MB)
          L2 L#0 (256KB) + L1d L#0 (32KB) + Core <b>L#0</b>
            PU L#0 (P#0)
            PU L#1 (P#28)
        ...
        ...
          L2 L#7 (256KB) + L1d L#7 (32KB) + Core <b>L#7</b>
            PU L#14 (P#7)
            PU L#15 (P#35)

</pre>

It is also possible to use [hwloc-calc]. The following command line will show all the available logical CPUs on the host:
<geshi bash>
shell$ hwloc-calc all -I pu
</geshi>

The following will show two specific hwthreads specified by physical ids 0 and 1:
<geshi bash>
shell$ hwloc-calc -I pu --physical-input pu:0 pu:1
</geshi>

";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support connecting hosts from different subnets? (openib BTL)";
$anchor[] = "ib-router";
$a[] = "Yes.

When using InfiniBand, Open MPI supports host communication between
separate subnets using the Mellanox IB-Router.

The support for IB-Router is available starting with Open MPI v1.10.3.

To enable routing over IB, follow these steps:

<ol>
<li> Configure Open MPI with [--enable-openib-rdmacm-ibaddr].</li>
<li> Ensure to use an Open SM with support for IB-Router (available in
MLNX_OFED starting version 3.3).</li>
<li> Select to use [rdmacm] with the [openib] BTL from the [mpirun]
command line.</li>
<li> Set the [btl_openib_allow_different_subnets] MCA parameter to 1
(it is 0 by default).</li>
<li> Set the [btl_openib_gid_index] MCA parameter to 1.</li>
</ol>

For example, to run the IMB benchmark on host1 and host2 which are on
separate subents (i.e., they have have different subnet_prefix
values), use the following command line:

<geshi bash>
shell$ mpirun -np 2 --display-map --map-by node -H host1,host2 \
    --mca pml ob1 \
    --mca btl self,sm,openib \
    --mca btl_openib_cpc_include rdmacm \
    --mca btl_openib_if_include mlx5_0:1 \
    --mca btl_openib_gid_index 1 \
    --mca btl_openib_allow_different_subnets 1 \
    ./IMB/src/IMB-MPI1 pingpong
</geshi>

$note The [rdmacm] CPC cannot be used unless the first QP is per-peer.
If the default value of [btl_openib_receive_queues] is to use only SRQ
QPs, please set the first QP in the list to a per-peer QP.

Please see <a href=\"#ib-receive-queues\">this FAQ entry</a> for more
information on this MCA parameter.";
