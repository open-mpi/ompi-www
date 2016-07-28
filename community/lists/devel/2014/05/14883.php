<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 07:31:58 2014" -->
<!-- isoreceived="20140528113158" -->
<!-- sent="Wed, 28 May 2014 11:31:57 +0000" -->
<!-- isosent="20140528113157" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="3590E241-3888-4C3F-93DD-604525C5BA25_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5sErgm1B1UbDrSyAdOyXt0-zGhKkRs8Lof0gZMmJVRdEQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 07:31:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14884.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14882.php">Gilles Gouaillardet: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>In reply to:</strong> <a href="14877.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14884.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14884.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14887.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 27, 2014, at 9:11 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; in the case of intercomm_create, the children free all the communicators and then MPI_Disconnect() and then MPI_Finalize() and exits.
</span><br>
<span class="quotelev1">&gt; the parent only MPI_Disconnect() without freeing all the communicators. MPI_Finalize() tries to disconnect and communicate with already exited processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my understanding is that there are two ways of seeing things :
</span><br>
<span class="quotelev1">&gt; a) the &quot;R-way&quot; : the problem is the parent should not try to communicate to already exited processes
</span><br>
<span class="quotelev1">&gt; b) the &quot;J-way&quot; : the problem is the children should have waited either in MPI_Comm_free() or MPI_Finalize()
</span><br>
<p>I didn't ignore Ralph's email; I was pointing out what the MPI semantics are supposed to be.
<br>
<p>I had only a short time this morning to look at the intercomm_create test program, and it looks like Gilles might be correct -- the children are freeing all relevant communicators *but the parent is not*.  If this is, indeed, correct, then a) OMPI's implementation might be fine because the test program is erroneous (i.e., the children *think* that they are disconnected and therefore allow themselves to exit, but the parents *think* that they are still connected and therefore try to contact the children during the parents' MPI_FINALIZE), and b) his original patch to the test program could well be correct.
<br>
<p>I won't have time to investigate this today; if someone else could look at the test code and confirm whether this is correct or not, that would be appreciated.
<br>
<p><span class="quotelev1">&gt; as far as i am concerned, i have no opinion on which of a) or b) is the correct/most appropriate approach.
</span><br>
<p>To be totally clear: MPI says it is erroneous for only some (not all) processes in a communicator to call MPI_COMM_FREE.  So if that's the real problem, then the discussion about why the parent(s) is(are) trying to contact the children is moot -- the test is erroneous, and erroneous application behavior is undefined.
<br>
<p>All that being said, if we want to make this error case a bit friendlier to the user, that would be great (i.e., a show_help something like &quot;It looks like an MPI process is trying to contact another MPI process that has already exited/called MPI_FINALIZE.  This is almost certainly an error in the application...&quot;).  But that's definitely extra bonus points, and not required.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14884.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14882.php">Gilles Gouaillardet: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>In reply to:</strong> <a href="14877.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14884.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14884.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14887.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
