<?
$subject_val = "Re: [MTT users] Patch to add --local-scratch option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 09:00:38 2008" -->
<!-- isoreceived="20080918130038" -->
<!-- sent="Thu, 18 Sep 2008 09:00:18 -0400" -->
<!-- isosent="20080918130018" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Patch to add --local-scratch option" -->
<!-- id="7166D051-6D4E-4C9F-B547-E2E7205C509F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080916160731.GB24599_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Patch to add --local-scratch option<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 09:00:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0616.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0614.php">Jeff Squyres: "Re: [MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>In reply to:</strong> <a href="0611.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0618.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0618.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 16, 2008, at 12:07 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; What happens if one uses --local-scratch, but leaves out the
</span><br>
<span class="quotelev1">&gt; --scratch option? In this case, I think MTT should assume
</span><br>
<span class="quotelev1">&gt; --scratch is the same as --local-scratch.
</span><br>
<p>In this case, my $0.02 is that it should be an error.  --scratch  
<br>
implies a --local-scatch, but I don't think the implication should go  
<br>
the other way.
<br>
<p><span class="quotelev1">&gt; Could the &quot;local&quot; in --local-scratch ever be misleading?
</span><br>
<span class="quotelev1">&gt; Couldn't a user ever use a mounted filesystem that's faster
</span><br>
<span class="quotelev1">&gt; than all their local filesystem? Should it be
</span><br>
<span class="quotelev1">&gt; --fast-scratch?
</span><br>
<p>Mmm... good point.  What if we name it what it really is: --mpi- 
<br>
install-scratch?  This also opens the door for other phase scratches  
<br>
if we ever want them.  And it keeps everything consistent and simple  
<br>
(from the user's point of view).
<br>
<p><span class="quotelev1">&gt; For future work, how about --scratch taking a (CSV?) list of
</span><br>
<span class="quotelev1">&gt; scratch directories. MTT then does a quick check for which
</span><br>
<span class="quotelev1">&gt; is the fastest filesystem (if such a check is
</span><br>
<span class="quotelev1">&gt; possible/feasible), and proceeds accordingly. That is, doing
</span><br>
<span class="quotelev1">&gt; everything it possible can in a fast scratch (builds,
</span><br>
<span class="quotelev1">&gt; writing out metadata, etc.), and installing the MPI(s) into
</span><br>
<span class="quotelev1">&gt; the slow mounted scratch. Would this be possible?
</span><br>
<p>Hmm.  I'm not quite sure how that would work -- &quot;fastest&quot; is a hard  
<br>
thing to determine.  What is &quot;fastest&quot; at this moment may be &quot;slowest&quot;  
<br>
2 minutes from now, for example.
<br>
<p>I'm looking at the patch in detail now... sorry for the delay...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0616.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0614.php">Jeff Squyres: "Re: [MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>In reply to:</strong> <a href="0611.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0618.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Reply:</strong> <a href="0618.php">Tim Mattox: "Re: [MTT users] Patch to add --local-scratch option"</a>
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
