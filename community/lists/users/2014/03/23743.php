<?
$subject_val = "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 17:44:12 2014" -->
<!-- isoreceived="20140302224412" -->
<!-- sent="Sun, 2 Mar 2014 23:44:01 +0100" -->
<!-- isosent="20140302224401" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes" -->
<!-- id="AE4FC228-C07C-45F0-AEA4-8566E5D1DBE7_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJTHAucT01zNaxJaw-GZBO1+-QiUQCyBcpK3i5T77GhDZ0qMVw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 17:44:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23744.php">Filippo Spiga: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23742.php">Victor: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>In reply to:</strong> <a href="23742.php">Victor: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23911.php">hsaeed: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel	nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 02.03.2014 um 23:39 schrieb Victor:
<br>
<p><span class="quotelev1">&gt; Thanks for your reply. There are some updates, but it was too late last night to post it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I now have the AMD/Intel heterogeneous cluster up and running. The initial problem was that when I installed OpenMPI on the AMD nodes, the library paths were set to a different location than on the Intel nodes. I am not sure why.
</span><br>
<p>/lib vs. /lib64? It depends on the version of `libtool` on the machine IIRC.
<br>
<p><p><span class="quotelev1">&gt; In any case I then followed the suggestion from the FAQ and instead shared the same OpenMPI install directory with all the nodes via NFS. Now the job is running so I can confirm that it is indeed possible to run the same job on a heterogeneous cluster comprised of AMD and Intel nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.7.4 now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a related problem though. I am sharing /opt/openmpi-1.7.4 via NFS but there does not seem to be a way to tell the nodes where OpenMPI is located when using non-interactive SSH (using secure key login). SSH does not seem to parse .bash_profile so I do not know how to tell the jobs on the nodes where to find OpenMPI except by starting the job with /opt/openmpi-1.7.4/bin/mpirun.
</span><br>
<p>For a non-interactive login ~/.bashrc is used.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Regarding open-mx, yes I will look into that next to see if the job is indeed using it. My msa flag is --mca mx self
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
<li><strong>Next message:</strong> <a href="23744.php">Filippo Spiga: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23742.php">Victor: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<li><strong>In reply to:</strong> <a href="23742.php">Victor: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23911.php">hsaeed: "Re: [OMPI users] Heterogeneous cluster problem - mixing AMD and Intel	nodes"</a>
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
