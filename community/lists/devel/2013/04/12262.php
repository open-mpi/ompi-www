<?
$subject_val = "[OMPI devel] assert in opal_datatype_is_contiguous_memory_layout";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 17:10:47 2013" -->
<!-- isoreceived="20130405211047" -->
<!-- sent="Fri, 05 Apr 2013 17:10:37 -0400" -->
<!-- isosent="20130405211037" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI devel] assert in opal_datatype_is_contiguous_memory_layout" -->
<!-- id="515F3DCD.4050505_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> [OMPI devel] assert in opal_datatype_is_contiguous_memory_layout<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 17:10:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12263.php">Nathan Hjelm: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Previous message:</strong> <a href="12261.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12266.php">George Bosilca: "Re: [OMPI devel] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Reply:</strong> <a href="12266.php">George Bosilca: "Re: [OMPI devel] assert in opal_datatype_is_contiguous_memory_layout"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>(Sorry, I have sent this to &quot;users&quot; but I should have sent it to &quot;devel&quot; 
<br>
list instead.  Sorry for the mess...)
<br>
<p>I have attached a very small example which raise an assertion.
<br>
<p>The problem is arising from a process which does not have any element to 
<br>
write in a file (and then in the MPI_File_set_view)...
<br>
<p>You can see this &quot;bug&quot; with openmpi 1.6.3, 1.6.4 and 1.7.0 configured with:
<br>
<p>./configure --enable-mem-debug --enable-mem-profile --enable-memchecker
<br>
&nbsp;&nbsp;--with-mpi-param-check --enable-debug
<br>
<p>Just compile the given example (idx_null.cc) as-is with
<br>
<p>mpicxx -o idx_null idx_null.cc
<br>
<p>and run with 3 processes:
<br>
<p>mpirun -n 3 idx_null
<br>
<p>You can modify the example by commenting &quot;#define WITH_ZERO_ELEMNT_BUG&quot; 
<br>
to see that everything is going well when all processes have something 
<br>
to write.
<br>
<p>There is no &quot;bug&quot; if you use openmpi 1.6.3 (and higher) without the 
<br>
debugging options.
<br>
<p>Also, all is working well with mpich-3.0.3 configured with:
<br>
<p>./configure --enable-g=yes
<br>
<p><p>So, is this a wrong &quot;assert&quot; in openmpi?
<br>
<p>Is there a real problem to use this example in a &quot;release&quot; mode?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12262/idx_null.cc">idx_null.cc</a>
</ul>
<!-- attachment="idx_null.cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12263.php">Nathan Hjelm: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Previous message:</strong> <a href="12261.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12266.php">George Bosilca: "Re: [OMPI devel] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Reply:</strong> <a href="12266.php">George Bosilca: "Re: [OMPI devel] assert in opal_datatype_is_contiguous_memory_layout"</a>
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
