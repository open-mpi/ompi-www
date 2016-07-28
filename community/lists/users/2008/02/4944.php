<?
$subject_val = "Re: [OMPI users] MPI piggyback mechanism";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 09:51:16 2008" -->
<!-- isoreceived="20080201145116" -->
<!-- sent="Fri, 01 Feb 2008 15:51:13 +0100" -->
<!-- isosent="20080201145113" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI piggyback mechanism" -->
<!-- id="47A331E1.9060304_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6ab5deaf0710301826t63453b56y375210315919b8ea_at_mail.gmail.com" -->
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
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 09:51:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4945.php">Aurélien Bouteiller: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Previous message:</strong> <a href="4943.php">Jeff Squyres: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4351.php">Oleg Morajko: "[OMPI users] MPI piggyback mechanism"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4945.php">Aurélien Bouteiller: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Reply:</strong> <a href="4945.php">Aurélien Bouteiller: "Re: [OMPI users] MPI piggyback mechanism"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm currently working on optimistic message logging and I would like to 
<br>
implement an optimistic message logging protocol in OpenMPI.  Optimistic 
<br>
message logging protocols piggyback information about dependencies 
<br>
between processes on the application messages to be able to find a 
<br>
consistent global state after a failure. That's why I'm interested in 
<br>
the problem of piggybacking information on MPI messages.
<br>
<p>Is there some works on this problem at the moment ?
<br>
Has anyone already implemented some mechanisms in OpenMPI to piggyback 
<br>
data on MPI messages?
<br>
<p>Regards,
<br>
<p>Thomas
<br>
<p>Oleg Morajko wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm developing a causality chain tracking library and need a mechanism 
</span><br>
<span class="quotelev1">&gt; to attach an extra data to every MPI message, so called piggyback 
</span><br>
<span class="quotelev1">&gt; mechanism.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I know there are a few solutions to this problem from which 
</span><br>
<span class="quotelev1">&gt; the two fundamental ones are the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * Dynamic datatype wrapping - if a user MPI_Send, let's say 1024
</span><br>
<span class="quotelev1">&gt;       doubles, the wrapped send call implementation dynamically
</span><br>
<span class="quotelev1">&gt;       creates a derived datatype that is a structure composed of a
</span><br>
<span class="quotelev1">&gt;       pointer to 1024 doubles and extra fields to be piggybacked. The
</span><br>
<span class="quotelev1">&gt;       datatype is constructed with absolute addresses to avoid copying
</span><br>
<span class="quotelev1">&gt;       the original buffer. The receivers side creates the equivalent
</span><br>
<span class="quotelev1">&gt;       datatype to receive the original data and extra data. The
</span><br>
<span class="quotelev1">&gt;       performance of this solution depends on the how good is derived
</span><br>
<span class="quotelev1">&gt;       data type handling, but seems to be lightweight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * Sending extra data in a separate message -- seems this can have
</span><br>
<span class="quotelev1">&gt;       much more significant overhead
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know any other portable solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have implemented the first solution for P2P operations and it works 
</span><br>
<span class="quotelev1">&gt; pretty well. However there are problems with collective operations. 
</span><br>
<span class="quotelev1">&gt; There are 2 classes of collective calls that are problematic:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Single receiver calls, like MPI_Gather. The sender tasks in
</span><br>
<span class="quotelev1">&gt;       gather can be handled in the same way as a normal send, a data
</span><br>
<span class="quotelev1">&gt;       item is wrapped and extra data is piggybacked with the message.
</span><br>
<span class="quotelev1">&gt;       The problem is at the receiver side when a root gathers N data
</span><br>
<span class="quotelev1">&gt;       items that must be received in an array big enough to receive
</span><br>
<span class="quotelev1">&gt;       all items strided by datatype extent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       In particular, it seems impossible to construct a datatype that
</span><br>
<span class="quotelev1">&gt;       contains data item and extra data (i.e. structure type with
</span><br>
<span class="quotelev1">&gt;       absolute addresses) AND make an array of these datatypes
</span><br>
<span class="quotelev1">&gt;       separated by a fixed extent. For example: data item to receive
</span><br>
<span class="quotelev1">&gt;       from every process is a vector of 1024 doubles. Extra data is a
</span><br>
<span class="quotelev1">&gt;       single integer. User provides a receive buffer with place for N
</span><br>
<span class="quotelev1">&gt;       * 1024 * double. The library allocates an array of N integers to
</span><br>
<span class="quotelev1">&gt;       receive piggybacked data. How to construct a datatype that can
</span><br>
<span class="quotelev1">&gt;       be used to receive data in MPI_Gather?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    2. MPI_Reduce calls. There is no problem with datatypes as the
</span><br>
<span class="quotelev1">&gt;       receiver gets the single data item and not an array as in
</span><br>
<span class="quotelev1">&gt;       previous case. The problem is the reduction operator itself
</span><br>
<span class="quotelev1">&gt;       (MPI_Op) because these operators do not work with wrapped data
</span><br>
<span class="quotelev1">&gt;       types. So I can create a new operator to recognize the wrapped
</span><br>
<span class="quotelev1">&gt;       data type that extracts the original data (skipping extra data)
</span><br>
<span class="quotelev1">&gt;       and performs the original reduction. The point is how to invoke
</span><br>
<span class="quotelev1">&gt;       the original reduction on an existing datatype. I have found
</span><br>
<span class="quotelev1">&gt;       that Open MPI calls internally ompi_op_reduce(op, inbuf, rbuf,
</span><br>
<span class="quotelev1">&gt;       count, dtype) this solves a problem. However this makes the code
</span><br>
<span class="quotelev1">&gt;       MPI-implementation dependent. Any idea on more portable options?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance for any comment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Oleg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4945.php">Aurélien Bouteiller: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Previous message:</strong> <a href="4943.php">Jeff Squyres: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4351.php">Oleg Morajko: "[OMPI users] MPI piggyback mechanism"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4945.php">Aurélien Bouteiller: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Reply:</strong> <a href="4945.php">Aurélien Bouteiller: "Re: [OMPI users] MPI piggyback mechanism"</a>
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
