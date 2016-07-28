<?
$subject_val = "Re: [OMPI devel] 1.7.5 end-of-week status report";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 15:02:06 2014" -->
<!-- isoreceived="20140317190206" -->
<!-- sent="Mon, 17 Mar 2014 13:02:05 -0600" -->
<!-- isosent="20140317190205" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5 end-of-week status report" -->
<!-- id="20140317190205.GD28767_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F265D2F6-0AED-4C8A-AFDC-F718B0BFFB40_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5 end-of-week status report<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-17 15:02:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14358.php">Shamis, Pavel: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Previous message:</strong> <a href="14356.php">Jeff Squyres (jsquyres): "[OMPI devel] ompi-tests &quot;ompimtttester&quot; account password changed"</a>
<li><strong>In reply to:</strong> <a href="14353.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14358.php">Shamis, Pavel: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Reply:</strong> <a href="14358.php">Shamis, Pavel: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Mar 16, 2014 at 08:19:32AM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 15, 2014, at 10:19 PM, Hjelm, Nathan T &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Friday, March 14, 2014 8:48 PM, devel [devel-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: [OMPI devel] 1.7.5 end-of-week status report
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have both good and bad news to report - first the good.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OSHMEM now passes nearly all its tests on my Linux cluster (tcp). My hat is off to the Mellanox guys for getting this done, including getting our MTT repo tests complete.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The MPI layer passes nearly all the IBM, Intel, and one-sided tests. Only a few failures.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Now the bad. The coll/ml component continues to have problems, including segfaults, and I have discovered that the bcol and coll/ml code remains entangled (I thought it had been separated, but sadly not). I have therefore ompi_ignored coll/ml and bcol/ptpcoll.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No need. I discovered a bug in my last coll/ml fix. It incorrectly handled one of the possibly hierarchies. The bug is fixed in trunk and a CMR is open for 1.7.5. In the future I will clean up this path but the fix should have us working again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm glad you were able to patch it, but this still begs the question of what to do with coll/ml. It's disturbing that its existence alone was enough to break the Java bindings (and yes, I concede those aren't built by default or part of the MPI standard) without even traversing its code path, and we've had a lot of problems with errors when we do go thru it. More disturbing, you can't even cleanly no-build that component due to the unfortunate cross-linkage with bcol/ptpcoll, so we definitely need a note in NEWS to warn people they need to no-build both.
</span><br>
<p>I thought ORNL had addresed the cross-linkage as well. I am sure they
<br>
will get a fix for that in the next couple of days.
<br>
<p><span class="quotelev1">&gt; It's unclear to me how to handle this situation, so we'll need to discuss it at the telecon. At the very least, I think we need to ensure coll/ml is not the default for 1.7.5 as it doesn't appear to be ready for that role.
</span><br>
<p>coll/ml is not the default. The issue here is that we have to generate
<br>
and parse the topology at collective select time. This will happen even
<br>
if coll/ml is not the highest priority collective component. I fixed the
<br>
one issue with parsing the topology and then an issue with that
<br>
fix. To be clear, the original issue only occured on OSX with debug
<br>
builds. This is a setup LANL (and I am sure ORNL) doesn't test.
<br>
<p>I really didn't care about the Java problem but the fix was simple
<br>
enough. It is easy to verify that the code Jeff fixed was the only place
<br>
in coll/ml where a large buffer was put on the stack.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14357/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14358.php">Shamis, Pavel: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Previous message:</strong> <a href="14356.php">Jeff Squyres (jsquyres): "[OMPI devel] ompi-tests &quot;ompimtttester&quot; account password changed"</a>
<li><strong>In reply to:</strong> <a href="14353.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14358.php">Shamis, Pavel: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
<li><strong>Reply:</strong> <a href="14358.php">Shamis, Pavel: "Re: [OMPI devel] 1.7.5 end-of-week status report"</a>
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
