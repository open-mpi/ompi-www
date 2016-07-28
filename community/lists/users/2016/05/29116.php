<?
$subject_val = "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 08:27:50 2016" -->
<!-- isoreceived="20160506122750" -->
<!-- sent="Fri, 06 May 2016 13:27:45 +0100" -->
<!-- isosent="20160506122745" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v" -->
<!-- id="87futvfk1q.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="572B6EA7.4050106_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 08:27:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29117.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Previous message:</strong> <a href="29115.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>In reply to:</strong> <a href="29098.php">Gus Correa: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29108.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa &lt;gus_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hi Giacomo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some programs fail with segmentation fault
</span><br>
<span class="quotelev1">&gt; because the stack size is too small.
</span><br>
<p>Yes, the default for Intel Fortran is to allocate large-ish amounts on
<br>
the stack, which may matter when the compiled program runs.
<br>
<p>However, look at the backtrace.  It's apparently coming from the loader,
<br>
so something is pretty screwed up, though I can't guess what.  It would
<br>
help to have debugging symbols; always use at least -g and have
<br>
GNU/Linux distribution debuginfo packages to hand.
<br>
<p>[Probably not relevant in this case, but I try to solve problems with
<br>
the Intel compiler and MPI (sorry Jeff et al) by persuading users to
<br>
avoid them.  GCC is more reliable in my experience, and the story about
<br>
its supposedly poor code generation isn't supported by experiment (if
<br>
that counts for anything these days).]
<br>
<p><span class="quotelev1">&gt; [But others because of bugs in memory allocation/management, etc.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ulimit -s unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; before you run the program?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using a single machine or a cluster?
</span><br>
<span class="quotelev1">&gt; If you're using infiniband you may need also to make the locked memory
</span><br>
<span class="quotelev1">&gt; unlimited:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ulimit -l unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/05/2016 05:15 AM, Giacomo Rossi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   gdb /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt; GNU gdb (GDB) 7.11
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2016 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; License GPLv3+: GNU GPL version 3 or later
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev2">&gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev2">&gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev2">&gt;&gt; This GDB was configured as &quot;x86_64-pc-linux-gnu&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Type &quot;show configuration&quot; for configuration details.
</span><br>
<span class="quotelev2">&gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; Find the GDB manual and other documentation resources online at:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/documentation/">http://www.gnu.org/software/gdb/documentation/</a>&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; For help, type &quot;help&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Type &quot;apropos word&quot; to search for commands related to &quot;word&quot;...
</span><br>
<span class="quotelev2">&gt;&gt; Reading symbols from /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90...(no
</span><br>
<span class="quotelev2">&gt;&gt; debugging symbols found)...done.
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) r -v
</span><br>
<span class="quotelev2">&gt;&gt; Starting program: /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90 -v
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; 0x00007ffff6858f38 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007ffff6858f38 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007ffff7de5828 in _dl_relocate_object () from
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007ffff7ddcfa3 in dl_main () from /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007ffff7df029c in _dl_sysdep_start () from
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007ffff7dddd4a in _dl_start () from /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007ffff7dd9d98 in _start () from /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x0000000000000002 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007fffffffaa8a in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00007fffffffaab6 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Research Fellow at Dept. of Mechanical and Aerospace Engineering,
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Sapienza&quot; University of Rome
</span><br>
<span class="quotelev2">&gt;&gt;     *p: *(+39) 0692927207 | *m**: *(+39) 3408816643 | *e:
</span><br>
<span class="quotelev2">&gt;&gt;     *giacombum_at_[hidden] &lt;mailto:giacombum_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:giacomo.rossi_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="https://github.com/Fortran-FOSS-Programmers">https://github.com/Fortran-FOSS-Programmers</a>&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29117.php">Joshua Ladd: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Previous message:</strong> <a href="29115.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>In reply to:</strong> <a href="29098.php">Gus Correa: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29108.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
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
