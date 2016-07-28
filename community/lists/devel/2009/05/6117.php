<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21295";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 10:56:00 2009" -->
<!-- isoreceived="20090527145600" -->
<!-- sent="Wed, 27 May 2009 10:55:49 -0400" -->
<!-- isosent="20090527145549" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21295" -->
<!-- id="849AB4F0-FE6B-4649-9E52-4AF6BF9E6C19_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200905271432.n4REWVIU013739_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21295<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 10:55:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6116.php">Jeff Squyres: "Re: [OMPI devel] faster autogen.sh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about using WSAStringToAddress instead? This function exist on all  
<br>
versions of Windows, and do exactly what you expect convert a string  
<br>
to an address.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 27, 2009, at 10:32 , shiqing_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: shiqing
</span><br>
<span class="quotelev1">&gt; Date: 2009-05-27 10:32:30 EDT (Wed, 27 May 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21295
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21295">https://svn.open-mpi.org/trac/ompi/changeset/21295</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Microsoft doesn't provide inet_pton and inet_ntop APIs on Windows  
</span><br>
<span class="quotelev1">&gt; XP, but only on Windows Vista and 2008. So add a stand alone version  
</span><br>
<span class="quotelev1">&gt; of inet_pton and inet_ntop functions from ISC.
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6116.php">Jeff Squyres: "Re: [OMPI devel] faster autogen.sh"</a>
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
