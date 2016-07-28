<?
$subject_val = "Re: [OMPI devel] Trunk is broken by PSHMEM commit";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 06:52:33 2014" -->
<!-- isoreceived="20140408105233" -->
<!-- sent="Tue, 8 Apr 2014 13:52:31 +0300" -->
<!-- isosent="20140408105231" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken by PSHMEM commit" -->
<!-- id="CAAO1Kya6i7ufPXDz47N6Fx=WqE+qOTcUqBG1j+G9m=46Kzs79Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 06:52:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>Previous message:</strong> <a href="14471.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] bitbucket mirror out of date"</a>
<li><strong>In reply to:</strong> <a href="14468.php">Ralph Castain: "[OMPI devel] Trunk is broken by PSHMEM commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>Reply:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks
<br>
fixed here: r31334
<br>
<p><p>On Tue, Apr 8, 2014 at 6:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; pshmem_align.c:42: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; 'pshmem_barrier_all'
</span><br>
<span class="quotelev1">&gt; pshmem_query.c:25: warning: no previous prototype for 'p_num_pes'
</span><br>
<span class="quotelev1">&gt; pshmem_query.c:31: warning: no previous prototype for 'p_my_pe'
</span><br>
<span class="quotelev1">&gt; pshmem_free.c:26: warning: no previous prototype for 'pshfree'
</span><br>
<span class="quotelev1">&gt; pshmem_free.c: In function 'pshfree':
</span><br>
<span class="quotelev1">&gt; pshmem_free.c:33: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; 'pshmem_barrier_all'
</span><br>
<span class="quotelev1">&gt; pshmem_alloc.c:25: warning: no previous prototype for 'pshmalloc'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [pshmem_align.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; pshmem_alloc.c: In function 'pshmalloc':
</span><br>
<span class="quotelev1">&gt; pshmem_alloc.c:42: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; 'pshmem_barrier_all'
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
<span class="quotelev1">&gt; pshmem_realloc.c:44: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; 'pshmem_barrier_all'
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
<span class="quotelev1">&gt; pshmem_broadcast.c:116: warning: no previous prototype for
</span><br>
<span class="quotelev1">&gt; 'pshmem_broadcast32'
</span><br>
<span class="quotelev1">&gt; pshmem_broadcast.c:117: warning: no previous prototype for
</span><br>
<span class="quotelev1">&gt; 'pshmem_broadcast64'
</span><br>
<span class="quotelev1">&gt; pshmem_broadcast.c:118: warning: no previous prototype for
</span><br>
<span class="quotelev1">&gt; 'pshmem_broadcast'
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14468.php">http://www.open-mpi.org/community/lists/devel/2014/04/14468.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14472/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>Previous message:</strong> <a href="14471.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] bitbucket mirror out of date"</a>
<li><strong>In reply to:</strong> <a href="14468.php">Ralph Castain: "[OMPI devel] Trunk is broken by PSHMEM commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
<li><strong>Reply:</strong> <a href="14473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk is broken by PSHMEM commit"</a>
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
