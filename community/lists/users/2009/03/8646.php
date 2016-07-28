<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 14:05:32 2009" -->
<!-- isoreceived="20090330180532" -->
<!-- sent="Mon, 30 Mar 2009 19:05:25 +0100" -->
<!-- isosent="20090330180525" -->
<!-- name="Kevin McManus" -->
<!-- email="k.mcmanus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem" -->
<!-- id="20090330180524.GT13818_at_gre.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090330155720.GD26929_at_sun.com" -->
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
<strong>Date:</strong> 2009-03-30 14:05:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8647.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>Previous message:</strong> <a href="8645.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8639.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8648.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8648.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; I will try to reproduce the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not able to reproduce this with openmpi-1.3.2a1r20880.tar.gz.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ uname -a
</span><br>
<span class="quotelev1">&gt;   Linux ... 2.6.16.46-0.12-smp #1 SMP Thu May 17 14:00:09 UTC 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;   $ cc -V
</span><br>
<span class="quotelev1">&gt;   cc: Sun C 5.9 Linux_i386 Patch 124871-01 2007/07/31
</span><br>
<p>interesting, this is a v.similar system
<br>
<p>-&gt;uname -a
<br>
Linux ... 2.6.16.54-0.2.5-smp #1 SMP Mon Jan 21 13:29:51 UTC 2008 x86_64 x86_64 x86_64 GNU/Linux
<br>
-&gt;cc -V
<br>
cc: Sun C 5.9 Linux_i386 Patch 124871-01 2007/07/31
<br>
<p>I think we are looking in the wrong place, these syntax errors worry me,
<br>
I have never seen a configure script throw one before.
<br>
<p>-&gt;ls -l /bin/sh
<br>
lrwxrwxrwx 1 root root 4 2008-04-02 02:13 /bin/sh -&gt; bash
<br>
<p>So it is running in bash, which is unlikely to cause problems. Looking
<br>
at the configure source it runs some near identical code for MCA basic
<br>
before retiring ungracefully immediately after deciding that it can
<br>
handle MCA bucket. Ungracefully hacking the offending parentheses
<br>
from configure causes some v.strange things to happen. I will continue
<br>
hacking but until this bears fruit... do you also need to include
<br>
'x86_64' as an argument for configure? What happens when you run 'uname -X'?
<br>
<p>TIA
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
<li><strong>Next message:</strong> <a href="8647.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>Previous message:</strong> <a href="8645.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8639.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8648.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8648.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
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
