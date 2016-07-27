<?
$subject_val = "Re: [hwloc-devel] geting hwloc working under Xen Hypervisor as a Linux Driver";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 13 14:12:13 2013" -->
<!-- isoreceived="20130513181213" -->
<!-- sent="Mon, 13 May 2013 20:12:05 +0200" -->
<!-- isosent="20130513181205" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] geting hwloc working under Xen Hypervisor as a Linux Driver" -->
<!-- id="51912CF5.3000504_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7A5BC5378C15F34EA8F5239045FFF12D06A787_at_SINPEX01CL03.citrite.net" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] geting hwloc working under Xen Hypervisor as a Linux Driver<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-13 14:12:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3741.php">Brice Goglin: "[hwloc-devel] stop embedding libltdl"</a>
<li><strong>Previous message:</strong> <a href="3739.php">Pankaj Kumar Biswas: "[hwloc-devel] geting hwloc working under Xen Hypervisor as a Linux Driver"</a>
<li><strong>In reply to:</strong> <a href="3739.php">Pankaj Kumar Biswas: "[hwloc-devel] geting hwloc working under Xen Hypervisor as a Linux Driver"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&quot;hwloc working [...] as a linux driver&quot;: do you mean that you want hwloc
<br>
inside the Linux kernel? If you just want hwloc features inside the
<br>
Linux kernel, you may not strictly need hwloc since hwloc basically just
<br>
reports what the Linux kernel puts in /sys and /proc. Reading the Linux
<br>
code that implements these virtual files will give you the locality
<br>
information you need. If you tell me which locality information you
<br>
want, I may be able to tell you.
<br>
If having things organized as a tree is strictly important, Linux won't
<br>
be able to directly help you, you may need some actual hwloc code, but
<br>
porting that into the Linux kernel will require a lot of work.
<br>
If that's not what you want, we need more details about what you're
<br>
trying to do.
<br>
Brice
<br>
<p><p><p>Le 13/05/2013 18:27, Pankaj Kumar Biswas a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to know how I can get hwloc working  under xen hypervisor as a
</span><br>
<span class="quotelev1">&gt;  linux driver. What modules/functions from hwloc code base I need to
</span><br>
<span class="quotelev1">&gt; do the same?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be really appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Thanks &amp; Regards,*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *PANKAJ KUMAR BISWAS*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3740/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3741.php">Brice Goglin: "[hwloc-devel] stop embedding libltdl"</a>
<li><strong>Previous message:</strong> <a href="3739.php">Pankaj Kumar Biswas: "[hwloc-devel] geting hwloc working under Xen Hypervisor as a Linux Driver"</a>
<li><strong>In reply to:</strong> <a href="3739.php">Pankaj Kumar Biswas: "[hwloc-devel] geting hwloc working under Xen Hypervisor as a Linux Driver"</a>
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
