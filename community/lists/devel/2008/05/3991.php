<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 11:53:49 2008" -->
<!-- isoreceived="20080522155349" -->
<!-- sent="Thu, 22 May 2008 18:53:38 +0300" -->
<!-- isosent="20080522155338" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="48359702.30307_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1354CA3-38FF-46A2-B582-0A277FCCFAFA_at_cisco.com" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 11:53:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3992.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3990.php">Rolf vandeVaart: "[OMPI devel] Question about priority"</a>
<li><strong>In reply to:</strong> <a href="3984.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3992.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3992.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3993.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I follow this logic -- can you explain more?
</span><br>
Sure
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why does this only apply to binary distribution?  If libibverbs is 
</span><br>
<span class="quotelev1">&gt; installed by default, then OMPI will still build the openib BTL (and 
</span><br>
<span class="quotelev1">&gt; therefore warn if it's not used).  Granted, some distros will only 
</span><br>
<span class="quotelev1">&gt; install libibverbs if either explicitly or implicitly requested (e.g., 
</span><br>
<span class="quotelev1">&gt; via dependency).  What if some other dependency pulls in libibverbs, 
</span><br>
<span class="quotelev1">&gt; even if OMPI was built from a source tarball?
</span><br>
My point is that it is not correct to say that libibverbs installed by 
<br>
defaults on all Linuxes and all users that will install ompi will see 
<br>
this problem.
<br>
It possible that libibverbs maybe installed somehow implicitly as 
<br>
dependency package. But usually (not always) it will be installed as 
<br>
part of some IB native (openib only !) application.
<br>
<p>If user will decide to upgrade his ompi +  libibverb rpm/deb package 
<br>
install , he will be need to do a lot of other &quot;annoying&quot; steps, like: 
<br>
source code download, installing all required *-dev.rpm , compilation.
<br>
And I guess that disabling the defaults warning messages will be 
<br>
simplest step on all the way :-)
<br>
<p>I don't want to say that current solution is best one.
<br>
But I would like to find something better than disabling the warning by 
<br>
default only for openib.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me ask another question: is it common to have the verbs stack / 
</span><br>
<span class="quotelev1">&gt; hardware so hosed up that ibv_get_device_list() returns an empty list 
</span><br>
<span class="quotelev1">&gt; when there really is a device there?  My assumption is that this is 
</span><br>
<span class="quotelev1">&gt; quite uncommon; that ibv_get_device_list() will usually return that 
</span><br>
<span class="quotelev1">&gt; there *are* devices and errors show up later during initialization, 
</span><br>
<span class="quotelev1">&gt; etc.  Never say &quot;never&quot;, of course; I'm sure that there are degenerate 
</span><br>
<span class="quotelev1">&gt; corner cases where a badly hosed device will cause 
</span><br>
<span class="quotelev1">&gt; ibv_get_device_list() to return an empty list -- but I'm assuming that 
</span><br>
<span class="quotelev1">&gt; those cases are very few and far between.
</span><br>
I can not say that it is very uncommon case.
<br>
For example:
<br>
1. Driver doesn't support the HCA - If I remember correct , RH40 by 
<br>
default doesn't support ConnectX hca . The device_list will be empty. It 
<br>
is very exotic case.
<br>
2. Driver version doesn't correspond with fw version
<br>
3. FW was broken
<br>
4. Driver was broken and failed to start - it is not very exotic case 
<br>
too. Some times user make some modification - upgrade/install/etc.. and 
<br>
it brakes driver.
<br>
<p><span class="quotelev1">&gt;   In such cases, the ibv_devinfo(1) and ibv_devices(1) commands would 
</span><br>
<span class="quotelev1">&gt; show the same error.
</span><br>
Yep these utilities will show the same error.
<br>
<p>Cases 1-2-3 we may cover pretty simple. OPENIB driver creates 
<br>
&quot;/dev/infiniband&quot; during his startup. So if  /dev/infiniband exists and  
<br>
_get_device_list() is empty we may print warning.
<br>
I don't know how we can cover case 4 :-(
<br>
<p>BTW I think that problem is relevant for all BTLs and not only openib 
<br>
and may be we need look for some global solution.
<br>
<p>Pasha.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3992.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3990.php">Rolf vandeVaart: "[OMPI devel] Question about priority"</a>
<li><strong>In reply to:</strong> <a href="3984.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3992.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3992.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3993.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
