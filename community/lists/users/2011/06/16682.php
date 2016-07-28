<?
$subject_val = "Re: [OMPI users] ifort 12.0.4 install problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 20:58:25 2011" -->
<!-- isoreceived="20110607005825" -->
<!-- sent="Mon, 6 Jun 2011 20:56:31 -0400" -->
<!-- isosent="20110607005631" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ifort 12.0.4 install problem" -->
<!-- id="0603EE7C-0C75-4248-803A-6CED93C4FC32_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimxxxXABWX4bb7V1eV9FtrVMmVKAQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ifort 12.0.4 install problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-06 20:56:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16683.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16681.php">Fengguang Song: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>In reply to:</strong> <a href="16679.php">Virginie trinite: "[OMPI users] ifort 12.0.4 install problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16688.php">Virginie trinite: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
<li><strong>Reply:</strong> <a href="16688.php">Virginie trinite: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 6, 2011, at 10:43 AM, Virginie trinite wrote:
<br>
<p><span class="quotelev1">&gt; I try to compile open-mpi with ifort 12.0.4. My system is ubuntu
</span><br>
<span class="quotelev1">&gt; lucid. Previous intallation with ifort 11.1 was fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure and make all seems to work well, but make install report an error:
</span><br>
<span class="quotelev1">&gt; libtool: line 7847: icc: command not found
</span><br>
<span class="quotelev1">&gt; libtool: install: error: relink `lipopen-rte.la' with the above
</span><br>
<span class="quotelev1">&gt; command before installing it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to underline that icc is a knom command for bash.
</span><br>
<p>Somehow it became unknown.  Is your PATH being reset somehow?  Or perhaps if your .bashrc resetting your PATH such that even if &quot;which icc&quot; finds it at the shell prompt, if sub-shells have your .bashrc invoked, the PATH gets reset (or the icc settings don't get inherited properly), and therefore it becomes unknown...?
<br>
<p><span class="quotelev1">&gt; I have check the FAQ and it seems to me that the problem is more like
</span><br>
<span class="quotelev1">&gt; the one report for IBM compiler. So I try with
</span><br>
<p>I'm a little confused why you're mentioning the IBM compiler...?  This issue is a shell/build issue (I assume...?  You only sent a few lines from the output, so I can't tell exactly where the error is occurring).
<br>
<p><span class="quotelev1">&gt; configure CC=icc CXX=icpc F77=ifort FC=ifort --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt; Now the install finish without error, but when I try to run mpi I have
</span><br>
<span class="quotelev1">&gt; error message:
</span><br>
<p>Now I'm very confused.  :-\
<br>
<p>Can you please send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>This will help me understand what the problem is and what you tried to do to fix it.
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16683.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16681.php">Fengguang Song: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>In reply to:</strong> <a href="16679.php">Virginie trinite: "[OMPI users] ifort 12.0.4 install problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16688.php">Virginie trinite: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
<li><strong>Reply:</strong> <a href="16688.php">Virginie trinite: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
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
