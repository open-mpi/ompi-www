<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  8 17:14:16 2011" -->
<!-- isoreceived="20111208221416" -->
<!-- sent="Thu, 08 Dec 2011 23:14:10 +0100" -->
<!-- isosent="20111208221410" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025" -->
<!-- id="4EE136B2.2090204_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07C86B65-3354-4A22-9650-95812741DDFC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-08 17:14:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2583.php">Jeff Squyres: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="2581.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="2580.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/12/2011 23:02, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There might be a way to test for this in configure.  What if we added a AC_CONFIG_COMMANDS (i.e., commands that run at the end of config.status -- after the libtool shell script is created) that try to use the generated libtool script to compile something with libnuma?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This test can run if libnuma was previously found to be &quot;working&quot; in earlier configure tests.  Meaning: hwloc expects libnuma to compile/link successfully.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This test can compile/link a trivial application that uses a libnuma API call.  If it fails to link, we can reasonably assume that the generated libtool script was trying to link in a way that is not supported by libnuma (e.g., we can even check $enable_static / $enable_shared), and then fail with a decent error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I don't have time ATM to code this up, but it sounds possible...)
</span><br>
<p>Could be a good idea indeed, but I don't know how to code this up :)
<br>
At some point, I'd like to know if some distros are really planning to
<br>
remove all static libs. I think I remember reading this at some point.
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2583.php">Jeff Squyres: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="2581.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="2580.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025"</a>
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
