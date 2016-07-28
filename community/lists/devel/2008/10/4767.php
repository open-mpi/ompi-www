<?
$subject_val = "Re: [OMPI devel] -display-map";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 17:12:57 2008" -->
<!-- isoreceived="20081015211257" -->
<!-- sent="Wed, 15 Oct 2008 17:12:52 -0400" -->
<!-- isosent="20081015211252" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map" -->
<!-- id="22EBE824-0000-47F1-A954-8B54536BF210_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5CB48A5D-1CE3-48F7-8890-C99239B0A68B_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-10-15 17:12:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4768.php">Stephan Kramer: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Previous message:</strong> <a href="4766.php">Greg Watson: "[OMPI devel] 1.3 release date?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4687.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4772.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="4772.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>We've been discussing this back and forth a bit internally and don't  
<br>
really see an easy solution. Our problem is that Eclipse is not  
<br>
running on the head node, so gethostbyname will not necessarily  
<br>
resolve to the same address. For example, the hostfile might refer to  
<br>
the head node by an internal network address that is not visible to  
<br>
the outside world. Since gethostname also looks in /etc/hosts, it may  
<br>
resolve locally but not on a remote system. The only think I can think  
<br>
of would be, rather than us reading the hostfile directly as we do  
<br>
now, to provide an option to ompi_info that would dump the hostfile  
<br>
using the same rules that you apply when you're using the hostfile.  
<br>
Would that be feasible?
<br>
<p>Greg
<br>
<p>On Sep 22, 2008, at 4:25 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for delay - was on vacation and am now trying to work my way  
</span><br>
<span class="quotelev1">&gt; back to the surface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I can fix this one for two reasons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. In general, OMPI doesn't really care what name is used for the  
</span><br>
<span class="quotelev1">&gt; node. However, the problem is that it needs to be consistent. In  
</span><br>
<span class="quotelev1">&gt; this case, ORTE has already used the name returned by gethostname to  
</span><br>
<span class="quotelev1">&gt; create its session directory structure long before mpirun reads a  
</span><br>
<span class="quotelev1">&gt; hostfile. This is why we retain the value from gethostname instead  
</span><br>
<span class="quotelev1">&gt; of allowing it to be overwritten by the name in whatever allocation  
</span><br>
<span class="quotelev1">&gt; we are given. Using the name in hostfile would require that I either  
</span><br>
<span class="quotelev1">&gt; find some way to remember any prior name, or that I tear down and  
</span><br>
<span class="quotelev1">&gt; rebuild the session directory tree - neither seems attractive nor  
</span><br>
<span class="quotelev1">&gt; simple (e.g., what happens when the user provides multiple entries  
</span><br>
<span class="quotelev1">&gt; in the hostfile for the node, each with a different IP address based  
</span><br>
<span class="quotelev1">&gt; on another interface in that node? Sounds crazy, but we have already  
</span><br>
<span class="quotelev1">&gt; seen it done - which one do I use?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. We don't actually store the hostfile info anywhere - we just use  
</span><br>
<span class="quotelev1">&gt; it and forget it. For us to add an XML attribute containing any  
</span><br>
<span class="quotelev1">&gt; hostfile-related info would therefore require us to re-read the  
</span><br>
<span class="quotelev1">&gt; hostfile. I could have it do that -only- in the case of &quot;XML output  
</span><br>
<span class="quotelev1">&gt; required&quot;, but it seems rather ugly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An alternative might be for you to simply do a &quot;gethostbyname&quot;  
</span><br>
<span class="quotelev1">&gt; lookup of the IP address or hostname to see if it matches instead of  
</span><br>
<span class="quotelev1">&gt; just doing a strcmp. This is what we have to do internally as we  
</span><br>
<span class="quotelev1">&gt; frequently have problems with FQDN vs. non-FQDN vs. IP addresses  
</span><br>
<span class="quotelev1">&gt; etc. If the local OS hasn't cached the IP address for the node in  
</span><br>
<span class="quotelev1">&gt; question it can take a little time to DNS resolve it, but otherwise  
</span><br>
<span class="quotelev1">&gt; works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can point you to the code in OPAL that we use - I would think  
</span><br>
<span class="quotelev1">&gt; something similar would be easy to implement in your code and would  
</span><br>
<span class="quotelev1">&gt; readily solve the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2008, at 7:18 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem we're seeing is just with the head node. If I specify a  
</span><br>
<span class="quotelev2">&gt;&gt; particular IP address for the head node in the hostfile, it gets  
</span><br>
<span class="quotelev2">&gt;&gt; changed to the FQDN when displayed in the map. This is a problem  
</span><br>
<span class="quotelev2">&gt;&gt; for us as we need to be able to match the two, and since we're not  
</span><br>
<span class="quotelev2">&gt;&gt; necessarily running on the head node, we can't always do the same  
</span><br>
<span class="quotelev2">&gt;&gt; resolution you're doing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would it be possible to use the same address that is specified in  
</span><br>
<span class="quotelev2">&gt;&gt; the hostfile, or alternatively provide an XML attribute that  
</span><br>
<span class="quotelev2">&gt;&gt; contains this information?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 11, 2008, at 9:06 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not in that regard, depending upon what you mean by &quot;recently&quot;.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only changes I am aware of wrt nodes consisted of some changes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the order in which we use the nodes when specified by hostfile  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or -host, and a little #if protectionism needed by Brian for the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cray port.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you seeing this for every node? Reason I ask: I can't offhand  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think of anything in the code base that would replace a host name  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the FQDN because we don't get that info for remote nodes. The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only exception is the head node (where mpirun sits) - in that lone  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case, we default to the name returned to us by gethostname(). We  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do that because the head node is frequently accessible on a more  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; global basis than the compute nodes - thus, the FQDN is required  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to ensure that there is no address confusion on the network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the user refers to compute nodes in a hostfile or -host (or in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an allocation from a resource manager) by non-FQDN, we just assume  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they know what they are doing and the name will correctly resolve  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a unique address.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 10, 2008, at 9:45 AM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Has there been a change in the behavior of the -display-map  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; option has changed recently in the 1.3 branch. We're now seeing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the host name as a fully resolved DN rather than the entry that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was specified in the hostfile. Is there any particular reason for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this? If so, would it be possible to add the hostfile entry to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the output since we need to be able to match the two?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4768.php">Stephan Kramer: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Previous message:</strong> <a href="4766.php">Greg Watson: "[OMPI devel] 1.3 release date?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4687.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4772.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="4772.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
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
