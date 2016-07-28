<?
$subject_val = "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 23:54:04 2016" -->
<!-- isoreceived="20160211045404" -->
<!-- sent="Wed, 10 Feb 2016 20:54:00 -0800" -->
<!-- isosent="20160211045400" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external" -->
<!-- id="98019DCD-4B4F-4655-BA43-1CE3E46EBC74_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAGFyy0x43fBvZOTbDERO61BAUL1d=LMannt=vuMP+W2oYqKnDg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 23:54:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18577.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18575.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18575.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18577.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18577.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Out of curiosity: if both systems are Intel, they why are you enabling hetero? You don&#226;&#128;&#153;t need it in that scenario.
<br>
<p>Admittedly, we do need to fix the bug - just trying to understand why you are configuring that way.
<br>
<p><p><span class="quotelev1">&gt; On Feb 10, 2016, at 8:46 PM, Michael Rezny &lt;michael.rezny_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt; I can confirm that with a fresh download and build from source for OpenMPI 1.10.2
</span><br>
<span class="quotelev1">&gt; with --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt; the unpacked ints are the wrong endian.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, without --enable-heterogeneous, the unpacked ints are correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, this problem still exists in heterogeneous builds with OpenMPI version 1.10.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; kindest regards
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11 February 2016 at 14:48, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Michael,
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
<span class="quotelev1">&gt; On Thursday, February 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden] &lt;mailto:michael.rezny_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am running Ubuntu 14.04 LTS with OpenMPI 1.6.5 and gcc 4.8.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a single rank program which just packs and unpacks two ints using MPI_Pack_external and MPI_Unpack_external
</span><br>
<span class="quotelev1">&gt; the unpacked ints are in the wrong endian order.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, on a HPC, (not Ubuntu), using OpenMPI 1.6.5 and gcc 4.8.4 the unpacked ints are correct.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18573.php">http://www.open-mpi.org/community/lists/devel/2016/02/18573.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/02/18573.php">http://www.open-mpi.org/community/lists/devel/2016/02/18573.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18575.php">http://www.open-mpi.org/community/lists/devel/2016/02/18575.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18576/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18577.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18575.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18575.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18577.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18577.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
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
