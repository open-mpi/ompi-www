<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 06:52:23 2007" -->
<!-- isoreceived="20070831105223" -->
<!-- sent="Fri, 31 Aug 2007 13:50:51 +0300" -->
<!-- isosent="20070831105051" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Port Range" -->
<!-- id="20070831105051.GC10106_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200708311049.10439.stork_at_hlrs.de" -->
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
<strong>Date:</strong> 2007-08-31 06:50:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3963.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Previous message:</strong> <a href="3961.php">Sven Stork: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3961.php">Sven Stork: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3963.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Reply:</strong> <a href="3963.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Aug 31, 2007 at 10:49:10AM +0200, Sven Stork wrote:
<br>
<span class="quotelev1">&gt; On Friday 31 August 2007 09:07, Gleb Natapov wrote:
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
<span class="quotelev1">&gt; Another option could be (if that match your policy) to limit the dynamic port 
</span><br>
<span class="quotelev1">&gt; range that is used by your OS. By this all application (unless they ask for 
</span><br>
<span class="quotelev1">&gt; an specific port) will get ports in this limited port range. If so the 
</span><br>
<span class="quotelev1">&gt; following link might be interesting for you:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.ncftp.com/ncftpd/doc/misc/ephemeral_ports.html">http://www.ncftp.com/ncftpd/doc/misc/ephemeral_ports.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I was sure it is possible to set a port range on Linux, but didn't know how.
<br>
This is much better workaround.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3963.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Previous message:</strong> <a href="3961.php">Sven Stork: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>In reply to:</strong> <a href="3961.php">Sven Stork: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3963.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
<li><strong>Reply:</strong> <a href="3963.php">Simon Hammond: "Re: [OMPI users] OpenMPI and Port Range"</a>
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
