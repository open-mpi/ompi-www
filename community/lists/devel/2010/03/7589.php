<?
$subject_val = "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 15 09:26:45 2010" -->
<!-- isoreceived="20100315132645" -->
<!-- sent="Mon, 15 Mar 2010 09:26:40 -0400" -->
<!-- isosent="20100315132640" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="A1054BF9-AF68-489D-B7C4-5BFBFCEFF5BC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2D3E7CEC-C27E-42DE-9457-45271EFE3E78_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-03-15 09:26:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7590.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7588.php">Joshua Hursey: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7579.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7651.php">Joshua Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7651.php">Joshua Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Updated RFC, per offline discussion)
<br>
<p>WHAT: Merge a tmp branch for fault recovery development into the OMPI  
<br>
trunk
<br>
<p>WHY: Bring over work done by Josh and Ralph to extend OMPI's fault  
<br>
recovery capabilities
<br>
<p>WHERE: Impacts a number of ORTE files and a ORTE ErrMgr framework
<br>
<p>TIMEOUT: Barring objections and/or further requests for delay, evening  
<br>
of March 23
<br>
<p>REFERENCE BRANCH: <a href="http://bitbucket.org/jjhursey/orte-errmgr/">http://bitbucket.org/jjhursey/orte-errmgr/</a>
<br>
<p>======================================================================
<br>
<p>BACKGROUND:
<br>
<p>Josh and Ralph have been working on a private branch off of the trunk  
<br>
on extended fault recovery procedures, mostly impacting ORTE. The new  
<br>
code optionally allows ORTE to recover from failed nodes, moving  
<br>
processes to other nodes in order to maintain operation. In addition,  
<br>
the code provides better support for recovering from individual  
<br>
process failures.
<br>
<p>Not all of the work done on the private branch will be brought over in  
<br>
this commit. Some of the MPI-specific code that allows recovery from  
<br>
process failure on-the-fly will be committed separately at a later  
<br>
date. This commit provides the foundation for ORTE stabilization that  
<br>
can be built upon to provide OMPI layer stability in the future.
<br>
<p>This commit significantly modifies the ORTE ErrMgr framework to  
<br>
support those advanced recovery operations. The ErrMgr public  
<br>
interface has been preserved since it is used in various places  
<br>
throughout the codebase, and should continue to be used as normal. The  
<br>
ErrMgr framework has been internally redesigned to better support  
<br>
multiple strategies for responding to failures (represents a merge of  
<br>
the old ErrMgr and the RecoS framework, into the ErrMgr 3.0 component  
<br>
interface). The default (base) mode will continue to work exactly the  
<br>
same as today, aborting the job when a failure occurs. However, if the  
<br>
user elects to enable recovery then one or more ErrMgr components will  
<br>
be activated to determine the recovery policy for the job.
<br>
<p>We have created a public repo (reference branch, above) with the code  
<br>
to be merged into the trunk (r22815). Please feel free to check it out  
<br>
and test it.
<br>
<p>NOTE: The new recovery capability is only active if the user elects to  
<br>
use it by setting the MCA parameter errmgr_base_enable_recovery to '1'.
<br>
<p>NOTE: More ErrMgr recovery components will be coming online in the  
<br>
near future, currently this branch only includes the 'orcm' module for  
<br>
ORTE process recovery (not MPI processes). If you want to experiment  
<br>
with this feature, below are the MCA parameters that you will need to  
<br>
get started.
<br>
<span class="quotelev1">&gt; #################################
</span><br>
<span class="quotelev1">&gt; plm=rsh
</span><br>
<span class="quotelev1">&gt; rmaps=resilient
</span><br>
<span class="quotelev1">&gt; routed=cm
</span><br>
<span class="quotelev1">&gt; errmgr_base_enable_recovery=1
</span><br>
<span class="quotelev1">&gt; #################################
</span><br>
<p>Comments, suggestions, and corrections are welcome!
<br>
<p><p><p>On Mar 10, 2010, at 2:22 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Wesley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for catching that oversight. Below are the MCA parameters  
</span><br>
<span class="quotelev1">&gt; that you should need at the moment:
</span><br>
<span class="quotelev1">&gt; #####################################
</span><br>
<span class="quotelev1">&gt; # Use the C/R Process Migration Recovery Supervisor
</span><br>
<span class="quotelev1">&gt; recos_base_enable=1
</span><br>
<span class="quotelev1">&gt; # Only use the 'rsh' launcher, other launchers will be supported later
</span><br>
<span class="quotelev1">&gt; plm=rsh
</span><br>
<span class="quotelev1">&gt; # The resilient mapper knows how to use RecoS and deal with  
</span><br>
<span class="quotelev1">&gt; recovering procs
</span><br>
<span class="quotelev1">&gt; rmaps=resilient
</span><br>
<span class="quotelev1">&gt; # 'cm' component is the only one that can handle failures at the  
</span><br>
<span class="quotelev1">&gt; moment
</span><br>
<span class="quotelev1">&gt; routed=cm
</span><br>
<span class="quotelev1">&gt; #####################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if you have any troubles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2010, at 10:36 AM, Wesley Bland wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You mentioned some MCA parameters that you would include in the  
</span><br>
<span class="quotelev2">&gt;&gt; email, but I don't see those parameters anywhere.  Could you please  
</span><br>
<span class="quotelev2">&gt;&gt; put those in here to make testing easier for people.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Wesley
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Mar 10, 2010 at 1:26 PM, Josh Hursey &lt;jjhursey_at_open- 
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yesterday evening George, Thomas and I discussed some of their  
</span><br>
<span class="quotelev2">&gt;&gt; concerns about this RFC at the MPI Forum meeting. After the  
</span><br>
<span class="quotelev2">&gt;&gt; discussion, we seemed to be in agreement that the RecoS framework  
</span><br>
<span class="quotelev2">&gt;&gt; is a good idea and the concepts and fixes in this RFC should move  
</span><br>
<span class="quotelev2">&gt;&gt; forward with a couple of notes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - They wanted to test the branch a bit more over the next couple of  
</span><br>
<span class="quotelev2">&gt;&gt; days. Some MCA parameters that you will need are at the bottom of  
</span><br>
<span class="quotelev2">&gt;&gt; this message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Reiterate that this RFC only addresses ORTE stability, not OMPI  
</span><br>
<span class="quotelev2">&gt;&gt; stability. The OMPI stability extension is a second step for the  
</span><br>
<span class="quotelev2">&gt;&gt; line of work, and should/will fit in nicely with the RecoS  
</span><br>
<span class="quotelev2">&gt;&gt; framework being proposed in this RFC. The OMPI layer stability will  
</span><br>
<span class="quotelev2">&gt;&gt; require a significant amount of work, but the RecoS framework will  
</span><br>
<span class="quotelev2">&gt;&gt; provide the ORTE layer stability that is required as a foundation  
</span><br>
<span class="quotelev2">&gt;&gt; for OMPI layer stability in the future.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - The purpose of the ErrMgr becomes slightly unclear with the  
</span><br>
<span class="quotelev2">&gt;&gt; addition of the RecoS framework, since both are focused on  
</span><br>
<span class="quotelev2">&gt;&gt; responding to faults in the system (and RecoS, when enabled,  
</span><br>
<span class="quotelev2">&gt;&gt; overrides most/all of the ErrMgr functionality). Should the RecoS  
</span><br>
<span class="quotelev2">&gt;&gt; framework be merged with the ErrMgr framework to create a new  
</span><br>
<span class="quotelev2">&gt;&gt; ErrMgr interface?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are typing to decide if we should merge these frameworks, but at  
</span><br>
<span class="quotelev2">&gt;&gt; this point we are interested in hearing how other developers feel  
</span><br>
<span class="quotelev2">&gt;&gt; about merging the ErrMgr and RecoS frameworks, which would change  
</span><br>
<span class="quotelev2">&gt;&gt; the ErrMgr API. Are there any developers out there that are  
</span><br>
<span class="quotelev2">&gt;&gt; developing ErrMgr components, or are using any particular features  
</span><br>
<span class="quotelev2">&gt;&gt; of the existing ErrMgr framework that they would like to see  
</span><br>
<span class="quotelev2">&gt;&gt; preserved in the next revision. By default, the existing default  
</span><br>
<span class="quotelev2">&gt;&gt; abort behavior of the ErrMgr framework will be preserved, so the  
</span><br>
<span class="quotelev2">&gt;&gt; user will have to 'opt-in' to any fault recovery capabilities.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So we are continuing the discussion a bit more off-list, and will  
</span><br>
<span class="quotelev2">&gt;&gt; return to the list with an updated RFC (and possibly a new branch)  
</span><br>
<span class="quotelev2">&gt;&gt; soon (hopefully end of the week/early next week). I would like to  
</span><br>
<span class="quotelev2">&gt;&gt; briefly discuss this RFC at the Open MPI teleconf next Tuesday.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 26, 2010, at 8:06 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sounds good to me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For those casually following this RFC let me summarize its current  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; state.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh and George (and anyone else that wishes to participate  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attending the forum) will meet sometime at the next MPI Forum  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; meeting (March 8-10). I will post any relevant notes from this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; meeting back to the list afterwards. So the RFC is on hold pending  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the outcome of that meeting. For those developers interested in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this RFC that will not be able to attend, feel free to continue  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using this thread for discussion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 26, 2010, at 6:09 AM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 26, 2010, at 01:50 , Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any of those options are fine with me. I was thinking that if  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you wanted to talk sooner, we might be able to help explain our  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; intentions with this framework a bit better. I figure that the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; framework interface will change a bit as we all advance and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; incorporate our various techniques into it. I think that the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; current interface is a good first step, but there are certainly  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; many more steps to come.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am fine delaying this code a bit, just not too long. Meeting  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; at the forum for a while might be a good option (we could  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; probably even arrange to call in others if you wanted).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sounds good, let do this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 25, 2010, at 6:45 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If Josh is going to be at the forum, perhaps you folks could  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; chat there? Might as well take advantage of being colocated, if  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; possible.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Otherwise, I'm available pretty much any time. I can't  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contribute much about the MPI recovery issues, but can  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contribute to the RTE issues if that helps.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Feb 25, 2010 at 7:39 PM, George Bosilca &lt;bosilca_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Josh,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Next week is a little bit too early as will need some time to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; figure out how to integrate with this new framework, and at  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; what extent our code and requirements fit into. Then the week  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; after is the MPI Forum. How about on Thursday 11 March?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Feb 25, 2010, at 12:46 , Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Per my previous suggestion, would it be useful to chat on the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; phone early next week about our various strategies?
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
<li><strong>Next message:</strong> <a href="7590.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7588.php">Joshua Hursey: "Re: [OMPI devel] Build issue: mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7579.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7651.php">Joshua Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7651.php">Joshua Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
