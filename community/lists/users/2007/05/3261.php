<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 13 08:24:13 2007" -->
<!-- isoreceived="20070513122413" -->
<!-- sent="Sun, 13 May 2007 14:23:34 +0200" -->
<!-- isosent="20070513122334" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] AlphaServers &amp;amp; OpenMPI" -->
<!-- id="46470346.3040302_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46700.99319.qm_at_web33304.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-13 08:23:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3262.php">Sefa Arslan: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>Previous message:</strong> <a href="3260.php">Code Master: "[OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>In reply to:</strong> <a href="3259.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3274.php">Brian Barrett: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3274.php">Brian Barrett: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Rob wrote:
<br>
<span class="quotelev1">&gt; livelfs wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; your 1.2.1 build error seems to be the one I bumped into.
</span><br>
<span class="quotelev2">&gt;&gt; Try to avoid to give an absolute path to CC macro when you run configure
</span><br>
<span class="quotelev2">&gt;&gt; (check the archives)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm, to get a decent fortran compiler for my AlphaServers, I have to
</span><br>
<span class="quotelev1">&gt; compile my own GCC compiler set (the default with CentOS is not good
</span><br>
<span class="quotelev1">&gt; enough). Hence, I have gcc/g++/gfortran both in /opt/gcc/bin and /usr/bin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to set CC=/opt/gcc/bin/gcc, FC=/opt/gcc/bin/gfortran etc. However,
</span><br>
<span class="quotelev1">&gt; instead I must do CC=gcc, FC=gfortran and manually let the path point
</span><br>
<span class="quotelev1">&gt; to /opt/gcc/bin such that it first searches in /opt/gcc/bin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, by default /opt/gcc/bin is not in my PATH, because in general
</span><br>
<span class="quotelev1">&gt; I'd like to use the original GCC compiler set that comes with the OS.
</span><br>
<span class="quotelev1">&gt; Then, what happens when I compile my MPI code &quot;mpif90 mycode.f90&quot;?
</span><br>
<span class="quotelev1">&gt; Does OpenMPI remember to use the compilers in /opt/gcc/bin, or will
</span><br>
<span class="quotelev1">&gt; it then erroneously use the ones in /usr/bin ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even better: is there a patch available to fix this in the 1.2.1
</span><br>
<span class="quotelev1">&gt; tarball, so that
</span><br>
<span class="quotelev1">&gt; I can set the full path again with CC?
</span><br>
The patch is quite trivial, but requires a rebuild of the  build system
<br>
(autoheader, autoconf, automake,...)
<br>
<p>see here:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/14610">https://svn.open-mpi.org/trac/ompi/changeset/14610</a>
<br>
<p>but you can try to hack the current configure script, just by search for
<br>
the affected line
<br>
<p><span class="quotelev1">&gt; (is it only the CC macro, or also F77, F90, CXX, CPP and CXXCPP?)
</span><br>
it affects only CC.
<br>
<p>Bert
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rob.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Be a better Globetrotter. Get better travel answers
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://us.rd.yahoo.com/evt=48254/*http://answers.yahoo.com/dir/_ylc=X3oDMTI5MGx2aThyBF9TAzIxMTU1MDAzNTIEX3MDMzk2NTQ1MTAzBHNlYwNCQUJwaWxsYXJfTklfMzYwBHNsawNQcm9kdWN0X3F1ZXN0aW9uX3BhZ2U-?link=list&amp;sid=396545469">http://us.rd.yahoo.com/evt=48254/*http://answers.yahoo.com/dir/_ylc=X3oDMTI5MGx2aThyBF9TAzIxMTU1MDAzNTIEX3MDMzk2NTQ1MTAzBHNlYwNCQUJwaWxsYXJfTklfMzYwBHNsawNQcm9kdWN0X3F1ZXN0aW9uX3BhZ2U-?link=list&amp;sid=396545469</a>&gt;from
</span><br>
<span class="quotelev1">&gt; someone who knows.
</span><br>
<span class="quotelev1">&gt; Yahoo! Answers - Check it out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3262.php">Sefa Arslan: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>Previous message:</strong> <a href="3260.php">Code Master: "[OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>In reply to:</strong> <a href="3259.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3274.php">Brian Barrett: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3274.php">Brian Barrett: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
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
