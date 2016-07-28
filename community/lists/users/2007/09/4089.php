<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 28 06:56:59 2007" -->
<!-- isoreceived="20070928105659" -->
<!-- sent="Fri, 28 Sep 2007 12:56:49 +0200" -->
<!-- isosent="20070928105649" -->
<!-- name="Massimo Cafaro" -->
<!-- email="massimo.cafaro_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI on 64 bits intel Mac OS X" -->
<!-- id="354E9118-A20C-44BD-90A6-E59D39A9B659_at_unile.it" -->
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
<strong>From:</strong> Massimo Cafaro (<em>massimo.cafaro_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-28 06:56:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4090.php">Hammad Siddiqi: "[OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Previous message:</strong> <a href="4088.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4092.php">Brian Barrett: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<li><strong>Reply:</strong> <a href="4092.php">Brian Barrett: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>when I try to compile my MPI code on 64 bits intel Mac OS X the build  
<br>
fails since the Open MPI library has been compiled using 32 bits. Can  
<br>
you please provide in the next version the ability at configure time  
<br>
to choose between 32 and 64 bits or even better compile by defaults  
<br>
using both modes?
<br>
<p>To reproduce the problem, simply compile on 64 bits intel Mac OS X an  
<br>
MPI application using mpicc -arch x86_64. The 64 bits linker  
<br>
complains as follows:
<br>
<p>ld64 warning: in /usr/local/mpi/lib/libmpi.dylib, file is not of  
<br>
required architecture
<br>
ld64 warning: in /usr/local/mpi/lib/libopen-rte.dylib, file is not of  
<br>
required architecture
<br>
ld64 warning: in /usr/local/mpi/lib/libopen-pal.dylib, file is not of  
<br>
required architecture
<br>
<p>and a number of undefined symbols is shown, one for each MPI function  
<br>
used in the application.
<br>
<p>Thank you in advance, and best regards.
<br>
<p><p><p><pre>
-- 
************************************************************************ 
*******************************
  Massimo Cafaro, Ph.D.                             National  
Nanotechnology Laboratory (NNL/CNR-INFM)
  Assistant Professor                                    Euro- 
Mediterranean Centre for Climate Change
  Dept. of Engineering for Innovation        SPACI Consortium
  University of Salento, Lecce, Italy
  Via per Monteroni                                      Voice  +39  
0832 297371 Fax +39 0832 298173
  73100 Lecce, Italy                                     Web      
<a href="http://sara.unile.it/~cafaro">http://sara.unile.it/~cafaro</a>
  E-mail massimo.cafaro_at_[hidden]             cafaro_at_[hidden]
************************************************************************ 
*******************************

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4089/PGP.sig">This is a digitally signed message part</a>
</ul>
<!-- attachment="PGP.sig" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4090.php">Hammad Siddiqi: "[OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>Previous message:</strong> <a href="4088.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4092.php">Brian Barrett: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
<li><strong>Reply:</strong> <a href="4092.php">Brian Barrett: "Re: [OMPI users] Open MPI on 64 bits intel Mac OS X"</a>
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
