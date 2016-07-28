<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 09:37:06 2015" -->
<!-- isoreceived="20151030133706" -->
<!-- sent="Fri, 30 Oct 2015 13:36:21 +0000" -->
<!-- isosent="20151030133621" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="66980AA9-8DD3-421C-A990-B18A236279C2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56331D6C.2010402_at_fau.de" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 09:36:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27957.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27955.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27955.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27957.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I think that test is valid. 1.10.0 is a good version to test. 
<br>
<p>Ralph: it all looks good to me, but that message is coming from ORTE. Can you have a look?
<br>
<p>Sent from my phone. No type good. 
<br>
<p><span class="quotelev1">&gt; On Oct 30, 2015, at 12:33 AM, Fabian Wein &lt;fabian.wein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 10/30/2015 02:26 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Your Open MPI build looks good -- it seems to have found all the right libnuma stuff during configured, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The error message you're seeing indicates that the embedded hwloc is telling Open MPI that it doesn't have binding support, which would be unusual since you have both libnuma and libnuma-dev installed (and Open MPI found/built support for it properly).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you double check that you're running with the Open MPI that you installed at /opt/openmpi-1.10.0-gcc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for checking my logs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a valid test?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.10.0-gcc/bin/mpiexec -n 4 hostname
</span><br>
<span class="quotelev1">&gt; leo
</span><br>
<span class="quotelev1">&gt; leo
</span><br>
<span class="quotelev1">&gt; leo
</span><br>
<span class="quotelev1">&gt; leo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.10.0-gcc/bin/mpiexec -bind-to numa -n 4 hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind a process, but at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding processes to cpus.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Node:  leo
</span><br>
<span class="quotelev1">&gt; This usually is due to not having libnumactl and libnumactl-devel
</span><br>
<span class="quotelev1">&gt; installed on the node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt; Is it an installation problem or might it be a bug? Shall I try another open-mpi version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fabian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27955.php">http://www.open-mpi.org/community/lists/users/2015/10/27955.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27957.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27955.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27955.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27957.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
