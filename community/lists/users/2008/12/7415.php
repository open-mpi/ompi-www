<?
$subject_val = "[OMPI users] Deadlock on large numbers of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 12:22:41 2008" -->
<!-- isoreceived="20081205172241" -->
<!-- sent="Fri, 05 Dec 2008 10:22:29 -0700" -->
<!-- isosent="20081205172229" -->
<!-- name="Justin" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="[OMPI users] Deadlock on large numbers of processors" -->
<!-- id="49396355.9010906_at_cs.utah.edu" -->
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
<strong>Subject:</strong> [OMPI users] Deadlock on large numbers of processors<br>
<strong>From:</strong> Justin (<em>luitjens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 12:22:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7416.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7414.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7424.php">Scott Atchley: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7424.php">Scott Atchley: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7425.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We are currently using OpenMPI 1.3 on Ranger for large processor jobs 
<br>
(8K+).  Our code appears to be occasionally deadlocking at random within 
<br>
point to point communication (see stacktrace below).  This code has been 
<br>
tested on many different MPI versions and as far as we know it does not 
<br>
contain a deadlock.  However, in the past we have ran into problems with 
<br>
shared memory optimizations within MPI causing deadlocks.  We can 
<br>
usually avoid these by setting a few environment variables to either 
<br>
increase the size of shared memory buffers or disable shared memory 
<br>
optimizations all together.   Does OpenMPI have any known deadlocks that 
<br>
might be causing our deadlocks?  If are there any work arounds?  Also 
<br>
how do we disable shared memory within OpenMPI?
<br>
<p>Here is an example of where processors are hanging:
<br>
<p>#0  0x00002b2df3522683 in mca_btl_sm_component_progress () from 
<br>
/opt/apps/intel10_1/openmpi/1.3/lib/openmpi/mca_btl_sm.so
<br>
#1  0x00002b2df2cb46bf in mca_bml_r2_progress () from 
<br>
/opt/apps/intel10_1/openmpi/1.3/lib/openmpi/mca_bml_r2.so
<br>
#2  0x00002b2df0032ea4 in opal_progress () from 
<br>
/opt/apps/intel10_1/openmpi/1.3/lib/libopen-pal.so.0
<br>
#3  0x00002b2ded0d7622 in ompi_request_default_wait_some () from 
<br>
/opt/apps/intel10_1/openmpi/1.3//lib/libmpi.so.0
<br>
#4  0x00002b2ded109e34 in PMPI_Waitsome () from 
<br>
/opt/apps/intel10_1/openmpi/1.3//lib/libmpi.so.0
<br>
<p><p>Thanks,
<br>
Justin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7416.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7414.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7424.php">Scott Atchley: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7424.php">Scott Atchley: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7425.php">Brock Palen: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
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
