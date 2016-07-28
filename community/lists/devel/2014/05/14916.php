<?
$subject_val = "Re: [OMPI devel] Open MPI 1.6.5	opal_paffinity_base_get_physical_socket_id";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 31 08:13:13 2014" -->
<!-- isoreceived="20140531121313" -->
<!-- sent="Sat, 31 May 2014 12:12:56 +0000" -->
<!-- isosent="20140531121256" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI 1.6.5	opal_paffinity_base_get_physical_socket_id" -->
<!-- id="D02D7FA8-A7E7-4C23-934E-175ACE4605D8_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3647E454F318284EAF10851638CD92520638C7F2_at_UUSNWE1M.na.utcmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI 1.6.5	opal_paffinity_base_get_physical_socket_id<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-31 08:12:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14917.php">Lecrenski, Stephen K       PW: "Re: [OMPI devel] [External] Re: Open MPI	1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>Previous message:</strong> <a href="14915.php">Lecrenski, Stephen K       PW: "[OMPI devel] Open MPI 1.6.5 opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>In reply to:</strong> <a href="14915.php">Lecrenski, Stephen K       PW: "[OMPI devel] Open MPI 1.6.5 opal_paffinity_base_get_physical_socket_id"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14917.php">Lecrenski, Stephen K       PW: "Re: [OMPI devel] [External] Re: Open MPI	1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>Reply:</strong> <a href="14917.php">Lecrenski, Stephen K       PW: "Re: [OMPI devel] [External] Re: Open MPI	1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The super short answer is: 1.6.x is old and deprecated; can you upgrade to the 1.8.x series?
<br>
<p>The short answer is &quot;no&quot; -- paffinity calls should never block, but it depends on how and what you're measuring.
<br>
<p>The more detailed answer is: your trace below looks like it includes a call to MPI_Abort.  Did your process hang during the abort, perchance, and (somehow) get stuck in a process affinity call?
<br>
<p>Are you able to download and run the lstopo command from the hwloc suite?  (<a href="http://www.open-mpi.org/software/hwloc/v1.9/">http://www.open-mpi.org/software/hwloc/v1.9/</a>)
<br>
<p><p><p><p>On May 30, 2014, at 2:47 PM, &quot;Lecrenski, Stephen K PW&quot; &lt;Stephen.Lecrenski_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am running some performance tests (Open SpeedShop) with a program which uses Open MPI and Infiniband. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I see a line of code which appears to be taking a considerable amount of cpu time in relation to other pieces of the code.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; opal_paffinity_base_get_physical_socket_id (libmpi.so.1.0.8: paffinity_base_wrappers.c,118)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Exclusive CPU time in seconds.
</span><br>
<span class="quotelev1">&gt; % of CPU Time
</span><br>
<span class="quotelev1">&gt; Statement Location (Line Number)
</span><br>
<span class="quotelev1">&gt; 19031.94
</span><br>
<span class="quotelev1">&gt; 38.339796
</span><br>
<span class="quotelev1">&gt; paffinity_base_wrappers.c(118)
</span><br>
<span class="quotelev1">&gt; 14188.66
</span><br>
<span class="quotelev1">&gt; 28.583021
</span><br>
<span class="quotelev1">&gt; paffinity_base_wrappers.c(113)
</span><br>
<span class="quotelev1">&gt; 10934.38
</span><br>
<span class="quotelev1">&gt; 22.027282
</span><br>
<span class="quotelev1">&gt; paffinity_base_wrappers.c(129)
</span><br>
<span class="quotelev1">&gt; 2185.16
</span><br>
<span class="quotelev1">&gt; 4.401999
</span><br>
<span class="quotelev1">&gt; paffinity_base_wrappers.c(121)
</span><br>
<span class="quotelev1">&gt; 1081.96
</span><br>
<span class="quotelev1">&gt; 2.179606
</span><br>
<span class="quotelev1">&gt; paffinity_base_wrappers.c(130)
</span><br>
<span class="quotelev1">&gt; 546.93
</span><br>
<span class="quotelev1">&gt; 1.101789
</span><br>
<span class="quotelev1">&gt; paffinity_base_wrappers.c(114)
</span><br>
<span class="quotelev1">&gt; 546.17
</span><br>
<span class="quotelev1">&gt; 1.100258
</span><br>
<span class="quotelev1">&gt; paffinity_base_wrappers.c(65)
</span><br>
<span class="quotelev1">&gt; 541.67
</span><br>
<span class="quotelev1">&gt; 1.091193
</span><br>
<span class="quotelev1">&gt; paffinity_base_wrappers.c(126)
</span><br>
<span class="quotelev1">&gt; 540.52
</span><br>
<span class="quotelev1">&gt; 1.088876
</span><br>
<span class="quotelev1">&gt; ompi_mpi_abort.c(80)
</span><br>
<span class="quotelev1">&gt; 2.23
</span><br>
<span class="quotelev1">&gt; 0.004492
</span><br>
<span class="quotelev1">&gt; ompi_mpi_abort.c(101)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is this normal behavior?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Stephen Lecrenski
</span><br>
<span class="quotelev1">&gt; High Performance Technical Computing
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Pratt &amp; Whitney
</span><br>
<span class="quotelev1">&gt; 400 Main Street
</span><br>
<span class="quotelev1">&gt; East Hartford,CT 06108
</span><br>
<span class="quotelev1">&gt; Telephone: 860 - 557 - 2895
</span><br>
<span class="quotelev1">&gt; Email:         Stephen.Lecrenski_at_[hidden]
</span><br>
<span class="quotelev1">&gt; P Please consider the environment before printing this e-mail
</span><br>
<span class="quotelev1">&gt; CONFIDENTIALITY WARNING: This email may contain privileged or confidential information and is for the sole use of the intended recipients.  Unauthorized disclosure or use of this communication is prohibited.  If you believe that you have received this email in error, please notify the sender immediately and delete it from your system.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14915.php">http://www.open-mpi.org/community/lists/devel/2014/05/14915.php</a>
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
<li><strong>Next message:</strong> <a href="14917.php">Lecrenski, Stephen K       PW: "Re: [OMPI devel] [External] Re: Open MPI	1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>Previous message:</strong> <a href="14915.php">Lecrenski, Stephen K       PW: "[OMPI devel] Open MPI 1.6.5 opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>In reply to:</strong> <a href="14915.php">Lecrenski, Stephen K       PW: "[OMPI devel] Open MPI 1.6.5 opal_paffinity_base_get_physical_socket_id"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14917.php">Lecrenski, Stephen K       PW: "Re: [OMPI devel] [External] Re: Open MPI	1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>Reply:</strong> <a href="14917.php">Lecrenski, Stephen K       PW: "Re: [OMPI devel] [External] Re: Open MPI	1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
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
