<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 03:09:14 2007" -->
<!-- isoreceived="20070831070914" -->
<!-- sent="Fri, 31 Aug 2007 10:07:41 +0300" -->
<!-- isosent="20070831070741" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Port Range" -->
<!-- id="20070831070741.GA10106_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45ae3b650708310004o3e05d353q19cd19356de3447b_at_mail.gmail.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-31 03:07:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3959.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Previous message:</strong> <a href="3957.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3957.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3959.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Reply:</strong> <a href="3959.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Reply:</strong> <a href="3961.php">Sven Stork: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Aug 31, 2007 at 08:04:00AM +0100, Simon Hammond wrote:
<br>
<span class="quotelev1">&gt; On 31/08/2007, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Received from George Bosilca on Thu, Aug 30, 2007 at 07:42:52PM EDT:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have a patch for this, but I never felt a real need for it, so I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; never push it in the trunk. I'm not completely convinced that we need
</span><br>
<span class="quotelev3">&gt; &gt; &gt; it, except in some really strange situations (read grid). Why do you
</span><br>
<span class="quotelev3">&gt; &gt; &gt; need a port range ? For avoiding firewalls ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are planning on using OpenMPI as the basis for running MPI jobs
</span><br>
<span class="quotelev1">&gt; across a series of workstations overnight. The workstations are locked
</span><br>
<span class="quotelev1">&gt; down so that only a small number of ports are available for use. If we
</span><br>
<span class="quotelev1">&gt; try to use anything else its disaster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately this is really an organizational policy above anything
</span><br>
<span class="quotelev1">&gt; else and its very difficult to get it to change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
As workaround you can write application that will bind to all ports that
<br>
are not allowed to be used by MPI before running MPI job.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3959.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Previous message:</strong> <a href="3957.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3957.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3959.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Reply:</strong> <a href="3959.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Reply:</strong> <a href="3961.php">Sven Stork: "Re: [OMPI users] OpenMPI and Port Range"</a>
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
