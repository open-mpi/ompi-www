<?
$subject_val = "Re: [OMPI users] Does OpenMPI's MPI_Barrier automatically call thetuned version?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 22:12:15 2009" -->
<!-- isoreceived="20090328021215" -->
<!-- sent="Fri, 27 Mar 2009 22:12:09 -0400" -->
<!-- isosent="20090328021209" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does OpenMPI's MPI_Barrier automatically call thetuned version?" -->
<!-- id="6D1A27DE-AAFF-4C2D-B20B-C4DAF76369BB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="935C332C-CA82-4450-8DF1-AC1E5EB1BD07_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does OpenMPI's MPI_Barrier automatically call thetuned version?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 22:12:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8624.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8622.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>In reply to:</strong> <a href="8544.php">Shanyuan Gao: "[OMPI users] Does OpenMPI's MPI_Barrier automatically call the tuned version?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 23, 2009, at 6:02 AM, Shanyuan Gao wrote:
<br>
<p><span class="quotelev1">&gt; Here I am again with questions about MPI_Barrier.  I did some
</span><br>
<span class="quotelev1">&gt; benchmark on MPI_Barrier and wondered if OpenMPI's
</span><br>
<span class="quotelev1">&gt; implementation automatically calls the tuned version of MPI_Barrier,
</span><br>
<span class="quotelev1">&gt; e.g. tree algorithm, when the number of nodes exceeds 4?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes, the tuned component should usually be the default.  There are a  
<br>
few cases where it might not be -- e.g., in MPI_COMM_SELF, the &quot;self&quot;  
<br>
coll component should bump its priority up high enough to be the  
<br>
default (in which case a barrier is a no-op).
<br>
<p>(this conversation might be better on the devel list...?)
<br>
<p>To be specific, Open MPI goes through a selection process to determine  
<br>
which coll component should be used on a per-communicator basis.  But  
<br>
it's not as simple as a &quot;component X had the highest priority, so we  
<br>
use all of its functions&quot; -- that would be too easy.  ;-)  Instead, we  
<br>
actually allow components to specify less than all of the collective  
<br>
functions (E.g., you can write a coll component with just a new  
<br>
barrier function and supply NULL for the rest). During the selection  
<br>
process, the coll base prioritizes each available component in  
<br>
priority order.  Starting with the lowest priority component, it saves  
<br>
all the function pointers provided by that component.  Then it goes to  
<br>
the next highest priority and repeats (potentially overwriting  
<br>
function pointers from the lower priority component).  And so on,  
<br>
until all available components are done.
<br>
<p>When we're done, we may have a mish-mash of function pointers from  
<br>
different components.  See the comments in these files for more details:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/coll/coll.h">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/coll/coll.h</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/coll/base/base.h">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/coll/base/base.h</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/coll/base/coll_base_comm_select.c">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/coll/base/coll_base_comm_select.c</a>
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
<li><strong>Next message:</strong> <a href="8624.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8622.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>In reply to:</strong> <a href="8544.php">Shanyuan Gao: "[OMPI users] Does OpenMPI's MPI_Barrier automatically call the tuned version?"</a>
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
