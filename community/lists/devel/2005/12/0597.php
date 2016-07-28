<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  7 11:54:56 2005" -->
<!-- isoreceived="20051207165456" -->
<!-- sent="Wed, 7 Dec 2005 09:53:25 -0700" -->
<!-- isosent="20051207165325" -->
<!-- name="Craig Rasmussen" -->
<!-- email="crasmussen_at_[hidden]" -->
<!-- subject="Fwd: (j3.2005) Re: Derived types according to MPI2" -->
<!-- id="E5A4B5B6-1BAB-4797-ADC7-062104E17DB0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200511211130.18768.adonev_at_math.princeton.edu" -->
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
<strong>From:</strong> Craig Rasmussen (<em>crasmussen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-07 11:53:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0598.php">Craig Rasmussen: "Fwd: (j3.2005) Re: Derived types according to MPI2"</a>
<li><strong>Previous message:</strong> <a href="0596.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Aleksandar Donev &lt;adonev_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: November 21, 2005 9:30:18 AM MST
</span><br>
<span class="quotelev1">&gt; To: J3 &lt;j3_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: (j3.2005) Re: Derived types according to MPI2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Malcolm Cohen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Which just goes to show that the authors of MPI2 didn't understand
</span><br>
<span class="quotelev2">&gt;&gt; Fortran, since that is completely and utterly false in every sense
</span><br>
<span class="quotelev2">&gt;&gt; that matters.
</span><br>
<span class="quotelev1">&gt; Yes, but the interesting thing is neither me nor Van were aware of  
</span><br>
<span class="quotelev1">&gt; what
</span><br>
<span class="quotelev1">&gt; the standard actually allows in terms of derived types and the storage
</span><br>
<span class="quotelev1">&gt; for the components, and presumably we know Fortran better. Can storage
</span><br>
<span class="quotelev1">&gt; for the components be separated from the scalar derived type itself?
</span><br>
<span class="quotelev1">&gt; This probably makes no visible difference for scalars, but for arrays
</span><br>
<span class="quotelev1">&gt; it does. Again, I am asking about what STORAGE_SIZE for derived types
</span><br>
<span class="quotelev1">&gt; should mean.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dan Nagle wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Please be aware that the &quot;external world&quot; of the MPI standard
</span><br>
<span class="quotelev2">&gt;&gt; is really the virtual machine of the C standard.
</span><br>
<span class="quotelev1">&gt; Yes, of course, I am certainly not proposing binding to hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When defining a programming language, the &quot;needless abstraction&quot;
</span><br>
<span class="quotelev1">&gt; I should have qualified with &quot;some needless abstractions&quot;. Of course
</span><br>
<span class="quotelev1">&gt; abstractions are good, especially when it does not matter to the user
</span><br>
<span class="quotelev1">&gt; how something is done as long as it is done well. But if you want to
</span><br>
<span class="quotelev1">&gt; pass an array of derived types to a parallel IO routine that is not
</span><br>
<span class="quotelev1">&gt; compiled by your super-smart Fortran compiler that chooses to scatter
</span><br>
<span class="quotelev1">&gt; the components across virtual-address space (yes, I mean virtual),  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; you do NOT want that abstraction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is about choice. Leave preaching to the preachers. Programming is a
</span><br>
<span class="quotelev1">&gt; profession for a reason---programmers are experienced and educated and
</span><br>
<span class="quotelev1">&gt; understand the issues and don't need lectures on abstractions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aleks
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0598.php">Craig Rasmussen: "Fwd: (j3.2005) Re: Derived types according to MPI2"</a>
<li><strong>Previous message:</strong> <a href="0596.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
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
