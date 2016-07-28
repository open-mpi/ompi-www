<?
$subject_val = "[OMPI users] compilation with intel fortran compiller problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 26 05:47:10 2008" -->
<!-- isoreceived="20080126104710" -->
<!-- sent="Sat, 26 Jan 2008 12:47:03 +0200" -->
<!-- isosent="20080126104703" -->
<!-- name="Andrei Neamtu" -->
<!-- email="neamtuandrei_at_[hidden]" -->
<!-- subject="[OMPI users] compilation with intel fortran compiller problem" -->
<!-- id="650c70740801260247h481b63e6he18073381d0cf61d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] compilation with intel fortran compiller problem<br>
<strong>From:</strong> Andrei Neamtu (<em>neamtuandrei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-26 05:47:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4894.php">Mostyn Lewis: "Re: [OMPI users] compilation with intel fortran compiller problem"</a>
<li><strong>Previous message:</strong> <a href="4892.php">Tim Mattox: "Re: [OMPI users] odd network behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4894.php">Mostyn Lewis: "Re: [OMPI users] compilation with intel fortran compiller problem"</a>
<li><strong>Reply:</strong> <a href="4894.php">Mostyn Lewis: "Re: [OMPI users] compilation with intel fortran compiller problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I will be quick:
<br>
<p>I want to compile open-mpi using Intel C, C++, Fortran compillers suite.
<br>
With Fortran and C compiler it works fine but when I enable C++ Intel
<br>
compiler got errors.
<br>
<p>Here is what I done:
<br>
<p>#define the environmet variables
<br>
<p>shell&gt; export FC=/opt/intel/fce/10.1.008/bin/ifort
<br>
shell&gt; export F77=/opt/intel/fce/10.1.008/bin/ifort
<br>
shell&gt; export CC=/opt/intel/cce/10.1.008/bin/icc
<br>
shell&gt; export CXX=/opt/intel/cce/10.1.008/bin/icpc
<br>
<p>#after that issue the configure script
<br>
<p>shell&gt; ./configure
<br>
<p><p>It works fine until the C++ compiler setup and it ends up with the message:
<br>
<p><p>*** C++ compiler and preprocessor
<br>
checking whether we are using the GNU C++ compiler... yes
<br>
checking whether /opt/intel/cce/10.1.008/bin/icpc accepts -g... yes
<br>
checking dependency style of /opt/intel/cce/10.1.008/bin/icpc... gcc3
<br>
checking how to run the C++ preprocessor... /opt/intel/cce/10.1.008/bin/icpc -E
<br>
checking for the C++ compiler vendor... intel
<br>
checking if C++ compiler works... no
<br>
**********************************************************************
<br>
* It appears that your C++ compiler is unable to produce working
<br>
* executables.  A simple test application failed to properly
<br>
* execute.  Note that this is likely not a problem with Open MPI,
<br>
* but a problem with the local compiler installation.  More
<br>
* information (including exactly what command was given to the
<br>
* compiler and what error resulted when the command was executed) is
<br>
* available in the config.log file in this directory.
<br>
**********************************************************************
<br>
configure: error: Could not run a simple C++ program.  Aborting.
<br>
<p><p>I also attached the config.log file.
<br>
<p>I am new to open-mpi (I used lam-mpi and GNU compilers) but I want to
<br>
use the Intel compilers because they give more than 20% performance
<br>
gaining in my specific parallel application.
<br>
<p>Any help or suggestion will be greatly appreciated !!!!
<br>
<p>Best regards,
<br>
Andrei
<br>
<p>
<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4893/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4894.php">Mostyn Lewis: "Re: [OMPI users] compilation with intel fortran compiller problem"</a>
<li><strong>Previous message:</strong> <a href="4892.php">Tim Mattox: "Re: [OMPI users] odd network behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4894.php">Mostyn Lewis: "Re: [OMPI users] compilation with intel fortran compiller problem"</a>
<li><strong>Reply:</strong> <a href="4894.php">Mostyn Lewis: "Re: [OMPI users] compilation with intel fortran compiller problem"</a>
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
