<?
$subject_val = "[OMPI users] question running on heterogeneous systems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  1 23:16:05 2009" -->
<!-- isoreceived="20090102041605" -->
<!-- sent="Thu, 1 Jan 2009 23:15:58 -0500" -->
<!-- isosent="20090102041558" -->
<!-- name="Mahmoud Payami" -->
<!-- email="mahmoud.payami_at_[hidden]" -->
<!-- subject="[OMPI users] question running on heterogeneous systems" -->
<!-- id="118b978f0901012015w7a091308q32e6bbfe18c0db10_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] question running on heterogeneous systems<br>
<strong>From:</strong> Mahmoud Payami (<em>mahmoud.payami_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-01 23:15:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7620.php">doriankrause: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7618.php">Pavel Shamis (Pasha): "Re: [OMPI users] BTL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7620.php">doriankrause: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>Reply:</strong> <a href="7620.php">doriankrause: "Re: [OMPI users] question running on heterogeneous systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI Users,
<br>
<p>I have two systems, one with Intel64 processor, and one with IA32. The OSs
<br>
on first is CentOS-86_64 and the other CentOS-i386. I installed Intel
<br>
fortran compiler 10.1 on both.  In the first I use the fce, and in the
<br>
second I use fc directories (ifortvars.sh/csh). I have compiled openmpi
<br>
separately on each machine. Now, I could not run my application whch is
<br>
compiled on ia32 machine. Should I use &quot;fc&quot; instead of &quot;fce&quot; on intel64 and
<br>
then compile openmpi with that?
<br>
<p>Best regards,
<br>
<p>Mahmoud Payami
<br>
<p>PS: I have read the following FAQ but I need specific answer.
<br>
<p><p>As of v1.1, Open MPI requires that the size of C, C++, and Fortran datatypes
<br>
be the same on all platforms within a single parallel application with the
<br>
exception of types represented by MPI_BOOL and MPI_LOGICAL -- size
<br>
differences in these types between processes are properly handled. Endian
<br>
differences between processes in a single MPI job are properly and
<br>
automatically handled.
<br>
<p>Prior to v1.1, Open MPI did not include any support for data size or endian
<br>
heterogeneity.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7619/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7620.php">doriankrause: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7618.php">Pavel Shamis (Pasha): "Re: [OMPI users] BTL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7620.php">doriankrause: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>Reply:</strong> <a href="7620.php">doriankrause: "Re: [OMPI users] question running on heterogeneous systems"</a>
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
