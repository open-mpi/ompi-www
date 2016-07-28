<?
$subject_val = "Re: [OMPI users] Parallel I/O with MPI-1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 08:24:08 2008" -->
<!-- isoreceived="20080723122408" -->
<!-- sent="Wed, 23 Jul 2008 14:24:03 +0200" -->
<!-- isosent="20080723122403" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O with MPI-1" -->
<!-- id="3a37617f0807230524y30df1317yc1dc6d257928707_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FC5A352-01DC-4E31-BFC8-7EAE92BF40D5_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-23 08:24:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6109.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6107.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6107.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6109.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6109.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6124.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;You could always effect your own parallel IO (e.g., use MPI sends and
</span><br>
receives to coordinate parallel reads and writes), but &gt;why?  It's already
<br>
done in the MPI-IO implementation.
<br>
<p>Just a moment: you're saying that i can do fwrite without any lock? OpenMPI
<br>
does this?
<br>
<p>And, what is ROMIO? Where can i find any informations?
<br>
<p>Thanks a lot!
<br>
<p>2008/7/23 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On Jul 23, 2008, at 6:35 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;There is a whole chapter in the MPI standard about file I/O operations.
</span><br>
<span class="quotelev2">&gt;&gt; I'm quite confident you will find whatever you're looking for there :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi George, i know this chapter :) But i'm using MPI-1, not MPI-2. I would
</span><br>
<span class="quotelev2">&gt;&gt; like to know methods for I/O with MPI-1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI builds ROMIO by default; there's no real distinction between MPI-1
</span><br>
<span class="quotelev1">&gt; features and MPI-2 features in the Open MPI code base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could always effect your own parallel IO (e.g., use MPI sends and
</span><br>
<span class="quotelev1">&gt; receives to coordinate parallel reads and writes), but why?  It's already
</span><br>
<span class="quotelev1">&gt; done in the MPI-IO implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I do not believe that flock() is guaranteed to be safe across network
</span><br>
<span class="quotelev1">&gt; filesystems such as NFS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6108/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6109.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6107.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6107.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6109.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6109.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6124.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
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
