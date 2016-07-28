<?
$subject_val = "[OMPI devel] [2.0.0rc] memory:patcher fragility";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 22:42:54 2016" -->
<!-- isoreceived="20160507024254" -->
<!-- sent="Fri, 6 May 2016 19:42:51 -0700" -->
<!-- isosent="20160507024251" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc] memory:patcher fragility" -->
<!-- id="CAAvDA14opPPHCqLfymdLCZ2B2pPj_FDFMrdiKDPA2xwUYPssbA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc] memory:patcher fragility<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 22:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18936.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<li><strong>Previous message:</strong> <a href="18934.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] opal/mca/timer/aix?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18938.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc] memory:patcher fragility"</a>
<li><strong>Reply:</strong> <a href="18938.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc] memory:patcher fragility"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed that opal/mca/memory/patcher/memory_patcher_component.c includes
<br>
&lt;sys/syscall.h&gt; without ever checking (not even in the .m4 fragment) that
<br>
this header exists.
<br>
<p>At the moment, AIX is the only O/S I've encountered that doesn't have a
<br>
sys/syscall.h.
<br>
However, I think the possibility of others needs to be considered.
<br>
My recommendation is that the .m4 disqualify the component if sys/syscall.h
<br>
does not exist.
<br>
<p>I was actually surprised that on AIX memory:patcher was compiled despite
<br>
all of the &quot;no&quot; results in the following:
<br>
<p>--- MCA component memory:patcher (m4 configuration macro, priority 41)
<br>
checking for MCA component memory:patcher compile mode... static
<br>
checking for __curbrk symbol... no
<br>
checking whether __mmap prototype exists... yes
<br>
checking whether __mmap symbol exists... no
<br>
checking whether __syscall prototype exists... no
<br>
checking whether __syscall symbol exists... no
<br>
checking linux/mman.h usability... no
<br>
checking linux/mman.h presence... no
<br>
checking for linux/mman.h... no
<br>
checking if MCA component memory:patcher can compile... yes
<br>
<p><p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18935/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18936.php">Ralph Castain: "Re: [OMPI devel] Process placement"</a>
<li><strong>Previous message:</strong> <a href="18934.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] opal/mca/timer/aix?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18938.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc] memory:patcher fragility"</a>
<li><strong>Reply:</strong> <a href="18938.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc] memory:patcher fragility"</a>
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
