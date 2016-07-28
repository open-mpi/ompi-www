<?
$subject_val = "Re: [OMPI users] Doubts regarding mpi configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 11:18:25 2008" -->
<!-- isoreceived="20080131161825" -->
<!-- sent="Thu, 31 Jan 2008 11:18:20 -0500" -->
<!-- isosent="20080131161820" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Doubts regarding mpi configuration" -->
<!-- id="99D27DE2-93BF-4EC2-ACD4-51006D00C0C1_at_eecs.utk.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="002d01c86423$af7d8150$0e7883f0$_at_pt" -->
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
<strong>Subject:</strong> Re: [OMPI users] Doubts regarding mpi configuration<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 11:18:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4939.php">Tim Prins: "Re: [OMPI users] OpenMPI/Myrinet dynamic process management"</a>
<li><strong>Previous message:</strong> <a href="4937.php">Bruno Santos: "[OMPI users] Doubts regarding mpi configuration"</a>
<li><strong>In reply to:</strong> <a href="4937.php">Bruno Santos: "[OMPI users] Doubts regarding mpi configuration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Usually, this means a mismatch between the Open MPI installation on  
<br>
the head node and the one on the compute nodes. A quick ompi_info (on  
<br>
the front end as well as the back end) will show you the version  
<br>
number of the installed release.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 31, 2008, at 11:09 AM, Bruno Santos wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am trying to set up clustalw-mpi on a local cluster. But I am  
</span><br>
<span class="quotelev1">&gt; having several problems that a search through the FAQ and mailing  
</span><br>
<span class="quotelev1">&gt; list were not able to solve.
</span><br>
<span class="quotelev1">&gt; I have installed open-mpi in the front end of the cluster, my doubt  
</span><br>
<span class="quotelev1">&gt; is if I also to install mpi in all the nodes I will use.
</span><br>
<span class="quotelev1">&gt; Currently the mpi is working in the front end, but when I try to use  
</span><br>
<span class="quotelev1">&gt; a different node using: mpirun &#150;np 1 &#150;host root_at_192.168.0.1,  I get  
</span><br>
<span class="quotelev1">&gt; the following error:
</span><br>
<span class="quotelev1">&gt; [biocluster.biocant.pt:07881] [0,0,0] ORTE_ERROR_LOG: Data unpack  
</span><br>
<span class="quotelev1">&gt; had inadequate space in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; [biocluster.biocant.pt:07881] [0,0,0] ORTE_ERROR_LOG: Data unpack  
</span><br>
<span class="quotelev1">&gt; had inadequate space in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt; [biocluster.biocant.pt:07881] [0,0,0] ORTE_ERROR_LOG: Data unpack  
</span><br>
<span class="quotelev1">&gt; had inadequate space in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; [biocluster.biocant.pt:07881] [0,0,0] ORTE_ERROR_LOG: Data unpack  
</span><br>
<span class="quotelev1">&gt; had inadequate space in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt; [biocluster.biocant.pt:07881] [0,0,0] ORTE_ERROR_LOG: Data unpack  
</span><br>
<span class="quotelev1">&gt; had inadequate space in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; [biocluster.biocant.pt:07881] [0,0,0] ORTE_ERROR_LOG: Data unpack  
</span><br>
<span class="quotelev1">&gt; had inadequate space in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Bruno Santos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;image001.gif&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bioinformatics Unit
</span><br>
<span class="quotelev1">&gt; Biocantpark,  N&#250;cleo 04, Lote 3
</span><br>
<span class="quotelev1">&gt; 3060-197 Cantanhede
</span><br>
<span class="quotelev1">&gt; Tel: 231 410 892 E-mail: bsantos_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://bioinformatics.biocant.pt">http://bioinformatics.biocant.pt</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4938/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4939.php">Tim Prins: "Re: [OMPI users] OpenMPI/Myrinet dynamic process management"</a>
<li><strong>Previous message:</strong> <a href="4937.php">Bruno Santos: "[OMPI users] Doubts regarding mpi configuration"</a>
<li><strong>In reply to:</strong> <a href="4937.php">Bruno Santos: "[OMPI users] Doubts regarding mpi configuration"</a>
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
