<?
$subject_val = "[OMPI devel] vt integration -- still problems on os x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 13:24:21 2008" -->
<!-- isoreceived="20080108182421" -->
<!-- sent="Tue, 8 Jan 2008 13:24:11 -0500" -->
<!-- isosent="20080108182411" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] vt integration -- still problems on os x" -->
<!-- id="DF7D7653-D862-4489-A176-F1B68570D854_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] vt integration -- still problems on os x<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-08 13:24:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2945.php">Rainer Keller: "[OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Previous message:</strong> <a href="2943.php">Rolf Vandevaart: "[OMPI devel] Minor fix to some intel tests - FYI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2954.php">Andreas Knüpfer: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Reply:</strong> <a href="2954.php">Andreas Knüpfer: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;From today's head (r17068):
<br>
<p>Making all in vtunify
<br>
g++ -fopenmp -DVT_OMP -g -Wall -Wundef -Wno-long-long -finline- 
<br>
functions  -fopenmp -Wl,-u,_munmap -Wl,-multiply_defined,suppress -o  
<br>
vtunify vtunify-vt_unify.o vtunify-vt_unify_defs.o vtunify- 
<br>
vt_unify_defs_hdlr.o vtunify-vt_unify_events.o vtunify- 
<br>
vt_unify_events_hdlr.o vtunify-vt_unify_stats.o vtunify- 
<br>
vt_unify_stats_hdlr.o vtunify-vt_unify_tkfac.o -L../../extlib/otf/ 
<br>
otflib -L../../extlib/otf/otflib/.libs -lotf -lz -lutil
<br>
Undefined symbols:
<br>
&nbsp;&nbsp;&nbsp;&quot;__gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,  
<br>
std::vector&lt;Statistics::FuncStat_struct,  
<br>
std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;  
<br>
std 
<br>
::find_if&lt;__gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,  
<br>
std::vector&lt;Statistics::FuncStat_struct,  
<br>
std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;,  
<br>
Statistics 
<br>
::FuncStat_funcId_eq 
<br>
<span class="quotelev1"> &gt;(__gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,  
</span><br>
std::vector&lt;Statistics::FuncStat_struct,  
<br>
std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;,  
<br>
__gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,  
<br>
std::vector&lt;Statistics::FuncStat_struct,  
<br>
std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;,  
<br>
Statistics::FuncStat_funcId_eq)&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Statistics::getFuncStat()       in vtunify-vt_unify_stats.o
<br>
&nbsp;&nbsp;&nbsp;&quot;void  
<br>
std::sort&lt;__gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,  
<br>
std::vector&lt;Statistics::FuncStat_struct,  
<br>
std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;,  
<br>
std::less&lt;Statistics::FuncStat_struct&gt;  
<br>
<span class="quotelev1"> &gt;(__gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,  
</span><br>
std::vector&lt;Statistics::FuncStat_struct,  
<br>
std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;,  
<br>
__gnu_cxx::__normal_iterator&lt;Statistics::FuncStat_struct*,  
<br>
std::vector&lt;Statistics::FuncStat_struct,  
<br>
std::allocator&lt;Statistics::FuncStat_struct&gt; &gt; &gt;,  
<br>
std::less&lt;Statistics::FuncStat_struct&gt;)&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Statistics::printFuncStat(std::basic_string&lt;char,  
<br>
std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt;,  
<br>
std::vector&lt;Statistics::FuncStat_struct,  
<br>
std::allocator&lt;Statistics::FuncStat_struct&gt; &gt;&amp;, int)in vtunify- 
<br>
vt_unify_stats.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Statistics::printFuncStat(std::basic_string&lt;char,  
<br>
std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt;,  
<br>
std::vector&lt;Statistics::FuncStat_struct,  
<br>
std::allocator&lt;Statistics::FuncStat_struct&gt; &gt;&amp;, int)in vtunify- 
<br>
vt_unify_stats.o
<br>
ld: symbol(s) not found
<br>
collect2: ld returned 1 exit status
<br>
make[6]: *** [vtunify] Error 1
<br>
make[5]: *** [all-recursive] Error 1
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[3]: *** [all] Error 2
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
jsquyres has logged on ttys005 from local.
<br>
jsquyres has logged on ttys006 from local.
<br>
[13:19] rtp-jsquyres-8712:~/svn/vt-integration %
<br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2945.php">Rainer Keller: "[OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Previous message:</strong> <a href="2943.php">Rolf Vandevaart: "[OMPI devel] Minor fix to some intel tests - FYI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2954.php">Andreas Knüpfer: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Reply:</strong> <a href="2954.php">Andreas Knüpfer: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
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
