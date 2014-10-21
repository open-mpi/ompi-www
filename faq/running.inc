<?php
include_once("$topdir/software/ompi/current/version.inc");

$q[] = "What pre-requisites are necessary for running an Open MPI job?";

$anchor[] = "run-prereqs";

$a[] = "In general, Open MPI requires that its executables are in your
[PATH] on every node that you will run on and if Open MPI was compiled
as dynamic libraries (which is the default), the directory where its
libraries are located must be in your [LD_LIBRARY_PATH] on every node.

Specifically, if Open MPI was installed with a prefix of /opt/openmpi,
then the following should be in your [PATH] and [LD_LIBRARY_PATH]

<faqcode>
PATH:            /opt/openmpi/bin
LD_LIBRARY_PATH: /opt/openmpi/lib
</faqcode>

Depending on your environment, you may need to set these values in
your shell startup files (e.g., [.profile], [.cshrc], etc.).

*NOTE:* there are exceptions to this rule -- notably <a
href=\"#mpirun-prefix\">the [--prefix] option to mpirun</a>.

See <a href=\"#adding-ompi-to-path\">this FAQ entry</a> for more
details on how to add Open MPI to your [PATH] and [LD_LIBRARY_PATH].

Additionally, Open MPI requires that jobs can be started on remote
nodes without any input from the keyboard.  For example, if using
[rsh] or [ssh] as the remote agent, you must have your environment
setup to allow execution on remote nodes without entering a password
or passphrase.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What ABI guarantees does Open MPI provide?";

$anchor[] = "abi-guarantees";

$a[] = "Open MPI's versioning and ABI scheme <a
href=\"http://www.open-mpi.org/software/ompi/versions/\">is described
here</a>, but is summarized here in this FAQ entry for convenience.

Open MPI provided forward application binary interface (ABI)
compatibility for MPI applications starting with v1.3.2.  Prior to
that version, no ABI guarantees were provided.

<blockquote>
<font color=red><strong>NOTE:</strong></font> Prior to v1.3.2, subtle
and strange failures are almost guaranteed to occur if applications
were compiled and linked against shared libraries from one version of
Open MPI and then run with another.  The Open MPI team strongly
discourages making any ABI assumptions before v1.3.2.
</blockquote>

<blockquote>
<font color=red><strong>NOTE:</strong></font> ABI for the \"use mpi\"
Fortran interface was inadvertantly broken in the v1.6.3 release, and
was restored in the v1.6.4 release.  Any Fortran applications that
utilize the \"use mpi\" MPI interface that were compiled and linked
against the v1.6.3 release will not be link-time compatible with other
releases in the 1.5.x / 1.6.x series.  Such applications remain source
compatible, however, and can be recompiled/re-linked with other Open
MPI releases.
</blockquote>

Starting with v1.3.2, Open MPI provides forward ABI compatibility --
with respect to the MPI API only -- in all versions of a given <a
href=\"http://www.open-mpi.org/software/ompi/versions/\">feature
release series</a> and its corresponding <a
href=\"http://www.open-mpi.org/software/ompi/versions/\">super stable
series</a>.  For example, on a single platform, an MPI application
linked against Open MPI v1.3.2 shared libraries can be updated to
point to the shared libraries in any successive v1.3.x or v1.4 release
and still work properly (e.g., via the LD_LIBRARY_PATH environment
variable or other operating system mechanism).

For the v1.5 series, this means that all releases of v1.5.x and v1.6.x
will be ABI compatible, per the above definition.

Open MPI reserves the right to break ABI compatibility at new feature
release series.  For example, the same MPI application from above
(linked against Open MPI v1.3.2 shared libraries) will *not* work with
Open MPI v1.5 shared libraries.  Similarly, MPI applications
compiled/linked against Open MPI 1.6.x will not be ABI compatible with
Open MPI 1.7.x";

/////////////////////////////////////////////////////////////////////////

$q[] = "Do I need a common filesystem on all my nodes?";

$anchor[] = "do-i-need-a-common-filesystem";

$a[] = "No, but it certainly makes life easier if you do.

A common environment to run Open MPI is in a \"Beowulf\"-class or
similar cluster (e.g., a bunch of 1U servers in a bunch of racks).
Simply stated, Open MPI can run on a group of servers or workstations
connected by a network.  As mentioned above, there are several
prerequisites, however (for example, you typically must have an
account on all the machines, you can [ssh] or [ssh] between the nodes
without using a password etc.).

Regardless of whether Open MPI is installed on a shared / networked
filesystem or independently on each node, it is usually easiest if
Open MPI is available in the same filesystem location on every node.
For example, if you install Open MPI to [/opt/openmpi-$ver_current] on
one node, ensure that it is available in [/opt/openmpi-$ver_current]
on _all_ nodes.

<a href=\"./?category=building#where-to-install\">This FAQ entry</a>
has a bunch more information about installation locations for Open
MPI.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I add Open MPI to my <code>PATH</code> and <code>LD_LIBRARY_PATH</code>?";

$anchor[] = "adding-ompi-to-path";

$a[] = "Open MPI _must_ be able to find its executables in your [PATH]
on every node (if Open MPI was compiled as dynamic libraries, then its
library path must appear in [LD_LIBRARY_PATH] as well).  As such, your
configuration/initialization files need to add Open MPI to your [PATH]
/ [LD_LIBRARY_PATH] properly.

How to do this may be highly dependent upon your local configuration,
so you may need to consult with your local system administrator.  Some
system administrators take care of these details for you, some don't.
YMMV.  Some common examples are included below, however.

You must have at least a minimum understanding of how your shell works
to get Open MPI in your [PATH] / [LD_LIBRARY_PATH] properly.  Note
that Open MPI must be added to your [PATH] and [LD_LIBRARY_PATH] in
_two_ situations: (1) when you login to an interactive shell,
(2) and when you login to non-interactive shells on remote nodes.

<UL>

<LI> If (1) is not configured properly, executables like [mpicc] will
not be found, and it is typically obvious what is wrong.  The Open MPI
executable directory can manually be added to the [PATH], or the
user's startup files can be modified such that the Open MPI
executables are added to the [PATH] every login.  This latter approach
is preferred.

All shells have some kind of script file that is executed at login
time to set things like [PATH] and [LD_LIBRARY_PATH] and perform other
environmental setup tasks.  This startup file is the one that needs to
be edited to add Open MPI to the [PATH] and [LD_LIBRARY_PATH]. Consult
the manual page for your shell for specific details (some shells are
picky about the permissions of the startup file, for example).  The
table below lists some common shells and the startup files that they
read/execute upon login:

<center>
<table border=1 cellpadding=5>
<tr>
<th>Shell</th>
<th>Interactive login startup file</th>
</tr>

