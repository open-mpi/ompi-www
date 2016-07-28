<?
$subject_val = "[OMPI devel] LOCK_SHARED?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan  4 22:13:32 2009" -->
<!-- isoreceived="20090105031332" -->
<!-- sent="Sun, 04 Jan 2009 22:11:44 -0500" -->
<!-- isosent="20090105031144" -->
<!-- name="Jim Langston" -->
<!-- email="Jim.Langston_at_[hidden]" -->
<!-- subject="[OMPI devel] LOCK_SHARED?" -->
<!-- id="49617A70.3080909_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] LOCK_SHARED?<br>
<strong>From:</strong> Jim Langston (<em>Jim.Langston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-04 22:11:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5090.php">Rolf Vandevaart: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5088.php">Jeff Squyres: "[OMPI devel] ohloh.net and CIA.vc stats"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5090.php">Rolf Vandevaart: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>Reply:</strong> <a href="5090.php">Rolf Vandevaart: "Re: [OMPI devel] LOCK_SHARED?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Quick question, I'm compiling 1.2.9rc1 and get an error during compilation:
<br>
<p>//////////////////
<br>
<p><p>source='mpicxx.cc' object='mpicxx.lo' libtool=yes \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../config/depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../libtool --tag=CXX   --mode=compile 
<br>
/export/home/langston/COMPILER/SUNWspro/bin/CC -DHAVE_CONFIG_H -I. 
<br>
-I../../../opal/include -I../../../orte/include -I../../../ompi/include  
<br>
-DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 -DOMPI_SKIP_MPICXX=1 
<br>
-I../../..    -O -DNDEBUG  -mt -c -o mpicxx.lo mpicxx.cc
<br>
libtool: compile:  /export/home/langston/COMPILER/SUNWspro/bin/CC 
<br>
-DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include 
<br>
-I../../../ompi/include -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 
<br>
-DOMPI_SKIP_MPICXX=1 -I../../.. -O -DNDEBUG -mt -c mpicxx.cc  -KPIC 
<br>
-DPIC -o .libs/mpicxx.o
<br>
&quot;mpicxx.cc&quot;, line 293: Error: A declaration does not specify a tag or an 
<br>
identifier.
<br>
&quot;mpicxx.cc&quot;, line 293: Error: Use &quot;;&quot; to terminate declarations.
<br>
&quot;mpicxx.cc&quot;, line 293: Error: A declaration was expected instead of &quot;0x01&quot;.
<br>
3 Error(s) detected.
<br>
gmake: *** [mpicxx.lo] Error 1
<br>
<p>////////////////////////////
<br>
<p>I'm working with OpenSolaris 2008.11 and have found the conflict to be with:
<br>
<p>/usr/include/sys/synch.h , which also contains LOCK_SHARED
<br>
....
<br>
<p>/* Keep the following values in sync with pthread.h */
<br>
#define LOCK_NORMAL             0x00            /* same as USYNC_THREAD */
<br>
#define LOCK_SHARED             0x01            /* same as USYNC_PROCESS */
<br>
#define LOCK_ERRORCHECK         0x02            /* error check lock */
<br>
#define LOCK_RECURSIVE          0x04            /* recursive lock */
<br>
#define LOCK_PRIO_INHERIT       0x10            /* priority inheritance 
<br>
lock */
<br>
#define LOCK_PRIO_PROTECT       0x20            /* priority ceiling lock */
<br>
#define LOCK_ROBUST             0x40            /* robust lock */
<br>
<p>......
<br>
<p>If I comment out the line in the system include file, everything will finish
<br>
compiling, or if I comment out the line in mpicxx.cc, everything will finish
<br>
compiling.
<br>
<p>Has anyone else found this issue and/or a workaround?
<br>
<p>Thanks,
<br>
<p>Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5090.php">Rolf Vandevaart: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5088.php">Jeff Squyres: "[OMPI devel] ohloh.net and CIA.vc stats"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5090.php">Rolf Vandevaart: "Re: [OMPI devel] LOCK_SHARED?"</a>
<li><strong>Reply:</strong> <a href="5090.php">Rolf Vandevaart: "Re: [OMPI devel] LOCK_SHARED?"</a>
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
