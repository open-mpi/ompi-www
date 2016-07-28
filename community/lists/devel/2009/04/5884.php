<?
$subject_val = "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 07:26:25 2009" -->
<!-- isoreceived="20090427112625" -->
<!-- sent="Mon, 27 Apr 2009 07:25:39 -0400" -->
<!-- isosent="20090427112539" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules" -->
<!-- id="49F59633.6090002_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E68A0F97-40A2-42CC-B540-2988A5A56914_at_cisco.com" -->
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
<strong>Date:</strong> 2009-04-27 07:25:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5885.php">Terry Dontje: "[OMPI devel] vampirtrace on v1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="5883.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5883.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5864.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 24, 2009, at 1:24 PM, Number Cruncher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The goal is admirable and a stalwart of good open source practice which
</span><br>
<span class="quotelev2">&gt;&gt; avoids &quot;DLL-Hell&quot;. However, I simply don't understand how my compiler
</span><br>
<span class="quotelev2">&gt;&gt; can *ever* know the size of your opaque ompi_communicator_t?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not enough of a linker expert to explain why, but before that 
</span><br>
<span class="quotelev1">&gt; commit, the linker did embed the size of ompi_communicator_t into your 
</span><br>
<span class="quotelev1">&gt; executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
The problem is when you compile your application the handles like 
<br>
MPI_COMM_WORLD result in undefined symbols in the .o.  So when you link 
<br>
the application it needs to resolve all those symbols.  In this case it 
<br>
resolves them to what libmpi.so has them defined as which includes 
<br>
location and size.  Since these are accessible by the application the 
<br>
structures are located in bss which means it overrides any other library 
<br>
location of such a variable.  So now we have a handle that size and 
<br>
location is predefined after link time preventing updating either during 
<br>
runtime by linking in a different library.
<br>
<p><p>--td
<br>
<span class="quotelev1">&gt; A simple way to verify this is to do the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - compile and link an MPI &quot;hello world&quot; application against Open MPI 
</span><br>
<span class="quotelev1">&gt; 1.2.x
</span><br>
<span class="quotelev1">&gt; - run the app, verify that it runs properly
</span><br>
<span class="quotelev1">&gt; - change your LD_LIBRARY_PATH and have your &quot;hello world&quot; app find 
</span><br>
<span class="quotelev1">&gt; Open MPI 1.3 / 1.3.1's libmpi.so
</span><br>
<span class="quotelev1">&gt; - run your app
</span><br>
<span class="quotelev1">&gt; - notice a bunch of messages something like the following (off the top 
</span><br>
<span class="quotelev1">&gt; of my head; I don't remember the exact message):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_mpi_comm_world size difference between hello and libmpi.so; 
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it's not the *compiler* that creates the problem -- who, I agree, 
</span><br>
<span class="quotelev1">&gt; does not know the definition of ompi_comnunicator_t.  It's the 
</span><br>
<span class="quotelev1">&gt; *linker*, that knows the *size* of these objects (not necessarily the 
</span><br>
<span class="quotelev1">&gt; definition).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can simulate this problem with a much smaller non-MPI test code, 
</span><br>
<span class="quotelev1">&gt; too.  I'll admit that this problem kind of blind-sided us -- we never 
</span><br>
<span class="quotelev1">&gt; expected it because we initially had the same thoughts that you did: 
</span><br>
<span class="quotelev1">&gt; they're just pointer values that are resolved at run-time; why does 
</span><br>
<span class="quotelev1">&gt; the size of the back-end struct matter?  Unfortunately, it does.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpi.h declares MPI_Comm as a pointer to as-yet-undefined &quot;struct
</span><br>
<span class="quotelev2">&gt;&gt; ompi_communicator_t&quot;, ompi_mpi_comm_world is an external global of
</span><br>
<span class="quotelev2">&gt;&gt; as-yet-undefined &quot;struct ompi_predefined_communicator_t&quot;. Then the
</span><br>
<span class="quotelev2">&gt;&gt; compiler must try and work out whether the &quot;comm_predefined_t *&quot; aliases
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;comm_t *&quot;. This isn't possible without full type information. In
</span><br>
<span class="quotelev2">&gt;&gt; general, only (void *) and (char *) can alias arbitrary types.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cellperformance.com/mike_acton/2006/06/understanding_strict_aliasing.html">http://www.cellperformance.com/mike_acton/2006/06/understanding_strict_aliasing.html</a> 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for an excellent discussion on aliasing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Understood.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hence, the solution of r20627: make a &quot;dummy&quot; type that is 
</span><br>
<span class="quotelev2">&gt;&gt; guaranteed to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; be larger than ompi_communicator_t -- ompi_predefined_communicator_t.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It's actually a struct that *contains* ompi_communicator_t and then a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; fixed amount of padding at the end.  Since MPI_COMM_WORLD will 
</span><br>
<span class="quotelev2">&gt;&gt; always be
</span><br>
<span class="quotelev3">&gt;&gt; &gt; this ompi_predefined_communicator_t, we can ensure that its size stays
</span><br>
<span class="quotelev3">&gt;&gt; &gt; constant, even if the size of ompi_communicator_t changes.  Hence, the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; size in the hello executable and libmpi.so will be the same.  
</span><br>
<span class="quotelev2">&gt;&gt; Happiness.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With respect, this feels a little bit like a hack. Who's to say your
</span><br>
<span class="quotelev2">&gt;&gt; future communicator won't need to be even bigger than the current
</span><br>
<span class="quotelev2">&gt;&gt; padding allows? - and then the assumptions made when linking against the
</span><br>
<span class="quotelev2">&gt;&gt; old predefined_t would no longer apply leading to corruption.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Definitely true.  Here's our rationale:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - As Terry mentioned, MPI requires that you can do stuff like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm foo = MPI_COMM_WORLD;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; before calling MPI_INIT.  This is where much of the evil comes from; 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD has to be a compile-time constant; it can't be a global 
</span><br>
<span class="quotelev1">&gt; variable that is assigned a meaningful value during MPI_INIT (for 
</span><br>
<span class="quotelev1">&gt; example).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The padding is gross, and we could certainly run out of space 
</span><br>
<span class="quotelev1">&gt; someday.  However, this concern is mitigated by three points:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. We tried to give ourselves enough padding that we shouldn't run 
</span><br>
<span class="quotelev1">&gt; out of space (admittedly, we can't predict the future, though, so this 
</span><br>
<span class="quotelev1">&gt; may still fail someday)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   2. We probably didn't spell out the conditions well enough in our 
</span><br>
<span class="quotelev1">&gt; current documentation, but I believe that the ABI guarantees really 
</span><br>
<span class="quotelev1">&gt; only apply to the &quot;stable&quot; series -- e.g., 1.4.x.  However, we know 
</span><br>
<span class="quotelev1">&gt; the features that are going into 1.3.x (which will then morph into the 
</span><br>
<span class="quotelev1">&gt; 1.4.x series), and we don't anticipate changing the sizes of our 
</span><br>
<span class="quotelev1">&gt; structures in 1.3.x and 1.4.x.  1.5.x is a different issue; we don't 
</span><br>
<span class="quotelev1">&gt; know yet if the structs will change size in that series -- and the ABI 
</span><br>
<span class="quotelev1">&gt; is ok to change at 1.5 (it would be nice if it does not, but I don't 
</span><br>
<span class="quotelev1">&gt; know if we've taken a hard-line guarantee that an app compiled for 
</span><br>
<span class="quotelev1">&gt; 1.3.x will work with 1.5.x, for example).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   3. As Terry mentioned, if we do grow beyond the current padding, 
</span><br>
<span class="quotelev1">&gt; there is the gross hack of adding a pointer in the current padding to 
</span><br>
<span class="quotelev1">&gt; point to the rest of the struct.  Gross, yes.  Workable, yes.  It's 
</span><br>
<span class="quotelev1">&gt; our failsafe in case we *have* to increase the size of a struct in the 
</span><br>
<span class="quotelev1">&gt; 1.3/1.4 series, but can't violate the ABI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The question is -- why do they only show up in gcc 4.1?  More
</span><br>
<span class="quotelev3">&gt;&gt; &gt; specifically -- why do they *not* show up in other versions of 
</span><br>
<span class="quotelev2">&gt;&gt; gcc?  Is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it a gcc 4.1 compiler bug?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Older GCC weren't as strict about aliasing issues. Perhaps the latter
</span><br>
<span class="quotelev2">&gt;&gt; ones recognise that in this context (a function call with pointer to
</span><br>
<span class="quotelev2">&gt;&gt; non-local parameter), no optimisation would be possible anyway.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That sounds plausible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; The bad news is that the only work around I have is to insert 
</span><br>
<span class="quotelev2">&gt;&gt; (void *)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; casts between (MPI_TYPENAME) and the address operator, e.g.:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; #define MPI_COMM_WORLD (((MPI_Comm)(void *)&amp;(ompi_mpi_comm_world)))
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hmm.  I guess that's plausible, but ugly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I think it's closer to what you've been arguing above: you're
</span><br>
<span class="quotelev2">&gt;&gt; insisting that the compiler blindly interpret &amp;ompi_mpi_comm_world as a
</span><br>
<span class="quotelev2">&gt;&gt; pointer to some memory that really is equivalent to the other unknown
</span><br>
<span class="quotelev2">&gt;&gt; type communicator_t. Without the intermediate (void *), you're
</span><br>
<span class="quotelev2">&gt;&gt; suggesting the compiler could possibly do better optimization.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ultimately, for internal use, the (void *) is bad, but from client code
</span><br>
<span class="quotelev2">&gt;&gt; with no knowledge of your types, it should be mandatory and tells the
</span><br>
<span class="quotelev2">&gt;&gt; compiler to make no assumptions about aliasing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you're convincing me, but I need to think over this a little 
</span><br>
<span class="quotelev1">&gt; more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if we should have a &quot;smart&quot; #define for MPI_COMM_WORLD that 
</span><br>
<span class="quotelev1">&gt; puts the (void*) in when compiling user codes, and doesn't include it 
</span><br>
<span class="quotelev1">&gt; when building OMPI itself (i.e., so that we can get the debugging 
</span><br>
<span class="quotelev1">&gt; benefit of proper type checking when building OMPI).  We do have the 
</span><br>
<span class="quotelev1">&gt; OMPI_BUILDING macro in opal_config_bottom.h that could be used to 
</span><br>
<span class="quotelev1">&gt; switch the macro definition.  Hrm...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5885.php">Terry Dontje: "[OMPI devel] vampirtrace on v1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="5883.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5883.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5864.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
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
