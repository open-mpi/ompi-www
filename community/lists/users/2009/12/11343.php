<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 19:50:10 2009" -->
<!-- isoreceived="20091202005010" -->
<!-- sent="Tue, 1 Dec 2009 19:50:05 -0500" -->
<!-- isosent="20091202005005" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="EBEA51C5-668D-4470-9A20-A7EEBC6B07A8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="13E7FC1A-8EB2-4163-ADC4-9A77437033D4_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program deadlocks, on simple send/recv loop<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 19:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11344.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11342.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11311.php">Brock Palen: "[OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11348.php">John R. Cary: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11348.php">John R. Cary: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(for the web archives)
<br>
<p>Brock and I talked about this .f90 code a bit off list -- he's going  
<br>
to investigate with the test author a bit more because both of us are  
<br>
a bit confused by the F90 array syntax used.
<br>
<p><p><p>On Dec 1, 2009, at 10:46 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; The attached code, is an example where openmpi/1.3.2 will lock up, if
</span><br>
<span class="quotelev1">&gt; ran on 48 cores, of IB (4 cores per node),
</span><br>
<span class="quotelev1">&gt; The code loops over recv from all processors on rank 0 and sends from
</span><br>
<span class="quotelev1">&gt; all other ranks, as far as I know this should work, and I can't see
</span><br>
<span class="quotelev1">&gt; why not.
</span><br>
<span class="quotelev1">&gt; Note yes I know we can do the same thing with a gather, this is a
</span><br>
<span class="quotelev1">&gt; simple case to demonstrate the issue.
</span><br>
<span class="quotelev1">&gt; Note that if I increase the openib eager limit, the program runs,
</span><br>
<span class="quotelev1">&gt; which normally means improper MPI, but I can't on my own figure out
</span><br>
<span class="quotelev1">&gt; the problem with this code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any input on why code like this locks up, unless we up the eager
</span><br>
<span class="quotelev1">&gt; buffer would be helpful, as we should be be having to up the buffer
</span><br>
<span class="quotelev1">&gt; size, just to make code run, makes me feel hacky and dirty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;sendbuf.f90&gt;&lt;ATT9198877.txt&gt;&lt;ATT9198879.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11344.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11342.php">Gus Correa: "Re: [OMPI users] mpirun is using one PBS node only"</a>
<li><strong>In reply to:</strong> <a href="11311.php">Brock Palen: "[OMPI users] Program deadlocks, on simple send/recv loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11348.php">John R. Cary: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Reply:</strong> <a href="11348.php">John R. Cary: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
