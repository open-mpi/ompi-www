<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  7 23:16:35 2006" -->
<!-- isoreceived="20060608031635" -->
<!-- sent="Wed, 7 Jun 2006 21:15:52 -0600" -->
<!-- isosent="20060608031552" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error for open-mpi application" -->
<!-- id="B3DE7164-1950-4C44-86F2-A5B095C3A1C7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="41def11e0606070720j2a02df8enf8984bdfc98e5f46_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-07 23:15:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1384.php">sdamjad: "[OMPI users] mpif90 error"</a>
<li><strong>Previous message:</strong> <a href="1382.php">Hugh Merz: "Re: [OMPI users] error for open-mpi application"</a>
<li><strong>In reply to:</strong> <a href="1381.php">Weihua Li: "[OMPI users] error for open-mpi application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 7, 2006, at 8:20 AM, Weihua Li wrote:
<br>
<p><span class="quotelev1">&gt;         CPU: AMD opeteron Linux86-64
</span><br>
<span class="quotelev1">&gt;          I used the following command to configure the open-mpi-1.0.2.
</span><br>
<span class="quotelev1">&gt;         ./configure --prefix=/home/ytang/gdata/whli/openmpi CC=pgcc  
</span><br>
<span class="quotelev1">&gt; CXX=pgCC F90=gpf90 --with-openib
</span><br>
<p>The F90 environment variable doesn't do anything to configure.  You  
<br>
need to set F77 (for Fortran 77) and FC for Fortran 90.  Most likely,  
<br>
configure picked up gfortran for your Fortran 90 compiler, causing  
<br>
the error messages.
<br>
<p><span class="quotelev1">&gt;  I know it must be something wrong with the installation of open- 
</span><br>
<span class="quotelev1">&gt; mpi, but I don't know where it is.
</span><br>
<p>I think part of it is the Fortran 90 compiler name.  The rest, as  
<br>
Hugh mentioned, is that you really should use the wrapper compilers  
<br>
or look at the wrapper compiler configuration output to see what  
<br>
flags and libraries the Open MPI installation deems necessary.  You  
<br>
can do this by running:
<br>
<p>&nbsp;&nbsp;&nbsp;mpif90 -showme
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1384.php">sdamjad: "[OMPI users] mpif90 error"</a>
<li><strong>Previous message:</strong> <a href="1382.php">Hugh Merz: "Re: [OMPI users] error for open-mpi application"</a>
<li><strong>In reply to:</strong> <a href="1381.php">Weihua Li: "[OMPI users] error for open-mpi application"</a>
<!-- nextthread="start" -->
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
