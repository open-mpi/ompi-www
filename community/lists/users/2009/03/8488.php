<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 20:57:43 2009" -->
<!-- isoreceived="20090318005743" -->
<!-- sent="Tue, 17 Mar 2009 20:57:38 -0400" -->
<!-- isosent="20090318005738" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="63CB4F7F-BCCB-477C-9157-418069572712_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A3C2214A-C0E7-4A19-A664-37CEF9838C44_at_cisco.com" -->
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
<strong>Date:</strong> 2009-03-17 20:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8489.php">Ron Babich: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Previous message:</strong> <a href="8487.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>In reply to:</strong> <a href="8473.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We tracked this down further -- it appears that the culprit was an out- 
<br>
of-date Autoconf installation.
<br>
<p>Specifically, somewhere between Autoconf 2.61 and 2.63, they changed  
<br>
the order of looking for the various &quot;restrict&quot; keywords.  AC 2.63  
<br>
looks at &quot;__restrict&quot; *first* (i.e., before &quot;restrict&quot;); AC 2.61 is  
<br>
the opposite order.
<br>
<p>Hence, AC 2.63 worked for me, but AC 2.61 barfed for Mostyn.
<br>
<p><p>On Mar 16, 2009, at 4:44 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; George and I talked more off-list / phone and he convinced me that
</span><br>
<span class="quotelev1">&gt; it's ok to do this in a top-level header file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev1">&gt; #undef restrict
</span><br>
<span class="quotelev1">&gt; #define restrict
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll post to the Autoconf list about this soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2009, at 4:43 AM, Samuel Sarholz wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am pretty sure that C++ has no restrict keyword (only C99), so  
</span><br>
<span class="quotelev1">&gt; IMHO
</span><br>
<span class="quotelev2">&gt; &gt; it's not the compilers fault is not compiling.
</span><br>
<span class="quotelev2">&gt; &gt; You probably want to turn restricts off for C++ by default, unless  
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev2">&gt; &gt; know the compiler supports it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Samuel
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8489.php">Ron Babich: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Previous message:</strong> <a href="8487.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>In reply to:</strong> <a href="8473.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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
