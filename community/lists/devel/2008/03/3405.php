<?
$subject_val = "Re: [OMPI devel] Orte cleanup";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 11:59:13 2008" -->
<!-- isoreceived="20080307165913" -->
<!-- sent="Fri, 7 Mar 2008 11:59:05 -0500" -->
<!-- isosent="20080307165905" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte cleanup" -->
<!-- id="21D69C2D-3233-42A4-8458-F617D8FDCFAA_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3F55DA6.492E%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-07 11:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3406.php">Aurélien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Previous message:</strong> <a href="3404.php">Jeff Squyres: "Re: [OMPI devel] t_win failures if openib btl is not loaded"</a>
<li><strong>In reply to:</strong> <a href="3390.php">Ralph Castain: "Re: [OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like it works.
<br>
<p>Aurelien
<br>
<p>Le 6 mars 08 &#224; 10:36, Ralph Castain a &#233;crit :
<br>
<p><span class="quotelev1">&gt; I believe I have at least helped reduce this with r17761. I added the
</span><br>
<span class="quotelev1">&gt; ability for procs to detect that their &quot;lifeline&quot; connection (either  
</span><br>
<span class="quotelev1">&gt; the HNP
</span><br>
<span class="quotelev1">&gt; for unity routed, or their local daemon for tree) has been lost and
</span><br>
<span class="quotelev1">&gt; gracefully abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/4/08 9:37 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I noticed that the new release of orte is not as good as it used to  
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; to cleanup the mess left by crashed/aborted mpi processes. Recently  
</span><br>
<span class="quotelev2">&gt;&gt; We
</span><br>
<span class="quotelev2">&gt;&gt; have been experiencing a lot of zombie or live locked processes
</span><br>
<span class="quotelev2">&gt;&gt; running on the cluster nodes and disturbing following experiments. I
</span><br>
<span class="quotelev2">&gt;&gt; didn't really had time to investigate the issue, maybe ralph can  
</span><br>
<span class="quotelev2">&gt;&gt; set a
</span><br>
<span class="quotelev2">&gt;&gt; ticket if he is able to reproduce this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev2">&gt;&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; * University of Tennessee
</span><br>
<span class="quotelev2">&gt;&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev2">&gt;&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev2">&gt;&gt; * 865 974 6321
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3406.php">Aurélien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Previous message:</strong> <a href="3404.php">Jeff Squyres: "Re: [OMPI devel] t_win failures if openib btl is not loaded"</a>
<li><strong>In reply to:</strong> <a href="3390.php">Ralph Castain: "Re: [OMPI devel] Orte cleanup"</a>
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
