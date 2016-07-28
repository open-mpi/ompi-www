<?
$subject_val = "Re: [OMPI devel] LOCK_SHARED?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 15:00:23 2009" -->
<!-- isoreceived="20090105200023" -->
<!-- sent="Mon, 05 Jan 2009 15:00:15 -0500" -->
<!-- isosent="20090105200015" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] LOCK_SHARED?" -->
<!-- id="496266CF.2060107_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49625DC2.4010105_at_sun.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 15:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5101.php">Thomas Ropars: "Re: [OMPI devel] problem compiling r20196"</a>
<li><strong>Previous message:</strong> <a href="5099.php">Jim Langston: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>In reply to:</strong> <a href="5099.php">Jim Langston: "Re: [OMPI devel] LOCK_SHARED?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jim Langston wrote:
<br>
<span class="quotelev1">&gt; Hi Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the pointers, they are very clear and concise. I followed 
</span><br>
<span class="quotelev1">&gt; the general
</span><br>
<span class="quotelev1">&gt; flow of what was done to fix the issue in 1.3 and did something 
</span><br>
<span class="quotelev1">&gt; similar for 1.2.9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In mpicxx.cc, I did this change:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/synch.h&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef LOCK_SHARED
</span><br>
<span class="quotelev1">&gt;   static const int ompi_synch_lock_shared = LOCK_SHARED ;
</span><br>
<span class="quotelev1">&gt; #undef LOCK_SHARED
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; const int LOCK_SHARED = MPI_LOCK_SHARED;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even though the variable getting set is basically dead code and not 
</span><br>
<span class="quotelev1">&gt; necessary,
</span><br>
<span class="quotelev1">&gt; my goal is that if someone is looking at the 1.3 notes, they will see 
</span><br>
<span class="quotelev1">&gt; what I did. This
</span><br>
<span class="quotelev1">&gt; makes OpenMPI happy and the compile continues and chugs along.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If someone thinks I screwed up OpenMPI , please let me know.
</span><br>
For a one off change for usage with Solaris and Sun Studio I think the 
<br>
above is fine.  However, for a general fix that would not break builds 
<br>
for other platforms you'd really want to pull over the other handful of 
<br>
lines.    It probably wouldn't be that bad to just CMR the changes to 
<br>
the 1.2 branch.  When the original changes to the trunk and 1.3 happened 
<br>
I really didn't think there were going to be more changes to the 1.2 
<br>
branch at the time which is why we opted not to CMR it at the time.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ///////////////////////////////////
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf Vandevaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jim:
</span><br>
<span class="quotelev2">&gt;&gt; Yes, we ran into this also and your diagnosis is correct.  The 
</span><br>
<span class="quotelev2">&gt;&gt; details are in this ticket.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1477">https://svn.open-mpi.org/trac/ompi/ticket/1477</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We fixed it in the trunk and in the 1.3 series but we never 
</span><br>
<span class="quotelev2">&gt;&gt; backported it to the 1.2 series
</span><br>
<span class="quotelev2">&gt;&gt; as 1.3 was going to be released &quot;really soon&quot;.  Here is the ticket 
</span><br>
<span class="quotelev2">&gt;&gt; for moving the fix
</span><br>
<span class="quotelev2">&gt;&gt; into the 1.3 series.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1494">https://svn.open-mpi.org/trac/ompi/ticket/1494</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Send me an email offline and we can figure out how to fix this for 
</span><br>
<span class="quotelev2">&gt;&gt; your case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jim Langston wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Quick question, I'm compiling 1.2.9rc1 and get an error during 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //////////////////
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source='mpicxx.cc' object='mpicxx.lo' libtool=yes \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    DEPDIR=.deps depmode=none /bin/sh ../../../config/depcomp \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /bin/sh ../../../libtool --tag=CXX   --mode=compile 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export/home/langston/COMPILER/SUNWspro/bin/CC -DHAVE_CONFIG_H -I. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../../opal/include -I../../../orte/include 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../../ompi/include  -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DOMPI_SKIP_MPICXX=1 -I../../..    -O -DNDEBUG  -mt -c -o mpicxx.lo 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicxx.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile:  /export/home/langston/COMPILER/SUNWspro/bin/CC 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../../ompi/include -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DOMPI_SKIP_MPICXX=1 -I../../.. -O -DNDEBUG -mt -c mpicxx.cc  -KPIC 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -DPIC -o .libs/mpicxx.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpicxx.cc&quot;, line 293: Error: A declaration does not specify a tag 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or an identifier.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpicxx.cc&quot;, line 293: Error: Use &quot;;&quot; to terminate declarations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpicxx.cc&quot;, line 293: Error: A declaration was expected instead of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;0x01&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 Error(s) detected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gmake: *** [mpicxx.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ////////////////////////////
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm working with OpenSolaris 2008.11 and have found the conflict to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/sys/synch.h , which also contains LOCK_SHARED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* Keep the following values in sync with pthread.h */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define LOCK_NORMAL             0x00            /* same as 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; USYNC_THREAD */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define LOCK_SHARED             0x01            /* same as 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; USYNC_PROCESS */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define LOCK_ERRORCHECK         0x02            /* error check lock */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define LOCK_RECURSIVE          0x04            /* recursive lock */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define LOCK_PRIO_INHERIT       0x10            /* priority 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inheritance lock */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define LOCK_PRIO_PROTECT       0x20            /* priority ceiling 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lock */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define LOCK_ROBUST             0x40            /* robust lock */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ......
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I comment out the line in the system include file, everything 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will finish
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiling, or if I comment out the line in mpicxx.cc, everything 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will finish
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiling.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone else found this issue and/or a workaround?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jim
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5101.php">Thomas Ropars: "Re: [OMPI devel] problem compiling r20196"</a>
<li><strong>Previous message:</strong> <a href="5099.php">Jim Langston: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>In reply to:</strong> <a href="5099.php">Jim Langston: "Re: [OMPI devel] LOCK_SHARED?"</a>
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
