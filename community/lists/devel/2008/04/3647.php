<?
$subject_val = "Re: [OMPI devel] Ssh tunnelling broken in trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 11:15:06 2008" -->
<!-- isoreceived="20080403151506" -->
<!-- sent="Thu, 3 Apr 2008 10:14:58 -0500" -->
<!-- isosent="20080403151458" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ssh tunnelling broken in trunk?" -->
<!-- id="200804031014.58196.jon_at_opengridcomputing.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C419892A.4C17%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Ssh tunnelling broken in trunk?<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 11:14:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3648.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3646.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3641.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 02 April 2008 08:04:10 pm Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm...something isn't making sense. Can I see the command line you used to
</span><br>
<span class="quotelev1">&gt; generate this?
</span><br>
<p>mpirun --n 2 --host vic12,vic20 -mca btl openib,self --mca 
<br>
btl_openib_receive_queues P,65536,256,128,128 -d xterm -e 
<br>
gdb /usr/mpi/gcc/openmpi-trunk/tests/IMB-2.3/IMB-MPI1  
<br>
<p><span class="quotelev1">&gt; I'll tell you why I'm puzzled. If orte_debug_flag is set, then the
</span><br>
<span class="quotelev1">&gt; &quot;--daemonize&quot; should NOT be there, and you should see &quot;--debug&quot; on that
</span><br>
<span class="quotelev1">&gt; command line. What I see is the reverse, which implies to me that
</span><br>
<span class="quotelev1">&gt; orte_debug_flag is NOT being set to &quot;true&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I tested here and on odin, though, I found that the -d option
</span><br>
<span class="quotelev1">&gt; correctly set the flag and everything works just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So there is something in your environment or setup that is messing up that
</span><br>
<span class="quotelev1">&gt; orte_debug_flag. I have no idea what it could be - the command line should
</span><br>
<span class="quotelev1">&gt; override anything in your environment, but you could check. Otherwise, if
</span><br>
<span class="quotelev1">&gt; this diagnostic output came from a command line that included -d or
</span><br>
<span class="quotelev1">&gt; --debug-devel, or had OMPI_MCA_orte_debug=1 in the environment, then I am
</span><br>
<span class="quotelev1">&gt; at a loss - everywhere I've tried it, it works fine.
</span><br>
<p>I'll double check and do a completely fresh svn pull and install and see where 
<br>
that gets me.
<br>
<p>Thanks for the help,
<br>
Jon
<br>
<p><p><span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/2/08 5:41 PM, &quot;Jon Mason&quot; &lt;jon_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Wednesday 02 April 2008 05:04:47 pm Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here's a real simple diagnostic you can do: set -mca plm_base_verbose 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and look at the cmd line being executed (send it here). It will look
</span><br>
<span class="quotelev3">&gt; &gt;&gt; like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [[xxx,1],0] plm:rsh: executing: jjkljks;jldfsaj;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If the cmd line has --daemonize on it, then the ssh will close and xterm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; won't work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [vic20:01863] [[40388,0],0] plm:rsh: executing: (//usr/bin/ssh)
</span><br>
<span class="quotelev2">&gt; &gt; [/usr/bin/ssh vic12 orted --daemonize -mca ess env -mca orte_ess_jobid
</span><br>
<span class="quotelev2">&gt; &gt; 2646867968 -mca orte_ess_vpid 1 -mca orte_ess_num_procs
</span><br>
<span class="quotelev2">&gt; &gt; 2 --hnp-uri
</span><br>
<span class="quotelev2">&gt; &gt; &quot;2646867968.0;tcp://192.168.70.150:39057;tcp://10.10.0.150:39057;tcp://86
</span><br>
<span class="quotelev2">&gt; &gt;.75.3 0.10:39057&quot; --nodename
</span><br>
<span class="quotelev2">&gt; &gt; vic12 -mca btl openib,self --mca btl_openib_receive_queues
</span><br>
<span class="quotelev2">&gt; &gt; P,65536,256,128,128 -mca plm_base_verbose 1 -mca
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_file_path
</span><br>
<span class="quotelev2">&gt; &gt; /usr/mpi/gcc/ompi-trunk/share/openmpi/amca-param-sets:/root -mca
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_param_file_path_force /root]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It looks like what you say is happening.  Is this configured somewhere,
</span><br>
<span class="quotelev2">&gt; &gt; so that I can remove it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Jon
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 4/2/08 3:14 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can you diagnose a little further:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1. in the case where it works, can you verify that the ssh to launch
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the orteds is still running?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2. in the case where it doesn't work, can you verify that the ssh to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; launch the orteds has actually died?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Apr 2, 2008, at 4:58 PM, Jon Mason wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Wednesday 02 April 2008 01:21:31 pm Jon Mason wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Wednesday 02 April 2008 11:54:50 am Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I remember that someone had found a bug that caused
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; orte_debug_flag to not
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; get properly set (local var covering over a global one) - could be
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; your tmp-public branch doesn't have that patch in it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; You might try updating to the latest trunk
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I updated my ompi-trunk tree, did a clean build, and I still seem
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the same
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; problem.  I regressed trunk to rev 17589 and everything works as I
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; expect.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; So I think the problem is still there in the top of trunk.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I stepped through the revs of trunk and found the first failing rev
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; to be
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 17632.  Its a big patch, so I'll defer to those more in the know to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; determine
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; what is breaking in there.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I don't discount user error, but I don't think I am doing anyting
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; different.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Did some setting change that perhaps I did not modify?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Jon
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On 4/2/08 10:41 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm using this feature on the trunk with the version from
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; yesterday.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; It works without problems ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 2, 2008, at 12:14 PM, Jon Mason wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wednesday 02 April 2008 11:07:18 am Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are these r numbers relevant on the /tmp-public branch, or the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; trunk?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I pulled it out of the command used to update the branch, which
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; was:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; svn merge -r 17590:17917 <a href="https://svn.open-mpi.org/svn/ompi/trunk">https://svn.open-mpi.org/svn/ompi/trunk</a> .
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In the cpc tmp branch, it happened at r17920.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jon
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 2, 2008, at 11:59 AM, Jon Mason wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I regressed my tree and it looks like it happened between
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17590:17917
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wednesday 02 April 2008 10:22:52 am Jon Mason wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am noticing that ssh seems to be broken on trunk (and my cpc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; branch, as
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it is based on trunk).  When I try to use xterm and gdb to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; debug, I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; only
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; successfully get 1 xterm.  I have tried this on 2 different
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setups.  I can
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; successfully get the xterm's on the 1.2 svn branch.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am running the following command:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --n 2 --host vic12,vic20 -mca btl tcp,self -d xterm -e
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; gdb /usr/mpi/gcc/openmpi-1.2-svn/tests/IMB-3.0/IMB-MPI1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is anyone else seeing this problem?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jon
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3648.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3646.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3641.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
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
