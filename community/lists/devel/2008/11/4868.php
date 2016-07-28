<?
$subject_val = "[OMPI devel] libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 13:29:36 2008" -->
<!-- isoreceived="20081107182936" -->
<!-- sent="Fri, 07 Nov 2008 19:32:32 +0100" -->
<!-- isosent="20081107183232" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI devel] libevent" -->
<!-- id="491489C0.5040000_at_aomail.uab.es" -->
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
<strong>Subject:</strong> [OMPI devel] libevent<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 13:32:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4869.php">George Bosilca: "Re: [OMPI devel] libevent"</a>
<li><strong>Previous message:</strong> <a href="4867.php">Timothy Hayes: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4869.php">George Bosilca: "Re: [OMPI devel] libevent"</a>
<li><strong>Reply:</strong> <a href="4869.php">George Bosilca: "Re: [OMPI devel] libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Does the libevent works with an application which does not communicate?
<br>
<p>i.e. I have an application which does not receive or send messages for a 
<br>
long time, but on the PML layer a have defined some event using the 
<br>
ORTE_TIMER_EVENT(time, func) macro. This macro will be should be called 
<br>
after time seconds, no? On my tests it does not occur, only if any 
<br>
communication occurs.
<br>
<p>Did I made any mistake?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="4869.php">George Bosilca: "Re: [OMPI devel] libevent"</a>
<li><strong>Previous message:</strong> <a href="4867.php">Timothy Hayes: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4869.php">George Bosilca: "Re: [OMPI devel] libevent"</a>
<li><strong>Reply:</strong> <a href="4869.php">George Bosilca: "Re: [OMPI devel] libevent"</a>
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
