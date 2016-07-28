<?
$subject_val = "[OMPI users] Question about issue with use of multiple IB ports";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 15:06:28 2007" -->
<!-- isoreceived="20071210200628" -->
<!-- sent="Mon, 10 Dec 2007 13:06:24 -0700" -->
<!-- isosent="20071210200624" -->
<!-- name="Craig Tierney" -->
<!-- email="Craig.Tierney_at_[hidden]" -->
<!-- subject="[OMPI users] Question about issue with use of multiple IB ports" -->
<!-- id="475D9C40.4070603_at_noaa.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Question about issue with use of multiple IB ports<br>
<strong>From:</strong> Craig Tierney (<em>Craig.Tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-10 15:06:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4627.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4625.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4628.php">Jeff Squyres: "Re: [OMPI users] Question about issue with use of multiple IB ports"</a>
<li><strong>Reply:</strong> <a href="4628.php">Jeff Squyres: "Re: [OMPI users] Question about issue with use of multiple IB ports"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just built OpenMPI-1.2.4 to work on my system (IB, OFED-1.2).
<br>
When I run a job, I am getting the following message:
<br>
<p>&nbsp;&nbsp;&nbsp;WARNING: There are more than one active ports on host 'w74', but the
<br>
&nbsp;&nbsp;&nbsp;default subnet GID prefix was detected on more than one of these
<br>
&nbsp;&nbsp;&nbsp;ports.  If these ports are connected to different physical IB
<br>
&nbsp;&nbsp;&nbsp;networks, this configuration will fail in Open MPI.  This version of
<br>
&nbsp;&nbsp;&nbsp;Open MPI requires that every physically separate IB subnet that is
<br>
&nbsp;&nbsp;&nbsp;used between connected MPI processes must have different subnet ID
<br>
&nbsp;&nbsp;&nbsp;values.
<br>
<p>I went to the faq to read about the message.  My code does complete
<br>
successfully because both nodes are connected by both meshes.
<br>
<p>My question is, how can I tell mpirun that I only want to use of
<br>
of the ports?  I specifically want to use either port 1 or port 2, but
<br>
not bond both together.
<br>
<p>Can this be done?
<br>
<p>Thanks,
<br>
Craig
<br>
<p><p><pre>
-- 
Craig Tierney (craig.tierney_at_[hidden])
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4627.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4625.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4628.php">Jeff Squyres: "Re: [OMPI users] Question about issue with use of multiple IB ports"</a>
<li><strong>Reply:</strong> <a href="4628.php">Jeff Squyres: "Re: [OMPI users] Question about issue with use of multiple IB ports"</a>
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
