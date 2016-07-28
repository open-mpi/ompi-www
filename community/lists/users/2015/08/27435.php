<?
$subject_val = "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 09:44:48 2015" -->
<!-- isoreceived="20150812134448" -->
<!-- sent="Wed, 12 Aug 2015 14:44:46 +0100" -->
<!-- isosent="20150812134446" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?" -->
<!-- id="87wpx0ei41.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E07150E2-988E-4F97-BA0C-8C30078289E6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-12 09:44:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27436.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27434.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27429.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; I think Dave's point is that numactl-devel (and numactl) is only needed for *building* Open MPI.  Users only need numactl to *run* Open MPI.
</span><br>
<p>Yes.  However, I guess the basic problem is that the component fails to
<br>
load for want of libhwloc, either because (the right soname of) it isn't
<br>
present or there's a problem with numactl or another of its
<br>
dependencies.  (That won't happen if you use a packaged version, of
<br>
course.)
<br>
<p>There are three instances of &quot;libnumactl and libnumactl-devel&quot; in the
<br>
release .txt files which I think are wrong.  I don't know on what system
<br>
such package names exist (not Debian or Red Hat-ish) and numactl isn't
<br>
even relevant to all Linux-based systems (e.g. not s390 or arm in
<br>
Fedora).  I'd replace the message with one saying that a compatible
<br>
version of libhwloc and its dependencies needs to be available, assuming
<br>
I've got that right.  The -devel/-dev package is surely not required
<br>
anyway.
<br>
<p>[In the context of a recent version of SGE, I don't know how the support
<br>
can be missing; the execd and shepherd should be built with hwloc, and
<br>
there's a test in the rc script that the shepherd will actually load.]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27436.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27434.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27429.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
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
