<?
$subject_val = "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 03:51:27 2009" -->
<!-- isoreceived="20090902075127" -->
<!-- sent="Wed, 2 Sep 2009 10:51:22 +0300" -->
<!-- isosent="20090902075122" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install" -->
<!-- id="07E057C6-ACA5-4C46-80E3-FA45E119E575_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1251394478.10102.226.camel_at_hines490" -->
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
<strong>Subject:</strong> Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 03:51:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10552.php">Jeff Squyres: "Re: [OMPI users] openmpiu 1.3.3. with OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="10550.php">Jeff Squyres: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10504.php">Michael Hines: "[OMPI users] build problems - undefined reference to	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10558.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>Reply:</strong> <a href="10558.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>Reply:</strong> <a href="10559.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2009, at 8:34 PM, Michael Hines wrote:
<br>
<p><span class="quotelev1">&gt; I'm building from todays svn co on an x86_64 centos 5
</span><br>
<span class="quotelev1">&gt; Linux 2.6.18-128.1.10.el5 #1 SMP
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; m4 (GNU M4) 1.4.13
</span><br>
<span class="quotelev1">&gt; automake (GNU automake) 1.11
</span><br>
<span class="quotelev1">&gt; autoconf (GNU Autoconf) 2.64
</span><br>
<span class="quotelev1">&gt; ltmain.sh (GNU libtool) 2.2.6
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.3.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>These versions should all be ok.
<br>
<p><span class="quotelev1">&gt; and configured with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=$HOME/openmpi --srcdir=.. --disable-mpi-f77
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -O3 -DNDEBUG -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing
</span><br>
<span class="quotelev1">&gt; -pthread -fvisibility=hidden -o opal_wrapper
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o  ../../../opal/.libs/libopen-pal.a -ldl -lnsl -lutil - 
</span><br>
<span class="quotelev1">&gt; lm
</span><br>
<span class="quotelev1">&gt; -pthread
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o): In function
</span><br>
<span class="quotelev1">&gt; `lt_dlinit':
</span><br>
<span class="quotelev1">&gt; ltdl.c:(.text+0x10d3): undefined reference to
</span><br>
<span class="quotelev1">&gt; `lt_libltdlc_LTX_preloaded_symbols'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hmm.  This feels like a mismatch of libtool somehow...  (ltdl is a  
<br>
part of the larger Libtool package).  Can you send all the information  
<br>
listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><span class="quotelev1">&gt; Is anyone familiar with this or what to do about it?
</span><br>
<span class="quotelev1">&gt; If I try to avoid with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=$HOME/openmpi --srcdir=.. --disable-mpi-f77
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f90 --disable-dlopen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I 'make -j 4' successfully but during 'make install' get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /bin/sh ../../../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; opal_wrapper '/home/hines/openmpi/bin'
</span><br>
<span class="quotelev1">&gt; ./opal_wrapper: line 1: ELF: command not found
</span><br>
<span class="quotelev1">&gt; libtool: install: invalid libtool wrapper script `opal_wrapper'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hints on how to build on this machine are greatly welcome. I had the
</span><br>
<span class="quotelev1">&gt; same problems when using openmpi-1.3.3.tar.gz and my normal  
</span><br>
<span class="quotelev1">&gt; development
</span><br>
<span class="quotelev1">&gt; environment (less recent m4 and autotools, and gcc-4.1.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>This seems like an even bigger problem -- ELF is not a command, so how  
<br>
it's trying to execute that seems pretty nebulous.  More information  
<br>
would be required to know what is going on here (e.g., the information  
<br>
from the help web page).
<br>
<p>Note that a normal tarball build of Open MPI does not require any of  
<br>
the Autotools (m4, Autoconf, Automake, Libtool) to be installed at all  
<br>
because the tarball is bootstrapped / contains all the shell scripting  
<br>
that it needs to build.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10552.php">Jeff Squyres: "Re: [OMPI users] openmpiu 1.3.3. with OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="10550.php">Jeff Squyres: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10504.php">Michael Hines: "[OMPI users] build problems - undefined reference to	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10558.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>Reply:</strong> <a href="10558.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>Reply:</strong> <a href="10559.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
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
