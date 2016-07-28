<?
$subject_val = "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 11:48:52 2014" -->
<!-- isoreceived="20140507154852" -->
<!-- sent="Wed, 7 May 2014 22:48:51 +0700" -->
<!-- isosent="20140507154851" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested" -->
<!-- id="CAJ2Qj5r0evb=eexjQcmEZLFc+1zsdSprYp_Nm==9Zd2LDO2vow_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F9745455-4A82-42A0-AF56-496F5D405854_at_open-mpi.org" -->
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
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 11:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14717.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14715.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14715.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14717.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14717.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good idea :)!
<br>
<p>&#209;&#129;&#209;&#128;&#208;&#181;&#208;&#180;&#208;&#176;, 7 &#208;&#188;&#208;&#176;&#209;&#143; 2014 &#208;&#179;. &#208;&#191;&#208;&#190;&#208;&#187;&#209;&#140;&#208;&#183;&#208;&#190;&#208;&#178;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140; Ralph Castain &#208;&#189;&#208;&#176;&#208;&#191;&#208;&#184;&#209;&#129;&#208;&#176;&#208;&#187;:
<br>
<p><span class="quotelev1">&gt; Jeff actually had a useful suggestion (gasp!).He proposed that we separate
</span><br>
<span class="quotelev1">&gt; the PMI-1 and PMI-2 codes into separate components so you could select them
</span><br>
<span class="quotelev1">&gt; at runtime. Thus, we would build both (assuming both PMI-1 and 2 libs are
</span><br>
<span class="quotelev1">&gt; found), default to PMI-1, but users could select to try PMI-2. If the PMI-2
</span><br>
<span class="quotelev1">&gt; component failed, we would emit a show_help indicating that they probably
</span><br>
<span class="quotelev1">&gt; have a broken PMI-2 version and should try PMI-1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2014, at 8:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2014, at 7:56 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, I see. Sorry for the reactionary comment - but this feature falls
</span><br>
<span class="quotelev1">&gt; squarely within my &quot;jurisdiction&quot;, and we've invested a lot in improving
</span><br>
<span class="quotelev1">&gt; OMPI jobstart under srun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said (now that I've taken some deep breaths and carefully read
</span><br>
<span class="quotelev1">&gt; your original email :)), what you're proposing isn't a bad idea. I think it
</span><br>
<span class="quotelev1">&gt; would be good to maybe add a &quot;--with-pmi2&quot; flag to configure since
</span><br>
<span class="quotelev1">&gt; &quot;--with-pmi&quot; automagically uses PMI2 if it finds the header and lib. This
</span><br>
<span class="quotelev1">&gt; way, we could experiment with PMI1/PMI2 without having to rebuild SLURM or
</span><br>
<span class="quotelev1">&gt; hack the installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That would be a much simpler solution than what Artem proposed (off-list)
</span><br>
<span class="quotelev1">&gt; where we would try PMI2 and then if it didn't work try to figure out how to
</span><br>
<span class="quotelev1">&gt; fall back to PMI1. I'll add this for now, and if Artem wants to try his
</span><br>
<span class="quotelev1">&gt; more automagic solution and can make it work, then we can reconsider that
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 7, 2014 at 10:45 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, then we'll just have to develop a workaround for all those Slurm
</span><br>
<span class="quotelev1">&gt; releases where PMI-2 is borked :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I think people misunderstood my statement. I specifically did *not*
</span><br>
<span class="quotelev1">&gt; propose to *lose* PMI-2 support. I suggested that we change it to
</span><br>
<span class="quotelev1">&gt; &quot;on-by-request&quot; instead of the current &quot;on-by-default&quot; so we wouldn't keep
</span><br>
<span class="quotelev1">&gt; getting asked about PMI-2 bugs in Slurm. Once the Slurm implementation
</span><br>
<span class="quotelev1">&gt; stabilized, then we could reverse that policy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, given that both you and Chris appear to prefer to keep it
</span><br>
<span class="quotelev1">&gt; &quot;on-by-default&quot;, we'll see if we can find a way to detect that PMI-2 is
</span><br>
<span class="quotelev1">&gt; broken and then fall back to PMI-1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2014, at 7:39 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just saw this thread, and I second Chris' observations: at scale we are
</span><br>
<span class="quotelev1">&gt; seeing huge gains in jobstart performance with PMI2 over PMI1. We *CANNOT*loose this functionality. For competitive reasons, I cannot provide exact
</span><br>
<span class="quotelev1">&gt; numbers, but let's say the difference is in the ballpark of a full
</span><br>
<span class="quotelev1">&gt; order-of-magnitude on 20K ranks versus PMI1. PMI1 is completely
</span><br>
<span class="quotelev1">&gt; unacceptable/unusable at scale. Certainly PMI2 still has scaling issues,
</span><br>
<span class="quotelev1">&gt; but there is no contest between PMI1 and PMI2.  We (MLNX) are actively
</span><br>
<span class="quotelev1">&gt; working to resolve some of the scalability issues in PMI2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joshua S. Ladd
</span><br>
<span class="quotelev1">&gt; Staff Engineer, HPC Software
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 7, 2014 at 4:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting - how many nodes were involved? As I said, the bad scaling
</span><br>
<span class="quotelev1">&gt; becomes more evident at a fairly high node count.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2014, at 12:07 AM, Christopher Samuel &lt;samuel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt; &gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hiya Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 07/05/14 14:49, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I should have looked closer to see the numbers you posted, Chris -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; those include time for MPI wireup. So what you are seeing is that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun is much more efficient at exchanging the MPI endpoint info
</span><br>
<span class="quotelev3">&gt; &gt;&gt; than PMI. I suspect that PMI2 is not much better as the primary
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reason for the difference is that mpriun sends blobs, while PMI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; requires that everything b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14716/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14717.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14715.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14715.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14717.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Reply:</strong> <a href="14717.php">Joshua Ladd: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
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
