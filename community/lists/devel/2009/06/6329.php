<?
$subject_val = "Re: [OMPI devel] trac ticket 1944 and pending sends";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 15:36:17 2009" -->
<!-- isoreceived="20090624193617" -->
<!-- sent="Wed, 24 Jun 2009 12:35:43 -0700" -->
<!-- isosent="20090624193543" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac ticket 1944 and pending sends" -->
<!-- id="4A42800F.40009_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DB3590B4-E1AF-4181-9CB4-11747BCFBA5D_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trac ticket 1944 and pending sends<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 15:35:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6330.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>Previous message:</strong> <a href="6328.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6319.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6323.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Here is a simple fix for both problems. Enforce a reasonable limit on  
</span><br>
<span class="quotelev1">&gt; the number of fragments in the BTL free list (1K should be more than  
</span><br>
<span class="quotelev1">&gt; enough), and make sure the fifo has a size equal to p *  
</span><br>
<span class="quotelev1">&gt; number_of_allowed_fragments_in_the_free_list, where p is the number 
</span><br>
<span class="quotelev1">&gt; of  local processes. While this solution will certainly increase again 
</span><br>
<span class="quotelev1">&gt; the  size of the mapped file, it will do it by a small margin compared 
</span><br>
<span class="quotelev1">&gt; with  what is happening today in the code. This is without talking 
</span><br>
<span class="quotelev1">&gt; about the  fact that it will solve the deadlock problem, by removing 
</span><br>
<span class="quotelev1">&gt; the  inability to return a fragment. In addition, the PML is capable 
</span><br>
<span class="quotelev1">&gt; of  handing such situations, so we're getting back to a deadlock free 
</span><br>
<span class="quotelev1">&gt; sm  BTL.
</span><br>
<p>I'm still trying to think this one through.  In the meanwhile, maybe you 
<br>
can help me with some things.
<br>
<p>1)  (As I asked before,) how does one determine that 1K are enough 
<br>
fragments?  Maybe this value should scale with np?
<br>
<p>2) How does one deal with two flavors of fragments, eager and max?  
<br>
Shall we cap each list at the same value?
<br>
<p>3)  I assume that, given two flavors of fragments, we need fifo_size &gt;= 
<br>
np * ( max_num_eager + max_num_frag )?
<br>
<p>I'm mostly interested in feedback on 1 and 2.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6330.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21513"</a>
<li><strong>Previous message:</strong> <a href="6328.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6319.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6323.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
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
