<?
$subject_val = "Re: [OMPI users] Calling a variable from another processor";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 01:28:45 2014" -->
<!-- isoreceived="20140117062845" -->
<!-- sent="Fri, 17 Jan 2014 15:28:23 +0900" -->
<!-- isosent="20140117062823" -->
<!-- name="Pradeep Jha" -->
<!-- email="pradeep_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling a variable from another processor" -->
<!-- id="CAL_eiiQkV7EiCqyg_iZ-vG6TULm+7oqwGW4Q11ZzHs7iGQ_+Cw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Pradeep Jha (<em>pradeep_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 01:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23375.php">basma a.azeem: "[OMPI users] FW: cluster checkpoint error"</a>
<li><strong>Previous message:</strong> <a href="23373.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>In reply to:</strong> <a href="23368.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23390.php">Jeff Hammond: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a ton Christoph. That helps a lot.
<br>
<p><p>2014/1/17 Christoph Niethammer &lt;niethammer_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello,
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
<span class="quotelev1">&gt; ----- Urspr&#252;ngliche Mail -----
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
<span class="quotelev1">&gt; Thanks for your responses. I am still not able to figure it out. I will
</span><br>
<span class="quotelev1">&gt; further simply my problem statement. Can someone please help me with a
</span><br>
<span class="quotelev1">&gt; fortran90 code for that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I have N processors each with an array A of size S
</span><br>
<span class="quotelev1">&gt; 2) On any random processor (say rank X), I calculate the two integer
</span><br>
<span class="quotelev1">&gt; values, Y and Z. (0&lt;=Y&lt;N and 0&lt;Z&lt;=S)
</span><br>
<span class="quotelev1">&gt; 3) On processor X, I want to get the value of A(Z) on processor Y.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This operation will happen parallely on each processor. Can anyone please
</span><br>
<span class="quotelev1">&gt; help me with this?
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
<span class="quotelev1">&gt; One sided is quite simple to understand. It is like file io. You
</span><br>
<span class="quotelev1">&gt; read/write (get/put) to a memory object. If you want to make it hard to
</span><br>
<span class="quotelev1">&gt; screw up, use passive target bss wrap you calls in lock/unlock so every
</span><br>
<span class="quotelev1">&gt; operation is globally visible where it's called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've never deadlocked RMA while p2p is easy to hang for nontrivial
</span><br>
<span class="quotelev1">&gt; patterns unless you only do nonblocking plus waitall.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If one finds MPI too hard to learn, there are both GA/ARMCI and OpenSHMEM
</span><br>
<span class="quotelev1">&gt; implementations over MPI-3 already (I wrote both...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bigger issue is that OpenMPI doesn't support MPI-3 RMA, just the MPI-2
</span><br>
<span class="quotelev1">&gt; RMA stuff, and even then, datatypes are broken with RMA. Both ARMCI-MPI3
</span><br>
<span class="quotelev1">&gt; and OSHMPI (OpenSHMEM over MPI-3) require a late-model MPICH-derivative to
</span><br>
<span class="quotelev1">&gt; work, but these are readily available on every platform normal people use
</span><br>
<span class="quotelev1">&gt; (BGQ is the only system missing, and that will be resolved soon). I've run
</span><br>
<span class="quotelev1">&gt; MPI-3 on my Mac (MPICH), clusters (MVAPICH), Cray (CrayMPI), and SGI
</span><br>
<span class="quotelev1">&gt; (MPICH).
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
<span class="quotelev2">&gt; &gt; On Jan 9, 2014, at 5:39 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI one-sided stuff is actually pretty complicated; I wouldn't suggest
</span><br>
<span class="quotelev1">&gt; it for a beginner (I don't even recommend it for many MPI experts ;-) ).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why not look at the MPI_SOURCE in the status that you got back from the
</span><br>
<span class="quotelev1">&gt; MPI_RECV? In fortran, it would look something like (typed off the top of my
</span><br>
<span class="quotelev1">&gt; head; forgive typos):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; integer, dimension(MPI_STATUS_SIZE) :: status
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; call MPI_Recv(buffer, ..., status, ierr)
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The rank of the sender will be in status(MPI_SOURCE).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 9, 2014, at 6:29 AM, Christoph Niethammer &lt; niethammer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I suggest you have a look onto the MPI one-sided functionality (Section
</span><br>
<span class="quotelev1">&gt; 11 of the MPI Spec 3.0).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Create a window to allow the other processes to access the arrays A
</span><br>
<span class="quotelev1">&gt; directly via MPI_Get/MPI_Put.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Be aware of synchronization which you have to implement via
</span><br>
<span class="quotelev1">&gt; MPI_Win_fence or manual locking.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Christoph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Christoph Niethammer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nobelstrasse 19
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 70569 Stuttgart
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev3">&gt; &gt;&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----- Urspr&#252;ngliche Mail -----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Von: &quot;Pradeep Jha&quot; &lt; pradeep_at_[hidden] &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; An: &quot;Open MPI Users&quot; &lt; users_at_[hidden] &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gesendet: Donnerstag, 9. Januar 2014 12:10:51
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Betreff: [OMPI users] Calling a variable from another processor
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am writing a parallel program in Fortran77. I have the following
</span><br>
<span class="quotelev1">&gt; problem: 1) I have N number of processors.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2) Each processor contains an array A of size S.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3) Using some function, on every processor (say rank X), I calculate
</span><br>
<span class="quotelev1">&gt; the value of two integers Y and Z, where Z&lt;S. (the values of Y and Z are
</span><br>
<span class="quotelev1">&gt; different on every processor)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4) I want to get the value of A(Z) on processor Y to processor X.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I thought of first sending the numerical value X to processor Y from
</span><br>
<span class="quotelev1">&gt; processor X and then sending A(Z) from processor Y to processor X. But it
</span><br>
<span class="quotelev1">&gt; is not possible as processor Y does not know the numerical value X and so
</span><br>
<span class="quotelev1">&gt; it won't know from which processor to receive the numerical value X from.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I tried but I haven't been able to come up with any code which can
</span><br>
<span class="quotelev1">&gt; implement this action. So I am not posting any codes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any suggestions?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23374/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23375.php">basma a.azeem: "[OMPI users] FW: cluster checkpoint error"</a>
<li><strong>Previous message:</strong> <a href="23373.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>In reply to:</strong> <a href="23368.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23390.php">Jeff Hammond: "Re: [OMPI users] Calling a variable from another processor"</a>
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
