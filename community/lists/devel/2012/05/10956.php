<?
$subject_val = "Re: [OMPI devel] 1.6.x compilation failure with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  2 07:34:53 2012" -->
<!-- isoreceived="20120502113453" -->
<!-- sent="Wed, 2 May 2012 13:34:49 +0200" -->
<!-- isosent="20120502113449" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.x compilation failure with intel compiler" -->
<!-- id="201205021334.49596.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAL3GGtrXFU3MvwsUc5Sb9u196AvfoWpZkU3DRPkV4RE6G+xnoA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.x compilation failure with intel compiler<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-02 07:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10957.php">Jeff Squyres: "[OMPI devel] 1.6 NEWS bullets"</a>
<li><strong>Previous message:</strong> <a href="10955.php">Jeff Squyres: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="10954.php">Mike Dubman: "[OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Mike,
<br>
<p>could you please compile with enabled verbosity: make V=1
<br>
The missing symbols belong to libz which is a dependency library of 
<br>
ompi/contrib/vt/vt/extlib/otf/otflib/libotf.la - i.e. libotf.la should contain 
<br>
the following line:
<br>
<p>&nbsp;&nbsp;&nbsp;dependency_libs='-L&lt;path-to-libz&gt; -lz'
<br>
<p>If not, Libtool seems to be broken somehow.
<br>
Do you compile from an SVN checkout or from a tarball (e.g. nightly built or 
<br>
download from open-mpi.org)?
<br>
<p>Matthias
<br>
<p><p>On Tuesday 01 May 2012 22:29:20 Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; ompi 1.6.x - compilation fails with intel compiler, but works with gcc.
</span><br>
<span class="quotelev1">&gt; compiler version: 10.1.026
</span><br>
<span class="quotelev1">&gt;  Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    CXX otfaux.o CXX Control.o CXX Handler.o CXX State.o CXXLD otfaux
</span><br>
<span class="quotelev1">&gt; ../../otflib/.libs/libotf.so: undefined reference to `inflateReset'
</span><br>
<span class="quotelev1">&gt; ../../otflib/.libs/libotf.so: undefined reference to `inflateEnd'
</span><br>
<span class="quotelev1">&gt; ../../otflib/.libs/libotf.so: undefined reference to `deflate'
</span><br>
<span class="quotelev1">&gt; ../../otflib/.libs/libotf.so: undefined reference to `deflateInit_'
</span><br>
<span class="quotelev1">&gt; ../../otflib/.libs/libotf.so: undefined reference to `inflate'
</span><br>
<span class="quotelev1">&gt; ../../otflib/.libs/libotf.so: undefined reference to `inflateSync'
</span><br>
<span class="quotelev1">&gt; ../../otflib/.libs/libotf.so: undefined reference to `deflateEnd'
</span><br>
<span class="quotelev1">&gt; ../../otflib/.libs/libotf.so: undefined reference to `inflateInit_'
</span><br>
<span class="quotelev1">&gt; make[9]: *** [otfaux] Error 1
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10957.php">Jeff Squyres: "[OMPI devel] 1.6 NEWS bullets"</a>
<li><strong>Previous message:</strong> <a href="10955.php">Jeff Squyres: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="10954.php">Mike Dubman: "[OMPI devel] 1.6.x compilation failure with intel compiler"</a>
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
