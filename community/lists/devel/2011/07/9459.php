<?
$subject_val = "Re: [OMPI devel] Trunk problem: VT breakage";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  2 16:40:07 2011" -->
<!-- isoreceived="20110702204007" -->
<!-- sent="Sat, 2 Jul 2011 15:39:58 -0500" -->
<!-- isosent="20110702203958" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk problem: VT breakage" -->
<!-- id="E3715AB7-C6BF-4845-BFBE-02654DAD6A91_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B0DAF294-B842-407F-BF9C-4CEDB373CA73_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-02 16:39:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="9458.php">Colon, Joseanibal: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9451.php">Ralph Castain: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Automake, I guess - that's what does the deps. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Jun 30, 2011, at 10:28 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm surprised that autogen/configure wouldn't catch this, yet it clearly doesn't. I guess it's because the file moved?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems like a bug in the autotools or libtool, perhaps?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 30, 2011, at 8:28 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm betting that this is a problem in the .deps directory; you could
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; foreach file (`ls ompi/contrib/vt/vt/tools/vtfilter/.deps/*.Po`)
</span><br>
<span class="quotelev2">&gt;&gt;    echo $file
</span><br>
<span class="quotelev2">&gt;&gt;    rm $file
</span><br>
<span class="quotelev2">&gt;&gt;    touch $file
</span><br>
<span class="quotelev2">&gt;&gt; end
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and then it builds fine (I just tried it).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...or remove *.Po in that .deps directory and re-autogen/configure/build.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...or get a fresh checkout, autogen/configure/build.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 30, 2011, at 10:18 AM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Same here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .......
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXX    vtfilter-vt_filter.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXX    vtfilter-vt_filter_common.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXX    vtfilter-vt_filter_gen.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXX    vtfilter-vt_filter_trc.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXX    vtfilter-vt_filter_trc_hdlr.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXX    vtfilter-vt_filterc.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[7]: *** No rule to make target `vt_filthandler.cc', needed by `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that this happens only on 'svn up' on existing repository.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When doing fresh 'svn co &amp;&amp; autogen &amp;&amp; configure &amp;&amp; make', everything works fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- YK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 30-Jun-11 4:37 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW, I get the same error as Ralph.  I'm on my laptop battery atm, so I don't want to do a fresh checkout/build.  This is from an &quot;Svn up&quot; with a fresh automake/configure:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [9:32] rtp-jsquyres-8714:~/svn/ompi/ompi/contrib/vt/vt/tools/vtfilter % make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** No rule to make target `vt_filthandler.cc', needed by `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [9:32] rtp-jsquyres-8714:~/svn/ompi/ompi/contrib/vt/vt/tools/vtfilter %
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there some file that we need to delete to make the tree build?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is the problem in the corresponding .deps file?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 30, 2011, at 9:05 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It seems to me that anything during your last update went wrong. Since r24803
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the source file 'vt_filthandler.cc' is moved to the subdirectory 'old', so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; actually if the source file doesn't exist the error message should be:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; No rule to make target `old/vt_filthandler.cc', needed by `vtfilter-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (I just tested it by removing the source file by hand)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does the error occur also with a completely new checkout of the trunk?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Thursday 30 June 2011 03:01:10 Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It appears I cannot build the trunk on Mac - I hit this issue when I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; updated from the trunk and rebuilt from autogen this evening:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[7]: *** No rule to make target `vt_filthandler.cc', needed by
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Vanilla configure - I didn't turn VT off like I usually do.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Matthias Jurenz
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Technische Universit&#195;&#164;t Dresden
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Center for Information Services and High Performance Computing (ZIH)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 01062 Dresden, Germany
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Phone: +49 (351) 463-31945
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; E-Mail: matthias.jurenz_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="9458.php">Colon, Joseanibal: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9451.php">Ralph Castain: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
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
