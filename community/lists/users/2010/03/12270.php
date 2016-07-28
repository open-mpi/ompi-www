<?
$subject_val = "Re: [OMPI users] change hosts to restart the checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 09:06:05 2010" -->
<!-- isoreceived="20100307140605" -->
<!-- sent="Sun, 7 Mar 2010 11:06:00 -0300" -->
<!-- isosent="20100307140600" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] change hosts to restart the checkpoint" -->
<!-- id="9108753b1003070605s609af1f2j4264340cabe9f3a8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C144D81-C3EB-446B-93C7-A6DED50C0FF5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] change hosts to restart the checkpoint<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 09:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12271.php">Ralph Castain: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>Previous message:</strong> <a href="12269.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>In reply to:</strong> <a href="12260.php">Josh Hursey: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12256.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 5, 2010 at 12:03 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This type of failure is usually due to prelink'ing being left enabled on one
</span><br>
<span class="quotelev1">&gt; or more of the systems. This has come up multiple times on the Open MPI
</span><br>
<span class="quotelev1">&gt; list, but is actually a problem between BLCR and the Linux kernel. BLCR has
</span><br>
<span class="quotelev1">&gt; a FAQ entry on this that you will want to check out:
</span><br>
<span class="quotelev1">&gt; &#160;<a href="https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that does not work, then we can look into other causes.
</span><br>
<p>I also suggest checkpointing and restarting the app with BLCR
<br>
directly. I.e., take any simple app, run it with cr_run, checkpoint it
<br>
with cr_checkpoint then restart it with cr_restart. Make sure the blcr
<br>
module is loaded too. That way you can tell whether it's related to
<br>
OpenMPI or not.
<br>
<p>Regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12271.php">Ralph Castain: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>Previous message:</strong> <a href="12269.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>In reply to:</strong> <a href="12260.php">Josh Hursey: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12256.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
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
