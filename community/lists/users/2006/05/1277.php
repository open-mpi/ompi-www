<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 17:11:34 2006" -->
<!-- isoreceived="20060524211134" -->
<!-- sent="Wed, 24 May 2006 17:10:28 -0400" -->
<!-- isosent="20060524211028" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with myirnet support on PPC" -->
<!-- id="453E68CF-605C-4450-A6BE-87F3B4245B21_at_umich.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 17:10:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1278.php">Paul: "Re: [OMPI users] Compile issue on ppc64"</a>
<li><strong>Previous message:</strong> <a href="1276.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1279.php">George Bosilca: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>Reply:</strong> <a href="1279.php">George Bosilca: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Im getting the following error when trying to build OMPI on OSX  
<br>
10.3.9  with myrinet support,  the libs are in
<br>
/opt/gm/lib
<br>
Includes:
<br>
/opt/gm/include
<br>
<p>Bellow is my configure line and the error:
<br>
./configure --prefix=/home/software/openmpi-1.0.2 --with-tm=/home/ 
<br>
software/torque-2.1.0p0 --with-gm=/opt/gm FC=/opt/ibmcmp/xlf/8.1/bin/ 
<br>
xlf90 F77=/opt/ibmcmp/xlf/8.1/bin/xlf CPPFLAGS=-I/opt/gm/include
<br>
<p>gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../ 
<br>
include -I/opt/gm/include -I../../../../include -I../../../.. - 
<br>
I../../../.. -I../../../../include -I../../../../opal -I../../../../ 
<br>
orte -I../../../../ompi -I/opt/gm/include -D_REENTRANT -O3 -DNDEBUG - 
<br>
fno-strict-aliasing -MT ptl_gm.lo -MD -MP -MF .deps/ptl_gm.Tpo -c  
<br>
ptl_gm.c  -fno-common -DPIC -o .libs/ptl_gm.o
<br>
gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../ 
<br>
include -I/opt/gm/include -I../../../../include -I../../../.. - 
<br>
I../../../.. -I../../../../include -I../../../../opal -I../../../../ 
<br>
orte -I../../../../ompi -I/opt/gm/include -D_REENTRANT -O3 -DNDEBUG - 
<br>
fno-strict-aliasing -MT ptl_gm_priv.lo -MD -MP -MF .deps/ 
<br>
ptl_gm_priv.Tpo -c ptl_gm_priv.c  -fno-common -DPIC -o .libs/ 
<br>
ptl_gm_priv.o
<br>
ptl_gm_component.c: In function `mca_ptl_gm_thread_progress':
<br>
ptl_gm_component.c:249: error: `PTHREAD_CANCELED' undeclared (first  
<br>
use in this function)
<br>
ptl_gm_component.c:249: error: (Each undeclared identifier is  
<br>
reported only once
<br>
ptl_gm_component.c:249: error: for each function it appears in.)
<br>
make[4]: *** [ptl_gm_component.lo] Error 1
<br>
make[4]: *** Waiting for unfinished jobs....
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>Could this be related to the version of the gm package we have  
<br>
installed?  Any insight would be helpful.
<br>
Brock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1278.php">Paul: "Re: [OMPI users] Compile issue on ppc64"</a>
<li><strong>Previous message:</strong> <a href="1276.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1279.php">George Bosilca: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>Reply:</strong> <a href="1279.php">George Bosilca: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
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
