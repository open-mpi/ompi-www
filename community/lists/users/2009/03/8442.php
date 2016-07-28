<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 08:22:20 2009" -->
<!-- isoreceived="20090314122220" -->
<!-- sent="Sat, 14 Mar 2009 08:22:14 -0400" -->
<!-- isosent="20090314122214" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="0FCA3A65-D3F9-4183-B3F9-77D053380E11_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49BB978B.3080506_at_sun.com" -->
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
<strong>Date:</strong> 2009-03-14 08:22:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8443.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8441.php">Terry Dontje: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8441.php">Terry Dontje: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8443.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8443.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it does.
<br>
<p>It re-looking at this problem, it seemed to me:
<br>
<p>1. The real fix is to talk to the AC people and get something like  
<br>
AC_CXX_RESTRICT.  The PGI compiler is one place where &quot;restrict&quot;  
<br>
support may be different in the C and C++ compilers.  I'm not sure  
<br>
what the Right answer is there, but I'll ask them about it.
<br>
<p>2. In this specific case, the use of &quot;restrict&quot; *does not matter* in  
<br>
components.cc.  This particular part of the file is not what  
<br>
components.cc needs/uses.  So it's ok to #define it away to nothing.
<br>
<p>3. Since this problem now exists in at least *2* compilers that we  
<br>
know about (Sun, PGI), it seemed that -- at least while waiting for  
<br>
some kind of proper fix from AC -- just #define restrict away for C++  
<br>
for this particular case was ok, rather than try to adapt to every  
<br>
compiler.  Rolf's fix was ok previously because we thought it was  
<br>
specific to one compiler.  But now the door is open to other  
<br>
compilers, so let's use a broad stroke to work around it for all C++  
<br>
compilers.
<br>
<p>That's why I coded it up this way.
<br>
<p><p><p>On Mar 14, 2009, at 7:39 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; You know this all looks very similar to the reason why rolfv putback
</span><br>
<span class="quotelev1">&gt; r20351 which essentially defined out restrict within
</span><br>
<span class="quotelev1">&gt; opal_config_bottom.h when using Sun Studio.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Fri, 13 Mar 2009 16:40:49 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;2ACA69AB-5F23-4AE9-8826-77A6348E934A_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2009, at 4:37 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;From config.log
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure:21522: checking for C/C++ restrict keyword
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure:21558: pgcc -c -DNDEBUG -fast -Msignextend -tp p7-64   &gt;
</span><br>
<span class="quotelev2">&gt; &gt; conftest.c &gt;&amp;5
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure:21564: $? = 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure:21582: result: restrict
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So you only check using pgcc (not pgCC)?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; in the op.h header file when they're included in components.cc (that's
</span><br>
<span class="quotelev1">&gt; a source file in the ompi_info executable; it shouldn't need the
</span><br>
<span class="quotelev1">&gt; specific MPI_Op callback prototypes).  Fortunately, we have very   
</span><br>
<span class="quotelev1">&gt; little
</span><br>
<span class="quotelev1">&gt; C++ code in OMPI, so this isn't a huge issue (C++ is only used  for  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; MPI C++ bindings -- of course -- and in some of the command  line
</span><br>
<span class="quotelev1">&gt; executables).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me see what I can cook up, and then let me see if I can convince
</span><br>
<span class="quotelev1">&gt; George that it's the correct answer.   ;-)
</span><br>
<span class="quotelev1">&gt; -- Jeff Squyres Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8443.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8441.php">Terry Dontje: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8441.php">Terry Dontje: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8443.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8443.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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
