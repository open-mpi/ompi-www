<?
$subject_val = "[OMPI users] Doubts regarding mpi configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 11:10:50 2008" -->
<!-- isoreceived="20080131161050" -->
<!-- sent="Thu, 31 Jan 2008 16:09:38 -0000" -->
<!-- isosent="20080131160938" -->
<!-- name="Bruno Santos" -->
<!-- email="bsantos_at_[hidden]" -->
<!-- subject="[OMPI users] Doubts regarding mpi configuration" -->
<!-- id="002d01c86423$af7d8150$0e7883f0$_at_pt" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Doubts regarding mpi configuration<br>
<strong>From:</strong> Bruno Santos (<em>bsantos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 11:09:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4938.php">George Bosilca: "Re: [OMPI users] Doubts regarding mpi configuration"</a>
<li><strong>Previous message:</strong> <a href="4936.php">Robert Latham: "Re: [OMPI users] MPI-IO problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4938.php">George Bosilca: "Re: [OMPI users] Doubts regarding mpi configuration"</a>
<li><strong>Reply:</strong> <a href="4938.php">George Bosilca: "Re: [OMPI users] Doubts regarding mpi configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to set up clustalw-mpi on a local cluster. But I am having
<br>
several problems that a search through the FAQ and mailing list were not
<br>
able to solve. 
<br>
<p>I have installed open-mpi in the front end of the cluster, my doubt is if I
<br>
also to install mpi in all the nodes I will use.
<br>
<p>Currently the mpi is working in the front end, but when I try to use a
<br>
different node using: mpirun &#150;np 1 &#150;host root_at_192.168.0.1,  I get the
<br>
following error:
<br>
<p>[biocluster.biocant.pt:07881] [0,0,0] ORTE_ERROR_LOG: Data unpack had
<br>
inadequate space in file dss/dss_unpack.c at line 90
<br>
<p>[biocluster.biocant.pt:07881] [0,0,0] ORTE_ERROR_LOG: Data unpack had
<br>
inadequate space in file gpr_replica_cmd_processor.c at line 361
<br>
<p>[biocluster.biocant.pt:07881] [0,0,0] ORTE_ERROR_LOG: Data unpack had
<br>
inadequate space in file dss/dss_unpack.c at line 90
<br>
<p>[biocluster.biocant.pt:07881] [0,0,0] ORTE_ERROR_LOG: Data unpack had
<br>
inadequate space in file gpr_replica_cmd_processor.c at line 361
<br>
<p>[biocluster.biocant.pt:07881] [0,0,0] ORTE_ERROR_LOG: Data unpack had
<br>
inadequate space in file dss/dss_unpack.c at line 90
<br>
<p>[biocluster.biocant.pt:07881] [0,0,0] ORTE_ERROR_LOG: Data unpack had
<br>
inadequate space in file gpr_replica_cmd_processor.c at line 361
<br>
<p>&nbsp;
<br>
<p>Thanks in advance,
<br>
<p>Bruno Santos
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>logo_biocant
<br>
<p>&nbsp;
<br>
<p>Bioinformatics Unit
<br>
<p>Biocantpark,  N&#250;cleo 04, Lote 3  
<br>
<p>3060-197 Cantanhede  
<br>
<p>Tel: 231 410 892 E-mail: bsantos_at_[hidden]
<br>
<p>&nbsp;&lt;<a href="http://bioinformatics.biocant.pt/">http://bioinformatics.biocant.pt/</a>&gt; <a href="http://bioinformatics.biocant.pt">http://bioinformatics.biocant.pt</a>
<br>
<p>&nbsp;
<br>
<p><p><p>
<p>
<br><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4937/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-4937/image001.gif" alt="image001.gif">
<!-- attachment="image001.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4938.php">George Bosilca: "Re: [OMPI users] Doubts regarding mpi configuration"</a>
<li><strong>Previous message:</strong> <a href="4936.php">Robert Latham: "Re: [OMPI users] MPI-IO problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4938.php">George Bosilca: "Re: [OMPI users] Doubts regarding mpi configuration"</a>
<li><strong>Reply:</strong> <a href="4938.php">George Bosilca: "Re: [OMPI users] Doubts regarding mpi configuration"</a>
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
