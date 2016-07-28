<?
$subject_val = "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 06:02:15 2015" -->
<!-- isoreceived="20150725100215" -->
<!-- sent="Sat, 25 Jul 2015 19:02:14 +0900" -->
<!-- isosent="20150725100214" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12" -->
<!-- id="CAAkFZ5vAOi6w9uBFeUHw2AN3zO3sZMLcp6q1VXPnGiTvY9O5RQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA17xCMHThKX7cH6iYum97a71G=yYo+MOFSwVJGUtGGGsoQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-07-25 06:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17708.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Previous message:</strong> <a href="17706.php">Paul Hargrove: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>In reply to:</strong> <a href="17706.php">Paul Hargrove: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17708.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul,
<br>
<p>I think that by default, resolution occurs the first time a symbol is used.
<br>
that means that without the dlsym check, ompi will crash when accessing the
<br>
unresolved symbol.
<br>
the test is here to disable the opening btl before something bad happen.
<br>
<p>I will see how I can disable the test if nodal open or static libs only.
<br>
but I am afraid I cannot get a working solution if both static and dynamic
<br>
libs are built.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, July 25, 2015, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can confirm that it is not an environment problem, since the strace
</span><br>
<span class="quotelev1">&gt; command (thanks for that) confirms the expect lib is used on both nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep libibverbs.so log| grep -v ENOENT
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/lib64/libibverbs.so.1&quot;, O_RDONLY) = 14
</span><br>
<span class="quotelev1">&gt; open(&quot;/usr/lib64/libibverbs.so.1&quot;, O_RDONLY) = 14
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configure command arguments (other than --prefix):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-debug --with-tm=/usr/syscom/opt/torque/4.1.1 CC=icc CXX=icpc
</span><br>
<span class="quotelev1">&gt; FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried your work-around, changing the dlsym() call to look for the
</span><br>
<span class="quotelev1">&gt; versioned symbol.
</span><br>
<span class="quotelev1">&gt; I *did* eliminate the &quot;XRC error:&quot; message, but the modex recv failure
</span><br>
<span class="quotelev1">&gt; message remains.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not an expert on linkers/loaders, but I have my doubts that this
</span><br>
<span class="quotelev1">&gt; check will ever detect a real mismatch, since both the symbols you check
</span><br>
<span class="quotelev1">&gt; for are referenced explicitly in the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless of any other factors, I think you should NOT be using the
</span><br>
<span class="quotelev1">&gt; dlsym() check if not using shared libs, including in the --disable-dlopen
</span><br>
<span class="quotelev1">&gt; and --disable-shared cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I noticed that you don't have a dlclose(lib) call
</span><br>
<span class="quotelev1">&gt; in mca_btl_openib_xrc_check_api().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 24, 2015 at 11:55 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this test is here to gracefully disable the opening btl if ompi was built
</span><br>
<span class="quotelev2">&gt;&gt; with recent ofed, but is running with an old version (or the other way
</span><br>
<span class="quotelev2">&gt;&gt; around)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I recently got a similar false positive when ompi was configure'd with
</span><br>
<span class="quotelev2">&gt;&gt; static libraries only.
</span><br>
<span class="quotelev2">&gt;&gt; in this case, a workaround was to dlsym the versionned symbol (e.g.
</span><br>
<span class="quotelev2">&gt;&gt; ibv_create_xrc_recv_qp@@IBVERBS_1.1 )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that works just fine if ompi is configured with dynamic libraries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not know how to fix that :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can add an mac to make this test optional.
</span><br>
<span class="quotelev2">&gt;&gt; I can dlsym both versionned and non versionned symbols, but I do not know
</span><br>
<span class="quotelev2">&gt;&gt; an elegant way to figure out what the versionned symbol name is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 strace -e open a.out
</span><br>
<span class="quotelev2">&gt;&gt; will tell you which libibverbs.so is used
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; first, I invite you to confirm this is a bug and not an environment issue.
</span><br>
<span class="quotelev2">&gt;&gt; how did you configure ompi ?
</span><br>
<span class="quotelev2">&gt;&gt; can you give a try to my workaround ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; any suggestions on how to fix this is welcome.
</span><br>
<span class="quotelev2">&gt;&gt; if not, the test can be made optional via a MCA param, or be simply
</span><br>
<span class="quotelev2">&gt;&gt; removed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Saturday, July 25, 2015, Paul Hargrove &lt;phhargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','phhargrove_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know Gilles and I went to a fair amount of effort to get configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; detection of &quot;older&quot; XRC working again for 1.8.7 (having been broken in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.8.5 and 1.8.6).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I had tested on configuring and building the XRC support, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; had not *run* it (because my test scripts execute on the login node with no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IB interfaces).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I saw today when 1.10.0rc2 (and confirmed in 1.8.7) on the actual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute nodes is the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 examples/ring_c'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [c0869][[27518,1],1][/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.7-linux-x86_64-icc-11.1/openmpi-1.8.7/ompi/mca/btl/openib/btl_openib_proc.c:155:mca_btl_openib_proc_create]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.7-linux-x86_64-icc-11.1/openmpi-1.8.7/ompi/mca/btl/openib/btl_openib_proc.c:155]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_modex_recv failed for peer [[27518,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [c0869][[27518,1],1][/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.7-linux-x86_64-icc-11.1/openmpi-1.8.7/ompi/mca/btl/openib/btl_openib_xrc.c:57:mca_btl_openib_xrc_check_api]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XRC error: bad XRC API (require XRC from OFED pre 3.12).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are TWO things in there:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + the modex failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + the &quot;bad XRC API&quot; error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know what the source of the modex failure may be, but the &quot;bad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XRC API&quot; message is from the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (NULL != dlsym(lib, &quot;ibv_create_xrc_rcv_qp&quot;)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         BTL_ERROR((&quot;XRC error: bad XRC API (require XRC from OFED pre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3.12).&quot;));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return false;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yet, the symbol *is* in /usr/lib64/libibverbs.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ objdump -T /usr/lib64/libibverbs.so | grep ibv_create_xrc_rcv_qp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0000000000009bd0 g    DF .text  0000000000000033  IBVERBS_1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ibv_create_xrc_rcv_qp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOWEVER, there are other OFED installs on this system which are NOT in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; None of those contain ibv_create_xrc_rcv_qp.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am hoping this is some weird environment problem, but don't know how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to test that theory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I can determine that /usr/lib64/libibverbs.so is *not* the library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; being loaded, then at least I know this is not an Open MPI problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, how can I actually determine which libibverbs is getting loaded at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there some mca parameter that would help?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17705.php">http://www.open-mpi.org/community/lists/devel/2015/07/17705.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17707/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17708.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>Previous message:</strong> <a href="17706.php">Paul Hargrove: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>In reply to:</strong> <a href="17706.php">Paul Hargrove: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17708.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
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
