<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 00:19:56 2014" -->
<!-- isoreceived="20140801041956" -->
<!-- sent="Thu, 31 Jul 2014 21:19:54 -0700" -->
<!-- isosent="20140801041954" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1" -->
<!-- id="CAAvDA17v3A2q8LkBj7p2+3XaUm3H+1KnsaGa62h9pGvVWH2P2Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53DB13AC.3070805_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 00:19:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15431.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="15429.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>In reply to:</strong> <a href="15428.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15431.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Reply:</strong> <a href="15431.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>This test was using the Solaris Studio Compilers version 12.3.
<br>
<p>/usr/bin/gcc on this system is &quot;gccfss&quot; which Open MPI does NOT support.
<br>
<p>There is also a gcc-3.3.2 in /usr/local/bin and gcc-3.4.3 in /usr/sfw/bin
<br>
Neither includes usable fortran compilers, which is why the Studio
<br>
compilers are preferred.
<br>
Let me know if you need me to try any of those gcc installations.
<br>
<p>-Paul
<br>
<p><p>On Thu, Jul 31, 2014 at 9:12 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Ralph pointed, this issue was reported last month on the user mailing
</span><br>
<span class="quotelev1">&gt; list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;alloca.h&gt; did not help :
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24883.php">http://www.open-mpi.org/community/lists/users/2014/07/24883.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try if i can reproduce and fix this issue on a solaris10 (but x86)
</span><br>
<span class="quotelev1">&gt; VM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, are you using the GNU compiler ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/08/01 13:08, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general I am only setup to build from tarballs, not svn.
</span><br>
<span class="quotelev1">&gt; However, I can (and will) apply this change manually w/o difficulty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will report back when I've had a chance to try that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I already have many builds in-flight to test George's atomics patch and am
</span><br>
<span class="quotelev1">&gt; in danger of confusing myself if I am not careful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 8:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  FWIW: we had Siegmar try that and it didn't solve the problem. Paul?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 31, 2014, at 8:28 PM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev1">&gt; Date: 2014-07-31 23:28:23 EDT (Thu, 31 Jul 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32388
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32388">https://svn.open-mpi.org/trac/ompi/changeset/32388</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Missing alloca.h. Thanks Paul for catching this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_irecv.c |     3 +++
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_isend.c |     3 +++
</span><br>
<span class="quotelev1">&gt;   2 files changed, 6 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_irecv.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --- trunk/ompi/mca/pml/ob1/pml_ob1_irecv.c    Thu Jul 31 21:00:42 2014
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       (r32387)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +++ trunk/ompi/mca/pml/ob1/pml_ob1_irecv.c    2014-07-31 23:28:23 EDT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (Thu, 31 Jul 2014)      (r32388)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  @@ -28,6 +28,9 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;pml_ob1_recvfrag.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/peruse/peruse-internal.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/message/message.h&quot;
</span><br>
<span class="quotelev1">&gt; +#if HAVE_ALLOCA_H
</span><br>
<span class="quotelev1">&gt; +#include &lt;alloca.h&gt;
</span><br>
<span class="quotelev1">&gt; +#endif  /* HAVE_ALLOCA_H */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int mca_pml_ob1_irecv_init(void *addr,
</span><br>
<span class="quotelev1">&gt;                            size_t count,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_isend.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --- trunk/ompi/mca/pml/ob1/pml_ob1_isend.c    Thu Jul 31 21:00:42 2014
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       (r32387)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +++ trunk/ompi/mca/pml/ob1/pml_ob1_isend.c    2014-07-31 23:28:23 EDT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (Thu, 31 Jul 2014)      (r32388)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  @@ -26,6 +26,9 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;pml_ob1_sendreq.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;pml_ob1_recvreq.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/peruse/peruse-internal.h&quot;
</span><br>
<span class="quotelev1">&gt; +#if HAVE_ALLOCA_H
</span><br>
<span class="quotelev1">&gt; +#include &lt;alloca.h&gt;
</span><br>
<span class="quotelev1">&gt; +#endif  /* HAVE_ALLOCA_H */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int mca_pml_ob1_isend_init(void *buf,
</span><br>
<span class="quotelev1">&gt;                            size_t count,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing listsvn_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15424.php">http://www.open-mpi.org/community/lists/devel/2014/07/15424.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15427.php">http://www.open-mpi.org/community/lists/devel/2014/08/15427.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15428.php">http://www.open-mpi.org/community/lists/devel/2014/08/15428.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15430/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15431.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="15429.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>In reply to:</strong> <a href="15428.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15431.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Reply:</strong> <a href="15431.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
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
