<?
$subject_val = "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 04:52:33 2015" -->
<!-- isoreceived="20151027085233" -->
<!-- sent="Tue, 27 Oct 2015 09:52:29 +0100" -->
<!-- isosent="20151027085229" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family" -->
<!-- id="562F3B4D.40902_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="562F392A.9050405_at_fau.de" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 04:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1204.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1202.php">Samuel Thibault: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1200.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1204.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1204.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>This bug is about L3 cache locality only, everything else should be
<br>
fine, including cache sizes. Few applications use that locality
<br>
information, so I assume it doesn't matter for PETSc scaling.
<br>
We can work around the bug by loading a XML topology. There's no easy
<br>
way to build that correct XML, but I can do it manually if you send your
<br>
current broken topology (lstopo foo.xml and send this foo.xml).
<br>
<p>Brice
<br>
<p><p><p>Le 27/10/2015 09:43, Fabian Wein a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm new to the list and new to the mpi-business, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our 4*12 Opteron 6238 system is very similar to the one from the
</span><br>
<span class="quotelev1">&gt; original poster and I get the same error message.
</span><br>
<span class="quotelev1">&gt; Any use in posting my logs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled the latest hwloc, no change. our System is Ubunut 14.4 LTS
</span><br>
<span class="quotelev1">&gt; with kernel 3.13. and our bios is not updated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The system scales very fine with OpenMP but fails to give any
</span><br>
<span class="quotelev1">&gt; realistic scaling using PETSc (both for the standard
</span><br>
<span class="quotelev1">&gt; streaming benchmark and quick tests with a given application).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I understand the system is fine, just the information
</span><br>
<span class="quotelev1">&gt; gathering fails, right?!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know if the hwloc issue relates with our poor PETSc scaling? Is
</span><br>
<span class="quotelev1">&gt; there a way to configure the topology
</span><br>
<span class="quotelev1">&gt; manually?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To me it appears that an bios update wouldn't help, right?! I wouldn't
</span><br>
<span class="quotelev1">&gt; try it if it is not nesessary. I'm a user with sudo accesss,
</span><br>
<span class="quotelev1">&gt; not an administrator but we have no admin for the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fabian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1201.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/10/1201.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1204.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1202.php">Samuel Thibault: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1200.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1204.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1204.php">Fabian Wein: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
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
