<?
$subject_val = "Re: [OMPI devel] [External] Re: Open	MPI	1.6.5	opal_paffinity_base_get_physical_socket_id";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 31 10:45:15 2014" -->
<!-- isoreceived="20140531144515" -->
<!-- sent="Sat, 31 May 2014 14:45:12 +0000" -->
<!-- isosent="20140531144512" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [External] Re: Open	MPI	1.6.5	opal_paffinity_base_get_physical_socket_id" -->
<!-- id="A016F55D-CC07-4058-B6D0-D0221E71794D_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="3647E454F318284EAF10851638CD92520638CBF8_at_UUSNWE1M.na.utcmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [External] Re: Open	MPI	1.6.5	opal_paffinity_base_get_physical_socket_id<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-31 10:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14919.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Previous message:</strong> <a href="14917.php">Lecrenski, Stephen K       PW: "Re: [OMPI devel] [External] Re: Open MPI	1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>In reply to:</strong> <a href="14917.php">Lecrenski, Stephen K       PW: "Re: [OMPI devel] [External] Re: Open MPI	1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 31, 2014, at 10:32 AM, &quot;Lecrenski, Stephen K       PW&quot; &lt;Stephen.Lecrenski_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This case was a very simple 6 process test on a single node which ran to completion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm installing mpi 1.8.1 now to see if I see the same issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just installed and ran hwloc.  What am I looking for?  I see basic information PCI (ib0, ib1, mix4_0) PCI(eth0) PCI(eth1) PCI() PCI(sda)  and others...
</span><br>
<p>The fact that it ran without hanging for a huge period of time is a good sign; that's really all I was looking for.
<br>
<p><span class="quotelev1">&gt; When I launch the mpi process I'm using mpirun --mca btl self,sm,openib
</span><br>
<p>That should be fine.
<br>
<p><span class="quotelev1">&gt; I have not explicitly specified in mpirun to use processor affinity.  When running top (1) I do see that the processes migrate from core to core from time to time.  
</span><br>
<p>With 1.6.x, that sounds good.  That does make it weirder, though -- you weren't using affinity, but you were spending giant amounts of time in the affinity code.  Strange.
<br>
<p>With 1.8.x, OMPI enables affinity by default.
<br>
<p>Let's see what happens with 1.8.x -- if upgrading solves your problem, that would be best.
<br>
<p><span class="quotelev1">&gt; Am I using processor affinity and if so shouldn't the process(s) remain on each individual core throughout execution?  Hyperthreading is off.  I am not using a rank file nor specifying the mpirun command to explicitly use processor affinity.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; skl
</span><br>
<span class="quotelev1">&gt; 860-557-2895
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CONFIDENTIALITY WARNING: This email may contain privileged or confidential information and is for the sole use of the intended recipients.  Unauthorized disclosure or use of this communication is prohibited.  If you believe that you have received this email in error, please notify the sender immediately and delete it from your system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, May 31, 2014 8:13 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [External] Re: [OMPI devel] Open MPI 1.6.5 opal_paffinity_base_get_physical_socket_id
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The super short answer is: 1.6.x is old and deprecated; can you upgrade to the 1.8.x series?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The short answer is &quot;no&quot; -- paffinity calls should never block, but it depends on how and what you're measuring.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The more detailed answer is: your trace below looks like it includes a call to MPI_Abort.  Did your process hang during the abort, perchance, and (somehow) get stuck in a process affinity call?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you able to download and run the lstopo command from the hwloc suite?  (<a href="http://www.open-mpi.org/software/hwloc/v1.9/">http://www.open-mpi.org/software/hwloc/v1.9/</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 30, 2014, at 2:47 PM, &quot;Lecrenski, Stephen K PW&quot; &lt;Stephen.Lecrenski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am running some performance tests (Open SpeedShop) with a program which uses Open MPI and Infiniband. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I see a line of code which appears to be taking a considerable amount of cpu time in relation to other pieces of the code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; opal_paffinity_base_get_physical_socket_id (libmpi.so.1.0.8: 
</span><br>
<span class="quotelev2">&gt;&gt; paffinity_base_wrappers.c,118)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Exclusive CPU time in seconds.
</span><br>
<span class="quotelev2">&gt;&gt; % of CPU Time
</span><br>
<span class="quotelev2">&gt;&gt; Statement Location (Line Number)
</span><br>
<span class="quotelev2">&gt;&gt; 19031.94
</span><br>
<span class="quotelev2">&gt;&gt; 38.339796
</span><br>
<span class="quotelev2">&gt;&gt; paffinity_base_wrappers.c(118)
</span><br>
<span class="quotelev2">&gt;&gt; 14188.66
</span><br>
<span class="quotelev2">&gt;&gt; 28.583021
</span><br>
<span class="quotelev2">&gt;&gt; paffinity_base_wrappers.c(113)
</span><br>
<span class="quotelev2">&gt;&gt; 10934.38
</span><br>
<span class="quotelev2">&gt;&gt; 22.027282
</span><br>
<span class="quotelev2">&gt;&gt; paffinity_base_wrappers.c(129)
</span><br>
<span class="quotelev2">&gt;&gt; 2185.16
</span><br>
<span class="quotelev2">&gt;&gt; 4.401999
</span><br>
<span class="quotelev2">&gt;&gt; paffinity_base_wrappers.c(121)
</span><br>
<span class="quotelev2">&gt;&gt; 1081.96
</span><br>
<span class="quotelev2">&gt;&gt; 2.179606
</span><br>
<span class="quotelev2">&gt;&gt; paffinity_base_wrappers.c(130)
</span><br>
<span class="quotelev2">&gt;&gt; 546.93
</span><br>
<span class="quotelev2">&gt;&gt; 1.101789
</span><br>
<span class="quotelev2">&gt;&gt; paffinity_base_wrappers.c(114)
</span><br>
<span class="quotelev2">&gt;&gt; 546.17
</span><br>
<span class="quotelev2">&gt;&gt; 1.100258
</span><br>
<span class="quotelev2">&gt;&gt; paffinity_base_wrappers.c(65)
</span><br>
<span class="quotelev2">&gt;&gt; 541.67
</span><br>
<span class="quotelev2">&gt;&gt; 1.091193
</span><br>
<span class="quotelev2">&gt;&gt; paffinity_base_wrappers.c(126)
</span><br>
<span class="quotelev2">&gt;&gt; 540.52
</span><br>
<span class="quotelev2">&gt;&gt; 1.088876
</span><br>
<span class="quotelev2">&gt;&gt; ompi_mpi_abort.c(80)
</span><br>
<span class="quotelev2">&gt;&gt; 2.23
</span><br>
<span class="quotelev2">&gt;&gt; 0.004492
</span><br>
<span class="quotelev2">&gt;&gt; ompi_mpi_abort.c(101)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this normal behavior?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Stephen Lecrenski
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Technical Computing
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pratt &amp; Whitney
</span><br>
<span class="quotelev2">&gt;&gt; 400 Main Street
</span><br>
<span class="quotelev2">&gt;&gt; East Hartford,CT 06108
</span><br>
<span class="quotelev2">&gt;&gt; Telephone: 860 - 557 - 2895
</span><br>
<span class="quotelev2">&gt;&gt; Email:         Stephen.Lecrenski_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; P Please consider the environment before printing this e-mail 
</span><br>
<span class="quotelev2">&gt;&gt; CONFIDENTIALITY WARNING: This email may contain privileged or confidential information and is for the sole use of the intended recipients.  Unauthorized disclosure or use of this communication is prohibited.  If you believe that you have received this email in error, please notify the sender immediately and delete it from your system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14915.php">http://www.open-mpi.org/community/lists/devel/2014/05/14915.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14916.php">http://www.open-mpi.org/community/lists/devel/2014/05/14916.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14917.php">http://www.open-mpi.org/community/lists/devel/2014/05/14917.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14919.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Previous message:</strong> <a href="14917.php">Lecrenski, Stephen K       PW: "Re: [OMPI devel] [External] Re: Open MPI	1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>In reply to:</strong> <a href="14917.php">Lecrenski, Stephen K       PW: "Re: [OMPI devel] [External] Re: Open MPI	1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
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
