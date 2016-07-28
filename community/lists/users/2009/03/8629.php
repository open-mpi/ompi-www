<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 09:02:43 2009" -->
<!-- isoreceived="20090330130243" -->
<!-- sent="Mon, 30 Mar 2009 14:02:37 +0100" -->
<!-- isosent="20090330130237" -->
<!-- name="Kevin McManus" -->
<!-- email="k.mcmanus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure problem" -->
<!-- id="20090330130237.GN13818_at_gre.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49D0BBAC.2080800_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linux opteron infiniband sunstudio configure problem<br>
<strong>From:</strong> Kevin McManus (<em>k.mcmanus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 09:02:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8630.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="8628.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="8627.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8632.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar 30, 2009 at 08:31:40AM -0400, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Sorry for the delay in response, I was out of the office late last week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you tell me what version of Open MPI you are trying to build (1.2 or 
</span><br>
<span class="quotelev1">&gt; 1.3 branch)?  Are you using the tarball on the Open MPI site or code 
</span><br>
<span class="quotelev1">&gt; downloaded from the svn repository?  Can you tell me which distribution and 
</span><br>
<span class="quotelev1">&gt; version of Linux you are on and the version of Sun Studio you are using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I build on Linux using Sun Studio I don't put x86_64 in the configure 
</span><br>
<span class="quotelev1">&gt; line so I am not sure why that was necessary and wonder it there still is 
</span><br>
<span class="quotelev1">&gt; an issue here.
</span><br>
<p>Hi Thanks for getting back to me
<br>
<p>I used a 1.3 tarball from Open MPI
<br>
Sorry, thought I included Linux details in posting...
<br>
<p>-&gt;uname -a
<br>
Linux heracles 2.6.16.54-0.2.5-smp #1 SMP Mon Jan 21 13:29:51 UTC 2008 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>My first build attempt encountered much the same problem, without
<br>
x86_64 configure complains about not being able to determine the system
<br>
type. As I say, putting x86_64 as the first argument was a lucky guess
<br>
to remove the error message...
<br>
<p>configure: Detected VPATH build
<br>
checking build system type... ../config/config.guess: line 1102: syntax error near unexpected token `('
<br>
../config/config.guess: line 1102: `            UNAME_REL=`(/bin/uname -X|grep Release|sed -e 's/.*= //')`'
<br>
configure: error: cannot guess build type; you must specify one
<br>
<p>...it doesn't like other strings but seems happy with x86_64.
<br>
<p>(uname -X is not POSIX and not GNU, works on Solaris but not something
<br>
I would recommend in build scripts)
<br>
<p>The bit I can't figure is that both errors result in the v.strange...
<br>
&quot; syntax error near unexpected token `('&quot;
<br>
<p>Hmmmm...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt; &gt;Message: 1
</span><br>
<span class="quotelev2">&gt; &gt;Date: Thu, 26 Mar 2009 16:52:28 +0000
</span><br>
<span class="quotelev2">&gt; &gt;From: Kevin McManus &lt;k.mcmanus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Subject: [OMPI users] Linux opteron infiniband sunstudio configure
</span><br>
<span class="quotelev2">&gt; &gt;	problem
</span><br>
<span class="quotelev2">&gt; &gt;To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;Message-ID: &lt;20090326165228.GC26276_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Hi All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;As a complete beginner (to OpenMPI) I am attempting to build on
</span><br>
<span class="quotelev2">&gt; &gt;a Linux opteron infiniband platform using SunStudio compilers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;My build script looks like...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;#!/bin/sh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;../configure x86_64 \
</span><br>
<span class="quotelev2">&gt; &gt;        CC=cc CXX=CC F77=f77 FC=f90 \
</span><br>
<span class="quotelev2">&gt; &gt;        CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 \
</span><br>
<span class="quotelev2">&gt; &gt;        --enable-static \
</span><br>
<span class="quotelev2">&gt; &gt;        --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt; &gt;        --enable-mpi-f90 \
</span><br>
<span class="quotelev2">&gt; &gt;        --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt; &gt;        --with-psm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Not sure why I need to put x86_64 as the first argument, just a lucky
</span><br>
<span class="quotelev2">&gt; &gt;guess after... 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;configure: error: cannot guess build type; you must specify one
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;...but I hit another problem...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--- MCA component allocator:basic (no configuration)
</span><br>
<span class="quotelev2">&gt; &gt;checking for MCA component allocator:basic compile mode... static
</span><br>
<span class="quotelev2">&gt; &gt;checking if MCA component allocator:basic can compile... yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--- MCA component allocator:bucket (no configuration)
</span><br>
<span class="quotelev2">&gt; &gt;checking for MCA component allocator:bucket compile mode... static
</span><br>
<span class="quotelev2">&gt; &gt;checking if MCA component allocator:bucket can compile... yes
</span><br>
<span class="quotelev2">&gt; &gt;../configure: line 123247: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt; &gt;../configure: line 123247: `            { $as_echo &quot;$as_me:$LINENO: 
</span><br>
<span class="quotelev2">&gt; &gt;WARNING: This component was selected as the default (direct call)&quot; &gt;&amp;5'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Have no idea of why I should need an MCA bucket but it seems
</span><br>
<span class="quotelev2">&gt; &gt;to trigger a problem. If I hack out the parentheses I end up
</span><br>
<span class="quotelev2">&gt; &gt;hitting more parenthetic syntax errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Any suggestions gratefully received.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;k.mcmanus_at_[hidden] - <a href="http://staffweb.cms.gre.ac.uk/~k.mcmanus">http://staffweb.cms.gre.ac.uk/~k.mcmanus</a>
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;Dr Kevin McManus                                Queen Mary 413
</span><br>
<span class="quotelev2">&gt; &gt;School of Computing &amp; Mathematical Sciences,
</span><br>
<span class="quotelev2">&gt; &gt;University of Greenwich,
</span><br>
<span class="quotelev2">&gt; &gt;Old Royal Naval College,
</span><br>
<span class="quotelev2">&gt; &gt;Park Row, Greenwich,                   Tel +44 (0)208 331 8719 
</span><br>
<span class="quotelev2">&gt; &gt;London, SE10 9LS                       Fax +44 (0)208 331 8665
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;University of Greenwich, a charity and company limited by
</span><br>
<span class="quotelev2">&gt; &gt;guarantee, registered in England (reg no. 986729)
</span><br>
<span class="quotelev2">&gt; &gt;Registered Office: Old Royal Naval College
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><pre>
-- 
k.mcmanus_at_[hidden] - <a href="http://staffweb.cms.gre.ac.uk/~k.mcmanus">http://staffweb.cms.gre.ac.uk/~k.mcmanus</a>
--------------------------------------------------------------
Dr Kevin McManus                                Queen Mary 413
School of Computing &amp; Mathematical Sciences,
University of Greenwich,
Old Royal Naval College,
Park Row, Greenwich,                   Tel +44 (0)208 331 8719 
London, SE10 9LS                       Fax +44 (0)208 331 8665
--------------------------------------------------------------
University of Greenwich, a charity and company limited by
guarantee, registered in England (reg no. 986729)
Registered Office: Old Royal Naval College
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8630.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="8628.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="8627.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8632.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
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
