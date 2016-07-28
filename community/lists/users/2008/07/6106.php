<?
$subject_val = "Re: [OMPI users] Parallel I/O with MPI-1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 06:35:23 2008" -->
<!-- isoreceived="20080723103523" -->
<!-- sent="Wed, 23 Jul 2008 12:35:19 +0200" -->
<!-- isosent="20080723103519" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O with MPI-1" -->
<!-- id="3a37617f0807230335i1b41ba0x12d0d5ab9e73916f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A0AA0689-624A-4C29-9C9E-DEA76B2CA592_at_eecs.utk.edu" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 06:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6107.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6105.php">George Bosilca: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6105.php">George Bosilca: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6107.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6107.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;There is a whole chapter in the MPI standard about file I/O operations. I'm
</span><br>
quite confident you will find whatever you're looking for there :)
<br>
<p>Hi George, i know this chapter :) But i'm using MPI-1, not MPI-2. I would
<br>
like to know methods for I/O with MPI-1.
<br>
<p>2008/7/23 George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; There is a whole chapter in the MPI standard about file I/O operations. I'm
</span><br>
<span class="quotelev1">&gt; quite confident you will find whatever you're looking for there :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI use ROMIO for file operations, and normally this is compiled in by
</span><br>
<span class="quotelev1">&gt; default. You should not have any troubles using MPI I/O with Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Have fun,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 23, 2008, at 11:51 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; i have a question about parallel i/o. In my application, actually i have
</span><br>
<span class="quotelev2">&gt;&gt; implemented a file lock with C system calls, like flock. But, is this the
</span><br>
<span class="quotelev2">&gt;&gt; right way to do concurrent write?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this cluster, every node has our operating system, so, the file lock
</span><br>
<span class="quotelev2">&gt;&gt; functions only on the processors of that node, not for all. I can have two
</span><br>
<span class="quotelev2">&gt;&gt; or more process of different nodes that writes concurrent in the file. Is
</span><br>
<span class="quotelev2">&gt;&gt; this dangerous or not? It's depends by file system? I'm using MPI-1 under
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it Tel: +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6106/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6107.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6105.php">George Bosilca: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6105.php">George Bosilca: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6107.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6107.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
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
