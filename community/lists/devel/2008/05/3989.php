<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 11:04:11 2008" -->
<!-- isoreceived="20080522150411" -->
<!-- sent="Thu, 22 May 2008 11:04:07 -0400 (EDT)" -->
<!-- isosent="20080522150407" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="Pine.LNX.4.64.0805221048470.3104_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4835630A.2050902_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 11:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3990.php">Rolf vandeVaart: "[OMPI devel] Question about priority"</a>
<li><strong>Previous message:</strong> <a href="3988.php">Jon Mason: "[OMPI devel] Documentation update"</a>
<li><strong>In reply to:</strong> <a href="3985.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3995.php">Patrick Geoffray: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3995.php">Patrick Geoffray: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 22 May 2008, Terry Dontje wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The major difference here is that libmyriexpress is not being included
</span><br>
<span class="quotelev2">&gt;&gt; in mainline Linux distributions.  Specifically: if you can find/use
</span><br>
<span class="quotelev2">&gt;&gt; libmyriexpress, it's likely because you have that hardware.  The same
</span><br>
<span class="quotelev2">&gt;&gt; *used* to be true for libibverbs, but is no longer true because Linux
</span><br>
<span class="quotelev2">&gt;&gt; distros are now shipping (e.g., the Debian distribution pulls in
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs when you install Open MPI).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Ok, but there are distributions that do include the myrinet BTL/MTL (ie 
</span><br>
<span class="quotelev1">&gt; CT).  Though I agree for the most part in the case of myrinet if you 
</span><br>
<span class="quotelev1">&gt; have libmyriexpress you probably will probably have an operable 
</span><br>
<span class="quotelev1">&gt; interface.  I guess I am curious how many other BTLs a distribution 
</span><br>
<span class="quotelev1">&gt; might end up delivering that could run into this reporting issue.  I 
</span><br>
<span class="quotelev1">&gt; guess my point is could this be worth something more general instead of 
</span><br>
<span class="quotelev1">&gt; a one off for IB?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From my point of view the btl_warn_unused_components coupled with &quot;-mca 
</span><br>
<span class="quotelev1">&gt; btl ^mlfbtl&quot; works for me.  However the fact that the IB 
</span><br>
<span class="quotelev1">&gt; vendors/community (ie CISCO) is solving this for their favorite 
</span><br>
<span class="quotelev1">&gt; interface makes me pause for a moment.
</span><br>
<p>There's actually a second (in my mind more important) reason why this is 
<br>
IB only, as I shared similar concerns (hence yesterday's e-mail barage). 
<br>
InfiniBand has a two stage initialization -- you get the list of HCAs, 
<br>
then you initialize the HCA you want.  So it's possible to determine that 
<br>
there's no HCAs in the system vs. the system couldn't initialize the HCA 
<br>
properly (as that would happen in step 2, according to Jeff).
<br>
<p>With MX, it's one initialization call (mx_init), and it's not clear from 
<br>
the errors it can return that you can differentiate between the two cases. 
<br>
I haven't tried it, but it's possible that mx_init would succeed in the no 
<br>
nic case, but then have a NIC count of 0.
<br>
<p>Anyway, the short answer is that (in my opinion) we should have a btl base 
<br>
param similar to warn_unused for whether to warn when no NICs/HCAs are 
<br>
found, hopefully with a nice error function similar to today's no_nics 
<br>
(which probably needs to be renamed in that case).  That way, if BTL 
<br>
authors other than OpenIB want to do some extra work and return better 
<br>
error messages, they can.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; FWIW, our distribution actually turns off
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_base_want_component_unused
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because it seemed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the majority of our cases would be that users would false positive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sights of the message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is the UDAPL library shipped in Solaris by default?  If so, then
</span><br>
<span class="quotelev2">&gt;&gt; you're likely in exactly the same kind of situation that I'm
</span><br>
<span class="quotelev2">&gt;&gt; describing.  The same will be true if Solaris ends up shipping
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs by default.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes the UDAPL library is shipped in Solaris by default.  Which is why we
</span><br>
<span class="quotelev1">&gt; turn off
</span><br>
<span class="quotelev1">&gt; btl_warn_unused_components.  Yes, and I suspect once Solaris starts
</span><br>
<span class="quotelev1">&gt; delivering libibverbs
</span><br>
<span class="quotelev1">&gt; we (Sun) will need to figure out how to handle having both the udapl and
</span><br>
<span class="quotelev1">&gt; openib btls being
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<p>There is some evil configure hackery that could be done to make this work 
<br>
in a more general way (don't you love it when I say that). 
<br>
Autogen/configure makes no guarantees about the order in which the 
<br>
configure.m4 macros for components in the same framework are run, other 
<br>
than all components of priority X are run before those of priority Y, iff 
<br>
X &gt; Y.  So you could set the priority of all the components except udapl 
<br>
to (say) 10 and udapl's to 0.  Then have the udapl configure only build if 
<br>
1) it was specifically requested or 2) ompi_check_openib_happy = no.  No 
<br>
more Linux-specific stuff, works when Solaris gets OFED, and works on old 
<br>
Solaris that has uDAPL but not OFED.
<br>
<p>As a matter of fact, it's so trivial to do that I'd recommend doing it for 
<br>
1.3.  Really, you could do it minimally by only changing OpenIB's 
<br>
configure.params to set its priority to 10, uDAPL's configure.params to 
<br>
set its priority to 0, and uDAPL's configure.m4 to remove the Linux stuff 
<br>
and look for ompi_check_openib_happy.
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3990.php">Rolf vandeVaart: "[OMPI devel] Question about priority"</a>
<li><strong>Previous message:</strong> <a href="3988.php">Jon Mason: "[OMPI devel] Documentation update"</a>
<li><strong>In reply to:</strong> <a href="3985.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3995.php">Patrick Geoffray: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3995.php">Patrick Geoffray: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
