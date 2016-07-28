<?
$subject_val = "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 08:35:54 2010" -->
<!-- isoreceived="20100208133554" -->
<!-- sent="Mon, 8 Feb 2010 21:35:48 +0800" -->
<!-- isosent="20100208133548" -->
<!-- name="Andreea Costea" -->
<!-- email="andre.costea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes" -->
<!-- id="68119efe1002080535v4f756adi8aa4dd4964abde1c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="68119efe1002072059h57a030d7xc63031054e342e75_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes<br>
<strong>From:</strong> Andreea Costea (<em>andre.costea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 08:35:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12038.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="12036.php">Jed Brown: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<li><strong>In reply to:</strong> <a href="12034.php">Andreea Costea: "[OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12038.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="12038.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I asked this question because checkpointing with to NFS is successful, but
<br>
checkpointing without a mount filesystem or a shared storage throws this
<br>
warning&amp;error:
<br>
<p>WARNING: Could not preload specified file: File already exists.
<br>
Fileset: /home/andreea/checkpoints/global/ompi_global_snapshot_7426.ckpt/0
<br>
Host: X
<br>
<p>Will continue attempting to launch the process.
<br>
<p><p>filem:rsh: wait_all(): Wait failed (-1)
<br>
[[62871,0],0] ORTE_ERROR_LOG: Error in file snapc_full_global.c at line 1054
<br>
<p><p>even if I set the mca-parameters like this:
<br>
<p>snapc_base_store_in_place=0
<br>
crs_base_snapshot_dir=/home/andreea/checkpoints/local
<br>
snapc_base_global_snapshot_dir=/home/andreea/checkpoints/global
<br>
<p>and the nodes can connect through ssh without a password.
<br>
<p>Thanks,
<br>
Andreea
<br>
<p>On Mon, Feb 8, 2010 at 12:59 PM, Andreea Costea &lt;andre.costea_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's say I have an MPI application running on several hosts. Is there any
</span><br>
<span class="quotelev1">&gt; way to checkpoint this application without having a shared storage between
</span><br>
<span class="quotelev1">&gt; the nodes?
</span><br>
<span class="quotelev1">&gt; I already took a look at the examples here
</span><br>
<span class="quotelev1">&gt; <a href="http://www.osl.iu.edu/research/ft/ompi-cr/examples.php">http://www.osl.iu.edu/research/ft/ompi-cr/examples.php</a>, but it seems that
</span><br>
<span class="quotelev1">&gt; in both cases there is a globally mounted file system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12038.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="12036.php">Jed Brown: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<li><strong>In reply to:</strong> <a href="12034.php">Andreea Costea: "[OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12038.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="12038.php">Joshua Hursey: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
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
