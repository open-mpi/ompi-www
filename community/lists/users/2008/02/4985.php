<?
$subject_val = "Re: [OMPI users] MPI piggyback mechanism";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 11:03:49 2008" -->
<!-- isoreceived="20080205160349" -->
<!-- sent="Tue, 5 Feb 2008 17:03:40 +0100" -->
<!-- isosent="20080205160340" -->
<!-- name="Oleg Morajko" -->
<!-- email="olegmorajko_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI piggyback mechanism" -->
<!-- id="6ab5deaf0802050803r34e0510bsd2cddec86f4d2490_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FF58CC7B-F494-417C-9E7D-57EA9C6A6C95_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI piggyback mechanism<br>
<strong>From:</strong> Oleg Morajko (<em>olegmorajko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-05 11:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4986.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Previous message:</strong> <a href="4984.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4981.php">Josh Hursey: "Re: [OMPI users] MPI piggyback mechanism"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Josh, that's interesting. I'll have a look.
<br>
--Oleg
<br>
<p>On Feb 5, 2008 2:39 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Oleg,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting work. You mentioned late in your email that you believe
</span><br>
<span class="quotelev1">&gt; that adding support for piggybacking to the MPI standard would be the
</span><br>
<span class="quotelev1">&gt; best solution. As you may know, the MPI Forum has reconvened and there
</span><br>
<span class="quotelev1">&gt; is a working group for Fault Tolerance. This working group is
</span><br>
<span class="quotelev1">&gt; discussing a piggybacking interface proposal for the standard, amongst
</span><br>
<span class="quotelev1">&gt; other things. If you are interested in contributing to this
</span><br>
<span class="quotelev1">&gt; conversation you can find the mailing list here:
</span><br>
<span class="quotelev1">&gt;  <a href="http://lists.cs.uiuc.edu/mailman/listinfo/mpi3-ft">http://lists.cs.uiuc.edu/mailman/listinfo/mpi3-ft</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2008, at 4:58 AM, Oleg Morajko wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've been working on MPI piggyback technique as a part of my PhD work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Although MPI does not provide a native support, there are several
</span><br>
<span class="quotelev2">&gt; &gt; different
</span><br>
<span class="quotelev2">&gt; &gt; solutions to transmit piggyback data over every MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt; You may
</span><br>
<span class="quotelev2">&gt; &gt; find a brief overview in papers [1, 2]. This includes copying the
</span><br>
<span class="quotelev2">&gt; &gt; original
</span><br>
<span class="quotelev2">&gt; &gt; message and the extra data to a bigger buffer, sending additional
</span><br>
<span class="quotelev2">&gt; &gt; message or
</span><br>
<span class="quotelev2">&gt; &gt; changing the sendtype to a dynamically created wrapper datatype that
</span><br>
<span class="quotelev2">&gt; &gt; contains a pointer to the original data and the piggyback data. I
</span><br>
<span class="quotelev2">&gt; &gt; have tried
</span><br>
<span class="quotelev2">&gt; &gt; all mechanisms and they work, but considering the overhead, there is
</span><br>
<span class="quotelev2">&gt; &gt; no &quot;the
</span><br>
<span class="quotelev2">&gt; &gt; best&quot; technique that outperforms the others in all scenarios. Jeff
</span><br>
<span class="quotelev2">&gt; &gt; Squyres
</span><br>
<span class="quotelev2">&gt; &gt; had interesting comments on this subject before (in this mailing
</span><br>
<span class="quotelev2">&gt; &gt; list).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Finally after some benchmarking, I have implemented *a *hybrid
</span><br>
<span class="quotelev2">&gt; &gt; technique
</span><br>
<span class="quotelev2">&gt; &gt; that combines existing mechanisms. For small, point-to-point messages
</span><br>
<span class="quotelev2">&gt; &gt; datatype wrapping seems to be the less intrusive, at least considering
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI implementation of derived datatypes. For large, point-to-point
</span><br>
<span class="quotelev2">&gt; &gt; messages, experiments confirmed that sending an additional message
</span><br>
<span class="quotelev2">&gt; &gt; is much
</span><br>
<span class="quotelev2">&gt; &gt; cheaper than wrapping (and besides the intrusion is small as we are
</span><br>
<span class="quotelev2">&gt; &gt; already
</span><br>
<span class="quotelev2">&gt; &gt; sending a large message). Moreover, the implementation may
</span><br>
<span class="quotelev2">&gt; &gt; interleave the
</span><br>
<span class="quotelev2">&gt; &gt; original send with an asynchronous send of piggyback data. This
</span><br>
<span class="quotelev2">&gt; &gt; optimization
</span><br>
<span class="quotelev2">&gt; &gt; partially hides the latency of additional send and lowers overall
</span><br>
<span class="quotelev2">&gt; &gt; intrusion.
</span><br>
<span class="quotelev2">&gt; &gt; The  same criteria can be applied for collective operations, except
</span><br>
<span class="quotelev2">&gt; &gt; barrier
</span><br>
<span class="quotelev2">&gt; &gt; and reduce operations. As the former does not transmit any data and
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; latter transforms the data, the only solution is to send additional
</span><br>
<span class="quotelev2">&gt; &gt; messages.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There is a penalty of course. Especially for collective operations
</span><br>
<span class="quotelev2">&gt; &gt; with very
</span><br>
<span class="quotelev2">&gt; &gt; small messages the intrusion may reach 15% and that's a lot. It than
</span><br>
<span class="quotelev2">&gt; &gt; decreases down to 0.1% for bigger messages, but anyway it's still
</span><br>
<span class="quotelev2">&gt; &gt; there. I
</span><br>
<span class="quotelev2">&gt; &gt; don't know what are your requirements/expectations for that issue.
</span><br>
<span class="quotelev2">&gt; &gt; The only
</span><br>
<span class="quotelev2">&gt; &gt; work that reported lower overheads is [3] but they added native
</span><br>
<span class="quotelev2">&gt; &gt; piggyback
</span><br>
<span class="quotelev2">&gt; &gt; support by changing underlying MPI implementation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think the best possible option is to add piggyback support for MPI
</span><br>
<span class="quotelev2">&gt; &gt; as a
</span><br>
<span class="quotelev2">&gt; &gt; part of the standard. A growing number of runtime tools use this
</span><br>
<span class="quotelev2">&gt; &gt; functionality for multiple reasons and certainly PMPI itself is not
</span><br>
<span class="quotelev2">&gt; &gt; enough.
</span><br>
<span class="quotelev2">&gt; &gt; References of interest:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   -
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   [1] Shende, S., Malony, A., Morris, A., Wolf, F. &quot;Performance
</span><br>
<span class="quotelev2">&gt; &gt;   Profiling Overhead Compensation for MPI Programs&quot;. 12th EuroPVM-MPI
</span><br>
<span class="quotelev2">&gt; &gt;   Conference, LNCS, vol. 3666, pp. 359-367, 2005.  They review various
</span><br>
<span class="quotelev2">&gt; &gt;   techniques and  come up with datatype wrapping.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   -
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   [2] Schulz, M., &quot;Extracting Critical Path Graphs from MPI
</span><br>
<span class="quotelev2">&gt; &gt;   Applications&quot;. Cluster Computing 2005, IEEE International, pp. 1-10,
</span><br>
<span class="quotelev2">&gt; &gt;   September 2005. They use datatype wrapping.
</span><br>
<span class="quotelev2">&gt; &gt;   - [3] Jeffrey Vetter, &quot;Dynamic Statistical Profiling of
</span><br>
<span class="quotelev2">&gt; &gt; Communication
</span><br>
<span class="quotelev2">&gt; &gt;   Activity in Distributed Applications&quot;. They add support for
</span><br>
<span class="quotelev2">&gt; &gt; piggyback at MPI
</span><br>
<span class="quotelev2">&gt; &gt;   implementation level and report very low overheads (no surprise).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Oleg Morajko
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 1, 2008 5:08 PM, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't know of any work in that direction for now. Indeed, we plan
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; eventually integrate at least causal message logging in the pml-v,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which also includes piggybacking. Therefore we are open for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; collaboration with you on this matter. Please let us know :)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Aurelien
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Le 1 f&#233;vr. 08 &#224; 09:51, Thomas Ropars a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm currently working on optimistic message logging and I would like
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; implement an optimistic message logging protocol in OpenMPI.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Optimistic
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; message logging protocols piggyback information about dependencies
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; between processes on the application messages to be able to find a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; consistent global state after a failure. That's why I'm interested
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the problem of piggybacking information on MPI messages.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is there some works on this problem at the moment ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Has anyone already implemented some mechanisms in OpenMPI to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; piggyback
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; data on MPI messages?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thomas
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Oleg Morajko wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'm developing a causality chain tracking library and need a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mechanism
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; to attach an extra data to every MPI message, so called piggyback
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mechanism.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; As far as I know there are a few solutions to this problem from
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; which
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the two fundamental ones are the following:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   * Dynamic datatype wrapping - if a user MPI_Send, let's say 1024
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     doubles, the wrapped send call implementation dynamically
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     creates a derived datatype that is a structure composed of a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     pointer to 1024 doubles and extra fields to be piggybacked. The
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     datatype is constructed with absolute addresses to avoid
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; copying
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     the original buffer. The receivers side creates the equivalent
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     datatype to receive the original data and extra data. The
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     performance of this solution depends on the how good is derived
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     data type handling, but seems to be lightweight.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   * Sending extra data in a separate message -- seems this can have
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     much more significant overhead
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Do you know any other portable solution?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I have implemented the first solution for P2P operations and it
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; works
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; pretty well. However there are problems with collective operations.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; There are 2 classes of collective calls that are problematic:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  1. Single receiver calls, like MPI_Gather. The sender tasks in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     gather can be handled in the same way as a normal send, a data
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     item is wrapped and extra data is piggybacked with the message.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     The problem is at the receiver side when a root gathers N data
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     items that must be received in an array big enough to receive
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     all items strided by datatype extent.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     In particular, it seems impossible to construct a datatype that
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     contains data item and extra data (i.e. structure type with
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     absolute addresses) AND make an array of these datatypes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     separated by a fixed extent. For example: data item to receive
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     from every process is a vector of 1024 doubles. Extra data is a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     single integer. User provides a receive buffer with place for N
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     * 1024 * double. The library allocates an array of N integers
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     receive piggybacked data. How to construct a datatype that can
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     be used to receive data in MPI_Gather?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  2. MPI_Reduce calls. There is no problem with datatypes as the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     receiver gets the single data item and not an array as in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     previous case. The problem is the reduction operator itself
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     (MPI_Op) because these operators do not work with wrapped data
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     types. So I can create a new operator to recognize the wrapped
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     data type that extracts the original data (skipping extra data)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     and performs the original reduction. The point is how to invoke
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     the original reduction on an existing datatype. I have found
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     that Open MPI calls internally ompi_op_reduce(op, inbuf, rbuf,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     count, dtype) this solves a problem. However this makes the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; code
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     MPI-implementation dependent. Any idea on more portable
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; options?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thank you in advance for any comment.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --Oleg
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sr. Research Associate - Innovative Computing Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Suite 350, 1122 Volunteer Boulevard
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Knoxville, TN 37996
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 865 974 6321
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4985/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4986.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Previous message:</strong> <a href="4984.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4981.php">Josh Hursey: "Re: [OMPI users] MPI piggyback mechanism"</a>
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
