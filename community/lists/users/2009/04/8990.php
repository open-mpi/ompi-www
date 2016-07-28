<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2 rank?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 18:40:03 2009" -->
<!-- isoreceived="20090420224003" -->
<!-- sent="Mon, 20 Apr 2009 16:39:48 -0600" -->
<!-- isosent="20090420223948" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2 rank?" -->
<!-- id="35C7E0B6-5916-4514-9E2D-954D7D05B8B7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1240266320.9395.36.camel_at_corn.betterworld.us" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.2 rank?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-20 18:39:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8991.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8989.php">Ross Boylan: "Re: [OMPI users] OpenMPI 1.2 rank?"</a>
<li><strong>In reply to:</strong> <a href="8989.php">Ross Boylan: "Re: [OMPI users] OpenMPI 1.2 rank?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it should - at least, for the more common environments (e.g., ssh).
<br>
<p>On Apr 20, 2009, at 4:25 PM, Ross Boylan wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 2009-04-20 at 16:22 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Afraid there really isn't anything in the 1.2.x series - we set
</span><br>
<span class="quotelev2">&gt;&gt; several MPI-specific envars beginning with 1.3.0, but not in the  
</span><br>
<span class="quotelev2">&gt;&gt; older
</span><br>
<span class="quotelev2">&gt;&gt; releases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem with using something like OMPI_MCA_ns_nds_vpid is that we
</span><br>
<span class="quotelev2">&gt;&gt; are free to change/eliminate it at any time - in fact, you won't find
</span><br>
<span class="quotelev2">&gt;&gt; that envar in the 1.3.x series at all.
</span><br>
<span class="quotelev1">&gt; Will it work in the 1.2 series?
</span><br>
<span class="quotelev1">&gt; Ross
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 20, 2009, at 3:53 PM, Ross Boylan wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How do I determine my rank in a shell script under OpenMPI 1.2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only thing I've found that looks promising is the environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variable OMPI_MCA_ns_nds_vpid, and earlier discussion on this list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; said
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that was for &quot;internal use only&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm on Debian Lenny, which just relased with openmpi 1.2.7~rc2-2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ross
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8991.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8989.php">Ross Boylan: "Re: [OMPI users] OpenMPI 1.2 rank?"</a>
<li><strong>In reply to:</strong> <a href="8989.php">Ross Boylan: "Re: [OMPI users] OpenMPI 1.2 rank?"</a>
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
