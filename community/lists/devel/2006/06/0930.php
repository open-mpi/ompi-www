<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun  5 16:54:56 2006" -->
<!-- isoreceived="20060605205456" -->
<!-- sent="Mon, 5 Jun 2006 14:54:51 -0600" -->
<!-- isosent="20060605205451" -->
<!-- name="Josh Aune" -->
<!-- email="ladros_at_[hidden]" -->
<!-- subject="[OMPI devel] Please add explicit test for sysfs/libsysfs.h" -->
<!-- id="98a233180606051354v7cfc3f52gebb5a2c6fafccdc5_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Aune (<em>ladros_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-05 16:54:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0931.php">Josh Aune: "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Previous message:</strong> <a href="0929.php">Galen M. Shipman: "Re: [OMPI devel] Query on zero-copy sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
<li><strong>Maybe reply:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So far, every system I have compiled open-mpi on I have hit this same
<br>
non-obvious configure failure.  In each case I have added
<br>
--with-openib=&lt;path&gt; and --with-openib-libs=&lt;path&gt;.  configure runs
<br>
just fine till it starts looking for OpenIB and reports that it can't
<br>
find most of the header files and what not relating to OpenIB and
<br>
eventually bombs during the checks reporting that OpenIB is not found
<br>
(even though it really is there).  After looking through the
<br>
config.log I find an error about not being able to find
<br>
sysfs/libsysfs.h.
<br>
<p>after installing sysfsutils-devel (fedora core) the compile proceedes
<br>
w/o a hitch.
<br>
<p>Having this be an explicit test (at the top of the openib section?)
<br>
would be wonderful :)
<br>
<p>Thanks,
<br>
Josh
<br>
<p>grep -r &quot;sysfs/libsysfs.h&quot; *
<br>
ompi/mca/btl/openib/btl_openib_component.c:#include &lt;sysfs/libsysfs.h&gt;
<br>
ompi/dynamic-mca/btl/openib/btl_openib_component.c:#include &lt;sysfs/libsysfs.h&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0931.php">Josh Aune: "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Previous message:</strong> <a href="0929.php">Galen M. Shipman: "Re: [OMPI devel] Query on zero-copy sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
<li><strong>Maybe reply:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
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
