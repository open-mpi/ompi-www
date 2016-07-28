<?
$subject_val = "Re: [OMPI users] MPI piggyback mechanism";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 11:08:57 2008" -->
<!-- isoreceived="20080201160857" -->
<!-- sent="Fri, 1 Feb 2008 11:08:25 -0500" -->
<!-- isosent="20080201160825" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI piggyback mechanism" -->
<!-- id="332D415D-0132-4D2B-B37C-3B5D3E9F00E5_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47A331E1.9060304_at_irisa.fr" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 11:08:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4946.php">Keith Hellman: "[OMPI users] Dynamically changing machine file data"</a>
<li><strong>Previous message:</strong> <a href="4944.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>In reply to:</strong> <a href="4944.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4978.php">Oleg Morajko: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Reply:</strong> <a href="4978.php">Oleg Morajko: "Re: [OMPI users] MPI piggyback mechanism"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know of any work in that direction for now. Indeed, we plan to  
<br>
eventually integrate at least causal message logging in the pml-v,  
<br>
which also includes piggybacking. Therefore we are open for  
<br>
collaboration with you on this matter. Please let us know :)
<br>
<p>Aurelien
<br>
<p><p><p>Le 1 f&#233;vr. 08 &#224; 09:51, Thomas Ropars a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently working on optimistic message logging and I would like  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; implement an optimistic message logging protocol in OpenMPI.   
</span><br>
<span class="quotelev1">&gt; Optimistic
</span><br>
<span class="quotelev1">&gt; message logging protocols piggyback information about dependencies
</span><br>
<span class="quotelev1">&gt; between processes on the application messages to be able to find a
</span><br>
<span class="quotelev1">&gt; consistent global state after a failure. That's why I'm interested in
</span><br>
<span class="quotelev1">&gt; the problem of piggybacking information on MPI messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some works on this problem at the moment ?
</span><br>
<span class="quotelev1">&gt; Has anyone already implemented some mechanisms in OpenMPI to piggyback
</span><br>
<span class="quotelev1">&gt; data on MPI messages?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oleg Morajko wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm developing a causality chain tracking library and need a  
</span><br>
<span class="quotelev2">&gt;&gt; mechanism
</span><br>
<span class="quotelev2">&gt;&gt; to attach an extra data to every MPI message, so called piggyback
</span><br>
<span class="quotelev2">&gt;&gt; mechanism.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I know there are a few solutions to this problem from which
</span><br>
<span class="quotelev2">&gt;&gt; the two fundamental ones are the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    * Dynamic datatype wrapping - if a user MPI_Send, let's say 1024
</span><br>
<span class="quotelev2">&gt;&gt;      doubles, the wrapped send call implementation dynamically
</span><br>
<span class="quotelev2">&gt;&gt;      creates a derived datatype that is a structure composed of a
</span><br>
<span class="quotelev2">&gt;&gt;      pointer to 1024 doubles and extra fields to be piggybacked. The
</span><br>
<span class="quotelev2">&gt;&gt;      datatype is constructed with absolute addresses to avoid copying
</span><br>
<span class="quotelev2">&gt;&gt;      the original buffer. The receivers side creates the equivalent
</span><br>
<span class="quotelev2">&gt;&gt;      datatype to receive the original data and extra data. The
</span><br>
<span class="quotelev2">&gt;&gt;      performance of this solution depends on the how good is derived
</span><br>
<span class="quotelev2">&gt;&gt;      data type handling, but seems to be lightweight.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    * Sending extra data in a separate message -- seems this can have
</span><br>
<span class="quotelev2">&gt;&gt;      much more significant overhead
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you know any other portable solution?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have implemented the first solution for P2P operations and it works
</span><br>
<span class="quotelev2">&gt;&gt; pretty well. However there are problems with collective operations.
</span><br>
<span class="quotelev2">&gt;&gt; There are 2 classes of collective calls that are problematic:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   1. Single receiver calls, like MPI_Gather. The sender tasks in
</span><br>
<span class="quotelev2">&gt;&gt;      gather can be handled in the same way as a normal send, a data
</span><br>
<span class="quotelev2">&gt;&gt;      item is wrapped and extra data is piggybacked with the message.
</span><br>
<span class="quotelev2">&gt;&gt;      The problem is at the receiver side when a root gathers N data
</span><br>
<span class="quotelev2">&gt;&gt;      items that must be received in an array big enough to receive
</span><br>
<span class="quotelev2">&gt;&gt;      all items strided by datatype extent.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      In particular, it seems impossible to construct a datatype that
</span><br>
<span class="quotelev2">&gt;&gt;      contains data item and extra data (i.e. structure type with
</span><br>
<span class="quotelev2">&gt;&gt;      absolute addresses) AND make an array of these datatypes
</span><br>
<span class="quotelev2">&gt;&gt;      separated by a fixed extent. For example: data item to receive
</span><br>
<span class="quotelev2">&gt;&gt;      from every process is a vector of 1024 doubles. Extra data is a
</span><br>
<span class="quotelev2">&gt;&gt;      single integer. User provides a receive buffer with place for N
</span><br>
<span class="quotelev2">&gt;&gt;      * 1024 * double. The library allocates an array of N integers to
</span><br>
<span class="quotelev2">&gt;&gt;      receive piggybacked data. How to construct a datatype that can
</span><br>
<span class="quotelev2">&gt;&gt;      be used to receive data in MPI_Gather?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   2. MPI_Reduce calls. There is no problem with datatypes as the
</span><br>
<span class="quotelev2">&gt;&gt;      receiver gets the single data item and not an array as in
</span><br>
<span class="quotelev2">&gt;&gt;      previous case. The problem is the reduction operator itself
</span><br>
<span class="quotelev2">&gt;&gt;      (MPI_Op) because these operators do not work with wrapped data
</span><br>
<span class="quotelev2">&gt;&gt;      types. So I can create a new operator to recognize the wrapped
</span><br>
<span class="quotelev2">&gt;&gt;      data type that extracts the original data (skipping extra data)
</span><br>
<span class="quotelev2">&gt;&gt;      and performs the original reduction. The point is how to invoke
</span><br>
<span class="quotelev2">&gt;&gt;      the original reduction on an existing datatype. I have found
</span><br>
<span class="quotelev2">&gt;&gt;      that Open MPI calls internally ompi_op_reduce(op, inbuf, rbuf,
</span><br>
<span class="quotelev2">&gt;&gt;      count, dtype) this solves a problem. However this makes the code
</span><br>
<span class="quotelev2">&gt;&gt;      MPI-implementation dependent. Any idea on more portable options?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance for any comment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --Oleg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Dr. Aur&#233;lien Bouteiller
Sr. Research Associate - Innovative Computing Laboratory
Suite 350, 1122 Volunteer Boulevard
Knoxville, TN 37996
865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4946.php">Keith Hellman: "[OMPI users] Dynamically changing machine file data"</a>
<li><strong>Previous message:</strong> <a href="4944.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>In reply to:</strong> <a href="4944.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4978.php">Oleg Morajko: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Reply:</strong> <a href="4978.php">Oleg Morajko: "Re: [OMPI users] MPI piggyback mechanism"</a>
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
