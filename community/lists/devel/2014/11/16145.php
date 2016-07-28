<?
$subject_val = "Re: [OMPI devel] enable-smp-locks affects PSM performance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 10:49:06 2014" -->
<!-- isoreceived="20141103154906" -->
<!-- sent="Mon, 3 Nov 2014 15:49:05 +0000" -->
<!-- isosent="20141103154905" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] enable-smp-locks affects PSM performance" -->
<!-- id="67556565-1D3A-4F17-B021-DADDE0A346ED_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518C5DEA7_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] enable-smp-locks affects PSM performance<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 10:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16146.php">Dave Goodell (dgoodell): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Previous message:</strong> <a href="16144.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16144.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16154.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16154.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2014, at 10:31 AM, Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Jeff, we're working to verify.  I don't mind the slower behavior on the trunk; we are only concerned with the stable release series.  Enabling thread safety options on the trunk/master is no problem here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did the 'more expensive freelists' change make it to the release series as well?
</span><br>
<p>Yes.  And all of that should now be reverted.
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
<li><strong>Next message:</strong> <a href="16146.php">Dave Goodell (dgoodell): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Previous message:</strong> <a href="16144.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16144.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16154.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16154.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
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
