<?
$subject_val = "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 09:23:05 2010" -->
<!-- isoreceived="20100105142305" -->
<!-- sent="Tue, 5 Jan 2010 19:23:00 +0500" -->
<!-- isosent="20100105142300" -->
<!-- name="ilya zelenchuk" -->
<!-- email="ilya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3" -->
<!-- id="24da22321001050623i77116d19h83d6a48c4f3369dd_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4B3B8C58.1090805_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3<br>
<strong>From:</strong> ilya zelenchuk (<em>ilya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 09:23:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11691.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11689.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11666.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11695.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="11695.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Happy New Year, Gus!
<br>
Yes, I'm using affinity. This is my openmpi-mca-params.conf file:
<br>
<p><pre>
---
# Use RSH instead SSH
pls_rsh_agent=rsh
# Turning on processor affinity
mpi_paffinity_alone=1
# Include using eth1.
btl_tcp_if_include=eth1
# Exclude using lo and eth0.
btl_tcp_if_exclude=lo,eth0
---
I rebuild openmpi-1.3.3 from tar and find something interesting.
If i build with this options:
CC=icc CXX=icpc F77=ifort FC=ifort ./configure
--prefix=/opt/testing/default/openmpi-1.3.3/ --disable-ipv6
All work's fine!!!
But if I use:
CC=icc CFLAGS=&quot; -O3&quot; CXX=icpc CXXFLAGS=&quot; -O3&quot; F77=ifort FFLAGS=&quot; -O3&quot;
FC=ifort FCFLAGS=&quot; -O3&quot; ./configure
--prefix=/opt/testing/tuning/openmpi-1.3.3/ --enable-debug
--enable-mpi-threads --disable-ipv6
Then I get errors.
What you think?
Now I'm starting to investigate, what options cause OpenMPI broken.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11691.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11689.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11666.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11695.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="11695.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
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
