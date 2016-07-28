<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 14:19:24 2009" -->
<!-- isoreceived="20090330181924" -->
<!-- sent="Mon, 30 Mar 2009 13:19:17 -0500" -->
<!-- isosent="20090330181917" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem" -->
<!-- id="20090330181916.GF26929_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090330180524.GT13818_at_gre.ac.uk" -->
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
<strong>Date:</strong> 2009-03-30 14:19:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8649.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8647.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>In reply to:</strong> <a href="8646.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8650.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8650.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar/30/2009 07:05:25PM, Kevin McManus wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I will try to reproduce the problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am not able to reproduce this with openmpi-1.3.2a1r20880.tar.gz.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   $ uname -a
</span><br>
<span class="quotelev2">&gt; &gt;   Linux ... 2.6.16.46-0.12-smp #1 SMP Thu May 17 14:00:09 UTC 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt;   $ cc -V
</span><br>
<span class="quotelev2">&gt; &gt;   cc: Sun C 5.9 Linux_i386 Patch 124871-01 2007/07/31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; interesting, this is a v.similar system
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -&gt;uname -a
</span><br>
<span class="quotelev1">&gt; Linux ... 2.6.16.54-0.2.5-smp #1 SMP Mon Jan 21 13:29:51 UTC 2008 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; -&gt;cc -V
</span><br>
<span class="quotelev1">&gt; cc: Sun C 5.9 Linux_i386 Patch 124871-01 2007/07/31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we are looking in the wrong place, these syntax errors worry me,
</span><br>
<span class="quotelev1">&gt; I have never seen a configure script throw one before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -&gt;ls -l /bin/sh
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root root 4 2008-04-02 02:13 /bin/sh -&gt; bash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it is running in bash, which is unlikely to cause problems.
</span><br>
<p>I do not think you will get different configure results launching
<br>
configure from different shells.
<br>
<p><span class="quotelev1">&gt; Looking at the configure source it runs some near identical code for
</span><br>
<span class="quotelev1">&gt; MCA basic before retiring ungracefully immediately after deciding
</span><br>
<span class="quotelev1">&gt; that it can handle MCA bucket. Ungracefully hacking the offending
</span><br>
<span class="quotelev1">&gt; parentheses from configure causes some v.strange things to happen. I
</span><br>
<span class="quotelev1">&gt; will continue hacking but until this bears fruit... do you also need
</span><br>
<span class="quotelev1">&gt; to include 'x86_64' as an argument for configure? What happens when
</span><br>
<span class="quotelev1">&gt; you run 'uname -X'?
</span><br>
<p>uname -X gives me &quot;invalid option&quot; on RHEL {4,5} and SLES {9,10}.
<br>
Post your config.log file.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIA
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
<li><strong>Next message:</strong> <a href="8649.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8647.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>In reply to:</strong> <a href="8646.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8650.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Reply:</strong> <a href="8650.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
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
