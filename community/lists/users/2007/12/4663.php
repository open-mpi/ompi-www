<?
$subject_val = "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 08:52:35 2007" -->
<!-- isoreceived="20071213135235" -->
<!-- sent="Thu, 13 Dec 2007 08:52:29 -0500" -->
<!-- isosent="20071213135229" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="5312AE81-A825-42D5-BED9-EDCDEC61A529_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40712121647o3a997ff8t6ad698757546a19c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-13 08:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4664.php">Jeff Squyres: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4662.php">Jeff Squyres: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>In reply to:</strong> <a href="4659.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4666.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4666.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4669.php">Brian W. Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2007, at 7:47 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; You should, yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, but now I realize that I cannot simply call libtool dlopen()
</span><br>
<span class="quotelev1">&gt; inconditionally, as libmpi.so could not exist in a static lib build.
</span><br>
<p>Right.  Or it could be libmpi.dylib (OS X).  I don't know if other  
<br>
extensions exist out there.
<br>
<p>However, in this case, it would be easy enough to just try a few named  
<br>
extensions (libmpi.&lt;foo&gt;) -- they'll either all fail or one of them  
<br>
will succeed.  But you would still need to tell if you're linked  
<br>
against libmpi.a or not -- dlopen'ing a shared library version when  
<br>
you already have a static version resident can cause problems (per the  
<br>
chart on the wiki).
<br>
<p>Actually, regardless of who does the dlopen -- you or me -- we need to  
<br>
know this info (whether the linked-against libmpi was shared or  
<br>
static).  Hmm.  I can't think of a good way to do this off the top of  
<br>
my head.
<br>
<p>After a little more thought, I think only the application can know  
<br>
this -- the application's build system can know whether it is linking  
<br>
against libmpi.a or libmpi.so and set some #define (or whatever) to  
<br>
know whether it needs to dlopen libmpi or not.  :-\
<br>
<p>Specifically: it would probably require some significant hackery in  
<br>
the OMPI build process to put in a #define that indicates whether OMPI  
<br>
is being built statically or not.  But the AM/LT process shields this  
<br>
information from the build process by design (part of the issue is  
<br>
that AM/LT allows both static and shared libraries to be built  
<br>
simultaneously).  We'd then have to introduce some global symbol that  
<br>
could be queried that is outside of the MPI interface.  Neither of  
<br>
these things are attractive.  :-(
<br>
<p><span class="quotelev2">&gt;&gt; Also, see my later post: doesn't perl/python have some kind of
</span><br>
<span class="quotelev2">&gt;&gt; portable dlopen anyway?  They're opening your module...?
</span><br>
<p>Sorry -- it looks like the post I was referring to got stuck in my  
<br>
outbox and didn't get sent until earlier this morning.
<br>
<p><span class="quotelev1">&gt; AFAIK, Python does not. It uses specific, private code for this,
</span><br>
<span class="quotelev1">&gt; handling the loading of extension modules according to the OS's and
</span><br>
<span class="quotelev1">&gt; their idiosyncracies. However, Python enable users to change the flags
</span><br>
<span class="quotelev1">&gt; used for dlopen'ing your extension modules; the tricky part is to get
</span><br>
<span class="quotelev1">&gt; the correct values RTLD_GLOBAL in a portable way.
</span><br>
<p>That's somewhat surprising -- there's no public interfaces for modules  
<br>
to portably load sub-modules?  Bummer.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Is there any another way of setting a MCA parameter?
</span><br>
<span class="quotelev2">&gt;&gt; See <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, it seems there isn't a programatic way. Anyway, putenv() should
</span><br>
<span class="quotelev1">&gt; not be a souce of portability problems.
</span><br>
<p>No, we have no API for setting MCA params other than altering the  
<br>
environment.  Also, most MCA params are read during MPI_INIT and not  
<br>
re-checked later during the run (it would be a bad idea, for example,  
<br>
to check MCA param values during the critical performance path).
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
<li><strong>Next message:</strong> <a href="4664.php">Jeff Squyres: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4662.php">Jeff Squyres: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>In reply to:</strong> <a href="4659.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4666.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4666.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4669.php">Brian W. Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
