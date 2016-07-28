<?
$subject_val = "[OMPI devel] [v1.8] illegal commas after last item in enum";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 00:36:49 2014" -->
<!-- isoreceived="20140809043649" -->
<!-- sent="Fri, 8 Aug 2014 21:36:48 -0700" -->
<!-- isosent="20140809043648" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [v1.8] illegal commas after last item in enum" -->
<!-- id="CAAvDA15RQup7mz7Hmy6jOYxaHGOm5XB+QJVYcvKiH02Ja6JAgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [v1.8] illegal commas after last item in enum<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 00:36:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15577.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Previous message:</strong> <a href="15575.php">Paul Hargrove: "[OMPI devel] [v1.8] java bindings build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15586.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [v1.8] illegal commas after last item in enum"</a>
<li><strong>Reply:</strong> <a href="15586.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [v1.8] illegal commas after last item in enum"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Solaris Studio 12.3 C++ compiler warns about commas after the last item
<br>
in an enum.
<br>
While these commas are legal in C99, they are ILLEGAL in C++ prior to C++11
<br>
<p>The warnings below list the four instances I encountered while building the
<br>
C++ bindings, but there might be others.
<br>
<p>-Paul
<br>
<p>&quot;openmpi-1.8.2rc4r32480/ompi/include/ompi/constants.h&quot;, line 70: Warning:
<br>
Identifier expected instead of &quot;}&quot;.
<br>
&quot;openmpi-1.8.2rc4r32480/opal/mca/base/mca_base_framework.h&quot;, line 37:
<br>
Warning: Identifier expected instead of &quot;}&quot;.
<br>
&quot;openmpi-1.8.2rc4r32480/opal/mca/base/mca_base_framework.h&quot;, line 119:
<br>
Warning: Identifier expected instead of &quot;}&quot;.
<br>
&quot;openmpi-1.8.2rc4r32480/opal/mca/base/mca_base_var.h&quot;, line 694: Warning:
<br>
Identifier expected instead of &quot;}&quot;.
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15576/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15577.php">Ralph Castain: "Re: [OMPI devel] [v1.8] java bindings build failure"</a>
<li><strong>Previous message:</strong> <a href="15575.php">Paul Hargrove: "[OMPI devel] [v1.8] java bindings build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15586.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [v1.8] illegal commas after last item in enum"</a>
<li><strong>Reply:</strong> <a href="15586.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [v1.8] illegal commas after last item in enum"</a>
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
