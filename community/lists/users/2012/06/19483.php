<?
$subject_val = "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  8 08:49:22 2012" -->
<!-- isoreceived="20120608124922" -->
<!-- sent="Fri, 8 Jun 2012 14:48:59 +0200 (CEST)" -->
<!-- isosent="20120608124859" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems compiling openmpi-1.6 on some platforms" -->
<!-- id="201206081248.q58Cmx17007233_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problems compiling openmpi-1.6 on some platforms" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-08 08:48:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19484.php">BOUVIER Benjamin: "[OMPI users] Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19482.php">Jeff Squyres: "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19396.php">Siegmar Gross: "[OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><span class="quotelev4">&gt; &gt;&gt;&gt; Unfortunately &quot;cc&quot; on Linux creates the following error.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ln -s &quot;../../../openmpi-1.6/opal/asm/generated/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; atomic-ia32-linux-nongas.s&quot; atomic-asm.S
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;command-line&gt;:19:0: warning: &quot;__FLT_EVAL_METHOD__&quot; redefined
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [enabled by default]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;built-in&gt;:110:0: note: this is the location of the previous definition
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cpp: fatal error: -fuse-linker-plugin, but liblto_plugin.so not found
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cc: cpp failed for atomic-asm.S
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[2]: Leaving directory `/.../opal/asm'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[1]: Leaving directory `/.../opal'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What compiler is &quot;cc&quot;?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Sun C 5.12&quot; (Oracle Solaris Studio 12.3 for Linux). Do you need
</span><br>
<span class="quotelev2">&gt; &gt; anything else?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah.  I will have to defer this to my Oracle brethren, then...
</span><br>
<p>Today I edited &quot;.../openmpi-1.6-Linux.x86_64.64_cc/libtool, removed
<br>
&quot;|-fuse-linker-plugin&quot; in line 6295 and started &quot;config.status&quot;
<br>
once more. Afterwards I could compile and install Open MPI. Can
<br>
somebody fix this problem in libtool? There was one more warning:
<br>
<p>log.make.Linux.x86_64.64_cc:configure: WARNING: unrecognized options:
<br>
--enable-ltdl-convenience
<br>
<p><p>Furthermore there is a stale link:
<br>
<p>tyr src 627 ls /usr/local/openmpi-1.6_64_cc/share/man/man1/orteCC.1
<br>
ls: /usr/local/openmpi-1.6_64_cc/share/man/man1/orteCC.1:
<br>
&nbsp;&nbsp;No such file or directory
<br>
tyr src 628 ls -l /usr/local/openmpi-1.6_64_cc/share/man/man1/orteCC.1
<br>
lrwxrwxrwx    1 root     root            9 Jun  8 13:34
<br>
&nbsp;&nbsp;/usr/local/openmpi-1.6_64_cc/share/man/man1/orteCC.1 -&gt; ortec++.1
<br>
<p>Should it be linked to mpic++.1?
<br>
<p><p><p>I found another warning with Sun C 5.12 which shouldn't be a problem.
<br>
<p>configure:54329: checking stdbool.h usability
<br>
configure:54329: cc -c -O -DNDEBUG -m64   conftest.c &gt;&amp;5
<br>
&quot;/usr/include/stdbool.h&quot;, line 42: #error: &quot;Use of &lt;stdbool.h&gt;
<br>
&nbsp;&nbsp;is valid only in a c99 compilation environment.&quot;
<br>
cc: acomp failed for conftest.c
<br>
configure:54329: $? = 2
<br>
configure: failed program was:
<br>
| /* confdefs.h */
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;&quot;
<br>
...
<br>
| #include &lt;stdbool.h&gt;
<br>
configure:54329: result: no
<br>
configure:54329: checking stdbool.h presence
<br>
configure:54329: cpp  conftest.c
<br>
configure:54329: $? = 0
<br>
configure:54329: result: yes
<br>
configure:54329: WARNING: stdbool.h: present but cannot be compiled
<br>
configure:54329: WARNING: stdbool.h:     check for missing prerequisite headers?
<br>
configure:54329: WARNING: stdbool.h: see the Autoconf documentation
<br>
configure:54329: WARNING: stdbool.h:     section &quot;Present But Cannot Be 
<br>
Compiled&quot;
<br>
configure:54329: WARNING: stdbool.h: proceeding with the compiler's result
<br>
configure:54329: checking for stdbool.h
<br>
configure:54329: result: no
<br>
configure:54341: checking if &lt;stdbool.h&gt; works
<br>
configure:54374: result: no (don't have &lt;stdbool.h&gt;)
<br>
<p><p>I wrote the above definitions and includes into a file and added a
<br>
main function.
<br>
<p>cc -c -O -DNDEBUG -m64 stdbool_error.c
<br>
&nbsp;&nbsp;&quot;/usr/include/stdbool.h&quot;, line 42: #error: &quot;Use of &lt;stdbool.h&gt;
<br>
&nbsp;&nbsp;is valid only in a c99 compilation environment.&quot;
<br>
&nbsp;&nbsp;cc: acomp failed for stdbool_error.c
<br>
<p>cc -c -xc99 -O -DNDEBUG -m64 stdbool_error.c
<br>
<p>We need &quot;-xc99&quot; if &quot;stdbool.h&quot; should be used.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19484.php">BOUVIER Benjamin: "[OMPI users] Bug when mixing sent types in version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19482.php">Jeff Squyres: "Re: [OMPI users] Question on ./configure error on Tru64unix (OSF1) v5.1B-6 for openmpi-1.6"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19396.php">Siegmar Gross: "[OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
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
