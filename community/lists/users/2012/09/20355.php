<?
$subject_val = "Re: [OMPI users] About MPI_TAG_UB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 11:12:35 2012" -->
<!-- isoreceived="20120928151235" -->
<!-- sent="Fri, 28 Sep 2012 11:13:11 -0400" -->
<!-- isosent="20120928151311" -->
<!-- name="S&#195;&#169;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About MPI_TAG_UB" -->
<!-- id="5065BE87.9010001_at_ulaval.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC90314916A_at_rz-mbx1.win.rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] About MPI_TAG_UB<br>
<strong>From:</strong> S&#195;&#169;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-28 11:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20356.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20354.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20352.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20347.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I totally agree. Portability is the most important thing for me. That's why the virtual router
<br>
is not required to run the software.
<br>
<p>On 28/09/12 10:32 AM, Iliev, Hristo wrote:
<br>
<span class="quotelev2">&gt;&gt;From my understanding of the Open MPI code, it uses negative tags to implement collective operations and one-sided communication only. Your code might work if you use neither of them but will not be portable, not only across MPI implementations, but also some future change in Open MPI might break it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just my &#226;&#130;&#172;0.02.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo Iliev
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of S&#195;&#169;bastien Boisvert
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, September 28, 2012 3:09 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] About MPI_TAG_UB
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My application has 191 MPI tags allocated with allocateMessageTagHandle,
</span><br>
<span class="quotelev2">&gt;&gt; so
</span><br>
<span class="quotelev2">&gt;&gt; 7 bits is not enough.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, tags can be valued from 0 to 2147483647 inclusively with this
</span><br>
<span class="quotelev2">&gt;&gt; MPI_TAG_UB value in Open-MPI. I misused the returned pointer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In Open-MPI, MPI_ANY_TAG is -1. I removed the boundary check in
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Isend and MPI_Recv to allow values from -2147483648 to 2147483647
</span><br>
<span class="quotelev2">&gt;&gt; inclusively.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://raw.github.com/sebhtml/patches/master/ompi-1.6.2-ray-4096">https://raw.github.com/sebhtml/patches/master/ompi-1.6.2-ray-4096</a>-
</span><br>
<span class="quotelev2">&gt;&gt; routing.patch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As long as my tag is not MPI_ANY_TAG, I guess it should work fine although it
</span><br>
<span class="quotelev2">&gt;&gt; is not MPI-compliant. I will test that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 28/09/12 03:50 AM, Iliev, Hristo wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_TAG_UB in Open MPI is INT_MAX == 2^31-1 == 2147483647. The value
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 17438272 (0x10A1640) is a bit strange for MPI_TAG_UB. I would rather
</span><br>
<span class="quotelev3">&gt;&gt;&gt; say that it is the value of a pointer to someplace in the heap, i.e.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you have missed the fact that the attribute value as returned by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_get_attr / MPI_Attr_get is a pointer to the actual value (for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_TAG_UB it is a pointer to int).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_TAG_UB is predefined attribute and according to &#194;&#167;8.1.2 of the MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; standard its value cannot be changed by the user.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You have to find another solution, e.g. reduce the tag space to 7 bits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or put the routing info inside the message payload.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hristo Iliev
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hristo Iliev, Ph.D. -- High Performance Computing RWTH Aachen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University, Center for Computing and Communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rechen- und Kommunikationszentrum der RWTH Aachen Seffenter Weg
</span><br>
<span class="quotelev2">&gt;&gt; 23,  D
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 52074  Aachen (Germany)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Behalf Of S&#195;&#169;bastien Boisvert
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Friday, September 28, 2012 1:22 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [OMPI users] About MPI_TAG_UB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am running Ray (a distributed software in genomics) with Open-MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2048 processes and everything runs fine. Ray has a any-to-any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communication pattern.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To avoid using too much memory, I implemented a virtual message
</span><br>
<span class="quotelev2">&gt;&gt; router.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Without the virtual message router, I get messages like these:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; o ne] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We did some tests on the Cray XE6 on 4096 processing elements (4096
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ranks) without the virtual message router and everything runs fine as is.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using the virtual message router is not required.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The real message tag, the real source and the real destination are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stored
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the MPI tag. I know, this is ugly, but it works. I can not store this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the message buffer because the buffer can be NULL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bits 0 to 7: tag (8 bits, values from 0 to 255, 256 possible values)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 to 19:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; true source (12 bits, values from 0 to 4095, 4096 possible values)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bits 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to 31:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; true destination (12 bits, values from 0 to 4095, 4096 possible
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; values)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Without the virtual router, my code is compliant with the fact that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_TAG_UB,...) is at least
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 32767 (my tags are &lt;= 255).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I try jobs with 4096 processes with the virtual message router,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_ERR_TAG: invalid tag.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Without the virtual message router I get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; o ne] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With Open-MPI 1.5.4, the upper bound is 17438272 (at least in our build).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That explains MPI_ERR_TAG.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My 2 questions:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. Is there a better way to store routing information ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. Can I create my own communicator and set its MPI_TAG_UB to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; whatever I want ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; S&#195;&#169;bastien Boisvert
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ph.D. student
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://boisvert.info/">http://boisvert.info/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20356.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20354.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20352.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20347.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
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
