<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 16:31:35 2015" -->
<!-- isoreceived="20151029203135" -->
<!-- sent="Thu, 29 Oct 2015 21:31:55 +0100" -->
<!-- isosent="20151029203155" -->
<!-- name="Fabian Wein" -->
<!-- email="fabian.wein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="5632823B.6080009_at_fau.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56327DDD.8040702_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel<br>
<strong>From:</strong> Fabian Wein (<em>fabian.wein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-29 16:31:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27952.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27950.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27949.php">Brice Goglin: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; If your hwloc was built without libnuma support, you will get the
</span><br>
<span class="quotelev1">&gt; following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ hwloc-bind --membind node:0 -- echo foo
</span><br>
<span class="quotelev1">&gt; hwloc_set_membind 0x0000000f failed (errno 38 Function not implemented)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Some days ago I installed hwloc and observed &quot;libnuma memory support: 
<br>
no&quot;. Then I
<br>
installed libnuma-dev (I could not find a libnumactl), configured 
<br>
hwloc again and
<br>
then I got &quot;libnuma memory support:      yes&quot;. I somehow suspect some 
<br>
remedies of
<br>
the first hwloc cause the problem. Hoever, when I now configure hwloc 
<br>
it gets
<br>
numa support. Therefore I thought configuring openmpi again might 
<br>
help, but it doesn't.
<br>
I don't find how to get the configure status from hwloc built by openmpi.
<br>
<p>Fabian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27952.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27950.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27949.php">Brice Goglin: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
