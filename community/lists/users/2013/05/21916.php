<?
$subject_val = "[OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 16 11:57:45 2013" -->
<!-- isoreceived="20130516155745" -->
<!-- sent="Thu, 16 May 2013 11:57:42 -0400" -->
<!-- isosent="20130516155742" -->
<!-- name="Geraldine Hochman-Klarenberg" -->
<!-- email="ghochman_at_[hidden]" -->
<!-- subject="[OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5" -->
<!-- id="B4D8C773-F7E9-47A3-A642-70A7D3D7BA40_at_ufl.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5<br>
<strong>From:</strong> Geraldine Hochman-Klarenberg (<em>ghochman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-16 11:57:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21917.php">Qamar Nazir: "[OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>Previous message:</strong> <a href="21915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] distributed file system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21923.php">Geraldine Hochman-Klarenberg: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Reply:</strong> <a href="21923.php">Geraldine Hochman-Klarenberg: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having trouble configuring OpenMPI-1.6.4 with the Intel C/C++ composer (12.0.2). My OS is OSX 10.7.5.
<br>
<p>I am not a computer whizz so I hope I can explain what I did properly:
<br>
<p>1) In bash, I did source /opt/intel/bin/compilervars.sh intel64 
<br>
and then echo PATH showed: 
<br>
/opt/intel/composerxe-2011.2.142/bin/intel64:/opt/intel/composerxe-2011.2.142/mpirt/bin/intel64:/opt/intel/composerxe-2011.2.142/bin:/Library/Frameworks/EPD64.framework/Versions/Current/bin:/Library/Frameworks/Python.framework/Versions/Current/bin:.:/Library/Frameworks/EPD64.framework/Versions/Current/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin:/usr/X11/bin
<br>
<p>2) which icc and which icpc showed:
<br>
/opt/intel/composerxe-2011.2.142/bin/intel64/icc
<br>
and
<br>
/opt/intel/composerxe-2011.2.142/bin/intel64/icpc
<br>
<p>So that all seems okay to me. Still when I do
<br>
./configure CC=icc CXX=icpc F77=ifort FC=ifort --prefix=/opt/openmpi-1.6.4
<br>
from the folder in which the extracted OpenMPI files sit, I get
<br>
<p>============================================================================
<br>
== Configuring Open MPI
<br>
============================================================================
<br>
<p>*** Startup tests
<br>
checking build system type... x86_64-apple-darwin11.4.2
<br>
checking host system type... x86_64-apple-darwin11.4.2
<br>
checking target system type... x86_64-apple-darwin11.4.2
<br>
checking for gcc... icc
<br>
checking whether the C compiler works... no
<br>
configure: error: in `/Users/geraldinehochman-klarenberg/Projects/openmpi-1.6.4':
<br>
configure: error: C compiler cannot create executables
<br>
See `config.log' for more details
<br>
<p>I'd really appreciate any pointers on how to solve this, because I'm running out of ideas on how to solve this (and so seems Google).
<br>
<p>Thanks!
<br>
Geraldine
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21916/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21917.php">Qamar Nazir: "[OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>Previous message:</strong> <a href="21915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] distributed file system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21923.php">Geraldine Hochman-Klarenberg: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Reply:</strong> <a href="21923.php">Geraldine Hochman-Klarenberg: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
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
