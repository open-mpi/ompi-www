<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 13 20:48:06 2006" -->
<!-- isoreceived="20060114014806" -->
<!-- sent="Fri, 13 Jan 2006 17:48:00 -0800" -->
<!-- isosent="20060114014800" -->
<!-- name="Kraig Winters" -->
<!-- email="kraig_at_[hidden]" -->
<!-- subject="[O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1" -->
<!-- id="8D6BFD4F-59B1-496A-BA18-7E1A97F70A6D_at_coast.ucsd.edu" -->
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
<strong>From:</strong> Kraig Winters (<em>kraig_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-13 20:48:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0502.php">Glenn Morris: "[O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0500.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0511.php">Jeff Squyres: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>Reply:</strong> <a href="0511.php">Jeff Squyres: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.
<br>
I'm having trouble configuring v1.0.1 on a system
<br>
running OS X 10.4.3, using gcc/xlf. The configure script
<br>
is happy until it's in it's final stages and begins to
<br>
create the makefiles. Each time it attempts to create
<br>
a new makefile, the following error is produced:
<br>
<p>config.status: creating test/mca/ns/Makefile
<br>
sed: 23: ./confstatBmI51v/subs-4.sed: unescaped newline inside  
<br>
substitute pattern
<br>
<p>The configure then runs to completion but of course each and every
<br>
makefile is empty. I've enclosed the log and screen output.
<br>
<p>Thanks,
<br>
Kraig
<br>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0501/config_output.tar.bz2">config_output.tar.bz2</a>
</ul>
<!-- attachment="config_output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0502.php">Glenn Morris: "[O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0500.php">Michael L. Stokes: "Re: [O-MPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0511.php">Jeff Squyres: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>Reply:</strong> <a href="0511.php">Jeff Squyres: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
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
