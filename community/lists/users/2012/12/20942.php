<?
$subject_val = "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 09:38:04 2012" -->
<!-- isoreceived="20121213143804" -->
<!-- sent="Thu, 13 Dec 2012 06:37:56 -0800" -->
<!-- isosent="20121213143756" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17" -->
<!-- id="56DBFA40-6D48-4DF8-B40E-D0AD715E00E4_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="COL122-W24336BF7BD93B48DC5EAB2FE4E0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-13 09:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20943.php">Ng Shi Wei: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Previous message:</strong> <a href="20941.php">Rolf vandeVaart: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>In reply to:</strong> <a href="20937.php">Ng Shi Wei: "[OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20943.php">Ng Shi Wei: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Reply:</strong> <a href="20943.php">Ng Shi Wei: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of OMPI are you running? We stopped supporting bproc after the 1.2 series, though you could always launch via ssh.
<br>
<p>On Dec 12, 2012, at 10:25 PM, Ng Shi Wei &lt;nsw_1216_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am new in Linux and clustering. I am setting up a Beowulf Cluster using several PCs according to this guide <a href="http://www.tldp.org/HOWTO/html_single/Beowulf-HOWTO/">http://www.tldp.org/HOWTO/html_single/Beowulf-HOWTO/</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have setup and configure accordingly except for NFS part. Because I am not requiring it for my application. I have set my ssh to login each other without password. I started with 2 nodes 1st. I can compile and run in my headnode using openmpi. But when I try to run my MPI application across nodes, there is nothing displaying. It just like hanging there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Headnode: master
</span><br>
<span class="quotelev1">&gt; client: slave4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command I used to mpirun across nodes is as below:
</span><br>
<span class="quotelev1">&gt; Code:
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 --host slave4 output
</span><br>
<span class="quotelev1">&gt; Since I not using NFS, so I installed OpenMPI in every nodes with same locations. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wondering I missed out any configurations or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope someone can help me out of this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Shi Wei
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20942/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20943.php">Ng Shi Wei: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Previous message:</strong> <a href="20941.php">Rolf vandeVaart: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>In reply to:</strong> <a href="20937.php">Ng Shi Wei: "[OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20943.php">Ng Shi Wei: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Reply:</strong> <a href="20943.php">Ng Shi Wei: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
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
