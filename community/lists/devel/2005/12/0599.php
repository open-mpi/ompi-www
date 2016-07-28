<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  7 11:57:59 2005" -->
<!-- isoreceived="20051207165759" -->
<!-- sent="Wed, 7 Dec 2005 09:56:29 -0700" -->
<!-- isosent="20051207165629" -->
<!-- name="Craig Rasmussen" -->
<!-- email="crasmussen_at_[hidden]" -->
<!-- subject="Fwd: (j3.2005) Re: Derived types according to MPI2" -->
<!-- id="4DCF6949-9C9E-413D-9425-7C199431B160_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200511211823.jALINxi56154_at_brackley.nag.co.uk" -->
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
<strong>Date:</strong> 2005-12-07 11:56:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0600.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0598.php">Craig Rasmussen: "Fwd: (j3.2005) Re: Derived types according to MPI2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Malcolm Cohen &lt;malcolm_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: November 21, 2005 11:23:59 AM MST
</span><br>
<span class="quotelev1">&gt; To: Aleksandar Donev &lt;adonev_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: J3 &lt;j3_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: (j3.2005) Re: Derived types according to MPI2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aleksandar Donev said:
</span><br>
<span class="quotelev2">&gt;&gt; Yes, but the interesting thing is neither me nor Van were aware of  
</span><br>
<span class="quotelev2">&gt;&gt; what
</span><br>
<span class="quotelev2">&gt;&gt; the standard actually allows in terms of derived types and the  
</span><br>
<span class="quotelev2">&gt;&gt; storage
</span><br>
<span class="quotelev2">&gt;&gt; for the components, and presumably we know Fortran better. Can  
</span><br>
<span class="quotelev2">&gt;&gt; storage
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One might have hoped so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for the components be separated from the scalar derived type itself?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hey, when *I* am the Fortran processor there's no contiguous storage,
</span><br>
<span class="quotelev1">&gt; or for that matter addressable storage!  Don't take too limited a view
</span><br>
<span class="quotelev1">&gt; of current &quot;hard&quot; ware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; how something is done as long as it is done well. But if you want to
</span><br>
<span class="quotelev2">&gt;&gt; pass an array of derived types to a parallel IO routine that is not
</span><br>
<span class="quotelev2">&gt;&gt; compiled by your super-smart Fortran compiler that chooses to scatter
</span><br>
<span class="quotelev2">&gt;&gt; the components across virtual-address space (yes, I mean virtual),  
</span><br>
<span class="quotelev2">&gt;&gt; then
</span><br>
<span class="quotelev2">&gt;&gt; you do NOT want that abstraction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You cannot be serious.  You do realise that there is no requirement on
</span><br>
<span class="quotelev1">&gt; any array even on intrinsic data types to contain the &quot;actual data&quot;.
</span><br>
<span class="quotelev1">&gt; Is that a problem in practice?  No of course not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Fortran standard doesn't mention virtual addressing, physical
</span><br>
<span class="quotelev1">&gt; addressing or any of these things.  Is that a problem?  No.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What the standard should do (and usually does) is to specify the  
</span><br>
<span class="quotelev1">&gt; behaviour
</span><br>
<span class="quotelev1">&gt; of the Fortran &quot;virtual machine&quot;, i.e. the meaning of the program.   
</span><br>
<span class="quotelev1">&gt; How
</span><br>
<span class="quotelev1">&gt; that program gets mapped to hardware is way outside the scope of the
</span><br>
<span class="quotelev1">&gt; standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is about choice. Leave preaching to the preachers. Programming  
</span><br>
<span class="quotelev2">&gt;&gt; is a
</span><br>
<span class="quotelev2">&gt;&gt; profession for a reason---programmers are experienced and educated  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; understand the issues and don't need lectures on abstractions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Apparently not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ...........................Malcolm Cohen, NAG Ltd., Oxford, U.K.
</span><br>
<span class="quotelev1">&gt;                            (malcolm_at_[hidden])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________ 
</span><br>
<span class="quotelev1">&gt; __
</span><br>
<span class="quotelev1">&gt; This e-mail has been scanned for all viruses by Star. The
</span><br>
<span class="quotelev1">&gt; service is powered by MessageLabs. For more information on a proactive
</span><br>
<span class="quotelev1">&gt; anti-virus service working around the clock, around the globe, visit:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.star.net.uk">http://www.star.net.uk</a>
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________ 
</span><br>
<span class="quotelev1">&gt; __
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0600.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0598.php">Craig Rasmussen: "Fwd: (j3.2005) Re: Derived types according to MPI2"</a>
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
