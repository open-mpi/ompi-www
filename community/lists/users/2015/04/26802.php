<?
$subject_val = "Re: [OMPI users] Configure failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 06:26:37 2015" -->
<!-- isoreceived="20150428102637" -->
<!-- sent="Tue, 28 Apr 2015 10:26:36 +0000" -->
<!-- isosent="20150428102636" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure failure" -->
<!-- id="93B29A39-FE7B-4CC6-929F-C6A8FDD49A37_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPsJ1NZRGTEVZT_8r3PPWXG2mHSSPwo3=M6vxmG_rihGBudQUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure failure<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-28 06:26:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26803.php">Noam Bernstein: "[OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26801.php">Steven Vancoillie: "[OMPI users] performance issue mpi_init"</a>
<li><strong>In reply to:</strong> <a href="26798.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2015, at 5:02 PM, Walt Brainerd &lt;walt.brainerd_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CC       constants.lo
</span><br>
<span class="quotelev1">&gt; In file included from ../../../../opal/include/opal_config_bottom.h:256:0,
</span><br>
<span class="quotelev1">&gt;                  from ../../../../opal/include/opal_config.h:2797,
</span><br>
<span class="quotelev1">&gt;                  from ../../../../ompi/include/ompi_config.h:27,
</span><br>
<span class="quotelev1">&gt;                  from constants.c:10:
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-pc-cygwin/4.9.2/include/stdint.h:9:26: fatal error: stdint.h
</span><br>
<span class="quotelev1">&gt; : No such file or directory
</span><br>
<span class="quotelev1">&gt;  # include_next &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt;                           ^
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; Makefile:4194: recipe for target 'constants.lo' failed
</span><br>
<p>This looks like you have a busted compiler installation...?
<br>
<p><span class="quotelev1">&gt; make[2]: *** [constants.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory '/cygdrive/c/walt/Software/Openmpi/openmpi-1.8.4/ompi
</span><br>
<span class="quotelev1">&gt; /mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt; Makefile:3126: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory '/cygdrive/c/walt/Software/Openmpi/openmpi-1.8.4/ompi
</span><br>
<span class="quotelev1">&gt; '
</span><br>
<span class="quotelev1">&gt; Makefile:1686: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p>The rest of these messages are somewhat irrelevant; they just represent &quot;make&quot; unwinding out of recursive calls.  The real error is the #include statement failing to compile in the ompi/mpi/fortran/use-mpi-f08/constants.c file.
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
<li><strong>Next message:</strong> <a href="26803.php">Noam Bernstein: "[OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26801.php">Steven Vancoillie: "[OMPI users] performance issue mpi_init"</a>
<li><strong>In reply to:</strong> <a href="26798.php">Walt Brainerd: "Re: [OMPI users] Configure failure"</a>
<!-- nextthread="start" -->
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
