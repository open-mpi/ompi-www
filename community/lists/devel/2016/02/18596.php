<?
$subject_val = "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 08:11:36 2016" -->
<!-- isoreceived="20160212131136" -->
<!-- sent="Sat, 13 Feb 2016 00:12:04 +1100" -->
<!-- isosent="20160212131204" -->
<!-- name="Michael Rezny" -->
<!-- email="michael.rezny_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external" -->
<!-- id="B91431D7-02D4-4040-B356-0545C0CEB244_at_monash.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5vVw8j61zBba7R2w4ohnap+q0QxdOOw4QsUNpoCkHNFKA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-02-12 08:12:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18597.php">George Bosilca: "Re: [OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)"</a>
<li><strong>Previous message:</strong> <a href="18595.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18595.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18581.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
thanks for the detailed explanation.
<br>
<p>Have a nice weekend
<br>
Mike
<br>
<p>On 12/02/2016, at 11:23 PM, Gilles Gouaillardet wrote:
<br>
<p><span class="quotelev1">&gt; Michael,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per the specifications, MPI_Pack_external and MPI_Unpack_external must pack/unpack to/from big endian, regardless the endianness of the host.
</span><br>
<span class="quotelev1">&gt; On a little endian system, byte swapping must occur because this is what you are explicitly requesting.
</span><br>
<span class="quotelev1">&gt; These functions are really meant to be used in order to write a buffer to a file, so it can be read on an other arch, and potentially with an other MPI library (see the man page)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today, this is not the case and these are two bugs.
</span><br>
<span class="quotelev1">&gt; 1. with --enable-heterogeneous, MPI_Pack_external does not do any byte swapping on little endian arch, so your test fails.
</span><br>
<span class="quotelev1">&gt; 2. without --enable-heterogeneous, nor MPI_Pack_external nor MPI_Unpack_external does any byte swapping. Even if your test is working fine, keep in mind the buffer is not in big endian format, and should not be dumped into a file if you plan to read it later with a bug free MPI_Unpack_external.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once the bugs are fixed,
</span><br>
<span class="quotelev1">&gt; If you want to run on a heterogeneous cluster, you have to
</span><br>
<span class="quotelev1">&gt; - configure with --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt; - use MPI_Pack_external and MPI_unpack_external if you want to pack a message, send it to an other host with type MPI_PACKED, and unpack it there.
</span><br>
<span class="quotelev1">&gt; - not use MPI_Pack/MPI_Unpack to send/recv messages between hosts with different endianness.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are only transferring predefined and derived datatypes, you have nothing to do,
</span><br>
<span class="quotelev1">&gt; Openmpi will automatically swap bytes on the receiver side if needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want to run on a homogeneous system, you do not need --enable-heterogeneous, and you can use MPI_Pack/MPI_Unpack, that is more efficient than MPI_Pack_external/MPI_Unpack_external to send/recv messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the time being, you are not able to write portable data with MPI_Pack_external.
</span><br>
<span class="quotelev1">&gt; The easiest way is to run on a homogeneous cluster, configure openmpi without --enable-heterogeneous and without --enable-debug, so pack/unpack will work regardless you use the external or the non external subroutines.
</span><br>
<span class="quotelev1">&gt; Generally speaking, I recommend you use derived datatypes instead of manually packing/unpacking data to/from buffers.
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
<span class="quotelev1">&gt; On Friday, February 12, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt; I am misunderstanding something here. What you are now saying seems, to me, to be at odds with what you said previously.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assume the situation where both sender and receiver are little-endian, and discussing only MPI_Pack_external, and MPI_Unpack_external
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider case 1 --enable-heterogeneous:
</span><br>
<span class="quotelev1">&gt; In your previous email I understood that &quot;receiver make right&quot; was being implemented
</span><br>
<span class="quotelev1">&gt; So, sender does not byte-swap, and message is sent in (native) little-endian format.
</span><br>
<span class="quotelev1">&gt; Receiver recognises the received message is in little-endian format and since this is also its native format, no byte swap is needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider case 2 --disable-heterogeneous
</span><br>
<span class="quotelev1">&gt; It seems strange, that, in this case, any byte swapping would ever need to occur.
</span><br>
<span class="quotelev1">&gt; One is assuming a homogeneous system and sender and receiver will always be using their native format.
</span><br>
<span class="quotelev1">&gt; i.e, exactly the same as MPI_Pack and MPI_Unpack.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; kindest regards
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/02/2016, at 9:25 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Michael,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; byte swapping only occurs if you invoke MPI_Pack_external and MPI_Unpack_external on little endianness systems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Pack and MPI_Unpack uses the same engine that MPI_Send and MPI_Recv and this does not involve any byte swapping if both ends have the same endianness.
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
<span class="quotelev2">&gt;&gt; On Friday, February 12, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; oh, that is good news! The process is meant to be implementing &quot;receiver makes right&quot; which is good news for efficiency.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But, in the second case, without --enable-heterogeneous, are you saying that on little-endian machines, byte swapping
</span><br>
<span class="quotelev2">&gt;&gt; is meant to always occur? That seems most odd. I would have thought that if one only wants to work and then to configure
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI for this mode, then there is no need to check at the receiving end whether byte-swapping is needed or not. It will be assumed
</span><br>
<span class="quotelev2">&gt;&gt; that both sender and receiver are agreed on the format, whatever it is. On a homogeneous little-endian HPC cluster one would not want
</span><br>
<span class="quotelev2">&gt;&gt; the extra overhead of two conversions for every packed message.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible that the assert has been implemented incorrectly in this case?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is absolutely no urgency with regard to a fix. Thanks to your quick response, we now understand what is causing
</span><br>
<span class="quotelev2">&gt;&gt; the problem and are in the process of implementing a test in ./configure to determine if the bug is present, and if so,
</span><br>
<span class="quotelev2">&gt;&gt; add a compiler flag to switch to using MPI_Pack and MPI_Unpack.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It would be good if you would be kind enough to let me know when a fix is available and I will download, build,
</span><br>
<span class="quotelev2">&gt;&gt; and test it on our application. Then this version can be installed as the default.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Once again, many thanks for your prompt and most helpful responses.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; warmest regards
</span><br>
<span class="quotelev2">&gt;&gt; MIke
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 12/02/2016, at 7:03 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i'd like to correct what i wrote earlier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in heterogeneous clusters, data is sent &quot;as is&quot; (e.g. no byte swapping) and it is byte swapped when received and only if needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with --enable-heterogeneous, MPI_Unpack_external is working, but MPI_Pack_external is broken
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g. no byte swapping occurs on little endian arch) since we internall use the similar mechanism used to send data. that is a bug and i will work on that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without --enable-heterogeneous, MPI_Pack_external nor MPI_Unpack_external do any byte swapping and they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are both broken. fwiw, it you configure'd with --enable-debug, you would have ran into an assert error (e.g. crash).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i will work on a fix, but it might take some time before it is ready
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/11/2016 6:16 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Michael,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Pack_external must convert data to big endian, so it can be dumped into a file, and be read correctly on big and little endianness arch, and with any MPI flavor.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if you use only one MPI library on one arch, or if data is never read/written from/to a file, then it is more efficient to MPI_Pack.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi is optimized and the data is swapped only when needed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so if your cluster is little endian only, MPI_Send and MPI_Recv will never byte swap data internally.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if both ends have different endianness, data is sent in big endian format and byte swapped when received only if needed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; generally speaking, a send/recv requires zero or one byte swap.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fwiw, we previously had a claim that debian nor Ubuntu have a maintainer for openmpi, which would explain why an obsolete version is shipped. I made a few researchs and could not find any evidence openmpi is no more maintained.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thursday, February 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks for thinking about this in more detail.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I understand what you are saying, but your comments raise some questions in my mind:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If one is in a homogeneous cluster, is it important that, in the case of little-endian, that the data be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; converted to extern32 format (big-endian), only to be always converted at the receiving rank
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; back to little-endian?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This would seem to be inefficient, especially if the site has no need for external MPI access.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, does --enable-heterogeneous do more than put MPI routines using &quot;extern32&quot; into straight pass-through?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Back in the old days of PVM, all messages were converted into network order. This had severe performance impacts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on little-endian clusters.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So much so that a clever way of getting around this was an implementation of &quot;receiver makes right&quot; in which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all data was sent in the native format of the sending rank. The receiving rank analysed the message to determine if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a conversion was necessary. In those days with Cray format data, it could be more complicated than just byte swapping.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So in essence, how is a balance struck between supporting heterogenous architectures and maximum performance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with codes where message passing performance is critical?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As a follow up, since I am now at home, this same problem also exists with the Ubuntu 15.10 OpenMP packages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which surprisingly are still at 1.6.5, same as 14.04.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Again, downloading, building, and using the latest stable version of OpenMP solved the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; kindest regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mike
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 11/02/2016, at 7:31 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Michael,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think it is worst than that ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; without --enable-heterogeneous, it seems the data is not correctly packed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (e.g. it is not converted to big endian), at least on a x86_64 arch.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unpack looks broken too, but pack followed by unpack does work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that means if you are reading data correctly written in external32e format,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it will not be correctly unpacked.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with --enable-heterogeneous, it is only half broken
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (I do not know yet whether pack or unpack is broken ...)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and pack followed by unpack does not work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I will double check that tomorrow
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Thursday, February 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you are indeed correct. However, many of our users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have workstations such as me, with OpenMPI provided by installing a package.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So we don't know what has been configured.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then we have failures, since, for instance, Ubuntu 14.04 by default appears to have been built
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with heterogeneous support! The other (working) machine is a large HPC, and it seems OpenMPI was built
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; without heterogeneous support.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Currently we work around the problem for packing and unpacking by having a compiler switch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that will switch between calls to pack/unpack_external and pac/unpack.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It is only now we started to track down what the problem actually is.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; kindest regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mike
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 11 February 2016 at 15:54, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Out of curiosity: if both systems are Intel, they why are you enabling hetero? You don&#146;t need it in that scenario.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Admittedly, we do need to fix the bug - just trying to understand why you are configuring that way.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Feb 10, 2016, at 8:46 PM, Michael Rezny &lt;michael.rezny_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I can confirm that with a fresh download and build from source for OpenMPI 1.10.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with --enable-heterogeneous
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the unpacked ints are the wrong endian.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, without --enable-heterogeneous, the unpacked ints are correct.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So, this problem still exists in heterogeneous builds with OpenMPI version 1.10.2.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; kindest regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mike
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 11 February 2016 at 14:48, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Michael,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; does your two systems have the same endianness ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; do you know how openmpi was configure'd on both systems ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (is --enable-heterogeneous enabled or disabled on both systems ?)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fwiw, openmpi 1.6.5 is old now and no more maintained.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I strongly encourage you to use openmpi 1.10.2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Thursday, February 11, 2016, Michael Rezny &lt;michael.rezny_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am running Ubuntu 14.04 LTS with OpenMPI 1.6.5 and gcc 4.8.4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On a single rank program which just packs and unpacks two ints using MPI_Pack_external and MPI_Unpack_external
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the unpacked ints are in the wrong endian order.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, on a HPC, (not Ubuntu), using OpenMPI 1.6.5 and gcc 4.8.4 the unpacked ints are correct.
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   error = MPI_Pack_external(&quot;external32&quot;, (void*) send_data, 2, MPI_INT,
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   error = MPI_Unpack_external(&quot;external32&quot;, buffer, buffer_size, &amp;position,
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18573.php">http://www.open-mpi.org/community/lists/devel/2016/02/18573.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18575.php">http://www.open-mpi.org/community/lists/devel/2016/02/18575.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18576.php">http://www.open-mpi.org/community/lists/devel/2016/02/18576.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18579.php">http://www.open-mpi.org/community/lists/devel/2016/02/18579.php</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18582.php">http://www.open-mpi.org/community/lists/devel/2016/02/18582.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18591.php">http://www.open-mpi.org/community/lists/devel/2016/02/18591.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18593.php">http://www.open-mpi.org/community/lists/devel/2016/02/18593.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18595.php">http://www.open-mpi.org/community/lists/devel/2016/02/18595.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18597.php">George Bosilca: "Re: [OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)"</a>
<li><strong>Previous message:</strong> <a href="18595.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<li><strong>In reply to:</strong> <a href="18595.php">Gilles Gouaillardet: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18581.php">Michael Rezny: "Re: [OMPI devel] Error using MPI_Pack_external / MPI_Unpack_external"</a>
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
