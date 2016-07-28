<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 16:33:30 2008" -->
<!-- isoreceived="20081021203330" -->
<!-- sent="Tue, 21 Oct 2008 14:33:18 -0600" -->
<!-- isosent="20081021203318" -->
<!-- name="Adams, Brian M" -->
<!-- email="briadam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="A0801CEC7AFED846978515099D145DA5128373796E_at_ES01SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6101_1224608209_m9LGu3PQ007704_CB4DF141-BD94-4E52-A935-3DE6A6144ADA_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI runtime-specific environment variable?<br>
<strong>From:</strong> Adams, Brian M (<em>briadam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-21 16:33:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7064.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7062.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe in reply to:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7064.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7064.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, October 21, 2008 10:53 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI runtime-specific
</span><br>
<span class="quotelev1">&gt; environment variable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 21, 2008, at 10:37 AM, Adams, Brian M wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; think it will help here.  While MPICH implementations
</span><br>
<span class="quotelev1">&gt; typically left
</span><br>
<span class="quotelev2">&gt; &gt; args like -p4pg -p4amslave on the command line, I don't see that
</span><br>
<span class="quotelev2">&gt; &gt; coming from OpenMPI-launched jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Really? That doesn't sound right - we don't touch the
</span><br>
<span class="quotelev1">&gt; arguments to your application. We test that pretty regularly
</span><br>
<span class="quotelev1">&gt; and I have always seen the args come through.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you provide an example of where it isn't?
</span><br>
<p>Sorry Ralph, I caused some confusion here.  You are correct that OMPI does nothing to muck with any arguments passed to the user application -- they come through as expected.
<br>
<p>I meant that when launching a binary with MPICH mpirun, it would _append_ to the command line arguments things including
<br>
-p4pg and -p4wd, possibly -p4amslave, which we could detect at run-time in the app context to determine that the app had indeed been launched with mpirun.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7064.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7062.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe in reply to:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7064.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7064.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
