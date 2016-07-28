<?
$subject_val = "Re: [OMPI devel] Revise paffinity method?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 06:36:24 2009" -->
<!-- isoreceived="20090508103624" -->
<!-- sent="Fri, 08 May 2009 06:35:37 -0400" -->
<!-- isosent="20090508103537" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Revise paffinity method?" -->
<!-- id="4A040AF9.8090803_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="31736BF5-D2A5-46D1-8C96-01813BFEAE16_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-08 06:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5985.php">Edgar Gabriel: "[OMPI devel] compile error on trunk"</a>
<li><strong>Previous message:</strong> <a href="5983.php">Geoffrey Irving: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>In reply to:</strong> <a href="5980.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5987.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5987.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So in essence the user might set one parameter and depending on whether 
<br>
orted is being used to launch the job or not determines when the process 
<br>
binding happens (process launch vs MPI_Init time).  In the case that one 
<br>
needs/wants to rely on a different launcher to bind then you don't 
<br>
specify the OMPI parameter at all.
<br>
<p>Is that right?
<br>
<p>So, will there be a way to force MPI_Init based binding even if one is 
<br>
using orted to launch a job.  Not sure there really is a use case for 
<br>
such just curious.
<br>
<p>--td
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; FWIW: Jeff and I chatted about this on the phone and came up with two 
</span><br>
<span class="quotelev1">&gt; issues that need resolving:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. we use mpi_paffinity_alone to indicate that we should bind 
</span><br>
<span class="quotelev1">&gt; processes, yet the orteds have no way of seeing that MCA param as it 
</span><br>
<span class="quotelev1">&gt; is registered and evaluated in the MPI layer. We propose to resolve 
</span><br>
<span class="quotelev1">&gt; this by (a) declaring an opal_paffinity_alone MCA param in the 
</span><br>
<span class="quotelev1">&gt; paffinity framework, and then (b) declaring an alias of 
</span><br>
<span class="quotelev1">&gt; mpi_paffinity_alone for it, also in the paffinity framework. This 
</span><br>
<span class="quotelev1">&gt; obviously is an abstraction break, but we feel it is an acceptable one 
</span><br>
<span class="quotelev1">&gt; under the circumstances.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our apologies to Lenny, whose ears were boxed over doing just this 
</span><br>
<span class="quotelev1">&gt; last year...sigh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will allow the orteds to check to see if processes should be 
</span><br>
<span class="quotelev1">&gt; bound before launching them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. we would not be able to bind processes launched without daemons 
</span><br>
<span class="quotelev1">&gt; under systems that do not provide their own process binding 
</span><br>
<span class="quotelev1">&gt; capability. For example, on Torque, we have an ability to natively 
</span><br>
<span class="quotelev1">&gt; launch processes from within mpirun - those processes currently can 
</span><br>
<span class="quotelev1">&gt; bind themselves in MPI_Init, but would not be able to do so any longer 
</span><br>
<span class="quotelev1">&gt; under this proposed change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To alleviate that problem, we propose to leave the process binding 
</span><br>
<span class="quotelev1">&gt; code that is currently in MPI_Init, but surround it with a test to see 
</span><br>
<span class="quotelev1">&gt; if an MCA param has been set indicating that the proc is to use that 
</span><br>
<span class="quotelev1">&gt; code to bind itself. Thus, when launching without daemons (but via 
</span><br>
<span class="quotelev1">&gt; mpirun), we can set the flag and instruct the procs to bind 
</span><br>
<span class="quotelev1">&gt; themselves. However, procs that are launched without daemons via 
</span><br>
<span class="quotelev1">&gt; something which has its own binding capability (e.g., SLURM), and 
</span><br>
<span class="quotelev1">&gt; procs that were launched via daemon (and hence would have already been 
</span><br>
<span class="quotelev1">&gt; bound), would not attempt to do so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any further thoughts are welcome...
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2009, at 12:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can do the coding - just want to ensure interested others get their 
</span><br>
<span class="quotelev2">&gt;&gt; $0.002 in on how it should work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I came up with a way to do it that doesn't require changes to the 
</span><br>
<span class="quotelev2">&gt;&gt; paffinity framework. I can complete the prototype next week on an hg 
</span><br>
<span class="quotelev2">&gt;&gt; branch and let you look at it. Mostly consists of moving what is now 
</span><br>
<span class="quotelev2">&gt;&gt; in MPI_Init into the odls modules between the fork and exec, as Brian 
</span><br>
<span class="quotelev2">&gt;&gt; suggested.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 7, 2009, at 12:43 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian W. Barrett wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, 6 May 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any thoughts on this? Should we change it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, we should change this (IMHO) :).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Me too.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If so, who wants to be involved in the re-design? I'm pretty sure 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it would require some modification of the paffinity framework, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; plus some minor mods to the odls framework and (since you cannot 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bind a process other than yourself) addition of a new small 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;proxy&quot; script that would bind-then-exec each process started by 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the orted (Eugene posted a candidate on the user list, though we 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will have to deal with some system-specific issues in it).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can't contribute a whole lot of time, but I'd be happy to lurk, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; offer advice, and write some small bits of code.  But I definitely 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can't lead.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fist offering of opinion from me.  I think we can avoid the &quot;proxy&quot; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; script by doing the binding after the fork but before the exec.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This will definitely require minor changes to the odls and probably 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a bunch of changes to the paffinity framework.  This will make 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; things slightly less fragile than a script would, and yet get us 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what we want.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll have to talk with Len to see if Sun has any time to allocate to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
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
<li><strong>Next message:</strong> <a href="5985.php">Edgar Gabriel: "[OMPI devel] compile error on trunk"</a>
<li><strong>Previous message:</strong> <a href="5983.php">Geoffrey Irving: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>In reply to:</strong> <a href="5980.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5987.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5987.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
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
