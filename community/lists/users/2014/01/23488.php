<?
$subject_val = "Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 12:24:42 2014" -->
<!-- isoreceived="20140128172442" -->
<!-- sent="Tue, 28 Jan 2014 17:24:41 +0000" -->
<!-- isosent="20140128172441" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1" -->
<!-- id="87bnyw589y.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1390581603.88141.YahooMailNeo_at_web172901.mail.ir2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 12:24:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23489.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23487.php">Tim Prince: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>In reply to:</strong> <a href="23443.php">Elisabeth Beer: "[OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Elisabeth Beer &lt;elisabethbeer_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've done an operating system up-grade to OpenSUSE 13.1 and I've up-graded OpenFOAM from 2.2.1 to 2.2.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bevor, OpenMPI worked well.
</span><br>
<span class="quotelev1">&gt; Now, it does not work at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First Step
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After decomposing the domain, I've tried to start parallel computation:
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 simpleFoam -parallel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've received that error message:
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<p>I'm fairly sure that is due to mixing up OMPI versions somehow, even if
<br>
you tried not to.  A user here compiled their own version (actually OF
<br>
1.7, but I don't think that's relevant) and got that error when using a
<br>
thirdparty directory with OMPI 1.4 in it.
<br>
<p>I built an RPM of it against the system OMPI (1.6, but again I'd be
<br>
surprised if that matters) and a scotch package with no thirdparty
<br>
stuff, and it works.  I didn't find out what was actually happening with
<br>
the user's version, I'm afraid.
<br>
<p>For what it's worth, the spec file for the OF 2.2.2 RPM for RH6 is at
<br>
&lt;<a href="http://arc.liv.ac.uk/downloads/misc/SPECS/openfoam.spec">http://arc.liv.ac.uk/downloads/misc/SPECS/openfoam.spec</a>&gt;.  It will need
<br>
changes for SuSE which I'd be happy to have before trying to get various
<br>
packaging into Fedora/EPEL.
<br>
<p><pre>
-- 
Community Grid Engine:  <a href="http://arc.liv.ac.uk/SGE/">http://arc.liv.ac.uk/SGE/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23489.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23487.php">Tim Prince: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>In reply to:</strong> <a href="23443.php">Elisabeth Beer: "[OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
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
