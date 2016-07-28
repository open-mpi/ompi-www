<?
$subject_val = "Re: [OMPI users] Some Newbie questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 07:20:07 2009" -->
<!-- isoreceived="20090630112007" -->
<!-- sent="Tue, 30 Jun 2009 07:20:01 -0400" -->
<!-- isosent="20090630112001" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Newbie questions" -->
<!-- id="BBA5F942-B477-4274-997C-4A58456D4E3A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A496EFE.70501_at_biggjapan.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Some Newbie questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-30 07:20:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9769.php">Jeff Squyres: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="9767.php">Ralph Castain: "Re: [OMPI users] Cannot create X11 window in Rank 0 node(master) ?"</a>
<li><strong>In reply to:</strong> <a href="9764.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 29, 2009, at 9:48 PM, Ashika Umanga Umagiliya wrote:
<br>
<p><span class="quotelev1">&gt; I am parallelizing tomography algorithm which takes about 5 hours  
</span><br>
<span class="quotelev1">&gt; using single processor.
</span><br>
<span class="quotelev1">&gt; I want to gain full performance and  should reduce  the  
</span><br>
<span class="quotelev1">&gt; computational time as short as possible.
</span><br>
<span class="quotelev1">&gt; I was wondering the SSh/RSH launcher could  be  a  performance   
</span><br>
<span class="quotelev1">&gt; issue?(I am just guessing)
</span><br>
<p>Unlikely.  The time to launch an ssh/rsh process is negligible  
<br>
compared to a 5 hour run.
<br>
<p><span class="quotelev1">&gt; What  kind of software/middleware I should use to solve the network/ 
</span><br>
<span class="quotelev1">&gt; communication overhead.
</span><br>
<p>I'm not sure what you mean by this question...?
<br>
<p>In your environment, Open MPI is using TCP sockets to communicate  
<br>
between MPI processes on different hosts and likely using shared  
<br>
memory to communicate between MPI processes on the same host.  But in  
<br>
your MPI application, you just use MPI_SEND / MPI_RECV (etc.) -- Open  
<br>
MPI automatically chooses the &quot;best&quot; transport underneath and gets  
<br>
your message to the other side as fast as possible.
<br>
<p>You might want to take a short MPI tutorial to get familiar with MPI  
<br>
concepts.  There's an excellent free introduction to MPI tutorial at  
<br>
the NCSA:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://ci-tutor.ncsa.illinois.edu/login.php">http://ci-tutor.ncsa.illinois.edu/login.php</a>
<br>
<p>Register for a (free) account and then you'll see the course listing.
<br>
<p>This tutorial will introduce you to MPI concepts such as sending,  
<br>
receiving, MPI collective operations, etc.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9769.php">Jeff Squyres: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="9767.php">Ralph Castain: "Re: [OMPI users] Cannot create X11 window in Rank 0 node(master) ?"</a>
<li><strong>In reply to:</strong> <a href="9764.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
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
