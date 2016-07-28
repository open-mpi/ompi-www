<?
$subject_val = "Re: [OMPI devel] Trunk returned to normal operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 09:35:41 2008" -->
<!-- isoreceived="20080228143541" -->
<!-- sent="Thu, 28 Feb 2008 09:35:11 -0500" -->
<!-- isosent="20080228143511" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk returned to normal operations" -->
<!-- id="54997933-F39D-403F-B88A-3B4CE39923F5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3EB6EDE.47D1%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk returned to normal operations<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 09:35:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3316.php">Ralph H Castain: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Previous message:</strong> <a href="3314.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>In reply to:</strong> <a href="3309.php">Ralph Castain: "[OMPI devel] Trunk returned to normal operations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 27, 2008, at 9:47 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 1. obviously, you will need to autogen/configure once you update. I
</span><br>
<span class="quotelev1">&gt; -strongly- recommend you rm -rf your install directory first as you  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; definitely be hit with stale libraries from this commit
</span><br>
<p><p>As a matter of fact, if you're like me and you had zero changes in  
<br>
your orte trunk tree, you might as well
<br>
<p>cd your_ompi_checkout
<br>
rm -rf orte
<br>
svn up
<br>
<p>And just get a whole clean new copy of orte.  This will avoid leaving  
<br>
lota SVN-orphaned directories in your ORTE tree (that you'll see via  
<br>
&quot;svn st&quot;) because they contain .lo files and the like.
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
<li><strong>Next message:</strong> <a href="3316.php">Ralph H Castain: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Previous message:</strong> <a href="3314.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>In reply to:</strong> <a href="3309.php">Ralph Castain: "[OMPI devel] Trunk returned to normal operations"</a>
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
