<?
$subject_val = "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 15 13:23:38 2011" -->
<!-- isoreceived="20110915172338" -->
<!-- sent="Thu, 15 Sep 2011 19:23:27 +0200" -->
<!-- isosent="20110915172327" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can you set the gid of the processes created by	mpirun?" -->
<!-- id="F057A1C5-E850-4006-9894-A920F99592FF_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="729D4270-BB0A-40E5-B1BB-A9373C4E3D95_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can you set the gid of the processes created by	mpirun?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-15 13:23:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17313.php">George Bosilca: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Previous message:</strong> <a href="17311.php">Reuti: "Re: [OMPI users] sg riddle (was: EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?)"</a>
<li><strong>In reply to:</strong> <a href="17176.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17319.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created	by	mpirun?"</a>
<li><strong>Reply:</strong> <a href="17319.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created	by	mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edwin, going back to this:
<br>
<p><span class="quotelev2">&gt;&gt; The mpirun command is invoked when the user&#146;s group is &#145;set group&#146; to group 650.  When the rank 0 process creates files, they have group ownership 650.  But the user&#146;s login group is group 1040. The child processes that get started on other nodes run with group 1040, and the files they create have group ownership 1040.
</span><br>
<p>What about setting the set-guid flag for the directory? Created files therein will inherit the group from the folder then (which has to be set to the group in question of course).
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17313.php">George Bosilca: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Previous message:</strong> <a href="17311.php">Reuti: "Re: [OMPI users] sg riddle (was: EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?)"</a>
<li><strong>In reply to:</strong> <a href="17176.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17319.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created	by	mpirun?"</a>
<li><strong>Reply:</strong> <a href="17319.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created	by	mpirun?"</a>
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
