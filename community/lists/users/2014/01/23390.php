<?
$subject_val = "Re: [OMPI users] Calling a variable from another processor";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 14:22:45 2014" -->
<!-- isoreceived="20140117192245" -->
<!-- sent="Fri, 17 Jan 2014 13:22:23 -0600" -->
<!-- isosent="20140117192223" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling a variable from another processor" -->
<!-- id="CAGKz=uJ1djoi0qyND+1js_+ELPbBDzQr6VWhEhn1fsU28um7YA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="883676448.447503.1389891836385.JavaMail.root_at_hlrs.de" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 14:22:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23391.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23389.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23368.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attached version is modified to use passive target, which does not
<br>
require collective synchronization for remote access.
<br>
<p>Note that I didn't compile and run this and don't write MPI in Fortran
<br>
so there may be syntax errors.
<br>
<p>Jeff
<br>
<p>On Thu, Jan 16, 2014 at 11:03 AM, Christoph Niethammer
<br>
&lt;niethammer_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Find attached a minimal example - hopefully doing what you intended.
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
<span class="quotelev1">&gt; ----- Urspr&#195;&#188;ngliche Mail -----
</span><br>
<span class="quotelev1">&gt; Von: &quot;Pradeep Jha&quot; &lt;pradeep_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; An: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Gesendet: Freitag, 10. Januar 2014 10:23:40
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] Calling a variable from another processor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your responses. I am still not able to figure it out. I will further simply my problem statement. Can someone please help me with a fortran90 code for that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I have N processors each with an array A of size S
</span><br>
<span class="quotelev1">&gt; 2) On any random processor (say rank X), I calculate the two integer values, Y and Z. (0&lt;=Y&lt;N and 0&lt;Z&lt;=S)
</span><br>
<span class="quotelev1">&gt; 3) On processor X, I want to get the value of A(Z) on processor Y.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This operation will happen parallely on each processor. Can anyone please help me with this?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014/1/9 Jeff Hammond &lt; jeff.science_at_[hidden] &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One sided is quite simple to understand. It is like file io. You read/write (get/put) to a memory object. If you want to make it hard to screw up, use passive target bss wrap you calls in lock/unlock so every operation is globally visible where it's called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've never deadlocked RMA while p2p is easy to hang for nontrivial patterns unless you only do nonblocking plus waitall.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If one finds MPI too hard to learn, there are both GA/ARMCI and OpenSHMEM implementations over MPI-3 already (I wrote both...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bigger issue is that OpenMPI doesn't support MPI-3 RMA, just the MPI-2 RMA stuff, and even then, datatypes are broken with RMA. Both ARMCI-MPI3 and OSHMPI (OpenSHMEM over MPI-3) require a late-model MPICH-derivative to work, but these are readily available on every platform normal people use (BGQ is the only system missing, and that will be resolved soon). I've run MPI-3 on my Mac (MPICH), clusters (MVAPICH), Cray (CrayMPI), and SGI (MPICH).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 9, 2014, at 5:39 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt; jsquyres_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI one-sided stuff is actually pretty complicated; I wouldn't suggest it for a beginner (I don't even recommend it for many MPI experts ;-) ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why not look at the MPI_SOURCE in the status that you got back from the MPI_RECV? In fortran, it would look something like (typed off the top of my head; forgive typos):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; integer, dimension(MPI_STATUS_SIZE) :: status
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_Recv(buffer, ..., status, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The rank of the sender will be in status(MPI_SOURCE).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 9, 2014, at 6:29 AM, Christoph Niethammer &lt; niethammer_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suggest you have a look onto the MPI one-sided functionality (Section 11 of the MPI Spec 3.0).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Create a window to allow the other processes to access the arrays A directly via MPI_Get/MPI_Put.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Be aware of synchronization which you have to implement via MPI_Win_fence or manual locking.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Christoph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Christoph Niethammer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nobelstrasse 19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 70569 Stuttgart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- Urspr&#195;&#188;ngliche Mail -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Von: &quot;Pradeep Jha&quot; &lt; pradeep_at_[hidden] &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An: &quot;Open MPI Users&quot; &lt; users_at_[hidden] &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gesendet: Donnerstag, 9. Januar 2014 12:10:51
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Betreff: [OMPI users] Calling a variable from another processor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am writing a parallel program in Fortran77. I have the following problem: 1) I have N number of processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) Each processor contains an array A of size S.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) Using some function, on every processor (say rank X), I calculate the value of two integers Y and Z, where Z&lt;S. (the values of Y and Z are different on every processor)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) I want to get the value of A(Z) on processor Y to processor X.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought of first sending the numerical value X to processor Y from processor X and then sending A(Z) from processor Y to processor X. But it is not possible as processor Y does not know the numerical value X and so it won't know from which processor to receive the numerical value X from.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried but I haven't been able to come up with any code which can implement this action. So I am not posting any codes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23390/var_access.f95">var_access.f95</a>
</ul>
<!-- attachment="var_access.f95" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23391.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23389.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23368.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
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
