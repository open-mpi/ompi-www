<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 13:29:37 2008" -->
<!-- isoreceived="20080204182937" -->
<!-- sent="Mon, 4 Feb 2008 13:29:29 -0500" -->
<!-- isosent="20080204182929" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="OF6C53C841.482EF7EA-ON852573E5.00636DC0-852573E5.006593BA_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080204172411.GA20614_at_ratbert.sandia.gov" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 13:29:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4960.php">Richard Treumann: "[OMPI users] Fw:  openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4958.php">Ron Brightwell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4958.php">Ron Brightwell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4961.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4961.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="5009.php">Jeff Squyres: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ron -
<br>
<p>I am well aware of the scaling problems related to the standard send
<br>
requirements in MPI.  I t is a very difficult issue.
<br>
<p>However, here is what the standard says: MPI 1.2, page 32 lines 29-37
<br>
<p>=======
<br>
a standard send operation that cannot complete because of lack of buffer
<br>
space will merely block, waiting for buffer space to become available or
<br>
for a matching receive to be posted. This behavior is preferable in many
<br>
situations. Consider a situation where a producer repeatedly produces new
<br>
values and sends them to a consumer. Assume that the producer produces new
<br>
values faster than the consumer can consume them. If buffered sends are
<br>
used, then a buffer overflow will result. Additional synchronization has to
<br>
be added to the program so as to prevent this from occurring. If standard
<br>
sends are used, then the producer will be
<br>
automatically throttled, as its send operations will block when buffer
<br>
space is unavailable.
<br>
========
<br>
<p>If there are people who want to argue that this is unclear or that it
<br>
should be changed, the MPI Forum can and should take up the discussion.  I
<br>
think this particular wording is pretty clear.
<br>
<p>The piece of MPI standard wording you quote is somewhat ambiguous:
<br>
============
<br>
The amount
<br>
of space available for buffering will be much smaller than program data
<br>
memory on many systems. Then, it will be easy to write programs that
<br>
overrun available buffer space.
<br>
============
<br>
But note that this wording mentions a problem that an application can
<br>
create but does not say the MPI implementation can fail the job.  The
<br>
language I have pointed to is where the standard says what the MPI
<br>
implementation must do.
<br>
<p>The &quot;lack of resource&quot; statement is more about send and receive descriptors
<br>
than buffer space.  If I write a program with an infinite loop of MPI_IRECV
<br>
postings  the standard allows that to fail.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p>Dick Treumann  -  MPI Team/TCEM
<br>
IBM Systems &amp; Technology Group
<br>
Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 02/04/2008 12:24:11 PM:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is what George says accurate? If so, it sounds to me like OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt; does not comply with the MPI standard on the behavior of eager
</span><br>
<span class="quotelev2">&gt; &gt; protocol. MPICH is getting dinged in this discussion because they
</span><br>
<span class="quotelev2">&gt; &gt; have complied with the requirements of the MPI standard. IBM MPI
</span><br>
<span class="quotelev2">&gt; &gt; also complies with the standard.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If there is any debate about whether the MPI standard does (or
</span><br>
<span class="quotelev2">&gt; &gt; should) require the behavior I describe below then we should move
</span><br>
<span class="quotelev2">&gt; &gt; the discussion to the MPI 2.1 Forum and get a clarification.
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI Standard also says the following about resource limitations:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Any pending communication operation consumes system resources that are
</span><br>
<span class="quotelev1">&gt;   limited. Errors may occur when lack of resources prevent the execution
</span><br>
<span class="quotelev1">&gt;   of an MPI call. A quality implementation will use a (small) fixed
</span><br>
amount
<br>
<span class="quotelev1">&gt;   of resources for each pending send in the ready or synchronous mode and
</span><br>
<span class="quotelev1">&gt;   for each pending receive. However, buffer space may be consumed to
</span><br>
store
<br>
<span class="quotelev1">&gt;   messages sent in standard mode, and must be consumed to store messages
</span><br>
<span class="quotelev1">&gt;   sent in buffered mode, when no matching receive is available. The
</span><br>
amount
<br>
<span class="quotelev1">&gt;   of space available for buffering will be much smaller than program data
</span><br>
<span class="quotelev1">&gt;   memory on many systems. Then, it will be easy to write programs that
</span><br>
<span class="quotelev1">&gt;   overrun available buffer space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I work on MPI implementations that are expected to allow
</span><br>
applications
<br>
<span class="quotelev1">&gt; to scale to tens of thousands of processes, I don't want the overhead of
</span><br>
<span class="quotelev1">&gt; a user-level flow control protocol that penalizes scalable applications
</span><br>
in
<br>
<span class="quotelev1">&gt; favor of non-scalable ones.  I also don't want an MPI implementation that
</span><br>
<span class="quotelev1">&gt; hides such non-scalable application behavior, but rather exposes it at
</span><br>
lower
<br>
<span class="quotelev1">&gt; processor counts -- preferably in a way that makes the application
</span><br>
developer
<br>
<span class="quotelev1">&gt; aware of the resources requirements of their code and allows them to make
</span><br>
<span class="quotelev1">&gt; the appropriate choice regarding the structure of their code, the
</span><br>
underlying
<br>
<span class="quotelev1">&gt; protocols, and the amount of buffer resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I work in a place where codes are expected to scale and not just
</span><br>
work.
<br>
<span class="quotelev1">&gt; Most of the vendors aren't allowed to have this perspective....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ron
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4959/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4960.php">Richard Treumann: "[OMPI users] Fw:  openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4958.php">Ron Brightwell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4958.php">Ron Brightwell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4961.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4961.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="5009.php">Jeff Squyres: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
