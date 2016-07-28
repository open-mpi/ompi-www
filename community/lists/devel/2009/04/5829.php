<?
$subject_val = "Re: [OMPI devel] Device failover in dr pml (fwd)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 04:35:08 2009" -->
<!-- isoreceived="20090416083508" -->
<!-- sent="Thu, 16 Apr 2009 10:33:02 +0200 (CEST)" -->
<!-- isosent="20090416083302" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover in dr pml (fwd)" -->
<!-- id="alpine.DEB.1.10.0904161027100.4149_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI devel] Device failover in dr pml (fwd)" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Device failover in dr pml (fwd)<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 04:33:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5830.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5828.php">pranav jadhav: "[OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5831.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<li><strong>Reply:</strong> <a href="5831.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, if reviving means making device failover work, then yes, in a way we 
<br>
revived it ;)
<br>
<p>We are currently making mostly experiments to figure out how to have device 
<br>
failover working. No big fixes for now, and that's why we are posting here 
<br>
before going further.
<br>
<p><span class="quotelev1">&gt;From what I understand, Rolf's work seems very close to what we want to do 
</span><br>
and we'd better work with him on making ob1 able to do device failover 
<br>
rather than trying to work on dr.
<br>
<p>This sound good to me : there is no reason why ob1 couldn't invalidate a 
<br>
device (e.g. if we send a signal). However, replaying lost sends still 
<br>
seems to be needed if we want to be able to handle a network failure. 
<br>
Clearly, ob1 doesn't support this yet.
<br>
<p>Thanks a lot for your advices, we will continue to think about it and come 
<br>
back to you.
<br>
<p>Sylvain
<br>
<p>On Wed, 15 Apr 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Last anyone knew, the dr pml was dead - way out of date and unmaintained. I 
</span><br>
<span class="quotelev1">&gt; gather that you folks have revived it and sync'd it back up to the current 
</span><br>
<span class="quotelev1">&gt; ob1 module?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think anyone really cares what is done with the dr module itself. 
</span><br>
<span class="quotelev1">&gt; There are others working on failover modules, and there is a new separate 
</span><br>
<span class="quotelev1">&gt; checksum module that just aborts if it detects an error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I would guess you are welcome to do whatever you want to it. I suspect the 
</span><br>
<span class="quotelev1">&gt; others working on failover may speak up here too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 15, 2009, at 6:47 AM, Mouhamed Gueye wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are currently working on the dr pml component and specifically on device 
</span><br>
<span class="quotelev2">&gt;&gt; failover. The failover mecanism seems to work fine on different components, 
</span><br>
<span class="quotelev2">&gt;&gt; but if we want to do it on different modules of the same component - say 2 
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband rails - the code seems to be broken.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually, when the first openib module fails, the progress function of the 
</span><br>
<span class="quotelev2">&gt;&gt; openib component is deregistered and progress is no longer made on any 
</span><br>
<span class="quotelev2">&gt;&gt; openib module. We managed to circumvent this by keeping the progress 
</span><br>
<span class="quotelev2">&gt;&gt; function as long as an openib module might be using it and it seems to work 
</span><br>
<span class="quotelev2">&gt;&gt; fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I have a few questions :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Is there already work in progress to support multi-module failover on the 
</span><br>
<span class="quotelev2">&gt;&gt; dr pml ?
</span><br>
<span class="quotelev2">&gt;&gt; 2. Do you think this is the correct way to handle multi-module failover ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, the fact that the &quot;dr&quot; component includes many things like checksuming 
</span><br>
<span class="quotelev2">&gt;&gt; bothers us a bit (we'd like to lower performance overhead as far as possible 
</span><br>
<span class="quotelev2">&gt;&gt; when including device failover). So,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. Do you plan to fork this component to a &quot;df (device failover) only&quot; one ? 
</span><br>
<span class="quotelev2">&gt;&gt; (we would like to, but maybe this is not the right way to go)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's all for now,
</span><br>
<span class="quotelev2">&gt;&gt; Mouhamed
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5830.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5828.php">pranav jadhav: "[OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5831.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<li><strong>Reply:</strong> <a href="5831.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
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
