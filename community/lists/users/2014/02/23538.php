<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  2 11:31:20 2014" -->
<!-- isoreceived="20140202163120" -->
<!-- sent="Sun, 2 Feb 2014 16:31:07 +0000" -->
<!-- isosent="20140202163107" -->
<!-- name="Hammond, Simon David (-EXP)" -->
<!-- email="sdhammo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis" -->
<!-- id="74A0D537FED93B4EA49EA78E5A3905C3178F019F_at_EXMB02.srn.sandia.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis" -->
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
<strong>From:</strong> Hammond, Simon David (-EXP) (<em>sdhammo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-02 11:31:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23539.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
<li><strong>Previous message:</strong> <a href="23537.php">Ralph Castain: "Re: [OMPI users] Planned support for Intel Phis"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23539.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
<li><strong>Reply:</strong> <a href="23539.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will this support native execution? I.e. MIC only, no host involvement?
<br>

<br>
S
<br>

<br>

<br>

<br>
--
<br>
Si Hammond
<br>
Sandia National Laboratories
<br>
Remote Connection
<br>

<br>

<br>
-----Original Message-----
<br>
From: Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: Sunday, February 02, 2014 09:02 AM Mountain Standard Time
<br>
To: Open MPI Users
<br>
Subject: [EXTERNAL] Re: [OMPI users] Planned support for Intel Phis
<br>

<br>

<br>
Support for the Phi is in the upcoming 1.7.4 release. It doesn't require any version of OFED as it uses the Phi's scif interface for communication to ranks on the local host. For communication off-host, OMPI will use whatever NICs are available
<br>

<br>

<br>
On Feb 2, 2014, at 6:44 AM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Hello OpenMPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was wondering what is the support that is being implemented for the Intel Phi platforms. That is would we be able to run MPI code in &quot;symmetric&quot; fashion, where some ranks run on the cores of the multicore hostst and some on the cores of the Phis in a multinode cluster environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also is it based on OFED 1.5.4.1 or on which OFED?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23538/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23539.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
<li><strong>Previous message:</strong> <a href="23537.php">Ralph Castain: "Re: [OMPI users] Planned support for Intel Phis"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23539.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
<li><strong>Reply:</strong> <a href="23539.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
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
