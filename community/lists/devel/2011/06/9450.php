<?
$subject_val = "Re: [OMPI devel] Trunk problem: VT breakage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 10:28:37 2011" -->
<!-- isoreceived="20110630142837" -->
<!-- sent="Thu, 30 Jun 2011 10:28:22 -0400" -->
<!-- isosent="20110630142822" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk problem: VT breakage" -->
<!-- id="C88B4360-C5D2-4314-9974-4E995FEF6448_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E0C85A4.6050801_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2011-06-30 10:28:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9451.php">Ralph Castain: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Previous message:</strong> <a href="9449.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>In reply to:</strong> <a href="9449.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9451.php">Ralph Castain: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Reply:</strong> <a href="9451.php">Ralph Castain: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm betting that this is a problem in the .deps directory; you could
<br>
<p>foreach file (`ls ompi/contrib/vt/vt/tools/vtfilter/.deps/*.Po`)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo $file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm $file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;touch $file
<br>
end
<br>
<p>and then it builds fine (I just tried it).
<br>
<p>...or remove *.Po in that .deps directory and re-autogen/configure/build.
<br>
<p>...or get a fresh checkout, autogen/configure/build.  :-)
<br>
<p><p>On Jun 30, 2011, at 10:18 AM, Yevgeny Kliteynik wrote:
<br>
<p><span class="quotelev1">&gt; Same here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  .......
</span><br>
<span class="quotelev1">&gt;  CXX    vtfilter-vt_filter.o
</span><br>
<span class="quotelev1">&gt;  CXX    vtfilter-vt_filter_common.o
</span><br>
<span class="quotelev1">&gt;  CXX    vtfilter-vt_filter_gen.o
</span><br>
<span class="quotelev1">&gt;  CXX    vtfilter-vt_filter_trc.o
</span><br>
<span class="quotelev1">&gt;  CXX    vtfilter-vt_filter_trc_hdlr.o
</span><br>
<span class="quotelev1">&gt;  CXX    vtfilter-vt_filterc.o
</span><br>
<span class="quotelev1">&gt; make[7]: *** No rule to make target `vt_filthandler.cc', needed by `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that this happens only on 'svn up' on existing repository.
</span><br>
<span class="quotelev1">&gt; When doing fresh 'svn co &amp;&amp; autogen &amp;&amp; configure &amp;&amp; make', everything works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 30-Jun-11 4:37 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I get the same error as Ralph.  I'm on my laptop battery atm, so I don't want to do a fresh checkout/build.  This is from an &quot;Svn up&quot; with a fresh automake/configure:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [9:32] rtp-jsquyres-8714:~/svn/ompi/ompi/contrib/vt/vt/tools/vtfilter % make
</span><br>
<span class="quotelev2">&gt;&gt; Making all in .
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** No rule to make target `vt_filthandler.cc', needed by `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; [9:32] rtp-jsquyres-8714:~/svn/ompi/ompi/contrib/vt/vt/tools/vtfilter %
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there some file that we need to delete to make the tree build?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is the problem in the corresponding .deps file?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 30, 2011, at 9:05 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems to me that anything during your last update went wrong. Since r24803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the source file 'vt_filthandler.cc' is moved to the subdirectory 'old', so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually if the source file doesn't exist the error message should be:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No rule to make target `old/vt_filthandler.cc', needed by `vtfilter-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I just tested it by removing the source file by hand)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does the error occur also with a completely new checkout of the trunk?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thursday 30 June 2011 03:01:10 Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It appears I cannot build the trunk on Mac - I hit this issue when I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; updated from the trunk and rebuilt from autogen this evening:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[7]: *** No rule to make target `vt_filthandler.cc', needed by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Vanilla configure - I didn't turn VT off like I usually do.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any help would be appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matthias Jurenz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Information Services and High Performance Computing (ZIH)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 01062 Dresden, Germany
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: +49 (351) 463-31945
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E-Mail: matthias.jurenz_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9451.php">Ralph Castain: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Previous message:</strong> <a href="9449.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>In reply to:</strong> <a href="9449.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9451.php">Ralph Castain: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Reply:</strong> <a href="9451.php">Ralph Castain: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
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
