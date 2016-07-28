<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 08:35:52 2014" -->
<!-- isoreceived="20140528123552" -->
<!-- sent="Wed, 28 May 2014 05:35:48 -0700" -->
<!-- isosent="20140528123548" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="4640494D-48C9-4F9C-83C7-E9E525318B10_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3590E241-3888-4C3F-93DD-604525C5BA25_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 08:35:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14888.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>Previous message:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14883.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2014, at 4:31 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 27, 2014, at 9:11 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in the case of intercomm_create, the children free all the communicators and then MPI_Disconnect() and then MPI_Finalize() and exits.
</span><br>
<span class="quotelev2">&gt;&gt; the parent only MPI_Disconnect() without freeing all the communicators. MPI_Finalize() tries to disconnect and communicate with already exited processes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; my understanding is that there are two ways of seeing things :
</span><br>
<span class="quotelev2">&gt;&gt; a) the &quot;R-way&quot; : the problem is the parent should not try to communicate to already exited processes
</span><br>
<span class="quotelev2">&gt;&gt; b) the &quot;J-way&quot; : the problem is the children should have waited either in MPI_Comm_free() or MPI_Finalize()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't ignore Ralph's email;
</span><br>
<p>I was just pulling you chain, Jeff :-)
<br>
<p><span class="quotelev1">&gt; I was pointing out what the MPI semantics are supposed to be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had only a short time this morning to look at the intercomm_create test program, and it looks like Gilles might be correct -- the children are freeing all relevant communicators *but the parent is not*.  If this is, indeed, correct, then a) OMPI's implementation might be fine because the test program is erroneous (i.e., the children *think* that they are disconnected and therefore allow themselves to exit, but the parents *think* that they are still connected and therefore try to contact the children during the parents' MPI_FINALIZE), and b) his original patch to the test program could well be correct.
</span><br>
<p>Agreed - however, I find it concerning that loop_spawn, which does have every process calling comm_free, is showing the same symptom upon the parent calling finalize.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I won't have time to investigate this today; if someone else could look at the test code and confirm whether this is correct or not, that would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; as far as i am concerned, i have no opinion on which of a) or b) is the correct/most appropriate approach.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be totally clear: MPI says it is erroneous for only some (not all) processes in a communicator to call MPI_COMM_FREE.  So if that's the real problem, then the discussion about why the parent(s) is(are) trying to contact the children is moot -- the test is erroneous, and erroneous application behavior is undefined.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All that being said, if we want to make this error case a bit friendlier to the user, that would be great (i.e., a show_help something like &quot;It looks like an MPI process is trying to contact another MPI process that has already exited/called MPI_FINALIZE.  This is almost certainly an error in the application...&quot;).
</span><br>
<p>Also agreed, assuming we can find the right place to correctly determine that is what is happening.
<br>
<p><p><span class="quotelev1">&gt;  But that's definitely extra bonus points, and not required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14883.php">http://www.open-mpi.org/community/lists/devel/2014/05/14883.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14888.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>Previous message:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14883.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
