<?
$subject_val = "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 08:54:07 2010" -->
<!-- isoreceived="20100208135407" -->
<!-- sent="Mon, 8 Feb 2010 08:54:01 -0500" -->
<!-- isosent="20100208135401" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes" -->
<!-- id="B835DD2E-6311-4514-A72F-DAB9A80E1D7A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="68119efe1002080535v4f756adi8aa4dd4964abde1c_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 08:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12039.php">Prentice Bisbal: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<li><strong>Previous message:</strong> <a href="12037.php">Andreea Costea: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="12037.php">Andreea Costea: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can use the 'checkpoint to local disk' example to checkpoint and restart without access to a globally shared storage devices. There is an example on the website that does not use a globally mounted file system:
<br>
&nbsp;&nbsp;<a href="http://www.osl.iu.edu/research/ft/ompi-cr/examples.php#uc-ckpt-local">http://www.osl.iu.edu/research/ft/ompi-cr/examples.php#uc-ckpt-local</a>
<br>
<p>What version of Open MPI are you using? This functionality is known to be broken on the v1.3/1.4 branches, per the ticket below:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2139">https://svn.open-mpi.org/trac/ompi/ticket/2139</a>
<br>
<p>Try the nightly snapshot of the 1.5 branch or the development trunk, and see if this issues still occurs.
<br>
<p>-- Josh
<br>
<p>On Feb 8, 2010, at 8:35 AM, Andreea Costea wrote:
<br>
<p><span class="quotelev1">&gt; I asked this question because checkpointing with to NFS is successful, but checkpointing without a mount filesystem or a shared storage throws this warning&amp;error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Could not preload specified file: File already exists. 
</span><br>
<span class="quotelev1">&gt; Fileset: /home/andreea/checkpoints/global/ompi_global_snapshot_7426.ckpt/0 
</span><br>
<span class="quotelev1">&gt; Host: X 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will continue attempting to launch the process. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; filem:rsh: wait_all(): Wait failed (-1) 
</span><br>
<span class="quotelev1">&gt; [[62871,0],0] ORTE_ERROR_LOG: Error in file snapc_full_global.c at line 1054 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; even if I set the mca-parameters like this:
</span><br>
<span class="quotelev1">&gt; snapc_base_store_in_place=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; crs_base_snapshot_dir
</span><br>
<span class="quotelev1">&gt; =/home/andreea/checkpoints/local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; snapc_base_global_snapshot_dir
</span><br>
<span class="quotelev1">&gt; =/home/andreea/checkpoints/global
</span><br>
<span class="quotelev1">&gt; and the nodes can connect through ssh without a password. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 8, 2010 at 12:59 PM, Andreea Costea &lt;andre.costea_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's say I have an MPI application running on several hosts. Is there any way to checkpoint this application without having a shared storage between the nodes?
</span><br>
<span class="quotelev1">&gt; I already took a look at the examples here <a href="http://www.osl.iu.edu/research/ft/ompi-cr/examples.php">http://www.osl.iu.edu/research/ft/ompi-cr/examples.php</a>, but it seems that in both cases there is a globally mounted file system. 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12039.php">Prentice Bisbal: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<li><strong>Previous message:</strong> <a href="12037.php">Andreea Costea: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="12037.php">Andreea Costea: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
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
