<?
$subject_val = "[OMPI users] Processor affinitiy";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 15:02:09 2008" -->
<!-- isoreceived="20080423190209" -->
<!-- sent="Wed, 23 Apr 2008 15:01:47 -0400" -->
<!-- isosent="20080423190147" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="[OMPI users] Processor affinitiy" -->
<!-- id="80804794-D3CC-4802-BEBF-A7D97D219FD1_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Processor affinitiy<br>
<strong>From:</strong> Alberto Giannetti (<em>albertogiannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-23 15:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5466.php">Danesh Daroui: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5464.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5471.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>Reply:</strong> <a href="5471.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>Maybe reply:</strong> <a href="5555.php">Brian Taylor: "Re: [OMPI users] Processor affinitiy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would like to run one of my MPI processors to a single core on my  
<br>
iMac Intel Core Duo system. I'm using release 1.2.4 on Darwin 8.11.1.  
<br>
It looks like processor affinity is not supported for this kind of  
<br>
configuration:
<br>
<p><span class="quotelev1">&gt; $ ompi_info|grep affinity
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<p><span class="quotelev1">&gt;                 Open MPI: 1.2.4
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r16187
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.4
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r16187
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.4
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r16187
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/local/
</span><br>
<span class="quotelev1">&gt;  Configured architecture: i386-apple-darwin8.10.0
</span><br>
<span class="quotelev1">&gt;            Configured by: brbarret
</span><br>
<span class="quotelev1">&gt;            Configured on: Tue Oct 16 12:03:41 EDT 2007
</span><br>
<span class="quotelev1">&gt;           Configure host: ford.osl.iu.edu
</span><br>
<span class="quotelev1">&gt;                 Built by: brbarret
</span><br>
<span class="quotelev1">&gt;                 Built on: Tue Oct 16 12:15:57 EDT 2007
</span><br>
<span class="quotelev1">&gt;               Built host: ford.osl.iu.edu
</span><br>
<p>Can I get processor affinity recompiling the distribution, maybe with  
<br>
different option?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5466.php">Danesh Daroui: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="5464.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5471.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>Reply:</strong> <a href="5471.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>Maybe reply:</strong> <a href="5555.php">Brian Taylor: "Re: [OMPI users] Processor affinitiy"</a>
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
