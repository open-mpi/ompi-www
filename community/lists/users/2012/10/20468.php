<?
$subject_val = "[OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 11:00:53 2012" -->
<!-- isoreceived="20121011150053" -->
<!-- sent="Thu, 11 Oct 2012 17:00:49 +0200" -->
<!-- isosent="20121011150049" -->
<!-- name="Christian Krause" -->
<!-- email="kizkizzbangbang_at_[hidden]" -->
<!-- subject="[OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler" -->
<!-- id="CALqKqKknrrXRg5MeHOORrGVmgDMSO3EVAM34tw5fHRAJSVxezw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler<br>
<strong>From:</strong> Christian Krause (<em>kizkizzbangbang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 11:00:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20469.php">Michael Di Domenico: "[OMPI users] debugs for jobs not starting"</a>
<li><strong>Previous message:</strong> <a href="20467.php">Biddiscombe, John A.: "Re: [OMPI users] windows + threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20472.php">Gus Correa: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="20472.php">Gus Correa: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to compile the current OpenMPI 1.6.2 with the Intel Compiler
<br>
<p># icc --version
<br>
icc (ICC) 12.0.4 20110427
<br>
<p><p>The error I get is the following (I changed directly in the vtfilter
<br>
directory where the error occurs to reduce output for this mail):
<br>
<p># cd ompi/contrib/vt/vt/tools/vtfilter/
<br>
# make
<br>
Making all in .
<br>
make[1]: Entering directory
<br>
`/gpfs0/global/local/src/xxx-mpi/openmpi-1.6.2/ompi/contrib/vt/vt/tools/vtfilter'
<br>
&nbsp;&nbsp;CXX    vtfilter-vt_filter.o
<br>
cc1plus: error: vtfilter-vt_filter.d: No such file or directory
<br>
make[1]: *** [vtfilter-vt_filter.o] Error 1
<br>
make[1]: Leaving directory
<br>
`/gpfs0/global/local/src/xxx-mpi/openmpi-1.6.2/ompi/contrib/vt/vt/tools/vtfilter'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>configure options from config.log:
<br>
<p>./configure CC=icc --prefix=/usr/local/openmpi/1.6.2_intel_12.0.4
<br>
--with-sge --with-hwloc=/usr/local/hwloc/1.5_intel_12.0.4
<br>
--with-openib-libdir=/usr/lib64 --with-udapl-libdir=/usr/lib64
<br>
<p><p>I have already built hwloc and pciutils locally using icc. Also I
<br>
recently compiled OpenMPI 1.6.2 with gcc 4.7.1 with hwloc and pciutils
<br>
too which worked without problems (configure basically the same, i.e.
<br>
not setting CC and using different hwloc). That's why I'm assuming the
<br>
error is somehow icc's fault ... I'm new to this mailing list and I
<br>
already received some mails concerning the Intel Compiler so I figure
<br>
there may be others who've experienced this problem?
<br>
<p><p>Thanks for any help in advance.
<br>
<p>Regards
<br>
Christian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20469.php">Michael Di Domenico: "[OMPI users] debugs for jobs not starting"</a>
<li><strong>Previous message:</strong> <a href="20467.php">Biddiscombe, John A.: "Re: [OMPI users] windows + threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20472.php">Gus Correa: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="20472.php">Gus Correa: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
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
