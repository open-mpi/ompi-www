<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 18:48:11 2009" -->
<!-- isoreceived="20090715224811" -->
<!-- sent="Wed, 15 Jul 2009 16:47:54 -0600" -->
<!-- isosent="20090715224754" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686" -->
<!-- id="42AEE6A4-B51B-4A81-99D7-9D412B8EA1F6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0907151340r6b0c9ba1k5ec465efdb92cf5f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 18:47:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6439.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6437.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank"</a>
<li><strong>In reply to:</strong> <a href="6434.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, George - this is fixed in r21690.
<br>
<p>Thanks again
<br>
Ralph
<br>
<p>On Jul 15, 2009, at 2:40 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Ah - interesting scenario!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Definitely a &quot;bug&quot; in the code, then. What it looks like, though, is  
</span><br>
<span class="quotelev1">&gt; that the jdata-&gt;num_procs is wrong. There shouldn't be any way that  
</span><br>
<span class="quotelev1">&gt; the num_procs in the node array is different than jdata-&gt;num_procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is that the rank_file mapper isn't correctly maintaining  
</span><br>
<span class="quotelev1">&gt; the bookkeeping when we map the procs beyond those in the rankfile.  
</span><br>
<span class="quotelev1">&gt; I'll dig into it - have to fix something for Lenny anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meantime, this change looks fine regardless as it (a) is better code  
</span><br>
<span class="quotelev1">&gt; and (b) protects us against such errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for catching it!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 15, 2009 at 2:30 PM, George Bosilca  
</span><br>
<span class="quotelev1">&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I think I found a better solution (in r21688). Here is what I was  
</span><br>
<span class="quotelev1">&gt; trying to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a more or less homogeneous cluster. In fact all processors  
</span><br>
<span class="quotelev1">&gt; are identical, except that some are quad core and some dual core. Of  
</span><br>
<span class="quotelev1">&gt; course I care how my processes are mapped on the quad cores, but not  
</span><br>
<span class="quotelev1">&gt; really on the dual cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My approach was to use the following configuration files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In /home/bosilca/.openmpi/mca-params.conf I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_default_hostfile=/home/bosilca/.openmpi/machinefile
</span><br>
<span class="quotelev1">&gt; rmaps_rank_file_path = /home/bosilca/.openmpi/rankfile
</span><br>
<span class="quotelev1">&gt; rmaps_rank_file_priority = 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In /home/bosilca/.openmpi/machinefile I have the full description of  
</span><br>
<span class="quotelev1">&gt; the cluster. As an example:
</span><br>
<span class="quotelev1">&gt; node01 slots=4
</span><br>
<span class="quotelev1">&gt; node02 slots=4
</span><br>
<span class="quotelev1">&gt; node03 slots=2
</span><br>
<span class="quotelev1">&gt; node04 slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And in the /home/bosilca/.openmpi/rankfile file I have:
</span><br>
<span class="quotelev1">&gt; rank 0=+n0 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=+n0 slot=1
</span><br>
<span class="quotelev1">&gt; rank 2=+n1 slot=0
</span><br>
<span class="quotelev1">&gt; rank 3=+n1 slot=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As long as I spawn jobs with less than 4 processes everything worked  
</span><br>
<span class="quotelev1">&gt; fine. But when I used more than 4 processes, orterun segfaulted.  
</span><br>
<span class="quotelev1">&gt; After debugging I found that the nodes, lrank and nrank arrays were  
</span><br>
<span class="quotelev1">&gt; allocated based on the jdata-&gt;num_procs, but then filled based on  
</span><br>
<span class="quotelev1">&gt; the total number of processes in the jdata-&gt;nodes array. As it  
</span><br>
<span class="quotelev1">&gt; appears that the jdata-&gt;num_procs is somehow modified based on the  
</span><br>
<span class="quotelev1">&gt; number of entries in the rankfile, we end-up writing outside the  
</span><br>
<span class="quotelev1">&gt; allocation and then segfault. Now with the latest patch, we can cope  
</span><br>
<span class="quotelev1">&gt; with such a scenario by only packing the known information (and thus  
</span><br>
<span class="quotelev1">&gt; not writing outside the allocated arrays).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This might not be the best approach, but it is doing what I'm  
</span><br>
<span class="quotelev1">&gt; looking for ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 15, 2009, at 15:50 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The routed comm system relies on each daemon having complete  
</span><br>
<span class="quotelev1">&gt; information as to where every process is located, so the expectation  
</span><br>
<span class="quotelev1">&gt; was that only full maps would ever be sent. Thus, the nidmap code is  
</span><br>
<span class="quotelev1">&gt; setup to always send a full map.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how to even generate a &quot;partial&quot; map. I assume you are  
</span><br>
<span class="quotelev1">&gt; doing something offline? Is this to update changed info? If so,  
</span><br>
<span class="quotelev1">&gt; you'll also have to do something to update the daemon's maps or the  
</span><br>
<span class="quotelev1">&gt; comm system will break down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 15, 2009 at 1:40 PM, George Bosilca  
</span><br>
<span class="quotelev1">&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I have a question regarding the mapping. How can I declare a partial  
</span><br>
<span class="quotelev1">&gt; mapping ? In fact I only care about how some of the processes are  
</span><br>
<span class="quotelev1">&gt; mapped on some specific nodes. Right now if the rmaps doesn't  
</span><br>
<span class="quotelev1">&gt; contain information about all nodes, we give up (before this patch  
</span><br>
<span class="quotelev1">&gt; we segfaulted).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does it means we always have to declare the whole mapping or it's  
</span><br>
<span class="quotelev1">&gt; just that we overlooked this strange case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2009-07-15 15:36:53 EDT (Wed, 15 Jul 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21686
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21686">https://svn.open-mpi.org/trac/ompi/changeset/21686</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Reorder the nidmap encoding function. Add a check to make sure we  
</span><br>
<span class="quotelev1">&gt; don't write
</span><br>
<span class="quotelev1">&gt; outside the boundaries of the allocated array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the problem is still there. If we have rmaps file  
</span><br>
<span class="quotelev1">&gt; containing only
</span><br>
<span class="quotelev1">&gt; partial information the num_procs get set to the wrong value (the  
</span><br>
<span class="quotelev1">&gt; number of
</span><br>
<span class="quotelev1">&gt; hosts in the rmaps file instead of the number of processes requested  
</span><br>
<span class="quotelev1">&gt; on the
</span><br>
<span class="quotelev1">&gt; command line).
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
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6438/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6439.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6437.php">Brian W. Barrett: "Re: [OMPI devel] MPI_Accumulate() with MPI_PROC_NULL target rank"</a>
<li><strong>In reply to:</strong> <a href="6434.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
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
