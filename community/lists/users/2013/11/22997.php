<?
$subject_val = "[OMPI users] MPI Java bindings compile errors and missing datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 09:04:50 2013" -->
<!-- isoreceived="20131115140450" -->
<!-- sent="Fri, 15 Nov 2013 15:04:30 +0100" -->
<!-- isosent="20131115140430" -->
<!-- name="Christoffer Hamberg" -->
<!-- email="christoffer.hamberg_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Java bindings compile errors and missing datatype" -->
<!-- id="CAK2RZyx+-e1RG5eh42EbNp=qYCR4=Ed455N=E7mbLS0qjL=O3A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI Java bindings compile errors and missing datatype<br>
<strong>From:</strong> Christoffer Hamberg (<em>christoffer.hamberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-15 09:04:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22998.php">Rob Latham: "Re: [OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<li><strong>Previous message:</strong> <a href="22996.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22999.php">Ralph Castain: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>Reply:</strong> <a href="22999.php">Ralph Castain: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm currently trying to get the included java bindings running but as I've
<br>
mentioned in a previous post I've had some problems.
<br>
<p>./configure --prefix=/opt/openmpi-1.9-java --without-openib --enable-static
<br>
--with-threads=posix --enable-mpi-thread-multiple --enable-mpi-java
<br>
--with-jdk-bindir=/usr/lib/jvm/java-7-openjdk-armhf/bin
<br>
--with-jdk-headers=/usr/lib/jvm/java-7-openjdk-armhf/include
<br>
<p>The configure succeeds without any errors, but the build breaks in
<br>
ompi/mpi/java/c since the compiler doesn't include the jdk-headers. I fixed
<br>
the corresponding Makefile to include it and it works.
<br>
<p>The second error I get is in ompi/tools/wrappers/Makefile where it sets:
<br>
am__append_1 = mpijavac.1
<br>
am__append_2 = mpijavac.1
<br>
<p>shouldn't this be mpijavac.pl instead?
<br>
<p>I changed it to .pl and it seems to build with any more errors, &quot;mpirun
<br>
java&quot; works fine for some simple Java tests.
<br>
<p>After this I tried some other tests using the MPI.OBJECT datatype, just to
<br>
discover that it wasn't supported. I saw that it was included in mpiJava
<br>
1.2 and the current mpiJava in OMPI is 1.1(?). I guess the java bindings
<br>
aren't that prioritized?
<br>
<p>Do you have any advice for me to do, should I try to update the bindings or
<br>
do you have any other recommendations how to get it running?
<br>
<p>Regards,
<br>
Christoffer Hamberg
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22998.php">Rob Latham: "Re: [OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<li><strong>Previous message:</strong> <a href="22996.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22999.php">Ralph Castain: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>Reply:</strong> <a href="22999.php">Ralph Castain: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
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
