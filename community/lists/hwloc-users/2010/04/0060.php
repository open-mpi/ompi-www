<?
$subject_val = "Re: [hwloc-users] hwloc RPM spec file";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 11:32:26 2010" -->
<!-- isoreceived="20100426153226" -->
<!-- sent="Mon, 26 Apr 2010 17:32:17 +0200" -->
<!-- isosent="20100426153217" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc RPM spec file" -->
<!-- id="201004261732.17813.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BD5AF7F.3080704_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc RPM spec file<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 11:32:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0061.php">Samuel Thibault: "Re: [hwloc-users] hwloc RPM spec file"</a>
<li><strong>Previous message:</strong> <a href="0059.php">Samuel Thibault: "Re: [hwloc-users] hwloc RPM spec file"</a>
<li><strong>In reply to:</strong> <a href="0058.php">Brice Goglin: "Re: [hwloc-users] hwloc RPM spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0061.php">Samuel Thibault: "Re: [hwloc-users] hwloc RPM spec file"</a>
<li><strong>Reply:</strong> <a href="0061.php">Samuel Thibault: "Re: [hwloc-users] hwloc RPM spec file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday 26 April 2010 05:21:35 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; On 23/04/2010 18:09, Jirka Hladky wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have written hwloc RPM spec file. It's attached.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Jirka
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Jirka, but don't you need some BuildRequires such as the following?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libX11-devel
</span><br>
<span class="quotelev1">&gt; libxml2-devel
</span><br>
<span class="quotelev1">&gt; cairo-devel
</span><br>
<span class="quotelev1">&gt; ncurses-devel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tony (CCed) also worked on RPMs for Fedora in the past (see
</span><br>
<span class="quotelev1">&gt; <a href="http://koji.fedoraproject.org/koji/taskinfo?taskID=1815736">http://koji.fedoraproject.org/koji/taskinfo?taskID=1815736</a>). I don't
</span><br>
<span class="quotelev1">&gt; know which one is better. It would be good to have somebody upload hwloc
</span><br>
<span class="quotelev1">&gt; in Redhat and Fedora repos at some point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe adding the spec file to the SVN could be good too? IIRC, you can
</span><br>
<span class="quotelev1">&gt; build RPM packages with a single command line from the tarball thanks to
</span><br>
<span class="quotelev1">&gt; this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p>Hi Brice,
<br>
<p>I'm using it on system without X11 being installed. 
<br>
<p>I have created it as the starting point to pack hwloc into rpm. What the 
<br>
opinion of others - should we add dependency on X11 and sacrify the 
<br>
possibility to run hwloc on systems without X11 installed?
<br>
<p>Thanks
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0061.php">Samuel Thibault: "Re: [hwloc-users] hwloc RPM spec file"</a>
<li><strong>Previous message:</strong> <a href="0059.php">Samuel Thibault: "Re: [hwloc-users] hwloc RPM spec file"</a>
<li><strong>In reply to:</strong> <a href="0058.php">Brice Goglin: "Re: [hwloc-users] hwloc RPM spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0061.php">Samuel Thibault: "Re: [hwloc-users] hwloc RPM spec file"</a>
<li><strong>Reply:</strong> <a href="0061.php">Samuel Thibault: "Re: [hwloc-users] hwloc RPM spec file"</a>
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
