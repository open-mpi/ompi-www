<?
$subject_val = "Re: [OMPI users] dynamic rules";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 16 10:31:36 2010" -->
<!-- isoreceived="20100116153136" -->
<!-- sent="Sat, 16 Jan 2010 16:31:24 +0100" -->
<!-- isosent="20100116153124" -->
<!-- name="Roman Martonak" -->
<!-- email="r.martonak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dynamic rules" -->
<!-- id="d21ea44c1001160731x15afda2bl4f29ad8b6ea0b2ea_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-01-16 10:31:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11805.php">Dorian Krause: "[OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11803.php">Eugene Loh: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Maybe in reply to:</strong> <a href="11791.php">Roman Martonak: "[OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11834.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Reply:</strong> <a href="11834.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;Terribly sorry, I should checked my own notes thoroughly before giving
</span><br>
<span class="quotelev1">&gt;others advice. One needs to give the dynamic rules file location on the
</span><br>
<span class="quotelev1">&gt;command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mpirun -mca coll_tuned_use_dynamic_rules 1 -mca
</span><br>
<span class="quotelev1">&gt;coll_tuned_dynamic_rules_filename /homeXXXX/.openmpi/dynamic_rules_file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That works for me with openmpi 1.4. I have not tried 1.4.1 yet.
</span><br>
<p>Thanks, I will try it. VASP uses cartesian topology communicators.
<br>
Should the dynamic
<br>
rules work also for this case in openmpi-1.4 ? In openmpi-1.3.2 and
<br>
previous versions
<br>
the dynamic rules specified via a dynamic rules file had no effect at
<br>
all for VASP.
<br>
<p><p>Best regards
<br>
<p>Roman
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11805.php">Dorian Krause: "[OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11803.php">Eugene Loh: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Maybe in reply to:</strong> <a href="11791.php">Roman Martonak: "[OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11834.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Reply:</strong> <a href="11834.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
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
