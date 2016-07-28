<?
$subject_val = "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 10:54:01 2015" -->
<!-- isoreceived="20150723145401" -->
<!-- sent="Thu, 23 Jul 2015 15:53:29 +0100" -->
<!-- isosent="20150723145329" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6" -->
<!-- id="CAPqNE2V+JBZOtqqv2ND2LP83zMqp=so8A3aFFBzFYQDRS-zs=Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DB3PR06MB0907760E213F0202A0C99B61C7820_at_DB3PR06MB0907.eurprd06.prod.outlook.com" -->
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
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-23 10:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27314.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27312.php">m.delorme_at_[hidden]: "[OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>In reply to:</strong> <a href="27312.php">m.delorme_at_[hidden]: "[OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27314.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Reply:</strong> <a href="27314.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You say that you can run the code OK 'by hand' with an mpirun.
<br>
<p>Are you assuming somehow that the Gridengine jobs will inherit your
<br>
environment variables, paths etc?
<br>
If I remember correctly, you should submit wiht the  -V  option to pass
<br>
over environment settings.
<br>
Even better, make sure that the job script itself sets all the paths and
<br>
variables.
<br>
Have you looked at using the 'modules' environment?
<br>
<p>Also submit a job script and put the 'env' command in as the first command.
<br>
Look at your output closely.
<br>
<p><p><p><p>On 23 July 2015 at 15:45, &lt;m.delorme_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have been working on this problem for the last week, browsing the help
</span><br>
<span class="quotelev1">&gt; and the mailing list with no success.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While trying to run MPI programs using SGE, I end up with seg faults every
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  A bit of information on the system :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am working on a 14 nodes cluster. Every node is an Intel Xeon, each
</span><br>
<span class="quotelev1">&gt; composed of 2 sockets with 10 cores each (so 20 cores per node). The nodes
</span><br>
<span class="quotelev1">&gt; are Infiniband connected. The job scheduler is Grid Engine as mentioned
</span><br>
<span class="quotelev1">&gt; before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I don't have the hand on the cluster administration, and the
</span><br>
<span class="quotelev1">&gt; &quot;default&quot; installation of openMPI is an old one, I compiled and installed
</span><br>
<span class="quotelev1">&gt; myself Open-MPI 1.8.6 and prepended paths (general and library) to ensure
</span><br>
<span class="quotelev1">&gt; the use of my version of mpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Open MPI has been configured with the flags --with-sge, and grepping
</span><br>
<span class="quotelev1">&gt; grid engine in ompi_info returns something that looks correct :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.8.6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Now when running a simple script, displaying the hostname, on two slots
</span><br>
<span class="quotelev1">&gt; binded on one single node, I get the following message :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [galaxy1:44361] Error: unknown option &quot;--hnp-topo-sig&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * the inability to write startup files into /tmp
</span><br>
<span class="quotelev1">&gt; (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Please check with your sys admin to determine the correct location to
</span><br>
<span class="quotelev1">&gt; use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  *  compilation of the orted with dynamic libraries when static are
</span><br>
<span class="quotelev1">&gt; required
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   and network routing requirements).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When I connect to the specific host crashing and try to run the program
</span><br>
<span class="quotelev1">&gt; by hand with mpirun, the whole thing executes without problem.
</span><br>
<span class="quotelev1">&gt; I made sure the libraries and path are right, that I have the rights on
</span><br>
<span class="quotelev1">&gt; the node, that /tmp is accessible. I don't think the fourth point of the
</span><br>
<span class="quotelev1">&gt; list is the problem, as for the last one, I suppose that if I can access
</span><br>
<span class="quotelev1">&gt; the node by sshing it, SGE shouldn't have a problem with it as well ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My guess is then a problem from SGE or the integration of OpenMPI with
</span><br>
<span class="quotelev1">&gt; SGE ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I googled with no real success the &quot;hnp-topo-sig&quot;, and only got to a
</span><br>
<span class="quotelev1">&gt; stackoverflow page indicating that the problem should be nodes running a
</span><br>
<span class="quotelev1">&gt; different version of OpenMPI.
</span><br>
<span class="quotelev1">&gt; I know that there is an old OpenMPI version by default on the nodes, but
</span><br>
<span class="quotelev1">&gt; shouldn't prepending the paths and exporting the environment (using the -V
</span><br>
<span class="quotelev1">&gt; flag in the script) be sufficient to ensure the right version of openMPI is
</span><br>
<span class="quotelev1">&gt; used ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  A bit of additional information,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  qconf -se orte :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  pe_name            orte
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
<span class="quotelev1">&gt;  You will find attached the compressed log of ompi_info -a --parsable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thank you very much in advance for any suggestion,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MD
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27312.php">http://www.open-mpi.org/community/lists/users/2015/07/27312.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27314.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27312.php">m.delorme_at_[hidden]: "[OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>In reply to:</strong> <a href="27312.php">m.delorme_at_[hidden]: "[OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27314.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Reply:</strong> <a href="27314.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
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
