<?php
include_once("$topdir/software/ompi/current/version.inc");

/////////////////////////////////////////////////////////////////////////

#$q[] = "How do I add Open MPI to my <code>PATH</code> and <code>LD_LIBRARY_PATH</code>?";

#$anchor[] = "adding-ompi-to-path";

#$a[] = "Open MPI _must_ be able to find its executables in your [PATH]
#";

/////////////////////////////////////////////////////////////////////////

$q[] = "Open MPI tells me that it fails to load components with a \"file not found\" error -- but the file is there!  Why does it say this?";

$anchor[] = "erroneous-file-not-found-message";

$a[] = "Open MPI loads a lot of plugins at run time.  It opens its
plugins via the excellent <a
href=\"http://www.gnu.org/software/libtool/\">GNU Libtool</a> libltdl
portability library.  If a plugin fails to load, Open MPI queries
libltdl to get a printable string indicating _why_ the plugin failed
to load.

Unfortunately, there is a well-known bug in libltdl that may cause a
\"file not found\" error message to be displayed, even when the file
_is_ found.  The \"file not found\" error usually masks the real,
underlying cause of the problem.  For example:

<geshi text>
mca: base: component_find: unable to open /opt/openmpi/mca_ras_dash_host: file not found (ignored)
</geshi>

Note that Open MPI put in a libltdl workaround starting with version
1.5.  This workaround should print the real reason the plugin failed
to load instead of the erroneous \"file not found\" message.

There are two common underlying causes why a plugin fails to load:

<ol>
<li> The plugin is for a different version of Open MPI.  <a
href=\"#missing-symbols\">This FAQ entry</a> has more information
about this case.</li>
<li> The plugin cannot find shared libraries that it requires.  For
example, if the [openib] plugin fails to load, ensure that
[libibverbs.so] can be found by the linker at run time (e.g., check
the value of your [LD_LIBRARY_PATH] environment variable).  The same is
true for any other plugin that have shared library dependencies (e.g.,
the [mx] BTL and MTL plugins need to be able to find
the [libmyriexpress.so] shared library at run time).</li>
</ol>";

/////////////////////////////////////////////////////////////////////////

$q[] = "I see strange messages about missing symbols in my application; what do these mean?";

$anchor[] = "missing-symbols";

$a[] = "Open MPI loads a lot of plugins at run time.  It opens its
plugins via the excellent <a
href=\"http://www.gnu.org/software/libtool/\">GNU Libtool</a> libltdl
portability library.  Sometimes a plugin can fail to load because it
can't resolve all the symbols that it needs.  There are a few reasons
why this can happen.

<ul>
<li> The plugin is for a different version of Open MPI.  <a
href=\"?category=building#install-overwrite\">See this FAQ entry</a>
for an explanation of how Open MPI might try to open the \"wrong\"
plugins.</li>
<li> An application is trying to manually dynamically open [libmpi] in
a private symbol space.  For example, if an application is not linked
against [libmpi], but rather calls something like this:

<geshi c>
/* This is a Linux example -- the issue is similar/the same on other
   operating systems */
handle = dlopen(\"libmpi.so\", RTLD_NOW | RTLD_LOCAL);
</geshi>

This is due to some deep run time linker voodoo -- it is discussed
towards the end of <a
href=\"http://www.open-mpi.org/community/lists/devel/2010/05/7931.php\">this
post to the Open MPI developer's list</a>.  Briefly, the issue is
this:

<ol>
<li> The dynamic library [libmpi] is opened in a \"local\" symbol
space.</li>
<li> MPI_INIT is invoked, which tries to open Open MPI's plugins.</li>
<li> Open MPI's plugins rely on symbols in [libmpi] (and other Open
MPI support libraries); these symbols must be resolved when the plugin
is loaded.</li>
<li> However, since [libmpi] was opened in a \"local\" symbol space,
its symbols are not available to the plugins that it opens.</li>
<li> Hence, the plugin fails to load because it can't resolve all of
its symbols, and displays a warning message to that effect.</li>
</ol>

The ultimate fix for this issue is a bit bigger than Open MPI,
unfortunately -- it's a POSIX issue (as briefly described in the devel
posting, above).

However, there are several common workarounds:

