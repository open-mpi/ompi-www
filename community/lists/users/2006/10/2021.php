<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 12:47:38 2006" -->
<!-- isoreceived="20061020164738" -->
<!-- sent="Fri, 20 Oct 2006 10:47:34 -0600" -->
<!-- isosent="20061020164734" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 411, Issue 2" -->
<!-- id="C15E59C6.53FC%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0610201740460.13314_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>Date:</strong> 2006-10-20 12:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2022.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Previous message:</strong> <a href="2020.php">Lydia Heck: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="2020.php">Lydia Heck: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I should have been clearer. Yes, please remove them all - let's just
<br>
see if that's the problem.
<br>
<p>Thanks
<br>
<p><p>On 10/20/06 10:41 AM, &quot;Lydia Heck&quot; &lt;lydia.heck_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which of the thread options should I remove:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --enable-mpi-threads   \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --enable-progress-threads \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --with-threads=solaris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; all of them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lydia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 20 Oct 2006 06:30:36 -0600
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph H Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] job fails to terminate
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;C15E1D8C.53D3%rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;US-ASCII&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Lydia
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks - that does help!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you try this without threads? We have tried to make the system work
</span><br>
<span class="quotelev2">&gt;&gt; with threads, but our testing has been limited. First thing I would try is
</span><br>
<span class="quotelev2">&gt;&gt; to make sure that we aren't hitting a thread-lock.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 10/20/06 2:11 AM, &quot;Lydia Heck&quot; &lt;lydia.heck_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In answer to Ralph's request and question.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed the version number was incorrect it should have been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.3a1r12121
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my configure command is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/ksh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CC=&quot;/opt/studio11/SUNWspro/bin/cc&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -I/opt/SUNWsge/include&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   LDFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -L/opt/SUNWsge/lib/sol-amd64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -R/opt/mx/lib64 -R/opt/SUNWsge/lib/sol-amd64&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CXX=&quot;/opt/studio11/SUNWspro/bin/CC&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CXXFLAGS=&quot;-xarch=amd64a -I/opt/SUNWsge/include&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   F77=&quot;/opt/studio11/SUNWspro/bin/f95&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   FFLAGS=&quot;-xarch=amd64a -I/opt/SUNWsge/include&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   FC=&quot;/opt/studio11/SUNWspro/bin/f95&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   FCFLAGS=&quot;-xarch=amd64a -I/opt/SUNWsge/include&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=/opt/studio11/SUNWspro/bin:/opt/csw/bin:/opt/sfw/bin:/usr/sfw/bin:&quot;$PAT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; H&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :/usr/ucb
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export CC CFLAGS LDFLAGS CXX CXXFLAGS F77 FFLAGS FC FCFLAGS PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/opt/openMPI-GB \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-wrapper-cflags=-xarch=amd64a \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --with-wrapper-cxxflags=-xarch=amd64a \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --with-wrapper-fflags=-xarch=amd64a \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --with-wrapper-fcflags=-xarch=amd64a \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --with-wrapper-ldflags=-xarch=amd64a \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --enable-dependency-tracking \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --enable-cxx-exceptions  \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --enable-smp-locks      \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --enable-mpi-threads   \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --enable-progress-threads \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --with-threads=solaris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lydia
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr E L  Heck
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Durham
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ogden Centre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Physics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; South Road
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; United Kingdom
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ___________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 411, Issue 2
</span><br>
<span class="quotelev2">&gt;&gt; *************************************
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="2022.php">Jeff Squyres: "Re: [OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<li><strong>Previous message:</strong> <a href="2020.php">Lydia Heck: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="2020.php">Lydia Heck: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
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
