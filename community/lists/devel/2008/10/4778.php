<?
$subject_val = "Re: [OMPI devel] -display-map";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 16:49:26 2008" -->
<!-- isoreceived="20081020204926" -->
<!-- sent="Mon, 20 Oct 2008 14:49:19 -0600" -->
<!-- isosent="20081020204919" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map" -->
<!-- id="EFA196BB-CA06-4173-92AC-60F16767F09A_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6DDA0348-96B4-4E3F-91B4-490631CFED10_at_computer.org" -->
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
<strong>Date:</strong> 2008-10-20 16:49:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4779.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Previous message:</strong> <a href="4777.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="4777.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4785.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="4785.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...just to be sure we are all clear on this. The reason we  
<br>
proposed to use mpirun is that &quot;hostfile&quot; has no meaning outside of  
<br>
mpirun. That's why ompi_info can't do anything in this regard.
<br>
<p>We have no idea what hostfile the user may specify until we actually  
<br>
get the mpirun cmd line. They may have specified a default-hostfile,  
<br>
but they could also specify hostfiles for the individual app_contexts.  
<br>
These may or may not include the node upon which mpirun is executing.
<br>
<p>So the only way to provide you with a separate command to get a  
<br>
hostfile&lt;-&gt;nodename mapping would require you to provide us with the  
<br>
default-hostifle and/or hostfile cmd line options just as if you were  
<br>
issuing the mpirun cmd. We just wouldn't launch - but it would be the  
<br>
exact equivalent of doing &quot;mpirun --do-not-launch&quot;.
<br>
<p>Am I missing something? If so, please do correct me - I would be happy  
<br>
to provide a tool if that would make it easier. Just not sure what  
<br>
that tool would do.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Oct 19, 2008, at 1:59 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems a little strange to be using mpirun for this, but barring  
</span><br>
<span class="quotelev1">&gt; providing a separate command, or using ompi_info, I think this would  
</span><br>
<span class="quotelev1">&gt; solve our problem.
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
<span class="quotelev1">&gt; On Oct 17, 2008, at 10:46 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for delay - had to ponder this one for awhile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff and I agree that adding something to ompi_info would not be a  
</span><br>
<span class="quotelev2">&gt;&gt; good idea. Ompi_info has no knowledge or understanding of  
</span><br>
<span class="quotelev2">&gt;&gt; hostfiles, and adding that capability to it would be a major  
</span><br>
<span class="quotelev2">&gt;&gt; distortion of its intended use.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, we think we can offer an alternative that might better  
</span><br>
<span class="quotelev2">&gt;&gt; solve the problem. Remember, we now treat hostfiles in a very  
</span><br>
<span class="quotelev2">&gt;&gt; different manner than before - see the wiki page for a complete  
</span><br>
<span class="quotelev2">&gt;&gt; description, or &quot;man orte_hosts&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So the problem is that, to provide you with what you want, we need  
</span><br>
<span class="quotelev2">&gt;&gt; to &quot;dump&quot; the information from whatever default-hostfile was  
</span><br>
<span class="quotelev2">&gt;&gt; provided, and, if no default-hostfile was provided, then the  
</span><br>
<span class="quotelev2">&gt;&gt; information from each hostfile that was provided with an app_context.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The best way we could think of to do this is to add another mpirun  
</span><br>
<span class="quotelev2">&gt;&gt; cmd line option --dump-hostfiles that would output the line-by-line  
</span><br>
<span class="quotelev2">&gt;&gt; name from the hostfile plus the name we resolved it to. Of course,  
</span><br>
<span class="quotelev2">&gt;&gt; --xml would cause it to be in xml format.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would that meet your needs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 15, 2008, at 3:12 PM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've been discussing this back and forth a bit internally and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't really see an easy solution. Our problem is that Eclipse is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not running on the head node, so gethostbyname will not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; necessarily resolve to the same address. For example, the hostfile  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might refer to the head node by an internal network address that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not visible to the outside world. Since gethostname also looks  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in /etc/hosts, it may resolve locally but not on a remote system.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only think I can think of would be, rather than us reading the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile directly as we do now, to provide an option to ompi_info  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that would dump the hostfile using the same rules that you apply  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when you're using the hostfile. Would that be feasible?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 22, 2008, at 4:25 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry for delay - was on vacation and am now trying to work my  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; way back to the surface.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not sure I can fix this one for two reasons:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. In general, OMPI doesn't really care what name is used for the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node. However, the problem is that it needs to be consistent. In  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this case, ORTE has already used the name returned by gethostname  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to create its session directory structure long before mpirun  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reads a hostfile. This is why we retain the value from  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gethostname instead of allowing it to be overwritten by the name  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in whatever allocation we are given. Using the name in hostfile  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would require that I either find some way to remember any prior  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; name, or that I tear down and rebuild the session directory tree  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - neither seems attractive nor simple (e.g., what happens when  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the user provides multiple entries in the hostfile for the node,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each with a different IP address based on another interface in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that node? Sounds crazy, but we have already seen it done - which  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one do I use?).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. We don't actually store the hostfile info anywhere - we just  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use it and forget it. For us to add an XML attribute containing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any hostfile-related info would therefore require us to re-read  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the hostfile. I could have it do that -only- in the case of &quot;XML  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output required&quot;, but it seems rather ugly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; An alternative might be for you to simply do a &quot;gethostbyname&quot;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lookup of the IP address or hostname to see if it matches instead  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of just doing a strcmp. This is what we have to do internally as  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we frequently have problems with FQDN vs. non-FQDN vs. IP  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; addresses etc. If the local OS hasn't cached the IP address for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the node in question it can take a little time to DNS resolve it,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but otherwise works fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can point you to the code in OPAL that we use - I would think  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something similar would be easy to implement in your code and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would readily solve the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 19, 2008, at 7:18 AM, Greg Watson wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The problem we're seeing is just with the head node. If I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specify a particular IP address for the head node in the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hostfile, it gets changed to the FQDN when displayed in the map.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is a problem for us as we need to be able to match the two,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and since we're not necessarily running on the head node, we  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can't always do the same resolution you're doing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Would it be possible to use the same address that is specified  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the hostfile, or alternatively provide an XML attribute that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; contains this information?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 11, 2008, at 9:06 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Not in that regard, depending upon what you mean by &quot;recently&quot;.  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The only changes I am aware of wrt nodes consisted of some  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; changes to the order in which we use the nodes when specified  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; by hostfile or -host, and a little #if protectionism needed by  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Brian for the Cray port.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Are you seeing this for every node? Reason I ask: I can't  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; offhand think of anything in the code base that would replace a  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; host name with the FQDN because we don't get that info for  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; remote nodes. The only exception is the head node (where mpirun  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sits) - in that lone case, we default to the name returned to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; us by gethostname(). We do that because the head node is  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; frequently accessible on a more global basis than the compute  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nodes - thus, the FQDN is required to ensure that there is no  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; address confusion on the network.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If the user refers to compute nodes in a hostfile or -host (or  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in an allocation from a resource manager) by non-FQDN, we just  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; assume they know what they are doing and the name will  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; correctly resolve to a unique address.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Sep 10, 2008, at 9:45 AM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Has there been a change in the behavior of the -display-map  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; option has changed recently in the 1.3 branch. We're now  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; seeing the host name as a fully resolved DN rather than the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; entry that was specified in the hostfile. Is there any  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; particular reason for this? If so, would it be possible to add  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the hostfile entry to the output since we need to be able to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; match the two?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4779.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Previous message:</strong> <a href="4777.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="4777.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4785.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="4785.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
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
