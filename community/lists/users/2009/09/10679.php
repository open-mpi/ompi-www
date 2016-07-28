<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 23:52:27 2009" -->
<!-- isoreceived="20090918035227" -->
<!-- sent="Fri, 18 Sep 2009 12:52:17 +0900" -->
<!-- isosent="20090918035217" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="4AB303F1.7010807_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AAA81CC8-38B6-4EA9-9C3D-86C1DD16959A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multi-threading  with OpenMPI ?<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 23:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10680.php">neeraj_at_[hidden]: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10678.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>In reply to:</strong> <a href="10676.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10680.php">neeraj_at_[hidden]: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10680.php">neeraj_at_[hidden]: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>
<p>I have not much experience in this area.shall i use 
<br>
pthread_mutex_lock(*),*pthread_mutex_unlock() ..etc or following which i 
<br>
saw in OpenMPI source :
<br>
<p>static opal_mutex_t ompi_lock;
<br>
<p>OPAL_THREAD_LOCK(&amp;ompi_lock);
<br>
&nbsp;&nbsp;&nbsp;//
<br>
OPAL_THREAD_UNLOCK(&amp;ompi_lock);
<br>
<p>Thanks in advance,
<br>
umanga
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Only thing I can suggest is to place a thread lock around the call to 
</span><br>
<span class="quotelev1">&gt; comm_spawn so that only one thread at a time can execute that 
</span><br>
<span class="quotelev1">&gt; function. The call to mpi_init_thread is fine - you just need to 
</span><br>
<span class="quotelev1">&gt; explicitly protect the call to comm_spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2009, at 7:44 PM, Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HI Jeff, Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I call MPI_COMM_SPAWN in multiple threads simultaneously.
</span><br>
<span class="quotelev2">&gt;&gt; Because I need to expose my parallel algorithm as a web service, I 
</span><br>
<span class="quotelev2">&gt;&gt; need multiple clients connect and execute my logic as same time(ie 
</span><br>
<span class="quotelev2">&gt;&gt; mutiple threads).
</span><br>
<span class="quotelev2">&gt;&gt; For each client , a new thread is created (by Web service framework) 
</span><br>
<span class="quotelev2">&gt;&gt; and inside the thread,MPI_Init_Thread() is called if the MPI hasnt 
</span><br>
<span class="quotelev2">&gt;&gt; been initialized.
</span><br>
<span class="quotelev2">&gt;&gt; The the thread calls MPI_COMM__SPAWN and create new processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So ,if this is the case isn't there any workarounds ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; umanga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 16, 2009, at 9:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Only the obvious, and not very helpful one: comm_spawn isn't thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; safe at this time. You'll need to serialize your requests to that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is likely the cause of your issues if you are calling 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_SPAWN in multiple threads simultaneously.  Can you verify?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If not, we'll need to dig a little deeper to figure out what's going 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on.  But Ralph is right -- read up on the THREAD_MULTIPLE 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constraints (check the OMPI README file) to see if that's what's 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; biting you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10680.php">neeraj_at_[hidden]: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10678.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>In reply to:</strong> <a href="10676.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10680.php">neeraj_at_[hidden]: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10680.php">neeraj_at_[hidden]: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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
