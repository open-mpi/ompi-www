<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 24 17:27:48 2007" -->
<!-- isoreceived="20070924212748" -->
<!-- sent="Mon, 24 Sep 2007 23:27:41 +0200" -->
<!-- isosent="20070924212741" -->
<!-- name="Yvan Fournier" -->
<!-- email="yvan.fournier_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype" -->
<!-- id="1190669261.6184.20.camel_at_lankhmar" -->
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
<strong>From:</strong> Yvan Fournier (<em>yvan.fournier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-24 17:27:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4055.php">Michael Clover: "[OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
<li><strong>Previous message:</strong> <a href="4053.php">George Bosilca: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4058.php">Jeff Squyres: "Re: [OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
<li><strong>Reply:</strong> <a href="4058.php">Jeff Squyres: "Re: [OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I seem to have encountered a new bug in Open MPI 1.2.3 using indexed
<br>
datatypes with MPI_Recv (which seems to be of the &quot;off by one&quot; sort).
<br>
I have (different from the bug I submitted in 2006 and which was
<br>
corrected since).
<br>
<p>This bug leads to a segfault, and I have only encountered it one
<br>
one data set (on a relatively large set for a 2-processor run).
<br>
I have reproduced the segfault on 2 different linux Systems
<br>
(Debian Sarge on dual-processor Intel Xeon, Kubuntu 7.04
<br>
on single-processor Centrino system).
<br>
<p>A means to reproduce it on 2 ranks can be found at :
<br>
<a href="http://yvan.fournier.free.fr/OpenMPI/ompi_datatype_bug_2.tar.gz">http://yvan.fournier.free.fr/OpenMPI/ompi_datatype_bug_2.tar.gz</a>
<br>
<p>(the program is very simple, but the displacements array required to
<br>
reproduce it is too large for the mailing list).
<br>
<p>The program does not print any output, but does not segfault when
<br>
functioning properly, or when USE_INDEXED_DATATYPE is unset (lines
<br>
57-58). It works with LAM 7.1.1 and MPICH2, but fails under Open MPI.
<br>
This is a (much) simplified extract from a part of Code_Saturne's
<br>
FVM library (<a href="http://rd.edf.com/code_saturne/">http://rd.edf.com/code_saturne/</a>), which otherwise works
<br>
fine on most data using Open MPI.
<br>
<p>Best regards,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yvan Fournier
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4055.php">Michael Clover: "[OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
<li><strong>Previous message:</strong> <a href="4053.php">George Bosilca: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4058.php">Jeff Squyres: "Re: [OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
<li><strong>Reply:</strong> <a href="4058.php">Jeff Squyres: "Re: [OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
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
