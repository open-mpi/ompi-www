<?
$subject_val = "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 04:16:16 2016" -->
<!-- isoreceived="20160211091616" -->
<!-- sent="Thu, 11 Feb 2016 18:16:14 +0900" -->
<!-- isosent="20160211091614" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external" -->
<!-- id="CAAkFZ5tRqcB+_thYm=rOt1-cUOHY=m_nrJ7rh01H2WBxBeJ87w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7C5DD473-3FC8-4223-8E0E-924133FA88E7_at_monash.edu" -->
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
<strong>Date:</strong> 2016-02-11 04:16:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18583.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18581.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18580.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18583.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18583.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18591.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>MPI_Pack_external must convert data to big endian, so it can be dumped into
<br>
a file, and be read correctly on big and little endianness arch, and with
<br>
any MPI flavor.
<br>
<p>if you use only one MPI library on one arch, or if data is never
<br>
read/written from/to a file, then it is more efficient to MPI_Pack.
<br>
<p>openmpi is optimized and the data is swapped only when needed.
<br>
so if your cluster is little endian only, MPI_Send and MPI_Recv will never
<br>
byte swap data internally.
<br>
if both ends have different endianness, data is sent in big endian format
<br>
and byte swapped when received only if needed.
<br>
generally speaking, a send/recv requires zero or one byte swap.
<br>
<p>fwiw, we previously had a claim that debian nor Ubuntu have a maintainer
<br>
for openmpi, which would explain why an obsolete version is shipped. I made
<br>
a few researchs and could not find any evidence openmpi is no more
<br>
maintained.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On Thursday, February 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt; thanks for thinking about this in more detail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand what you are saying, but your comments raise some questions
</span><br>
<span class="quotelev1">&gt; in my mind:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If one is in a homogeneous cluster, is it important that, in the case of
</span><br>
<span class="quotelev1">&gt; little-endian, that the data be
</span><br>
<span class="quotelev1">&gt; converted to extern32 format (big-endian), only to be always converted at
</span><br>
<span class="quotelev1">&gt; the receiving rank
</span><br>
<span class="quotelev1">&gt; back to little-endian?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would seem to be inefficient, especially if the site has no need for
</span><br>
<span class="quotelev1">&gt; external MPI access.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, does --enable-heterogeneous do more than put MPI routines using
</span><br>
<span class="quotelev1">&gt; &quot;extern32&quot; into straight pass-through?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back in the old days of PVM, all messages were converted into network
</span><br>
<span class="quotelev1">&gt; order. This had severe performance impacts
</span><br>
<span class="quotelev1">&gt; on little-endian clusters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So much so that a clever way of getting around this was an implementation
</span><br>
<span class="quotelev1">&gt; of &quot;receiver makes right&quot; in which
</span><br>
<span class="quotelev1">&gt; all data was sent in the native format of the sending rank. The receiving
</span><br>
<span class="quotelev1">&gt; rank analysed the message to determine if
</span><br>
<span class="quotelev1">&gt; a conversion was necessary. In those days with Cray format data, it could
</span><br>
<span class="quotelev1">&gt; be more complicated than just byte swapping.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So in essence, how is a balance struck between supporting heterogenous
</span><br>
<span class="quotelev1">&gt; architectures and maximum performance
</span><br>
<span class="quotelev1">&gt; with codes where message passing performance is critical?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a follow up, since I am now at home, this same problem also exists with
</span><br>
<span class="quotelev1">&gt; the Ubuntu 15.10 OpenMP packages
</span><br>
<span class="quotelev1">&gt; which surprisingly are still at 1.6.5, same as 14.04.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, downloading, building, and using the latest stable version of
</span><br>
<span class="quotelev1">&gt; OpenMP solved the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kindest regards
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/02/2016, at 7:31 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it is worst than that ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; without --enable-heterogeneous, it seems the data is not correctly packed
</span><br>
<span class="quotelev1">&gt; (e.g. it is not converted to big endian), at least on a x86_64 arch.
</span><br>
<span class="quotelev1">&gt; unpack looks broken too, but pack followed by unpack does work.
</span><br>
<span class="quotelev1">&gt; that means if you are reading data correctly written in external32e format,
</span><br>
<span class="quotelev1">&gt; it will not be correctly unpacked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with --enable-heterogeneous, it is only half broken
</span><br>
<span class="quotelev1">&gt; (I do not know yet whether pack or unpack is broken ...)
</span><br>
<span class="quotelev1">&gt; and pack followed by unpack does not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will double check that tomorrow
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
<span class="quotelev1">&gt; On Thursday, February 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','michael.rezny_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; you are indeed correct. However, many of our users
</span><br>
<span class="quotelev2">&gt;&gt; have workstations such as me, with OpenMPI provided by installing a
</span><br>
<span class="quotelev2">&gt;&gt; package.
</span><br>
<span class="quotelev2">&gt;&gt; So we don't know what has been configured.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then we have failures, since, for instance, Ubuntu 14.04 by default
</span><br>
<span class="quotelev2">&gt;&gt; appears to have been built
</span><br>
<span class="quotelev2">&gt;&gt; with heterogeneous support! The other (working) machine is a large HPC,
</span><br>
<span class="quotelev2">&gt;&gt; and it seems OpenMPI was built
</span><br>
<span class="quotelev2">&gt;&gt; without heterogeneous support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently we work around the problem for packing and unpacking by having
</span><br>
<span class="quotelev2">&gt;&gt; a compiler switch
</span><br>
<span class="quotelev2">&gt;&gt; that will switch between calls to pack/unpack_external and pac/unpack.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is only now we started to track down what the problem actually is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; kindest regards
</span><br>
<span class="quotelev2">&gt;&gt; Mike
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11 February 2016 at 15:54, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Out of curiosity: if both systems are Intel, they why are you enabling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hetero? You don&#226;&#128;&#153;t need it in that scenario.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Admittedly, we do need to fix the bug - just trying to understand why
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you are configuring that way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 10, 2016, at 8:46 PM, Michael Rezny &lt;michael.rezny_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can confirm that with a fresh download and build from source for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.10.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with --enable-heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the unpacked ints are the wrong endian.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, without --enable-heterogeneous, the unpacked ints are correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, this problem still exists in heterogeneous builds with OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version 1.10.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kindest regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mike
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11 February 2016 at 14:48, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Michael,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does your two systems have the same endianness ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do you know how openmpi was configure'd on both systems ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (is --enable-heterogeneous enabled or disabled on both systems ?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fwiw, openmpi 1.6.5 is old now and no more maintained.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I strongly encourage you to use openmpi 1.10.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thursday, February 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am running Ubuntu 14.04 LTS with OpenMPI 1.6.5 and gcc 4.8.4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On a single rank program which just packs and unpacks two ints using
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Pack_external and MPI_Unpack_external
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the unpacked ints are in the wrong endian order.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, on a HPC, (not Ubuntu), using OpenMPI 1.6.5 and gcc 4.8.4 the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unpacked ints are correct.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is it possible to get some assistance to track down what is going on?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is the output from the program:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  ~/tests/mpi/Pack test1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; send data 000004d2 0000162e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Pack_external: 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; buffer size: 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_unpack_external: 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; recv data d2040000 2e160000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And here is the source code:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   int numRanks, myRank, error;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   int send_data[2] = {1234, 5678};
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   int recv_data[2];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   MPI_Aint buffer_size = 1000;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   char buffer[buffer_size];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;numRanks);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;myRank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   printf(&quot;send data %08x %08x \n&quot;, send_data[0], send_data[1]);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   MPI_Aint position = 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   error = MPI_Pack_external(&quot;external32&quot;, (void*) send_data, 2,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_INT,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           buffer, buffer_size, &amp;position);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   printf(&quot;MPI_Pack_external: %d\n&quot;, error);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   printf(&quot;buffer size: %d\n&quot;, (int) position);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   position = 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   error = MPI_Unpack_external(&quot;external32&quot;, buffer, buffer_size,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &amp;position,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           recv_data, 2, MPI_INT);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   printf(&quot;MPI_unpack_external: %d\n&quot;, error);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   printf(&quot;recv data %08x %08x \n&quot;, recv_data[0], recv_data[1]);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18573.php">http://www.open-mpi.org/community/lists/devel/2016/02/18573.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18575.php">http://www.open-mpi.org/community/lists/devel/2016/02/18575.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18576.php">http://www.open-mpi.org/community/lists/devel/2016/02/18576.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18579.php">http://www.open-mpi.org/community/lists/devel/2016/02/18579.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18582/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18583.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18581.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18580.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18583.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18583.php">Ralph Castain: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18591.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
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
