<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 16 11:27:35 2006" -->
<!-- isoreceived="20060116162735" -->
<!-- sent="Mon, 16 Jan 2006 17:32:49 +0100" -->
<!-- isosent="20060116163249" -->
<!-- name="Yves Reymen" -->
<!-- email="yves.reymen_at_[hidden]" -->
<!-- subject="[O-MPI users] OMPI_WANT_CXX_BINDINGS" -->
<!-- id="43CBCAB1.4010507_at_mech.kuleuven.be" -->
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
<strong>From:</strong> Yves Reymen (<em>yves.reymen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-16 11:32:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0506.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="0504.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0506.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>Reply:</strong> <a href="0506.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>Recently openmpi v1.0.1 was installed on our cluster. It contains all 
<br>
parameters of ompi_config.h within a #ifndef OMPI_CONFIG_H. I am 
<br>
wondering how it is possible to give one of these parameters an other 
<br>
value after everthing is configured and installed, given the fact that 
<br>
no ompi_config.h is present in the installation.
<br>
<p>Take for instance the OMPI_WANT_CXX_BINDINGS that decides if you want to 
<br>
include de C++ bindings in mpicxx.h or not. If I set it on my compile 
<br>
line as -DOMPI_WANT_CXX_BINDINGS=0. It will always be redefined to the 
<br>
value in mpi.h, which for our installation is 1.
<br>
<p>Is there a way of getting rid of this redefinition?
<br>
<p>Thank you in advance for your reply,
<br>
Yves
<br>
<pre>
-- 
Yves Reymen
K.U.Leuven - Department of Mechanical Engineering
PMA - Noise &amp; Vibration Research Group            Phone: +32-16-322523
Celestijnenlaan 300B, B-3001 Heverlee, Belgium      Fax: +32-16-322987
Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0506.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="0504.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0506.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>Reply:</strong> <a href="0506.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
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
