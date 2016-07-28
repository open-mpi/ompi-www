<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 09:18:42 2008" -->
<!-- isoreceived="20081030131842" -->
<!-- sent="Thu, 30 Oct 2008 09:18:34 -0400" -->
<!-- isosent="20081030131834" -->
<!-- name="Gustavo Seabra" -->
<!-- email="gustavo.seabra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="f79359b60810300618g5d242266u6309905dbeb178d3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5D01A33D-8D7D-4F3D-8344-6B96F3AE4917_at_cisco.com" -->
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
<strong>Date:</strong> 2008-10-30 09:18:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7134.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7132.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7131.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 30, 2008 at 8:40 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 29, 2008, at 4:31 PM, Gustavo Seabra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ugh.  IMHO, Cygwin != POSIX.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that we're making the assumption that if dlsym() is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; present,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RTLD_NEXT is defined.  I guess that's not true for cygwin (lame).  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suppose
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that we could also check for RTLD_NEXT...?  Is there any other OS where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dlsym() is present by RTLD_NEXT is not?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would it be easier to run Linux in a virtual machine on your windows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You'll probably get a lot better performance...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure RTLD_NEXT is part of the POSIX standard? I may be looking
</span><br>
<span class="quotelev2">&gt;&gt; in the wrong place, but apparently it is *not* part of the standard,
</span><br>
<span class="quotelev2">&gt;&gt; at least as defined here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.opengroup.org/onlinepubs/000095399/basedefs/dlfcn.h.html">http://www.opengroup.org/onlinepubs/000095399/basedefs/dlfcn.h.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fair enough -- my words were ambiguous, and probably overly broad.  I was
</span><br>
<span class="quotelev1">&gt; trying to convey that my prior experience with Cygwin has biased me to
</span><br>
<span class="quotelev1">&gt; believe that Cygwin tends to be &quot;different&quot; than other POSIX-like OSs, such
</span><br>
<span class="quotelev1">&gt; as Linux, Solaris, and OS X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would seem that this is a GNU extension, so it becomes available
</span><br>
<span class="quotelev2">&gt;&gt; when __USE_GNU is defined. Now, looking at the cygwin version of
</span><br>
<span class="quotelev2">&gt;&gt; dlfcn.h, I see that RTDL_NEXT is *not* defined, but RTDL_LAZY,
</span><br>
<span class="quotelev2">&gt;&gt; RTLD_NOW, RTLD_LOCAL and RTLD_GLOBAL, which makes it compliant with
</span><br>
<span class="quotelev2">&gt;&gt; POSIX, but not GNU.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The 'memory_mallopt_component.c' only checks if 'HAVE_DLSYM' is
</span><br>
<span class="quotelev2">&gt;&gt; defined. If so, it defines __USE_GNU then includes dlfcn.h. This is
</span><br>
<span class="quotelev2">&gt;&gt; ok, assuming you have a GNU version of dlfcn.h, but apparently this is
</span><br>
<span class="quotelev2">&gt;&gt; not present in Cygwin...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Understood; this was a more complete/precise meaning for my question &quot;Is
</span><br>
<span class="quotelev1">&gt; there any other OS where
</span><br>
<span class="quotelev1">&gt; dlsym() is present by RTLD_NEXT is not?&quot;  I suppose we can extend the
</span><br>
<span class="quotelev1">&gt; configure test to check for RTLD_NEXT as well.  In this way, that component
</span><br>
<span class="quotelev1">&gt; won't even decide to build itself.  You won't need this component, because
</span><br>
<span class="quotelev1">&gt; it's only really useful for the OpenFabrics and [ancient] Myricom GM drivers
</span><br>
<span class="quotelev1">&gt; in Open MPI, neither of which are likely to be supported in Cygwin.
</span><br>
<p><p>That should be good enough, at least for that part. Or testing first
<br>
for the presence of OpenFabrics or Myricom? Maybe it could just test
<br>
for the existence of GNU extensions? I don't know. I understand it
<br>
must be really hard to keep track of what is standard and what is not
<br>
these days. I'm just thankful that you guys are looking into it.
<br>
Thanks!
<br>
<p><span class="quotelev1">&gt; Also FWIW, my understanding is that running another OS in a VM (such as
</span><br>
<span class="quotelev1">&gt; Linux or your favorite BSD) will run *much* faster than Cygwin.  I have dim
</span><br>
<span class="quotelev1">&gt; recollections of LAM's and OMPI's &quot;configure&quot; script taking loooooong
</span><br>
<span class="quotelev1">&gt; periods of time (I no longer have easy access to a Windows machine to do
</span><br>
<span class="quotelev1">&gt; such testing).  Those with more Windows experience than me attributed it to
</span><br>
<span class="quotelev1">&gt; Windows' process model implementation, which is quite different than
</span><br>
<span class="quotelev1">&gt; Linux/Solaris/OSX/etc.  So I'm just curious: do you have a reason for
</span><br>
<span class="quotelev1">&gt; preferring Cygwin instead of a VM?
</span><br>
<p>Well... I don't. It's just that, due to specifics of my work, I need
<br>
to work on a Windows computer, but I also like to use many unix
<br>
features / commands. So, I just use Cygwin out of convenience, which
<br>
in a way gives me the best of both worlds without the need to dual
<br>
boot.
<br>
<p>However, the other reason I use Cygwin is because I work in the
<br>
development of a program and it is very convenient to do that in
<br>
Cygwin, especially when I'm traveling and only have access to my
<br>
laptop. Many users have this program running in Cygwin, so it's also
<br>
good to have a place to test it. I don't really use Cygwin for the
<br>
long &quot;production&quot; runs that would actually require a MPI, for that I
<br>
have access to local clusters or Teragrid. My problem is testing the
<br>
parallel version in Cygwin (or if any changes made break the parallel
<br>
implementation) because I still did not manage to install a MPI in
<br>
Cygwin.
<br>
<p>In fact, I have never tried a VM :-$ I guess I should give it a try
<br>
sometime. Do you have any recommendations? My only requirements are
<br>
that (i) it works, (ii) it's free.
<br>
<p>Thanks a lot!!
<br>
<pre>
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
<li><strong>Next message:</strong> <a href="7134.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7132.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7131.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
