<?php

include_once("$topdir/software/ompi/current/version.inc");

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I debug Open MPI processes in parallel?";

$anchor[] = "general-parallel-debugging";

$a[] = "This is a difficult question.  Debugging in serial can be
tricky: errors, uninitialized variables, stack smashing, etc.
Debugging in parallel adds multiple different dimensions to this
problem: a greater propensity for race conditions, asynchronous
events, and the general difficulty of trying to understand N processes
simultaneously executing &mdash; the problem becomes quite formidable.

This FAQ section does not provide any definite solutions to
debugging in parallel.  At best, it shows some general techniques and
a few specific examples that may be helpful to your situation.

But there are various controls within Open MPI that can help with
debugging.  These are probably the most valuable entries in this FAQ
section.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What tools are available for debugging in parallel?";

$anchor[] = "debug-tools";

$a[] = "There are two main categories of tools that can aid in
parallel debugging:

<ul>
<li> *Debuggers:* Both serial and parallel debuggers are useful.
Serial debuggers are what most programmers are used to (e.g., gdb),
while parallel debuggers can attach to all the individual processes in
an MPI job simultaneously, treating the MPI application as a single
entity.  This can be an extremely powerful abstraction, allowing the
user to control every aspect of the MPI job, manually replicate race
conditions, etc.</li>

<li> *Profilers:* Tools that analyze your usage of MPI and display
statistics and meta information about your application's run.  Some
tools present the information \"live\" (as it occurs), while others
collect the information and display it in a post mortem analysis.</li>
</ul>

Both freeware and commercial solutions are available for each kind of
tool.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I run with parallel debuggers?";

$anchor[] = "parallel-debuggers";

$a[] = "See these FAQ entries:

<ul>
<li><a href=\"./?category=running#run-with-tv\">Running under
TotalView</a></li>
<li><a href=\"./?category=running#run-with-ddt\">Running under
DDT</a></li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "What controls does Open MPI have that aid in debugging?";

$anchor[] = "debug-ompi-controls";

$a[] = "Open MPI has a series of MCA parameters for the MPI layer
itself that are designed to help with debugging.  These parameters can
be <a href=\"?category=tuning#setting-mca-params\">can be set in the
usual ways</a>.  MPI-level MCA parameters can be displayed by invoking
the following command:

<geshi bash>
# Starting with Open MPI v1.7, you must use \"--level 9\" to see
# all the MCA parameters (the default is \"--level 1\"):
shell$ ompi_info --param mpi all --level 9

# Before Open MPI v1.7:
shell$ ompi_info --param mpi all
</geshi>

Here is a summary of the debugging parameters for the MPI layer:

