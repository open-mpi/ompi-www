<?
$subject_val = "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 19:47:53 2015" -->
<!-- isoreceived="20150728234753" -->
<!-- sent="Tue, 28 Jul 2015 16:47:37 -0700" -->
<!-- isosent="20150728234737" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler" -->
<!-- id="CAAvDA17_OnwjhEXivnNE-5zz8khOMn3zqman36UM6dSLaW633g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150728220525.GE3467_at_type.home" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 19:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4528.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-624-gd8c5b16)"</a>
<li><strong>Previous message:</strong> <a href="4526.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4525.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4533.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4533.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 28, 2015 at 3:05 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Paul Hargrove, le Tue 28 Jul 2015 15:00:36 -0700, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Well, for the compiler that accepted the &quot;=r&quot; form and then generated
</span><br>
<span class="quotelev1">&gt; code that
</span><br>
<span class="quotelev2">&gt; &gt; SEGV'd I would say &quot;buggy&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to see the generated code before saying anything, since
</span><br>
<span class="quotelev1">&gt; it's so easy to write bogus inline assembly and being completely unable
</span><br>
<span class="quotelev1">&gt; to see the issue before seeing the bogus generated code :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The compiler I have characterized as &quot;buggy&quot; is Solaris Studio 12.2 for
<br>
Linux (&quot;Sun C 5.11 Linux_i386 2010/08/13&quot;):
<br>
<p>Previously I only had a bunch of SEGVs from &quot;make check&quot; to support that.
<br>
However, now I have the generated code that Samuel requested to support
<br>
that conclusion.
<br>
<p>The inline asm I had originally tested that lead to that characterization
<br>
was:
<br>
<p>&nbsp;&nbsp;__asm__(
<br>
&nbsp;&nbsp;&quot;xchg %%ebx,%1\n\t&quot;
<br>
&nbsp;&nbsp;&quot;cpuid\n\t&quot;
<br>
&nbsp;&nbsp;&quot;xchg %%ebx,%1\n\t&quot;
<br>
&nbsp;&nbsp;: &quot;=a&quot; (*eax), &quot;=r&quot; (*ebx), &quot;=c&quot; (*ecx), &quot;=d&quot; (*edx)
<br>
&nbsp;&nbsp;: &quot;0&quot; (*eax), &quot;2&quot; (*ecx));
<br>
<p><p>And retesting that asm today, I find the following generated code:
<br>
<p>$ objdump -d src/.libs/libhwloc.so | grep -C1 -w cpuid
<br>
&nbsp;&nbsp;&nbsp;5f5c5:       87 d3                   xchg   %edx,%ebx
<br>
&nbsp;&nbsp;&nbsp;5f5c7:       0f a2                   cpuid
<br>
&nbsp;&nbsp;&nbsp;5f5c9:       87 d3                   xchg   %edx,%ebx
<br>
<p><p><p>So the compiler chose %edx for the 2nd output, even though is is explicitly
<br>
used for the 4th output.
<br>
I don't see how that could ever be correct.
<br>
<p>I tried adding the early-clobbers (&quot;=&amp;&quot; vs &quot;=&quot;):
<br>
<p>&nbsp;&nbsp;: &quot;=a&quot; (*eax), &quot;=r&amp;&quot; (*ebx), &quot;=c&quot; (*ecx), &quot;=&amp;d&quot; (*edx)
<br>
<p><p>But the same bogus code is generated.
<br>
<p><p>We already know the following &quot;final&quot; asm works on this system (on all the
<br>
systems I tested):
<br>
<p>&nbsp;&nbsp;__asm__(
<br>
&nbsp;&nbsp;&quot;mov %%ebx,%1\n\t&quot;
<br>
&nbsp;&nbsp;&quot;cpuid\n\t&quot;
<br>
&nbsp;&nbsp;&quot;xchg %%ebx,%1\n\t&quot;
<br>
&nbsp;&nbsp;: &quot;+a&quot; (*eax), &quot;=&amp;SD&quot; (*ebx), &quot;+c&quot; (*ecx), &quot;=&amp;d&quot; (*edx));
<br>
<p>But I tried changing &quot;SD&quot; to &quot;r&quot;:
<br>
<p>&nbsp;&nbsp;: &quot;+a&quot; (*eax), &quot;=&amp;r&quot; (*ebx), &quot;+c&quot; (*ecx), &quot;=&amp;d&quot; (*edx));
<br>
<p><p>And we again see %edx being chosen for two outputs:
<br>
<p>$ objdump -d src/.libs/libhwloc.so | grep -C1 -w cpuid
<br>
&nbsp;&nbsp;&nbsp;5f5b3:       8b d3                   mov    %ebx,%edx
<br>
&nbsp;&nbsp;&nbsp;5f5b5:       0f a2                   cpuid
<br>
&nbsp;&nbsp;&nbsp;5f5b7:       87 d3                   xchg   %edx,%ebx
<br>
<p><p><p><p>It is also worth pointing out that the first asm in this email was never a
<br>
real candidate because it also resulted in build failures on a couple gcc
<br>
versions:
<br>
<p>With &quot;gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-11)&quot; on Scientific Linux 6.6
<br>
(RHEL clone like CentOS):
<br>
<p>libtool: compile:  gcc -DHAVE_CONFIG_H -I.
<br>
-I/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/src
<br>
-I../include/private/autogen -I../include/hwloc/autogen
<br>
-I/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/BLD/
<br>
include
<br>
-I/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include
<br>
-DHWLOC_INSIDE_LIBHWLOC -DHWLOC
<br>
_PLUGINS_PATH=\&quot;/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/INST/lib/hwloc\&quot;
<br>
-fvisibility=hidden -g -O2 -M
<br>
T topology-x86.lo -MD -MP -MF .deps/topology-x86.Tpo -c
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-
<br>
1.11.0/src/topology-x86.c  -fPIC -DPIC -o .libs/topology-x86.o
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/src/topology-x86.c:
<br>
In function ?look_proc?:
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: can't find a register in class ?CLOBBERED_REGS? while reloading ?asm?
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
/home/phargrov/OMPI/hwloc-1.11.0-linux-x86-sl6x/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
error: ?asm? operand has impossible constraints
<br>
make[1]: *** [topology-x86.lo] Error 1
<br>
<p>And with &quot;gcc (GCC) 3.2 20020903 (Red Hat Linux 8.0 3.2-7)&quot; on Red Hat
<br>
Linux 8.0:
<br>
<p>libtool: compile:  gcc -DHAVE_CONFIG_H -I.
<br>
-I/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/hwloc-1.11.0/src
<br>
-I../include/private/autogen -I../include/hwloc/autogen
<br>
-I/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/BLD/include
<br>
-I/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/hwloc-1.11.0/include
<br>
-DHWLOC_INSIDE_LIBHWLOC
<br>
-DHWLOC_PLUGINS_PATH=\&quot;/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/INST/lib/hwloc\&quot;
<br>
-g -O2 -MT topology-x86.lo -MD -MP -MF .deps/topology-x86.Tpo -c
<br>
/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/hwloc-1.11.0/src/topology-x86.c
<br>
&nbsp;-fPIC -DPIC -o .libs/topology-x86.o
<br>
/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/hwloc-1.11.0/src/topology-x86.c:
<br>
In function `look_proc':
<br>
/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
can't find a register in class `Q_REGS' while reloading `asm'
<br>
/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
can't find a register in class `Q_REGS' while reloading `asm'
<br>
/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
can't find a register in class `Q_REGS' while reloading `asm'
<br>
/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
can't find a register in class `Q_REGS' while reloading `asm'
<br>
/home/pcp1/phargrov/OMPI/hwloc-1.11.0-linux-x86-RH8/hwloc-1.11.0/include/private/cpuid-x86.h:75:
<br>
can't find a register in class `Q_REGS' while reloading `asm'
<br>
make[1]: *** [topology-x86.lo] Error 1
<br>
<p><p>These two are examples of &quot;poorly performing&quot; register allocators, as
<br>
opposed to the *incorrect* one seen in Solaris Studio 12.2.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4527/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4528.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-624-gd8c5b16)"</a>
<li><strong>Previous message:</strong> <a href="4526.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4525.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4533.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4533.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
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
