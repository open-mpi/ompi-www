<?
$subject_val = "[OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 21:32:14 2013" -->
<!-- isoreceived="20131031013214" -->
<!-- sent="Wed, 30 Oct 2013 18:31:56 -0700" -->
<!-- isosent="20131031013156" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN" -->
<!-- id="A159728B-4837-49AF-8EF9-4AA699057531_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 21:31:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13170.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<li><strong>Previous message:</strong> <a href="13168.php">Ralph Castain: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13170.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<li><strong>Reply:</strong> <a href="13170.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm seeing warnings on the trunk that something isn't defined when building on Linux:
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13169/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13170.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<li><strong>Previous message:</strong> <a href="13168.php">Ralph Castain: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13170.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
<li><strong>Reply:</strong> <a href="13170.php">Hjelm, Nathan T: "Re: [OMPI devel] Something missing in recent commit: OMPI_OSX_BUILTIN"</a>
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
