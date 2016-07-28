<?
$subject_val = "Re: [OMPI devel] Ssh tunnelling broken in trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 19:41:25 2008" -->
<!-- isoreceived="20080402234125" -->
<!-- sent="Wed, 2 Apr 2008 18:41:17 -0500" -->
<!-- isosent="20080402234117" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ssh tunnelling broken in trunk?" -->
<!-- id="200804021841.17498.jon_at_opengridcomputing.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C4195F1F.4C0B%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-04-02 19:41:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3639.php">Jeff Squyres: "[OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>Previous message:</strong> <a href="3637.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3637.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3641.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Reply:</strong> <a href="3641.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 02 April 2008 05:04:47 pm Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Here's a real simple diagnostic you can do: set -mca plm_base_verbose 1 and
</span><br>
<span class="quotelev1">&gt; look at the cmd line being executed (send it here). It will look like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[xxx,1],0] plm:rsh: executing: jjkljks;jldfsaj;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the cmd line has --daemonize on it, then the ssh will close and xterm
</span><br>
<span class="quotelev1">&gt; won't work.
</span><br>
<p>[vic20:01863] [[40388,0],0] plm:rsh: executing: (//usr/bin/ssh) [/usr/bin/ssh 
<br>
vic12 orted --daemonize -mca ess env -mca orte_ess_jobid 2646867968 -mca 
<br>
orte_ess_vpid 1 -mca orte_ess_num_procs 
<br>
2 --hnp-uri &quot;2646867968.0;tcp://192.168.70.150:39057;tcp://10.10.0.150:39057;tcp://86.75.30.10:39057&quot; --nodename 
<br>
vic12 -mca btl openib,self --mca btl_openib_receive_queues 
<br>
P,65536,256,128,128 -mca plm_base_verbose 1 -mca 
<br>
mca_base_param_file_path /usr/mpi/gcc/ompi-trunk/share/openmpi/amca-param-sets:/root -mca 
<br>
mca_base_param_file_path_force /root]
<br>
<p><p>It looks like what you say is happening.  Is this configured somewhere, so 
<br>
that I can remove it?
<br>
<p>Thanks,
<br>
Jon
<br>
<p><span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/2/08 3:14 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Can you diagnose a little further:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. in the case where it works, can you verify that the ssh to launch
</span><br>
<span class="quotelev2">&gt; &gt; the orteds is still running?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. in the case where it doesn't work, can you verify that the ssh to
</span><br>
<span class="quotelev2">&gt; &gt; launch the orteds has actually died?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 2, 2008, at 4:58 PM, Jon Mason wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wednesday 02 April 2008 01:21:31 pm Jon Mason wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wednesday 02 April 2008 11:54:50 am Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I remember that someone had found a bug that caused
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; orte_debug_flag to not
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; get properly set (local var covering over a global one) - could be
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; your tmp-public branch doesn't have that patch in it.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; You might try updating to the latest trunk
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I updated my ompi-trunk tree, did a clean build, and I still seem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the same
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; problem.  I regressed trunk to rev 17589 and everything works as I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; expect.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So I think the problem is still there in the top of trunk.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I stepped through the revs of trunk and found the first failing rev
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 17632.  Its a big patch, so I'll defer to those more in the know to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; determine
</span><br>
<span class="quotelev3">&gt; &gt;&gt; what is breaking in there.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I don't discount user error, but I don't think I am doing anyting
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; different.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Did some setting change that perhaps I did not modify?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jon
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 4/2/08 10:41 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I'm using this feature on the trunk with the version from
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; yesterday.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; It works without problems ...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Apr 2, 2008, at 12:14 PM, Jon Mason wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Wednesday 02 April 2008 11:07:18 am Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Are these r numbers relevant on the /tmp-public branch, or the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; trunk?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I pulled it out of the command used to update the branch, which
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; was:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; svn merge -r 17590:17917 <a href="https://svn.open-mpi.org/svn/ompi/trunk">https://svn.open-mpi.org/svn/ompi/trunk</a> .
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; In the cpc tmp branch, it happened at r17920.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Jon
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 2, 2008, at 11:59 AM, Jon Mason wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I regressed my tree and it looks like it happened between
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 17590:17917
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wednesday 02 April 2008 10:22:52 am Jon Mason wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am noticing that ssh seems to be broken on trunk (and my cpc
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; branch, as
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it is based on trunk).  When I try to use xterm and gdb to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; debug, I
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; only
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; successfully get 1 xterm.  I have tried this on 2 different
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; setups.  I can
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; successfully get the xterm's on the 1.2 svn branch.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am running the following command:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --n 2 --host vic12,vic20 -mca btl tcp,self -d xterm -e
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; gdb /usr/mpi/gcc/openmpi-1.2-svn/tests/IMB-3.0/IMB-MPI1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is anyone else seeing this problem?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jon
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3639.php">Jeff Squyres: "[OMPI devel] Mercurial demo OMPI repository"</a>
<li><strong>Previous message:</strong> <a href="3637.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3637.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3641.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Reply:</strong> <a href="3641.php">Ralph Castain: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
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
