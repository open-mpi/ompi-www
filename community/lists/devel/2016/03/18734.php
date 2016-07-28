<?
$subject_val = "Re: [OMPI devel] query on atomic operations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 16:58:06 2016" -->
<!-- isoreceived="20160330205806" -->
<!-- sent="Wed, 30 Mar 2016 13:58:00 -0700" -->
<!-- isosent="20160330205800" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] query on atomic operations" -->
<!-- id="CAAvDA167foMc=6H0BLt8E-nBDoD82ZY0qKzTTXMSkS1faG+w1w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CANi1EtOYy4f1wMS581-v=dVwMBjEtQPPjuUWmJfAhL53JpkJkQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-30 16:58:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18735.php">Jeff Squyres (jsquyres): "[OMPI devel] Github FTW! (merging ompi and ompi-release)"</a>
<li><strong>Previous message:</strong> <a href="18733.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18733.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18736.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18736.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sreenihdi,
<br>
<p>Maintenance of the &quot;other&quot; files is, at least, required for older compilers
<br>
(including several non-GNU ones) which have support for GCC inline ASM
<br>
constructs but do not include the __sync functions.
<br>
<p>Additionally, the __sync functions always include a full memory fence while
<br>
there are places where Open MPI only needs Acquire or Release.  In that
<br>
sense the use of the GCC builtin atomics is not always an &quot;optimization&quot;.
<br>
<p>-Paul
<br>
<p>On Wed, Mar 30, 2016 at 4:19 AM, Sreenidhi Bharathkar Ramesh &lt;
<br>
sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did few more experiments.  Built-in atomics are disabled by default and
</span><br>
<span class="quotelev1">&gt; can be enabled by &quot;--enable-builtin-atomics&quot;.  With this option, a
</span><br>
<span class="quotelev1">&gt; different atomic file is include  (I mean, different from the other three
</span><br>
<span class="quotelev1">&gt; mentioned in the earlier email).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal/include/opal/sys/sync_builtin/atomic.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  By enabling &quot;--enable-builtin-atomics&quot;, the OpenMPI library will not only
</span><br>
<span class="quotelev1">&gt; get the latest optimizations from GCC __sync functions, but also get all
</span><br>
<span class="quotelev1">&gt; additional functions, such as &lt;__sync_or_and_fetch&gt;  &lt;__sync_and_and_fetch&gt;
</span><br>
<span class="quotelev1">&gt; etc.  Also, this way, the arch/*.asm files need not be maintained.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems there is more of an advantage to have &quot;--enable-builtin-atomics&quot;.
</span><br>
<span class="quotelev1">&gt; Am I missing something ?  Please let me know your thoughts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - Sreenidhi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 30, 2016 at 10:33 AM, Sreenidhi Bharathkar Ramesh &lt;
</span><br>
<span class="quotelev1">&gt; sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With respect to atomic operations in assembly, I can see three source
</span><br>
<span class="quotelev2">&gt;&gt; files, for the same AMD64 architecture.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. opal/asm/base/AMD64.asm
</span><br>
<span class="quotelev2">&gt;&gt; 2. opal/include/opal/sys/amd64/atomic.h
</span><br>
<span class="quotelev2">&gt;&gt; 3. opal/include/opal/sys/atomic_impl.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the need for three files ?  How are they inter-related ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; - Sreenidhi.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18733.php">http://www.open-mpi.org/community/lists/devel/2016/03/18733.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18734/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18735.php">Jeff Squyres (jsquyres): "[OMPI devel] Github FTW! (merging ompi and ompi-release)"</a>
<li><strong>Previous message:</strong> <a href="18733.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18733.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18736.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18736.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
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
