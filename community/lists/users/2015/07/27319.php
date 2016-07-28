<?
$subject_val = "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 04:31:41 2015" -->
<!-- isoreceived="20150724083141" -->
<!-- sent="Fri, 24 Jul 2015 08:31:36 +0000" -->
<!-- isosent="20150724083136" -->
<!-- name="m.delorme_at_[hidden]" -->
<!-- email="m.delorme_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6" -->
<!-- id="DB3PR06MB09075C8E6FEC9EE047DD5ED1C7810_at_DB3PR06MB0907.eurprd06.prod.outlook.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="438851B5-76BA-4F62-AD6A-6A23E4127A2F_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:m.delorme_at_[hidden]?Subject=Re:%20[OMPI%20users]%20SGE%20segfaulting%20with%20OpenMPI%201.8.6"><em>m.delorme_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-07-24 04:31:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27320.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Previous message:</strong> <a href="27318.php">Ralph Castain: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>In reply to:</strong> <a href="27318.php">Ralph Castain: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27350.php">Dave Love: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>Thanks a lot, it seems to be working using the --prefix on mpirun.
<br>
<p>I have trouble understanding why using the right flags or exporting &quot;by hand&quot; with -x PATH -x LD_LIBRARY_PATH do not work.
<br>
<p>In any case, the --prefix option works so that's a good starting point.
<br>
<p><p>Thank you again,
<br>
<p><p>MD
<br>
<p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Sent: Friday, July 24, 2015 1:51 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6
<br>
<p>I believe qrsh will execute a simple env command across the allocated nodes - have you looked into that?
<br>
<p>The bottom line is that you simply are not getting the right orted on the remote nodes - you are getting the old one, which doesn&#146;t recognize the new command line option that mpirun is giving.
<br>
<p>Try adding &#151;prefix=&lt;install-point&gt; to your mpirun cmd line. This will force the path and ld_library_path to the correct value when executing the orted
<br>
<p>Also, you should probably add &#151;enable-orterun-prefix-by-default to your configure line to avoid having to add anything to the mpirun cmd line
<br>
<p><p>On Jul 23, 2015, at 8:08 AM, m.delorme_at_[hidden]&lt;mailto:m.delorme_at_[hidden]&gt; wrote:
<br>
<p><p>hi,
<br>
<p><p>Thanks for the quick answer.
<br>
<p>I am actually using the module environment, and made my own module for openmpi-1.8.6 prepending the paths.
<br>
<p><p>I was so desperate to get the env right that I doubled everything : my script is running with the -V flag, I am loading the modules, and printing the env. This returns the right PATH and LD_LIBRARY_PATH
<br>
<p>The problem is that printing the env before mpirun will give me the environment of the master node running mpirun but not the nodes where the program will really be executed.
<br>
<p>On the other hand, if I just try to put the env in a mpirun, then the whole thing segfaults as previously.
<br>
<p><p>So I am not sure I have a proper way to ensure my env variable are right.
<br>
<p><p>MD
<br>
<p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of John Hearns &lt;hearnsj_at_[hidden]&lt;mailto:hearnsj_at_[hidden]&gt;&gt;
<br>
Sent: Thursday, July 23, 2015 3:53 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6
<br>
<p>You say that you can run the code OK 'by hand' with an mpirun.
<br>
<p>Are you assuming somehow that the Gridengine jobs will inherit your environment variables, paths etc?
<br>
If I remember correctly, you should submit wiht the  -V  option to pass over environment settings.
<br>
Even better, make sure that the job script itself sets all the paths and variables.
<br>
Have you looked at using the 'modules' environment?
<br>
<p>Also submit a job script and put the 'env' command in as the first command.
<br>
Look at your output closely.
<br>
<p><p><p><p>On 23 July 2015 at 15:45, &lt;m.delorme_at_[hidden]&lt;mailto:m.delorme_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hello,
<br>
<p><p>I have been working on this problem for the last week, browsing the help and the mailing list with no success.
<br>
<p>While trying to run MPI programs using SGE, I end up with seg faults every time.
<br>
<p><p>A bit of information on the system :
<br>
<p><p>I am working on a 14 nodes cluster. Every node is an Intel Xeon, each composed of 2 sockets with 10 cores each (so 20 cores per node). The nodes are Infiniband connected. The job scheduler is Grid Engine as mentioned before.
<br>
<p>Since I don't have the hand on the cluster administration, and the &quot;default&quot; installation of openMPI is an old one, I compiled and installed myself Open-MPI 1.8.6 and prepended paths (general and library) to ensure the use of my version of mpi.
<br>
<p><p>Open MPI has been configured with the flags --with-sge, and grepping grid engine in ompi_info returns something that looks correct :
<br>
<p><p>MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.8.6)
<br>
<p><p><p>Now when running a simple script, displaying the hostname, on two slots binded on one single node, I get the following message :
<br>
<p><p>[galaxy1:44361] Error: unknown option &quot;--hnp-topo-sig&quot;
<br>
<p>Segmentation fault
<br>
<p>--------------------------------------------------------------------------
<br>
<p>ORTE was unable to reliably start one or more daemons.
<br>
<p>This usually is caused by:
<br>
<p><p>* not finding the required libraries and/or binaries on
<br>
<p>&nbsp;&nbsp;one or more nodes. Please check your PATH and LD_LIBRARY_PATH
<br>
<p>&nbsp;&nbsp;settings, or configure OMPI with --enable-orterun-prefix-by-default
<br>
<p><p>* lack of authority to execute on one or more specified nodes.
<br>
<p>&nbsp;&nbsp;Please verify your allocation and authorities.
<br>
<p><p>* the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
<br>
<p>&nbsp;&nbsp;Please check with your sys admin to determine the correct location to use.
<br>
<p><p>*  compilation of the orted with dynamic libraries when static are required
<br>
<p>&nbsp;&nbsp;(e.g., on Cray). Please check your configure cmd line and consider using
<br>
<p>&nbsp;&nbsp;one of the contrib/platform definitions for your system type.
<br>
<p><p>* an inability to create a connection back to mpirun due to a
<br>
<p>&nbsp;&nbsp;lack of common network interfaces and/or no route found between
<br>
<p>&nbsp;&nbsp;them. Please check network connectivity (including firewalls
<br>
<p>&nbsp;&nbsp;and network routing requirements).
<br>
<p>--------------------------------------------------------------------------
<br>
<p><p>When I connect to the specific host crashing and try to run the program by hand with mpirun, the whole thing executes without problem.
<br>
I made sure the libraries and path are right, that I have the rights on the node, that /tmp is accessible. I don't think the fourth point of the list is the problem, as for the last one, I suppose that if I can access the node by sshing it, SGE shouldn't have a problem with it as well ...
<br>
<p>My guess is then a problem from SGE or the integration of OpenMPI with SGE ...
<br>
<p>I googled with no real success the &quot;hnp-topo-sig&quot;, and only got to a stackoverflow page indicating that the problem should be nodes running a different version of OpenMPI.
<br>
I know that there is an old OpenMPI version by default on the nodes, but shouldn't prepending the paths and exporting the environment (using the -V flag in the script) be sufficient to ensure the right version of openMPI is used ?
<br>
<p>A bit of additional information,
<br>
<p>qconf -se orte :
<br>
<p>pe_name            orte
<br>
slots              2000
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
allocation_rule    $fill_up
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary FALSE
<br>
qsort_args         NONE
<br>
<p><p>You will find attached the compressed log of ompi_info -a --parsable
<br>
<p><p><p>Thank you very much in advance for any suggestion,
<br>
<p><p>MD
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27312.php">http://www.open-mpi.org/community/lists/users/2015/07/27312.php</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27314.php">http://www.open-mpi.org/community/lists/users/2015/07/27314.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27319/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27320.php">Harald Servat: "Re: [OMPI users] shared memory performance"</a>
<li><strong>Previous message:</strong> <a href="27318.php">Ralph Castain: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>In reply to:</strong> <a href="27318.php">Ralph Castain: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27350.php">Dave Love: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
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
