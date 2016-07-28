<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 07:40:01 2009" -->
<!-- isoreceived="20090314114001" -->
<!-- sent="Sat, 14 Mar 2009 07:39:55 -0400" -->
<!-- isosent="20090314113955" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="49BB978B.3080506_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.1902.1236977599.6040.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 07:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8442.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8440.php">Raymond Wan: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>Maybe in reply to:</strong> <a href="8402.php">Mostyn Lewis: "[OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8442.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8442.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You know this all looks very similar to the reason why rolfv putback 
<br>
r20351 which essentially defined out restrict within 
<br>
opal_config_bottom.h when using Sun Studio.
<br>
<p>--td
<br>
<p>Date: Fri, 13 Mar 2009 16:40:49 -0400
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;2ACA69AB-5F23-4AE9-8826-77A6348E934A_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
<br>
<p>On Mar 13, 2009, at 4:37 PM, Mostyn Lewis wrote:
<br>
<p>&nbsp;
<br>
<span class="quotelev3">&gt; &gt; &gt;From config.log
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure:21522: checking for C/C++ restrict keyword
</span><br>
<span class="quotelev2">&gt; &gt; configure:21558: pgcc -c -DNDEBUG -fast -Msignextend -tp p7-64   &gt; 
</span><br>
<span class="quotelev1">&gt; conftest.c &gt;&amp;5
</span><br>
<span class="quotelev2">&gt; &gt; configure:21564: $? = 0
</span><br>
<span class="quotelev2">&gt; &gt; configure:21582: result: restrict
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So you only check using pgcc (not pgCC)?
</span><br>
<span class="quotelev2">&gt; &gt;
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
specific MPI_Op callback prototypes).  Fortunately, we have very  little 
<br>
C++ code in OMPI, so this isn't a huge issue (C++ is only used  for the 
<br>
MPI C++ bindings -- of course -- and in some of the command  line 
<br>
executables).
<br>
<p>Let me see what I can cook up, and then let me see if I can convince  
<br>
George that it's the correct answer.   ;-)
<br>
-- Jeff Squyres Cisco Systems
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8442.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8440.php">Raymond Wan: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>Maybe in reply to:</strong> <a href="8402.php">Mostyn Lewis: "[OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8442.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8442.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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