<tr>
<td>sh (Bourne shell, or bash named \"[sh]\")</td>
<td> [.profile] </td>
</tr>

<tr>
<td>csh</td>
<td> [.cshrc] followed by [.login] </td>
</tr>

<tr>
<td>tcsh</td>
<td> [.tcshrc] if it exists, [.cshrc] if it does not, followed by
[.login] </tr>
</tr>

<tr>
<td>bash</td>
<td> [.bash_profile] if it exists, or [.bash_login] if it exists, or
[.profile] if it exists (in that order).  Note that some Linux
distributions automatically come with [.bash_profile] scripts for
users that automatically execute [.bashrc] as well.  Consult the bash
man page for more information.</td>
</tr>

</table>
</center>

<LI> If (2) is not configured properly, executables like [mpirun] will
not function properly, and it can be somewhat confusing to figure out
(particularly for [bash] users).

<P> The startup files in question here are the ones that are
automatically executed for a non-interactive login on a remote node
(e.g., \"[rsh othernode ps]\").  Note that not all shells support
this, and that some shells use different files for this than listed in
(1).  Some shells will supersede (2) with (1).  That is, fulfilling
(2) _may_ automatically fulfill (1).  The following table lists some
common shells and the startup file that is automatically executed,
either by Open MPI or by the shell itself:

<p>
<center>
<table border=1 cellpadding=5>
<tr>
<th>Shell</th>
<th>Non-interactive login startup file</th>
</tr>

<tr>
<td>sh (Bourne or bash named \"[sh]\")</td>
<td>This shell does not execute any file automatically, so Open MPI
will execute the [.profile] script before invoking Open MPI
executables on remote nodes</td>
</tr>

<tr>
<td>csh</td>
<td> [.cshrc] </td>
</tr>

<tr>
<td>tcsh</td>
<td> [.tcshrc] if it exists, or [.cshrc] if it does not</td>
</tr>

<tr>
<td>bash</td>
<td> [.bashrc] if it exists</td>
</tr>

</table>
</center>

</ul>";

$bogus = "
<font color=red><strong>NOTE:</strong></font> OSCAR users should
already have this step taken care of.  OSCAR uses a package called
[switcher] to setup the [PATH] and [LD_LIBRARY_PATH] for users.  You
may need to set your personal default to use Open MPI if it is not
already the system default.  Consult the OSCAR User's Manual for more
details.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What if I can't modify my <code>PATH</code> and/or <code>LD_LIBRARY_PATH</code>?";

$anchor[] = "mpirun-prefix";

$a[] ="There are some situations where you cannot modify the [PATH] or
[LD_LIBRARY_PATH] -- e.g., some ISV application prefer to hide all
parallelism from the user, and therefore do not want to make the user
modify their shell startup files.  Another case is where you want a
single user to be able to launch multiple MPI jobs simultaneously,
each with a different MPI implementation.  Hence, setting shell
startup files to point to one MPI implementation would be problematic.

In such cases, you have two options:

<ol>
<li> Use [mpirun]'s [--prefix] command line option (described
below).</li>
<li> Modify the wrapper compilers to include directives to include
run-time search locations for the Open MPI libraries (<a
href=\"?category=mpi-apps#why-no-rpath\">see this FAQ entry</a>)</li> 
</ol>

[mpirun]'s [--prefix] command line option takes as an argument the
top-level directory where Open MPI was installed.  While relative
directory names are possible, they can become ambiguous depending on
the job launcher used; using absolute directory names are strongly
recommended.

For example, say that Open MPI was installed into
[/opt/openmpi-$ver_current].  You would use the [--prefix] option like
this:

" . faqcode("mpirun --prefix /opt/openmpi-$ver_current -np 4 a.out") . "

This will prefix the [PATH] and [LD_LIBRARY_PATH] on both the local
and remote hosts with [/opt/openmpi-$ver_current/bin] and
[/opt/openmpi-$ver_current/lib], respectively.  This is _usually_
unnecessary when using resource managers to launch jobs (e.g., SLURM,
Torque, etc.) because they tend to copy the entire local environment
-- to include the [PATH] and [LD_LIBRARY_PATH] -- to remote nodes
before execution.  As such, if [PATH] and [LD_LIBRARY_PATH] are set
properly on the local node, the resource manager will automatically
propagate those values out to remote nodes.  The [--prefix] option is
therefore usually most useful in [rsh] or [ssh]-based environments (or
similar).

Beginning with the 1.2 series, it is possible to make this the default
behavior by passing to [configure] the flag
[--enable-mpirun-prefix-by-default].  This will make [mpirun] behave
exactly the same as \"[mpirun --prefix \$prefix] ...\", where [\$prefix] is
the value given to [--prefix] in [configure].

Finally, note that specifying the absolute pathname to [mpirun] is
equivalent to using the [--prefix] argument.  For example, the
following is equivalent to the above command line that uses [--prefix]:

" . faqcode("/opt/openmpi-$ver_current/bin/mpirun -np 4 a.out");

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I launch Open MPI parallel jobs?";

$anchor[] = "simple-launch";

$a[] = "Similar to many MPI implementations, Open MPI provides the
commands [mpirun] and [mpiexec] to launch MPI jobs.  Several of the
questions in this FAQ category deal with using these commands.

Note, however, that these commands are exactly identical.
Specifically, they are symbolic links to a common back-end launcher
command named [orterun] (Open MPI's run-time environment interaction
layer is named the Open Run-Time Environment, or ORTE -- hence
[<strong>orte</strong>run]).

As such, the rest of this FAQ usually refers only to [mpirun], even
though the same discussions also apply to [mpiexec] and [orterun]
(because they are all, in fact, the same command).";

/////////////////////////////////////////////////////////////////////////

$c1 = array();
$o1 = array();
$c1[] = "cat my_hostfile";
$o1[] = "host01.example.com
host02.example.com";
$c1[] = "mpirun --hostfile my_hostfile -np 4 my_parallel_application";

$q[] = "How do I run a simple SPMD MPI job?";

$anchor[] = "simple-spmd-run";

$a[] = "Open MPI provides both [mpirun] and [mpiexec] commands.  A simple way
to start a single program, multiple data (SPMD) application in
parallel is:

" . faqcode("mpirun -np 4 my_parallel_application") . "

This starts a four-process parallel application, running four copies
of the executable named [my_parallel_application].

The [rsh] starter component accepts the [--hostfile] (also known as
[--machinefile]) option to indicate which hosts to start the processes
on:

" . faqcode($c1, $o1) . "

This command will launch one copy of [my_parallel_application] on each
of [host01.example.com] and [host02.example.com].

More information about the [--hostfile] option, and hostfiles in
general, is available in " . faqlink("#mpirun-hostfile", "this FAQ
entry") . ".

Note, however, that not all environments require a hostfile.  For
example, Open MPI will automatically detect when it is running in
batch / scheduled environments (such as SGE, PBS/Torque, SLURM, and
LoadLeveler), and will use host information provided by those systems.

Also note that if using a launcher that requires a hostfile and no
hostfile is specified, all processes are launched on the local host.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I run an MPMD MPI job?";

$anchor[] = "mpmd-run";

$a[] = "Both the [mpirun] and [mpiexec] commands support multiple
program, multiple data (MPMD) style launches, either from the command
line or from a file.  For example:

" . faqcode("mpirun -np 2 a.out : -np 2 b.out") . "

This will launch a single parallel application, but the first two
processes will be instances of the [a.out] executable, and the second
two processes will be instances of the [b.out] executable.  In MPI
terms, this will be a single [MPI_COMM_WORLD], but the [a.out]
processes will be ranks 0 and 1 in [MPI_COMM_WORLD], while the [b.out]
processes will be ranks 2 and 3 in [MPI_COMM_WORLD].

[mpirun] (and [mpiexec]) can also accept a parallel application
specified in a file instead of on the command line.  For example:

" . faqcode("mpirun --app my_appfile") . "

where the file [my_appfile] contains the following:

<faqcode>
# Comments are supported; comments begin with #
# Application context files specify each sub-application in the
# parallel job, one per line.  The first sub-application is the 2
# a.out processes:
-np 2 a.out
# The second sub-application is the 2 b.out processes:
-np 2 b.out
</faqcode>

This will result in the same behavior as running [a.out] and [b.out]
from the command line.

Note that [mpirun] and [mpiexec] are identical in command-line options
and behavior; using the above command lines with [mpiexec] instead of
[mpirun] will result in the same behavior.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I specify the hosts on which my MPI job runs?";

$anchor[] = "mpirun-specify-hosts";

$a[] = "There are three general mechanisms:

<ol>
<li> The [--hostfile] option to [mpirun].  Use this option to specify
a list of hosts on which to run.  Note that for compatibility with
other MPI implementations, [--machinefile] is a synonym for
[--hostfile].  See " . faqlink("#mpirun-hostfile", "this FAQ entry")
. " for more information about the [--hostfile] option.</li>
<li> The [--host] option to [mpirun] can be used to specify a list of
hosts on which to run on the command line.  See "
. faqlink("#mpirun-host", "this FAQ entry") . " for more information
about the [--host] option.</li>
<li> If you are running in a scheduled environment (e.g., in a SLURM,
Torque, or LSF job), Open MPI will automatically get the lists of
hosts from the scheduler.</li>
</ol>

<font color=\"red\"><strong>NOTE:</strong></font> The specification
of hosts using any of the above methods has nothing to do with the
network interfaces that are used for MPI traffic.  The list of hosts
is <em>only</em> used for specifying which hosts on which to launch
MPI processes.

";

/////////////////////////////////////////////////////////////////////////

$q[] = "I can run ompi_info and launch MPI jobs on a single host, but not across multiple hosts.  Why?";

$anchor[] = "missing-prereqs";

$a[] = "(you should probably also see " . faqlink("#diagnose-multi-host-problems", "this FAQ entry, too") . ")

If you can run [ompi_info] and possibly even launch MPI
processes locally, but fail to launch MPI processes on remote hosts,
it is likely that you do not have your [PATH] and/or [LD_LIBRARY_PATH]
setup properly on the remote nodes.

Specifically, the Open MPI commands usually run properly even if
[LD_LIBRARY_PATH] is not set properly because they encode the
Open MPI library location in their executables and search there by
default.  Hence, running [ompi_info] (and friends) usually works, even
in some improperly setup environments.

However, Open MPI's wrapper compilers do _not_ encode the Open MPI
library locations in MPI executables by default (the wrappers only
specify a bare minimum of flags necessary to create MPI executables;
we consider any flags beyond this bare minimum set a local policy
decision).  Hence, attempting to launch MPI executables in
environments where [LD_LIBRARY_PATH] is either not set or was set
improperly may result in messages about [libmpi.so] not being found.

<a href=\"?category=mpi-apps#override-wrappers-after-v1.0\">You can
change Open MPI's wrapper compiler behavior</a> to specify the run-time
location of Open MPI's libraries, if you wish.

<a href=\"#mpirun-prefix\">Depending on how Open MPI was configured
and/or invoked</a>, it may even be possible to run MPI applications in
environments where [PATH] and/or [LD_LIBRARY_PATH] is not set, or is
set improperly.  This can be desirable for environments where multiple
MPI implementations are installed, such as multiple versions of Open
MPI.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How can I diagnose problems when running across multiple hosts?";

$anchor[] = "diagnose-multi-host-problems";

$c1 = array();
$o1 = array();
$c1[] = "ssh remotehost hostname";
$o1[] = "remotehost";

$c2 = array();
$o2 = array();
$c2[] = "ssh remotehost env | grep -i path";
$o2[] = "PATH=...path on the remote host...
LD_LIBRARY_PATH=...LD library path on the remote host...";

$c3 = array();
$o3 = array();
$c3[] = "mpirun --host remotehost hostname";
$o3[] = "remotehost";
$c3[] = "mpirun --host remotehost,otherhost hostname";
$o3[] = "remotehost
otherhost";

$c4 = array();
$o4 = array();
$c4[] = "mpirun --host remotehost,otherhost hello_c";
$o4[] = "Hello, world, I am 0 of 1, (Open MPI v1.7.5, package: Open MPI jsquyres@builder.cisco.com Distribution, ident: 1.7.5, Mar 20, 2014, 99)
Hello, world, I am 1 of 1, (Open MPI v1.7.5, package: Open MPI jsquyres@builder.cisco.com Distribution, ident: 1.7.5, Mar 20, 2014, 99)";

$c5 = array();
$o5 = array();
$c5[] = "mpirun --host remotehost,otherhost ring_c";
$o5[] = "Process 0 sending 10 to 0, tag 201 (1 processes in ring)
Process 0 sent to 0
Process 0 decremented value: 9
Process 0 decremented value: 8
Process 0 decremented value: 7
Process 0 decremented value: 6
Process 0 decremented value: 5
Process 0 decremented value: 4
Process 0 decremented value: 3
Process 0 decremented value: 2
Process 0 decremented value: 1
Process 0 decremented value: 0
Process 0 exiting";

$a[] = "In addition to what is mentioned in <a href=\"#missing-prereqs\">this
FAQ entry</a>, when you are able to run MPI jobs on a single host, but
fail to run them across multiple hosts, try the following:

<ol>

<li> Ensure that your launcher is able to launch across multiple
hosts.  For example, if you are using [ssh], try to [ssh] to each
remote host and ensuring that you are not prompted for a password.
For example:

" . faqcode($c1, $o1) . "

If you are unable to launch across multiple hosts, check that your SSH
keys are setup properly.  Or, if you are running in a managed
environment, such as in a SLURM, Torque, or other job launcher, check
that you have reserved enough hosts, are running in an allocated job,
etc.</li>

<li> Ensure that your PATH and LD_LIBRARY_PATH are set correctly on
each remote host on which you are trying to run.  For example, with
[ssh]:

" . faqcode($c2, $o2) . "

If your PATH or LD_LIBRARY_PATH are not set properly, see "
. faqlink("#run-prereqs", "this FAQ entry") . " for the correct
values.  Keep in mind that it is fine to have multiple Open MPI
installations installed on a machine; the *first* Open MPI
installation found by PATH and LD_LIBARY_PATH is the one that
matters.</li>

<li>Run a simple, non-MPI job across multiple hosts.  This verifies
that the Open MPI run-time system is functioning properly across
multiple hosts.  For example, try running the [hostname] command:

" . faqcode($c3, $o3) . "

If you are unable to run non-MPI jobs across multiple hosts, check
for common problems such as:

<ol>
<li> Check that your non-interactive shell setup on each remote host
to ensure that it is setting up the PATH and LD_LIBRARY_PATH properly.</li>
<li> Check that Open MPI is finding and launching the correct version of Open MPI on the remote hosts. </li>
<li> Ensure that you have firewalling disabled between hosts (Open MPI
opens random TCP and sometimes random UDP ports between hosts in a
single MPI job).</li>
<li> Try running with the [plm_base_verbose] MCA parameter at level
10, which will enable extra debugging output to see how Open MPI
launches on remote hosts.  For example: [mpirun --mca plm_base_verbose
10 --host remotehost hostname] </li>
</ol>

<li>Now run a simple MPI job across multiple hosts that does not
involve MPI communications.  The \"hello_c\" program in the [examples]
directory in the Open MPI distribution is a good choice.  This
verifies that the MPI subsystem is able to initialize and terminate
properly.  For example:

" . faqcode($c4, $o4) . "

If you are unable to run simple, non-communication MPI jobs, this can
indicate that your Open MPI installation is unable to initialize
properly on remote hosts.  Double check your non-interactive login
setup on remote hosts.</li>

<li>Now run a simple MPI job across multiple hosts that does does
some simple MPI communications.  The \"ring_c\" program in the
[examples] directory in the Open MPI distribution is a good choice.
This verifies that the MPI subsystem is able to pass MPI traffic
across your network.  For example:

" . faqcode($c5, $o5) . "

If you are unable to run simple MPI jobs across multiple hosts, this
may indicate a problem with the network(s) that Open MPI is trying to
use for MPI communications.  Try limiting the networks that it uses, and/or exploring levels 1 through 3 MCA parameters for the communications module that you are using.  For example, if you're using the TCP BTL, see the output of [ompi_info --level 3 --param btl tcp] .</li>

</ol>";

/////////////////////////////////////////////////////////////////////////

# Missing libraries FAQ items addressing errors of the form:
#
#   orted: error while loading shared libraries: libimf.so: cannot open shared
#       object file: No such file or directory
#  

# Compiler => Compiler library linked to orted
$compilers["Intel"] = "libimf.so";
$compilers["PGI"] = "libpgc.so";
$compilers["Pathscale"] = "libmv.so";

foreach (array_keys($compilers) as $compiler) { 

    $dso_library = $compilers[$compiler];
    $compiler_lc = strtolower($compiler);
    $article = get_article($compiler);

    $v1 = array();
    $v1[] = new faqcode_val("mpirun -np 1 --host node1.example.com mpi_hello",
     "orted: error while loading shared libraries: $dso_library: cannot open shared object file: No such file or directory
--------------------------------------------------------------------------
A daemon (pid 11893) died unexpectedly with status 127 while
attempting to launch so we are aborting.
[...more error messages...]");

    $v2 = array();
    $v2[] = new faqcode_val("cd \$HOME");
    $v2[] = new faqcode_val("mpicc mpi_hello.c -o mpi_hello");
    $v2[] = new faqcode_val("./mpi_hello", "Hello world, I am 0 of 1.");
    $v2[] = new faqcode_val("ssh node1.example.com", "Welcome to node1.");
    $v2[] = new faqcode_val("./mpi_hello", "Hello world, I am 0 of 1.", "node1");
    $v2[] = new faqcode_val("exit", "", "node1");
    $v2[] = new faqcode_val("ssh node1.example.com \$HOME/mpi_hello",
      "mpi_hello: error while loading shared libraries: $dso_library: cannot open shared object file: No such file or directory");

    $q[] = "When I build Open MPI with the $compiler compilers, I get warnings
about \"orted\" or my MPI application not finding $dso_library.  What do I do?";

    $anchor[] = "$compiler_lc-compilers-static";

    $a[] = "The problem is usually because the $compiler libraries cannot be
    found on the node where Open MPI is attempting to launch an MPI
executable.  For example:

" . faqcode_object($v1) . "

Open MPI first attempts to launch a \"helper\" daemon
(<code>orted</code>) on [node1.example.com], but it failed because one
of [orted]'s dependent libraries was not able to be found.  This
particular library, [$dso_library], is $article $compiler compiler library.  As
such, it is likely that the user did not setup the $compiler compiler
library in their environment properly on this node.

Double check that you have setup the $compiler compiler environment on the
target node, for both interactive and non-interactive logins.  It is a
common error to ensure that the $compiler compiler environment is setup
properly for _interactive_ logins, but not for
_non-interactive_ logins.  For example:

" . faqcode_object($v2) . "

The above example shows that running a trivial C program compiled by
the $compiler compilers works fine on both the head node and [node1] when
logging in interactively, but fails when run on [node1]
non-interactively.  Check your shell script startup files and verify
that the $compiler compiler environment is setup properly for
non-interactive logins.";

}

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I run non-MPI programs with <code>mpirun</code> / <code>mpiexec</code>?";

$anchor[] = "run-non-mpi-programs";

$a[] = "Yes.

Indeed, Open MPI's [mpirun] and [mpiexec] are actually synonyms for
our underlying launcher named [orterun] (i.e., the Open Run-Time
Environment layer in Open MPI, or ORTE).  So you can use [mpirun] and
[mpiexec] to launch any application.  For example:

" . faqcode("mpirun -np 2 --host a,b uptime") . "

This will launch a copy of the unix command [uptime] on the hosts [a]
and [b].

Other questions in the FAQ section deal with the specifics of the
[mpirun] command line interface; suffice it to say that it works
equally well for MPI and non-MPI applications.";

/////////////////////////////////////////////////////////////////////////

$c1 = array();
$o1 = array();
$c1[] = "hostname";
$o1[] = "my_desktop.secure-cluster.example.com";
$c1[] = "xhost +";
$c1[] = "mpirun -np 4 -x DISPLAY=my_desktop.secure-cluster.example.com a.out";

$c2 = array();
$o2 = array();
$c2[] = "hostname";
$o2[] = "my_desktop.secure-cluster.example.com";
$c2[] = "xhost +compute1 +compute2 +compute3 +compute4";
$o2[] = "compute1 being added to access control list
compute2 being added to access control list
compute3 being added to access control list
compute4 being added to access control list";
$c2[] = "mpirun -np 4 -x DISPLAY=my_desktop.secure-cluster.example.com a.out";

$q[] = "Can I run GUI applications with Open MPI?";

$anchor[] = "mpirun-gui";

$a[] = "Yes, but it will depend on your local setup and may require
additional setup.

In short: you will need to have X forwarding enabled from the remote
processes to the display where you want output to appear.  In a secure
environment, you can simply allow all X requests to be shown on the
target display and set the [DISPLAY] environment variable in all MPI
process' environments to the target display, perhaps something like
this:

" . faqcode($c1, $o1) . "

However, this technique is not generally suitable for unsecure
environments (because it allows anyone to read and write to your
display).  A slightly more secure way is to only allow X connections
from the nodes where your application will be running:

" . faqcode($c2, $o2) . "

(assuming that the four nodes you are running on are [compute1]
through [compute4]).

Other methods are available, but they involve sophisticated X
forwarding through mpirun and are generally more complicated than
desirable.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I run ncurses-based / curses-based / applications with
funky input schemes with Open MPI?";

$anchor[] = "mpirun-curses-readline";

$a[] = "Maybe.  But probably not.

Open MPI provides fairly sophisticated stdin / stdout / stderr
forwarding.  However, it does not work well with curses, ncurses,
readline, or other sophisticated I/O packages that generally require
direct control of the terminal.

Every application and I/O library is different -- you should try to
see if yours is supported.  But chances are that it won't work.

Sorry.  :-(";

/////////////////////////////////////////////////////////////////////////

$q[] = "What other options are available to <code>mpirun</code>?";

$anchor[] = "mpirun-options";

$a[] = "[mpirun] supports the \"--help\" option which provides a usage
message and a summary of the options that it supports.  It should be
considered the definitive list of what options are provided.

Several notable options are:

<ul>
<li> *--hostfile:* Specify a hostfile for launchers (such as the [rsh]
launcher) that need to be told on which hosts to start parallel
applications.  Note that for compatibility with other MPI
implementations, *--machinefile* is a synonym for *--hostfile*.</li>
<li> *--host:* Specify a host or list of hosts to run on (see <a
href=\"#mpirun-host\">this FAQ entry for more details</a>)</li>
<li> *--np* (or *-np*): Indicate the number of processes to
start.</li>
<li> *--mca* (or *-mca*): Set MCA parameters (see the <a
href=\"./?category=tuning\">Run-Time Tuning FAQ</a>)</li>
<li> *--wdir &lt;directory&gt;:* Set the working directory of the
started applications.  If not supplied, the current working directory
is assumed (or [\$HOME], if the current working directory does not
exist on all nodes).</li>
<li> *-x &lt;env-variable-name&gt;:* The name of an environment
variable to export to the parallel application.  The *-x* option can
be specified multiple times to export multiple environment
variables to the parallel application.</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$c1 = array();
$o1 = array();
$c1[] = "cat my_hostfile";
$o1[] = "host01.example.com
host02.example.com";
$c1[] = "mpirun --hostfile my_hostfile -np 4 my_parallel_application";

$c2 = array();
$o2 = array();
$c2[] = "cat my_hosts";
$o2[] = "node03";
$c2[] = "mpirun -np 1 --hostfile my_hosts hostname";

$c3 = array();
$o3 = array();
$c3[] = "cat my_hosts";
$o3[] = "node17";
$c3[] = "mpirun -np 1 --hostfile my_hosts hostname";

$c4 = array();
$o4 = array();
$c4[] = "cat my_hosts";
$o4[] = "node03";
$c4[] = "mpirun -np 4 --hostfile my_hosts hostname";

$c5 = array();
$o5 = array();
$c5[] = "cat my_hosts";
$o5[] = "node01.example.com
node02.example.com
node03.example.com";
$c5[] = "mpirun -np 3 --hostfile my_hosts hostname";

$c6 = array();
$o6 = array();
$c6[] = "cat hostfile_1";
$o6[] = "node01.example.com";
$c6[] = "cat hostfile_2";
$o6[] = "node02.example.com";
$c6[] = "mpirun -np 1 --hostfile hostfile_1 hostname : -np 1 --hostfile hostfile_2 uptime";
$o6[] = "node01.example.com
 06:11:45 up 1 day,  2:32,  0 users,  load average: 21.65, 20.85, 19.84";

$q[] = "How do I use the <code>--hostfile</code> option to <code>mpirun</code>?";

$anchor[] = "mpirun-hostfile";

$a[] = "The [--hostfile] option to [mpirun] takes a filename that
lists hosts on which to launch MPI processes.

<font color=\"red\"><strong>NOTE:</strong></font> The hosts listed in
a hostfile have _nothing_ to do with which network interfaces are used
for MPI communication.  They are _only_ used to specify on which hosts
to launch MPI processes.

Hostfiles [my_hostfile] are simple text files with hosts specified,
one per line.  Each host can also specify a default a maximum number
of _slots_ to be used on that host (i.e., the number of available
processors on that host).  Comments are also supported, and blank
lines are ignored.  For example:

<faqcode>
# This is an example hostfile.  Comments begin with #
#
# The following node is a single processor machine:
foo.example.com

# The following node is a dual-processor machine:
bar.example.com slots=2

# The following node is a quad-processor machine, and we absolutely
# want to disallow over-subscribing it:
yow.example.com slots=4 max-slots=4
</faqcode>

_slot_ and _max-slots_ are discussed more
" . faqlink("#mpirun-scheduling", "in this FAQ entry") . "

Hostfiles works in two different ways:

<ul> 

<li> *Exclusionary:* If a list of hosts to run on has been provided by
another source (e.g., by a hostfile or a batch scheduler such as
SLURM, PBS/Torque, SGE, etc.), the hosts provided by the hostfile must
be in the already-provided host list.  If the hostfile-specified nodes
are _not_ in the already-provided host list, [mpirun] will abort
without launching anything.

In this case, hostfiles act like an exclusionary filter -- they limit
the scope of where processes will be scheduled from the original list
of hosts to produce a final list of hosts.

For example, say that a scheduler job contains hosts [node01] through
[node04].  If you run:

" . faqcode($c2, $o2) . "

This will run a single copy of [hostname] on the host [node03].
However, if you run:

" . faqcode($c3, $o3) . "

This is an error (because [node17] is not listed in [my_hosts]);
[mpirun] will abort.

Finally, note that in exclusionary mode, processes will _only_ be
executed on the hostfile-specified hosts, even if it causes
oversubscription.  For example:

" . faqcode($c4, $o4) . "

This will launch 4 copies of [hostname] on host [node03].

<li> *Inclusionary:* If a list of hosts has _not_ been provided by
another source, then the hosts provided by the [--hostfile] option
will be used as the original and final host list.

In this case, [--hostfile] acts as an inclusionary agent; all
[--hostfile]-supplied hosts become available for scheduling processes.
For example (assume that you are *not* in a scheduling environment
where a list of nodes is being transparently supplied):

" . faqcode($c5, $o5) . "

This will launch a single copy of [hostname] on the hosts
[node01.example.com], [node02.example.com], and [node03.example.com].
</ul>

Note, too, that [--hostfile] is essentially a per-application switch.
Hence, if you specify multiple applications (as in an MPMD job),
[--hostfile] can be specified multiple times:

" .faqcode($c6, $o6) . "

Notice that [hostname] was launched on [node01.example.com] and
[uptime] was launched on host02.example.com.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I use the <code>--host</code> option to <code>mpirun</code>?";

$anchor[] = "mpirun-host";

$a[] = "The [--host] option to [mpirun] takes a comma-delimited list
of hosts on which to run.  For example:

" . faqcode("mpirun -np 3 --host a,b,c hostname") . "

Will launch one copy of [hostname] on hosts [a], [b], and [c].

<font color=\"red\"><strong>NOTE:</strong></font> The hosts specified
by the [--host] option have _nothing_ to do with which network
interfaces are used for MPI communication.  They are _only_ used to
specify on which hosts to launch MPI processes.

[--host] works in two different ways:

<ul> 

<li> *Exclusionary:* If a list of hosts to run on has been provided by
another source (e.g., by a hostfile or a batch scheduler such as
SLURM, PBS/Torque, SGE, etc.), the hosts provided by the [--host] option
must be in the already-provided host list.  If the [--host]-specified
nodes are _not_ in the already-provided host list, [mpirun] will abort
without launching anything.

In this case, the [--host] option acts like an exclusionary filter --
it limits the scope of where processes will be scheduled from the
original list of hosts to produce a final list of hosts.

For example, say that the hostfile [my_hosts] contains the hosts
[node1] through [node4].  If you run:

" . faqcode("mpirun -np 1 --hostfile my_hosts --host node3 hostname") . "

This will run a single copy of [hostname] on the host [node3].
However, if you run:

" . faqcode("mpirun -np 1 --hostfile my_hosts --host node17 hostname") . "

This is an error (because [node17] is not listed in [my_hosts];
[mpirun] will abort.

Finally, note that in exclusionary mode, processes will _only_ be
executed on the [--host]-specified hosts, even if it causes
oversubscription.  For example:

" . faqcode("mpirun -np 4 --host a uptime") . "

This will launch 4 copies of [uptime] on host [a].

<li> *Inclusionary:* If a list of hosts has _not_ been provided by
another source, then the hosts provided by the [--host] option will be
used as the original and final host list.

In this case, [--host] acts as an inclusionary agent; all
[--host]-supplied hosts become available for scheduling processes.
For example (assume that you are *not* in a scheduling environment
where a list of nodes is being transparently supplied):

" . faqcode("mpirun -np 3 --host a,b,c hostname") . "

This will launch a single copy of [hostname] on the hosts [a], [b],
and [c].
</ul>

Note, too, that [--host] is essentially a per-application switch.
Hence, if you specify multiple applications (as in an MPMD job),
[--host] can be specified multiple times:

" .faqcode("mpirun -np 1 --host a hostname : -np 1 --host b uptime") . "

This will launch [hostname] on host [a] and [uptime] on host [b].";

/////////////////////////////////////////////////////////////////////////

$c1 = array();
$o1 = array();
$c1[] = "cat my-hosts";
$o1[] = "node0 slots=2 max_slots=20
node1 slots=2 max_slots=20";
$c1[] = "mpirun --hostfile my-hosts -np 8 --byslot | sort";
$o1[] = "Hello World I am rank 0 of 8 running on node0
Hello World I am rank 1 of 8 running on node0
Hello World I am rank 2 of 8 running on node1
Hello World I am rank 3 of 8 running on node1
Hello World I am rank 4 of 8 running on node0
Hello World I am rank 5 of 8 running on node0
Hello World I am rank 6 of 8 running on node1
Hello World I am rank 7 of 8 running on node1";

$c2 = array();
$o2 = array();
$c2[] = "shell$ cat my-hosts";
$o2[] = "node0 slots=2 max_slots=20
node1 slots=2 max_slots=20";
$c2[] = "mpirun --hostname my-hosts -np 8 --bynode hello | sort";
$o2[] = "Hello World I am rank 0 of 8 running on node0
Hello World I am rank 1 of 8 running on node1
Hello World I am rank 2 of 8 running on node0
Hello World I am rank 3 of 8 running on node1
Hello World I am rank 4 of 8 running on node0
Hello World I am rank 5 of 8 running on node1
Hello World I am rank 6 of 8 running on node0
Hello World I am rank 7 of 8 running on node1";

$q[] = "How do I control how my processes are scheduled across nodes?";

$anchor[] = "mpirun-scheduling";

$a[] = "The short version is that if you are not oversubscribing your
nodes (i.e., trying to run more processes than you have told Open MPI
are available on that node), scheduling is pretty simple and occurs
either on a by-slot or by-node round robin schedule.  If you're
oversubscribing, the issue gets much more complicated -- keep reading.

The more complete answer is: Open MPI schedules processes to nodes by
asking two questions from each application on the [mpirun] command
line:

<ul>
<li> *How many* processes should be launched?
<li> *Where* should those processes be launched?
</ul>

The \"how many\" question is directly answered with the [-np] switch
to [mpirun].  The \"where\" question is a little more complicated, and
depends on three factors:

<ul>
<li> The final node list (e.g., after [--host] exclusionary or
inclusionary processing)
<li> The scheduling policy (which applies to all applications in a
single job)
<li> The default and maximum number of slots on each host
</ul>

As briefly mentioned <a href=\"#simple-spmd-run\">in this FAQ
entry</a>, _slots_ are Open MPI's representation of how many
processors are available on a given host.

The default number of slots on any machine, if not explicitly
specified, is 1 (e.g., if a host is listed in a hostfile by has no
corresponding \"slots\" keyword).  Schedulers (such as SLURM,
PBS/Torque, SGE, etc.) automatically provide an accurate default slot
count.

Max slot counts, however, are rarely specified by schedulers.  The max
slot count for each node will default to \"infinite\" if it is not
provided (meaning that Open MPI will oversubscribe the node if you ask
it to -- see more on oversubscribing in <a
href=\"#oversubscribing\">this FAQ entry</a>).

Open MPI currently supports two scheduling policies: by slot and by
node:

<ul>

<li> *By slot:* This is the default scheduling policy, but can also be
explicitly requested by using either the [--byslot] option to [mpirun]
or by setting the MCA parameter [rmaps_base_schedule_policy] to the
string \"slot\".

In this mode, Open MPI will schedule processes on a node until all of
its default slots are exhausted before proceeding to the next node.
In MPI terms, this means that Open MPI tries to maximize the number of
adjacent ranks in [MPI_COMM_WORLD] on the same host without
oversubscribing that host.

For example:

" . faqcode($c1, $o1) . "

<li> *By node:* This policy can be requested either by using the
[--bynode] option to [mpirun] or by setting the MCA parameter
[rmaps_base_schedule_policy] to the string \"node\".

In this mode, Open MPI will schedule a single process on each node in
a round-robin fashion (looping back to the beginning of the node list
as necessary) until all processes have been scheduled.  Nodes are
skipped once their default slot counts are exhausted.

For example:

" . faqcode($c2, $o2) . "

</ul>

In both policies, if the default slot count is exhausted on all nodes
while there are still processes to be scheduled, Open MPI will loop
through the list of nodes again and try to schedule one more process
to each node until all processes are scheduled.  Nodes are skipped in
this process if their maximum slot count is exhausted.  If the maximum
slot count is exhausted on all nodes while there are still processes
to be scheduled, Open MPI will abort without launching any processes.

*NOTE*: This is the scheduling policy in Open MPI because of a long
historical precedent in LAM/MPI.  However, the scheduling of processes
to processors is a component in the RMAPS framework in Open MPI; it
can be changed.  If you don't like how this scheduling occurs, please
let us know.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm not using a hostfile.  How are slots calculated?";

$anchor[] = "slots-without-hostfiles";

$a[] = "If you are using a supported resource manager, Open MPI will
get the slot information directly from that entity.  If you are using
the [--host] parameter to [mpirun], be aware that each instance of a
hostname bumps up the internal slot count by one.  For example:

" . faqcode("mpirun --host node0,node0,node0,node0 ....") . "

This tells Open MPI that host \"node0\" has a slot count of 4.  This is
very different than, for example:

" . faqcode("mpirun -np 4 --host node0 a.out") . "

This tells Open MPI that host \"node0\" has a slot count of 1 but you
are running 4 processes on it.  Specifically, Open MPI assumes that
you are oversubscribing the node.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I run multiple parallel processes on a uniprocessor machine?";

$anchor[] = "parallel-on-uniprocessor";

$a[] = "Yes.

<strong><font color=red>But be very careful to ensure that Open MPI
knows that you are oversubscibing your node!</font></strong>  If Open
MPI is unaware that you are oversubscribing a node, <strong><font
color=red>severe</font></strong> performance degredation can result.

See <a href=\"#oversubscribing\">this FAQ entry</a> for more details
on oversubscription.";

/////////////////////////////////////////////////////////////////////////

$c1 = array();
$o1 = array();
$c1[] = "cat my-hostfile";
$o1[] = "localhost";
$c1[] = "mpirun -np 4 --hostfile my-hostfile a.out";

$c2 = array();
$o2 = array();
$c2[] = "cat my-hostfile";
$o2[] = "localhost <font color=red>slots=4</font>";
$c2[] = "mpirun -np 4 --hostfile my-hostfile a.out";

$q[] = "Can I oversubscribe nodes (run more processes than processors)?";

$anchor[] = "oversubscribing";

$a[] = "Yes.

However, it is critical that Open MPI _knows_ that you are
oversubscribing the node, or <strong><font
color=red>severe</font></strong> performance degredation can result.

The short explanation is as follows: <strong><font color=red>never
specify a number of slots that is more than the available number of
processors.</font></strong> For example, if you want to run 4
processes on a uniprocessor, then indicate that you only have 1 slot
but want to run 4 processes.  For example:

" . faqcode($c1, $o1) . "

Specifically: do <strong><font color=red>NOT</font></strong> have a
hostfile that contains \"[slots = 4]\" (because there is only one
available processor).

Here's the full explanation:

Open MPI basically runs its message passing progression engine in two
modes: _aggressive_ and _degraded._

<ul>

<li> *Degraded:* When Open MPI thinks that it is in an oversubscribed
mode (i.e., more processes are running than there are processors
available), MPI processes will automatically run in _degraded_ mode
and frequently yield the processor to its peers, thereby allowing all
processes to make progress (be sure to see <a
href=\"http://www.open-mpi.org/faq/?category=tuning#using-paffinity\">this
FAQ entry</a> that describes how degraded mode affects processor and
memory affinity).</li>

<li> *Aggressive:* When Open MPI thinks that it is in an exactly- or
under-subscribed mode (i.e., the number of running processes is equal
to or less than the number of available processors), MPI processes
will automatically run in _aggressive_ mode, meaning that they will
never voluntarily give up the processor to other processes.  With some
network transports, this means that Open MPI will spin in tight loops
attempting to make message passing progress, effectively causing other
processes to not get any CPU cycles (and therefore never make any
progress).</li>
</ul>

For example, on a uniprocessor node:

" . faqcode($c2, $o2) . "

This would cause all 4 MPI processes to run in _aggressive_ mode
because Open MPI thinks that there are 4 available processors
to use.  This is actually a lie (there is only 1 processor -- not 4),
and can cause extremely bad performance.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I force Agressive or Degraded performance modes?";

$anchor[] = "force-aggressive-degraded";

$a[] = "Yes.

The MCA parameter [mpi_yield_when_idle] controls whether an MPI
process runs in Aggressive or Degraded performance mode.  Setting it
to zero forces Aggressive mode; any other value forces Degraded mode
(see <a href=\"./?category=tuning#setting-mca-params\">this FAQ
entry</a> to see how to set MCA parameters).

Note that this value _only_ affects the behavior of MPI processes when
they are blocking in MPI library calls.  It does not affect behavior
of non-MPI processes, nor does it affect the behavior of a process
that is not inside an MPI library call.

Open MPI normally sets this parameter automatically (see <a
href=\"#oversubscribing\">this FAQ entry</a> for details).  Users are
cautioned against setting this parameter unless you are really,
absoultely, positively sure of what you are doing.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I run with the TotalView parallel debugger?";

$anchor[] = "run-with-tv";

$a[] = "Generally, you can run Open MPI processes with TotalView as
follows:

" . faqcode("mpirun --debug ...mpirun arguments...") . "

Assuming that TotalView is the first supported parallel debugger in
your path, Open MPI will autmoatically invoke the correct underlying
command to run your MPI process in the TotalView debugger.  Be sure to
see <a href=\"?category=supported-systems#parallel-debuggers\">this
FAQ entry</a> for details about what versions of Open MPI and
TotalView are compatible.

For reference, this underlying command form is the following:

" . faqcode("totalview mpirun -a ...mpirun arguments...") . "

So if you wanted to run a 4-process MPI job of your [a.out]
executable, it would look like this:

" . faqcode("totalview mpirun -a -np 4 a.out") . "

Alternatively, Open MPI's [mpirun] offers the \"[-tv]\" convenience
option which does the same thing as TotalView's \"-a\" syntax.  For
example:

" . faqcode("mpirun -tv -np 4 a.out") . "

Note that by default, TotalView will stop deep in the machine code of
[mpirun] itself, which is not what most users want.  It is possible
to get TotalView to recognize that [mpirun] is simply a \"starter\"
program and should be (effectively) ignored.  Specifically, TotalView
can be configured to skip [mpirun] (and [mpiexec] and [orterun]) and
jump right into your MPI application.  This can be accomplished by
placing some startup instructions in a TotalView-specific file named
[\$HOME/.tvdrc].

Open MPI includes a sample TotalView startup file that performs this
function (see [etc/openmpi-totalview.tcl] in Open MPI distribution
tarballs; it is also installed, by default, to
[\$prefix/etc/openmpi-totalview.tcl] in the Open MPI installation).
This file can be either copied to [\$HOME/.tvdrc] or sourced from the
[\$HOME/.tvdrc] file.  For example, placing the following line in your
[\$HOME/.tvdrc] (replacing [/path/to/openmpi/installation] with the
proper directory name, of course) will use the Open MPI-provided
startup file:

" . faqcode("source /path/to/openmpi/installation/etc/openmpi-totalview.tcl");

/////////////////////////////////////////////////////////////////////////

$c1 = array();
$o1 = array();
$c1[] = "ddt -attach {hostname1:pid} [{hostname2:pid} ...] {exec-name}";
$o1[] = "# Or";
$c1[] = "ddt -attach-file {filename of newline separated hostname:pid pairs} {exec-name}";

$q[] = "How do I run with the DDT parallel debugger?";

$anchor[] = "run-with-ddt";

$a[] = "If you've used DDT at least once before (to use the
configuration wizard to setup support for Open MPI), you can start it
on the command line with:

" . faqcode("mpirun --debug ...mpirun arguments...") . "

Assuming that you are using Open MPI v1.2.4 or later, and assuming
that DDT is the first supported parallel debugger in your path, Open
MPI will autmoatically invoke the correct underlying command to run
your MPI process in the DDT debugger.  For reference (or if you are
using an earlier version of Open MPI), this underlying command form is
the following:

" . faqcode("ddt -n {nprocs} -start {exe-name}") . "

Note that passing arbitrary arguments to Open MPI's [mpirun] is not
supported with the DDT debugger.

You can also attach to already-running proceses with either of the
following two syntaxes:

" . faqcode($c1, $o1) . "

DDT can even be configured to operate with cluster/resource schedulers
such that it can run on a local workstation, submit your MPI job via
the scheduler, and then attach to the MPI job when it starts.

See the official DDT documentation for more details.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What launchers are available?";

$anchor[] = "pls-available";

$a[] = "The documentation contained in the Open MPI tarball will have
the most up-to-date information, but as of v1.0, Open MPI supports:

<ul>
<li> BProc versions 3 and 4 (discontinued starting with OMPI v1.3)</li>
<li> Sun Grid Engine (SGE), and the open source Grid Engine (support first introduced in Open MPI v1.2)</li>
<li> PBS Pro, Torque, and Open PBS</li>
<li> LoadLeveler scheduler (full support since 1.1.1)</li>
<li> rsh / ssh</li>
<li> SLURM</li>
<li> LSF/li>
<li> XGrid (discontinued starting with OMPI 1.4)</li>
<li> Yod (Cray XT-3 and XT-4)</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I specify to the <code>rsh</code> launcher to use <code>rsh</code> or <code>ssh</code>?";

$anchor[] = "pls-rsh-agent";

$a[] = "See <a href=\"./?category=rsh#rsh-not-ssh\">this FAQ entry</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I run with the SLURM and PBS/Torque launchers?";

$anchor[] = "run-slurm-or-tm";

$a[] = "If support for these systems are included in your Open MPI
installation (which you can check with the [ompi_info] command -- look
for components named \"[slurm]\" and/or \"[tm]\"), Open MPI will
automatically detect when it is running inside such jobs and will just
\"do the Right Thing.\"

See <a href=\"?category=slurm#slurm-run-jobs\">this FAQ entry</a> for
a description of how to run jobs in SLURM; see <a
href=\"?category=tm#tm-run-jobs\">this FAQ entry</a> for a description
of how to run jobs in PBS/Torque.";

/////////////////////////////////////////////////////////////////////////

$c1 = array();
$o1 = array();
$c1[] = "shell$ prstat -p 15301,15303,15305";
$o1[] = "   PID USERNAME  SIZE   RSS STATE  PRI NICE      TIME  CPU PROCESS/NLWP
 15305 rolfv     158M   22M cpu1     0    0   0:00:21 5.9% a.out/1
 15303 rolfv     158M   22M cpu2     0    0   0:00:21 5.9% a.out/1
 15301 rolfv    8128K 5144K sleep   59    0   0:00:00 0.0% orterun/1";
$c1[] = "kill -TSTP 15301";
$c1[] = "prstat -p 15301,15303,15305";
$o1[] = "   PID USERNAME  SIZE   RSS STATE  PRI NICE      TIME  CPU PROCESS/NLWP
 15303 rolfv     158M   22M stop    30    0   0:01:44  21% a.out/1
 15305 rolfv     158M   22M stop    20    0   0:01:44  21% a.out/1
 15301 rolfv    8128K 5144K sleep   59    0   0:00:00 0.0% orterun/1";
$c1[] = "kill -CONT 15301";
$c1[] = "prstat -p 15301,15303,15305";
$o1[] = "   PID USERNAME  SIZE   RSS STATE  PRI NICE      TIME  CPU PROCESS/NLWP
 15305 rolfv     158M   22M cpu1     0    0   0:02:06  17% a.out/1
 15303 rolfv     158M   22M cpu3     0    0   0:02:06  17% a.out/1
 15301 rolfv    8128K 5144K sleep   59    0   0:00:00 0.0% orterun/1";

$c2 = array();
$o2 = array();
$c2[] = "qconf -sq all.q";
$o2[] = "qname                 all.q
[...snip...]
starter_method        NONE
suspend_method        SIGTSTP
resume_method         NONE ";

$q[] = "Can I suspend and resume my job?";

$anchor[] = "suspend-resume";

$a[] = "A new feature was added into Open MPI 1.3.1 that supports
suspend/resume of an MPI job.  To suspend the job, you send a SIGTSTP
(not SIGSTOP) signal to [mpirun].  [mpirun] will catch this signal and
forward it to the [a.outs] as a SIGSTOP signal.  To resume the job,
you send a SIGCONT signal to [mpirun] which will be caught and
forwarded to the [a.outs].

By default, this feature is not enabled.  This means that both the
SIGTSTP and SIGCONT signals will simply be consumed by the [mpirun]
process.  To have them forwarded, you have to run the job with [--mca
orte_forward_job_control 1].  Here is an example on Solaris.

" . faqcode("mpirun -mca orte_forward_job_control 1 -np 2 a.out") . "

In another window, we suspend and continue the job.

" . faqcode($c1, $o1) . "

Note that all this does is stop the [a.outs].  It does not, for example,
free any pinned memory when the job is in the suspended state.

To get this to work under the SGE environment, you have to change the
[suspend_method] entry in the queue.  It has to be set to SIGTSTP.  Here
is an example of what a queue should look like.

" . faqcode($c2, $o2) . "

Note that if you need to suspend other types of jobs with SIGSTOP
(instead of SIGTSTP) in this queue then you need to provide a script
that can implement the correct signals for each job type.";

/////////////////////////////////////////////////////////////////////////

$c1 = array();
$o1 = array();
$c1[] = "cat job";
$o1[] = "#@ output  = job.out
#@ error   = job.err
#@ job_type = parallel
#@ node = 3
#@ tasks_per_node = 4
mpirun a.out";
$c1[] = "llsubmit job";

$q[] = "How do I run with LoadLeveler?";

$anchor[] = "run-loadleveler";

$a[] = "If support for LoadLeveler is included in your Open MPI
installation (which you can check with the [ompi_info] command -- look
for components named \"[loadleveler]\"), Open MPI will
automatically detect when it is running inside such jobs and will just
\"do the Right Thing.\"

Specifically, if you execute an [mpirun] command in a LoadLeveler job,
it will automatically determine what nodes and how many slots on each
node have been allocated to the current job. There is no need to
specify what nodes to run on. Open MPI will then attempt to launch the
job using whatever resource is available (on Linux rsh/ssh is used).

For example:

" . faqcode($c1, $o1) . "

This will run 4 MPI process per node on the 3 nodes which were allocated by 
LoadLeveler for this job.

<strong><font color=red>For users of Open MPI 1.1
series:</font></strong> In version 1.1.0 there exists a problem which
will make it so that Open MPI will not be able to determine what nodes
are available to it if the job has more than 128 tasks. In the 1.1.x
series starting with version 1.1.1., this can be worked around by
passing \"[-mca ras_loadleveler_priority 110]\" to mpirun. Version 1.2
and above work without any additional flags.  ";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I load libmpi at runtime?";

$anchor[] = "loading-libmpi-dynamically";

$a[] = "If you want to load a the shared library [libmpi] explicitly
at runtime either by using [dlopen()] from C/C ++ or something like
the [ctypes] package from Python, some extra care is required.  The
default configuration of Open MPI uses [dlopen()] internally to load
its support components.  These components rely on symbols available in
[libmpi].  In order to make the symbols in [libmpi] available to the
components loaded by Open MPI at runtime, [libmpi] must be loaded with
the [RTLD_GLOBAL] option.

In C/C++, this option is specified as the second parameter to
[dlopen()].  When using [ctypes] with Python, this can be done with
the second (optional) parameter to [CDLL()].  For example (shown below
in Mac OS X, where Open MPI's shared library name ends in \".dylib\";
other operating systems use other suffixes, such as \".so\")

<faqcode>
  from ctypes import *
  mpi = CDLL('libmpi.0.dylib', RTLD_GLOBAL)
  f = pythonapi.Py_GetArgcArgv
  argc = c_int()
  argv = POINTER(c_char_p)()
  f(byref(argc), byref(argv))
  mpi.MPI_Init(byref(argc), byref(argv))
  mpi.MPI_Finalize()
</faqcode>

Other scripting languages should have similar options when dynamically
loading shared libraries.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What MPI environmental variables exist?";

$anchor[] = "mpi-environmental-variables";

$a[] = "Beginning with the 1.3 release, Open MPI provides the following
environmental variables that will be defined on every
MPI process:

<ul>
<li> OMPI_COMM_WORLD_SIZE - the number of processes in this process' MPI Comm_World</li>
<li> OMPI_COMM_WORLD_RANK - the MPI rank of this process</li>
<li> OMPI_COMM_WORLD_LOCAL_RANK - the relative rank of this process on this node
within its job. For example, if four processes in a job share a node, they
will each be given a local rank ranging from 0 to 3.</li>
<li> OMPI_UNIVERSE_SIZE - the number of process slots allocated to this job. Note
that this may be different than the number of processes in the job.</li>
<li> OMPI_COMM_WORLD_LOCAL_SIZE - the number of ranks from this job that are running on this node.</li>
<li> OMPI_COMM_WORLD_NODE_RANK - the relative rank of this process on this node
looking across ALL jobs.</li>
</ul>

Open MPI guarantees that these variables will remain stable throughout future releases";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I get my MPI job to wireup its MPI connections right away?";

$anchor[] = "mpi-preconnect";

$a[] = "By default, Open MPI opens MPI connections between processes in a
\"lazy\" fashion - i.e., the connections are only opened when the MPI process
actually attempts to send a message to another process for the first time. This is
done since (a) Open MPI has no idea what connections an application process will
really use, and (b) creating the connections takes time. Once
the connection is established, it remains \"connected\" until one of the two
connected processes terminates, so the creation time cost is paid only once.

Applications that require a fully connected topology, however, can see
improved startup time if they automatically \"pre-connect\" all their
processes during MPI_Init. Accordingly, Open MPI provides the MCA
parameter \"mpi_preconnect_mpi\" which directs Open MPI to establish a
\"mostly\" connected topology during MPI_Init (note that this MCA
parameter used to be named \"mpi_preconnect_all\" prior to Open MPI
v1.5; in v1.5, it was deprecated and replaced with
\"mpi_preconnect_mpi\").  This is accomplished in a somewhat scalable
fashion to help minimize startup time.

Users can set this parameter in two ways:

<ul>
<li> in the environment as OMPI_MCA_mpi_preconnect_mpi=1</li>
<li> on the cmd line as mpirun -mca mpi_preconnect_mpi 1</li>
</ul>

See <a href=\"?category=tuning#setting-mca-params\">this FAQ entry</a>
for more details on how to set MCA parameters.</li>
</ol>";

/////////////////////////////////////////////////////////////////////////

$q[] = "What kind of CUDA support exists in Open MPI?";

$anchor[] = "mpi-cuda-support";

$a[] = "Since Open MPI 1.7.0, there is support for sending and receiving CUDA device
memory directly.  Prior to this support, the programmer would first
have to stage the data in host memory prior to making the MPI calls.
Now, the Open MPI library will automatically detect that the pointer
being passed in is a CUDA device memory pointer and do the right
thing.   This is referred to as CUDA-aware support.

The use of device pointers is supported in all of the send and receive
APIs as well as most of the collective APIs.  Neither the collective
reduction APIs nor the one-sided APIs are supported. Here is the list
of APIs that currently support sending and receiving CUDA device memory.

_MPI_Send, MPI_Bsend, MPI_Ssend, MPI_Rsend, MPI_Isend, MPI_Ibsend,
 MPI_Issend, MPI_Irsend, MPI_Send_init, MPI_Bsend_init, MPI_Ssend_init,
 MPI_Rsend_init, MPI_Recv, MPI_Irecv, MPI_Recv_init, MPI_Sendrecv,
 MPI_Bcast, MPI_Gather, MPI_Gatherv, MPI_Allgather,
 MPI_Allgatherv, MPI_Alltoall, MPI_Alltoallv, MPI_Scatter, MPI_Scatterv_

Open MPI depends on various features of CUDA 4.0, so one needs to
have at least the CUDA 4.0 driver and toolkit.  The new features of interest
are the Unified Virtual Addressing (UVA) so that all pointers within a
program have unique addresses.  In addition, there is a new API that
allows one to determine if a pointer is a CUDA device pointer or host
memory pointer.  This API is used by the library to decide what needs
to be done with each buffer.  In addition, CUDA 4.1 also provides the
ability to register host memory with the CUDA driver which can improve
performance.  CUDA 4.1 also added CUDA IPC support for fast communication
between GPUs on the same node.

Note that derived datatypes, both contiguous and non-contiguous, are supported.
However, the non-contiguous datatypes currently have high overhead
because of the many calls to [cuMemcpy] to copy all the pieces of the
buffer into the intermediate buffer.

CUDA-aware support is only available in the sm, smcuda, tcp, and openib BTLs.
The smcuda BTL is an optimized version of the sm BTL that takes advantage
of the CUDA IPC support for fast GPU transfers.  Much of the other 
optimizations are built in to the openib BTL.

There is no CUDA-aware support in any of the MTLs.

*Open MPI 1.7.0, Open MPI 1.7.1, Open MPI 1.7.2*
<ul>
<li> Basic GPU direct support.
<li> Support for CUDA IPC between GPUs on a node, but would get error if
the GPUs did not support CUDA IPC.
</ul>

*Open MPI 1.7.3 New Features*
<ul>
<li> Support for asynchronous copies of larger GPU buffers over
the openib BTL.  
<li> Dynamically loads the libcuda.so library so you can configure
with CUDA-aware support, but run on machines that do not have CUDA installed.
</ul>

*Open MPI 1.7.4 New Features*
<ul>
<li> Removed synchronize point in CUDA IPC when running with CUDA 6.0 or later.
<li> Utilizes GPU Direct RDMA if it is available. Requires CUDA 6.0 or later.
<li> Dynamically enable CUDA IPC support between GPUs and back off to copy through
host memory if it is not available.
</ul>

*For best results, it is recommended that you use Open MPI 1.7.3 or later.*

*Additional Information about CUDA-aware support*

Here are some relevant mca parameters to extract extra information if you
are having issues. For Open MPI 1.7.3 and later, you can see if the library
was built with CUDA-aware support.

<faqcode>
 > ./ompi_info --parsable -l 9 --all | grep mpi_built_with_cuda_support:value
 mca:mpi:base:param:mpi_built_with_cuda_support:value:true
</faqcode>

To get some extra information, there are some verbose flags.  The *opal_cuda_verbose*
has only one level of verbosity.  (Works on all versions)
<faqcode>
--mca opal_cuda_verbose 10
</faqcode>

This *mpi_common_cuda_verbose* flag provides additional information about CUDA-aware related activities.
This can be set to a variety of different values.  There is really no need to use
these unless you have strange problems. (Works on all versions)
<faqcode>
--mca mpi_common_cuda_verbose 10
--mca mpi_common_cuda_verbose 20
--mca mpi_common_cuda_verbose 100
</faqcode>

There are three new MCA parameters introduced with Open MPI 1.7.4 related to the use
of CUDA IPC.  By default, CUDA IPC is used where possible.  But the user can now
turn it off if they want.
<faqcode>
--mca btl_smcuda_use_cuda_ipc 0
</faqcode>

In addition, it is assumed that CUDA IPC is possible when running on the same GPU
and this is typically true.  However, there is the ability to turn it off.
<faqcode>
--mca btl_smcuda_use_cuda_ipc_same_gpu 0
</faqcode>

Lastly, to get some insight into whether CUDA IPC is being used, you can turn
on some verbosity that shows whether CUDA IPC gets enabled between two GPUs.
<faqcode>
--mca btl_smcuda_cuda_ipc_verbose 100
</faqcode>

*GPU Direct RDMA Information*

Open MPI 1.7.4 has added some support to take advantage of GPU Direct RDMA on Mellanox cards.
However, the supporting driver has not been released yet, so these features cannot be used yet.
Note that to get GPU Direct RDMA support, you also need to configure your Open MPI library
with CUDA 6.0.

To see if you have GPU Direct RDMA compiled into your library, you can check like this:
<faqcode>
> ompi_info --all | grep btl_openib_have_cuda_gdr
   MCA btl: informational \"btl_openib_have_cuda_gdr\" (current value: \"true\", data source: default, level: 4 tuner/basic, type: bool)
</faqcode>

To see if your OFED stack has GPU Direct RDMA support, you can check like this.
<faqcode>
> ompi_info --all | grep btl_openib_have_driver_gdr
   MCA btl: informational \"btl_openib_have_driver_gdr\" (current value: \"true\", data source: default, level: 4 tuner/basic, type: bool)
</faqcode>

To run with GPU Direct RDMA support, you have to enable it as it is off by default.
<faqcode>
--mca btl_openib_want_cuda_gdr 1
</faqcode>

*GPU Direct RDMA Implementation Details*

With GPU Direct RDMA support selected, the eager protocol is unused.  This is done to avoid the
penalty of copying unexpected GPU messages into host memory.  Instead, a rendezvous protocol is used where
the sender and receiver both register their GPU buffers and make use of GPU Direct RDMA support to
transfer the data.  This is done for all messages that are less than 30,000 bytes in size.  For larger
messages, the openib BTL switches to using pipelined buffers as that has better performance at
larger messages.  So, by default, with GPU Direct RDMA enabled, the underlying protocol usage is like this:
<faqcode>
0      < message size < 30,000      GPU Direct RDMA
30,000 < message size < infinity    Asynchronous copies through host memory
</faqcode>

You can adjust the point where we switch to asynchronous copes with the *--mca btl_openib_cuda_rdma_limit* value.
For example, if you want to increase the switchover point to 100,000 bytes, then set it like this.
<faqcode>
--mca btl_openib_cuda_rdma_limit 100000
</faqcode>

By default, if we have GPU Direct RDMA, we use it for 1 byte messages on up to the *btl_openib_cuda_rdma_limit* value.
However, you could use the eager protocol for the smallest messages by setting *--mca btl_openib_cuda_eager_limit*
value.  _Note: The *btl_openib_cuda_eager_limit* value includes some overhead so you cannot just set it to the payload value.
It has to be set to the payload plus the extra upper layer extra bytes.  Currently, in Open MPI 1.7.4, this overhead is
44 bytes, so that has to be the minimum value.  In the table below we are just referring to the size of the payload._

This table tries to show how the various runtime parameters affect what protocols are used in a GPU Direct RDMA.
<p>
<center>
<table border=1 cellpadding=5>
<tr>
<th>Message Size Limits</th>
<th>Protocol</th>
</tr>

<tr>
<td>0 < message size < btl_openib_cuda_eager_limit (default=0)</td>
<td> eager protocol (not used by default)
</tr>

<tr>
<td>btl_openib_cuda_eager_limit (default=0) < message size < btl_openib_cuda_rdma_limit (default=30,000)</td>
<td> rendezvous protocol utilizing GPU Direct RDMA</td>
</tr>

<tr>
<td>btl_openib_cuda_rdma_limit (default=30,000) < message size < infinity</td>
<td> pipelined transfers of size 128K through host memory</td>
</tr>

</table>
</center>

*Performance Note*
The cost of registering the GPU memory with the Mellanox driver is expensive so it is
best to reuse the same GPU buffer for communication.

*NUMA Node Issues*
When running on a node that has multiple GPUs, you may want to select the GPU that is
closest to the process you are running on.  One way to do this is to make use of the
hwloc library.  Following is a code snippet that can be used in your application to 
select a GPU that is close.  It will determine which CPU it is running on and then
look for the closest GPU.  There could be multiple GPUs that are the same distance
away.  This is dependent on having hwloc somewhere on your system.

<faqcode>
/**
 * Test program to show the use of hwloc to select the GPU closest to the CPU
 * that the MPI program is running on.  Note that this works even without
 * any libpciacces or libpci support as it keys of the NVIDIA vendor ID.
 * There may be other ways to implement this but this is one way.
 * January 10, 2014
 */
#include &lt;assert.h&gt;
#include &lt;stdio.h&gt;
#include \"cuda.h\"
#include \"mpi.h\"
#include \"hwloc.h\"

#define ABORT_ON_ERROR(func)                          \
  { CUresult res;                                     \
    res = func;                                       \
    if (CUDA_SUCCESS != res) {                        \
        printf(\"%s returned error=%d\\n\", #func, res); \
        abort();                                      \
    }                                                 \
  }                             
static hwloc_topology_t topology = NULL;
static int gpuIndex = 0;
static hwloc_obj_t gpus[16] = {0};

/**
 * This function searches for all the GPUs that are hanging off a NUMA
 * node.  It walks through each of the PCI devices and looks for ones
 * with the NVIDIA vendor ID.  It then stores them into an array.
 * Note that there can be more than one GPU on the NUMA node.
 */

static void find_gpus(hwloc_topology_t topology, hwloc_obj_t parent, hwloc_obj_t child) {
    hwloc_obj_t pcidev;
    pcidev = hwloc_get_next_child(topology, parent, child);
    if (NULL == pcidev) {
        return;
    } else if (0 != pcidev->arity) {
        /* This device has children so need to look recursively at them */
        find_gpus(topology, pcidev, NULL);
        find_gpus(topology, parent, pcidev);
    } else {
        if (pcidev->attr->pcidev.vendor_id == 0x10de) {
            gpus[gpuIndex++] = pcidev;
        }
        find_gpus(topology, parent, pcidev);
    }
}
int main(int argc, char *argv[])
{
    int rank, retval, length;
    char procname[MPI_MAX_PROCESSOR_NAME+1];
    const unsigned long flags = HWLOC_TOPOLOGY_FLAG_IO_DEVICES | HWLOC_TOPOLOGY_FLAG_IO_BRIDGES;
    hwloc_cpuset_t newset;
    hwloc_obj_t node, bridge;
    char pciBusId[16];
    CUdevice dev;
    char devName[256];

    MPI_Init(&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
    if (MPI_SUCCESS != MPI_Get_processor_name(procname, &length)) {
        strcpy(procname, \"unknown\");
    }

    /* Now decide which GPU to pick.  This requires hwloc to work properly.
     * We first see which CPU we are bound to, then try and find a GPU nearby.
     */
    retval = hwloc_topology_init(&topology);
    assert(retval == 0);
    retval = hwloc_topology_set_flags(topology, flags);
    assert(retval == 0);
    retval = hwloc_topology_load(topology);
    assert(retval == 0);
    newset = hwloc_bitmap_alloc();
    retval = hwloc_get_last_cpu_location(topology, newset, 0);
    assert(retval == 0);

    /* Get the object that contains the cpuset */
    node = hwloc_get_first_largest_obj_inside_cpuset(topology, newset);

    /* Climb up from that object until we find the HWLOC_OBJ_NODE */
    while (node->type != HWLOC_OBJ_NODE) {
        node = node->parent;
    }

    /* Now look for the HWLOC_OBJ_BRIDGE.  All PCI busses hanging off the
     * node will have one of these */
    bridge = hwloc_get_next_child(topology, node, NULL);
    while (bridge->type != HWLOC_OBJ_BRIDGE) {
        bridge = hwloc_get_next_child(topology, node, bridge);
    }

    /* Now find all the GPUs on this NUMA node and put them into an array */
    find_gpus(topology, bridge, NULL);

    ABORT_ON_ERROR(cuInit(0));
    /* Now select the first GPU that we find */
    if (gpus[0] == 0) {
        printf(\"No GPU found\\n\");
        exit(1);
    } else {
        sprintf(pciBusId, \"%.2x:%.2x:%.2x.%x\", gpus[0]->attr->pcidev.domain, gpus[0]->attr->pcidev.bus,
        gpus[0]->attr->pcidev.dev, gpus[0]->attr->pcidev.func);
        ABORT_ON_ERROR(cuDeviceGetByPCIBusId(&dev, pciBusId));
        ABORT_ON_ERROR(cuDeviceGetName(devName, 256, dev));
        printf(\"rank=%d (%s): Selected GPU=%s, name=%s\\n\", rank, procname, pciBusId, devName);
    }

    MPI_Finalize();
    return 0;
}
</faqcode>


See <a href=\"?category=building#build-cuda\">this FAQ entry</a>
for detals on how to configure the CUDA support into the library.

";

/////////////////////////////////////////////////////////////////////////

# Return "a" or "an"
function get_article($s) {
    if (preg_match("/^[aeiou]/i", $s)) {
        return "an";
    } else {
        return "a";
    }
}
