<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  5 13:39:21 2006" -->
<!-- isoreceived="20061205183921" -->
<!-- sent="Tue, 5 Dec 2006 10:38:58 -0800" -->
<!-- isosent="20061205183858" -->
<!-- name="Ryan Thompson" -->
<!-- email="ryan_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPE build failure" -->
<!-- id="2D7646C6-489F-49B6-96F3-6E806FB558A8_at_zymeworks.com" -->
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
<strong>From:</strong> Ryan Thompson (<em>ryan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-05 13:38:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2302.php">Brock Palen: "[OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2300.php">Rainer Keller: "Re: [OMPI users] Any known issues with ksh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2303.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Reply:</strong> <a href="2303.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm attempting to build MPE without success. When I try to make it, I  
<br>
recieve the error:
<br>
<p>trace_input.c:23:23: error: trace_API.h: No such file or directory
<br>
<p>Where is this file supposed to come from?
<br>
<p>Here are my configure arguments...
<br>
<p>JAVA=&quot;/opt/sun-jdk-1.5.0.08&quot;
<br>
<p>./configure --prefix=/opt/mpe \
<br>
--sharedstatedir=/var/mpe \
<br>
--localstatedir=/com/mpe \
<br>
--enable-misc=yes \
<br>
--enable-logging=yes \
<br>
--enable-f77=no \
<br>
--enable-wrappers=yes \
<br>
--enable-slog2=build \
<br>
--enable-collchk=no \
<br>
--enable-graphics=no \
<br>
--with-mpicc=&quot;/opt/openmpi/bin/mpicc&quot; \
<br>
--with-mpiinc=&quot;-I/opt/openmpi/include&quot; \
<br>
--with-mpilibs=&quot;-L/opt/openmpi/lib&quot; \
<br>
--includedir=$JAVA/include \
<br>
--with-java=$JAVA
<br>
<p>attached are my config.log and make.log
<br>
<p><p>


<br><p>
<p>Thanks,
<br>
Ryan
<br>
<p><pre>
--
Ryan Thompson,
HPC Systems Administrator
ryan_at_[hidden]
</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2301/make.log.gz">make.log.gz</a>
</ul>
<!-- attachment="make.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2301/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2302.php">Brock Palen: "[OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2300.php">Rainer Keller: "Re: [OMPI users] Any known issues with ksh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2303.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Reply:</strong> <a href="2303.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
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
