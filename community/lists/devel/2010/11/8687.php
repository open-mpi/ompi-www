<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 20:59:18 2010" -->
<!-- isoreceived="20101117015918" -->
<!-- sent="Tue, 16 Nov 2010 19:59:14 -0600" -->
<!-- isosent="20101117015914" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047" -->
<!-- id="407DA1E1-6DC0-40A1-BFB8-F87B20DA9418_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikFgnV-xYkwyasOjC96fZ4pxh=14YunTekXW-R__at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 20:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8688.php">Christopher Samuel: "[OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>Previous message:</strong> <a href="8686.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
<li><strong>In reply to:</strong> <a href="8686.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! Good catch.
<br>
<p>&nbsp;&nbsp;George
<br>
<p>On Nov 16, 2010, at 18:26, Tim Mattox &lt;timattox_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I see a bug in this code fragment:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#define MEMMOVE(d, s, l)                                  \
</span><br>
<span class="quotelev1">&gt; +    do {                                                  \
</span><br>
<span class="quotelev1">&gt; +        if( (((d) &lt; (s)) &amp;&amp; (((d) + (l)) &gt; (s))) ||       \
</span><br>
<span class="quotelev1">&gt; +            (((s) &lt; (d)) &amp;&amp; (((s) + (l)) &gt; (s))) ) {      \
</span><br>
<span class="quotelev1">&gt; +            memmove( (d), (s), (l) );                     \
</span><br>
<span class="quotelev1">&gt; +        } else {                                          \
</span><br>
<span class="quotelev1">&gt; +            MEMCPY( (d), (s), (l) );                      \
</span><br>
<span class="quotelev1">&gt; +        }                                                 \
</span><br>
<span class="quotelev1">&gt; +    } while (0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't this line
</span><br>
<span class="quotelev1">&gt; +            (((s) &lt; (d)) &amp;&amp; (((s) + (l)) &gt; (s))) ) {      \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; be like this instead?
</span><br>
<span class="quotelev1">&gt; +            (((s) &lt; (d)) &amp;&amp; (((s) + (l)) &gt; (d))) ) {      \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 12, 2010 at 6:22 PM,  &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2010-11-12 18:22:35 EST (Fri, 12 Nov 2010)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 24047
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24047">https://svn.open-mpi.org/trac/ompi/changeset/24047</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Add a second version of the datatype copy function using memmove instead of memcpy.
</span><br>
<span class="quotelev2">&gt;&gt; As memmove is slower than memcpy, I added the required logic to only use it when
</span><br>
<span class="quotelev2">&gt;&gt; really necessary.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No modification from developers point of view, you should always call
</span><br>
<span class="quotelev2">&gt;&gt; opal_datatype_copy_content_same_ddt.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/opal/datatype/opal_datatype_copy.h
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/opal/datatype/Makefile.am            |     3
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/opal/datatype/opal_datatype_copy.c   |   253 +++++++--------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/opal/datatype/opal_datatype_memcpy.h |    28 ----
</span><br>
<span class="quotelev2">&gt;&gt;   3 files changed, 48 insertions(+), 236 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/datatype/Makefile.am
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  timattox_at_[hidden] || tmattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<li><strong>Next message:</strong> <a href="8688.php">Christopher Samuel: "[OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>Previous message:</strong> <a href="8686.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
<li><strong>In reply to:</strong> <a href="8686.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
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
