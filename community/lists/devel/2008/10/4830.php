<?
$subject_val = "[OMPI devel] Error while restarting a checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 15:29:31 2008" -->
<!-- isoreceived="20081030192931" -->
<!-- sent="Thu, 30 Oct 2008 20:32:20 +0100" -->
<!-- isosent="20081030193220" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI devel] Error while restarting a checkpoint" -->
<!-- id="490A0BC4.4050204_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Error while restarting a checkpoint<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 15:32:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4831.php">Leonardo Fialho: "Re: [OMPI devel] OOB-TCP Retries"</a>
<li><strong>Previous message:</strong> <a href="4829.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4836.php">Leonardo Fialho: "Re: [OMPI devel] Error while restarting a checkpoint"</a>
<li><strong>Reply:</strong> <a href="4836.php">Leonardo Fialho: "Re: [OMPI devel] Error while restarting a checkpoint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I&#180;m trying to restart a process from a previous checkpoint. My 
<br>
(modified) orted is trying to do this. Its uses the opal-restart 
<br>
command, but after cr_restart is called by CRS (crs:blcr: blcr_restart: 
<br>
SELF: exec :(cr_restart, cr_restart 
<br>
/tmp/radic//1/ompi_blcr_context.6507)) the SO freezes (kernel panic). 
<br>
The error generated at this moment is:
<br>
<p>&quot;Restart failed: No such device or address&quot;
<br>
<p>I think that it can be generated because the stdin/stdout/stderr from 
<br>
the checkpointed file points to undefined descriptor os something like 
<br>
this...
<br>
<p>Anybody can help about this? How can I close these descriptor before the 
<br>
checkpoint? The opal-restart open these descriptor too? What can I make 
<br>
to it works?
<br>
<p>Thanks,
<br>
<pre>
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
<li><strong>Next message:</strong> <a href="4831.php">Leonardo Fialho: "Re: [OMPI devel] OOB-TCP Retries"</a>
<li><strong>Previous message:</strong> <a href="4829.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4836.php">Leonardo Fialho: "Re: [OMPI devel] Error while restarting a checkpoint"</a>
<li><strong>Reply:</strong> <a href="4836.php">Leonardo Fialho: "Re: [OMPI devel] Error while restarting a checkpoint"</a>
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
