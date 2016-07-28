<?
$subject_val = "[OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 15:16:57 2012" -->
<!-- isoreceived="20120221201657" -->
<!-- sent="Tue, 21 Feb 2012 12:16:37 -0800" -->
<!-- isosent="20120221201637" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux" -->
<!-- id="4F43FBA5.9060302_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 15:16:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10544.php">Nathan Hjelm: "[OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Previous message:</strong> <a href="10542.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10551.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Reply:</strong> <a href="10551.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building the v1.5 branch on Linux with the Solaris Studio 12.2 compilers 
<br>
I see the following failure:
<br>
<span class="quotelev1">&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 797: Error: Type name expected 
</span><br>
<span class="quotelev1">&gt; instead of &quot;u_char&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 798: Error: Type name expected 
</span><br>
<span class="quotelev1">&gt; instead of &quot;u_char&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;[srcdir]/opal/event/event.h&quot;, line 1184: Error: &quot;,&quot; expected instead 
</span><br>
<span class="quotelev1">&gt; of &quot;*&quot;.
</span><br>
Where line 1184 is a prototype containing &quot;u_char *&quot;.
<br>
<p>As far as I can find, only several files below opal/event/ contain any 
<br>
use of &quot;u_char&quot;.
<br>
There is a typedef for u_char in hwloc, but no use that I could see.
<br>
<p>To the best of my knowledge u_char is NOT defined by any standard, and 
<br>
thus there is no particular header one can reliably find it in.
<br>
The alternatives, of course are &quot;unsigned char&quot; or &quot;uint8_t&quot; (defined in 
<br>
stdint.h).
<br>
<p>I had a look at the trunk and VISUALLY is appears the same problem 
<br>
exists in:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal/event/event.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal/mca/event/libevent2013/libevent/event.h
<br>
However, my testing is currently confined to the v1.5 branch in the 
<br>
hopes of finally getting the next 1.5.5rc out the door.
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
<li><strong>Next message:</strong> <a href="10544.php">Nathan Hjelm: "[OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Previous message:</strong> <a href="10542.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10551.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Reply:</strong> <a href="10551.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
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
