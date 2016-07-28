<?
$subject_val = "Re: [OMPI users] Possible regression from 1.2 to 1.3 when BLACS isinvolved";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 14:35:42 2009" -->
<!-- isoreceived="20090330183542" -->
<!-- sent="Mon, 30 Mar 2009 14:35:37 -0400" -->
<!-- isosent="20090330183537" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible regression from 1.2 to 1.3 when BLACS isinvolved" -->
<!-- id="2ECFC712-C7F0-437A-8238-211B4AE05088_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1237915070.12303.41.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible regression from 1.2 to 1.3 when BLACS isinvolved<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 14:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8653.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8651.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<li><strong>In reply to:</strong> <a href="8567.php">&#197;ke Sandgren: "[OMPI users] Possible regression from 1.2 to 1.3 when BLACS is involved"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to follow up for the web archives, this is *likely* connected to  
<br>
the critical bug that we recently announced:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/announce/2009/03/0029.php">http://www.open-mpi.org/community/lists/announce/2009/03/0029.php</a>
<br>
<p><p>On Mar 24, 2009, at 1:17 PM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; We're having problems with code that uses BLACS and openmpi 1.3.x.
</span><br>
<span class="quotelev1">&gt; When compiled with memory-manager turned on (base only), code using
</span><br>
<span class="quotelev1">&gt; BLACS either start leaking memory or gets into some kind of deadlock.
</span><br>
<span class="quotelev1">&gt; The first code-case can be circumvented by using
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned_pipeline 0, but the second one could only be solved  
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev1">&gt; compiling openmpi without memory manager.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Building 1.3.1 with ptmalloc2-internal makes the second code break in
</span><br>
<span class="quotelev1">&gt; different ways.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone else seen similar problems when using BLACS?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8653.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8651.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Critical bug notice"</a>
<li><strong>In reply to:</strong> <a href="8567.php">&#197;ke Sandgren: "[OMPI users] Possible regression from 1.2 to 1.3 when BLACS is involved"</a>
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
