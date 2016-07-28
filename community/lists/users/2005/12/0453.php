<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 30 13:02:51 2005" -->
<!-- isoreceived="20051230180251" -->
<!-- sent="Fri, 30 Dec 2005 13:05:11 -0500 (EST)" -->
<!-- isosent="20051230180511" -->
<!-- name="Michael L. Stokes" -->
<!-- email="mstokes_at_[hidden]" -->
<!-- subject="[O-MPI users] (no subject)" -->
<!-- id="54924.70.210.27.171.1135965911.squirrel_at_loginhost.osc.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Michael L. Stokes (<em>mstokes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-30 13:05:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0454.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="0452.php">psksvp: "[O-MPI users] building  openmpi1.0.1 on cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0454.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="0454.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Users,
<br>
<p>I have compiled and installed OpenMPI on a SUSE based SGI PRISM (8
<br>
processor model).  I configured the build with --with-device=ch_shmem,
<br>
otherwise I took all the defaults. I installed as root using the default
<br>
install prefix. SO good so far.  Then I compile my hello world project
<br>
using mpiCC, and again this looks good. I run ldd on the executable and I
<br>
was convinced that is is using the OpenMPI libs and not the MPT libs.
<br>
<p>However, when I run it using mpirun -np 4 a.out, I get no output to the
<br>
screen and top only reports that mpirun is there (no a.out's).  I cannot
<br>
kill the process using a keyboard interrupt.
<br>
<p>I would appreciate any advise on either how to build, run, or debug this app.
<br>
<p>Thanks
<br>
Mike
<br>
<p><p>Michael L. Stokes, Ph.D.
<br>
Integrated Modeling &amp; Testing On-site Lead
<br>
<p>RTTC/WST&amp;E Support
<br>
Room 27 Building 4500
<br>
Redstone Arsenal, AL 35898
<br>
<p>Ohio Supercomputer Center
<br>
1224 Kinnear Road
<br>
Columbus, OH 43212-1163
<br>
<p>256.876.5967 phone
<br>
256.876.7918 fax
<br>
mstokes_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0454.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="0452.php">psksvp: "[O-MPI users] building  openmpi1.0.1 on cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0454.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="0454.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
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
