<?
$subject_val = "[OMPI users] How to setup and use nodes for OpenMPI on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  8 00:06:57 2011" -->
<!-- isoreceived="20110808040657" -->
<!-- sent="Mon, 8 Aug 2011 14:06:47 +1000" -->
<!-- isosent="20110808040647" -->
<!-- name="Chee, Clinton" -->
<!-- email="Clinton.Chee_at_[hidden]" -->
<!-- subject="[OMPI users] How to setup and use nodes for OpenMPI on Windows" -->
<!-- id="2EAABC017DFC334F86A75A08D3FCE13F785B5F3AF9_at_VAUNSW138.au.cbainet.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] How to setup and use nodes for OpenMPI on Windows<br>
<strong>From:</strong> Chee, Clinton (<em>Clinton.Chee_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-08 00:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17029.php">Christopher Jones: "[OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>Previous message:</strong> <a href="17027.php">Ralph Castain: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17031.php">Shiqing Fan: "Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<li><strong>Reply:</strong> <a href="17031.php">Shiqing Fan: "Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<li><strong>Maybe reply:</strong> <a href="17043.php">Shiqing Fan: "Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Just wondering if anyone can point me to the detailed information on how to setup multiple nodes and network them together to use OpenMPI. Also what is the proper way to specify which nodes to run on. I wish to use OpenMPI on the Windows XP or Windows Server 2008 platform, with Intel Fortran 11 as the programming language.
<br>
<p>I have searched Google and also looked through the OpenMPI website but there does not seem to be any comprehensive documents to run OpenMPI on Windows, especially setting up the nodes.
<br>
<p>Many years ago, I played a bit with Mpich and LAM MPI on a purely Linux platform. On Linux clusters, it is easy - the head node see each of the compute nodes. As I remember, the programmer need to only write the names of the compute nodes in some sort of config file. The job is submitted and based on the compute nodes listed, the mpi will run on them.
<br>
<p>On Windows, what kind of networking is needed to tie the nodes together? (assuming we are not using any of the MS HPC Pack or Compute Cluster). How do we specify which nodes to use? How do we specify any security or group permissions for the nodes?
<br>
<p>Would be great if someone got some documentation for this.
<br>
<p>Thanks
<br>
Clinton
<br>
<p><p><p><p><p><p>************** IMPORTANT MESSAGE *****************************       
<br>
This e-mail message is intended only for the addressee(s) and contains information which may be
<br>
confidential. 
<br>
If you are not the intended recipient please advise the sender by return email, do not use or
<br>
disclose the contents, and delete the message and any attachments from your system. Unless
<br>
specifically indicated, this email does not constitute formal advice or commitment by the sender
<br>
or the Commonwealth Bank of Australia (ABN 48 123 123 124) or its subsidiaries. 
<br>
We can be contacted through our web site: commbank.com.au. 
<br>
If you no longer wish to receive commercial electronic messages from us, please reply to this
<br>
e-mail by typing Unsubscribe in the subject line. 
<br>
**************************************************************
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17028/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17029.php">Christopher Jones: "[OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>Previous message:</strong> <a href="17027.php">Ralph Castain: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17031.php">Shiqing Fan: "Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<li><strong>Reply:</strong> <a href="17031.php">Shiqing Fan: "Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<li><strong>Maybe reply:</strong> <a href="17043.php">Shiqing Fan: "Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
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
