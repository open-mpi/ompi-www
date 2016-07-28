<?
$subject_val = "Re: [OMPI users] Problems Using PVFS2 with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 12:38:58 2010" -->
<!-- isoreceived="20100114173858" -->
<!-- sent="Thu, 14 Jan 2010 09:38:53 -0800" -->
<!-- isosent="20100114173853" -->
<!-- name="Evan Smyth" -->
<!-- email="Evan.Smyth_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Using PVFS2 with OpenMPI" -->
<!-- id="4B4F56AD.4020300_at_dreamworks.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B4E0927.1040304_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Using PVFS2 with OpenMPI<br>
<strong>From:</strong> Evan Smyth (<em>Evan.Smyth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 12:38:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11774.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11772.php">Aleksej Saushev: "[OMPI users] More NetBSD fixes"</a>
<li><strong>In reply to:</strong> <a href="11753.php">Edgar Gabriel: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had been using an older variant of the needed flag for building romio 
<br>
(because the newer one was failing as the preceding suggests). I made this 
<br>
change and built with the correct romio flag. I next need to fix the ways pvfs2 
<br>
build so that is uses -fPIC. Interestingly, about 95% of pvfs2 builds with this 
<br>
flag by default but the final 5% does not. It needs to. With that fixed, built 
<br>
and installed, I was able to rebuild openmpi correctly. My test program now 
<br>
works like a charm. I will give the *precise* steps I needed to build pvfs2 
<br>
2.8.1 with openmpi 1.4 here for the record...
<br>
<p>1. Determine where openmpi will be installed. I'm not certain that it needs to 
<br>
actually be installed there for this to work. If so, you will need to install 
<br>
openmpi twice. The first time, it clearly need not be built entirely correctly 
<br>
for pvfs2 (it can't be because setp 2 is a prerequisite for that) but probably 
<br>
building something without the &quot;--with-io-romio-flags=...&quot; should do if this 
<br>
actually must be installed at all. I'm betting it is not required but as I say, 
<br>
I have not verified this. It certainly works if it has been pre-installed as I 
<br>
just indicated.
<br>
<p>2. Build pvfs2 correctly (I get conflicting info on whether the 
<br>
&quot;--with-mpi=...&quot; is needed but FWIW, this is how I built it and it installs 
<br>
into /usr/local which is it's default location...
<br>
<p>cd &lt;pvfs2-build-area&gt;
<br>
setenv CFLAGS -fPIC
<br>
./configure --with-mpi=/work/rd/evan/archives/openmpi/openmpi/1.4/enable_pvfs \ 
<br>
--enable-verbose-build
<br>
make all
<br>
&lt;become root&gt;
<br>
make install
<br>
exit
<br>
<p>3. Build openmpi correctly. This is straightforward at this point. Also, the 
<br>
--enable-mpi-threads is not required for pvfs2 to work but I happen to also 
<br>
want this flag
<br>
<p>cd &lt;openmpi-build-area&gt;
<br>
&lt;make the change as described in the preciding post
<br>
ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2.h
<br>
--- a/ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2.h  Thu Sep 03
<br>
11:55:51 2009 -0500
<br>
+++ b/ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2.h  Mon Sep 21
<br>
10:16:27 2009 -0500
<br>
@@ -11,6 +11,10 @@
<br>
&nbsp;&nbsp;&nbsp;#include &quot;adio.h&quot;
<br>
&nbsp;&nbsp;&nbsp;#ifdef HAVE_PVFS2_H
<br>
&nbsp;&nbsp;&nbsp;#include &quot;pvfs2.h&quot;
<br>
+#endif
<br>
+
<br>
+#ifdef PVFS2_VERSION_MAJOR
<br>
+#include &quot;pvfs2-compat.h&quot;
<br>
&nbsp;&nbsp;&nbsp;#endif
<br>
<span class="quotelev1"> &gt;
</span><br>
./configure --prefix=/work/rd/evan/archives/openmpi/openmpi/1.4/enable_pvfs \ 
<br>
--enable-mpi-threads --with-io-romio-flags=&quot;--with-file-system=pvfs2+ufs+nfs&quot;
<br>
make all
<br>
&lt;become root&gt;
<br>
make install
<br>
exit
<br>
<p>... and that's it. Hopefully, the next person who needs to figure this out will 
<br>
be helped by these instructions.
<br>
<p>Evan
<br>
<p>This seems to have done the trick.
<br>
<p>Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; I don't know whether its relevant for this problem or not, but a couple 
</span><br>
<span class="quotelev1">&gt; of weeks ago we also found that we had to apply the following patch to 
</span><br>
<span class="quotelev1">&gt; to compile ROMIO with OpenMPI over pvfs2. There is an additional header 
</span><br>
<span class="quotelev1">&gt; pvfs2-compat.h included in the ROMIO version of MPICH, but is somehow 
</span><br>
<span class="quotelev1">&gt; missing in the OpenMPI version....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2.h
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2.h  Thu Sep 03
</span><br>
<span class="quotelev1">&gt; 11:55:51 2009 -0500
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2.h  Mon Sep 21
</span><br>
<span class="quotelev1">&gt; 10:16:27 2009 -0500
</span><br>
<span class="quotelev1">&gt; @@ -11,6 +11,10 @@
</span><br>
<span class="quotelev1">&gt;   #include &quot;adio.h&quot;
</span><br>
<span class="quotelev1">&gt;   #ifdef HAVE_PVFS2_H
</span><br>
<span class="quotelev1">&gt;   #include &quot;pvfs2.h&quot;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifdef PVFS2_VERSION_MAJOR
</span><br>
<span class="quotelev1">&gt; +#include &quot;pvfs2-compat.h&quot;
</span><br>
<span class="quotelev1">&gt;   #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rob Latham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jan 12, 2010 at 02:15:54PM -0800, Evan Smyth wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.4 (had same issue with 1.3.3) is configured with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/work/rd/evan/archives/openmpi/openmpi/1.4/enable_pvfs \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-threads --with-io-romio-flags=&quot;--with-filesystems=pvfs2+ufs+nfs&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PVFS 2.8.1 is configured to install in the default location (/usr/local) with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --with-mpi=/work/rd/evan/archives/openmpi/openmpi/1.4/enable_pvfs
</span><br>
<span class="quotelev2">&gt;&gt; In addition to Jeff's request for the build logs, do you have
</span><br>
<span class="quotelev2">&gt;&gt; 'pvfs2-config' in your path?   
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I build and install these (in this order) and setup my PVFS2 space using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instructions at pvfs.org. I am able to use this space using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/bin/pvfs2-ls types of commands. I am simply running a 2-server
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config (2 data servers and the same 2 hosts are metadata servers). As I say,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manually, this all seems fine (even when I'm not root). It may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relevant that I am *not* using the kernel interface for PVFS2 as I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; am just trying to get a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better understanding of how this works.
</span><br>
<span class="quotelev2">&gt;&gt; That's a good piece of information.  I run in that configuration
</span><br>
<span class="quotelev2">&gt;&gt; often, so we should be able to make this work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is perhaps relevant that I have not had to explicitly tell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI where I installed PVFS. I have told PVFS where I installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI, though. This does seem slightly odd but there does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appear to be a way of telling OpenMPI this information. Perhaps it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not needed.
</span><br>
<span class="quotelev2">&gt;&gt; PVFS needs an MPI library only to build MPI-based testcases.  The
</span><br>
<span class="quotelev2">&gt;&gt; servers, client libraries, and utilities do not use MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In any event, I then build my test program against this OpenMPI and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in that program I have the following call sequence (i is 0 and where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mntPoint is the path to my pvfs2 mount point -- I also tried
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prefixing a &quot;pvfs2:&quot; in the front of this as I read somewhere that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that was optional).
</span><br>
<span class="quotelev2">&gt;&gt; In this case, since you do not have the PVFS file system mounted, the
</span><br>
<span class="quotelev2">&gt;&gt; 'pvfs2:' prefix is mandatory.  Otherwise, the MPI-IO library will try
</span><br>
<span class="quotelev2">&gt;&gt; to look for a directory that does not exist.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which will only execute on one of my ranks (the way I'm running it).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No matter what I try, the MPI_File_open call fails with an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ERR_ACCESS error code.  This suggests a permission problem but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; am able to manually cp and rm from the pvfs2 space without problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so I am not at all clear on what the permission problem is. My
</span><br>
<span class="quotelev3">&gt;&gt;&gt; access flags look fine to me (the MPI_MODE_UNIQUE_OPEN flag makes no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; difference in this case as I'm only opening a single file anyway).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I write this file to shared NFS storage, all is &quot;fine&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (obviously, I do not consider that a permanent solution, though).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone have any idea why this is not working? Alternately or in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; addition, does anyone have step-by-step instructions for how to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build and set up PVFS2 with OpenMPI as well as an example program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because this is the first time I've attempted this so I may well be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing something wrong.
</span><br>
<span class="quotelev2">&gt;&gt; It sounds like you're on the right track.  I should update the PVFS
</span><br>
<span class="quotelev2">&gt;&gt; quickstart for the OpenMPI specifics.  In addition to pvfs2-ping and
</span><br>
<span class="quotelev2">&gt;&gt; pvfs2-ls, make sure you can pvfs2-cp files to and from your volume.
</span><br>
<span class="quotelev2">&gt;&gt; If those 3 utilities work, then your OpenMPI installation should work
</span><br>
<span class="quotelev2">&gt;&gt; as well.  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==rob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
------
Evan Smyth
Software Architect
DreamWorks Animation SKG
evan_at_[hidden]
818.695.4105
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11774.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11772.php">Aleksej Saushev: "[OMPI users] More NetBSD fixes"</a>
<li><strong>In reply to:</strong> <a href="11753.php">Edgar Gabriel: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
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
