<?
$subject_val = "Re: [OMPI devel] Device failover in dr pml (fwd)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 09:12:40 2009" -->
<!-- isoreceived="20090416131240" -->
<!-- sent="Thu, 16 Apr 2009 07:12:30 -0600" -->
<!-- isosent="20090416131230" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover in dr pml (fwd)" -->
<!-- id="2A0DE3C3-4276-4605-8B49-74A2097B5AE1_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0904161027100.4149_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 09:12:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<li><strong>Previous message:</strong> <a href="5830.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5829.php">Sylvain Jeaugey: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<li><strong>Reply:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds fine, though note that we don't want ob1 itself to do this as  
<br>
it inevitably adds overhead that translates into latency. Instead, we  
<br>
want that functionality to be in a separate component for those people  
<br>
who want to use it.
<br>
<p>We did talk on a telecon earlier this week about the need to refactor  
<br>
the PML so that all these various PML components don't have to keep  
<br>
tracking what is done in ob1 - bit of a pain. Nothing has been done  
<br>
yet, but hopefully at some point we'll address this issue.
<br>
<p><p>On Apr 16, 2009, at 2:33 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Well, if reviving means making device failover work, then yes, in a  
</span><br>
<span class="quotelev1">&gt; way we revived it ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are currently making mostly experiments to figure out how to have  
</span><br>
<span class="quotelev1">&gt; device failover working. No big fixes for now, and that's why we are  
</span><br>
<span class="quotelev1">&gt; posting here before going further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From what I understand, Rolf's work seems very close to what we  
</span><br>
<span class="quotelev2">&gt;&gt; want to do
</span><br>
<span class="quotelev1">&gt; and we'd better work with him on making ob1 able to do device  
</span><br>
<span class="quotelev1">&gt; failover rather than trying to work on dr.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This sound good to me : there is no reason why ob1 couldn't  
</span><br>
<span class="quotelev1">&gt; invalidate a device (e.g. if we send a signal). However, replaying  
</span><br>
<span class="quotelev1">&gt; lost sends still seems to be needed if we want to be able to handle  
</span><br>
<span class="quotelev1">&gt; a network failure. Clearly, ob1 doesn't support this yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your advices, we will continue to think about it  
</span><br>
<span class="quotelev1">&gt; and come back to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 15 Apr 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Last anyone knew, the dr pml was dead - way out of date and  
</span><br>
<span class="quotelev2">&gt;&gt; unmaintained. I gather that you folks have revived it and sync'd it  
</span><br>
<span class="quotelev2">&gt;&gt; back up to the current ob1 module?
</span><br>
<span class="quotelev2">&gt;&gt; I don't think anyone really cares what is done with the dr module  
</span><br>
<span class="quotelev2">&gt;&gt; itself. There are others working on failover modules, and there is  
</span><br>
<span class="quotelev2">&gt;&gt; a new separate checksum module that just aborts if it detects an  
</span><br>
<span class="quotelev2">&gt;&gt; error.
</span><br>
<span class="quotelev2">&gt;&gt; So I would guess you are welcome to do whatever you want to it. I  
</span><br>
<span class="quotelev2">&gt;&gt; suspect the others working on failover may speak up here too.
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 15, 2009, at 6:47 AM, Mouhamed Gueye wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are currently working on the dr pml component and specifically  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on device failover. The failover mecanism seems to work fine on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different components, but if we want to do it on different modules  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the same component - say 2 Infiniband rails - the code seems to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be broken.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually, when the first openib module fails, the progress  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function of the openib component is deregistered and progress is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no longer made on any openib module. We managed to circumvent this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by keeping the progress function as long as an openib module might  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be using it and it seems to work fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I have a few questions :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Is there already work in progress to support multi-module  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failover on the dr pml ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Do you think this is the correct way to handle multi-module  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failover ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, the fact that the &quot;dr&quot; component includes many things like  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checksuming bothers us a bit (we'd like to lower performance  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; overhead as far as possible when including device failover). So,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Do you plan to fork this component to a &quot;df (device failover)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only&quot; one ? (we would like to, but maybe this is not the right way  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to go)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's all for now,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mouhamed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<li><strong>Previous message:</strong> <a href="5830.php">pranav jadhav: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="5829.php">Sylvain Jeaugey: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<li><strong>Reply:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
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
