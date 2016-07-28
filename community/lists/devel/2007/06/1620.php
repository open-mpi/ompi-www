<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 04:29:27 2007" -->
<!-- isoreceived="20070606082927" -->
<!-- sent="Wed, 06 Jun 2007 10:27:43 +0200" -->
<!-- isosent="20070606082743" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14897" -->
<!-- id="46666FFF.4030209_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200706060342.l563gIGq024075_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-06 04:27:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1621.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>Previous message:</strong> <a href="1619.php">George Bosilca: "Re: [OMPI devel] btl_openib_exclusivity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1625.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14897"</a>
<li><strong>Reply:</strong> <a href="1625.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14897"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; +#ifdef HAVE_REGEXEC
</span><br>
<span class="quotelev1">&gt; +        args_count = opal_argv_count(options_data[i].compiler_args);
</span><br>
<span class="quotelev1">&gt; +        for (j = 0 ; j &lt; args_count ; ++j) {
</span><br>
<span class="quotelev1">&gt; +            if (0 != regcomp(&amp;res, options_data[i].compiler_args[j], REG_NOSUB)) {
</span><br>
<span class="quotelev1">&gt; +                return -1;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            if (0 == regexec(&amp;res, arg, (size_t) 0, NULL, 0)) {
</span><br>
missing regfree(&amp;res);?
<br>
<p><span class="quotelev1">&gt; +                return i;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            regfree(&amp;res);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<p>regards
<br>
Bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1621.php">Nysal Jan: "Re: [OMPI devel] jnysal-openib-wireup branch"</a>
<li><strong>Previous message:</strong> <a href="1619.php">George Bosilca: "Re: [OMPI devel] btl_openib_exclusivity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1625.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14897"</a>
<li><strong>Reply:</strong> <a href="1625.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14897"</a>
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
