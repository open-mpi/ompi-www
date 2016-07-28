<?
$subject_val = "Re: [OMPI users] Calling a variable from another processor";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 16 12:03:59 2014" -->
<!-- isoreceived="20140116170359" -->
<!-- sent="Thu, 16 Jan 2014 18:03:56 +0100 (CET)" -->
<!-- isosent="20140116170356" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling a variable from another processor" -->
<!-- id="883676448.447503.1389891836385.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAL_eiiTRxrwAFDrPv7L5gHsBMXvvq8YcTUdqVv0LJB3J79ZZ2Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-16 12:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CXX=no in config.status, breaks mpic++ wrapper"</a>
<li><strong>Previous message:</strong> <a href="23367.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23349.php">Pradeep Jha: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23374.php">Pradeep Jha: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Reply:</strong> <a href="23374.php">Pradeep Jha: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Reply:</strong> <a href="23390.php">Jeff Hammond: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Find attached a minimal example - hopefully doing what you intended.
<br>
<p>Regards
<br>
Christoph
<br>
<p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203
email: niethammer_at_[hidden]
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
----- Urspr&#195;&#188;ngliche Mail -----
Von: &quot;Pradeep Jha&quot; &lt;pradeep_at_[hidden]&gt;
An: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
Gesendet: Freitag, 10. Januar 2014 10:23:40
Betreff: Re: [OMPI users] Calling a variable from another processor
Thanks for your responses. I am still not able to figure it out. I will further simply my problem statement. Can someone please help me with a fortran90 code for that. 
1) I have N processors each with an array A of size S 
2) On any random processor (say rank X), I calculate the two integer values, Y and Z. (0&lt;=Y&lt;N and 0&lt;Z&lt;=S) 
3) On processor X, I want to get the value of A(Z) on processor Y. 
This operation will happen parallely on each processor. Can anyone please help me with this? 
2014/1/9 Jeff Hammond &lt; jeff.science_at_[hidden] &gt; 
One sided is quite simple to understand. It is like file io. You read/write (get/put) to a memory object. If you want to make it hard to screw up, use passive target bss wrap you calls in lock/unlock so every operation is globally visible where it's called. 
I've never deadlocked RMA while p2p is easy to hang for nontrivial patterns unless you only do nonblocking plus waitall. 
If one finds MPI too hard to learn, there are both GA/ARMCI and OpenSHMEM implementations over MPI-3 already (I wrote both...). 
The bigger issue is that OpenMPI doesn't support MPI-3 RMA, just the MPI-2 RMA stuff, and even then, datatypes are broken with RMA. Both ARMCI-MPI3 and OSHMPI (OpenSHMEM over MPI-3) require a late-model MPICH-derivative to work, but these are readily available on every platform normal people use (BGQ is the only system missing, and that will be resolved soon). I've run MPI-3 on my Mac (MPICH), clusters (MVAPICH), Cray (CrayMPI), and SGI (MPICH). 
Best, 
Jeff 
Sent from my iPhone 
&gt; On Jan 9, 2014, at 5:39 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt; jsquyres_at_[hidden] &gt; wrote: 
&gt; 
&gt; MPI one-sided stuff is actually pretty complicated; I wouldn't suggest it for a beginner (I don't even recommend it for many MPI experts ;-) ). 
&gt; 
&gt; Why not look at the MPI_SOURCE in the status that you got back from the MPI_RECV? In fortran, it would look something like (typed off the top of my head; forgive typos): 
&gt; 
&gt; ----- 
&gt; integer, dimension(MPI_STATUS_SIZE) :: status 
&gt; ... 
&gt; call MPI_Recv(buffer, ..., status, ierr) 
&gt; ----- 
&gt; 
&gt; The rank of the sender will be in status(MPI_SOURCE). 
&gt; 
&gt; 
&gt;&gt; On Jan 9, 2014, at 6:29 AM, Christoph Niethammer &lt; niethammer_at_[hidden] &gt; wrote: 
&gt;&gt; 
&gt;&gt; Hello, 
&gt;&gt; 
&gt;&gt; I suggest you have a look onto the MPI one-sided functionality (Section 11 of the MPI Spec 3.0). 
&gt;&gt; Create a window to allow the other processes to access the arrays A directly via MPI_Get/MPI_Put. 
&gt;&gt; Be aware of synchronization which you have to implement via MPI_Win_fence or manual locking. 
&gt;&gt; 
&gt;&gt; Regards 
&gt;&gt; Christoph 
&gt;&gt; 
&gt;&gt; -- 
&gt;&gt; 
&gt;&gt; Christoph Niethammer 
&gt;&gt; High Performance Computing Center Stuttgart (HLRS) 
&gt;&gt; Nobelstrasse 19 
&gt;&gt; 70569 Stuttgart 
&gt;&gt; 
&gt;&gt; Tel: ++49(0)711-685-87203 
&gt;&gt; email: niethammer_at_[hidden] 
&gt;&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a> 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; ----- Urspr&#195;&#188;ngliche Mail ----- 
&gt;&gt; Von: &quot;Pradeep Jha&quot; &lt; pradeep_at_[hidden] &gt; 
&gt;&gt; An: &quot;Open MPI Users&quot; &lt; users_at_[hidden] &gt; 
&gt;&gt; Gesendet: Donnerstag, 9. Januar 2014 12:10:51 
&gt;&gt; Betreff: [OMPI users] Calling a variable from another processor 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; I am writing a parallel program in Fortran77. I have the following problem: 1) I have N number of processors. 
&gt;&gt; 2) Each processor contains an array A of size S. 
&gt;&gt; 3) Using some function, on every processor (say rank X), I calculate the value of two integers Y and Z, where Z&lt;S. (the values of Y and Z are different on every processor) 
&gt;&gt; 4) I want to get the value of A(Z) on processor Y to processor X. 
&gt;&gt; 
&gt;&gt; I thought of first sending the numerical value X to processor Y from processor X and then sending A(Z) from processor Y to processor X. But it is not possible as processor Y does not know the numerical value X and so it won't know from which processor to receive the numerical value X from. 
&gt;&gt; 
&gt;&gt; I tried but I haven't been able to come up with any code which can implement this action. So I am not posting any codes. 
&gt;&gt; 
&gt;&gt; Any suggestions? 
&gt;&gt; 
&gt;&gt; _______________________________________________ 
&gt;&gt; users mailing list 
&gt;&gt; users_at_[hidden] 
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
&gt;&gt; _______________________________________________ 
&gt;&gt; users mailing list 
&gt;&gt; users_at_[hidden] 
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres 
&gt; jsquyres_at_[hidden] 
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> 
&gt; 
&gt; _______________________________________________ 
&gt; users mailing list 
&gt; users_at_[hidden] 
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
_______________________________________________ 
users mailing list 
users_at_[hidden] 
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23368/var_access.f95">var_access.f95</a>
</ul>
<!-- attachment="var_access.f95" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CXX=no in config.status, breaks mpic++ wrapper"</a>
<li><strong>Previous message:</strong> <a href="23367.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23349.php">Pradeep Jha: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23374.php">Pradeep Jha: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Reply:</strong> <a href="23374.php">Pradeep Jha: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Reply:</strong> <a href="23390.php">Jeff Hammond: "Re: [OMPI users] Calling a variable from another processor"</a>
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
