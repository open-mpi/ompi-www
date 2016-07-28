<?
$subject_val = "Re: [OMPI devel] bug in odls_base_default_fns.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 11:34:10 2009" -->
<!-- isoreceived="20090122163410" -->
<!-- sent="Thu, 22 Jan 2009 09:34:02 -0700" -->
<!-- isosent="20090122163402" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in odls_base_default_fns.c" -->
<!-- id="4B3C0156-46C4-45CB-84AF-A6E527E45E95_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="497880E4.1060109_at_irisa.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in odls_base_default_fns.c<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 11:34:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5276.php">Scott Atchley: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>Previous message:</strong> <a href="5274.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5273.php">Thomas Ropars: "[OMPI devel] bug in odls_base_default_fns.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My bad - forgot to change the inequality to equality when Jeff and I  
<br>
revised the default action. Fixed in r20319
<br>
<p><p>On Jan 22, 2009, at 7:21 AM, Thomas Ropars wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't manage to run any application with r20318 of the trunk :(
</span><br>
<span class="quotelev1">&gt; I always get the following message:
</span><br>
<span class="quotelev1">&gt; [[24867,0],0] ORTE_ERROR_LOG: Value out of bounds in file base/ 
</span><br>
<span class="quotelev1">&gt; odls_base_default_fns.c at line 1223
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the modification of odls_base_default_fns.c in r20312  
</span><br>
<span class="quotelev1">&gt; introduces some problems because I don't have any problem with r20311.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5276.php">Scott Atchley: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>Previous message:</strong> <a href="5274.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5273.php">Thomas Ropars: "[OMPI devel] bug in odls_base_default_fns.c"</a>
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
