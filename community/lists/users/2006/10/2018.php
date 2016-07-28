<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 08:30:41 2006" -->
<!-- isoreceived="20061020123041" -->
<!-- sent="Fri, 20 Oct 2006 06:30:36 -0600" -->
<!-- isosent="20061020123036" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job fails to terminate" -->
<!-- id="C15E1D8C.53D3%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0610200910060.29896_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-20 08:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2019.php">Ogden, Jeffry Brandon: "[OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Previous message:</strong> <a href="2017.php">Lydia Heck: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>In reply to:</strong> <a href="2017.php">Lydia Heck: "Re: [OMPI users] job fails to terminate"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lydia
<br>
<p>Thanks - that does help!
<br>
<p>Could you try this without threads? We have tried to make the system work
<br>
with threads, but our testing has been limited. First thing I would try is
<br>
to make sure that we aren't hitting a thread-lock.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 10/20/06 2:11 AM, &quot;Lydia Heck&quot; &lt;lydia.heck_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In answer to Ralph's request and question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed the version number was incorrect it should have been
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3a1r12121
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my configure command is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/ksh
</span><br>
<span class="quotelev1">&gt;   CC=&quot;/opt/studio11/SUNWspro/bin/cc&quot;
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -I/opt/SUNWsge/include&quot;
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -L/opt/SUNWsge/lib/sol-amd64
</span><br>
<span class="quotelev1">&gt; -R/opt/mx/lib64 -R/opt/SUNWsge/lib/sol-amd64&quot;
</span><br>
<span class="quotelev1">&gt;   CXX=&quot;/opt/studio11/SUNWspro/bin/CC&quot;
</span><br>
<span class="quotelev1">&gt;   CXXFLAGS=&quot;-xarch=amd64a -I/opt/SUNWsge/include&quot;
</span><br>
<span class="quotelev1">&gt;   F77=&quot;/opt/studio11/SUNWspro/bin/f95&quot;
</span><br>
<span class="quotelev1">&gt;   FFLAGS=&quot;-xarch=amd64a -I/opt/SUNWsge/include&quot;
</span><br>
<span class="quotelev1">&gt;   FC=&quot;/opt/studio11/SUNWspro/bin/f95&quot;
</span><br>
<span class="quotelev1">&gt;   FCFLAGS=&quot;-xarch=amd64a -I/opt/SUNWsge/include&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH=/opt/studio11/SUNWspro/bin:/opt/csw/bin:/opt/sfw/bin:/usr/sfw/bin:&quot;$PATH&quot;
</span><br>
<span class="quotelev1">&gt; :/usr/ucb
</span><br>
<span class="quotelev1">&gt; export CC CFLAGS LDFLAGS CXX CXXFLAGS F77 FFLAGS FC FCFLAGS PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openMPI-GB \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cflags=-xarch=amd64a \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cxxflags=-xarch=amd64a \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-fflags=-xarch=amd64a \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-fcflags=-xarch=amd64a \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-ldflags=-xarch=amd64a \
</span><br>
<span class="quotelev1">&gt;   --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;   --enable-dependency-tracking \
</span><br>
<span class="quotelev1">&gt;   --enable-cxx-exceptions  \
</span><br>
<span class="quotelev1">&gt;   --enable-smp-locks      \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-threads   \
</span><br>
<span class="quotelev1">&gt;   --enable-progress-threads \
</span><br>
<span class="quotelev1">&gt;   --with-threads=solaris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lydia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
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
<li><strong>Next message:</strong> <a href="2019.php">Ogden, Jeffry Brandon: "[OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Previous message:</strong> <a href="2017.php">Lydia Heck: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>In reply to:</strong> <a href="2017.php">Lydia Heck: "Re: [OMPI users] job fails to terminate"</a>
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
