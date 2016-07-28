<?
$subject_val = "Re: [OMPI devel] Error while restarting a checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 10:46:56 2008" -->
<!-- isoreceived="20081031144656" -->
<!-- sent="Fri, 31 Oct 2008 15:49:35 +0100" -->
<!-- isosent="20081031144935" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error while restarting a checkpoint" -->
<!-- id="490B1AFF.9000303_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="490A0BC4.4050204_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error while restarting a checkpoint<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 10:49:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4837.php">Ralph Castain: "[OMPI devel] Dec ORTE design meeting"</a>
<li><strong>Previous message:</strong> <a href="4835.php">Jeff Squyres: "Re: [OMPI devel] 1.3 test failures"</a>
<li><strong>In reply to:</strong> <a href="4830.php">Leonardo Fialho: "[OMPI devel] Error while restarting a checkpoint"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My suspects were confirmed. After a orte_iof_base_setup_child/parent the 
<br>
problem does not occur.
<br>
<p>Leonardo
<br>
<p>Leonardo Fialho escribi&#243;:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#180;m trying to restart a process from a previous checkpoint. My 
</span><br>
<span class="quotelev1">&gt; (modified) orted is trying to do this. Its uses the opal-restart 
</span><br>
<span class="quotelev1">&gt; command, but after cr_restart is called by CRS (crs:blcr: 
</span><br>
<span class="quotelev1">&gt; blcr_restart: SELF: exec :(cr_restart, cr_restart 
</span><br>
<span class="quotelev1">&gt; /tmp/radic//1/ompi_blcr_context.6507)) the SO freezes (kernel panic). 
</span><br>
<span class="quotelev1">&gt; The error generated at this moment is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Restart failed: No such device or address&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that it can be generated because the stdin/stdout/stderr from 
</span><br>
<span class="quotelev1">&gt; the checkpointed file points to undefined descriptor os something like 
</span><br>
<span class="quotelev1">&gt; this...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anybody can help about this? How can I close these descriptor before 
</span><br>
<span class="quotelev1">&gt; the checkpoint? The opal-restart open these descriptor too? What can I 
</span><br>
<span class="quotelev1">&gt; make to it works?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<li><strong>Next message:</strong> <a href="4837.php">Ralph Castain: "[OMPI devel] Dec ORTE design meeting"</a>
<li><strong>Previous message:</strong> <a href="4835.php">Jeff Squyres: "Re: [OMPI devel] 1.3 test failures"</a>
<li><strong>In reply to:</strong> <a href="4830.php">Leonardo Fialho: "[OMPI devel] Error while restarting a checkpoint"</a>
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
