<?
$subject_val = "Re: [OMPI devel] Device failover in dr pml";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 08:57:25 2009" -->
<!-- isoreceived="20090415125725" -->
<!-- sent="Wed, 15 Apr 2009 06:57:17 -0600" -->
<!-- isosent="20090415125717" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover in dr pml" -->
<!-- id="57F2A56F-3D17-4D0F-BD82-3FD9347CC451_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49E5D762.2020408_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Device failover in dr pml<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 08:57:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5827.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover in dr pml"</a>
<li><strong>Previous message:</strong> <a href="5825.php">Mouhamed Gueye: "[OMPI devel] Device failover in dr pml"</a>
<li><strong>In reply to:</strong> <a href="5825.php">Mouhamed Gueye: "[OMPI devel] Device failover in dr pml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5827.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover in dr pml"</a>
<li><strong>Reply:</strong> <a href="5827.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover in dr pml"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Last anyone knew, the dr pml was dead - way out of date and  
<br>
unmaintained. I gather that you folks have revived it and sync'd it  
<br>
back up to the current ob1 module?
<br>
<p>I don't think anyone really cares what is done with the dr module  
<br>
itself. There are others working on failover modules, and there is a  
<br>
new separate checksum module that just aborts if it detects an error.
<br>
<p>So I would guess you are welcome to do whatever you want to it. I  
<br>
suspect the others working on failover may speak up here too.
<br>
<p><p>On Apr 15, 2009, at 6:47 AM, Mouhamed Gueye wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are currently working on the dr pml component and specifically on  
</span><br>
<span class="quotelev1">&gt; device failover. The failover mecanism seems to work fine on  
</span><br>
<span class="quotelev1">&gt; different components, but if we want to do it on different modules  
</span><br>
<span class="quotelev1">&gt; of the same component - say 2 Infiniband rails - the code seems to  
</span><br>
<span class="quotelev1">&gt; be broken.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, when the first openib module fails, the progress function  
</span><br>
<span class="quotelev1">&gt; of the openib component is deregistered and progress is no longer  
</span><br>
<span class="quotelev1">&gt; made on any openib module. We managed to circumvent this by keeping  
</span><br>
<span class="quotelev1">&gt; the progress function as long as an openib module might be using it  
</span><br>
<span class="quotelev1">&gt; and it seems to work fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I have a few questions :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Is there already work in progress to support multi-module  
</span><br>
<span class="quotelev1">&gt; failover on the dr pml ?
</span><br>
<span class="quotelev1">&gt; 2. Do you think this is the correct way to handle multi-module  
</span><br>
<span class="quotelev1">&gt; failover ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, the fact that the &quot;dr&quot; component includes many things like  
</span><br>
<span class="quotelev1">&gt; checksuming bothers us a bit (we'd like to lower performance  
</span><br>
<span class="quotelev1">&gt; overhead as far as possible when including device failover). So,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Do you plan to fork this component to a &quot;df (device failover)  
</span><br>
<span class="quotelev1">&gt; only&quot; one ? (we would like to, but maybe this is not the right way  
</span><br>
<span class="quotelev1">&gt; to go)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's all for now,
</span><br>
<span class="quotelev1">&gt; Mouhamed
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
<li><strong>Next message:</strong> <a href="5827.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover in dr pml"</a>
<li><strong>Previous message:</strong> <a href="5825.php">Mouhamed Gueye: "[OMPI devel] Device failover in dr pml"</a>
<li><strong>In reply to:</strong> <a href="5825.php">Mouhamed Gueye: "[OMPI devel] Device failover in dr pml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5827.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover in dr pml"</a>
<li><strong>Reply:</strong> <a href="5827.php">Rolf Vandevaart: "Re: [OMPI devel] Device failover in dr pml"</a>
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
