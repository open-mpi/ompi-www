<?
$subject_val = "Re: [OMPI devel] orte\mca\smr";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 12:53:03 2008" -->
<!-- isoreceived="20080317165303" -->
<!-- sent="Mon, 17 Mar 2008 10:52:48 -0600" -->
<!-- isosent="20080317165248" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte\mca\smr" -->
<!-- id="C403FE00.CA22%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47D550B0.50804_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte\mca\smr<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-17 12:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3449.php">Jeff Squyres: "[OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3447.php">Neil Ludban: "Re: [OMPI devel] MATLAB interface"</a>
<li><strong>In reply to:</strong> <a href="3421.php">Leonardo Fialho: "Re: [OMPI devel] orte\mca\smr"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>As Jeff stated, the smr has been removed from the system. We did this
<br>
because experience showed that monitoring process/node status was highly
<br>
system dependent and directly correlated with the launch system. Thus, it
<br>
made no sense to separate those two functions.
<br>
<p>For example, we have successfully prototyped the detection of orted/node
<br>
failure on TM based on notification from Torque when the orted fails. A
<br>
similar approach appears to be working under SLURM (one glitch remains to be
<br>
ironed out).
<br>
<p>I would think that a heartbeat protocol would primarily have applicability
<br>
in the RSH environment. We certainly wouldn't want to do it in TM or SLURM,
<br>
and I suspect that most of the other managed environments have similar
<br>
detection mechanisms.
<br>
<p>If you think there are other environments that also would need a heartbeat,
<br>
then you could put it in the PLM base and people can call it if they want to
<br>
use it. My only caveat there is that it increases our binary size since base
<br>
functions are always compiled, so we would only want to do that if we really
<br>
thought multiple environments would use it. If it is only RSH, then it would
<br>
probably better be inserted into the RSH PLM module.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p>On 3/10/08 9:16 AM, &quot;Leonardo Fialho&quot; &lt;lfialho_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to implement a heart bit/watchdog monitoring system, I&#180;m looking
</span><br>
<span class="quotelev1">&gt; for the &quot;best place&quot; to put it and I don&#180;t want to put duplicated code.
</span><br>
<span class="quotelev1">&gt; I&#180;ll try to put it into PLM for now, and when I get a Ralph&#180;s response I
</span><br>
<span class="quotelev1">&gt; change it, if necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it all got consolidated down into plm.  We need to update the
</span><br>
<span class="quotelev2">&gt;&gt; FAQ; the ORTE frameworks changed quite a bit in the recent ORTE merge...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph's on vacation this week.  A detailed answer to your question may
</span><br>
<span class="quotelev2">&gt;&gt; not occur until he returns...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 10, 2008, at 10:05 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where is the &quot;old&quot; orte\mca\smr? I don&#180;t found it in orte/mca/plm...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3449.php">Jeff Squyres: "[OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3447.php">Neil Ludban: "Re: [OMPI devel] MATLAB interface"</a>
<li><strong>In reply to:</strong> <a href="3421.php">Leonardo Fialho: "Re: [OMPI devel] orte\mca\smr"</a>
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
