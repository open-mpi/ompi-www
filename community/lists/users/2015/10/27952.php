<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 16:38:27 2015" -->
<!-- isoreceived="20151029203827" -->
<!-- sent="Thu, 29 Oct 2015 21:38:47 +0100" -->
<!-- isosent="20151029203847" -->
<!-- name="Fabian Wein" -->
<!-- email="fabian.wein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="563283D7.3050901_at_fau.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87a8r1to4o.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Date:</strong> 2015-10-29 16:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27951.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27950.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27945.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/29/2015 09:29 PM, Dave Love wrote:
<br>
<p><span class="quotelev1">&gt; I guess the problem is not having hwloc/libnuma1 on the compute host, as
</span><br>
<span class="quotelev1">&gt; opposed to the build host.  Test like this on the host, though the
</span><br>
<span class="quotelev1">&gt; component name may be different in 1.10:
</span><br>
I Have shared-memory system (4 package opteron, 8 numa nodes, 48 
<br>
cores), only one
<br>
system.
<br>
<p><span class="quotelev1">&gt;    $ ldd /usr/lib/openmpi/lib/openmpi/mca_paffinity_hwloc.so | egrep 'hwloc|numa'
</span><br>
gives for me
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libhwloc.so.5 =&gt; /usr/local/lib/libhwloc.so.5 (0x00007f6718a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /usr/lib/x86_64-linux-gnu/libnuma.so.1 
<br>
(0x00007f6718208000)
<br>
<p><span class="quotelev1">&gt; Otherwise I guess there's a useful MCA debugging parameter, but I don't
</span><br>
<span class="quotelev1">&gt; know what to try in 1.10.
</span><br>
I don't understand.
<br>
<p><span class="quotelev1">&gt; If you want to replace or supplement the system package, I recommend
</span><br>
<span class="quotelev1">&gt; modifying the source package to use the newer source and build a new
</span><br>
<span class="quotelev1">&gt; binary package from that; usually the mods are trivial.  Then dpkg or
</span><br>
<span class="quotelev1">&gt; rpm manages the dependencies.
</span><br>
Sound tough - I'm not an ubunut user, I work with OpenSuse and I'm a 
<br>
user, not an
<br>
administrator.
<br>
<p>Fabian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27951.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27950.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27945.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
