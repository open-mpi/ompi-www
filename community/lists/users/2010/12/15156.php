<?
$subject_val = "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 20:39:50 2010" -->
<!-- isoreceived="20101216013950" -->
<!-- sent="Wed, 15 Dec 2010 20:39:45 -0500" -->
<!-- isosent="20101216013945" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI_Test() too many times results in a time spike" -->
<!-- id="8003045B-066F-41C2-93F2-091796964157_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CF567EE.1030901_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calling MPI_Test() too many times results in a time spike<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 20:39:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15157.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="15155.php">Jeff Squyres: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14955.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15157.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="15157.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 30, 2010, at 4:09 PM, Ioannis Papadopoulos wrote:
<br>
<p><span class="quotelev1">&gt; The overall time may be the same, however it is alarming (at least to me) that if you call MPI_Test() too many times, the average time per MPI_Test() call increases. After all, that is what I am trying to measure, how much it costs to call MPI_Test() on average.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In your MPI_Wtime() example, the average overhead of MPI_Wtime() is exactly the same, independently of max/min time - which is what I would expect. This is not true for MPI_Test(). A small delay before calling the later, lowers the MPI_Test() average time.
</span><br>
<p>There is a difference between MPI_Test() and MPI_Wtime() -- wtime just calls gettimeofday() and doesn't do anything else.  MPI_Test() trips the progression engine and therefore may do a variable number of things, some of which may involve I/O and/or memory allocation.  Those are variable time tasks, depending on all kinds of factors on your system (as Eugene alluded to).  This is doubly true if you're seeing it with two different MPI implementations.
<br>
<p>So yes, there might be those small &quot;spikes&quot; that you're seeing (to be honest, I hesitate to use the word &quot;spike&quot; when dealing with such small numbers in TCP traffic).  And they could be due to a lot of different things, many of which are beyond OMPI's control.
<br>
<p>Have you seen if this has any impact on your actual application performance?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15157.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="15155.php">Jeff Squyres: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14955.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15157.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="15157.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
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
