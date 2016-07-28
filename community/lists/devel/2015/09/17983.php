<?
$subject_val = "Re: [OMPI devel] Cross-job disconnect is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 16:50:31 2015" -->
<!-- isoreceived="20150908205031" -->
<!-- sent="Tue, 8 Sep 2015 20:50:27 +0000" -->
<!-- isosent="20150908205027" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cross-job disconnect is broken" -->
<!-- id="7CE8733F-24F5-46E6-9371-99CDB4794FCD_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1EAB4A30-A3F4-461F-BC46-C8B1BB4CACFD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Cross-job disconnect is broken<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 16:50:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17984.php">George Bosilca: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Previous message:</strong> <a href="17982.php">Friedley, Andrew: "Re: [OMPI devel] psm mtl weirdness"</a>
<li><strong>In reply to:</strong> <a href="17978.php">Ralph Castain: "[OMPI devel] Cross-job disconnect is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17984.php">George Bosilca: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Reply:</strong> <a href="17984.php">George Bosilca: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 7, 2015, at 5:07 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * two jobs started by the same mpirun - supported today by ORTE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * two jobs started by different mpiruns - we used to support, but is broken in grpcomm/barrier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * two direct-launched jobs  - never supported
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * one direct-launched job and one started by mpirun  - never supported
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given lack of use out there, I don&#226;&#128;&#153;t see a reason to hold release of the 2.x series over this issue. Will keep you posted on progress towards a resolution
</span><br>

<br>
+1
<br>

<br>
That being said, I think it *would* be useful to be able to connect/accept between &quot;two jobs started by different mpiruns.&quot;  It's a bit of a chicken-n-egg problem: no one does it because no one supports it, and vice versa.
<br>

<br>
I agree it's low in the priority list, but I'd put the &quot;two jobs started by different mpiruns&quot; in the &quot;nice to have&quot; category.
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17984.php">George Bosilca: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Previous message:</strong> <a href="17982.php">Friedley, Andrew: "Re: [OMPI devel] psm mtl weirdness"</a>
<li><strong>In reply to:</strong> <a href="17978.php">Ralph Castain: "[OMPI devel] Cross-job disconnect is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17984.php">George Bosilca: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Reply:</strong> <a href="17984.php">George Bosilca: "Re: [OMPI devel] Cross-job disconnect is broken"</a>
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
