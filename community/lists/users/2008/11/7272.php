<?
$subject_val = "Re: [OMPI users] Open MPI programs with autoconf/automake?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 23:23:02 2008" -->
<!-- isoreceived="20081111042302" -->
<!-- sent="Tue, 11 Nov 2008 13:22:56 +0900" -->
<!-- isosent="20081111042256" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI programs with autoconf/automake?" -->
<!-- id="491908A0.4020309_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="425083A6-66E4-4A45-B1C2-93BAD9080638_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI programs with autoconf/automake?<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 23:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7273.php">Keller, Jesse: "[OMPI users] mpirun Only Works When Second Ethernet Interface Disabled"</a>
<li><strong>Previous message:</strong> <a href="7271.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>In reply to:</strong> <a href="7255.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7271.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 10, 2008, at 6:41 AM, Jed Brown wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With #define's and compiler flags, I think that can be  easily done --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was wondering if this is something that developers using MPI do and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whether AC/AM  supports it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AC will allow you to #define whatever you want -- look at the 
</span><br>
<span class="quotelev1">&gt; documentation for AC_DEFINE and AC_DEFINE_UNQUOTED.  You can also tell 
</span><br>
<span class="quotelev1">&gt; your configure script to accept various --with-&lt;foo&gt; and 
</span><br>
<span class="quotelev1">&gt; --enable-&lt;foo&gt; arguments; see the docs for AC_ARG_WITH and AC_ARG_ENABLE.
</span><br>
<p><p>Thanks for this!  I know &quot;it's in the document&quot;, but I've been going 
<br>
through it with much difficulty.  Definitely complete, but hard to get 
<br>
into and know what it is I need.  So, some keywords to search for will 
<br>
definitely help!
<br>
<p><p><span class="quotelev1">&gt; If --with-mpi is not specified, the following will happen:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. You don't set CC (and friends), so AC_PROG_CC will find the default 
</span><br>
<span class="quotelev1">&gt; compilers.  Hence, your app will not be compiled and linked against 
</span><br>
<span class="quotelev1">&gt; the MPI libraries.
</span><br>
<span class="quotelev1">&gt; 2. #define BUILDING_WITH_MPI to 0, so the code above will compile out 
</span><br>
<span class="quotelev1">&gt; the call to MPI_Send().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both of these are valid techniques -- use whichever suits your app the 
</span><br>
<span class="quotelev1">&gt; best.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I see; thank you for giving me this second option.  I guess I'm more 
<br>
attracted to this since it allows me to continue working with Open MPI.  
<br>
As I am writing the system [now], I'll have to keep in mind to make it 
<br>
modular so that parts can be #define'd in and out easily.
<br>
<p>Thank you for your careful explanation! 
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7273.php">Keller, Jesse: "[OMPI users] mpirun Only Works When Second Ethernet Interface Disabled"</a>
<li><strong>Previous message:</strong> <a href="7271.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>In reply to:</strong> <a href="7255.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7271.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
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
