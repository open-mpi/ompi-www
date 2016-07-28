<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  8 20:10:50 2005" -->
<!-- isoreceived="20051109011050" -->
<!-- sent="Tue, 08 Nov 2005 18:10:26 -0700" -->
<!-- isosent="20051109011026" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="[O-MPI users] OpenIB module problem/questions:" -->
<!-- id="op.szx77o01ies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-08 20:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0295.php">Galen M. Shipman: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>Previous message:</strong> <a href="0293.php">Jeff Squyres: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0295.php">Galen M. Shipman: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>Reply:</strong> <a href="0295.php">Galen M. Shipman: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I decided to try OpenMPI using the 'openib' module, rather than 'mvapi';  
<br>
however I'm having a bit of difficulty:
<br>
<p>The test hardware is the same as in my earlier posts, the only software  
<br>
difference is:
<br>
<p>Linux 2.6.14 (OpenIB 2nd gen IB drivers)
<br>
OpenIB userspace tools (svn from openib.org)
<br>
OpenMPI (svn revision 8046)
<br>
<p>I'm executing the program using:
<br>
<p>mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0svn/ --mca btl openib -np  
<br>
100 -machinefile nodelist &lt;program&gt;
<br>
<p>I receive the following error:
<br>
***
<br>
[0,1,0][btl_openib_component.c:341:mca_btl_openib_component_init]  error  
<br>
obtaining device context for mthca0 errno says No such file or directory
<br>
<p>--------------------------------------------------------------------------
<br>
No available btl components were found!
<br>
***
<br>
<p>The output of ompi_info is included; it appears that the openib btl  
<br>
component does exist, however.
<br>
<p>Interestingly enough, if I use
<br>
<p>mpirun --prefix /usr/x86_64-gcc-3.3.3/openmpi-1.0svn/ --mca ptl openib -np  
<br>
100 -machinefile nodelist &lt;program&gt;
<br>
<p>The program will execute; which is even more interesting:
<br>
* There is no openib ptl (or at least, there isn't one in ompi_info, nor  
<br>
is there a corresponding mca_ptl_openib.la or .so file)
<br>
* Even though 'openib' is specified, the TCP interface is used.  (not a  
<br>
bug, but a feature?)
<br>
* Before execution begins, I receive this error (but execution then  
<br>
continues):
<br>
***
<br>
[0,1,1][btl_openib_component.c:341:mca_btl_openib_component_init]  error  
<br>
obtaining device context for mthca0 errno says No such file or directory
<br>
***
<br>
<p>Thoughts?
<br>

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0294/ompi_info.out">ompi_info.out</a>
</ul>
<!-- attachment="ompi_info.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0295.php">Galen M. Shipman: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>Previous message:</strong> <a href="0293.php">Jeff Squyres: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0295.php">Galen M. Shipman: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>Reply:</strong> <a href="0295.php">Galen M. Shipman: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
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
