<?
$subject_val = "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 07:22:21 2015" -->
<!-- isoreceived="20150725112221" -->
<!-- sent="Sat, 25 Jul 2015 04:22:06 -0700" -->
<!-- isosent="20150725112206" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12" -->
<!-- id="CAAvDA16eToJhpUzoohNU-VFfLbbaWZdzXoCEZU6EW0EjH2xQnw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5tjNPidDE1qvJSPVBzSDfZXRjzNLdZdo-CCZPmnZ+E57A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-07-25 07:22:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17710.php">Ralph Castain: "Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo"</a>
<li><strong>Previous message:</strong> <a href="17708.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>In reply to:</strong> <a href="17708.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>MOST of the automated tests I run when there is a new RC, are run on just
<br>
the login nodes of cluster systems, or on workstations (no network).  So,
<br>
many of my tests pass &quot;-mca btl sm,self&quot;.  Keep in mind that I am mainly
<br>
focused on compile/link testing.  So, I run &quot;make check&quot; and build the
<br>
examples directory, but I only run the ring_c test (which is hardly a
<br>
stress test of any btl or mtl component).
<br>
<p>The login nodes of the cluster systems have the headers and libs which
<br>
match the compute nodes, and usually at least have the same network
<br>
hardware.
<br>
<p>This particular problem showed up when I tried to run tests manually on the
<br>
compute nodes of one cluster.
<br>
<p>In the case of the one specific system with the older (&quot;ConnectX XRC&quot;)
<br>
OFED, the login nodes do NOT have the hardware fully configured for use
<br>
(probably on purpose), resulting the openib blt component being rejected:
<br>
<p>libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs2
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs1
<br>
[cvrsvc04][[2535,1],1][/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.10.0rc2-linux-x86_64-icc-11.1/openmpi-1.10.0rc2/ompi/mca/btl/openib/btl_openib_component.c:1586:init_one_device]
<br>
openib: RC QPs not supported -- skipping mlx4_0
<br>
[cvrsvc04:00940] select: init of component openib returned failure
<br>
<p><p><p>-Paul
<br>
<p>On Sat, Jul 25, 2015 at 3:06 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where do you run mpirun ?
</span><br>
<span class="quotelev1">&gt; on a compute node ?
</span><br>
<span class="quotelev1">&gt; on a login node with no infiniband interface ?
</span><br>
<span class="quotelev1">&gt; if on a login node, are the infiniband libraries at least available ?
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17708.php">http://www.open-mpi.org/community/lists/devel/2015/07/17708.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17709/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17710.php">Ralph Castain: "Re: [OMPI devel] 1.8.7 release tarball versus v1.8.7 tag in ompi-release repo"</a>
<li><strong>Previous message:</strong> <a href="17708.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
<li><strong>In reply to:</strong> <a href="17708.php">Gilles Gouaillardet: "Re: [OMPI devel] MAYBE problem w/ XRC with OFED pre-3.12"</a>
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
