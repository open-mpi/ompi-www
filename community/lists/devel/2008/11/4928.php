<?
$subject_val = "Re: [OMPI devel] RFC: merge windows branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 08:53:18 2008" -->
<!-- isoreceived="20081120135318" -->
<!-- sent="Thu, 20 Nov 2008 07:53:13 -0600" -->
<!-- isosent="20081120135313" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: merge windows branch into trunk" -->
<!-- id="ea86ce220811200553v77ae9f14n2ec9defac033eb3f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49256401.9020107_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: merge windows branch into trunk<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 08:53:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4929.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4927.php">Shiqing Fan: "[OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4927.php">Shiqing Fan: "[OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4929.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4929.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4930.php">Shiqing Fan: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4933.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have two concerns.  First is that we really need to focus on
<br>
getting 1.3 stable and released.  My second concern with
<br>
this is how will it effect merging of bugfixes for 1.3 from the
<br>
trunk once we release 1.3.  Will the following modified files
<br>
cause merge conflicts for CMRs?  How big is this diff,
<br>
can you send it to the list, or otherwise make it available?
<br>
<p><span class="quotelev1">&gt; M ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt; M opal/event/event.c
</span><br>
<span class="quotelev1">&gt; M opal/event/WIN32-Code/win32.c
</span><br>
<span class="quotelev1">&gt; M opal/mca/base/mca_base_param.c
</span><br>
<span class="quotelev1">&gt; M opal/mca/installdirs/windows/opal_installdirs_windows.c
</span><br>
<span class="quotelev1">&gt; M opal/runtime/opal_cr.c
</span><br>
<span class="quotelev1">&gt; M opal/win32/ompi_misc.h
</span><br>
<span class="quotelev1">&gt; M opal/win32/win_compat.h
</span><br>
<span class="quotelev1">&gt; M orte/mca/plm/ccp/plm_ccp_component.c
</span><br>
<span class="quotelev1">&gt; M orte/mca/plm/ccp/plm_ccp_module.c
</span><br>
<span class="quotelev1">&gt; M orte/mca/plm/process/plm_process_module.c
</span><br>
<span class="quotelev1">&gt; M orte/mca/ras/ccp/ras_ccp_component.c
</span><br>
<span class="quotelev1">&gt; M orte/mca/ras/ccp/ras_ccp_module.c
</span><br>
<span class="quotelev1">&gt; M orte/runtime/orte_wait.c
</span><br>
<span class="quotelev1">&gt; M orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev1">&gt; M orte/util/hnp_contact.c
</span><br>
<p>I would ask that you consider breaking these
<br>
modifications into parts that &quot;could&quot; be harmlessly
<br>
brought over independently to 1.3, if a subsequent
<br>
non-windows bugfix to one of those files needs to
<br>
be brought over that will only merge cleanly if some
<br>
of your changes to the same file are also brought over.
<br>
For example, it would be a real pain to have to use
<br>
patchfiles to resolve merge conflicts simply because
<br>
of an #ifdef or white-space change here or there.
<br>
Hopefully that made sense...
<br>
<p>Although I don't use windows myself, I appreciate your
<br>
and others' efforts to expand the number of platforms
<br>
we can run on.  Great work!
<br>
<pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4929.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4927.php">Shiqing Fan: "[OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4927.php">Shiqing Fan: "[OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4929.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4929.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4930.php">Shiqing Fan: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4933.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
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
