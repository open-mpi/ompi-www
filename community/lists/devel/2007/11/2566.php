<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 13:16:09 2007" -->
<!-- isoreceived="20071107181609" -->
<!-- sent="Wed, 7 Nov 2007 13:16:04 -0500" -->
<!-- isosent="20071107181604" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="D044BC38-BA33-4E81-820D-495C5A8DF275_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="55FC4C98-B069-49D7-9F1D-DD63809B7F89_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 13:16:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2567.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2565.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2565.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2567.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2567.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2580.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2007, at 12:51 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The same callback is called in both cases. In the case that you
</span><br>
<span class="quotelev2">&gt;&gt; described, the callback is called just a little bit deeper into the
</span><br>
<span class="quotelev2">&gt;&gt; recursion, when in the &quot;normal case&quot; it will get called from the
</span><br>
<span class="quotelev2">&gt;&gt; first level of the recursion. Or maybe I miss something here ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right -- it's not the callback that is the problem.  It's when the
</span><br>
<span class="quotelev1">&gt; recursion is unwound and further up the stack you now have a stale
</span><br>
<span class="quotelev1">&gt; request.
</span><br>
<p>That's exactly the point that I fail to see. If the request is freed  
<br>
in the PML callback, then it should get release in both cases, and  
<br>
therefore lead to problems all the time. Which, obviously, is not true  
<br>
when we do not have this deep recursion thing going on.
<br>
<p>Moreover, he request management is based on the reference count. The  
<br>
PML level have one ref count and the MPI level have another one. In  
<br>
fact, we cannot release a request until we explicitly call  
<br>
ompi_request_free on it. The place where this call happens is  
<br>
different between the blocking and non blocking calls. In the non  
<br>
blocking case the ompi_request_free get called from the *_test  
<br>
(*_wait) functions while in the blocking case it get called directly  
<br>
from the MPI_Send function.
<br>
<p>Let me summarize: a request cannot reach a stale state without a call  
<br>
to ompi_request_free. This function is never called directly from the  
<br>
PML level. Therefore, the recursion depth should not have any impact  
<br>
on the state of the request !
<br>
<p>Is there a simple test case I can run in order to trigger this strange  
<br>
behavior ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is *only* a problem for requests that are involved from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current top-level MPI call.  Request from prior calls to MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g., a request from a prior call to MPI_ISEND) are ok because a)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we've already done the Right Things to ensure the safety of that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request, and b) that request is not on the recursive stack anywhere
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; become stale as the recursion unwinds.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, Galen proposes the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. in conjunction with the NOT_ON_WIRE proposal...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. make a new PML request flag DONT_FREE_ME (or some better
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name :-) ).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. blocking MPI_SEND/MPI_RECV calls will set this flag (or, more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifically, the top of the PML calls for blocking send/receive)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; right when the request is allocated (i.e., before calling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_send()).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. when the PML is called for completion on this request, it will do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all the stuff that it needs to effect completion -- but then it will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see the DONT_FREE_ME flag and not actually free the request.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Obviously, if DONT_FREE_ME is *not* set, then the PML does what it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does today: it frees the request.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5. the top-level PML call will eventually complete:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5a. For blocking PML calls (e.g., corresponding to MPI_SEND and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_RECV), the request can be unconditionally freed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5b. For non-blocking PML calls (e.g., corresponding to MPI_ISEND),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only free the request if it was completed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that with this scheme, it becomes irrelevant as to whether the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PML completion call is invoked on the first descent into the BTL or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recursively via opal_progress.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How does that sound?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If that all works, it might be beneficial to put this back to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch because there are definitely apps that would benefit from it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 23, 2007, at 10:19 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So this problem goes WAY back..
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The problem here is that the PML marks MPI completion just prior  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; calling
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_send and then returns to the user. This wouldn't be a problem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if the BTL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; then did something, but in the case of OpenIB this fragment may  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; actually
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be on the wire (the joys of user level flow control).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; One solution that we proposed was to allow btl_send to return
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; either
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI_SUCCESS or OMPI_NOT_ON_WIRE. OMPI_NOT_ON_WIRE would allow the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PML to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not mark MPI completion of the fragment and then MPI_WAITALL and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; others will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; do there job properly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I even implemented this once, but there is a problem. Currently we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mark
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request as completed on MPI level and then do btl_send(). Whenever
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IB completion
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will happen the request will be marked as complete on PML level and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; freed. The fix requires to change the order like this: Call
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_send(),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; check return value from BTL and mark request complete as necessary.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem is that because we allow BTL to call opal_progress()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; internally the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request may be already completed on MPI and MPL levels and freed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before return from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the call to btl_send().
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I did a code review to see how hard it will be to get rid of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recursion
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in Open MPI and I think this is doable. We have to disallow calling
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; progress() (or other functions that may call progress() internally)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BTL and from ULP callbacks that are called by BTL. There is no much
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; places that break this law. The main offenders are calls to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FREE_LIST_WAIT(), but those never actually call progress if they  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grow without limit and this is the most common use of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FREE_LIST_WAIT()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so they may be safely changed to FREE_LIST_GET(). After we will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; solve
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recursion problem the fix to the problem will be a couple of lines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - Galen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 10/11/07 11:26 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Oct 05, 2007 at 09:43:44AM +0200, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; David --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gleb and I just actively re-looked at this problem yesterday; we
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; think it's related to <a href="https://svn.open-mpi.org/trac/ompi/ticket/">https://svn.open-mpi.org/trac/ompi/ticket/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1015.  We previously thought this ticket was a different  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; our analysis yesterday shows that it could be a real problem in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib BTL or ob1 PML (kinda think it's the openib btl because  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; doesn't seem to happen on other networks, but who knows...).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gleb is investigating.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here is the result of the investigation. The problem is different
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; than
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #1015 ticket. What we have here is one rank calls isend() of a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; small
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; message and wait_all() in a loop and another one calls irecv().
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problem is that isend() usually doesn't call opal_progress()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; anywhere
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and wait_all() doesn't call progress if all requests are already
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; completed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; so messages are never progressed. We may force opal_progress() to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be called
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; by setting btl_openib_free_list_max to 1000. Then wait_all() will
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; call
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; progress because not every request will be immediately completed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; by OB1. Or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we can limit a number of uncompleted requests that OB1 can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; allocate by setting
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pml_ob1_free_list_max to 1000. Then opal_progress() will be  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; called
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; from a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; free_list_wait() when max will be reached. The second option  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; works
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; much
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; faster for me.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 5, 2007, at 12:59 AM, David Daniel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have been seeing some nasty behaviour in collectives,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; particularly bcast and reduce.  Attached is a reproducer (for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bcast).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The code will rapidly slow to a crawl (usually interpreted as a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hang in real applications) and sometimes gets killed with  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sigbus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sigterm.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I see this with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.2.3 or openmpi-1.2.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ofed 1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; linux 2.6.19 + patches
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; gcc (GCC) 3.4.5 20051201 (Red Hat 3.4.5-2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 4 socket, dual core opterons
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; run as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --mca btl self,openib --npernode 1 --np 4 bcast-hang
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To my now uneducated eye it looks as if the root process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rushing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ahead and not progressing earlier bcasts.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anyone else seeing similar?  Any ideas for workarounds?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As a point of reference, mvapich2 0.9.8 works fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks, David
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;bcast-hang.c&gt;
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
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gleb.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 			Gleb.
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
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2566/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2567.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2565.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2565.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2567.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2567.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2580.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
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
