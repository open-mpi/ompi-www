<?
$subject_val = "[OMPI devel] MPIR_Breakpoint visibility";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 09:04:24 2009" -->
<!-- isoreceived="20090921130424" -->
<!-- sent="Mon, 21 Sep 2009 09:03:24 -0400" -->
<!-- isosent="20090921130324" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] MPIR_Breakpoint visibility" -->
<!-- id="4AB7799C.1050905_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] MPIR_Breakpoint visibility<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 09:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6856.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Previous message:</strong> <a href="6854.php">Jeff Squyres: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6857.php">Ralph Castain: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Reply:</strong> <a href="6857.php">Ralph Castain: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was kind of amazed no one else managed to run into this but it was 
<br>
brought to my attention that compiling OMPI with Intel compilers and 
<br>
visibility on that the MPIR_Breakpoint symbol was not being exposed.  I 
<br>
am assuming this is due to MPIR_Breakpoint not being ORTE or OMPI_DECLSPEC'd
<br>
Do others agree or am I missing something obvious here?
<br>
<p>Interestingly enough, it doesn't look like gcc, pgi, pathscale or sun 
<br>
compilers are hiding the MPIR_Breakpoint symbol. 
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6856.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Previous message:</strong> <a href="6854.php">Jeff Squyres: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6857.php">Ralph Castain: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Reply:</strong> <a href="6857.php">Ralph Castain: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
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
