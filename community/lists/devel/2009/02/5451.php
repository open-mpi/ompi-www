<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 14:43:38 2009" -->
<!-- isoreceived="20090217194338" -->
<!-- sent="Tue, 17 Feb 2009 14:43:30 -0500" -->
<!-- isosent="20090217194330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568" -->
<!-- id="0CB15128-FABB-4429-BCB2-A6EDFD7792BD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="59C8DDB6-0CFB-4458-9428-40C4EA83BCE2_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 14:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5452.php">Tim Mattox: "Re: [OMPI devel] sm latency putback"</a>
<li><strong>Previous message:</strong> <a href="5450.php">Jeff Squyres: "Re: [OMPI devel] reduce problem/#1791"</a>
<li><strong>In reply to:</strong> <a href="5449.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5453.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 17, 2009, at 2:05 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I can confirm it at least on MAC OS X and Linux. Based on IEEE Std  
</span><br>
<span class="quotelev1">&gt; 1003.1-2008, if the argument of the free function is null, no action  
</span><br>
<span class="quotelev1">&gt; should occur. So I guess most POSIX compliant environments support  
</span><br>
<span class="quotelev1">&gt; the NULL argument.
</span><br>
<p>Sounds good.  Terry just confirmed for me that it's also true for all  
<br>
versions of Solaris.
<br>
<p>It's amusing, though -- this check has been in the OMPI code base  
<br>
literally since the very beginning, and this is the first notable time  
<br>
it has been tripped.  Should we leave it in there (and leave in my  
<br>
libevent change)?  I.e., free(NULL) may be harmless, but it may  
<br>
signify a bug.
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
<li><strong>Next message:</strong> <a href="5452.php">Tim Mattox: "Re: [OMPI devel] sm latency putback"</a>
<li><strong>Previous message:</strong> <a href="5450.php">Jeff Squyres: "Re: [OMPI devel] reduce problem/#1791"</a>
<li><strong>In reply to:</strong> <a href="5449.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5453.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
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
