<?
$subject_val = "Re: [OMPI users] mpi_comm_spawn have problems with group communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 13:48:28 2010" -->
<!-- isoreceived="20101004174828" -->
<!-- sent="Mon, 4 Oct 2010 19:48:23 +0200" -->
<!-- isosent="20101004174823" -->
<!-- name="Milan Hodoscek" -->
<!-- email="milan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_comm_spawn have problems with group communicators" -->
<!-- id="19626.4967.625631.386100_at_ala.cmm.ki.si" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AEA62727-398E-4756-80CD-2110730718AD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_comm_spawn have problems with group communicators<br>
<strong>From:</strong> Milan Hodoscek (<em>milan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-04 13:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14386.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14384.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>In reply to:</strong> <a href="14381.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Ralph&quot; == Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; On Oct 4, 2010, at 10:36 AM, Milan Hodoscek wrote:
<br>
<p><span class="quotelev3">    &gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;Ralph&quot; == Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">    &gt;&gt; 
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; I'm not sure why the group communicator would make a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; difference - the code area in question knows nothing about
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; the mpi aspects of the job. It looks like you are hitting a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; race condition that causes a particular internal recv to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; not exist when we subsequently try to cancel it, which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; generates that error message.  How did you configure OMPI?
<br>
<span class="quotelev2">    &gt;&gt; 
</span><br>
<span class="quotelev2">    &gt;&gt; Thank you for the reply!
</span><br>
<span class="quotelev2">    &gt;&gt; 
</span><br>
<span class="quotelev2">    &gt;&gt; Must be some race problem, but I have no control of it, or do
</span><br>
<span class="quotelev2">    &gt;&gt; I?
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; Not really. What I don't understand is why your code would
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; work fine when using comm_world, but encounter a race
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; condition when using comm groups. There shouldn't be any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; timing difference between the two cases.
<br>
<p>Fixing race condition is sometime easy by puting some variables into
<br>
the arrays. I just did for one of them but it didn't help. I'll do
<br>
some more testing in this direction, but I am running out of ideas.
<br>
When you put ngrp=1 and uncomment the other mpi_comm_spawn line in the
<br>
program you basically get only one spawn, so no opportunity for race
<br>
condition. But in my real project I usually work with many spawn
<br>
calls, however all using mpi_comm_world, but running different
<br>
programs, etc. And that always works. This time I want to localize
<br>
mpi_comm_spawns by similar trick that is in the program I sent. So
<br>
this small test case is a good model of what I would like to have.
<br>
I studied the MPI-2 standard and I think I got it right, but one never
<br>
knows...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; I'll have to take a look and see if I can spot something in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; the code...
<br>
<p>Thanks a lot -- Milan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14386.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14384.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>In reply to:</strong> <a href="14381.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
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
