<?
$subject_val = "Re: [OMPI users] MPI_AllGather null terminator character";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 03:59:18 2012" -->
<!-- isoreceived="20120131085918" -->
<!-- sent="Tue, 31 Jan 2012 09:59:14 +0100" -->
<!-- isosent="20120131085914" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllGather null terminator character" -->
<!-- id="CAJNPZUVH-963H7xDC6dLZ4oRqXxXXkgEop2y6XbKpkmwZTUxDQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2DE49A0D-0D05-4E96-BEB9-22FF4D2623D9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_AllGather null terminator character<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 03:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18329.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="18327.php">G&#246;tz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18307.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18332.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18332.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>I have very interesting news. I recompiled OpenMPI 1.4.4 enabling the
<br>
memchecker.
<br>
<p>Now the warning on strcmp is disappeared also without buffers
<br>
initializations using memset!
<br>
<p>So the warning is a false positive? My simple code is safe?
<br>
<p>Thanks.
<br>
<p>2012/1/28 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Jan 28, 2012, at 5:22 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I had the same idea so my simple code I have already done calloc and
</span><br>
<span class="quotelev1">&gt; memset ..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same warning still appear using strncmp that should exclude
</span><br>
<span class="quotelev1">&gt; uninitialized bytes on hostnam_recv_buf :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bummer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; My apologize for being so insistent, but I would understand if there is
</span><br>
<span class="quotelev1">&gt; some bug in MPI_Allgather, strcmp or Valgrind itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Understood.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still think that MPI_Allgather will exactly send the bytes starting at
</span><br>
<span class="quotelev1">&gt; the buffer you specify, regardless of whether they include \0 or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was unable to replicate the valgrind warning on my systems.  A few more
</span><br>
<span class="quotelev1">&gt; things to try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Are you using the latest version of Valgrind?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. (I should have asked this before - sorry!) Are you using InfiniBand to
</span><br>
<span class="quotelev1">&gt; transmit the data across your network?  If so, Valgrind might not have
</span><br>
<span class="quotelev1">&gt; visibility on the receive buffers being filled because IB, by its nature,
</span><br>
<span class="quotelev1">&gt; uses OS bypass to fill in receive buffers.  Meaning: Valgrind won't &quot;see&quot;
</span><br>
<span class="quotelev1">&gt; the receive buffers getting filled, and therefore will think that they are
</span><br>
<span class="quotelev1">&gt; uninitialized.  If you re-run your experiment with TCP and/or shared memory
</span><br>
<span class="quotelev1">&gt; (like I did), you won't see the Valgrind uninitialized warnings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To avoid these OS-bypass issues, you might try installing Open MPI with
</span><br>
<span class="quotelev1">&gt; --with-valgrind=DIR (DIR = directory where Valgrind is installed -- we need
</span><br>
<span class="quotelev1">&gt; valgrind.h, IIRC).  What this does is allow Open MPI to use Valgrind's
</span><br>
<span class="quotelev1">&gt; external tools API to say &quot;don't worry Valgrind, the entire contents of
</span><br>
<span class="quotelev1">&gt; this buffer are initialized&quot; in cases exactly like this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a performance cost to using Valgrind integration, though.  So
</span><br>
<span class="quotelev1">&gt; don't make this your production copy of Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Do a for loop accessing each position of the buffer *before* you send
</span><br>
<span class="quotelev1">&gt; it.  Not just up to the \0, but traverse the *entire length* of the buffer
</span><br>
<span class="quotelev1">&gt; and do some meaningless action with each byte.  See if Valgrind complains.
</span><br>
<span class="quotelev1">&gt;  If it doesn't, you know for certain that the entire source buffer is not
</span><br>
<span class="quotelev1">&gt; the origin of the warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. Similarly, do a loop accessing each position of the received buffer.
</span><br>
<span class="quotelev1">&gt;  You can have Valgrind attach a debugger when it runs into issues; with
</span><br>
<span class="quotelev1">&gt; that, you can see exactly which position Valgrind thinks is uninitialized.
</span><br>
<span class="quotelev1">&gt;  Compare the value that was sent to the value that was received and ensure
</span><br>
<span class="quotelev1">&gt; that they are the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18328/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18329.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="18327.php">G&#246;tz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18307.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18332.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18332.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
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
