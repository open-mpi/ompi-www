<?
$subject_val = "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 13:58:37 2009" -->
<!-- isoreceived="20090424175837" -->
<!-- sent="Fri, 24 Apr 2009 13:57:46 -0400" -->
<!-- isosent="20090424175746" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules" -->
<!-- id="49F1FD9A.9000602_at_sun.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="49F1F5D0.8090800_at_ntlworld.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-24 13:57:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5867.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Previous message:</strong> <a href="5865.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5865.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5883.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Number Cruncher wrote:
<br>
<span class="quotelev1">&gt; Many thanks for the informative explanation, Jeff. I appreciate this 
</span><br>
<span class="quotelev1">&gt; issue has been the cause of some deliberation!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was the changeset where we did the ABI fixes -- ensuring that if 
</span><br>
<span class="quotelev2">&gt;&gt; you compile/link against Open MPI vA.B.C, you will be able to just 
</span><br>
<span class="quotelev2">&gt;&gt; change your LD_LIBRARY_PATH or replace libmpi.so when upgrading to 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI vA.B.x.
</span><br>
<span class="quotelev2">&gt;&gt; But -- to make a long
</span><br>
<span class="quotelev2">&gt;&gt; story short -- the linker will embed the length of the 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_communicator_t in the hello executable.  Among other reasons, 
</span><br>
<span class="quotelev2">&gt;&gt; it's so that pointer math can be computed properly.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The goal is admirable and a stalwart of good open source practice 
</span><br>
<span class="quotelev1">&gt; which avoids &quot;DLL-Hell&quot;. However, I simply don't understand how my 
</span><br>
<span class="quotelev1">&gt; compiler can *ever* know the size of your opaque ompi_communicator_t?
</span><br>
<span class="quotelev1">&gt;
</span><br>
And in this case the client code doesn't need to know the size of the 
<br>
struct, we are only concerned with the address of the opaque handle so 
<br>
it can be passed on.
<br>
<span class="quotelev1">&gt; mpi.h declares MPI_Comm as a pointer to as-yet-undefined &quot;struct 
</span><br>
<span class="quotelev1">&gt; ompi_communicator_t&quot;, ompi_mpi_comm_world is an external global of 
</span><br>
<span class="quotelev1">&gt; as-yet-undefined &quot;struct ompi_predefined_communicator_t&quot;. Then the 
</span><br>
<span class="quotelev1">&gt; compiler must try and work out whether the &quot;comm_predefined_t *&quot; 
</span><br>
<span class="quotelev1">&gt; aliases the &quot;comm_t *&quot;. This isn't possible without full type 
</span><br>
<span class="quotelev1">&gt; information. In general, only (void *) and (char *) can alias 
</span><br>
<span class="quotelev1">&gt; arbitrary types.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cellperformance.com/mike_acton/2006/06/understanding_strict_aliasing.html">http://www.cellperformance.com/mike_acton/2006/06/understanding_strict_aliasing.html</a> 
</span><br>
<span class="quotelev1">&gt; for an excellent discussion on aliasing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, let's assume the user upgrades to OMPI vA.B.(C+1) in place, 
</span><br>
<span class="quotelev2">&gt;&gt; meaning that libmpi.so is replaced with a new version.  If we've 
</span><br>
<span class="quotelev2">&gt;&gt; changed the back-end ompi_communicator_t struct (e.g., added a 
</span><br>
<span class="quotelev2">&gt;&gt; member), then the size that is included in the hello executable no 
</span><br>
<span class="quotelev2">&gt;&gt; longer matches the size that is in libmpi.so -- and Bad Things can 
</span><br>
<span class="quotelev2">&gt;&gt; (and do) happen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't get how the linker can affect the actual object code generated 
</span><br>
<span class="quotelev1">&gt; for my hello.o, except via relocation of symbols. If none of my code 
</span><br>
<span class="quotelev1">&gt; makes use of, or even *knows* about your internal struct definitions, 
</span><br>
<span class="quotelev1">&gt; and only holds pointers to them, then I can't do any pointer 
</span><br>
<span class="quotelev1">&gt; arithmetic or anything that requires internal information; I get: 
</span><br>
<span class="quotelev1">&gt; &quot;invalid use of undefined type &#145;struct XXXX'&quot; or similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can hold a simple pointer to your private object, but this should 
</span><br>
<span class="quotelev1">&gt; maintain ABI compatibility; isn't that what the PIMPL C++ idiom is all 
</span><br>
<span class="quotelev1">&gt; about and widely used (e.g. Qt Toolkit). The pointer-to-global gets 
</span><br>
<span class="quotelev1">&gt; relocated at shared library load time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
In C++ you can do the above however that is not valid C code when trying 
<br>
to initialize a global pointer.  The initializer must be a compile-time 
<br>
constant.  It was this artifact that made us go down the path of padded 
<br>
structures.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hence, the solution of r20627: make a &quot;dummy&quot; type that is guaranteed 
</span><br>
<span class="quotelev2">&gt;&gt; to be larger than ompi_communicator_t -- 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_predefined_communicator_t.  It's actually a struct that 
</span><br>
<span class="quotelev2">&gt;&gt; *contains* ompi_communicator_t and then a fixed amount of padding at 
</span><br>
<span class="quotelev2">&gt;&gt; the end.  Since MPI_COMM_WORLD will always be this 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_predefined_communicator_t, we can ensure that its size stays 
</span><br>
<span class="quotelev2">&gt;&gt; constant, even if the size of ompi_communicator_t changes.  Hence, 
</span><br>
<span class="quotelev2">&gt;&gt; the size in the hello executable and libmpi.so will be the same.  
</span><br>
<span class="quotelev2">&gt;&gt; Happiness.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With respect, this feels a little bit like a hack. Who's to say your 
</span><br>
<span class="quotelev1">&gt; future communicator won't need to be even bigger than the current 
</span><br>
<span class="quotelev1">&gt; padding allows? - and then the assumptions made when linking against 
</span><br>
<span class="quotelev1">&gt; the old predefined_t would no longer apply leading to corruption.
</span><br>
However, we've have enough room to store a pointer to an extension to 
<br>
the structure.  So, if we reach to the point that we are near the end of 
<br>
our pad the last thing we put in a structure should be a pointer to an 
<br>
extension.  Gross but workable.  I am actually not that convinced we 
<br>
will actually reach that point but who knows.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The compiler complains because ompi_mpi_comm_world is declared as an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;extern struct ompi_predefined_communicator_t&quot; but the type is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; incomplete, so it can't tell whether the cast is a permissible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; almost-the-same type pun (e.g. an &quot;int&quot; can alias an &quot;unsigned&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think this is potentially a serious performance issue for anyone 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI in a C++ environment, and the profuse warnings preclude it's 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in our build system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree that the warnings are Bad.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The question is -- why do they only show up in gcc 4.1?  More 
</span><br>
<span class="quotelev2">&gt;&gt; specifically -- why do they *not* show up in other versions of gcc?  
</span><br>
<span class="quotelev2">&gt;&gt; Is it a gcc 4.1 compiler bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Older GCC weren't as strict about aliasing issues. Perhaps the latter 
</span><br>
<span class="quotelev1">&gt; ones recognise that in this context (a function call with pointer to 
</span><br>
<span class="quotelev1">&gt; non-local parameter), no optimisation would be possible anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The bad news is that the only work around I have is to insert (void *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; casts between (MPI_TYPENAME) and the address operator, e.g.:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define MPI_COMM_WORLD (((MPI_Comm)(void *)&amp;(ompi_mpi_comm_world)))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  I guess that's plausible, but ugly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, I think it's closer to what you've been arguing above: 
</span><br>
<span class="quotelev1">&gt; you're insisting that the compiler blindly interpret 
</span><br>
<span class="quotelev1">&gt; &amp;ompi_mpi_comm_world as a pointer to some memory that really is 
</span><br>
<span class="quotelev1">&gt; equivalent to the other unknown type communicator_t. Without the 
</span><br>
<span class="quotelev1">&gt; intermediate (void *), you're suggesting the compiler could possibly 
</span><br>
<span class="quotelev1">&gt; do better optimization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ultimately, for internal use, the (void *) is bad, but from client 
</span><br>
<span class="quotelev1">&gt; code with no knowledge of your types, it should be mandatory and tells 
</span><br>
<span class="quotelev1">&gt; the compiler to make no assumptions about aliasing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An alternative might be to make the full type definition available by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #including some of the internal developer headers such as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/communicator/communicator.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what the right solution is, but that is not attractive.  
</span><br>
<span class="quotelev2">&gt;&gt; :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Completely agree (on both points!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In summary, I still don't see why holding pointers to opaque types is 
</span><br>
<span class="quotelev1">&gt; not ABI-compatible, and would suggest the (void *) compiler hint in 
</span><br>
<span class="quotelev1">&gt; the meantime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Just to re-iterate what I said above holding pointers to opaque types 
<br>
would be ABI-compatible.  However, in C you cannot initialize a global 
<br>
pointer with a non-compile-time constant.  Unfortunately, the MPI 
<br>
specification requires one to be able to assign the opaque handles, like 
<br>
MPI_COMM_WORLD and such, to a global variable.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5867.php">Jeff Squyres: "Re: [OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Previous message:</strong> <a href="5865.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5865.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5883.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
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
