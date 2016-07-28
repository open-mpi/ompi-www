<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 12:41:49 2006" -->
<!-- isoreceived="20061020164149" -->
<!-- sent="Fri, 20 Oct 2006 17:41:35 +0100 (BST)" -->
<!-- isosent="20061020164135" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 411, Issue 2" -->
<!-- id="Pine.GSO.4.53.0610201740460.13314_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.27.1161360010.32726.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-10-20 12:41:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2021.php">Ralph H Castain: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="2019.php">Ogden, Jeffry Brandon: "[OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2021.php">Ralph H Castain: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
<li><strong>Reply:</strong> <a href="2021.php">Ralph H Castain: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>which of the thread options should I remove:
<br>
<p><span class="quotelev2">&gt; &gt;   --enable-mpi-threads   \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-progress-threads \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-threads=solaris
</span><br>
<p>all of them?
<br>
<p>Lydia
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Fri, 20 Oct 2006 06:30:36 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph H Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] job fails to terminate
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;C15E1D8C.53D3%rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain;	charset=&quot;US-ASCII&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Lydia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks - that does help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you try this without threads? We have tried to make the system work
</span><br>
<span class="quotelev1">&gt; with threads, but our testing has been limited. First thing I would try is
</span><br>
<span class="quotelev1">&gt; to make sure that we aren't hitting a thread-lock.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/20/06 2:11 AM, &quot;Lydia Heck&quot; &lt;lydia.heck_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In answer to Ralph's request and question.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Indeed the version number was incorrect it should have been
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3a1r12121
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; my configure command is
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/ksh
</span><br>
<span class="quotelev2">&gt; &gt;   CC=&quot;/opt/studio11/SUNWspro/bin/cc&quot;
</span><br>
<span class="quotelev2">&gt; &gt;   CFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -I/opt/SUNWsge/include&quot;
</span><br>
<span class="quotelev2">&gt; &gt;   LDFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -L/opt/SUNWsge/lib/sol-amd64
</span><br>
<span class="quotelev2">&gt; &gt; -R/opt/mx/lib64 -R/opt/SUNWsge/lib/sol-amd64&quot;
</span><br>
<span class="quotelev2">&gt; &gt;   CXX=&quot;/opt/studio11/SUNWspro/bin/CC&quot;
</span><br>
<span class="quotelev2">&gt; &gt;   CXXFLAGS=&quot;-xarch=amd64a -I/opt/SUNWsge/include&quot;
</span><br>
<span class="quotelev2">&gt; &gt;   F77=&quot;/opt/studio11/SUNWspro/bin/f95&quot;
</span><br>
<span class="quotelev2">&gt; &gt;   FFLAGS=&quot;-xarch=amd64a -I/opt/SUNWsge/include&quot;
</span><br>
<span class="quotelev2">&gt; &gt;   FC=&quot;/opt/studio11/SUNWspro/bin/f95&quot;
</span><br>
<span class="quotelev2">&gt; &gt;   FCFLAGS=&quot;-xarch=amd64a -I/opt/SUNWsge/include&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PATH=/opt/studio11/SUNWspro/bin:/opt/csw/bin:/opt/sfw/bin:/usr/sfw/bin:&quot;$PATH&quot;
</span><br>
<span class="quotelev2">&gt; &gt; :/usr/ucb
</span><br>
<span class="quotelev2">&gt; &gt; export CC CFLAGS LDFLAGS CXX CXXFLAGS F77 FFLAGS FC FCFLAGS PATH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/opt/openMPI-GB \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-wrapper-cflags=-xarch=amd64a \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-wrapper-cxxflags=-xarch=amd64a \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-wrapper-fflags=-xarch=amd64a \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-wrapper-fcflags=-xarch=amd64a \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-wrapper-ldflags=-xarch=amd64a \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-dependency-tracking \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-cxx-exceptions  \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-smp-locks      \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-mpi-threads   \
</span><br>
<span class="quotelev2">&gt; &gt;   --enable-progress-threads \
</span><br>
<span class="quotelev2">&gt; &gt;   --with-threads=solaris
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lydia
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Dr E L  Heck
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; University of Durham
</span><br>
<span class="quotelev2">&gt; &gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev2">&gt; &gt; Ogden Centre
</span><br>
<span class="quotelev2">&gt; &gt; Department of Physics
</span><br>
<span class="quotelev2">&gt; &gt; South Road
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev2">&gt; &gt; United Kingdom
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev2">&gt; &gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev2">&gt; &gt; ___________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 411, Issue 2
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="2021.php">Ralph H Castain: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="2019.php">Ogden, Jeffry Brandon: "[OMPI users] OMPI launching problem using TM and openib on 1920 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2021.php">Ralph H Castain: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
<li><strong>Reply:</strong> <a href="2021.php">Ralph H Castain: "Re: [OMPI users] users Digest, Vol 411, Issue 2"</a>
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
