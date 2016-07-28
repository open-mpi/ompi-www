<?
$subject_val = "[OMPI users] Valgrind Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 14 08:21:57 2008" -->
<!-- isoreceived="20081214132157" -->
<!-- sent="Sun, 14 Dec 2008 14:21:52 +0100" -->
<!-- isosent="20081214132152" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Valgrind Warning" -->
<!-- id="3a37617f0812140521o7ba7ffdcnfba983066094a458_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Valgrind Warning<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-14 08:21:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7534.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Previous message:</strong> <a href="7532.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7534.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Reply:</strong> <a href="7534.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
i have a strage problems with OpenMPI 1.2.5 Intel Compiled when i
<br>
debug my code under Valgrind 3.3. In a very simple ping-pong MPI
<br>
application, i retrieve strange warnings about MPI Communications,
<br>
like MPI_Send,MPI_Recv. Valgrind tells me that there are uninitialized
<br>
values in send/recv buffers, but there are initialized, i'm absolutely
<br>
sure!
<br>
<p>There warnings are detected when my application runs over Infiniband
<br>
net, so i suspect that there are some conflicts between net
<br>
configuration and OpenMPI who confuse Valgrind. Also with OpenMPI 1.26
<br>
and 1.28 i have this behaviour. In fact, if my applications runs into
<br>
the node, without involve communication net, warnings disappears. In
<br>
others MPI applications, every MPI function returns an huge number of
<br>
warnings. That's incredible!
<br>
<p>In the test machine, OPenMPI is compiled with the follows flags:
<br>
<p>&nbsp;--enable-static --with-mpi-f90-size=medium --with-f90-max-array-dim=8
<br>
--disable-ipv6 --with-openib=/usr/local/ofed
<br>
--with-openib-libdir=/usr/local/ofed/lib64
<br>
<p>and debug flags ( -O0 -g)
<br>
<p>In attach at this email, you can find Valgrind report and MPI test application.
<br>
<p>Somebody can you help me? Thanks in advance.
<br>
<pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati_at_[hidden]


</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7533/ping_pong.c">ping_pong.c</a>
</ul>
<!-- attachment="ping_pong.c" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7533/ValgrindReport.18796">ValgrindReport.18796</a>
</ul>
<!-- attachment="ValgrindReport.18796" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7534.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Previous message:</strong> <a href="7532.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7534.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
<li><strong>Reply:</strong> <a href="7534.php">Jeff Squyres: "Re: [OMPI users] Valgrind Warning"</a>
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
