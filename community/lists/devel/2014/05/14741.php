<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 23:40:35 2014" -->
<!-- isoreceived="20140508034035" -->
<!-- sent="Thu, 08 May 2014 13:40:31 +1000" -->
<!-- isosent="20140508034031" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="536AFCAF.9060209_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="901B2B2E-A99D-4FB4-A29C-F64E5B5DE2A2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 23:40:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14742.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14740.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14738.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14734.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 08/05/14 12:54, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I think there was one 2.6.x that was borked, and definitely
</span><br>
<span class="quotelev1">&gt; problems in the 14.03.x line. Can't pinpoint it for you, though.
</span><br>
<p>No worries, thanks.
<br>
<p><span class="quotelev1">&gt; Sounds good. I'm going to have to dig deeper into those numbers, 
</span><br>
<span class="quotelev1">&gt; though, as they don't entirely add up to me. Once the job gets 
</span><br>
<span class="quotelev1">&gt; launched, the launch method itself should have no bearing on 
</span><br>
<span class="quotelev1">&gt; computational speed - IF all things are equal. In other words, if
</span><br>
<span class="quotelev1">&gt; the process layout is the same, and the binding pattern is the
</span><br>
<span class="quotelev1">&gt; same, then computational speed should be roughly equivalent
</span><br>
<span class="quotelev1">&gt; regardless of how the procs were started.
</span><br>
<p>Not sure if it's significant but when mpirun was launching processes
<br>
it was using srun to start orted which then started MPI ranks whereas
<br>
with PMI/PMI2 it appeared to directly start the ranks.
<br>
<p><span class="quotelev1">&gt; My guess is that your data might indicate a difference in the
</span><br>
<span class="quotelev1">&gt; layout and/or binding pattern as opposed to PMI2 vs mpirun. At the
</span><br>
<span class="quotelev1">&gt; scale you mention later in the thread (only 70 nodes x 16 ppn), the
</span><br>
<span class="quotelev1">&gt; difference in launch timing would be zilch. So I'm betting you
</span><br>
<span class="quotelev1">&gt; would find (upon further exploration) that (a) you might not have
</span><br>
<span class="quotelev1">&gt; been binding processes when launching by mpirun, since we didn't
</span><br>
<span class="quotelev1">&gt; bind by default until the 1.8 series, but were binding under direct
</span><br>
<span class="quotelev1">&gt; srun launch, and (b) your process mapping would quite likely be
</span><br>
<span class="quotelev1">&gt; different as we default to byslot mapping, and I believe srun
</span><br>
<span class="quotelev1">&gt; defaults to bynode?
</span><br>
<p>FWIW all our environment modules that do OMPI have:
<br>
<p>setenv OMPI_MCA_orte_process_binding core
<br>
<p><span class="quotelev1">&gt; Might be worth another comparison run when someone has time.
</span><br>
<p>Yeah, I'll try and queue up some more tests - unfortunately the
<br>
cluster we tested on then is flat out at the moment but I'll try and
<br>
sneak a 64-core job using identical configs and compare mpirun, srun
<br>
on its own and srun with PMI2.
<br>
<p>All the best,
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
Version: GnuPG v1.4.14 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlNq/K8ACgkQO2KABBYQAh/q0wCcDvYjl4tYVXrHNciCkKgbnwF7
<br>
VHoAn3Q+gZXQNKzs++3uajmiGTkq/EeD
<br>
=ucJg
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14742.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14740.php">Artem Polyakov: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14738.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14734.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
