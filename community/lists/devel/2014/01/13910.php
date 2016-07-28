<?
$subject_val = "Re: [OMPI devel] harmless warnings from ompi_rb_tree test";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 15:20:31 2014" -->
<!-- isoreceived="20140124202031" -->
<!-- sent="Fri, 24 Jan 2014 12:19:35 -0800" -->
<!-- isosent="20140124201935" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] harmless warnings from ompi_rb_tree test" -->
<!-- id="91706268-ED46-4E7A-8F21-56758B3D1157_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14pVLj9FdPtmbr7hNTF=suBxynZdN03nrixOZZKNqnMaw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] harmless warnings from ompi_rb_tree test<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 15:19:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13911.php">Paul Hargrove: "[OMPI devel] testing assignments/requests"</a>
<li><strong>Previous message:</strong> <a href="13909.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>In reply to:</strong> <a href="13898.php">Paul Hargrove: "[OMPI devel] harmless warnings from ompi_rb_tree test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found the changeset (r30225) that fixed this - Jeff committed it to the trunk two weeks ago but forgot to cmr it across. I've set it for 1.7.5
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Jan 23, 2014, at 11:35 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Noted these today running &quot;make check&quot;, configured/built with icc-14:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/brashear/hargrove/OMPI/openmpi-1.7-latest-linux-x86_64-uv/BLD-icc14/test/class'
</span><br>
<span class="quotelev1">&gt;   CC       ompi_rb_tree.o
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-source/test/class/ompi_rb_tree.c(368): warning #810: conversion from &quot;mca_mpool_base_module_t *&quot; to &quot;int&quot; may lose significant bits
</span><br>
<span class="quotelev1">&gt;           } else if(i != ((int) ((ompi_test_rb_value_t *) result)-&gt;registered_mpools[0]))
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-source/test/class/ompi_rb_tree.c(376): warning #810: conversion from &quot;mca_mpool_base_module_t *&quot; to &quot;int&quot; may lose significant bits
</span><br>
<span class="quotelev1">&gt;           } else if(i != ((int) ((ompi_test_rb_value_t *) result)-&gt;registered_mpools[0]))
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are another case where an intermediate cast to (intptr_t) should be used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13910/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13911.php">Paul Hargrove: "[OMPI devel] testing assignments/requests"</a>
<li><strong>Previous message:</strong> <a href="13909.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>In reply to:</strong> <a href="13898.php">Paul Hargrove: "[OMPI devel] harmless warnings from ompi_rb_tree test"</a>
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
