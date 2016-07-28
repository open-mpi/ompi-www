<?
$subject_val = "Re: [OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 18 08:00:56 2008" -->
<!-- isoreceived="20081018120056" -->
<!-- sent="Sat, 18 Oct 2008 08:00:50 -0400" -->
<!-- isosent="20081018120050" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c" -->
<!-- id="595C7DCD-C75D-4683-AFA5-BE12CEBD5BD6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="549268DF-4F9B-4D18-BBE8-64F6D025E269_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-18 08:00:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7028.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="7026.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>In reply to:</strong> <a href="7008.php">Teng Lin: "[OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 17, 2008, at 6:00 AM, Teng Lin wrote:
<br>
<p><span class="quotelev1">&gt; It seems to work after I patched pls_rsh_module.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- pls_rsh_module.c.orig	2008-10-16 17:15:32.000000000 -0400
</span><br>
<span class="quotelev1">&gt; +++ pls_rsh_module.c	2008-10-16 17:15:51.000000000 -0400
</span><br>
<span class="quotelev1">&gt; @@ -989,7 +989,7 @@
</span><br>
<span class="quotelev1">&gt;                                  &quot;%s/%s/%s&quot;,
</span><br>
<span class="quotelev1">&gt;                                  (opal_prefix != NULL ?  
</span><br>
<span class="quotelev1">&gt; &quot;OPAL_PREFIX=&quot; : &quot;&quot;),
</span><br>
<span class="quotelev1">&gt;                                  (opal_prefix != NULL ?  
</span><br>
<span class="quotelev1">&gt; opal_prefix : &quot;&quot;),
</span><br>
<span class="quotelev1">&gt; -                                  (opal_prefix != NULL ? &quot; ;&quot; : &quot;&quot;),
</span><br>
<span class="quotelev1">&gt; +                                  (opal_prefix != NULL ? &quot; ; export  
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX ; &quot; : &quot;&quot;),
</span><br>
<span class="quotelev1">&gt;                                  prefix_dir, bin_base,
</span><br>
<span class="quotelev1">&gt;                                  prefix_dir, lib_base,
</span><br>
<span class="quotelev1">&gt;                                  prefix_dir, bin_base,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another workaround is to add
</span><br>
<span class="quotelev1">&gt; export OPAL_PREFIX
</span><br>
<span class="quotelev1">&gt; into $HOME/.bashrc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, is this a bug in the code? Or  there is a reason that  
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX is not exported for sh/bash?
</span><br>
<p><p>Yes, this is a bug -- I think your patch is correct.
<br>
<p>Sorry about that, but thanks for the patch!
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
<li><strong>Next message:</strong> <a href="7028.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="7026.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>In reply to:</strong> <a href="7008.php">Teng Lin: "[OMPI users] OPAL_PREFIX is not passed to remote node in pls_rsh_module.c"</a>
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
