<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 24 11:30:54 2008" -->
<!-- isoreceived="20080524153054" -->
<!-- sent="Sat, 24 May 2008 17:30:38 +0200" -->
<!-- isosent="20080524153038" -->
<!-- name="Manuel Prinz" -->
<!-- email="debian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="1211643038.6800.10.camel_at_donnie" -->
<!-- inreplyto="CC2DF84E-1CAA-4CE2-90BF-16A7FA5E79D0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Manuel Prinz (<em>debian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-24 11:30:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4023.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Previous message:</strong> <a href="4021.php">George Bosilca: "Re: [OMPI devel] [OMPI users] Open MPI Linux Expectations"</a>
<li><strong>In reply to:</strong> <a href="4004.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4028.php">Manuel Prinz: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4028.php">Manuel Prinz: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am Donnerstag, den 22.05.2008, 17:18 -0400 schrieb Jeff Squyres:
<br>
<span class="quotelev1">&gt; Could you check with some of your other Debian maintainers?
</span><br>
<p>I'm sorry that I can't check that before Monday! I'll let you know then
<br>
but I'm not aware of that.
<br>
<p>Never thought about the impact of my initial request to Jeff. I
<br>
personally do not think that it's a problem that warnings are issued, I
<br>
just think there should be a simple way to help out those users who want
<br>
to get rid of them and/or help them to understand where the warning
<br>
comes from in the first place. If you do find a way to suppress them for
<br>
those who do not have the required hardware this would be indeed nice
<br>
but it should not be suppressed by default if it complicated debugging
<br>
or system administration. Just my two cents.
<br>
<p>The reasoning that libibverbs should only be installed if the hardware
<br>
exists is somehow valid but kind of impossible to garantee in a
<br>
distribution. We (the Debian OpenMPI maintainers) could build two OMPI
<br>
packages (with and without libibverbs dependancy) but this increases the
<br>
maintainance burden and does not work well with other MPI-using
<br>
packages. I guess the common case is that libibverbs is pulled in from
<br>
&quot;somewhere&quot; even if no hardware is present.
<br>
<p>Best regards
<br>
Manuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4023.php">Patrick Geoffray: "Re: [OMPI devel] Memory hooks stuff"</a>
<li><strong>Previous message:</strong> <a href="4021.php">George Bosilca: "Re: [OMPI devel] [OMPI users] Open MPI Linux Expectations"</a>
<li><strong>In reply to:</strong> <a href="4004.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4028.php">Manuel Prinz: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4028.php">Manuel Prinz: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
