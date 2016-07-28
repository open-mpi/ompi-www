<?
$subject_val = "[OMPI devel] [v2.x] printf format warnings w/ -m32";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 12:48:49 2016" -->
<!-- isoreceived="20160506164849" -->
<!-- sent="Fri, 6 May 2016 09:48:38 -0700" -->
<!-- isosent="20160506164838" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [v2.x] printf format warnings w/ -m32" -->
<!-- id="CAAvDA176ku5b7HERhSbenJQSSopwEhwpTm0y3tdj2L5CXLbd2Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [v2.x] printf format warnings w/ -m32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 12:48:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18933.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18931.php">Paul Hargrove: "[OMPI devel] [v2.x] Harmless type conversion warnings from Clang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18970.php">Ralph Castain: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<li><strong>Reply:</strong> <a href="18970.php">Ralph Castain: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The 96 printf format warnings in the attachment come from an Linux/x86-64
<br>
system w/ Clang and &quot;-m32&quot;.
<br>
<p>Some of the warnings are &quot;size_t&quot; vs &quot;unigned long&quot;, which is harmless
<br>
since both are 32-bits.
<br>
<p>However, there are several cases in sharedfp/sm where a 64-bit (long long)
<br>
format has a 32-bit (long) argument.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18932/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18932/format_warn_m32.txt">format_warn_m32.txt</a>
</ul>
<!-- attachment="format_warn_m32.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18933.php">Brice Goglin: "Re: [OMPI devel] [PATCH] Fix for xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18931.php">Paul Hargrove: "[OMPI devel] [v2.x] Harmless type conversion warnings from Clang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18970.php">Ralph Castain: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
<li><strong>Reply:</strong> <a href="18970.php">Ralph Castain: "Re: [OMPI devel] [v2.x] printf format warnings w/ -m32"</a>
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
