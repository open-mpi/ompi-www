<?
$subject_val = "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 13:27:00 2010" -->
<!-- isoreceived="20100310182700" -->
<!-- sent="Wed, 10 Mar 2010 10:26:57 -0800" -->
<!-- isosent="20100310182657" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="4FE0E1D4-1AA4-44CA-8150-5DA34DD24C8F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EA3DF4A3-CF1C-4A36-8229-367959CCD0E9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 13:26:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7578.php">Wesley Bland: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7576.php">Rainer Keller: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7509.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7578.php">Wesley Bland: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7578.php">Wesley Bland: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yesterday evening George, Thomas and I discussed some of their concerns about this RFC at the MPI Forum meeting. After the discussion, we seemed to be in agreement that the RecoS framework is a good idea and the concepts and fixes in this RFC should move forward with a couple of notes:
<br>
<p>&nbsp;- They wanted to test the branch a bit more over the next couple of days. Some MCA parameters that you will need are at the bottom of this message.
<br>
<p>&nbsp;- Reiterate that this RFC only addresses ORTE stability, not OMPI stability. The OMPI stability extension is a second step for the line of work, and should/will fit in nicely with the RecoS framework being proposed in this RFC. The OMPI layer stability will require a significant amount of work, but the RecoS framework will provide the ORTE layer stability that is required as a foundation for OMPI layer stability in the future.
<br>
<p>&nbsp;- The purpose of the ErrMgr becomes slightly unclear with the addition of the RecoS framework, since both are focused on responding to faults in the system (and RecoS, when enabled, overrides most/all of the ErrMgr functionality). Should the RecoS framework be merged with the ErrMgr framework to create a new ErrMgr interface?
<br>
<p>We are typing to decide if we should merge these frameworks, but at this point we are interested in hearing how other developers feel about merging the ErrMgr and RecoS frameworks, which would change the ErrMgr API. Are there any developers out there that are developing ErrMgr components, or are using any particular features of the existing ErrMgr framework that they would like to see preserved in the next revision. By default, the existing default abort behavior of the ErrMgr framework will be preserved, so the user will have to 'opt-in' to any fault recovery capabilities.
<br>
<p>So we are continuing the discussion a bit more off-list, and will return to the list with an updated RFC (and possibly a new branch) soon (hopefully end of the week/early next week). I would like to briefly discuss this RFC at the Open MPI teleconf next Tuesday.
<br>
<p>-- Josh
<br>
<p>On Feb 26, 2010, at 8:06 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Sounds good to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For those casually following this RFC let me summarize its current state.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh and George (and anyone else that wishes to participate attending the forum) will meet sometime at the next MPI Forum meeting (March 8-10). I will post any relevant notes from this meeting back to the list afterwards. So the RFC is on hold pending the outcome of that meeting. For those developers interested in this RFC that will not be able to attend, feel free to continue using this thread for discussion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 26, 2010, at 6:09 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 26, 2010, at 01:50 , Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any of those options are fine with me. I was thinking that if you wanted to talk sooner, we might be able to help explain our intentions with this framework a bit better. I figure that the framework interface will change a bit as we all advance and incorporate our various techniques into it. I think that the current interface is a good first step, but there are certainly many more steps to come.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am fine delaying this code a bit, just not too long. Meeting at the forum for a while might be a good option (we could probably even arrange to call in others if you wanted).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sounds good, let do this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 25, 2010, at 6:45 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If Josh is going to be at the forum, perhaps you folks could chat there? Might as well take advantage of being colocated, if possible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Otherwise, I'm available pretty much any time. I can't contribute much about the MPI recovery issues, but can contribute to the RTE issues if that helps.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Feb 25, 2010 at 7:39 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Next week is a little bit too early as will need some time to figure out how to integrate with this new framework, and at what extent our code and requirements fit into. Then the week after is the MPI Forum. How about on Thursday 11 March?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 25, 2010, at 12:46 , Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Per my previous suggestion, would it be useful to chat on the phone early next week about our various strategies?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7578.php">Wesley Bland: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7576.php">Rainer Keller: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7509.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7578.php">Wesley Bland: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7578.php">Wesley Bland: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
