<?
$subject_val = "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 18:13:59 2012" -->
<!-- isoreceived="20120531221359" -->
<!-- sent="Thu, 31 May 2012 18:13:54 -0400" -->
<!-- isosent="20120531221354" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems compiling openmpi-1.6 on some platforms" -->
<!-- id="5CA8F674-50B0-4059-A88B-C1D13ED14371_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201205301129.q4UBTUoL014917_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems compiling openmpi-1.6 on some platforms<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-31 18:13:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19404.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19402.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19396.php">Siegmar Gross: "[OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19446.php">Matthias Jurenz: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 30, 2012, at 7:29 AM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; [snipped Solaris / VT stuff]
</span><br>
<p><p>I'll let the Oracle and/or VT guys answer that.
<br>
<p><span class="quotelev1">&gt; Unfortunately &quot;cc&quot; on Linux creates the following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ln -s &quot;../../../openmpi-1.6/opal/asm/generated/
</span><br>
<span class="quotelev1">&gt;  atomic-ia32-linux-nongas.s&quot; atomic-asm.S
</span><br>
<span class="quotelev1">&gt;  CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev1">&gt; &lt;command-line&gt;:19:0: warning: &quot;__FLT_EVAL_METHOD__&quot; redefined
</span><br>
<span class="quotelev1">&gt;  [enabled by default]
</span><br>
<span class="quotelev1">&gt; &lt;built-in&gt;:110:0: note: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt; cpp: fatal error: -fuse-linker-plugin, but liblto_plugin.so not found
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; cc: cpp failed for atomic-asm.S
</span><br>
<span class="quotelev1">&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/.../opal/asm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/.../opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p>What compiler is &quot;cc&quot;?
<br>
<p><span class="quotelev1">&gt; Adding the option &quot;--with-libltdl=internal&quot; (should be the default
</span><br>
<span class="quotelev1">&gt; anyway) didn't solve the problem so that I tried to add the options
</span><br>
<span class="quotelev1">&gt; &quot;--without-libltdl --disable-dlopen&quot; to the cc-configuration on
</span><br>
<span class="quotelev1">&gt; Linux. Unfortunately I still get the above error although I started
</span><br>
<span class="quotelev1">&gt; everything in a new directory.
</span><br>
<p>FWIW: the atomic stuff is unrelated to libltdl.  So I can see how adding those options had no effect.
<br>
<p><span class="quotelev1">&gt; I have another problem on SunOS_x86 with both &quot;cc&quot; and &quot;gcc&quot; where
</span><br>
<span class="quotelev1">&gt; &quot;configure&quot; breaks with the following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; config.status: creating Makefile
</span><br>
<span class="quotelev1">&gt; ./config.status: line 1197:  4396 Done(141)
</span><br>
<span class="quotelev1">&gt;               eval sed \&quot;\$ac_sed_extra\&quot; &quot;$ac_file_inputs&quot;
</span><br>
<span class="quotelev1">&gt;      4397 Segmentation Fault      | $AWK -f &quot;$ac_tmp/subs.awk&quot; &gt; $ac_tmp/out
</span><br>
<span class="quotelev1">&gt; config.status: error: could not create Makefile
</span><br>
<p>Ouch -- sed seg faulted!
<br>
<p>There's not much we can do there; if basic commands are not working on your system, then OMPI failing is really just a symptom of some deeper problem.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19404.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19402.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19396.php">Siegmar Gross: "[OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19446.php">Matthias Jurenz: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
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
