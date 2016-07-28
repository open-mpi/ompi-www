<?
$subject_val = "[OMPI devel] Communicator based on locality of PU";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 28 06:06:11 2014" -->
<!-- isoreceived="20141128110611" -->
<!-- sent="Fri, 28 Nov 2014 11:05:50 +0000" -->
<!-- isosent="20141128110550" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="[OMPI devel] Communicator based on locality of PU" -->
<!-- id="CAAbhqc4hjV8hrEdQKof52Wf94e5CzXEDP+aHahGRB8LpKO5UPg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] Communicator based on locality of PU<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-28 06:05:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<li><strong>Previous message:</strong> <a href="16370.php">Alvyn Liang: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, Jeff, missed your msg about sending it to the dev list.
<br>
<p>Background:
<br>
I wanted to be able to easily generate communicators based on locality of
<br>
PU used in MPI.
<br>
My initial idea is to use MPI_Win_Create to create shared memory based on
<br>
locality.
<br>
In my line of ideas I have a few arrays which are rarely needed, and when
<br>
they are I need all information from all processors.
<br>
Instead of performing full AllGather I could use a shared memory base and
<br>
skip the overhead of communication and only have overhead of memory
<br>
locality. Ok, this might be too specific, but I wanted to test it to learn
<br>
something about shared memory in MPI ;)
<br>
<p>This functionality is already existing in the hwloc base, it contains all
<br>
the information that is needed.
<br>
<p>So I worked on the idea and got MPI to recognize a few more flags based on
<br>
the locality provided by hwloc.
<br>
The function MPI_Comm_Split_Type already provides this type of splitting:
<br>
MPI_COMM_TYPE_SHARED
<br>
which pretty much does what I wanted.
<br>
But it fell short of the general scheme to all levels of control.
<br>
<p>So I added different communicator splittings based on these locality
<br>
segments:
<br>
OMPI_COMM_TYPE_CU
<br>
OMPI_COMM_TYPE_HOST
<br>
OMPI_COMM_TYPE_BOARD
<br>
OMPI_COMM_TYPE_NODE // same as MPI_COMM_TYPE_SHARED
<br>
MPI_COMM_TYPE_SHARED // same as OMPI_COMM_TYPE_NODE
<br>
OMPI_COMM_TYPE_NUMA
<br>
OMPI_COMM_TYPE_SOCKET
<br>
OMPI_COMM_TYPE_L3CACHE
<br>
OMPI_COMM_TYPE_L2CACHE
<br>
OMPI_COMM_TYPE_L1CACHE
<br>
OMPI_COMM_TYPE_CORE
<br>
OMPI_COMM_TYPE_HWTHREAD
<br>
<p>My branch can be found at: <a href="https://github.com/zerothi/ompi">https://github.com/zerothi/ompi</a>
<br>
<p>First a small &quot;bug&quot; report on the compilation:
<br>
I had problems right after the autogen.pl script.
<br>
Procedure:
<br>
$&gt; git clone .. ompi
<br>
$&gt; cd ompi
<br>
$&gt; ./autogen.pl
<br>
My build versions:
<br>
m4: 1.4.17
<br>
automake: 1.14
<br>
autoconf: 2.69
<br>
libtool: 2.4.3
<br>
the autogen completes successfully (attached is the autogen output if
<br>
needed)
<br>
$&gt; mkdir build
<br>
$&gt; cd build
<br>
$&gt; ../configure --with-platform=optimized
<br>
I have attached the config.log (note that I have tested it with both the
<br>
shipped 1.9.1 and 1.10.0 hwloc)
<br>
$&gt; make all
<br>
Error message is:
<br>
make[2]: Entering directory '/home/nicpa/test/build/opal/libltdl'
<br>
CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd ../../../opal/libltdl &amp;&amp; /bin/bash
<br>
/home/nicpa/test/config/missing aclocal-1.14 -I ../../config
<br>
aclocal-1.14: error: ../../config/autogen_found_items.m4:308: file
<br>
'opal/mca/backtrace/configure.m4' does not exist
<br>
this error message is the same as found:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2013/07/12504.php">http://www.open-mpi.org/community/lists/devel/2013/07/12504.php</a>
<br>
My work-around is simple
<br>
It has to do with the created ACLOCAL_AMFLAGS variable
<br>
in build/opal/libltdl/Makefile
<br>
OLD:
<br>
ACLOCAL_AMFLAGS = -I ../../config
<br>
CORRECT:
<br>
ACLOCAL_AMFLAGS = -I ../../
<br>
Either the configure script creates the wrong include paths for the m4
<br>
scripts, or the m4 scripts are not copied fully to the config directory.
<br>
Ok, it works and the fix is simple. I just wonder why?
<br>
<p><p>First here is my test system 1:
<br>
$&gt; hwloc-info
<br>
depth 0: 1 Machine (type #1)
<br>
depth 1: 1 Socket (type #3)
<br>
depth 2: 1 L3Cache (type #4)
<br>
depth 3: 2 L2Cache (type #4)
<br>
depth 4: 2 L1dCache (type #4)
<br>
depth 5: 2 L1iCache (type #4)
<br>
depth 6: 2 Core (type #5)
<br>
depth 7: 4 PU (type #6)
<br>
Special depth -3: 2 Bridge (type #9)
<br>
Special depth -4: 4 PCI Device (type #10)
<br>
Special depth -5: 5 OS Device (type #11)
<br>
<p>and my test system 2:
<br>
depth 0: 1 Machine (type #1)
<br>
depth 1: 1 Socket (type #3)
<br>
depth 2: 1 L3Cache (type #4)
<br>
depth 3: 4 L2Cache (type #4)
<br>
depth 4: 4 L1dCache (type #4)
<br>
depth 5: 4 L1iCache (type #4)
<br>
depth 6: 4 Core (type #5)
<br>
depth 7: 8 PU (type #6)
<br>
Special depth -3: 3 Bridge (type #9)
<br>
Special depth -4: 3 PCI Device (type #10)
<br>
Special depth -5: 4 OS Device (type #11)
<br>
<p>Here is an excerpt of what it can do (I have attached a fortran program
<br>
that creates a communicator using all types):
<br>
<p>$&gt; mpirun -np 4 ./comm_split
<br>
Example of MPI_Comm_Split_Type
<br>
<p>Currently using 4 nodes.
<br>
<p>Comm using CU Node: 2 local rank: 2 out of 4 ranks
<br>
Comm using CU Node: 3 local rank: 3 out of 4 ranks
<br>
Comm using CU Node: 1 local rank: 1 out of 4 ranks
<br>
Comm using CU Node: 0 local rank: 0 out of 4 ranks
<br>
<p>Comm using Host Node: 0 local rank: 0 out of 4 ranks
<br>
Comm using Host Node: 2 local rank: 2 out of 4 ranks
<br>
Comm using Host Node: 3 local rank: 3 out of 4 ranks
<br>
Comm using Host Node: 1 local rank: 1 out of 4 ranks
<br>
<p>Comm using Board Node: 2 local rank: 2 out of 4 ranks
<br>
Comm using Board Node: 3 local rank: 3 out of 4 ranks
<br>
Comm using Board Node: 1 local rank: 1 out of 4 ranks
<br>
Comm using Board Node: 0 local rank: 0 out of 4 ranks
<br>
<p>Comm using Node Node: 0 local rank: 0 out of 4 ranks
<br>
Comm using Node Node: 1 local rank: 1 out of 4 ranks
<br>
Comm using Node Node: 2 local rank: 2 out of 4 ranks
<br>
Comm using Node Node: 3 local rank: 3 out of 4 ranks
<br>
<p>Comm using Shared Node: 0 local rank: 0 out of 4 ranks
<br>
Comm using Shared Node: 3 local rank: 3 out of 4 ranks
<br>
Comm using Shared Node: 1 local rank: 1 out of 4 ranks
<br>
Comm using Shared Node: 2 local rank: 2 out of 4 ranks
<br>
<p>Comm using Numa Node: 0 local rank: 0 out of 1 ranks
<br>
Comm using Numa Node: 2 local rank: 0 out of 1 ranks
<br>
Comm using Numa Node: 3 local rank: 0 out of 1 ranks
<br>
Comm using Numa Node: 1 local rank: 0 out of 1 ranks
<br>
<p>Comm using Socket Node: 1 local rank: 0 out of 1 ranks
<br>
Comm using Socket Node: 2 local rank: 0 out of 1 ranks
<br>
Comm using Socket Node: 3 local rank: 0 out of 1 ranks
<br>
Comm using Socket Node: 0 local rank: 0 out of 1 ranks
<br>
<p>Comm using L3 Node: 0 local rank: 0 out of 1 ranks
<br>
Comm using L3 Node: 3 local rank: 0 out of 1 ranks
<br>
Comm using L3 Node: 1 local rank: 0 out of 1 ranks
<br>
Comm using L3 Node: 2 local rank: 0 out of 1 ranks
<br>
<p>Comm using L2 Node: 2 local rank: 0 out of 1 ranks
<br>
Comm using L2 Node: 3 local rank: 0 out of 1 ranks
<br>
Comm using L2 Node: 1 local rank: 0 out of 1 ranks
<br>
Comm using L2 Node: 0 local rank: 0 out of 1 ranks
<br>
<p>Comm using L1 Node: 0 local rank: 0 out of 1 ranks
<br>
Comm using L1 Node: 1 local rank: 0 out of 1 ranks
<br>
Comm using L1 Node: 2 local rank: 0 out of 1 ranks
<br>
Comm using L1 Node: 3 local rank: 0 out of 1 ranks
<br>
<p>Comm using Core Node: 0 local rank: 0 out of 1 ranks
<br>
Comm using Core Node: 3 local rank: 0 out of 1 ranks
<br>
Comm using Core Node: 1 local rank: 0 out of 1 ranks
<br>
Comm using Core Node: 2 local rank: 0 out of 1 ranks
<br>
<p>Comm using HW Node: 2 local rank: 0 out of 1 ranks
<br>
Comm using HW Node: 3 local rank: 0 out of 1 ranks
<br>
Comm using HW Node: 1 local rank: 0 out of 1 ranks
<br>
Comm using HW Node: 0 local rank: 0 out of 1 ranks
<br>
<p>This is the output on both systems (note that I in the first system
<br>
oversubscribe the node). I have not tested it on a cluster :(.
<br>
One thing that worries me is that the SOCKET and L3 cache split types are
<br>
not of size 4? I only have one socket, and one L3 cache, so they must be
<br>
sharing?
<br>
I am not so sure about NUMA in this case. If you need any more information
<br>
about my setup to debug this, please let me know.
<br>
Or am I completely missing something?
<br>
<p>I tried looking into the opal/mca/hwloc/hwloc.h, but I have no idea whether
<br>
they are related to the problem or not.
<br>
<p>If you think, I can make a pull request at its current stage?
<br>
<p><pre>
--
Kind regards Nick



</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16371/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16371/autogen.out.bz2">autogen.out.bz2</a>
</ul>
<!-- attachment="autogen.out.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16371/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16371/comm_split.f90">comm_split.f90</a>
</ul>
<!-- attachment="comm_split.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16372.php">Ralph Castain: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<li><strong>Previous message:</strong> <a href="16370.php">Alvyn Liang: "Re: [OMPI devel] Setting up debug environment on Eclipse PTP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
