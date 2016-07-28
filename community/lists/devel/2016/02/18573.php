<?
$subject_val = "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 22:48:58 2016" -->
<!-- isoreceived="20160211034858" -->
<!-- sent="Thu, 11 Feb 2016 12:48:57 +0900" -->
<!-- isosent="20160211034857" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external" -->
<!-- id="CAAkFZ5v+1rRvNx5anKBOzWz6tvq9MiJfG4H28A5j6CDcCKUW4g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGFyy0zRS7XFDe8EKDziFYocbtbVU8MuCypfwQp2UovJVwuZew_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 22:48:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18574.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18572.php">Michael Rezny: "[OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18572.php">Michael Rezny: "[OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18574.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18574.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18575.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>does your two systems have the same endianness ?
<br>
<p>do you know how openmpi was configure'd on both systems ?
<br>
(is --enable-heterogeneous enabled or disabled on both systems ?)
<br>
<p>fwiw, openmpi 1.6.5 is old now and no more maintained.
<br>
I strongly encourage you to use openmpi 1.10.2
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, February 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am running Ubuntu 14.04 LTS with OpenMPI 1.6.5 and gcc 4.8.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a single rank program which just packs and unpacks two ints using
</span><br>
<span class="quotelev1">&gt; MPI_Pack_external and MPI_Unpack_external
</span><br>
<span class="quotelev1">&gt; the unpacked ints are in the wrong endian order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, on a HPC, (not Ubuntu), using OpenMPI 1.6.5 and gcc 4.8.4 the
</span><br>
<span class="quotelev1">&gt; unpacked ints are correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to get some assistance to track down what is going on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the output from the program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ~/tests/mpi/Pack test1
</span><br>
<span class="quotelev1">&gt; send data 000004d2 0000162e
</span><br>
<span class="quotelev1">&gt; MPI_Pack_external: 0
</span><br>
<span class="quotelev1">&gt; buffer size: 8
</span><br>
<span class="quotelev1">&gt; MPI_unpack_external: 0
</span><br>
<span class="quotelev1">&gt; recv data d2040000 2e160000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here is the source code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;   int numRanks, myRank, error;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int send_data[2] = {1234, 5678};
</span><br>
<span class="quotelev1">&gt;   int recv_data[2];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Aint buffer_size = 1000;
</span><br>
<span class="quotelev1">&gt;   char buffer[buffer_size];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;numRanks);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;myRank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;send data %08x %08x \n&quot;, send_data[0], send_data[1]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Aint position = 0;
</span><br>
<span class="quotelev1">&gt;   error = MPI_Pack_external(&quot;external32&quot;, (void*) send_data, 2, MPI_INT,
</span><br>
<span class="quotelev1">&gt;           buffer, buffer_size, &amp;position);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;MPI_Pack_external: %d\n&quot;, error);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;buffer size: %d\n&quot;, (int) position);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   position = 0;
</span><br>
<span class="quotelev1">&gt;   error = MPI_Unpack_external(&quot;external32&quot;, buffer, buffer_size, &amp;position,
</span><br>
<span class="quotelev1">&gt;           recv_data, 2, MPI_INT);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;MPI_unpack_external: %d\n&quot;, error);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;recv data %08x %08x \n&quot;, recv_data[0], recv_data[1]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18573/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18574.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18572.php">Michael Rezny: "[OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18572.php">Michael Rezny: "[OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18574.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18574.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18575.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
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
