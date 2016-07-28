<?
$subject_val = "Re: [OMPI devel] Revise paffinity method?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 15:58:06 2009" -->
<!-- isoreceived="20090507195806" -->
<!-- sent="Thu, 7 May 2009 13:57:51 -0600" -->
<!-- isosent="20090507195751" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Revise paffinity method?" -->
<!-- id="31736BF5-D2A5-46D1-8C96-01813BFEAE16_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8F3FA2C5-B904-4758-88F0-4524D1FC9C42_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Revise paffinity method?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-07 15:57:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5981.php">Geoffrey Irving: "[OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>Previous message:</strong> <a href="5979.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5979.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5984.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5984.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: Jeff and I chatted about this on the phone and came up with two  
<br>
issues that need resolving:
<br>
<p>1. we use mpi_paffinity_alone to indicate that we should bind  
<br>
processes, yet the orteds have no way of seeing that MCA param as it  
<br>
is registered and evaluated in the MPI layer. We propose to resolve  
<br>
this by (a) declaring an opal_paffinity_alone MCA param in the  
<br>
paffinity framework, and then (b) declaring an alias of  
<br>
mpi_paffinity_alone for it, also in the paffinity framework. This  
<br>
obviously is an abstraction break, but we feel it is an acceptable one  
<br>
under the circumstances.
<br>
<p>Our apologies to Lenny, whose ears were boxed over doing just this  
<br>
last year...sigh.
<br>
<p>This will allow the orteds to check to see if processes should be  
<br>
bound before launching them.
<br>
<p>2. we would not be able to bind processes launched without daemons  
<br>
under systems that do not provide their own process binding  
<br>
capability. For example, on Torque, we have an ability to natively  
<br>
launch processes from within mpirun - those processes currently can  
<br>
bind themselves in MPI_Init, but would not be able to do so any longer  
<br>
under this proposed change.
<br>
<p>To alleviate that problem, we propose to leave the process binding  
<br>
code that is currently in MPI_Init, but surround it with a test to see  
<br>
if an MCA param has been set indicating that the proc is to use that  
<br>
code to bind itself. Thus, when launching without daemons (but via  
<br>
mpirun), we can set the flag and instruct the procs to bind  
<br>
themselves. However, procs that are launched without daemons via  
<br>
something which has its own binding capability (e.g., SLURM), and  
<br>
procs that were launched via daemon (and hence would have already been  
<br>
bound), would not attempt to do so.
<br>
<p><p>Any further thoughts are welcome...
<br>
Ralph
<br>
<p><p>On May 7, 2009, at 12:59 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I can do the coding - just want to ensure interested others get  
</span><br>
<span class="quotelev1">&gt; their $0.002 in on how it should work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I came up with a way to do it that doesn't require changes to the  
</span><br>
<span class="quotelev1">&gt; paffinity framework. I can complete the prototype next week on an hg  
</span><br>
<span class="quotelev1">&gt; branch and let you look at it. Mostly consists of moving what is now  
</span><br>
<span class="quotelev1">&gt; in MPI_Init into the odls modules between the fork and exec, as  
</span><br>
<span class="quotelev1">&gt; Brian suggested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2009, at 12:43 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, 6 May 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any thoughts on this? Should we change it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, we should change this (IMHO) :).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Me too.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If so, who wants to be involved in the re-design? I'm pretty sure  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it would require some modification of the paffinity framework,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; plus some minor mods to the odls framework and (since you cannot  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bind a process other than yourself) addition of a new small  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;proxy&quot; script that would bind-then-exec each process started by  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the orted (Eugene posted a candidate on the user list, though we  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will have to deal with some system-specific issues in it).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't contribute a whole lot of time, but I'd be happy to lurk,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; offer advice, and write some small bits of code.  But I definitely  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can't lead.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fist offering of opinion from me.  I think we can avoid the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;proxy&quot; script by doing the binding after the fork but before the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exec.  This will definitely require minor changes to the odls and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probably a bunch of changes to the paffinity framework.  This will  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make things slightly less fragile than a script would, and yet get  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; us what we want.
</span><br>
<span class="quotelev2">&gt;&gt; I'll have to talk with Len to see if Sun has any time to allocate  
</span><br>
<span class="quotelev2">&gt;&gt; to this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5981.php">Geoffrey Irving: "[OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>Previous message:</strong> <a href="5979.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5979.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5984.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5984.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
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
