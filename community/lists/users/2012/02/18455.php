<?
$subject_val = "Re: [OMPI users] MPI orte_init fails on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 07:36:24 2012" -->
<!-- isoreceived="20120214123624" -->
<!-- sent="Tue, 14 Feb 2012 12:36:23 -0000" -->
<!-- isosent="20120214123623" -->
<!-- name="Richard Bardwell" -->
<!-- email="richard_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI orte_init fails on remote nodes" -->
<!-- id="FAA1ABC8F7254A1E84BE881207CC1095_at_starfish" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C8BD0469-DACA-45BE-B70E-D124C80A50E3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI orte_init fails on remote nodes<br>
<strong>From:</strong> Richard Bardwell (<em>richard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 07:36:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18456.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18454.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="18451.php">Jeff Squyres: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18442.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In trying to debug the MPI_Waitall hang on the remote
<br>
node, I created a simple code to test.
<br>
<p>If we run the simple code below on 2 nodes on a local
<br>
machine, we send the number 1 and receive number 1 back.
<br>
<p>If we run the same code on a local node and a remote node,
<br>
we send number 1 but get 32767 back. Any ideas ???
<br>
<p><p>#include &lt;string.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define PCPU 8
<br>
int rank,nproc;
<br>
<p>main(argc, argv)
<br>
int argc;
<br>
char *argv[];
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int i,j,k,i1;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;nproc);
<br>
<p>&nbsp;&nbsp;&nbsp;if (rank==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i1 = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpisend(i1);
<br>
&nbsp;&nbsp;&nbsp;}else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;k=mpirecv();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;R%d: recvd %d\n&quot;,rank,k);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>mpisend(ok)
<br>
<p>int ok;
<br>
<p>{
<br>
&nbsp;&nbsp;&nbsp;int i,j,k,m;
<br>
&nbsp;&nbsp;&nbsp;int tag=201;
<br>
&nbsp;&nbsp;&nbsp;MPI_Request request[PCPU];
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status[PCPU];
<br>
<p>&nbsp;&nbsp;&nbsp;for (m=1;m&lt;nproc;m++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;R%d-&gt;%d\n&quot;,rank,m);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;ok, 1, MPI_INT, m, tag+m, MPI_COMM_WORLD,&amp;request[m-1]);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>}
<br>
<p>mpirecv()
<br>
<p>{
<br>
&nbsp;&nbsp;&nbsp;int i,j,k,m;
<br>
&nbsp;&nbsp;&nbsp;int hrecv;
<br>
&nbsp;&nbsp;&nbsp;int tag=201;
<br>
&nbsp;&nbsp;&nbsp;MPI_Request request[PCPU];
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status[PCPU];
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;hrecv, 1, MPI_INT, 0, tag+rank, MPI_COMM_WORLD, &amp;request[rank-1]);
<br>
&nbsp;&nbsp;&nbsp;MPI_Waitall(1,&amp;request[rank-1],&amp;status[rank-1]);
<br>
&nbsp;&nbsp;&nbsp;return(hrecv);
<br>
}
<br>
<p><p><p><p>----- Original Message ----- 
<br>
From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Tuesday, February 14, 2012 11:13 AM
<br>
Subject: Re: [OMPI users] MPI orte_init fails on remote nodes
<br>
<p><p><span class="quotelev1">&gt; Make sure that your LD_LIBRARY_PATH is being set in your shell startup files for *non-interactive logins*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, ensure that LD_LIBRARY_PATH is set properly, even in this case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; ssh some-other-node env | grep LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (note that this is different than &quot;ssh some-other-node echo $LD_LIBRARY_PATH&quot;, because the &quot;$LD_LIBRARY_PATH&quot; will be evaluated on 
</span><br>
<span class="quotelev1">&gt; the local node, even before ssh is invoked)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I mention this because some shell startup files distinguish between interactive and non-interactive logins; they sometimes 
</span><br>
<span class="quotelev1">&gt; terminate early for non-interactive logins.  Look for &quot;exit&quot; statements, or conditional blocks that are only invoked during 
</span><br>
<span class="quotelev1">&gt; interactive logins, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 14, 2012, at 5:40 AM, Richard Bardwell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wiped out all versions of openmpi on all the nodes including the distro installed version.
</span><br>
<span class="quotelev2">&gt;&gt; I reinstalled version 1.4.4 on all nodes.
</span><br>
<span class="quotelev2">&gt;&gt; I now get the error that libopen-rte.so.0 cannot be found when running mpiexec across
</span><br>
<span class="quotelev2">&gt;&gt; different nodes, even though the LD_LIBRARY_PATH for all nodes points to /usr/local/lib
</span><br>
<span class="quotelev2">&gt;&gt; where the file exists. Any ideas ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Richard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message ----- From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, February 13, 2012 6:28 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI orte_init fails on remote nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You might want to fully uninstall the disto-installed version of Open MPI on all the nodes (e.g., Red Hat may have installed a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different version of Open MPI, and that version is being found in your $PATH before your custom-installedversion).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 13, 2012, at 12:12 PM, Richard Bardwell wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OK, 1.4.4 is happily installed on both machines. But, I now get a really
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; weird error when running on the 2 nodes. I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Error: unknown option &quot;--daemonize&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; even though I am just running with -np 2 -hostfile test.hst
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The program runs fine on 2 cores if running locally on each node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any ideas ??
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Richard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----- Original Message ----- From: &quot;Gustavo Correa&quot; &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Monday, February 13, 2012 4:22 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI orte_init fails on remote nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 13, 2012, at 11:02 AM, Richard Bardwell wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I had done a make clean in the 1.2.8 directory if that is what you meant ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Or do I need to do something else ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I appreciate your help on this by the way ;-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Richard
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You can install in a different directory, totally separate from 1.2.8.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Create a new work directory [which is not the final installation directory, just work, say /tmp/openmpi/1.4.4/work].
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Launch the OpenMPI 1.4.4 configure script from this new work directory with the --prefix pointing to your desired installation 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; directory [e.g. /home/richard/openmpi/1.4.4/].
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am assuming this is NFS mounted on the nodes [if you have a cluster].
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [Check all options with 'configure --help'.]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then do make, make install.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Finally set your PATH and LD_LIBRARY_PATH to point to the new installation directory,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to prevent mixing with the old 1.2.8.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a number of OpenMPI versions here, compiled with various compilers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and they coexist well this way.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: Monday, February 13, 2012 3:41 PM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI orte_init fails on remote nodes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You need to clean out the old attempt - that is a stale file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Feb 13, 2012, at 7:36 AM, &quot;Richard Bardwell&quot; &lt;richard_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OK, I installed 1.4.4, rebuilt the exec and guess what ...... I now get some weird errors as below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ras_dash_host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; along with a few other files
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; even though the .so / .la files are all there !
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent: Monday, February 13, 2012 2:59 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI orte_init fails on remote nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Good heavens - where did you find something that old? Can you use a more recent version?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gentlemen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am struggling to get MPI working when the hostfile contains different nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I get the error below. Any ideas ?? I can ssh without password between the two
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nodes. I am running 1.2.8 MPI on both machines.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any help most appreciated !!!!!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPITEST/v8_mpi_test&gt; mpiexec -n 2 --debug-daemons -hostfile test.hst /home/sharc/MPITEST/v8_mpi_test/mpitest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [0,0,1] checking in as pid 10490 on host 192.0.2.67
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init_stage1.c at line 182
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_rml_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --&gt; Returned value -13 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-z0je:08804] [NO-NAME] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 52
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open RTE was unable to initialize properly. The error occured while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; attempting to orte_init(). Returned value -13 instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10490] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10490] [0,0,1] orted_recv_pls: received kill_local_procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1158
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] ERROR: A daemon on node 192.0.2.68 failed to start as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] ERROR: There may be more information available from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] ERROR: The daemon exited unexpectedly with status 243.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10490] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10490] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [linux-tmpw:10489] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1190
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec was unable to cleanly terminate the daemons for this job. Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18456.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18454.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="18451.php">Jeff Squyres: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18442.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
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
