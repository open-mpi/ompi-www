<?
$subject_val = "Re: [OMPI users] Communications problems w/OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 04:26:38 2008" -->
<!-- isoreceived="20081218092638" -->
<!-- sent="Thu, 18 Dec 2008 10:26:34 +0100" -->
<!-- isosent="20081218092634" -->
<!-- name="Jeroen Kleijer" -->
<!-- email="jeroen.kleijer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communications problems w/OpenMPI" -->
<!-- id="dad39cd60812180126j1a9acf79qbb3c720d1fc702c0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="494A0691.1090408_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Communications problems w/OpenMPI<br>
<strong>From:</strong> Jeroen Kleijer (<em>jeroen.kleijer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-18 04:26:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7560.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7558.php">deadchicken_at_[hidden]: "[OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="7558.php">deadchicken_at_[hidden]: "[OMPI users] Communications problems w/OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7560.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Reply:</strong> <a href="7560.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Reply:</strong> <a href="7562.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; After compiling it, I copied it over to the other machine and tried
</span><br>
<span class="quotelev1">&gt; running it with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -v --mca btl self,tcp -np 4 --machinefile machines /mnt/mpihw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which produces:
</span><br>
<p>[.....]
<br>
<p><span class="quotelev1">&gt; AFAIK, the machines are able to communicate with each other on any port
</span><br>
<span class="quotelev1">&gt; you like, just not with MPI. Any idea what's wrong?
</span><br>
<p>The stable branch (1.2.x) works perfectly but _only_ when the
<br>
communication channel between machines are in the same subnet.
<br>
(ethernet)
<br>
Since you don't have that much control over which subnet your machines
<br>
get in, OpenMPI has a tendency to fail in Amazon's EC2.
<br>
<p>However, if you're able to compile and use a version of the
<br>
development branch (1.3) you should be use compile and run the &quot;hello
<br>
world&quot; program without problems, regardless of the subnet they're in.
<br>
<p><p>Regards,
<br>
<p>Jeroen Kleijer
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7560.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7558.php">deadchicken_at_[hidden]: "[OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="7558.php">deadchicken_at_[hidden]: "[OMPI users] Communications problems w/OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7560.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Reply:</strong> <a href="7560.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Reply:</strong> <a href="7562.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
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
