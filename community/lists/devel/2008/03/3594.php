<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18046";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 17:41:59 2008" -->
<!-- isoreceived="20080331214159" -->
<!-- sent="Mon, 31 Mar 2008 17:41:50 -0400" -->
<!-- isosent="20080331214150" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18046" -->
<!-- id="AC73F389-FAEF-488F-BC0F-01C29F5C72CD_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="36ca99e90803311439k3c8f30cay2e545133e7dabdc0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r18046<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 17:41:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3595.php">Lenny Verkhovsky: "Re: [OMPI devel] segfault on host not found error."</a>
<li><strong>Previous message:</strong> <a href="3593.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18046"</a>
<li><strong>In reply to:</strong> <a href="3593.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18046"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're right ... I'll make the change asap.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 31, 2008, at 5:39 PM, Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; On Mon, Mar 31, 2008 at 10:15 PM,  &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-03-31 16:15:49 EDT (Mon, 31 Mar 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 18046
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18046">https://svn.open-mpi.org/trac/ompi/changeset/18046</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/util/opal_environ.c
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef __WINDOWS__
</span><br>
<span class="quotelev2">&gt;&gt; +#define OMPI_DEFAULT_TMPDIR &quot;C:\\TEMP&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; +#define OMPI_DEFAULT_TMPDIR &quot;/tmp&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; Wrong prefix for this file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3594/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3595.php">Lenny Verkhovsky: "Re: [OMPI devel] segfault on host not found error."</a>
<li><strong>Previous message:</strong> <a href="3593.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18046"</a>
<li><strong>In reply to:</strong> <a href="3593.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18046"</a>
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
