<?
$subject_val = "[OMPI users] Problem with WRF and pgi-7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 14:09:10 2008" -->
<!-- isoreceived="20080721180910" -->
<!-- sent="Mon, 21 Jul 2008 14:08:04 -0400" -->
<!-- isosent="20080721180804" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with WRF and pgi-7.2" -->
<!-- id="B8399BDD-232F-40E3-9131-258E93DDFA5F_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] Problem with WRF and pgi-7.2<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-21 14:08:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6102.php">Gabriele Fatigati: "[OMPI users] Checkpoint and restart"</a>
<li><strong>Previous message:</strong> <a href="6100.php">jody: "Re: [OMPI users] Error run mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Reply:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, When compiling WRF with PGI-7.2-1  with openmpi-1.2.6
<br>
The file buf_for_proc.c  fails.  Nothing specail about this file  
<br>
sticks out to me.  But older versions of PGI like it just fine.  The  
<br>
errors PGI complains about has to do with mpi.h though:
<br>
<p>[brockp_at_nyx-login1 RSL_LITE]$ mpicc  -DFSEEKO64_OK  -w -O3 - 
<br>
DDM_PARALLEL   -c buf_for_proc.c
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting  
<br>
identifier .Z0000 before '(' (/home/software/rhel4/openmpi-1.2.6/ 
<br>
pgi-7.0/include/mpi.h: 823)
<br>
PGC-S-0082-Function returning array not allowed (/home/software/rhel4/ 
<br>
openmpi-1.2.6/pgi-7.0/include/mpi.h: 823)
<br>
PGC-S-0043-Redefinition of symbol, MPI_Comm (/home/software/rhel4/ 
<br>
openmpi-1.2.6/pgi-7.0/include/mpi.h: 837)
<br>
PGC/x86-64 Linux 7.2-1: compilation completed with severe errors
<br>
<p>Has anyone else seen that kind of problem with mpi.h  and pgi?  Do I  
<br>
need to use -c89  ?  I know PGI changed the default with this a while  
<br>
back, but it does not appear to help.
<br>
<p>Thanks!
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6102.php">Gabriele Fatigati: "[OMPI users] Checkpoint and restart"</a>
<li><strong>Previous message:</strong> <a href="6100.php">jody: "Re: [OMPI users] Error run mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Reply:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
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
