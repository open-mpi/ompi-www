<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 17:27:36 2009" -->
<!-- isoreceived="20090313212736" -->
<!-- sent="Fri, 13 Mar 2009 17:27:29 -0400" -->
<!-- isosent="20090313212729" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="49BACFC1.6030004_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2ACA69AB-5F23-4AE9-8826-77A6348E934A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 17:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8438.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Previous message:</strong> <a href="8436.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>In reply to:</strong> <a href="8433.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8414.php">Mark Potts: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/13/09 16:40, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 13, 2009, at 4:37 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;From config.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:21522: checking for C/C++ restrict keyword
</span><br>
<span class="quotelev2">&gt;&gt; configure:21558: pgcc -c -DNDEBUG -fast -Msignextend -tp p7-64  
</span><br>
<span class="quotelev2">&gt;&gt; conftest.c &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; configure:21564: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:21582: result: restrict
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So you only check using pgcc (not pgCC)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The AC_C_RESTRICT test only checks the C compiler, yet.  It's an 
</span><br>
<span class="quotelev1">&gt; Autoconf-builtin test; we didn't write it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Odd that you get &quot;restrict&quot; and I get &quot;__restrict&quot;.  Hrm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I suppose that one solution might be to disable those prototypes 
</span><br>
<span class="quotelev1">&gt; in the op.h header file when they're included in components.cc (that's a 
</span><br>
<span class="quotelev1">&gt; source file in the ompi_info executable; it shouldn't need the specific 
</span><br>
<span class="quotelev1">&gt; MPI_Op callback prototypes).  Fortunately, we have very little C++ code 
</span><br>
<span class="quotelev1">&gt; in OMPI, so this isn't a huge issue (C++ is only used for the MPI C++ 
</span><br>
<span class="quotelev1">&gt; bindings -- of course -- and in some of the command line executables).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me see what I can cook up, and then let me see if I can convince 
</span><br>
<span class="quotelev1">&gt; George that it's the correct answer.  ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Please ignore if I am way off base here but....
<br>
<p>Isn't this problem similar to what happens with Sun Studio?  For Sun 
<br>
Studio, the C compiler recently added support for some of the restrict 
<br>
variants.  However, the Sun Studio C++ compiler does not support them. 
<br>
This is handled by autoconf via a workaround targetted specifically at 
<br>
Sun Studio.  Essentially, if you are Sun Studio C++, then #undef any 
<br>
restricts.  This is from lib/autoconf/c.m4
<br>
<p>#undef restrict
<br>
/* Work around a bug in Sun C++: it does not support _Restrict or
<br>
&nbsp;&nbsp;__restrict__, even though the corresponding Sun C compiler ends up with
<br>
&nbsp;&nbsp;&quot;#define restrict _Restrict&quot; or &quot;#define restrict __restrict__&quot; in the
<br>
&nbsp;&nbsp;previous line.  Perhaps some future version of Sun C++ will work with
<br>
&nbsp;&nbsp;restrict; if so, hopefully it defines __RESTRICT like Sun C does.  */
<br>
#if defined __SUNPRO_CC &amp;&amp; !defined __RESTRICT
<br>
# define _Restrict
<br>
# define __restrict__
<br>
#endif])
<br>
<p><p>We also had to make a change to opal_config_bottom.h so we could work 
<br>
with older versions of autoconf that did not have the restrict workaround.
<br>
<p>&nbsp;From opal_config_bottom.h:
<br>
/*
<br>
&nbsp;&nbsp;* The following is a workaround for a workaround in autoconf for the
<br>
&nbsp;&nbsp;* Sun Studio C++ compiler.  The Sun Studio C++ compiler does not
<br>
&nbsp;&nbsp;* support restrict whereas the Sun Studio C compiler does.  Initially,
<br>
&nbsp;&nbsp;* Sun Studio C only supported _Restrict, but later version started
<br>
&nbsp;&nbsp;* supporting __restrict__ also.  Currently, autoconf handles turning
<br>
&nbsp;&nbsp;* off _Restrict but not __restrict__ for the Sun Studio C++ compiler.
<br>
&nbsp;&nbsp;* Therefore, we are handling it here.  When autoconf gets fixed, this
<br>
&nbsp;&nbsp;* code can be removed.
<br>
&nbsp;&nbsp;*/
<br>
#if defined __SUNPRO_CC &amp;&amp; !defined __RESTRICT
<br>
# define __restrict__
<br>
#endif
<br>
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8438.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Previous message:</strong> <a href="8436.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>In reply to:</strong> <a href="8433.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8414.php">Mark Potts: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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
