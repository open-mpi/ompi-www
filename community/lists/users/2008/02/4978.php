<?
$subject_val = "Re: [OMPI users] MPI piggyback mechanism";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 04:59:02 2008" -->
<!-- isoreceived="20080205095902" -->
<!-- sent="Tue, 5 Feb 2008 10:58:58 +0100" -->
<!-- isosent="20080205095858" -->
<!-- name="Oleg Morajko" -->
<!-- email="olegmorajko_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI piggyback mechanism" -->
<!-- id="6ab5deaf0802050158i66891333i7baeac22d1d16285_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="332D415D-0132-4D2B-B37C-3B5D3E9F00E5_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-02-05 04:58:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4979.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4977.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4945.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI piggyback mechanism"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4981.php">Josh Hursey: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Reply:</strong> <a href="4981.php">Josh Hursey: "Re: [OMPI users] MPI piggyback mechanism"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've been working on MPI piggyback technique as a part of my PhD work.
<br>
<p>Although MPI does not provide a native support, there are several different
<br>
solutions to transmit piggyback data over every MPI communication. You may
<br>
find a brief overview in papers [1, 2]. This includes copying the original
<br>
message and the extra data to a bigger buffer, sending additional message or
<br>
changing the sendtype to a dynamically created wrapper datatype that
<br>
contains a pointer to the original data and the piggyback data. I have tried
<br>
all mechanisms and they work, but considering the overhead, there is no &quot;the
<br>
best&quot; technique that outperforms the others in all scenarios. Jeff Squyres
<br>
had interesting comments on this subject before (in this mailing list).
<br>
<p>Finally after some benchmarking, I have implemented *a *hybrid technique
<br>
that combines existing mechanisms. For small, point-to-point messages
<br>
datatype wrapping seems to be the less intrusive, at least considering
<br>
OpenMPI implementation of derived datatypes. For large, point-to-point
<br>
messages, experiments confirmed that sending an additional message is much
<br>
cheaper than wrapping (and besides the intrusion is small as we are already
<br>
sending a large message). Moreover, the implementation may interleave the
<br>
original send with an asynchronous send of piggyback data. This optimization
<br>
partially hides the latency of additional send and lowers overall intrusion.
<br>
The  same criteria can be applied for collective operations, except barrier
<br>
and reduce operations. As the former does not transmit any data and the
<br>
latter transforms the data, the only solution is to send additional
<br>
messages.
<br>
<p>There is a penalty of course. Especially for collective operations with very
<br>
small messages the intrusion may reach 15% and that's a lot. It than
<br>
decreases down to 0.1% for bigger messages, but anyway it's still there. I
<br>
don't know what are your requirements/expectations for that issue. The only
<br>
work that reported lower overheads is [3] but they added native piggyback
<br>
support by changing underlying MPI implementation.
<br>
<p>I think the best possible option is to add piggyback support for MPI as a
<br>
part of the standard. A growing number of runtime tools use this
<br>
functionality for multiple reasons and certainly PMPI itself is not enough.
<br>
References of interest:
<br>
<p>&nbsp;&nbsp;&nbsp;-
<br>
<p>&nbsp;&nbsp;&nbsp;[1] Shende, S., Malony, A., Morris, A., Wolf, F. &quot;Performance
<br>
&nbsp;&nbsp;&nbsp;Profiling Overhead Compensation for MPI Programs&quot;. 12th EuroPVM-MPI
<br>
&nbsp;&nbsp;&nbsp;Conference, LNCS, vol. 3666, pp. 359-367, 2005.  They review various
<br>
&nbsp;&nbsp;&nbsp;techniques and  come up with datatype wrapping.
<br>
<p>&nbsp;&nbsp;&nbsp;-
<br>
<p>&nbsp;&nbsp;&nbsp;[2] Schulz, M., &quot;Extracting Critical Path Graphs from MPI
<br>
&nbsp;&nbsp;&nbsp;Applications&quot;. Cluster Computing 2005, IEEE International, pp. 1-10,
<br>
&nbsp;&nbsp;&nbsp;September 2005. They use datatype wrapping.
<br>
&nbsp;&nbsp;&nbsp;- [3] Jeffrey Vetter, &quot;Dynamic Statistical Profiling of Communication
<br>
&nbsp;&nbsp;&nbsp;Activity in Distributed Applications&quot;. They add support for piggyback at MPI
<br>
&nbsp;&nbsp;&nbsp;implementation level and report very low overheads (no surprise).
<br>
<p>Regards,
<br>
Oleg Morajko
<br>
<p><p>On Feb 1, 2008 5:08 PM, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't know of any work in that direction for now. Indeed, we plan to
</span><br>
<span class="quotelev1">&gt; eventually integrate at least causal message logging in the pml-v,
</span><br>
<span class="quotelev1">&gt; which also includes piggybacking. Therefore we are open for
</span><br>
<span class="quotelev1">&gt; collaboration with you on this matter. Please let us know :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 1 f&#233;vr. 08 &#224; 09:51, Thomas Ropars a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm currently working on optimistic message logging and I would like
</span><br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev2">&gt; &gt; implement an optimistic message logging protocol in OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt; Optimistic
</span><br>
<span class="quotelev2">&gt; &gt; message logging protocols piggyback information about dependencies
</span><br>
<span class="quotelev2">&gt; &gt; between processes on the application messages to be able to find a
</span><br>
<span class="quotelev2">&gt; &gt; consistent global state after a failure. That's why I'm interested in
</span><br>
<span class="quotelev2">&gt; &gt; the problem of piggybacking information on MPI messages.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there some works on this problem at the moment ?
</span><br>
<span class="quotelev2">&gt; &gt; Has anyone already implemented some mechanisms in OpenMPI to piggyback
</span><br>
<span class="quotelev2">&gt; &gt; data on MPI messages?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thomas
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Oleg Morajko wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm developing a causality chain tracking library and need a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mechanism
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to attach an extra data to every MPI message, so called piggyback
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mechanism.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As far as I know there are a few solutions to this problem from which
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the two fundamental ones are the following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    * Dynamic datatype wrapping - if a user MPI_Send, let's say 1024
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      doubles, the wrapped send call implementation dynamically
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      creates a derived datatype that is a structure composed of a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      pointer to 1024 doubles and extra fields to be piggybacked. The
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      datatype is constructed with absolute addresses to avoid copying
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      the original buffer. The receivers side creates the equivalent
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      datatype to receive the original data and extra data. The
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      performance of this solution depends on the how good is derived
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      data type handling, but seems to be lightweight.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    * Sending extra data in a separate message -- seems this can have
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      much more significant overhead
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do you know any other portable solution?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have implemented the first solution for P2P operations and it works
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pretty well. However there are problems with collective operations.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There are 2 classes of collective calls that are problematic:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   1. Single receiver calls, like MPI_Gather. The sender tasks in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      gather can be handled in the same way as a normal send, a data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      item is wrapped and extra data is piggybacked with the message.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      The problem is at the receiver side when a root gathers N data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      items that must be received in an array big enough to receive
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      all items strided by datatype extent.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      In particular, it seems impossible to construct a datatype that
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      contains data item and extra data (i.e. structure type with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      absolute addresses) AND make an array of these datatypes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      separated by a fixed extent. For example: data item to receive
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      from every process is a vector of 1024 doubles. Extra data is a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      single integer. User provides a receive buffer with place for N
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      * 1024 * double. The library allocates an array of N integers to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      receive piggybacked data. How to construct a datatype that can
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      be used to receive data in MPI_Gather?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   2. MPI_Reduce calls. There is no problem with datatypes as the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      receiver gets the single data item and not an array as in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      previous case. The problem is the reduction operator itself
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      (MPI_Op) because these operators do not work with wrapped data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      types. So I can create a new operator to recognize the wrapped
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      data type that extracts the original data (skipping extra data)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      and performs the original reduction. The point is how to invoke
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      the original reduction on an existing datatype. I have found
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      that Open MPI calls internally ompi_op_reduce(op, inbuf, rbuf,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      count, dtype) this solves a problem. However this makes the code
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      MPI-implementation dependent. Any idea on more portable options?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you in advance for any comment.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --Oleg
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; Sr. Research Associate - Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; Suite 350, 1122 Volunteer Boulevard
</span><br>
<span class="quotelev1">&gt; Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; 865 974 6321
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4979.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4977.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4945.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI piggyback mechanism"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4981.php">Josh Hursey: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Reply:</strong> <a href="4981.php">Josh Hursey: "Re: [OMPI users] MPI piggyback mechanism"</a>
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
