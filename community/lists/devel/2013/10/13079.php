<?
$subject_val = "[OMPI devel] Automake/m4 issue: r29407 - trunk/oshmem/mca/atomic/mxm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  9 09:43:51 2013" -->
<!-- isoreceived="20131009134351" -->
<!-- sent="Wed, 9 Oct 2013 13:43:49 +0000" -->
<!-- isosent="20131009134349" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Automake/m4 issue: r29407 - trunk/oshmem/mca/atomic/mxm" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F948F76_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131009115205.35F4C1605E5_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Automake/m4 issue: r29407 - trunk/oshmem/mca/atomic/mxm<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-09 09:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13080.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
<li><strong>Previous message:</strong> <a href="13078.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] More oshmem compile errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit results in several warnings in recent versions of Automake (e.g., 1.13.3).  Please see the Automake docs for how you're supposed to use AC_COMPILE_IFELSE with AC_LANG_SOURCE.
<br>
<p><p>-----
<br>
configure.ac:1089: warning: AC_LANG_CONFTEST: no AC_LANG_SOURCE call detected in body
<br>
../../lib/autoconf/lang.m4:193: AC_LANG_CONFTEST is expanded from...
<br>
../../lib/autoconf/general.m4:2590: _AC_COMPILE_IFELSE is expanded from...
<br>
../../lib/autoconf/general.m4:2606: AC_COMPILE_IFELSE is expanded from...
<br>
../../lib/m4sugar/m4sh.m4:639: AS_IF is expanded from...
<br>
config/ompi_check_mxm.m4:16: OMPI_CHECK_MXM is expanded from...
<br>
oshmem/mca/atomic/mxm/configure.m4:14: MCA_oshmem_atomic_mxm_CONFIG is expanded from...	
<br>
config/ompi_mca.m4:570: MCA_CONFIGURE_M4_CONFIG_COMPONENT is expanded from...
<br>
config/ompi_mca.m4:351: MCA_CONFIGURE_FRAMEWORK is expanded from...
<br>
config/ompi_mca.m4:251: MCA_CONFIGURE_PROJECT is expanded from...
<br>
config/ompi_mca.m4:38: OMPI_MCA is expanded from...
<br>
configure.ac:1089: the top level
<br>
-----
<br>
<p><p>On Oct 9, 2013, at 7:52 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: amikheev (Alex Mikheev)
</span><br>
<span class="quotelev1">&gt; Date: 2013-10-09 07:52:04 EDT (Wed, 09 Oct 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29407
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29407">https://svn.open-mpi.org/trac/ompi/changeset/29407</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; fixed check availability of mxm atomics. No need to run the code. succesful compilation is enough to detect availability.
</span><br>
<span class="quotelev1">&gt; reviewed by miked
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/oshmem/mca/atomic/mxm/configure.m4 |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/oshmem/mca/atomic/mxm/configure.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/oshmem/mca/atomic/mxm/configure.m4	Wed Oct  9 06:06:39 2013	(r29406)
</span><br>
<span class="quotelev1">&gt; +++ trunk/oshmem/mca/atomic/mxm/configure.m4	2013-10-09 07:52:04 EDT (Wed, 09 Oct 2013)	(r29407)
</span><br>
<span class="quotelev1">&gt; @@ -21,7 +21,7 @@
</span><br>
<span class="quotelev1">&gt;                    CPPFLAGS=&quot;$CPPFLAGS -I$ompi_check_mxm_dir/include&quot;
</span><br>
<span class="quotelev1">&gt;                    LDFLAGS=&quot;$LDFLAGS -L$ompi_check_mxm_dir/lib&quot;
</span><br>
<span class="quotelev1">&gt;                    LIBS=&quot;$LIBS -lmxm&quot;
</span><br>
<span class="quotelev1">&gt; -                   AC_TRY_RUN([
</span><br>
<span class="quotelev1">&gt; +                   AC_COMPILE_IFELSE([
</span><br>
<span class="quotelev1">&gt;                                 #include &lt;mxm/api/mxm_api.h&gt;
</span><br>
<span class="quotelev1">&gt;                                 int main() {
</span><br>
<span class="quotelev1">&gt;                                 if (mxm_get_version() &lt; MXM_VERSION(1,5) )
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13080.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
<li><strong>Previous message:</strong> <a href="13078.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] More oshmem compile errors"</a>
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
