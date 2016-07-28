<?
$subject_val = "Re: [OMPI devel] Trunk is broken by PSHMEM commit";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 23:36:58 2014" -->
<!-- isoreceived="20140408033658" -->
<!-- sent="Mon, 7 Apr 2014 20:36:23 -0700" -->
<!-- isosent="20140408033623" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken by PSHMEM commit" -->
<!-- id="816B7677-0BE7-4EEE-8858-44944D1C3016_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E2ED40C3-066E-4765-AF4F-332DA9B06E80_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk is broken by PSHMEM commit<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 23:36:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14470.php">Guillaume Papauré: "[OMPI devel] bitbucket mirror out of date"</a>
<li><strong>Previous message:</strong> <a href="14468.php">Ralph Castain: "[OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>In reply to:</strong> <a href="14468.php">Ralph Castain: "[OMPI devel] Trunk is broken by PSHMEM commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14472.php">Mike Dubman: "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And the svn ignore properties are missing:
<br>
<p>?       oshmem/shmem/c/profile/pshmem_addr_accessible.c
<br>
?       oshmem/shmem/c/profile/pshmem_clear_lock.c
<br>
?       oshmem/shmem/c/profile/pshmem_set_cache_line_inv.c
<br>
?       oshmem/shmem/c/profile/pshmem_broadcast.c
<br>
?       oshmem/shmem/c/profile/pshmem_wait.c
<br>
?       oshmem/shmem/c/profile/pshmem_swap.c
<br>
?       oshmem/shmem/c/profile/pshmem_get.c
<br>
?       oshmem/shmem/c/profile/pshmem_free.c
<br>
?       oshmem/shmem/c/profile/pshmem_collect.c
<br>
?       oshmem/shmem/c/profile/pshmem_quiet.c
<br>
?       oshmem/shmem/c/profile/pshmem_add.c
<br>
?       oshmem/shmem/c/profile/pshmem_align.c
<br>
?       oshmem/shmem/c/profile/pshmem_p.c
<br>
?       oshmem/shmem/c/profile/pshmem_reduce.c
<br>
?       oshmem/shmem/c/profile/pshmem_put.c
<br>
?       oshmem/shmem/c/profile/pshmem_inc.c
<br>
?       oshmem/shmem/c/profile/pshmem_fence.c
<br>
?       oshmem/shmem/c/profile/pshmem_clear_cache_inv.c
<br>
?       oshmem/shmem/c/profile/pshmem_test_lock.c
<br>
?       oshmem/shmem/c/profile/pshmem_iget.c
<br>
?       oshmem/shmem/c/profile/pshmem_set_cache_inv.c
<br>
?       oshmem/shmem/c/profile/pshmem_init.c
<br>
?       oshmem/shmem/c/profile/pshmem_query.c
<br>
?       oshmem/shmem/c/profile/pshmem_ptr.c
<br>
?       oshmem/shmem/c/profile/pshmem_udcflush.c
<br>
?       oshmem/shmem/c/profile/pshmem_cswap.c
<br>
?       oshmem/shmem/c/profile/pshmem_pe_accessible.c
<br>
?       oshmem/shmem/c/profile/pshmem_realloc.c
<br>
?       oshmem/shmem/c/profile/pshmem_iput.c
<br>
?       oshmem/shmem/c/profile/pshmem_barrier.c
<br>
?       oshmem/shmem/c/profile/pshmem_g.c
<br>
?       oshmem/shmem/c/profile/pshmem_alloc.c
<br>
?       oshmem/shmem/c/profile/pshmem_clear_cache_line_inv.c
<br>
?       oshmem/shmem/c/profile/pshmem_fadd.c
<br>
?       oshmem/shmem/c/profile/pshmem_set_lock.c
<br>
?       oshmem/shmem/c/profile/pshmem_finc.c
<br>
?       oshmem/shmem/c/profile/pshmem_udcflush_line.c
<br>
<p><p>On Apr 7, 2014, at 8:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Linux, with oshmem enabled:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pinit_f.c:26:2: warning: #ident is a GCC extension
</span><br>
<span class="quotelev1">&gt; pshmem_init.c:31: warning: no previous prototype for 'pstart_pes'
</span><br>
<span class="quotelev1">&gt; pshmem_align.c:25: warning: no previous prototype for 'pshmemalign'
</span><br>
<span class="quotelev1">&gt; pshmem_align.c: In function 'pshmemalign':
</span><br>
<span class="quotelev1">&gt; pshmem_align.c:42: error: implicit declaration of function 'pshmem_barrier_all'
</span><br>
<span class="quotelev1">&gt; pshmem_query.c:25: warning: no previous prototype for 'p_num_pes'
</span><br>
<span class="quotelev1">&gt; pshmem_query.c:31: warning: no previous prototype for 'p_my_pe'
</span><br>
<span class="quotelev1">&gt; pshmem_free.c:26: warning: no previous prototype for 'pshfree'
</span><br>
<span class="quotelev1">&gt; pshmem_free.c: In function 'pshfree':
</span><br>
<span class="quotelev1">&gt; pshmem_free.c:33: error: implicit declaration of function 'pshmem_barrier_all'
</span><br>
<span class="quotelev1">&gt; pshmem_alloc.c:25: warning: no previous prototype for 'pshmalloc'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [pshmem_align.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; pshmem_alloc.c: In function 'pshmalloc':
</span><br>
<span class="quotelev1">&gt; pshmem_alloc.c:42: error: implicit declaration of function 'pshmem_barrier_all'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [pshmem_free.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** [pshmem_alloc.lo] Error 1
</span><br>
<span class="quotelev1">&gt; pshmem_g.c:57: warning: no previous prototype for 'pshmem_short_g'
</span><br>
<span class="quotelev1">&gt; pshmem_g.c:58: warning: no previous prototype for 'pshmem_int_g'
</span><br>
<span class="quotelev1">&gt; pshmem_g.c:59: warning: no previous prototype for 'pshmem_long_g'
</span><br>
<span class="quotelev1">&gt; pshmem_g.c:60: warning: no previous prototype for 'pshmem_longlong_g'
</span><br>
<span class="quotelev1">&gt; pshmem_g.c:61: warning: no previous prototype for 'pshmem_float_g'
</span><br>
<span class="quotelev1">&gt; pshmem_g.c:62: warning: no previous prototype for 'pshmem_double_g'
</span><br>
<span class="quotelev1">&gt; pshmem_g.c:63: warning: no previous prototype for 'pshmem_longdouble_g'
</span><br>
<span class="quotelev1">&gt; pshmem_realloc.c:27: warning: no previous prototype for 'pshrealloc'
</span><br>
<span class="quotelev1">&gt; pshmem_realloc.c: In function 'pshrealloc':
</span><br>
<span class="quotelev1">&gt; pshmem_realloc.c:44: error: implicit declaration of function 'pshmem_barrier_all'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [pshmem_realloc.lo] Error 1
</span><br>
<span class="quotelev1">&gt; pshmem_p.c:58: warning: no previous prototype for 'pshmem_short_p'
</span><br>
<span class="quotelev1">&gt; pshmem_p.c:59: warning: no previous prototype for 'pshmem_int_p'
</span><br>
<span class="quotelev1">&gt; pshmem_p.c:60: warning: no previous prototype for 'pshmem_long_p'
</span><br>
<span class="quotelev1">&gt; pshmem_p.c:61: warning: no previous prototype for 'pshmem_longlong_p'
</span><br>
<span class="quotelev1">&gt; pshmem_p.c:62: warning: no previous prototype for 'pshmem_float_p'
</span><br>
<span class="quotelev1">&gt; pshmem_p.c:63: warning: no previous prototype for 'pshmem_double_p'
</span><br>
<span class="quotelev1">&gt; pshmem_get.c:58: warning: no previous prototype for 'pshmem_char_get'
</span><br>
<span class="quotelev1">&gt; pshmem_p.c:64: warning: no previous prototype for 'pshmem_longdouble_p'
</span><br>
<span class="quotelev1">&gt; pshmem_get.c:59: warning: no previous prototype for 'pshmem_short_get'
</span><br>
<span class="quotelev1">&gt; pshmem_get.c:60: warning: no previous prototype for 'pshmem_int_get'
</span><br>
<span class="quotelev1">&gt; pshmem_get.c:61: warning: no previous prototype for 'pshmem_long_get'
</span><br>
<span class="quotelev1">&gt; pshmem_get.c:62: warning: no previous prototype for 'pshmem_longlong_get'
</span><br>
<span class="quotelev1">&gt; pshmem_get.c:63: warning: no previous prototype for 'pshmem_float_get'
</span><br>
<span class="quotelev1">&gt; pshmem_get.c:64: warning: no previous prototype for 'pshmem_double_get'
</span><br>
<span class="quotelev1">&gt; pshmem_get.c:65: warning: no previous prototype for 'pshmem_longdouble_get'
</span><br>
<span class="quotelev1">&gt; pshmem_get.c:95: warning: no previous prototype for 'pshmem_getmem'
</span><br>
<span class="quotelev1">&gt; pshmem_get.c:96: warning: no previous prototype for 'pshmem_get32'
</span><br>
<span class="quotelev1">&gt; pshmem_get.c:97: warning: no previous prototype for 'pshmem_get64'
</span><br>
<span class="quotelev1">&gt; pshmem_get.c:98: warning: no previous prototype for 'pshmem_get128'
</span><br>
<span class="quotelev1">&gt; pshmem_put.c:61: warning: no previous prototype for 'pshmem_char_put'
</span><br>
<span class="quotelev1">&gt; pshmem_put.c:62: warning: no previous prototype for 'pshmem_short_put'
</span><br>
<span class="quotelev1">&gt; pshmem_put.c:63: warning: no previous prototype for 'pshmem_int_put'
</span><br>
<span class="quotelev1">&gt; pshmem_put.c:64: warning: no previous prototype for 'pshmem_long_put'
</span><br>
<span class="quotelev1">&gt; pshmem_put.c:65: warning: no previous prototype for 'pshmem_longlong_put'
</span><br>
<span class="quotelev1">&gt; pshmem_put.c:66: warning: no previous prototype for 'pshmem_float_put'
</span><br>
<span class="quotelev1">&gt; pshmem_put.c:67: warning: no previous prototype for 'pshmem_double_put'
</span><br>
<span class="quotelev1">&gt; pshmem_put.c:68: warning: no previous prototype for 'pshmem_longdouble_put'
</span><br>
<span class="quotelev1">&gt; pshmem_put.c:98: warning: no previous prototype for 'pshmem_putmem'
</span><br>
<span class="quotelev1">&gt; pshmem_put.c:99: warning: no previous prototype for 'pshmem_put32'
</span><br>
<span class="quotelev1">&gt; pshmem_put.c:100: warning: no previous prototype for 'pshmem_put64'
</span><br>
<span class="quotelev1">&gt; pshmem_put.c:101: warning: no previous prototype for 'pshmem_put128'
</span><br>
<span class="quotelev1">&gt; pshmem_broadcast.c:116: warning: no previous prototype for 'pshmem_broadcast32'
</span><br>
<span class="quotelev1">&gt; pshmem_broadcast.c:117: warning: no previous prototype for 'pshmem_broadcast64'
</span><br>
<span class="quotelev1">&gt; pshmem_broadcast.c:118: warning: no previous prototype for 'pshmem_broadcast'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14469/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14470.php">Guillaume Papauré: "[OMPI devel] bitbucket mirror out of date"</a>
<li><strong>Previous message:</strong> <a href="14468.php">Ralph Castain: "[OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>In reply to:</strong> <a href="14468.php">Ralph Castain: "[OMPI devel] Trunk is broken by PSHMEM commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14472.php">Mike Dubman: "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
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
