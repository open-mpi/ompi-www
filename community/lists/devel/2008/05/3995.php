<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 13:34:51 2008" -->
<!-- isoreceived="20080522173451" -->
<!-- sent="Thu, 22 May 2008 13:34:28 -0400" -->
<!-- isosent="20080522173428" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="4835AEA4.2000504_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0805221048470.3104_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 13:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3994.php">Jeff Squyres: "Re: [OMPI devel] Documentation update"</a>
<li><strong>In reply to:</strong> <a href="3989.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3965.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; With MX, it's one initialization call (mx_init), and it's not clear from 
</span><br>
<span class="quotelev1">&gt; the errors it can return that you can differentiate between the two cases.
</span><br>
<p>If you run mx_init() on a machine without the MX driver loaded or no NIC 
<br>
detected by the driver, you get a specific error code (MX_NO_DEV) and 
<br>
the default error handler print something like:
<br>
<p>MX:asterix:mx_init:querying driver:error 5(errno=2):No MX device entry 
<br>
in /dev.
<br>
<p>You can overload the default error handler to not see the message.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3996.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3994.php">Jeff Squyres: "Re: [OMPI devel] Documentation update"</a>
<li><strong>In reply to:</strong> <a href="3989.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3965.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
