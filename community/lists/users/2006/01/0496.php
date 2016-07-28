<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 10 08:14:51 2006" -->
<!-- isoreceived="20060110131451" -->
<!-- sent="Tue, 10 Jan 2006 08:14:44 -0500" -->
<!-- isosent="20060110131444" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] building  openmpi1.0.1 on cygwin" -->
<!-- id="183D0F2E-2DB6-4F62-81BC-0953F75CF615_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="01c001c60953$19868660$c200a8c0_at_Maple" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-10 08:14:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0497.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0495.php">Daryl W. Grunau: "[O-MPI users] ompi spec file"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0452.php">psksvp: "[O-MPI users] building  openmpi1.0.1 on cygwin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like this message slipped by us -- sorry!
<br>
<p>Open MPI does not yet support cygwin.  The 1.0 series is essentially  
<br>
restricted to bug fixes only, so it is unlikely that cygwin support  
<br>
will be included there.
<br>
<p>However, work is ongoing in the trunk for cygwin support.  You might  
<br>
want to try one of the nightly trunk tarballs and see if that works  
<br>
for you.
<br>
<p><p>On Dec 25, 2005, at 7:59 AM, psksvp wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; Does openmpi support cygwin? I am trying to build on cygwin, but  
</span><br>
<span class="quotelev1">&gt; got the
</span><br>
<span class="quotelev1">&gt; following errors. I wonder if someone has tried to build on cygwin  
</span><br>
<span class="quotelev1">&gt; and know
</span><br>
<span class="quotelev1">&gt; how to solve this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; psksvp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I../../../openmpi-1.0.1/./opal/util - 
</span><br>
<span class="quotelev1">&gt; I../../include
</span><br>
<span class="quotelev1">&gt;  -I../../include -DOMPI_PKGDATADIR=\&quot;/usr/local/share/openmpi\&quot; - 
</span><br>
<span class="quotelev1">&gt; I../../../openmpi-1.0.1/./include
</span><br>
<span class="quotelev1">&gt;  -I../../../openmpi-1.0.1/. -I../.. -I../../include -I../../../ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.1/./opal
</span><br>
<span class="quotelev1">&gt;  -I../../../openmpi-1.0.1/./orte -I../../../openmpi-1.0.1/./ompi - 
</span><br>
<span class="quotelev1">&gt; D_REENTRANT
</span><br>
<span class="quotelev1">&gt;  -O3 -DNDEBUG -fno-strict-aliasing -MT stacktrace.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; .deps/stacktrace.Tpo -c
</span><br>
<span class="quotelev1">&gt; ./../../openmpi-1.0.1/./opal/util/stacktrace.c  -DPIC -o .libs/ 
</span><br>
<span class="quotelev1">&gt; stacktrace.o
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.0.1/./opal/util/stacktrace.c: In function
</span><br>
<span class="quotelev1">&gt; `opal_show_stackframe':
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.0.1/./opal/util/stacktrace.c:202: error: `POLL_IN'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.0.1/./opal/util/stacktrace.c:202: error: (Each  
</span><br>
<span class="quotelev1">&gt; undeclared
</span><br>
<span class="quotelev1">&gt; identifier is reported only once
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.0.1/./opal/util/stacktrace.c:202: error: for each
</span><br>
<span class="quotelev1">&gt; function it appears in.)
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.0.1/./opal/util/stacktrace.c:203: error: `POLL_OUT'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.0.1/./opal/util/stacktrace.c:204: error: `POLL_MSG'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.0.1/./opal/util/stacktrace.c:205: error: `POLL_ERR'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.0.1/./opal/util/stacktrace.c:206: error: `POLL_PRI'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.0.1/./opal/util/stacktrace.c:207: error: `POLL_HUP'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.0.1/./opal/util/stacktrace.c:267: error:  
</span><br>
<span class="quotelev1">&gt; structure has no
</span><br>
<span class="quotelev1">&gt; member named `si_band'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [stacktrace.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/cygdrive/c/home/devbin/obj/opal/util'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/cygdrive/c/home/devbin/obj/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0497.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0495.php">Daryl W. Grunau: "[O-MPI users] ompi spec file"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0452.php">psksvp: "[O-MPI users] building  openmpi1.0.1 on cygwin"</a>
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
