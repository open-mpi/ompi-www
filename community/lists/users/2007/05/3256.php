<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 12 13:08:22 2007" -->
<!-- isoreceived="20070512170822" -->
<!-- sent="Sat, 12 May 2007 10:08:16 -0700 (PDT)" -->
<!-- isosent="20070512170816" -->
<!-- name="Rob" -->
<!-- email="spamrefuse_at_[hidden]" -->
<!-- subject="Re: [OMPI users] AlphaServers &amp;amp; OpenMPI" -->
<!-- id="611325.28361.qm_at_web33306.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2007-05-12 13:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3257.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3255.php">Jeff Squyres: "Re: [OMPI users] errors in stdin"</a>
<li><strong>Maybe in reply to:</strong> <a href="3207.php">Rob: "[OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3257.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do not have InfiniBand or iWARP hardware, you can disable this  
</span><br>
<span class="quotelev1">&gt; whole code path with: 
</span><br>
<span class="quotelev1"> &gt;   ./configure --without-openib ...
</span><br>
<p>BINGO!
<br>
Both of my problems are gone with this configure flag and the
<br>
make ends successfully, also with the --enable-shared configure
<br>
flag.
<br>
<p>After installing (with the shared .so libraries), I also get
<br>
working mpi-compilers.
<br>
<p>Note: when I do the above with the stable release 1.2.1,
<br>
I get again the following when compiling code:
<br>
&nbsp;&nbsp;$ mpicc mycode.c 
<br>
&nbsp;&nbsp;gcc: dummy: No such file or directory
<br>
&nbsp;&nbsp;gcc: ranlib: No such file or directory
<br>
<p>But the good news is that the latter problem disappears
<br>
with the nightly built openmpi-1.3a1r14639.
<br>
Thus I'm looking forward to the next release that will
<br>
support my AlphaServers out-of-the-box.
<br>
&nbsp;
<br>
Although I'm not at all an MPI expert, but if tests are
<br>
needed to help openmpi work on AlphaServers, then
<br>
I am willing to help with tests on my systems.
<br>
<p>By the way: does OpenMPI support running MPI on a variety
<br>
of architectures? Can I run MPI code parallel on Intel-PCs,
<br>
HP/Itaniums and AlphaServers (all running Linux/CentOS) ?
<br>
Hence, is this kind of cross-architecture supported in OpenMPI?
<br>
<p>Regards,
<br>
Rob.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
Sick sense of humor? Visit Yahoo! TV's Comedy with an Edge to see what's on, when. 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3256/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3257.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3255.php">Jeff Squyres: "Re: [OMPI users] errors in stdin"</a>
<li><strong>Maybe in reply to:</strong> <a href="3207.php">Rob: "[OMPI users] AlphaServers &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3257.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
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
