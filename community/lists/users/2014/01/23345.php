<?
$subject_val = "Re: [OMPI users] Calling a variable from another processor";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 06:39:21 2014" -->
<!-- isoreceived="20140109113921" -->
<!-- sent="Thu, 9 Jan 2014 11:39:19 +0000" -->
<!-- isosent="20140109113919" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling a variable from another processor" -->
<!-- id="1E9D397F-19E1-4878-AF0A-C0C7B922554B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1637514019.190684.1389266940214.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calling a variable from another processor<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 06:39:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23346.php">Jeff Hammond: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Previous message:</strong> <a href="23344.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>In reply to:</strong> <a href="23344.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23346.php">Jeff Hammond: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Reply:</strong> <a href="23346.php">Jeff Hammond: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI one-sided stuff is actually pretty complicated; I wouldn't suggest it for a beginner (I don't even recommend it for many MPI experts ;-) ).
<br>
<p>Why not look at the MPI_SOURCE in the status that you got back from the MPI_RECV?  In fortran, it would look something like (typed off the top of my head; forgive typos):
<br>
<p>-----
<br>
integer, dimension(MPI_STATUS_SIZE) :: status
<br>
...
<br>
call MPI_Recv(buffer, ..., status, ierr)
<br>
-----
<br>
<p>The rank of the sender will be in status(MPI_SOURCE).
<br>
<p><p>On Jan 9, 2014, at 6:29 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suggest you have a look onto the MPI one-sided functionality (Section 11 of the MPI Spec 3.0).
</span><br>
<span class="quotelev1">&gt; Create a window to allow the other processes to access the arrays A directly via MPI_Get/MPI_Put.
</span><br>
<span class="quotelev1">&gt; Be aware of synchronization which you have to implement via MPI_Win_fence or manual locking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Christoph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev1">&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Urspr&#252;ngliche Mail -----
</span><br>
<span class="quotelev1">&gt; Von: &quot;Pradeep Jha&quot; &lt;pradeep_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; An: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Gesendet: Donnerstag, 9. Januar 2014 12:10:51
</span><br>
<span class="quotelev1">&gt; Betreff: [OMPI users] Calling a variable from another processor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am writing a parallel program in Fortran77. I have the following problem: 1) I have N number of processors.
</span><br>
<span class="quotelev1">&gt; 2) Each processor contains an array A of size S.
</span><br>
<span class="quotelev1">&gt; 3) Using some function, on every processor (say rank X), I calculate the value of two integers Y and Z, where Z&lt;S. (the values of Y and Z are different on every processor)
</span><br>
<span class="quotelev1">&gt; 4) I want to get the value of A(Z) on processor Y to processor X. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought of first sending the numerical value X to processor Y from processor X and then sending A(Z) from processor Y to processor X. But it is not possible as processor Y does not know the numerical value X and so it won't know from which processor to receive the numerical value X from. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried but I haven't been able to come up with any code which can implement this action. So I am not posting any codes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions? 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23346.php">Jeff Hammond: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Previous message:</strong> <a href="23344.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>In reply to:</strong> <a href="23344.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23346.php">Jeff Hammond: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Reply:</strong> <a href="23346.php">Jeff Hammond: "Re: [OMPI users] Calling a variable from another processor"</a>
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
