<?
$subject_val = "[OMPI devel] reduce_scatter bug with hierarch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 14:09:46 2009" -->
<!-- isoreceived="20090113190946" -->
<!-- sent="Tue, 13 Jan 2009 13:09:43 -0600" -->
<!-- isosent="20090113190943" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="[OMPI devel] reduce_scatter bug with hierarch" -->
<!-- id="496CE6F7.8080200_at_cs.uh.edu" -->
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
<strong>Subject:</strong> [OMPI devel] reduce_scatter bug with hierarch<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 14:09:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5140.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5138.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3rc4 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5158.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Reply:</strong> <a href="5158.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just debugged the Reduce_scatter bug mentioned previously. The bug is 
<br>
unfortunately not in hierarch, but in tuned.
<br>
<p>Here is the code snipplet causing the problems:
<br>
<p>int reduce_scatter (...., mca_coll_base_module_t *module)
<br>
{
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;err = comm-&gt;c_coll.coll_reduce (...., module)
<br>
...
<br>
}
<br>
<p><p>but should be
<br>
{
<br>
...
<br>
&nbsp;&nbsp;&nbsp;err = comm-&gt;c_coll.coll_reduce (..., comm-&gt;c_coll.coll_reduce_module);
<br>
...
<br>
}
<br>
<p>The problem as it is right now is, that when using hierarch, only a 
<br>
subset of the function are set, e.g. reduce,allreduce, bcast and 
<br>
barrier. Thus, reduce_scatter is from tuned in most scenarios, and calls 
<br>
the subsequent functions with the wrong module. Hierarch of course does 
<br>
not like that :-)
<br>
<p>Anyway, a quick glance through the tuned code reveals a significant 
<br>
number of instances where this appears(reduce_scatter, allreduce, 
<br>
allgather, allgatherv). Basic, hierarch and inter seem to do that mostly 
<br>
correctly.
<br>
<p>Thanks
<br>
Edgar
<br>
<pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5140.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5138.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3rc4 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5158.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Reply:</strong> <a href="5158.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
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
