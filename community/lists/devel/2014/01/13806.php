<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 22:49:17 2014" -->
<!-- isoreceived="20140118034917" -->
<!-- sent="Fri, 17 Jan 2014 19:49:15 -0800" -->
<!-- isosent="20140118034915" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32" -->
<!-- id="CAAvDA16ozAaRRSo3k8rHwvw6_VUCGW6ey8Z1h+pLRUVXGgKnQQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] 1.7.4rc: build failure on mips32 and ppc32" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 22:49:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13807.php">Paul Hargrove: "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<li><strong>Previous message:</strong> <a href="13805.php">Ralph Castain: "Re: [OMPI devel] Compiler family probe broken [w/ patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13808.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32"</a>
<li><strong>Reply:</strong> <a href="13808.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yup, gcc on ppc32 (one nightly later, btw) fails just as mips32 did:
<br>
<p>make[2]: Entering directory
<br>
`/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-ppc32/BLD/ompi/mpi/cxx'
<br>
&nbsp;&nbsp;CXX      mpicxx.lo
<br>
In file included from
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-ppc32/openmpi-1.7.4rc2r30318/opal/class/opal_pointer_array.h:37,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-ppc32/openmpi-1.7.4rc2r30318/ompi/errhandler/errhandler.h:32,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-ppc32/openmpi-1.7.4rc2r30318/ompi/mpi/cxx/mpicxx.cc:37:
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-ppc32/openmpi-1.7.4rc2r30318/opal/threads/mutex.h:
<br>
In function 'int64_t OPAL_THREAD_ADD64(volatile int64_t*, int)':
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-ppc32/openmpi-1.7.4rc2r30318/opal/threads/mutex.h:292:
<br>
error: 'opal_atomic_add_64' was not declared in this scope
<br>
make[2]: *** [mpicxx.lo] Error 1
<br>
<p><p>-Paul
<br>
<p><p>On Fri, Jan 17, 2014 at 7:00 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Trying to build 1.7.4rc2r30303 with gcc on linux/mips32 yields the
</span><br>
<span class="quotelev1">&gt; following failure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CXX      mpicxx.lo
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/ompi/mpi/cxx/mpicxx.cc:31:2:
</span><br>
<span class="quotelev1">&gt; warning: #ident is a deprecated GCC extension
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/opal/class/opal_pointer_array.h:37,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/ompi/errhandler/errhandler.h:32,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/ompi/mpi/cxx/mpicxx.cc:37:
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/opal/threads/mutex.h:
</span><br>
<span class="quotelev1">&gt; In function 'int64_t OPAL_THREAD_ADD64(volatile int64_t*, int)':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/opal/threads/mutex.h:292:
</span><br>
<span class="quotelev1">&gt; error: 'opal_atomic_add_64' was not declared in this scope
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks VERY similar to the problem I reported recently w/ xlc on ppc32
</span><br>
<span class="quotelev1">&gt; ( <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13801.php">http://www.open-mpi.org/community/lists/devel/2014/01/13801.php</a> )
</span><br>
<span class="quotelev1">&gt; I am checking gcc on ppc32 now...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13806/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13807.php">Paul Hargrove: "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<li><strong>Previous message:</strong> <a href="13805.php">Ralph Castain: "Re: [OMPI devel] Compiler family probe broken [w/ patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13808.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32"</a>
<li><strong>Reply:</strong> <a href="13808.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32"</a>
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
