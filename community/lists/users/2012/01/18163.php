<?
$subject_val = "Re: [OMPI users] Strange TCP latency results on Amazon EC2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 13 13:40:49 2012" -->
<!-- isoreceived="20120113184049" -->
<!-- sent="Fri, 13 Jan 2012 13:40:45 -0500" -->
<!-- isosent="20120113184045" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange TCP latency results on Amazon EC2" -->
<!-- id="CAHwLALPoGEOvB=VrB_BMbusHEs+4mcdEHyVMP5e+5CvxyE1GGQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFM0RYJHR5Su9W_VpMwFUackSLo=07kep9+nARXUfTCOtgramg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange TCP latency results on Amazon EC2<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-13 13:40:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18164.php">Conn ORourke: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>Previous message:</strong> <a href="18162.php">Bogdan Costescu: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>In reply to:</strong> <a href="18119.php">Roberto Rey: "[OMPI users] Strange TCP latency results on Amazon EC2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 10, 2012 at 10:02 AM, Roberto Rey &lt;eros.83_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'm running some tests on EC2 cluster instances with 10 Gigabit Ethernet
</span><br>
<span class="quotelev1">&gt; hardware and I'm getting strange latency results with Netpipe and OpenMPI.
</span><br>
<p>- There are 3 types of instances that can use 10 GbE. Are you using
<br>
&quot;cc1.4xlarge&quot;, &quot;cc2.8xlarge&quot;, or &quot;cg1.4xlarge&quot;??
<br>
<p>- Did you set up a placement group??
<br>
<p>- Also, which AMI are you using??
<br>
<p><p><span class="quotelev1">&gt; I'm using the BTL TCP in OpenMPI, so I can't understand why OpenMPI
</span><br>
<span class="quotelev1">&gt; outperforms raw TCP performance for small messages (40us of difference).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can OpenMPI outperform Netpipe over TCP? Why? Is OpenMPI  doing any
</span><br>
<span class="quotelev1">&gt; optimization in BTL TCP?
</span><br>
<p>It is indeed interesting!
<br>
<p>If we can run strace with timing (like strace -tt) and compare the
<br>
difference between NPmpi &amp; NPtcp, then we can get a better idea on
<br>
what's happening.
<br>
<p>It is possible that one is doing more busy polling than another,
<br>
and/or triggering Xen to handle things a bit differently. Also, we
<br>
should check the socket options, and also check the system call
<br>
latency to see if the network is really accountable for the extra 40us
<br>
delay.
<br>
<p><p><span class="quotelev1">&gt; The results for OpenMPI aren't so good but we must take into account the
</span><br>
<span class="quotelev1">&gt; network virtualization overhead under Xen
</span><br>
<p>If you are running Cluster Compute Instances, then you are using HVM.
<br>
If things are setup properly (HVM &amp; placement group), then you can
<br>
even get a Top500 computer on EC2... Amazon uses similar setups for
<br>
their TOP500 submission:
<br>
<p><a href="http://i.top500.org/site/50321">http://i.top500.org/site/50321</a>
<br>
<p>Rayson
<br>
<p>=================================
<br>
Open Grid Scheduler / Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p>Scalable Grid Engine Support Program
<br>
<a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18164.php">Conn ORourke: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>Previous message:</strong> <a href="18162.php">Bogdan Costescu: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>In reply to:</strong> <a href="18119.php">Roberto Rey: "[OMPI users] Strange TCP latency results on Amazon EC2"</a>
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
