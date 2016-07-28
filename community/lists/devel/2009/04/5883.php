<?
$subject_val = "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 26 09:07:14 2009" -->
<!-- isoreceived="20090426130714" -->
<!-- sent="Sun, 26 Apr 2009 09:07:08 -0400" -->
<!-- isosent="20090426130708" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules" -->
<!-- id="E68A0F97-40A2-42CC-B540-2988A5A56914_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-26 09:07:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5884.php">Terry Dontje: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5882.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5865.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5884.php">Terry Dontje: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="5884.php">Terry Dontje: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2009, at 1:24 PM, Number Cruncher wrote:
<br>
<p><span class="quotelev1">&gt; The goal is admirable and a stalwart of good open source practice  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; avoids &quot;DLL-Hell&quot;. However, I simply don't understand how my compiler
</span><br>
<span class="quotelev1">&gt; can *ever* know the size of your opaque ompi_communicator_t?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm not enough of a linker expert to explain why, but before that  
<br>
commit, the linker did embed the size of ompi_communicator_t into your  
<br>
executable.
<br>
<p>A simple way to verify this is to do the following:
<br>
<p>- compile and link an MPI &quot;hello world&quot; application against Open MPI  
<br>
1.2.x
<br>
- run the app, verify that it runs properly
<br>
- change your LD_LIBRARY_PATH and have your &quot;hello world&quot; app find  
<br>
Open MPI 1.3 / 1.3.1's libmpi.so
<br>
- run your app
<br>
- notice a bunch of messages something like the following (off the top  
<br>
of my head; I don't remember the exact message):
<br>
<p>ompi_mpi_comm_world size difference between hello and libmpi.so;  
<br>
consider re-linking
<br>
<p>So it's not the *compiler* that creates the problem -- who, I agree,  
<br>
does not know the definition of ompi_comnunicator_t.  It's the  
<br>
*linker*, that knows the *size* of these objects (not necessarily the  
<br>
definition).
<br>
<p>You can simulate this problem with a much smaller non-MPI test code,  
<br>
too.  I'll admit that this problem kind of blind-sided us -- we never  
<br>
expected it because we initially had the same thoughts that you did:  
<br>
they're just pointer values that are resolved at run-time; why does  
<br>
the size of the back-end struct matter?  Unfortunately, it does.  :-(
<br>
<p><span class="quotelev1">&gt; mpi.h declares MPI_Comm as a pointer to as-yet-undefined &quot;struct
</span><br>
<span class="quotelev1">&gt; ompi_communicator_t&quot;, ompi_mpi_comm_world is an external global of
</span><br>
<span class="quotelev1">&gt; as-yet-undefined &quot;struct ompi_predefined_communicator_t&quot;. Then the
</span><br>
<span class="quotelev1">&gt; compiler must try and work out whether the &quot;comm_predefined_t *&quot;  
</span><br>
<span class="quotelev1">&gt; aliases
</span><br>
<span class="quotelev1">&gt; the &quot;comm_t *&quot;. This isn't possible without full type information. In
</span><br>
<span class="quotelev1">&gt; general, only (void *) and (char *) can alias arbitrary types.
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
<p>Understood.
<br>
<p><span class="quotelev2">&gt; &gt; Hence, the solution of r20627: make a &quot;dummy&quot; type that is  
</span><br>
<span class="quotelev1">&gt; guaranteed to
</span><br>
<span class="quotelev2">&gt; &gt; be larger than ompi_communicator_t --  
</span><br>
<span class="quotelev1">&gt; ompi_predefined_communicator_t.
</span><br>
<span class="quotelev2">&gt; &gt; It's actually a struct that *contains* ompi_communicator_t and  
</span><br>
<span class="quotelev1">&gt; then a
</span><br>
<span class="quotelev2">&gt; &gt; fixed amount of padding at the end.  Since MPI_COMM_WORLD will  
</span><br>
<span class="quotelev1">&gt; always be
</span><br>
<span class="quotelev2">&gt; &gt; this ompi_predefined_communicator_t, we can ensure that its size  
</span><br>
<span class="quotelev1">&gt; stays
</span><br>
<span class="quotelev2">&gt; &gt; constant, even if the size of ompi_communicator_t changes.  Hence,  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; size in the hello executable and libmpi.so will be the same.   
</span><br>
<span class="quotelev1">&gt; Happiness.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With respect, this feels a little bit like a hack. Who's to say your
</span><br>
<span class="quotelev1">&gt; future communicator won't need to be even bigger than the current
</span><br>
<span class="quotelev1">&gt; padding allows? - and then the assumptions made when linking against  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; old predefined_t would no longer apply leading to corruption.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Definitely true.  Here's our rationale:
<br>
<p>- As Terry mentioned, MPI requires that you can do stuff like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm foo = MPI_COMM_WORLD;
<br>
<p>before calling MPI_INIT.  This is where much of the evil comes from;  
<br>
MPI_COMM_WORLD has to be a compile-time constant; it can't be a global  
<br>
variable that is assigned a meaningful value during MPI_INIT (for  
<br>
example).
<br>
<p>- The padding is gross, and we could certainly run out of space  
<br>
someday.  However, this concern is mitigated by three points:
<br>
<p>&nbsp;&nbsp;&nbsp;1. We tried to give ourselves enough padding that we shouldn't run  
<br>
out of space (admittedly, we can't predict the future, though, so this  
<br>
may still fail someday)
<br>
<p>&nbsp;&nbsp;&nbsp;2. We probably didn't spell out the conditions well enough in our  
<br>
current documentation, but I believe that the ABI guarantees really  
<br>
only apply to the &quot;stable&quot; series -- e.g., 1.4.x.  However, we know  
<br>
the features that are going into 1.3.x (which will then morph into the  
<br>
1.4.x series), and we don't anticipate changing the sizes of our  
<br>
structures in 1.3.x and 1.4.x.  1.5.x is a different issue; we don't  
<br>
know yet if the structs will change size in that series -- and the ABI  
<br>
is ok to change at 1.5 (it would be nice if it does not, but I don't  
<br>
know if we've taken a hard-line guarantee that an app compiled for  
<br>
1.3.x will work with 1.5.x, for example).
<br>
<p>&nbsp;&nbsp;&nbsp;3. As Terry mentioned, if we do grow beyond the current padding,  
<br>
there is the gross hack of adding a pointer in the current padding to  
<br>
point to the rest of the struct.  Gross, yes.  Workable, yes.  It's  
<br>
our failsafe in case we *have* to increase the size of a struct in the  
<br>
1.3/1.4 series, but can't violate the ABI.
<br>
<p><span class="quotelev2">&gt; &gt; The question is -- why do they only show up in gcc 4.1?  More
</span><br>
<span class="quotelev2">&gt; &gt; specifically -- why do they *not* show up in other versions of  
</span><br>
<span class="quotelev1">&gt; gcc?  Is
</span><br>
<span class="quotelev2">&gt; &gt; it a gcc 4.1 compiler bug?
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
<p>That sounds plausible.
<br>
<p><span class="quotelev3">&gt; &gt;&gt; The bad news is that the only work around I have is to insert  
</span><br>
<span class="quotelev1">&gt; (void *)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; casts between (MPI_TYPENAME) and the address operator, e.g.:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #define MPI_COMM_WORLD (((MPI_Comm)(void *)&amp;(ompi_mpi_comm_world)))
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmm.  I guess that's plausible, but ugly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, I think it's closer to what you've been arguing above:  
</span><br>
<span class="quotelev1">&gt; you're
</span><br>
<span class="quotelev1">&gt; insisting that the compiler blindly interpret &amp;ompi_mpi_comm_world  
</span><br>
<span class="quotelev1">&gt; as a
</span><br>
<span class="quotelev1">&gt; pointer to some memory that really is equivalent to the other unknown
</span><br>
<span class="quotelev1">&gt; type communicator_t. Without the intermediate (void *), you're
</span><br>
<span class="quotelev1">&gt; suggesting the compiler could possibly do better optimization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ultimately, for internal use, the (void *) is bad, but from client  
</span><br>
<span class="quotelev1">&gt; code
</span><br>
<span class="quotelev1">&gt; with no knowledge of your types, it should be mandatory and tells the
</span><br>
<span class="quotelev1">&gt; compiler to make no assumptions about aliasing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think you're convincing me, but I need to think over this a little  
<br>
more.
<br>
<p>I wonder if we should have a &quot;smart&quot; #define for MPI_COMM_WORLD that  
<br>
puts the (void*) in when compiling user codes, and doesn't include it  
<br>
when building OMPI itself (i.e., so that we can get the debugging  
<br>
benefit of proper type checking when building OMPI).  We do have the  
<br>
OMPI_BUILDING macro in opal_config_bottom.h that could be used to  
<br>
switch the macro definition.  Hrm...
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
<li><strong>Next message:</strong> <a href="5884.php">Terry Dontje: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5882.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5865.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5884.php">Terry Dontje: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="5884.php">Terry Dontje: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
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
