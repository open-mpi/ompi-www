<?
$subject_val = "Re: [OMPI devel] autogen error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 11:29:52 2008" -->
<!-- isoreceived="20080619152952" -->
<!-- sent="Thu, 19 Jun 2008 17:29:41 +0200" -->
<!-- isosent="20080619152941" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen error" -->
<!-- id="20080619152941.GG30562_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="485A6D4A.7040601_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autogen error<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 11:29:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4171.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4169.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<li><strong>In reply to:</strong> <a href="4163.php">Leonardo Fialho: "[OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4171.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Reply:</strong> <a href="4171.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Reply:</strong> <a href="4172.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Leonardo,
<br>
<p>* Leonardo Fialho wrote on Thu, Jun 19, 2008 at 04:29:30PM CEST:
<br>
<span class="quotelev1">&gt; [Running] aclocal -I config
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/m4:config/mca_no_configure_components.m4:9: ERROR: end of  
</span><br>
<span class="quotelev1">&gt; file in string
</span><br>
<span class="quotelev1">&gt; autom4te: /usr/local/bin/m4 failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; aclocal: autom4te failed with exit status: 1
</span><br>
<p>Go to the toplevel source directory.
<br>
Run
<br>
&nbsp;&nbsp;&nbsp;aclocal -I config
<br>
<p>to confirm that it's this one that is failing.
<br>
Edit config/mca_no_configure_components.m4, changing line 9,
<br>
&nbsp;&nbsp;m4_define(mca_backtrace_m4_config_component_list, [execinfo, printstack, darwin, none])
<br>
<p>into
<br>
&nbsp;&nbsp;m4_define([mca_backtrace_m4_config_component_list], [execinfo, printstack, darwin, none])
<br>
<p>then rerun
<br>
&nbsp;&nbsp;aclocal -I config
<br>
<p>to confirm that it's failing at line 10 or later only, now.
<br>
<p>I assume the file is being read by m4 twice, and that exposes the
<br>
underquotation in it: it should be
<br>
&nbsp;&nbsp;m4_define([name], [value])
<br>
<p>because otherwise, the second time, 'name' will be expanded before
<br>
m4_define is called.  Jeff, please fix this in autogen.sh.
<br>
<p>If I'm wrong, then I'd like to know
<br>
&nbsp;&nbsp;/usr/local/bin/m4 --version
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4171.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4169.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<li><strong>In reply to:</strong> <a href="4163.php">Leonardo Fialho: "[OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4171.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Reply:</strong> <a href="4171.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Reply:</strong> <a href="4172.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
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
