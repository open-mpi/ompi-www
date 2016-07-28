<?
$subject_val = "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 14 11:03:36 2008" -->
<!-- isoreceived="20081014150336" -->
<!-- sent="Tue, 14 Oct 2008 16:03:00 +0100" -->
<!-- isosent="20081014150300" -->
<!-- name="Stephan Kramer" -->
<!-- email="stephan.kramer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init" -->
<!-- id="48F4B4A4.6000702_at_imperial.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init<br>
<strong>From:</strong> Stephan Kramer (<em>stephan.kramer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-14 11:03:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4764.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.8 released"</a>
<li><strong>Previous message:</strong> <a href="4762.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4607.php">Patrick Farrell: "[OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4765.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Reply:</strong> <a href="4765.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Would someone mind having another look at the bug reported below? I'm 
<br>
hitting exactly the same problem with Debian Unstable, openmpi  
<br>
1.2.7~rc2. Both valgrind and efence are indispensable tools for any 
<br>
developper,  where both may catch errors the other won't report. 
<br>
Electric fence is especially good at catching buffer overruns as it 
<br>
protects the beginning and end of each allocated buffer. The original 
<br>
bug report shows an undeniable buffer overrun in MPI::Init, i.e. the 
<br>
attached patch prints out exactly the address it's trying to access 
<br>
which is over the end of the buffer. Any help would be much appreciated
<br>
<p>Stephan Kramer
<br>
<p><p><span class="quotelev1">&gt; Patrick,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm unable to reproduce the buffer overrun with the latest trunk. I
</span><br>
<span class="quotelev1">&gt; run valgrind (with the memchekcer tool) on a regular basis on the
</span><br>
<span class="quotelev1">&gt; trunk, and I never noticed anything like that. Moreover, I went over
</span><br>
<span class="quotelev1">&gt; the code, and I cannot imagine how we can overrun the buffer in the
</span><br>
<span class="quotelev1">&gt; code you pinpointed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 23, 2008, at 7:57 PM, Patrick Farrell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think I have found a buffer overrun in a function
</span><br>
<span class="quotelev2">&gt; &gt; called by MPI::Init, though explanations of why I am
</span><br>
<span class="quotelev2">&gt; &gt; wrong are welcome.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using the openmpi included in Ubuntu Hardy,
</span><br>
<span class="quotelev2">&gt; &gt; version 1.2.5, though I have inspected the latest trunk by eye
</span><br>
<span class="quotelev2">&gt; &gt; and I don't believe the relevant code has changed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was trying to use Electric Fence, a memory debugging library,
</span><br>
<span class="quotelev2">&gt; &gt; to debug a suspected buffer overrun in my own program.
</span><br>
<span class="quotelev2">&gt; &gt; Electric Fence works by replacing malloc/free in such
</span><br>
<span class="quotelev2">&gt; &gt; a way that bounds violation errors issue a segfault.
</span><br>
<span class="quotelev2">&gt; &gt; While running my program under Electric Fence, I found
</span><br>
<span class="quotelev2">&gt; &gt; that I got a segfault issued at:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 0xb5cdd334 in opal_free_list_grow (flist=0xb2b46a50, num_elements=1)
</span><br>
<span class="quotelev2">&gt; &gt; at class/opal_free_list.c:113
</span><br>
<span class="quotelev2">&gt; &gt; 113 OBJ_CONSTRUCT_INTERNAL(item, flist-&gt;fl_elem_class);
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0 0xb5cdd334 in opal_free_list_grow (flist=0xb2b46a50,
</span><br>
<span class="quotelev2">&gt; &gt; num_elements=1) at class/opal_free_list.c:113
</span><br>
<span class="quotelev2">&gt; &gt; #1 0xb5cdd479 in opal_free_list_init (flist=0xb2b46a50,
</span><br>
<span class="quotelev2">&gt; &gt; elem_size=56, elem_class=0xb2b46e20, num_elements_to_alloc=73,
</span><br>
<span class="quotelev2">&gt; &gt; max_elements_to_alloc=-1, num_elements_per_alloc=1) at class/
</span><br>
<span class="quotelev2">&gt; &gt; opal_free_list.c:78
</span><br>
<span class="quotelev2">&gt; &gt; #2 0xb2b381aa in ompi_osc_pt2pt_component_init
</span><br>
<span class="quotelev2">&gt; &gt; (enable_progress_threads=false, enable_mpi_threads=false) at
</span><br>
<span class="quotelev2">&gt; &gt; osc_pt2pt_component.c:173
</span><br>
<span class="quotelev2">&gt; &gt; #3 0xb792b67c in ompi_osc_base_find_available
</span><br>
<span class="quotelev2">&gt; &gt; (enable_progress_threads=false, enable_mpi_threads=false) at base/
</span><br>
<span class="quotelev2">&gt; &gt; osc_base_open.c:84
</span><br>
<span class="quotelev2">&gt; &gt; #4 0xb78e6abe in ompi_mpi_init (argc=5, argv=0xbfd61f84,
</span><br>
<span class="quotelev2">&gt; &gt; requested=0, provided=0xbfd61e78) at runtime/ompi_mpi_init.c:411
</span><br>
<span class="quotelev2">&gt; &gt; #5 0xb7911a87 in PMPI_Init (argc=0xbfd61f00, argv=0xbfd61f04) at
</span><br>
<span class="quotelev2">&gt; &gt; pinit.c:71
</span><br>
<span class="quotelev2">&gt; &gt; #6 0x0811ca6c in MPI::Init ()
</span><br>
<span class="quotelev2">&gt; &gt; #7 0x08118b8a in main ()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To investigate further, I replaced the OBJ_CONSTRUCT_INTERNAL
</span><br>
<span class="quotelev2">&gt; &gt; macro with its definition in opal/class/opal_object.h, and ran it
</span><br>
<span class="quotelev2">&gt; &gt; again.
</span><br>
<span class="quotelev2">&gt; &gt; It appears that the invalid memory access is happening
</span><br>
<span class="quotelev2">&gt; &gt; on the instruction
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ((opal_object_t *) (item))-&gt;obj_class = (flist-&gt;fl_elem_class);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Investigating further, I modified the source to opal_free_list
</span><br>
<span class="quotelev2">&gt; &gt; with the attached patch. It adds a few debugging printfs to
</span><br>
<span class="quotelev2">&gt; &gt; diagnose exactly what the code is doing. The output of the debugging
</span><br>
<span class="quotelev2">&gt; &gt; statements are:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpidebug: allocating 216
</span><br>
<span class="quotelev2">&gt; &gt; mpidebug: allocated at memory address 0xb62bdf28
</span><br>
<span class="quotelev2">&gt; &gt; mpidebug: accessing address 0xb62be000
</span><br>
<span class="quotelev2">&gt; &gt; [segfault]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now, 0xb62be000 - 0xb62bdf28 = 216, which is
</span><br>
<span class="quotelev2">&gt; &gt; the size of the buffer allocated, and so I think
</span><br>
<span class="quotelev2">&gt; &gt; this is a buffer overrun.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Steps to reproduce:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a) Install Electric Fence
</span><br>
<span class="quotelev2">&gt; &gt; b) Compile the following program
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; MPI::Init(argc, argv);
</span><br>
<span class="quotelev2">&gt; &gt; MPI::Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpiCC -o test ./test.cpp
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; c) gdb ./test
</span><br>
<span class="quotelev2">&gt; &gt; d) set environment LD_PRELOAD /usr/lib/libefence.so.0.0
</span><br>
<span class="quotelev2">&gt; &gt; e) run
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Patrick Farrell
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Patrick Farrell
</span><br>
<span class="quotelev2">&gt; &gt; PhD student
</span><br>
<span class="quotelev2">&gt; &gt; Imperial College London
</span><br>
<span class="quotelev2">&gt; &gt; --- openmpi-1.2.5/opal/class/opal_free_list.c 2008-08-23
</span><br>
<span class="quotelev2">&gt; &gt; 18:35:03.000000000 +0100
</span><br>
<span class="quotelev2">&gt; &gt; +++ openmpi-1.2.5-modified/opal/class/opal_free_list.c 2008-08-23
</span><br>
<span class="quotelev2">&gt; &gt; 18:31:47.000000000 +0100
</span><br>
<span class="quotelev2">&gt; &gt; @@ -90,9 +90,12 @@
</span><br>
<span class="quotelev2">&gt; &gt; if (flist-&gt;fl_max_to_alloc &gt; 0 &amp;&amp; flist-&gt;fl_num_allocated +
</span><br>
<span class="quotelev2">&gt; &gt; num_elements &gt; flist-&gt;fl_max_to_alloc)
</span><br>
<span class="quotelev2">&gt; &gt; return OPAL_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; + fprintf(stderr, &quot;mpidebug: allocating %d\n&quot;, (num_elements *
</span><br>
<span class="quotelev2">&gt; &gt; flist-&gt;fl_elem_size) + sizeof(opal_list_item_t) + CACHE_LINE_SIZE);
</span><br>
<span class="quotelev2">&gt; &gt; alloc_ptr = (unsigned char *)malloc((num_elements * flist-
</span><br>
<span class="quotelev3">&gt; &gt; &gt;fl_elem_size) +
</span><br>
<span class="quotelev2">&gt; &gt; sizeof(opal_list_item_t) +
</span><br>
<span class="quotelev2">&gt; &gt; CACHE_LINE_SIZE);
</span><br>
<span class="quotelev2">&gt; &gt; + fprintf(stderr, &quot;mpidebug: allocated at memory address %p\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; alloc_ptr);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; if(NULL == alloc_ptr)
</span><br>
<span class="quotelev2">&gt; &gt; return OPAL_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -110,7 +113,16 @@
</span><br>
<span class="quotelev2">&gt; &gt; for(i=0; i&lt;num_elements; i++) {
</span><br>
<span class="quotelev2">&gt; &gt; opal_free_list_item_t* item = (opal_free_list_item_t*)ptr;
</span><br>
<span class="quotelev2">&gt; &gt; if (NULL != flist-&gt;fl_elem_class) {
</span><br>
<span class="quotelev2">&gt; &gt; - OBJ_CONSTRUCT_INTERNAL(item, flist-&gt;fl_elem_class);
</span><br>
<span class="quotelev2">&gt; &gt; + do {
</span><br>
<span class="quotelev2">&gt; &gt; + if (0 == (flist-&gt;fl_elem_class)-&gt;cls_initialized) {
</span><br>
<span class="quotelev2">&gt; &gt; + opal_class_initialize((flist-&gt;fl_elem_class));
</span><br>
<span class="quotelev2">&gt; &gt; + }
</span><br>
<span class="quotelev2">&gt; &gt; + fprintf(stderr, &quot;mpidebug: accessing address %p\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; &amp;((opal_object_t *) (item))-&gt;obj_class);
</span><br>
<span class="quotelev2">&gt; &gt; + ((opal_object_t *) (item))-&gt;obj_class = (flist-
</span><br>
<span class="quotelev3">&gt; &gt; &gt;fl_elem_class);
</span><br>
<span class="quotelev2">&gt; &gt; + fprintf(stderr, &quot;mpidebug: accessing address %p\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; &amp;((opal_object_t *) (item))-&gt;obj_reference_count);
</span><br>
<span class="quotelev2">&gt; &gt; + ((opal_object_t *) (item))-&gt;obj_reference_count = 1;
</span><br>
<span class="quotelev2">&gt; &gt; + opal_obj_run_constructors((opal_object_t *) (item));
</span><br>
<span class="quotelev2">&gt; &gt; + } while (0);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; opal_list_append(&amp;(flist-&gt;super), &amp;(item-&gt;super));
</span><br>
<span class="quotelev2">&gt; &gt; ptr += flist-&gt;fl_elem_size;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -119,5 +131,3 @@
</span><br>
<span class="quotelev2">&gt; &gt; return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4764.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.8 released"</a>
<li><strong>Previous message:</strong> <a href="4762.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4607.php">Patrick Farrell: "[OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4765.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Reply:</strong> <a href="4765.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
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
