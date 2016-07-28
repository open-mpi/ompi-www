<?
$subject_val = "[OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 21 01:01:52 2013" -->
<!-- isoreceived="20130721050152" -->
<!-- sent="Sun, 21 Jul 2013 01:01:48 -0400" -->
<!-- isosent="20130721050148" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0" -->
<!-- id="CA+ssbKUQKwCGC8NF4trT=wVRRMCsUwR51xGSYZoFFkyLKAXVzw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-21 01:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22358.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22356.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22370.php">Ralph Castain: "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<li><strong>Reply:</strong> <a href="22370.php">Ralph Castain: "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I obtained the nightly build openmpi-1.9a1r28881 (on 7/19/13) and built it
<br>
with java enabled using,
<br>
<p>./configure --enable-mpi-java --prefix=/N/u/sekanaya/build
<br>
<p>Then I wrote a simple MPI program to print the rank of the process,
<br>
following user guide from <a href="http://www.open-mpi.org/papers/mpi-java-spec/">http://www.open-mpi.org/papers/mpi-java-spec/</a>
<br>
<p>I built my code using mpijavac and then tried running it as,
<br>
<p>mpirun -np 2 java Main
<br>
<p>where Main is my class name (not in a package) and I was running inside the
<br>
folder containing Main.class.
<br>
<p>I get the following error when doing so,
<br>
<p>Exception in thread &quot;main&quot; java.lang.UnsatisfiedLinkError:
<br>
/N/u/sekanaya/build/lib/libmpi_java.so.0.0.0:
<br>
/N/u/sekanaya/build/lib/libmpi.so.0: undefined symbol: opal_maffinity_setup
<br>
<p><p>Any suggestion on fixing this?
<br>
<p>Thank you in advance,
<br>
<p>Saliya
<br>
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22357/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22358.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22356.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22370.php">Ralph Castain: "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<li><strong>Reply:</strong> <a href="22370.php">Ralph Castain: "Re: [OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
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
