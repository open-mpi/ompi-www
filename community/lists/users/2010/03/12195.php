<?
$subject_val = "Re: [OMPI users] Leftover session directories [was sm btl choices]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 00:32:17 2010" -->
<!-- isoreceived="20100302053217" -->
<!-- sent="Mon, 1 Mar 2010 22:32:07 -0700" -->
<!-- isosent="20100302053207" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Leftover session directories [was sm btl choices]" -->
<!-- id="14072DE3-DA4F-413E-8B78-89DDC33B30BB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B8C32D9.5020403_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] Leftover session directories [was sm btl choices]<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-02 00:32:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12196.php">Ramon: "[OMPI users] MPI_Comm_accept() busy waiting?"</a>
<li><strong>Previous message:</strong> <a href="12194.php">Rolf Vandevaart: "[OMPI users] Leftover session directories [was sm btl choices]"</a>
<li><strong>In reply to:</strong> <a href="12194.php">Rolf Vandevaart: "[OMPI users] Leftover session directories [was sm btl choices]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12192.php">David Turner: "Re: [OMPI users] sm btl choices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found the problem - the orted wasn't whacking any lingering session directories when it exited. Missing one line...sigh.
<br>
<p>Rolf: I have submitted a patch for the 1.4 branch. Can you please review? It is a trivial fix.
<br>
<p>David: Thanks for bringing it to my attention. Sorry for the problem.
<br>
Ralph
<br>
<p>On Mar 1, 2010, at 2:34 PM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt; On 03/01/10 11:51, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 1, 2010, at 8:41 AM, David Turner wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3/1/10 1:51 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which version of OMPI are you using? We know that the 1.2 series was unreliable about removing the session directories, but 1.3 and above appear to be quite good about it. If you are having problems with the 1.3 or 1.4 series, I would definitely like to know about it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oops; sorry!  OMPI 1.4.1, compiled with PGI 10.0 compilers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running on Scientific Linux 5.4, ofed 1.4.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The session directories are *frequently* left behind.  I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not really tried to characterize under what circumstances they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are removed. But please confirm:  they *should* be removed by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI.
</span><br>
<span class="quotelev2">&gt;&gt; Most definitely - they should always be removed by OMPI. This is the first report we have had of them -not- being removed in the 1.4 series, so it is disturbing.
</span><br>
<span class="quotelev2">&gt;&gt; What environment are you running under? Does this happen under normal termination, or under abnormal failures (the more you can tell us, the better)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It turns out that I am seeing session directories left behind as well with v1.4 (r22713)  I have not tested any other versions.  I believe there are two elements that make this reproducible.
</span><br>
<span class="quotelev1">&gt; 1. Run across 2 or more nodes.
</span><br>
<span class="quotelev1">&gt; 2. CTRL-C out of the MPI job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then take a look at the remote nodes and you may see a leftover session directory.  The mpirun node seems to be clean.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is an example using two nodes.  I also added some sleeps to the ring_c program to slow things down so I could hit CTRL-C.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, tmp directories are empty:
</span><br>
<span class="quotelev1">&gt; [rolfv_at_burl-ct-x2200-6 ~/examples]$ ls -lt /tmp/openmpi-sessions-rolfv*
</span><br>
<span class="quotelev1">&gt; ls: No match.
</span><br>
<span class="quotelev1">&gt; [rolfv_at_burl-ct-x2200-7 ~]$ ls -lt /tmp/openmpi-sessions-rolfv*
</span><br>
<span class="quotelev1">&gt; ls: No match.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now run test:
</span><br>
<span class="quotelev1">&gt; [rolfv_at_burl-ct-x2200-6 ~/examples]$ mpirun -np 4 -host burl-ct-x2200-6,burl-ct-x2200-6,burl-ct-x2200-7,burl-ct-x2200-7 ring_slow_c
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (4 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 3002 on node burl-ct-x2200-6 exited on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [burl-ct-x2200-6:02990] 2 more processes have sent help message help-mpi-btl-openib.txt / default subnet prefix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now check tmp directories:
</span><br>
<span class="quotelev1">&gt; [rolfv_at_burl-ct-x2200-6 ~/examples]$ ls -lt /tmp/openmpi-sessions-rolfv* ls: No match.
</span><br>
<span class="quotelev1">&gt; [rolfv_at_burl-ct-x2200-7 ~]$ ls -lt /tmp/openmpi-sessions-rolfv*
</span><br>
<span class="quotelev1">&gt; total 8
</span><br>
<span class="quotelev1">&gt; drwx------ 3 rolfv hpcgroup 4096 Mar  1 17:27 20007/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12196.php">Ramon: "[OMPI users] MPI_Comm_accept() busy waiting?"</a>
<li><strong>Previous message:</strong> <a href="12194.php">Rolf Vandevaart: "[OMPI users] Leftover session directories [was sm btl choices]"</a>
<li><strong>In reply to:</strong> <a href="12194.php">Rolf Vandevaart: "[OMPI users] Leftover session directories [was sm btl choices]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12192.php">David Turner: "Re: [OMPI users] sm btl choices"</a>
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
