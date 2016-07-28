<?
$subject_val = "Re: [OMPI devel] query on atomic operations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  1 11:51:07 2016" -->
<!-- isoreceived="20160401155107" -->
<!-- sent="Fri, 1 Apr 2016 09:51:06 -0600" -->
<!-- isosent="20160401155106" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] query on atomic operations" -->
<!-- id="20160401155106.GA78292_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANi1EtPedjkO728X=W2mdKeXbjpKzOcPEm6=xL4D08bOAMkuhA_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-01 11:51:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18739.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<li><strong>Previous message:</strong> <a href="18737.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18737.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18754.php">Marco Atzeri: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>Reply:</strong> <a href="18754.php">Marco Atzeri: "Re: [OMPI devel] query on atomic operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is done to provide the functionality when the compiler doesn't
<br>
support inline asm. I do not know how testing is done with the atomics
<br>
in  opal/asm/base atomics so its possible some of them are incorrect.
<br>
<p>-Nathan
<br>
<p>On Fri, Apr 01, 2016 at 02:39:39PM +0530, Sreenidhi Bharathkar Ramesh wrote:
<br>
<span class="quotelev1">&gt;    (Sorry, typo in previous email.  Please read that as)
</span><br>
<span class="quotelev1">&gt;    I have another question: why is any given operation implemented twice for
</span><br>
<span class="quotelev1">&gt;    the same architecture? 
</span><br>
<span class="quotelev1">&gt;    Ref:  opal/asm/base/AMD64.asm and opal/include/opal/sys/amd64/atomic.h,
</span><br>
<span class="quotelev1">&gt;     say function opal_atomic_cmpset_32()
</span><br>
<span class="quotelev1">&gt;    Thanks!
</span><br>
<span class="quotelev1">&gt;    On Fri, Apr 1, 2016 at 2:26 PM, Sreenidhi Bharathkar Ramesh
</span><br>
<span class="quotelev1">&gt;    &lt;sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Hi Paul,
</span><br>
<span class="quotelev1">&gt;      Thanks for the response, I understand.
</span><br>
<span class="quotelev1">&gt;      I have another question: why is any given operation implemented twice
</span><br>
<span class="quotelev1">&gt;      for the same architecture? 
</span><br>
<span class="quotelev1">&gt;      Ref:  opal/asm/base/ARM.asm and opal/include/opal/sys/amd64/atomic.h
</span><br>
<span class="quotelev1">&gt;      Please let me know.
</span><br>
<span class="quotelev1">&gt;      Thanks,
</span><br>
<span class="quotelev1">&gt;      - Sreenidhi.
</span><br>
<span class="quotelev1">&gt;      On Thu, Mar 31, 2016 at 2:28 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Sreenihdi,
</span><br>
<span class="quotelev1">&gt;        Maintenance of the &quot;other&quot; files is, at least, required for older
</span><br>
<span class="quotelev1">&gt;        compilers (including several non-GNU ones) which have support for GCC
</span><br>
<span class="quotelev1">&gt;        inline ASM constructs but do not include the __sync functions.
</span><br>
<span class="quotelev1">&gt;        Additionally, the __sync functions always include a full memory fence
</span><br>
<span class="quotelev1">&gt;        while there are places where Open MPI only needs Acquire or Release. 
</span><br>
<span class="quotelev1">&gt;        In that sense the use of the GCC builtin atomics is not always an
</span><br>
<span class="quotelev1">&gt;        &quot;optimization&quot;.
</span><br>
<span class="quotelev1">&gt;        -Paul
</span><br>
<span class="quotelev1">&gt;        On Wed, Mar 30, 2016 at 4:19 AM, Sreenidhi Bharathkar Ramesh
</span><br>
<span class="quotelev1">&gt;        &lt;sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Hello,
</span><br>
<span class="quotelev1">&gt;          I did few more experiments.  Built-in atomics are disabled by
</span><br>
<span class="quotelev1">&gt;          default and can be enabled by &quot;--enable-builtin-atomics&quot;.  With this
</span><br>
<span class="quotelev1">&gt;          option, a different atomic file is include  (I mean, different from
</span><br>
<span class="quotelev1">&gt;          the other three mentioned in the earlier email).
</span><br>
<span class="quotelev1">&gt;          opal/include/opal/sys/sync_builtin/atomic.h
</span><br>
<span class="quotelev1">&gt;           By enabling &quot;--enable-builtin-atomics&quot;, the OpenMPI library will
</span><br>
<span class="quotelev1">&gt;          not only get the latest optimizations from GCC __sync functions, but
</span><br>
<span class="quotelev1">&gt;          also get all additional functions, such as &lt;__sync_or_and_fetch&gt;
</span><br>
<span class="quotelev1">&gt;           &lt;__sync_and_and_fetch&gt; etc.  Also, this way, the arch/*.asm files
</span><br>
<span class="quotelev1">&gt;          need not be maintained.
</span><br>
<span class="quotelev1">&gt;          Seems there is more of an advantage to have
</span><br>
<span class="quotelev1">&gt;          &quot;--enable-builtin-atomics&quot;.  Am I missing something ?  Please let me
</span><br>
<span class="quotelev1">&gt;          know your thoughts.
</span><br>
<span class="quotelev1">&gt;          Thanks,
</span><br>
<span class="quotelev1">&gt;          - Sreenidhi.
</span><br>
<span class="quotelev1">&gt;          On Wed, Mar 30, 2016 at 10:33 AM, Sreenidhi Bharathkar Ramesh
</span><br>
<span class="quotelev1">&gt;          &lt;sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Hello,
</span><br>
<span class="quotelev1">&gt;            With respect to atomic operations in assembly, I can see three
</span><br>
<span class="quotelev1">&gt;            source files, for the same AMD64 architecture.
</span><br>
<span class="quotelev1">&gt;            1. opal/asm/base/AMD64.asm
</span><br>
<span class="quotelev1">&gt;            2. opal/include/opal/sys/amd64/atomic.h
</span><br>
<span class="quotelev1">&gt;            3. opal/include/opal/sys/atomic_impl.h
</span><br>
<span class="quotelev1">&gt;            What is the need for three files ?  How are they inter-related ?
</span><br>
<span class="quotelev1">&gt;            Please let me know.
</span><br>
<span class="quotelev1">&gt;            Thanks,
</span><br>
<span class="quotelev1">&gt;            - Sreenidhi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          _______________________________________________
</span><br>
<span class="quotelev1">&gt;          devel mailing list
</span><br>
<span class="quotelev1">&gt;          devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;          Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;          Link to this post:
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18733.php">http://www.open-mpi.org/community/lists/devel/2016/03/18733.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        --
</span><br>
<span class="quotelev1">&gt;        Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;        Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;        Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        devel mailing list
</span><br>
<span class="quotelev1">&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;        Link to this post:
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18734.php">http://www.open-mpi.org/community/lists/devel/2016/03/18734.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18737.php">http://www.open-mpi.org/community/lists/devel/2016/04/18737.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18738/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18739.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<li><strong>Previous message:</strong> <a href="18737.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18737.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] query on atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18754.php">Marco Atzeri: "Re: [OMPI devel] query on atomic operations"</a>
<li><strong>Reply:</strong> <a href="18754.php">Marco Atzeri: "Re: [OMPI devel] query on atomic operations"</a>
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
