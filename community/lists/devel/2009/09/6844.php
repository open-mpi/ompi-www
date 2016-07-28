<?
$subject_val = "[OMPI devel] RFC: IPv6 support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 23:53:27 2009" -->
<!-- isoreceived="20090917035327" -->
<!-- sent="Wed, 16 Sep 2009 21:53:18 -0600" -->
<!-- isosent="20090917035318" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: IPv6 support" -->
<!-- id="235E0E3A-F91A-42F2-8FFA-C0FBAB0511B4_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: IPv6 support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-16 23:53:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6845.php">Jeff Squyres: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>Previous message:</strong> <a href="6843.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6845.php">Jeff Squyres: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>Reply:</strong> <a href="6845.php">Jeff Squyres: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>Reply:</strong> <a href="6913.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support ***REMINDER***"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: change the IPv6 configuration option to enable IPv6 if and only  
<br>
if specifically requested
<br>
<p>WHY: IPv6 support is only marginally maintained, and is currently  
<br>
broken yet again. The current default setting is causing user systems  
<br>
to break if (a) their kernel has support for IPv6, but (b) the system  
<br>
administrator has not actually configured the interfaces to use IPv6.
<br>
<p>TIMEOUT: end of Sept
<br>
<p>SCOPE: OMPI trunk + 1.3.4
<br>
<p>DETAIL:
<br>
There appears to have been an unfortunate change in the way OMPI  
<br>
supports IPv6. Early on, we had collectively agreed to disable IPv6  
<br>
support unless specifically instructed to build it. This was decided  
<br>
because IPv6 support was shaky, at best, and used by only a small  
<br>
portion of the community. Given the lack of committed resources to  
<br>
maintain it, we felt at that time that enabling it by default would  
<br>
cause an inordinate amount of trouble.
<br>
<p>Unfortunately, at some point someone changed this default behavior. We  
<br>
now enable IPv6 support by default if the system has the required  
<br>
header files. This test is inadequate as it in no way determines that  
<br>
the support is active. The current result of this test is to not only  
<br>
cause all the IPv6-related code to compile, but to actually require  
<br>
that every TCP interface provide an IPv6 socket.
<br>
<p>This latter requirement causes OMPI to abort on any system where the  
<br>
header files exist, but the system admin has not configured every TCP  
<br>
interface to have an IPv6 address...a situation which is proving  
<br>
fairly common.
<br>
<p>The proposed change will heal the current breakage, and can be  
<br>
reversed at some future time if adequate IPv6 maintenance commitment  
<br>
exists. In the meantime, it will allow me to quit the continual litany  
<br>
of telling users to manually --disable-ipv6, and allow OMPI to run out- 
<br>
of-the-box again.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6845.php">Jeff Squyres: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>Previous message:</strong> <a href="6843.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6845.php">Jeff Squyres: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>Reply:</strong> <a href="6845.php">Jeff Squyres: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>Reply:</strong> <a href="6913.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support ***REMINDER***"</a>
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
