<?
$subject_val = "Re: [OMPI users] Debian MPI -- mpirun missing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 12:11:53 2008" -->
<!-- isoreceived="20081017161153" -->
<!-- sent="Fri, 17 Oct 2008 11:11:48 -0500" -->
<!-- isosent="20081017161148" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debian MPI -- mpirun missing" -->
<!-- id="18680.47428.420995.768246_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48F8AC60.2090901_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debian MPI -- mpirun missing<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 12:11:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7019.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Previous message:</strong> <a href="7017.php">Ashley Pittman: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>In reply to:</strong> <a href="7011.php">Raymond Wan: "[OMPI users] Debian MPI -- mpirun missing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7019.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Reply:</strong> <a href="7019.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 18 October 2008 at 00:16, Raymond Wan wrote:
<br>
| 
<br>
| Hi all,
<br>
| 
<br>
| I'm very new to MPI and am trying to install it on to a Debian Etch 
<br>
| system.  I did have mpich installed and I believe that is causing me 
<br>
<p>Etch is getting old, and its Open MPI 1.1 package were in suboptimal shape.
<br>
A few of us get together as a new Open MPI team within Debian, and 1.2.*
<br>
packages are in much better shape. So please try to get 1.2 packages.
<br>
<p>| problems.  I completely uninstalled it and then ran:
<br>
| 
<br>
| update-alternatives --remove-all mpicc
<br>
| 
<br>
| Then, I installed the following packages:
<br>
| 
<br>
| libibverbs1 openmpi-bin openmpi-common openmpi-libs0 openmpi-dbg openmpi-dev
<br>
| 
<br>
| And it now says:
<br>
| 
<br>
|  &gt;&gt; update-alternatives --display mpicc
<br>
| mpicc - status is auto.
<br>
|  link currently points to /usr/bin/mpicc.openmpi
<br>
| /usr/bin/mpicc.openmpi - priority 40
<br>
|  slave mpif90: /usr/bin/mpif90.openmpi
<br>
|  slave mpiCC: /usr/bin/mpic++.openmpi
<br>
|  slave mpic++: /usr/bin/mpic++.openmpi
<br>
|  slave mpif77: /usr/bin/mpif77.openmpi
<br>
|  slave mpicxx: /usr/bin/mpic++.openmpi
<br>
| Current `best' version is /usr/bin/mpicc.openmpi.
<br>
| 
<br>
| which seems ok to me...  So, I tried to compile something (I had sample 
<br>
| code from a book I purchased a while back, but for mpich), however, I 
<br>
| can run the program as-is, but I think I should be running it with 
<br>
| mpirun -- the FAQ suggests there is one?  But, there is no mpirun 
<br>
| anywhere.  It's not in /usr/bin.  I updated the filename database 
<br>
| (updatedb) and tried a &quot;locate mpirun&quot;, and I get only one hit:
<br>
<p>Well when I use Open MPI I go with the new convention and call orterun
<br>
instead of mpirun. I think you should have.  Maybe a local alias in your
<br>
~/.bashrc can do the trick.
<br>
<p>Current packages do have mpirun.openmpi but we were unable to devise a
<br>
bullet-proof scheme between lam, mpich and Open MPI for sharing / updating /
<br>
... the alternatives links as there are sublte differences that prevent us
<br>
from switching all these aliases consistently.
<br>
<p>Hope this helps, Dirk
<br>
<p>| 
<br>
| /usr/include/openmpi/ompi/runtime/mpiruntime.h
<br>
| 
<br>
| Is there a package that I neglected to install?  I did an &quot;aptitude 
<br>
| search openmpi&quot; and installed everything listed...  :-)  Or perhaps I 
<br>
| haven't removed all trace of mpich?
<br>
| 
<br>
| Thank you in advance!
<br>
| 
<br>
| Ray
<br>
| 
<br>
| 
<br>
| _______________________________________________
<br>
| users mailing list
<br>
| users_at_[hidden]
<br>
| <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7019.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Previous message:</strong> <a href="7017.php">Ashley Pittman: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>In reply to:</strong> <a href="7011.php">Raymond Wan: "[OMPI users] Debian MPI -- mpirun missing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7019.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Reply:</strong> <a href="7019.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
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
