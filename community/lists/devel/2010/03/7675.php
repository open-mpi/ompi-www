<?
$subject_val = "Re: [OMPI devel] Changing BTLs at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 12:24:34 2010" -->
<!-- isoreceived="20100329162434" -->
<!-- sent="Mon, 29 Mar 2010 12:24:30 -0400" -->
<!-- isosent="20100329162430" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changing BTLs at runtime" -->
<!-- id="19C8B269-DC95-455E-A807-FB52702CFD14_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BACBAAE.4050000_at_upb.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Changing BTLs at runtime<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 12:24:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7676.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7674.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>In reply to:</strong> <a href="7666.php">Christoph Konersmann: "Re: [OMPI devel] Changing BTLs at runtime"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This line of work sounds interesting. Just wanted to add my 2 cents on  
<br>
one point below.
<br>
<p>On Mar 26, 2010, at 9:46 AM, Christoph Konersmann wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Background:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I should give some background, why I'm implementing this. Changing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI communication from a high speed network to a network with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flowcontrol (openib-&gt;tcp) is necessary for checkpointing distributed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applications in virtual machines. Ok, you are able to checkpoint  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the FT-Framework and BLCR in Open MPI, but virtual machines already
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide trivial functions for checkpointing. As you are not able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkpoint the hardware information of e.g. openib you have to get  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of it in case of a checkpoint, and change back again on resume/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; continue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not quite sure I understand.  I can see how the original model  
</span><br>
<span class="quotelev2">&gt;&gt; of CRS and SNAPC don't quite fit that of VM's, but I don't quite  
</span><br>
<span class="quotelev2">&gt;&gt; understand what switching openib -&gt;  tcp and then later tcp -&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; openib gives you...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can't you just quiesce the openib BTL, let the VM checkpoint, and  
</span><br>
<span class="quotelev2">&gt;&gt; then resume with openib?  (or whatever other non TCP/sm BTL you want)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I worked under the assumption that a virtualization might support  
</span><br>
<span class="quotelev1">&gt; InfiniBand through SR-IOV. So every virtual machine has the  
</span><br>
<span class="quotelev1">&gt; possibility to use it at full speed. Just starving out the  
</span><br>
<span class="quotelev1">&gt; communication between InfiniBand devices would not help in case of  
</span><br>
<span class="quotelev1">&gt; migration when the underlying hardware and its configuration would  
</span><br>
<span class="quotelev1">&gt; change. Therefore I have to unload the desired BTL module. To make  
</span><br>
<span class="quotelev1">&gt; sure that absolutely no bml uses infiniband for transfer anymore, I  
</span><br>
<span class="quotelev1">&gt; change the communication to another device whose protocol is known  
</span><br>
<span class="quotelev1">&gt; to work with migrating virtual machines, like tcp.
</span><br>
<p>A few papers have pointed out the difficulties of support InfiniBand  
<br>
in a virtualization environment where migration is a wanted feature.  
<br>
Most solutions involve shutting down the InfiniBand network, moving  
<br>
the process, then restarting the communication. It's a neat idea to  
<br>
shift the network load to the TCP network to allow the application to  
<br>
continue communication (though at diminished performance) during the  
<br>
migration to work around the InfiniBand issue.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Checkpointing would work with just quiesce the communication if the  
</span><br>
<span class="quotelev1">&gt; infiniband hardware will not changed.
</span><br>
<p>Just wanted to mention that in Open MPI we have the ability to choose  
<br>
a new set of BTLs on restart in our current C/R infrastructure. So we  
<br>
can checkpoint process A which was communicating with process B over  
<br>
'openib', and then restart them on the same machine and have them  
<br>
transparently switch to 'sm'. Then we can move them apart and have  
<br>
them pick another set of BTLs for communication (either 'tcp' or back  
<br>
to 'openib' or something else entirely like 'mx').
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Christoph Konersmann
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paderborn Center for Parallel Computing - PC2
</span><br>
<span class="quotelev1">&gt; University of Paderborn - Germany
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pc2.de">http://www.pc2.de</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christoph Konersmann &lt;c_k_at_[hidden]&gt;
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
<li><strong>Next message:</strong> <a href="7676.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7674.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>In reply to:</strong> <a href="7666.php">Christoph Konersmann: "Re: [OMPI devel] Changing BTLs at runtime"</a>
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
