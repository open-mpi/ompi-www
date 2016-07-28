<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 08:41:06 2008" -->
<!-- isoreceived="20081030124106" -->
<!-- sent="Thu, 30 Oct 2008 08:40:55 -0400" -->
<!-- isosent="20081030124055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="5D01A33D-8D7D-4F3D-8344-6B96F3AE4917_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f79359b60810291331m7739b300sbd3455c2ce999c61_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problems installing in Cygwin<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 08:40:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7132.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7130.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7130.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7132.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7132.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7133.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 29, 2008, at 4:31 PM, Gustavo Seabra wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Ugh.  IMHO, Cygwin != POSIX.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that we're making the assumption that if dlsym() is  
</span><br>
<span class="quotelev2">&gt;&gt; present,
</span><br>
<span class="quotelev2">&gt;&gt; RTLD_NEXT is defined.  I guess that's not true for cygwin (lame).   
</span><br>
<span class="quotelev2">&gt;&gt; I suppose
</span><br>
<span class="quotelev2">&gt;&gt; that we could also check for RTLD_NEXT...?  Is there any other OS  
</span><br>
<span class="quotelev2">&gt;&gt; where
</span><br>
<span class="quotelev2">&gt;&gt; dlsym() is present by RTLD_NEXT is not?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would it be easier to run Linux in a virtual machine on your  
</span><br>
<span class="quotelev2">&gt;&gt; windows host?
</span><br>
<span class="quotelev2">&gt;&gt; You'll probably get a lot better performance...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you sure RTLD_NEXT is part of the POSIX standard? I may be looking
</span><br>
<span class="quotelev1">&gt; in the wrong place, but apparently it is *not* part of the standard,
</span><br>
<span class="quotelev1">&gt; at least as defined here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.opengroup.org/onlinepubs/000095399/basedefs/dlfcn.h.html">http://www.opengroup.org/onlinepubs/000095399/basedefs/dlfcn.h.html</a>
</span><br>
<p>Fair enough -- my words were ambiguous, and probably overly broad.  I  
<br>
was trying to convey that my prior experience with Cygwin has biased  
<br>
me to believe that Cygwin tends to be &quot;different&quot; than other POSIX- 
<br>
like OSs, such as Linux, Solaris, and OS X.
<br>
<p><span class="quotelev1">&gt; It would seem that this is a GNU extension, so it becomes available
</span><br>
<span class="quotelev1">&gt; when __USE_GNU is defined. Now, looking at the cygwin version of
</span><br>
<span class="quotelev1">&gt; dlfcn.h, I see that RTDL_NEXT is *not* defined, but RTDL_LAZY,
</span><br>
<span class="quotelev1">&gt; RTLD_NOW, RTLD_LOCAL and RTLD_GLOBAL, which makes it compliant with
</span><br>
<span class="quotelev1">&gt; POSIX, but not GNU.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 'memory_mallopt_component.c' only checks if 'HAVE_DLSYM' is
</span><br>
<span class="quotelev1">&gt; defined. If so, it defines __USE_GNU then includes dlfcn.h. This is
</span><br>
<span class="quotelev1">&gt; ok, assuming you have a GNU version of dlfcn.h, but apparently this is
</span><br>
<span class="quotelev1">&gt; not present in Cygwin...
</span><br>
<p>Understood; this was a more complete/precise meaning for my question  
<br>
&quot;Is there any other OS where
<br>
dlsym() is present by RTLD_NEXT is not?&quot;  I suppose we can extend the  
<br>
configure test to check for RTLD_NEXT as well.  In this way, that  
<br>
component won't even decide to build itself.  You won't need this  
<br>
component, because it's only really useful for the OpenFabrics and  
<br>
[ancient] Myricom GM drivers in Open MPI, neither of which are likely  
<br>
to be supported in Cygwin.
<br>
<p>Also FWIW, my understanding is that running another OS in a VM (such  
<br>
as Linux or your favorite BSD) will run *much* faster than Cygwin.  I  
<br>
have dim recollections of LAM's and OMPI's &quot;configure&quot; script taking  
<br>
loooooong periods of time (I no longer have easy access to a Windows  
<br>
machine to do such testing).  Those with more Windows experience than  
<br>
me attributed it to Windows' process model implementation, which is  
<br>
quite different than Linux/Solaris/OSX/etc.  So I'm just curious: do  
<br>
you have a reason for preferring Cygwin instead of a VM?
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
<li><strong>Next message:</strong> <a href="7132.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7130.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7130.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7132.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7132.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7133.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
