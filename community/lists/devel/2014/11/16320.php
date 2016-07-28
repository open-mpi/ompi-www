<?
$subject_val = "[OMPI devel] Introducing memkind + Adding component in mpool framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 19:38:09 2014" -->
<!-- isoreceived="20141119003809" -->
<!-- sent="Tue, 18 Nov 2014 16:38:08 -0800" -->
<!-- isosent="20141119003808" -->
<!-- name="Vishwanath Venkatesan" -->
<!-- email="vvenkates_at_[hidden]" -->
<!-- subject="[OMPI devel] Introducing memkind + Adding component in mpool framework" -->
<!-- id="CANCxNttVfec12-rg-RfGogwTOi7aXE0YW_aDkWxr2=OsL6oWbg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Introducing memkind + Adding component in mpool framework<br>
<strong>From:</strong> Vishwanath Venkatesan (<em>vvenkates_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-18 19:38:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16321.php">Ralph Castain: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-327-gccaecf0"</a>
<li><strong>Previous message:</strong> <a href="16319.php">Marc H&#246;ppner: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16407.php">Ralph Castain: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16407.php">Ralph Castain: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16408.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I have been working on an implementation for supporting the use of
<br>
MPI_Alloc_mem with our new allocator library called memkind (
<br>
<a href="https://github.com/memkind/">https://github.com/memkind/</a>). The memkind library allows to allocate
<br>
from different
<br>
kinds of memory where, kinds implemented within the library enable the
<br>
control of NUMA and page size features.  This could be leveraged
<br>
conveniently with MPI_Alloc_mem.
<br>
<p>I was hoping to trigger the use of the memkind component by using either an
<br>
info object or an mca parameter (mpirun -np x --mca mpool memkind ).
<br>
The modules of the mpool framework are loaded from components in the btl
<br>
framework and not in the base of mpool. But in the case of my
<br>
implementation, the component can remain independent from the btl
<br>
framework. Is there a way to introduce priority for mpool component
<br>
selection?
<br>
<p>Also, with the use of info objects in mpool_base_alloc.c, it looks like the
<br>
same code path is taken irrespective of whether the info is null or not, as
<br>
the branch conditions seem to be commented out. Could this be un-commented
<br>
or will there be a different patch for this?
<br>
<p>Please let me know,
<br>
Thanks,
<br>
Vish
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16320/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16321.php">Ralph Castain: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-327-gccaecf0"</a>
<li><strong>Previous message:</strong> <a href="16319.php">Marc H&#246;ppner: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16407.php">Ralph Castain: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16407.php">Ralph Castain: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16408.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
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
