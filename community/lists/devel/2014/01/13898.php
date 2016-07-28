<?
$subject_val = "[OMPI devel] harmless warnings from ompi_rb_tree test";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 02:35:29 2014" -->
<!-- isoreceived="20140124073529" -->
<!-- sent="Thu, 23 Jan 2014 23:35:27 -0800" -->
<!-- isosent="20140124073527" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] harmless warnings from ompi_rb_tree test" -->
<!-- id="CAAvDA14pVLj9FdPtmbr7hNTF=suBxynZdN03nrixOZZKNqnMaw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] harmless warnings from ompi_rb_tree test<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 02:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>Previous message:</strong> <a href="13897.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30403 testing report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13910.php">Ralph Castain: "Re: [OMPI devel] harmless warnings from ompi_rb_tree test"</a>
<li><strong>Reply:</strong> <a href="13910.php">Ralph Castain: "Re: [OMPI devel] harmless warnings from ompi_rb_tree test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Noted these today running &quot;make check&quot;, configured/built with icc-14:
<br>
<p>make[3]: Entering directory
<br>
`/brashear/hargrove/OMPI/openmpi-1.7-latest-linux-x86_64-uv/BLD-icc14/test/class'
<br>
&nbsp;&nbsp;CC       ompi_rb_tree.o
<br>
../../../openmpi-source/test/class/ompi_rb_tree.c(368): warning #810:
<br>
conversion from &quot;mca_mpool_base_module_t *&quot; to &quot;int&quot; may lose significant
<br>
bits
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(i != ((int) ((ompi_test_rb_value_t *)
<br>
result)-&gt;registered_mpools[0]))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>../../../openmpi-source/test/class/ompi_rb_tree.c(376): warning #810:
<br>
conversion from &quot;mca_mpool_base_module_t *&quot; to &quot;int&quot; may lose significant
<br>
bits
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(i != ((int) ((ompi_test_rb_value_t *)
<br>
result)-&gt;registered_mpools[0]))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>These are another case where an intermediate cast to (intptr_t) should be
<br>
used.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13898/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>Previous message:</strong> <a href="13897.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30403 testing report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13910.php">Ralph Castain: "Re: [OMPI devel] harmless warnings from ompi_rb_tree test"</a>
<li><strong>Reply:</strong> <a href="13910.php">Ralph Castain: "Re: [OMPI devel] harmless warnings from ompi_rb_tree test"</a>
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
