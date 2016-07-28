<?
$subject_val = "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 20:51:59 2015" -->
<!-- isoreceived="20150724005159" -->
<!-- sent="Thu, 23 Jul 2015 17:51:53 -0700" -->
<!-- isosent="20150724005153" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6" -->
<!-- id="438851B5-76BA-4F62-AD6A-6A23E4127A2F_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DB3PR06MB0907AB2EE78CC79B20525920C7820_at_DB3PR06MB0907.eurprd06.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-23 20:51:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27319.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27317.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27314.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27319.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Reply:</strong> <a href="27319.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Reply:</strong> <a href="27350.php">Dave Love: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe qrsh will execute a simple env command across the allocated nodes - have you looked into that?
<br>
<p>The bottom line is that you simply are not getting the right orted on the remote nodes - you are getting the old one, which doesn&#146;t recognize the new command line option that mpirun is giving.
<br>
<p>Try adding &#151;prefix=&lt;install-point&gt; to your mpirun cmd line. This will force the path and ld_library_path to the correct value when executing the orted
<br>
<p>Also, you should probably add &#151;enable-orterun-prefix-by-default to your configure line to avoid having to add anything to the mpirun cmd line
<br>
<p><p><span class="quotelev1">&gt; On Jul 23, 2015, at 8:08 AM, m.delorme_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the quick answer.
</span><br>
<span class="quotelev1">&gt; I am actually using the module environment, and made my own module for openmpi-1.8.6 prepending the paths.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was so desperate to get the env right that I doubled everything : my script is running with the -V flag, I am loading the modules, and printing the env. This returns the right PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; The problem is that printing the env before mpirun will give me the environment of the master node running mpirun but not the nodes where the program will really be executed.
</span><br>
<span class="quotelev1">&gt; On the other hand, if I just try to put the env in a mpirun, then the whole thing segfaults as previously.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I am not sure I have a proper way to ensure my env variable are right.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users &lt;users-bounces_at_[hidden]&gt; on behalf of John Hearns &lt;hearnsj_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, July 23, 2015 3:53 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You say that you can run the code OK 'by hand' with an mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you assuming somehow that the Gridengine jobs will inherit your environment variables, paths etc?
</span><br>
<span class="quotelev1">&gt; If I remember correctly, you should submit wiht the  -V  option to pass over environment settings.
</span><br>
<span class="quotelev1">&gt; Even better, make sure that the job script itself sets all the paths and variables.
</span><br>
<span class="quotelev1">&gt; Have you looked at using the 'modules' environment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also submit a job script and put the 'env' command in as the first command.
</span><br>
<span class="quotelev1">&gt; Look at your output closely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 23 July 2015 at 15:45, &lt;m.delorme_at_[hidden] &lt;mailto:m.delorme_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been working on this problem for the last week, browsing the help and the mailing list with no success.
</span><br>
<span class="quotelev1">&gt; While trying to run MPI programs using SGE, I end up with seg faults every time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A bit of information on the system :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working on a 14 nodes cluster. Every node is an Intel Xeon, each composed of 2 sockets with 10 cores each (so 20 cores per node). The nodes are Infiniband connected. The job scheduler is Grid Engine as mentioned before.
</span><br>
<span class="quotelev1">&gt; Since I don't have the hand on the cluster administration, and the &quot;default&quot; installation of openMPI is an old one, I compiled and installed myself Open-MPI 1.8.6 and prepended paths (general and library) to ensure the use of my version of mpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI has been configured with the flags --with-sge, and grepping grid engine in ompi_info returns something that looks correct :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.8.6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now when running a simple script, displaying the hostname, on two slots binded on one single node, I get the following message :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [galaxy1:44361] Error: unknown option &quot;--hnp-topo-sig&quot;
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;   and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I connect to the specific host crashing and try to run the program by hand with mpirun, the whole thing executes without problem.
</span><br>
<span class="quotelev1">&gt; I made sure the libraries and path are right, that I have the rights on the node, that /tmp is accessible. I don't think the fourth point of the list is the problem, as for the last one, I suppose that if I can access the node by sshing it, SGE shouldn't have a problem with it as well ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My guess is then a problem from SGE or the integration of OpenMPI with SGE ... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I googled with no real success the &quot;hnp-topo-sig&quot;, and only got to a stackoverflow page indicating that the problem should be nodes running a different version of OpenMPI. 
</span><br>
<span class="quotelev1">&gt; I know that there is an old OpenMPI version by default on the nodes, but shouldn't prepending the paths and exporting the environment (using the -V flag in the script) be sufficient to ensure the right version of openMPI is used ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A bit of additional information, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; qconf -se orte :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pe_name            orte
</span><br>
<span class="quotelev1">&gt; slots              2000
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary FALSE
</span><br>
<span class="quotelev1">&gt; qsort_args         NONE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You will find attached the compressed log of ompi_info -a --parsable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much in advance for any suggestion, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27312.php">http://www.open-mpi.org/community/lists/users/2015/07/27312.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/07/27312.php">http://www.open-mpi.org/community/lists/users/2015/07/27312.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27314.php">http://www.open-mpi.org/community/lists/users/2015/07/27314.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27318/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27319.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27317.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27314.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27319.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Reply:</strong> <a href="27319.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Reply:</strong> <a href="27350.php">Dave Love: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
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
