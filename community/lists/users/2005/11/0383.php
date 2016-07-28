<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 22 12:20:27 2005" -->
<!-- isoreceived="20051122172027" -->
<!-- sent="Tue, 22 Nov 2005 11:20:20 -0600 (CST)" -->
<!-- isosent="20051122172020" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="[O-MPI users] mpirun --prefix" -->
<!-- id="Pine.LNX.4.58.0511221104401.23144_at_schwinn.mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e74ee5d54a0a010ab81cef2adb648f06_at_open-mpi.org" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-22 12:20:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0384.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<li><strong>Previous message:</strong> <a href="0382.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>In reply to:</strong> <a href="0382.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0385.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Reply:</strong> <a href="0385.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Reply:</strong> <a href="0387.php">Rainer Keller: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0477.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not a bug just wonder if this can be improved.  I have been
<br>
running openmpi linked program with command
<br>
<p>&lt;openmpi-install-dir&gt;/bin/mpirun --prefix &lt;openmpi-install-dir&gt; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--host A  -np N a.out
<br>
<p>My understanding is that --prefix allows extra search path in addition to
<br>
PATH and LD_LIBRARY_PATH, correct me if I am wrong.  Assuming that
<br>
openmpi's install directory structure is fixed, would it possible for
<br>
mpirun to search &lt;openmpi-install-dir&gt; automatically for libmpi.so &amp;
<br>
friends so to avoid the redundant --prefix &lt;openmpi-install-dir&gt; to
<br>
mpirun ?
<br>
<p>Thanks,
<br>
A.Chan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0384.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<li><strong>Previous message:</strong> <a href="0382.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<li><strong>In reply to:</strong> <a href="0382.php">Jeff Squyres: "Re: [O-MPI users] MPI_F_STATUS(ES)_IGNORE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0385.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Reply:</strong> <a href="0385.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Reply:</strong> <a href="0387.php">Rainer Keller: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0477.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
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
