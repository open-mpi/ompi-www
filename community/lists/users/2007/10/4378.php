<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 20:52:11 2007" -->
<!-- isoreceived="20071101005211" -->
<!-- sent="Thu, 1 Nov 2007 01:52:06 +0100" -->
<!-- isosent="20071101005206" -->
<!-- name="Oleg Morajko" -->
<!-- email="olegmorajko_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to construct a datatype over two different arrays?" -->
<!-- id="6ab5deaf0710311752l6bac7e1bsd0ef8242d8757f00_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DC33DE7-84B1-4B10-82A4-BA679E66BA99_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-10-31 20:52:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4379.php">Neeraj Chourasia: "[OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>Previous message:</strong> <a href="4377.php">Jeff Squyres: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>In reply to:</strong> <a href="4374.php">George Bosilca: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4382.php">Jeff Squyres: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4382.php">Jeff Squyres: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>Let me clarify the context of the problem. I'm implementing a MPI piggyback
<br>
mechanism that should allow for attaching extra data to any MPI message. The
<br>
idea is to wrap MPI communication calls with PMPI interface (or with dynamic
<br>
instrumentation or whatsoever) and add/receive extra data in a non expensive
<br>
way. The best solution I have found so far is dynamic datatype wrapping.
<br>
That is when a user calls MPI_Send (datatype, count) I create dynamically a
<br>
new structure type that contains an array [count] of datatype and extra
<br>
data. To avoid copying the original send buffer I use absolute addresses to
<br>
define displacaments in the structure. This works fine for all P2P calls and
<br>
MPI_Bcast. And definitely it has performance benefits when compared to
<br>
copying bufferers or sending an additional message in a different
<br>
communicator. Or would you expect something different?
<br>
<p>The only problem are collective calls like MPI_Gather when a root process
<br>
receives an array of data items. There is no problem to wrap the message on
<br>
the sender side (for each task), but the question is how to define a
<br>
datatype that points both to original receive buffer and extra buffer for
<br>
piggybacked data AND has an adecuate extent to work as an array element.
<br>
<p>The real problem is that a structure datatype { original data, extra data}
<br>
does not have a constant displacement between the original data and extra
<br>
data. Eg. consider original data = receive buffer in MPI_Gather and extra
<br>
data is an array of ints somewhere in memory). So it cannot be directly used
<br>
as an array datatype.
<br>
<p>Any solution? It could be complex, I don't mind ;)
<br>
<p><p>On 11/1/07, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI standard defines the upper bound and the upper bound for
</span><br>
<span class="quotelev1">&gt; similar problems. However, even with all the functions in the MPI
</span><br>
<span class="quotelev1">&gt; standard we cannot describe all types of data. There is always a
</span><br>
<span class="quotelev1">&gt; solution, but sometimes one has to ask if the performance gain is
</span><br>
<span class="quotelev1">&gt; worth the complexity introduced.
</span><br>
<p><p><p>As I said there is always a solution. In fact there are 2 solution,
<br>
<span class="quotelev1">&gt; one somehow optimal the other ... as bad as you can imagine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bad approach:
</span><br>
<span class="quotelev1">&gt;   1. Use an MPI_Type_struct to create exactly what you want, element
</span><br>
<span class="quotelev1">&gt; by element (i.e single pair). This can work in all cases.
</span><br>
<p>&nbsp;&nbsp;2. If the sizeof(int) == sizeof(double) then the displacement inside
<br>
<span class="quotelev1">&gt; each tuple (double_i, int_i) is constant. Therefore, you can start by
</span><br>
<span class="quotelev1">&gt; creating one &quot;single element&quot; type and then use for each send the
</span><br>
<span class="quotelev1">&gt; correct displacement in the array (added to the send buffer,
</span><br>
<span class="quotelev1">&gt; respectively to the receive one).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2007, at 1:40 PM, Oleg Morajko wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have the following problem. There areI two arrays somewere in the
</span><br>
<span class="quotelev2">&gt; &gt; program:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; double weights [MAX_SIZE];
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; int       values [MAX_SIZE];
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I need to be able to send a single pair { weights [i], values [i] }
</span><br>
<span class="quotelev2">&gt; &gt; with a single MPI_Send call Or receive it directly into both arrays
</span><br>
<span class="quotelev2">&gt; &gt; at at given index i. How can I define a datatype that spans this
</span><br>
<span class="quotelev2">&gt; &gt; pair over both arrays?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The only additional constraint it the fact that the memory location
</span><br>
<span class="quotelev2">&gt; &gt; of both arrays is fixed and cannot be changed and I should avoid
</span><br>
<span class="quotelev2">&gt; &gt; extra copies.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any help welcome,
</span><br>
<span class="quotelev2">&gt; &gt; Oleg Morajko
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4378/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4379.php">Neeraj Chourasia: "[OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>Previous message:</strong> <a href="4377.php">Jeff Squyres: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>In reply to:</strong> <a href="4374.php">George Bosilca: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4382.php">Jeff Squyres: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4382.php">Jeff Squyres: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
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
