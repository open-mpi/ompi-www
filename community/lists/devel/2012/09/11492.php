<?
$subject_val = "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 15:29:35 2012" -->
<!-- isoreceived="20120911192935" -->
<!-- sent="Tue, 11 Sep 2012 21:29:30 +0200" -->
<!-- isosent="20120911192930" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6" -->
<!-- id="CAKPyHN1WJY_a3w8EKaXxSEQgOeXfJAoDSK9W29S9Z8HGV1c_Qg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA17woLO1EXdXVLuOtK=Z7=57fmvOXAAmEkh+xT1uM+o2Tw_at_mail.gmail.com" -->
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
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 15:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11493.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Previous message:</strong> <a href="11491.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>In reply to:</strong> <a href="11491.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11502.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Reply:</strong> <a href="11502.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep 11, 2012 at 9:08 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; While newer PGI compilers don't complain, I find that PGI-8.0-6 fails as
</span><br>
<span class="quotelev1">&gt; shown below.
</span><br>
<span class="quotelev1">&gt; In addition to 1 error, there are 3 warnings that might be worth
</span><br>
<span class="quotelev1">&gt; examination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is that the code is trying to use OMP features more recent than the
</span><br>
<span class="quotelev1">&gt; support provided by this older compiler.
</span><br>
<span class="quotelev1">&gt; However, OMPI's README gives the impression that PGI compilers 6.0-5 should
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also have a PGI-7.2-5 build queued and will follow up with those results
</span><br>
<span class="quotelev1">&gt; when available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   CXX    vtunify-vt_unify_hooks_aevents.o
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; line 69: warning:
</span><br>
<span class="quotelev2">&gt;&gt;           variable &quot;otf_rc&quot; was set but never used
</span><br>
<span class="quotelev2">&gt;&gt;         uint8_t otf_rc;
</span><br>
<span class="quotelev2">&gt;&gt;                 ^
</span><br>
<p>They are only checked in assert() statements. I don't know the policy
<br>
regarding this for the Open MPI project.
<br>
<p><span class="quotelev2">&gt;&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; line 304: warning:
</span><br>
<span class="quotelev2">&gt;&gt;           variable &quot;error&quot; was set but never used
</span><br>
<span class="quotelev2">&gt;&gt;      bool error = false;
</span><br>
<span class="quotelev2">&gt;&gt;           ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/users/phargrov/SCRATCH/OMPI/openmpi-1.6.2rc2-linux-x86_64-pgi-8.0/openmpi-1.6.2rc2/ompi/contrib/vt/vt/tools/vtunify/hooks/vt_unify_hooks_aevents.cc&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; line 336: warning:
</span><br>
<span class="quotelev2">&gt;&gt;           variable &quot;error&quot; was set but never used
</span><br>
<span class="quotelev2">&gt;&gt;      bool error = false;
</span><br>
<span class="quotelev2">&gt;&gt;           ^
</span><br>
<p>Dito for these two warnings.
<br>
<p>Bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11493.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Previous message:</strong> <a href="11491.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>In reply to:</strong> <a href="11491.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11502.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Reply:</strong> <a href="11502.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
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
