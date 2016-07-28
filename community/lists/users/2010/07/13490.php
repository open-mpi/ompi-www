<?
$subject_val = "Re: [OMPI users] OpenMPI Hangs, No Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 18:22:21 2010" -->
<!-- isoreceived="20100706222221" -->
<!-- sent="Tue, 6 Jul 2010 18:22:25 -0400" -->
<!-- isosent="20100706222225" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Hangs, No Error" -->
<!-- id="506E9826-BF81-458C-8E1D-ABBFA0CAFBA1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="674869.20258.qm_at_web80803.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Hangs, No Error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 18:22:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13491.php">Reuti: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13489.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13489.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13491.php">Reuti: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2010, at 5:41 PM, Robert Walters wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your expeditious responses, Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to confirm with you, I should change openmpi-mca-params.conf to include:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oob_tcp_port_min_v4 = (My minimum port in the range)
</span><br>
<span class="quotelev1">&gt; oob_tcp_port_range_v4 = (My port range)
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_min_v4 = (My minimum port in the range)
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_range_v4 = (My port range)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; correct?
</span><br>
<p>That should do ya.  Use the same values on all nodes.  You should be able to confirm that OMPI's run-time system is working if you are able to mpirun a non-MPI program like &quot;hostname&quot; or somesuch.  If that works, then the daemons are launching, talking to each other, launching the app, shuttling the I/O around, noticing that the app is dying, tidying everything up, and telling mpirun that everything is done.  In short: lots of things are happening right if you're able to mpirun &quot;hostname&quot; across multiple hosts.
<br>
<p><span class="quotelev1">&gt; Also, for a cluster of around 32-64 processes (8 processors per node), how wide of a range will I require? I've noticed some entries in the mailing list suggesting you need a few to get started and then it opens as necessary. Will I be safe with 20 or should I go for 100? 
</span><br>
<p>If you have 64 hosts, each with 8 processors, meaning that the largest MPI job you would run would be 64 * 8 = 512 MPI processes, then I'd ask for at least 1024 -- 2048 would be better (you have a zillion ports; better to ask for more than you need).  We recently found a bug in the TCP BTL where it *may* use 2 sockets for each peerwise connection in some cases.
<br>
<p>Additionally, your sysadmin *might* be more amenable to opening up ports *only between the cluster nodes* (vs. opening up the ports to anything).  If that's the case, you might as well go for the gold and ask them if they can open up *all* the ports between all your nodes (while still rejecting everything from non-cluster nodes).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13491.php">Reuti: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13489.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13489.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13491.php">Reuti: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
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
