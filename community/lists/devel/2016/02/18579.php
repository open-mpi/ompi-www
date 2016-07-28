<?
$subject_val = "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 03:31:38 2016" -->
<!-- isoreceived="20160211083138" -->
<!-- sent="Thu, 11 Feb 2016 17:31:37 +0900" -->
<!-- isosent="20160211083137" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external" -->
<!-- id="CAAkFZ5uYF4tgfF_7=zRUxJULhkMBh9WhvHkgbmAJ3n_c6jCXDw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGFyy0zX+7Q9GjTuahauZa+nCvqq+9WpcZYU9Q7KEXbrNxiAaQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-02-11 03:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18580.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18578.php">Lisandro Dalcin: "[OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<li><strong>In reply to:</strong> <a href="18577.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18580.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18580.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18581.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>I think it is worst than that ...
<br>
<p>without --enable-heterogeneous, it seems the data is not correctly packed
<br>
(e.g. it is not converted to big endian), at least on a x86_64 arch.
<br>
unpack looks broken too, but pack followed by unpack does work.
<br>
that means if you are reading data correctly written in external32e format,
<br>
it will not be correctly unpacked.
<br>
<p>with --enable-heterogeneous, it is only half broken
<br>
(I do not know yet whether pack or unpack is broken ...)
<br>
and pack followed by unpack does not work.
<br>
<p>I will double check that tomorrow
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, February 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; you are indeed correct. However, many of our users
</span><br>
<span class="quotelev1">&gt; have workstations such as me, with OpenMPI provided by installing a
</span><br>
<span class="quotelev1">&gt; package.
</span><br>
<span class="quotelev1">&gt; So we don't know what has been configured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then we have failures, since, for instance, Ubuntu 14.04 by default
</span><br>
<span class="quotelev1">&gt; appears to have been built
</span><br>
<span class="quotelev1">&gt; with heterogeneous support! The other (working) machine is a large HPC,
</span><br>
<span class="quotelev1">&gt; and it seems OpenMPI was built
</span><br>
<span class="quotelev1">&gt; without heterogeneous support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently we work around the problem for packing and unpacking by having a
</span><br>
<span class="quotelev1">&gt; compiler switch
</span><br>
<span class="quotelev1">&gt; that will switch between calls to pack/unpack_external and pac/unpack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is only now we started to track down what the problem actually is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kindest regards
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11 February 2016 at 15:54, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Out of curiosity: if both systems are Intel, they why are you enabling
</span><br>
<span class="quotelev2">&gt;&gt; hetero? You don&#226;&#128;&#153;t need it in that scenario.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Admittedly, we do need to fix the bug - just trying to understand why you
</span><br>
<span class="quotelev2">&gt;&gt; are configuring that way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 10, 2016, at 8:46 PM, Michael Rezny &lt;michael.rezny_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','michael.rezny_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt; I can confirm that with a fresh download and build from source for
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.10.2
</span><br>
<span class="quotelev2">&gt;&gt; with --enable-heterogeneous
</span><br>
<span class="quotelev2">&gt;&gt; the unpacked ints are the wrong endian.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, without --enable-heterogeneous, the unpacked ints are correct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, this problem still exists in heterogeneous builds with OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; version 1.10.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; kindest regards
</span><br>
<span class="quotelev2">&gt;&gt; Mike
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11 February 2016 at 14:48, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does your two systems have the same endianness ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do you know how openmpi was configure'd on both systems ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (is --enable-heterogeneous enabled or disabled on both systems ?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fwiw, openmpi 1.6.5 is old now and no more maintained.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I strongly encourage you to use openmpi 1.10.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thursday, February 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','michael.rezny_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am running Ubuntu 14.04 LTS with OpenMPI 1.6.5 and gcc 4.8.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On a single rank program which just packs and unpacks two ints using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Pack_external and MPI_Unpack_external
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the unpacked ints are in the wrong endian order.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, on a HPC, (not Ubuntu), using OpenMPI 1.6.5 and gcc 4.8.4 the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unpacked ints are correct.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it possible to get some assistance to track down what is going on?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the output from the program:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ~/tests/mpi/Pack test1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; send data 000004d2 0000162e
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Pack_external: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buffer size: 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_unpack_external: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recv data d2040000 2e160000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And here is the source code:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   int numRanks, myRank, error;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   int send_data[2] = {1234, 5678};
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   int recv_data[2];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Aint buffer_size = 1000;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   char buffer[buffer_size];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;numRanks);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;myRank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   printf(&quot;send data %08x %08x \n&quot;, send_data[0], send_data[1]);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Aint position = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   error = MPI_Pack_external(&quot;external32&quot;, (void*) send_data, 2, MPI_INT,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           buffer, buffer_size, &amp;position);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   printf(&quot;MPI_Pack_external: %d\n&quot;, error);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   printf(&quot;buffer size: %d\n&quot;, (int) position);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   position = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   error = MPI_Unpack_external(&quot;external32&quot;, buffer, buffer_size,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp;position,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           recv_data, 2, MPI_INT);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   printf(&quot;MPI_unpack_external: %d\n&quot;, error);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   printf(&quot;recv data %08x %08x \n&quot;, recv_data[0], recv_data[1]);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18573.php">http://www.open-mpi.org/community/lists/devel/2016/02/18573.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18575.php">http://www.open-mpi.org/community/lists/devel/2016/02/18575.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18576.php">http://www.open-mpi.org/community/lists/devel/2016/02/18576.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18579/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18580.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18578.php">Lisandro Dalcin: "[OMPI devel] MPI_Get_address() with MPI_BOTTOM"</a>
<li><strong>In reply to:</strong> <a href="18577.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18580.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18580.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18581.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
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
