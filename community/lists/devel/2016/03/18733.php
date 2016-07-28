<?
$subject_val = "Re: [OMPI devel] query on atomic operations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 07:19:54 2016" -->
<!-- isoreceived="20160330111954" -->
<!-- sent="Wed, 30 Mar 2016 16:49:53 +0530" -->
<!-- isosent="20160330111953" -->
<!-- name="Sreenidhi Bharathkar Ramesh" -->
<!-- email="sreenidhi-bharathkar.ramesh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] query on atomic operations" -->
<!-- id="CANi1EtOYy4f1wMS581-v=dVwMBjEtQPPjuUWmJfAhL53JpkJkQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CANi1EtPESLuJY69Mq6BWAuKiZxagGD11QK0SBfgObSx1F+0dnA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-30 07:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18734.php">Paul Hargrove: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18732.php">Sreenidhi Bharathkar Ramesh: "[OMPI devel] query on atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18732.php">Sreenidhi Bharathkar Ramesh: "[OMPI devel] query on atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18734.php">Paul Hargrove: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>Reply:</strong> <a href="18734.php">Paul Hargrove: "Re: [OMPI devel] query on atomic operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I did few more experiments.  Built-in atomics are disabled by default and
<br>
can be enabled by &quot;--enable-builtin-atomics&quot;.  With this option, a
<br>
different atomic file is include  (I mean, different from the other three
<br>
mentioned in the earlier email).
<br>
<p>opal/include/opal/sys/sync_builtin/atomic.h
<br>
<p>&nbsp;By enabling &quot;--enable-builtin-atomics&quot;, the OpenMPI library will not only
<br>
get the latest optimizations from GCC __sync functions, but also get all
<br>
additional functions, such as &lt;__sync_or_and_fetch&gt;  &lt;__sync_and_and_fetch&gt;
<br>
etc.  Also, this way, the arch/*.asm files need not be maintained.
<br>
<p>Seems there is more of an advantage to have &quot;--enable-builtin-atomics&quot;.  Am
<br>
I missing something ?  Please let me know your thoughts.
<br>
<p>Thanks,
<br>
- Sreenidhi.
<br>
<p>On Wed, Mar 30, 2016 at 10:33 AM, Sreenidhi Bharathkar Ramesh &lt;
<br>
sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With respect to atomic operations in assembly, I can see three source
</span><br>
<span class="quotelev1">&gt; files, for the same AMD64 architecture.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. opal/asm/base/AMD64.asm
</span><br>
<span class="quotelev1">&gt; 2. opal/include/opal/sys/amd64/atomic.h
</span><br>
<span class="quotelev1">&gt; 3. opal/include/opal/sys/atomic_impl.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the need for three files ?  How are they inter-related ?
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18733/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18734.php">Paul Hargrove: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18732.php">Sreenidhi Bharathkar Ramesh: "[OMPI devel] query on atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18732.php">Sreenidhi Bharathkar Ramesh: "[OMPI devel] query on atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18734.php">Paul Hargrove: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>Reply:</strong> <a href="18734.php">Paul Hargrove: "Re: [OMPI devel] query on atomic operations"</a>
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
