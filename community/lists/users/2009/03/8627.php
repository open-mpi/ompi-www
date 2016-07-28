<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 08:31:44 2009" -->
<!-- isoreceived="20090330123144" -->
<!-- sent="Mon, 30 Mar 2009 08:31:40 -0400" -->
<!-- isosent="20090330123140" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure problem" -->
<!-- id="49D0BBAC.2080800_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Linux opteron infiniband sunstudio configure problem" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 08:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8628.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="8626.php">Jerome BENOIT: "[OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Maybe in reply to:</strong> <a href="8596.php">Kevin McManus: "[OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8629.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Reply:</strong> <a href="8629.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in response, I was out of the office late last week.
<br>
<p>Can you tell me what version of Open MPI you are trying to build (1.2 or 1.3 branch)?  Are you using the tarball on the Open MPI site or code downloaded from the svn repository?  Can you tell me which distribution and version of Linux you are on and the version of Sun Studio you are using?
<br>
<p>When I build on Linux using Sun Studio I don't put x86_64 in the configure line so I am not sure why that was necessary and wonder it there still is an issue here.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Thu, 26 Mar 2009 16:52:28 +0000
</span><br>
<span class="quotelev1">&gt; From: Kevin McManus &lt;k.mcmanus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Linux opteron infiniband sunstudio configure
</span><br>
<span class="quotelev1">&gt; 	problem
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;20090326165228.GC26276_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8628.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="8626.php">Jerome BENOIT: "[OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Maybe in reply to:</strong> <a href="8596.php">Kevin McManus: "[OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8629.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Reply:</strong> <a href="8629.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
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
