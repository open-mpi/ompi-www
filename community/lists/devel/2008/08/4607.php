<?
$subject_val = "[OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 23 13:57:23 2008" -->
<!-- isoreceived="20080823175723" -->
<!-- sent="Sat, 23 Aug 2008 18:57:06 +0100" -->
<!-- isosent="20080823175706" -->
<!-- name="Patrick Farrell" -->
<!-- email="patrick.farrell06_at_[hidden]" -->
<!-- subject="[OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init" -->
<!-- id="48B04F72.2060503_at_imperial.ac.uk" -->
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
<strong>Subject:</strong> [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init<br>
<strong>From:</strong> Patrick Farrell (<em>patrick.farrell06_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-23 13:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4608.php">Ralph Castain: "[OMPI devel] Platform files"</a>
<li><strong>Previous message:</strong> <a href="4606.php">George Bosilca: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4610.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Reply:</strong> <a href="4610.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4763.php">Stephan Kramer: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think I have found a buffer overrun in a function
<br>
called by MPI::Init, though explanations of why I am
<br>
wrong are welcome.
<br>
<p>I am using the openmpi included in Ubuntu Hardy,
<br>
version 1.2.5, though I have inspected the latest trunk by eye
<br>
and I don't believe the relevant code has changed.
<br>
<p>I was trying to use Electric Fence, a memory debugging library,
<br>
to debug a suspected buffer overrun in my own program.
<br>
Electric Fence works by replacing malloc/free in such
<br>
a way that bounds violation errors issue a segfault.
<br>
While running my program under Electric Fence, I found
<br>
that I got a segfault issued at:
<br>
<p>0xb5cdd334 in opal_free_list_grow (flist=0xb2b46a50, num_elements=1) at 
<br>
class/opal_free_list.c:113
<br>
113 OBJ_CONSTRUCT_INTERNAL(item, flist-&gt;fl_elem_class);
<br>
(gdb) bt
<br>
#0 0xb5cdd334 in opal_free_list_grow (flist=0xb2b46a50, num_elements=1) 
<br>
at class/opal_free_list.c:113
<br>
#1 0xb5cdd479 in opal_free_list_init (flist=0xb2b46a50, elem_size=56, 
<br>
elem_class=0xb2b46e20, num_elements_to_alloc=73, 
<br>
max_elements_to_alloc=-1, num_elements_per_alloc=1) at 
<br>
class/opal_free_list.c:78
<br>
#2 0xb2b381aa in ompi_osc_pt2pt_component_init 
<br>
(enable_progress_threads=false, enable_mpi_threads=false) at 
<br>
osc_pt2pt_component.c:173
<br>
#3 0xb792b67c in ompi_osc_base_find_available 
<br>
(enable_progress_threads=false, enable_mpi_threads=false) at 
<br>
base/osc_base_open.c:84
<br>
#4 0xb78e6abe in ompi_mpi_init (argc=5, argv=0xbfd61f84, requested=0, 
<br>
provided=0xbfd61e78) at runtime/ompi_mpi_init.c:411
<br>
#5 0xb7911a87 in PMPI_Init (argc=0xbfd61f00, argv=0xbfd61f04) at pinit.c:71
<br>
#6 0x0811ca6c in MPI::Init ()
<br>
#7 0x08118b8a in main ()
<br>
<p>To investigate further, I replaced the OBJ_CONSTRUCT_INTERNAL
<br>
macro with its definition in opal/class/opal_object.h, and ran it again.
<br>
It appears that the invalid memory access is happening
<br>
on the instruction
<br>
<p>((opal_object_t *) (item))-&gt;obj_class = (flist-&gt;fl_elem_class);
<br>
<p>Investigating further, I modified the source to opal_free_list
<br>
with the attached patch. It adds a few debugging printfs to
<br>
diagnose exactly what the code is doing. The output of the debugging
<br>
statements are:
<br>
<p>mpidebug: allocating 216
<br>
mpidebug: allocated at memory address 0xb62bdf28
<br>
mpidebug: accessing address 0xb62be000
<br>
[segfault]
<br>
<p>Now, 0xb62be000 - 0xb62bdf28 = 216, which is
<br>
the size of the buffer allocated, and so I think
<br>
this is a buffer overrun.
<br>
<p>Steps to reproduce:
<br>
<p>a) Install Electric Fence
<br>
b) Compile the following program
<br>
<p>#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;MPI::Init(argc, argv);
<br>
&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>with
<br>
<p>mpiCC -o test ./test.cpp
<br>
<p>c) gdb ./test
<br>
d) set environment LD_PRELOAD /usr/lib/libefence.so.0.0
<br>
e) run
<br>
<p>Hope this helps,
<br>
<p>Patrick Farrell
<br>
<p><pre>
--
Patrick Farrell
PhD student
Imperial College London

</pre>
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4607/opal_free_list_dbg.diff">opal_free_list_dbg.diff</a>
</ul>
<!-- attachment="opal_free_list_dbg.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4608.php">Ralph Castain: "[OMPI devel] Platform files"</a>
<li><strong>Previous message:</strong> <a href="4606.php">George Bosilca: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4610.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Reply:</strong> <a href="4610.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4763.php">Stephan Kramer: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
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
