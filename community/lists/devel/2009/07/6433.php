<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 16:30:40 2009" -->
<!-- isoreceived="20090715203040" -->
<!-- sent="Wed, 15 Jul 2009 16:30:30 -0400" -->
<!-- isosent="20090715203030" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686" -->
<!-- id="09A5C820-FD1E-4630-8ABB-AF5347448436_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0907151250nbc65854j85afb4554eb69893_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 16:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6434.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Previous message:</strong> <a href="6432.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>In reply to:</strong> <a href="6431.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6434.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Reply:</strong> <a href="6434.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I found a better solution (in r21688). Here is what I was  
<br>
trying to do.
<br>
<p>I have a more or less homogeneous cluster. In fact all processors are  
<br>
identical, except that some are quad core and some dual core. Of  
<br>
course I care how my processes are mapped on the quad cores, but not  
<br>
really on the dual cores.
<br>
<p>My approach was to use the following configuration files.
<br>
<p>In /home/bosilca/.openmpi/mca-params.conf I have:
<br>
<p>orte_default_hostfile=/home/bosilca/.openmpi/machinefile
<br>
rmaps_rank_file_path = /home/bosilca/.openmpi/rankfile
<br>
rmaps_rank_file_priority = 100
<br>
<p>In /home/bosilca/.openmpi/machinefile I have the full description of  
<br>
the cluster. As an example:
<br>
node01 slots=4
<br>
node02 slots=4
<br>
node03 slots=2
<br>
node04 slots=2
<br>
<p>And in the /home/bosilca/.openmpi/rankfile file I have:
<br>
rank 0=+n0 slot=0
<br>
rank 1=+n0 slot=1
<br>
rank 2=+n1 slot=0
<br>
rank 3=+n1 slot=1
<br>
<p>As long as I spawn jobs with less than 4 processes everything worked  
<br>
fine. But when I used more than 4 processes, orterun segfaulted. After  
<br>
debugging I found that the nodes, lrank and nrank arrays were  
<br>
allocated based on the jdata-&gt;num_procs, but then filled based on the  
<br>
total number of processes in the jdata-&gt;nodes array. As it appears  
<br>
that the jdata-&gt;num_procs is somehow modified based on the number of  
<br>
entries in the rankfile, we end-up writing outside the allocation and  
<br>
then segfault. Now with the latest patch, we can cope with such a  
<br>
scenario by only packing the known information (and thus not writing  
<br>
outside the allocated arrays).
<br>
<p>This might not be the best approach, but it is doing what I'm looking  
<br>
for ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 15, 2009, at 15:50 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; The routed comm system relies on each daemon having complete  
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6434.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Previous message:</strong> <a href="6432.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>In reply to:</strong> <a href="6431.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6434.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
<li><strong>Reply:</strong> <a href="6434.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21686"</a>
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
