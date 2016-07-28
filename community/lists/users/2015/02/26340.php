<?
$subject_val = "Re: [OMPI users] Help on getting CMA works";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 15:14:54 2015" -->
<!-- isoreceived="20150218201454" -->
<!-- sent="Wed, 18 Feb 2015 13:14:15 -0700" -->
<!-- isosent="20150218201415" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on getting CMA works" -->
<!-- id="20150218201415.GA21737_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54E4EE51.60305_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help on getting CMA works<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-18 15:14:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26341.php">Joshua Ladd: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Previous message:</strong> <a href="26339.php">Eric Chamberland: "[OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26339.php">Eric Chamberland: "[OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26342.php">Éric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26342.php">Éric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recommend using vader for CMA. It has code to get around the ptrace
<br>
setting. Run with mca_btl_vader_single_copy_mechanism cma (should be the
<br>
default).
<br>
<p>-Nathan
<br>
<p>On Wed, Feb 18, 2015 at 02:56:01PM -0500, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have configured with &quot;--with-cma&quot; on 2 differents OS (RedHat 6.6 and
</span><br>
<span class="quotelev1">&gt; OpenSuse 12.3), but in both case, I have the following error when launching
</span><br>
<span class="quotelev1">&gt; a simple mpi_hello_world.c example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.8.4_cma/bin/mpiexec --mca btl_sm_use_cma 1 -np 2 /tmp/hw
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: Linux kernel CMA support was requested via the
</span><br>
<span class="quotelev1">&gt; btl_vader_single_copy_mechanism MCA variable, but CMA support is
</span><br>
<span class="quotelev1">&gt; not available due to restrictive ptrace settings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The vader shared memory BTL will fall back on another single-copy
</span><br>
<span class="quotelev1">&gt; mechanism if one is available. This may result in lower performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host: compile
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello world from process 1 of 2
</span><br>
<span class="quotelev1">&gt; [compile:23874] 1 more process has sent help message help-btl-vader.txt /
</span><br>
<span class="quotelev1">&gt; cma-permission-denied
</span><br>
<span class="quotelev1">&gt; [compile:23874] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
</span><br>
<span class="quotelev1">&gt; help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After I googled the subject, it seems there is a kernel parameter to modify,
</span><br>
<span class="quotelev1">&gt; but I can't find it for OpenSuse 12.3 or RedHat 6.6...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the &quot;config.log&quot; issued from RedHat 6.6...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184_cma.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184_cma.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26339.php">http://www.open-mpi.org/community/lists/users/2015/02/26339.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26340/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26341.php">Joshua Ladd: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Previous message:</strong> <a href="26339.php">Eric Chamberland: "[OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26339.php">Eric Chamberland: "[OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26342.php">Éric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26342.php">Éric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
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
