<?
$subject_val = "[OMPI users] Linux opteron infiniband sunstudio configure problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 12:52:39 2009" -->
<!-- isoreceived="20090326165239" -->
<!-- sent="Thu, 26 Mar 2009 16:52:28 +0000" -->
<!-- isosent="20090326165228" -->
<!-- name="Kevin McManus" -->
<!-- email="k.mcmanus_at_[hidden]" -->
<!-- subject="[OMPI users] Linux opteron infiniband sunstudio configure problem" -->
<!-- id="20090326165228.GC26276_at_gre.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Linux opteron infiniband sunstudio configure problem<br>
<strong>From:</strong> Kevin McManus (<em>k.mcmanus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 12:52:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8597.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="8595.php">Ralph Castain: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8627.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Maybe reply:</strong> <a href="8627.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Reply:</strong> <a href="8632.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>As a complete beginner (to OpenMPI) I am attempting to build on
<br>
a Linux opteron infiniband platform using SunStudio compilers.
<br>
<p>My build script looks like...
<br>
<p>#!/bin/sh
<br>
<p>../configure x86_64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=cc CXX=CC F77=f77 FC=f90 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-f90 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-psm
<br>
<p>Not sure why I need to put x86_64 as the first argument, just a lucky
<br>
guess after... 
<br>
<p>configure: error: cannot guess build type; you must specify one
<br>
<p>...but I hit another problem...
<br>
<p>--- MCA component allocator:basic (no configuration)
<br>
checking for MCA component allocator:basic compile mode... static
<br>
checking if MCA component allocator:basic can compile... yes
<br>
<p>--- MCA component allocator:bucket (no configuration)
<br>
checking for MCA component allocator:bucket compile mode... static
<br>
checking if MCA component allocator:bucket can compile... yes
<br>
../configure: line 123247: syntax error near unexpected token `('
<br>
../configure: line 123247: `            { $as_echo &quot;$as_me:$LINENO: WARNING: This component was selected as the default (direct call)&quot; &gt;&amp;5'
<br>
<p>Have no idea of why I should need an MCA bucket but it seems
<br>
to trigger a problem. If I hack out the parentheses I end up
<br>
hitting more parenthetic syntax errors.
<br>
<p>Any suggestions gratefully received.
<br>
<p><p>k.mcmanus_at_[hidden] - <a href="http://staffweb.cms.gre.ac.uk/~k.mcmanus">http://staffweb.cms.gre.ac.uk/~k.mcmanus</a>
<br>
--------------------------------------------------------------
<br>
Dr Kevin McManus                                Queen Mary 413
<br>
School of Computing &amp; Mathematical Sciences,
<br>
University of Greenwich,
<br>
Old Royal Naval College,
<br>
Park Row, Greenwich,                   Tel +44 (0)208 331 8719 
<br>
London, SE10 9LS                       Fax +44 (0)208 331 8665
<br>
--------------------------------------------------------------
<br>
<p>University of Greenwich, a charity and company limited by
<br>
guarantee, registered in England (reg no. 986729)
<br>
Registered Office: Old Royal Naval College
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8597.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="8595.php">Ralph Castain: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8627.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Maybe reply:</strong> <a href="8627.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Reply:</strong> <a href="8632.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
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
