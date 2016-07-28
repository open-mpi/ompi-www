<?
$subject_val = "Re: [OMPI users] ompi + bash + GE + modules";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 08:40:56 2012" -->
<!-- isoreceived="20120112134056" -->
<!-- sent="Thu, 12 Jan 2012 13:40:29 +0000" -->
<!-- isosent="20120112134029" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi + bash + GE + modules" -->
<!-- id="87vcohujhu.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4043F058-6CE5-4C31-9D1F-1168B415C3FA_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi + bash + GE + modules<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 08:40:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18147.php">Mark Suhovecky: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Previous message:</strong> <a href="18145.php">Dave Love: "[OMPI users] checkpointing on other transports"</a>
<li><strong>In reply to:</strong> <a href="18142.php">Reuti: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18147.php">Mark Suhovecky: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Reply:</strong> <a href="18147.php">Mark Suhovecky: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Reply:</strong> <a href="18161.php">Prentice Bisbal: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Surely this should be on the gridengine list -- and it's in recent
<br>
archives -- but there's some ob-openmpi below.  Can Notre Dame not get
<br>
the support they've paid Univa for?
<br>
<p>Reuti &lt;reuti_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; SGE 6.2u5 can't handle multi line environment variables or functions,
</span><br>
<span class="quotelev1">&gt; it was fixed in 6.2u6 which isn't free.
</span><br>
<p>[It's not listed for 6.2u6.]  For what it's worth, my fix for Sun's fix
<br>
is <a href="https://arc.liv.ac.uk/trac/SGE/changeset/3556/sge">https://arc.liv.ac.uk/trac/SGE/changeset/3556/sge</a>.
<br>
<p><span class="quotelev1">&gt; Do you use -V while submitting the job? Just ignore the error or look
</span><br>
<span class="quotelev1">&gt; into Son of Gridengine which fixed it too.
</span><br>
<p>Of course
<br>
you can always avoid the issue by not using `export -f', which isn't in
<br>
the modules version we have.  I default -V in sge_request and load
<br>
the open-mpi module in the job submission session.  I don't
<br>
fin whatever problems it causes, and it works for binaries like
<br>
&nbsp;&nbsp;qsub -b y ... mpirun ...
<br>
However, the folkloristic examples here typically load the module stuff
<br>
in the job script.
<br>
<p><span class="quotelev1">&gt; If you can avoid -V, then it could be defined in any of the .profile
</span><br>
<span class="quotelev1">&gt; or alike if you use -l as suggested.  You could even define a
</span><br>
<span class="quotelev1">&gt; started_method in SGE to define it for all users by default and avoid
</span><br>
<span class="quotelev1">&gt; to use -V:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; module() { ...command...here... }
</span><br>
<span class="quotelev1">&gt; export -f module
</span><br>
<span class="quotelev1">&gt; exec &quot;${@}&quot;
</span><br>
<p>That won't work for example if someone is tasteless enough to submit csh.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18147.php">Mark Suhovecky: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Previous message:</strong> <a href="18145.php">Dave Love: "[OMPI users] checkpointing on other transports"</a>
<li><strong>In reply to:</strong> <a href="18142.php">Reuti: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18147.php">Mark Suhovecky: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Reply:</strong> <a href="18147.php">Mark Suhovecky: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Reply:</strong> <a href="18161.php">Prentice Bisbal: "Re: [OMPI users] ompi + bash + GE + modules"</a>
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
