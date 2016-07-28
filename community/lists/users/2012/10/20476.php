<?
$subject_val = "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 12 03:35:50 2012" -->
<!-- isoreceived="20121012073550" -->
<!-- sent="Fri, 12 Oct 2012 09:35:46 +0200" -->
<!-- isosent="20121012073546" -->
<!-- name="Christian Krause" -->
<!-- email="kizkizzbangbang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler" -->
<!-- id="CALqKqKm0PmpEZE56c4WXxRJcmnPH28xZmAV=PY+n5_M4UM_z3A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20121011181110.GA473_at_mobster.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler<br>
<strong>From:</strong> Christian Krause (<em>kizkizzbangbang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-12 03:35:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20477.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Previous message:</strong> <a href="20475.php">Ralph Castain: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>In reply to:</strong> <a href="20473.php">wookietreiber: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the link - also setting CXX F77 and FC did the trick :)
<br>
<p>./configure CC=icc CXX=icpc F77=ifort FC=ifort
<br>
--prefix=/usr/local/openmpi/1.6.2_intel_12.0.4 --with-sge
<br>
--with-hwloc=/usr/local/hwloc/1.5_intel_12.0.4
<br>
--with-openib-libdir=/usr/lib64 --with-udapl-libdir=/usr/lib64
<br>
<p>works.
<br>
<p>On Thu, Oct 11, 2012 at 8:11 PM, wookietreiber
<br>
&lt;kizkizzbangbang_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error I get I couldn't find in the mails from your link. But I also
</span><br>
<span class="quotelev1">&gt; didn't set CXX, F77 and FC. I'll try that tomorrow and we'll see if it
</span><br>
<span class="quotelev1">&gt; changes anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I find the error I get weird because some file is not found which
</span><br>
<span class="quotelev1">&gt; I guess should not occur when switching compilers ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 11, 2012 at 01:09:28PM -0400, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Christian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would your problem be similar to the one reported two days ago on
</span><br>
<span class="quotelev2">&gt;&gt; this thread? [It also failed to compile vampir trace tools,
</span><br>
<span class="quotelev2">&gt;&gt; it also didn't have the Intel C++ compiler specified to configure.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/10/20449.php">http://www.open-mpi.org/community/lists/users/2012/10/20449.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried to specify the Intel C++ compiler
</span><br>
<span class="quotelev2">&gt;&gt; to the configure script?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=icc CXX=icpc  ... etc, etc ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/11/2012 11:00 AM, Christian Krause wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;I tried to compile the current OpenMPI 1.6.2 with the Intel Compiler
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;# icc --version
</span><br>
<span class="quotelev3">&gt;&gt; &gt;icc (ICC) 12.0.4 20110427
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;The error I get is the following (I changed directly in the vtfilter
</span><br>
<span class="quotelev3">&gt;&gt; &gt;directory where the error occurs to reduce output for this mail):
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;# cd ompi/contrib/vt/vt/tools/vtfilter/
</span><br>
<span class="quotelev3">&gt;&gt; &gt;# make
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Making all in .
</span><br>
<span class="quotelev3">&gt;&gt; &gt;make[1]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt; &gt;`/gpfs0/global/local/src/xxx-mpi/openmpi-1.6.2/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   CXX    vtfilter-vt_filter.o
</span><br>
<span class="quotelev3">&gt;&gt; &gt;cc1plus: error: vtfilter-vt_filter.d: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt; &gt;make[1]: *** [vtfilter-vt_filter.o] Error 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt; &gt;`/gpfs0/global/local/src/xxx-mpi/openmpi-1.6.2/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;configure options from config.log:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;./configure CC=icc --prefix=/usr/local/openmpi/1.6.2_intel_12.0.4
</span><br>
<span class="quotelev3">&gt;&gt; &gt;--with-sge --with-hwloc=/usr/local/hwloc/1.5_intel_12.0.4
</span><br>
<span class="quotelev3">&gt;&gt; &gt;--with-openib-libdir=/usr/lib64 --with-udapl-libdir=/usr/lib64
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;I have already built hwloc and pciutils locally using icc. Also I
</span><br>
<span class="quotelev3">&gt;&gt; &gt;recently compiled OpenMPI 1.6.2 with gcc 4.7.1 with hwloc and pciutils
</span><br>
<span class="quotelev3">&gt;&gt; &gt;too which worked without problems (configure basically the same, i.e.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;not setting CC and using different hwloc). That's why I'm assuming the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;error is somehow icc's fault ... I'm new to this mailing list and I
</span><br>
<span class="quotelev3">&gt;&gt; &gt;already received some mails concerning the Intel Compiler so I figure
</span><br>
<span class="quotelev3">&gt;&gt; &gt;there may be others who've experienced this problem?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Thanks for any help in advance.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Regards
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Christian
</span><br>
<span class="quotelev3">&gt;&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Beste Gr&#252;&#223;e / Best Regards
</span><br>
<span class="quotelev1">&gt; Christian Krause aka wookietreiber
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; EGAL WIE DICHT DU BIST, GOETHE WAR DICHTER.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20477.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Previous message:</strong> <a href="20475.php">Ralph Castain: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>In reply to:</strong> <a href="20473.php">wookietreiber: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<!-- nextthread="start" -->
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
