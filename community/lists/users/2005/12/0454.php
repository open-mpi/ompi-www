<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 30 13:14:44 2005" -->
<!-- isoreceived="20051230181444" -->
<!-- sent="Fri, 30 Dec 2005 13:14:37 -0500" -->
<!-- isosent="20051230181437" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] (no subject)" -->
<!-- id="F691AFD9-5B3E-4112-814A-52408FE31116_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="54924.70.210.27.171.1135965911.squirrel_at_loginhost.osc.edu" -->
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
<strong>Date:</strong> 2005-12-30 13:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0455.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="0453.php">Michael L. Stokes: "[O-MPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="0453.php">Michael L. Stokes: "[O-MPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0455.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="0455.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 30, 2005, at 1:05 PM, Michael L. Stokes wrote:
<br>
<p><span class="quotelev1">&gt; I have compiled and installed OpenMPI on a SUSE based SGI PRISM (8
</span><br>
<span class="quotelev1">&gt; processor model).  I configured the build with --with-device=ch_shmem,
</span><br>
<span class="quotelev1">&gt; otherwise I took all the defaults. I installed as root using the  
</span><br>
<span class="quotelev1">&gt; default
</span><br>
<span class="quotelev1">&gt; install prefix. SO good so far.  Then I compile my hello world project
</span><br>
<span class="quotelev1">&gt; using mpiCC, and again this looks good. I run ldd on the executable  
</span><br>
<span class="quotelev1">&gt; and I
</span><br>
<span class="quotelev1">&gt; was convinced that is is using the OpenMPI libs and not the MPT libs.
</span><br>
<p>Just so you know, the --with-device is not a valid configure option  
<br>
for Open MPI (it looks like one for MPICH).  Configure happily  
<br>
ignores flags it doesn't understand, so no harm was done.  Your build  
<br>
most likely included support for our shared memory transport anyway,  
<br>
as it is built on any platform that supports mmap().  You can confirm  
<br>
this by running:
<br>
<p>&nbsp;&nbsp;&nbsp;ompi_info | grep btl
<br>
<p>which will list all available btls (btl is our communication device  
<br>
support layer).
<br>
<p><span class="quotelev1">&gt; However, when I run it using mpirun -np 4 a.out, I get no output to  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; screen and top only reports that mpirun is there (no a.out's).  I  
</span><br>
<span class="quotelev1">&gt; cannot
</span><br>
<span class="quotelev1">&gt; kill the process using a keyboard interrupt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would appreciate any advise on either how to build, run, or debug  
</span><br>
<span class="quotelev1">&gt; this app.
</span><br>
<p>That's unexpected.  Are you using a batch scheduler of any type?   
<br>
Could you rerun mpirun with the -d flag to turn on debugging output  
<br>
and send the result to the list?  That should hopefully give us some  
<br>
useful information.  Also, if you could include the complete output  
<br>
of &quot;ompi_info&quot;, that would be much appreciated.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0455.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="0453.php">Michael L. Stokes: "[O-MPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="0453.php">Michael L. Stokes: "[O-MPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0455.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="0455.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
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
