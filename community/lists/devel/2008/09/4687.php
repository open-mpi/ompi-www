<?
$subject_val = "Re: [OMPI devel] -display-map";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 16:25:59 2008" -->
<!-- isoreceived="20080922202559" -->
<!-- sent="Mon, 22 Sep 2008 14:25:50 -0600" -->
<!-- isosent="20080922202550" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map" -->
<!-- id="5CB48A5D-1CE3-48F7-8890-C99239B0A68B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9317BD55-13A2-44BE-BCC0-3E42E2322E68_at_computer.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 16:25:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4688.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Previous message:</strong> <a href="4686.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>In reply to:</strong> <a href="4661.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4767.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4767.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delay - was on vacation and am now trying to work my way  
<br>
back to the surface.
<br>
<p>I'm not sure I can fix this one for two reasons:
<br>
<p>1. In general, OMPI doesn't really care what name is used for the  
<br>
node. However, the problem is that it needs to be consistent. In this  
<br>
case, ORTE has already used the name returned by gethostname to create  
<br>
its session directory structure long before mpirun reads a hostfile.  
<br>
This is why we retain the value from gethostname instead of allowing  
<br>
it to be overwritten by the name in whatever allocation we are given.  
<br>
Using the name in hostfile would require that I either find some way  
<br>
to remember any prior name, or that I tear down and rebuild the  
<br>
session directory tree - neither seems attractive nor simple (e.g.,  
<br>
what happens when the user provides multiple entries in the hostfile  
<br>
for the node, each with a different IP address based on another  
<br>
interface in that node? Sounds crazy, but we have already seen it done  
<br>
- which one do I use?).
<br>
<p>2. We don't actually store the hostfile info anywhere - we just use it  
<br>
and forget it. For us to add an XML attribute containing any hostfile- 
<br>
related info would therefore require us to re-read the hostfile. I  
<br>
could have it do that -only- in the case of &quot;XML output required&quot;, but  
<br>
it seems rather ugly.
<br>
<p>An alternative might be for you to simply do a &quot;gethostbyname&quot; lookup  
<br>
of the IP address or hostname to see if it matches instead of just  
<br>
doing a strcmp. This is what we have to do internally as we frequently  
<br>
have problems with FQDN vs. non-FQDN vs. IP addresses etc. If the  
<br>
local OS hasn't cached the IP address for the node in question it can  
<br>
take a little time to DNS resolve it, but otherwise works fine.
<br>
<p>I can point you to the code in OPAL that we use - I would think  
<br>
something similar would be easy to implement in your code and would  
<br>
readily solve the problem.
<br>
<p>Ralph
<br>
<p>On Sep 19, 2008, at 7:18 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem we're seeing is just with the head node. If I specify a  
</span><br>
<span class="quotelev1">&gt; particular IP address for the head node in the hostfile, it gets  
</span><br>
<span class="quotelev1">&gt; changed to the FQDN when displayed in the map. This is a problem for  
</span><br>
<span class="quotelev1">&gt; us as we need to be able to match the two, and since we're not  
</span><br>
<span class="quotelev1">&gt; necessarily running on the head node, we can't always do the same  
</span><br>
<span class="quotelev1">&gt; resolution you're doing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would it be possible to use the same address that is specified in  
</span><br>
<span class="quotelev1">&gt; the hostfile, or alternatively provide an XML attribute that  
</span><br>
<span class="quotelev1">&gt; contains this information?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 11, 2008, at 9:06 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not in that regard, depending upon what you mean by &quot;recently&quot;. The  
</span><br>
<span class="quotelev2">&gt;&gt; only changes I am aware of wrt nodes consisted of some changes to  
</span><br>
<span class="quotelev2">&gt;&gt; the order in which we use the nodes when specified by hostfile or - 
</span><br>
<span class="quotelev2">&gt;&gt; host, and a little #if protectionism needed by Brian for the Cray  
</span><br>
<span class="quotelev2">&gt;&gt; port.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you seeing this for every node? Reason I ask: I can't offhand  
</span><br>
<span class="quotelev2">&gt;&gt; think of anything in the code base that would replace a host name  
</span><br>
<span class="quotelev2">&gt;&gt; with the FQDN because we don't get that info for remote nodes. The  
</span><br>
<span class="quotelev2">&gt;&gt; only exception is the head node (where mpirun sits) - in that lone  
</span><br>
<span class="quotelev2">&gt;&gt; case, we default to the name returned to us by gethostname(). We do  
</span><br>
<span class="quotelev2">&gt;&gt; that because the head node is frequently accessible on a more  
</span><br>
<span class="quotelev2">&gt;&gt; global basis than the compute nodes - thus, the FQDN is required to  
</span><br>
<span class="quotelev2">&gt;&gt; ensure that there is no address confusion on the network.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the user refers to compute nodes in a hostfile or -host (or in  
</span><br>
<span class="quotelev2">&gt;&gt; an allocation from a resource manager) by non-FQDN, we just assume  
</span><br>
<span class="quotelev2">&gt;&gt; they know what they are doing and the name will correctly resolve  
</span><br>
<span class="quotelev2">&gt;&gt; to a unique address.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 10, 2008, at 9:45 AM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has there been a change in the behavior of the -display-map option  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has changed recently in the 1.3 branch. We're now seeing the host  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name as a fully resolved DN rather than the entry that was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specified in the hostfile. Is there any particular reason for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this? If so, would it be possible to add the hostfile entry to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output since we need to be able to match the two?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4688.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>Previous message:</strong> <a href="4686.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<li><strong>In reply to:</strong> <a href="4661.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4767.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4767.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
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
