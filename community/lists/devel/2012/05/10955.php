<?
$subject_val = "Re: [OMPI devel] 1.6.x compilation failure with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 16:36:19 2012" -->
<!-- isoreceived="20120501203619" -->
<!-- sent="Tue, 1 May 2012 13:36:15 -0700" -->
<!-- isosent="20120501203615" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.x compilation failure with intel compiler" -->
<!-- id="CAA3559B-E5D7-4B3B-BBC9-F234B380FE7F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 16:36:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10956.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="10954.php">Mike Dubman: "[OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="10954.php">Mike Dubman: "[OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10956.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you please file a proper bug report?
<br>
<p>(background info, configure line, etc.)
<br>
<p>Thanks.
<br>
<p><p>On May 1, 2012, at 1:29 PM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi 1.6.x - compilation fails with intel compiler, but works with gcc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compiler version: 
</span><br>
<span class="quotelev1">&gt; 10.1.026
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CXX    otfaux.o
</span><br>
<span class="quotelev1">&gt;   CXX    Control.o
</span><br>
<span class="quotelev1">&gt;   CXX    Handler.o
</span><br>
<span class="quotelev1">&gt;   CXX    State.o
</span><br>
<span class="quotelev1">&gt;   CXXLD  otfaux
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10956.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="10954.php">Mike Dubman: "[OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="10954.php">Mike Dubman: "[OMPI devel] 1.6.x compilation failure with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10956.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.x compilation failure with intel compiler"</a>
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
