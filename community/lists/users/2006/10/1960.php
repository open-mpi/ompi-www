<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 11 01:31:06 2006" -->
<!-- isoreceived="20061011053106" -->
<!-- sent="Tue, 10 Oct 2006 22:38:49 -0700" -->
<!-- isosent="20061011053849" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with shared libraries" -->
<!-- id="C151D179.2A40A%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D392D4803D14354CBC49D772E19DD0CD16E39F_at_zeus.w2k.nrlmry.navy.mil" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-11 01:38:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1961.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Previous message:</strong> <a href="1959.php">Michael Kluskens: "[OMPI users]  BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1957.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] Trouble with shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1963.php">Lisandro Dalcin: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>Reply:</strong> <a href="1963.php">Lisandro Dalcin: "Re: [OMPI users] Trouble with shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hum; that's quite odd.  In Open MPI, mpirun and mpiexec are both sym links
<br>
to the same back-end executable (orterun).  So if you can run one, you must
<br>
be able to run both.
<br>
<p>I suspect that your mpirun and mpiexec are being found in different places
<br>
-- try &quot;which mpirun&quot; and &quot;which mpiexec&quot; (or &quot;where mpirun&quot; / &quot;where
<br>
mpiexec&quot;, depending on your shell) to see where they're really being found.
<br>
<p>Open MPI v1.1.1 requires that you set your LD_LIBRARY_PATH to include the
<br>
directory where its libraries were installed (typically, $prefix/lib).  Or,
<br>
you can use mpirun's --prefix functionality to avoid this, such as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --prefix /path/to/ompi/prefix ...
<br>
<p>Or
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/path/to/ompi/prefix/bin/mpirun ...
<br>
<p>Both forms are equivalent.
<br>
<p><p>On 10/10/06 11:32 AM, &quot;Andrus, Mr. Brian (Contractor)&quot;
<br>
&lt;brian.andrus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok, I apologize in advance. I am still trying to get openmpi to compile
</span><br>
<span class="quotelev1">&gt; and run with PGI, Myrinet and PBSPro.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am configuring it with:
</span><br>
<span class="quotelev1">&gt; --with-gm=/opt/gm --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt; --enable-mca-static=pml,btl:gm,btl:self --with-tm=/usr/pbs CC=pgcc
</span><br>
<span class="quotelev1">&gt; CXX=pgCC F77=pgf77 FC=pgf90 FFLAGS=-fastsse FCFLAGS=-fastsse
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-L/opt/gm/lib64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything seems to go fine, but when I try to use mpiexec, I get:
</span><br>
<span class="quotelev1">&gt; error while loading shared libraries: libmpi.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything runs fine when I use mpirun, however.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any assistance is appreciated. Thanks in advance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian Andrus
</span><br>
<span class="quotelev1">&gt; QSS Group, Inc.
</span><br>
<span class="quotelev1">&gt; Naval Research Laboratory
</span><br>
<span class="quotelev1">&gt; Monterey, California
</span><br>
<span class="quotelev1">&gt; Desk: 831-656-4839
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1961.php">Jeff Squyres: "Re: [OMPI users] Problem with C++ Binding"</a>
<li><strong>Previous message:</strong> <a href="1959.php">Michael Kluskens: "[OMPI users]  BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1957.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] Trouble with shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1963.php">Lisandro Dalcin: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>Reply:</strong> <a href="1963.php">Lisandro Dalcin: "Re: [OMPI users] Trouble with shared libraries"</a>
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
