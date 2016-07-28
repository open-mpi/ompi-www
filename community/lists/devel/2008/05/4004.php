<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 17:18:11 2008" -->
<!-- isoreceived="20080522211811" -->
<!-- sent="Thu, 22 May 2008 17:18:01 -0400" -->
<!-- isosent="20080522211801" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="CC2DF84E-1CAA-4CE2-90BF-16A7FA5E79D0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080522203052.GA11663_at_master.debian.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 17:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4005.php">Don Kerr: "[OMPI devel] Open MPI Linux Expectations"</a>
<li><strong>Previous message:</strong> <a href="4003.php">George Bosilca: "[OMPI devel] r18481"</a>
<li><strong>In reply to:</strong> <a href="4002.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4018.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4018.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4022.php">Manuel Prinz: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 22, 2008, at 4:30 PM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Can you see if /dev/infiniband exists?  If it does, the OpenFabrics
</span><br>
<span class="quotelev2">&gt;&gt; kernel drivers are running.  If not, they aren't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Negative -- I have no /dev/infiniband.  So his test idea seems
</span><br>
<span class="quotelev1">&gt; feasible which is nice!
</span><br>
<p>Good!
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Do you have any information whether OFED is in fact packaged for
</span><br>
<span class="quotelev1">&gt; Debian?  It may not be, and hence no file ...
</span><br>
<p>OFED is one distribution of the OpenFabrics software.  It can be  
<br>
bundled up and packaged differently, too.  I suspect that Debian does  
<br>
not include OFED directly, because OFED is pretty heavily dependent  
<br>
upon RPM.  So the OpenFabrics kernel bits must be there somewhere  
<br>
(libibverbs would be useless, otherwise); it would be nice to  
<br>
understand how they are activated: either manually or automatically.
<br>
<p><span class="quotelev2">&gt;&gt; So if you have this init.d file, perhaps it's a question of checking
</span><br>
<span class="quotelev2">&gt;&gt; the chkconfig levels upon installation...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't have it, but then again, my personal installation is in no way
</span><br>
<span class="quotelev1">&gt; authorative for all of Debian.
</span><br>
<p><p>Could you check with some of your other Debian maintainers?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4005.php">Don Kerr: "[OMPI devel] Open MPI Linux Expectations"</a>
<li><strong>Previous message:</strong> <a href="4003.php">George Bosilca: "[OMPI devel] r18481"</a>
<li><strong>In reply to:</strong> <a href="4002.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4018.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4018.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4022.php">Manuel Prinz: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
