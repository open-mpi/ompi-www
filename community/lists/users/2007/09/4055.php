<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 03:46:13 2007" -->
<!-- isoreceived="20070925074613" -->
<!-- sent="Tue, 25 Sep 2007 00:46:03 -0700" -->
<!-- isosent="20070925074603" -->
<!-- name="Michael Clover" -->
<!-- email="mclover_at_[hidden]" -->
<!-- subject="[OMPI users] sed: 33: ...: unescaped newline inside substitute pattern" -->
<!-- id="EA5FE000-2390-4572-9902-040814B05CF2_at_san.rr.com" -->
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
<strong>From:</strong> Michael Clover (<em>mclover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-25 03:46:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4056.php">Olli-Pekka Lehto: "[OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Previous message:</strong> <a href="4054.php">Yvan Fournier: "[OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4161.php">Jeff Squyres: "Re: [OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4161.php">Jeff Squyres: "Re: [OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been attempting to compile open-mpi, both 1.2.2 and 1.2.3 on a  
<br>
new iMac (core 2 duo, 2.4 GHz, OS X 10.4.10), using gfortran as my  
<br>
fortran compiler, and a very recent Xtools (ld -v gives version  
<br>
cctools-622.5.obj~13).  I have tried both the full line,
<br>
configure --prefix=/usr/local/openmpi --disable-mpi-cxx --disable-mpi- 
<br>
f90 --without-xgrid FC=gfortran
<br>
as well as a truncated line,
<br>
configure --prefix=/usr/local/openmpi
<br>
and switched compilers via
<br>
setenv FC g95
<br>
configure --prefix=/usr/local/openmpi --disable-mpi-cxx --disable-mpi- 
<br>
f90 --without-xgrid
<br>
<p>and in all cases, after minutes of working away, get to the point  
<br>
that someone else got to last year (when it tries to create the  
<br>
Makefiles, etc) and get the following output (approximately 200 pairs  
<br>
of sed:33 and sed:4's).  This has been happening for over a week,  
<br>
with reboots every night.  I attach the configure terminal output as  
<br>
well as the log file (for a 1.2.2 attempt).
<br>
&nbsp;&nbsp;
<br>


<br><p>
<p>...checking for OMPI LIBS...      -lSystemStubs
<br>
checking for OMPI extra include dirs...  openmpi
<br>
<p>*** Final output
<br>
configure: creating ./config.status
<br>
config.status: creating ompi/include/ompi/version.h
<br>
sed: 33: ./confstatkVPvQm/subs-3.sed: unescaped newline inside  
<br>
substitute pattern
<br>
sed: 4: ./confstatkVPvQm/subs-4.sed: unescaped newline inside  
<br>
substitute pattern
<br>
config.status: creating orte/include/orte/version.h
<br>
sed: 33: ./confstatkVPvQm/subs-3.sed: unescaped newline inside  
<br>
substitute pattern
<br>
<p><p><p>Michael Clover
<br>
mclover_at_[hidden]
<br>
<p><p><p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4055/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4056.php">Olli-Pekka Lehto: "[OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Previous message:</strong> <a href="4054.php">Yvan Fournier: "[OMPI users] Bug in Open MPI 1.2.3 using MPI_Recv with an indexed datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4161.php">Jeff Squyres: "Re: [OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4161.php">Jeff Squyres: "Re: [OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
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
