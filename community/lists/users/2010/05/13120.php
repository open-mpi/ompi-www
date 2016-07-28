<?
$subject_val = "Re: [OMPI users] Using a rankfile for ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 21 08:45:25 2010" -->
<!-- isoreceived="20100521124525" -->
<!-- sent="Fri, 21 May 2010 09:45:20 -0300" -->
<!-- isosent="20100521124520" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using a rankfile for ompi-restart" -->
<!-- id="AANLkTinG0QgkiGnWFks3ZRAV42Py5d9yMAsbimtN5qBw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D09E035E-68BB-4362-BD5C-27ECBC97E597_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using a rankfile for ompi-restart<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-21 08:45:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13121.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Previous message:</strong> <a href="13119.php">Eloi Gaudry: "[OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>In reply to:</strong> <a href="13079.php">Josh Hursey: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May 18, 2010 at 3:53 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt;&gt; I've noticed that ompi-restart doesn't support the --rankfile option.
</span><br>
<span class="quotelev2">&gt;&gt; It only supports --hostfile/--machinefile. Is there any reason
</span><br>
<span class="quotelev2">&gt;&gt; --rankfile isn't supported?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Suppose you have a cluster without a shared file system. When one node
</span><br>
<span class="quotelev2">&gt;&gt; fails, you transfer its checkpoint to a spare node and invoke
</span><br>
<span class="quotelev2">&gt;&gt; ompi-restart. In 1.5, ompi-restart automagically handles this
</span><br>
<span class="quotelev2">&gt;&gt; situation (if you supply a hostfile) and is able to restart the
</span><br>
<span class="quotelev2">&gt;&gt; process, but I'm afraid it might not always be able to find the
</span><br>
<span class="quotelev2">&gt;&gt; checkpoints this way. If you could specify to ompi-restart where the
</span><br>
<span class="quotelev2">&gt;&gt; ranks are (and thus where the checkpoints are), then maybe restart
</span><br>
<span class="quotelev2">&gt;&gt; would always work as long (as long as you've specified the location of
</span><br>
<span class="quotelev2">&gt;&gt; the checkpoints correctly), or maybe ompi-restart would be faster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can easily add the --rankfile option to ompi-restart. I filed a ticket to
</span><br>
<span class="quotelev1">&gt; add this option, and assess if there are other options that we should pass
</span><br>
<span class="quotelev1">&gt; along (e.g., --npernode, --byhost). I should be able to fix this in the next
</span><br>
<span class="quotelev1">&gt; week or so, but the ticket is linked below so you can follow the progress.
</span><br>
<span class="quotelev1">&gt; &#160;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2413">https://svn.open-mpi.org/trac/ompi/ticket/2413</a>
</span><br>
<p>Nice, thanks!
<br>
<p><span class="quotelev1">&gt; Most of the ompi-restart parameters are passed directly to the mpirun
</span><br>
<span class="quotelev1">&gt; command. ompi-restart is mostly a wrapper around mpirun that is able to
</span><br>
<span class="quotelev1">&gt; parse the metadata and create the appcontext file. I wonder if a more
</span><br>
<span class="quotelev1">&gt; general parameter like '--mpirun-args ...' might make sense so users don't
</span><br>
<span class="quotelev1">&gt; have to wait on me to expose the interface they need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Donno. What do you think? Should I create a '--mpirun-args' option or
</span><br>
<span class="quotelev1">&gt; duplicate all of the mpirun command line parameters, or some combination of
</span><br>
<span class="quotelev1">&gt; the two.
</span><br>
<p>Well, I think an --mpirun-args argument would be even more useful, as
<br>
it's hard to foresee how ompi-restart is gonna be used. Maybe a
<br>
combination of the two would be ideal, since some options are going to
<br>
be used very often (i.e. --hostfile, --hosts, etc.).
<br>
<p><p>Regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13121.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Previous message:</strong> <a href="13119.php">Eloi Gaudry: "[OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>In reply to:</strong> <a href="13079.php">Josh Hursey: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
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
