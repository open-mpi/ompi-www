<?
$subject_val = "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 10:50:02 2010" -->
<!-- isoreceived="20100826145002" -->
<!-- sent="Thu, 26 Aug 2010 16:49:55 +0200" -->
<!-- isosent="20100826144955" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10" -->
<!-- id="201008261649.55575.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C746676.9030001_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 10:49:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8385.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions"</a>
<li><strong>Previous message:</strong> <a href="8383.php">Scott Atchley: "[OMPI devel] 1.5rc5 over MX"</a>
<li><strong>In reply to:</strong> <a href="8323.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Paul,
<br>
thanks for testing so thoroughly.
<br>
<p>On Wednesday 25 August 2010 02:40:22 Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; In addition to the atomic.h and Anachronism warnings seen w/ 1.4.3rc1
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8322.php">http://www.open-mpi.org/community/lists/devel/2010/08/8322.php</a>), I find
</span><br>
<span class="quotelev1">&gt; some &quot;new&quot; warnings in 1.5rc5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; SunOS osol-x64 5.11 snv_111b i86pc i386 i86pc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cc -V
</span><br>
<span class="quotelev1">&gt; cc: Sun C 5.10 SunOS_i386 2009/06/03
</span><br>
<span class="quotelev1">&gt; usage: cc [ options] files. Use 'cc -flags' for details
</span><br>
Nice. I have installed the SunStudio Compiler Suite 12 update1 on a x86-64 
<br>
machine, aka:
<br>
cc: Sun C 5.10 Linux_i386 2009/06/03
<br>
<p><p>Now, I do get some other unrelated errors already in the configure:
<br>
<p>configure:18047: checking size of bool
<br>
configure:18052: CC -o conftest -O -DNDEBUG    conftest.cpp  &gt;&amp;5
<br>
&quot;/usr/include/stdlib.h&quot;, line 525: Error: &quot;{&quot; expected instead of &quot;__asm&quot;.
<br>
&quot;/usr/include/stdlib.h&quot;, line 525: Error: The function &quot;__asm&quot; must have a 
<br>
prototype.
<br>
&quot;/usr/include/stdlib.h&quot;, line 958: Error: &quot;at_quick_exit(void(*)())&quot; is 
<br>
expected to return a value.
<br>
<p>This is due to us enabling GNU-extensions, done through 
<br>
AC_USE_SYSTEM_EXTENSIONS and it's alias AC_GNU_SOURCE.
<br>
<p>I'll forward this to Sun.
<br>
<p><p><p><span class="quotelev1">&gt; Many instances of the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/ess/ess.h&quot;, line 61: warning:
</span><br>
<span class="quotelev1">&gt; attribute &quot;noreturn&quot; may not be applied to variable, ignored
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/errmgr/errmgr.h&quot;, line 138:
</span><br>
<span class="quotelev1">&gt; warning: attribute &quot;noreturn&quot; may not be applied to variable, ignored
</span><br>
<span class="quotelev1">&gt; [Due to applying __opal_attribute_noreturn__ to a function pointer]
</span><br>
See the other mail.
<br>
<p><p><span class="quotelev1">&gt; Single instances of the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.5rc5/opal/mca/crs/none/crs_none_module.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 136: warning: statement not reached
</span><br>
<p><span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/plm/base/plm_base_rsh_support.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 462: warning: implicit function declaration: rindex
</span><br>
Hmm, fixed in r23671
<br>
<p><p><span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/plm/base/plm_base_rsh_support.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 565: warning: improper pointer/integer combination: op &quot;=&quot;
</span><br>
fixed by the above as well.
<br>
<p>Best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
 Dr.-Ing. Rainer Keller  <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                         Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                 Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8385.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: attribute((noreturn)) and pointers to functions"</a>
<li><strong>Previous message:</strong> <a href="8383.php">Scott Atchley: "[OMPI devel] 1.5rc5 over MX"</a>
<li><strong>In reply to:</strong> <a href="8323.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
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
