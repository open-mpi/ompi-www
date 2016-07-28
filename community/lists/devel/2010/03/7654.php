<?
$subject_val = "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 17:29:17 2010" -->
<!-- isoreceived="20100323212917" -->
<!-- sent="Tue, 23 Mar 2010 17:29:12 -0400" -->
<!-- isosent="20100323212912" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="9BC30004-4A2D-4D5D-A01F-DBA83A4F2D64_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="075CCB2A-ABA5-49A5-84C0-B86F8F468EE5_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-03-23 17:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7655.php">hu yaohui: "Re: [OMPI devel] need help when make"</a>
<li><strong>Previous message:</strong> <a href="7653.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<li><strong>In reply to:</strong> <a href="7651.php">Joshua Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7488.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has been committed in r22872.
<br>
<p>Let me know if you see any problems with the commit.
<br>
<p>-- Josh
<br>
<p>On Mar 23, 2010, at 7:57 AM, Joshua Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Just a reminder that this RFC will go into the trunk this evening  
</span><br>
<span class="quotelev1">&gt; unless there are strong objections.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We intend to let this soak for a few days then bring it over to the  
</span><br>
<span class="quotelev1">&gt; 1.5 series (after the 1.5.0 release).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 15, 2010, at 9:26 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Updated RFC, per offline discussion)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Merge a tmp branch for fault recovery development into the  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI trunk
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: Bring over work done by Josh and Ralph to extend OMPI's fault  
</span><br>
<span class="quotelev2">&gt;&gt; recovery capabilities
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: Impacts a number of ORTE files and a ORTE ErrMgr framework
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: Barring objections and/or further requests for delay,  
</span><br>
<span class="quotelev2">&gt;&gt; evening of March 23
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; REFERENCE BRANCH: <a href="http://bitbucket.org/jjhursey/orte-errmgr/">http://bitbucket.org/jjhursey/orte-errmgr/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BACKGROUND:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh and Ralph have been working on a private branch off of the  
</span><br>
<span class="quotelev2">&gt;&gt; trunk on extended fault recovery procedures, mostly impacting ORTE.  
</span><br>
<span class="quotelev2">&gt;&gt; The new code optionally allows ORTE to recover from failed nodes,  
</span><br>
<span class="quotelev2">&gt;&gt; moving processes to other nodes in order to maintain operation. In  
</span><br>
<span class="quotelev2">&gt;&gt; addition, the code provides better support for recovering from  
</span><br>
<span class="quotelev2">&gt;&gt; individual process failures.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not all of the work done on the private branch will be brought over  
</span><br>
<span class="quotelev2">&gt;&gt; in this commit. Some of the MPI-specific code that allows recovery  
</span><br>
<span class="quotelev2">&gt;&gt; from process failure on-the-fly will be committed separately at a  
</span><br>
<span class="quotelev2">&gt;&gt; later date. This commit provides the foundation for ORTE  
</span><br>
<span class="quotelev2">&gt;&gt; stabilization that can be built upon to provide OMPI layer  
</span><br>
<span class="quotelev2">&gt;&gt; stability in the future.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This commit significantly modifies the ORTE ErrMgr framework to  
</span><br>
<span class="quotelev2">&gt;&gt; support those advanced recovery operations. The ErrMgr public  
</span><br>
<span class="quotelev2">&gt;&gt; interface has been preserved since it is used in various places  
</span><br>
<span class="quotelev2">&gt;&gt; throughout the codebase, and should continue to be used as normal.  
</span><br>
<span class="quotelev2">&gt;&gt; The ErrMgr framework has been internally redesigned to better  
</span><br>
<span class="quotelev2">&gt;&gt; support multiple strategies for responding to failures (represents  
</span><br>
<span class="quotelev2">&gt;&gt; a merge of the old ErrMgr and the RecoS framework, into the ErrMgr  
</span><br>
<span class="quotelev2">&gt;&gt; 3.0 component interface). The default (base) mode will continue to  
</span><br>
<span class="quotelev2">&gt;&gt; work exactly the same as today, aborting the job when a failure  
</span><br>
<span class="quotelev2">&gt;&gt; occurs. However, if the user elects to enable recovery then one or  
</span><br>
<span class="quotelev2">&gt;&gt; more ErrMgr components will be activated to determine the recovery  
</span><br>
<span class="quotelev2">&gt;&gt; policy for the job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have created a public repo (reference branch, above) with the  
</span><br>
<span class="quotelev2">&gt;&gt; code to be merged into the trunk (r22815). Please feel free to  
</span><br>
<span class="quotelev2">&gt;&gt; check it out and test it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: The new recovery capability is only active if the user elects  
</span><br>
<span class="quotelev2">&gt;&gt; to use it by setting the MCA parameter errmgr_base_enable_recovery  
</span><br>
<span class="quotelev2">&gt;&gt; to '1'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: More ErrMgr recovery components will be coming online in the  
</span><br>
<span class="quotelev2">&gt;&gt; near future, currently this branch only includes the 'orcm' module  
</span><br>
<span class="quotelev2">&gt;&gt; for ORTE process recovery (not MPI processes). If you want to  
</span><br>
<span class="quotelev2">&gt;&gt; experiment with this feature, below are the MCA parameters that you  
</span><br>
<span class="quotelev2">&gt;&gt; will need to get started.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm=rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps=resilient
</span><br>
<span class="quotelev3">&gt;&gt;&gt; routed=cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errmgr_base_enable_recovery=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Comments, suggestions, and corrections are welcome!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 10, 2010, at 2:22 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wesley,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for catching that oversight. Below are the MCA parameters  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that you should need at the moment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #####################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Use the C/R Process Migration Recovery Supervisor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recos_base_enable=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Only use the 'rsh' launcher, other launchers will be supported  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; later
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm=rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # The resilient mapper knows how to use RecoS and deal with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recovering procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps=resilient
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # 'cm' component is the only one that can handle failures at the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; moment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; routed=cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #####################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me know if you have any troubles.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 10, 2010, at 10:36 AM, Wesley Bland wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You mentioned some MCA parameters that you would include in the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; email, but I don't see those parameters anywhere.  Could you  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; please put those in here to make testing easier for people.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Wesley
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Mar 10, 2010 at 1:26 PM, Josh Hursey &lt;jjhursey_at_open- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi.org&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yesterday evening George, Thomas and I discussed some of their  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; concerns about this RFC at the MPI Forum meeting. After the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; discussion, we seemed to be in agreement that the RecoS framework  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is a good idea and the concepts and fixes in this RFC should move  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; forward with a couple of notes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - They wanted to test the branch a bit more over the next couple  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of days. Some MCA parameters that you will need are at the bottom  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of this message.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Reiterate that this RFC only addresses ORTE stability, not OMPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stability. The OMPI stability extension is a second step for the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line of work, and should/will fit in nicely with the RecoS  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; framework being proposed in this RFC. The OMPI layer stability  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will require a significant amount of work, but the RecoS  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; framework will provide the ORTE layer stability that is required  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as a foundation for OMPI layer stability in the future.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - The purpose of the ErrMgr becomes slightly unclear with the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; addition of the RecoS framework, since both are focused on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; responding to faults in the system (and RecoS, when enabled,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; overrides most/all of the ErrMgr functionality). Should the RecoS  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; framework be merged with the ErrMgr framework to create a new  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ErrMgr interface?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We are typing to decide if we should merge these frameworks, but  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at this point we are interested in hearing how other developers  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; feel about merging the ErrMgr and RecoS frameworks, which would  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; change the ErrMgr API. Are there any developers out there that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are developing ErrMgr components, or are using any particular  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; features of the existing ErrMgr framework that they would like to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see preserved in the next revision. By default, the existing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default abort behavior of the ErrMgr framework will be preserved,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so the user will have to 'opt-in' to any fault recovery  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; capabilities.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So we are continuing the discussion a bit more off-list, and will  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; return to the list with an updated RFC (and possibly a new  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; branch) soon (hopefully end of the week/early next week). I would  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like to briefly discuss this RFC at the Open MPI teleconf next  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tuesday.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 26, 2010, at 8:06 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sounds good to me.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For those casually following this RFC let me summarize its  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; current state.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Josh and George (and anyone else that wishes to participate  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attending the forum) will meet sometime at the next MPI Forum  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; meeting (March 8-10). I will post any relevant notes from this  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; meeting back to the list afterwards. So the RFC is on hold  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pending the outcome of that meeting. For those developers  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interested in this RFC that will not be able to attend, feel  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; free to continue using this thread for discussion.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 26, 2010, at 6:09 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Feb 26, 2010, at 01:50 , Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any of those options are fine with me. I was thinking that if  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; you wanted to talk sooner, we might be able to help explain  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; our intentions with this framework a bit better. I figure that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the framework interface will change a bit as we all advance  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and incorporate our various techniques into it. I think that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the current interface is a good first step, but there are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; certainly many more steps to come.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am fine delaying this code a bit, just not too long. Meeting  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; at the forum for a while might be a good option (we could  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; probably even arrange to call in others if you wanted).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sounds good, let do this.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 25, 2010, at 6:45 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If Josh is going to be at the forum, perhaps you folks could  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; chat there? Might as well take advantage of being colocated,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; if possible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Otherwise, I'm available pretty much any time. I can't  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; contribute much about the MPI recovery issues, but can  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; contribute to the RTE issues if that helps.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Feb 25, 2010 at 7:39 PM, George Bosilca &lt;bosilca_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Josh,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Next week is a little bit too early as will need some time to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; figure out how to integrate with this new framework, and at  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; what extent our code and requirements fit into. Then the week  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; after is the MPI Forum. How about on Thursday 11 March?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Feb 25, 2010, at 12:46 , Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Per my previous suggestion, would it be useful to chat on  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the phone early next week about our various strategies?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="7655.php">hu yaohui: "Re: [OMPI devel] need help when make"</a>
<li><strong>Previous message:</strong> <a href="7653.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<li><strong>In reply to:</strong> <a href="7651.php">Joshua Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7488.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
