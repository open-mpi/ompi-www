<?
$subject_val = "Re: [OMPI users] Shared Memory Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 26 15:57:14 2011" -->
<!-- isoreceived="20110326195714" -->
<!-- sent="Sat, 26 Mar 2011 13:57:06 -0600" -->
<!-- isosent="20110326195706" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Problem." -->
<!-- id="7591FC31-28B5-4F96-A2F0-0F0A1C295858_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTim8GjB7X7F8HO3evwevLmwECVetqb9a5yPJTwhK_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-03-26 15:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16002.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Previous message:</strong> <a href="16000.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="15999.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16002.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Reply:</strong> <a href="16002.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you update to a more recent version? That version is several years out-of-date - we don't even really support it any more.
<br>
<p><p>On Mar 26, 2011, at 1:04 PM, Michele Marena wrote:
<br>
<p><span class="quotelev1">&gt; Yes, the syntax is wrong in the email, but I write it correctly when I launch mpirun. When some communicating processes are on the same node the application don't terminate, otherwise the application terminate and its results are correct. My OpenMPI version is 1.2.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/3/26 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2011, at 11:34 AM, Michele Marena wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; I've a problem with shared memory. When my application runs using pure message passing (one process for node), it terminates and returns correct results. When 2 processes share a node and use shared memory for exchanges messages, my application don't terminate. At shell I write &quot;mpirun -nolocal --mca self,sm,tcp ... (forces interface to eth0)... -np (number of processes) executable arguments&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's not right. If you want the apps to use shared memory, you don't have to do anything. However, if you do want to specify, then the correct syntax is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl self,sm,tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope you help me.
</span><br>
<span class="quotelev2">&gt; &gt; I thank you.
</span><br>
<span class="quotelev2">&gt; &gt; Michele _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16001/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16002.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Previous message:</strong> <a href="16000.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="15999.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16002.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
<li><strong>Reply:</strong> <a href="16002.php">Michele Marena: "Re: [OMPI users] Shared Memory Problem."</a>
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
