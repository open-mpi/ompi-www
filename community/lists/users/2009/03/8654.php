<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 15:15:22 2009" -->
<!-- isoreceived="20090330191522" -->
<!-- sent="Mon, 30 Mar 2009 15:15:18 -0400" -->
<!-- isosent="20090330191518" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem" -->
<!-- id="49D11A46.5020205_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Linux opteron infiniband sunstudio configure, problem" -->
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
<strong>Date:</strong> 2009-03-30 15:15:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8655.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8653.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="8644.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8656.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8656.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8677.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Mon, 30 Mar 2009 19:05:25 +0100
</span><br>
<span class="quotelev1">&gt; From: Kevin McManus &lt;k.mcmanus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Linux opteron infiniband sunstudio	configure
</span><br>
<span class="quotelev1">&gt; 	problem
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;20090330180524.GT13818_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; I will try to reproduce the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am not able to reproduce this with openmpi-1.3.2a1r20880.tar.gz.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   $ uname -a
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Linux ... 2.6.16.46-0.12-smp #1 SMP Thu May 17 14:00:09 UTC 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   $ cc -V
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   cc: Sun C 5.9 Linux_i386 Patch 124871-01 2007/07/31
</span><br>
<span class="quotelev2">&gt;&gt;     
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
I am using tcsh it may take me a while to set up bash for myself.
<br>
<span class="quotelev1">&gt; So it is running in bash, which is unlikely to cause problems. Looking
</span><br>
<span class="quotelev1">&gt; at the configure source it runs some near identical code for MCA basic
</span><br>
<span class="quotelev1">&gt; before retiring ungracefully immediately after deciding that it can
</span><br>
<span class="quotelev1">&gt; handle MCA bucket. Ungracefully hacking the offending parentheses
</span><br>
<span class="quotelev1">&gt; from configure causes some v.strange things to happen. I will continue
</span><br>
<span class="quotelev1">&gt; hacking but until this bears fruit... do you also need to include
</span><br>
<span class="quotelev1">&gt; 'x86_64' as an argument for configure? 
</span><br>
I don't, and pretty sure neither does Ethan.
<br>
<span class="quotelev1">&gt; What happens when you run 'uname -X'?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Interesting I get &quot;uname: invalid option --X&quot;  but should this always 
<br>
end up turning into &quot;unknown&quot;?
<br>
<p>--td
<br>
<span class="quotelev1">&gt; TIA
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8655.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8653.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="8644.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8656.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8656.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8677.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
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
