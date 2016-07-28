<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb 25 13:42:34 2006" -->
<!-- isoreceived="20060225184234" -->
<!-- sent="Sat, 25 Feb 2006 13:42:26 -0500" -->
<!-- isosent="20060225184226" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [O-MPI users] Job fails with mpiP" -->
<!-- id="4A29A3C2-6E8F-4213-B439-8282D7B1BC19_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="003e01c637ee$9e61c6f0$3401a8c0_at_dl474swarup" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-25 13:42:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0714.php">Jeff Squyres: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>Previous message:</strong> <a href="0712.php">Jeff Squyres: "Re: [OMPI users] MPI_SEND blocks when crossing node boundary"</a>
<li><strong>In reply to:</strong> <a href="0686.php">Aniruddha Shet: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 22, 2006, at 3:29 PM, Aniruddha Shet wrote:
<br>
<p><span class="quotelev1">&gt; I tried with openmpi-1.1a1r9098.tar.bz2 but still encounter the same
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no core being produced. I am sending you whatever output  
</span><br>
<span class="quotelev1">&gt; trace is written. Not sure if the attached trace will allow you to  
</span><br>
<span class="quotelev1">&gt; debug the problem.
</span><br>
<p>I'm not sure I understand the output -- there seem to be 2 stack  
<br>
traces shown: one for an MPI process and one for mpirun itself (aka  
<br>
mpiexec and also aka orterun).
<br>
<p>I *think* what is happening is that your process is segv'ing:
<br>
<p>mpiexec noticed that job rank 0 with PID 17721 on node &quot;piv110&quot;  
<br>
exited on signal 11.
<br>
<p>but that is somehow causing mpirun to segv (!), which shouldn't  
<br>
happen.  But I can see how that might occur if your MPI processes are  
<br>
dying during startup and the connections to mpirun are only half-formed.
<br>
<p>Additionally, the trace from what appears to be PID 17721 isn't too  
<br>
helpful:
<br>
<p>[0] func:./p1 [0x81d362d]
<br>
[0] func:./p1 [0x81d362d]
<br>
[1] func:/lib/i686/libpthread.so.0 [0x400c40ba]
<br>
[2] func:/lib/i686/libc.so.6 [0x40131ee0]
<br>
[3] func:./p1(mpiPi_init+0x5c) [0x808b2a6]
<br>
[0] func:./p1 [0x81d362d]
<br>
[1] func:/lib/i686/libpthread.so.0 [0x400c40ba]
<br>
[1] func:/lib/i686/libpthread.so.0 [0x400c40ba]
<br>
[2] func:/lib/i686/libc.so.6 [0x40131ee0]
<br>
[2] func:/lib/i686/libc.so.6 [0x40131ee0]
<br>
[3] func:./p1(mpiPi_init+0x5c) [0x808b2a6]
<br>
[3] func:./p1(mpiPi_init+0x5c) [0x808b2a6]
<br>
mpiexec noticed that job rank 0 with PID 17721 on node &quot;piv110&quot;  
<br>
exited on signal
<br>
11.
<br>
<p>Can you compile your application (and potentially mpiP) with  
<br>
debugging enabled so that we can see more information?
<br>
<p>Also, I'm confused by these statements at the end of your output:
<br>
<p>rcp: core*: No such file or directory
<br>
rcp: core*: No such file or directory
<br>
rcp: core*: No such file or directory
<br>
<p>Do you know what that is?
<br>
<p>Can you check into why corefiles are not being produced?  Check your  
<br>
shell settings to ensure that corefiles will be produced (e.g., in  
<br>
bash, &quot;ulimit -c unlimited&quot;, in tcsh, &quot;unlimit coredumpsize&quot; -- you  
<br>
may need to put this in your shell startup files if you're using rsh/ 
<br>
ssh to start processes).
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0714.php">Jeff Squyres: "Re: [OMPI users] fresh benchmarks for &quot;alltoall&quot;"</a>
<li><strong>Previous message:</strong> <a href="0712.php">Jeff Squyres: "Re: [OMPI users] MPI_SEND blocks when crossing node boundary"</a>
<li><strong>In reply to:</strong> <a href="0686.php">Aniruddha Shet: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
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
