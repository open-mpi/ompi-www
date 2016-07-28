<?
$subject_val = "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 05:18:27 2015" -->
<!-- isoreceived="20150725091827" -->
<!-- sent="Sat, 25 Jul 2015 02:18:21 -0700" -->
<!-- isosent="20150725091821" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12" -->
<!-- id="CAAvDA17xCMHThKX7cH6iYum97a71G=yYo+MOFSwVJGUtGGGsoQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5u3sWk0vp+T=Xy7SGJOUXKNnV6FJEQ8KSjx4OBX1_HrXA_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-25 05:18:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17707.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Previous message:</strong> <a href="17705.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>In reply to:</strong> <a href="17705.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17707.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Reply:</strong> <a href="17707.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I can confirm that it is not an environment problem, since the strace
<br>
command (thanks for that) confirms the expect lib is used on both nodes:
<br>
<p>$ grep libibverbs.so log| grep -v ENOENT
<br>
open(&quot;/usr/lib64/libibverbs.so.1&quot;, O_RDONLY) = 14
<br>
open(&quot;/usr/lib64/libibverbs.so.1&quot;, O_RDONLY) = 14
<br>
<p><p>Configure command arguments (other than --prefix):
<br>
<p>--enable-debug --with-tm=/usr/syscom/opt/torque/4.1.1 CC=icc CXX=icpc
<br>
FC=ifort
<br>
<p><p>I tried your work-around, changing the dlsym() call to look for the
<br>
versioned symbol.
<br>
I *did* eliminate the &quot;XRC error:&quot; message, but the modex recv failure
<br>
message remains.
<br>
<p>I am not an expert on linkers/loaders, but I have my doubts that this check
<br>
will ever detect a real mismatch, since both the symbols you check for are
<br>
referenced explicitly in the code.
<br>
<p>Regardless of any other factors, I think you should NOT be using the
<br>
dlsym() check if not using shared libs, including in the --disable-dlopen
<br>
and --disable-shared cases.
<br>
<p>Also, I noticed that you don't have a dlclose(lib) call
<br>
in mca_btl_openib_xrc_check_api().
<br>
<p>-Paul
<br>
<p>On Fri, Jul 24, 2015 at 11:55 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this test is here to gracefully disable the opening btl if ompi was built
</span><br>
<span class="quotelev1">&gt; with recent ofed, but is running with an old version (or the other way
</span><br>
<span class="quotelev1">&gt; around)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently got a similar false positive when ompi was configure'd with
</span><br>
<span class="quotelev1">&gt; static libraries only.
</span><br>
<span class="quotelev1">&gt; in this case, a workaround was to dlsym the versionned symbol (e.g.
</span><br>
<span class="quotelev1">&gt; ibv_create_xrc_recv_qp@@IBVERBS_1.1 )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that works just fine if ompi is configured with dynamic libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know how to fix that :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can add an mac to make this test optional.
</span><br>
<span class="quotelev1">&gt; I can dlsym both versionned and non versionned symbols, but I do not know
</span><br>
<span class="quotelev1">&gt; an elegant way to figure out what the versionned symbol name is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 strace -e open a.out
</span><br>
<span class="quotelev1">&gt; will tell you which libibverbs.so is used
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; first, I invite you to confirm this is a bug and not an environment issue.
</span><br>
<span class="quotelev1">&gt; how did you configure ompi ?
</span><br>
<span class="quotelev1">&gt; can you give a try to my workaround ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any suggestions on how to fix this is welcome.
</span><br>
<span class="quotelev1">&gt; if not, the test can be made optional via a MCA param, or be simply removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Saturday, July 25, 2015, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know Gilles and I went to a fair amount of effort to get configure
</span><br>
<span class="quotelev2">&gt;&gt; detection of &quot;older&quot; XRC working again for 1.8.7 (having been broken in
</span><br>
<span class="quotelev2">&gt;&gt; 1.8.5 and 1.8.6).
</span><br>
<span class="quotelev2">&gt;&gt; However, I had tested on configuring and building the XRC support, but
</span><br>
<span class="quotelev2">&gt;&gt; had not *run* it (because my test scripts execute on the login node with no
</span><br>
<span class="quotelev2">&gt;&gt; IB interfaces).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I saw today when 1.10.0rc2 (and confirmed in 1.8.7) on the actual
</span><br>
<span class="quotelev2">&gt;&gt; compute nodes is the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 examples/ring_c'
</span><br>
<span class="quotelev2">&gt;&gt; [c0869][[27518,1],1][/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.7-linux-x86_64-icc-11.1/openmpi-1.8.7/ompi/mca/btl/openib/btl_openib_proc.c:155:mca_btl_openib_proc_create]
</span><br>
<span class="quotelev2">&gt;&gt; [/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.7-linux-x86_64-icc-11.1/openmpi-1.8.7/ompi/mca/btl/openib/btl_openib_proc.c:155]
</span><br>
<span class="quotelev2">&gt;&gt; ompi_modex_recv failed for peer [[27518,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 exiting
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 exiting
</span><br>
<span class="quotelev2">&gt;&gt; [c0869][[27518,1],1][/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.7-linux-x86_64-icc-11.1/openmpi-1.8.7/ompi/mca/btl/openib/btl_openib_xrc.c:57:mca_btl_openib_xrc_check_api]
</span><br>
<span class="quotelev2">&gt;&gt; XRC error: bad XRC API (require XRC from OFED pre 3.12).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are TWO things in there:
</span><br>
<span class="quotelev2">&gt;&gt; + the modex failure
</span><br>
<span class="quotelev2">&gt;&gt; + the &quot;bad XRC API&quot; error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know what the source of the modex failure may be, but the &quot;bad
</span><br>
<span class="quotelev2">&gt;&gt; XRC API&quot; message is from the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if (NULL != dlsym(lib, &quot;ibv_create_xrc_rcv_qp&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;         BTL_ERROR((&quot;XRC error: bad XRC API (require XRC from OFED pre
</span><br>
<span class="quotelev2">&gt;&gt; 3.12).&quot;));
</span><br>
<span class="quotelev2">&gt;&gt;         return false;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yet, the symbol *is* in /usr/lib64/libibverbs.so:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ objdump -T /usr/lib64/libibverbs.so | grep ibv_create_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000009bd0 g    DF .text  0000000000000033  IBVERBS_1.1
</span><br>
<span class="quotelev2">&gt;&gt; ibv_create_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HOWEVER, there are other OFED installs on this system which are NOT in
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH.
</span><br>
<span class="quotelev2">&gt;&gt; None of those contain ibv_create_xrc_rcv_qp.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am hoping this is some weird environment problem, but don't know how to
</span><br>
<span class="quotelev2">&gt;&gt; test that theory.
</span><br>
<span class="quotelev2">&gt;&gt; If I can determine that /usr/lib64/libibverbs.so is *not* the library
</span><br>
<span class="quotelev2">&gt;&gt; being loaded, then at least I know this is not an Open MPI problem.
</span><br>
<span class="quotelev2">&gt;&gt; So, how can I actually determine which libibverbs is getting loaded at
</span><br>
<span class="quotelev2">&gt;&gt; runtime?
</span><br>
<span class="quotelev2">&gt;&gt; Is there some mca parameter that would help?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17705.php">http://www.open-mpi.org/community/lists/devel/2015/07/17705.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17706/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17707.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Previous message:</strong> <a href="17705.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>In reply to:</strong> <a href="17705.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17707.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Reply:</strong> <a href="17707.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
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
