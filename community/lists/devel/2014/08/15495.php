<?
$subject_val = "[OMPI devel] opal_config_bottom.h question again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 12:00:13 2014" -->
<!-- isoreceived="20140804160013" -->
<!-- sent="Mon, 4 Aug 2014 16:00:10 +0000" -->
<!-- isosent="20140804160010" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_config_bottom.h question again" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05ACCA60_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] opal_config_bottom.h question again<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 12:00:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15496.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Previous message:</strong> <a href="15494.php">Yossi Etigin: "[OMPI devel] canceling buffered send request with pml/cm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15496.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Reply:</strong> <a href="15496.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>As I said last week, I'm noticing now that on my opensuse 13.1 system and gcc 4.8.1, when I do a fresh
<br>
checkout of trunk ompi and try to build, without any configure options,
<br>
<p>mca_base_mpool_frame.c
<br>
<p>does not compile.
<br>
<p>The reason is there is a conflict in opal_config_bottom.h and the contents of malloc.h,
<br>
which for my system is pulled in by the preprocessor.
<br>
<p>If I undefine HAVE_MALLOC_H in this file, the code compiles fine.  Alternatively,
<br>
one can also move the malloc.h include prior to the opal_config.h include and things
<br>
work.  Alternatively, one can add the OPAL_DISABLE_ENABLE_MEM_DEBUG define
<br>
as in mpool_base_lookup.c , and the compile problem similarly goes away.
<br>
<p>I'd like to check in a fix for this.  I'd prefer to just move the std include files ahead
<br>
of the opal_config.h include.  I'd like to do this today unless someone objects.
<br>
<p>I'm somewhat surprised I'm the only one seeing this though.
<br>
<p>Howard
<br>
<p><p>-------------------------------------------------
<br>
Howard Pritchard
<br>
HPC-5
<br>
Los Alamos National Laboratory
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15495/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15496.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Previous message:</strong> <a href="15494.php">Yossi Etigin: "[OMPI devel] canceling buffered send request with pml/cm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15496.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Reply:</strong> <a href="15496.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
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
