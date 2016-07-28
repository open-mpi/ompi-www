<?
$subject_val = "[OMPI devel] Trunk is broken by PSHMEM commit";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 23:03:43 2014" -->
<!-- isoreceived="20140408030343" -->
<!-- sent="Mon, 7 Apr 2014 20:03:08 -0700" -->
<!-- isosent="20140408030308" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk is broken by PSHMEM commit" -->
<!-- id="E2ED40C3-066E-4765-AF4F-332DA9B06E80_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk is broken by PSHMEM commit<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 23:03:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14469.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>Previous message:</strong> <a href="14467.php">Ralph Castain: "Re: [OMPI devel] V1.8 Coverity scan results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14469.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>Reply:</strong> <a href="14469.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>Reply:</strong> <a href="14472.php">Mike Dubman: "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Linux, with oshmem enabled:
<br>
<p>pinit_f.c:26:2: warning: #ident is a GCC extension
<br>
pshmem_init.c:31: warning: no previous prototype for 'pstart_pes'
<br>
pshmem_align.c:25: warning: no previous prototype for 'pshmemalign'
<br>
pshmem_align.c: In function 'pshmemalign':
<br>
pshmem_align.c:42: error: implicit declaration of function 'pshmem_barrier_all'
<br>
pshmem_query.c:25: warning: no previous prototype for 'p_num_pes'
<br>
pshmem_query.c:31: warning: no previous prototype for 'p_my_pe'
<br>
pshmem_free.c:26: warning: no previous prototype for 'pshfree'
<br>
pshmem_free.c: In function 'pshfree':
<br>
pshmem_free.c:33: error: implicit declaration of function 'pshmem_barrier_all'
<br>
pshmem_alloc.c:25: warning: no previous prototype for 'pshmalloc'
<br>
make[3]: *** [pshmem_align.lo] Error 1
<br>
make[3]: *** Waiting for unfinished jobs....
<br>
pshmem_alloc.c: In function 'pshmalloc':
<br>
pshmem_alloc.c:42: error: implicit declaration of function 'pshmem_barrier_all'
<br>
make[3]: *** [pshmem_free.lo] Error 1
<br>
make[3]: *** [pshmem_alloc.lo] Error 1
<br>
pshmem_g.c:57: warning: no previous prototype for 'pshmem_short_g'
<br>
pshmem_g.c:58: warning: no previous prototype for 'pshmem_int_g'
<br>
pshmem_g.c:59: warning: no previous prototype for 'pshmem_long_g'
<br>
pshmem_g.c:60: warning: no previous prototype for 'pshmem_longlong_g'
<br>
pshmem_g.c:61: warning: no previous prototype for 'pshmem_float_g'
<br>
pshmem_g.c:62: warning: no previous prototype for 'pshmem_double_g'
<br>
pshmem_g.c:63: warning: no previous prototype for 'pshmem_longdouble_g'
<br>
pshmem_realloc.c:27: warning: no previous prototype for 'pshrealloc'
<br>
pshmem_realloc.c: In function 'pshrealloc':
<br>
pshmem_realloc.c:44: error: implicit declaration of function 'pshmem_barrier_all'
<br>
make[3]: *** [pshmem_realloc.lo] Error 1
<br>
pshmem_p.c:58: warning: no previous prototype for 'pshmem_short_p'
<br>
pshmem_p.c:59: warning: no previous prototype for 'pshmem_int_p'
<br>
pshmem_p.c:60: warning: no previous prototype for 'pshmem_long_p'
<br>
pshmem_p.c:61: warning: no previous prototype for 'pshmem_longlong_p'
<br>
pshmem_p.c:62: warning: no previous prototype for 'pshmem_float_p'
<br>
pshmem_p.c:63: warning: no previous prototype for 'pshmem_double_p'
<br>
pshmem_get.c:58: warning: no previous prototype for 'pshmem_char_get'
<br>
pshmem_p.c:64: warning: no previous prototype for 'pshmem_longdouble_p'
<br>
pshmem_get.c:59: warning: no previous prototype for 'pshmem_short_get'
<br>
pshmem_get.c:60: warning: no previous prototype for 'pshmem_int_get'
<br>
pshmem_get.c:61: warning: no previous prototype for 'pshmem_long_get'
<br>
pshmem_get.c:62: warning: no previous prototype for 'pshmem_longlong_get'
<br>
pshmem_get.c:63: warning: no previous prototype for 'pshmem_float_get'
<br>
pshmem_get.c:64: warning: no previous prototype for 'pshmem_double_get'
<br>
pshmem_get.c:65: warning: no previous prototype for 'pshmem_longdouble_get'
<br>
pshmem_get.c:95: warning: no previous prototype for 'pshmem_getmem'
<br>
pshmem_get.c:96: warning: no previous prototype for 'pshmem_get32'
<br>
pshmem_get.c:97: warning: no previous prototype for 'pshmem_get64'
<br>
pshmem_get.c:98: warning: no previous prototype for 'pshmem_get128'
<br>
pshmem_put.c:61: warning: no previous prototype for 'pshmem_char_put'
<br>
pshmem_put.c:62: warning: no previous prototype for 'pshmem_short_put'
<br>
pshmem_put.c:63: warning: no previous prototype for 'pshmem_int_put'
<br>
pshmem_put.c:64: warning: no previous prototype for 'pshmem_long_put'
<br>
pshmem_put.c:65: warning: no previous prototype for 'pshmem_longlong_put'
<br>
pshmem_put.c:66: warning: no previous prototype for 'pshmem_float_put'
<br>
pshmem_put.c:67: warning: no previous prototype for 'pshmem_double_put'
<br>
pshmem_put.c:68: warning: no previous prototype for 'pshmem_longdouble_put'
<br>
pshmem_put.c:98: warning: no previous prototype for 'pshmem_putmem'
<br>
pshmem_put.c:99: warning: no previous prototype for 'pshmem_put32'
<br>
pshmem_put.c:100: warning: no previous prototype for 'pshmem_put64'
<br>
pshmem_put.c:101: warning: no previous prototype for 'pshmem_put128'
<br>
pshmem_broadcast.c:116: warning: no previous prototype for 'pshmem_broadcast32'
<br>
pshmem_broadcast.c:117: warning: no previous prototype for 'pshmem_broadcast64'
<br>
pshmem_broadcast.c:118: warning: no previous prototype for 'pshmem_broadcast'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14468/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14469.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>Previous message:</strong> <a href="14467.php">Ralph Castain: "Re: [OMPI devel] V1.8 Coverity scan results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14469.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>Reply:</strong> <a href="14469.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>Reply:</strong> <a href="14472.php">Mike Dubman: "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
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
