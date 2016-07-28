<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec  4 03:44:43 2006" -->
<!-- isoreceived="20061204084443" -->
<!-- sent="Mon, 04 Dec 2006 09:44:36 +0100" -->
<!-- isosent="20061204084436" -->
<!-- name="Jens Klostermann" -->
<!-- email="jens.klostermann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] password orted problem" -->
<!-- id="1165221876.10710.41.camel_at_localhost" -->
<!-- inreplyto="[OMPI users] password orted problem" -->
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
<strong>From:</strong> Jens Klostermann (<em>jens.klostermann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-04 03:44:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2287.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2285.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Maybe in reply to:</strong> <a href="2268.php">Jens Klostermann: "[OMPI users] password orted problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2289.php">Jeff Squyres: "Re: [OMPI users] password orted problem"</a>
<li><strong>Reply:</strong> <a href="2289.php">Jeff Squyres: "Re: [OMPI users] password orted problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; What the system is saying is that (a) you don't have transparent ssh 
</span><br>
<span class="quotelev1">&gt; authority on one or more of your nodes, and/or (b) the system was
</span><br>
unable
<br>
<span class="quotelev1">&gt; to 
</span><br>
<span class="quotelev1">&gt; locate the Open MPI code libraries on the remote node. For the first 
</span><br>
<span class="quotelev1">&gt; problem, please see the FAQ at: 
</span><br>
<p><span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a> 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once you have that fixed, then you should check the remote nodes to
</span><br>
<span class="quotelev1">&gt; ensure 
</span><br>
<span class="quotelev1">&gt; that the Open MPI code libraries are available - you may need to
</span><br>
provide
<br>
<span class="quotelev1">&gt; a 
</span><br>
<span class="quotelev1">&gt; prefix directory to mpirun to tell us where they are. Please see the
</span><br>
FAQ
<br>
<span class="quotelev1">&gt; at: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a> 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For some advice in that area. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps 
</span><br>
<span class="quotelev1">&gt; Ralph 
</span><br>
<p>I think these suggestions: (a) nontransparent ssh authority and (b)
<br>
being unable to locate the Open MPI code libraries on the remote node
<br>
are not the problems. 
<br>
(a)Passwordless ssh is setup and all nodes see the same home!
<br>
(b)the Open MPI code libraries are located in my home which sees every
<br>
node.
<br>
<p>mpirun sometimes works with all cpus/nodes of the cluster, but sometimes
<br>
it won't and the error described below will occur.
<br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/1/06 8:17 AM, &quot;Jens Klostermann&quot; 
</span><br>
<span class="quotelev1">&gt; &lt;jens.klostermann_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I 've got the same problem as described in:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2006/07/1537.php">http://www.open-mpi.org/community/lists/users/2006/07/1537.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: Chengwen Chen (chenchengwen_at_[hidden])
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2006-07-04 03:53:26
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The problem seems to occur randomly! It occurs more often if I use a
</span><br>
<span class="quotelev2">&gt; &gt; larger number of cpu, but always never if I use a small number of
</span><br>
<span class="quotelev1">&gt; cpus.
</span><br>
<span class="quotelev2">&gt; &gt; So far my cure to the problem is to kill and restart my application
</span><br>
<span class="quotelev2">&gt; &gt; (mpirun ...) as often untill the error won't occur and mpirun will
</span><br>
<span class="quotelev1">&gt; run.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So is the problem resolved. Can anybody give me an hint?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am using a amd64 linux (suse10) cluster with infiniband conection
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2a1r10111.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I attach the ompi_info --param all all output, hope it helps.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards Jens
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2287.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2285.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Maybe in reply to:</strong> <a href="2268.php">Jens Klostermann: "[OMPI users] password orted problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2289.php">Jeff Squyres: "Re: [OMPI users] password orted problem"</a>
<li><strong>Reply:</strong> <a href="2289.php">Jeff Squyres: "Re: [OMPI users] password orted problem"</a>
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
