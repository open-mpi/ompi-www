<?
$subject_val = "Re: [OMPI users] QLogic HCA random crash after prolonged use";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 12:24:48 2013" -->
<!-- isoreceived="20130425162448" -->
<!-- sent="Thu, 25 Apr 2013 17:24:34 +0100" -->
<!-- isosent="20130425162434" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] QLogic HCA random crash after prolonged use" -->
<!-- id="87obd2o9x9.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1182FB2B5679CE4B8BAD97725F014BB7327DB1C5_at_ORSMSX154.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] QLogic HCA random crash after prolonged use<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-25 12:24:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21795.php">Padma Pavani: "[OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<li><strong>Previous message:</strong> <a href="21793.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>In reply to:</strong> <a href="21786.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22104.php">Vanja Z: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Elken, Tom&quot; &lt;tom.elken_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev3">&gt;&gt; &gt; Intel has acquired the InfiniBand assets of QLogic
</span><br>
<span class="quotelev3">&gt;&gt; &gt; about a year ago.  These SDR HCAs are no longer supported, but should
</span><br>
<span class="quotelev3">&gt;&gt; &gt; still work.
</span><br>
<span class="quotelev1">&gt; [Tom] 
</span><br>
<span class="quotelev1">&gt; I guess the more important part of what I wrote is that &quot; These SDR HCAs are no longer supported&quot; :)
</span><br>
<p>Sure, though from our point of view, they never were.  Good riddance to
<br>
that cluster vendor, who should have gone out of business earlier.
<br>
<p><span class="quotelev1">&gt; [Tom] 
</span><br>
<span class="quotelev1">&gt; Some testing from an Intel group who had these QLE7140 HCAs revealed to me that they do _not_ work with our recent software stack such as IFS 7.1.1 (which includes OFED 1.5.4.1) .
</span><br>
<p>I suspect I had done the experiment too.
<br>
<p><span class="quotelev1">&gt; They were able to get them to work with the QLogic OFED+ 6.0.2 stack.
</span><br>
<span class="quotelev1">&gt; That corresponds to OFED 1.5.2 -- that was the first OFED to include
</span><br>
<span class="quotelev1">&gt; PSM.
</span><br>
<p>In case it helps for anyone else trying this with old kit:  I had been
<br>
using a v6.something, but I'd have to check the something.  Using the
<br>
set of &quot;updates&quot; modules built with that and the latest kernel also
<br>
provokes the crashes, binary compatibility or not.
<br>
<p><span class="quotelev1">&gt; I am providing this info as a courtesy, but not making any guarantees
</span><br>
<span class="quotelev1">&gt; that it will work.
</span><br>
<p>Understood, and thanks.
<br>
<p><span class="quotelev1">&gt; [Tom] 
</span><br>
<span class="quotelev1">&gt; The older QLogic and OFED stacks mentioned above were not ported to nor tested with RHEL 5.9, which did not exist at the time.  Sorry.
</span><br>
<p>Sure, and presumably the Red Hat module shouldn't match the hardware if
<br>
it won't work.  (The kernel supports the even older QHT cards OK -- pity
<br>
anyone running an old cluster with Mellanox added to three incompatible
<br>
lots of Infinipath and ethernet islands.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21795.php">Padma Pavani: "[OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<li><strong>Previous message:</strong> <a href="21793.php">Ralph Castain: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>In reply to:</strong> <a href="21786.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/06/22104.php">Vanja Z: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
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
