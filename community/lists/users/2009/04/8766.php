<?
$subject_val = "[OMPI users] libnuma issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 11:40:36 2009" -->
<!-- isoreceived="20090403154036" -->
<!-- sent="Fri, 3 Apr 2009 17:40:27 +0200" -->
<!-- isosent="20090403154027" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="[OMPI users] libnuma issue" -->
<!-- id="b87c422a0904030840p3231e4dxc7e749f6437cb757_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] libnuma issue<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-03 11:40:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8767.php">John Hearns: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8765.php">Terry Dontje: "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8767.php">John Hearns: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8767.php">John Hearns: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8793.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am posting again more specifically because it may have been buried
<br>
in a more generic thread.
<br>
<p>With debian linux amd64 lenny and openmpi-1.3.1
<br>
<p>./configure cc=/opt/intel/cce/10.1.015/bin/icc
<br>
cxx=/opt/intel/cce/10.1.015/bin/icpc
<br>
F77=/opt/intel/fce/10.1.015/bin/ifort
<br>
FC=/opt/intel/fce/10.1.015/bin/ifort --with-libnuma=/usr/lib
<br>
<p>failed because
<br>
<p>&quot;expected file /usr/lib/include/numa.h was not found&quot;
<br>
<p>In debian amd64 lenny numa.h has a different location
<br>
&quot;/usr/include/numa.h&quot;. Attached is the config.log.
<br>
<p>I would appreciate help in circumventing the problem.
<br>
<p>Thanks
<br>
francesco pietra
<br>
<p>
<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8766/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8767.php">John Hearns: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8765.php">Terry Dontje: "Re: [OMPI users] Problems Compiling OpenMPI with Sun Studio 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8767.php">John Hearns: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8767.php">John Hearns: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8793.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
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
