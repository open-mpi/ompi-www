<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 15 02:33:49 2005" -->
<!-- isoreceived="20050315073349" -->
<!-- sent="Tue, 15 Mar 2005 08:33:46 +0100" -->
<!-- isosent="20050315073346" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Fwd: Thoughts on an MPI ABI" -->
<!-- id="42368FDA.4040501_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52fc5743a9a9f3a5f1a2f7831f397239_at_open-mpi.org" -->
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
<strong>From:</strong> Toon Knapen (<em>toon.knapen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-15 02:33:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0024.php">JorgeJ. Hernandez: "[O-MPI users] Information Request..."</a>
<li><strong>Previous message:</strong> <a href="0022.php">Greg Lindahl: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0021.php">Jeff Squyres: "[O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Greetings.  I loosely watched the MPI ABI discussions on the Beowulf 
</span><br>
<span class="quotelev1">&gt; list but refrained from commenting (I stopped checking -- is it still 
</span><br>
<span class="quotelev1">&gt; going on?).  Now that the discussion has come to my project's list, I 
</span><br>
<span class="quotelev1">&gt; guess I should speak up.  :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since I've been &quot;saving up&quot; for a while, this post is a bit lengthy.  I 
</span><br>
<span class="quotelev1">&gt; apologize.
</span><br>
<p><p>Thanks for the effort that you've put into this reply
<br>
<p><p><span class="quotelev1">&gt; First, let me ask a question: what does an MPI ABI *really* get for you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The obvious answer is that you don't have to recompile.  Your app runs 
</span><br>
<span class="quotelev1">&gt; anywhere with any MPI on any system.  Well, that is, unless want to run 
</span><br>
<span class="quotelev1">&gt; on a different architecture (32/64 bit, different CPU, different 
</span><br>
<span class="quotelev1">&gt; platform, etc.).  Or if you want to use a different compiler on the same 
</span><br>
<span class="quotelev1">&gt; system (let's not forget C++ and F90 name mangling issues).  Or if you 
</span><br>
<span class="quotelev1">&gt; want to use different system or compiler flags (e.g., threading / no 
</span><br>
<span class="quotelev1">&gt; threading, largefile support on Linux, optimization and debugging 
</span><br>
<span class="quotelev1">&gt; support, etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So -- hmm.  You can run your MPI app on any MPI implementation that is 
</span><br>
<span class="quotelev1">&gt; on exactly the same platform, architecture, uses the same compilers, and 
</span><br>
<span class="quotelev1">&gt; uses the same system and compiler flags that you want.  So an MPI ABI 
</span><br>
<span class="quotelev1">&gt; does not enable the &quot;compile once, run anywhere&quot; scheme -- it really is 
</span><br>
<span class="quotelev1">&gt; much narrower than the casual observer might expect.
</span><br>
<p><p>Then how do you explain the effort that went into the C++ ABI ?
<br>
<p><p><p><span class="quotelev1">&gt; What about the ISV?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, on the surface, this looks great -- an ISV can ship *one* 
</span><br>
<span class="quotelev1">&gt; executable and have it work &quot;anywhere&quot;.  Er, well, anywhere &quot;similar&quot; 
</span><br>
<span class="quotelev1">&gt; (so let's not forget that the ISV will still end up shipping a lot of 
</span><br>
<span class="quotelev1">&gt; executables -- they may be shipping *fewer* executables than before, but 
</span><br>
<span class="quotelev1">&gt; there will still be [far?] more than one).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But does an ISV really want that?  Suddenly their app can [potentially] 
</span><br>
<span class="quotelev1">&gt; run in a lot of scenarios that they have not verified through their Q&amp;A 
</span><br>
<span class="quotelev1">&gt; process.  How do you know that you'll get the right answers?  How do you 
</span><br>
<span class="quotelev1">&gt; know it won't crap out in the middle of the run because of a missing 
</span><br>
<span class="quotelev1">&gt; symbol (not involving MPI)?  The fact is that the app can now run in a 
</span><br>
<span class="quotelev1">&gt; lot of unsupported places, whereas today, the possibilities of this 
</span><br>
<span class="quotelev1">&gt; happening are *much* more limited.  ISVs generally choose which MPI 
</span><br>
<span class="quotelev1">&gt; implementations, but then their apps *only* run on those implementations 
</span><br>
<span class="quotelev1">&gt; (there are exceptions to this rule, I know).
</span><br>
<p><p>This all depends on how details one specifies a platform and very few
<br>
ISV's specify every little detail.
<br>
<p>For instance we specify for the linux platform which glibc we support.
<br>
We support one specific version _and_ all higher version. We do this
<br>
because we rely on the backward compatibility of glibc. The drawback is
<br>
that if the backward comptability in glibc is broken it will probably
<br>
show up in our code and our clients will contact us about it.
<br>
Additionally we will have to spend time on finding the error to
<br>
eventually find out that it is a backward compatibility problem of 
<br>
glibc. However we can not afford to tell our customers to use one 
<br>
specific version of glibc or test a whole range of glibc versions so we 
<br>
have to take our chances and rely on the software our software relies on.
<br>
<p>Big companies however have to power to specify their platforms in every 
<br>
little detail (this includes not only the os and the version of the os 
<br>
but also the version of every module in the os) but 95% of the ISV's do 
<br>
not have this power ;-(
<br>
<p><p><span class="quotelev1">&gt; This is quite an important point, and is something that several others 
</span><br>
<span class="quotelev1">&gt; have brought up in other mails: all MPI implementations are not created 
</span><br>
<span class="quotelev1">&gt; equal.  Take any two production-quality MPI implementations and they'll 
</span><br>
<span class="quotelev1">&gt; have their own quirks and differences.  They'll behave and perform 
</span><br>
<span class="quotelev1">&gt; differently.  So even though your application is source code portable, 
</span><br>
<span class="quotelev1">&gt; it may not be performance / behavioral portable.  This has been a 
</span><br>
<span class="quotelev1">&gt; well-known fact for years (as someone said -- it's an artifact of using 
</span><br>
<span class="quotelev1">&gt; a standard with multiple implementations).  This is why ISV's Q&amp;A test 
</span><br>
<span class="quotelev1">&gt; their applications with different MPI implementations, and only certify 
</span><br>
<span class="quotelev1">&gt; specific ones.  More specifically, if your application works on one MPI 
</span><br>
<span class="quotelev1">&gt; implementation, you can't guarantee that it will work on another.  It 
</span><br>
<span class="quotelev1">&gt; *probably* will, but customers don't pay for &quot;probably&quot; (e.g., you can't 
</span><br>
<span class="quotelev1">&gt; know if you're accidentally relying on a quirk of one [or more!] 
</span><br>
<span class="quotelev1">&gt; implementation[s] without testing on exactly the ones that you plan to 
</span><br>
<span class="quotelev1">&gt; support).
</span><br>
<p><p>If our client has an cluster with infiniband and we do not we will try 
<br>
to make an executable for him. However we can not test this executable 
<br>
ourselves but because it runs on 5 different platforms we _suppose_ that 
<br>
if the MPI implementation is correct, our app will run correctly on that 
<br>
switch too. If the customer nevertheless has a problem, we log in 
<br>
remotely or go on-site to evaluate the problem. However we can not 
<br>
afford to say 'buy another switch' because this will mean that our 
<br>
customer will go somewhere else and thus we loose the customer.
<br>
<p><p>Again for comparison, we neither specify which BIOS-es we support or 
<br>
which brands of ethernet cards because we suppose they all work as 
<br>
expected. Without any such assumptions, you just have to ship hardware 
<br>
together with your software.
<br>
<p><p>toon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0024.php">JorgeJ. Hernandez: "[O-MPI users] Information Request..."</a>
<li><strong>Previous message:</strong> <a href="0022.php">Greg Lindahl: "Re: [O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0021.php">Jeff Squyres: "[O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
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
