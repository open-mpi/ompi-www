<?
$subject_val = "[OMPI users] Problem when installing Rmpi package in HPC cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 06:56:42 2016" -->
<!-- isoreceived="20160711105642" -->
<!-- sent="Mon, 11 Jul 2016 18:56:40 +0800" -->
<!-- isosent="20160711105640" -->
<!-- name="pan yang" -->
<!-- email="hippolionforlily_at_[hidden]" -->
<!-- subject="[OMPI users] Problem when installing Rmpi package in HPC cluster" -->
<!-- id="CACD_QsVTP-7w7SxbqjgUXMzV6iYrRpxYSF+ABO1uG1Fcsm0ogw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem when installing Rmpi package in HPC cluster<br>
<strong>From:</strong> pan yang (<em>hippolionforlily_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-11 06:56:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29634.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Previous message:</strong> <a href="29632.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29634.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Reply:</strong> <a href="29634.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Maybe reply:</strong> <a href="29640.php">pan yang: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI community,
<br>
<p>I faced this problem when I am installing the Rmpi:
<br>
<p><span class="quotelev1">&gt; install.packages('Rmpi',repos='<a href="http://cran.r-project.org">http://cran.r-project.org</a>
</span><br>
',configure.args=c(
<br>
+ '--with-Rmpi-include=/usr/mpi/gcc/openmpi-1.8.2/include/',
<br>
+ '--with-Rmpi-libpath=/usr/mpi/gcc/openmpi-1.8.2/lib64/',
<br>
+ '--with-Rmpi-type=OPENMPI'))
<br>
Installing package into ?d1/pyangac/R_lilbs?
<br>
(as &#230;&#187;&#142;ib?is unspecified)
<br>
trying URL '<a href="http://cran.r-project.org/src/contrib/Rmpi_0.6-6.tar.gz">http://cran.r-project.org/src/contrib/Rmpi_0.6-6.tar.gz</a>'
<br>
Content type 'application/x-gzip' length 105181 bytes (102 Kb)
<br>
opened URL
<br>
==================================================
<br>
downloaded 102 Kb
<br>
<p>* installing *source* package &#230;&#167;&#148;mpi?...
<br>
** package &#230;&#167;&#148;mpi?successfully unpacked and MD5 sums checked
<br>
checking for openpty in -lutil... no
<br>
checking for main in -lpthread... no
<br>
configure: creating ./config.status
<br>
config.status: creating src/Makevars
<br>
** libs
<br>
gcc -m64 -std=gnu99 -I/usr/include/R -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -DPACKAGE_URL=\&quot;\&quot;
<br>
-I/usr/mpi/gcc/openmpi-1.8.2/include/  -DMPI2 -DOPENMPI
<br>
-I/usr/local/include    -fpic  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
<br>
-mtune=generic  -c Rmpi.c -o Rmpi.o
<br>
gcc -m64 -std=gnu99 -I/usr/include/R -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -DPACKAGE_URL=\&quot;\&quot;
<br>
-I/usr/mpi/gcc/openmpi-1.8.2/include/  -DMPI2 -DOPENMPI
<br>
-I/usr/local/include    -fpic  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
<br>
-mtune=generic  -c conversion.c -o conversion.o
<br>
gcc -m64 -std=gnu99 -I/usr/include/R -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
<br>
-DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
<br>
-DPACKAGE_BUGREPORT=\&quot;\&quot; -DPACKAGE_URL=\&quot;\&quot;
<br>
-I/usr/mpi/gcc/openmpi-1.8.2/include/  -DMPI2 -DOPENMPI
<br>
-I/usr/local/include    -fpic  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
<br>
-mtune=generic  -c internal.c -o internal.o
<br>
gcc -m64 -std=gnu99 -shared -L/usr/local/lib64 -o Rmpi.so Rmpi.o
<br>
conversion.o internal.o -L/usr/mpi/gcc/openmpi-1.8.2/lib64/ -lmpi
<br>
-L/usr/lib64/R/lib -lR
<br>
installing to /d1/pyangac/R_lilbs/Rmpi/libs
<br>
** R
<br>
** demo
<br>
** inst
<br>
** preparing package for lazy loading
<br>
** help
<br>
*** installing help indices
<br>
&nbsp;&nbsp;converting help for package &#230;&#167;&#148;mpi?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;finding HTML links ... done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hosts                                   html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;internal                                html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.abort                               html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.apply                               html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.barrier                             html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.bcast                               html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.bcast.Robj                          html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.bcast.cmd                           html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.cart.coords                         html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.cart.create                         html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.cart.get                            html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.cart.rank                           html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.cart.shift                          html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.cartdim.get                         html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.comm                                html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.comm.disconnect                     html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.comm.free                           html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.comm.inter                          html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.comm.set.errhandler                 html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.comm.spawn                          html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.const                               html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.dims.create                         html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.exit                                html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.finalize                            html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.gather                              html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.gather.Robj                         html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.get.count                           html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.get.processor.name                  html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.get.sourcetag                       html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.iapply                              html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.info                                html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.intercomm.merge                     html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.parSim                              html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.parapply                            html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.probe                               html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.realloc                             html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.reduce                              html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.remote.exec                         html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.scatter                             html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.scatter.Robj                        html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.send                                html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.send.Robj                           html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.sendrecv                            html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.setup.rng                           html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.spawn.Rslaves                       html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.universe.size                       html
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi.wait                                html
<br>
** building package indices
<br>
** testing if installed package can be loaded
<br>
--------------------------------------------------------------------------
<br>
Error obtaining unique transport key from ORTE
<br>
(orte_precondition_transports not present in
<br>
the environment).
<br>
<p>&nbsp;&nbsp;Local host: login-0
<br>
<p>--------------------------------------------------------------------------
<br>
[login-0.local:18260] Error: mtl_mxm.c:287 - ompi_mtl_mxm_module_init()
<br>
Failed to generate jobid
<br>
* DONE (Rmpi)
<br>
<p>The downloaded source packages are in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?tmp/RtmpKdDI0H/downloaded_packages?
<br>
(Please forgive me about the unreadable codes, they just came out with no
<br>
reason...)
<br>
<p>Before that I have set export
<br>
LD_LIBRARY_PATH=/usr/mpi/gcc/openmpi-1.8.2/lib64
<br>
and                           export LD_PRELOAD=/usr/lib64/libutil.so
<br>
<p>Somehow the Rmpi cannot be loaded even though it has been installed
<br>
successfully. Can
<br>
anyone kindly give me some hint on what should be done?
<br>
<p>Thanks a lot.
<br>
<p>Pan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29633/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29634.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Previous message:</strong> <a href="29632.php">Mahmood Naderan: "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29634.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Reply:</strong> <a href="29634.php">Gilles Gouaillardet: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>Maybe reply:</strong> <a href="29640.php">pan yang: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
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
