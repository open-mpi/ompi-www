<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 21 17:32:44 2007" -->
<!-- isoreceived="20070821213244" -->
<!-- sent="Tue, 21 Aug 2007 17:32:37 -0400" -->
<!-- isosent="20070821213237" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="[OMPI users] building static and shared OpenMPI libraries on MacOSX" -->
<!-- id="20070821213237.GD363_at_avicenna.cc.columbia.edu" -->
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
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-21 17:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3899.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<li><strong>Previous message:</strong> <a href="3897.php">Josh Aune: "[OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3899.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<li><strong>Reply:</strong> <a href="3899.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to the OpenMPI FAQ, specifying the config option
<br>
--enable-static without specifying --disable-shared should build both
<br>
shared and static versions of the libraries. When I tried these
<br>
options on MacOSX 10.4.10 with OpenMPI 1.2.3, however, the following
<br>
lines in the config output seem to imply otherwise:
<br>
<p>============================================================================
<br>
== Modular Component Architecture (MCA) setup
<br>
============================================================================
<br>
checking for subdir args...  '--enable-static'
<br>
checking for gcc... gcc
<br>
checking whether we are using the GNU Objective C compiler... yes
<br>
checking dependency style of gcc... gcc3
<br>
checking which components should be disabled... 
<br>
checking which components should be direct-linked into the library... 
<br>
checking which components should be run-time loadable... none
<br>
configure: WARNING: *** Shared libraries have been disabled (--disable-shared)
<br>
configure: WARNING: *** Building MCA components as DSOs automatically disabled
<br>
checking which components should be static... none
<br>
checking for projects containing MCA frameworks... opal, orte, ompi
<br>
<p>Specifying --enable-shared --enable-static results in the same
<br>
behavior, incidentally. Is the above to be expected? 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L.G.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3899.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<li><strong>Previous message:</strong> <a href="3897.php">Josh Aune: "[OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3899.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<li><strong>Reply:</strong> <a href="3899.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
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
