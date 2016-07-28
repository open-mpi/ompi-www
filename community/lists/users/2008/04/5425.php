<?
$subject_val = "[OMPI users] Problem with Sun Fortran Install with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 11:02:12 2008" -->
<!-- isoreceived="20080421150212" -->
<!-- sent="Mon, 21 Apr 2008 11:01:50 -0400" -->
<!-- isosent="20080421150150" -->
<!-- name="cfdman7_at_[hidden]" -->
<!-- email="cfdman7_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with Sun Fortran Install with OpenMPI" -->
<!-- id="8CA71D7C32C3AB0-C0-118A_at_mblk-d47.sysops.aol.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem with Sun Fortran Install with OpenMPI<br>
<strong>From:</strong> <a href="mailto:cfdman7_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problem%20with%20Sun%20Fortran%20Install%20with%20OpenMPI"><em>cfdman7_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-21 11:01:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5426.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5424.php">Dani&#235;l Mantione: "Re: [OMPI users] mpi parallel code to run on infinipath env."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5426.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="5426.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="5436.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p><p>I have been attempting to install OpenMPI with the Sun Fortran Compiler
<br>
that is packaged as a part of Sun Studio for x86 architectures for
<br>
about a year and a half now without success. Every time a new version
<br>
of Sun Studio and/or OpenMPI comes out, I have attempted the install
<br>
again with the hopes that whatever has been causing the problem will
<br>
have magically been fixed. However at this point, it appears that
<br>
whatever is causing the install problems is something unkown to your
<br>
development team ... so I figure it is time to report it.
<br>
<p><p><p>I am currently trying to install the Sun F90 compiler with
<br>
openmpi-1.2.6 on a 64-bit intel machine running Red Hat Linux
<br>
Enterprise 5. I have also tried this same install on a variety of
<br>
32-bit intel architectures with 2 other flavors of linux, and I get the
<br>
same errors. I have attached the install script that I use to install
<br>
OpenMPI for each of the FORTRAN packages that I use (OpenMPI installs
<br>
successfully for the 4 other FORTRAN packages in this install script).
<br>
I have also attached 2 sets of output streams with different error
<br>
messages. One of these output streams corresponds to the result that I
<br>
get when setting the C-compiler to gcc in the install script, and the
<br>
other corresponds to setting the C-compiler to the C-compiler that is
<br>
included with Sun Studio.
<br>
<p><p><p>Note also that I have not had any problems with getting the Sun
<br>
compilers (Fortran and C) installed with MPICH2, so I am confused as to
<br>
what may be the issue with OpenMPI. I prefer to use OpenMPI, so I would
<br>
like to figure this issue out.
<br>
<p><p><p>Thanks in advance,
<br>
<p><p><p>Rob
<br>
<p><p>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5425/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5425/install_openmpi">install_openmpi</a>
</ul>
<!-- attachment="install_openmpi" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5425/error.gcc">error.gcc</a>
</ul>
<!-- attachment="error.gcc" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5425/error.suncc">error.suncc</a>
</ul>
<!-- attachment="error.suncc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5426.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5424.php">Dani&#235;l Mantione: "Re: [OMPI users] mpi parallel code to run on infinipath env."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5426.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="5426.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="5436.php">Terry Dontje: "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
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
