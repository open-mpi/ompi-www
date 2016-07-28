<?
$subject_val = "[OMPI users] About MPI_TAG_UB";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 27 19:21:51 2012" -->
<!-- isoreceived="20120927232151" -->
<!-- sent="Thu, 27 Sep 2012 19:22:26 -0400" -->
<!-- isosent="20120927232226" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI users] About MPI_TAG_UB" -->
<!-- id="5064DFB2.6040602_at_ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] About MPI_TAG_UB<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-27 19:22:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20345.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20343.php">Ralph Castain: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20345.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20345.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20347.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am running Ray (a distributed software in genomics) with Open-MPI on 2048 
<br>
processes and everything runs fine. Ray has a any-to-any communication pattern.
<br>
To avoid using too much memory, I implemented a virtual message router. 
<br>
<p>Without the virtual message router, I get messages like these:
<br>
<p>[cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
<p>We did some tests on the Cray XE6 on 4096 processing elements (4096 MPI ranks) without
<br>
the virtual message router and everything runs fine as is. So using the virtual
<br>
message router is not required.
<br>
<p>The real message tag, the real source and the real destination are stored
<br>
in the MPI tag. I know, this is ugly, but it works. I can not store this
<br>
information in the message buffer because the buffer can be NULL.
<br>
<p>bits 0 to 7: tag (8 bits, values from 0 to 255, 256 possible values)
<br>
bits 8 to 19: true source (12 bits, values from 0 to 4095, 4096 possible values)
<br>
bits 20 to 31: true destination (12 bits, values from 0 to 4095, 4096 possible values)
<br>
<p>Without the virtual router, my code is compliant with the fact that 
<br>
MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_TAG_UB,...) is at least 32767 (my tags are &lt;= 255).
<br>
<p><p>When I try jobs with 4096 processes with the virtual message router, I get the error:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERR_TAG: invalid tag.
<br>
<p>Without the virtual message router I get:
<br>
<p>[cp2558][[30209,1],0][connect/btl_openib_connect_oob.c:490:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
<p>With Open-MPI 1.5.4, the upper bound is 17438272 (at least in our build). That explains MPI_ERR_TAG.
<br>
<p><p>My 2 questions:
<br>
<p>1. Is there a better way to store routing information ?
<br>
<p>2. Can I create my own communicator and set its MPI_TAG_UB to whatever I want ?
<br>
<p><p>Thanks !
<br>
<p>***
<br>
S&#233;bastien Boisvert
<br>
Ph.D. student
<br>
<a href="http://boisvert.info/">http://boisvert.info/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20345.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20343.php">Ralph Castain: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20345.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20345.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20347.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
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
