<?
$subject_val = "Re: [OMPI users] MPI daemon error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 29 13:35:44 2010" -->
<!-- isoreceived="20100529173544" -->
<!-- sent="Sat, 29 May 2010 12:35:39 -0500" -->
<!-- isosent="20100529173539" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI daemon error" -->
<!-- id="AANLkTikiS_ADNbp85MUbRXUJNo04ebfpzHJMX_xSwm91_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B806784D-347F-48FB-AB60-4574A0559AFC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI daemon error<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-29 13:35:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13183.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>Previous message:</strong> <a href="13181.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>In reply to:</strong> <a href="13181.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13183.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>Reply:</strong> <a href="13183.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, May 29, 2010 at 8:19 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;From your other note, it sounds like #3 might be the problem here. Do you have some nodes that are configured with &quot;eth0&quot; pointing to your 10.x network, and other nodes with &quot;eth0&quot; pointing to your 192.x network? I have found that having interfaces that share a name but are on different IP addresses sometimes causes OMPI to miss-connect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you randomly got some of those nodes in your allocation, that might explain why your jobs sometimes work and sometimes don't.
</span><br>
<p>That is exactly true. On some nodes eth0 is 1Gig and on others 10Gig
<br>
and vice versa. Is that going to be a problem and is there a
<br>
workaround? I mean 192.168 is always the 10Gig and 10.0 the 1 Gig but
<br>
the correspondence with eth0 vs eth1 is not consistent. I'd have liked
<br>
that but couldn't figure out a way to guarantee the order of the eth
<br>
interfaces.
<br>
<p><pre>
-- 
Rahul
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13183.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>Previous message:</strong> <a href="13181.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>In reply to:</strong> <a href="13181.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13183.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>Reply:</strong> <a href="13183.php">Ralph Castain: "Re: [OMPI users] MPI daemon error"</a>
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
