<?
$subject_val = "Re: [OMPI users] Parallel I/O with MPI-1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 06:29:31 2008" -->
<!-- isoreceived="20080723102931" -->
<!-- sent="Wed, 23 Jul 2008 12:29:16 +0200" -->
<!-- isosent="20080723102916" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O with MPI-1" -->
<!-- id="A0AA0689-624A-4C29-9C9E-DEA76B2CA592_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0807230251w4fc298cak7c0be211686d82da_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Parallel I/O with MPI-1<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 06:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6106.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6104.php">Gabriele Fatigati: "[OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6104.php">Gabriele Fatigati: "[OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6106.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6106.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a whole chapter in the MPI standard about file I/O  
<br>
operations. I'm quite confident you will find whatever you're looking  
<br>
for there :)
<br>
<p>Open MPI use ROMIO for file operations, and normally this is compiled  
<br>
in by default. You should not have any troubles using MPI I/O with  
<br>
Open MPI.
<br>
<p>&nbsp;&nbsp;&nbsp;Have fun,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 23, 2008, at 11:51 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; i have a question about parallel i/o. In my application, actually i  
</span><br>
<span class="quotelev1">&gt; have implemented a file lock with C system calls, like flock. But,  
</span><br>
<span class="quotelev1">&gt; is this the right way to do concurrent write?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this cluster, every node has our operating system, so, the file  
</span><br>
<span class="quotelev1">&gt; lock functions only on the processors of that node, not for all. I  
</span><br>
<span class="quotelev1">&gt; can have two or more process of different nodes that writes  
</span><br>
<span class="quotelev1">&gt; concurrent in the file. Is this dangerous or not? It's depends by  
</span><br>
<span class="quotelev1">&gt; file system? I'm using MPI-1 under OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6105/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6106.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6104.php">Gabriele Fatigati: "[OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6104.php">Gabriele Fatigati: "[OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6106.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6106.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
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
