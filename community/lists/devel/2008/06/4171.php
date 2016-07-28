<?
$subject_val = "Re: [OMPI devel] autogen error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 11:37:56 2008" -->
<!-- isoreceived="20080619153756" -->
<!-- sent="Thu, 19 Jun 2008 11:35:49 -0400" -->
<!-- isosent="20080619153549" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen error" -->
<!-- id="0C5575CE-C2DB-4EF7-A7BA-635340605047_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080619152941.GG30562_at_ins.uni-bonn.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 11:35:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4172.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4170.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<li><strong>In reply to:</strong> <a href="4170.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4172.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting!
<br>
<p>I'm happy to make the change, but can you guess as to why this is only  
<br>
biting Leonardo, and only now (after literally years of being  
<br>
underquoted)?
<br>
<p><p>On Jun 19, 2008, at 11:29 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello Leonardo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Leonardo Fialho wrote on Thu, Jun 19, 2008 at 04:29:30PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; [Running] aclocal -I config
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin/m4:config/mca_no_configure_components.m4:9: ERROR:  
</span><br>
<span class="quotelev2">&gt;&gt; end of
</span><br>
<span class="quotelev2">&gt;&gt; file in string
</span><br>
<span class="quotelev2">&gt;&gt; autom4te: /usr/local/bin/m4 failed with exit status: 1
</span><br>
<span class="quotelev2">&gt;&gt; aclocal: autom4te failed with exit status: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Go to the toplevel source directory.
</span><br>
<span class="quotelev1">&gt; Run
</span><br>
<span class="quotelev1">&gt;   aclocal -I config
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to confirm that it's this one that is failing.
</span><br>
<span class="quotelev1">&gt; Edit config/mca_no_configure_components.m4, changing line 9,
</span><br>
<span class="quotelev1">&gt;  m4_define(mca_backtrace_m4_config_component_list, [execinfo,  
</span><br>
<span class="quotelev1">&gt; printstack, darwin, none])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; into
</span><br>
<span class="quotelev1">&gt;  m4_define([mca_backtrace_m4_config_component_list], [execinfo,  
</span><br>
<span class="quotelev1">&gt; printstack, darwin, none])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then rerun
</span><br>
<span class="quotelev1">&gt;  aclocal -I config
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to confirm that it's failing at line 10 or later only, now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume the file is being read by m4 twice, and that exposes the
</span><br>
<span class="quotelev1">&gt; underquotation in it: it should be
</span><br>
<span class="quotelev1">&gt;  m4_define([name], [value])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; because otherwise, the second time, 'name' will be expanded before
</span><br>
<span class="quotelev1">&gt; m4_define is called.  Jeff, please fix this in autogen.sh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I'm wrong, then I'd like to know
</span><br>
<span class="quotelev1">&gt;  /usr/local/bin/m4 --version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4172.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4170.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<li><strong>In reply to:</strong> <a href="4170.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4172.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
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