<ul>
<li> Dynamically open [libmpi] in a public / global symbol scope --
not a private / local scope.  This will enable [libmpi]'s symbols to
be available for resolution when Open MPI dynamically opens its
plugins.</li>
<li> If [libmpi] is opened as part of some underlying framework where
it is not possible to change the private / local scope to a public /
global scope, then dynamically open [libmpi] in a public / global
scope before invoking the underlying framework.  This sounds a little
gross (and it is), but at least the run-time linker is smart enough to
not load [libmpi] twice -- but it does keeps [libmpi] in a public
scope.</li>
<li> Use the [--disable-dlopen] or
[--disable-mca-dso] options to Open MPI's [configure] script (see <a
href=\"?category=building#avoid-dso\">this FAQ entry</a> for more
details on these options).  These options slurp all of Open MPI's
plugins up in to [libmpi] -- meaning that the plugins physically
reside in [libmpi] and will not be dynamically opened at run
time.</li>
<li> Build Open MPI as a static library by configuring Open MPI with
[--disable-shared] and [--enable-static].  This has the same effect as
[--disable-dlopen], but it also makes [libmpi.a] (as opposed to a
shared library).</li>
</ul>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is mca_pml_teg.so?  Why am I getting warnings about not finding the mca_ptl_base_modules_initialized symbol from it?";

$anchor[] = "teg-symbols-not-found";

$a[] = "You may wonder why you see this warning message (put here
verbatim so that it becomes web-searchable):

<geshi text>
mca_pml_teg.so:undefined symbol:mca_ptl_base_modules_initialized
</geshi>

This happens when you upgrade to Open MPI v1.1 (or later) over an old
installation of Open MPI v1.0.x without previously uninstalling
v1.0.x.  There are fairly uninteresting reasons why this problem
occurs; the simplest, safest solution is to uninstall version 1.0.x
and then re-install your newer version.  For example:

<geshi bash>
shell# cd /path/to/openmpi-1.0
shell# make uninstall
[... lots of output ...]
shell# cd /path/to/openmpi-1.1
shell# make install
</geshi>

The above example shows changing into the Open MPI 1.1 directory to
re-install, but the same concept applies to any version after Open MPI
version 1.0.x.

Note that this problem is fairly specific to installing / upgrading
Open MPI from the source tarball.  Pre-packaged installers (e.g., RPM)
typically do not incur this problem.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I build shared libraries on AIX with the IBM XL compilers?";

$anchor[] = "aix-xl-shared-libraries";

$a[] = "Short answer: in older versions of Open MPI, maybe.

Add \"LDFLAGS=-Wl,-brtl\" to your configure command line:

<geshi bash>
shell$ ./configure LDFLAGS=-Wl,-brtl ...
</geshi>

This enables \"runtimelinking\", which will make GNU Libtool name the
libraries properly (i.e., *.so).  More importantly, runtimelinking
will cause the runtime linker to behave more or less like an ELF
linker would (with respect to symbol resolution).

Future versions of OMPI may not require this flag (and \"runtimelinking\"
on AIX).

<strong><font color=red>NOTE:</font></strong> As of OMPI v1.2, AIX is
no longer supported.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why am I getting a seg fault in libopen-pal (or libopal)?";

$anchor[] = "libopal-apparent-segv";

$a[] = "It is likely that you did _not_ get a segv in libopen-pal (or
\"libopal\", in older versions of Open MPI); it is likely that you are
seeing a message like this:

<geshi text>
[0] func:/opt/ompi/lib/libopen-pal.so.0(opal_backtrace_print+0x2b) [0x2a958de8a7]
</geshi>

Or something like this in older versions of Open MPI:

<geshi text>
[0] func:/opt/ompi/lib/libopal.so.0 [0x2a958de8a7]
</geshi>

This is actually the function that is printing out the stack trace
message; it is not the function that caused the segv itself.  The
function that caused the problem will be a few below this.  Future
versions of OMPI will simply not display this libopen-pal function in the
segv reporting to avoid confusion.

Let's provide a concrete example.  Take the following trivial MPI
program that is guaranteed to cause a seg fault in MPI_COMM_WORLD rank
1:

<geshi c>
#include <mpi.h>

