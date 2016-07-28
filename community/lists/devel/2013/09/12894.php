<?
$subject_val = "Re: [OMPI devel] shmem build failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 14:09:59 2013" -->
<!-- isoreceived="20130913180959" -->
<!-- sent="Fri, 13 Sep 2013 18:09:54 +0000" -->
<!-- isosent="20130913180954" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shmem build failures" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8A7B3D_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8A7AA8_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] shmem build failures<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-13 14:09:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12895.php">Suraj Prabhakaran: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12893.php">Jeff Squyres (jsquyres): "[OMPI devel] shmem build failures"</a>
<li><strong>In reply to:</strong> <a href="12893.php">Jeff Squyres (jsquyres): "[OMPI devel] shmem build failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's some more compile errors from outside of the f77 directory.  Do we need to turn off the shmem build on the nightlies until these compile errors are fixed?
<br>
<p>-----
<br>
make[1]: Entering directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/memheap'
<br>
&nbsp;&nbsp;CC     base/memheap_base_frame.lo
<br>
&nbsp;&nbsp;CC     base/memheap_base_select.lo
<br>
base/memheap_base_select.c: In function `__memheap_create':
<br>
base/memheap_base_select.c:244: warning: cast to pointer from integer of different size
<br>
base/memheap_base_select.c:247: warning: cast to pointer from integer of different size
<br>
make[1]: *** [base/memheap_base_select.lo] Error 1
<br>
&nbsp;&nbsp;CC     base/memheap_base_alloc.lo
<br>
base/memheap_base_alloc.c: In function `__shm_attach':
<br>
base/memheap_base_alloc.c:231: warning: cast to pointer from integer of different size
<br>
base/memheap_base_alloc.c: In function `__mmap_attach':
<br>
base/memheap_base_alloc.c:277: warning: cast to pointer from integer of different size
<br>
base/memheap_base_alloc.c: In function `__mmap_detach':
<br>
base/memheap_base_alloc.c:310: warning: cast to pointer from integer of different size
<br>
make[1]: *** [base/memheap_base_alloc.lo] Error 1
<br>
&nbsp;&nbsp;CC     base/memheap_base_static.lo
<br>
&nbsp;&nbsp;CC     base/memheap_base_register.lo
<br>
&nbsp;&nbsp;CC     base/memheap_base_mkey.lo
<br>
base/memheap_base_mkey.c: In function `memheap_attach_segment':
<br>
base/memheap_base_mkey.c:230: warning: cast to pointer from integer of different size
<br>
make[1]: *** [base/memheap_base_mkey.lo] Error 1
<br>
make[1]: Target `all' not remade because of errors.
<br>
make[1]: Leaving directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/memheap'
<br>
Making all in mca/scoll
<br>
make[1]: Entering directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/scoll'
<br>
&nbsp;&nbsp;CC     base/scoll_base_frame.lo
<br>
&nbsp;&nbsp;CC     base/scoll_base_available.lo
<br>
&nbsp;&nbsp;CC     base/scoll_base_select.lo
<br>
&nbsp;&nbsp;CCLD   libmca_scoll.la
<br>
make[1]: Leaving directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/scoll'
<br>
Making all in mca/spml
<br>
make[1]: Entering directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/spml'
<br>
&nbsp;&nbsp;CC     base/spml_base_frame.lo
<br>
&nbsp;&nbsp;CC     base/spml_base_select.lo
<br>
&nbsp;&nbsp;CC     base/spml_base_request.lo
<br>
&nbsp;&nbsp;CC     base/spml_base_atomicreq.lo
<br>
&nbsp;&nbsp;CC     base/spml_base_getreq.lo
<br>
&nbsp;&nbsp;CC     base/spml_base_putreq.lo
<br>
&nbsp;&nbsp;CC     base/spml_base.lo
<br>
&nbsp;&nbsp;CCLD   libmca_spml.la
<br>
make[1]: Leaving directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/spml'
<br>
Making all in .
<br>
make[1]: Entering directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem'
<br>
&nbsp;&nbsp;CC     op/op.lo
<br>
&nbsp;&nbsp;CC     proc/proc.lo
<br>
&nbsp;&nbsp;CC     proc/proc_group_cache.lo
<br>
&nbsp;&nbsp;CC     request/request.lo
<br>
&nbsp;&nbsp;CC     runtime/oshmem_shmem_init.lo
<br>
&nbsp;&nbsp;CC     runtime/oshmem_shmem_finalize.lo
<br>
&nbsp;&nbsp;CC     runtime/oshmem_shmem_abort.lo
<br>
&nbsp;&nbsp;CC     runtime/oshmem_shmem_params.lo
<br>
&nbsp;&nbsp;CC     runtime/oshmem_shmem_exchange.lo
<br>
make[1]: *** No rule to make target `shmem/f77/libshmem_f77.la', needed by `libshmem.la'.
<br>
make[1]: *** No rule to make target `mca/memheap/libmca_memheap.la', needed by `libshmem.la'.
<br>
make[1]: Target `all-am' not remade because of errors.
<br>
make[1]: Leaving directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem'
<br>
Making all in mca/atomic/basic
<br>
make[1]: Entering directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/atomic/basic'
<br>
&nbsp;&nbsp;CC     atomic_basic_module.lo
<br>
&nbsp;&nbsp;CC     atomic_basic_component.lo
<br>
&nbsp;&nbsp;CC     atomic_basic_fadd.lo
<br>
&nbsp;&nbsp;CC     atomic_basic_cswap.lo
<br>
&nbsp;&nbsp;CCLD   mca_atomic_basic.la
<br>
make[1]: Leaving directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/atomic/basic'
<br>
Making all in mca/memheap/buddy
<br>
make[1]: Entering directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/memheap/buddy'
<br>
&nbsp;&nbsp;CC     memheap_buddy.lo
<br>
memheap_buddy.c: In function `__ffs':
<br>
memheap_buddy.c:97: warning: right shift count &gt;= width of type
<br>
make[1]: *** [memheap_buddy.lo] Error 1
<br>
&nbsp;&nbsp;CC     memheap_buddy_component.lo
<br>
make[1]: Target `all' not remade because of errors.
<br>
make[1]: Leaving directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/memheap/buddy'
<br>
Making all in mca/memheap/ptmalloc
<br>
make[1]: Entering directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/memheap/ptmalloc'
<br>
&nbsp;&nbsp;CC     malloc.lo
<br>
&nbsp;&nbsp;CC     memheap_ptmalloc.lo
<br>
&nbsp;&nbsp;CC     memheap_ptmalloc_component.lo
<br>
&nbsp;&nbsp;CCLD   mca_memheap_ptmalloc.la
<br>
make[1]: Leaving directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/memheap/ptmalloc'
<br>
Making all in mca/scoll/basic
<br>
make[1]: Entering directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/scoll/basic'
<br>
&nbsp;&nbsp;CC     scoll_basic_module.lo
<br>
&nbsp;&nbsp;CC     scoll_basic_component.lo
<br>
&nbsp;&nbsp;CC     scoll_basic_barrier.lo
<br>
&nbsp;&nbsp;CC     scoll_basic_broadcast.lo
<br>
&nbsp;&nbsp;CC     scoll_basic_collect.lo
<br>
&nbsp;&nbsp;CC     scoll_basic_reduce.lo
<br>
&nbsp;&nbsp;CCLD   mca_scoll_basic.la
<br>
make[1]: Leaving directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/scoll/basic'
<br>
Making all in mca/spml/yoda
<br>
make[1]: Entering directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/spml/yoda'
<br>
&nbsp;&nbsp;CC     spml_yoda.lo
<br>
spml_yoda.c: In function `mca_spml_yoda_put_internal':
<br>
spml_yoda.c:786: warning: signed and unsigned type in conditional expression
<br>
spml_yoda.c: In function `mca_spml_yoda_get':
<br>
spml_yoda.c:1094: warning: signed and unsigned type in conditional expression
<br>
make[1]: *** [spml_yoda.lo] Error 1
<br>
&nbsp;&nbsp;CC     spml_yoda_component.lo
<br>
&nbsp;&nbsp;CC     spml_yoda_putreq.lo
<br>
&nbsp;&nbsp;CC     spml_yoda_getreq.lo
<br>
make[1]: Target `all' not remade because of errors.
<br>
make[1]: Leaving directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/mca/spml/yoda'
<br>
Making all in tools/wrappers
<br>
make[1]: Entering directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/tools/wrappers'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/nfs/deep-thought/home/data/jsquyres/scratch/svn/ompi/oshmem/tools/wrappers'
<br>
make: *** [all-recursive] Error 1
<br>
make: Target `all' not remade because of errors.
<br>
[14:08] eddie:~/svn/ompi/oshmem % 
<br>
-----
<br>
<p><p><p><p>On Sep 13, 2013, at 8:06 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; I did a manual build on eddie (the OMPI build server); here's all the failures from the f77 directory.  Please fix -- this is preventing nightly builds from occurring...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [14:03] eddie:~/svn/ompi/oshmem/shmem/f77 % make -k |&amp; tee ../../../make.out 
</span><br>
<span class="quotelev1">&gt;  CC     start_pes_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     num_pes_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     my_pe_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shmem_finalize_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shmem_barrier_all_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shpalloc_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shpdeallc_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shpclmove_f.lo
</span><br>
<span class="quotelev1">&gt; shpclmove_f.c: In function `shpclmove_f':
</span><br>
<span class="quotelev1">&gt; shpclmove_f.c:38: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shpclmove_f.c:38: warning: cast from pointer to integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shpclmove_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_ptr_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_ptr_f.c: In function `shmem_ptr_f':
</span><br>
<span class="quotelev1">&gt; shmem_ptr_f.c:27: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_ptr_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_pe_accessible_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shmem_addr_accessible_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_addr_accessible_f.c: In function `shmem_addr_accessible_f':
</span><br>
<span class="quotelev1">&gt; shmem_addr_accessible_f.c:27: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_addr_accessible_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_put_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_put_f.c: In function `shmem_put_f':
</span><br>
<span class="quotelev1">&gt; shmem_put_f.c:28: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_put_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_put_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_character_put_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_character_put_f.c: In function `shmem_character_put_f':
</span><br>
<span class="quotelev1">&gt; shmem_character_put_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_character_put_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_character_put_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_double_put_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_double_put_f.c: In function `shmem_double_put_f':
</span><br>
<span class="quotelev1">&gt; shmem_double_put_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_double_put_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_double_put_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_complex_put_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_complex_put_f.c: In function `shmem_complex_put_f':
</span><br>
<span class="quotelev1">&gt; shmem_complex_put_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_complex_put_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_complex_put_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_logical_put_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_logical_put_f.c: In function `shmem_logical_put_f':
</span><br>
<span class="quotelev1">&gt; shmem_logical_put_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_logical_put_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_logical_put_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_integer_put_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_integer_put_f.c: In function `shmem_integer_put_f':
</span><br>
<span class="quotelev1">&gt; shmem_integer_put_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_integer_put_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_integer_put_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_real_put_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_real_put_f.c: In function `shmem_real_put_f':
</span><br>
<span class="quotelev1">&gt; shmem_real_put_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_real_put_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_real_put_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_put4_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_put4_f.c: In function `shmem_put4_f':
</span><br>
<span class="quotelev1">&gt; shmem_put4_f.c:30: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_put4_f.c:30: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_put4_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_put8_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_put8_f.c: In function `shmem_put8_f':
</span><br>
<span class="quotelev1">&gt; shmem_put8_f.c:30: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_put8_f.c:30: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_put8_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_put32_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_put32_f.c: In function `shmem_put32_f':
</span><br>
<span class="quotelev1">&gt; shmem_put32_f.c:30: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_put32_f.c:30: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_put32_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_put64_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_put64_f.c: In function `shmem_put64_f':
</span><br>
<span class="quotelev1">&gt; shmem_put64_f.c:30: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_put64_f.c:30: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_put64_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_putmem_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_putmem_f.c: In function `shmem_putmem_f':
</span><br>
<span class="quotelev1">&gt; shmem_putmem_f.c:30: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_putmem_f.c:30: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_putmem_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_complex_iput_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_complex_iput_f.c: In function `shmem_complex_iput_f':
</span><br>
<span class="quotelev1">&gt; shmem_complex_iput_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_complex_iput_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_complex_iput_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_double_iput_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_double_iput_f.c: In function `shmem_double_iput_f':
</span><br>
<span class="quotelev1">&gt; shmem_double_iput_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_double_iput_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_double_iput_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_integer_iput_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_integer_iput_f.c: In function `shmem_integer_iput_f':
</span><br>
<span class="quotelev1">&gt; shmem_integer_iput_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_integer_iput_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_integer_iput_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_iput128_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_iput128_f.c: In function `shmem_iput128_f':
</span><br>
<span class="quotelev1">&gt; shmem_iput128_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_iput128_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_iput128_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_iput32_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_iput32_f.c: In function `shmem_iput32_f':
</span><br>
<span class="quotelev1">&gt; shmem_iput32_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_iput32_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_iput32_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_iput4_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_iput4_f.c: In function `shmem_iput4_f':
</span><br>
<span class="quotelev1">&gt; shmem_iput4_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_iput4_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_iput4_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_iput64_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_iput64_f.c: In function `shmem_iput64_f':
</span><br>
<span class="quotelev1">&gt; shmem_iput64_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_iput64_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_iput64_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_iput8_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_iput8_f.c: In function `shmem_iput8_f':
</span><br>
<span class="quotelev1">&gt; shmem_iput8_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_iput8_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_iput8_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_logical_iput_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_logical_iput_f.c: In function `shmem_logical_iput_f':
</span><br>
<span class="quotelev1">&gt; shmem_logical_iput_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_logical_iput_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_logical_iput_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_real_iput_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_real_iput_f.c: In function `shmem_real_iput_f':
</span><br>
<span class="quotelev1">&gt; shmem_real_iput_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_real_iput_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_real_iput_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_character_get_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_character_get_f.c: In function `shmem_character_get_f':
</span><br>
<span class="quotelev1">&gt; shmem_character_get_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_character_get_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_character_get_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_complex_get_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_complex_get_f.c: In function `shmem_complex_get_f':
</span><br>
<span class="quotelev1">&gt; shmem_complex_get_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_complex_get_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_complex_get_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_double_get_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_double_get_f.c: In function `shmem_double_get_f':
</span><br>
<span class="quotelev1">&gt; shmem_double_get_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_double_get_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_double_get_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_get128_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_get128_f.c: In function `shmem_get128_f':
</span><br>
<span class="quotelev1">&gt; shmem_get128_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_get128_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_get128_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_get32_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_get32_f.c: In function `shmem_get32_f':
</span><br>
<span class="quotelev1">&gt; shmem_get32_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_get32_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_get32_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_get4_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_get4_f.c: In function `shmem_get4_f':
</span><br>
<span class="quotelev1">&gt; shmem_get4_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_get4_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_get4_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_get64_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_get64_f.c: In function `shmem_get64_f':
</span><br>
<span class="quotelev1">&gt; shmem_get64_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_get64_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_get64_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_get8_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_get8_f.c: In function `shmem_get8_f':
</span><br>
<span class="quotelev1">&gt; shmem_get8_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_get8_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_get8_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_getmem_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_getmem_f.c: In function `shmem_getmem_f':
</span><br>
<span class="quotelev1">&gt; shmem_getmem_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_getmem_f.c:29: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_getmem_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_integer_get_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_integer_get_f.c: In function `shmem_integer_get_f':
</span><br>
<span class="quotelev1">&gt; shmem_integer_get_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_integer_get_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_integer_get_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_logical_get_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_logical_get_f.c: In function `shmem_logical_get_f':
</span><br>
<span class="quotelev1">&gt; shmem_logical_get_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_logical_get_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_logical_get_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_real_get_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_real_get_f.c: In function `shmem_real_get_f':
</span><br>
<span class="quotelev1">&gt; shmem_real_get_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_real_get_f.c:33: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_real_get_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_complex_iget_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_complex_iget_f.c: In function `shmem_complex_iget_f':
</span><br>
<span class="quotelev1">&gt; shmem_complex_iget_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_complex_iget_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_complex_iget_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_double_iget_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_double_iget_f.c: In function `shmem_double_iget_f':
</span><br>
<span class="quotelev1">&gt; shmem_double_iget_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_double_iget_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_double_iget_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_iget128_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_iget128_f.c: In function `shmem_iget128_f':
</span><br>
<span class="quotelev1">&gt; shmem_iget128_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_iget128_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_iget128_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_iget32_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_iget32_f.c: In function `shmem_iget32_f':
</span><br>
<span class="quotelev1">&gt; shmem_iget32_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_iget32_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_iget32_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_iget4_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_iget4_f.c: In function `shmem_iget4_f':
</span><br>
<span class="quotelev1">&gt; shmem_iget4_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_iget4_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_iget4_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_iget64_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_iget64_f.c: In function `shmem_iget64_f':
</span><br>
<span class="quotelev1">&gt; shmem_iget64_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_iget64_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_iget64_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_iget8_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_iget8_f.c: In function `shmem_iget8_f':
</span><br>
<span class="quotelev1">&gt; shmem_iget8_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_iget8_f.c:37: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_iget8_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_integer_iget_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_integer_iget_f.c: In function `shmem_integer_iget_f':
</span><br>
<span class="quotelev1">&gt; shmem_integer_iget_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_integer_iget_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_integer_iget_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_logical_iget_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_logical_iget_f.c: In function `shmem_logical_iget_f':
</span><br>
<span class="quotelev1">&gt; shmem_logical_iget_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_logical_iget_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_logical_iget_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_real_iget_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_real_iget_f.c: In function `shmem_real_iget_f':
</span><br>
<span class="quotelev1">&gt; shmem_real_iget_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_real_iget_f.c:40: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_real_iget_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_swap_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_swap_f.c: In function `shmem_swap_f':
</span><br>
<span class="quotelev1">&gt; shmem_swap_f.c:34: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_swap_f.c:34: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_swap_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int4_swap_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_int4_swap_f.c: In function `shmem_int4_swap_f':
</span><br>
<span class="quotelev1">&gt; shmem_int4_swap_f.c:32: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_int4_swap_f.c:32: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_int4_swap_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int8_swap_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_int8_swap_f.c: In function `shmem_int8_swap_f':
</span><br>
<span class="quotelev1">&gt; shmem_int8_swap_f.c:32: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_int8_swap_f.c:32: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_int8_swap_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_real4_swap_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_real4_swap_f.c: In function `shmem_real4_swap_f':
</span><br>
<span class="quotelev1">&gt; shmem_real4_swap_f.c:32: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_real4_swap_f.c:32: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_real4_swap_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_real8_swap_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_real8_swap_f.c: In function `shmem_real8_swap_f':
</span><br>
<span class="quotelev1">&gt; shmem_real8_swap_f.c:32: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_real8_swap_f.c:32: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_real8_swap_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int4_cswap_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_int4_cswap_f.c: In function `shmem_int4_cswap_f':
</span><br>
<span class="quotelev1">&gt; shmem_int4_cswap_f.c:32: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_int4_cswap_f.c:32: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_int4_cswap_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int8_cswap_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_int8_cswap_f.c: In function `shmem_int8_cswap_f':
</span><br>
<span class="quotelev1">&gt; shmem_int8_cswap_f.c:32: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_int8_cswap_f.c:32: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_int8_cswap_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int4_fadd_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_int4_fadd_f.c: In function `shmem_int4_fadd_f':
</span><br>
<span class="quotelev1">&gt; shmem_int4_fadd_f.c:34: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_int4_fadd_f.c:34: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_int4_fadd_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int8_fadd_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_int8_fadd_f.c: In function `shmem_int8_fadd_f':
</span><br>
<span class="quotelev1">&gt; shmem_int8_fadd_f.c:34: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_int8_fadd_f.c:34: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_int8_fadd_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int4_finc_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_int4_finc_f.c: In function `shmem_int4_finc_f':
</span><br>
<span class="quotelev1">&gt; shmem_int4_finc_f.c:35: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_int4_finc_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int8_finc_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_int8_finc_f.c: In function `shmem_int8_finc_f':
</span><br>
<span class="quotelev1">&gt; shmem_int8_finc_f.c:35: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_int8_finc_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int4_add_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_int4_add_f.c: In function `shmem_int4_add_f':
</span><br>
<span class="quotelev1">&gt; shmem_int4_add_f.c:34: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_int4_add_f.c:34: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_int4_add_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int8_add_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_int8_add_f.c: In function `shmem_int8_add_f':
</span><br>
<span class="quotelev1">&gt; shmem_int8_add_f.c:34: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_int8_add_f.c:34: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_int8_add_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int4_wait_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int8_wait_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shmem_wait_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int4_wait_until_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int8_wait_until_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shmem_wait_until_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shmem_barrier_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_barrier_f.c: In function `shmem_barrier_f':
</span><br>
<span class="quotelev1">&gt; shmem_barrier_f.c:28: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_barrier_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_and_to_all_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_and_to_all_f.c: In function `shmem_int4_and_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_and_to_all_f.c:100: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_and_to_all_f.c:100: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_and_to_all_f.c:100: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_and_to_all_f.c:100: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_and_to_all_f.c: In function `shmem_int8_and_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_and_to_all_f.c:101: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_and_to_all_f.c:101: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_and_to_all_f.c:101: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_and_to_all_f.c:101: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_and_to_all_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_or_to_all_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_or_to_all_f.c: In function `shmem_int4_or_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_or_to_all_f.c:97: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_or_to_all_f.c:97: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_or_to_all_f.c:97: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_or_to_all_f.c:97: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_or_to_all_f.c: In function `shmem_int8_or_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_or_to_all_f.c:98: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_or_to_all_f.c:98: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_or_to_all_f.c:98: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_or_to_all_f.c:98: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_or_to_all_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_xor_to_all_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c: In function `shmem_int4_xor_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:99: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:99: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:99: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:99: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c: In function `shmem_int8_xor_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:100: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:100: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:100: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:100: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c: In function `shmem_comp4_xor_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:101: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:101: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:101: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:101: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c: In function `shmem_comp8_xor_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:102: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:102: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:102: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_xor_to_all_f.c:102: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_xor_to_all_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_max_to_all_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c: In function `shmem_int4_max_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:121: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:121: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:121: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:121: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c: In function `shmem_int8_max_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:122: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:122: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:122: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:122: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c: In function `shmem_real4_max_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:123: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:123: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:123: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:123: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c: In function `shmem_real8_max_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:124: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:124: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:124: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:124: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c: In function `shmem_real16_max_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:125: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:125: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:125: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_max_to_all_f.c:125: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_max_to_all_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_min_to_all_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c: In function `shmem_int4_min_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:113: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:113: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:113: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:113: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c: In function `shmem_int8_min_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:114: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:114: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:114: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:114: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c: In function `shmem_real4_min_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:115: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:115: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:115: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:115: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c: In function `shmem_real8_min_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:116: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:116: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:116: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:116: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c: In function `shmem_real16_min_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:117: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:117: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:117: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_min_to_all_f.c:117: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_min_to_all_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_sum_to_all_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c: In function `shmem_int4_sum_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:113: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:113: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:113: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:113: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c: In function `shmem_int8_sum_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:114: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:114: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:114: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:114: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c: In function `shmem_real4_sum_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:115: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:115: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:115: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:115: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c: In function `shmem_real8_sum_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:116: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:116: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:116: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:116: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c: In function `shmem_real16_sum_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:117: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:117: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:117: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_sum_to_all_f.c:117: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_sum_to_all_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_prod_to_all_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c: In function `shmem_int4_prod_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:113: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:113: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:113: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:113: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c: In function `shmem_int8_prod_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:114: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:114: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:114: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:114: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c: In function `shmem_real4_prod_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:115: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:115: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:115: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:115: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c: In function `shmem_real8_prod_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:116: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:116: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:116: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:116: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c: In function `shmem_real16_prod_to_all_f':
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:117: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:117: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:117: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_prod_to_all_f.c:117: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_prod_to_all_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_collect_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c: In function `shmem_collect4_f':
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:143: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:143: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:143: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c: In function `shmem_collect8_f':
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:144: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:144: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:144: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c: In function `shmem_collect32_f':
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:145: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:145: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:145: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c: In function `shmem_collect64_f':
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:146: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:146: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:146: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c: In function `shmem_fcollect4_f':
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:147: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:147: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:147: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c: In function `shmem_fcollect8_f':
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:148: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:148: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:148: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c: In function `shmem_fcollect32_f':
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:149: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:149: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:149: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c: In function `shmem_fcollect64_f':
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:150: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:150: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_collect_f.c:150: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_collect_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_broadcast_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c: In function `shmem_broadcast4_f':
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c:124: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c:124: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c:124: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c: In function `shmem_broadcast8_f':
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c:125: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c:125: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c:125: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c: In function `shmem_broadcast32_f':
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c:126: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c:126: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c:126: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c: In function `shmem_broadcast64_f':
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c:127: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c:127: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_broadcast_f.c:127: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_broadcast_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_lock_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_lock_f.c: In function `shmem_set_lock_f':
</span><br>
<span class="quotelev1">&gt; shmem_lock_f.c:44: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_lock_f.c: In function `shmem_clear_lock_f':
</span><br>
<span class="quotelev1">&gt; shmem_lock_f.c:49: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_lock_f.c: In function `shmem_test_lock_f':
</span><br>
<span class="quotelev1">&gt; shmem_lock_f.c:54: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_lock_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_cache_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_cache_f.c: In function `shmem_set_cache_line_inv_f':
</span><br>
<span class="quotelev1">&gt; shmem_cache_f.c:72: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_cache_f.c: In function `shmem_clear_cache_line_inv_f':
</span><br>
<span class="quotelev1">&gt; shmem_cache_f.c:82: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; shmem_cache_f.c: In function `shmem_udcflush_line_f':
</span><br>
<span class="quotelev1">&gt; shmem_cache_f.c:92: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_cache_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int4_inc_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_int4_inc_f.c: In function `shmem_int4_inc_f':
</span><br>
<span class="quotelev1">&gt; shmem_int4_inc_f.c:35: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_int4_inc_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_int8_inc_f.lo
</span><br>
<span class="quotelev1">&gt; shmem_int8_inc_f.c: In function `shmem_int8_inc_f':
</span><br>
<span class="quotelev1">&gt; shmem_int8_inc_f.c:35: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; make: *** [shmem_int8_inc_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt;  CC     shmem_quiet_f.lo
</span><br>
<span class="quotelev1">&gt;  CC     shmem_fence_f.lo
</span><br>
<span class="quotelev1">&gt; make: Target `all' not remade because of errors.
</span><br>
<span class="quotelev1">&gt; [14:04] eddie:~/svn/ompi/oshmem/shmem/f77 % 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12895.php">Suraj Prabhakaran: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12893.php">Jeff Squyres (jsquyres): "[OMPI devel] shmem build failures"</a>
<li><strong>In reply to:</strong> <a href="12893.php">Jeff Squyres (jsquyres): "[OMPI devel] shmem build failures"</a>
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
