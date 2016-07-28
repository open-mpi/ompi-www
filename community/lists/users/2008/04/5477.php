<?
$subject_val = "[OMPI users] Problem compiling open MPI on cygwin on windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 19:50:07 2008" -->
<!-- isoreceived="20080423235007" -->
<!-- sent="Wed, 23 Apr 2008 16:51:35 -0700" -->
<!-- isosent="20080423235135" -->
<!-- name="Michael" -->
<!-- email="mthomson_at_[hidden]" -->
<!-- subject="[OMPI users] Problem compiling open MPI on cygwin on windows" -->
<!-- id="480FCB87.7070304_at_sunwave.net" -->
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
<strong>Subject:</strong> [OMPI users] Problem compiling open MPI on cygwin on windows<br>
<strong>From:</strong> Michael (<em>mthomson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-23 19:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5478.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>Previous message:</strong> <a href="5476.php">Alberto Giannetti: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5479.php">George Bosilca: "Re: [OMPI users] Problem compiling open MPI on cygwin on windows"</a>
<li><strong>Reply:</strong> <a href="5479.php">George Bosilca: "Re: [OMPI users] Problem compiling open MPI on cygwin on windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>New to open MPI, but have used MPI before.
<br>
<p>I am trying to compile open MPI on cygwin on widows XP.  From what I 
<br>
have read this should work?
<br>
<p>Initially I hit  a problem with the 1.2.6  standard download in that  
<br>
time related header file was incorrect and the mailing list pointed me 
<br>
to  the trunk  build to solve that problem.
<br>
<p>Now when I try to compile I am  getting the following error at the 
<br>
bottom of this mail.
<br>
<p>My question is am I wasting my time trying to use cygwin, or are there 
<br>
people out there using it on cygwin.  If so, is there a solution to the 
<br>
problem below?
<br>
<p>Thanks in Advance,
<br>
Michael.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include 
<br>
-I../../../../orte/include -I../../../../ompi/include -I../../../../op
<br>
al/mca/paffinity/linux/plpa/src/libplpa -I../../../.. -D_REENTRANT -O3 
<br>
-DNDEBUG -finline-functions -fno-strict-aliasing -MT paffinity_window
<br>
s_module.lo -MD -MP -MF .deps/paffinity_windows_module.Tpo -c 
<br>
paffinity_windows_module.c  -DDLL_EXPORT -DPIC -o 
<br>
.libs/paffinity_windows_modu
<br>
le.o
<br>
paffinity_windows_module.c:41: error: parse error before &quot;sys_info&quot;
<br>
paffinity_windows_module.c:41: warning: data definition has no type or 
<br>
storage class
<br>
paffinity_windows_module.c: In function `windows_module_get_num_procs':
<br>
paffinity_windows_module.c:90: error: request for member 
<br>
`dwNumberOfProcessors' in something not a structure or union
<br>
paffinity_windows_module.c: In function `windows_module_set':
<br>
paffinity_windows_module.c:96: error: `HANDLE' undeclared (first use in 
<br>
this function)
<br>
paffinity_windows_module.c:96: error: (Each undeclared identifier is 
<br>
reported only once
<br>
paffinity_windows_module.c:96: error: for each function it appears in.)
<br>
paffinity_windows_module.c:96: error: parse error before &quot;threadid&quot;
<br>
paffinity_windows_module.c:97: error: `DWORD_PTR' undeclared (first use 
<br>
in this function)
<br>
paffinity_windows_module.c:99: error: `threadid' undeclared (first use 
<br>
in this function)
<br>
paffinity_windows_module.c:99: error: `process_mask' undeclared (first 
<br>
use in this function)
<br>
paffinity_windows_module.c:99: error: `system_mask' undeclared (first 
<br>
use in this function)
<br>
paffinity_windows_module.c: In function `windows_module_get':
<br>
paffinity_windows_module.c:116: error: `HANDLE' undeclared (first use in 
<br>
this function)
<br>
paffinity_windows_module.c:116: error: parse error before &quot;threadid&quot;
<br>
paffinity_windows_module.c:117: error: `DWORD_PTR' undeclared (first use 
<br>
in this function)
<br>
paffinity_windows_module.c:119: error: `threadid' undeclared (first use 
<br>
in this function)
<br>
paffinity_windows_module.c:119: error: `process_mask' undeclared (first 
<br>
use in this function)
<br>
paffinity_windows_module.c:119: error: `system_mask' undeclared (first 
<br>
use in this function)
<br>
make[2]: *** [paffinity_windows_module.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/home/Michael/mpi/openmpi-1.3a1r18208/opal/mca/paffinity/windows'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/Michael/mpi/openmpi-1.3a1r18208/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5478.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<li><strong>Previous message:</strong> <a href="5476.php">Alberto Giannetti: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5479.php">George Bosilca: "Re: [OMPI users] Problem compiling open MPI on cygwin on windows"</a>
<li><strong>Reply:</strong> <a href="5479.php">George Bosilca: "Re: [OMPI users] Problem compiling open MPI on cygwin on windows"</a>
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
