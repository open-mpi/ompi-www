<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 26 17:39:30 2010" -->
<!-- isoreceived="20101026213930" -->
<!-- sent="Tue, 26 Oct 2010 17:39:24 -0400" -->
<!-- isosent="20101026213924" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936" -->
<!-- id="D74C856F-1AA7-464F-8C41-E66FD1C6AE33_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0ED07D0C-0BB6-4988-A1A4-BF7D757EC4B2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-26 17:39:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8635.php">Barrett, Brian W: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Previous message:</strong> <a href="8633.php">Jeff Squyres: "[OMPI devel] 1.5.x plans"</a>
<li><strong>In reply to:</strong> <a href="8632.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 26, 2010, at 1:27 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I think we can do the old libevent for now as the trunk doesn't exploit the new 2.0 features yet (though I have some implemented in a branch that is now on hold). However, if we can fix shared memory quickly (and Sam appears to have something that works, though isn't fully verified yet), and can resolve the performance question quickly, I would MUCH rather not waste my time on retrofitting 1.4!
</span><br>
<p>Sorry I had to drop off the call today (tornados in my area!).
<br>
<p>After digging around in the new libevent a bit, I found the problem -- it's exactly what I said in my first mail: libevent called poll() with an infinite timeout.  I talked with Brian and we're pretty sure we have the right solution.  I committed it in r23957.
<br>
<p>Ralph committed a performance fix in r23956 (i.e., disable libevent's threading support --  we need to evaluate what this means for MPI_THREAD_MULTIPLE).  Testing shows that this puts us back in the right performance ballpark; attached are 2 graphs of NetPIPE that I ran on 2 wolfdale-class machines at Cisco.  I ran with the trunk HEAD (after the libevent fix commits from today) and with a commit from before all the libevent upgrades.
<br>
<p>*** Confirmation of this data from another site would be greatly appreciated.
<br>
<p>In short, the graphs show:
<br>
<p>- TCP BTL performance over gigE and IPoIB is the same (between the 2 machines)
<br>
- SM BTL performance is a skosh lower in the new libevent (on 1 machine)
<br>
<p>Note that these were DEBUG builds -- optimized builds would be a little better (particularly in SM latency).  Ralph and I discussed a performance tweak that he's going to implement tonight.  We think/hope will put the SM latency/bandwidth right back where it was before the upgrade -- i.e., we think it'll erase the small performance difference.
<br>
<p>-----
<br>
<p>As such, given that everything *seems* to be working properly, and *seems* to be back at the old performance level, I personally don't think it's worth it to do a libevent component of the old version.  I had thought it would be an easy component to do, but apparently it's not (i.e., it would be a 2-3 days' worth of work -- which doesn't seem worth it to me).  I think our time would be better suited to tuning up the new libevent properly.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>


</pre>
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8634/netpipe-bandwidths.pdf">netpipe-bandwidths.pdf</a>
</ul>
<!-- attachment="netpipe-bandwidths.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8634/netpipe-latencies.pdf">netpipe-latencies.pdf</a>
</ul>
<!-- attachment="netpipe-latencies.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8635.php">Barrett, Brian W: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Previous message:</strong> <a href="8633.php">Jeff Squyres: "[OMPI devel] 1.5.x plans"</a>
<li><strong>In reply to:</strong> <a href="8632.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
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
