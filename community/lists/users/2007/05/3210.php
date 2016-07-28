<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 08:40:02 2007" -->
<!-- isoreceived="20070508124002" -->
<!-- sent="Tue, 8 May 2007 08:39:53 -0400" -->
<!-- isosent="20070508123953" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Alpha system &amp;amp; OpenMPI 1.2.1 does not work..." -->
<!-- id="9F7A8C1D-926A-4A03-8864-8B0B3F9D7B7B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="589235.55179.qm_at_web33305.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2007-05-08 08:39:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3211.php">Jeff Squyres: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3209.php">Jeff Squyres: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>In reply to:</strong> <a href="3173.php">Rob: "[OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 1, 2007, at 9:11 PM, Rob wrote:
<br>
<p><span class="quotelev1">&gt; A few emails back I reported that I could build
</span><br>
<span class="quotelev1">&gt; openmpi on Alpha system (except the static libraries).
</span><br>
<span class="quotelev1">&gt; However, it seems that the built result is unusable.
</span><br>
<span class="quotelev1">&gt; With every simple program (even non-mpi) I compile,
</span><br>
<span class="quotelev1">&gt; I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ mpicc myprog.c --showme:version
</span><br>
<span class="quotelev1">&gt;      mpicc: Open MPI 1.2.1 (Language: C)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ mpicc myprog.c
</span><br>
<span class="quotelev1">&gt;      gcc: dummy: No such file or directory
</span><br>
<span class="quotelev1">&gt;      gcc: ranlib: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ mpicc myprog.c --showme
</span><br>
<span class="quotelev1">&gt;      /opt/gcc/bin/gcc -I/opt/openmpi/include/openmpi
</span><br>
<span class="quotelev1">&gt;      -I/opt/openmpi/include -pthread -mfp-trap-mode=su
</span><br>
<span class="quotelev1">&gt;      myprog.c -L/opt/openmpi/lib -lmpi -lopen-rte
</span><br>
<span class="quotelev1">&gt;      -lopen-pal -ldl dummy ranlib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Note: the &quot;-mfp-trap-mode=su&quot; prevents a runtime
</span><br>
<span class="quotelev1">&gt; SIGSEGV crash with GNU compiler on Alpha system)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ mpicc myprog.c --showme:link
</span><br>
<span class="quotelev1">&gt;      -pthread -mfp-trap-mode=su myprog.c
</span><br>
<span class="quotelev1">&gt;      -L/opt/openmpi/lib -lmpi -lopen-rte -lopen-pal
</span><br>
<span class="quotelev1">&gt;      -ldl dummy ranlib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the &quot;dummy&quot; and &quot;ranlib&quot; doing here?
</span><br>
<p>This specific problem may be due to a bug that Brian just found/fixed  
<br>
in the configure script last night (due to a bug report from Paul Van  
<br>
Allsburg).  Could you try any nightly trunk tarball after r14600 (the  
<br>
fix hasn't made its way over to the 1.2 release branch yet; I assume  
<br>
it will soon)?
<br>
<p><span class="quotelev1">&gt; I'm now trying the nightly build from SVN
</span><br>
<span class="quotelev1">&gt; (version 1.3a1r14551), but I'm afraid that Alpha
</span><br>
<span class="quotelev1">&gt; support is still not there.....if that's the case,
</span><br>
<span class="quotelev1">&gt; is there any chance to fix openmpi for Alpha?
</span><br>
<p>So I think you're having 2 issues (right?):
<br>
<p>1. The opal missing symbol when you compile dynamically
<br>
2. The dummy/ranlib arguments in mpicc and friends
<br>
<p>#2 may be fixed; #1 will require a closer look (per my previous mail).
<br>
<p><span class="quotelev1">&gt; My OS is CentOS 4.4
</span><br>
<span class="quotelev1">&gt; (the equivalent of RedHat Enterprise Edition 4).
</span><br>
<span class="quotelev1">&gt; Hence, my packages are not so up-to-date versions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; autoconf-2.59-5
</span><br>
<span class="quotelev1">&gt; automake15-1.5-13
</span><br>
<span class="quotelev1">&gt; automake-1.9.2-3
</span><br>
<span class="quotelev1">&gt; automake14-1.4p6-12
</span><br>
<span class="quotelev1">&gt; automake17-1.7.9-5
</span><br>
<span class="quotelev1">&gt; automake16-1.6.3-5
</span><br>
<span class="quotelev1">&gt; libtool-1.5.6-4.EL4.1.c4.2
</span><br>
<span class="quotelev1">&gt; libtool-libs-1.5.6-4.EL4.1.c4.2
</span><br>
<span class="quotelev1">&gt; flex-2.5.4a-33
</span><br>
<span class="quotelev1">&gt; (what else is essential to build OpenMpi?)
</span><br>
<p>Building from SVN will require more recent versions of these tools  
<br>
(libtool in particular) -- see: <a href="http://www.open-mpi.org/svn/">http://www.open-mpi.org/svn/</a> 
<br>
building.php.  The HACKING file has good instructions on how to get  
<br>
recent versions of the tools without hosing your system: http:// 
<br>
svn.open-mpi.org/svn/ompi/trunk/HACKING.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3211.php">Jeff Squyres: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3209.php">Jeff Squyres: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>In reply to:</strong> <a href="3173.php">Rob: "[OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
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
