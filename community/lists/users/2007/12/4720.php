<?
$subject_val = "Re: [OMPI users] Fwd: R npRmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 16:20:14 2007" -->
<!-- isoreceived="20071218212014" -->
<!-- sent="Tue, 18 Dec 2007 16:20:08 -0500" -->
<!-- isosent="20071218212008" -->
<!-- name="Caird, Andrew J" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: R npRmpi" -->
<!-- id="CBA57977CF4A2A4D94031A347F7E011BDD262E_at_ECLUST2-VS2.adsroot.itcs.umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="30D13157-B27B-4B11-BCFB-5C86B469E019_at_indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: R npRmpi<br>
<strong>From:</strong> Caird, Andrew J (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 16:20:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4721.php">Dirk Eddelbuettel: "Re: [OMPI users] Fwd: R npRmpi"</a>
<li><strong>Previous message:</strong> <a href="4719.php">Randy Heiland: "[OMPI users] Fwd: R npRmpi"</a>
<li><strong>In reply to:</strong> <a href="4719.php">Randy Heiland: "[OMPI users] Fwd: R npRmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4721.php">Dirk Eddelbuettel: "Re: [OMPI users] Fwd: R npRmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dr. Yu sent me a version of this intended for OpenMPI back in September.
<br>
I was just today getting around to trying it, although I noticed that it
<br>
doesn't work with R v2.6, so my plans just changed a little.
<br>
<p>If Dr. Yu gives permission, I'll send to you what he sent to me, or
<br>
perhaps he'll post it to this list.
<br>
<p>--andy
<br>
&nbsp;&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Randy Heiland
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, December 18, 2007 4:08 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: hpa-admin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Fwd: R npRmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The pkg in question is here:  <a href="http://www.stats.uwo.ca/faculty/yu/Rmpi/">http://www.stats.uwo.ca/faculty/yu/Rmpi/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The question is:  has anyone on this list got OpenMPI working 
</span><br>
<span class="quotelev1">&gt; for this pkg?  Any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks, Randy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	Subject: R npRmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	Been looking into the npRmpi problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	I can get a segfault executing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		mpi.spawn.Rslaves()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	The documentation .html files under npRmpi contains the 
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	&quot;mpi.spawn.Rslaves to spawn R slaves on selected hosts. This is
</span><br>
<span class="quotelev1">&gt; 	a LAM-MPI specific function.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		lamhosts()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	sh: lamnodes: command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	The documentation for nearly all mpi.xxx.xxx calls send you to
</span><br>
<span class="quotelev1">&gt; 	www.lam-mpi.org for more information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	Looks for all the world this package depends on LAM-MPI which
</span><br>
<span class="quotelev1">&gt; 	is not installed on Quarry. I don't think pointing the build
</span><br>
<span class="quotelev1">&gt; 	at an OpenMPI install will help. The .c sources will compile
</span><br>
<span class="quotelev1">&gt; 	just fine but when R goes to use them it refers to LAM-MPI
</span><br>
<span class="quotelev1">&gt; 	dependent functions and behaves  badly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4721.php">Dirk Eddelbuettel: "Re: [OMPI users] Fwd: R npRmpi"</a>
<li><strong>Previous message:</strong> <a href="4719.php">Randy Heiland: "[OMPI users] Fwd: R npRmpi"</a>
<li><strong>In reply to:</strong> <a href="4719.php">Randy Heiland: "[OMPI users] Fwd: R npRmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4721.php">Dirk Eddelbuettel: "Re: [OMPI users] Fwd: R npRmpi"</a>
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
