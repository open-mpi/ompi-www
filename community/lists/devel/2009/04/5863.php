<?
$subject_val = "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 08:49:15 2009" -->
<!-- isoreceived="20090424124915" -->
<!-- sent="Fri, 24 Apr 2009 08:49:08 -0400" -->
<!-- isosent="20090424124908" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules" -->
<!-- id="222CB4E7-1E63-4046-AD7F-1F780DEE8E81_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="49F1ABDA.4030109_at_ntlworld.com" -->
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
<strong>Date:</strong> 2009-04-24 08:49:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5864.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5862.php">Number Cruncher: "[OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5862.php">Number Cruncher: "[OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5865.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="5865.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2009, at 8:08 AM, Number Cruncher wrote:
<br>
<p><span class="quotelev1">&gt; Compiler (g++ 4.1.2) output when using optimization (-O2):
</span><br>
<span class="quotelev1">&gt; /opt/cfs/include/openmpi/ompi/mpi/cxx/datatype.h: In constructor
</span><br>
<span class="quotelev1">&gt; &#145;MPI::Datatype::Datatype()&#146;:
</span><br>
<span class="quotelev1">&gt; /opt/cfs/include/openmpi/ompi/mpi/cxx/datatype.h:68: warning:
</span><br>
<span class="quotelev1">&gt; type-punning to incomplete type might break strict-aliasing rules
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>These lines are mostly of the form:
<br>
<p>&nbsp;&nbsp;&nbsp;inline Datatype() : mpi_datatype(MPI_DATATYPE_NULL) { }
<br>
<p>Assumedly the problem is with MPI_DATATYPE_NULL (i.e., MPI_*_NULL for  
<br>
the other types).  More below.
<br>
<p><span class="quotelev1">&gt; Without the C++ bindings, I still get:
</span><br>
<span class="quotelev1">&gt; helloMPI.cpp: In function &#145;int main(int, char**)&#146;:
</span><br>
<span class="quotelev1">&gt; helloMPI.cpp:8: warning: type-punning to incomplete type might break
</span><br>
<span class="quotelev1">&gt; strict-aliasing rules
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The odd thing is that these warnings only seem to appear in gcc 4.1  
<br>
output.  They do not appear in gcc 3.4.6 and 4.4.0 (I don't know if  
<br>
they appear in intermediate versions or not).
<br>
<p><span class="quotelev1">&gt; I've followed the discussion at ompi/communicator/communicator.h and
</span><br>
<span class="quotelev1">&gt; looked at the major changeset at
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/20627">https://svn.open-mpi.org/trac/ompi/changeset/20627</a> .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This was the changeset where we did the ABI fixes -- ensuring that if  
<br>
you compile/link against Open MPI vA.B.C, you will be able to just  
<br>
change your LD_LIBRARY_PATH or replace libmpi.so when upgrading to  
<br>
Open MPI vA.B.x.
<br>
<p>The issue here is surprisingly complex; it took us a long time to come  
<br>
up with the current solution.
<br>
<p>For the purpose of this discussion, assume OMPI vA.B.C is built with  
<br>
shared libraries (libmpi.so and friends), and a user application  
<br>
(hello.c) compiles and links against them.
<br>
<p>As you noted, OMPI's handles are all pointers -- e.g., MPI_Comm is  
<br>
(ompi_communicator_t*).  We purposefully do not include the struct  
<br>
definition of ompi_communicator_t in mpi.h because it's private -- we  
<br>
don't want users to go poking around in there.  But -- to make a long  
<br>
story short -- the linker will embed the length of the  
<br>
ompi_communicator_t in the hello executable.  Among other reasons,  
<br>
it's so that pointer math can be computed properly.  However, let's  
<br>
assume the user upgrades to OMPI vA.B.(C+1) in place, meaning that  
<br>
libmpi.so is replaced with a new version.  If we've changed the back- 
<br>
end ompi_communicator_t struct (e.g., added a member), then the size  
<br>
that is included in the hello executable no longer matches the size  
<br>
that is in libmpi.so -- and Bad Things can (and do) happen.
<br>
<p>Hence, the solution of r20627: make a &quot;dummy&quot; type that is guaranteed  
<br>
to be larger than ompi_communicator_t --  
<br>
ompi_predefined_communicator_t.  It's actually a struct that  
<br>
*contains* ompi_communicator_t and then a fixed amount of padding at  
<br>
the end.  Since MPI_COMM_WORLD will always be this  
<br>
ompi_predefined_communicator_t, we can ensure that its size stays  
<br>
constant, even if the size of ompi_communicator_t changes.  Hence, the  
<br>
size in the hello executable and libmpi.so will be the same.  Happiness.
<br>
<p>Additionally, casing the MPI_COMM_WORLD instance (in the back end: a  
<br>
variable instance named ompi_mpi_comm_world) from  
<br>
ompi_predefined_communicator_t to ompi_communicator_t is valid,  
<br>
because the first bytes in the struct *are* the same type -- a poor  
<br>
man's C++ inheritance system, per se (or simply using the correct  
<br>
_predefined struct member).
<br>
<p>Note that as you can probably guess from the struct names, this *only*  
<br>
affects the MPI pre-defined handles (e.g., MPI_COMM_WORLD).  It does  
<br>
not affect user-defined communicators.  Hence, pre-defined handles  
<br>
take up some extra padding space at the end, but user-defined  
<br>
communicators do not.
<br>
<p>That's the rationale for why we did what we did.
<br>
<p><span class="quotelev1">&gt; The problem is that, with optimization enabled, the compiler can  
</span><br>
<span class="quotelev1">&gt; assume
</span><br>
<span class="quotelev1">&gt; that &quot;an object of one type is assumed never to reside at the same
</span><br>
<span class="quotelev1">&gt; address as an object of a different type, unless the types are almost
</span><br>
<span class="quotelev1">&gt; the same&quot; (gcc info page). In this case ompi_predefined_*_t are not
</span><br>
<span class="quotelev1">&gt; fully defined by the time the C++ compiler expands the macro
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD to:
</span><br>
<span class="quotelev1">&gt; ((ompi_communicator_t *)&amp;(ompi_mpi_comm_world))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Per above, this was intentional.  Hope my explanations made sense.
<br>
<p><span class="quotelev1">&gt; The compiler complains because ompi_mpi_comm_world is declared as an
</span><br>
<span class="quotelev1">&gt; &quot;extern struct ompi_predefined_communicator_t&quot; but the type is
</span><br>
<span class="quotelev1">&gt; incomplete, so it can't tell whether the cast is a permissible
</span><br>
<span class="quotelev1">&gt; almost-the-same type pun (e.g. an &quot;int&quot; can alias an &quot;unsigned&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this is potentially a serious performance issue for anyone  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt; OpenMPI in a C++ environment, and the profuse warnings preclude it's  
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev1">&gt; in our build system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I agree that the warnings are Bad.
<br>
<p>The question is -- why do they only show up in gcc 4.1?  More  
<br>
specifically -- why do they *not* show up in other versions of gcc?   
<br>
Is it a gcc 4.1 compiler bug?
<br>
<p><span class="quotelev1">&gt; The bad news is that the only work around I have is to insert (void *)
</span><br>
<span class="quotelev1">&gt; casts between (MPI_TYPENAME) and the address operator, e.g.:
</span><br>
<span class="quotelev1">&gt; #define MPI_COMM_WORLD (((MPI_Comm)(void *)&amp;(ompi_mpi_comm_world)))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hmm.  I guess that's plausible, but ugly.
<br>
<p><span class="quotelev1">&gt; An alternative might be to make the full type definition available by
</span><br>
<span class="quotelev1">&gt; #including some of the internal developer headers such as
</span><br>
<span class="quotelev1">&gt; ompi/communicator/communicator.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I'm not sure what the right solution is, but that is not  
<br>
attractive.  :-)
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
<li><strong>Next message:</strong> <a href="5864.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5862.php">Number Cruncher: "[OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5862.php">Number Cruncher: "[OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5865.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="5865.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
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
