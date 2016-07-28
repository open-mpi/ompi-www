<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (v1.7) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  2 11:16:08 2013" -->
<!-- isoreceived="20130702151608" -->
<!-- sent="Tue, 2 Jul 2013 15:16:03 +0000" -->
<!-- isosent="20130702151603" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (v1.7) ===" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6CD1BD_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6CD172_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (v1.7) ===<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-02 11:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Previous message:</strong> <a href="12522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (v1.7) ==="</a>
<li><strong>In reply to:</strong> <a href="12522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (v1.7) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the autotools we're using for v1.7:
<br>
<p>-----
<br>
module-whatis  &quot;Load Autotools (ac 2.69, am 1.12.2, lt 2.4.2, and m4 1.4.16)&quot;
<br>
<p>eval set  [ array get env HOME ]
<br>
set AUTOTOOLS &quot;/u/mpiteam/local/autotools-2.69-1.12.2-2.4.2-1.4.16&quot;
<br>
setenv AUTOTOOLS $AUTOTOOLS
<br>
-----
<br>
<p><p><p>On Jul 2, 2013, at 11:14 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Here's the beginning of the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CC       lt_interface.lo
</span><br>
<span class="quotelev1">&gt; In file included from ../../../opal/util/lt_interface.c:21:
</span><br>
<span class="quotelev1">&gt; ../../../opal/libltdl/ltdl.h:36:31: libltdl/lt_system.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../../opal/libltdl/ltdl.h:37:30: libltdl/lt_error.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; ../../../opal/libltdl/ltdl.h:38:33: libltdl/lt_dlloader.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; In file included from ../../../opal/util/lt_interface.c:21:
</span><br>
<span class="quotelev1">&gt; ../../../opal/libltdl/ltdl.h:50: error: syntax error before &quot;typedef&quot;
</span><br>
<span class="quotelev1">&gt; ../../../opal/libltdl/ltdl.h:53: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev1">&gt; ../../../opal/libltdl/ltdl.h:54: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev1">&gt; ../../../opal/libltdl/ltdl.h:57: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 1, 2013, at 10:11 PM, MPI Team &lt;mpiteam_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: Command returned a non-zero exist status (v1.7):
</span><br>
<span class="quotelev2">&gt;&gt;      make distcheck
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Start time: Mon Jul  1 21:53:47 EDT 2013
</span><br>
<span class="quotelev2">&gt;&gt; End time:   Mon Jul  1 22:11:52 EDT 2013
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:79: error: syntax error before &quot;lt_dlhandle&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:80: error: syntax error before &quot;lt_dladvise&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:81: error: syntax error before &quot;void&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:82: error: syntax error before &quot;const&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:83: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:99: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:100: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:101: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:106: error: syntax error before &quot;lt_dlsymlist&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:121: error: syntax error before &quot;lt_dlinterface_id&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:123: error: syntax error before &quot;void&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:124: error: syntax error before &quot;void&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:126: error: syntax error before &quot;void&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:143: error: syntax error before &quot;const&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:145: error: syntax error before &quot;lt_dlhandle&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:147: error: syntax error before &quot;lt_dlhandle&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:149: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:156: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:157: error: syntax error before &quot;int&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c:31: error: syntax error before &quot;struct&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c:32: error: syntax error before &quot;lt_dladvise&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c:32: warning: no semicolon at end of struct or union
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c: In function `opal_lt_dladvise_init':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c:101: error: invalid application of `sizeof' to incomplete type `opal_lt_dladvise_st' 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c:105: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c: In function `opal_lt_dladvise_destroy':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c:113: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c: In function `opal_lt_dladvise_ext':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c:124: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c: In function `opal_lt_dladvise_resident':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c:133: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c: In function `opal_lt_dladvise_local':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c:142: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c: In function `opal_lt_dladvise_global':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c:151: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c: In function `opal_lt_dladvise_preload':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c:160: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c: In function `opal_lt_dlopenadvise':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c:237: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/util/lt_interface.c: At top level:
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/libltdl/ltdl.h:106: warning: array 'lt__PROGRAM__LTX_preloaded_symbols' assumed to have one element
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [lt_interface.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.7/create-r28699/ompi/openmpi-1.7.3a1r28699/_build/opal/util'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.7/create-r28699/ompi/openmpi-1.7.3a1r28699/_build/opal/util'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.7/create-r28699/ompi/openmpi-1.7.3a1r28699/_build/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/v1.7/create-r28699/ompi/openmpi-1.7.3a1r28699/_build'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your friendly daemon,
</span><br>
<span class="quotelev2">&gt;&gt; Cyrador
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; testing mailing list
</span><br>
<span class="quotelev2">&gt;&gt; testing_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
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
<li><strong>Next message:</strong> <a href="12524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Previous message:</strong> <a href="12522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (v1.7) ==="</a>
<li><strong>In reply to:</strong> <a href="12522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (v1.7) ==="</a>
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
