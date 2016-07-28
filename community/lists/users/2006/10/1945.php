<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  6 14:42:38 2006" -->
<!-- isoreceived="20061006184238" -->
<!-- sent="Fri, 6 Oct 2006 12:42:34 -0600" -->
<!-- isosent="20061006184234" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBSPro/PGI/Myrinet Woes continued..." -->
<!-- id="680E1B6A-BEBF-4444-A33B-A72F883C9723_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D392D4803D14354CBC49D772E19DD0CD16E39B_at_zeus.w2k.nrlmry.navy.mil" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-06 14:42:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1946.php">Greg Lindahl: "Re: [OMPI users] IB HCA support"</a>
<li><strong>Previous message:</strong> <a href="1944.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] PBSPro/PGI/Myrinet Woes continued..."</a>
<li><strong>In reply to:</strong> <a href="1944.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] PBSPro/PGI/Myrinet Woes continued..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>Are you compiling on a 64 bit platform that has both 64 and 32 bit gm  
<br>
libraries? If so you probably have a libgm.la that is mucking things  
<br>
up. Try modifying you configure line as follows:
<br>
<p><span class="quotelev1">&gt; ./configure --with-gm=/opt/gm --with-tm=/usr/pbs --disable-shared
</span><br>
<span class="quotelev1">&gt; --enable-static CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 FFLAGS=-fastsse
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-fastsse LDFLAGS=-L/opt/gm/lib64
</span><br>
<p><p>Thanks,
<br>
<p>Galen
<br>
<p>On Oct 6, 2006, at 12:27 PM, Andrus, Mr. Brian ((Contractor)) wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, I am getting an error when I run make after configuring with the
</span><br>
<span class="quotelev1">&gt; following options:
</span><br>
<span class="quotelev1">&gt; ./configure --with-gm=/opt/gm --with-tm=/usr/pbs --disable-shared
</span><br>
<span class="quotelev1">&gt; --enable-static CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 FFLAGS=-fastsse
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-fastsse
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It aborts after a bit with:
</span><br>
<span class="quotelev1">&gt; /opt/gm/lib/libgm.so: could not read symbols: File in wrong format
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The config.out and make.out are attached fwiw.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone seen this before?
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; &lt;make.out.tgz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.out.tgz&gt;
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
<li><strong>Next message:</strong> <a href="1946.php">Greg Lindahl: "Re: [OMPI users] IB HCA support"</a>
<li><strong>Previous message:</strong> <a href="1944.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] PBSPro/PGI/Myrinet Woes continued..."</a>
<li><strong>In reply to:</strong> <a href="1944.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] PBSPro/PGI/Myrinet Woes continued..."</a>
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
