<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 06:06:44 2007" -->
<!-- isoreceived="20071023100644" -->
<!-- sent="Tue, 23 Oct 2007 12:06:52 +0200" -->
<!-- isosent="20071023100652" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which alternative to OpenMPI should I choose?" -->
<!-- id="471DC7BC.4050603_at_lnl.infn.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="37D09997-78C5-4928-B9A4-29E0FACC8206_at_ieee.org" -->
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
<strong>From:</strong> Marcin Skoczylas (<em>Marcin.Skoczylas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 06:06:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4277.php">Murat Knecht: "[OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Previous message:</strong> <a href="4275.php">Berit Hinnemann: "Re: [OMPI users] SLURM vs. Torque?"</a>
<li><strong>In reply to:</strong> <a href="4256.php">Michael: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael wrote:
<br>
<span class="quotelev1">&gt; The primary difference seems to be that you have all communication  
</span><br>
<span class="quotelev1">&gt; going over a single interface.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes. It's clearly stated in the OpenMPI FAQ that such configuration is 
<br>
not supported:
<br>
<p>These rules do /not/ cover the following cases:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* Running an MPI job that spans a bunch of private networks with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;narrowly-scoped netmasks, such as nodes that have IP addresses
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;192.168.1.10 and 192.168.2.10 with netmasks of 255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i.e., the network fabric makes these two nodes be routable to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;each other, even though the netmask implies that they are on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;different subnets).
<br>
<p><p>This is exactly our case. Anyway, after a discussion with our 
<br>
administrators, we decided to use a walkaround, I run my program only on 
<br>
worker nodes from 192.168.12.0 network, and I got a direct route to 
<br>
these machines from my computer, outside the cluster's private network. 
<br>
So in this configuration, one of worker nodes became a head, and 
<br>
cluster's head is not being used at all.
<br>
That solved problem.
<br>
<p>Thank you for your support!
<br>
<p>regards, Marcin Skoczylas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4277.php">Murat Knecht: "[OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Previous message:</strong> <a href="4275.php">Berit Hinnemann: "Re: [OMPI users] SLURM vs. Torque?"</a>
<li><strong>In reply to:</strong> <a href="4256.php">Michael: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
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
