<?
$subject_val = "[OMPI users] Fwd: problem for multiple clusters using mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 10:09:12 2014" -->
<!-- isoreceived="20140321140912" -->
<!-- sent="Fri, 21 Mar 2014 15:09:11 +0100" -->
<!-- isosent="20140321140911" -->
<!-- name="Hamid Saeed" -->
<!-- email="e.hamidsaeed_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: problem for multiple clusters using mpirun" -->
<!-- id="CAADBNWxH6b6GsBmNOCyLPBLStEgAASY-HyNvqAW0mrnrr+3-4g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="54EFA576-6B20-4A6D-98C1-27F9EB844F21_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: problem for multiple clusters using mpirun<br>
<strong>From:</strong> Hamid Saeed (<em>e.hamidsaeed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 10:09:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23917.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Previous message:</strong> <a href="23915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23918.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23918.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
---------- Forwarded message ----------
<br>
From: Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
Date: Fri, Mar 21, 2014 at 3:05 PM
<br>
Subject: Re: problem for multiple clusters using mpirun
<br>
To: Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt;
<br>
<p><p>Please reply on the mailing list; more people can reply that way, and the
<br>
answers to your questions become google-able for people with similar
<br>
questions.
<br>
<p><p>On Mar 21, 2014, at 10:03 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to bother you again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think i have a tcp connection. As for as i know my cluster is not
</span><br>
configured for Infiniband (IB).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but even for tcp connections.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 -host master,node001 --mca btl tcp,sm,self ./helloworldmpi
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 -host master,node001 ./helloworldmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These line are not working they output
</span><br>
<span class="quotelev1">&gt; Error like
</span><br>
<span class="quotelev1">&gt; [btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect] connect()
</span><br>
to xx.xxx.x.xxx failed: Connection refused (111)
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at the program hangs up until i press
</span><br>
<span class="quotelev1">&gt; ctrl + c.
</span><br>
<span class="quotelev1">&gt; n Fri, Mar 21, 2014 at 2:47 PM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you kindly explain what does IB connection means?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Mar 21, 2014 at 2:44 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Was Ralph's answer not enough?  I think he hit the nail on the head...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2014, at 9:29 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have learnt about mpi from you using different web portals.
</span><br>
<span class="quotelev2">&gt; &gt; I hope you can help me in solving this problem too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       * I can compile my helloworld.c program using mpicc and I have
</span><br>
confirmed that the script runs correctly on another working cluster, so the
<br>
local paths are set up correctly I think and the script definitely works.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       * If I execute mpirun from my master node, and using only the
</span><br>
master node, helloworld executes correctly:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -n 1 -host master --mca btl sm,openib,self ./helloworldmpi
</span><br>
<span class="quotelev2">&gt; &gt; hello world from process 0 of 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       * If I execute mpirun from my master node, using only the worker
</span><br>
node, helloworld executes correctly:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -n 1 -host node001 --mca btl sm,openib,self./helloworldmpi
</span><br>
<span class="quotelev2">&gt; &gt; hello world from process 0 of 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now, my problem is that if I try to run helloworld on both nodes, I get
</span><br>
an error:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -n 2 -host master,node001 --mca btl openib,self ./helloworldmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt; &gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt; &gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt; &gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt; &gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt; &gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Process 1 ([[5228,1],0]) is on host: hsaeed
</span><br>
<span class="quotelev2">&gt; &gt;   Process 2 ([[5228,1],1]) is on host: node001
</span><br>
<span class="quotelev2">&gt; &gt;   BTLs attempted: self
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
environment
<br>
<span class="quotelev2">&gt; &gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev2">&gt; &gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt; &gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt; &gt; Abort before MPI_INIT completed successfully; not able to guarantee
</span><br>
that all other processes were killed!
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; mpirun has exited due to process rank 0 with PID 7037 on
</span><br>
<span class="quotelev2">&gt; &gt; node xxxx exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt; &gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev2">&gt; &gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt; &gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt; &gt; Abort before MPI_INIT completed successfully; not able to guarantee
</span><br>
that all other processes were killed!
<br>
<span class="quotelev2">&gt; &gt; 1 more process has sent help message help-mca-bml-r2.txt / unreachable
</span><br>
proc
<br>
<span class="quotelev2">&gt; &gt; Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help /
</span><br>
error messages
<br>
<span class="quotelev2">&gt; &gt; 1 more process has sent help message help-mpi-runtime
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i tried using
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -n 2 -host master,node001 --mca btl tcp,sm,self ./helloworldmpi
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -n 2 -host master,node001 --mca btl o
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; penib,tcp,
</span><br>
<span class="quotelev2">&gt; &gt; self ./helloworldmpi
</span><br>
<span class="quotelev2">&gt; &gt; etc..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But no flag is works.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can some one reply with the idea.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in Advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards--
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Hamid Saeed
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
-- 
_______________________________________________
Hamid Saeed
CoSynth GmbH &amp; Co. KG
Escherweg 2 - 26121 Oldenburg - Germany
Tel +49 441 9722 738 | Fax -278
<a href="http://www.cosynth.com">http://www.cosynth.com</a>
_______________________________________________
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23916/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23917.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Previous message:</strong> <a href="23915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23918.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23918.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
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
