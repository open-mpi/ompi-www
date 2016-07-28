<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov  6 10:09:33 2006" -->
<!-- isoreceived="20061106150933" -->
<!-- sent="Mon, 6 Nov 2006 10:09:13 -0500" -->
<!-- isosent="20061106150913" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tickets 39 &amp;amp; 55" -->
<!-- id="19914AAA-A3FF-4C4F-9452-D51C3BC959B1_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ED457848-89D9-452B-B459-EEE4BC4AA11B_at_cisco.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-06 10:09:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2143.php">Chevchenkovic Chevchenkovic: "[OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2141.php">pgarcia_at_[hidden]: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>In reply to:</strong> <a href="2126.php">Jeff Squyres: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 2, 2006, at 7:47 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 2, 2006, at 3:18 PM, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   So &quot;large&quot; was an attempt to provide *some* of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interfaces -- but [your] experience has shown that this can do more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; harm than good (i.e., make some legal MPI applications uncompilable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because we provide *some* interfaces to MPI_GATHER, but not all).
</span><br>
<p><span class="quotelev1">&gt; Very true; derived data types are always going to be a problem for
</span><br>
<span class="quotelev1">&gt; F90/F95 (as I understand those languages).  The proposed F03 bindings
</span><br>
<span class="quotelev1">&gt; don't have this problem because (again, as I understand the language
</span><br>
<span class="quotelev1">&gt; -- and I am *not* a Fortran expert!) they have the equivalent of   
</span><br>
<span class="quotelev1">&gt; (void*) that we can use for choice buffers.
</span><br>
<p>Not knowing where to look I suspect that derived datatypes will not  
<br>
be a problem because after more thought I realized that they all must  
<br>
be just a single Fortran type in the actual code because I can't see  
<br>
anyway they could be anything but.
<br>
<p><span class="quotelev1">&gt; I suppose.  I'd be willing to accept a patch for all the things we
</span><br>
<span class="quotelev1">&gt; talked about in this thread (e.g., the stuff you did for GATHER
</span><br>
<span class="quotelev1">&gt; extrapolated for all the other collectives that need it, and either
</span><br>
<span class="quotelev1">&gt; what you did for REDUCE to allow IN_PLACE or expanding IN_PLACE to be
</span><br>
<span class="quotelev1">&gt; a unique datatype as we discussed).  More specifically, I'd rather
</span><br>
<span class="quotelev1">&gt; fix *all* the collectives rather than just GATHER/dimensions and
</span><br>
<span class="quotelev1">&gt; REDUCE/IN_PLACE.  I unfortunately do not have the cycles to do this
</span><br>
<span class="quotelev1">&gt; work myself.  :-\
</span><br>
<p>I could write a patch for the other collectives with 2 choice buffers  
<br>
affected by large -- having looked at it multiple times for GATHER  
<br>
the way forward is clear to me.  Let me know if/when you are ready to  
<br>
accept a patch, I'd rather not work on it until you are able to merge  
<br>
it into the trunk so I don't have to redo it if someone else makes  
<br>
changes to the affected files in the meantime.  However, I don't have  
<br>
time to write test programs to go beyond my testing of GATHER, but  
<br>
that should not be a problem as I can't see how the other collectives  
<br>
could be much different in this respect that GATHER.
<br>
<p>IN_PLACE would be better handled with a special Fortran datatype but  
<br>
I'd rather not try to do that until the 2 choice buffers are  
<br>
finished, to much to handle at one time and I'm not as familiar with  
<br>
the impact of this change.
<br>
<p>Given that the large Fortran 90 interface is only meant to add the 2  
<br>
choice buffers with the same type, I believe anyone who wants the  
<br>
large interfaces should be willing to live with the larger interface  
<br>
file, just like we choose how large of arrays we're going to build  
<br>
into any of the interfaces.
<br>
<p>It would be helpful to know if anyone else is using the Fortran 90  
<br>
large interfaces in the trunk.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2143.php">Chevchenkovic Chevchenkovic: "[OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2141.php">pgarcia_at_[hidden]: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>In reply to:</strong> <a href="2126.php">Jeff Squyres: "Re: [OMPI users] tickets 39 &amp; 55"</a>
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
