<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 13:31:24 2009" -->
<!-- isoreceived="20090331173124" -->
<!-- sent="Tue, 31 Mar 2009 13:31:12 -0400" -->
<!-- isosent="20090331173112" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem" -->
<!-- id="49D25360.5060403_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49D11A46.5020205_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 13:31:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8678.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8676.php">M C: "[OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>In reply to:</strong> <a href="8654.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8679.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8679.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8680.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was talking with Jeff Squyres about your issue and he thinks the 
<br>
config.guess issue needs to be resolved first, even though your 
<br>
specification of x86_64 seems to get you by.
<br>
<p>So, do you still see the unexpected &quot;(&quot; if you try and run 
<br>
config/config.guess directly?   The original issue IIRC was:
<br>
<p>etected VPATH build
<br>
checking build system type... ../config/config.guess: line 1102: syntax 
<br>
error near unexpected token `('
<br>
../config/config.guess: line 1102: ` UNAME_REL=`(/bin/uname -X|grep 
<br>
Release|sed -e 's/.*= //')`'
<br>
configure: error: cannot guess build type; you must specify one
<br>
<p>Can you manually run UNAME_REL=`(/bin/uname -X|grep Release|sed -e 
<br>
's/.*= //')` in your shell without error?
<br>
<p>--td
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 30 Mar 2009 19:05:25 +0100
</span><br>
<span class="quotelev2">&gt;&gt; From: Kevin McManus &lt;k.mcmanus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Linux opteron infiniband sunstudio    
</span><br>
<span class="quotelev2">&gt;&gt; configure
</span><br>
<span class="quotelev2">&gt;&gt;     problem
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;20090330180524.GT13818_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt; &gt; I will try to reproduce the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; I am not able to reproduce this with openmpi-1.3.2a1r20880.tar.gz.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;   $ uname -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   Linux ... 2.6.16.46-0.12-smp #1 SMP Thu May 17 14:00:09 UTC 2007 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   $ cc -V
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   cc: Sun C 5.9 Linux_i386 Patch 124871-01 2007/07/31
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; interesting, this is a v.similar system
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -&gt;uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux ... 2.6.16.54-0.2.5-smp #1 SMP Mon Jan 21 13:29:51 UTC 2008 
</span><br>
<span class="quotelev2">&gt;&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt; -&gt;cc -V
</span><br>
<span class="quotelev2">&gt;&gt; cc: Sun C 5.9 Linux_i386 Patch 124871-01 2007/07/31
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we are looking in the wrong place, these syntax errors worry me,
</span><br>
<span class="quotelev2">&gt;&gt; I have never seen a configure script throw one before.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -&gt;ls -l /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root 4 2008-04-02 02:13 /bin/sh -&gt; bash
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; I am using tcsh it may take me a while to set up bash for myself.
</span><br>
<span class="quotelev2">&gt;&gt; So it is running in bash, which is unlikely to cause problems. Looking
</span><br>
<span class="quotelev2">&gt;&gt; at the configure source it runs some near identical code for MCA basic
</span><br>
<span class="quotelev2">&gt;&gt; before retiring ungracefully immediately after deciding that it can
</span><br>
<span class="quotelev2">&gt;&gt; handle MCA bucket. Ungracefully hacking the offending parentheses
</span><br>
<span class="quotelev2">&gt;&gt; from configure causes some v.strange things to happen. I will continue
</span><br>
<span class="quotelev2">&gt;&gt; hacking but until this bears fruit... do you also need to include
</span><br>
<span class="quotelev2">&gt;&gt; 'x86_64' as an argument for configure? 
</span><br>
<span class="quotelev1">&gt; I don't, and pretty sure neither does Ethan.
</span><br>
<span class="quotelev2">&gt;&gt; What happens when you run 'uname -X'?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; Interesting I get &quot;uname: invalid option --X&quot;  but should this always 
</span><br>
<span class="quotelev1">&gt; end up turning into &quot;unknown&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; TIA
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8678.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8676.php">M C: "[OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>In reply to:</strong> <a href="8654.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8679.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8679.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8680.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
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
