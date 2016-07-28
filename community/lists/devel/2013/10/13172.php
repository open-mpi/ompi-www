<?
$subject_val = "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 22:31:44 2013" -->
<!-- isoreceived="20131031023144" -->
<!-- sent="Wed, 30 Oct 2013 19:31:26 -0700" -->
<!-- isosent="20131031023126" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN" -->
<!-- id="60520DB0-545F-4B1E-98DD-D0D0FDFA6E85_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A5BCF98_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 22:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13173.php">Rolf vandeVaart: "[OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>Previous message:</strong> <a href="13171.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<li><strong>In reply to:</strong> <a href="13171.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl - thanks!
<br>
<p>On Oct 30, 2013, at 7:06 PM, Hjelm, Nathan T &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Found it. Not sure why this didn't come up during testing. Fixed in r29576.
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden]] on behalf of Hjelm, Nathan T [hjelmn_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, October 30, 2013 8:03 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, looks like I must have missed something. Will look into it now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, October 30, 2013 7:31 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm seeing warnings on the trunk that something isn't defined when building on Linux:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In file included from ../../../opal/threads/mutex_unix.h:49,
</span><br>
<span class="quotelev1">&gt;                 from ../../../opal/threads/mutex.h:113,
</span><br>
<span class="quotelev1">&gt;                 from ../../../opal/class/opal_pointer_array.h:37,
</span><br>
<span class="quotelev1">&gt;                 from ../../../opal/mca/event/event.h:28,
</span><br>
<span class="quotelev1">&gt;                 from orterun.c:61:
</span><br>
<span class="quotelev1">&gt; ../../../opal/include/opal/sys/atomic.h:166:29: warning: &quot;OMPI_OSX_BUILTIN&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from ../../opal/class/opal_list.h:75,
</span><br>
<span class="quotelev1">&gt;                 from ../../opal/mca/base/base.h:29,
</span><br>
<span class="quotelev1">&gt;                 from ../../ompi/mca/topo/topo.h:26,
</span><br>
<span class="quotelev1">&gt;                 from ompi_debugger_canary.c:17:
</span><br>
<span class="quotelev1">&gt; ../../opal/include/opal/sys/atomic.h:166:29: warning: &quot;OMPI_OSX_BUILTIN&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from ../../opal/class/opal_list.h:75,
</span><br>
<span class="quotelev1">&gt;                 from ../../opal/mca/base/base.h:29,
</span><br>
<span class="quotelev1">&gt;                 from ompi_debuggers.c:49:
</span><br>
<span class="quotelev1">&gt; ../../opal/include/opal/sys/atomic.h:166:29: warning: &quot;OMPI_OSX_BUILTIN&quot; is not defined
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Searching the code base, the only place I can find OMPI_OSX_BUILTIN is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./opal/include/opal/sys/atomic.h:166:#elif OPAL_ASSEMBLY_ARCH == OMPI_OSX_BUILTIN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks to me like something is missing!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13173.php">Rolf vandeVaart: "[OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>Previous message:</strong> <a href="13171.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<li><strong>In reply to:</strong> <a href="13171.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
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
