<?
$subject_val = "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  4 10:40:56 2012" -->
<!-- isoreceived="20121004144056" -->
<!-- sent="Thu, 04 Oct 2012 15:40:51 +0100" -->
<!-- isosent="20121004144051" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages" -->
<!-- id="874nmae1vw.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="alpine.SOC.2.00.1209281629180.10128_at_sunserv3" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-04 10:40:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20413.php">Sébastien Boisvert: "[OMPI users] -output-filename 1234 versus --mca orte_output_filename 1234"</a>
<li><strong>Previous message:</strong> <a href="20411.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20357.php">Mark Dixon: "[OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20417.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>Reply:</strong> <a href="20417.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Meanwhile, much later -- you'll sympathize:  Did you have any joy with
<br>
this?
<br>
<p>You wrote: 
<br>
<p><span class="quotelev1">&gt; These messages appeared when running IMB compiled with openmpi 1.6.1
</span><br>
<span class="quotelev1">&gt; across 256 cores (16 nodes, 16 cores per node). The job ran from
</span><br>
<span class="quotelev1">&gt; 09:56:54 to 10:08:46 and failed with no obvious error messages.
</span><br>
<p>I don't know about the messages, but there are successful &#195;&#151;256 runs in
<br>
my ~/imb, one with default params, and also &#195;&#151;512.  The 256 ones were
<br>
accounted &#226;&#136;&#188;330GB, and the default h_vmem is still 1G.  That's not the
<br>
cause of the failure, is it?
<br>
<p>For the kernel issue, do you actually have the same adaptors under RH5
<br>
to compare?  lspci says our current QDR ones are the same as yours
<br>
(surprisingly), and they're OK with openib params from the default
<br>
Mellanox OFED setup.  They're on older OFED (not vanilla RH) due to our
<br>
horrible hardware mixture.
<br>
<p>With the new stuff I can't do more than access a head.  That also has
<br>
the same adaptors, but I don't know if MPI runs have your symptom.  The
<br>
modprobe config is different from yours, but the driver is older.  If it
<br>
might help, I could poke around node images and send config files, but I
<br>
don't know what the various different images are.
<br>
<p>I might have hoped you wouldn't have to sort this yourself, if I was a
<br>
beginner...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20413.php">Sébastien Boisvert: "[OMPI users] -output-filename 1234 versus --mca orte_output_filename 1234"</a>
<li><strong>Previous message:</strong> <a href="20411.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20357.php">Mark Dixon: "[OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20417.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>Reply:</strong> <a href="20417.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
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
