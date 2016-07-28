<?
$subject_val = "Re: [OMPI users] dynamic rules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 10:26:27 2010" -->
<!-- isoreceived="20100115152627" -->
<!-- sent="Fri, 15 Jan 2010 16:26:22 +0100" -->
<!-- isosent="20100115152622" -->
<!-- name="Roman Martonak" -->
<!-- email="r.martonak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dynamic rules" -->
<!-- id="d21ea44c1001150726j1de23b5do345dbbb0d9230d16_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] dynamic rules" -->
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
<strong>Subject:</strong> Re: [OMPI users] dynamic rules<br>
<strong>From:</strong> Roman Martonak (<em>r.martonak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 10:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11798.php">Jeff Squyres: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11796.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Maybe in reply to:</strong> <a href="11791.php">Roman Martonak: "[OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11800.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Reply:</strong> <a href="11800.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;I have done this according to suggestion on this list, until a fix comes
</span><br>
<span class="quotelev1">&gt;that makes it possible to change via command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;To choose bruck for all message sizes / mpi sizes with openmpi-1.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;File $HOME/.openmpi/mca-params.conf (replace /homeXXXXX) so it points to
</span><br>
<span class="quotelev1">&gt;the correct file:
</span><br>
<span class="quotelev1">&gt;coll_tuned_use_dynamic_rules=1
</span><br>
<span class="quotelev1">&gt;coll_tuned_dynamic_rules_filename=&quot;/homeXXXX/.openmpi/dynamic_rules_file&quot;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<p>I tried this and it still crashes with openmpi-1.4. Is it supposed to
<br>
work with openmpi-1.4
<br>
or do I need to compile openmpi-1.4.1 ?
<br>
<p>Best regards
<br>
<p>Roman
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11798.php">Jeff Squyres: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11796.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Maybe in reply to:</strong> <a href="11791.php">Roman Martonak: "[OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11800.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Reply:</strong> <a href="11800.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
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
