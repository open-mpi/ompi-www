<?
$subject_val = "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 13:24:37 2009" -->
<!-- isoreceived="20090424172437" -->
<!-- sent="Fri, 24 Apr 2009 18:24:32 +0100" -->
<!-- isosent="20090424172432" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules" -->
<!-- id="49F1F5D0.8090800_at_ntlworld.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="222CB4E7-1E63-4046-AD7F-1F780DEE8E81_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-24 13:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5866.php">Terry Dontje: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5864.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5863.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5866.php">Terry Dontje: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="5866.php">Terry Dontje: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="5883.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for the informative explanation, Jeff. I appreciate this 
<br>
issue has been the cause of some deliberation!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was the changeset where we did the ABI fixes -- ensuring that if 
</span><br>
<span class="quotelev1">&gt; you compile/link against Open MPI vA.B.C, you will be able to just 
</span><br>
<span class="quotelev1">&gt; change your LD_LIBRARY_PATH or replace libmpi.so when upgrading to Open 
</span><br>
<span class="quotelev1">&gt; MPI vA.B.x.
</span><br>
<span class="quotelev1">&gt; But -- to make a long
</span><br>
<span class="quotelev1">&gt; story short -- the linker will embed the length of the 
</span><br>
<span class="quotelev1">&gt; ompi_communicator_t in the hello executable.  Among other reasons, it's 
</span><br>
<span class="quotelev1">&gt; so that pointer math can be computed properly.  
</span><br>
<p>The goal is admirable and a stalwart of good open source practice which 
<br>
avoids &quot;DLL-Hell&quot;. However, I simply don't understand how my compiler 
<br>
can *ever* know the size of your opaque ompi_communicator_t?
<br>
<p>mpi.h declares MPI_Comm as a pointer to as-yet-undefined &quot;struct 
<br>
ompi_communicator_t&quot;, ompi_mpi_comm_world is an external global of 
<br>
as-yet-undefined &quot;struct ompi_predefined_communicator_t&quot;. Then the 
<br>
compiler must try and work out whether the &quot;comm_predefined_t *&quot; aliases 
<br>
the &quot;comm_t *&quot;. This isn't possible without full type information. In 
<br>
general, only (void *) and (char *) can alias arbitrary types.
<br>
<p>See 
<br>
<a href="http://www.cellperformance.com/mike_acton/2006/06/understanding_strict_aliasing.html">http://www.cellperformance.com/mike_acton/2006/06/understanding_strict_aliasing.html</a> 
<br>
for an excellent discussion on aliasing.
<br>
<p><span class="quotelev1">&gt; However, let's assume 
</span><br>
<span class="quotelev1">&gt; the user upgrades to OMPI vA.B.(C+1) in place, meaning that libmpi.so is 
</span><br>
<span class="quotelev1">&gt; replaced with a new version.  If we've changed the back-end 
</span><br>
<span class="quotelev1">&gt; ompi_communicator_t struct (e.g., added a member), then the size that is 
</span><br>
<span class="quotelev1">&gt; included in the hello executable no longer matches the size that is in 
</span><br>
<span class="quotelev1">&gt; libmpi.so -- and Bad Things can (and do) happen.
</span><br>
<p>I don't get how the linker can affect the actual object code generated 
<br>
for my hello.o, except via relocation of symbols. If none of my code 
<br>
makes use of, or even *knows* about your internal struct definitions, 
<br>
and only holds pointers to them, then I can't do any pointer arithmetic 
<br>
or anything that requires internal information; I get: &quot;invalid use of 
<br>
undefined type &#145;struct XXXX'&quot; or similar.
<br>
<p>I can hold a simple pointer to your private object, but this should 
<br>
maintain ABI compatibility; isn't that what the PIMPL C++ idiom is all 
<br>
about and widely used (e.g. Qt Toolkit). The pointer-to-global gets 
<br>
relocated at shared library load time.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, the solution of r20627: make a &quot;dummy&quot; type that is guaranteed to 
</span><br>
<span class="quotelev1">&gt; be larger than ompi_communicator_t -- ompi_predefined_communicator_t.  
</span><br>
<span class="quotelev1">&gt; It's actually a struct that *contains* ompi_communicator_t and then a 
</span><br>
<span class="quotelev1">&gt; fixed amount of padding at the end.  Since MPI_COMM_WORLD will always be 
</span><br>
<span class="quotelev1">&gt; this ompi_predefined_communicator_t, we can ensure that its size stays 
</span><br>
<span class="quotelev1">&gt; constant, even if the size of ompi_communicator_t changes.  Hence, the 
</span><br>
<span class="quotelev1">&gt; size in the hello executable and libmpi.so will be the same.  Happiness.
</span><br>
<p>With respect, this feels a little bit like a hack. Who's to say your 
<br>
future communicator won't need to be even bigger than the current 
<br>
padding allows? - and then the assumptions made when linking against the 
<br>
old predefined_t would no longer apply leading to corruption.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The compiler complains because ompi_mpi_comm_world is declared as an
</span><br>
<span class="quotelev2">&gt;&gt; &quot;extern struct ompi_predefined_communicator_t&quot; but the type is
</span><br>
<span class="quotelev2">&gt;&gt; incomplete, so it can't tell whether the cast is a permissible
</span><br>
<span class="quotelev2">&gt;&gt; almost-the-same type pun (e.g. an &quot;int&quot; can alias an &quot;unsigned&quot;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think this is potentially a serious performance issue for anyone using
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI in a C++ environment, and the profuse warnings preclude it's use
</span><br>
<span class="quotelev2">&gt;&gt; in our build system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree that the warnings are Bad.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The question is -- why do they only show up in gcc 4.1?  More 
</span><br>
<span class="quotelev1">&gt; specifically -- why do they *not* show up in other versions of gcc?  Is 
</span><br>
<span class="quotelev1">&gt; it a gcc 4.1 compiler bug?
</span><br>
<p>Older GCC weren't as strict about aliasing issues. Perhaps the latter 
<br>
ones recognise that in this context (a function call with pointer to 
<br>
non-local parameter), no optimisation would be possible anyway.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The bad news is that the only work around I have is to insert (void *)
</span><br>
<span class="quotelev2">&gt;&gt; casts between (MPI_TYPENAME) and the address operator, e.g.:
</span><br>
<span class="quotelev2">&gt;&gt; #define MPI_COMM_WORLD (((MPI_Comm)(void *)&amp;(ompi_mpi_comm_world)))
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  I guess that's plausible, but ugly.
</span><br>
<p>Actually, I think it's closer to what you've been arguing above: you're 
<br>
insisting that the compiler blindly interpret &amp;ompi_mpi_comm_world as a 
<br>
pointer to some memory that really is equivalent to the other unknown 
<br>
type communicator_t. Without the intermediate (void *), you're 
<br>
suggesting the compiler could possibly do better optimization.
<br>
<p>Ultimately, for internal use, the (void *) is bad, but from client code 
<br>
with no knowledge of your types, it should be mandatory and tells the 
<br>
compiler to make no assumptions about aliasing.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; An alternative might be to make the full type definition available by
</span><br>
<span class="quotelev2">&gt;&gt; #including some of the internal developer headers such as
</span><br>
<span class="quotelev2">&gt;&gt; ompi/communicator/communicator.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure what the right solution is, but that is not attractive.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Completely agree (on both points!).
<br>
<p>In summary, I still don't see why holding pointers to opaque types is 
<br>
not ABI-compatible, and would suggest the (void *) compiler hint in the 
<br>
meantime.
<br>
<p>Regards,
<br>
Simon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5866.php">Terry Dontje: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5864.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5863.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5866.php">Terry Dontje: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="5866.php">Terry Dontje: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="5883.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
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
