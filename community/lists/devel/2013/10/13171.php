<?
$subject_val = "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 22:06:50 2013" -->
<!-- isoreceived="20131031020650" -->
<!-- sent="Thu, 31 Oct 2013 02:06:47 +0000" -->
<!-- isosent="20131031020647" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A5BCF98_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A5BCF81_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 22:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13172.php">Ralph Castain: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<li><strong>Previous message:</strong> <a href="13170.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<li><strong>In reply to:</strong> <a href="13170.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13172.php">Ralph Castain: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<li><strong>Reply:</strong> <a href="13172.php">Ralph Castain: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Found it. Not sure why this didn't come up during testing. Fixed in r29576.
<br>
________________________________________
<br>
From: devel [devel-bounces_at_[hidden]] on behalf of Hjelm, Nathan T [hjelmn_at_[hidden]]
<br>
Sent: Wednesday, October 30, 2013 8:03 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN
<br>
<p>Ok, looks like I must have missed something. Will look into it now.
<br>
<p>-Nathan
<br>
________________________________________
<br>
From: devel [devel-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Wednesday, October 30, 2013 7:31 PM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN
<br>
<p>I'm seeing warnings on the trunk that something isn't defined when building on Linux:
<br>
<p>In file included from ../../../opal/threads/mutex_unix.h:49,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../opal/threads/mutex.h:113,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../opal/class/opal_pointer_array.h:37,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../opal/mca/event/event.h:28,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from orterun.c:61:
<br>
../../../opal/include/opal/sys/atomic.h:166:29: warning: &quot;OMPI_OSX_BUILTIN&quot; is not defined
<br>
In file included from ../../opal/class/opal_list.h:75,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../opal/mca/base/base.h:29,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../ompi/mca/topo/topo.h:26,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ompi_debugger_canary.c:17:
<br>
../../opal/include/opal/sys/atomic.h:166:29: warning: &quot;OMPI_OSX_BUILTIN&quot; is not defined
<br>
In file included from ../../opal/class/opal_list.h:75,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../opal/mca/base/base.h:29,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ompi_debuggers.c:49:
<br>
../../opal/include/opal/sys/atomic.h:166:29: warning: &quot;OMPI_OSX_BUILTIN&quot; is not defined
<br>
<p>Searching the code base, the only place I can find OMPI_OSX_BUILTIN is:
<br>
<p>./opal/include/opal/sys/atomic.h:166:#elif OPAL_ASSEMBLY_ARCH == OMPI_OSX_BUILTIN
<br>
<p>Looks to me like something is missing!
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13172.php">Ralph Castain: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<li><strong>Previous message:</strong> <a href="13170.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<li><strong>In reply to:</strong> <a href="13170.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13172.php">Ralph Castain: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<li><strong>Reply:</strong> <a href="13172.php">Ralph Castain: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
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