int main(int argc, char **argv)
{
    int rank;
    MPI_Init(&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
    if (rank == 1) {
        char *d = 0;
        /* This will cause a seg fault */
        *d = 3;
    }

    MPI_Finalize();
    return 0;
}
</geshi>

Running this code, you'll see something similar to the following:

<geshi bash>
shell$ mpicc segv.c -o segv -g
shell$ mpirun -np 2 --mca btl tcp,self segv
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
Failing at addr:(nil)
[0] func:/opt/ompi/lib/libopen-pal.so.0(opal_backtrace_print+0x2b) [0x2a958de8a7]
[1] func:/opt/ompi/lib/libopen-pal.so.0 [0x2a958dd2b7]
[2] func:/lib64/tls/libpthread.so.0 [0x3be410c320]
[3] func:segv(main+0x3c) [0x400894]
[4] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x3be361c4bb]
[5] func:segv [0x4007ca]
*** End of error message ***
</geshi>

The _real_ error was back up in main, which is #3 on the stack trace.
But Open MPI's stack-tracing function (opal_backtrace_print, in this
case) is what is displayed as #0, so it's an easy mistake to assume
that libopen-pal is the culprit.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why am I getting seg faults / MPI parameter errors when compiling C++ applications with the Intel 9.1 C++ compiler?";

$anchor[] = "intel-c++-9.1-compiler";

$a[] = "Early versions of the Intel 9.1 C++ compiler series had
problems with the Open MPI C++ bindings.  Even trivial MPI
applications that used the C++ MPI bindings could incur process
failures (such as segmentation violations) or generate MPI-level
errors complaining about invalid parameters.

Intel released a new version of their 9.1 series C++ compiler on
October 5, 2006 (build 44) that seems to solve all of these issues.
The Open MPI team recommends that all users needing the C++ MPI API
upgrade to this version (or later) if possible.  Since the problems
are with the compiler, there is little that Open MPI can do to work
around the issue; upgrading the compiler seems to be the only
solution.";

/////////////////////////////////////////////////////////////////////////

$q[] = "All my MPI applications segv! Why? (Intel Linux 12.1 compiler)";

$anchor[] = "intel-12.1-compiler";

$a[] = "Users have reported on the Open MPI users mailing list
multiple times that when they compile Open MPI with the Intel 12.1
compiler suite, Open MPI tools (such as the wrapper compilers,
including [mpicc]) and MPI applications will seg fault immediately.

As far as we know, this affects both Open MPI v1.4.4 (and later) and
v1.5.4 (and later).

<a
href=\"http://www.open-mpi.org/community/lists/users/2011/12/17993.php\">Here's
one example of a user reporting this to the Open MPI User's list</a>.

The cause of the problem has turned out to be a bug in early versions
of the Intel Linux 12.1 compiler series itself.  *If you upgrade your
Intel compiler to the latest version of the Intel 12.1 compiler suite
and rebuild Open MPI, the problem will go away.* ";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why can't I attach my parallel debugger (TotalView, DDT, fx2,
etc.) to parallel jobs?";

$anchor[] = "parallel-debugger-attach";

$a[] = "As noted in <a
href=\"?category=supported-systems#parallel-debuggers\">this FAQ
entry</a>, Open MPI supports parallel debuggers that utilize the
TotalView API for parallel process attaching.  However, it can
sometimes fail of Open MPI is not installed correctly.  Symptoms of
this failure typically involve having the debugger hang (or crash)
when attempting to attach to a parallel MPI application.

Parallel debuggers may rely on having Open MPI's [mpirun] program
being compiled *without optimization*.  Open MPI's configure and build
process therefore attempts to identify optimization flags and remove
them when compiling [mpirun], but it does not have knowledge of all
optimization flags for all compilers.  Hence, if you specify some
esoteric optimization flags to Open MPI's [configure] script, some
optimization flags may slip through the process and create an [mpirun]
that cannot be read by TotalView and other parallel debuggers.

If you run into this problem, you can manully build [mpirun] without
optimization flags.  Go into the tree where you built Open MPI:

<geshi bash>
shell$ cd /path/to/openmpi/build/tree
shell$ cd orte/tools/orterun
shell$ make clean
[...output not shown...]
shell$ make all CFLAGS=-g
[...output not shown...]
shell$
</geshi>

This will build [mpirun] (also known as [orterun]) with just the \"-g\"
flag.  Once this completes, run [make install], also from within the
[orte/tools/orterun] directory, and possibly as root depending on
where you installed Open MPI.  Using this new [orterun] ([mpirun]),
your parallel debugger should be able to attach to MPI jobs.

