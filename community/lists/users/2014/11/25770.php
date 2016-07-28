<?
$subject_val = "Re: [OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 10:20:04 2014" -->
<!-- isoreceived="20141112152004" -->
<!-- sent="Wed, 12 Nov 2014 15:19:25 +0000" -->
<!-- isosent="20141112151925" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="87389ola4i.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C6FCD948-BF54-4B0E-948E-8A00BA7DA2DB_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] oversubscription of slots with GridEngine<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 10:19:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25771.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25769.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25759.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25807.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti &lt;reuti_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt; If so, I&#226;&#128;&#153;m wondering if that NULL he shows in there is the source of the trouble. The parser doesn&#226;&#128;&#153;t look like it would handle that very well, though I&#226;&#128;&#153;d need to test it. Is that NULL expected? Or is the NULL not really in the file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I must admit here: for me the fourth column is either literally
</span><br>
<span class="quotelev1">&gt; UNDEFINED or the tuple cpu,core in case of turned on binding like 0,0
</span><br>
<span class="quotelev1">&gt; But it's never &lt;NULL&gt;, neither literally nor the byte 0x00. Maybe the
</span><br>
<span class="quotelev1">&gt; OP can tell us which GE version he uses,.
</span><br>
<p>See the source of sge_exec_job.  I see I should fix sge_pe(5).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25771.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25769.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25759.php">Reuti: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25807.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
