<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  8 06:18:35 2010" -->
<!-- isoreceived="20101108111835" -->
<!-- sent="Mon, 08 Nov 2010 06:18:18 -0500" -->
<!-- isosent="20101108111818" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998" -->
<!-- id="4CD7DC7A.5070209_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EC7B0C20-0DA0-4CD3-AAB0-981116FA5E04_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-08 06:18:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>Previous message:</strong> <a href="8664.php">Ralph Castain: "[OMPI devel] Changes to libevent files"</a>
<li><strong>In reply to:</strong> <a href="8663.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>Reply:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In light of the push event changes upstream to libevent the changes to 
<br>
libevent207.h probably should be modified to look like event.h.  That is 
<br>
wrap the include &lt;stdbool.h&gt; with some ifdef for C++.  I did not do this 
<br>
in the original fix because everything pulling it in was also pulling in 
<br>
opal_config.h and getting stdbool.h in when it needed to.
<br>
<p>Jeff, do you want me to change libevent207.h to the above?
<br>
<p>--td
<br>
<p>On 11/05/2010 02:58 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This patch should be pushed upstream to libevent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry / Ralph?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2010, at 2:54 PM, tdd_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: tdd
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2010-11-05 14:54:19 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 23998
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23998">https://svn.open-mpi.org/trac/ompi/changeset/23998</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; corrected stdbool.h inclusion to allow Oracle C++ compilers to work with OMPI
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/opal/mca/event/libevent207/libevent/include/event2/event.h |     4 +++-
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/opal/mca/event/libevent207/libevent207.h                   |     3 ---
</span><br>
<span class="quotelev2">&gt;&gt;    2 files changed, 3 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/mca/event/libevent207/libevent/include/event2/event.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/opal/mca/event/libevent207/libevent/include/event2/event.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/opal/mca/event/libevent207/libevent/include/event2/event.h	2010-11-05 14:54:19 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -45,7 +45,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;sys/time.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; #ifndef WIN32
</span><br>
<span class="quotelev2">&gt;&gt; -#include&lt;stdbool.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#    if !(defined(c_plusplus) || defined(__cplusplus))
</span><br>
<span class="quotelev2">&gt;&gt; +#        include&lt;stdbool.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#    endif
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/opal/mca/event/libevent207/libevent207.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/opal/mca/event/libevent207/libevent207.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/opal/mca/event/libevent207/libevent207.h	2010-11-05 14:54:19 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -42,9 +42,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;assert.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;time.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#ifndef WIN32
</span><br>
<span class="quotelev2">&gt;&gt; -#include&lt;stdbool.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/class/opal_object.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/threads/mutex.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8665/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8665/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>Previous message:</strong> <a href="8664.php">Ralph Castain: "[OMPI devel] Changes to libevent files"</a>
<li><strong>In reply to:</strong> <a href="8663.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>Reply:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
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
