<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec  4 08:35:25 2006" -->
<!-- isoreceived="20061204133525" -->
<!-- sent="Mon, 4 Dec 2006 08:35:17 -0500" -->
<!-- isosent="20061204133517" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] password orted problem" -->
<!-- id="48AF0B41-3BED-456B-83D2-E5693812C1B6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1165221876.10710.41.camel_at_localhost" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-04 08:35:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2290.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2288.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2286.php">Jens Klostermann: "Re: [OMPI users] password orted problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing that I note is that you are using a fairly ancient  
<br>
development version -- the development snapshots tend to change  
<br>
pretty quickly (usually nightly).  The version you cited is  
<br>
1.2a1r10111 (which I think is about 5-6 months ago), but the current  
<br>
development head is r12737.
<br>
<p>Indeed, we've had some fairly important run-time changes over the  
<br>
past 2-3 weeks.  Can you update to a more recent copy and try again?
<br>
<p><p><p>On Dec 4, 2006, at 3:44 AM, Jens Klostermann wrote:
<br>
<p><span class="quotelev2">&gt;&gt; What the system is saying is that (a) you don't have transparent ssh
</span><br>
<span class="quotelev2">&gt;&gt; authority on one or more of your nodes, and/or (b) the system was
</span><br>
<span class="quotelev1">&gt; unable
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; locate the Open MPI code libraries on the remote node. For the first
</span><br>
<span class="quotelev2">&gt;&gt; problem, please see the FAQ at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Once you have that fixed, then you should check the remote nodes to
</span><br>
<span class="quotelev2">&gt;&gt; ensure
</span><br>
<span class="quotelev2">&gt;&gt; that the Open MPI code libraries are available - you may need to
</span><br>
<span class="quotelev1">&gt; provide
</span><br>
<span class="quotelev2">&gt;&gt; a
</span><br>
<span class="quotelev2">&gt;&gt; prefix directory to mpirun to tell us where they are. Please see the
</span><br>
<span class="quotelev1">&gt; FAQ
</span><br>
<span class="quotelev2">&gt;&gt; at:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For some advice in that area.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think these suggestions: (a) nontransparent ssh authority and (b)
</span><br>
<span class="quotelev1">&gt; being unable to locate the Open MPI code libraries on the remote node
</span><br>
<span class="quotelev1">&gt; are not the problems.
</span><br>
<span class="quotelev1">&gt; (a)Passwordless ssh is setup and all nodes see the same home!
</span><br>
<span class="quotelev1">&gt; (b)the Open MPI code libraries are located in my home which sees every
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun sometimes works with all cpus/nodes of the cluster, but  
</span><br>
<span class="quotelev1">&gt; sometimes
</span><br>
<span class="quotelev1">&gt; it won't and the error described below will occur.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/1/06 8:17 AM, &quot;Jens Klostermann&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jens.klostermann_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I 've got the same problem as described in:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/07/1537.php">http://www.open-mpi.org/community/lists/users/2006/07/1537.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Chengwen Chen (chenchengwen_at_[hidden])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2006-07-04 03:53:26
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem seems to occur randomly! It occurs more often if I use a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; larger number of cpu, but always never if I use a small number of
</span><br>
<span class="quotelev2">&gt;&gt; cpus.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So far my cure to the problem is to kill and restart my application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (mpirun ...) as often untill the error won't occur and mpirun will
</span><br>
<span class="quotelev2">&gt;&gt; run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So is the problem resolved. Can anybody give me an hint?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using a amd64 linux (suse10) cluster with infiniband conection
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.2a1r10111.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I attach the ompi_info --param all all output, hope it helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards Jens
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2290.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2288.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2286.php">Jens Klostermann: "Re: [OMPI users] password orted problem"</a>
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
