<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  1 14:14:21 2006" -->
<!-- isoreceived="20060501181421" -->
<!-- sent="Mon, 1 May 2006 14:14:20 -0400" -->
<!-- isosent="20060501181420" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] stdout in AIX" -->
<!-- id="B005F101-9D12-4ED5-8DE0-C1A6C667AA8C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="04260B711FDCB041A3AFD3476C1D7E14043447_at_sacexm01.nexant.corp" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-01 14:14:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1178.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1176.php">Brignone, Sergio: "[OMPI users] F77 in AIX"</a>
<li><strong>In reply to:</strong> <a href="1175.php">Brignone, Sergio: "[OMPI users] stdout in AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1179.php">Brignone, Sergio: "Re: [OMPI users] stdout in AIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 1, 2006, at 1:58 PM, Brignone, Sergio wrote:
<br>
<p><span class="quotelev1">&gt; I've been using open-mpi in Solaris for a while and now I need to use
</span><br>
<span class="quotelev1">&gt; open-mpi in AIX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled the latest stable open-mpi version and run one of the
</span><br>
<span class="quotelev1">&gt; simplest possible tests (see hello0.c in attached zip)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To my surprise, it didn't show anything to the screen when running  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; mpirun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mainaix:/xahome/userx&gt; ./hello0
</span><br>
<span class="quotelev1">&gt; Process 0 of 1 is on ecc1ap04
</span><br>
<span class="quotelev1">&gt; Process 0 says Hello Word!
</span><br>
<span class="quotelev1">&gt; mainaix:/xahome/userx &gt; mpirun -n 4 hello0
</span><br>
<span class="quotelev1">&gt; mainaix:/xahome/userx &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried with stderr instead of stdout and I got the same result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, if I open a file and stream the output to the file (I just  
</span><br>
<span class="quotelev1">&gt; used one
</span><br>
<span class="quotelev1">&gt; file per process, I didn't use mpi-io), it works!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas about the reason of this behavior?
</span><br>
<p>It's possible that we broke pty handling on AIX.  Just out of  
<br>
curiosity, what happens if you try something like:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 1 uptime | cat
<br>
<p>This will cause mpirun to think stdout is connected to a pipe instead  
<br>
of a pty, so we won't try to use our pty code (and default to  
<br>
standard pipes for stdio forwarding).
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1178.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1176.php">Brignone, Sergio: "[OMPI users] F77 in AIX"</a>
<li><strong>In reply to:</strong> <a href="1175.php">Brignone, Sergio: "[OMPI users] stdout in AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1179.php">Brignone, Sergio: "Re: [OMPI users] stdout in AIX"</a>
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
