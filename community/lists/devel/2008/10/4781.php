<?
$subject_val = "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 13:32:22 2008" -->
<!-- isoreceived="20081021173222" -->
<!-- sent="Tue, 21 Oct 2008 18:32:07 +0100" -->
<!-- isosent="20081021173207" -->
<!-- name="Stephan Kramer" -->
<!-- email="stephan.kramer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init" -->
<!-- id="48FE1217.1030003_at_imperial.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="81599400-4726-4B0B-A52C-9AEF144BE66E_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-10-21 13:32:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4782.php">Ralph Castain: "[OMPI devel] Direct routed module"</a>
<li><strong>Previous message:</strong> <a href="4780.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>In reply to:</strong> <a href="4780.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Stephan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fix was committed in the trunk (revision 19778). Fixes for the 
</span><br>
<span class="quotelev1">&gt; 1.2, as well as the 1.3 are pending.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks for your help,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
Ah brilliant. Yes, modulos get me confused in Fortran as well (there are 
<br>
2 functions in the standard!). Glad, that's sorted now
<br>
<p>Cheers
<br>
Stephan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 20, 2008, at 5:43 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stephen,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think you're completely right, and that I had a wrong understanding 
</span><br>
<span class="quotelev2">&gt;&gt; of the modulus operator. Based on my memory, I was pretty sure that 
</span><br>
<span class="quotelev2">&gt;&gt; the modulus is ALWAYS positive. Now, even Wikipedia seems to 
</span><br>
<span class="quotelev2">&gt;&gt; contradict me :) They have a pretty good definition of % based on the 
</span><br>
<span class="quotelev2">&gt;&gt; programming language (<a href="http://en.wikipedia.org/wiki/Modulo_operation">http://en.wikipedia.org/wiki/Modulo_operation</a>).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will apply your patch to all places where we use modulus in Open 
</span><br>
<span class="quotelev2">&gt;&gt; MPI. Thanks for your help on this issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 19, 2008, at 1:43 PM, Stephan Kramer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Stephan,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You might be right. intptr_t is a signed type, which allows the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; result of % to be potentially negative. However, on the other side, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mod is defined as a size_t which [based on my memory] is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; definitively unsigned as it represent a size.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you try to apply your patch to Open MPI ? If yes does it 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; resolve the issue ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I have applied the patch intptr_t -&gt; uintptr_t and it does 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resolve the issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the way this works, I'm not a C programmer myself, is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - the outcome of the % is a signed and negative number, say -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - this number gets wrapped in the assignment to the signed integer 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mod: UINT_MAX+1-x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - in the subtraction CACHE_LINE_SIZE-mod, the result is wrapped 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; around again, giving CACHE_LINE_SIZE+x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stephan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 16, 2008, at 7:29 PM, Stephan Kramer wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I did investigate this issue for about 3 hours yesterday. Neither 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; valgrind nor efence report any errors on my cluster. I'm using 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; debian unstable with gcc-4.1.2. Adding printfs doesn't shows the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; same output as you, all addresses are in the correct range. I 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; went over the code manually, and to be honest I cannot imagine 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; how this might happens IF the compiler is doing what it is 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; supposed to do.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I run out of options on this one. If you can debug it and figure 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; out what's the problem there I'll be happy to hear.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks a lot for your effort of looking into this. I think I've 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; come a bit further with this. The reproducibility may in fact have 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to do with 32bit/64 bit differences.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think the culprit is line 105 of opal_free_list.c:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mod = (intptr_t)ptr % CACHE_LINE_SIZE;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if(mod != 0) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     ptr += (CACHE_LINE_SIZE - mod);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As intptr_t casts to a signed integer, for 32 bit with addresses 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; above 0x7fff ffff the outcome of mod will be negative. Thus ptr 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will be increased with more than CACHE_LINE_SIZE, which is not 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; accounted for in the allocated buffer size in line 93, and a 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; buffer overrun will appear in the subsequent element loop. This is 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; confirmed with the output of some debugging statements I've pasted 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; below. Also I haven't come across the same bug on 64bit machines.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I guess this should be uintptr_t instead?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Stephan Kramer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The debugging output:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpidebug: num_elements  = 1, flist-&gt;fl_elem_size = 40
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpidebug: sizeof(opal_list_item_t) = 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpidebug: allocating 184
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpidebug: allocated at memory address 0xb2d29f48
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpidebug: mod = -40, CACHE_LINE_SIZE = 128
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and at point of the buffer overrun/efence segfault in gdb:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (gdb) print item
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $23 = (opal_free_list_item_t *) 0xb2d2a000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which is exactly at (over) the end of the buffer: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0xb2d2a000=0xb2d29f48 + 184
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Oct 14, 2008, at 11:03 AM, Stephan Kramer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Would someone mind having another look at the bug reported 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; below? I'm hitting exactly the same problem with Debian 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Unstable, openmpi  1.2.7~rc2. Both valgrind and efence are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; indispensable tools for any developper,  where both may catch 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; errors the other won't report. Electric fence is especially good 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; at catching buffer overruns as it protects the beginning and end 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; of each allocated buffer. The original bug report shows an 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; undeniable buffer overrun in MPI::Init, i.e. the attached patch 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; prints out exactly the address it's trying to access which is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; over the end of the buffer. Any help would be much appreciated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Stephan Kramer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Patrick,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm unable to reproduce the buffer overrun with the latest 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; trunk. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; run valgrind (with the memchekcer tool) on a regular basis on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; trunk, and I never noticed anything like that. Moreover, I went 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the code, and I cannot imagine how we can overrun the buffer in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; code you pinpointed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 23, 2008, at 7:57 PM, Patrick Farrell wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; I think I have found a buffer overrun in a function
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; called by MPI::Init, though explanations of why I am
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; wrong are welcome.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; I am using the openmpi included in Ubuntu Hardy,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; version 1.2.5, though I have inspected the latest trunk by eye
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; and I don't believe the relevant code has changed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; I was trying to use Electric Fence, a memory debugging library,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; to debug a suspected buffer overrun in my own program.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Electric Fence works by replacing malloc/free in such
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; a way that bounds violation errors issue a segfault.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; While running my program under Electric Fence, I found
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; that I got a segfault issued at:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; 0xb5cdd334 in opal_free_list_grow (flist=0xb2b46a50, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; num_elements=1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; at class/opal_free_list.c:113
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; 113 OBJ_CONSTRUCT_INTERNAL(item, flist-&gt;fl_elem_class);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; #0 0xb5cdd334 in opal_free_list_grow (flist=0xb2b46a50,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; num_elements=1) at class/opal_free_list.c:113
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; #1 0xb5cdd479 in opal_free_list_init (flist=0xb2b46a50,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; elem_size=56, elem_class=0xb2b46e20, num_elements_to_alloc=73,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; max_elements_to_alloc=-1, num_elements_per_alloc=1) at class/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; opal_free_list.c:78
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; #2 0xb2b381aa in ompi_osc_pt2pt_component_init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; (enable_progress_threads=false, enable_mpi_threads=false) at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; osc_pt2pt_component.c:173
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; #3 0xb792b67c in ompi_osc_base_find_available
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; (enable_progress_threads=false, enable_mpi_threads=false) at 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; base/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; osc_base_open.c:84
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; #4 0xb78e6abe in ompi_mpi_init (argc=5, argv=0xbfd61f84,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; requested=0, provided=0xbfd61e78) at runtime/ompi_mpi_init.c:411
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; #5 0xb7911a87 in PMPI_Init (argc=0xbfd61f00, argv=0xbfd61f04) at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; pinit.c:71
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; #6 0x0811ca6c in MPI::Init ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; #7 0x08118b8a in main ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; To investigate further, I replaced the OBJ_CONSTRUCT_INTERNAL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; macro with its definition in opal/class/opal_object.h, and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ran it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; again.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; It appears that the invalid memory access is happening
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; on the instruction
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; ((opal_object_t *) (item))-&gt;obj_class = (flist-&gt;fl_elem_class);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Investigating further, I modified the source to opal_free_list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; with the attached patch. It adds a few debugging printfs to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; diagnose exactly what the code is doing. The output of the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; debugging
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; statements are:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpidebug: allocating 216
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpidebug: allocated at memory address 0xb62bdf28
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpidebug: accessing address 0xb62be000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; [segfault]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Now, 0xb62be000 - 0xb62bdf28 = 216, which is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; the size of the buffer allocated, and so I think
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; this is a buffer overrun.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Steps to reproduce:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; a) Install Electric Fence
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; b) Compile the following program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; MPI::Init(argc, argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; mpiCC -o test ./test.cpp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; c) gdb ./test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; d) set environment LD_PRELOAD /usr/lib/libefence.so.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; e) run
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Patrick Farrell
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Patrick Farrell
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; PhD student
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; Imperial College London
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; --- openmpi-1.2.5/opal/class/opal_free_list.c 2008-08-23
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; 18:35:03.000000000 +0100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; +++ openmpi-1.2.5-modified/opal/class/opal_free_list.c 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2008-08-23
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; 18:31:47.000000000 +0100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; @@ -90,9 +90,12 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; if (flist-&gt;fl_max_to_alloc &gt; 0 &amp;&amp; flist-&gt;fl_num_allocated +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; num_elements &gt; flist-&gt;fl_max_to_alloc)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; return OPAL_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; + fprintf(stderr, &quot;mpidebug: allocating %d\n&quot;, (num_elements *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; flist-&gt;fl_elem_size) + sizeof(opal_list_item_t) + 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CACHE_LINE_SIZE);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; alloc_ptr = (unsigned char *)malloc((num_elements * flist-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;fl_elem_size) +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; sizeof(opal_list_item_t) +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; CACHE_LINE_SIZE);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; + fprintf(stderr, &quot;mpidebug: allocated at memory address %p\n&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; alloc_ptr);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; if(NULL == alloc_ptr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; return OPAL_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; @@ -110,7 +113,16 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; for(i=0; i&lt;num_elements; i++) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; opal_free_list_item_t* item = (opal_free_list_item_t*)ptr;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; if (NULL != flist-&gt;fl_elem_class) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; - OBJ_CONSTRUCT_INTERNAL(item, flist-&gt;fl_elem_class);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; + do {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; + if (0 == (flist-&gt;fl_elem_class)-&gt;cls_initialized) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; + opal_class_initialize((flist-&gt;fl_elem_class));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; + }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; + fprintf(stderr, &quot;mpidebug: accessing address %p\n&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; &amp;((opal_object_t *) (item))-&gt;obj_class);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; + ((opal_object_t *) (item))-&gt;obj_class = (flist-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; &gt;fl_elem_class);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; + fprintf(stderr, &quot;mpidebug: accessing address %p\n&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; &amp;((opal_object_t *) (item))-&gt;obj_reference_count);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; + ((opal_object_t *) (item))-&gt;obj_reference_count = 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; + opal_obj_run_constructors((opal_object_t *) (item));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; + } while (0);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; opal_list_append(&amp;(flist-&gt;super), &amp;(item-&gt;super));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; ptr += flist-&gt;fl_elem_size;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; @@ -119,5 +131,3 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4782.php">Ralph Castain: "[OMPI devel] Direct routed module"</a>
<li><strong>Previous message:</strong> <a href="4780.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>In reply to:</strong> <a href="4780.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
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
