<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 30 16:27:58 2006" -->
<!-- isoreceived="20060130212758" -->
<!-- sent="Mon, 30 Jan 2006 16:27:55 -0500" -->
<!-- isosent="20060130212755" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] f90 compiling: USE MPI vs. include 'mpif.h'" -->
<!-- id="DC5D866F-58B6-4858-81C4-0BA91220E234_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="820807BF-141D-4F43-A28E-BB90051F05CA_at_nrl.navy.mil" -->
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
<strong>Date:</strong> 2006-01-30 16:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0543.php">Drew McCormack: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<li><strong>Previous message:</strong> <a href="0541.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>In reply to:</strong> <a href="0540.php">Michael Kluskens: "[O-MPI users] f90 compiling: USE MPI vs. include 'mpif.h'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2006, at 10:32 AM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; Question regarding f90 compiling
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; USE MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; instead of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; makes the compilation take an extra two minutes using g95 under OS X
</span><br>
<span class="quotelev1">&gt; 10.4.4 (simple test program 115 seconds versus 0.2 seconds)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this normal?
</span><br>
<p>Unfortunately, yes.  The difference is that &quot;include 'mpif.h'&quot; will  
<br>
bring in a simple Fortran 77 header, declaring just the MPI  
<br>
parameters needed (like declaring MPI_COMM_WORLD as an integer with  
<br>
value 0, for Open MPI).  Using &quot;USE MPI&quot; will bring in the Fortran 90  
<br>
module, which includes a huge number of interface declarations to  
<br>
cover all the possible type combinations available for the rather  
<br>
large number of functions in MPI.  This leads to a module file that  
<br>
is over 50,000 lines long.
<br>
<p>Right now, we include up to 4 array dimensions for each type (so you  
<br>
can pass a 4 dimension array of INTEGER, for example).  If you never  
<br>
use that many array dimensions, you can reconfigure Open MPI with the  
<br>
configure option --with-f90-max-array-dim=&lt;NUM&gt;, where &lt;NUM&gt; is the  
<br>
maximum array dimensions you will ever use in your Fortran  
<br>
application.  The code inside Open MPI doesn't depend on this value -  
<br>
the only place it is used is figuring out how far to go with  
<br>
generating the function declarations for the Fortran 90 module file.
<br>
<p>Hope this helps,
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
<li><strong>Next message:</strong> <a href="0543.php">Drew McCormack: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<li><strong>Previous message:</strong> <a href="0541.php">Jeff Squyres: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>In reply to:</strong> <a href="0540.php">Michael Kluskens: "[O-MPI users] f90 compiling: USE MPI vs. include 'mpif.h'"</a>
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
