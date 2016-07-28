<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 04:12:55 2006" -->
<!-- isoreceived="20061020081255" -->
<!-- sent="Fri, 20 Oct 2006 09:11:45 +0100 (BST)" -->
<!-- isosent="20061020081145" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job fails to terminate" -->
<!-- id="Pine.GSO.4.53.0610200910060.29896_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.7137.1161270824.28407.users_at_open-mpi.org" -->
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
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-20 04:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2018.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>Previous message:</strong> <a href="2016.php">Tim Prins: "Re: [OMPI users] configure script not hapy with OpenPBS"</a>
<li><strong>Maybe in reply to:</strong> <a href="2003.php">Lydia Heck: "[OMPI users] job fails to terminate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2018.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>Reply:</strong> <a href="2018.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In answer to Ralph's request and question.
<br>
<p>Indeed the version number was incorrect it should have been
<br>
<p>openmpi-1.3a1r12121
<br>
<p>my configure command is
<br>
<p>#!/bin/ksh
<br>
&nbsp;&nbsp;CC=&quot;/opt/studio11/SUNWspro/bin/cc&quot;
<br>
&nbsp;&nbsp;CFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -I/opt/SUNWsge/include&quot;
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -L/opt/SUNWsge/lib/sol-amd64
<br>
-R/opt/mx/lib64 -R/opt/SUNWsge/lib/sol-amd64&quot;
<br>
&nbsp;&nbsp;CXX=&quot;/opt/studio11/SUNWspro/bin/CC&quot;
<br>
&nbsp;&nbsp;CXXFLAGS=&quot;-xarch=amd64a -I/opt/SUNWsge/include&quot;
<br>
&nbsp;&nbsp;F77=&quot;/opt/studio11/SUNWspro/bin/f95&quot;
<br>
&nbsp;&nbsp;FFLAGS=&quot;-xarch=amd64a -I/opt/SUNWsge/include&quot;
<br>
&nbsp;&nbsp;FC=&quot;/opt/studio11/SUNWspro/bin/f95&quot;
<br>
&nbsp;&nbsp;FCFLAGS=&quot;-xarch=amd64a -I/opt/SUNWsge/include&quot;
<br>
<p>PATH=/opt/studio11/SUNWspro/bin:/opt/csw/bin:/opt/sfw/bin:/usr/sfw/bin:&quot;$PATH&quot;:/usr/ucb
<br>
export CC CFLAGS LDFLAGS CXX CXXFLAGS F77 FFLAGS FC FCFLAGS PATH
<br>
<p>./configure --prefix=/opt/openMPI-GB \
<br>
&nbsp;--with-wrapper-cflags=-xarch=amd64a \
<br>
&nbsp;&nbsp;--with-wrapper-cxxflags=-xarch=amd64a \
<br>
&nbsp;&nbsp;--with-wrapper-fflags=-xarch=amd64a \
<br>
&nbsp;&nbsp;--with-wrapper-fcflags=-xarch=amd64a \
<br>
&nbsp;&nbsp;--with-wrapper-ldflags=-xarch=amd64a \
<br>
&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;--enable-dependency-tracking \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions  \
<br>
&nbsp;&nbsp;--enable-smp-locks      \
<br>
&nbsp;&nbsp;--enable-mpi-threads   \
<br>
&nbsp;&nbsp;--enable-progress-threads \
<br>
&nbsp;&nbsp;--with-threads=solaris
<br>
<p><p>Lydia
<br>
<p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2018.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>Previous message:</strong> <a href="2016.php">Tim Prins: "Re: [OMPI users] configure script not hapy with OpenPBS"</a>
<li><strong>Maybe in reply to:</strong> <a href="2003.php">Lydia Heck: "[OMPI users] job fails to terminate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2018.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>Reply:</strong> <a href="2018.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
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
