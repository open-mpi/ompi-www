<?
$subject_val = "Re: [OMPI devel] LOCK_SHARED?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 07:42:12 2009" -->
<!-- isoreceived="20090105124212" -->
<!-- sent="Mon, 05 Jan 2009 07:42:06 -0500" -->
<!-- isosent="20090105124206" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] LOCK_SHARED?" -->
<!-- id="4962001E.7090605_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49617A70.3080909_at_sun.com" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 07:42:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5091.php">Jeff Squyres: "[OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Previous message:</strong> <a href="5089.php">Jim Langston: "[OMPI devel] LOCK_SHARED?"</a>
<li><strong>In reply to:</strong> <a href="5089.php">Jim Langston: "[OMPI devel] LOCK_SHARED?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5099.php">Jim Langston: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>Reply:</strong> <a href="5099.php">Jim Langston: "Re: [OMPI devel] LOCK_SHARED?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jim:
<br>
Yes, we ran into this also and your diagnosis is correct.  The details 
<br>
are in this ticket.
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1477">https://svn.open-mpi.org/trac/ompi/ticket/1477</a>
<br>
<p>We fixed it in the trunk and in the 1.3 series but we never backported 
<br>
it to the 1.2 series
<br>
as 1.3 was going to be released &quot;really soon&quot;.  Here is the ticket for 
<br>
moving the fix
<br>
into the 1.3 series.
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1494">https://svn.open-mpi.org/trac/ompi/ticket/1494</a>
<br>
<p>Send me an email offline and we can figure out how to fix this for your 
<br>
case.
<br>
<p>Rolf
<br>
<p><p>Jim Langston wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quick question, I'm compiling 1.2.9rc1 and get an error during 
</span><br>
<span class="quotelev1">&gt; compilation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //////////////////
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source='mpicxx.cc' object='mpicxx.lo' libtool=yes \
</span><br>
<span class="quotelev1">&gt;    DEPDIR=.deps depmode=none /bin/sh ../../../config/depcomp \
</span><br>
<span class="quotelev1">&gt;    /bin/sh ../../../libtool --tag=CXX   --mode=compile 
</span><br>
<span class="quotelev1">&gt; /export/home/langston/COMPILER/SUNWspro/bin/CC -DHAVE_CONFIG_H -I. 
</span><br>
<span class="quotelev1">&gt; -I../../../opal/include -I../../../orte/include 
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/include  -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 
</span><br>
<span class="quotelev1">&gt; -DOMPI_SKIP_MPICXX=1 -I../../..    -O -DNDEBUG  -mt -c -o mpicxx.lo 
</span><br>
<span class="quotelev1">&gt; mpicxx.cc
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /export/home/langston/COMPILER/SUNWspro/bin/CC 
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include 
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/include -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 
</span><br>
<span class="quotelev1">&gt; -DOMPI_SKIP_MPICXX=1 -I../../.. -O -DNDEBUG -mt -c mpicxx.cc  -KPIC 
</span><br>
<span class="quotelev1">&gt; -DPIC -o .libs/mpicxx.o
</span><br>
<span class="quotelev1">&gt; &quot;mpicxx.cc&quot;, line 293: Error: A declaration does not specify a tag or 
</span><br>
<span class="quotelev1">&gt; an identifier.
</span><br>
<span class="quotelev1">&gt; &quot;mpicxx.cc&quot;, line 293: Error: Use &quot;;&quot; to terminate declarations.
</span><br>
<span class="quotelev1">&gt; &quot;mpicxx.cc&quot;, line 293: Error: A declaration was expected instead of 
</span><br>
<span class="quotelev1">&gt; &quot;0x01&quot;.
</span><br>
<span class="quotelev1">&gt; 3 Error(s) detected.
</span><br>
<span class="quotelev1">&gt; gmake: *** [mpicxx.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ////////////////////////////
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working with OpenSolaris 2008.11 and have found the conflict to be 
</span><br>
<span class="quotelev1">&gt; with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/include/sys/synch.h , which also contains LOCK_SHARED
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Keep the following values in sync with pthread.h */
</span><br>
<span class="quotelev1">&gt; #define LOCK_NORMAL             0x00            /* same as 
</span><br>
<span class="quotelev1">&gt; USYNC_THREAD */
</span><br>
<span class="quotelev1">&gt; #define LOCK_SHARED             0x01            /* same as 
</span><br>
<span class="quotelev1">&gt; USYNC_PROCESS */
</span><br>
<span class="quotelev1">&gt; #define LOCK_ERRORCHECK         0x02            /* error check lock */
</span><br>
<span class="quotelev1">&gt; #define LOCK_RECURSIVE          0x04            /* recursive lock */
</span><br>
<span class="quotelev1">&gt; #define LOCK_PRIO_INHERIT       0x10            /* priority 
</span><br>
<span class="quotelev1">&gt; inheritance lock */
</span><br>
<span class="quotelev1">&gt; #define LOCK_PRIO_PROTECT       0x20            /* priority ceiling 
</span><br>
<span class="quotelev1">&gt; lock */
</span><br>
<span class="quotelev1">&gt; #define LOCK_ROBUST             0x40            /* robust lock */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I comment out the line in the system include file, everything will 
</span><br>
<span class="quotelev1">&gt; finish
</span><br>
<span class="quotelev1">&gt; compiling, or if I comment out the line in mpicxx.cc, everything will 
</span><br>
<span class="quotelev1">&gt; finish
</span><br>
<span class="quotelev1">&gt; compiling.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone else found this issue and/or a workaround?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5091.php">Jeff Squyres: "[OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Previous message:</strong> <a href="5089.php">Jim Langston: "[OMPI devel] LOCK_SHARED?"</a>
<li><strong>In reply to:</strong> <a href="5089.php">Jim Langston: "[OMPI devel] LOCK_SHARED?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5099.php">Jim Langston: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>Reply:</strong> <a href="5099.php">Jim Langston: "Re: [OMPI devel] LOCK_SHARED?"</a>
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
