<?
$subject_val = "Re: [OMPI users] Problem including C MPI code from C++ using C linkage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 11:09:24 2010" -->
<!-- isoreceived="20100903150924" -->
<!-- sent="Fri, 3 Sep 2010 09:09:20 -0600" -->
<!-- isosent="20100903150920" -->
<!-- name="Patrik Jonsson" -->
<!-- email="code_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem including C MPI code from C++ using C linkage" -->
<!-- id="AANLkTi=wq6ZvFTFW033G+Y33a12dfZcPOBxn2BOMOJQ8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4916B32C-CEB0-49AE-B02A-E74EC60549D3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem including C MPI code from C++ using C linkage<br>
<strong>From:</strong> Patrik Jonsson (<em>code_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 11:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14172.php">Jeff Squyres: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<li><strong>Previous message:</strong> <a href="14170.php">Jeff Squyres: "Re: [OMPI users] spin-wait backoff"</a>
<li><strong>In reply to:</strong> <a href="14160.php">Jeff Squyres: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>Thanks for the suggestions.
<br>
<p>On Thu, Sep 2, 2010 at 6:41 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Aug 31, 2010, at 5:39 PM, Patrik Jonsson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems a bit presumptuous of mpi.h to just include mpicxx.h just
</span><br>
<span class="quotelev2">&gt;&gt; because __cplusplus is defined, since that makes it impossible to link
</span><br>
<span class="quotelev2">&gt;&gt; C MPI code from C++.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI standard requires that &lt;mpi.h&gt; work in both C and C++ applications. &#160;It also requires that &lt;mpi.h&gt; include all the C++ binding prototypes when relevant. &#160;Hence, there's not much we can do here.
</span><br>
<p>Ah, I see. That seems unfortunate, but I guess it's out of your hands.
<br>
<p><span class="quotelev1">&gt; As Lisandro noted, it's probably best to separate &lt;mpi.h&gt; outside of your &lt;c-code.h&gt; file.
</span><br>
<p>I tried the suggestion of simply including mpi.h in C++-mode before
<br>
including c-code.h, and that works. I should have thought of that.
<br>
(c-code.h still needs to include mpi.h because it's also a standalone
<br>
code that uses mpi.)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, you can make your &lt;c-code.h&gt; file be safe for C++ by doing something like in c-code.h:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; #extern &quot;C&quot; {
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; ...all your C declarations...
</span><br>
<span class="quotelev1">&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is probably preferable because then your &lt;c-code.h&gt; is safe for both C and C++, and you keep &lt;mpi.h&gt; contained inside it (assumedly preserving some abstraction barriers in your code by keeping the MPI prototypes bundled with &lt;c-code.h&gt;).
</span><br>
<p>This is also a good suggestions, but I have only scant control over
<br>
what's in c-code.h so it's a bit invasive.
<br>
<p>In any case I can live with including mpi.h myself first, so I'll go
<br>
with that solution.
<br>
<p>Regards,
<br>
<p>/Patrik
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14172.php">Jeff Squyres: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<li><strong>Previous message:</strong> <a href="14170.php">Jeff Squyres: "Re: [OMPI users] spin-wait backoff"</a>
<li><strong>In reply to:</strong> <a href="14160.php">Jeff Squyres: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
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
