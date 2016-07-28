<?
$subject_val = "Re: [OMPI devel] autogen error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 11:48:40 2008" -->
<!-- isoreceived="20080619154840" -->
<!-- sent="Thu, 19 Jun 2008 17:51:09 +0200" -->
<!-- isosent="20080619155109" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen error" -->
<!-- id="485A806D.2010704_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 11:51:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4171.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>In reply to:</strong> <a href="4170.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Reply:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralf,
<br>
<p>$ aclocal -I config
<br>
/usr/local/bin/m4:config/mca_no_configure_components.m4:9: ERROR: end of 
<br>
file in string
<br>
autom4te: /usr/local/bin/m4 failed with exit status: 1
<br>
aclocal: autom4te failed with exit status: 1
<br>
$
<br>
<p>My line 9 have some characters more (I'm not m4, expert...):
<br>
m4_define(mca_backtrace_m4_config_component_list, [^[[00m^[[Kexecinfo, 
<br>
^[[00m^[[Kprintstack, ^[[00m^[[Kdarwin, ^[[00m^[[Knone])
<br>
<p>Actually most of then... but line 55 seems &quot;good&quot;:
<br>
m4_define(mca_orte_framework_list, [errmgr, ess, filem, grpcomm, iof, 
<br>
odls, oob, plm, ras, rmaps, rml, routed, snapc])
<br>
<p>If I remove these strange characters from line 9 it works, and don't 
<br>
need the [ ] (brackets?) around &quot;mca_orte_framework_list&quot;.
<br>
<p>Anybody knows why I have these characters in this file?
<br>
<p>$ m4 --version
<br>
m4 (GNU M4) 1.4.11
<br>
Copyright (C) 2008 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later 
<br>
&lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.
<br>
<p>Written by Rene' Seindal.
<br>
<p>Leonardo
<br>
<p>Ralf Wildenhues escribi&#243;:
<br>
<span class="quotelev1">&gt; Hello Leonardo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Leonardo Fialho wrote on Thu, Jun 19, 2008 at 04:29:30PM CEST:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; [Running] aclocal -I config
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin/m4:config/mca_no_configure_components.m4:9: ERROR: end of  
</span><br>
<span class="quotelev2">&gt;&gt; file in string
</span><br>
<span class="quotelev2">&gt;&gt; autom4te: /usr/local/bin/m4 failed with exit status: 1
</span><br>
<span class="quotelev2">&gt;&gt; aclocal: autom4te failed with exit status: 1
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Go to the toplevel source directory.
</span><br>
<span class="quotelev1">&gt; Run
</span><br>
<span class="quotelev1">&gt;    aclocal -I config
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to confirm that it's this one that is failing.
</span><br>
<span class="quotelev1">&gt; Edit config/mca_no_configure_components.m4, changing line 9,
</span><br>
<span class="quotelev1">&gt;   m4_define(mca_backtrace_m4_config_component_list, [execinfo, printstack, darwin, none])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; into
</span><br>
<span class="quotelev1">&gt;   m4_define([mca_backtrace_m4_config_component_list], [execinfo, printstack, darwin, none])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then rerun
</span><br>
<span class="quotelev1">&gt;   aclocal -I config
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
<span class="quotelev1">&gt;   m4_define([name], [value])
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
<span class="quotelev1">&gt;   /usr/local/bin/m4 --version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4171.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>In reply to:</strong> <a href="4170.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Reply:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
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
