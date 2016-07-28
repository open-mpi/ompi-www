<?
$subject_val = "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 07:03:57 2016" -->
<!-- isoreceived="20160711110357" -->
<!-- sent="Mon, 11 Jul 2016 20:03:55 +0900" -->
<!-- isosent="20160711110355" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem when installing Rmpi package in HPC cluster" -->
<!-- id="CAAkFZ5u68ry4st64hpMZCTrkSLhiswzdjin6hJoKcfGrJQ9khQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CACD_QsVTP-7w7SxbqjgUXMzV6iYrRpxYSF+ABO1uG1Fcsm0ogw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem when installing Rmpi package in HPC cluster<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-11 07:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29635.php">Michael Di Domenico: "[OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29633.php">pan yang: "[OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>In reply to:</strong> <a href="29633.php">pan yang: "[OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29640.php">pan yang: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That could be specific to mtl/mxm
<br>
<p>could you
<br>
export OMPI_MCA_pml=ob1
<br>
and try again ?
<br>
<p>can you also extract the command tha launch the test ?
<br>
I am curious whether this is via mpirun or as a singleton
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, July 11, 2016, pan yang &lt;hippolionforlily_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI community,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I faced this problem when I am installing the Rmpi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; install.packages('Rmpi',repos='<a href="http://cran.r-project.org">http://cran.r-project.org</a>
</span><br>
<span class="quotelev1">&gt; ',configure.args=c(
</span><br>
<span class="quotelev1">&gt; + '--with-Rmpi-include=/usr/mpi/gcc/openmpi-1.8.2/include/',
</span><br>
<span class="quotelev1">&gt; + '--with-Rmpi-libpath=/usr/mpi/gcc/openmpi-1.8.2/lib64/',
</span><br>
<span class="quotelev1">&gt; + '--with-Rmpi-type=OPENMPI'))
</span><br>
<span class="quotelev1">&gt; Installing package into ?d1/pyangac/R_lilbs?
</span><br>
<span class="quotelev1">&gt; (as &#230;&#187;&#142;ib?is unspecified)
</span><br>
<span class="quotelev1">&gt; trying URL '<a href="http://cran.r-project.org/src/contrib/Rmpi_0.6-6.tar.gz">http://cran.r-project.org/src/contrib/Rmpi_0.6-6.tar.gz</a>'
</span><br>
<span class="quotelev1">&gt; Content type 'application/x-gzip' length 105181 bytes (102 Kb)
</span><br>
<span class="quotelev1">&gt; opened URL
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; downloaded 102 Kb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * installing *source* package &#230;&#167;&#148;mpi?...
</span><br>
<span class="quotelev1">&gt; ** package &#230;&#167;&#148;mpi?successfully unpacked and MD5 sums checked
</span><br>
<span class="quotelev1">&gt; checking for openpty in -lutil... no
</span><br>
<span class="quotelev1">&gt; checking for main in -lpthread... no
</span><br>
<span class="quotelev1">&gt; configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; config.status: creating src/Makevars
</span><br>
<span class="quotelev1">&gt; ** libs
</span><br>
<span class="quotelev1">&gt; gcc -m64 -std=gnu99 -I/usr/include/R -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -DPACKAGE_URL=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -I/usr/mpi/gcc/openmpi-1.8.2/include/  -DMPI2 -DOPENMPI
</span><br>
<span class="quotelev1">&gt; -I/usr/local/include    -fpic  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; -mtune=generic  -c Rmpi.c -o Rmpi.o
</span><br>
<span class="quotelev1">&gt; gcc -m64 -std=gnu99 -I/usr/include/R -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -DPACKAGE_URL=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -I/usr/mpi/gcc/openmpi-1.8.2/include/  -DMPI2 -DOPENMPI
</span><br>
<span class="quotelev1">&gt; -I/usr/local/include    -fpic  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; -mtune=generic  -c conversion.c -o conversion.o
</span><br>
<span class="quotelev1">&gt; gcc -m64 -std=gnu99 -I/usr/include/R -DNDEBUG -DPACKAGE_NAME=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_TARNAME=\&quot;\&quot; -DPACKAGE_VERSION=\&quot;\&quot; -DPACKAGE_STRING=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -DPACKAGE_BUGREPORT=\&quot;\&quot; -DPACKAGE_URL=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt; -I/usr/mpi/gcc/openmpi-1.8.2/include/  -DMPI2 -DOPENMPI
</span><br>
<span class="quotelev1">&gt; -I/usr/local/include    -fpic  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; -mtune=generic  -c internal.c -o internal.o
</span><br>
<span class="quotelev1">&gt; gcc -m64 -std=gnu99 -shared -L/usr/local/lib64 -o Rmpi.so Rmpi.o
</span><br>
<span class="quotelev1">&gt; conversion.o internal.o -L/usr/mpi/gcc/openmpi-1.8.2/lib64/ -lmpi
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/R/lib -lR
</span><br>
<span class="quotelev1">&gt; installing to /d1/pyangac/R_lilbs/Rmpi/libs
</span><br>
<span class="quotelev1">&gt; ** R
</span><br>
<span class="quotelev1">&gt; ** demo
</span><br>
<span class="quotelev1">&gt; ** inst
</span><br>
<span class="quotelev1">&gt; ** preparing package for lazy loading
</span><br>
<span class="quotelev1">&gt; ** help
</span><br>
<span class="quotelev1">&gt; *** installing help indices
</span><br>
<span class="quotelev1">&gt;   converting help for package &#230;&#167;&#148;mpi?
</span><br>
<span class="quotelev1">&gt;     finding HTML links ... done
</span><br>
<span class="quotelev1">&gt;     hosts                                   html
</span><br>
<span class="quotelev1">&gt;     internal                                html
</span><br>
<span class="quotelev1">&gt;     mpi.abort                               html
</span><br>
<span class="quotelev1">&gt;     mpi.apply                               html
</span><br>
<span class="quotelev1">&gt;     mpi.barrier                             html
</span><br>
<span class="quotelev1">&gt;     mpi.bcast                               html
</span><br>
<span class="quotelev1">&gt;     mpi.bcast.Robj                          html
</span><br>
<span class="quotelev1">&gt;     mpi.bcast.cmd                           html
</span><br>
<span class="quotelev1">&gt;     mpi.cart.coords                         html
</span><br>
<span class="quotelev1">&gt;     mpi.cart.create                         html
</span><br>
<span class="quotelev1">&gt;     mpi.cart.get                            html
</span><br>
<span class="quotelev1">&gt;     mpi.cart.rank                           html
</span><br>
<span class="quotelev1">&gt;     mpi.cart.shift                          html
</span><br>
<span class="quotelev1">&gt;     mpi.cartdim.get                         html
</span><br>
<span class="quotelev1">&gt;     mpi.comm                                html
</span><br>
<span class="quotelev1">&gt;     mpi.comm.disconnect                     html
</span><br>
<span class="quotelev1">&gt;     mpi.comm.free                           html
</span><br>
<span class="quotelev1">&gt;     mpi.comm.inter                          html
</span><br>
<span class="quotelev1">&gt;     mpi.comm.set.errhandler                 html
</span><br>
<span class="quotelev1">&gt;     mpi.comm.spawn                          html
</span><br>
<span class="quotelev1">&gt;     mpi.const                               html
</span><br>
<span class="quotelev1">&gt;     mpi.dims.create                         html
</span><br>
<span class="quotelev1">&gt;     mpi.exit                                html
</span><br>
<span class="quotelev1">&gt;     mpi.finalize                            html
</span><br>
<span class="quotelev1">&gt;     mpi.gather                              html
</span><br>
<span class="quotelev1">&gt;     mpi.gather.Robj                         html
</span><br>
<span class="quotelev1">&gt;     mpi.get.count                           html
</span><br>
<span class="quotelev1">&gt;     mpi.get.processor.name                  html
</span><br>
<span class="quotelev1">&gt;     mpi.get.sourcetag                       html
</span><br>
<span class="quotelev1">&gt;     mpi.iapply                              html
</span><br>
<span class="quotelev1">&gt;     mpi.info                                html
</span><br>
<span class="quotelev1">&gt;     mpi.intercomm.merge                     html
</span><br>
<span class="quotelev1">&gt;     mpi.parSim                              html
</span><br>
<span class="quotelev1">&gt;     mpi.parapply                            html
</span><br>
<span class="quotelev1">&gt;     mpi.probe                               html
</span><br>
<span class="quotelev1">&gt;     mpi.realloc                             html
</span><br>
<span class="quotelev1">&gt;     mpi.reduce                              html
</span><br>
<span class="quotelev1">&gt;     mpi.remote.exec                         html
</span><br>
<span class="quotelev1">&gt;     mpi.scatter                             html
</span><br>
<span class="quotelev1">&gt;     mpi.scatter.Robj                        html
</span><br>
<span class="quotelev1">&gt;     mpi.send                                html
</span><br>
<span class="quotelev1">&gt;     mpi.send.Robj                           html
</span><br>
<span class="quotelev1">&gt;     mpi.sendrecv                            html
</span><br>
<span class="quotelev1">&gt;     mpi.setup.rng                           html
</span><br>
<span class="quotelev1">&gt;     mpi.spawn.Rslaves                       html
</span><br>
<span class="quotelev1">&gt;     mpi.universe.size                       html
</span><br>
<span class="quotelev1">&gt;     mpi.wait                                html
</span><br>
<span class="quotelev1">&gt; ** building package indices
</span><br>
<span class="quotelev1">&gt; ** testing if installed package can be loaded
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error obtaining unique transport key from ORTE
</span><br>
<span class="quotelev1">&gt; (orte_precondition_transports not present in
</span><br>
<span class="quotelev1">&gt; the environment).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host: login-0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [login-0.local:18260] Error: mtl_mxm.c:287 - ompi_mtl_mxm_module_init()
</span><br>
<span class="quotelev1">&gt; Failed to generate jobid
</span><br>
<span class="quotelev1">&gt; * DONE (Rmpi)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The downloaded source packages are in
</span><br>
<span class="quotelev1">&gt;         ?tmp/RtmpKdDI0H/downloaded_packages?
</span><br>
<span class="quotelev1">&gt; (Please forgive me about the unreadable codes, they just came out with no
</span><br>
<span class="quotelev1">&gt; reason...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before that I have set export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/mpi/gcc/openmpi-1.8.2/lib64
</span><br>
<span class="quotelev1">&gt; and                           export LD_PRELOAD=/usr/lib64/libutil.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somehow the Rmpi cannot be loaded even though it has been installed
</span><br>
<span class="quotelev1">&gt; successfully. Can
</span><br>
<span class="quotelev1">&gt; anyone kindly give me some hint on what should be done?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29634/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29635.php">Michael Di Domenico: "[OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29633.php">pan yang: "[OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>In reply to:</strong> <a href="29633.php">pan yang: "[OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29640.php">pan yang: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
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
