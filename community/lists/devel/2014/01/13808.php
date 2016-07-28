<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 23:40:44 2014" -->
<!-- isoreceived="20140118044044" -->
<!-- sent="Fri, 17 Jan 2014 20:40:42 -0800" -->
<!-- isosent="20140118044042" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32" -->
<!-- id="CAAvDA17HKe+0ebNunB87zzb1WaC6Ni+EeJ-5S58ojKCihRjitg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16ozAaRRSo3k8rHwvw6_VUCGW6ey8Z1h+pLRUVXGgKnQQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-01-17 23:40:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13809.php">Paul Hargrove: "[OMPI devel] gcc sync atomics broken in 1.7"</a>
<li><strong>Previous message:</strong> <a href="13807.php">Paul Hargrove: "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<li><strong>In reply to:</strong> <a href="13806.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, the good news is that the trunk builds fine on ppc32.
<br>
So, I suspect there is a fix that needs a CMR.
<br>
I'll poke around a bit, to see if I can locate the necessary changes.
<br>
<p>My mips32 system is slow, but I am hoping for similar results on trunk.
<br>
<p>-Paul
<br>
<p><p>On Fri, Jan 17, 2014 at 7:49 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yup, gcc on ppc32 (one nightly later, btw) fails just as mips32 did:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-ppc32/BLD/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt;   CXX      mpicxx.lo
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-ppc32/openmpi-1.7.4rc2r30318/opal/class/opal_pointer_array.h:37,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-ppc32/openmpi-1.7.4rc2r30318/ompi/errhandler/errhandler.h:32,
</span><br>
<span class="quotelev1">&gt;                  from
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-ppc32/openmpi-1.7.4rc2r30318/ompi/mpi/cxx/mpicxx.cc:37:
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-ppc32/openmpi-1.7.4rc2r30318/opal/threads/mutex.h:
</span><br>
<span class="quotelev1">&gt; In function 'int64_t OPAL_THREAD_ADD64(volatile int64_t*, int)':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-ppc32/openmpi-1.7.4rc2r30318/opal/threads/mutex.h:292:
</span><br>
<span class="quotelev1">&gt; error: 'opal_atomic_add_64' was not declared in this scope
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpicxx.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 17, 2014 at 7:00 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Trying to build 1.7.4rc2r30303 with gcc on linux/mips32 yields the
</span><br>
<span class="quotelev2">&gt;&gt; following failure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   CXX      mpicxx.lo
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/ompi/mpi/cxx/mpicxx.cc:31:2:
</span><br>
<span class="quotelev2">&gt;&gt; warning: #ident is a deprecated GCC extension
</span><br>
<span class="quotelev2">&gt;&gt; In file included from
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/opal/class/opal_pointer_array.h:37,
</span><br>
<span class="quotelev2">&gt;&gt;                  from
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/ompi/errhandler/errhandler.h:32,
</span><br>
<span class="quotelev2">&gt;&gt;                  from
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/ompi/mpi/cxx/mpicxx.cc:37:
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/opal/threads/mutex.h:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'int64_t OPAL_THREAD_ADD64(volatile int64_t*, int)':
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/opal/threads/mutex.h:292:
</span><br>
<span class="quotelev2">&gt;&gt; error: 'opal_atomic_add_64' was not declared in this scope
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks VERY similar to the problem I reported recently w/ xlc on
</span><br>
<span class="quotelev2">&gt;&gt; ppc32 ( <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13801.php">http://www.open-mpi.org/community/lists/devel/2014/01/13801.php</a> )
</span><br>
<span class="quotelev2">&gt;&gt; I am checking gcc on ppc32 now...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13808/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13809.php">Paul Hargrove: "[OMPI devel] gcc sync atomics broken in 1.7"</a>
<li><strong>Previous message:</strong> <a href="13807.php">Paul Hargrove: "Re: [OMPI devel] OSHMEM_SETUP_CFLAGS still not right"</a>
<li><strong>In reply to:</strong> <a href="13806.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: build failure on mips32 and ppc32"</a>
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
