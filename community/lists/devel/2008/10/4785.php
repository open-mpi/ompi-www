<?
$subject_val = "Re: [OMPI devel] -display-map";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 13:55:07 2008" -->
<!-- isoreceived="20081022175507" -->
<!-- sent="Wed, 22 Oct 2008 13:55:02 -0400" -->
<!-- isosent="20081022175502" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map" -->
<!-- id="CA149099-0EE9-4C27-8F98-6B64FDB534BE_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EFA196BB-CA06-4173-92AC-60F16767F09A_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-10-22 13:55:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4786.php">Eugene Loh: "[OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4784.php">Ralph Castain: "[OMPI devel] Component open"</a>
<li><strong>In reply to:</strong> <a href="4778.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4950.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4950.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I guess the issue for us is that we will have to run two commands to  
<br>
get the information we need. One to get the configuration information,  
<br>
such as version and MCA parameters, and one to get the host  
<br>
information, whereas it would seem more logical that this should all  
<br>
be available via some kind of &quot;configuration discovery&quot; command. I  
<br>
understand the issue with supplying the hostfile though, so maybe this  
<br>
just points at the need for us to separate configuration information  
<br>
from the host information. In any case, we'll work with what you think  
<br>
is best.
<br>
<p>Greg
<br>
<p>On Oct 20, 2008, at 4:49 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...just to be sure we are all clear on this. The reason we  
</span><br>
<span class="quotelev1">&gt; proposed to use mpirun is that &quot;hostfile&quot; has no meaning outside of  
</span><br>
<span class="quotelev1">&gt; mpirun. That's why ompi_info can't do anything in this regard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have no idea what hostfile the user may specify until we actually  
</span><br>
<span class="quotelev1">&gt; get the mpirun cmd line. They may have specified a default-hostfile,  
</span><br>
<span class="quotelev1">&gt; but they could also specify hostfiles for the individual  
</span><br>
<span class="quotelev1">&gt; app_contexts. These may or may not include the node upon which  
</span><br>
<span class="quotelev1">&gt; mpirun is executing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the only way to provide you with a separate command to get a  
</span><br>
<span class="quotelev1">&gt; hostfile&lt;-&gt;nodename mapping would require you to provide us with the  
</span><br>
<span class="quotelev1">&gt; default-hostifle and/or hostfile cmd line options just as if you  
</span><br>
<span class="quotelev1">&gt; were issuing the mpirun cmd. We just wouldn't launch - but it would  
</span><br>
<span class="quotelev1">&gt; be the exact equivalent of doing &quot;mpirun --do-not-launch&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I missing something? If so, please do correct me - I would be  
</span><br>
<span class="quotelev1">&gt; happy to provide a tool if that would make it easier. Just not sure  
</span><br>
<span class="quotelev1">&gt; what that tool would do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 19, 2008, at 1:59 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems a little strange to be using mpirun for this, but barring  
</span><br>
<span class="quotelev2">&gt;&gt; providing a separate command, or using ompi_info, I think this  
</span><br>
<span class="quotelev2">&gt;&gt; would solve our problem.
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
<span class="quotelev2">&gt;&gt; On Oct 17, 2008, at 10:46 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for delay - had to ponder this one for awhile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff and I agree that adding something to ompi_info would not be a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; good idea. Ompi_info has no knowledge or understanding of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfiles, and adding that capability to it would be a major  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distortion of its intended use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, we think we can offer an alternative that might better  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solve the problem. Remember, we now treat hostfiles in a very  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different manner than before - see the wiki page for a complete  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; description, or &quot;man orte_hosts&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the problem is that, to provide you with what you want, we need  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to &quot;dump&quot; the information from whatever default-hostfile was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provided, and, if no default-hostfile was provided, then the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information from each hostfile that was provided with an  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; app_context.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The best way we could think of to do this is to add another mpirun  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmd line option --dump-hostfiles that would output the line-by- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line name from the hostfile plus the name we resolved it to. Of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; course, --xml would cause it to be in xml format.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would that meet your needs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 15, 2008, at 3:12 PM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We've been discussing this back and forth a bit internally and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't really see an easy solution. Our problem is that Eclipse is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not running on the head node, so gethostbyname will not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; necessarily resolve to the same address. For example, the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile might refer to the head node by an internal network  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; address that is not visible to the outside world. Since  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gethostname also looks in /etc/hosts, it may resolve locally but  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not on a remote system. The only think I can think of would be,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rather than us reading the hostfile directly as we do now, to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; provide an option to ompi_info that would dump the hostfile using  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the same rules that you apply when you're using the hostfile.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Would that be feasible?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 22, 2008, at 4:25 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sorry for delay - was on vacation and am now trying to work my  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; way back to the surface.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm not sure I can fix this one for two reasons:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. In general, OMPI doesn't really care what name is used for  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the node. However, the problem is that it needs to be  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; consistent. In this case, ORTE has already used the name  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; returned by gethostname to create its session directory  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; structure long before mpirun reads a hostfile. This is why we  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; retain the value from gethostname instead of allowing it to be  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; overwritten by the name in whatever allocation we are given.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Using the name in hostfile would require that I either find some  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; way to remember any prior name, or that I tear down and rebuild  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the session directory tree - neither seems attractive nor simple  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (e.g., what happens when the user provides multiple entries in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the hostfile for the node, each with a different IP address  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; based on another interface in that node? Sounds crazy, but we  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have already seen it done - which one do I use?).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. We don't actually store the hostfile info anywhere - we just  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; use it and forget it. For us to add an XML attribute containing  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; any hostfile-related info would therefore require us to re-read  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the hostfile. I could have it do that -only- in the case of &quot;XML  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; output required&quot;, but it seems rather ugly.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; An alternative might be for you to simply do a &quot;gethostbyname&quot;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lookup of the IP address or hostname to see if it matches  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; instead of just doing a strcmp. This is what we have to do  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; internally as we frequently have problems with FQDN vs. non-FQDN  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vs. IP addresses etc. If the local OS hasn't cached the IP  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address for the node in question it can take a little time to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; DNS resolve it, but otherwise works fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can point you to the code in OPAL that we use - I would think  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something similar would be easy to implement in your code and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would readily solve the problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 19, 2008, at 7:18 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The problem we're seeing is just with the head node. If I  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; specify a particular IP address for the head node in the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hostfile, it gets changed to the FQDN when displayed in the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; map. This is a problem for us as we need to be able to match  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the two, and since we're not necessarily running on the head  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node, we can't always do the same resolution you're doing.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Would it be possible to use the same address that is specified  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in the hostfile, or alternatively provide an XML attribute that  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; contains this information?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Sep 11, 2008, at 9:06 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Not in that regard, depending upon what you mean by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;recently&quot;. The only changes I am aware of wrt nodes consisted  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; of some changes to the order in which we use the nodes when  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; specified by hostfile or -host, and a little #if protectionism  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; needed by Brian for the Cray port.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are you seeing this for every node? Reason I ask: I can't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; offhand think of anything in the code base that would replace  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a host name with the FQDN because we don't get that info for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; remote nodes. The only exception is the head node (where  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun sits) - in that lone case, we default to the name  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; returned to us by gethostname(). We do that because the head  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; node is frequently accessible on a more global basis than the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute nodes - thus, the FQDN is required to ensure that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; there is no address confusion on the network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If the user refers to compute nodes in a hostfile or -host (or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in an allocation from a resource manager) by non-FQDN, we just  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; assume they know what they are doing and the name will  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; correctly resolve to a unique address.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 10, 2008, at 9:45 AM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Has there been a change in the behavior of the -display-map  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; option has changed recently in the 1.3 branch. We're now  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; seeing the host name as a fully resolved DN rather than the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; entry that was specified in the hostfile. Is there any  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; particular reason for this? If so, would it be possible to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; add the hostfile entry to the output since we need to be able  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to match the two?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4786.php">Eugene Loh: "[OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4784.php">Ralph Castain: "[OMPI devel] Component open"</a>
<li><strong>In reply to:</strong> <a href="4778.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4950.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4950.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
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
