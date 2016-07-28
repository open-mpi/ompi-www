<?
$subject_val = "Re: [OMPI users] dual cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 15:42:36 2008" -->
<!-- isoreceived="20081110204236" -->
<!-- sent="Mon, 10 Nov 2008 21:42:48 +0100" -->
<!-- isosent="20081110204248" -->
<!-- name="Fabian H&#195;&#164;nsel" -->
<!-- email="fabian.haensel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual cores" -->
<!-- id="20081110214248.2145462d.fabian.haensel_at_zih.tu-dresden.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="70A5AC06FDB5E54482D19E1C04CDFCF303F74EC2_at_BALI.uhd.campus" -->
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
<strong>Subject:</strong> Re: [OMPI users] dual cores<br>
<strong>From:</strong> Fabian H&#195;&#164;nsel (<em>fabian.haensel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 15:42:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7269.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7267.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7247.php">Hodgess, Erin: "[OMPI users] dual cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7274.php">Raymond Wan: "Re: [OMPI users] dual cores --&gt; timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7274.php">Raymond Wan: "Re: [OMPI users] dual cores --&gt; timing + /usr/bin/time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Erin,
<br>
<p><span class="quotelev1">&gt; I have a dual core laptop and I would like to have both cores running.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the following my-hosts file:
</span><br>
<span class="quotelev1">&gt; localhost slots=2
</span><br>
<p>Be warned that at least in default config running more MPI threads than
<br>
you have cores results in dog slow code.
<br>
<p>Single core machine:
<br>
<p>$ cat my-hosts
<br>
localhost slots=1
<br>
$ mpirun -np 1 -hostfile my-hosts ./sort selectionsort 1024
<br>
&nbsp;&nbsp;1024  0.009905000seconds
<br>
$ mpirun -np 2 -hostfile my-hosts ./sort selectionsort 1024
<br>
&nbsp;&nbsp;1024  4.113605000 seconds
<br>
<p>(on dual core both -np 1 and -np 2 run almost equally fast (only
<br>
slightly speedup due to poor algorithm (developed for demonstration
<br>
purposes))
<br>
<p>Best regards
<br>
&nbsp;&nbsp;Fabian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7269.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7267.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7247.php">Hodgess, Erin: "[OMPI users] dual cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7274.php">Raymond Wan: "Re: [OMPI users] dual cores --&gt; timing + /usr/bin/time"</a>
<li><strong>Reply:</strong> <a href="7274.php">Raymond Wan: "Re: [OMPI users] dual cores --&gt; timing + /usr/bin/time"</a>
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
