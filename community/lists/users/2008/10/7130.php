<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 16:32:04 2008" -->
<!-- isoreceived="20081029203204" -->
<!-- sent="Wed, 29 Oct 2008 16:31:59 -0400" -->
<!-- isosent="20081029203159" -->
<!-- name="Gustavo Seabra" -->
<!-- email="gustavo.seabra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="f79359b60810291331m7739b300sbd3455c2ce999c61_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2C8C6407-711D-4758-B29E-0DBF4DCAE1CB_at_cisco.com" -->
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
<strong>From:</strong> Gustavo Seabra (<em>gustavo.seabra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-29 16:31:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7131.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7129.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7129.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7131.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7131.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 29, 2008 at 1:49 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ugh.  IMHO, Cygwin != POSIX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that we're making the assumption that if dlsym() is present,
</span><br>
<span class="quotelev1">&gt; RTLD_NEXT is defined.  I guess that's not true for cygwin (lame).  I suppose
</span><br>
<span class="quotelev1">&gt; that we could also check for RTLD_NEXT...?  Is there any other OS where
</span><br>
<span class="quotelev1">&gt; dlsym() is present by RTLD_NEXT is not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would it be easier to run Linux in a virtual machine on your windows host?
</span><br>
<span class="quotelev1">&gt;  You'll probably get a lot better performance...?
</span><br>
<p>Hi Jeff,
<br>
<p>Are you sure RTLD_NEXT is part of the POSIX standard? I may be looking
<br>
in the wrong place, but apparently it is *not* part of the standard,
<br>
at least as defined here:
<br>
<p><a href="http://www.opengroup.org/onlinepubs/000095399/basedefs/dlfcn.h.html">http://www.opengroup.org/onlinepubs/000095399/basedefs/dlfcn.h.html</a>
<br>
<p>It would seem that this is a GNU extension, so it becomes available
<br>
when __USE_GNU is defined. Now, looking at the cygwin version of
<br>
dlfcn.h, I see that RTDL_NEXT is *not* defined, but RTDL_LAZY,
<br>
RTLD_NOW, RTLD_LOCAL and RTLD_GLOBAL, which makes it compliant with
<br>
POSIX, but not GNU.
<br>
<p>The 'memory_mallopt_component.c' only checks if 'HAVE_DLSYM' is
<br>
defined. If so, it defines __USE_GNU then includes dlfcn.h. This is
<br>
ok, assuming you have a GNU version of dlfcn.h, but apparently this is
<br>
not present in Cygwin...
<br>
<p>So far, apparently, CYGWIN == POSIX (still), but CYGWIN != GNU.
<br>
<p><pre>
-- 
Gustavo Seabra
Postdoctoral Associate
Quantum Theory Project - University of Florida
Gainesville - Florida - USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7131.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7129.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7129.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7131.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7131.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
