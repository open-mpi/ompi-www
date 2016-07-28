<?
$subject_val = "Re: [OMPI devel] Slurm support in master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 14:59:30 2015" -->
<!-- isoreceived="20150909185930" -->
<!-- sent="Wed, 9 Sep 2015 12:59:29 -0600" -->
<!-- isosent="20150909185929" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Slurm support in master" -->
<!-- id="CAF1Cqj5Ga75nXsBHB_Oa9VBAJW4j8PDvJU1vfiuGRJXChVnqiA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6849168D-413E-4E3B-BD4D-7C56FF53F2B3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Slurm support in master<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-09 14:59:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17992.php">Ralph Castain: "Re: [OMPI devel] Slurm support in master"</a>
<li><strong>Previous message:</strong> <a href="17990.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>In reply to:</strong> <a href="17987.php">Ralph Castain: "[OMPI devel] Slurm support in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17992.php">Ralph Castain: "Re: [OMPI devel] Slurm support in master"</a>
<li><strong>Reply:</strong> <a href="17992.php">Ralph Castain: "Re: [OMPI devel] Slurm support in master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>mpirun works for me now on master on the NERSC systems.
<br>
<p><p>Thanks,
<br>
<p><p>Howard
<br>
<p><p><p>----------
<br>
<p>sent from my smart phonr so no good type.
<br>
<p>Howard
<br>
On Sep 8, 2015 7:49 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve poked around this evening and gotten the Slurm support in master to
</span><br>
<span class="quotelev1">&gt; at least build, and for mpirun to now work correctly under a Slurm job
</span><br>
<span class="quotelev1">&gt; allocation. This should all be committed as soon as auto-testing completes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/877">https://github.com/open-mpi/ompi/pull/877</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard/Nathan: I believe I fixed mpirun for ALPS too - please check.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Direct launch under Slurm still segfaults, and I&#226;&#128;&#153;m out of time chasing it
</span><br>
<span class="quotelev1">&gt; down. Could someone please take a look? It seems to have something to do
</span><br>
<span class="quotelev1">&gt; with the hash table support in the base, but I&#226;&#128;&#153;m not sure of the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17987.php">http://www.open-mpi.org/community/lists/devel/2015/09/17987.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17991/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17992.php">Ralph Castain: "Re: [OMPI devel] Slurm support in master"</a>
<li><strong>Previous message:</strong> <a href="17990.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>In reply to:</strong> <a href="17987.php">Ralph Castain: "[OMPI devel] Slurm support in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17992.php">Ralph Castain: "Re: [OMPI devel] Slurm support in master"</a>
<li><strong>Reply:</strong> <a href="17992.php">Ralph Castain: "Re: [OMPI devel] Slurm support in master"</a>
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
