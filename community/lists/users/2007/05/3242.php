<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 20:54:04 2007" -->
<!-- isoreceived="20070511005404" -->
<!-- sent="Thu, 10 May 2007 19:53:56 -0500" -->
<!-- isosent="20070511005356" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] debugging my program in openmpi" -->
<!-- id="200705101953.57365.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1626092b0705101719u4bc07235m18224fd6dbac20f9_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 20:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3243.php">Code Master: "Re: [OMPI users] debugging my program in openmpi"</a>
<li><strong>Previous message:</strong> <a href="3241.php">Code Master: "[OMPI users] debugging my program in openmpi"</a>
<li><strong>In reply to:</strong> <a href="3241.php">Code Master: "[OMPI users] debugging my program in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3243.php">Code Master: "Re: [OMPI users] debugging my program in openmpi"</a>
<li><strong>Reply:</strong> <a href="3243.php">Code Master: "Re: [OMPI users] debugging my program in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 10 May 2007 07:19 pm, Code Master wrote:
<br>
<span class="quotelev1">&gt; I am a newbie in openmpi.  I have just compiled a program with -g -pg (an
</span><br>
<span class="quotelev1">&gt; mpi program with a listener thread, which all MPI calls except
</span><br>
<span class="quotelev1">&gt; initialization and MPI_Finalize are placed within)  and I run it.  However
</span><br>
<span class="quotelev1">&gt; it crashes and I can't find any core dump, even I set the core dump max
</span><br>
<span class="quotelev1">&gt; size to 100000 by
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ulimit -c 100000
</span><br>
You probably need to set the ulimit in your .bashrc to get a core dump, since 
<br>
processes are (by default) started via ssh.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:(nil)
</span><br>
<span class="quotelev1">&gt; [0] func:raytrace [0x8185581]
</span><br>
<span class="quotelev1">&gt; [1] func:[0xffffe440]
</span><br>
<span class="quotelev1">&gt; [2] func:raytrace [0x8056736]
</span><br>
<span class="quotelev1">&gt; [3] func:/lib/tls/libpthread.so.0 [0x40063b63]
</span><br>
<span class="quotelev1">&gt; [4] func:/lib/tls/libc.so.6(__clone+0x5a) [0x4014618a]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; I tried to use gdb and I ran:
</span><br>
<span class="quotelev1">&gt; gdb mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; run --hostfile ../hostfile n 16 raytrace -finputs/car.env
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when I type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; backtrace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after it crashes, it just said &quot;no stack&quot;
</span><br>
This is because you are debugging mpirun, and not your application. Mpirun 
<br>
runs to completion successfully, but it is your program which is crashing.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I really want to find out what lines in what function are responsible for
</span><br>
<span class="quotelev1">&gt; the crash.  What can I do to find out the culprit?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3243.php">Code Master: "Re: [OMPI users] debugging my program in openmpi"</a>
<li><strong>Previous message:</strong> <a href="3241.php">Code Master: "[OMPI users] debugging my program in openmpi"</a>
<li><strong>In reply to:</strong> <a href="3241.php">Code Master: "[OMPI users] debugging my program in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3243.php">Code Master: "Re: [OMPI users] debugging my program in openmpi"</a>
<li><strong>Reply:</strong> <a href="3243.php">Code Master: "Re: [OMPI users] debugging my program in openmpi"</a>
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
