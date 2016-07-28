<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 10:04:31 2009" -->
<!-- isoreceived="20090330140431" -->
<!-- sent="Mon, 30 Mar 2009 09:04:26 -0500" -->
<!-- isosent="20090330140426" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem" -->
<!-- id="20090330140425.GC26932_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090326165228.GC26276_at_gre.ac.uk" -->
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
<strong>Date:</strong> 2009-03-30 10:04:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8633.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Previous message:</strong> <a href="8631.php">Lionel Gamet: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>In reply to:</strong> <a href="8596.php">Kevin McManus: "[OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8634.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8634.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8639.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar/26/2009 04:52:28PM, Kevin McManus wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a complete beginner (to OpenMPI) I am attempting to build on
</span><br>
<span class="quotelev1">&gt; a Linux opteron infiniband platform using SunStudio compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My build script looks like...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../configure x86_64 \
</span><br>
<span class="quotelev1">&gt;         CC=cc CXX=CC F77=f77 FC=f90 \
</span><br>
<span class="quotelev1">&gt;         CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 \
</span><br>
<span class="quotelev1">&gt;         --enable-static \
</span><br>
<span class="quotelev1">&gt;         --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;         --enable-mpi-f90 \
</span><br>
<span class="quotelev1">&gt;         --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt;         --with-psm
</span><br>
<p>We configure with --disable-mpi-threads, and have not tested
<br>
--with-psm and --with-static. Do you provide --with-psm a DIR
<br>
argument? &quot;configure --help&quot; shows: 
<br>
<p>&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;--with-psm(=DIR)        Build PSM (QLogic InfiniPath PSM) support, searching
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for libraries in DIR
<br>
&nbsp;&nbsp;--with-psm-libdir=DIR   Search for PSM (QLogic InfiniPath PSM) libraries in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DIR
<br>
&nbsp;&nbsp;...
<br>
&nbsp;
<br>
I will try to reproduce the problem.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure why I need to put x86_64 as the first argument, just a lucky
</span><br>
<span class="quotelev1">&gt; guess after... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: error: cannot guess build type; you must specify one
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...but I hit another problem...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- MCA component allocator:basic (no configuration)
</span><br>
<span class="quotelev1">&gt; checking for MCA component allocator:basic compile mode... static
</span><br>
<span class="quotelev1">&gt; checking if MCA component allocator:basic can compile... yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- MCA component allocator:bucket (no configuration)
</span><br>
<span class="quotelev1">&gt; checking for MCA component allocator:bucket compile mode... static
</span><br>
<span class="quotelev1">&gt; checking if MCA component allocator:bucket can compile... yes
</span><br>
<span class="quotelev1">&gt; ../configure: line 123247: syntax error near unexpected token `('
</span><br>
<span class="quotelev1">&gt; ../configure: line 123247: `            { $as_echo &quot;$as_me:$LINENO: WARNING: This component was selected as the default (direct call)&quot; &gt;&amp;5'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have no idea of why I should need an MCA bucket but it seems
</span><br>
<span class="quotelev1">&gt; to trigger a problem. If I hack out the parentheses I end up
</span><br>
<span class="quotelev1">&gt; hitting more parenthetic syntax errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions gratefully received.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; k.mcmanus_at_[hidden] - <a href="http://staffweb.cms.gre.ac.uk/~k.mcmanus">http://staffweb.cms.gre.ac.uk/~k.mcmanus</a>
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr Kevin McManus                                Queen Mary 413
</span><br>
<span class="quotelev1">&gt; School of Computing &amp; Mathematical Sciences,
</span><br>
<span class="quotelev1">&gt; University of Greenwich,
</span><br>
<span class="quotelev1">&gt; Old Royal Naval College,
</span><br>
<span class="quotelev1">&gt; Park Row, Greenwich,                   Tel +44 (0)208 331 8719 
</span><br>
<span class="quotelev1">&gt; London, SE10 9LS                       Fax +44 (0)208 331 8665
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; University of Greenwich, a charity and company limited by
</span><br>
<span class="quotelev1">&gt; guarantee, registered in England (reg no. 986729)
</span><br>
<span class="quotelev1">&gt; Registered Office: Old Royal Naval College
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
<li><strong>Next message:</strong> <a href="8633.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Previous message:</strong> <a href="8631.php">Lionel Gamet: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>In reply to:</strong> <a href="8596.php">Kevin McManus: "[OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8634.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8634.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8639.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
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
