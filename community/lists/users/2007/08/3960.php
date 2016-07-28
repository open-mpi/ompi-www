<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 03:29:16 2007" -->
<!-- isoreceived="20070831072916" -->
<!-- sent="Fri, 31 Aug 2007 10:27:40 +0300" -->
<!-- isosent="20070831072740" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Port Range" -->
<!-- id="20070831072740.GB10106_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45ae3b650708310017m27b8169awef2f8017ba0aa5ff_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-08-31 03:27:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3961.php">Sven Stork: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Previous message:</strong> <a href="3959.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3959.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3961.php">Sven Stork: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Aug 31, 2007 at 08:17:36AM +0100, Simon Hammond wrote:
<br>
<span class="quotelev1">&gt; On 31/08/2007, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Aug 31, 2007 at 08:04:00AM +0100, Simon Hammond wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On 31/08/2007, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Received from George Bosilca on Thu, Aug 30, 2007 at 07:42:52PM EDT:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I have a patch for this, but I never felt a real need for it, so I
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; never push it in the trunk. I'm not completely convinced that we need
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; it, except in some really strange situations (read grid). Why do you
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; need a port range ? For avoiding firewalls ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We are planning on using OpenMPI as the basis for running MPI jobs
</span><br>
<span class="quotelev3">&gt; &gt; &gt; across a series of workstations overnight. The workstations are locked
</span><br>
<span class="quotelev3">&gt; &gt; &gt; down so that only a small number of ports are available for use. If we
</span><br>
<span class="quotelev3">&gt; &gt; &gt; try to use anything else its disaster.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unfortunately this is really an organizational policy above anything
</span><br>
<span class="quotelev3">&gt; &gt; &gt; else and its very difficult to get it to change.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As workaround you can write application that will bind to all ports that
</span><br>
<span class="quotelev2">&gt; &gt; are not allowed to be used by MPI before running MPI job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sounds very drastic, thanks for the advice. I'll give it a go. Do you
</span><br>
<span class="quotelev1">&gt; think it might be easy to add this to the source code at sometime
</span><br>
<span class="quotelev1">&gt; though?
</span><br>
<span class="quotelev1">&gt;
</span><br>
It just workaround. Proper solution would be of cause adding an option for this.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3961.php">Sven Stork: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Previous message:</strong> <a href="3959.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3959.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3961.php">Sven Stork: "Re: [OMPI users] OpenMPI and Port Range"</a>
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