Additionally, a user reported to us that setting some TotalView flags
may be helpful with attaching.  The user specifically cited the Open
MPI v1.3 series compiled with the Intel 11 compilers and TotalView
8.6, but it may also be helpful for other versions, too:

<geshi bash>
shell$ export with_tv_debug_flags=\"-O0 -g -fno-inline-functions\"
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "When launching large MPI jobs, I see messages like: <code>mca_oob_tcp_peer_complete_connect: connection failed: Connection timed out (110) - retrying</code>";

$anchor[] = "large-job-tcp-oob-timeout";

$a[] = "This is a known issue in the Open MPI v1.2. series.  Try the
following:

<ol>
<li>If you are using Linux-based systems, increase some of the limits
on the node where [mpirun] is invoked (you must have
administrator/root privlidges to increase these limits):
<geshi bash>
# The default is 128; increase it to 10,000
shell# echo 10000 > /proc/sys/net/core/somaxconn

# The default is 1,000; increase it to 100,000
shell# echo 100000 > /proc/sys/net/core/netdev_max_backlog
</geshi>
</li>

<li> Set the [oob_tcp_listen_mode] MCA parameter to the string value
[listen_thread].  This enables Open MPI's [mpirun] to respond much
more quickly to incoming TCP connections during job launch, for
example:
<geshi bash>
shell$ mpirun --mca oob_tcp_listen_mode listen_thread -np 1024 my_mpi_program
</geshi>
See <a href=\"?category=tuning#setting-mca-params\">this FAQ entry</a>
for more details on how to set MCA parameters.</li>
</ol>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I find out what MCA parameters are being seen/used by my job?";

$anchor[] = "seeing-mca-params";

$a[] = "As described elsewhere, MCA parameters are the \"life's blood\" of
Open MPI. MCA parameters are used to control both detailed and large-scale
behavior of Open MPI and are present throughout the code base.

This raises an important question: since MCA parameters can be set from a
file, the environment, the command line, and even internally within Open MPI,
how do I actually know what MCA params my job is seeing, and their value?

One way, of course, is to use the _ompi_info_ command, which is documented
elsewhere (you can use \"man ompi_info\", or \"ompi_info --help\" to get more info
on this command). However, this still doesn't fully answer the question since
_ompi_info_ isn't an MPI process.

To help relieve this problem, Open MPI (starting with the 1.3 release)
provides the MCA parameter _mpi_show_mca_params_ that directs the rank=0 MPI process to report the
name of MCA parameters, their current value as seen by that process, and
the source that set that value. The parameter can take several values that define
which MCA parameters to report:

<ul>
<li> _all_: report all MCA params. Note that this typically generates a rather long
list of parameters since it includes all of the default parameters defined inside
Open MPI</li>
<li> _default_: MCA params that are at their default settings - i.e., all
MCA params that are at the values set as default within Open MPI</li>
<li> _file_: MCA params that had their value set by a file</li>
<li> _api_: MCA params set using Open MPI's internal APIs, perhaps to override an incompatible
set of conditions specified by the user</li>
<li> _enviro_: MCA params that obtained their value either from the local environment
or the command line. Open MPI treats environmental and command line parameters as
equivalent, so there currently is no way to separate these two sources</li>
</ul>

These options can be combined in any order by separating them with commas.

Here is an example of the output generated by this parameter:

<geshi bash>
$ mpirun -mca grpcomm basic -mca mpi_show_mca_params enviro ./hello
ess=env (environment or cmdline)
orte_ess_jobid=1016725505 (environment or cmdline)
orte_ess_vpid=0 (environment or cmdline)
grpcomm=basic (environment or cmdline)
mpi_yield_when_idle=0 (environment or cmdline)
mpi_show_mca_params=enviro (environment or cmdline)
Hello, World, I am 0 of 1
</geshi>

Note that several MCA parameters set by Open MPI itself for internal uses are displayed in addition to the
ones actually set by the user.

Since the output from this option can be long, and since it can be helpful to have a more
permanent record of the MCA parameters used for a job, a companion MCA parameter
_mpi_show_mca_params_file_ is provided. If _mpi_show_mca_params_ is also set, the output listing of MCA parameters
will be directed into the specified file instead of being printed to stdout.";

