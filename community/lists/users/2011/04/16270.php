<?
$subject_val = "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 10:16:49 2011" -->
<!-- isoreceived="20110418141649" -->
<!-- sent="Mon, 18 Apr 2011 16:16:35 +0200" -->
<!-- isosent="20110418141635" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun unsuccessful when run across multiple nodes" -->
<!-- id="ECCB4850-00E1-4B95-8A76-599C9CD421DA_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTin+XYtamiOkmi3q3xm-H47M-gkvjw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun unsuccessful when run across multiple nodes<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-18 10:16:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16271.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16269.php">chenjie gu: "[OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16269.php">chenjie gu: "[OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16271.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16271.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 18.04.2011 um 15:40 schrieb chenjie gu:
<br>
<p><span class="quotelev1">&gt; I am a green hand on Openmpi, I have the following Openmpi structure, however it has problem when running across multiple nodes.
</span><br>
<span class="quotelev1">&gt; I am trying to build a Bewolf Cluster between 6 nodes of our serve (HP Proliant G460 G7), I have installed the Openmpi on one node (assuming at /mirror),
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/mirror/openmpi CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; make all install 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using NFS, the directory of /mirror was successfully exported to the rest of 5 nodes. Now as I test the Openmpi, it runs very well on a single node, 
</span><br>
<span class="quotelev1">&gt; however it hangs across multiple nodes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now one possible reason as I know is that Openmpi uses TCP to exchange data between different nodes, so I am worried about 
</span><br>
<span class="quotelev1">&gt; whether there are firewalls between each nodes, which can be factory integrated at somewhere(switch/NIC). Could anyone give me some 
</span><br>
<span class="quotelev1">&gt; information on this point?
</span><br>
<p>It's not only about MPI communcation. Before you need some means to allow the startup of the local orte daemons on each machine by passphraseless ssh-keys or better hostbased authentication <a href="http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html">http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html</a> , or enable `rsh` on the machines and tell Open MPI to use it. Is:
<br>
<p>mpiexec hostname
<br>
<p>giving you a list of the involved machines?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; ArchyGU
</span><br>
<span class="quotelev1">&gt; Nanyang Technological University
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
<li><strong>Next message:</strong> <a href="16271.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16269.php">chenjie gu: "[OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16269.php">chenjie gu: "[OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16271.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16271.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
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
