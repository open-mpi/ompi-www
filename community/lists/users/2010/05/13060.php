<?
$subject_val = "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 11:18:57 2010" -->
<!-- isoreceived="20100517151857" -->
<!-- sent="Mon, 17 May 2010 17:18:39 +0200" -->
<!-- isosent="20100517151839" -->
<!-- name="Jaime Perea" -->
<!-- email="jaime.perea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)" -->
<!-- id="201005171718.39889.jaime.perea_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)" -->
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
<strong>Subject:</strong> Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)<br>
<strong>From:</strong> Jaime Perea (<em>jaime.perea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 11:18:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13061.php">Ping Luo: "[OMPI users] Question about OpenMPI automatically spawns multiple threads for each task"</a>
<li><strong>Previous message:</strong> <a href="13059.php">Barrett, Brian W: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Maybe in reply to:</strong> <a href="13057.php">Lydia Heck: "[OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
El Lunes 17 Mayo 2010, Scott Atchley escribi&#243;:
<br>
<span class="quotelev1">&gt; On May 16, 2010, at 1:32 PM, Lydia Heck wrote:
</span><br>
<span class="quotelev2">&gt; &gt; When running over gigabit using -mca btl tcp,self,sm  the code runs
</span><br>
<span class="quotelev2">&gt; &gt; alright, which is good as the largest part of our cluster is over
</span><br>
<span class="quotelev2">&gt; &gt; gigabit, and as Gadget-3 scales rather well, the penalty for running over
</span><br>
<span class="quotelev2">&gt; &gt; gigabit is not prohibitive. We also have a myrinet cluster and  on  there
</span><br>
<span class="quotelev2">&gt; &gt; larger runs freeze. However as the gigabit cluster was available we have
</span><br>
<span class="quotelev2">&gt; &gt; not really investigated this until just now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Lydia,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't help with the IB issue, but I am interested in the issue running
</span><br>
<span class="quotelev1">&gt;  over MX.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found a ticket from 2007 regarding Gadget-2. The last set of mails
</span><br>
<span class="quotelev1">&gt;  indicated that the app was running. You have had a few tickets since, but
</span><br>
<span class="quotelev1">&gt;  none mentioned Gadget. Can you give me more details about the hang that
</span><br>
<span class="quotelev1">&gt;  you experienced?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a couple of ideas that we could investigate (one in Open-MPI and the
</span><br>
<span class="quotelev1">&gt;  other in MX).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott
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
Hello
<br>
<p>To add a bit more of noise, I gave up with Gadget2 with openmpi-gm, it
<br>
always gets  frozen, and it may happen after days of integration, I was not
<br>
able to get a clear trend. Now it is working well with mpich-gm (thanks to
<br>
to the nice myricom folks ), meaning that at least  I don't have any 
<br>
hardware problem. 
<br>
<p>Regards 
<br>
<pre>
-- 
           Jaime D. Perea Duarte. &lt;jaime at iaa dot es&gt;
             Linux registered user #10472
           Dep. Astrofisica Extragalactica.
           Instituto de Astrofisica de Andalucia (CSIC)
           Apdo. 3004, 18080 Granada, Spain. 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13061.php">Ping Luo: "[OMPI users] Question about OpenMPI automatically spawns multiple threads for each task"</a>
<li><strong>Previous message:</strong> <a href="13059.php">Barrett, Brian W: "Re: [OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<li><strong>Maybe in reply to:</strong> <a href="13057.php">Lydia Heck: "[OMPI users] gadget-3 locks up using openmpi and infiniband (or myrinet)"</a>
<!-- nextthread="start" -->
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
