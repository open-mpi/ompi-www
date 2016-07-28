<?
$subject_val = "Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 05:50:18 2011" -->
<!-- isoreceived="20110809095018" -->
<!-- sent="Tue, 09 Aug 2011 11:50:09 +0200" -->
<!-- isosent="20110809095009" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows" -->
<!-- id="4E4102D1.9010601_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2EAABC017DFC334F86A75A08D3FCE13F785B5F3AF9_at_VAUNSW138.au.cbainet.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-09 05:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17032.php">David Warren: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>Previous message:</strong> <a href="17030.php">Reuti: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>In reply to:</strong> <a href="17028.php">Chee, Clinton: "[OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17043.php">Shiqing Fan: "Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Clinton,
<br>
<p><span class="quotelev1">&gt; Just wondering if anyone can point me to the detailed information on 
</span><br>
<span class="quotelev1">&gt; how to setup multiple nodes and network them together to use OpenMPI. 
</span><br>
<span class="quotelev1">&gt; Also what is the proper way to specify which nodes to run on. I wish 
</span><br>
<span class="quotelev1">&gt; to use OpenMPI on the Windows XP or Windows Server 2008 platform, with 
</span><br>
<span class="quotelev1">&gt; Intel Fortran 11 as the programming language.
</span><br>
<p>If you use Windows XP, you have to specify --host or --hostfile option 
<br>
in the command line. see mpirun --help for more details. On Windows 
<br>
server 2008, you can also specify the node names through the Job Monitor 
<br>
GUI.
<br>
<p><span class="quotelev1">&gt; I have searched Google and also looked through the OpenMPI website but 
</span><br>
<span class="quotelev1">&gt; there does not seem to be any comprehensive documents to run OpenMPI 
</span><br>
<span class="quotelev1">&gt; on Windows, especially setting up the nodes.
</span><br>
<p>For working on multiple nodes on Windows XP, the only thing you have to 
<br>
make sure is that the WMI is able to launch process remotely, which 
<br>
referred to the two MSDN links in the WINDOWS.TXT file. Other then this, 
<br>
no other special setting is necessary, just install one pre-compiled 
<br>
installer, it will configure the environment automatically for you.
<br>
<p><span class="quotelev1">&gt; Many years ago, I played a bit with Mpich and LAM MPI on a purely 
</span><br>
<span class="quotelev1">&gt; Linux platform. On Linux clusters, it is easy -- the head node see 
</span><br>
<span class="quotelev1">&gt; each of the compute nodes. As I remember, the programmer need to only 
</span><br>
<span class="quotelev1">&gt; write the names of the compute nodes in some sort of config file. The 
</span><br>
<span class="quotelev1">&gt; job is submitted and based on the compute nodes listed, the mpi will 
</span><br>
<span class="quotelev1">&gt; run on them.
</span><br>
<span class="quotelev1">&gt; On Windows, what kind of networking is needed to tie the nodes 
</span><br>
<span class="quotelev1">&gt; together? (assuming we are not using any of the MS HPC Pack or Compute 
</span><br>
<span class="quotelev1">&gt; Cluster). How do we specify which nodes to use? How do we specify any 
</span><br>
<span class="quotelev1">&gt; security or group permissions for the nodes?
</span><br>
You should have at least TCP connections among the nodes. I don't 
<br>
understand what security and group permissions stands for here.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************** IMPORTANT MESSAGE *****************************
</span><br>
<span class="quotelev1">&gt; This e-mail message is intended only for the addressee(s) and contains 
</span><br>
<span class="quotelev1">&gt; information which may be
</span><br>
<span class="quotelev1">&gt; confidential.
</span><br>
<span class="quotelev1">&gt; If you are not the intended recipient please advise the sender by 
</span><br>
<span class="quotelev1">&gt; return email, do not use or
</span><br>
<span class="quotelev1">&gt; disclose the contents, and delete the message and any attachments from 
</span><br>
<span class="quotelev1">&gt; your system. Unless
</span><br>
<span class="quotelev1">&gt; specifically indicated, this email does not constitute formal advice 
</span><br>
<span class="quotelev1">&gt; or commitment by the sender
</span><br>
<span class="quotelev1">&gt; or the Commonwealth Bank of Australia (ABN 48 123 123 124) or its 
</span><br>
<span class="quotelev1">&gt; subsidiaries.
</span><br>
<span class="quotelev1">&gt; We can be contacted through our web site: commbank.com.au.
</span><br>
<span class="quotelev1">&gt; If you no longer wish to receive commercial electronic messages from 
</span><br>
<span class="quotelev1">&gt; us, please reply to this
</span><br>
<span class="quotelev1">&gt; e-mail by typing Unsubscribe in the subject line.
</span><br>
<span class="quotelev1">&gt; **************************************************************
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17032.php">David Warren: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>Previous message:</strong> <a href="17030.php">Reuti: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>In reply to:</strong> <a href="17028.php">Chee, Clinton: "[OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17043.php">Shiqing Fan: "Re: [OMPI users] How to setup and use nodes for OpenMPI on Windows"</a>
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
