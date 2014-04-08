<?php
$q[] = "I'm a sysadmin; what do I care about Open MPI?";

$anchor[] = "sysadmin-general";

$a[] = "Several members of the Open MPI team have strong system
administrator backgrounds; we recognize the value of having software
that is friendly to system administrators.  Here are some of the reasons
that Open MPI is attractive for system administrators:

<ul>
<li> Simple, standards-based installation
<li> Help reduce the number of MPI installations
<li> Ability to set system-level and user-level parameters
<li> Scriptable information sources about the Open MPI installation
</ul>

See the rest of the questions in the FAQ section for more details.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What hardware / software / run-time environments / networks
does Open MPI support?";

$anchor[] = "supported-systems";

$a[] = "See <a href=\"./?category=supported-systems\">this FAQ
category</a> for more information";

/////////////////////////////////////////////////////////////////////////

$q[] = "Do I need multiple Open MPI installations?";

$anchor[] = "multiple-installs";

$a[] = "Yes and no.  

Open MPI can handle a variety of different run-time environments
(e.g., rsh/ssh, SLURM, PBS, etc.) and a variety of different
interconnection networks (e.g., ethernet, Myrinet, Infiniband, etc.)
in a single installation.  Specifically: because Open MPI is
fundamentally powered by a component architecture, plug-ins for all
these different run-time systems and interconnect networks can be
installed in a single installation tree.  The relevant plug-ins will
only be used in the environments where they make sense.

Hence, there is no need to have one MPI installation for Myrinet, one
MPI installation for Ethernet, one MPI installation for PBS, one MPI
installation for [rsh], etc.  Open MPI can handle all of these in a
single installation.

However, there are some issues that Open MPI cannot solve.  Binary
compatibility between different compilers is such an issue.  Let's
examine this in a per-language basis (be sure see the big caveat at
the end):

<ul>

<li> *C:* Most C compilers are fairly compatible, such that if you compile
Open MPI with one C library and link it to an application that was
compiled with a different C compiler, everything \"should just work.\"
As such, a single installation of Open MPI should work for most C MPI
applications.

<li> *C++:* The same is not necessarily true for C++.  Most of Open
MPI's C++ code is simply the MPI C++ bindings, and in the default
build, they are inlined C++ code, meaning that they should compile on
any C++ compiler.  Hence, you _should_ be able to have one Open MPI
installation for multiple different C++ compilers (we'd like to hear
feedback either way).  That being said, some of the top-level Open MPI
executables are written in C++ (e.g., [mpicc], [ompi_info], etc.).  As
such, these applications _may_ require having the C++ run-time support
libraries of whatever compiler they were created with in order to run
properly.  Specifically, if you compile Open MPI with the XYZ C/C++
compiler, you may need to have the XYC C++ run-time libraries
installed everywhere you want to run [mpicc] or [oompi_info].

<li> *Fortran 77:* Fortran 77 compilers do something called \"symbol
mangling,\" meaning that they change the names of global variables,
subroutines, and functions.  There are 4 common name mangling schemes
in use by Fortran 77 compilers.  On many systems (e.g., Linux), Open
MPI will automatically support all 4 schemes.  As such, a single Open
MPI installation _should_ just work with multiple different Fortran
compilers.  However, on some systems, this is not possible (e.g., OS
X), and Open MPI will only support the name mangling scheme of the
Fortran 77 compiler that was identified during [configure].

Also, there are two notable exceptions that do *not* work across
Fortran compilers that are \"different enough\":

<ol>
<li> The C constants [MPI_F_STATUS_IGNORE] and [MPI_F_STATUSES_IGNORE]
     will only compare properly to Fortran applications that were
     created with Fortran compilers that that use the same
     name-mangling scheme as the Fortran compiler that Open MPI was
     configured with.

<li> Fortran compilers may have different values for the logical
     [.TRUE.] constant.  As such, any MPI function that uses the
     fortran [LOGICAL] type may only get [.TRUE.] values back that
     correspond to the the [.TRUE.] value of the Fortran compiler that
     Open MPI was configured with.
</ol>

<li> *Fortran 90:* Similar to C++, linking object files from different
Fortran 90 compilers is not likely to work.  The F90 MPI module that
Open MPI creates will likely only work with the Fortran 90 compiler
that was identified during [configure].

</ul>

The big caveat to all of this is that Open MPI will only work with
different compilers *if all the datatype sizes are the same.*  For
example, even though Open MPI supports all 4 name mangling schemes,
the size of the Fortran [LOGICAL] type may be 1 byte in some compilers
and 4 bytes in others.  This will likely cause Open MPI to perform
unpredictably.

The bottom line is that Open MPI can support all manner of run-time
systems and interconnects in a single installation, but supporting
multiple compilers \"sort of\" works (i.e., is subject to trial and
error) in some cases, and definitely does not work in other cases.
There's unfortunately little that we can do about this -- it's a
compiler compatibility issue, and one that compiler authors have
little incentive to resolve.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What are MCA Parameters?  Why would I set them?";

$anchor[] = "setting-global-mca-params";

$a[] = "MCA parameters are a way to tweak Open MPI's behavior at
run-time.  For example, MCA parameters can specify:

<ul>
<li> Which interconnect networks to use
<li> Which interconnect networks *not* to use
<li> The size different between eager sends and rendezvous protocol
sends
<li> How many registered buffers to pre-pin (e.g., for GM or mVAPI)
<li> The size of the pre-pinned registered buffers
<li> ...etc.
</ul>

It can be quite valuable for a system administrator to play with such
values a bit and find an \"optimal\" setting for a particular
operating environment.  These values can then be set in a global text
file that all users will, by default, inherit when then run Open MPI
jobs.

