<?
$subject_val = "Re: [OMPI devel] query on atomic operations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  1 05:09:41 2016" -->
<!-- isoreceived="20160401090941" -->
<!-- sent="Fri, 1 Apr 2016 14:39:39 +0530" -->
<!-- isosent="20160401090939" -->
<!-- name="Sreenidhi Bharathkar Ramesh" -->
<!-- email="sreenidhi-bharathkar.ramesh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] query on atomic operations" -->
<!-- id="CANi1EtPedjkO728X=W2mdKeXbjpKzOcPEm6=xL4D08bOAMkuhA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CANi1EtPcMxr5B-3Bzw+5cFv7KEN865eY2oQXu-ncg7cLGxctkg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] query on atomic operations<br>
<strong>From:</strong> Sreenidhi Bharathkar Ramesh (<em>sreenidhi-bharathkar.ramesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-01 05:09:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18738.php">Nathan Hjelm: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18736.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18736.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18738.php">Nathan Hjelm: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>Reply:</strong> <a href="18738.php">Nathan Hjelm: "Re: [OMPI devel] query on atomic operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Sorry, typo in previous email.  Please read that as)
<br>
<p>I have another question: why is any given operation implemented twice for
<br>
the same architecture?
<br>
<p>Ref:  opal/asm/base/AMD64.asm and opal/include/opal/sys/amd64/atomic.h,
<br>
&nbsp;say function opal_atomic_cmpset_32()
<br>
<p>Thanks!
<br>
<p><p><p>On Fri, Apr 1, 2016 at 2:26 PM, Sreenidhi Bharathkar Ramesh &lt;
<br>
sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the response, I understand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have another question: why is any given operation implemented twice for
</span><br>
<span class="quotelev1">&gt; the same architecture?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ref:  opal/asm/base/ARM.asm and opal/include/opal/sys/amd64/atomic.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - Sreenidhi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 31, 2016 at 2:28 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sreenihdi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maintenance of the &quot;other&quot; files is, at least, required for older
</span><br>
<span class="quotelev2">&gt;&gt; compilers (including several non-GNU ones) which have support for GCC
</span><br>
<span class="quotelev2">&gt;&gt; inline ASM constructs but do not include the __sync functions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, the __sync functions always include a full memory fence
</span><br>
<span class="quotelev2">&gt;&gt; while there are places where Open MPI only needs Acquire or Release.  In
</span><br>
<span class="quotelev2">&gt;&gt; that sense the use of the GCC builtin atomics is not always an
</span><br>
<span class="quotelev2">&gt;&gt; &quot;optimization&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Mar 30, 2016 at 4:19 AM, Sreenidhi Bharathkar Ramesh &lt;
</span><br>
<span class="quotelev2">&gt;&gt; sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did few more experiments.  Built-in atomics are disabled by default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and can be enabled by &quot;--enable-builtin-atomics&quot;.  With this option, a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different atomic file is include  (I mean, different from the other three
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mentioned in the earlier email).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/include/opal/sys/sync_builtin/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  By enabling &quot;--enable-builtin-atomics&quot;, the OpenMPI library will not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only get the latest optimizations from GCC __sync functions, but also get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all additional functions, such as &lt;__sync_or_and_fetch&gt;  &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __sync_and_and_fetch&gt; etc.  Also, this way, the arch/*.asm files need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not be maintained.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seems there is more of an advantage to have &quot;--enable-builtin-atomics&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am I missing something ?  Please let me know your thoughts.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Sreenidhi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Mar 30, 2016 at 10:33 AM, Sreenidhi Bharathkar Ramesh &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With respect to atomic operations in assembly, I can see three source
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; files, for the same AMD64 architecture.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. opal/asm/base/AMD64.asm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. opal/include/opal/sys/amd64/atomic.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. opal/include/opal/sys/atomic_impl.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is the need for three files ?  How are they inter-related ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please let me know.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Sreenidhi.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18733.php">http://www.open-mpi.org/community/lists/devel/2016/03/18733.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18734.php">http://www.open-mpi.org/community/lists/devel/2016/03/18734.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18737/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18738.php">Nathan Hjelm: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18736.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18736.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18738.php">Nathan Hjelm: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>Reply:</strong> <a href="18738.php">Nathan Hjelm: "Re: [OMPI devel] query on atomic operations"</a>
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
