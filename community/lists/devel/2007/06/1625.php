<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 10:28:48 2007" -->
<!-- isoreceived="20070606142848" -->
<!-- sent="Wed, 6 Jun 2007 08:28:19 -0600" -->
<!-- isosent="20070606142819" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14897" -->
<!-- id="253A3313-8B27-4BC8-AFEC-CB37B6ACBCCE_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46666FFF.4030209_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-06 10:28:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1626.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1624.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>In reply to:</strong> <a href="1620.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14897"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yup, thanks.
<br>
<p>Brian
<br>
<p>On Jun 6, 2007, at 2:27 AM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef HAVE_REGEXEC
</span><br>
<span class="quotelev2">&gt;&gt; +        args_count = opal_argv_count(options_data[i].compiler_args);
</span><br>
<span class="quotelev2">&gt;&gt; +        for (j = 0 ; j &lt; args_count ; ++j) {
</span><br>
<span class="quotelev2">&gt;&gt; +            if (0 != regcomp(&amp;res, options_data[i].compiler_args 
</span><br>
<span class="quotelev2">&gt;&gt; [j], REG_NOSUB)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                return -1;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            if (0 == regexec(&amp;res, arg, (size_t) 0, NULL, 0)) {
</span><br>
<span class="quotelev1">&gt; missing regfree(&amp;res);?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +                return i;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            regfree(&amp;res);
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1626.php">Tim Prins: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>Previous message:</strong> <a href="1624.php">Ralph H Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<li><strong>In reply to:</strong> <a href="1620.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14897"</a>
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
