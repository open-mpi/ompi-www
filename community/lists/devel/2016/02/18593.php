<?
$subject_val = "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 05:25:47 2016" -->
<!-- isoreceived="20160212102547" -->
<!-- sent="Fri, 12 Feb 2016 19:25:45 +0900" -->
<!-- isosent="20160212102545" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external" -->
<!-- id="CAAkFZ5v8qzwzzNb1B=Ezequ3Js9hth5g8PKN6W+6NbODPJDMVg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EE9EDFE5-1AEA-4B2B-9745-D1214BC6EA27_at_monash.edu" -->
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
<strong>Date:</strong> 2016-02-12 05:25:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18594.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18592.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18592.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18594.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18594.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>byte swapping only occurs if you invoke MPI_Pack_external and
<br>
MPI_Unpack_external on little endianness systems.
<br>
<p>MPI_Pack and MPI_Unpack uses the same engine that MPI_Send and MPI_Recv and
<br>
this does not involve any byte swapping if both ends have the same
<br>
endianness.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, February 12, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; oh, that is good news! The process is meant to be implementing &quot;receiver
</span><br>
<span class="quotelev1">&gt; makes right&quot; which is good news for efficiency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, in the second case, without --enable-heterogeneous, are you saying
</span><br>
<span class="quotelev1">&gt; that on little-endian machines, byte swapping
</span><br>
<span class="quotelev1">&gt; is meant to always occur? That seems most odd. I would have thought that
</span><br>
<span class="quotelev1">&gt; if one only wants to work and then to configure
</span><br>
<span class="quotelev1">&gt; OpenMPI for this mode, then there is no need to check at the receiving end
</span><br>
<span class="quotelev1">&gt; whether byte-swapping is needed or not. It will be assumed
</span><br>
<span class="quotelev1">&gt; that both sender and receiver are agreed on the format, whatever it is. On
</span><br>
<span class="quotelev1">&gt; a homogeneous little-endian HPC cluster one would not want
</span><br>
<span class="quotelev1">&gt; the extra overhead of two conversions for every packed message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible that the assert has been implemented incorrectly in this
</span><br>
<span class="quotelev1">&gt; case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is absolutely no urgency with regard to a fix. Thanks to your quick
</span><br>
<span class="quotelev1">&gt; response, we now understand what is causing
</span><br>
<span class="quotelev1">&gt; the problem and are in the process of implementing a test in ./configure
</span><br>
<span class="quotelev1">&gt; to determine if the bug is present, and if so,
</span><br>
<span class="quotelev1">&gt; add a compiler flag to switch to using MPI_Pack and MPI_Unpack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be good if you would be kind enough to let me know when a fix is
</span><br>
<span class="quotelev1">&gt; available and I will download, build,
</span><br>
<span class="quotelev1">&gt; and test it on our application. Then this version can be installed as the
</span><br>
<span class="quotelev1">&gt; default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once again, many thanks for your prompt and most helpful responses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; warmest regards
</span><br>
<span class="quotelev1">&gt; MIke
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/02/2016, at 7:03 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'd like to correct what i wrote earlier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in heterogeneous clusters, data is sent &quot;as is&quot; (e.g. no byte swapping)
</span><br>
<span class="quotelev1">&gt; and it is byte swapped when received and only if needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with --enable-heterogeneous, MPI_Unpack_external is working, but
</span><br>
<span class="quotelev1">&gt; MPI_Pack_external is broken
</span><br>
<span class="quotelev1">&gt; (e.g. no byte swapping occurs on little endian arch) since we internall
</span><br>
<span class="quotelev1">&gt; use the similar mechanism used to send data. that is a bug and i will work
</span><br>
<span class="quotelev1">&gt; on that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; without --enable-heterogeneous, MPI_Pack_external nor MPI_Unpack_external
</span><br>
<span class="quotelev1">&gt; do any byte swapping and they
</span><br>
<span class="quotelev1">&gt; are both broken. fwiw, it you configure'd with --enable-debug, you would
</span><br>
<span class="quotelev1">&gt; have ran into an assert error (e.g. crash).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i will work on a fix, but it might take some time before it is ready
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; On 2/11/2016 6:16 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Pack_external must convert data to big endian, so it can be dumped
</span><br>
<span class="quotelev1">&gt; into a file, and be read correctly on big and little endianness arch, and
</span><br>
<span class="quotelev1">&gt; with any MPI flavor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you use only one MPI library on one arch, or if data is never
</span><br>
<span class="quotelev1">&gt; read/written from/to a file, then it is more efficient to MPI_Pack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi is optimized and the data is swapped only when needed.
</span><br>
<span class="quotelev1">&gt; so if your cluster is little endian only, MPI_Send and MPI_Recv will never
</span><br>
<span class="quotelev1">&gt; byte swap data internally.
</span><br>
<span class="quotelev1">&gt; if both ends have different endianness, data is sent in big endian format
</span><br>
<span class="quotelev1">&gt; and byte swapped when received only if needed.
</span><br>
<span class="quotelev1">&gt; generally speaking, a send/recv requires zero or one byte swap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fwiw, we previously had a claim that debian nor Ubuntu have a maintainer
</span><br>
<span class="quotelev1">&gt; for openmpi, which would explain why an obsolete version is shipped. I made
</span><br>
<span class="quotelev1">&gt; a few researchs and could not find any evidence openmpi is no more
</span><br>
<span class="quotelev1">&gt; maintained.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, February 11, 2016, Michael Rezny &lt;
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','michael.rezny_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; michael.rezny_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','michael.rezny_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt; thanks for thinking about this in more detail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand what you are saying, but your comments raise some questions
</span><br>
<span class="quotelev2">&gt;&gt; in my mind:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If one is in a homogeneous cluster, is it important that, in the case of
</span><br>
<span class="quotelev2">&gt;&gt; little-endian, that the data be
</span><br>
<span class="quotelev2">&gt;&gt; converted to extern32 format (big-endian), only to be always converted at
</span><br>
<span class="quotelev2">&gt;&gt; the receiving rank
</span><br>
<span class="quotelev2">&gt;&gt; back to little-endian?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This would seem to be inefficient, especially if the site has no need for
</span><br>
<span class="quotelev2">&gt;&gt; external MPI access.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, does --enable-heterogeneous do more than put MPI routines using
</span><br>
<span class="quotelev2">&gt;&gt; &quot;extern32&quot; into straight pass-through?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Back in the old days of PVM, all messages were converted into network
</span><br>
<span class="quotelev2">&gt;&gt; order. This had severe performance impacts
</span><br>
<span class="quotelev2">&gt;&gt; on little-endian clusters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So much so that a clever way of getting around this was an implementation
</span><br>
<span class="quotelev2">&gt;&gt; of &quot;receiver makes right&quot; in which
</span><br>
<span class="quotelev2">&gt;&gt; all data was sent in the native format of the sending rank. The receiving
</span><br>
<span class="quotelev2">&gt;&gt; rank analysed the message to determine if
</span><br>
<span class="quotelev2">&gt;&gt; a conversion was necessary. In those days with Cray format data, it could
</span><br>
<span class="quotelev2">&gt;&gt; be more complicated than just byte swapping.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So in essence, how is a balance struck between supporting heterogenous
</span><br>
<span class="quotelev2">&gt;&gt; architectures and maximum performance
</span><br>
<span class="quotelev2">&gt;&gt; with codes where message passing performance is critical?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a follow up, since I am now at home, this same problem also exists
</span><br>
<span class="quotelev2">&gt;&gt; with the Ubuntu 15.10 OpenMP packages
</span><br>
<span class="quotelev2">&gt;&gt; which surprisingly are still at 1.6.5, same as 14.04.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, downloading, building, and using the latest stable version of
</span><br>
<span class="quotelev2">&gt;&gt; OpenMP solved the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; kindest regards
</span><br>
<span class="quotelev2">&gt;&gt; Mike
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/02/2016, at 7:31 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think it is worst than that ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; without --enable-heterogeneous, it seems the data is not correctly packed
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. it is not converted to big endian), at least on a x86_64 arch.
</span><br>
<span class="quotelev2">&gt;&gt; unpack looks broken too, but pack followed by unpack does work.
</span><br>
<span class="quotelev2">&gt;&gt; that means if you are reading data correctly written in external32e
</span><br>
<span class="quotelev2">&gt;&gt; format,
</span><br>
<span class="quotelev2">&gt;&gt; it will not be correctly unpacked.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with --enable-heterogeneous, it is only half broken
</span><br>
<span class="quotelev2">&gt;&gt; (I do not know yet whether pack or unpack is broken ...)
</span><br>
<span class="quotelev2">&gt;&gt; and pack followed by unpack does not work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will double check that tomorrow
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thursday, February 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you are indeed correct. However, many of our users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have workstations such as me, with OpenMPI provided by installing a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; package.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So we don't know what has been configured.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then we have failures, since, for instance, Ubuntu 14.04 by default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appears to have been built
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with heterogeneous support! The other (working) machine is a large HPC,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and it seems OpenMPI was built
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without heterogeneous support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently we work around the problem for packing and unpacking by having
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a compiler switch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that will switch between calls to pack/unpack_external and pac/unpack.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is only now we started to track down what the problem actually is.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kindest regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mike
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11 February 2016 at 15:54, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Out of curiosity: if both systems are Intel, they why are you enabling
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hetero? You don&#226;&#128;&#153;t need it in that scenario.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Admittedly, we do need to fix the bug - just trying to understand why
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you are configuring that way.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 10, 2016, at 8:46 PM, Michael Rezny &lt;michael.rezny_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','michael.rezny_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can confirm that with a fresh download and build from source for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI 1.10.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with --enable-heterogeneous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the unpacked ints are the wrong endian.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, without --enable-heterogeneous, the unpacked ints are correct.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, this problem still exists in heterogeneous builds with OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version 1.10.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; kindest regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mike
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 11 February 2016 at 14:48, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Michael,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; does your two systems have the same endianness ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; do you know how openmpi was configure'd on both systems ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (is --enable-heterogeneous enabled or disabled on both systems ?)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fwiw, openmpi 1.6.5 is old now and no more maintained.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I strongly encourage you to use openmpi 1.10.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Thursday, February 11, 2016, Michael Rezny &lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; michael.rezny_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','michael.rezny_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am running Ubuntu 14.04 LTS with OpenMPI 1.6.5 and gcc 4.8.4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On a single rank program which just packs and unpacks two ints using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Pack_external and MPI_Unpack_external
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the unpacked ints are in the wrong endian order.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, on a HPC, (not Ubuntu), using OpenMPI 1.6.5 and gcc 4.8.4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the unpacked ints are correct.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is it possible to get some assistance to track down what is going on?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here is the output from the program:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  ~/tests/mpi/Pack test1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; send data 000004d2 0000162e
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Pack_external: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; buffer size: 8
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_unpack_external: 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; recv data d2040000 2e160000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; And here is the source code:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   int numRanks, myRank, error;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   int send_data[2] = {1234, 5678};
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   int recv_data[2];
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPI_Aint buffer_size = 1000;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   char buffer[buffer_size];
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;numRanks);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;myRank);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   printf(&quot;send data %08x %08x \n&quot;, send_data[0], send_data[1]);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPI_Aint position = 0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   error = MPI_Pack_external(&quot;external32&quot;, (void*) send_data, 2,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_INT,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           buffer, buffer_size, &amp;position);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   printf(&quot;MPI_Pack_external: %d\n&quot;, error);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   printf(&quot;buffer size: %d\n&quot;, (int) position);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   position = 0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   error = MPI_Unpack_external(&quot;external32&quot;, buffer, buffer_size,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &amp;position,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           recv_data, 2, MPI_INT);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   printf(&quot;MPI_unpack_external: %d\n&quot;, error);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   printf(&quot;recv data %08x %08x \n&quot;, recv_data[0], recv_data[1]);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/02/18573.php">http://www.open-mpi.org/community/lists/devel/2016/02/18573.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18573.php">http://www.open-mpi.org/community/lists/devel/2016/02/18573.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/02/18575.php">http://www.open-mpi.org/community/lists/devel/2016/02/18575.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18575.php">http://www.open-mpi.org/community/lists/devel/2016/02/18575.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/02/18576.php">http://www.open-mpi.org/community/lists/devel/2016/02/18576.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18576.php">http://www.open-mpi.org/community/lists/devel/2016/02/18576.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18579.php">http://www.open-mpi.org/community/lists/devel/2016/02/18579.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18582.php">http://www.open-mpi.org/community/lists/devel/2016/02/18582.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18591.php">http://www.open-mpi.org/community/lists/devel/2016/02/18591.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18593/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18594.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Previous message:</strong> <a href="18592.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18592.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18594.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>Reply:</strong> <a href="18594.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
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
