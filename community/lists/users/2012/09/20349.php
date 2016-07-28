<?
$subject_val = "Re: [OMPI users] About MPI_TAG_UB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 09:24:18 2012" -->
<!-- isoreceived="20120928132418" -->
<!-- sent="Fri, 28 Sep 2012 09:24:15 -0400" -->
<!-- isosent="20120928132415" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About MPI_TAG_UB" -->
<!-- id="E19F5D18-F2E2-4062-A14D-388E98215670_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5065A166.1000405_at_ulaval.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-28 09:24:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20350.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20348.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20348.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20352.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Beware that Open MPI uses negative tags for internal uses.  You might conflict with that sometimes.
<br>
<p>On Sep 28, 2012, at 9:08 AM, S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My application has 191 MPI tags allocated with allocateMessageTagHandle, so
</span><br>
<span class="quotelev1">&gt; 7 bits is not enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, tags can be valued from 0 to 2147483647 inclusively with this MPI_TAG_UB
</span><br>
<span class="quotelev1">&gt; value in Open-MPI. I misused the returned pointer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In Open-MPI, MPI_ANY_TAG is -1. I removed the boundary check in MPI_Isend and
</span><br>
<span class="quotelev1">&gt; MPI_Recv to allow values from -2147483648 to 2147483647 inclusively.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://raw.github.com/sebhtml/patches/master/ompi-1.6.2-ray-4096-routing.patch">https://raw.github.com/sebhtml/patches/master/ompi-1.6.2-ray-4096-routing.patch</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As long as my tag is not MPI_ANY_TAG, I guess it should work fine although
</span><br>
<span class="quotelev1">&gt; it is not MPI-compliant. I will test that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 28/09/12 03:50 AM, Iliev, Hristo wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_TAG_UB in Open MPI is INT_MAX == 2^31-1 == 2147483647. The value of
</span><br>
<span class="quotelev2">&gt;&gt; 17438272 (0x10A1640) is a bit strange for MPI_TAG_UB. I would rather say
</span><br>
<span class="quotelev2">&gt;&gt; that it is the value of a pointer to someplace in the heap, i.e. you have
</span><br>
<span class="quotelev2">&gt;&gt; missed the fact that the attribute value as returned by MPI_Comm_get_attr /
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Attr_get is a pointer to the actual value (for MPI_TAG_UB it is a
</span><br>
<span class="quotelev2">&gt;&gt; pointer to int).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_TAG_UB is predefined attribute and according to &#167;8.1.2 of the MPI
</span><br>
<span class="quotelev2">&gt;&gt; standard its value cannot be changed by the user.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You have to find another solution, e.g. reduce the tag space to 7 bits or
</span><br>
<span class="quotelev2">&gt;&gt; put the routing info inside the message payload.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Hristo Iliev
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev2">&gt;&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev2">&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of S&#233;bastien Boisvert
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, September 28, 2012 1:22 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] About MPI_TAG_UB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running Ray (a distributed software in genomics) with Open-MPI on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2048 processes and everything runs fine. Ray has a any-to-any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication pattern.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To avoid using too much memory, I implemented a virtual message router.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without the virtual message router, I get messages like these:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ne] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We did some tests on the Cray XE6 on 4096 processing elements (4096 MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ranks) without the virtual message router and everything runs fine as is.
</span><br>
<span class="quotelev2">&gt;&gt; So
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using the virtual message router is not required.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The real message tag, the real source and the real destination are stored
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MPI tag. I know, this is ugly, but it works. I can not store this
</span><br>
<span class="quotelev2">&gt;&gt; information
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the message buffer because the buffer can be NULL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bits 0 to 7: tag (8 bits, values from 0 to 255, 256 possible values) bits
</span><br>
<span class="quotelev2">&gt;&gt; 8 to 19:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; true source (12 bits, values from 0 to 4095, 4096 possible values) bits 20
</span><br>
<span class="quotelev2">&gt;&gt; to 31:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; true destination (12 bits, values from 0 to 4095, 4096 possible values)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without the virtual router, my code is compliant with the fact that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_TAG_UB,...) is at least
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32767 (my tags are &lt;= 255).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I try jobs with 4096 processes with the virtual message router, I get
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_ERR_TAG: invalid tag.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without the virtual message router I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ne] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With Open-MPI 1.5.4, the upper bound is 17438272 (at least in our build).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That explains MPI_ERR_TAG.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My 2 questions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Is there a better way to store routing information ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Can I create my own communicator and set its MPI_TAG_UB to whatever I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks !
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; S&#233;bastien Boisvert
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph.D. student
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://boisvert.info/">http://boisvert.info/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20350.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20348.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20348.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20352.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
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
