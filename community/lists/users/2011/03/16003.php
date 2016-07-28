<?
$subject_val = "Re: [OMPI users] Shared Memory Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 26 16:30:59 2011" -->
<!-- isoreceived="20110326203059" -->
<!-- sent="Sat, 26 Mar 2011 21:30:44 +0100" -->
<!-- isosent="20110326203044" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Problem." -->
<!-- id="0005A07C-B335-416A-B39A-2F038E73E985_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimKzFuzUCZxYU12fPFa5yoU=EzR9Dyvt63dr81Z_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory Problem.<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-26 16:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16004.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="16002.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>In reply to:</strong> <a href="16002.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16005.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Reply:</strong> <a href="16005.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 26.03.2011 um 21:16 schrieb Michele Marena:
<br>
<p><span class="quotelev1">&gt; No, I can't. I'm not a administrator of the cluster and I'm not the owner.
</span><br>
<p>You can recompile your private version of Open MPI and install it in $HOME/local/openmpi-1.4.3 or alike and set paths accordingly during compilation of your source and execution.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 2011/3/26 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Can you update to a more recent version? That version is several years out-of-date - we don't even really support it any more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2011, at 1:04 PM, Michele Marena wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, the syntax is wrong in the email, but I write it correctly when I launch mpirun. When some communicating processes are on the same node the application don't terminate, otherwise the application terminate and its results are correct. My OpenMPI version is 1.2.7.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2011/3/26 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 26, 2011, at 11:34 AM, Michele Marena wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've a problem with shared memory. When my application runs using pure message passing (one process for node), it terminates and returns correct results. When 2 processes share a node and use shared memory for exchanges messages, my application don't terminate. At shell I write &quot;mpirun -nolocal --mca self,sm,tcp ... (forces interface to eth0)... -np (number of processes) executable arguments&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's not right. If you want the apps to use shared memory, you don't have to do anything. However, if you do want to specify, then the correct syntax is
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -mca btl self,sm,tcp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I hope you help me.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I thank you.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Michele _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16004.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="16002.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>In reply to:</strong> <a href="16002.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16005.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Reply:</strong> <a href="16005.php">Ralph Castain: "Re: [OMPI users] Shared Memory Problem."</a>
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
