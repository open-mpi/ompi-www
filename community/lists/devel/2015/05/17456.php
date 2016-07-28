<?
$subject_val = "[OMPI devel] change in io_ompio.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 22:55:28 2015" -->
<!-- isoreceived="20150528025528" -->
<!-- sent="Thu, 28 May 2015 08:25:14 +0530" -->
<!-- isosent="20150528025514" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="[OMPI devel] change in io_ompio.c" -->
<!-- id="55668392.7000905_at_cs.uh.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] change in io_ompio.c<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-27 22:55:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17457.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Previous message:</strong> <a href="17455.php">Jeff Squyres (jsquyres): "[OMPI devel] Proposed v1.8.6 shared library version numbers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17457.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Reply:</strong> <a href="17457.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I saw you a fixed a couple of the coverty warnings in ompio, but 
<br>
unfortunately it also broke some things.
<br>
<p><pre>
--
Question to you: in io_ompio.c line 2345, you introduced a malloc for 
f_procs_in_group that was not there before. That array is allocated a 
couple of lines earlier in the subroutine merge_groups
Since the values are not set, we segfault right away a couple of lines 
later in the subsequent isend, where f_procs_in_group[0] simply does not 
have a value.
Can I ask what the problem was that you tried to fix?  Because purely 
from the logic perspective, that malloc needs to go.
---
Thanks
Edgar
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17457.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Previous message:</strong> <a href="17455.php">Jeff Squyres (jsquyres): "[OMPI devel] Proposed v1.8.6 shared library version numbers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17457.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
<li><strong>Reply:</strong> <a href="17457.php">Edgar Gabriel: "Re: [OMPI devel] change in io_ompio.c"</a>
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
