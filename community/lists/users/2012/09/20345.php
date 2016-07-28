<?
$subject_val = "Re: [OMPI users] About MPI_TAG_UB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 03:50:29 2012" -->
<!-- isoreceived="20120928075029" -->
<!-- sent="Fri, 28 Sep 2012 07:50:23 +0000" -->
<!-- isosent="20120928075023" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About MPI_TAG_UB" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC9031429BB_at_rz-mbx1.win.rz.rwth-aachen.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5064DFB2.6040602_at_ulaval.ca" -->
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
<strong>Date:</strong> 2012-09-28 03:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20346.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="20344.php">S&#233;bastien Boisvert: "[OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20344.php">S&#233;bastien Boisvert: "[OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20348.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20348.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>MPI_TAG_UB in Open MPI is INT_MAX == 2^31-1 == 2147483647. The value of
<br>
17438272 (0x10A1640) is a bit strange for MPI_TAG_UB. I would rather say
<br>
that it is the value of a pointer to someplace in the heap, i.e. you have
<br>
missed the fact that the attribute value as returned by MPI_Comm_get_attr /
<br>
MPI_Attr_get is a pointer to the actual value (for MPI_TAG_UB it is a
<br>
pointer to int).
<br>
<p>MPI_TAG_UB is predefined attribute and according to &#167;8.1.2 of the MPI
<br>
standard its value cannot be changed by the user.
<br>
<p>You have to find another solution, e.g. reduce the tag space to 7 bits or
<br>
put the routing info inside the message payload.
<br>
<p>Best regards,
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
&gt; On Behalf Of S&#233;bastien Boisvert
&gt; Sent: Friday, September 28, 2012 1:22 AM
&gt; To: users_at_[hidden]
&gt; Subject: [OMPI users] About MPI_TAG_UB
&gt; 
&gt; Hello,
&gt; 
&gt; I am running Ray (a distributed software in genomics) with Open-MPI on
&gt; 2048 processes and everything runs fine. Ray has a any-to-any
&gt; communication pattern.
&gt; To avoid using too much memory, I implemented a virtual message router.
&gt; 
&gt; Without the virtual message router, I get messages like these:
&gt; 
&gt; [cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_o
&gt; ne] error creating qp errno says Cannot allocate memory
&gt; 
&gt; We did some tests on the Cray XE6 on 4096 processing elements (4096 MPI
&gt; ranks) without the virtual message router and everything runs fine as is.
So
&gt; using the virtual message router is not required.
&gt; 
&gt; The real message tag, the real source and the real destination are stored
in
&gt; the MPI tag. I know, this is ugly, but it works. I can not store this
information
&gt; in the message buffer because the buffer can be NULL.
&gt; 
&gt; bits 0 to 7: tag (8 bits, values from 0 to 255, 256 possible values) bits
8 to 19:
&gt; true source (12 bits, values from 0 to 4095, 4096 possible values) bits 20
to 31:
&gt; true destination (12 bits, values from 0 to 4095, 4096 possible values)
&gt; 
&gt; Without the virtual router, my code is compliant with the fact that
&gt; MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_TAG_UB,...) is at least
&gt; 32767 (my tags are &lt;= 255).
&gt; 
&gt; 
&gt; When I try jobs with 4096 processes with the virtual message router, I get
the
&gt; error:
&gt; 
&gt;     MPI_ERR_TAG: invalid tag.
&gt; 
&gt; Without the virtual message router I get:
&gt; 
&gt; [cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_o
&gt; ne] error creating qp errno says Cannot allocate memory
&gt; 
&gt; With Open-MPI 1.5.4, the upper bound is 17438272 (at least in our build).
&gt; That explains MPI_ERR_TAG.
&gt; 
&gt; 
&gt; My 2 questions:
&gt; 
&gt; 1. Is there a better way to store routing information ?
&gt; 
&gt; 2. Can I create my own communicator and set its MPI_TAG_UB to whatever I
&gt; want ?
&gt; 
&gt; 
&gt; Thanks !
&gt; 
&gt; ***
&gt; S&#233;bastien Boisvert
&gt; Ph.D. student
&gt; <a href="http://boisvert.info/">http://boisvert.info/</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20345/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20346.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="20344.php">S&#233;bastien Boisvert: "[OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20344.php">S&#233;bastien Boisvert: "[OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20348.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20348.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
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
