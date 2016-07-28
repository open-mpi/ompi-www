<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 16 11:26:16 2006" -->
<!-- isoreceived="20061016152616" -->
<!-- sent="Mon, 16 Oct 2006 11:25:54 -0400" -->
<!-- isosent="20061016152554" -->
<!-- name="Cupp, Matthew R" -->
<!-- email="cuppm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support" -->
<!-- id="AF3852B8E5337749823CCFC6889EA8AA03538F8B_at_WS-BCO-MSE7.milky-way.battelle.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="766369F2-15A3-4E3F-A67B-B70486240B15_at_cisco.com" -->
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
<strong>From:</strong> Cupp, Matthew R (<em>cuppm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-16 11:25:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1992.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Previous message:</strong> <a href="1990.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] Question on mpi collectives"</a>
<li><strong>In reply to:</strong> <a href="1979.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the info, Jeff.  
<br>
<p>It sounds like THREAD_SINGLE is the only known working option available
<br>
currently?  Is there really a difference between that and
<br>
THREAD_FUNNELED?  Like if I have 2 threads, but only the main thread is
<br>
the one making MPI calls, is that allowed?  It seems to work, but I
<br>
wasn't sure if there was something else that would cause it to lock or
<br>
fail somewhere.
<br>
<p>Thanks,
<br>
Matt
<br>
______________________________
<br>
Matt Cupp
<br>
Battelle Memorial Institute
<br>
Statistics and Information Analysis
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Friday, October 13, 2006 5:07 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support
<br>
<p>The problem is that we haven't done a whole lot of testing yet for  
<br>
multiple thread support.  In particular, OMPI was fundamentally  
<br>
designed for both THREAD_MULTIPLE and progression thread support, and  
<br>
several groups have done testing to ensure that when compiled with  
<br>
multiple thread support, OMPI doesn't just hang, but:
<br>
<p>- I don't know if we have tested the progress thread support in quite  
<br>
a long time, and
<br>
- Even though OMPI has been tested to ensure that we don't have  
<br>
boneheaded extra locks/unlocks, not a whole lot of testing has  
<br>
occurred to ensure that THREAD_MULTIPLE support is completely solid.
<br>
<p>As such, I'd be surprised if THREAD_MULTIPLE works for any  
<br>
applications that do anything reasonably &quot;interesting&quot; with multiple  
<br>
threads and MPI (it pains me to say this, but I'd rather be honest  
<br>
than string you along! :-( ).
<br>
<p>That being said, THREAD_MULTIPLE support is going to become more  
<br>
relevant in the next several months (i.e., various organizations have  
<br>
a vested interest in THREAD_MULTIPLE and the work will resume in this  
<br>
area).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1992.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Previous message:</strong> <a href="1990.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] Question on mpi collectives"</a>
<li><strong>In reply to:</strong> <a href="1979.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
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
