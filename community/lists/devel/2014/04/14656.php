<?
$subject_val = "Re: [OMPI devel] OSHMEM svn ignores missing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 23:42:01 2014" -->
<!-- isoreceived="20140430034201" -->
<!-- sent="Wed, 30 Apr 2014 06:41:58 +0300" -->
<!-- isosent="20140430034158" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OSHMEM svn ignores missing" -->
<!-- id="CAAO1KyaeB8ZbG+ZXSEDU25Jb3AJFkgULsV2EpkwywnmdH4hPvQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F8461AEC-DFBB-4D71-BA52-D995E0CB5626_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OSHMEM svn ignores missing<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-29 23:41:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14657.php">Gilles Gouaillardet: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>Previous message:</strong> <a href="14655.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>In reply to:</strong> <a href="14654.php">Ralph Castain: "[OMPI devel] OSHMEM svn ignores missing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks
<br>
<p>fixed in r31562
<br>
<p><p>On Wed, Apr 30, 2014 at 3:50 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_pe_accessible_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_iget128_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int4_add_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int8_add_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_prod_to_all_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int8_fadd_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_real8_swap_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_iput4_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_put_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_iput8_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_iget4_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_min_to_all_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_fence_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_iget8_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_real_get_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_addr_accessible_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int8_wait_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshpdeallc_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshpclmove_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_get128_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_logical_iput_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int8_swap_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_iput128_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_getmem_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_barrier_all_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_integer_put_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_barrier_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_quiet_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_and_to_all_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_integer_iput_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_complex_put_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_iget64_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int4_finc_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pmy_pe_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_logical_iget_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_iput64_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_integer_get_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_iget32_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_cache_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_put128_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_integer_iget_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_ptr_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_complex_get_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_putmem_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_double_iput_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshpalloc_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pnum_pes_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int8_wait_until_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_iput32_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_lock_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_put4_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int4_fadd_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_sum_to_all_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_put8_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_real4_swap_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_logical_put_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_xor_to_all_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_get4_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_get8_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_complex_iput_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_double_iget_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_get64_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int4_wait_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int4_swap_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_logical_get_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pstart_pes_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_wait_until_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_complex_iget_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_put64_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_character_put_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_get32_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_real_iput_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_collect_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_double_put_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int4_inc_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int8_inc_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_put32_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_max_to_all_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int8_finc_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_character_get_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_real_iget_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_broadcast_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_wait_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_double_get_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_swap_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_or_to_all_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int4_cswap_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_real_put_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int4_wait_until_f.c
</span><br>
<span class="quotelev1">&gt; ?       oshmem/shmem/fortran/profile/pshmem_int8_cswap_f.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14654.php">http://www.open-mpi.org/community/lists/devel/2014/04/14654.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14656/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14657.php">Gilles Gouaillardet: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>Previous message:</strong> <a href="14655.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>In reply to:</strong> <a href="14654.php">Ralph Castain: "[OMPI devel] OSHMEM svn ignores missing"</a>
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
