<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun  5 18:04:10 2006" -->
<!-- isoreceived="20060605220410" -->
<!-- sent="Mon, 5 Jun 2006 18:04:00 -0400" -->
<!-- isosent="20060605220400" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Please add explicit test for sysfs/libsysfs.h" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF94CD06_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Please add explicit test for sysfs/libsysfs.h" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-05 18:04:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0933.php">Brian Barrett: "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Previous message:</strong> <a href="0931.php">Josh Aune: "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Maybe in reply to:</strong> <a href="0930.php">Josh Aune: "[OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent suggestion; thanks.
<br>
<p>Done! 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Josh Aune
</span><br>
<span class="quotelev1">&gt; Sent: Monday, June 05, 2006 4:55 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Please add explicit test for sysfs/libsysfs.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So far, every system I have compiled open-mpi on I have hit this same
</span><br>
<span class="quotelev1">&gt; non-obvious configure failure.  In each case I have added
</span><br>
<span class="quotelev1">&gt; --with-openib=&lt;path&gt; and --with-openib-libs=&lt;path&gt;.  configure runs
</span><br>
<span class="quotelev1">&gt; just fine till it starts looking for OpenIB and reports that it can't
</span><br>
<span class="quotelev1">&gt; find most of the header files and what not relating to OpenIB and
</span><br>
<span class="quotelev1">&gt; eventually bombs during the checks reporting that OpenIB is not found
</span><br>
<span class="quotelev1">&gt; (even though it really is there).  After looking through the
</span><br>
<span class="quotelev1">&gt; config.log I find an error about not being able to find
</span><br>
<span class="quotelev1">&gt; sysfs/libsysfs.h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after installing sysfsutils-devel (fedora core) the compile proceedes
</span><br>
<span class="quotelev1">&gt; w/o a hitch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Having this be an explicit test (at the top of the openib section?)
</span><br>
<span class="quotelev1">&gt; would be wonderful :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; grep -r &quot;sysfs/libsysfs.h&quot; *
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c:#include &lt;sysfs/libsysfs.h&gt;
</span><br>
<span class="quotelev1">&gt; ompi/dynamic-mca/btl/openib/btl_openib_component.c:#include 
</span><br>
<span class="quotelev1">&gt; &lt;sysfs/libsysfs.h&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0933.php">Brian Barrett: "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Previous message:</strong> <a href="0931.php">Josh Aune: "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Maybe in reply to:</strong> <a href="0930.php">Josh Aune: "[OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
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
