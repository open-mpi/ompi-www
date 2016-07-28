<?
$subject_val = "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 07:57:16 2010" -->
<!-- isoreceived="20100323115716" -->
<!-- sent="Tue, 23 Mar 2010 07:57:01 -0400" -->
<!-- isosent="20100323115701" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="075CCB2A-ABA5-49A5-84C0-B86F8F468EE5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A1054BF9-AF68-489D-B7C4-5BFBFCEFF5BC_at_open-mpi.org" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 07:57:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7652.php">hu yaohui: "[OMPI devel] need help when make"</a>
<li><strong>Previous message:</strong> <a href="7650.php">Christoph Konersmann: "[OMPI devel] Changing BTLs at runtime"</a>
<li><strong>In reply to:</strong> <a href="7589.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7654.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7654.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just a reminder that this RFC will go into the trunk this evening unless there are strong objections.
<br>
<p>We intend to let this soak for a few days then bring it over to the 1.5 series (after the 1.5.0 release).
<br>
<p>-- Josh
<br>
<p>On Mar 15, 2010, at 9:26 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; (Updated RFC, per offline discussion)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHAT: Merge a tmp branch for fault recovery development into the OMPI trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Bring over work done by Josh and Ralph to extend OMPI's fault recovery capabilities
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Impacts a number of ORTE files and a ORTE ErrMgr framework
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Barring objections and/or further requests for delay, evening of March 23
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; REFERENCE BRANCH: <a href="http://bitbucket.org/jjhursey/orte-errmgr/">http://bitbucket.org/jjhursey/orte-errmgr/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BACKGROUND:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh and Ralph have been working on a private branch off of the trunk on extended fault recovery procedures, mostly impacting ORTE. The new code optionally allows ORTE to recover from failed nodes, moving processes to other nodes in order to maintain operation. In addition, the code provides better support for recovering from individual process failures.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not all of the work done on the private branch will be brought over in this commit. Some of the MPI-specific code that allows recovery from process failure on-the-fly will be committed separately at a later date. This commit provides the foundation for ORTE stabilization that can be built upon to provide OMPI layer stability in the future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This commit significantly modifies the ORTE ErrMgr framework to support those advanced recovery operations. The ErrMgr public interface has been preserved since it is used in various places throughout the codebase, and should continue to be used as normal. The ErrMgr framework has been internally redesigned to better support multiple strategies for responding to failures (represents a merge of the old ErrMgr and the RecoS framework, into the ErrMgr 3.0 component interface). The default (base) mode will continue to work exactly the same as today, aborting the job when a failure occurs. However, if the user elects to enable recovery then one or more ErrMgr components will be activated to determine the recovery policy for the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have created a public repo (reference branch, above) with the code to be merged into the trunk (r22815). Please feel free to check it out and test it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: The new recovery capability is only active if the user elects to use it by setting the MCA parameter errmgr_base_enable_recovery to '1'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: More ErrMgr recovery components will be coming online in the near future, currently this branch only includes the 'orcm' module for ORTE process recovery (not MPI processes). If you want to experiment with this feature, below are the MCA parameters that you will need to get started.
</span><br>
<span class="quotelev2">&gt;&gt; #################################
</span><br>
<span class="quotelev2">&gt;&gt; plm=rsh
</span><br>
<span class="quotelev2">&gt;&gt; rmaps=resilient
</span><br>
<span class="quotelev2">&gt;&gt; routed=cm
</span><br>
<span class="quotelev2">&gt;&gt; errmgr_base_enable_recovery=1
</span><br>
<span class="quotelev2">&gt;&gt; #################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments, suggestions, and corrections are welcome!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2010, at 2:22 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Wesley,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for catching that oversight. Below are the MCA parameters that you should need at the moment:
</span><br>
<span class="quotelev2">&gt;&gt; #####################################
</span><br>
<span class="quotelev2">&gt;&gt; # Use the C/R Process Migration Recovery Supervisor
</span><br>
<span class="quotelev2">&gt;&gt; recos_base_enable=1
</span><br>
<span class="quotelev2">&gt;&gt; # Only use the 'rsh' launcher, other launchers will be supported later
</span><br>
<span class="quotelev2">&gt;&gt; plm=rsh
</span><br>
<span class="quotelev2">&gt;&gt; # The resilient mapper knows how to use RecoS and deal with recovering procs
</span><br>
<span class="quotelev2">&gt;&gt; rmaps=resilient
</span><br>
<span class="quotelev2">&gt;&gt; # 'cm' component is the only one that can handle failures at the moment
</span><br>
<span class="quotelev2">&gt;&gt; routed=cm
</span><br>
<span class="quotelev2">&gt;&gt; #####################################
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if you have any troubles.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 10, 2010, at 10:36 AM, Wesley Bland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You mentioned some MCA parameters that you would include in the email, but I don't see those parameters anywhere.  Could you please put those in here to make testing easier for people.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wesley
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Mar 10, 2010 at 1:26 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yesterday evening George, Thomas and I discussed some of their concerns about this RFC at the MPI Forum meeting. After the discussion, we seemed to be in agreement that the RecoS framework is a good idea and the concepts and fixes in this RFC should move forward with a couple of notes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - They wanted to test the branch a bit more over the next couple of days. Some MCA parameters that you will need are at the bottom of this message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Reiterate that this RFC only addresses ORTE stability, not OMPI stability. The OMPI stability extension is a second step for the line of work, and should/will fit in nicely with the RecoS framework being proposed in this RFC. The OMPI layer stability will require a significant amount of work, but the RecoS framework will provide the ORTE layer stability that is required as a foundation for OMPI layer stability in the future.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - The purpose of the ErrMgr becomes slightly unclear with the addition of the RecoS framework, since both are focused on responding to faults in the system (and RecoS, when enabled, overrides most/all of the ErrMgr functionality). Should the RecoS framework be merged with the ErrMgr framework to create a new ErrMgr interface?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are typing to decide if we should merge these frameworks, but at this point we are interested in hearing how other developers feel about merging the ErrMgr and RecoS frameworks, which would change the ErrMgr API. Are there any developers out there that are developing ErrMgr components, or are using any particular features of the existing ErrMgr framework that they would like to see preserved in the next revision. By default, the existing default abort behavior of the ErrMgr framework will be preserved, so the user will have to 'opt-in' to any fault recovery capabilities.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So we are continuing the discussion a bit more off-list, and will return to the list with an updated RFC (and possibly a new branch) soon (hopefully end of the week/early next week). I would like to briefly discuss this RFC at the Open MPI teleconf next Tuesday.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 26, 2010, at 8:06 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sounds good to me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For those casually following this RFC let me summarize its current state.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh and George (and anyone else that wishes to participate attending the forum) will meet sometime at the next MPI Forum meeting (March 8-10). I will post any relevant notes from this meeting back to the list afterwards. So the RFC is on hold pending the outcome of that meeting. For those developers interested in this RFC that will not be able to attend, feel free to continue using this thread for discussion.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 26, 2010, at 6:09 AM, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 26, 2010, at 01:50 , Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any of those options are fine with me. I was thinking that if you wanted to talk sooner, we might be able to help explain our intentions with this framework a bit better. I figure that the framework interface will change a bit as we all advance and incorporate our various techniques into it. I think that the current interface is a good first step, but there are certainly many more steps to come.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am fine delaying this code a bit, just not too long. Meeting at the forum for a while might be a good option (we could probably even arrange to call in others if you wanted).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sounds good, let do this.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Feb 25, 2010, at 6:45 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If Josh is going to be at the forum, perhaps you folks could chat there? Might as well take advantage of being colocated, if possible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Otherwise, I'm available pretty much any time. I can't contribute much about the MPI recovery issues, but can contribute to the RTE issues if that helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Feb 25, 2010 at 7:39 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Josh,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Next week is a little bit too early as will need some time to figure out how to integrate with this new framework, and at what extent our code and requirements fit into. Then the week after is the MPI Forum. How about on Thursday 11 March?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 25, 2010, at 12:46 , Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Per my previous suggestion, would it be useful to chat on the phone early next week about our various strategies?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="7652.php">hu yaohui: "[OMPI devel] need help when make"</a>
<li><strong>Previous message:</strong> <a href="7650.php">Christoph Konersmann: "[OMPI devel] Changing BTLs at runtime"</a>
<li><strong>In reply to:</strong> <a href="7589.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7654.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7654.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
