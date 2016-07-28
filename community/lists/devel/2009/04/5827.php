<?
$subject_val = "Re: [OMPI devel] Device failover in dr pml";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 11:18:46 2009" -->
<!-- isoreceived="20090415151846" -->
<!-- sent="Wed, 15 Apr 2009 11:18:29 -0400" -->
<!-- isosent="20090415151829" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Device failover in dr pml" -->
<!-- id="49E5FAC5.2020701_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="57F2A56F-3D17-4D0F-BD82-3FD9347CC451_at_lanl.gov" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 11:18:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5828.php">pranav jadhav: "[OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5826.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml"</a>
<li><strong>In reply to:</strong> <a href="5826.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We are also looking to get device failover working.  However, for the 
<br>
reasons cited by Ralph, we are using the OB1 PML as the starting point.  
<br>
Also, similar to you, we do not need the checksumming feature or the 
<br>
timed out retransmission that the dr PML provides. 
<br>
<p>Rolf
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Last anyone knew, the dr pml was dead - way out of date and 
</span><br>
<span class="quotelev1">&gt; unmaintained. I gather that you folks have revived it and sync'd it 
</span><br>
<span class="quotelev1">&gt; back up to the current ob1 module?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think anyone really cares what is done with the dr module 
</span><br>
<span class="quotelev1">&gt; itself. There are others working on failover modules, and there is a 
</span><br>
<span class="quotelev1">&gt; new separate checksum module that just aborts if it detects an error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I would guess you are welcome to do whatever you want to it. I 
</span><br>
<span class="quotelev1">&gt; suspect the others working on failover may speak up here too.
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
<span class="quotelev2">&gt;&gt; We are currently working on the dr pml component and specifically on 
</span><br>
<span class="quotelev2">&gt;&gt; device failover. The failover mecanism seems to work fine on 
</span><br>
<span class="quotelev2">&gt;&gt; different components, but if we want to do it on different modules of 
</span><br>
<span class="quotelev2">&gt;&gt; the same component - say 2 Infiniband rails - the code seems to be 
</span><br>
<span class="quotelev2">&gt;&gt; broken.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, when the first openib module fails, the progress function 
</span><br>
<span class="quotelev2">&gt;&gt; of the openib component is deregistered and progress is no longer 
</span><br>
<span class="quotelev2">&gt;&gt; made on any openib module. We managed to circumvent this by keeping 
</span><br>
<span class="quotelev2">&gt;&gt; the progress function as long as an openib module might be using it 
</span><br>
<span class="quotelev2">&gt;&gt; and it seems to work fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I have a few questions :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Is there already work in progress to support multi-module failover 
</span><br>
<span class="quotelev2">&gt;&gt; on the dr pml ?
</span><br>
<span class="quotelev2">&gt;&gt; 2. Do you think this is the correct way to handle multi-module 
</span><br>
<span class="quotelev2">&gt;&gt; failover ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, the fact that the &quot;dr&quot; component includes many things like 
</span><br>
<span class="quotelev2">&gt;&gt; checksuming bothers us a bit (we'd like to lower performance overhead 
</span><br>
<span class="quotelev2">&gt;&gt; as far as possible when including device failover). So,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Do you plan to fork this component to a &quot;df (device failover) 
</span><br>
<span class="quotelev2">&gt;&gt; only&quot; one ? (we would like to, but maybe this is not the right way to 
</span><br>
<span class="quotelev2">&gt;&gt; go)
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
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5828.php">pranav jadhav: "[OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Previous message:</strong> <a href="5826.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml"</a>
<li><strong>In reply to:</strong> <a href="5826.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml"</a>
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
