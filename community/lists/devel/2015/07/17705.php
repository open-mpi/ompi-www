<?
$subject_val = "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 02:55:31 2015" -->
<!-- isoreceived="20150725065531" -->
<!-- sent="Sat, 25 Jul 2015 15:55:20 +0900" -->
<!-- isosent="20150725065520" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12" -->
<!-- id="CAAkFZ5u3sWk0vp+T=Xy7SGJOUXKNnV6FJEQ8KSjx4OBX1_HrXA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA178gET+aJaXuq332FLPjhyz_C8thobGJnXqPy3fg-rKew_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-25 02:55:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17706.php">Paul Hargrove: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Previous message:</strong> <a href="17704.php">Paul Hargrove: "[OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>In reply to:</strong> <a href="17704.php">Paul Hargrove: "[OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17706.php">Paul Hargrove: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Reply:</strong> <a href="17706.php">Paul Hargrove: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>this test is here to gracefully disable the opening btl if ompi was built
<br>
with recent ofed, but is running with an old version (or the other way
<br>
around)
<br>
<p>I recently got a similar false positive when ompi was configure'd with
<br>
static libraries only.
<br>
in this case, a workaround was to dlsym the versionned symbol (e.g.
<br>
ibv_create_xrc_recv_qp@@IBVERBS_1.1 )
<br>
<p>that works just fine if ompi is configured with dynamic libraries.
<br>
<p>I do not know how to fix that :-(
<br>
<p>I can add an mac to make this test optional.
<br>
I can dlsym both versionned and non versionned symbols, but I do not know
<br>
an elegant way to figure out what the versionned symbol name is.
<br>
<p>mpirun -np 2 strace -e open a.out
<br>
will tell you which libibverbs.so is used
<br>
<p>first, I invite you to confirm this is a bug and not an environment issue.
<br>
how did you configure ompi ?
<br>
can you give a try to my workaround ?
<br>
<p>any suggestions on how to fix this is welcome.
<br>
if not, the test can be made optional via a MCA param, or be simply removed
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, July 25, 2015, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I know Gilles and I went to a fair amount of effort to get configure
</span><br>
<span class="quotelev1">&gt; detection of &quot;older&quot; XRC working again for 1.8.7 (having been broken in
</span><br>
<span class="quotelev1">&gt; 1.8.5 and 1.8.6).
</span><br>
<span class="quotelev1">&gt; However, I had tested on configuring and building the XRC support, but had
</span><br>
<span class="quotelev1">&gt; not *run* it (because my test scripts execute on the login node with no IB
</span><br>
<span class="quotelev1">&gt; interfaces).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I saw today when 1.10.0rc2 (and confirmed in 1.8.7) on the actual
</span><br>
<span class="quotelev1">&gt; compute nodes is the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 examples/ring_c'
</span><br>
<span class="quotelev1">&gt; [c0869][[27518,1],1][/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.7-linux-x86_64-icc-11.1/openmpi-1.8.7/ompi/mca/btl/openib/btl_openib_proc.c:155:mca_btl_openib_proc_create]
</span><br>
<span class="quotelev1">&gt; [/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.7-linux-x86_64-icc-11.1/openmpi-1.8.7/ompi/mca/btl/openib/btl_openib_proc.c:155]
</span><br>
<span class="quotelev1">&gt; ompi_modex_recv failed for peer [[27518,1],0]
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev1">&gt; Process 0 exiting
</span><br>
<span class="quotelev1">&gt; Process 1 exiting
</span><br>
<span class="quotelev1">&gt; [c0869][[27518,1],1][/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.7-linux-x86_64-icc-11.1/openmpi-1.8.7/ompi/mca/btl/openib/btl_openib_xrc.c:57:mca_btl_openib_xrc_check_api]
</span><br>
<span class="quotelev1">&gt; XRC error: bad XRC API (require XRC from OFED pre 3.12).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are TWO things in there:
</span><br>
<span class="quotelev1">&gt; + the modex failure
</span><br>
<span class="quotelev1">&gt; + the &quot;bad XRC API&quot; error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what the source of the modex failure may be, but the &quot;bad XRC
</span><br>
<span class="quotelev1">&gt; API&quot; message is from the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (NULL != dlsym(lib, &quot;ibv_create_xrc_rcv_qp&quot;)) {
</span><br>
<span class="quotelev1">&gt;         BTL_ERROR((&quot;XRC error: bad XRC API (require XRC from OFED pre
</span><br>
<span class="quotelev1">&gt; 3.12).&quot;));
</span><br>
<span class="quotelev1">&gt;         return false;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yet, the symbol *is* in /usr/lib64/libibverbs.so:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ objdump -T /usr/lib64/libibverbs.so | grep ibv_create_xrc_rcv_qp
</span><br>
<span class="quotelev1">&gt; 0000000000009bd0 g    DF .text  0000000000000033  IBVERBS_1.1
</span><br>
<span class="quotelev1">&gt; ibv_create_xrc_rcv_qp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HOWEVER, there are other OFED installs on this system which are NOT in
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt; None of those contain ibv_create_xrc_rcv_qp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am hoping this is some weird environment problem, but don't know how to
</span><br>
<span class="quotelev1">&gt; test that theory.
</span><br>
<span class="quotelev1">&gt; If I can determine that /usr/lib64/libibverbs.so is *not* the library
</span><br>
<span class="quotelev1">&gt; being loaded, then at least I know this is not an Open MPI problem.
</span><br>
<span class="quotelev1">&gt; So, how can I actually determine which libibverbs is getting loaded at
</span><br>
<span class="quotelev1">&gt; runtime?
</span><br>
<span class="quotelev1">&gt; Is there some mca parameter that would help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','PHHargrove_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17705/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17706.php">Paul Hargrove: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Previous message:</strong> <a href="17704.php">Paul Hargrove: "[OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>In reply to:</strong> <a href="17704.php">Paul Hargrove: "[OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17706.php">Paul Hargrove: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Reply:</strong> <a href="17706.php">Paul Hargrove: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
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
