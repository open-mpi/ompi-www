<?
$subject_val = "[OMPI devel] shmem build failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 14:06:19 2013" -->
<!-- isoreceived="20130913180619" -->
<!-- sent="Fri, 13 Sep 2013 18:06:07 +0000" -->
<!-- isosent="20130913180607" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] shmem build failures" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8A7AA8_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] shmem build failures<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-13 14:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12894.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem build failures"</a>
<li><strong>Previous message:</strong> <a href="12892.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12894.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem build failures"</a>
<li><strong>Reply:</strong> <a href="12894.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem build failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did a manual build on eddie (the OMPI build server); here's all the failures from the f77 directory.  Please fix -- this is preventing nightly builds from occurring...
<br>
<p>-----
<br>
[14:03] eddie:~/svn/ompi/oshmem/shmem/f77 % make -k |&amp; tee ../../../make.out 
<br>
&nbsp;&nbsp;CC     start_pes_f.lo
<br>
&nbsp;&nbsp;CC     num_pes_f.lo
<br>
&nbsp;&nbsp;CC     my_pe_f.lo
<br>
&nbsp;&nbsp;CC     shmem_finalize_f.lo
<br>
&nbsp;&nbsp;CC     shmem_barrier_all_f.lo
<br>
&nbsp;&nbsp;CC     shpalloc_f.lo
<br>
&nbsp;&nbsp;CC     shpdeallc_f.lo
<br>
&nbsp;&nbsp;CC     shpclmove_f.lo
<br>
shpclmove_f.c: In function `shpclmove_f':
<br>
shpclmove_f.c:38: warning: cast to pointer from integer of different size
<br>
shpclmove_f.c:38: warning: cast from pointer to integer of different size
<br>
make: *** [shpclmove_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_ptr_f.lo
<br>
shmem_ptr_f.c: In function `shmem_ptr_f':
<br>
shmem_ptr_f.c:27: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_ptr_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_pe_accessible_f.lo
<br>
&nbsp;&nbsp;CC     shmem_addr_accessible_f.lo
<br>
shmem_addr_accessible_f.c: In function `shmem_addr_accessible_f':
<br>
shmem_addr_accessible_f.c:27: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_addr_accessible_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_put_f.lo
<br>
shmem_put_f.c: In function `shmem_put_f':
<br>
shmem_put_f.c:28: warning: cast to pointer from integer of different size
<br>
shmem_put_f.c:29: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_put_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_character_put_f.lo
<br>
shmem_character_put_f.c: In function `shmem_character_put_f':
<br>
shmem_character_put_f.c:33: warning: cast to pointer from integer of different size
<br>
shmem_character_put_f.c:33: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_character_put_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_double_put_f.lo
<br>
shmem_double_put_f.c: In function `shmem_double_put_f':
<br>
shmem_double_put_f.c:33: warning: cast to pointer from integer of different size
<br>
shmem_double_put_f.c:33: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_double_put_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_complex_put_f.lo
<br>
shmem_complex_put_f.c: In function `shmem_complex_put_f':
<br>
shmem_complex_put_f.c:33: warning: cast to pointer from integer of different size
<br>
shmem_complex_put_f.c:33: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_complex_put_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_logical_put_f.lo
<br>
shmem_logical_put_f.c: In function `shmem_logical_put_f':
<br>
shmem_logical_put_f.c:33: warning: cast to pointer from integer of different size
<br>
shmem_logical_put_f.c:33: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_logical_put_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_integer_put_f.lo
<br>
shmem_integer_put_f.c: In function `shmem_integer_put_f':
<br>
shmem_integer_put_f.c:33: warning: cast to pointer from integer of different size
<br>
shmem_integer_put_f.c:33: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_integer_put_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_real_put_f.lo
<br>
shmem_real_put_f.c: In function `shmem_real_put_f':
<br>
shmem_real_put_f.c:33: warning: cast to pointer from integer of different size
<br>
shmem_real_put_f.c:33: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_real_put_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_put4_f.lo
<br>
shmem_put4_f.c: In function `shmem_put4_f':
<br>
shmem_put4_f.c:30: warning: cast to pointer from integer of different size
<br>
shmem_put4_f.c:30: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_put4_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_put8_f.lo
<br>
shmem_put8_f.c: In function `shmem_put8_f':
<br>
shmem_put8_f.c:30: warning: cast to pointer from integer of different size
<br>
shmem_put8_f.c:30: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_put8_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_put32_f.lo
<br>
shmem_put32_f.c: In function `shmem_put32_f':
<br>
shmem_put32_f.c:30: warning: cast to pointer from integer of different size
<br>
shmem_put32_f.c:30: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_put32_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_put64_f.lo
<br>
shmem_put64_f.c: In function `shmem_put64_f':
<br>
shmem_put64_f.c:30: warning: cast to pointer from integer of different size
<br>
shmem_put64_f.c:30: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_put64_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_putmem_f.lo
<br>
shmem_putmem_f.c: In function `shmem_putmem_f':
<br>
shmem_putmem_f.c:30: warning: cast to pointer from integer of different size
<br>
shmem_putmem_f.c:30: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_putmem_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_complex_iput_f.lo
<br>
shmem_complex_iput_f.c: In function `shmem_complex_iput_f':
<br>
shmem_complex_iput_f.c:40: warning: cast to pointer from integer of different size
<br>
shmem_complex_iput_f.c:40: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_complex_iput_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_double_iput_f.lo
<br>
shmem_double_iput_f.c: In function `shmem_double_iput_f':
<br>
shmem_double_iput_f.c:40: warning: cast to pointer from integer of different size
<br>
shmem_double_iput_f.c:40: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_double_iput_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_integer_iput_f.lo
<br>
shmem_integer_iput_f.c: In function `shmem_integer_iput_f':
<br>
shmem_integer_iput_f.c:40: warning: cast to pointer from integer of different size
<br>
shmem_integer_iput_f.c:40: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_integer_iput_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_iput128_f.lo
<br>
shmem_iput128_f.c: In function `shmem_iput128_f':
<br>
shmem_iput128_f.c:37: warning: cast to pointer from integer of different size
<br>
shmem_iput128_f.c:37: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_iput128_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_iput32_f.lo
<br>
shmem_iput32_f.c: In function `shmem_iput32_f':
<br>
shmem_iput32_f.c:37: warning: cast to pointer from integer of different size
<br>
shmem_iput32_f.c:37: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_iput32_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_iput4_f.lo
<br>
shmem_iput4_f.c: In function `shmem_iput4_f':
<br>
shmem_iput4_f.c:37: warning: cast to pointer from integer of different size
<br>
shmem_iput4_f.c:37: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_iput4_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_iput64_f.lo
<br>
shmem_iput64_f.c: In function `shmem_iput64_f':
<br>
shmem_iput64_f.c:37: warning: cast to pointer from integer of different size
<br>
shmem_iput64_f.c:37: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_iput64_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_iput8_f.lo
<br>
shmem_iput8_f.c: In function `shmem_iput8_f':
<br>
shmem_iput8_f.c:37: warning: cast to pointer from integer of different size
<br>
shmem_iput8_f.c:37: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_iput8_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_logical_iput_f.lo
<br>
shmem_logical_iput_f.c: In function `shmem_logical_iput_f':
<br>
shmem_logical_iput_f.c:40: warning: cast to pointer from integer of different size
<br>
shmem_logical_iput_f.c:40: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_logical_iput_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_real_iput_f.lo
<br>
shmem_real_iput_f.c: In function `shmem_real_iput_f':
<br>
shmem_real_iput_f.c:40: warning: cast to pointer from integer of different size
<br>
shmem_real_iput_f.c:40: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_real_iput_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_character_get_f.lo
<br>
shmem_character_get_f.c: In function `shmem_character_get_f':
<br>
shmem_character_get_f.c:33: warning: cast to pointer from integer of different size
<br>
shmem_character_get_f.c:33: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_character_get_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_complex_get_f.lo
<br>
shmem_complex_get_f.c: In function `shmem_complex_get_f':
<br>
shmem_complex_get_f.c:33: warning: cast to pointer from integer of different size
<br>
shmem_complex_get_f.c:33: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_complex_get_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_double_get_f.lo
<br>
shmem_double_get_f.c: In function `shmem_double_get_f':
<br>
shmem_double_get_f.c:33: warning: cast to pointer from integer of different size
<br>
shmem_double_get_f.c:33: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_double_get_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_get128_f.lo
<br>
shmem_get128_f.c: In function `shmem_get128_f':
<br>
shmem_get128_f.c:29: warning: cast to pointer from integer of different size
<br>
shmem_get128_f.c:29: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_get128_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_get32_f.lo
<br>
shmem_get32_f.c: In function `shmem_get32_f':
<br>
shmem_get32_f.c:29: warning: cast to pointer from integer of different size
<br>
shmem_get32_f.c:29: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_get32_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_get4_f.lo
<br>
shmem_get4_f.c: In function `shmem_get4_f':
<br>
shmem_get4_f.c:29: warning: cast to pointer from integer of different size
<br>
shmem_get4_f.c:29: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_get4_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_get64_f.lo
<br>
shmem_get64_f.c: In function `shmem_get64_f':
<br>
shmem_get64_f.c:29: warning: cast to pointer from integer of different size
<br>
shmem_get64_f.c:29: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_get64_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_get8_f.lo
<br>
shmem_get8_f.c: In function `shmem_get8_f':
<br>
shmem_get8_f.c:29: warning: cast to pointer from integer of different size
<br>
shmem_get8_f.c:29: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_get8_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_getmem_f.lo
<br>
shmem_getmem_f.c: In function `shmem_getmem_f':
<br>
shmem_getmem_f.c:29: warning: cast to pointer from integer of different size
<br>
shmem_getmem_f.c:29: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_getmem_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_integer_get_f.lo
<br>
shmem_integer_get_f.c: In function `shmem_integer_get_f':
<br>
shmem_integer_get_f.c:33: warning: cast to pointer from integer of different size
<br>
shmem_integer_get_f.c:33: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_integer_get_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_logical_get_f.lo
<br>
shmem_logical_get_f.c: In function `shmem_logical_get_f':
<br>
shmem_logical_get_f.c:33: warning: cast to pointer from integer of different size
<br>
shmem_logical_get_f.c:33: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_logical_get_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_real_get_f.lo
<br>
shmem_real_get_f.c: In function `shmem_real_get_f':
<br>
shmem_real_get_f.c:33: warning: cast to pointer from integer of different size
<br>
shmem_real_get_f.c:33: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_real_get_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_complex_iget_f.lo
<br>
shmem_complex_iget_f.c: In function `shmem_complex_iget_f':
<br>
shmem_complex_iget_f.c:40: warning: cast to pointer from integer of different size
<br>
shmem_complex_iget_f.c:40: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_complex_iget_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_double_iget_f.lo
<br>
shmem_double_iget_f.c: In function `shmem_double_iget_f':
<br>
shmem_double_iget_f.c:40: warning: cast to pointer from integer of different size
<br>
shmem_double_iget_f.c:40: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_double_iget_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_iget128_f.lo
<br>
shmem_iget128_f.c: In function `shmem_iget128_f':
<br>
shmem_iget128_f.c:37: warning: cast to pointer from integer of different size
<br>
shmem_iget128_f.c:37: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_iget128_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_iget32_f.lo
<br>
shmem_iget32_f.c: In function `shmem_iget32_f':
<br>
shmem_iget32_f.c:37: warning: cast to pointer from integer of different size
<br>
shmem_iget32_f.c:37: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_iget32_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_iget4_f.lo
<br>
shmem_iget4_f.c: In function `shmem_iget4_f':
<br>
shmem_iget4_f.c:37: warning: cast to pointer from integer of different size
<br>
shmem_iget4_f.c:37: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_iget4_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_iget64_f.lo
<br>
shmem_iget64_f.c: In function `shmem_iget64_f':
<br>
shmem_iget64_f.c:37: warning: cast to pointer from integer of different size
<br>
shmem_iget64_f.c:37: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_iget64_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_iget8_f.lo
<br>
shmem_iget8_f.c: In function `shmem_iget8_f':
<br>
shmem_iget8_f.c:37: warning: cast to pointer from integer of different size
<br>
shmem_iget8_f.c:37: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_iget8_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_integer_iget_f.lo
<br>
shmem_integer_iget_f.c: In function `shmem_integer_iget_f':
<br>
shmem_integer_iget_f.c:40: warning: cast to pointer from integer of different size
<br>
shmem_integer_iget_f.c:40: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_integer_iget_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_logical_iget_f.lo
<br>
shmem_logical_iget_f.c: In function `shmem_logical_iget_f':
<br>
shmem_logical_iget_f.c:40: warning: cast to pointer from integer of different size
<br>
shmem_logical_iget_f.c:40: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_logical_iget_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_real_iget_f.lo
<br>
shmem_real_iget_f.c: In function `shmem_real_iget_f':
<br>
shmem_real_iget_f.c:40: warning: cast to pointer from integer of different size
<br>
shmem_real_iget_f.c:40: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_real_iget_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_swap_f.lo
<br>
shmem_swap_f.c: In function `shmem_swap_f':
<br>
shmem_swap_f.c:34: warning: cast to pointer from integer of different size
<br>
shmem_swap_f.c:34: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_swap_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int4_swap_f.lo
<br>
shmem_int4_swap_f.c: In function `shmem_int4_swap_f':
<br>
shmem_int4_swap_f.c:32: warning: cast to pointer from integer of different size
<br>
shmem_int4_swap_f.c:32: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_int4_swap_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int8_swap_f.lo
<br>
shmem_int8_swap_f.c: In function `shmem_int8_swap_f':
<br>
shmem_int8_swap_f.c:32: warning: cast to pointer from integer of different size
<br>
shmem_int8_swap_f.c:32: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_int8_swap_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_real4_swap_f.lo
<br>
shmem_real4_swap_f.c: In function `shmem_real4_swap_f':
<br>
shmem_real4_swap_f.c:32: warning: cast to pointer from integer of different size
<br>
shmem_real4_swap_f.c:32: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_real4_swap_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_real8_swap_f.lo
<br>
shmem_real8_swap_f.c: In function `shmem_real8_swap_f':
<br>
shmem_real8_swap_f.c:32: warning: cast to pointer from integer of different size
<br>
shmem_real8_swap_f.c:32: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_real8_swap_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int4_cswap_f.lo
<br>
shmem_int4_cswap_f.c: In function `shmem_int4_cswap_f':
<br>
shmem_int4_cswap_f.c:32: warning: cast to pointer from integer of different size
<br>
shmem_int4_cswap_f.c:32: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_int4_cswap_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int8_cswap_f.lo
<br>
shmem_int8_cswap_f.c: In function `shmem_int8_cswap_f':
<br>
shmem_int8_cswap_f.c:32: warning: cast to pointer from integer of different size
<br>
shmem_int8_cswap_f.c:32: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_int8_cswap_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int4_fadd_f.lo
<br>
shmem_int4_fadd_f.c: In function `shmem_int4_fadd_f':
<br>
shmem_int4_fadd_f.c:34: warning: cast to pointer from integer of different size
<br>
shmem_int4_fadd_f.c:34: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_int4_fadd_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int8_fadd_f.lo
<br>
shmem_int8_fadd_f.c: In function `shmem_int8_fadd_f':
<br>
shmem_int8_fadd_f.c:34: warning: cast to pointer from integer of different size
<br>
shmem_int8_fadd_f.c:34: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_int8_fadd_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int4_finc_f.lo
<br>
shmem_int4_finc_f.c: In function `shmem_int4_finc_f':
<br>
shmem_int4_finc_f.c:35: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_int4_finc_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int8_finc_f.lo
<br>
shmem_int8_finc_f.c: In function `shmem_int8_finc_f':
<br>
shmem_int8_finc_f.c:35: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_int8_finc_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int4_add_f.lo
<br>
shmem_int4_add_f.c: In function `shmem_int4_add_f':
<br>
shmem_int4_add_f.c:34: warning: cast to pointer from integer of different size
<br>
shmem_int4_add_f.c:34: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_int4_add_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int8_add_f.lo
<br>
shmem_int8_add_f.c: In function `shmem_int8_add_f':
<br>
shmem_int8_add_f.c:34: warning: cast to pointer from integer of different size
<br>
shmem_int8_add_f.c:34: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_int8_add_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int4_wait_f.lo
<br>
&nbsp;&nbsp;CC     shmem_int8_wait_f.lo
<br>
&nbsp;&nbsp;CC     shmem_wait_f.lo
<br>
&nbsp;&nbsp;CC     shmem_int4_wait_until_f.lo
<br>
&nbsp;&nbsp;CC     shmem_int8_wait_until_f.lo
<br>
&nbsp;&nbsp;CC     shmem_wait_until_f.lo
<br>
&nbsp;&nbsp;CC     shmem_barrier_f.lo
<br>
shmem_barrier_f.c: In function `shmem_barrier_f':
<br>
shmem_barrier_f.c:28: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_barrier_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_and_to_all_f.lo
<br>
shmem_and_to_all_f.c: In function `shmem_int4_and_to_all_f':
<br>
shmem_and_to_all_f.c:100: warning: cast to pointer from integer of different size
<br>
shmem_and_to_all_f.c:100: warning: cast to pointer from integer of different size
<br>
shmem_and_to_all_f.c:100: warning: cast to pointer from integer of different size
<br>
shmem_and_to_all_f.c:100: warning: cast to pointer from integer of different size
<br>
shmem_and_to_all_f.c: In function `shmem_int8_and_to_all_f':
<br>
shmem_and_to_all_f.c:101: warning: cast to pointer from integer of different size
<br>
shmem_and_to_all_f.c:101: warning: cast to pointer from integer of different size
<br>
shmem_and_to_all_f.c:101: warning: cast to pointer from integer of different size
<br>
shmem_and_to_all_f.c:101: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_and_to_all_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_or_to_all_f.lo
<br>
shmem_or_to_all_f.c: In function `shmem_int4_or_to_all_f':
<br>
shmem_or_to_all_f.c:97: warning: cast to pointer from integer of different size
<br>
shmem_or_to_all_f.c:97: warning: cast to pointer from integer of different size
<br>
shmem_or_to_all_f.c:97: warning: cast to pointer from integer of different size
<br>
shmem_or_to_all_f.c:97: warning: cast to pointer from integer of different size
<br>
shmem_or_to_all_f.c: In function `shmem_int8_or_to_all_f':
<br>
shmem_or_to_all_f.c:98: warning: cast to pointer from integer of different size
<br>
shmem_or_to_all_f.c:98: warning: cast to pointer from integer of different size
<br>
shmem_or_to_all_f.c:98: warning: cast to pointer from integer of different size
<br>
shmem_or_to_all_f.c:98: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_or_to_all_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_xor_to_all_f.lo
<br>
shmem_xor_to_all_f.c: In function `shmem_int4_xor_to_all_f':
<br>
shmem_xor_to_all_f.c:99: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c:99: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c:99: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c:99: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c: In function `shmem_int8_xor_to_all_f':
<br>
shmem_xor_to_all_f.c:100: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c:100: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c:100: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c:100: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c: In function `shmem_comp4_xor_to_all_f':
<br>
shmem_xor_to_all_f.c:101: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c:101: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c:101: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c:101: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c: In function `shmem_comp8_xor_to_all_f':
<br>
shmem_xor_to_all_f.c:102: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c:102: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c:102: warning: cast to pointer from integer of different size
<br>
shmem_xor_to_all_f.c:102: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_xor_to_all_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_max_to_all_f.lo
<br>
shmem_max_to_all_f.c: In function `shmem_int4_max_to_all_f':
<br>
shmem_max_to_all_f.c:121: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:121: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:121: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:121: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c: In function `shmem_int8_max_to_all_f':
<br>
shmem_max_to_all_f.c:122: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:122: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:122: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:122: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c: In function `shmem_real4_max_to_all_f':
<br>
shmem_max_to_all_f.c:123: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:123: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:123: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:123: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c: In function `shmem_real8_max_to_all_f':
<br>
shmem_max_to_all_f.c:124: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:124: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:124: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:124: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c: In function `shmem_real16_max_to_all_f':
<br>
shmem_max_to_all_f.c:125: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:125: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:125: warning: cast to pointer from integer of different size
<br>
shmem_max_to_all_f.c:125: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_max_to_all_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_min_to_all_f.lo
<br>
shmem_min_to_all_f.c: In function `shmem_int4_min_to_all_f':
<br>
shmem_min_to_all_f.c:113: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:113: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:113: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:113: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c: In function `shmem_int8_min_to_all_f':
<br>
shmem_min_to_all_f.c:114: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:114: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:114: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:114: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c: In function `shmem_real4_min_to_all_f':
<br>
shmem_min_to_all_f.c:115: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:115: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:115: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:115: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c: In function `shmem_real8_min_to_all_f':
<br>
shmem_min_to_all_f.c:116: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:116: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:116: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:116: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c: In function `shmem_real16_min_to_all_f':
<br>
shmem_min_to_all_f.c:117: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:117: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:117: warning: cast to pointer from integer of different size
<br>
shmem_min_to_all_f.c:117: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_min_to_all_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_sum_to_all_f.lo
<br>
shmem_sum_to_all_f.c: In function `shmem_int4_sum_to_all_f':
<br>
shmem_sum_to_all_f.c:113: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:113: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:113: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:113: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c: In function `shmem_int8_sum_to_all_f':
<br>
shmem_sum_to_all_f.c:114: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:114: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:114: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:114: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c: In function `shmem_real4_sum_to_all_f':
<br>
shmem_sum_to_all_f.c:115: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:115: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:115: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:115: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c: In function `shmem_real8_sum_to_all_f':
<br>
shmem_sum_to_all_f.c:116: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:116: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:116: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:116: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c: In function `shmem_real16_sum_to_all_f':
<br>
shmem_sum_to_all_f.c:117: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:117: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:117: warning: cast to pointer from integer of different size
<br>
shmem_sum_to_all_f.c:117: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_sum_to_all_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_prod_to_all_f.lo
<br>
shmem_prod_to_all_f.c: In function `shmem_int4_prod_to_all_f':
<br>
shmem_prod_to_all_f.c:113: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:113: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:113: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:113: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c: In function `shmem_int8_prod_to_all_f':
<br>
shmem_prod_to_all_f.c:114: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:114: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:114: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:114: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c: In function `shmem_real4_prod_to_all_f':
<br>
shmem_prod_to_all_f.c:115: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:115: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:115: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:115: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c: In function `shmem_real8_prod_to_all_f':
<br>
shmem_prod_to_all_f.c:116: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:116: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:116: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:116: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c: In function `shmem_real16_prod_to_all_f':
<br>
shmem_prod_to_all_f.c:117: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:117: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:117: warning: cast to pointer from integer of different size
<br>
shmem_prod_to_all_f.c:117: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_prod_to_all_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_collect_f.lo
<br>
shmem_collect_f.c: In function `shmem_collect4_f':
<br>
shmem_collect_f.c:143: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:143: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:143: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c: In function `shmem_collect8_f':
<br>
shmem_collect_f.c:144: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:144: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:144: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c: In function `shmem_collect32_f':
<br>
shmem_collect_f.c:145: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:145: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:145: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c: In function `shmem_collect64_f':
<br>
shmem_collect_f.c:146: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:146: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:146: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c: In function `shmem_fcollect4_f':
<br>
shmem_collect_f.c:147: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:147: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:147: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c: In function `shmem_fcollect8_f':
<br>
shmem_collect_f.c:148: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:148: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:148: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c: In function `shmem_fcollect32_f':
<br>
shmem_collect_f.c:149: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:149: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:149: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c: In function `shmem_fcollect64_f':
<br>
shmem_collect_f.c:150: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:150: warning: cast to pointer from integer of different size
<br>
shmem_collect_f.c:150: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_collect_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_broadcast_f.lo
<br>
shmem_broadcast_f.c: In function `shmem_broadcast4_f':
<br>
shmem_broadcast_f.c:124: warning: cast to pointer from integer of different size
<br>
shmem_broadcast_f.c:124: warning: cast to pointer from integer of different size
<br>
shmem_broadcast_f.c:124: warning: cast to pointer from integer of different size
<br>
shmem_broadcast_f.c: In function `shmem_broadcast8_f':
<br>
shmem_broadcast_f.c:125: warning: cast to pointer from integer of different size
<br>
shmem_broadcast_f.c:125: warning: cast to pointer from integer of different size
<br>
shmem_broadcast_f.c:125: warning: cast to pointer from integer of different size
<br>
shmem_broadcast_f.c: In function `shmem_broadcast32_f':
<br>
shmem_broadcast_f.c:126: warning: cast to pointer from integer of different size
<br>
shmem_broadcast_f.c:126: warning: cast to pointer from integer of different size
<br>
shmem_broadcast_f.c:126: warning: cast to pointer from integer of different size
<br>
shmem_broadcast_f.c: In function `shmem_broadcast64_f':
<br>
shmem_broadcast_f.c:127: warning: cast to pointer from integer of different size
<br>
shmem_broadcast_f.c:127: warning: cast to pointer from integer of different size
<br>
shmem_broadcast_f.c:127: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_broadcast_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_lock_f.lo
<br>
shmem_lock_f.c: In function `shmem_set_lock_f':
<br>
shmem_lock_f.c:44: warning: cast to pointer from integer of different size
<br>
shmem_lock_f.c: In function `shmem_clear_lock_f':
<br>
shmem_lock_f.c:49: warning: cast to pointer from integer of different size
<br>
shmem_lock_f.c: In function `shmem_test_lock_f':
<br>
shmem_lock_f.c:54: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_lock_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_cache_f.lo
<br>
shmem_cache_f.c: In function `shmem_set_cache_line_inv_f':
<br>
shmem_cache_f.c:72: warning: cast to pointer from integer of different size
<br>
shmem_cache_f.c: In function `shmem_clear_cache_line_inv_f':
<br>
shmem_cache_f.c:82: warning: cast to pointer from integer of different size
<br>
shmem_cache_f.c: In function `shmem_udcflush_line_f':
<br>
shmem_cache_f.c:92: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_cache_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int4_inc_f.lo
<br>
shmem_int4_inc_f.c: In function `shmem_int4_inc_f':
<br>
shmem_int4_inc_f.c:35: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_int4_inc_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_int8_inc_f.lo
<br>
shmem_int8_inc_f.c: In function `shmem_int8_inc_f':
<br>
shmem_int8_inc_f.c:35: warning: cast to pointer from integer of different size
<br>
make: *** [shmem_int8_inc_f.lo] Error 1
<br>
&nbsp;&nbsp;CC     shmem_quiet_f.lo
<br>
&nbsp;&nbsp;CC     shmem_fence_f.lo
<br>
make: Target `all' not remade because of errors.
<br>
[14:04] eddie:~/svn/ompi/oshmem/shmem/f77 % 
<br>
-----
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12894.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem build failures"</a>
<li><strong>Previous message:</strong> <a href="12892.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12894.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem build failures"</a>
<li><strong>Reply:</strong> <a href="12894.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem build failures"</a>
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
