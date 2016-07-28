<?
$subject_val = "Re: [OMPI users] Checkpoint and restart";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 07:27:47 2008" -->
<!-- isoreceived="20080722112747" -->
<!-- sent="Tue, 22 Jul 2008 07:27:41 -0400" -->
<!-- isosent="20080722112741" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint and restart" -->
<!-- id="C5FCB060-2339-404A-A539-18924436FD4E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0807220243x414ed720x4ff234d55ba848b7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint and restart<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-22 07:27:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6104.php">Gabriele Fatigati: "[OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6102.php">Gabriele Fatigati: "[OMPI users] Checkpoint and restart"</a>
<li><strong>In reply to:</strong> <a href="6102.php">Gabriele Fatigati: "[OMPI users] Checkpoint and restart"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 22, 2008, at 5:43 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt; i have some questions about application robustness. , I have read  
</span><br>
<span class="quotelev1">&gt; that in OpenMPI development trunk version will have implemented  
</span><br>
<span class="quotelev1">&gt; techniques of checkpoint and restart. But, i need to know ho this  
</span><br>
<span class="quotelev1">&gt; techniques works. Are they internal functions to insert in my code,  
</span><br>
<span class="quotelev1">&gt; external tool or other?
</span><br>
<p>The checkpoint/restart technique is transparent so there are no  
<br>
functions to insert into your code. The functionality is described in  
<br>
the user document on the wiki:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And, when i restart my application, is it possible to modify the  
</span><br>
<span class="quotelev1">&gt; initial number of processors?
</span><br>
<p>Not at this time. You must restart with the same number of processes  
<br>
(-np) as you initially started with.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6104.php">Gabriele Fatigati: "[OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6102.php">Gabriele Fatigati: "[OMPI users] Checkpoint and restart"</a>
<li><strong>In reply to:</strong> <a href="6102.php">Gabriele Fatigati: "[OMPI users] Checkpoint and restart"</a>
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
