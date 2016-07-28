<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 19:43:26 2012" -->
<!-- isoreceived="20120202004326" -->
<!-- sent="Wed, 01 Feb 2012 16:43:08 -0800" -->
<!-- isosent="20120202004308" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7" -->
<!-- id="4F29DC1C.8020706_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F29D56C.6020207_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 19:43:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2778.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2776.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2776.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2778.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/1/2012 4:14 PM, Christopher Samuel wrote:
<br>
<span class="quotelev1">&gt; On 02/02/12 10:38, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  I am not sure if one should fix this by:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  a) Document the need for CFLAGS=-qhalt=e
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  b) Force &quot;-qhalt=e&quot; at configure time when CC=xlc
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  c) Find some other way to fix the configure probe
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  My vote is for &quot;(b)&quot;
</span><br>
<span class="quotelev1">&gt; Mine too, either that or:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; d) Exit saying the user has to set it, or use a different compiler.
</span><br>
<p>I think I'd like to change my vote to (d) IFF we can determine the flag 
<br>
is needed but not set.
<br>
Something like (untested):
<br>
<p>AC_COMPILE_IFELSE([
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern int one_arg(int x);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern int two_arg(int x, int y);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int foo(void) { return one_arg(1, 2) + two_arg(3); }
<br>
], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([Your C compiler does not consider incorrect argument 
<br>
counts to be a fatal error.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$hwloc_check_compiler_vendor_result&quot; = &quot;ibm&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([For XLC you may try appending '-qhalt=-e' to the 
<br>
value of CFLAGS.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([Alternatively you may configure with a different 
<br>
compiler.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([Please report this failure, and configure using a 
<br>
different C compiler if possible.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_ERROR([Cannot continue.])
<br>
])
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2778.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2776.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2776.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2778.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
