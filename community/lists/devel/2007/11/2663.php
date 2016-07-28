<?
$subject_val = "Re: [OMPI devel] [OMPI users] Memory manager";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 18:00:02 2007" -->
<!-- isoreceived="20071126230002" -->
<!-- sent="Mon, 26 Nov 2007 17:59:54 -0500" -->
<!-- isosent="20071126225954" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Memory manager" -->
<!-- id="35D9D42D-750A-4BF9-8AC2-3EA5E64244FD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1195559529.18085.334.camel_at_fkpc167.phc.chalmers.se" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Memory manager<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-26 17:59:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2664.php">Jeff Squyres: "[OMPI devel] IB pow wow notes"</a>
<li><strong>Previous message:</strong> <a href="2662.php">Shipman, Galen M.: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2667.php">Terry Frankcombe: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="2667.php">Terry Frankcombe: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 20, 2007, at 6:52 AM, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; I posted this to the devel list the other day, but it raised no
</span><br>
<span class="quotelev1">&gt; responses.  Maybe people will have more to say here.
</span><br>
<p>Sorry Terry; many of us were at the SC conference last week, and this  
<br>
week is short because of the US holiday.  Some of the inbox got  
<br>
dropped/delayed as a result...
<br>
<p>(case in point: this mail sat unfinished on my laptop until I returned  
<br>
from the holiday today -- sorry!)
<br>
<p><span class="quotelev1">&gt; Questions:  How much does using the MPI wrappers influence the memory
</span><br>
<span class="quotelev1">&gt; management at runtime?
</span><br>
<p>I'm not sure what you mean here, but it's not really the MPI wrappers  
<br>
that are at issue.  Rather, it's whether support for the memory  
<br>
manager was compiled into the Open MPI libraries or not.  For example  
<br>
(and I just double checked this to be sure) -- I compiled OMPI with  
<br>
and without the memory manager on RHEL4U4 and the output from &quot;mpicc -- 
<br>
showme&quot; is exactly the same.
<br>
<p><span class="quotelev1">&gt; What has changed in this regard from 1.2.3 to 1.2.4?
</span><br>
<p>Nothing, AFAIK...?  I don't see anything in NEWS w.r.t. the memory  
<br>
manager stuff for v1.2.4.
<br>
<p><span class="quotelev1">&gt; The reason I ask is that I have an f90 code that does very strange
</span><br>
<span class="quotelev1">&gt; things.  The structure of the code is not all that straightforward,  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; a &quot;tree&quot; of modules usually allocating their own storage (all with  
</span><br>
<span class="quotelev1">&gt; save
</span><br>
<span class="quotelev1">&gt; applied globally within the module).  Compiling with OpenMPI 1.2.4
</span><br>
<span class="quotelev1">&gt; coupled to a gcc 4.3.0 prerelease and running as a single process  
</span><br>
<span class="quotelev1">&gt; (with
</span><br>
<span class="quotelev1">&gt; no explicit mpirun), the elements of one particular array seem to  
</span><br>
<span class="quotelev1">&gt; revert
</span><br>
<span class="quotelev1">&gt; to previous values between where they are set and a later part of the
</span><br>
<span class="quotelev1">&gt; code.  (I'll refer to this as The Bug, and having the matrix elements
</span><br>
<span class="quotelev1">&gt; stay as set as &quot;expected behaviour&quot;.)
</span><br>
<p>Yoinks.  :-(
<br>
<p><span class="quotelev1">&gt; The most obvious explanation would be a coding error.  However,
</span><br>
<span class="quotelev1">&gt; compiling and running this with OpenMPI 1.2.3 gives me the expected
</span><br>
<span class="quotelev1">&gt; behaviour!  As does compiling and running with a different MPI
</span><br>
<span class="quotelev1">&gt; implementation and compiler set.  Replacing the prerelease gcc 4.3.0
</span><br>
<span class="quotelev1">&gt; with the released 4.2.2 makes no change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Bug is unstable.  Removing calls to various routines in used  
</span><br>
<span class="quotelev1">&gt; modules
</span><br>
<span class="quotelev1">&gt; (that otherwise do not effect the results) returns to expected  
</span><br>
<span class="quotelev1">&gt; behaviour
</span><br>
<span class="quotelev1">&gt; at runtime.  Removing a call to MPI_Recv that is never called  
</span><br>
<span class="quotelev1">&gt; returns to
</span><br>
<span class="quotelev1">&gt; expected behaviour.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because of this I can't reduce the problem to a small testcase, and so
</span><br>
<span class="quotelev1">&gt; have not included any code at this stage.
</span><br>
<p>Ugh.  Heisenbugs are the worst.
<br>
<p>Have you tried with a memory checking debugger, such as valgrind, or a  
<br>
parallel debugger?  Is there a chance that there's a simple errant  
<br>
posted receive (perhaps in a race condition) that is unexpectedly  
<br>
receiving into the Bug's memory location when you don't expect it?
<br>
<p><span class="quotelev1">&gt; If I run the code with mpirun -np 1 the problem goes away.  So one  
</span><br>
<span class="quotelev1">&gt; could
</span><br>
<span class="quotelev1">&gt; presumably simply say &quot;always run it with mpirun.&quot;  But if this is
</span><br>
<span class="quotelev1">&gt; required, why does OpenMPI not detect it?
</span><br>
<p>I'm not sure what you're asking -- Open MPI does not *require* you to  
<br>
run with mpirun.  Indeed, the memory management stuff that is in Open  
<br>
MPI doesn't require the use of mpirun (or not).  If you run without  
<br>
mpirun, you'll get an MPI_COMM_WORLD size of 1 (known as a &quot;singleton&quot;  
<br>
MPI job).
<br>
<p><span class="quotelev1">&gt; And why the difference
</span><br>
<span class="quotelev1">&gt; between 1.2.3 and 1.2.4?
</span><br>
<p>There are lots of differences between 1.2.3 and 1.2.4 -- see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/branches/v1.2/NEWS">https://svn.open-mpi.org/trac/ompi/browser/branches/v1.2/NEWS</a>
<br>
<p>As for what exactly would cause it to exhibit the Bug behavior in  
<br>
1.2.4 and not in 1.2.3 -- I don't know.  As I said above, Heisenbugs  
<br>
are the worst -- changing one thing makes it [seem to] go away, etc.   
<br>
It could be that the Bug still exists but simply is not being obvious  
<br>
when you use 1.2.3.  Buffer overflows can be like that, for example --  
<br>
if you overflow into an area of memory that doesn't matter, then  
<br>
you'll never notice the bug.  But if you move some data around, now  
<br>
perhaps that same buffer overflow will overwrite some critical memory  
<br>
and you *will* notice the Bug.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2664.php">Jeff Squyres: "[OMPI devel] IB pow wow notes"</a>
<li><strong>Previous message:</strong> <a href="2662.php">Shipman, Galen M.: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2667.php">Terry Frankcombe: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="2667.php">Terry Frankcombe: "Re: [OMPI devel] [OMPI users] Memory manager"</a>
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
