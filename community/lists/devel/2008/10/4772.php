<?
$subject_val = "Re: [OMPI devel] -display-map";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 10:46:53 2008" -->
<!-- isoreceived="20081017144653" -->
<!-- sent="Fri, 17 Oct 2008 08:46:47 -0600" -->
<!-- isosent="20081017144647" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map" -->
<!-- id="EDEA61F8-E092-4BAD-BDA5-EBE527D306BB_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="22EBE824-0000-47F1-A954-8B54536BF210_at_computer.org" -->
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
<strong>Date:</strong> 2008-10-17 10:46:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4773.php">Jeff Squyres: "Re: [OMPI devel] IOF 2.0"</a>
<li><strong>Previous message:</strong> <a href="4771.php">Ralph Castain: "[OMPI devel] IOF 2.0"</a>
<li><strong>In reply to:</strong> <a href="4767.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4777.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="4777.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delay - had to ponder this one for awhile.
<br>
<p>Jeff and I agree that adding something to ompi_info would not be a  
<br>
good idea. Ompi_info has no knowledge or understanding of hostfiles,  
<br>
and adding that capability to it would be a major distortion of its  
<br>
intended use.
<br>
<p>However, we think we can offer an alternative that might better solve  
<br>
the problem. Remember, we now treat hostfiles in a very different  
<br>
manner than before - see the wiki page for a complete description, or  
<br>
&quot;man orte_hosts&quot;.
<br>
<p>So the problem is that, to provide you with what you want, we need to  
<br>
&quot;dump&quot; the information from whatever default-hostfile was provided,  
<br>
and, if no default-hostfile was provided, then the information from  
<br>
each hostfile that was provided with an app_context.
<br>
<p>The best way we could think of to do this is to add another mpirun cmd  
<br>
line option --dump-hostfiles that would output the line-by-line name  
<br>
from the hostfile plus the name we resolved it to. Of course, --xml  
<br>
would cause it to be in xml format.
<br>
<p>Would that meet your needs?
<br>
<p>Ralph
<br>
<p><p>On Oct 15, 2008, at 3:12 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've been discussing this back and forth a bit internally and don't  
</span><br>
<span class="quotelev1">&gt; really see an easy solution. Our problem is that Eclipse is not  
</span><br>
<span class="quotelev1">&gt; running on the head node, so gethostbyname will not necessarily  
</span><br>
<span class="quotelev1">&gt; resolve to the same address. For example, the hostfile might refer  
</span><br>
<span class="quotelev1">&gt; to the head node by an internal network address that is not visible  
</span><br>
<span class="quotelev1">&gt; to the outside world. Since gethostname also looks in /etc/hosts, it  
</span><br>
<span class="quotelev1">&gt; may resolve locally but not on a remote system. The only think I can  
</span><br>
<span class="quotelev1">&gt; think of would be, rather than us reading the hostfile directly as  
</span><br>
<span class="quotelev1">&gt; we do now, to provide an option to ompi_info that would dump the  
</span><br>
<span class="quotelev1">&gt; hostfile using the same rules that you apply when you're using the  
</span><br>
<span class="quotelev1">&gt; hostfile. Would that be feasible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2008, at 4:25 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for delay - was on vacation and am now trying to work my way  
</span><br>
<span class="quotelev2">&gt;&gt; back to the surface.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I can fix this one for two reasons:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. In general, OMPI doesn't really care what name is used for the  
</span><br>
<span class="quotelev2">&gt;&gt; node. However, the problem is that it needs to be consistent. In  
</span><br>
<span class="quotelev2">&gt;&gt; this case, ORTE has already used the name returned by gethostname  
</span><br>
<span class="quotelev2">&gt;&gt; to create its session directory structure long before mpirun reads  
</span><br>
<span class="quotelev2">&gt;&gt; a hostfile. This is why we retain the value from gethostname  
</span><br>
<span class="quotelev2">&gt;&gt; instead of allowing it to be overwritten by the name in whatever  
</span><br>
<span class="quotelev2">&gt;&gt; allocation we are given. Using the name in hostfile would require  
</span><br>
<span class="quotelev2">&gt;&gt; that I either find some way to remember any prior name, or that I  
</span><br>
<span class="quotelev2">&gt;&gt; tear down and rebuild the session directory tree - neither seems  
</span><br>
<span class="quotelev2">&gt;&gt; attractive nor simple (e.g., what happens when the user provides  
</span><br>
<span class="quotelev2">&gt;&gt; multiple entries in the hostfile for the node, each with a  
</span><br>
<span class="quotelev2">&gt;&gt; different IP address based on another interface in that node?  
</span><br>
<span class="quotelev2">&gt;&gt; Sounds crazy, but we have already seen it done - which one do I  
</span><br>
<span class="quotelev2">&gt;&gt; use?).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. We don't actually store the hostfile info anywhere - we just use  
</span><br>
<span class="quotelev2">&gt;&gt; it and forget it. For us to add an XML attribute containing any  
</span><br>
<span class="quotelev2">&gt;&gt; hostfile-related info would therefore require us to re-read the  
</span><br>
<span class="quotelev2">&gt;&gt; hostfile. I could have it do that -only- in the case of &quot;XML output  
</span><br>
<span class="quotelev2">&gt;&gt; required&quot;, but it seems rather ugly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An alternative might be for you to simply do a &quot;gethostbyname&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; lookup of the IP address or hostname to see if it matches instead  
</span><br>
<span class="quotelev2">&gt;&gt; of just doing a strcmp. This is what we have to do internally as we  
</span><br>
<span class="quotelev2">&gt;&gt; frequently have problems with FQDN vs. non-FQDN vs. IP addresses  
</span><br>
<span class="quotelev2">&gt;&gt; etc. If the local OS hasn't cached the IP address for the node in  
</span><br>
<span class="quotelev2">&gt;&gt; question it can take a little time to DNS resolve it, but otherwise  
</span><br>
<span class="quotelev2">&gt;&gt; works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can point you to the code in OPAL that we use - I would think  
</span><br>
<span class="quotelev2">&gt;&gt; something similar would be easy to implement in your code and would  
</span><br>
<span class="quotelev2">&gt;&gt; readily solve the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 19, 2008, at 7:18 AM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem we're seeing is just with the head node. If I specify  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a particular IP address for the head node in the hostfile, it gets  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changed to the FQDN when displayed in the map. This is a problem  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for us as we need to be able to match the two, and since we're not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; necessarily running on the head node, we can't always do the same  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resolution you're doing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would it be possible to use the same address that is specified in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the hostfile, or alternatively provide an XML attribute that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contains this information?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 11, 2008, at 9:06 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not in that regard, depending upon what you mean by &quot;recently&quot;.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The only changes I am aware of wrt nodes consisted of some  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; changes to the order in which we use the nodes when specified by  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile or -host, and a little #if protectionism needed by Brian  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the Cray port.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you seeing this for every node? Reason I ask: I can't offhand  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; think of anything in the code base that would replace a host name  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the FQDN because we don't get that info for remote nodes.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The only exception is the head node (where mpirun sits) - in that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lone case, we default to the name returned to us by  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gethostname(). We do that because the head node is frequently  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; accessible on a more global basis than the compute nodes - thus,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the FQDN is required to ensure that there is no address confusion  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on the network.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If the user refers to compute nodes in a hostfile or -host (or in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an allocation from a resource manager) by non-FQDN, we just  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; assume they know what they are doing and the name will correctly  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; resolve to a unique address.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 10, 2008, at 9:45 AM, Greg Watson wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Has there been a change in the behavior of the -display-map  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; option has changed recently in the 1.3 branch. We're now seeing  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the host name as a fully resolved DN rather than the entry that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; was specified in the hostfile. Is there any particular reason  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for this? If so, would it be possible to add the hostfile entry  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to the output since we need to be able to match the two?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4773.php">Jeff Squyres: "Re: [OMPI devel] IOF 2.0"</a>
<li><strong>Previous message:</strong> <a href="4771.php">Ralph Castain: "[OMPI devel] IOF 2.0"</a>
<li><strong>In reply to:</strong> <a href="4767.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4777.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="4777.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
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
