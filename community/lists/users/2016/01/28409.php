<?
$subject_val = "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 05:02:50 2016" -->
<!-- isoreceived="20160129100250" -->
<!-- sent="Fri, 29 Jan 2016 02:02:43 -0800" -->
<!-- isosent="20160129100243" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions" -->
<!-- id="E4A9B99A-03B5-4A01-B4ED-960EEA37A968_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8AB65D7E-7BF6-41E6-8F2C-F84274DF02C2_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-29 05:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28410.php">Diego Avesani: "[OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="28408.php">William Law: "[OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>In reply to:</strong> <a href="28408.php">William Law: "[OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28412.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Reply:</strong> <a href="28412.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It makes sense - but isn&#226;&#128;&#153;t it slurm that is linking libpmi against libslurm? I don&#226;&#128;&#153;t think we are making that connection, so it would be a slurm issue to change it.
<br>
<p><p><span class="quotelev1">&gt; On Jan 28, 2016, at 10:12 PM, William Law &lt;willthelaw_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our group can't find anyway to do this and it'd be helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use slurm and keep upgrading the slurm environment.  OpenMPI bombs out against PMI each time the libslurm stuff changes, which seems to be fairly regularly.  Is there a way to compile against slurm but insulate ourselves from the libslurm chaos?  Obvious will ask the slurm folks too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [wlaw_at_some-node /scratch/users/wlaw/imb/src]$ mpirun -n 2 --mca grpcomm ^pmi ./IMB-MPI1 
</span><br>
<span class="quotelev1">&gt; [some-node.local:42584] mca: base: component_find: unable to open /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_ess_pmi: libslurm.so.28: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [some-node.local:42585] mca: base: component_find: unable to open /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_pubsub_pmi: libslurm.so.28: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [some-node.local:42586] mca: base: component_find: unable to open /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_pubsub_pmi: libslurm.so.28: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (sent it via the wrong email so it bounced..... heh)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Upon further investigation it seems like the most appropriate thing would be to point it at compile time to libslurm.so instead of libslurm.so.xx; does that make sense?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28408.php">http://www.open-mpi.org/community/lists/users/2016/01/28408.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28410.php">Diego Avesani: "[OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="28408.php">William Law: "[OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>In reply to:</strong> <a href="28408.php">William Law: "[OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28412.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Reply:</strong> <a href="28412.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
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
