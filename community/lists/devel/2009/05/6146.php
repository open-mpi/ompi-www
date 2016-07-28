<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 08:48:24 2009" -->
<!-- isoreceived="20090528124824" -->
<!-- sent="Thu, 28 May 2009 08:48:18 -0400" -->
<!-- isosent="20090528124818" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="5D6F4990-E153-4353-BC59-2C9B0247A5F2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0905280453m71402e79u2a95f29dd48cf1a5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem in the ORTE notifier framework<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-28 08:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6147.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6145.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6143.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6148.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6148.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2009, at 7:53 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; The code in 1.3 is definitely different from the trunk as it lags  
</span><br>
<span class="quotelev1">&gt; quite a bit behind. However, the trunk definitely does include the  
</span><br>
<span class="quotelev1">&gt; code I referenced.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure why the hg mirror wouldn't have it. I would have to defer  
</span><br>
<span class="quotelev1">&gt; to Jeff on that question - could be a bug in the update macro that  
</span><br>
<span class="quotelev1">&gt; maintains the mirror?
</span><br>
<p>FWIW: I see the code right here:
<br>
<p><a href="http://www.open-mpi.org/hg/hgwebdir.cgi/ompi-svn-mirror/file/tip/orte/mca/notifier/base/notifier_base_select.c#l72">http://www.open-mpi.org/hg/hgwebdir.cgi/ompi-svn-mirror/file/tip/orte/mca/notifier/base/notifier_base_select.c#l72</a>
<br>
<p><span class="quotelev1">&gt; I haven't checked the opal_sos branch to see if it has the code in  
</span><br>
<span class="quotelev1">&gt; it, but I would have thought those guys were tracking the trunk that  
</span><br>
<span class="quotelev1">&gt; closely - that code was committed in r19209.
</span><br>
<p>Yes, the opal-sos branch has a variant of this as well.  Note that we  
<br>
changed the notifier framework in the opal-sos branch to be many-of- 
<br>
many, not one-of-many.  Specifically: the trunk will select the *one*  
<br>
available notifier with the highest priority.  The opal-sos branch  
<br>
will select *all* available notifiers and then subsequently invoke  
<br>
them in priority order.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6147.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6145.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6143.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6148.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6148.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
