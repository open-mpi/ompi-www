<?
$subject_val = "Re: [OMPI users] Shared Memory Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 26 14:15:31 2011" -->
<!-- isoreceived="20110326181531" -->
<!-- sent="Sat, 26 Mar 2011 12:15:22 -0600" -->
<!-- isosent="20110326181522" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Problem." -->
<!-- id="88165BB9-C00D-4903-AA9B-874D3884B499_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=iOz5830nAZ5K3f8huccFNcrKCthLodZoexsB3_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-26 14:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15998.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="15996.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="15995.php">Michele Marena: "[OMPI users] Shared Memory Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15999.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Reply:</strong> <a href="15999.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 26, 2011, at 11:34 AM, Michele Marena wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I've a problem with shared memory. When my application runs using pure message passing (one process for node), it terminates and returns correct results. When 2 processes share a node and use shared memory for exchanges messages, my application don't terminate. At shell I write &quot;mpirun -nolocal --mca self,sm,tcp ... (forces interface to eth0)... -np (number of processes) executable arguments&quot;.
</span><br>
<p>That's not right. If you want the apps to use shared memory, you don't have to do anything. However, if you do want to specify, then the correct syntax is
<br>
<p>mpirun -mca btl self,sm,tcp
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope you help me.
</span><br>
<span class="quotelev1">&gt; I thank you.
</span><br>
<span class="quotelev1">&gt; Michele _______________________________________________
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
<li><strong>Next message:</strong> <a href="15998.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="15996.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="15995.php">Michele Marena: "[OMPI users] Shared Memory Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15999.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Reply:</strong> <a href="15999.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
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
