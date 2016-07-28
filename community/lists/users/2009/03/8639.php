<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 11:57:26 2009" -->
<!-- isoreceived="20090330155726" -->
<!-- sent="Mon, 30 Mar 2009 10:57:21 -0500" -->
<!-- isosent="20090330155721" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem" -->
<!-- id="20090330155720.GD26929_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090330140425.GC26932_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 11:57:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8640.php">Jeff Squyres: "Re: [OMPI users] Generic Type"</a>
<li><strong>Previous message:</strong> <a href="8638.php">Gabriele Fatigati: "[OMPI users] Generic Type"</a>
<li><strong>In reply to:</strong> <a href="8632.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8646.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8646.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar/30/2009 09:04:26AM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; On Thu, Mar/26/2009 04:52:28PM, Kevin McManus wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As a complete beginner (to OpenMPI) I am attempting to build on
</span><br>
<span class="quotelev2">&gt; &gt; a Linux opteron infiniband platform using SunStudio compilers.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My build script looks like...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ../configure x86_64 \
</span><br>
<span class="quotelev2">&gt; &gt;         CC=cc CXX=CC F77=f77 FC=f90 \
</span><br>
<span class="quotelev2">&gt; &gt;         CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 \
</span><br>
<span class="quotelev2">&gt; &gt;         --enable-static \
</span><br>
<span class="quotelev2">&gt; &gt;         --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt; &gt;         --enable-mpi-f90 \
</span><br>
<span class="quotelev2">&gt; &gt;         --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt; &gt;         --with-psm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We configure with --disable-mpi-threads, and have not tested
</span><br>
<span class="quotelev1">&gt; --with-psm and --with-static. Do you provide --with-psm a DIR
</span><br>
<span class="quotelev1">&gt; argument? &quot;configure --help&quot; shows: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;   --with-psm(=DIR)        Build PSM (QLogic InfiniPath PSM) support, searching
</span><br>
<span class="quotelev1">&gt;                           for libraries in DIR
</span><br>
<span class="quotelev1">&gt;   --with-psm-libdir=DIR   Search for PSM (QLogic InfiniPath PSM) libraries in
</span><br>
<span class="quotelev1">&gt;                           DIR
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I will try to reproduce the problem.
</span><br>
<p>I am not able to reproduce this with openmpi-1.3.2a1r20880.tar.gz.
<br>
<p>&nbsp;&nbsp;$ uname -a
<br>
&nbsp;&nbsp;Linux ... 2.6.16.46-0.12-smp #1 SMP Thu May 17 14:00:09 UTC 2007 x86_64 x86_64 x86_64 GNU/Linux
<br>
&nbsp;&nbsp;$ cc -V
<br>
&nbsp;&nbsp;cc: Sun C 5.9 Linux_i386 Patch 124871-01 2007/07/31
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Not sure why I need to put x86_64 as the first argument, just a lucky
</span><br>
<span class="quotelev2">&gt; &gt; guess after... 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: cannot guess build type; you must specify one
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...but I hit another problem...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --- MCA component allocator:basic (no configuration)
</span><br>
<span class="quotelev2">&gt; &gt; checking for MCA component allocator:basic compile mode... static
</span><br>
<span class="quotelev2">&gt; &gt; checking if MCA component allocator:basic can compile... yes
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --- MCA component allocator:bucket (no configuration)
</span><br>
<span class="quotelev2">&gt; &gt; checking for MCA component allocator:bucket compile mode... static
</span><br>
<span class="quotelev2">&gt; &gt; checking if MCA component allocator:bucket can compile... yes
</span><br>
<span class="quotelev2">&gt; &gt; ../configure: line 123247: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt; &gt; ../configure: line 123247: `            { $as_echo &quot;$as_me:$LINENO: WARNING: This component was selected as the default (direct call)&quot; &gt;&amp;5'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Have no idea of why I should need an MCA bucket but it seems
</span><br>
<span class="quotelev2">&gt; &gt; to trigger a problem. If I hack out the parentheses I end up
</span><br>
<span class="quotelev2">&gt; &gt; hitting more parenthetic syntax errors.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any suggestions gratefully received.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; k.mcmanus_at_[hidden] - <a href="http://staffweb.cms.gre.ac.uk/~k.mcmanus">http://staffweb.cms.gre.ac.uk/~k.mcmanus</a>
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Dr Kevin McManus                                Queen Mary 413
</span><br>
<span class="quotelev2">&gt; &gt; School of Computing &amp; Mathematical Sciences,
</span><br>
<span class="quotelev2">&gt; &gt; University of Greenwich,
</span><br>
<span class="quotelev2">&gt; &gt; Old Royal Naval College,
</span><br>
<span class="quotelev2">&gt; &gt; Park Row, Greenwich,                   Tel +44 (0)208 331 8719 
</span><br>
<span class="quotelev2">&gt; &gt; London, SE10 9LS                       Fax +44 (0)208 331 8665
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; University of Greenwich, a charity and company limited by
</span><br>
<span class="quotelev2">&gt; &gt; guarantee, registered in England (reg no. 986729)
</span><br>
<span class="quotelev2">&gt; &gt; Registered Office: Old Royal Naval College
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="8640.php">Jeff Squyres: "Re: [OMPI users] Generic Type"</a>
<li><strong>Previous message:</strong> <a href="8638.php">Gabriele Fatigati: "[OMPI users] Generic Type"</a>
<li><strong>In reply to:</strong> <a href="8632.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8646.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8646.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
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
