<?
$subject_val = "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 07:38:20 2010" -->
<!-- isoreceived="20100225123820" -->
<!-- sent="Thu, 25 Feb 2010 05:38:07 -0700" -->
<!-- isosent="20100225123807" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk" -->
<!-- id="D857748A-4954-4163-A12F-2C6B6E38F1FD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D8F4A569-B90C-4E4D-BE4A-727A69986B89_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 07:38:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7487.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
<li><strong>Previous message:</strong> <a href="7485.php">hu yaohui: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
<li><strong>In reply to:</strong> <a href="7484.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7489.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7489.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2010, at 1:41 AM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Very interesting the &quot;composite framework&quot; idea.
</span><br>
<p>Josh is the force behind that idea :-)
<br>
<p><span class="quotelev1">&gt; Regarding to the schema represented by the picture, I didn't understand the RecoS' behaviour in a node failure situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, will mpirun consider the daemon failure as a normal proc failure? If it is correct, should mpirun update the global procs state for all jobs running under the failed daemon?
</span><br>
<p>I haven't included the node failure case yet - still on my &quot;to-do&quot; list. In brief, the answer is yes/no. :-)
<br>
<p>Daemon failure follows the same code path as shown in the flow chart. However, it is up to the individual modules to determine a response to that failure. The &quot;orcm&quot; RecoS module response is to (a) mark all procs on that node as having failed, (b) mark that node as &quot;down&quot; so it won't get reused, and (c) remap and restart all such procs on the remaining available nodes, starting new daemon(s) as required.
<br>
<p>In the orcm environment, nodes that are replaced or rebooted automatically start their own daemon. This is detected by orcm, and the node state (if the node is rebooted) will automatically be updated to &quot;up&quot; - if it is a new node, it is automatically added to the available resources. This allows the node to be reused once the problem has been corrected. In other environments (ssh, slurm, etc), the node is simply left as &quot;down&quot; as there is no way to know if/when the node becomes available again.
<br>
<p>If you aren't using the &quot;orcm&quot; module, then the default behavior will abort the job.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2010, at 7:05 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi George et al
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have begun documenting the RecoS operation on the OMPI wiki:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/RecoS">https://svn.open-mpi.org/trac/ompi/wiki/RecoS</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll continue to work on this over the next few days by adding a section explaining what was changed outside of the new framework to make it all work. In addition, I am revising the recos.h API documentation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope to have all that done over the weekend.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 23, 2010, at 4:00 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 23, 2010, at 3:32 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph, Josh,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We have some comments about the API of the new framework, mostly clarifications needed to better understand how this new framework is supposed to be used. And a request for a deadline extension, to delay the code merge from the Recos branch in the trunk by a week.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We have our own FT branch, with a totally different approach than what is described in your RFC. Unfortunately, it diverged from the trunk about a year ago, and merging back had proven to be a quite difficult task. Some of the functionality in the Recos framework is clearly beneficial for what we did, and has the potential to facilitate the porting of most of the features from our brach back in trunk. We would like the deadline extension in order to deeply analyze the impact of the Recos framework on our work, and see how we can fit everything together back in the trunk of Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No problem with the extension - feel free to suggest modifications to make the merge easier. This is by no means cast in stone, but rather a starting point.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here are some comments about the code:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. The documentation in recos.h is not very clear. Most of the functions use only IN arguments, and are not supposed to return any values. We don't see how the functions are supposed to be used, and what is supposed to be their impact on the ORTE framework data.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll try to clarify the comments tonight (I know Josh is occupied right now). The recos APIs are called from two locations:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. The errmgr calls recos whenever it receives a report of an aborted process (via the errmgr.proc_aborted API). The idea was for recos to determine what (if anything) to do about the failed process. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. The rmaps modules can call the recos &quot;suggest_map_targets&quot; API to get a list of suggested nodes for the process that is to be restarted. At the moment, only the resilient mapper module does this. However, Josh and I are looking at reorganizing some functionality currently in that mapper module and making all of the existing mappers be &quot;resilient&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So basically, the recos modules determine the recovery procedure and execute it. For example, in the &quot;orcm&quot; module, we actually update the various proc/job objects to prep them for restart and call plm.spawn from within that module. If instead you use the ignore module, it falls through to the recos base functions which call &quot;abort&quot; to kill the job. Again, the action is taken local to recos, so nothing need be returned.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The functions generally don't return values (other than success/error) because we couldn't think of anything useful to return to the errmgr. Whatever recos does about an aborted proc, the errmgr doesn't do anything further - if you look in that code, you'll see that if recos is enabled, all the errmgr does is call recos and return.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Again, this can be changed if desired.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. Why do we have all the char***? Why are they only declared as IN arguments?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I take it you mean in the predicted fault API? I believe Josh was including that strictly as a placeholder. As you undoubtedly recall, I removed the fddp framework from the trunk (devel continues off-line), so Josh wasn't sure what I might want to input here. If you look at the modules themselves, you will see the implementation is essentially empty at this time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We had discussed simply removing that API for now until we determined if/when fault prediction would return to the OMPI trunk. It was kind of a tossup - so we left if for now. Could just as easily be removed until a later date - either way is fine with us.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. The orte_recos_base_process_fault_fn_t function use the node_list as an IN/OUT argument. Why? If the list is modified, then we have a scalability problem, as the list will have to be rebuilt before each call.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking...looking...hmm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typedef int (*orte_recos_base_process_fault_fn_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (orte_job_t *jdata, orte_process_name_t *proec_name, orte_proc_state_t state, int *stack_state);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is no node list, or list of any type, going in or out of that function. I suspect you meant the one below it:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typedef int (*orte_recos_base_suggest_map_targets_fn_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (orte_proc_t *proc, orte_node_t *oldnode, opal_list_t *node_list);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I concur with your concern about scalability here. However, I believe the idea was that we would pass in the proc that failed and is to be restarted, a pointer to the node it was last on, and return a list of candidate nodes where it could be restarted. Essentially, this is the equivalent of building the target node list that we do in the mappers whenever we map a job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So in the implementation, we use the rmaps base function to assemble the target node list for the app, and then go through some logic (e.g., remove the old node, look at fault groups and load balancing) to prune the list down. We then pass the resulting list back to the caller.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If we are going to have frequent process failures, then rebuilding the candidate node list every time would indeed be a problem. I suspect we'll have to revisit that implementation at some point.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 19, 2010, at 12:59 , Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHAT: Merge a tmp branch for fault recovery development into the OMPI trunk
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHY: Bring over work done by Josh and Ralph to extend OMPI's fault recovery capabilities
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHERE: Impacts a number of ORTE files and a small number of OMPI files
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TIMEOUT: Barring objections and/or requests for delay, the weekend of Feb 27-28
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; REFERENCE BRANCH: <a href="http://bitbucket.org/rhc/ompi-recos/overview/">http://bitbucket.org/rhc/ompi-recos/overview/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BACKGROUND:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Josh and Ralph have been working on a private branch off of the trunk on extended fault recovery procedures, mostly impacting ORTE. The new code optionally allows ORTE to recover from failed nodes, moving processes to other nodes in order to maintain operation. In addition, the code provides better support for recovering from individual process failures.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Not all of the work done on the private branch will be brought over in this commit. Some of the MPI-specific code that allows recovery from process failure on-the-fly will be committed separately at a later date.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This commit will include the infrastructure to support those advanced recovery operations. Among other things, this commit will introduce a new &quot;RecoS&quot; (Recovery Service/Strategy) framework to allow multiple strategies for responding to failures. The default module, called &quot;ignore&quot;, will stabilize the runtime environment for other RecoS components. In the absence of other RecoS components it will trigger the default behavior (abort the job) to be executed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This branch includes some configure modifications that allow a comma separated list of options to be passed to the '--with-ft' option. This allows us to enable any combination of 'cr' and 'recos' at build time, specifically so that the RecoS functionally can be enabled independently of the C/R functionality. Most of the changes outside of the ORTE layer are due to symbol cleanup resulting from this modification.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For example, C/R specific code paths were previously incorrectly marked with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #if OPAL_ENABLE_FT == 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; They are now marked as, where appropriate:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #if OPAL_ENABLE_FT_CR == 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Additionally, C/R specific components have modified configure.m4 files to change:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; AS_IF([test &quot;$ompi_want_ft&quot; = &quot;0&quot;],
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; AS_IF([test &quot;$ompi_want_ft_cr&quot; = &quot;0&quot;],
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We have created a public repo (reference branch, above) with the code to be merged into the trunk. Please feel free to check it out and test it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; NOTE: the new recovery capability is only active if...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  (a) you configure --with-ft=recos, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  (b) you set OMPI_MCA_recos_base_enable=1 to turn it on!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Comments, suggestions, and corrections are welcome!
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7486/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7487.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
<li><strong>Previous message:</strong> <a href="7485.php">hu yaohui: "Re: [OMPI devel] what's the relationship between proc, endpoint and 	btl?"</a>
<li><strong>In reply to:</strong> <a href="7484.php">Leonardo Fialho: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7489.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7489.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
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
