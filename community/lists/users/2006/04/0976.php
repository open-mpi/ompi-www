<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr  8 04:45:06 2006" -->
<!-- isoreceived="20060408084506" -->
<!-- sent="Sat, 8 Apr 2006 02:45:01 -0600" -->
<!-- isosent="20060408084501" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform" -->
<!-- id="797EA19C-363B-4F2B-8FE8-6B0211168D0F_at_lanl.gov" -->
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
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-08 04:45:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0977.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Previous message:</strong> <a href="0975.php">Mars Lenjoy: "[OMPI users] any checkpoint/restart function in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0985.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Maybe reply:</strong> <a href="0985.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build a 32-bit compatible OpenMPI for our 64-bit Bproc  
<br>
Opteron systems.   I saw the thread from last August-September 2005  
<br>
regarding this but didn't see where it ever succeeded or if any of  
<br>
the problems had been fixed.  Most importantly, romio is required to  
<br>
work as well.
<br>
<p>Is this possible and how is it done?  Here's what I have tried so far:
<br>
<p>setenv CFLAGS -m32
<br>
setenv CXXFLAGS -m32
<br>
setenv FFLAGS -m32
<br>
setenv F90FLAGS -m32
<br>
<p>I have used the '--build=i686-pc-linux-gnu' option to the configure  
<br>
setup as well as --with-io-romio-flags=&quot;--build=i686-pc-linux-gnu&quot;
<br>
<p>configure halts with errors when trying to run the Fortran 77 tests.   
<br>
If I remove those env settings and just use the --build option,  
<br>
configure will proceed to the end but the make will eventually halt  
<br>
with errors due to a mix of lib64 libs being accessed at some point.
<br>
<p>Any ideas?
<br>
<p>-david
<br>
<pre>
--
David Gunter
CCN-8: HPC Environments: Parallel Tools Team
Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0977.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Previous message:</strong> <a href="0975.php">Mars Lenjoy: "[OMPI users] any checkpoint/restart function in Open-MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0985.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Maybe reply:</strong> <a href="0985.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
