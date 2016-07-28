<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 14:18:46 2008" -->
<!-- isoreceived="20080207191846" -->
<!-- sent="Thu, 7 Feb 2008 14:18:18 -0500" -->
<!-- isosent="20080207191818" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="919999AD-2118-4348-BD44-ECF15F1C7463_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF6C53C841.482EF7EA-ON852573E5.00636DC0-852573E5.006593BA_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi credits for eager messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 14:18:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5010.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="5008.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>In reply to:</strong> <a href="4959.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4962.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What I missed in this whole conversation is that the pieces of text  
<br>
that Ron and Dick are citing are *on the same page* in the MPI spec;  
<br>
they're not disparate parts of the spec that accidentally overlap in  
<br>
discussion scope.
<br>
<p>Specifically, it says:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Resource limitations
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Any pending communication operation consumes system resources that  
<br>
are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;limited. Errors may occur when lack of resources prevent the  
<br>
execution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of an MPI call. A quality implementation will use a (small) fixed  
<br>
amount
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of resources for each pending send in the ready or synchronous  
<br>
mode and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for each pending receive. However, buffer space may be consumed to  
<br>
store
<br>
&nbsp;&nbsp;&nbsp;&nbsp;messages sent in standard mode, and must be consumed to store  
<br>
messages
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sent in buffered mode, when no matching receive is available. The  
<br>
amount
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of space available for buffering will be much smaller than program  
<br>
data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memory on many systems. Then, it will be easy to write programs that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;overrun available buffer space.
<br>
...12 lines down on that page, on the same page, in the same section...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Consider a situation where a producer repeatedly produces new values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and sends them to a consumer. Assume that the producer produces new
<br>
&nbsp;&nbsp;&nbsp;&nbsp;values faster than the consumer can consume them.
<br>
...skip 2 sentences about buffered sends...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;If standard sends are used, then the producer will be automatically
<br>
&nbsp;&nbsp;&nbsp;&nbsp;throttled, as its send operations will block when buffer space is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unavailable.
<br>
<p>I find that to be unambiguous.
<br>
<p>1. A loop of MPI_ISENDs on a producer can cause a malloc failure  
<br>
(can't malloc a new MPI_Request), and that's an error.  Tough luck.
<br>
<p>2. A loop of MPI_SENDs on a producer can run a slow-but-MPI-active  
<br>
consumer out of buffer space if all the incoming messages are queued  
<br>
up (e.g., in the unexpected queue).  The language above is pretty  
<br>
clear about this: MPI_SEND on the producer is supposed to block at  
<br>
this point.
<br>
<p>FWIW: Open MPI does support this mode of operation, as George and Gleb  
<br>
noted (by setting the eager size to 0, therefore forcing *all* sends  
<br>
to be synchronous -- a producer cannot &quot;run ahead&quot; for a while and  
<br>
eventually be throttled when receive buffering is exhausted), but a)  
<br>
it's not the default, and b) it's not documented this way.
<br>
<p><p><p>On Feb 4, 2008, at 1:29 PM, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ron -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am well aware of the scaling problems related to the standard send  
</span><br>
<span class="quotelev1">&gt; requirements in MPI. I t is a very difficult issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, here is what the standard says: MPI 1.2, page 32 lines 29-37
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =======
</span><br>
<span class="quotelev1">&gt; a standard send operation that cannot complete because of lack of  
</span><br>
<span class="quotelev1">&gt; buffer space will merely block, waiting for buffer space to become  
</span><br>
<span class="quotelev1">&gt; available or for a matching receive to be posted. This behavior is  
</span><br>
<span class="quotelev1">&gt; preferable in many situations. Consider a situation where a producer  
</span><br>
<span class="quotelev1">&gt; repeatedly produces new values and sends them to a consumer. Assume  
</span><br>
<span class="quotelev1">&gt; that the producer produces new values faster than the consumer can  
</span><br>
<span class="quotelev1">&gt; consume them. If buffered sends are used, then a buffer overflow  
</span><br>
<span class="quotelev1">&gt; will result. Additional synchronization has to be added to the  
</span><br>
<span class="quotelev1">&gt; program so as to prevent this from occurring. If standard sends are  
</span><br>
<span class="quotelev1">&gt; used, then the producer will be
</span><br>
<span class="quotelev1">&gt; automatically throttled, as its send operations will block when  
</span><br>
<span class="quotelev1">&gt; buffer space is unavailable.
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there are people who want to argue that this is unclear or that  
</span><br>
<span class="quotelev1">&gt; it should be changed, the MPI Forum can and should take up the  
</span><br>
<span class="quotelev1">&gt; discussion. I think this particular wording is pretty clear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The piece of MPI standard wording you quote is somewhat ambiguous:
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; The amount
</span><br>
<span class="quotelev1">&gt; of space available for buffering will be much smaller than program  
</span><br>
<span class="quotelev1">&gt; data
</span><br>
<span class="quotelev1">&gt; memory on many systems. Then, it will be easy to write programs that
</span><br>
<span class="quotelev1">&gt; overrun available buffer space.
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; But note that this wording mentions a problem that an application  
</span><br>
<span class="quotelev1">&gt; can create but does not say the MPI implementation can fail the job.  
</span><br>
<span class="quotelev1">&gt; The language I have pointed to is where the standard says what the  
</span><br>
<span class="quotelev1">&gt; MPI implementation must do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;lack of resource&quot; statement is more about send and receive  
</span><br>
<span class="quotelev1">&gt; descriptors than buffer space. If I write a program with an infinite  
</span><br>
<span class="quotelev1">&gt; loop of MPI_IRECV postings the standard allows that to fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dick Treumann - MPI Team/TCEM
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846 Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden] wrote on 02/04/2008 12:24:11 PM:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is what George says accurate? If so, it sounds to me like OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; does not comply with the MPI standard on the behavior of eager
</span><br>
<span class="quotelev3">&gt; &gt; &gt; protocol. MPICH is getting dinged in this discussion because they
</span><br>
<span class="quotelev3">&gt; &gt; &gt; have complied with the requirements of the MPI standard. IBM MPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; also complies with the standard.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If there is any debate about whether the MPI standard does (or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; should) require the behavior I describe below then we should move
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the discussion to the MPI 2.1 Forum and get a clarification.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The MPI Standard also says the following about resource limitations:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Any pending communication operation consumes system resources  
</span><br>
<span class="quotelev1">&gt; that are
</span><br>
<span class="quotelev2">&gt; &gt;   limited. Errors may occur when lack of resources prevent the  
</span><br>
<span class="quotelev1">&gt; execution
</span><br>
<span class="quotelev2">&gt; &gt;   of an MPI call. A quality implementation will use a (small)  
</span><br>
<span class="quotelev1">&gt; fixed amount
</span><br>
<span class="quotelev2">&gt; &gt;   of resources for each pending send in the ready or synchronous  
</span><br>
<span class="quotelev1">&gt; mode and
</span><br>
<span class="quotelev2">&gt; &gt;   for each pending receive. However, buffer space may be consumed  
</span><br>
<span class="quotelev1">&gt; to store
</span><br>
<span class="quotelev2">&gt; &gt;   messages sent in standard mode, and must be consumed to store  
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev2">&gt; &gt;   sent in buffered mode, when no matching receive is available.  
</span><br>
<span class="quotelev1">&gt; The amount
</span><br>
<span class="quotelev2">&gt; &gt;   of space available for buffering will be much smaller than  
</span><br>
<span class="quotelev1">&gt; program data
</span><br>
<span class="quotelev2">&gt; &gt;   memory on many systems. Then, it will be easy to write programs  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt; &gt;   overrun available buffer space.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Since I work on MPI implementations that are expected to allow  
</span><br>
<span class="quotelev1">&gt; applications
</span><br>
<span class="quotelev2">&gt; &gt; to scale to tens of thousands of processes, I don't want the  
</span><br>
<span class="quotelev1">&gt; overhead of
</span><br>
<span class="quotelev2">&gt; &gt; a user-level flow control protocol that penalizes scalable  
</span><br>
<span class="quotelev1">&gt; applications in
</span><br>
<span class="quotelev2">&gt; &gt; favor of non-scalable ones.  I also don't want an MPI  
</span><br>
<span class="quotelev1">&gt; implementation that
</span><br>
<span class="quotelev2">&gt; &gt; hides such non-scalable application behavior, but rather exposes  
</span><br>
<span class="quotelev1">&gt; it at lower
</span><br>
<span class="quotelev2">&gt; &gt; processor counts -- preferably in a way that makes the application  
</span><br>
<span class="quotelev1">&gt; developer
</span><br>
<span class="quotelev2">&gt; &gt; aware of the resources requirements of their code and allows them  
</span><br>
<span class="quotelev1">&gt; to make
</span><br>
<span class="quotelev2">&gt; &gt; the appropriate choice regarding the structure of their code, the  
</span><br>
<span class="quotelev1">&gt; underlying
</span><br>
<span class="quotelev2">&gt; &gt; protocols, and the amount of buffer resources.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But I work in a place where codes are expected to scale and not  
</span><br>
<span class="quotelev1">&gt; just work.
</span><br>
<span class="quotelev2">&gt; &gt; Most of the vendors aren't allowed to have this perspective....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ron
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5010.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="5008.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>In reply to:</strong> <a href="4959.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4962.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
