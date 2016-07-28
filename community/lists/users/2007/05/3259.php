<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 13 06:13:33 2007" -->
<!-- isoreceived="20070513101333" -->
<!-- sent="Sun, 13 May 2007 03:13:28 -0700 (PDT)" -->
<!-- isosent="20070513101328" -->
<!-- name="Rob" -->
<!-- email="spamrefuse_at_[hidden]" -->
<!-- subject="Re: [OMPI users] AlphaServers &amp;amp; OpenMPI" -->
<!-- id="46700.99319.qm_at_web33304.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] AlphaServers &amp;amp; OpenMPI" -->
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
<strong>From:</strong> Rob (<em>spamrefuse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-13 06:13:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3260.php">Code Master: "[OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>Previous message:</strong> <a href="3258.php">livelfs: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="3207.php">Rob: "[OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3261.php">Bert Wesarg: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3261.php">Bert Wesarg: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
livelfs wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your 1.2.1 build error seems to be the one I bumped into.
</span><br>
<span class="quotelev1">&gt; Try to avoid to give an absolute path to CC macro when you run configure
</span><br>
<span class="quotelev1">&gt; (check the archives)
</span><br>
<p>Hmmm, to get a decent fortran compiler for my AlphaServers, I have to
<br>
compile my own GCC compiler set (the default with CentOS is not good
<br>
enough). Hence, I have gcc/g++/gfortran both in /opt/gcc/bin and /usr/bin.
<br>
<p>I'd like to set CC=/opt/gcc/bin/gcc, FC=/opt/gcc/bin/gfortran etc. However,
<br>
instead I must do CC=gcc, FC=gfortran and manually let the path point
<br>
to /opt/gcc/bin such that it first searches in /opt/gcc/bin.
<br>
<p>However, by default /opt/gcc/bin is not in my PATH, because in general
<br>
I'd like to use the original GCC compiler set that comes with the OS.
<br>
Then, what happens when I compile my MPI code &quot;mpif90 mycode.f90&quot;?
<br>
Does OpenMPI remember to use the compilers in /opt/gcc/bin, or will
<br>
it then erroneously use the ones in /usr/bin ?
<br>
<p>Even better: is there a patch available to fix this in the 1.2.1 tarball, so that
<br>
I can set the full path again with CC?
<br>
(is it only the CC macro, or also F77, F90, CXX, CPP and CXXCPP?)
<br>
<p>Thanks,
<br>
Rob.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
Be a better Globetrotter. Get better travel answers from someone who knows.
<br>
Yahoo! Answers - Check it out.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3259/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3260.php">Code Master: "[OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>Previous message:</strong> <a href="3258.php">livelfs: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="3207.php">Rob: "[OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3261.php">Bert Wesarg: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3261.php">Bert Wesarg: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
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