<ul>
<li> *mpi_param_check:* If set to true (any positive value), and when
Open MPI is compiled with parameter checking enabled (the default),
the parameters to each MPI function can be passed through a series of
correctness checks.  Problems such as passing illegal values (e.g.,
NULL or MPI_DATATYPE_NULL or other \"bad\" values) will be discovered
at run time and an MPI exception will be invoked (the default of which
is to print a short message and abort the entire MPI job).  If set to
0, these checks are disabled, slightly increasing performance.</li>

<li> *mpi_show_handle_leaks:* If set to true (any positive value),
OMPI will display lists of any MPI handles that were not freed before
MPI_FINALIZE (e.g., communicators, datatypes, requests, etc.).</li>

<li> *mpi_no_free_handles:* If set to true (any positive value), do
not actually free MPI objects when their corresponding MPI \"free\"
function is invoked (e.g., do not free communicators when MPI_COMM_FREE is
invoked).  This can be helpful in tracking down applications that
accidentally continue to use MPI handles after they have been
freed.</li>

<li> *mpi_show_mca_params:* If set to true (any positive value), show
a list of all MCA parameters and their values during MPI_INIT.  This
can be quite helpful for reproducibility of MPI applications.</li>

<li> *mpi_show_mca_params_file:* If set to a non-empty value, and if
the value of *mpi_show_mca_params* is true, then output the list of
MCA parameters to the filename value.  If this parameter is an empty
value, the list is sent to stderr.</li>

<li> *mpi_keep_peer_hostnames:* If set to a true value (any positive
value), send the list of all hostnames involved in the MPI job to
every process in the job.  This can help the specificity of error
messages that Open MPI emits if a problem occurs (i.e., Open MPI can
display the name of the peer host that it was trying to communicate
with), but it can somewhat slow down the startup of large-scale
MPI jobs.</li>

<li> *mpi_abort_delay:* If nonzero, print out an identifying message
when MPI_ABORT is invoked showing the hostname and PID of the process
that invoked MPI_ABORT, and then delay that many seconds before
exiting.  A negative value means to delay indefinitely.  This allows a
user to manually come in and attach a debugger when an error occurs.
Remember that the default MPI error handler &mdash; MPI_ERRORS_ABORT &mdash;
invokes MPI_ABORT, so this parameter can be useful to discover
problems identified by *mpi_param_check*.</li>

<li> *mpi_abort_print_stack:* If nonzero, print out a stack trace (on
supported systems) when MPI_ABORT is invoked.</li>

<li> *mpi_ddt_&lt;foo&gt;_debug*, where *&lt;foo&gt;* can be one of
*pack*, *unpack*, *position*, or *copy*: These are internal debugging
features that are not intended for end users (but [ompi_info] will
report that they exist).
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Do I need to build Open MPI with compiler/linker debugging
flags (such as <code>-g</code>) to be able to debug MPI applications?";

$anchor[] = "build-ompi-with-g";

$a[] = "No.

If you build Open MPI without compiler/linker debugging flags (such as
<code>-g</code>), you will not be able to step inside MPI functions
when you debug your MPI applications.  However, this is likely what
you want &mdash; the internals of Open MPI are quite complex and you
probably don't want to start poking around in there.

You'll need to compile your own applications with [-g] (or whatever
your compiler's equivalent is), but unless you have a need/desire to
be able to step into MPI functions to see the internals of Open MPI,
you do not need to build Open MPI with [-g].";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I use serial debuggers (such as <code>gdb</code>) to debug MPI
applications?";

$anchor[] = "serial-debuggers";

$a[] = "Yes; the Open MPI developers do this all the time.

There are two common ways to use serial debuggers:

<ol>
<li> *Attach to individual MPI processes after they are running.*

For example, launch your MPI application as normal with [mpirun].
Then login to the node(s) where your application is running and use
the [--pid] option to [gdb] to attach to your application.

An inelegant-but-functional technique commonly used with this method
is to insert the following code in your application where you want to
attach:

<geshi c>
{
    volatile int i = 0;
    char hostname[256];
    gethostname(hostname, sizeof(hostname));
    printf(\"PID %d on %s ready for attach\\n\", getpid(), hostname);
    fflush(stdout);
    while (0 == i)
        sleep(5);
}
</geshi>

This code will output a line to stdout outputting the name of the host
where the process is running and the PID to attach to.  It will then
spin on the [sleep()] function forever waiting for you to attach with
a debugger.  Using [sleep()] as the inside of the loop means that the
processor won't be pegged at 100% while waiting for you to attach.

Once you attach with a debugger, go up the function stack until you
are in this block of code (you'll likely attach during the [sleep()])
then set the variable [i] to a nonzero value.  With GDB, the syntax
is:

<geshi bash>
(gdb) set var i = 7
</geshi>

Then set a breakpoint after your block of code and continue execution
until the breakpoint is hit.  Now you have control of your live MPI
application and use of the full functionality of the debugger.

You can even add conditionals to only allow this \"pause\" in the
application for specific MPI processes (e.g., MPI_COMM_WORLD rank 0,
or whatever process is misbehaving).

</li>

<li> <strong>Use <code>mpirun</code> to launch <code>xterm</code>s
(or equivalent) with serial debuggers.</strong>

This technique launches a separate window for each MPI process in
MPI_COMM_WORLD, each one running a serial debugger (such as [gdb])
that will launch and run your MPI application.  Having a separate
window for each MPI process can be quite handy for low process-count
MPI jobs, but requires a bit of setup and configuration that is
outside of Open MPI to work properly.  A naive approach would be to
assume that the following would immediately work:

<geshi bash>
shell$ mpirun -np 4 xterm -e gdb my_mpi_application
</geshi>

If running on a personal computer, this will probably work.
Unfortunately, it likely _won't_ work on an computing cluster.
Several factors must be considered:

<ol>

<li> What launcher is Open MPI using?  In an rsh/ssh environment, Open
MPI will default to using [ssh] when it is available, falling back to
[rsh] when [ssh] cannot be found in the [\$PATH].  But note that Open
MPI closes the [ssh] (or [rsh]) sessions when the MPI job starts for
scalability reasons.  This means that the built-in SSH X forwarding
tunnels will be shut down before the [xterms] can be launched.
Although it is possible to force Open MPI to keep its SSH connections
active (to keep the X tunneling available), we recommend using
non-SSH-tunneled X connections, if possible (see below).</li>

<li> In non-rsh/ssh environments (such as when using resource
managers), the environment of the process invoking [mpirun] may be
copied to all nodes.  In this case, the [DISPLAY] environment variable
may not be suitable.</li>

<li> Some operating systems default to disabling the X11 server from
listening for remote/network traffic.  For example, see <a
href=\"https://www.open-mpi.org/community/lists/users/2008/02/4995.php\">this
post on the user's mailing list</a>, describing how to enable network
access to the X11 server on Fedora Linux.</li>

<li> There may be intermediate firewalls or other network blocks that
prevent X traffic from flowing between the hosts where the MPI
processes (and <code>xterm</code>s) are running and the host connected
to the output display.</li>

</ol>

The easiest way to get remote X applications (such as
<code>xterm</code>) to display on your local screen is to forego the
security of SSH-tunneled X forwarding.  In a closed environment such
as an HPC cluster, this may be an acceptable practice (indeed, you may
not even have the option of using SSH X forwarding if SSH logins
to cluster nodes are disabled), but check with your security
administrator to be sure.

If using non-encrypted X11 forwarding is permissible, we recommend the
following:

<ol>

<li> For each non-local host where you will be running an MPI process,
add it to your X server's permission list with the [xhost] command.
For example:

<geshi bash>
shell$ cat my_hostfile
inky
blinky
stinky
clyde
shell$ for host in `cat my_hostfile` ; do xhost +host ; done
</geshi>

<li> Use the [-x] option to [mpirun] to export an appropriate DISPLAY
variable so that the launched X applications know where to send their
output.  An appropriate value is _usually_ (but not always) the
hostname containing the display where you want the output and the [:0]
(or [:0.0]) suffix.  For example:

<geshi bash>
shell$ hostname
arcade.example.come
shell$ mpirun -np 4 --hostfile my_hostfile \
    -x DISPLAY=arcade.example.com:0 xterm -e gdb my_mpi_application
</geshi>

Note that X traffic is fairly \"heavy\" &mdash; if you are operating over a
slow network connection, it may take some time before the [xterm]
windows appear on your screen.</li>

<li> If your [xterm] supports it, the [-hold] option may be useful.
[-hold] tells [xterm] to stay open even when the application has
completed.  This means that if something goes wrong (e.g., [gdb] fails
to execute, or unexpectedly dies, or ...), the [xterm] window will
stay open, allowing you to see what happened, instead of closing
immediately and losing whatever error message may have been
output.</li>

<li> When you have finished, you may wish to disable X11 network
permissions from the hosts that you were using.  Use [xhost] again to
disable these permissions:

<geshi bash>
shell$ for host in `cat my_hostfile` ; do xhost -host ; done
</geshi>
</li>

</ol>

Note that [mpirun] will not complete until all the <code>xterm</code>s
complete.

</li>
</ol>
";

//////////////////////////////////////////////////////////

$q[] = "My process dies without any output.  Why?";

$anchor[] = "disable-error-message-aggregation";

$a[] = "There many be many reasons for this; the Open MPI Team
strongly encourages the use of tools (such as debuggers) whenever
possible.

One of the reasons, however, may come from inside Open MPI itself.  If
your application fails due to memory corruption, Open MPI may
subsequently fail to output an error message before dying.
Specifically, starting with v1.3, Open MPI attempts to aggregate error
messages from multiple processes in an attempt to show unique error
messages only once (vs. one for each MPI process &mdash; which can be
unwieldy, especially when running large MPI jobs).

However, this aggregation process requires allocating memory in the
MPI process when it displays the error message.  If the process's
memory is already corrupted, Open MPI's attempt to allocate memory may
fail and the process will simply die, possibly silently.  When Open
MPI does not attempt to aggregate error messages, most of its setup
work is done during MPI_INIT and no memory is allocated during the
\"print the error\" routine.  It therefore almost always successfully
outputs error messages in real time &mdash; but at the expense that you'll
potentially see the same error message for *each* MPI process that
encountered the error.

Hence, the error message aggregation is _usually_ a good thing, but
sometimes it can mask a real error.  You can disable Open MPI's error
message aggregation with the [orte_base_help_aggregate] MCA
parameter.  For example:

<geshi bash>
shell$ mpirun --mca orte_base_help_aggregate 0 ...
</geshi>";

//////////////////////////////////////////////////////////

$q[] = "What is Memchecker?";

$anchor[] = "memchecker_what";

$a[] = "The Memchecker-MCA is implemented to allow MPI-semantic
checking for your application (as well as internals of Open MPI), with
the help of memory checking tools such as the Memcheck of the
Valgrind-suite (" . "<a href=\"http://www.valgrind.org/\">"
. "http://www.valgrind.org/</a>).

Memchecker component is included in Open MPI v1.3 and later.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What kind of errors can Memchecker find?";

$anchor[] = "memchecker_errors";

$a[] = "Memchecker is implemented on the basis of the Memcheck tool from
Valgrind, so it takes all the advantages from it. Firstly, it checks
all reads and writes of memory, and intercepts calls to
malloc/new/free/delete. Most importantly, Memchecker is able to detect
the user buffer errors in both Non-blocking and One-sided
communications, e.g. reading or writing to buffers of active
non-blocking Recv-operations and writing to buffers of active
non-blocking Send-operations.

Here are some example codes that Memchecker can detect:

Accessing buffer under control of non-blocking communication:
<geshi c>
int buf;
MPI_Irecv(&buf, 1, MPI_INT, 1, 0, MPI_COMM_WORLD, &req);
// The following line will produce a memchecker warning
buf = 4711;
MPI_Wait (&req, &status);
</geshi>


Wrong input parameters, e.g. wrongly sized send buffers:
<geshi c>
char *send_buffer;
send_buffer = malloc(5);
memset(send_buffer, 0, 5);
// The following line will produce a memchecker warning
MPI_Send(send_buffer, 10, MPI_CHAR, 1, 0, MPI_COMM_WORLD);
</geshi>


Accessing window under control of one-sided communication:
<geshi c>
MPI_Get(A, 10, MPI_INT, 1, 0, 1, MPI_INT, win);
A[0] = 4711;
MPI_Win_fence(0, win);
</geshi>

Uninitialized input buffers:
<geshi c>
char *buffer;
buffer = malloc(10);
// The following line will produce a memchecker warning
MPI_Send(buffer, 10, MPI_INT, 1, 0, MPI_COMM_WORLD);
</geshi>


Usage of the uninitialized MPI_Status field in MPI_ERROR structure:
(The MPI-1 standard defines the MPI ERROR-field to be undefined for
single-completion calls such as MPI Wait or MPI Test, see MPI-1 p. 22):
<geshi c>
MPI_Wait(&request, &status);
// The following line will produce a memchecker warning
if (status.MPI_ERROR != MPI_SUCCESS)
    return ERROR;
</geshi>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "How can I use Memchecker?";

$anchor[] = "memchecker_how";

$a[] = "To use Memchecker, you need Open MPI 1.3 or later, and
Valgrind 3.2.0 or later.

As this functionality is *off* by default, one needs to turn them on
with the configure flag [--enable-memchecker].  Then, [configure] will
check for a recent Valgrind-distribution and include the compilation
of [ompi/opal/mca/memchecker]. You may ensure that the library is
being built by using the [ompi_info] application. Please note that
all of this will only make sense together with [--enable-debug], which
is required by Valgrind for outputting messages pointing directly to
the relevant source code lines. Otherwise, without debugging info,
the messages from Valgrind are nearly useless.

Here is a configuration example to enable Memchecker:

<geshi bash>
shell$ ./configure --prefix=/path/to/openmpi --enable-debug \
    --enable-memchecker --with-valgrind=/path/to/valgrind
</geshi>

To check if Memchecker is successfully enabled after installation,
simply run this command:

<geshi bash>
shell$ ompi_info | grep memchecker
</geshi>

You will get an output message like this:

<geshi text>
    MCA memchecker: valgrind (MCA v1.0, API v1.0, Component v1.3)
</geshi>

Otherwise, you probably didn't configure and install Open MPI correctly.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How to run my MPI application with Memchecker?";

$anchor[] = "memchecker_run";

$a[] = "First of all, you have to make sure that Valgrind 3.2.0 or
later is installed, and Open MPI is compiled with Memchecker
enabled. Then simply run your application with Valgrind, e.g.:

<geshi bash>
shell$ mpirun -np 2 valgrind ./my_app
</geshi>

Or if you enabled Memchecker, but you don't want to check the
application at this time, then just run your application as
usual. E.g.:

<geshi bash>
shell$ mpirun -np 2 ./my_app
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Memchecker cause performance degradation to my application?";

$anchor[] = "memchecker_overhead";

$a[] = "The configure option [--enable-memchecker] (together with [--enable-debug]) *does*
cause performance degradation, even if not running under Valgrind.
The following explains the mechanism and may help in making the decision
whether to provide a cluster-wide installation with [--enable-memchecker].

There are two cases:
<ul>
<li>
   If run without Valgrind, the Valgrind ClientRequests (assembler
   instructions added to the normal execution path for checking) do
   not affect overall MPI performance. Valgrind ClientRequests are
   explained in detail in
   " . "<a href=\"http://valgrind.org/docs/manual/manual-core-adv.html\">"
    . "Valgrind's documentation</a>.
   In the case of x86-64 ClientRequests boil down to the following
   four rotate-left (ROL) and one xchange (XCHG) assembler instructions
   (from <code>valgrind.h</code>):
<geshi c>
#define __SPECIAL_INSTRUCTION_PREAMBLE                      \
                     \"rolq \$3,  %%rdi; rolq \$13, %%rdi\\n\\t\" \
                     \"rolq \$61, %%rdi; rolq \$51, %%rdi\\n\\t\"
</geshi>
and
<geshi c>
    __asm__ volatile(__SPECIAL_INSTRUCTION_PREAMBLE         \
                     /* %RDX = client_request ( %RAX ) */   \
                     \"xchgq %%rbx,%%rbx\"                    \
                     : \"=d\" (_zzq_result)                   \
                     : \"a\" (& _zzq_args[0]), \"0\" (_zzq_default)   \
                     : \"cc\", \"memory\"                       \
                    );                                      \
</geshi>
   for every single ClientRequest.  In the case of not running
   Valgrind, these ClientRequest instructions do not change the
   arithmetic outcome (rotating a 64-bit register left by 128-Bits,
   exchanging a register with itself), except for the carry flag.

   The first request is checking whether we're running under Valgrind.
   In case we're not running under Valgrind subsequent checks (aka ClientRequests)
   are not done.</li>

<li>
   If the application is run under Valgrind, performance is naturally reduced due
   to the Valgrind JIT and the checking tool employed.
   For costs and overheads of Valgrind's Memcheck tool on the SPEC 2000 Benchmark,
   please see the excellent paper
   \"" . "<a href=\"http://valgrind.org/docs/valgrind2007.pdf\">"
    . "Valgrind: A Framework for Heavyweight Dynamic Binary Instrumentation</a>\".
   For an evaluation of various internal implementation alternatives of Shadow Memory, please see
   \"" . "<a href=\"http://www.valgrind.org/njn/pubs/shadow-memory2007-talk.ppt\">"
    . "Building Workload Characterization Tools with Valgrind</a>\".</li>
</ul>


Further information and performance data with the NAS Parallel Benchmarks
may be found in the paper <a
HREF=\"$topdir/papers/parco-2007/\">Memory Debugging of MPI-Parallel
Applications in Open MPI</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Is Open MPI 'Valgrind-clean' or how can I identify real errors?";

$anchor[] = "valgrind_clean";

$a[] = "
This issue has been raised many times on the mailing list, e.g.,
<a HREF=\"$topdir/community/lists/users/2007/05/3192.php\">here</a> or
<a HREF=\"$topdir/community/lists/users/2009/06/9565.php\">here</a>.

There are many situations where Open MPI purposefully does not initialize and
subsequently communicates memory, e.g., by calling <code>writev</code>.
Furthermore, several cases are known where memory is not properly freed upon
<code>MPI_Finalize</code>.

This certainly does not help distinguishing real errors from false positives.
Valgrind provides functionality to suppress errors and warnings from certain
function contexts.

In an attempt to ease debugging using Valgrind, starting with v1.5, Open MPI
provides a so-called Valgrind-suppression file, that can be passed on the
command line:
<geshi bash>
mpirun -np 2 valgrind --suppressions=\$PREFIX/share/openmpi/openmpi-valgrind.supp
</geshi>

More information on suppression-files and how to generate
them can be found in
" . "<a href=\"http://valgrind.org/docs/manual/manual-core.html#manual-core.suppress\">"
 . "Valgrind's Documentation</a>.
";

