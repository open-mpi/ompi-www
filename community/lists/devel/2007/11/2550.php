<?
$subject_val = "Re: [OMPI devel] Environment forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 16:57:21 2007" -->
<!-- isoreceived="20071105215721" -->
<!-- sent="Mon, 5 Nov 2007 16:57:19 -0500 (EST)" -->
<!-- isosent="20071105215719" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Environment forwarding" -->
<!-- id="Pine.LNX.4.64.0711051655300.4842_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200711051645.22572.tprins_at_cs.indiana.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 16:57:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2551.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Previous message:</strong> <a href="2549.php">Tim Prins: "[OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2549.php">Tim Prins: "[OMPI devel] Environment forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2551.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Reply:</strong> <a href="2551.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Reply:</strong> <a href="2553.php">Ron Brightwell: "Re: [OMPI devel] Environment forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is extremely tricky to do.  How do you know which environment 
<br>
variables to forward (foo in this case) and which not to (hostname). 
<br>
SLURM has a better chance, since it's linux only and generally only run on 
<br>
tightly controlled clusters.  But there's a whole variety of things that 
<br>
shouldn't be forwarded and that list differs from OS to OS.
<br>
<p>I believe we toyed around with the &quot;right thing&quot; in LAM and early on with 
<br>
OPen MPI and decided that it was too hard to meet expected behavior.
<br>
<p>Brian
<br>
<p>On Mon, 5 Nov 2007, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After talking with Torsten today I found something weird. When using the SLURM
</span><br>
<span class="quotelev1">&gt; pls we seem to forward a user's environment, but when using the rsh pls we do
</span><br>
<span class="quotelev1">&gt; not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I.e.:
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ mpirun -np 1 printenv |grep foo
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ export foo=bar
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ mpirun -np 1 printenv |grep foo
</span><br>
<span class="quotelev1">&gt; foo=bar
</span><br>
<span class="quotelev1">&gt; [tprins_at_odin ~]$ mpirun -np 1 -mca pls rsh printenv |grep foo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my question is which is the expected behavior?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think we can do anything about SLURM automatically forwarding the
</span><br>
<span class="quotelev1">&gt; environment, but I think there should be a way to make rsh forward the
</span><br>
<span class="quotelev1">&gt; environment. Perhaps add a flag to mpirun to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2551.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Previous message:</strong> <a href="2549.php">Tim Prins: "[OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2549.php">Tim Prins: "[OMPI devel] Environment forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2551.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Reply:</strong> <a href="2551.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Reply:</strong> <a href="2553.php">Ron Brightwell: "Re: [OMPI devel] Environment forwarding"</a>
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
