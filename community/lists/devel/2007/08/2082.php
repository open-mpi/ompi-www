<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 10:08:22 2007" -->
<!-- isoreceived="20070806140822" -->
<!-- sent="Mon, 06 Aug 2007 10:08:13 -0400" -->
<!-- isosent="20070806140813" -->
<!-- name="Bill Wichser" -->
<!-- email="bill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem with system() call and openib - blocks	send/recv" -->
<!-- id="46B72B4D.6030601_at_princeton.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E50B8C-998C-4A91-9CBD-70147AEF3A12_at_cisco.com" -->
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
<strong>From:</strong> Bill Wichser (<em>bill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 10:08:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2083.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Previous message:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<li><strong>In reply to:</strong> <a href="2080.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2094.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
<li><strong>Reply:</strong> <a href="2094.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff!  I looked and didn't find anything but sure enough, there 
<br>
it is!
<br>
<p>Now I have another issue, which we fixed, with ROMIO/PVFS2/and openmpi 
<br>
1.2.3.  It seems that ROMIO support is way behind in openmpi and what we 
<br>
did was basically copy the stuff from mpich2, apply the pvfs2 romio 
<br>
patch and our problems went away.
<br>
<p>Should I post this to the developer's list, or is this too something 
<br>
which you folks are aware of and will address before the next release?
<br>
<p>Bill
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Bill --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check out <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-fork">http://www.open-mpi.org/faq/?category=openfabrics#ofa-fork</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To my knowledge, RHEL4 has not yet received a hotfix that will allow  
</span><br>
<span class="quotelev1">&gt; fork() with OpenFabrics verbs applications when memory is still  
</span><br>
<span class="quotelev1">&gt; registered in the parent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2083.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Previous message:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<li><strong>In reply to:</strong> <a href="2080.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2094.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
<li><strong>Reply:</strong> <a href="2094.php">Jeff Squyres: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
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
