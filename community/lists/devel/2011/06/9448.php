<?
$subject_val = "Re: [OMPI devel] Trunk problem: VT breakage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 09:37:14 2011" -->
<!-- isoreceived="20110630133714" -->
<!-- sent="Thu, 30 Jun 2011 09:37:07 -0400" -->
<!-- isosent="20110630133707" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk problem: VT breakage" -->
<!-- id="ABC68CC3-4CD2-4090-A634-3B2964B0E7BA_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201106301505.51981.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk problem: VT breakage<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-30 09:37:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9449.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Previous message:</strong> <a href="9447.php">Matthias Jurenz: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>In reply to:</strong> <a href="9447.php">Matthias Jurenz: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9449.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Reply:</strong> <a href="9449.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I get the same error as Ralph.  I'm on my laptop battery atm, so I don't want to do a fresh checkout/build.  This is from an &quot;Svn up&quot; with a fresh automake/configure:
<br>
<p>[9:32] rtp-jsquyres-8714:~/svn/ompi/ompi/contrib/vt/vt/tools/vtfilter % make
<br>
Making all in .
<br>
make[1]: *** No rule to make target `vt_filthandler.cc', needed by `vtfilter-vt_filthandler.o'.  Stop.
<br>
make: *** [all-recursive] Error 1
<br>
[9:32] rtp-jsquyres-8714:~/svn/ompi/ompi/contrib/vt/vt/tools/vtfilter % 
<br>
<p>Is there some file that we need to delete to make the tree build?
<br>
<p>Is the problem in the corresponding .deps file?
<br>
<p><p>On Jun 30, 2011, at 9:05 AM, Matthias Jurenz wrote:
<br>
<p><span class="quotelev1">&gt; It seems to me that anything during your last update went wrong. Since r24803 
</span><br>
<span class="quotelev1">&gt; the source file 'vt_filthandler.cc' is moved to the subdirectory 'old', so 
</span><br>
<span class="quotelev1">&gt; actually if the source file doesn't exist the error message should be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No rule to make target `old/vt_filthandler.cc', needed by `vtfilter-
</span><br>
<span class="quotelev1">&gt; vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I just tested it by removing the source file by hand)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does the error occur also with a completely new checkout of the trunk?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday 30 June 2011 03:01:10 Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It appears I cannot build the trunk on Mac - I hit this issue when I
</span><br>
<span class="quotelev2">&gt;&gt; updated from the trunk and rebuilt from autogen this evening:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; make[7]: *** No rule to make target `vt_filthandler.cc', needed by
</span><br>
<span class="quotelev2">&gt;&gt; `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Vanilla configure - I didn't turn VT off like I usually do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Matthias Jurenz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev1">&gt; Center for Information Services and High Performance Computing (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden, Germany
</span><br>
<span class="quotelev1">&gt; Phone: +49 (351) 463-31945
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: matthias.jurenz_at_[hidden]
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9449.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Previous message:</strong> <a href="9447.php">Matthias Jurenz: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>In reply to:</strong> <a href="9447.php">Matthias Jurenz: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9449.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Reply:</strong> <a href="9449.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
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
