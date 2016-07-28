<?
$subject_val = "Re: [OMPI users] MX replacement?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 11:39:09 2016" -->
<!-- isoreceived="20160215163909" -->
<!-- sent="Mon, 15 Feb 2016 16:39:06 +0000" -->
<!-- isosent="20160215163906" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MX replacement?" -->
<!-- id="87si0uyllh.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="56BCC9FE.1080407_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MX replacement?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-15 11:39:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28530.php">Dave Love: "Re: [OMPI users] PVFS/OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="28528.php">Ralph Castain: "Re: [OMPI users] Release vs git trunk directory tree"</a>
<li><strong>In reply to:</strong> <a href="28509.php">Rob Latham: "Re: [OMPI users] MX replacement?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob Latham &lt;robl_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt; Assuming MPI-IO, to be on-topic, is MX known to have any real advantage
</span><br>
<span class="quotelev2">&gt;&gt; over TCP filesystem drivers, e.g. Lustre and PVFS?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both lustre (portals) and PVFS (BMI) have transport abstraction
</span><br>
<span class="quotelev1">&gt; layers. File systems benefit from native transport (compared to
</span><br>
<span class="quotelev1">&gt; ip-over-whatever) both in terms of latency (how fast metadata
</span><br>
<span class="quotelev1">&gt; operations take) and in bandwidth (moving lots of data to/from file
</span><br>
<span class="quotelev1">&gt; system).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; not sure if that's what you were asking...
</span><br>
<p>Yes.  I just haven't seen numbers to know how significant the effect is
<br>
in that case, apart from some for NFS RDMA.  I'd rather expect MX
<br>
support to be broken now anyway; apparently even IB is in released
<br>
orange PVFS which I'd intended to measure.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28530.php">Dave Love: "Re: [OMPI users] PVFS/OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="28528.php">Ralph Castain: "Re: [OMPI users] Release vs git trunk directory tree"</a>
<li><strong>In reply to:</strong> <a href="28509.php">Rob Latham: "Re: [OMPI users] MX replacement?"</a>
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
