<?
$subject_val = "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 10:40:36 2012" -->
<!-- isoreceived="20120912144036" -->
<!-- sent="Wed, 12 Sep 2012 10:40:37 -0400" -->
<!-- isosent="20120912144037" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6" -->
<!-- id="11CCC8FA-795F-448A-9C16-319CC5B72496_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKPyHN1WJY_a3w8EKaXxSEQgOeXfJAoDSK9W29S9Z8HGV1c_Qg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 10:40:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11503.php">Shamis, Pavel: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>Previous message:</strong> <a href="11501.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>In reply to:</strong> <a href="11492.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11494.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 11, 2012, at 3:29 PM, Bert Wesarg wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 69: warning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          variable &quot;otf_rc&quot; was set but never used
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        uint8_t otf_rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They are only checked in assert() statements. I don't know the policy
</span><br>
<span class="quotelev1">&gt; regarding this for the Open MPI project.
</span><br>
<p>I just tested recently with a very new gcc and found all kinds of warnings like this.  More to come someday on this issue (soon, hopefully).
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
<li><strong>Next message:</strong> <a href="11503.php">Shamis, Pavel: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>Previous message:</strong> <a href="11501.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>In reply to:</strong> <a href="11492.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11494.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
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
