<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  2 15:32:15 2006" -->
<!-- isoreceived="20061002193215" -->
<!-- sent="Mon, 2 Oct 2006 15:32:01 -0400" -->
<!-- isosent="20061002193201" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="[OMPI users] BLACS &amp;amp; OpenMPI" -->
<!-- id="E97633BC-19E2-4892-B187-BCB0CE07BA29_at_ieee.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-02 15:32:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1914.php">George Bosilca: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1912.php">Abhishek Pratap: "Re: [OMPI users] Need help in Perl with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1914.php">George Bosilca: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="1914.php">George Bosilca: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building BLACS 1.1 with patch 3 and OpenMPI 1.1.1 (using gcc and ifort)
<br>
<p>Configuring the Bmake.inc file, if I set:
<br>
<p>MPILIB = -lmpi
<br>
<p>I have no trouble building the install program xsyserrors.  However,  
<br>
the more standard approach is to set:
<br>
<p>MPILIB = $(MPILIBdir)/libmpi.a
<br>
<p>which generates the following error and more:
<br>
<p>/usr/local/lib/libmpi.a(dt_module.o)(.text+0x34c1): In function  
<br>
`ompi_ddt_init':
<br>
: undefined reference to `opal_class_initialize'
<br>
<p>I have libmpi.a because I had specified  --enable-static when I build  
<br>
OpenMPI 1.1.1.  But there appears to be some details about static  
<br>
libraries that I missed in the documentation.
<br>
<p>In order to use static libraries is it required to also include  
<br>
components in libraries?
<br>
<p><p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1914.php">George Bosilca: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1912.php">Abhishek Pratap: "Re: [OMPI users] Need help in Perl with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1914.php">George Bosilca: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="1914.php">George Bosilca: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
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
