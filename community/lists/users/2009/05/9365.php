<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 11:53:22 2009" -->
<!-- isoreceived="20090518155322" -->
<!-- sent="Mon, 18 May 2009 17:53:16 +0200" -->
<!-- isosent="20090518155316" -->
<!-- name="Roman Martonak" -->
<!-- email="r.martonak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="d21ea44c0905180853w47c0f582x3efcc90c87414d5e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A117750.20706_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] scaling problem with openmpi<br>
<strong>From:</strong> Roman Martonak (<em>r.martonak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 11:53:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9366.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9364.php">Iain Bason: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>In reply to:</strong> <a href="9361.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9366.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9366.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9367.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been using --mca mpi_paffinity_alone 1 in all simulations. Concerning &quot;-mca
<br>
&nbsp;mpi_leave_pinned 1&quot;, I tried it with openmpi 1.2.X versions and it
<br>
makes no difference.
<br>
<p>Best regards
<br>
<p>Roman
<br>
<p>On Mon, May 18, 2009 at 4:57 PM, Pavel Shamis (Pasha) &lt;pashash_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) I was told to add &quot;-mca mpi_leave_pinned 0&quot; to avoid problems with
</span><br>
<span class="quotelev2">&gt;&gt; Infinband. &#160;This was with OpenMPI 1.3.1. &#160;Not
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually for 1.2.X version I will recommend you to enable leave pinned &quot;-mca
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sure if the problems were fixed on 1.3.2, but I am hanging on to that
</span><br>
<span class="quotelev2">&gt;&gt; setting just in case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We had data corruption issue in 1.3.1 but it was resolved in 1.3.2. In 1.3.2
</span><br>
<span class="quotelev1">&gt; version leave_pinned is enabled by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I remember correct mvapich enables affinity mode by default, so I can
</span><br>
<span class="quotelev1">&gt; recommend you to try to enable it too:
</span><br>
<span class="quotelev1">&gt; &quot;--mca mpi_paffinity_alone 1&quot;. For more details please check FAQ -
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9366.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9364.php">Iain Bason: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>In reply to:</strong> <a href="9361.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9366.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9366.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9367.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
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
