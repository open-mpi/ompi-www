<?
$subject_val = "Re: [OMPI devel] autogen error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 11:50:54 2008" -->
<!-- isoreceived="20080619155054" -->
<!-- sent="Thu, 19 Jun 2008 11:50:43 -0400" -->
<!-- isosent="20080619155043" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen error" -->
<!-- id="14B12C2F-911C-406B-9813-FFACCD01BC1E_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="485A806D.2010704_at_aomail.uab.es" -->
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
<strong>Date:</strong> 2008-06-19 11:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4174.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4172.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<li><strong>In reply to:</strong> <a href="4172.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4174.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<li><strong>Reply:</strong> <a href="4174.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah!  Looks like your &quot;ls&quot; must be aliased to include colors or somesuch.
<br>
<p>So I think the real culprit here is that we need to ensure to use an  
<br>
unaliased &quot;ls&quot; when getting the list of components.  I can fix up  
<br>
autogen to do this.
<br>
<p>Ralf: if it's more correct to also quote the m4_define first argument,  
<br>
I'll do that, too.
<br>
<p><p>On Jun 19, 2008, at 11:51 AM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ aclocal -I config
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/m4:config/mca_no_configure_components.m4:9: ERROR:  
</span><br>
<span class="quotelev1">&gt; end of file in string
</span><br>
<span class="quotelev1">&gt; autom4te: /usr/local/bin/m4 failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; aclocal: autom4te failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My line 9 have some characters more (I'm not m4, expert...):
</span><br>
<span class="quotelev1">&gt; m4_define(mca_backtrace_m4_config_component_list,  
</span><br>
<span class="quotelev1">&gt; [^[[00m^[[Kexecinfo, ^[[00m^[[Kprintstack, ^[[00m^[[Kdarwin,  
</span><br>
<span class="quotelev1">&gt; ^[[00m^[[Knone])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually most of then... but line 55 seems &quot;good&quot;:
</span><br>
<span class="quotelev1">&gt; m4_define(mca_orte_framework_list, [errmgr, ess, filem, grpcomm,  
</span><br>
<span class="quotelev1">&gt; iof, odls, oob, plm, ras, rmaps, rml, routed, snapc])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I remove these strange characters from line 9 it works, and don't  
</span><br>
<span class="quotelev1">&gt; need the [ ] (brackets?) around &quot;mca_orte_framework_list&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anybody knows why I have these characters in this file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ m4 --version
</span><br>
<span class="quotelev1">&gt; m4 (GNU M4) 1.4.11
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2008 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a> 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Written by Rene' Seindal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralf Wildenhues escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Leonardo,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Leonardo Fialho wrote on Thu, Jun 19, 2008 at 04:29:30PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] aclocal -I config
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/bin/m4:config/mca_no_configure_components.m4:9: ERROR:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end of  file in string
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autom4te: /usr/local/bin/m4 failed with exit status: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aclocal: autom4te failed with exit status: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Go to the toplevel source directory.
</span><br>
<span class="quotelev2">&gt;&gt; Run
</span><br>
<span class="quotelev2">&gt;&gt;   aclocal -I config
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to confirm that it's this one that is failing.
</span><br>
<span class="quotelev2">&gt;&gt; Edit config/mca_no_configure_components.m4, changing line 9,
</span><br>
<span class="quotelev2">&gt;&gt;  m4_define(mca_backtrace_m4_config_component_list, [execinfo,  
</span><br>
<span class="quotelev2">&gt;&gt; printstack, darwin, none])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; into
</span><br>
<span class="quotelev2">&gt;&gt;  m4_define([mca_backtrace_m4_config_component_list], [execinfo,  
</span><br>
<span class="quotelev2">&gt;&gt; printstack, darwin, none])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then rerun
</span><br>
<span class="quotelev2">&gt;&gt;  aclocal -I config
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to confirm that it's failing at line 10 or later only, now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assume the file is being read by m4 twice, and that exposes the
</span><br>
<span class="quotelev2">&gt;&gt; underquotation in it: it should be
</span><br>
<span class="quotelev2">&gt;&gt;  m4_define([name], [value])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; because otherwise, the second time, 'name' will be expanded before
</span><br>
<span class="quotelev2">&gt;&gt; m4_define is called.  Jeff, please fix this in autogen.sh.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I'm wrong, then I'd like to know
</span><br>
<span class="quotelev2">&gt;&gt;  /usr/local/bin/m4 --version
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Ralf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev1">&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev1">&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev1">&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev1">&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev1">&gt; Fax: +34-93-581-2478
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4174.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4172.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<li><strong>In reply to:</strong> <a href="4172.php">Leonardo Fialho: "Re: [OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4174.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<li><strong>Reply:</strong> <a href="4174.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
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
