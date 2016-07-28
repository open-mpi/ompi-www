<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 11:35:40 2007" -->
<!-- isoreceived="20070619153540" -->
<!-- sent="Tue, 19 Jun 2007 08:35:35 -0700 (PDT)" -->
<!-- isosent="20070619153535" -->
<!-- name="Alf Wachsmann" -->
<!-- email="alfw_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with user shell and mpirun-prefix" -->
<!-- id="Pine.LNX.4.64.0706190834530.19554_at_iris03.slac.stanford.edu" -->
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
<strong>From:</strong> Alf Wachsmann (<em>alfw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-19 11:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3501.php">Chris Reeves: "[OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI users] Problem with user shell and mpirun-prefix"</a>
<li><strong>Reply:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI users] Problem with user shell and mpirun-prefix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have compiled OpenMPI 1.2.2 with the &quot;--enable-mpirun-prefix-by-default&quot;
<br>
option to avoid users having to set their LD_LIBRARY_PATH.
<br>
This works fine for compute nodes where users are allowed to login.
<br>
<p>Users are not allowed to login to our production clusters directly.
<br>
Instead, they have to use our LSF batch system to submit their OpenMPI
<br>
jobs. This makes the mpirun-prefix fail for the LD_LIBRARY_PATH.
<br>
<p>In line 568 of openmpi-1.2.2/orte/mca/pls/rsh/pls_rsh_module.c
<br>
the call &quot;p = getpwuid(getuid());&quot; returns an invalid shell on our compute
<br>
nodes. This leads to &quot;pls:rsh: local csh: 0, local sh: 0&quot;, i.e. the local
<br>
shell is not defined and only the user's ~/.profile gets exectuted in lines
<br>
649ff. This forces users to set their LD_LIBRARY_PATH instead of having
<br>
OpenMPI do this for them in lines 981ff.
<br>
<p>Before LSF starts a user job, it sets their complete environment including
<br>
the SHELL environment variable. I am wondering whether OpenMPI could look
<br>
at that env. variable in lines 567ff in addition to or instead of the
<br>
getpwuid() call.
<br>
<p>Many thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alf.
<br>
<p>-----------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;Alf Wachsmann                       | e-mail: alfw_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;SLAC - Scientific Computing         | Phone:  +1-650-926-4802
<br>
&nbsp;&nbsp;&nbsp;2575 Sand Hill Road, M/S 97         | FAX:    +1-650-926-3329
<br>
&nbsp;&nbsp;&nbsp;Menlo Park, CA 94025, USA           | Office: Bldg. 50/323
<br>
-----------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.slac.stanford.edu/~alfw">http://www.slac.stanford.edu/~alfw</a> (PGP)
<br>
-----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3501.php">Chris Reeves: "[OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI users] Problem with user shell and mpirun-prefix"</a>
<li><strong>Reply:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI users] Problem with user shell and mpirun-prefix"</a>
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
