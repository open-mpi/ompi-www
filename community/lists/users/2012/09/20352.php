<?
$subject_val = "Re: [OMPI users] About MPI_TAG_UB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 10:32:40 2012" -->
<!-- isoreceived="20120928143240" -->
<!-- sent="Fri, 28 Sep 2012 14:32:34 +0000" -->
<!-- isosent="20120928143234" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About MPI_TAG_UB" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC90314916A_at_rz-mbx1.win.rz.rwth-aachen.de" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-28 10:32:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20353.php">S�bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20351.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20348.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20355.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20355.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From my understanding of the Open MPI code, it uses negative tags to implement collective operations and one-sided communication only. Your code might work if you use neither of them but will not be portable, not only across MPI implementations, but also some future change in Open MPI might break it.
</span><br>
<p>Just my &#226;&#130;&#172;0.02.
<br>
<p>Kind regards,
<br>
Hristo Iliev
<br>
<pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
&gt; On Behalf Of S&#195;&#169;bastien Boisvert
&gt; Sent: Friday, September 28, 2012 3:09 PM
&gt; To: users_at_[hidden]
&gt; Subject: Re: [OMPI users] About MPI_TAG_UB
&gt; 
&gt; Hello,
&gt; 
&gt; My application has 191 MPI tags allocated with allocateMessageTagHandle,
&gt; so
&gt; 7 bits is not enough.
&gt; 
&gt; Indeed, tags can be valued from 0 to 2147483647 inclusively with this
&gt; MPI_TAG_UB value in Open-MPI. I misused the returned pointer.
&gt; 
&gt; In Open-MPI, MPI_ANY_TAG is -1. I removed the boundary check in
&gt; MPI_Isend and MPI_Recv to allow values from -2147483648 to 2147483647
&gt; inclusively.
&gt; 
&gt;   <a href="https://raw.github.com/sebhtml/patches/master/ompi-1.6.2-ray-4096">https://raw.github.com/sebhtml/patches/master/ompi-1.6.2-ray-4096</a>-
&gt; routing.patch
&gt; 
&gt; As long as my tag is not MPI_ANY_TAG, I guess it should work fine although it
&gt; is not MPI-compliant. I will test that.
&gt; 
&gt; On 28/09/12 03:50 AM, Iliev, Hristo wrote:
&gt; &gt; Hello,
&gt; &gt;
&gt; &gt; MPI_TAG_UB in Open MPI is INT_MAX == 2^31-1 == 2147483647. The value
&gt; &gt; of
&gt; &gt; 17438272 (0x10A1640) is a bit strange for MPI_TAG_UB. I would rather
&gt; &gt; say that it is the value of a pointer to someplace in the heap, i.e.
&gt; &gt; you have missed the fact that the attribute value as returned by
&gt; &gt; MPI_Comm_get_attr / MPI_Attr_get is a pointer to the actual value (for
&gt; &gt; MPI_TAG_UB it is a pointer to int).
&gt; &gt;
&gt; &gt; MPI_TAG_UB is predefined attribute and according to &#194;&#167;8.1.2 of the MPI
&gt; &gt; standard its value cannot be changed by the user.
&gt; &gt;
&gt; &gt; You have to find another solution, e.g. reduce the tag space to 7 bits
&gt; &gt; or put the routing info inside the message payload.
&gt; &gt;
&gt; &gt; Best regards,
&gt; &gt; Hristo Iliev
&gt; &gt; --
&gt; &gt; Hristo Iliev, Ph.D. -- High Performance Computing RWTH Aachen
&gt; &gt; University, Center for Computing and Communication
&gt; &gt; Rechen- und Kommunikationszentrum der RWTH Aachen Seffenter Weg
&gt; 23,  D
&gt; &gt; 52074  Aachen (Germany)
&gt; &gt;
&gt; &gt;&gt; -----Original Message-----
&gt; &gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open-
&gt; mpi.org]
&gt; &gt;&gt; On Behalf Of S&#195;&#169;bastien Boisvert
&gt; &gt;&gt; Sent: Friday, September 28, 2012 1:22 AM
&gt; &gt;&gt; To: users_at_[hidden]
&gt; &gt;&gt; Subject: [OMPI users] About MPI_TAG_UB
&gt; &gt;&gt;
&gt; &gt;&gt; Hello,
&gt; &gt;&gt;
&gt; &gt;&gt; I am running Ray (a distributed software in genomics) with Open-MPI
&gt; &gt;&gt; on
&gt; &gt;&gt; 2048 processes and everything runs fine. Ray has a any-to-any
&gt; &gt;&gt; communication pattern.
&gt; &gt;&gt; To avoid using too much memory, I implemented a virtual message
&gt; router.
&gt; &gt;&gt;
&gt; &gt;&gt; Without the virtual message router, I get messages like these:
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; [cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_
&gt; &gt;&gt; o ne] error creating qp errno says Cannot allocate memory
&gt; &gt;&gt;
&gt; &gt;&gt; We did some tests on the Cray XE6 on 4096 processing elements (4096
&gt; &gt;&gt; MPI
&gt; &gt;&gt; ranks) without the virtual message router and everything runs fine as is.
&gt; &gt; So
&gt; &gt;&gt; using the virtual message router is not required.
&gt; &gt;&gt;
&gt; &gt;&gt; The real message tag, the real source and the real destination are
&gt; &gt;&gt; stored
&gt; &gt; in
&gt; &gt;&gt; the MPI tag. I know, this is ugly, but it works. I can not store this
&gt; &gt; information
&gt; &gt;&gt; in the message buffer because the buffer can be NULL.
&gt; &gt;&gt;
&gt; &gt;&gt; bits 0 to 7: tag (8 bits, values from 0 to 255, 256 possible values)
&gt; &gt;&gt; bits
&gt; &gt; 8 to 19:
&gt; &gt;&gt; true source (12 bits, values from 0 to 4095, 4096 possible values)
&gt; &gt;&gt; bits 20
&gt; &gt; to 31:
&gt; &gt;&gt; true destination (12 bits, values from 0 to 4095, 4096 possible
&gt; &gt;&gt; values)
&gt; &gt;&gt;
&gt; &gt;&gt; Without the virtual router, my code is compliant with the fact that
&gt; &gt;&gt; MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_TAG_UB,...) is at least
&gt; &gt;&gt; 32767 (my tags are &lt;= 255).
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; When I try jobs with 4096 processes with the virtual message router,
&gt; &gt;&gt; I get
&gt; &gt; the
&gt; &gt;&gt; error:
&gt; &gt;&gt;
&gt; &gt;&gt;     MPI_ERR_TAG: invalid tag.
&gt; &gt;&gt;
&gt; &gt;&gt; Without the virtual message router I get:
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; [cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_
&gt; &gt;&gt; o ne] error creating qp errno says Cannot allocate memory
&gt; &gt;&gt;
&gt; &gt;&gt; With Open-MPI 1.5.4, the upper bound is 17438272 (at least in our build).
&gt; &gt;&gt; That explains MPI_ERR_TAG.
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; My 2 questions:
&gt; &gt;&gt;
&gt; &gt;&gt; 1. Is there a better way to store routing information ?
&gt; &gt;&gt;
&gt; &gt;&gt; 2. Can I create my own communicator and set its MPI_TAG_UB to
&gt; &gt;&gt; whatever I want ?
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; Thanks !
&gt; &gt;&gt;
&gt; &gt;&gt; ***
&gt; &gt;&gt; S&#195;&#169;bastien Boisvert
&gt; &gt;&gt; Ph.D. student
&gt; &gt;&gt; <a href="http://boisvert.info/">http://boisvert.info/</a>
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20352/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20353.php">S�bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20351.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20348.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20355.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20355.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
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