For example, say that you have a cluster with 2 ethernet networks --
one for NFS and other system-level operations, and one for MPI jobs.
The system administrator can tell Open MPI to not use the NFS TCP
network at a system level, such that when users invoke [mpirun] or
[mpiexec] to launch their jobs, they will automatically only be using
the network meant for MPI jobs.

See <a href=\"./?category=tuning\">the run-time tuning FAQ
category</a> for information how to set global MCA parameters.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Do my users need to have their own installation of Open MPI?";

$anchor[] = "multiple-installs-for-users";

$a[] = "Usually not.  It is typically sufficient for a single Open MPI
installation (or perhaps a small number of Open MPI installations,
depending on compiler interoperability) to serve an entire parallel
operating environment.

Indeed, a system-wide Open MPI installation can be customized on a
per-user basis in two important ways:

<ul>
<li> *Per-user MCA parameters:* Each user can set their own set of MCA
parameters, potentially overriding system-wide defaults.
<li> *Per-user plug-ins:* Users can install their own Open MPI
plug-ins under [\$HOME/.openmpi/components].  Hence, developers can
experiment with new components without de-stabilizing the rest of the
users on the system.  Or power users can download 3rd party components
(perhaps even research-quality components) without affecting other users.
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "I have power users who will want to override my global MCA
parameters; is this possible?";

$anchor[] = "override-global-mca-params";

$a[] = "Absolutely.

See <a href=\"./?category=tuning\">the run-time tuning FAQ
category</a> for information how to set MCA parameters, both at the
system level and on a per-user (or per-MPI-job) basis.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What MCA parameters should I, the system administrator, set?";

$anchor[] = "sysadmin-mca-params";

$a[] = "This is a difficult question and depends on both your specific
parallel setup and the applications that typically run there.

The best thing to do is to use the [ompi_info] command to see what
parameters are available and relevant to you.  Specifically,
[ompi_info] can be used to show all the parameters that are available
for each plug-in.  Two common places that system administrators like
to tweak are:

<ul>

<li> *Only allow specific networks:* Say you have a cluster with a
high-speed interconnect (such as Myrinet or Infiniband) and an
ethernet network.  The high-speed network is intended for MPI jobs;
the ethernet network is intended for NFS and other
administrative-level jobs.  In this case, you can simply turn off Open
MPI's TCP support.  The \"btl\" framework contains Open MPI's network
support; in this case, you want to disable the [tcp] plug-in.  You can
do this by adding the following line in the file
[\$prefix/etc/openmpi-mca-params.conf]:

<faqcode>
btl = ^tcp
</faqcode>

This tells Open MPI to load all BTL components *except* [tcp].

Consider another example: your cluster has two TCP networks, one for
NFS and administration-level jobs, and another for MPI jobs.  You can
tell Open MPI to ignore the TCP network used by NFS by adding the
following line in the file [\$prefix/etc/openmpi-mca-params.conf]:

<faqcode>
btl_tcp_if_exclude = lo,eth0
</faqcode>

The value of this parameter is the device names to exclude.  In this
case, we're excluding [lo] (localhost, because Open MPI has its own
internal loopback device) and [eth0].

<li> *Tune the parameters for specific networks:* Each network plug-in
has a variety of different tunable parameters.  Use the [ompi_info]
command to see what is available.  You show _all_ available parameters
with:

<faqcode>
shell$ ompi_info --param all all
</faqcode>

Beware: there are _many_ variables available.  You can limit the
output by showing all the parameters in a specific framework or in a
specific plug-in with the command line parameters:

<faqcode>
shell$ ompi_info --param btl all
</faqcode>

Shows all the parameters of all BTL components, and:

<faqcode>
shell$ ompi_info --param btl mvapi
</faqcode>

Shows all the parameters of just the [mvapi] BTL component.

</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "I just added a new plugin to my Open MPI installation; do I need to recompile all my MPI apps?";

$anchor[] = "new-plugin";

$a[] = "If your installation of Open MPI uses shared libraries and
components are standalone plug-in files, then no.  If you add a new
component (such as support for a new network), Open MPI will simply
open the new plugin at run-time -- your applications do not need to be
recompiled or re-linked.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I just upgraded my Myrinet|Infiniband network; do I need to
recompile all my MPI apps?";

$anchor[] = "new-network-version";

$a[] = "If your installation of Open MPI uses shared libraries and
components are standalone plug-in files, then no.  You simply need to
recompile the Open MPI components that support that network and
re-install them.  

More specifically, Open MPI shifts the dependency on the underlying
network away from the MPI applications and to the Open MPI plug-ins.
This is a major advantage over many other MPI implementations.

MPI applications will simply open the new plugin when they run.";

/////////////////////////////////////////////////////////////////////////

$q[] = "We just upgraded our version of Open MPI; do I need to
recompile all my MPI apps?";

$anchor[] = "new-openmpi-version";

$a[] = "It is unlikely.  Most MPI applications solely interact with
Open MPI through the standardized MPI API and the constant values it
publishes in [mpi.h].  The MPI-2 API will not change until the MPI
Forum changes it.

We will try hard to make Open MPI's [mpi.h] stable such that the
values will not change from release-to-release.  While we cannot
guarantee that they will stay the same forever, we'll try hard to make
it so.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I have an MPI application compiled for another MPI; will it
work with Open MPI?";

$anchor[] = "app-for-another-mpi";

$a[] = "It is strongly unlikely.  Open MPI does not attempt to
interface to other MPI implementations, nor executables that were
compiled for them.  Sorry!

MPI applications need to be compiled and linked with Open MPI in order
to run under Open MPI.";
