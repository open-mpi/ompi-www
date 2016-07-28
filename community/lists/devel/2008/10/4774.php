<?
$subject_val = "[OMPI devel] OOB-TCP Retries";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 12:59:24 2008" -->
<!-- isoreceived="20081017165924" -->
<!-- sent="Fri, 17 Oct 2008 19:02:17 +0200" -->
<!-- isosent="20081017170217" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI devel] OOB-TCP Retries" -->
<!-- id="48F8C519.50409_at_aomail.uab.es" -->
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
<strong>Subject:</strong> [OMPI devel] OOB-TCP Retries<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 13:02:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4775.php">Jeff Squyres: "Re: [OMPI devel] lamtest fail to make for undefined reference"</a>
<li><strong>Previous message:</strong> <a href="4773.php">Jeff Squyres: "Re: [OMPI devel] IOF 2.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4788.php">Ralph Castain: "Re: [OMPI devel] OOB-TCP Retries"</a>
<li><strong>Reply:</strong> <a href="4788.php">Ralph Castain: "Re: [OMPI devel] OOB-TCP Retries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I&#180;m doing some experiments and modifications in my heartbeat code witch 
<br>
uses the OOB-TCP communication channel.
<br>
<p>My modified orteds and orterun does not abort all processes when one 
<br>
orted die.
<br>
<p>The problem is:
<br>
<p>1) I kill an orted, so another orted detect the fault when try to send a 
<br>
heartbeat to the faulty orted.
<br>
<p>2) The RTE get stable again, by the orted which have sent the heartbeat 
<br>
print the following oob-tcp message:
<br>
&quot;[node1:21582] [[12518,0],1]-[[12518,0],2] oob-tcp: Communication 
<br>
retries exceeded.  Can not communicate with peer&quot;
<br>
<p>And the question is:
<br>
<p>a) Once an oob-tcp instance gets the mca_oob_tcp_peer_shutdown it 
<br>
discards this peer, no?
<br>
<p>b) The message is removed from the queue with ORTE_ERR_UNREACH code, no?
<br>
<p>c) Why, after retries exceed, the orted continue to plot this message?
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
<li><strong>Next message:</strong> <a href="4775.php">Jeff Squyres: "Re: [OMPI devel] lamtest fail to make for undefined reference"</a>
<li><strong>Previous message:</strong> <a href="4773.php">Jeff Squyres: "Re: [OMPI devel] IOF 2.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4788.php">Ralph Castain: "Re: [OMPI devel] OOB-TCP Retries"</a>
<li><strong>Reply:</strong> <a href="4788.php">Ralph Castain: "Re: [OMPI devel] OOB-TCP Retries"</a>
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
