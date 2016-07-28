<?
$subject_val = "Re: [OMPI devel] MCA component open";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  4 07:58:25 2008" -->
<!-- isoreceived="20080504115825" -->
<!-- sent="Sun, 4 May 2008 07:58:17 -0400" -->
<!-- isosent="20080504115817" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA component open" -->
<!-- id="314E7332-0223-47EC-BAC8-EDF8B83006BF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D1F68752-CCD7-4CB1-8FB6-69F38B08C73A_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA component open<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-04 07:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr"</a>
<li><strong>Previous message:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>In reply to:</strong> <a href="3811.php">George Bosilca: "Re: [OMPI devel] MCA component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3827.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, Josh implemented &quot;MCA-NULL&quot; in <a href="https://svn.open-mpi.org/trac/ompi/changeset/18364">https://svn.open-mpi.org/trac/ompi/changeset/18364</a> 
<br>
.
<br>
<p>I'm not sure how I feel about this solution.  On the one hand, it's  
<br>
kind of a hack-ish way of solving the immediate issue.  On the other  
<br>
hand, it's really a larger issue of explicitly *not* setting an MCA  
<br>
param (or knowing what source an MCA value originated from, depending  
<br>
on how you look at it), something that we've never taken the time to  
<br>
address properly.  If we continue to not solve the larger issue, it's  
<br>
going to come up again someday and someone will add yet another  
<br>
workaround.
<br>
<p>In both dimensions:
<br>
<p>- I'm not entirely sure I understand the specific ORTE issue.  Is it  
<br>
that you want one &quot;plm&quot; MCA param value for mpirun and other value for  
<br>
other processes (i.e., the orteds)?  Or, more specifically, you want  
<br>
plm X in mpirun, and *no* PLM's in the orteds?
<br>
<p>- Would adding an enum indicating where an MCA value was retrieved  
<br>
from help this situation?  E.g., MCA_PARAM_ENVIRONMENT,  
<br>
MCA_PARAM_FILE, MCA_PARAM_DEFAULT?
<br>
<p><p>On May 3, 2008, at 12:02 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem: The orted open all plm before discarding most of them,  
</span><br>
<span class="quotelev1">&gt; all this in the context where a &quot;--mca plm rsh&quot; was present on the  
</span><br>
<span class="quotelev1">&gt; mpirun invocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The non problem: In the context of the mpirun process, only the rsh  
</span><br>
<span class="quotelev1">&gt; plm is opened, as the mpirun is the only process who get the &quot;--mca  
</span><br>
<span class="quotelev1">&gt; plm rsh&quot; information. As this specific argument is not included on  
</span><br>
<span class="quotelev1">&gt; the list of arguments we forward to the orted processes, there is no  
</span><br>
<span class="quotelev1">&gt; way that the orted can abide to the imposed restriction. Note that  
</span><br>
<span class="quotelev1">&gt; if the restriction is inserted in the config file, then even the  
</span><br>
<span class="quotelev1">&gt; orted respect it. So far the only problem I can see here, is that  
</span><br>
<span class="quotelev1">&gt; the orted are opening a framework that they are not supposed to (at  
</span><br>
<span class="quotelev1">&gt; least not in most of the cases).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we implemented the MCA filtering stuff, we proposed another  
</span><br>
<span class="quotelev1">&gt; optimization. More specifically, a default component for all special  
</span><br>
<span class="quotelev1">&gt; frameworks (i.e. used or not based on the type of process) that will  
</span><br>
<span class="quotelev1">&gt; be statically linked inside the library (and therefore will not  
</span><br>
<span class="quotelev1">&gt; generate any NFS traffic). Its only goal was to execute the  
</span><br>
<span class="quotelev1">&gt; selection logic when any of its functions were called, in other  
</span><br>
<span class="quotelev1">&gt; words on-demand component loading feature. Starting from there, a  
</span><br>
<span class="quotelev1">&gt; real component will be selected, and all other calls to this  
</span><br>
<span class="quotelev1">&gt; component will be directed to the selected component. I perfectly  
</span><br>
<span class="quotelev1">&gt; remember that Ralph was completely against this feature for two  
</span><br>
<span class="quotelev1">&gt; reasons: 1) all components in the ORTE framework had to be loaded  
</span><br>
<span class="quotelev1">&gt; and they will do the &quot;if(!hnp) return NULL&quot;; 2) he proposed to  
</span><br>
<span class="quotelev1">&gt; implement the null component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was and I'm still against 1) so I guess that any effort toward  
</span><br>
<span class="quotelev1">&gt; implementing a null or none component will have my support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 2, 2008, at 4:40 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We could also call it 'null' for the empty set of components? Or  
</span><br>
<span class="quotelev2">&gt;&gt; maybe
</span><br>
<span class="quotelev2">&gt;&gt; OMPI-NULL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Outside of the naming do others this this is a useful feature to
</span><br>
<span class="quotelev2">&gt;&gt; implement?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 2, 2008, at 10:51 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would think that adding a special keyword would be the correct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; method. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would suggest something with an &quot;ompi&quot; in it, perhaps capitalized so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is no confusion...something like &quot;OMPI-NONE&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 5/2/08 8:37 AM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't believe we have the logic in place to tell  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_component_open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'do not open anything'. (I could be wrong though).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Adding such an option might be useful, but we would have to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; consider
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; how that option should be specified by the user. Currently if you  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not set a value (leave empty space in mca-params.conf) then the MCA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system takes this to indicate that all components are eligible for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; selection. If you specify any options then only those options  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be opened. We could add a special keyword (such as 'none') to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; indicate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'open nothing'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What do people think about that?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 2, 2008, at 10:22 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I see what the problem is. In the case of slurm, I don't want - 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; any-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; components to be opened, even though I am going to call plm open/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; select. I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have to leave that logic in place for those environments that -do-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; want to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specify some backend secondary launcher.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So the question is: how do I tell mca_component_open &quot;do not open
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; anything&quot;?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If we don't have a mechanism for doing that, can we create one?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 5/2/08 8:02 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Well, I have a current version of the trunk. I add an MCA param  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; environment indicating that only rsh is to be used by the orted.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Yet I get
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; an output from every orted indicating that slurm (misspelled!) is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; available
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for selection.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This tells me that the slurm component is being opened, even  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; though
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; param is set.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I can check again to ensure that the param is set...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 5/2/08 7:53 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (moving to devel list for wider audience)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hmm.  I thought the UTK stuff from a while ago supposedly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; changed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; behavior to only open the components that were specifically
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; requested.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This behavior looks like the *original* MCA behavior -- open  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; them
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; then discard what we don't want (but doesn't necessarily reclaim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; memory because of how dlclose works).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 2, 2008, at 9:48 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yo guys
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've noticed something on the trunk that just doesn't strike me
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I specify &quot;-mca plm rsh&quot;, it is my expectation that (a) only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component will be opened, and (b) only the rsh module will be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; selected,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; unless that component indicates that it cannot run.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What I am seeing, though, is that -all- the plm components are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; being
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; opened.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is not only unnecessary, but consumes memory and leads to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; concern over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; whether or not some other module could become active.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is this the intended behavior? If so, may I suggest we change
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Josh's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; branch prior to bringing it over?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr"</a>
<li><strong>Previous message:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>In reply to:</strong> <a href="3811.php">George Bosilca: "Re: [OMPI devel] MCA component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3827.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
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
