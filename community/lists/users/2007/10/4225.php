<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 13:52:08 2007" -->
<!-- isoreceived="20071016175208" -->
<!-- sent="Tue, 16 Oct 2007 11:51:06 -0600" -->
<!-- isosent="20071016175106" -->
<!-- name="Victor Prosolin" -->
<!-- email="victor.prosolin_at_[hidden]" -->
<!-- subject="[OMPI users] broken symbolic links when configured with --program-suffix" -->
<!-- id="4714FA0A.7020505_at_gmail.com" -->
<!-- charset="windows-1251" -->
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
<strong>From:</strong> Victor Prosolin (<em>victor.prosolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-16 13:51:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4226.php">Jeff Squyres: "Re: [OMPI users] broken symbolic links when configured with --program-suffix"</a>
<li><strong>Previous message:</strong> <a href="4224.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4226.php">Jeff Squyres: "Re: [OMPI users] broken symbolic links when configured with --program-suffix"</a>
<li><strong>Reply:</strong> <a href="4226.php">Jeff Squyres: "Re: [OMPI users] broken symbolic links when configured with --program-suffix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all.
<br>
This is a bug report, though minor.
<br>
Briefly: when I configure openmpi with the option
<br>
--program-suffix=-gcc-4.3 I get a bunch of symbolic links that point to
<br>
non-existing files.
<br>
<p>Here is then configure command:
<br>
<p>&nbsp;FC=gfortran-4.3 F77=gfortran-4.3 CC=gcc-4.3 ./configure
<br>
--enable-mpi-f77 --enable-mpi-f90 --enable-static --disable-shared
<br>
--prefix=/localhome/vic/programs --program-suffix=-gcc-4.3
<br>
<p>Here is &quot;ls -l&quot; /localhome/vic/programs/bin
<br>
lrwxrwxrwx 1 vic vic      12 Oct 16 11:19 mpic++ -&gt; opal_wrapper
<br>
lrwxrwxrwx 1 vic vic      12 Oct 16 11:19 mpicc -&gt; opal_wrapper
<br>
lrwxrwxrwx 1 vic vic      12 Oct 16 11:19 mpiCC -&gt; opal_wrapper
<br>
lrwxrwxrwx 1 vic vic      12 Oct 16 11:19 mpicxx -&gt; opal_wrapper
<br>
lrwxrwxrwx 1 vic vic       7 Oct 16 11:19 mpiexec -&gt; orterun
<br>
lrwxrwxrwx 1 vic vic      12 Oct 16 11:19 mpif77 -&gt; opal_wrapper
<br>
lrwxrwxrwx 1 vic vic      12 Oct 16 11:19 mpif90 -&gt; opal_wrapper
<br>
lrwxrwxrwx 1 vic vic       7 Oct 16 11:19 mpirun -&gt; orterun
<br>
-rwxr-xr-x 1 vic vic 2261137 Oct 16 11:19 ompi_info-gcc-4.3
<br>
-rwxr-xr-x 1 vic vic  212716 Oct 16 11:18 opal_wrapper-gcc-4.3
<br>
-rwxr-xr-x 1 vic vic 1112352 Oct 16 11:18 orted-gcc-4.3
<br>
-rwxr-xr-x 1 vic vic 1180508 Oct 16 11:18 orterun-gcc-4.3
<br>
<p><p>opal_wrapper and orterun do not exist, so all symbolic links are broken.
<br>
All symbolic links (except mpirun and mpiexec) should point to
<br>
opal_wrapper-gcc-4.3 instead of just opal_wrapper, and mpirun and
<br>
mpiexec should point to orterun-gcc-4.3 instead of just orterun. So
<br>
basically, the custom program-prefix did not work for some files.
<br>
<p>OpenMPI version 1.2.4.
<br>
<p>I can provide more information if needed.
<br>
<p><p>Sincerely,
<br>
Victor.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4226.php">Jeff Squyres: "Re: [OMPI users] broken symbolic links when configured with --program-suffix"</a>
<li><strong>Previous message:</strong> <a href="4224.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4226.php">Jeff Squyres: "Re: [OMPI users] broken symbolic links when configured with --program-suffix"</a>
<li><strong>Reply:</strong> <a href="4226.php">Jeff Squyres: "Re: [OMPI users] broken symbolic links when configured with --program-suffix"</a>
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
