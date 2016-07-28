<?
$subject_val = "Re: [OMPI devel] MCA base component changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 18:57:55 2008" -->
<!-- isoreceived="20080721225755" -->
<!-- sent="Mon, 21 Jul 2008 18:57:50 -0400" -->
<!-- isosent="20080721225750" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA base component changes" -->
<!-- id="f7622dcb23b885622704d7d8932eabe1_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C4DECD59-4EB7-4E8F-AC7B-812EA188D56F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA base component changes<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-21 18:57:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4388.php">Brian W. Barrett: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>Previous message:</strong> <a href="4386.php">Torsten Hoefler: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<li><strong>In reply to:</strong> <a href="4385.php">Jeff Squyres: "[OMPI devel] MCA base component changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4389.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>Reply:</strong> <a href="4389.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; After starting, we decided that changing the MCA base revision number  
</span><br>
<span class="quotelev1">&gt; to 2.0.0 also meant changing *ALL* the framework version numbers.   
</span><br>
<span class="quotelev1">&gt; This is because the same components from framework &lt;foo&gt; compiled with  
</span><br>
<span class="quotelev1">&gt; MCA base version 1.x.x would not be binary compatible when compiled  
</span><br>
<span class="quotelev1">&gt; with MCA base version 2.0.0 (the mca_base_component_t struct is a  
</span><br>
<span class="quotelev1">&gt; different size, for example).  So it seemed like we needed to make a  
</span><br>
<span class="quotelev1">&gt; large change: we changed both the MCA base and every framework  
</span><br>
<span class="quotelev1">&gt; interface version to v2.0.0, which entails touching every framework  
</span><br>
<span class="quotelev1">&gt; base and every component.
</span><br>
<p>I guess I don't understand.  I thought there were three versions in every
<br>
component -- the MCA version, the framework version, and the component
<br>
version.  The first two should determine if the component can safely be
<br>
loaded and the third is to identify the component.  I agree that for this
<br>
change (an MCA-level change), the MCA version *should* change.  However,
<br>
the framework interface didn't change (well, not as a result of this
<br>
change), meaning that the framework version *should not* change.  The MCA
<br>
load infrastructure should see that the MCA versions don't match, and not
<br>
load the component.
<br>
<p>Or am I missing something here?
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4388.php">Brian W. Barrett: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>Previous message:</strong> <a href="4386.php">Torsten Hoefler: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<li><strong>In reply to:</strong> <a href="4385.php">Jeff Squyres: "[OMPI devel] MCA base component changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4389.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>Reply:</strong> <a href="4389.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
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
