<?
$subject_val = "Re: [OMPI devel] RML OOB, What&#180;s wrong?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 08:33:26 2008" -->
<!-- isoreceived="20081113133326" -->
<!-- sent="Thu, 13 Nov 2008 06:33:19 -0700" -->
<!-- isosent="20081113133319" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RML OOB, What&amp;#180;s wrong?" -->
<!-- id="957451C3-1542-400C-9B3A-29C77E7A3621_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="491C2B08.3010004_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RML OOB, What&#180;s wrong?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-13 08:33:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4889.php">Ralph Castain: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Previous message:</strong> <a href="4887.php">Jeff Squyres: "[OMPI devel] Open MPI at SC'08: win a Wii!"</a>
<li><strong>In reply to:</strong> <a href="4886.php">Leonardo Fialho: "[OMPI devel] RML OOB, What&#180;s wrong?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mainly because we know that the RML and OOB are not thread safe? :-)
<br>
<p>Seriously, we know that ORTE has thread safety issues, mostly in the  
<br>
RML/OOB area, which is why we do not allow it to be used with  
<br>
threading. You are responsible for thread locking above that layer, if  
<br>
you intend to use threads.
<br>
<p>Use of the progress thread is problematic as it impacts throughout  
<br>
ORTE, which is why we don't use it. I'm not sure we have any plans to  
<br>
use it at this time, but maybe some day in the future we will invest  
<br>
the time/effort to thread-safe the RTE.
<br>
<p>Ralph
<br>
<p><p>On Nov 13, 2008, at 6:26 AM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Ralph and others,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I made two tests with the RML/OOB while a PML module (I know it is  
</span><br>
<span class="quotelev1">&gt; trange, but I need it) waits for a message  
</span><br>
<span class="quotelev1">&gt; (orte_rml_recv_buffer(...)). The first one was using the --enable- 
</span><br>
<span class="quotelev1">&gt; progress-threads and the second one without this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My test was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent a message from an orted, i.e. [[X,0],2], to an application  
</span><br>
<span class="quotelev1">&gt; process (where is the modified PML), i.e. [[X,1],0], hosted by  
</span><br>
<span class="quotelev1">&gt; another orted, i.e. [[X,0],1]. In this case the message should be  
</span><br>
<span class="quotelev1">&gt; routed by the [[X,0],1] daemon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know why, but the results are as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) With progress thread, the [[X,0],1] daemon receives the message,  
</span><br>
<span class="quotelev1">&gt; identify that it should be routed, but do not routed it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Without progress thread, the message was delivered correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if I made any mistake, but the same code which works  
</span><br>
<span class="quotelev1">&gt; for an progress thread free compilation does not work for a  
</span><br>
<span class="quotelev1">&gt; compilation with a progress thread. Why?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<li><strong>Next message:</strong> <a href="4889.php">Ralph Castain: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Previous message:</strong> <a href="4887.php">Jeff Squyres: "[OMPI devel] Open MPI at SC'08: win a Wii!"</a>
<li><strong>In reply to:</strong> <a href="4886.php">Leonardo Fialho: "[OMPI devel] RML OOB, What&#180;s wrong?"</a>
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
