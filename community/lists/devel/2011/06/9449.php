<?
$subject_val = "Re: [OMPI devel] Trunk problem: VT breakage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 10:18:23 2011" -->
<!-- isoreceived="20110630141823" -->
<!-- sent="Thu, 30 Jun 2011 17:18:12 +0300" -->
<!-- isosent="20110630141812" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk problem: VT breakage" -->
<!-- id="4E0C85A4.6050801_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ABC68CC3-4CD2-4090-A634-3B2964B0E7BA_at_cisco.com" -->
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
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-30 10:18:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9450.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Previous message:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>In reply to:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9450.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Reply:</strong> <a href="9450.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Same here:
<br>
<p>&nbsp;&nbsp;.......
<br>
&nbsp;&nbsp;CXX    vtfilter-vt_filter.o
<br>
&nbsp;&nbsp;CXX    vtfilter-vt_filter_common.o
<br>
&nbsp;&nbsp;CXX    vtfilter-vt_filter_gen.o
<br>
&nbsp;&nbsp;CXX    vtfilter-vt_filter_trc.o
<br>
&nbsp;&nbsp;CXX    vtfilter-vt_filter_trc_hdlr.o
<br>
&nbsp;&nbsp;CXX    vtfilter-vt_filterc.o
<br>
make[7]: *** No rule to make target `vt_filthandler.cc', needed by `vtfilter-vt_filthandler.o'.  Stop.
<br>
<p>Note that this happens only on 'svn up' on existing repository.
<br>
When doing fresh 'svn co &amp;&amp; autogen &amp;&amp; configure &amp;&amp; make', everything works fine.
<br>
<p>-- YK
<br>
<p><p>On 30-Jun-11 4:37 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; FWIW, I get the same error as Ralph.  I'm on my laptop battery atm, so I don't want to do a fresh checkout/build.  This is from an &quot;Svn up&quot; with a fresh automake/configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [9:32] rtp-jsquyres-8714:~/svn/ompi/ompi/contrib/vt/vt/tools/vtfilter % make
</span><br>
<span class="quotelev1">&gt; Making all in .
</span><br>
<span class="quotelev1">&gt; make[1]: *** No rule to make target `vt_filthandler.cc', needed by `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; [9:32] rtp-jsquyres-8714:~/svn/ompi/ompi/contrib/vt/vt/tools/vtfilter %
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there some file that we need to delete to make the tree build?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the problem in the corresponding .deps file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 30, 2011, at 9:05 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems to me that anything during your last update went wrong. Since r24803
</span><br>
<span class="quotelev2">&gt;&gt; the source file 'vt_filthandler.cc' is moved to the subdirectory 'old', so
</span><br>
<span class="quotelev2">&gt;&gt; actually if the source file doesn't exist the error message should be:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No rule to make target `old/vt_filthandler.cc', needed by `vtfilter-
</span><br>
<span class="quotelev2">&gt;&gt; vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (I just tested it by removing the source file by hand)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does the error occur also with a completely new checkout of the trunk?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thursday 30 June 2011 03:01:10 Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It appears I cannot build the trunk on Mac - I hit this issue when I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; updated from the trunk and rebuilt from autogen this evening:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[7]: *** No rule to make target `vt_filthandler.cc', needed by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vanilla configure - I didn't turn VT off like I usually do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help would be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Matthias Jurenz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev2">&gt;&gt; Center for Information Services and High Performance Computing (ZIH)
</span><br>
<span class="quotelev2">&gt;&gt; 01062 Dresden, Germany
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +49 (351) 463-31945
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev2">&gt;&gt; E-Mail: matthias.jurenz_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9450.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Previous message:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>In reply to:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9450.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Reply:</strong> <a href="9450.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
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
