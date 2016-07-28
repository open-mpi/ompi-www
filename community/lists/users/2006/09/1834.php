<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 22:10:42 2006" -->
<!-- isoreceived="20060907021042" -->
<!-- sent="Wed, 6 Sep 2006 19:13:37 -0700" -->
<!-- isosent="20060907021337" -->
<!-- name="Brignone, Sergio" -->
<!-- email="sbrignone_at_[hidden]" -->
<!-- subject="[OMPI users] problems when creating library for AIX" -->
<!-- id="04260B711FDCB041A3AFD3476C1D7E140C3229_at_sacexm01.nexant.corp" -->
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
<strong>From:</strong> Brignone, Sergio (<em>sbrignone_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-06 22:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1835.php">Paul Fons: "[OMPI users] configuration file problem?"</a>
<li><strong>Previous message:</strong> <a href="1833.php">Brian Barrett: "Re: [OMPI users] Probable MPI2 bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I configure OpenMPI version 1.1.1 with the following parameters:
<br>
<p>--enable-static 
<br>
--disable-shared 
<br>
--disable-io-romio 
<br>
--disable-mpi-f90 
<br>
--disable-mpi-cxx
<br>
<p>Then, when creating the library, I got the following error:
<br>
<p>&quot;../../../opal/event/select.c&quot;, line 146.16: 1506-045 (S) Undeclared
<br>
identifier NFDBITS.
<br>
&quot;../../../opal/event/select.c&quot;, line 146.61: 1506-045 (S) Undeclared
<br>
identifier fd_mask.
<br>
<p>Notes: 
<br>
1.	I have no gnu compiler. I used xlc and xlf
<br>
2.	OS is AIX version 5.3
<br>
3.	I previously compiled (and tried to use) openmpi version 1.0.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Version 1.0.2 had some other bugs (MPI_Comm_spawn with singletons)
<br>
<p>I would appreciate if someone can tell me what I am doing wrong.
<br>
<p>Thanks
<br>
<p>Sergio
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1835.php">Paul Fons: "[OMPI users] configuration file problem?"</a>
<li><strong>Previous message:</strong> <a href="1833.php">Brian Barrett: "Re: [OMPI users] Probable MPI2 bug?"</a>
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
