<?
$subject_val = "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 17:25:40 2016" -->
<!-- isoreceived="20160201222540" -->
<!-- sent="Tue, 2 Feb 2016 07:25:39 +0900" -->
<!-- isosent="20160201222539" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions" -->
<!-- id="CAAkFZ5v6ByKRkAz9+e7uDfvFqaOM+7LhgG3s7kN05wzD_UctUg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4B8B6098-F1DF-40C8-B7A8-F3F5680D6075_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-01 17:25:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28427.php">Gilles Gouaillardet: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Previous message:</strong> <a href="28425.php">CUDENNEC Loic: "[OMPI users] Last CfP: 4th Alchemy Workshop on Manycore programming"</a>
<li><strong>In reply to:</strong> <a href="28423.php">William Law: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
William,
<br>
<p>can you run
<br>
ldd /usr/lib64/libpmi.so.0.0.0
<br>
ldd /usr/lib64/libpmi2.so.0.0.0
<br>
ldd /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_ess_pmi.so
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, February 2, 2016, William Law &lt;willthelaw_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the feedback.  I guess I'm a little perplexed about how we got
</span><br>
<span class="quotelev1">&gt; here; I'd think if it was linking against the PMI stuff that slurm version
</span><br>
<span class="quotelev1">&gt; wouldn't matter?  There aren't versioned PMI libraries:
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpmi.so
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpmi.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpmi.so.0.0.0 (real file)
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpmi2.so
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpmi2.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpmi2.so.0.0.0 (real file)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW slurm has:
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libslurm.so
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libslurm.so.29 (real file)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any easy temporary fix is just to make a symlink from libslurm.so.29 to
</span><br>
<span class="quotelev1">&gt; libslurm.so.28; things just work.  Not really a long term strategy but gets
</span><br>
<span class="quotelev1">&gt; folks running again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like I should follow up with the slurm list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2016, at 3:59 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on second thought, is there any chance your sysadmin removed the old
</span><br>
<span class="quotelev1">&gt; libslurm.so.x but kept the old libpmix.so.y ?
</span><br>
<span class="quotelev1">&gt; in this case, the real issue would be hidden
</span><br>
<span class="quotelev1">&gt; your sysadmin &quot;broke&quot; the old libpmi, but you want to use the new one
</span><br>
<span class="quotelev1">&gt; indeed.
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
<span class="quotelev1">&gt; On Friday, January 29, 2016, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is openmpi linked with a static libpmi.a that requires a dynamic libslurm
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt; that can be checked with ldd mca_ess_pmi.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btw, do slurm folks increase the libpmi.so version each time slurm is
</span><br>
<span class="quotelev2">&gt;&gt; upgraded ?
</span><br>
<span class="quotelev2">&gt;&gt; that could be a part of the issue ...
</span><br>
<span class="quotelev2">&gt;&gt; but if they increase lib version because of abi changes, it might be a
</span><br>
<span class="quotelev2">&gt;&gt; bad idea to open libxxx.so instead of libxxx.so.y
</span><br>
<span class="quotelev2">&gt;&gt; generally speaking, libxxx.so.y is provided by libxxx package, and
</span><br>
<span class="quotelev2">&gt;&gt; libxxx.so is provided by libxxx-devel package, which means it might not be
</span><br>
<span class="quotelev2">&gt;&gt; available on compute nodes.
</span><br>
<span class="quotelev2">&gt;&gt; we could also dlopen libxxx instead of linking with it, and have the
</span><br>
<span class="quotelev2">&gt;&gt; sysadmin configure openmpi so it finds the right lib (this approach is used
</span><br>
<span class="quotelev2">&gt;&gt; by a prominent vendor, and has other pros but also cons)
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
<span class="quotelev2">&gt;&gt; On Friday, January 29, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It makes sense - but isn&#226;&#128;&#153;t it slurm that is linking libpmi against
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libslurm? I don&#226;&#128;&#153;t think we are making that connection, so it would be a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurm issue to change it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 28, 2016, at 10:12 PM, William Law &lt;willthelaw_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our group can't find anyway to do this and it'd be helpful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We use slurm and keep upgrading the slurm environment.  OpenMPI bombs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out against PMI each time the libslurm stuff changes, which seems to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fairly regularly.  Is there a way to compile against slurm but insulate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ourselves from the libslurm chaos?  Obvious will ask the slurm folks too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [*wlaw*@some-node /scratch/users/wlaw/imb/src]$ mpirun -n 2 --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grpcomm ^pmi ./IMB-MPI1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [some-node.local:42584] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_ess_pmi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libslurm.so.28: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [some-node.local:42585] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_pubsub_pmi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libslurm.so.28: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [some-node.local:42586] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_pubsub_pmi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libslurm.so.28: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (sent it via the wrong email so it bounced..... heh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Upon further investigation it seems like the most appropriate thing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be to point it at compile time to libslurm.so instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libslurm.so.xx; does that make sense?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28408.php">http://www.open-mpi.org/community/lists/users/2016/01/28408.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28415.php">http://www.open-mpi.org/community/lists/users/2016/01/28415.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28427.php">Gilles Gouaillardet: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Previous message:</strong> <a href="28425.php">CUDENNEC Loic: "[OMPI users] Last CfP: 4th Alchemy Workshop on Manycore programming"</a>
<li><strong>In reply to:</strong> <a href="28423.php">William Law: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
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
