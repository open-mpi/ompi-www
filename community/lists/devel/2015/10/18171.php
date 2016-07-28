<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 18:44:41 2015" -->
<!-- isoreceived="20151014224441" -->
<!-- sent="Thu, 15 Oct 2015 00:44:35 +0200" -->
<!-- isosent="20151014224435" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="E92FA7A3-20CE-401D-9FDC-14484D7783BB_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57oe4L=-_6UQeHqsbhUc4owkFi_xa7wHx2ByYMTK9pKzJuw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte-dvm / orte-submit race condition<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-14 18:44:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18172.php">Larry Baker: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Previous message:</strong> <a href="18170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>In reply to:</strong> <a href="18169.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><span class="quotelev1">&gt; On 15 Oct 2015, at 0:26 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Okay, so each orte-submit is reporting job has launched, which means the hang is coming while waiting to hear the job completed. Are you sure that orte-dvm believes the job has completed?
</span><br>
<p>No, I'm not.
<br>
<p><span class="quotelev1">&gt; In other words, when you say that you observe the job as completing, are you basing that on some output from orte-dvm, or because the procs have exited, or...?
</span><br>
<p>... because the tasks have created their output.
<br>
<p><span class="quotelev1">&gt; I can send you a patch tonight that would cause orte-dvm to emit a &quot;job completed&quot; message when it determines each job has terminated - might help us take the next step.
</span><br>
<p>Great.
<br>
<p><span class="quotelev1">&gt; I'm wondering if orte-dvm thinks the job is still running, and the race condition is in that area (as opposed to being in orte-submit itself)
</span><br>
<p>Do some counts from the output of orte-dvm provide some hints?
<br>
<p><p>$ grep &quot;Releasing job data.*INVALID&quot; dvm_output.txt |wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;42
<br>
<p>$ grep &quot;ORTE_DAEMON_SPAWN_JOB_CMD&quot; dvm_output.txt |wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;42
<br>
<p>$ grep &quot;ORTE_DAEMON_ADD_LOCAL_PROCS&quot; dvm_output.txt |wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;42
<br>
<p>$ grep &quot;sess_dir_finalize&quot; dvm_output.txt |wc -l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;35
<br>
<p><p>In other words, the &quot;[netbook:XXXX] sess_dir_finalize: proc session dir does not exist&quot; message doesn't show up for the hanging ones, which could support your question that the orte-dvm is at fault.
<br>
<p>Gr,
<br>
<p>Mark<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18172.php">Larry Baker: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Previous message:</strong> <a href="18170.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>In reply to:</strong> <a href="18169.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
