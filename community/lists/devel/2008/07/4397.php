<?
$subject_val = "Re: [OMPI devel] LSF &amp; ompi r18978";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 14:42:59 2008" -->
<!-- isoreceived="20080722184259" -->
<!-- sent="Tue, 22 Jul 2008 12:42:36 -0600" -->
<!-- isosent="20080722184236" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] LSF &amp;amp; ompi r18978" -->
<!-- id="0AB12456-399E-4A5F-99C2-F194E1A9D2B2_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="013D03A6-E3E2-454B-BD8D-644604CF7B96_at_lri.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] LSF &amp; ompi r18978<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-22 14:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4398.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4396.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>In reply to:</strong> <a href="4395.php">Thomas Herault: "[OMPI devel] LSF &amp; ompi r18978"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! I'm really happy to see that someone is taking a look at this  
<br>
since I don't have a way to test it.
<br>
<p>I'll make these fixes and let you know what revision to check again.  
<br>
Probably later this evening.
<br>
<p>Ralph
<br>
<p>On Jul 22, 2008, at 10:38 AM, Thomas Herault wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tested compiling ompi on a LSF cluster (LSF 7.0.2) (see  
</span><br>
<span class="quotelev1">&gt; ticket 1356).
</span><br>
<span class="quotelev1">&gt; I could solve a few trivial bugs myself (see svn diff below),  
</span><br>
<span class="quotelev1">&gt; however I hit compile errors beyond my knowledge of ORTE internal  
</span><br>
<span class="quotelev1">&gt; structures in orte/mca/ras/lsf/ras_lsf_module.c and orte/mca/ras/lsf/ 
</span><br>
<span class="quotelev1">&gt; ras_lsf_component.c :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte/mca/ras/lsf/ras_lsf_module.c:49: warning: initialization from  
</span><br>
<span class="quotelev1">&gt; incompatible pointer type
</span><br>
<span class="quotelev1">&gt; orte/mca/ras/lsf/ras_lsf_module.c: In function &#145;allocate&#146;:
</span><br>
<span class="quotelev1">&gt; orte/mca/ras/lsf/ras_lsf_module.c:73: error: &#145;orte_node_t&#146; has no  
</span><br>
<span class="quotelev1">&gt; member named &#145;node_slots&#146;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte/mca/ras/lsf/ras_lsf_component.c: In function  
</span><br>
<span class="quotelev1">&gt; &#145;orte_ras_lsf_component_query&#146;:
</span><br>
<span class="quotelev1">&gt; orte/mca/ras/lsf/ras_lsf_component.c:94: error: &#145;orte_proc_info_t&#146;  
</span><br>
<span class="quotelev1">&gt; has no member named &#145;seed&#146;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This needs fixing before I can try a run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bests,
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt; INRIA - Grand-Large Project/Team
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/ras/lsf/ras_lsf_module.c   (revision 18978)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/ras/lsf/ras_lsf_module.c   (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -17,7 +17,7 @@
</span><br>
<span class="quotelev1">&gt;  * $HEADER$
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; #include &quot;orte_config.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;orte/orte_constants.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/constants.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;errno.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/ras/lsf/ras_lsf_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/ras/lsf/ras_lsf_component.c        (revision 18978)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/ras/lsf/ras_lsf_component.c        (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -21,7 +21,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;lsf/lsbatch.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#include &quot;orte/orte_constants.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/mca/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/plm/lsf/plm_lsf_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/plm/lsf/plm_lsf_component.c        (revision 18978)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/plm/lsf/plm_lsf_component.c        (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -124,7 +124,7 @@
</span><br>
<span class="quotelev1">&gt;         opal_output_verbose(10, orte_plm_globals.output,
</span><br>
<span class="quotelev1">&gt;                             &quot;plm:lsf: NOT available for selection&quot;);
</span><br>
<span class="quotelev1">&gt;         *module = NULL;
</span><br>
<span class="quotelev1">&gt; -        return ORTE_ERROR:
</span><br>
<span class="quotelev1">&gt; +        return ORTE_ERROR;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *priority = mca_plm_lsf_component.priority;
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/ess/lsf/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/ess/lsf/Makefile.am        (revision 18978)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/ess/lsf/Makefile.am        (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -17,7 +17,7 @@
</span><br>
<span class="quotelev1">&gt; # $HEADER$
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -AM_CPPFLAGS = $(pls_lsf_CPPFLAGS)
</span><br>
<span class="quotelev1">&gt; +AM_CPPFLAGS = $(ess_lsf_CPPFLAGS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sources = \
</span><br>
<span class="quotelev1">&gt;         ess_lsf.h \
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4398.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4396.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>In reply to:</strong> <a href="4395.php">Thomas Herault: "[OMPI devel] LSF &amp; ompi r18978"</a>
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
