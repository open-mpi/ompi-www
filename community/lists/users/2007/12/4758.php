<?
$subject_val = "[OMPI users] multi-compiler builds of OpenMPI (RPM)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 31 00:50:52 2007" -->
<!-- isoreceived="20071231055052" -->
<!-- sent="Sun, 30 Dec 2007 21:50:48 -0800" -->
<!-- isosent="20071231055048" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="[OMPI users] multi-compiler builds of OpenMPI (RPM)" -->
<!-- id="df8c8a6d0712302150k763389f6ue102a0ec7383d0a2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] multi-compiler builds of OpenMPI (RPM)<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-31 00:50:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4759.php">Neeraj Chourasia: "[OMPI users] orte in persistent mode"</a>
<li><strong>Previous message:</strong> <a href="4757.php">Reuti: "Re: [OMPI users] No output from mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4761.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Reply:</strong> <a href="4761.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4775.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I'm trying to set up a ROCKS cluster (CentOS 4.5) with OpenMPI and
<br>
GCC, PGI, and Intel compilers.  My understanding is that OpenMPI must
<br>
be compiled with each compiler.  The result (or at least, the runtime
<br>
libs) must be in .rpm format, as that is required by ROCKS compute
<br>
node deployment system.  I am also using environment modules to manage
<br>
users' environment and selecting which version of OpenMPI/compiler.
<br>
<p>I have some questions, though.
<br>
1) am I correct in that OpenMPI needs to be complied with each
<br>
compiler that will be used with it?
<br>
<p>I am currently trying to make rpms using the included .spec file
<br>
(contrib/dist/linux/openmpi.spec, IIRC).
<br>
2) How do I use it to build against different compilers and end up
<br>
with non-colliding namespaces, etc?
<br>
I am currently using the following command line:
<br>
rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
<br>
1' --define 'build_all_in_one_rpm 0' --define 'configure_options
<br>
--with-tm=/opt/torque' openmpi.spec
<br>
I am currently concerned with differentiating same version compiled
<br>
with different compilers.  I origionally changed the name (--define
<br>
'_name openmpi-gcc'), but this broke the final phases of rpm building:
<br>
&nbsp;RPM build errors:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;File not found:
<br>
/var/tmp/openmpi-gcc-1.2.4-1-root/opt/openmpi-gcc/1.2.4/share/openmpi-gcc
<br>
I tried changing the version with &quot;gcc&quot; appended, but that also broke,
<br>
and as I thought about it more, I thought that would likely induce
<br>
headaches later with rpm only letting one version installed, etc.
<br>
<p>3) Will the resulting -runtime .rpms (for the different compiler
<br>
versions) coexist peacefully without any special environment munging
<br>
on the compute nodes, or do I need modules, etc. on all the compute
<br>
nodes as well?
<br>
<p>4) I've never really used pgi or intel's compiler.  I saw notes in the
<br>
rpm about build flag problems and &quot;use your normal optimizations and
<br>
flags&quot;, etc.  As I have no concept of &quot;normal&quot; for these compilers,
<br>
are there any guides or examples I should/could use for this?
<br>
<p>And of course, I'd be grateful for any hints/tricks/etc that I didn't
<br>
ask for, as I probably still don't fully know what I'm getting into
<br>
here....there's a lot of firsts here....
<br>
<p>Thanks!
<br>
--Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4759.php">Neeraj Chourasia: "[OMPI users] orte in persistent mode"</a>
<li><strong>Previous message:</strong> <a href="4757.php">Reuti: "Re: [OMPI users] No output from mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4761.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Reply:</strong> <a href="4761.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4775.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
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
