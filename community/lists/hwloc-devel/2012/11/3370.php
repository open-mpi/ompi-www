<?
$subject_val = "Re: [hwloc-devel] Cgroup resource limits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 21:16:21 2012" -->
<!-- isoreceived="20121106021621" -->
<!-- sent="Tue, 06 Nov 2012 13:16:16 +1100" -->
<!-- isosent="20121106021616" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cgroup resource limits" -->
<!-- id="509872F0.6090409_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57oe5eNyrqtf04kZLzEz-j6beoUEKyKoK0U3C_6y-u72Vhw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Cgroup resource limits<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 21:16:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3371.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3369.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3369.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3371.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 06/11/12 13:01, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Depends on the use-case. If you are going to direct-launch the 
</span><br>
<span class="quotelev1">&gt; processes (e.g., using srun), then you are correct.
</span><br>
<p>Yup.
<br>
<p><span class="quotelev1">&gt; However, that isn't the case in other scenarios. For example, if
</span><br>
<span class="quotelev1">&gt; you get an allocation and then use mpirun to launch your job, you 
</span><br>
<span class="quotelev1">&gt; definitely do *not* want the RM setting the cgroup constraints as
</span><br>
<span class="quotelev1">&gt; the RM only launches the orteds - it never sees the MPI procs. The 
</span><br>
<span class="quotelev1">&gt; constraints are to apply to the individual procs as separate
</span><br>
<span class="quotelev1">&gt; entities - if you apply them to the orteds, then all procs will be
</span><br>
<span class="quotelev1">&gt; constrained to the same container. Ick.
</span><br>
<p>That's not been my experience recently; for instance Torque currently
<br>
creates a cpuset for your job containing all the procs you've been
<br>
given there and then you can use mpirun/mpiexec to launch orted across
<br>
all the nodes you've been given. Those processes are then constrained
<br>
to the allocation set up on each node.  They are free to bind
<br>
themselves to the cores present within that cpuset should they so wish.
<br>
<p>In the very beginnings (when I was at VPAC and when wew were using
<br>
MVPAICH2 rather than OpenMPI) Torque would bind processes to a core
<br>
within the allocation which worked fine for that, but of course broke
<br>
in the way you explain when we moved to Open-MPI.  I fixed that bug up
<br>
very quickly.. ;-)
<br>
<p>We've only ever run Slurm on BlueGene where this isn't an issue, so I
<br>
don't know if that does things differently.
<br>
<p><span class="quotelev1">&gt; Similarly, if you are running MapReduce, your application has to 
</span><br>
<span class="quotelev1">&gt; figure out what nodes to run on, how much memory will be required, 
</span><br>
<span class="quotelev1">&gt; etc. All that goes into the allocation request (made by the
</span><br>
<span class="quotelev1">&gt; equivalent of mpirun in that scenario) sent to the RM. Again, the
</span><br>
<span class="quotelev1">&gt; orteds need to set those constraints on a per-process basis.
</span><br>
<p>But for the scheduler to be able to plan workload well I believe that
<br>
once your job has started the best you can do is ask for less than you
<br>
have been given, otherwise you're free to game the system by queuing a
<br>
short small job and once it's started asking for many more cores or
<br>
RAM.. :-)
<br>
<p><span class="quotelev1">&gt; So we need the capability in ORTE to support the non-direct-launch
</span><br>
<span class="quotelev1">&gt; cases.
</span><br>
<p>I'm pretty sure we're agreeing here, just in different ways of
<br>
expressing ourselves.. :-)
<br>
<p>cheers!
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlCYcvAACgkQO2KABBYQAh9C8ACcD3Tvjho1ZWuDMI+qX7iccUDQ
<br>
mQQAmgNmVRisYsUfajunEBacNFjRBCIa
<br>
=1S3e
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3371.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3369.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3369.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3371.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
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
