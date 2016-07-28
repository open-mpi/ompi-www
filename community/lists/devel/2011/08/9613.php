<?
$subject_val = "Re: [OMPI devel] Uninitialized ORTE epoch values";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  5 16:45:38 2011" -->
<!-- isoreceived="20110805204538" -->
<!-- sent="Fri, 5 Aug 2011 16:45:03 -0400" -->
<!-- isosent="20110805204503" -->
<!-- name="Wesley Bland" -->
<!-- email="wbland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Uninitialized ORTE epoch values" -->
<!-- id="CAMHgK352_ik5sgFbE743JvJNPBgXxh_189q+bXMdtfscHBoC5Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Wesley Bland (<em>wbland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-05 16:45:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9614.php">Ralph Castain: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Previous message:</strong> <a href="9612.php">Jeff Squyres: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>In reply to:</strong> <a href="9611.php">Jeff Squyres: "[OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9614.php">Ralph Castain: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Reply:</strong> <a href="9614.php">Ralph Castain: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think these are anything to worry about since they're all print
<br>
statements, but I will work on these tonight.
<br>
<p>On Fri, Aug 5, 2011 at 3:03 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph and I are trying to track down the mysterious ORTE error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In doing so, I have found at least one fairly repeatable error on my
</span><br>
<span class="quotelev1">&gt; cluster: when running through SLURM the ibm/dynamic/spawn test, where we
</span><br>
<span class="quotelev1">&gt; mpirun 3 procs and then we MPI_COMM_SPAWN 3 more.  Running the orteds
</span><br>
<span class="quotelev1">&gt; through valgrind, I see a bunch of uninitialized epoch issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached at the 2 valgrind outputs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can these be fixed?  I don't know if they're actual problems or not, but
</span><br>
<span class="quotelev1">&gt; seeing uninitialized values go by makes me extremely nervous.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9613/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9614.php">Ralph Castain: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Previous message:</strong> <a href="9612.php">Jeff Squyres: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>In reply to:</strong> <a href="9611.php">Jeff Squyres: "[OMPI devel] Uninitialized ORTE epoch values"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9614.php">Ralph Castain: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Reply:</strong> <a href="9614.php">Ralph Castain: "Re: [OMPI devel] Uninitialized ORTE epoch values"</a>
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
