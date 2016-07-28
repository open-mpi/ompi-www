<?
$subject_val = "Re: [OMPI devel] OOB-TCP Retries";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 15:39:37 2008" -->
<!-- isoreceived="20081030193937" -->
<!-- sent="Thu, 30 Oct 2008 20:42:28 +0100" -->
<!-- isosent="20081030194228" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OOB-TCP Retries" -->
<!-- id="490A0E24.5070007_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="08B07737-C5D0-4FBF-978C-B029300F9634_at_lanl.gov" -->
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
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 15:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4832.php">Ralph Castain: "[OMPI devel] 1.3 test failures"</a>
<li><strong>Previous message:</strong> <a href="4830.php">Leonardo Fialho: "[OMPI devel] Error while restarting a checkpoint"</a>
<li><strong>In reply to:</strong> <a href="4788.php">Ralph Castain: "Re: [OMPI devel] OOB-TCP Retries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#180;m not an expert in C neither Open MPI, but I&#180;m a volunteer.
<br>
<p>Leonardo
<br>
<p>Ralph Castain escribi&#243;:
<br>
<span class="quotelev1">&gt; Sorry for delayed response - had some things to finish, then had to 
</span><br>
<span class="quotelev1">&gt; stare at this code for awhile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, the OOB is a snarled can of hideous worms. It looks to 
</span><br>
<span class="quotelev1">&gt; me that the OOB continues to attempt to complete any pending message 
</span><br>
<span class="quotelev1">&gt; requests once it detects that retries have exceeded the limit. In 
</span><br>
<span class="quotelev1">&gt; doing so, it looks like it triggers pending events, which would 
</span><br>
<span class="quotelev1">&gt; include pending sends - thus causing it to again emit that error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't swear to any of this, of course - the worms are really deep 
</span><br>
<span class="quotelev1">&gt; and tangled down there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A rewrite of the OOB is planned for next year - hopefully, the last of 
</span><br>
<span class="quotelev1">&gt; the spaghetti to be unraveled. Not sure if that will really happen, 
</span><br>
<span class="quotelev1">&gt; though, as I think everyone is afraid of that black hole of despair. 
</span><br>
<span class="quotelev1">&gt; If it does, this is one thing we can try to address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any volunteers??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 17, 2008, at 11:02 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#180;m doing some experiments and modifications in my heartbeat code 
</span><br>
<span class="quotelev2">&gt;&gt; witch uses the OOB-TCP communication channel.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My modified orteds and orterun does not abort all processes when one 
</span><br>
<span class="quotelev2">&gt;&gt; orted die.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) I kill an orted, so another orted detect the fault when try to 
</span><br>
<span class="quotelev2">&gt;&gt; send a heartbeat to the faulty orted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) The RTE get stable again, by the orted which have sent the 
</span><br>
<span class="quotelev2">&gt;&gt; heartbeat print the following oob-tcp message:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;[node1:21582] [[12518,0],1]-[[12518,0],2] oob-tcp: Communication 
</span><br>
<span class="quotelev2">&gt;&gt; retries exceeded.  Can not communicate with peer&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And the question is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a) Once an oob-tcp instance gets the mca_oob_tcp_peer_shutdown it 
</span><br>
<span class="quotelev2">&gt;&gt; discards this peer, no?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; b) The message is removed from the queue with ORTE_ERR_UNREACH code, no?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; c) Why, after retries exceed, the orted continue to plot this message?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev2">&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev2">&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="4832.php">Ralph Castain: "[OMPI devel] 1.3 test failures"</a>
<li><strong>Previous message:</strong> <a href="4830.php">Leonardo Fialho: "[OMPI devel] Error while restarting a checkpoint"</a>
<li><strong>In reply to:</strong> <a href="4788.php">Ralph Castain: "Re: [OMPI devel] OOB-TCP Retries"</a>
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
