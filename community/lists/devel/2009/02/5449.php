<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 14:05:22 2009" -->
<!-- isoreceived="20090217190522" -->
<!-- sent="Tue, 17 Feb 2009 14:05:17 -0500" -->
<!-- isosent="20090217190517" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568" -->
<!-- id="59C8DDB6-0CFB-4458-9428-40C4EA83BCE2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="547EBCA0-D03E-4D11-8509-86696307B96C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 14:05:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5450.php">Jeff Squyres: "Re: [OMPI devel] reduce problem/#1791"</a>
<li><strong>Previous message:</strong> <a href="5448.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5446.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Reply:</strong> <a href="5451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can confirm it at least on MAC OS X and Linux. Based on IEEE Std  
<br>
1003.1-2008, if the argument of the free function is null, no action  
<br>
should occur. So I guess most POSIX compliant environments support the  
<br>
NULL argument.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 17, 2009, at 13:01 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 17, 2009, at 11:18 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess that if the free function supports the NULL pointer we  
</span><br>
<span class="quotelev2">&gt;&gt; should do the same...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll agree with that if we know for sure that free(NULL) is  
</span><br>
<span class="quotelev1">&gt; universally supported.  You mentioned &quot;a few man pages&quot; -- how  
</span><br>
<span class="quotelev1">&gt; universal is this support?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5450.php">Jeff Squyres: "Re: [OMPI devel] reduce problem/#1791"</a>
<li><strong>Previous message:</strong> <a href="5448.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5446.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Reply:</strong> <a href="5451.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
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
