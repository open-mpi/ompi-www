<?php

function f($name, $description) {
    return("<p><li><code>$name</code>: $description</li>\n\n");
}

$q[] = "What is the API provided by the PLPA?";

$anchor[] = "api";

$a[] = "The API provides 3 main functions and 4 macros:

<ul>
" .
f("plpa_api_probe(void)",
"Returns an enum indicating the level of processor affinity support on
your system that PLPA was able to discover.  It will be one of the
following:

<ul>
<li><strong><code>PLPA_PROBE_OK</code></strong>: Indicates that the
PLPA was able to successfully discover the version of processor
affinity API used on the system; future calls to other PLPA functions
should be successful.</li>

<li><strong><code>PLPA_PROBE_NOT_SUPPORTED</code></strong>: Indicates
that the PLPA was able to discover that processor affinity is not
supported on this system.  Future calls to other PLPA functions will
fail.</li>

<li><strong><code>PLPA_PROBE_UNKNOWN</code></strong>: Indicates that
the PLPA was unable to discover the version of processor affinity API
used on the system.  Future calls to other PLPA functions will
fail.</li>
</ul>") .

f("plpa_sched_setaffinity(pid_t pid, size_t cpusetsize, const plpa_cpu_set_t *cpuset)",

"Generally follows the behavior of the
<code>sched_setaffinity(3)</code> library call to set the processor
affinity for PID <code>pid</code>.  The <code>plpa_cpu_set_t</code>
type may be manipulated with the <code>PLPA_CPU_*</code> macros
(described below).  Additional error checking is performed in the
PLPA; the following values may be returned:

<ul>
<li><strong><code>0</code></strong>: Success.</li>

<li><strong><code>EINVAL</code></strong>: One of the following
occurred:

<ul>
<li>The CPU set size provided was both larger than permissable and
    bits were set that would be ignored by the kernel.</li>
<li>The CPU set size provided was too small.</li>
<li>The CPU set pointer was NULL.</li>
<li>PLPA was unable to determine the processor affinity API used on
this system; call <code>plpa_api_probe()</code> for more information.</li>
</ul>

<li><strong><code>ENOSYS</code></strong>: Processor affinity is not
supported on this system.</li>

</ul>") .

f("plpa_sched_getaffinity(pid_t pid, size_t cpusetsize, plpa_cpu_set_t *cpuset)",

"Generally follows the behavior of the
<code>sched_getaffinity(3)</code> library call to get the processor
affinity for PID <code>pid</code>.  The <code>plpa_cpu_set_t</code>
type may be manipulated with the <code>PLPA_CPU_*</code> macros
(described below).  Note that the PLPA guarantees to provide
meaningful information in the entire CPU set provided by the user,
even if it is larger than the kernel will fill in (e.g., high-order
bits that the kernel will not fill in will be zeroed out).  Additional
error checking is performed in the PLPA; the following values may be
returned:

<ul>
<li><strong><code>0</code></strong>: Success.</li>

<li><strong><code>EINVAL</code></strong>: One of the following
occurred:

<ul>
<li>The CPU set size provided was too small.</li>
<li>The CPU set pointer was NULL.</li>
<li>PLPA was unable to determine the processor affinity API used on
this system; call <code>plpa_api_probe()</code> for more information.</li>
</ul>

<li><strong><code>ENOSYS</code></strong>: Processor affinity is not
supported on this system.</li>

</ul>") .

f("PLPA_CPU_ZERO(cpuset)", "This macro zeros out the CPU set pointed
to by the <code>cpuset</code> argument.") .

f("PLPA_CPU_SET(num, cpuset)", "This macro sets bit <code>num</code>
in the CPU set pointed to by the <code>cpuset</code> argument.") .

f("PLPA_CPU_CLR(num, cpuset)", "This macro clears bit <code>num</code>
in the CPU set pointed to by the <code>cpuset</code> argument.") .

f("PLPA_CPU_ISSET(num, cpuset)", "This macro returns the value of the
bit <code>num</code> in the CPU set pointed to by the
<code>cpuset</code> argument -- either 0 or 1.") .

"</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I include the PLPA in my software project?";

$anchor[] = "include-mode";

$a[] = "Yes.

The PLPA was specifically designed to be safely included in other
software projects.  The PLPA provides an M4 macro file suitable for
[acinclude]'ing in a top-level [configure] script, and also has a
name-shifting mechanism for its API so that if multiple libraries
include name-shifted versions of the PLPA, there will be no symbol
conflicts.

" . "<a href=\"http://svn.open-mpi.org/svn/plpa/trunk/README\">"
. "The PLPA README file</a> has more details on the name shifting
mechanism.

The PLPA is licensed under " .
"<a href=\"http://svn.open-mpi.org/svn/plpa/trunk/LICENSE\">" . "
the BSD license</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How does the PLPA figure out which kernel API to use?";

$anchor[] = "kernel-mode-api";

$a[] = "The PLPA uses the [syscall()] interface to bypass GLibc and
directly call the get and set affinity functions in the Linux kernel.
This is because the GLibc API has changed multiple times, and there
are buggy versions in real linux distributions that cause problems.
Bypassing it and directly callign the kernel seemed the safest route.

But even so, the kernel has slightly changed its API a few times.
Mostly, this has to deal with the [len] parameter (telling the kernel
how long the CPU set argument it).  Careful examiniation of the kernel
source code has led to a fairly small number of safe tests that can be
performed to determine which size it expects.

The PLPA hides all this from the user -- it will figure out what size
the kernel expects and use it in all the [syscall()] interactions with
the set and get affinity functions.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I'm having a problem!  What should I do?";

$anchor[] = "reporting-problems";

$a[] = "If you can't get the PLPA to compile, please see the Open MPI
<a href=\"$topdir/community/help/\">Getting Help</a> page to see what
details to send to the <a
href=\"$topdir/community/lists/plpa.php\">PLPA User's Mailing
List</a>.

If you are having problems with the PLPA run-time, please send a <font
color=red>detailed</font> message the <a
href=\"$topdir/community/lists/plpa.php\">PLPA User's Mailing
List</a> describing what is going wrong.  The more information that
you provide, the better.  Mails saying \"It doesn't work -- help me!\"
will simply be met with requests for more information, so please just
sent it all the first time.

Please be sure to include the output of [plpa_info] in your message.";
