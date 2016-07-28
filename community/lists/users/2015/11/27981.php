<?
$subject_val = "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 12:18:27 2015" -->
<!-- isoreceived="20151103171827" -->
<!-- sent="Tue, 03 Nov 2015 17:18:23 +0000" -->
<!-- isosent="20151103171823" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)" -->
<!-- id="87lhafovc0.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAGKz=u+a3FLDdSUyZaqG4sPud-QjJTQ=WLYDwytuVuHRtj3Jqg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-03 12:18:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27982.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="27980.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27976.php">Jeff Hammond: "[OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27999.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Hammond &lt;jeff.science_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; I setup Travis CI support for ARMCI-MPI but the available version in
</span><br>
<span class="quotelev1">&gt; whatever Ubuntu they use is buggy.  For example:
</span><br>
<span class="quotelev1">&gt; <a href="https://travis-ci.org/jeffhammond/armci-mpi/jobs/88880279">https://travis-ci.org/jeffhammond/armci-mpi/jobs/88880279</a>.
</span><br>
<p>[I can't make sense of that to see what the problem actually is.]
<br>
<p><span class="quotelev1">&gt; I have not checked lately, but I believe that Nathan (and perhaps others)
</span><br>
<span class="quotelev1">&gt; have fixed most if not all of the bugs that were blocking ARMCI-MPI from
</span><br>
<span class="quotelev1">&gt; working.  Thus, I'd like to use a recent version of OpenMPI, but I do not
</span><br>
<span class="quotelev1">&gt; want to have to have Travis build it from source for every instance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone suggest easy alternatives to building from source?  Are there
</span><br>
<span class="quotelev1">&gt; deb files online somewhere, perhaps provided by a third-party as for
</span><br>
<span class="quotelev1">&gt; MPICH?  Perhaps there is some obvious trick to get the latest OpenMPI via
</span><br>
<span class="quotelev1">&gt; apt-get.  However, since none of my machines run Ubuntu/Debian anymore, I
</span><br>
<span class="quotelev1">&gt; cannot easily test this, and I do not want to play guess-and-check via
</span><br>
<span class="quotelev1">&gt; repeated pushes to Github to fire up Travis builds.
</span><br>
<p>The latest openmpi Debian packaging is only for 1.6.5, which is what
<br>
Ubuntu 14.04 has; 12.04 has 1.4.3.  I don't know where you'd look for
<br>
packaging of anything more recent.  I could probably supply Ubuntu 14.04
<br>
amd64 .debs for 1.10, but I know nothing about Travis.  The build fails
<br>
when openmpi is already installed.  There's probably an obvious solution
<br>
to that, but the packaging probably needs more work for the new version.
<br>
<p>[For what it's worth, I've normally been able to find or upgrade a
<br>
suitable Vagrant box when I've needed another distribution/version to
<br>
play with and a buildroot isn't good enough.]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27982.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="27980.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27976.php">Jeff Hammond: "[OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27999.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
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
