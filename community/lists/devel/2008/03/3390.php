<?
$subject_val = "Re: [OMPI devel] Orte cleanup";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 10:37:09 2008" -->
<!-- isoreceived="20080306153709" -->
<!-- sent="Thu, 06 Mar 2008 08:36:54 -0700" -->
<!-- isosent="20080306153654" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte cleanup" -->
<!-- id="C3F55DA6.492E%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="11736AE8-ED46-4B6F-946A-9EB4DEFA9360_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Orte cleanup<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 10:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3391.php">Ralph Castain: "[OMPI devel] Fault tolerance"</a>
<li><strong>Previous message:</strong> <a href="3389.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<li><strong>In reply to:</strong> <a href="3366.php">Aur&#233;lien Bouteiller: "[OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3405.php">Aurélien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>Reply:</strong> <a href="3405.php">Aurélien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe I have at least helped reduce this with r17761. I added the
<br>
ability for procs to detect that their &quot;lifeline&quot; connection (either the HNP
<br>
for unity routed, or their local daemon for tree) has been lost and
<br>
gracefully abort.
<br>
<p>Let me know if that helps
<br>
Ralph
<br>
<p><p><p>On 3/4/08 9:37 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I noticed that the new release of orte is not as good as it used to be
</span><br>
<span class="quotelev1">&gt; to cleanup the mess left by crashed/aborted mpi processes. Recently We
</span><br>
<span class="quotelev1">&gt; have been experiencing a lot of zombie or live locked processes
</span><br>
<span class="quotelev1">&gt; running on the cluster nodes and disturbing following experiments. I
</span><br>
<span class="quotelev1">&gt; didn't really had time to investigate the issue, maybe ralph can set a
</span><br>
<span class="quotelev1">&gt; ticket if he is able to reproduce this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; * University of Tennessee
</span><br>
<span class="quotelev1">&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev1">&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; * 865 974 6321
</span><br>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3391.php">Ralph Castain: "[OMPI devel] Fault tolerance"</a>
<li><strong>Previous message:</strong> <a href="3389.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<li><strong>In reply to:</strong> <a href="3366.php">Aur&#233;lien Bouteiller: "[OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3405.php">Aurélien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<li><strong>Reply:</strong> <a href="3405.php">Aurélien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
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
