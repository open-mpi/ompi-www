<?
$subject_val = "Re: [OMPI devel] Uninitialized ORTE epoch values";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  5 15:06:27 2011" -->
<!-- isoreceived="20110805190627" -->
<!-- sent="Fri, 5 Aug 2011 15:06:20 -0400" -->
<!-- isosent="20110805190620" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Uninitialized ORTE epoch values" -->
<!-- id="6A290168-EC60-44D6-A7A7-34A5E1CC7778_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EBA15C7F-7865-4CF3-BB4D-A30CD16DF87A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Uninitialized ORTE epoch values<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-05 15:06:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9613.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Previous message:</strong> <a href="9611.php">Jeff Squyres: "[OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>In reply to:</strong> <a href="9611.php">Jeff Squyres: "[OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9613.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, the -1 file has an invalid free in it that we just fixed.  That's not part of the epoch value issue, of course.  :-)
<br>
<p>On Aug 5, 2011, at 3:03 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ralph and I are trying to track down the mysterious ORTE error.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In doing so, I have found at least one fairly repeatable error on my cluster: when running through SLURM the ibm/dynamic/spawn test, where we mpirun 3 procs and then we MPI_COMM_SPAWN 3 more.  Running the orteds through valgrind, I see a bunch of uninitialized epoch issues.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached at the 2 valgrind outputs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can these be fixed?  I don't know if they're actual problems or not, but seeing uninitialized values go by makes me extremely nervous.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
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
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; &lt;valgrind-orted-1.txt&gt;&lt;valgrind-orted-2.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="9613.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Previous message:</strong> <a href="9611.php">Jeff Squyres: "[OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>In reply to:</strong> <a href="9611.php">Jeff Squyres: "[OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9613.php">Wesley Bland: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
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
