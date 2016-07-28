<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 07:33:20 2007" -->
<!-- isoreceived="20070322113320" -->
<!-- sent="Thu, 22 Mar 2007 07:33:05 -0400" -->
<!-- isosent="20070322113305" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock on barrier" -->
<!-- id="B5779006-683A-4D85-BCC3-31C5A0D9F906_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="90c088060703211351u78ca6091mf2a761ad347e66f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-03-22 07:33:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2871.php">Jeff Squyres: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2869.php">Thomas Ropars: "[OMPI users] implementation of a message logging protocol"</a>
<li><strong>In reply to:</strong> <a href="2864.php">tim gunter: "[OMPI users] deadlock on barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2879.php">tim gunter: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>Reply:</strong> <a href="2879.php">tim gunter: "Re: [OMPI users] deadlock on barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this a TCP-based cluster?
<br>
<p>If so, do you have multiple IP addresses on your frontend machine?   
<br>
Check out these two FAQ entries to see if they help:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p><p><p>On Mar 21, 2007, at 4:51 PM, tim gunter wrote:
<br>
<p><span class="quotelev1">&gt; i am experiencing some issues w/ openmpi 1.2 running on a rocks  
</span><br>
<span class="quotelev1">&gt; 4.2.1 cluster(the issues also appear to occur w/ openmpi 1.1.5 and  
</span><br>
<span class="quotelev1">&gt; 1.1.4).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when i run my program with the frontend in the list of nodes, they  
</span><br>
<span class="quotelev1">&gt; deadlock.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when i run my program without the frontend in the list of nodes,  
</span><br>
<span class="quotelev1">&gt; they run to completion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the simplest test program that does this(test1.c) does an  
</span><br>
<span class="quotelev1">&gt; &quot;MPI_Init&quot;, followed by an &quot;MPI_Barrier&quot;, and a &quot;MPI_Finalize&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so the following deadlocks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /users/gunter $ mpirun -np 3 -H  
</span><br>
<span class="quotelev1">&gt; frontend,compute-0-0,compute-0-1 ./test1
</span><br>
<span class="quotelev1">&gt;     host:compute-0-1.local made it past the barrier, ret:0
</span><br>
<span class="quotelev1">&gt;     mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun noticed that job rank 0 with PID 15384 on node frontend  
</span><br>
<span class="quotelev1">&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;     2 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this runs to completion:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /users/gunter $ mpirun -np 3 -H  
</span><br>
<span class="quotelev1">&gt; compute-0-0,compute-0-1,compute-0-2 ./test1
</span><br>
<span class="quotelev1">&gt;     host:compute-0-1.local made it past the barrier, ret:0
</span><br>
<span class="quotelev1">&gt;     host:compute-0-0.local made it past the barrier, ret:0
</span><br>
<span class="quotelev1">&gt;     host:compute-0-2.local made it past the barrier, ret:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if i have the compute nodes send a message to the frontend prior to  
</span><br>
<span class="quotelev1">&gt; the barrier, it runs to completion:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /users/gunter $ mpirun -np 3 -H  
</span><br>
<span class="quotelev1">&gt; frontend,compute-0-0,compute-0-1 ./test2 0
</span><br>
<span class="quotelev1">&gt;     host:     frontend.domain node:  0 is the master
</span><br>
<span class="quotelev1">&gt;     host:   compute-0-0.local node:  1 sent:  1 to:    0
</span><br>
<span class="quotelev1">&gt;     host:   compute-0-1.local node:  2 sent:  2 to:    0
</span><br>
<span class="quotelev1">&gt;     host:     frontend.domain node:  0 recv:  1 from:  1
</span><br>
<span class="quotelev1">&gt;     host:     frontend.domain node:  0 recv:  2 from:  2
</span><br>
<span class="quotelev1">&gt;     host:     frontend.domain made it past the barrier, ret:0
</span><br>
<span class="quotelev1">&gt;     host:   compute-0-1.local made it past the barrier, ret:0
</span><br>
<span class="quotelev1">&gt;     host:   compute-0-0.local made it past the barrier, ret:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if i have a different node function as the master, it deadlocks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /users/gunter $ mpirun -np 3 -H  
</span><br>
<span class="quotelev1">&gt; frontend,compute-0-0,compute-0-1 ./test2 1
</span><br>
<span class="quotelev1">&gt;     host:   compute-0-0.local node:  1 is the master
</span><br>
<span class="quotelev1">&gt;     host:   compute-0-1.local node:  2 sent:  2 to:    1
</span><br>
<span class="quotelev1">&gt;     mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun noticed that job rank 0 with PID 15411 on node frontend  
</span><br>
<span class="quotelev1">&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;     2 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how is it that in the first example, one node makes it past the  
</span><br>
<span class="quotelev1">&gt; barrier, and the rest deadlock?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; these programs both run to completion on two other MPI  
</span><br>
<span class="quotelev1">&gt; implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is there something mis-configured on my cluster? or is this  
</span><br>
<span class="quotelev1">&gt; potentially an openmpi bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what is the best way to debug this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any help would be appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --tim
</span><br>
<span class="quotelev1">&gt; &lt;test1.c&gt;
</span><br>
<span class="quotelev1">&gt; &lt;test2.c&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2871.php">Jeff Squyres: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2869.php">Thomas Ropars: "[OMPI users] implementation of a message logging protocol"</a>
<li><strong>In reply to:</strong> <a href="2864.php">tim gunter: "[OMPI users] deadlock on barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2879.php">tim gunter: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>Reply:</strong> <a href="2879.php">tim gunter: "Re: [OMPI users] deadlock on barrier"</a>
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
