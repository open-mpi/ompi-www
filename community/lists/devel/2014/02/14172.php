<?
$subject_val = "Re: [OMPI devel] RFC: new OMPI RTE define:";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 18 09:18:34 2014" -->
<!-- isoreceived="20140218141834" -->
<!-- sent="Tue, 18 Feb 2014 14:18:32 +0000" -->
<!-- isosent="20140218141832" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: new OMPI RTE define:" -->
<!-- id="0A818651-BA4C-4DC5-A114-298B43A26EEE_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="F4EDFC79-1249-436F-A652-56377D659A9C_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: new OMPI RTE define:<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-18 09:18:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14173.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14171.php">George Bosilca: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>In reply to:</strong> <a href="14171.php">George Bosilca: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 18, 2014, at 8:18 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; For the longer term (i.e., 1.9), should we add a little opal infrastructure that contains an event base that is run in its own progress thread?  This would allow the MPI layer to consolidate into one progress thread (for things that are event based, at least).  I don&#146;t believe much work would be needed here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1. All frameworks/component with a need for event triggering without other constraints must use it. In other terms the proposed infrastructure might not be the most effective for high density fd listeners such as the TCP BTL.
</span><br>
<p>Ok.  I can add an RFC/proposal to my to-do list... after v1.7.5 (and possibly after v1.8 -- we'll see how my to-do list plays out).
<br>
<p><span class="quotelev1">&gt; Btw, now that we&#146;re talking about this I wonder how do we deal with signals in a non-ORTE environment. Who is registering the signal callbacks, such as USR1?
</span><br>
<p><p>Don't know / no one...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14173.php">Adrian Reber: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Previous message:</strong> <a href="14171.php">George Bosilca: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>In reply to:</strong> <a href="14171.php">George Bosilca: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
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
