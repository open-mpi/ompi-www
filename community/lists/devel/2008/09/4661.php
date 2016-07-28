<?
$subject_val = "Re: [OMPI devel] -display-map";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 09:18:09 2008" -->
<!-- isoreceived="20080919131809" -->
<!-- sent="Fri, 19 Sep 2008 09:18:04 -0400" -->
<!-- isosent="20080919131804" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map" -->
<!-- id="9317BD55-13A2-44BE-BCC0-3E42E2322E68_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C36E96BD-E4F1-41DB-8FA3-E2483F7F7A7C_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] -display-map<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 09:18:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4662.php">Tim Mattox: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>Previous message:</strong> <a href="4660.php">Jeff Squyres: "Re: [OMPI devel] Any problems with https://svn.open-mpi.org/trac/ompi/ ??"</a>
<li><strong>In reply to:</strong> <a href="4645.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4687.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="4687.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>The problem we're seeing is just with the head node. If I specify a  
<br>
particular IP address for the head node in the hostfile, it gets  
<br>
changed to the FQDN when displayed in the map. This is a problem for  
<br>
us as we need to be able to match the two, and since we're not  
<br>
necessarily running on the head node, we can't always do the same  
<br>
resolution you're doing.
<br>
<p>Would it be possible to use the same address that is specified in the  
<br>
hostfile, or alternatively provide an XML attribute that contains this  
<br>
information?
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<p>On Sep 11, 2008, at 9:06 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Not in that regard, depending upon what you mean by &quot;recently&quot;. The  
</span><br>
<span class="quotelev1">&gt; only changes I am aware of wrt nodes consisted of some changes to  
</span><br>
<span class="quotelev1">&gt; the order in which we use the nodes when specified by hostfile or - 
</span><br>
<span class="quotelev1">&gt; host, and a little #if protectionism needed by Brian for the Cray  
</span><br>
<span class="quotelev1">&gt; port.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you seeing this for every node? Reason I ask: I can't offhand  
</span><br>
<span class="quotelev1">&gt; think of anything in the code base that would replace a host name  
</span><br>
<span class="quotelev1">&gt; with the FQDN because we don't get that info for remote nodes. The  
</span><br>
<span class="quotelev1">&gt; only exception is the head node (where mpirun sits) - in that lone  
</span><br>
<span class="quotelev1">&gt; case, we default to the name returned to us by gethostname(). We do  
</span><br>
<span class="quotelev1">&gt; that because the head node is frequently accessible on a more global  
</span><br>
<span class="quotelev1">&gt; basis than the compute nodes - thus, the FQDN is required to ensure  
</span><br>
<span class="quotelev1">&gt; that there is no address confusion on the network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the user refers to compute nodes in a hostfile or -host (or in an  
</span><br>
<span class="quotelev1">&gt; allocation from a resource manager) by non-FQDN, we just assume they  
</span><br>
<span class="quotelev1">&gt; know what they are doing and the name will correctly resolve to a  
</span><br>
<span class="quotelev1">&gt; unique address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2008, at 9:45 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has there been a change in the behavior of the -display-map option  
</span><br>
<span class="quotelev2">&gt;&gt; has changed recently in the 1.3 branch. We're now seeing the host  
</span><br>
<span class="quotelev2">&gt;&gt; name as a fully resolved DN rather than the entry that was  
</span><br>
<span class="quotelev2">&gt;&gt; specified in the hostfile. Is there any particular reason for this?  
</span><br>
<span class="quotelev2">&gt;&gt; If so, would it be possible to add the hostfile entry to the output  
</span><br>
<span class="quotelev2">&gt;&gt; since we need to be able to match the two?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
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
<li><strong>Next message:</strong> <a href="4662.php">Tim Mattox: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>Previous message:</strong> <a href="4660.php">Jeff Squyres: "Re: [OMPI devel] Any problems with https://svn.open-mpi.org/trac/ompi/ ??"</a>
<li><strong>In reply to:</strong> <a href="4645.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4687.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="4687.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
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
