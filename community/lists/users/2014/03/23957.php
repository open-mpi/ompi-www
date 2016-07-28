<?
$subject_val = "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 05:23:34 2014" -->
<!-- isoreceived="20140325092334" -->
<!-- sent="Tue, 25 Mar 2014 10:23:33 +0100" -->
<!-- isosent="20140325092333" -->
<!-- name="Hamid Saeed" -->
<!-- email="e.hamidsaeed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: problem for multiple clusters using mpirun" -->
<!-- id="CAADBNWzCY7HRAR1CxEDtNaH_m+syox4xMNjQXZ2-_KPEkcuSCw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5EFD1B27-F5C9-45C3-A739-109448D354EE_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: problem for multiple clusters using mpirun<br>
<strong>From:</strong> Hamid Saeed (<em>e.hamidsaeed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 05:23:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23958.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23956.php">Reuti: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23956.php">Reuti: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23958.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23958.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I am not sure what approach does the MPI communication follow but when i
<br>
use
<br>
--mca btl_base_verbose 30
<br>
<p>I observe the mentioned port.
<br>
<p>[karp:23756] btl: tcp: attempting to connect() to address 134.106.3.252 on
<br>
port 4
<br>
[karp][[4612,1],0][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 134.106.3.252 failed: Connection refused (111)
<br>
<p><p>the information on the
<br>
<a href="http://www.open-mpi.org/community/lists/users/2011/11/17732.php">http://www.open-mpi.org/community/lists/users/2011/11/17732.php</a>
<br>
is not enough could you kindly explain..
<br>
<p>How can restrict MPI communication to use the ports starting from 1025.
<br>
or use the port some what like
<br>
59822...
<br>
<p>Regards.
<br>
<p><p><p>On Tue, Mar 25, 2014 at 9:15 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 25.03.2014 um 08:34 schrieb Hamid Saeed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible to change the port number for the MPI communication?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can see that my program uses port 4 for the MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [karp:23756] btl: tcp: attempting to connect() to address 134.106.3.252
</span><br>
<span class="quotelev1">&gt; on port 4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; [karp][[4612,1],0][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 134.106.3.252 failed: Connection refused (111)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In my case the ports from 1 to 1024 are reserved.
</span><br>
<span class="quotelev2">&gt; &gt; MPI tries to use one of the reserve ports and prompts the connection
</span><br>
<span class="quotelev1">&gt; refused error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I will be very glade for the kind suggestions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are certain parameters to set the range of used ports, but using any
</span><br>
<span class="quotelev1">&gt; up to 1024 should not be the default:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/11/17732.php">http://www.open-mpi.org/community/lists/users/2011/11/17732.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are any of these set by accident beforehand by your environment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Mar 24, 2014 at 5:32 PM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your cooperation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --mca btl_tcp_if_include br0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; worked out of the box.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem was from the network administrator. The machines on the
</span><br>
<span class="quotelev1">&gt; network side were halting the mpi...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; so cleaning and killing every thing worked.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; regards.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Mar 24, 2014 at 4:34 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; There is no &quot;self&quot; IP interface in the Linux kernel.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Try using btl_tcp_if_include and list just the interface(s) that you
</span><br>
<span class="quotelev1">&gt; want to use.  From your prior email, I'm *guessing* it's just br2 (i.e.,
</span><br>
<span class="quotelev1">&gt; the 10.x address inside your cluster).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, it looks like you didn't setup your SSH keys properly for logging
</span><br>
<span class="quotelev1">&gt; in to remote notes automatically.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 24, 2014, at 10:56 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I added the &quot;self&quot; e.g
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hsaeed_at_karp:~/Task4_mpi/scatterv$ mpirun -np 8 --mca btl ^openib
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_exclude sm,self,lo,br0,br1,ib0,br2 --host karp,wirth
</span><br>
<span class="quotelev1">&gt; ./scatterv
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Enter passphrase for key '/home/hsaeed/.ssh/id_rsa':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ERROR::
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev3">&gt; &gt; &gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Process 1 ([[15751,1],7]) is on host: wirth
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Process 2 ([[15751,1],0]) is on host: karp
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   BTLs attempted: self sm
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_INIT has failed because at least one MPI process is unreachable
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from another.  This *usually* means that an underlying communication
</span><br>
<span class="quotelev3">&gt; &gt; &gt; plugin -- such as a BTL or an MTL -- has either not loaded or not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; allowed itself to be used.  Your MPI job will now abort.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  * Check the output of ompi_info to see which BTL/MTL plugins are
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    available.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  * Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [wirth:40329] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [wirth:40329] *** on a NULL communicator
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [wirth:40329] *** Unknown error
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [wirth:40329] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev3">&gt; &gt; &gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Local host: wirth
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   PID:        40329
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun has exited due to process rank 7 with PID 40329 on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node wirth exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [karp:29513] 1 more process has sent help message help-mca-bml-r2.txt
</span><br>
<span class="quotelev1">&gt; / unreachable proc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [karp:29513] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [karp:29513] 1 more process has sent help message help-mpi-runtime /
</span><br>
<span class="quotelev1">&gt; mpi_init:startup:pml-add-procs-fail
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [karp:29513] 1 more process has sent help message help-mpi-errors.txt
</span><br>
<span class="quotelev1">&gt; / mpi_errors_are_fatal unknown handle
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [karp:29513] 1 more process has sent help message help-mpi-runtime.txt
</span><br>
<span class="quotelev1">&gt; / ompi mpi abort:cannot guarantee all killed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I tried every combination for btl_tcp_if_include or exclude...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I cant figure out what is wrong.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I can easily talk with the remote pc using netcat.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am sure i am very near to the solution but..
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; regards.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Mar 24, 2014 at 3:25 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If you you use btl_tcp_if_exclude, you also need to exclude the
</span><br>
<span class="quotelev1">&gt; loopback interface.  Loopback is excluded by the default value of
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude, but if you overwrite that value, then you need to
</span><br>
<span class="quotelev1">&gt; *also* include the loopback interface in the new value.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mar 24, 2014, at 4:57 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Still i am facing problems.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I checked there is no firewall which is acting as a barrier for the
</span><br>
<span class="quotelev1">&gt; mpi communication.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; even i used the execution line like
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; hsaeed_at_karp:~/Task4_mpi/scatterv$ mpiexec -n 2 --mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude br2 -host wirth,karp ./a.out
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Now the output hangup without displaying any error.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Used &quot;..exclude bt2&quot; because the failed connection was from bt2 as
</span><br>
<span class="quotelev1">&gt; you can see in the &quot;ifconfig&quot; output mentioned above.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I know there is something wrong but i am almost unable to figure it
</span><br>
<span class="quotelev1">&gt; out.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I need some more kind suggestions.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; regards.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Fri, Mar 21, 2014 at 6:05 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Do you have any firewalling enabled on these machines?  If so,
</span><br>
<span class="quotelev1">&gt; you'll want to either disable it, or allow random TCP connections between
</span><br>
<span class="quotelev1">&gt; any of the cluster nodes.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Mar 21, 2014, at 10:24 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; hsaeed_at_karp:~$ /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; br0       Link encap:Ethernet  HWaddr 00:25:90:59:c9:ba
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           inet addr:134.106.3.231  Bcast:134.106.3.255
</span><br>
<span class="quotelev1">&gt;  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           inet6 addr: fe80::225:90ff:fe59:c9ba/64 Scope:Link
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX packets:49080961 errors:0 dropped:50263 overruns:0
</span><br>
<span class="quotelev1">&gt; frame:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           TX packets:43279252 errors:0 dropped:0 overruns:0
</span><br>
<span class="quotelev1">&gt; carrier:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX bytes:41348407558 (38.5 GiB)  TX bytes:80505842745
</span><br>
<span class="quotelev1">&gt; (74.9 GiB)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; br1       Link encap:Ethernet  HWaddr 00:25:90:59:c9:bb
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           inet addr:134.106.53.231  Bcast:134.106.53.255
</span><br>
<span class="quotelev1">&gt;  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           inet6 addr: fe80::225:90ff:fe59:c9bb/64 Scope:Link
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX packets:41573060 errors:0 dropped:50261 overruns:0
</span><br>
<span class="quotelev1">&gt; frame:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           TX packets:1693509 errors:0 dropped:0 overruns:0
</span><br>
<span class="quotelev1">&gt; carrier:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX bytes:6177072160 (5.7 GiB)  TX bytes:230617435 (219.9
</span><br>
<span class="quotelev1">&gt; MiB)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; br2       Link encap:Ethernet  HWaddr 00:c0:0a:ec:02:e7
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           inet addr:10.231.2.231  Bcast:10.231.2.255
</span><br>
<span class="quotelev1">&gt;  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; eth0      Link encap:Ethernet  HWaddr 00:25:90:59:c9:ba
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX packets:69108377 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           TX packets:86459066 errors:0 dropped:0 overruns:0
</span><br>
<span class="quotelev1">&gt; carrier:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX bytes:43533091399 (40.5 GiB)  TX bytes:83359370885
</span><br>
<span class="quotelev1">&gt; (77.6 GiB)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           Memory:dfe60000-dfe80000
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; eth1      Link encap:Ethernet  HWaddr 00:25:90:59:c9:bb
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX packets:43531546 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           TX packets:1716151 errors:0 dropped:0 overruns:0
</span><br>
<span class="quotelev1">&gt; carrier:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX bytes:7201915977 (6.7 GiB)  TX bytes:232026383 (221.2
</span><br>
<span class="quotelev1">&gt; MiB)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           Memory:dfee0000-dff00000
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX packets:10890707 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           TX packets:10890707 errors:0 dropped:0 overruns:0
</span><br>
<span class="quotelev1">&gt; carrier:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX bytes:36194379576 (33.7 GiB)  TX bytes:36194379576
</span><br>
<span class="quotelev1">&gt; (33.7 GiB)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; tap0      Link encap:Ethernet  HWaddr 00:c0:0a:ec:02:e7
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           collisions:0 txqueuelen:500
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;           RX bytes:0 (0.0 B)  TX bytes:0 (0.0 B)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; When i execute the following line
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; hsaeed_at_karp:~/Task4_mpi/scatterv$ mpiexec -n 2 -host wirth,karp
</span><br>
<span class="quotelev1">&gt; ./a.out
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; i receive Error
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; [wirth][[59430,1],0][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 10.231.2.231 failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; NOTE: Karp and wirth are two machines on ssh cluster.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Fri, Mar 21, 2014 at 3:13 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Mar 21, 2014, at 10:09 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; I think i have a tcp connection. As for as i know my cluster
</span><br>
<span class="quotelev1">&gt; is not configured for Infiniband (IB).
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Ok.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; but even for tcp connections.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; mpirun -n 2 -host master,node001 --mca btl tcp,sm,self
</span><br>
<span class="quotelev1">&gt; ./helloworldmpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; mpirun -n 2 -host master,node001 ./helloworldmpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; These line are not working they output
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Error like
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to xx.xxx.x.xxx failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; What are the IP addresses reported by connect()?  (i.e., the
</span><br>
<span class="quotelev1">&gt; address you X'ed out)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Send the output from ifconfig on each of your servers.  Note that
</span><br>
<span class="quotelev1">&gt; some Linux distributions do not put ifconfig in the default PATH of normal
</span><br>
<span class="quotelev1">&gt; users; look for it in/sbin/ifconfig or /usr/sbin/ifconfig.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Hamid Saeed
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hamid Saeed
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; CoSynth GmbH &amp; Co. KG
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Escherweg 2 - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Tel +49 441 9722 738 | Fax -278
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.cosynth.com">http://www.cosynth.com</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hamid Saeed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Hamid Saeed
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Hamid Saeed
</span><br>
<span class="quotelev2">&gt; &gt; ______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><pre>
-- 
_______________________________________________
Hamid Saeed
CoSynth GmbH &amp; Co. KG
Escherweg 2 - 26121 Oldenburg - Germany
Tel +49 441 9722 738 | Fax -278
<a href="http://www.cosynth.com">http://www.cosynth.com</a>
_______________________________________________
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23957/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23958.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23956.php">Reuti: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23956.php">Reuti: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23958.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23958.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
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
