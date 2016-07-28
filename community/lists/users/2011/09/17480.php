<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 30 09:45:02 2011" -->
<!-- isoreceived="20110930134502" -->
<!-- sent="Fri, 30 Sep 2011 08:04:11 -0400" -->
<!-- isosent="20110930120411" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'" -->
<!-- id="27C96DDE-C573-42F1-94A4-9F21FEDD42BD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E84D3EB.2070702_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-30 08:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17481.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17479.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17472.php">Brice Goglin: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17481.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17481.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the issue here is that it's linking the *MPI application* that is causing the problem.  Is that right?
<br>
<p>If so, can you send your exact application compile line, and the the output of that compile line with &quot;--showme&quot; at the end?
<br>
<p><p>On Sep 29, 2011, at 4:24 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 28/09/2011 23:02, Blosch, Edwin L a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've tried it now adding --without-libnuma.  Actually that did NOT fix the problem, so I can send you the full output from configure if you want, to understand why this &quot;hwloc&quot; function is trying to use a function which appears to be unavailable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This function is likely available... in the dynamic version of libnuma
</span><br>
<span class="quotelev1">&gt; (that's why configure is happy), but make is probably trying to link
</span><br>
<span class="quotelev1">&gt; with the static version which isn't available on your machine. That's my
</span><br>
<span class="quotelev1">&gt; guess, at least.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand about make V=1. What tree? Somewhere in the OpenMPI build, or in the application compilation itself? Is &quot;V=1&quot; something in the OpenMPI makefile structure?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Instead of doing
</span><br>
<span class="quotelev1">&gt;  ./configure ...
</span><br>
<span class="quotelev1">&gt;  make
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;  ./configure &lt;same options&gt;
</span><br>
<span class="quotelev1">&gt;  make V=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It will make the output more verbose. Once you get the failure, please
</span><br>
<span class="quotelev1">&gt; send the last 15 lines or so. We will look at these verbose lines to
</span><br>
<span class="quotelev1">&gt; understand how things are being compiled (which linker flags, which
</span><br>
<span class="quotelev1">&gt; libraries, ...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17481.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17479.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17472.php">Brice Goglin: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17481.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17481.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind'	and	'get_mempolicy'"</a>
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
