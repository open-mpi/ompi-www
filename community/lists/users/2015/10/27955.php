<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 03:33:43 2015" -->
<!-- isoreceived="20151030073343" -->
<!-- sent="Fri, 30 Oct 2015 08:34:04 +0100" -->
<!-- isosent="20151030073404" -->
<!-- name="Fabian Wein" -->
<!-- email="fabian.wein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="56331D6C.2010402_at_fau.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E2F71CB3-8497-4292-8BAC-21A476C14F60_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel<br>
<strong>From:</strong> Fabian Wein (<em>fabian.wein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 03:34:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27956.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27954.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27956.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27956.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27957.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/30/2015 02:26 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Your Open MPI build looks good -- it seems to have found all the right libnuma stuff during configured, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error message you're seeing indicates that the embedded hwloc is telling Open MPI that it doesn't have binding support, which would be unusual since you have both libnuma and libnuma-dev installed (and Open MPI found/built support for it properly).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you double check that you're running with the Open MPI that you installed at /opt/openmpi-1.10.0-gcc?
</span><br>
<p>Thank you for checking my logs.
<br>
<p>Is this a valid test?
<br>
<p><p>/opt/openmpi-1.10.0-gcc/bin/mpiexec -n 4 hostname
<br>
leo
<br>
leo
<br>
leo
<br>
leo
<br>
<p>/opt/openmpi-1.10.0-gcc/bin/mpiexec -bind-to numa -n 4 hostname
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind a process, but at least one node does NOT
<br>
support binding processes to cpus.
<br>
<p>&nbsp;&nbsp;&nbsp;Node:  leo
<br>
This usually is due to not having libnumactl and libnumactl-devel
<br>
installed on the node.
<br>
<p>-----------
<br>
Is it an installation problem or might it be a bug? Shall I try 
<br>
another open-mpi version?
<br>
<p>Fabian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27956.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27954.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27956.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27956.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27957.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
