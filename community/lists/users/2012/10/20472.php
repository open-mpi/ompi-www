<?
$subject_val = "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 13:09:32 2012" -->
<!-- isoreceived="20121011170932" -->
<!-- sent="Thu, 11 Oct 2012 13:09:28 -0400" -->
<!-- isosent="20121011170928" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler" -->
<!-- id="5076FD48.2040405_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALqKqKknrrXRg5MeHOORrGVmgDMSO3EVAM34tw5fHRAJSVxezw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 13:09:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20473.php">wookietreiber: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="20471.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>In reply to:</strong> <a href="20468.php">Christian Krause: "[OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20473.php">wookietreiber: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="20473.php">wookietreiber: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Christian
<br>
<p>Would your problem be similar to the one reported two days ago on
<br>
this thread? [It also failed to compile vampir trace tools,
<br>
it also didn't have the Intel C++ compiler specified to configure.]
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2012/10/20449.php">http://www.open-mpi.org/community/lists/users/2012/10/20449.php</a>
<br>
<p>Have you tried to specify the Intel C++ compiler
<br>
to the configure script?
<br>
<p>./configure CC=icc CXX=icpc  ... etc, etc ...
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p><p>On 10/11/2012 11:00 AM, Christian Krause wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to compile the current OpenMPI 1.6.2 with the Intel Compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # icc --version
</span><br>
<span class="quotelev1">&gt; icc (ICC) 12.0.4 20110427
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error I get is the following (I changed directly in the vtfilter
</span><br>
<span class="quotelev1">&gt; directory where the error occurs to reduce output for this mail):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # cd ompi/contrib/vt/vt/tools/vtfilter/
</span><br>
<span class="quotelev1">&gt; # make
</span><br>
<span class="quotelev1">&gt; Making all in .
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/gpfs0/global/local/src/xxx-mpi/openmpi-1.6.2/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev1">&gt;    CXX    vtfilter-vt_filter.o
</span><br>
<span class="quotelev1">&gt; cc1plus: error: vtfilter-vt_filter.d: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[1]: *** [vtfilter-vt_filter.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/gpfs0/global/local/src/xxx-mpi/openmpi-1.6.2/ompi/contrib/vt/vt/tools/vtfilter'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure options from config.log:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc --prefix=/usr/local/openmpi/1.6.2_intel_12.0.4
</span><br>
<span class="quotelev1">&gt; --with-sge --with-hwloc=/usr/local/hwloc/1.5_intel_12.0.4
</span><br>
<span class="quotelev1">&gt; --with-openib-libdir=/usr/lib64 --with-udapl-libdir=/usr/lib64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have already built hwloc and pciutils locally using icc. Also I
</span><br>
<span class="quotelev1">&gt; recently compiled OpenMPI 1.6.2 with gcc 4.7.1 with hwloc and pciutils
</span><br>
<span class="quotelev1">&gt; too which worked without problems (configure basically the same, i.e.
</span><br>
<span class="quotelev1">&gt; not setting CC and using different hwloc). That's why I'm assuming the
</span><br>
<span class="quotelev1">&gt; error is somehow icc's fault ... I'm new to this mailing list and I
</span><br>
<span class="quotelev1">&gt; already received some mails concerning the Intel Compiler so I figure
</span><br>
<span class="quotelev1">&gt; there may be others who've experienced this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Christian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20473.php">wookietreiber: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="20471.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>In reply to:</strong> <a href="20468.php">Christian Krause: "[OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20473.php">wookietreiber: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="20473.php">wookietreiber: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
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
