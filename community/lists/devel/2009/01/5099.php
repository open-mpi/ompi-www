<?
$subject_val = "Re: [OMPI devel] LOCK_SHARED?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 14:23:36 2009" -->
<!-- isoreceived="20090105192336" -->
<!-- sent="Mon, 05 Jan 2009 14:21:38 -0500" -->
<!-- isosent="20090105192138" -->
<!-- name="Jim Langston" -->
<!-- email="Jim.Langston_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] LOCK_SHARED?" -->
<!-- id="49625DC2.4010105_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4962001E.7090605_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI devel] LOCK_SHARED?<br>
<strong>From:</strong> Jim Langston (<em>Jim.Langston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 14:21:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5100.php">Terry Dontje: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>Previous message:</strong> <a href="5098.php">Ralph Castain: "Re: [OMPI devel] problem compiling r20196"</a>
<li><strong>In reply to:</strong> <a href="5090.php">Rolf Vandevaart: "Re: [OMPI devel] LOCK_SHARED?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5100.php">Terry Dontje: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>Reply:</strong> <a href="5100.php">Terry Dontje: "Re: [OMPI devel] LOCK_SHARED?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf,
<br>
<p>Thanks for the pointers, they are very clear and concise. I followed the 
<br>
general
<br>
flow of what was done to fix the issue in 1.3 and did something similar 
<br>
for 1.2.9.
<br>
<p>In mpicxx.cc, I did this change:
<br>
<p>#include &lt;sys/synch.h&gt;
<br>
#ifdef LOCK_SHARED
<br>
&nbsp;&nbsp;&nbsp;static const int ompi_synch_lock_shared = LOCK_SHARED ;
<br>
#undef LOCK_SHARED
<br>
#endif
<br>
const int LOCK_SHARED = MPI_LOCK_SHARED;
<br>
<p>Even though the variable getting set is basically dead code and not 
<br>
necessary,
<br>
my goal is that if someone is looking at the 1.3 notes, they will see 
<br>
what I did. This
<br>
makes OpenMPI happy and the compile continues and chugs along.
<br>
<p>If someone thinks I screwed up OpenMPI , please let me know.
<br>
<p>Thanks,
<br>
<p>Jim
<br>
<p>///////////////////////////////////
<br>
<p><p>Rolf Vandevaart wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jim:
</span><br>
<span class="quotelev1">&gt; Yes, we ran into this also and your diagnosis is correct.  The details 
</span><br>
<span class="quotelev1">&gt; are in this ticket.
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1477">https://svn.open-mpi.org/trac/ompi/ticket/1477</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We fixed it in the trunk and in the 1.3 series but we never backported 
</span><br>
<span class="quotelev1">&gt; it to the 1.2 series
</span><br>
<span class="quotelev1">&gt; as 1.3 was going to be released &quot;really soon&quot;.  Here is the ticket for 
</span><br>
<span class="quotelev1">&gt; moving the fix
</span><br>
<span class="quotelev1">&gt; into the 1.3 series.
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1494">https://svn.open-mpi.org/trac/ompi/ticket/1494</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Send me an email offline and we can figure out how to fix this for 
</span><br>
<span class="quotelev1">&gt; your case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim Langston wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Quick question, I'm compiling 1.2.9rc1 and get an error during 
</span><br>
<span class="quotelev2">&gt;&gt; compilation:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //////////////////
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; source='mpicxx.cc' object='mpicxx.lo' libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt;    DEPDIR=.deps depmode=none /bin/sh ../../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt;    /bin/sh ../../../libtool --tag=CXX   --mode=compile 
</span><br>
<span class="quotelev2">&gt;&gt; /export/home/langston/COMPILER/SUNWspro/bin/CC -DHAVE_CONFIG_H -I. 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../opal/include -I../../../orte/include 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../ompi/include  -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_SKIP_MPICXX=1 -I../../..    -O -DNDEBUG  -mt -c -o mpicxx.lo 
</span><br>
<span class="quotelev2">&gt;&gt; mpicxx.cc
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  /export/home/langston/COMPILER/SUNWspro/bin/CC 
</span><br>
<span class="quotelev2">&gt;&gt; -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include 
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../ompi/include -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_SKIP_MPICXX=1 -I../../.. -O -DNDEBUG -mt -c mpicxx.cc  -KPIC 
</span><br>
<span class="quotelev2">&gt;&gt; -DPIC -o .libs/mpicxx.o
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpicxx.cc&quot;, line 293: Error: A declaration does not specify a tag or 
</span><br>
<span class="quotelev2">&gt;&gt; an identifier.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpicxx.cc&quot;, line 293: Error: Use &quot;;&quot; to terminate declarations.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpicxx.cc&quot;, line 293: Error: A declaration was expected instead of 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0x01&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 3 Error(s) detected.
</span><br>
<span class="quotelev2">&gt;&gt; gmake: *** [mpicxx.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ////////////////////////////
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm working with OpenSolaris 2008.11 and have found the conflict to 
</span><br>
<span class="quotelev2">&gt;&gt; be with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/sys/synch.h , which also contains LOCK_SHARED
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* Keep the following values in sync with pthread.h */
</span><br>
<span class="quotelev2">&gt;&gt; #define LOCK_NORMAL             0x00            /* same as 
</span><br>
<span class="quotelev2">&gt;&gt; USYNC_THREAD */
</span><br>
<span class="quotelev2">&gt;&gt; #define LOCK_SHARED             0x01            /* same as 
</span><br>
<span class="quotelev2">&gt;&gt; USYNC_PROCESS */
</span><br>
<span class="quotelev2">&gt;&gt; #define LOCK_ERRORCHECK         0x02            /* error check lock */
</span><br>
<span class="quotelev2">&gt;&gt; #define LOCK_RECURSIVE          0x04            /* recursive lock */
</span><br>
<span class="quotelev2">&gt;&gt; #define LOCK_PRIO_INHERIT       0x10            /* priority 
</span><br>
<span class="quotelev2">&gt;&gt; inheritance lock */
</span><br>
<span class="quotelev2">&gt;&gt; #define LOCK_PRIO_PROTECT       0x20            /* priority ceiling 
</span><br>
<span class="quotelev2">&gt;&gt; lock */
</span><br>
<span class="quotelev2">&gt;&gt; #define LOCK_ROBUST             0x40            /* robust lock */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ......
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I comment out the line in the system include file, everything will 
</span><br>
<span class="quotelev2">&gt;&gt; finish
</span><br>
<span class="quotelev2">&gt;&gt; compiling, or if I comment out the line in mpicxx.cc, everything will 
</span><br>
<span class="quotelev2">&gt;&gt; finish
</span><br>
<span class="quotelev2">&gt;&gt; compiling.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone else found this issue and/or a workaround?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jim
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
/////////////////////////////////////////////
Jim Langston
Sun Microsystems, Inc.
(877) 854-5583 (AccessLine)
(513) 702-4741 (Cell)
AIM: jl9594
jim.langston_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5100.php">Terry Dontje: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>Previous message:</strong> <a href="5098.php">Ralph Castain: "Re: [OMPI devel] problem compiling r20196"</a>
<li><strong>In reply to:</strong> <a href="5090.php">Rolf Vandevaart: "Re: [OMPI devel] LOCK_SHARED?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5100.php">Terry Dontje: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>Reply:</strong> <a href="5100.php">Terry Dontje: "Re: [OMPI devel] LOCK_SHARED?"</a>
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
