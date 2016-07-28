<?
$subject_val = "[OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 07:47:44 2015" -->
<!-- isoreceived="20150508114744" -->
<!-- sent="Fri, 8 May 2015 14:47:21 +0300" -->
<!-- isosent="20150508114721" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization" -->
<!-- id="CAEcYPwBxCYj-LhK-6AePCJgPUbDBoUnT9o33vp=RdVQ3oH2g9Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-08 07:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17392.php">Howard Pritchard: "[OMPI devel] oops, jenkins mishap"</a>
<li><strong>Previous message:</strong> <a href="17390.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17508.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17508.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A build of 1.8.4 with just &quot;./configure --prefix=...&quot; produces the
<br>
following VT libraries with reasonable sizes which are similar to
<br>
previous releases (the largest one is 1.5 MB):
<br>
<p>$ cd /home/devel/mpi/openmpi/1.8.4/lib/ &amp;&amp; ls -lh *.a
<br>
-rw-r--r--. 1 dalcinl users 531K May  8 13:42 libopen-trace-format.a
<br>
-rw-r--r--. 1 dalcinl users  44K May  8 13:42 libotfaux.a
<br>
-rw-r--r--. 1 dalcinl users 664K May  8 13:42 libvt.a
<br>
-rw-r--r--. 1 dalcinl users 1.1M May  8 13:42 libvt-hyb.a
<br>
-rw-r--r--. 1 dalcinl users 970K May  8 13:42 libvt-mpi.a
<br>
-rw-r--r--. 1 dalcinl users 1.5M May  8 13:42 libvt-mpi-unify.a
<br>
-rw-r--r--. 1 dalcinl users 655K May  8 13:42 libvt-mt.a
<br>
-rw-r--r--. 1 dalcinl users  65K May  8 13:42 libvt-pomp.a
<br>
<p>After cheking the build directory, I confirm VT seems to be being
<br>
built with optimization and no debug symbols:
<br>
$ grep CFLAGS /home/dalcinl/Devel/BUILD/openmpi-1.8.4/ompi/contrib/vt/vt/Makefile
<br>
CFLAGS = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
<br>
CFLAGS_FOR_BUILD = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
<br>
<p>However, after building 1.8.5 exactly the same way (i.e, just
<br>
./configure --prefix=...), VT libraries have much larger sizes (the
<br>
largest one is now 16 MB, i.e. 10 times larger):
<br>
<p>$ cd /home/devel/mpi/openmpi/1.8.5/lib/ &amp;&amp; ls -lh *.a
<br>
-rw-r--r--. 1 dalcinl users 1.7M May  8 13:42 libopen-trace-format.a
<br>
-rw-r--r--. 1 dalcinl users 181K May  8 13:42 libotfaux.a
<br>
-rw-r--r--. 1 dalcinl users 1.9M May  8 13:43 libvt.a
<br>
-rw-r--r--. 1 dalcinl users 2.9M May  8 13:43 libvt-hyb.a
<br>
-rw-r--r--. 1 dalcinl users 2.8M May  8 13:43 libvt-mpi.a
<br>
-rw-r--r--. 1 dalcinl users  16M May  8 13:43 libvt-mpi-unify.a
<br>
-rw-r--r--. 1 dalcinl users 1.9M May  8 13:43 libvt-mt.a
<br>
-rw-r--r--. 1 dalcinl users 175K May  8 13:43 libvt-pomp.a
<br>
<p>and after inspecting CFLAGS in the build directory I get:
<br>
<p>$ grep CFLAGS /home/dalcinl/Devel/BUILD/openmpi-1.8.5/ompi/contrib/vt/vt/Makefile
<br>
CFLAGS = -g -O2
<br>
CFLAGS_FOR_BUILD = -g -O2
<br>
<p>However, plase take a look at the Makefile in one directory up:
<br>
<p>$ grep CFLAGS /home/dalcinl/Devel/BUILD/openmpi-1.8.5/ompi/contrib/vt/Makefile
<br>
CFLAGS = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
<br>
CFLAGS_WITHOUT_OPTFLAGS =  -DNDEBUG -fno-strict-aliasing -pthread
<br>
<p>So it seems that in 1.8.5 CFLAGS is not being propagated from
<br>
ompi/contrib/vt to ompi/contrib/vt/vt
<br>
<p>Given that the Makefile ompi/contrib/vt looks ok, but the all the
<br>
others in subdirs under ompi/contrib/vt are not, this smells as a
<br>
build regression your are likely not aware of.
<br>
<p><p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17392.php">Howard Pritchard: "[OMPI devel] oops, jenkins mishap"</a>
<li><strong>Previous message:</strong> <a href="17390.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17508.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17508.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
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
