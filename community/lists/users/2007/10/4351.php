<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 30 21:26:07 2007" -->
<!-- isoreceived="20071031012607" -->
<!-- sent="Wed, 31 Oct 2007 02:26:02 +0100" -->
<!-- isosent="20071031012602" -->
<!-- name="Oleg Morajko" -->
<!-- email="olegmorajko_at_[hidden]" -->
<!-- subject="[OMPI users] MPI piggyback mechanism" -->
<!-- id="6ab5deaf0710301826t63453b56y375210315919b8ea_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Oleg Morajko (<em>olegmorajko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-30 21:26:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4352.php">Jeff Squyres: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Previous message:</strong> <a href="4350.php">Clement Kam Man Chu: "[OMPI users] Too many open files Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4944.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4944.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm developing a causality chain tracking library and need a mechanism to
<br>
attach an extra data to every MPI message, so called piggyback mechanism.
<br>
<p>As far as I know there are a few solutions to this problem from which the
<br>
two fundamental ones are the following:
<br>
<p>&nbsp;&nbsp;&nbsp;- Dynamic datatype wrapping - if a user MPI_Send, let's say 1024
<br>
&nbsp;&nbsp;&nbsp;doubles, the wrapped send call implementation dynamically creates a derived
<br>
&nbsp;&nbsp;&nbsp;datatype that is a structure composed of a pointer to 1024 doubles and extra
<br>
&nbsp;&nbsp;&nbsp;fields to be piggybacked. The datatype is constructed with absolute
<br>
&nbsp;&nbsp;&nbsp;addresses to avoid copying the original buffer. The receivers side creates
<br>
&nbsp;&nbsp;&nbsp;the equivalent datatype to receive the original data and extra data. The
<br>
&nbsp;&nbsp;&nbsp;performance of this solution depends on the how good is derived data type
<br>
&nbsp;&nbsp;&nbsp;handling, but seems to be lightweight.
<br>
<p>&nbsp;&nbsp;&nbsp;- Sending extra data in a separate message -- seems this can have much
<br>
&nbsp;&nbsp;&nbsp;more significant overhead
<br>
<p>Do you know any other portable solution?
<br>
<p>I have implemented the first solution for P2P operations and it works pretty
<br>
well. However there are problems with collective operations. There are 2
<br>
classes of collective calls that are problematic:
<br>
<p>&nbsp;&nbsp;&nbsp;1. Single receiver calls, like MPI_Gather. The sender tasks in gather
<br>
&nbsp;&nbsp;&nbsp;can be handled in the same way as a normal send, a data item is wrapped and
<br>
&nbsp;&nbsp;&nbsp;extra data is piggybacked with the message. The problem is at the receiver
<br>
&nbsp;&nbsp;&nbsp;side when a root gathers N data items that must be received in an array big
<br>
&nbsp;&nbsp;&nbsp;enough to receive all items strided by datatype extent.
<br>
<p>&nbsp;&nbsp;&nbsp;In particular, it seems impossible to construct a datatype that
<br>
&nbsp;&nbsp;&nbsp;contains data item and extra data (i.e. structure type with absolute
<br>
&nbsp;&nbsp;&nbsp;addresses) AND make an array of these datatypes separated by a fixed extent.
<br>
&nbsp;&nbsp;&nbsp;For example: data item to receive from every process is a vector of 1024
<br>
&nbsp;&nbsp;&nbsp;doubles. Extra data is a single integer. User provides a receive buffer with
<br>
&nbsp;&nbsp;&nbsp;place for N * 1024 * double. The library allocates an array of N integers to
<br>
&nbsp;&nbsp;&nbsp;receive piggybacked data. How to construct a datatype that can be used to
<br>
&nbsp;&nbsp;&nbsp;receive data in MPI_Gather?
<br>
<p>&nbsp;&nbsp;&nbsp;2. MPI_Reduce calls. There is no problem with datatypes as the
<br>
&nbsp;&nbsp;&nbsp;receiver gets the single data item and not an array as in previous case. The
<br>
&nbsp;&nbsp;&nbsp;problem is the reduction operator itself (MPI_Op) because these operators do
<br>
&nbsp;&nbsp;&nbsp;not work with wrapped data types. So I can create a new operator to
<br>
&nbsp;&nbsp;&nbsp;recognize the wrapped data type that extracts the original data (skipping
<br>
&nbsp;&nbsp;&nbsp;extra data) and performs the original reduction. The point is how to invoke
<br>
&nbsp;&nbsp;&nbsp;the original reduction on an existing datatype. I have found that Open MPI
<br>
&nbsp;&nbsp;&nbsp;calls internally ompi_op_reduce(op, inbuf, rbuf, count, dtype) this solves a
<br>
&nbsp;&nbsp;&nbsp;problem. However this makes the code MPI-implementation dependent. Any idea
<br>
&nbsp;&nbsp;&nbsp;on more portable options?
<br>
<p><p>Thank you in advance for any comment.
<br>
<p>--Oleg
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4351/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4352.php">Jeff Squyres: "Re: [OMPI users] Error initializing openMPI"</a>
<li><strong>Previous message:</strong> <a href="4350.php">Clement Kam Man Chu: "[OMPI users] Too many open files Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4944.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4944.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
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
