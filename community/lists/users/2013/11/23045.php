<?
$subject_val = "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 24 15:43:23 2013" -->
<!-- isoreceived="20131124204323" -->
<!-- sent="Sun, 24 Nov 2013 14:43:21 -0600" -->
<!-- isosent="20131124204321" -->
<!-- name="Jed Brown" -->
<!-- email="jedbrown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple" -->
<!-- id="877gbx7cpi.fsf_at_jedbrown.org" -->
<!-- inreplyto="1F786E6A-CEF7-47C5-B2DA-15FC5148BAB2_at_ann.jussieu.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple<br>
<strong>From:</strong> Jed Brown (<em>jedbrown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-24 15:43:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23046.php">Jed Brown: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="23044.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23042.php">Pierre Jolivet: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23047.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="23047.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pierre Jolivet &lt;jolivet_at_[hidden]&gt; writes:
<br>
<span class="quotelev1">&gt; It looks like you are compiling Open MPI with Homebrew. The flags they use in the formula when --enable-mpi-thread-multiple is wrong.
</span><br>
<span class="quotelev1">&gt; c.f. a similar problem with MacPorts <a href="https://lists.macosforge.org/pipermail/macports-tickets/2013-June/138145.html">https://lists.macosforge.org/pipermail/macports-tickets/2013-June/138145.html</a>.
</span><br>
<p>If these &quot;wrong&quot; configure flags cause deadlock, wouldn't you consider
<br>
it to be an Open MPI bug?  In decreasing order of preference, I would
<br>
say
<br>
<p>1. simple configure flags work to enable feature
<br>
<p>2. configure errors due to inconsistent flags
<br>
<p>3. configure succeeds, but feature is not actually enabled (so no
<br>
&nbsp;&nbsp;&nbsp;deadlock, though this is arguably already a bug)
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23045/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23046.php">Jed Brown: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="23044.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23042.php">Pierre Jolivet: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23047.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="23047.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
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
