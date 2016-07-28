<?
$subject_val = "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 12:16:08 2016" -->
<!-- isoreceived="20160201171608" -->
<!-- sent="Mon, 1 Feb 2016 09:16:01 -0800" -->
<!-- isosent="20160201171601" -->
<!-- name="William Law" -->
<!-- email="willthelaw_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions" -->
<!-- id="4B8B6098-F1DF-40C8-B7A8-F3F5680D6075_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5v8UXq25cWx22W4Lf9x1E4B=61bTCHQEbtTqpANF3MuPw_at_mail.gmail.com" -->
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
<strong>From:</strong> William Law (<em>willthelaw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-01 12:16:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28424.php">Number Cruncher: "[OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Previous message:</strong> <a href="28422.php">Diego Avesani: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28415.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28426.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Reply:</strong> <a href="28426.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Thanks for the feedback.  I guess I'm a little perplexed about how we got here; I'd think if it was linking against the PMI stuff that slurm version wouldn't matter?  There aren't versioned PMI libraries:
<br>
/usr/lib64/libpmi.so
<br>
/usr/lib64/libpmi.so.0
<br>
/usr/lib64/libpmi.so.0.0.0 (real file)
<br>
/usr/lib64/libpmi2.so
<br>
/usr/lib64/libpmi2.so.0
<br>
/usr/lib64/libpmi2.so.0.0.0 (real file)
<br>
<p>FWIW slurm has:
<br>
/usr/lib64/libslurm.so
<br>
/usr/lib64/libslurm.so.29 (real file)
<br>
<p>Any easy temporary fix is just to make a symlink from libslurm.so.29 to libslurm.so.28; things just work.  Not really a long term strategy but gets folks running again.
<br>
<p>Sounds like I should follow up with the slurm list.
<br>
<p>Regards,
<br>
<p>Will
<br>
<p><span class="quotelev1">&gt; On Jan 29, 2016, at 3:59 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on second thought, is there any chance your sysadmin removed the old libslurm.so.x but kept the old libpmix.so.y ?
</span><br>
<span class="quotelev1">&gt; in this case, the real issue would be hidden 
</span><br>
<span class="quotelev1">&gt; your sysadmin &quot;broke&quot; the old libpmi, but you want to use the new one indeed.
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
<span class="quotelev1">&gt; On Friday, January 29, 2016, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Is openmpi linked with a static libpmi.a that requires a dynamic libslurm ?
</span><br>
<span class="quotelev1">&gt; that can be checked with ldd mca_ess_pmi.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btw, do slurm folks increase the libpmi.so version each time slurm is upgraded ?
</span><br>
<span class="quotelev1">&gt; that could be a part of the issue ...
</span><br>
<span class="quotelev1">&gt; but if they increase lib version because of abi changes, it might be a bad idea to open libxxx.so instead of libxxx.so.y
</span><br>
<span class="quotelev1">&gt; generally speaking, libxxx.so.y is provided by libxxx package, and libxxx.so is provided by libxxx-devel package, which means it might not be available on compute nodes.
</span><br>
<span class="quotelev1">&gt; we could also dlopen libxxx instead of linking with it, and have the sysadmin configure openmpi so it finds the right lib (this approach is used by a prominent vendor, and has other pros but also cons)
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
<span class="quotelev1">&gt; On Friday, January 29, 2016, Ralph Castain &lt;rhc_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It makes sense - but isn&#226;&#128;&#153;t it slurm that is linking libpmi against libslurm? I don&#226;&#128;&#153;t think we are making that connection, so it would be a slurm issue to change it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 28, 2016, at 10:12 PM, William Law &lt;willthelaw_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Our group can't find anyway to do this and it'd be helpful.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We use slurm and keep upgrading the slurm environment.  OpenMPI bombs out against PMI each time the libslurm stuff changes, which seems to be fairly regularly.  Is there a way to compile against slurm but insulate ourselves from the libslurm chaos?  Obvious will ask the slurm folks too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [wlaw_at_some-node /scratch/users/wlaw/imb/src]$ mpirun -n 2 --mca grpcomm ^pmi ./IMB-MPI1 
</span><br>
<span class="quotelev2">&gt;&gt; [some-node.local:42584] mca: base: component_find: unable to open /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_ess_pmi: libslurm.so.28: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [some-node.local:42585] mca: base: component_find: unable to open /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_pubsub_pmi: libslurm.so.28: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [some-node.local:42586] mca: base: component_find: unable to open /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_pubsub_pmi: libslurm.so.28: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (sent it via the wrong email so it bounced..... heh)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Upon further investigation it seems like the most appropriate thing would be to point it at compile time to libslurm.so instead of libslurm.so.xx; does that make sense?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Will
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28408.php">http://www.open-mpi.org/community/lists/users/2016/01/28408.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/01/28408.php">http://www.open-mpi.org/community/lists/users/2016/01/28408.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28415.php">http://www.open-mpi.org/community/lists/users/2016/01/28415.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28423/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28424.php">Number Cruncher: "[OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Previous message:</strong> <a href="28422.php">Diego Avesani: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28415.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28426.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Reply:</strong> <a href="28426.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
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
