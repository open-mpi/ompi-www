<?
$subject_val = "Re: [OMPI devel] 1.3 branch ob1 brokenness";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 16:37:08 2009" -->
<!-- isoreceived="20090601203708" -->
<!-- sent="Mon, 1 Jun 2009 14:37:03 -0600" -->
<!-- isosent="20090601203703" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 branch ob1 brokenness" -->
<!-- id="71d2d8cc0906011337i69537325y28349b3a853aaceb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="64B983B7-D42D-4CA6-84BC-5A89CC819FA4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 branch ob1 brokenness<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 16:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6161.php">Jeff Squyres: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="6159.php">Jeff Squyres: "[OMPI devel] 1.3 branch ob1 brokenness"</a>
<li><strong>In reply to:</strong> <a href="6159.php">Jeff Squyres: "[OMPI devel] 1.3 branch ob1 brokenness"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like a real simple s/OPAL/OMPI fix, so I'll give it a go tonight.
<br>
<p><p><p>On Mon, Jun 1, 2009 at 2:17 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think a patch was put back to v1.3 that wasn't quite right -- I see
</span><br>
<span class="quotelev1">&gt; pml_ob1_recvreq.h:183 and 223 have OPAL_HAVE_THREAD_SUPPORT.  But
</span><br>
<span class="quotelev1">&gt; OPAL_HAVE_THREAD_SUPPORT isn't defined on the trunk -- only
</span><br>
<span class="quotelev1">&gt; OMPI_HAVE_THREAD_SUPPORT is defined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone fix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6160/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6161.php">Jeff Squyres: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="6159.php">Jeff Squyres: "[OMPI devel] 1.3 branch ob1 brokenness"</a>
<li><strong>In reply to:</strong> <a href="6159.php">Jeff Squyres: "[OMPI devel] 1.3 branch ob1 brokenness"</a>
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
