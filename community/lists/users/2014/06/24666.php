<?
$subject_val = "Re: [OMPI users] connect() fails - inhomogeneous cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 09:44:54 2014" -->
<!-- isoreceived="20140617134454" -->
<!-- sent="Tue, 17 Jun 2014 15:44:41 +0200" -->
<!-- isosent="20140617134441" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] connect() fails - inhomogeneous cluster" -->
<!-- id="06183F19-1B83-423A-A168-D8D3DFEE8E35_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="trinity-836a4b30-9ce3-4bf3-a440-6b514ea808d8-1403009581062_at_3capp-gmx-bs45" -->
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
<strong>Subject:</strong> Re: [OMPI users] connect() fails - inhomogeneous cluster<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-17 09:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24667.php">borno_borno_at_[hidden]: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="24665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on licensing"</a>
<li><strong>In reply to:</strong> <a href="24664.php">borno_borno_at_[hidden]: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24667.php">borno_borno_at_[hidden]: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="24667.php">borno_borno_at_[hidden]: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 17.06.2014 um 14:53 schrieb borno_borno_at_[hidden]:
<br>
<p><span class="quotelev1">&gt; I should have written that...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun -np n --hostfile host.cfg
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpi_at_Ries   slots=n_1 max_slots=n_1
</span><br>
<span class="quotelev1">&gt; mpi_at_Euler  slots=n_2 max_slots=n_2
</span><br>
<p>Although it's defined to use characters in a case insensitive manner in hostnames, my experience is that not all calls are mapping it in a proper way. To avoid any confusion because of this, it's best to have them all in lowercase. I don't know whether this is related to your observation.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; It is arranged that the sum over the n_i is equal to n.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Kurt
</span><br>
<span class="quotelev1">&gt; Gesendet: Dienstag, 17. Juni 2014 um 14:25 Uhr
</span><br>
<span class="quotelev1">&gt; Von: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; An: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] connect() fails - inhomogeneous cluster
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 17.06.2014 um 13:00 schrieb Borno Knuttelski:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; this is the first time I contact this list. I'm using OpenMPI 1.6.5 on an inhomogeneous cluster with 2 machines. Short: With few processes everything works fine but with some more my application crashes. (Yes, I can guarantee that in every scenario I start processes on both machines). I posted the problem already with all details on stackoverflow (<a href="http://stackoverflow.com/questions/24164825/mpi-connect-fails-inhomogeneous-cluster">http://stackoverflow.com/questions/24164825/mpi-connect-fails-inhomogeneous-cluster</a>). Please have a look at it. What exactly is the problem and how can I fix it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do you start the program - just with `mpiexec` and a proper hostfile and number of slots?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Every help and guess is appreciated and will be tested...
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kurt
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24662.php">http://www.open-mpi.org/community/lists/users/2014/06/24662.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24663.php">http://www.open-mpi.org/community/lists/users/2014/06/24663.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24664.php">http://www.open-mpi.org/community/lists/users/2014/06/24664.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24667.php">borno_borno_at_[hidden]: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="24665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on licensing"</a>
<li><strong>In reply to:</strong> <a href="24664.php">borno_borno_at_[hidden]: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24667.php">borno_borno_at_[hidden]: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="24667.php">borno_borno_at_[hidden]: "Re: [OMPI users] connect() fails - inhomogeneous cluster"</a>
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
