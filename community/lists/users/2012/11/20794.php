<?
$subject_val = "[OMPI users] Can not turn off C++ build.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 14:19:29 2012" -->
<!-- isoreceived="20121128191929" -->
<!-- sent="Wed, 28 Nov 2012 14:19:04 -0500" -->
<!-- isosent="20121128191904" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="[OMPI users] Can not turn off C++ build." -->
<!-- id="50B663A8.30608_at_iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50B662C5.7020801_at_indiana.edu" -->
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
<strong>Subject:</strong> [OMPI users] Can not turn off C++ build.<br>
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-28 14:19:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20795.php">Mariana Vargas Magana: "[OMPI users] error with mrmpi and openmpi"</a>
<li><strong>Previous message:</strong> <a href="20793.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20796.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Reply:</strong> <a href="20796.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;&nbsp;I am trying to build OpenMPI 1.6.3 on an IBM/Intel RHEL-6 cluster.
<br>
&nbsp;&nbsp;&nbsp;I tried building with variations (meaning enable-...=no, disable-,
<br>
changing switch order, etc.) of this:
<br>
<p>&nbsp;&nbsp;./configure CC=icc CFLAGS=&quot;-xT -O2&quot; F77=ifort FFLAGS=&quot;-xT -O2&quot;
<br>
FC=ifort FCFLAGS=&quot;-xT -O2&quot; --enable-mpi-cxx=no --disable-mpi-cxx-seek
<br>
--enable-static --disable-shared --with-threads=posix
<br>
--prefix=/N/soft/rhel6/openmpi/intel/openmpi-1.6.3
<br>
<p>I first tried using icpc as a CXX compiler but it dies shortly after
<br>
checking the alignment of bool.  C++ bindings are not that popular so I
<br>
decided to just turn them off.  Now, it just picks up g++ and tries
<br>
building the C++ bindings anyway:
<br>
<p>** C++ compiler and preprocessor
<br>
checking for g++... g++
<br>
checking whether we are using the GNU C++ compiler... yes
<br>
checking whether g++ accepts -g... yes
<br>
checking dependency style of g++... gcc3
<br>
checking how to run the C++ preprocessor... g++ -E
<br>
checking for the C++ compiler vendor... gnu
<br>
checking if g++ supports -finline-functions... yes
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
checking if C and C++ are link compatible... yes
<br>
checking for C++ optimization flags... -O3 -DNDEBUG -finline-functions
<br>
checking size of bool... 0
<br>
checking alignment of bool... configure: WARNING: *** Problem running
<br>
configure test!
<br>
configure: WARNING: *** See config.log for details.
<br>
configure: error: *** Cannot continue.
<br>
<p><p>It still errors.  I am happy to just kill C++ but it won't.  What is
<br>
wrong?  Thanks.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p><pre>
-- 
                          Respectfully,
                            Ray Sheppard
			RSheppar_at_[hidden]
			<a href="http://pti.iu.edu/sciapt">http://pti.iu.edu/sciapt</a>
                            317-274-0016
                    Principal Analyst
                    Scientific Applications and Performance Tuning
                    Research Technologies
                    University Information Technological Services
                    IUPUI campus
                    Indiana University
    My &quot;pithy&quot; saying:  Science is the art of translating the world
        into language. Unfortunately, that language is mathematics.
    Bumper sticker wisdom: Make it idiot-proof and they will make a
        better idiot.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20795.php">Mariana Vargas Magana: "[OMPI users] error with mrmpi and openmpi"</a>
<li><strong>Previous message:</strong> <a href="20793.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20796.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Reply:</strong> <a href="20796.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
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
