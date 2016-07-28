<?
$subject_val = "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 23:46:36 2016" -->
<!-- isoreceived="20160211044636" -->
<!-- sent="Thu, 11 Feb 2016 15:46:34 +1100" -->
<!-- isosent="20160211044634" -->
<!-- name="Michael Rezny" -->
<!-- email="michael.rezny_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external" -->
<!-- id="CAGFyy0x43fBvZOTbDERO61BAUL1d=LMannt=vuMP+W2oYqKnDg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5v+1rRvNx5anKBOzWz6tvq9MiJfG4H28A5j6CDcCKUW4g_at_mail.gmail.com" -->
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
<strong>From:</strong> Michael Rezny (<em>michael.rezny_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 23:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18576.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18574.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18573.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18576.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18576.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
I can confirm that with a fresh download and build from source for OpenMPI
<br>
1.10.2
<br>
with --enable-heterogeneous
<br>
the unpacked ints are the wrong endian.
<br>
<p>However, without --enable-heterogeneous, the unpacked ints are correct.
<br>
<p>So, this problem still exists in heterogeneous builds with OpenMPI version
<br>
1.10.2.
<br>
<p>kindest regards
<br>
Mike
<br>
<p>On 11 February 2016 at 14:48, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does your two systems have the same endianness ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do you know how openmpi was configure'd on both systems ?
</span><br>
<span class="quotelev1">&gt; (is --enable-heterogeneous enabled or disabled on both systems ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fwiw, openmpi 1.6.5 is old now and no more maintained.
</span><br>
<span class="quotelev1">&gt; I strongly encourage you to use openmpi 1.10.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, February 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I am running Ubuntu 14.04 LTS with OpenMPI 1.6.5 and gcc 4.8.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On a single rank program which just packs and unpacks two ints using
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Pack_external and MPI_Unpack_external
</span><br>
<span class="quotelev2">&gt;&gt; the unpacked ints are in the wrong endian order.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, on a HPC, (not Ubuntu), using OpenMPI 1.6.5 and gcc 4.8.4 the
</span><br>
<span class="quotelev2">&gt;&gt; unpacked ints are correct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to get some assistance to track down what is going on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the output from the program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ~/tests/mpi/Pack test1
</span><br>
<span class="quotelev2">&gt;&gt; send data 000004d2 0000162e
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Pack_external: 0
</span><br>
<span class="quotelev2">&gt;&gt; buffer size: 8
</span><br>
<span class="quotelev2">&gt;&gt; MPI_unpack_external: 0
</span><br>
<span class="quotelev2">&gt;&gt; recv data d2040000 2e160000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And here is the source code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;   int numRanks, myRank, error;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   int send_data[2] = {1234, 5678};
</span><br>
<span class="quotelev2">&gt;&gt;   int recv_data[2];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Aint buffer_size = 1000;
</span><br>
<span class="quotelev2">&gt;&gt;   char buffer[buffer_size];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;numRanks);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;myRank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;send data %08x %08x \n&quot;, send_data[0], send_data[1]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Aint position = 0;
</span><br>
<span class="quotelev2">&gt;&gt;   error = MPI_Pack_external(&quot;external32&quot;, (void*) send_data, 2, MPI_INT,
</span><br>
<span class="quotelev2">&gt;&gt;           buffer, buffer_size, &amp;position);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;MPI_Pack_external: %d\n&quot;, error);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;buffer size: %d\n&quot;, (int) position);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   position = 0;
</span><br>
<span class="quotelev2">&gt;&gt;   error = MPI_Unpack_external(&quot;external32&quot;, buffer, buffer_size,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;position,
</span><br>
<span class="quotelev2">&gt;&gt;           recv_data, 2, MPI_INT);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;MPI_unpack_external: %d\n&quot;, error);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;recv data %08x %08x \n&quot;, recv_data[0], recv_data[1]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18573.php">http://www.open-mpi.org/community/lists/devel/2016/02/18573.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18575/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18576.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18574.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18573.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18576.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18576.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
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
