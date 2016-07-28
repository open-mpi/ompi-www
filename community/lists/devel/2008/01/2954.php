<?
$subject_val = "Re: [OMPI devel] vt integration -- still problems on os x";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 10:18:16 2008" -->
<!-- isoreceived="20080110151816" -->
<!-- sent="Thu, 10 Jan 2008 16:19:09 +0100" -->
<!-- isosent="20080110151909" -->
<!-- name="Andreas Kn&#252;pfer" -->
<!-- email="andreas.knuepfer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt integration -- still problems on os x" -->
<!-- id="200801101619.12625.andreas.knuepfer_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DF7D7653-D862-4489-A176-F1B68570D854_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt integration -- still problems on os x<br>
<strong>From:</strong> Andreas Kn&#252;pfer (<em>andreas.knuepfer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 10:19:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2955.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Previous message:</strong> <a href="2953.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>In reply to:</strong> <a href="2944.php">Jeff Squyres: "[OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2957.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Reply:</strong> <a href="2957.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>unfortunately, we're unable to reproduce this error. Could you pass some more 
<br>
information about your configure command line? This was done with gcc 4.2 on 
<br>
mac os X, wasn't it?
<br>
<p>Thanks, Andreas
<br>
<p>On Tuesday 08 January 2008, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;  From today's head (r17068):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in vtunify
</span><br>
<span class="quotelev1">&gt; g++ -fopenmp -DVT_OMP -g -Wall -Wundef -Wno-long-long -finline-
</span><br>
<span class="quotelev1">&gt; functions  -fopenmp -Wl,-u,_munmap -Wl,-multiply_defined,suppress -o
</span><br>
<span class="quotelev1">&gt; vtunify vtunify-vt_unify.o vtunify-vt_unify_defs.o vtunify-
</span><br>
<span class="quotelev1">&gt; vt_unify_defs_hdlr.o vtunify-vt_unify_events.o vtunify-
</span><br>
<span class="quotelev1">&gt; vt_unify_events_hdlr.o vtunify-vt_unify_stats.o vtunify-
</span><br>
<span class="quotelev1">&gt; vt_unify_stats_hdlr.o vtunify-vt_unify_tkfac.o -L../../extlib/otf/
</span><br>
<span class="quotelev1">&gt; otflib -L../../extlib/otf/otflib/.libs -lotf -lz -lutil
</span><br>
<span class="quotelev1">&gt; Undefined symbols:
</span><br>
<span class="quotelev1">&gt;    &quot;__gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;Statistics::FuncStat_struct,
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; std
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ::find_if&lt;__gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; std::vector&lt;Statistics::FuncStat_struct,
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;,
</span><br>
<span class="quotelev1">&gt; Statistics
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ::FuncStat_funcId_eq
</span><br>
<span class="quotelev1">&gt; ::
</span><br>
<span class="quotelev2">&gt;  &gt;(__gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; std::vector&lt;Statistics::FuncStat_struct,
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;,
</span><br>
<span class="quotelev1">&gt; __gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;Statistics::FuncStat_struct,
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;,
</span><br>
<span class="quotelev1">&gt; Statistics::FuncStat_funcId_eq)&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;        Statistics::getFuncStat()       in vtunify-vt_unify_stats.o
</span><br>
<span class="quotelev1">&gt;    &quot;void
</span><br>
<span class="quotelev1">&gt; std::sort&lt;__gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;Statistics::FuncStat_struct,
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;,
</span><br>
<span class="quotelev1">&gt; std::less&lt;Statistics::FuncStat_struct&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;(__gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; std::vector&lt;Statistics::FuncStat_struct,
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;,
</span><br>
<span class="quotelev1">&gt; __gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;Statistics::FuncStat_struct,
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;,
</span><br>
<span class="quotelev1">&gt; std::less&lt;Statistics::FuncStat_struct&gt;)&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;        Statistics::printFuncStat(std::basic_string&lt;char,
</span><br>
<span class="quotelev1">&gt; std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt;,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;Statistics::FuncStat_struct,
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;Statistics::FuncStat_struct&gt; &gt;&amp;, int)in vtunify-
</span><br>
<span class="quotelev1">&gt; vt_unify_stats.o
</span><br>
<span class="quotelev1">&gt;        Statistics::printFuncStat(std::basic_string&lt;char,
</span><br>
<span class="quotelev1">&gt; std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt;,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;Statistics::FuncStat_struct,
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;Statistics::FuncStat_struct&gt; &gt;&amp;, int)in vtunify-
</span><br>
<span class="quotelev1">&gt; vt_unify_stats.o
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[6]: *** [vtunify] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; jsquyres has logged on ttys005 from local.
</span><br>
<span class="quotelev1">&gt; jsquyres has logged on ttys006 from local.
</span><br>
<span class="quotelev1">&gt; [13:19] rtp-jsquyres-8712:~/svn/vt-integration %
</span><br>
<p><p><p><pre>
-- 
Dipl. Math. Andreas Knuepfer, 
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A114, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-38323, fax +49-351-463-37773

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2954/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2955.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Previous message:</strong> <a href="2953.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>In reply to:</strong> <a href="2944.php">Jeff Squyres: "[OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2957.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Reply:</strong> <a href="2957.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
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
