<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 20:06:38 2009" -->
<!-- isoreceived="20090528000638" -->
<!-- sent="Wed, 27 May 2009 18:06:28 -0600" -->
<!-- isosent="20090528000628" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285" -->
<!-- id="71d2d8cc0905271706v2febbc42gaaf7529d672ba8a8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6CC466B2-361F-43CD-AD84-F02EE6265289_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 20:06:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6132.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6130.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>In reply to:</strong> <a href="6120.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First, this is in the code path where mpirun outputs to stdout/stderr.
<br>
Hardly a &quot;critical path&quot;. :-)
<br>
<p>Second, I know about the overwrite problem, but wanted to first see if this
<br>
met Greg's needs. If you look, you will see that the overwrite problem has
<br>
-always- been there in the code, but we didn't worry about it because only
<br>
Greg's team was using the xml code, and only in test mode.
<br>
<p>Now that we are settling on a solution, we can spend the extra cycles to
<br>
make it a tad more robust... :-)
<br>
<p><p>On Wed, May 27, 2009 at 9:42 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This patch is not correct. First it adds a significant overhead in terms of
</span><br>
<span class="quotelev1">&gt; if in the critical path (3 more ifs per char in the output stream), and
</span><br>
<span class="quotelev1">&gt; second it will generate random segfaults.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test for the orte_xml_output can be centralized in just one if,
</span><br>
<span class="quotelev1">&gt; reducing the overhead to one if per byte, or the whole loop can be
</span><br>
<span class="quotelev1">&gt; duplicated and the test can be done only once per message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the second problem, the correct solution is a little bit more complex.
</span><br>
<span class="quotelev1">&gt; One should check that k is small enough to replace one char by 5 without
</span><br>
<span class="quotelev1">&gt; overwriting after the end of the output buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 26, 2009, at 20:43 , rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-05-26 20:43:54 EDT (Tue, 26 May 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 21285
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21285">https://svn.open-mpi.org/trac/ompi/changeset/21285</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Modify the xml output per devel-list discussion with Greg Watson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/iof/base/iof_base_output.c |    13 +++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 13 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/iof/base/iof_base_output.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/iof/base/iof_base_output.c   (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/iof/base/iof_base_output.c   2009-05-26 20:43:54 EDT
</span><br>
<span class="quotelev2">&gt;&gt; (Tue, 26 May 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -170,6 +170,19 @@
</span><br>
<span class="quotelev2">&gt;&gt;                    output-&gt;data[k++] = starttag[j];
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; +        } else if (orte_xml_output &amp;&amp; '&amp;' == data[i]) {
</span><br>
<span class="quotelev2">&gt;&gt; +            output-&gt;data[k++] = '&amp;';
</span><br>
<span class="quotelev2">&gt;&gt; +            output-&gt;data[k++] = 'a';
</span><br>
<span class="quotelev2">&gt;&gt; +            output-&gt;data[k++] = 'm';
</span><br>
<span class="quotelev2">&gt;&gt; +            output-&gt;data[k++] = 'p';
</span><br>
<span class="quotelev2">&gt;&gt; +        } else if (orte_xml_output &amp;&amp; '&lt;' == data[i]) {
</span><br>
<span class="quotelev2">&gt;&gt; +            output-&gt;data[k++] = '&amp;';
</span><br>
<span class="quotelev2">&gt;&gt; +            output-&gt;data[k++] = 'l';
</span><br>
<span class="quotelev2">&gt;&gt; +            output-&gt;data[k++] = 't';
</span><br>
<span class="quotelev2">&gt;&gt; +        } else if (orte_xml_output &amp;&amp; '&gt;' == data[i]) {
</span><br>
<span class="quotelev2">&gt;&gt; +            output-&gt;data[k++] = '&amp;';
</span><br>
<span class="quotelev2">&gt;&gt; +            output-&gt;data[k++] = 'g';
</span><br>
<span class="quotelev2">&gt;&gt; +            output-&gt;data[k++] = 't';
</span><br>
<span class="quotelev2">&gt;&gt;        } else {
</span><br>
<span class="quotelev2">&gt;&gt;            output-&gt;data[k++] = data[i];
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6131/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6132.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6130.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>In reply to:</strong> <a href="6120.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21285"</a>
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
