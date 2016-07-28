<?
$subject_val = "Re: [OMPI users] Problem with sending messages from one of the machines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 15:43:24 2010" -->
<!-- isoreceived="20101111204324" -->
<!-- sent="Thu, 11 Nov 2010 15:43:19 -0500" -->
<!-- isosent="20101111204319" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with sending messages from one of the machines" -->
<!-- id="97706573-790A-444A-8FCD-9855EE011294_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinwf5tq_boJHfCXMe5ieaVeei9wHCDma_BqpNzo_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with sending messages from one of the machines<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 15:43:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14741.php">Jeff Squyres: "[OMPI users] Open MPI at SC'10"</a>
<li><strong>Previous message:</strong> <a href="14739.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14739.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14815.php">Grzegorz Maj: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Reply:</strong> <a href="14815.php">Grzegorz Maj: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 11, 2010, at 3:23 PM, Krzysztof Zarzycki wrote:
<br>
<p><span class="quotelev1">&gt; No, unfortunately specification of interfaces is a little more complicated...  eth0/1/2 is not common for both machines.
</span><br>
<p>Can you define &quot;common&quot;?  Do you mean that eth0 on one machine is on a different network then eth0 on the other machine?
<br>
<p>Is there any way that you can make them the same?  It would certainly make things easier.
<br>
<p><span class="quotelev1">&gt; I've tried to play with (oob/btl)_tcp_ if_include, but actually... I don't know exactly how. 
</span><br>
<p>See my other mail:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2010/11/14737.php">http://www.open-mpi.org/community/lists/users/2010/11/14737.php</a>
<br>
<p><span class="quotelev1">&gt; Anyway, do you have any ideas how to further debug the communication problem?
</span><br>
<p>The connect() is not getting through somehow.  Sadly, we don't have enough debug messages to show exactly what is going wrong when these kinds of things happen; I have a half-finished branch that has much better debug/error messages, but I've never had the time to finish it (indeed, I think there's a bug in that development branch right now, otherwise I'd recommend giving it a whirl).  :-\
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14741.php">Jeff Squyres: "[OMPI users] Open MPI at SC'10"</a>
<li><strong>Previous message:</strong> <a href="14739.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14739.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14815.php">Grzegorz Maj: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Reply:</strong> <a href="14815.php">Grzegorz Maj: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
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
