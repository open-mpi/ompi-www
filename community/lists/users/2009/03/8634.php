<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 11:02:16 2009" -->
<!-- isoreceived="20090330150216" -->
<!-- sent="Mon, 30 Mar 2009 16:02:11 +0100" -->
<!-- isosent="20090330150211" -->
<!-- name="Kevin McManus" -->
<!-- email="k.mcmanus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem" -->
<!-- id="20090330150211.GO13818_at_gre.ac.uk" -->
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
<strong>From:</strong> Kevin McManus (<em>k.mcmanus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 11:02:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8635.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Previous message:</strong> <a href="8633.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8632.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8636.php">Iain Bason: "Re: [OMPI users] Linux opteron infiniband sunstudio	configure	problem"</a>
<li><strong>Reply:</strong> <a href="8636.php">Iain Bason: "Re: [OMPI users] Linux opteron infiniband sunstudio	configure	problem"</a>
<li><strong>Reply:</strong> <a href="8637.php">John Hearns: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar 30, 2009 at 09:04:26AM -0500, Ethan Mallove wrote:
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
<p>configure: error: unrecognized option: --diable-mpi-threads
<br>
Try `../configure --help' for more information.
<br>
<p><span class="quotelev1">&gt; 
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
<p>Not sure how to phrase the --with-psm(=DIR)
<br>
<p>I can find psm libs at...
<br>
<p>/usr/lib/libpsm_infinipath.so.1.0
<br>
/usr/lib/libpsm_infinipath.so.1
<br>
/usr/lib64/libpsm_infinipath.so.1.0
<br>
/usr/lib64/libpsm_infinipath.so.1
<br>
<p>so maybe I should use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-psm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-psm-libdir=/usr/lib64
<br>
but even if I remove --with-psm I hit the same problem with the MCA bucket
<br>
<p><p><span class="quotelev1">&gt; I will try to reproduce the problem.
</span><br>
<p>Thanks for your help :-)
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
<li><strong>Next message:</strong> <a href="8635.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Previous message:</strong> <a href="8633.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8632.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8636.php">Iain Bason: "Re: [OMPI users] Linux opteron infiniband sunstudio	configure	problem"</a>
<li><strong>Reply:</strong> <a href="8636.php">Iain Bason: "Re: [OMPI users] Linux opteron infiniband sunstudio	configure	problem"</a>
<li><strong>Reply:</strong> <a href="8637.php">John Hearns: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
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
