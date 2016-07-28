<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  2 12:48:29 2014" -->
<!-- isoreceived="20140202174829" -->
<!-- sent="Sun, 2 Feb 2014 09:47:45 -0800" -->
<!-- isosent="20140202174745" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis" -->
<!-- id="31D59AB4-ABE4-4715-A9CD-B448122FC03D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="74A0D537FED93B4EA49EA78E5A3905C3178F019F_at_EXMB02.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-02 12:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23540.php">Åke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23538.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
<li><strong>In reply to:</strong> <a href="23538.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It should - our intent is to support the Phi in both modes, so we would appreciate feedback. I'm going to post on the website FAQ some notes assembled by Tim Carlson and Michael Thomadakis about how to do it, and Nathan Hjelmn did the scif implementation, so hopefully others will chime in with suggestions as people explore this new capability.
<br>
<p><p>On Feb 2, 2014, at 8:31 AM, Hammond, Simon David (-EXP) &lt;sdhammo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Will this support native execution? I.e. MIC only, no host involvement?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; S
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Si Hammond
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; Remote Connection
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, February 02, 2014 09:02 AM Mountain Standard Time
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [EXTERNAL] Re: [OMPI users] Planned support for Intel Phis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Support for the Phi is in the upcoming 1.7.4 release. It doesn't require any version of OFED as it uses the Phi's scif interface for communication to ranks on the local host. For communication off-host, OMPI will use whatever NICs are available
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 2, 2014, at 6:44 AM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello OpenMPI,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was wondering what is the support that is being implemented for the Intel Phi platforms. That is would we be able to run MPI code in &quot;symmetric&quot; fashion, where some ranks run on the cores of the multicore hostst and some on the cores of the Phis in a multinode cluster environment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also is it based on OFED 1.5.4.1 or on which OFED? 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards
</span><br>
<span class="quotelev2">&gt; &gt; Michael
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23539/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23540.php">Åke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23538.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
<li><strong>In reply to:</strong> <a href="23538.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
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
