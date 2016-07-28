<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 29 16:24:18 2011" -->
<!-- isoreceived="20110929202418" -->
<!-- sent="Thu, 29 Sep 2011 22:24:11 +0200" -->
<!-- isosent="20110929202411" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'" -->
<!-- id="4E84D3EB.2070702_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275FE967CE_at_HDXMSPB.us.lmco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-29 16:24:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17473.php">Xin Tong: "[OMPI users] MPIRUN + Environtment Variable"</a>
<li><strong>Previous message:</strong> <a href="17471.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17468.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17480.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17480.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/09/2011 23:02, Blosch, Edwin L a &#233;crit :
<br>
<span class="quotelev1">&gt; Jeff,  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried it now adding --without-libnuma.  Actually that did NOT fix the problem, so I can send you the full output from configure if you want, to understand why this &quot;hwloc&quot; function is trying to use a function which appears to be unavailable.
</span><br>
<p>This function is likely available... in the dynamic version of libnuma
<br>
(that's why configure is happy), but make is probably trying to link
<br>
with the static version which isn't available on your machine. That's my
<br>
guess, at least.
<br>
<p><span class="quotelev1">&gt; I don't understand about make V=1. What tree? Somewhere in the OpenMPI build, or in the application compilation itself? Is &quot;V=1&quot; something in the OpenMPI makefile structure?
</span><br>
<p>Instead of doing
<br>
&nbsp;&nbsp;./configure ...
<br>
&nbsp;&nbsp;make
<br>
do
<br>
&nbsp;&nbsp;./configure &lt;same options&gt;
<br>
&nbsp;&nbsp;make V=1
<br>
<p>It will make the output more verbose. Once you get the failure, please
<br>
send the last 15 lines or so. We will look at these verbose lines to
<br>
understand how things are being compiled (which linker flags, which
<br>
libraries, ...)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17473.php">Xin Tong: "[OMPI users] MPIRUN + Environtment Variable"</a>
<li><strong>Previous message:</strong> <a href="17471.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17468.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17480.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17480.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
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
