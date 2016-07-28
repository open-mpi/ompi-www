<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 16:41:02 2009" -->
<!-- isoreceived="20090313204102" -->
<!-- sent="Fri, 13 Mar 2009 16:40:49 -0400" -->
<!-- isosent="20090313204049" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="2ACA69AB-5F23-4AE9-8826-77A6348E934A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0903131336190.11614_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 16:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8434.php">ben rodriguez: "[OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>Previous message:</strong> <a href="8432.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8432.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8437.php">Rolf Vandevaart: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8437.php">Rolf Vandevaart: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 13, 2009, at 4:37 PM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev2">&gt; &gt;From config.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:21522: checking for C/C++ restrict keyword
</span><br>
<span class="quotelev1">&gt; configure:21558: pgcc -c -DNDEBUG -fast -Msignextend -tp p7-64   
</span><br>
<span class="quotelev1">&gt; conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:21564: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:21582: result: restrict
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you only check using pgcc (not pgCC)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The AC_C_RESTRICT test only checks the C compiler, yet.  It's an  
<br>
Autoconf-builtin test; we didn't write it.
<br>
<p>Odd that you get &quot;restrict&quot; and I get &quot;__restrict&quot;.  Hrm.
<br>
<p>Well, I suppose that one solution might be to disable those prototypes  
<br>
in the op.h header file when they're included in components.cc (that's  
<br>
a source file in the ompi_info executable; it shouldn't need the  
<br>
specific MPI_Op callback prototypes).  Fortunately, we have very  
<br>
little C++ code in OMPI, so this isn't a huge issue (C++ is only used  
<br>
for the MPI C++ bindings -- of course -- and in some of the command  
<br>
line executables).
<br>
<p>Let me see what I can cook up, and then let me see if I can convince  
<br>
George that it's the correct answer.  ;-)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8434.php">ben rodriguez: "[OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>Previous message:</strong> <a href="8432.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8432.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8437.php">Rolf Vandevaart: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8437.php">Rolf Vandevaart: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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
