<?
$subject_val = "Re: [OMPI devel] OOB-TCP Retries";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 14:25:39 2008" -->
<!-- isoreceived="20081022182539" -->
<!-- sent="Wed, 22 Oct 2008 12:25:32 -0600" -->
<!-- isosent="20081022182532" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OOB-TCP Retries" -->
<!-- id="08B07737-C5D0-4FBF-978C-B029300F9634_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48F8C519.50409_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OOB-TCP Retries<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 14:25:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4789.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4787.php">Jeff Squyres: "Re: [OMPI devel] Direct routed module"</a>
<li><strong>In reply to:</strong> <a href="4774.php">Leonardo Fialho: "[OMPI devel] OOB-TCP Retries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4831.php">Leonardo Fialho: "Re: [OMPI devel] OOB-TCP Retries"</a>
<li><strong>Reply:</strong> <a href="4831.php">Leonardo Fialho: "Re: [OMPI devel] OOB-TCP Retries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delayed response - had some things to finish, then had to  
<br>
stare at this code for awhile.
<br>
<p>Unfortunately, the OOB is a snarled can of hideous worms. It looks to  
<br>
me that the OOB continues to attempt to complete any pending message  
<br>
requests once it detects that retries have exceeded the limit. In  
<br>
doing so, it looks like it triggers pending events, which would  
<br>
include pending sends - thus causing it to again emit that error  
<br>
message.
<br>
<p>I can't swear to any of this, of course - the worms are really deep  
<br>
and tangled down there.
<br>
<p>A rewrite of the OOB is planned for next year - hopefully, the last of  
<br>
the spaghetti to be unraveled. Not sure if that will really happen,  
<br>
though, as I think everyone is afraid of that black hole of despair.  
<br>
If it does, this is one thing we can try to address.
<br>
<p>Any volunteers??
<br>
<p>Ralph
<br>
<p><p>On Oct 17, 2008, at 11:02 AM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#180;m doing some experiments and modifications in my heartbeat code  
</span><br>
<span class="quotelev1">&gt; witch uses the OOB-TCP communication channel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My modified orteds and orterun does not abort all processes when one  
</span><br>
<span class="quotelev1">&gt; orted die.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I kill an orted, so another orted detect the fault when try to  
</span><br>
<span class="quotelev1">&gt; send a heartbeat to the faulty orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) The RTE get stable again, by the orted which have sent the  
</span><br>
<span class="quotelev1">&gt; heartbeat print the following oob-tcp message:
</span><br>
<span class="quotelev1">&gt; &quot;[node1:21582] [[12518,0],1]-[[12518,0],2] oob-tcp: Communication  
</span><br>
<span class="quotelev1">&gt; retries exceeded.  Can not communicate with peer&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the question is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) Once an oob-tcp instance gets the mca_oob_tcp_peer_shutdown it  
</span><br>
<span class="quotelev1">&gt; discards this peer, no?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) The message is removed from the queue with ORTE_ERR_UNREACH code,  
</span><br>
<span class="quotelev1">&gt; no?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; c) Why, after retries exceed, the orted continue to plot this message?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4789.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4787.php">Jeff Squyres: "Re: [OMPI devel] Direct routed module"</a>
<li><strong>In reply to:</strong> <a href="4774.php">Leonardo Fialho: "[OMPI devel] OOB-TCP Retries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4831.php">Leonardo Fialho: "Re: [OMPI devel] OOB-TCP Retries"</a>
<li><strong>Reply:</strong> <a href="4831.php">Leonardo Fialho: "Re: [OMPI devel] OOB-TCP Retries"</a>
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
