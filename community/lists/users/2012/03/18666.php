<?
$subject_val = "Re: [OMPI users] Simple question on GRID";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 11:21:31 2012" -->
<!-- isoreceived="20120302162131" -->
<!-- sent="Fri, 02 Mar 2012 11:21:26 -0500" -->
<!-- isosent="20120302162126" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Simple question on GRID" -->
<!-- id="4F50F386.6000407_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BAY171-W96C8DD2B2F04EE24ACB301E56C0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Simple question on GRID<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 11:21:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18665.php">Prentice Bisbal: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>In reply to:</strong> <a href="18625.php">Shaandar Nyamtulga: "[OMPI users] Simple question on GRID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18665.php">Prentice Bisbal: "Re: [OMPI users] ssh between nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/01/2012 12:10 AM, Shaandar Nyamtulga wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I have two Beowulf clusters (both Ubuntu 10.10, one is OpenMPI, one is
</span><br>
<span class="quotelev1">&gt; MPICH2).
</span><br>
<span class="quotelev1">&gt; They run separately in their local network environment.I know there is
</span><br>
<span class="quotelev1">&gt; a way to integrate them through Internet, presumably by Grid software,
</span><br>
<span class="quotelev1">&gt; I guess. Is there any tutorial to do this?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This question is a little off-topic for this list, since this list is
<br>
for Open MPI-specific questions (and some general MPI questions). You
<br>
should really ask this question on the Beowulf mailing list, which
<br>
covers any and all topics related to HPC clustering. See www.beowulf.org
<br>
for more information.
<br>
<p><p>Also, you need to be more specifc as to what you really want to do
<br>
&quot;integrate&quot; is a vague, overused term. Do you want the scheduler at one
<br>
site to be able to manage jobs on the cluster at the other site with no
<br>
message-passing traffic between sites? That might be possible.
<br>
<p>Or, do you want the two remote clusters to send message-passing traffic
<br>
back-and-forth over the internet and behave as a single cluster? That
<br>
might be possible, too, but due to the latency and reduced bandwidth of
<br>
sending those messages  over the internet,  the performance would be so
<br>
poor as to probably not be worth it.
<br>
<p><pre>
--
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18667.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18665.php">Prentice Bisbal: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>In reply to:</strong> <a href="18625.php">Shaandar Nyamtulga: "[OMPI users] Simple question on GRID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18665.php">Prentice Bisbal: "Re: [OMPI users] ssh between nodes"</a>
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
