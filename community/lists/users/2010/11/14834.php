<?
$subject_val = "[OMPI users] Infiniband problem, kernel mismatch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 19:03:40 2010" -->
<!-- isoreceived="20101119000340" -->
<!-- sent="Fri, 19 Nov 2010 09:03:35 +0900" -->
<!-- isosent="20101119000335" -->
<!-- name="HeeJin Kim" -->
<!-- email="biduri_at_[hidden]" -->
<!-- subject="[OMPI users] Infiniband problem, kernel mismatch" -->
<!-- id="AANLkTinCt3WC=50GMYDLh31faGiMv1EVMwAXvV43-x7h_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Infiniband problem, kernel mismatch<br>
<strong>From:</strong> HeeJin Kim (<em>biduri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 19:03:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14835.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14833.php">Eugene Loh: "Re: [OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14863.php">Jeff Squyres: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>Reply:</strong> <a href="14863.php">Jeff Squyres: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14986.php">Peter Kjellström: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear,
<br>
<p>I'm using Mellanox infiniband network card and trying to run it with
<br>
openmpi.
<br>
The problem is that I can connect and communicate between nodes, but I'm not
<br>
sure whether it is in a correct state or not.
<br>
<p>I have two version of openmpi, one is compiled with mca-btl-openib and the
<br>
other is without btl-openib.(I checked it in ompi_info)
<br>
And my jobs are running well using the openmpi without btl-openib,
<br>
but when I run the exactly same job using openmpi with btl-openmpi, I meet
<br>
the  following error.
<br>
<p>*   mlx4: There is a mismatch between the kernel and the userspace
<br>
libraries: Kernel does not support XRC. Exiting.*
<br>
<p>and the following is written in another log file
<br>
*   CMA: unable to open RDMA device*
<br>
<p>What I'm thinking is that the infiniband card is installed but it doesn't
<br>
work in correct mode.
<br>
My linux kernel version is *2.6.18-164.el5*, and installed ofed
<br>
version is *kernel-ib-pp-1.4.1-ofed20090528r1.4.1sgi605r1.rhel5
<br>
.*
<br>
<p>Thanks,
<br>
<p>Heejin
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14834/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14835.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14833.php">Eugene Loh: "Re: [OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14863.php">Jeff Squyres: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>Reply:</strong> <a href="14863.php">Jeff Squyres: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14986.php">Peter Kjellström: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
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
