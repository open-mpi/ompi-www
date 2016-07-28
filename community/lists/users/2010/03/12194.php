<?
$subject_val = "[OMPI users] Leftover session directories [was sm btl choices]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  1 16:34:45 2010" -->
<!-- isoreceived="20100301213445" -->
<!-- sent="Mon, 01 Mar 2010 16:34:17 -0500" -->
<!-- isosent="20100301213417" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI users] Leftover session directories [was sm btl choices]" -->
<!-- id="4B8C32D9.5020403_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A2E7DC95-511B-4D50-B8CD-430CA1873E36_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Leftover session directories [was sm btl choices]<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-01 16:34:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12195.php">Ralph Castain: "Re: [OMPI users] Leftover session directories [was sm btl choices]"</a>
<li><strong>Previous message:</strong> <a href="12193.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<li><strong>In reply to:</strong> <a href="12191.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12195.php">Ralph Castain: "Re: [OMPI users] Leftover session directories [was sm btl choices]"</a>
<li><strong>Reply:</strong> <a href="12195.php">Ralph Castain: "Re: [OMPI users] Leftover session directories [was sm btl choices]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/01/10 11:51, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Mar 1, 2010, at 8:41 AM, David Turner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/1/10 1:51 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which version of OMPI are you using? We know that the 1.2 series was unreliable about removing the session directories, but 1.3 and above appear to be quite good about it. If you are having problems with the 1.3 or 1.4 series, I would definitely like to know about it.
</span><br>
<span class="quotelev2">&gt;&gt; Oops; sorry!  OMPI 1.4.1, compiled with PGI 10.0 compilers,
</span><br>
<span class="quotelev2">&gt;&gt; running on Scientific Linux 5.4, ofed 1.4.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The session directories are *frequently* left behind.  I have
</span><br>
<span class="quotelev2">&gt;&gt; not really tried to characterize under what circumstances they
</span><br>
<span class="quotelev2">&gt;&gt; are removed. But please confirm:  they *should* be removed by
</span><br>
<span class="quotelev2">&gt;&gt; OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Most definitely - they should always be removed by OMPI. This is the first report we have had of them -not- being removed in the 1.4 series, so it is disturbing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What environment are you running under? Does this happen under normal termination, or under abnormal failures (the more you can tell us, the better)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi Ralph:
<br>
<p>It turns out that I am seeing session directories left behind as well 
<br>
with v1.4 (r22713)  I have not tested any other versions.  I believe 
<br>
there are two elements that make this reproducible.
<br>
1. Run across 2 or more nodes.
<br>
2. CTRL-C out of the MPI job.
<br>
<p>Then take a look at the remote nodes and you may see a leftover session 
<br>
directory.  The mpirun node seems to be clean.
<br>
<p>Here is an example using two nodes.  I also added some sleeps to the 
<br>
ring_c program to slow things down so I could hit CTRL-C.
<br>
<p>First, tmp directories are empty:
<br>
[rolfv_at_burl-ct-x2200-6 ~/examples]$ ls -lt /tmp/openmpi-sessions-rolfv*
<br>
ls: No match.
<br>
[rolfv_at_burl-ct-x2200-7 ~]$ ls -lt /tmp/openmpi-sessions-rolfv*
<br>
ls: No match.
<br>
<p>Now run test:
<br>
[rolfv_at_burl-ct-x2200-6 ~/examples]$ mpirun -np 4 -host 
<br>
burl-ct-x2200-6,burl-ct-x2200-6,burl-ct-x2200-7,burl-ct-x2200-7 ring_slow_c
<br>
Process 0 sending 10 to 1, tag 201 (4 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
mpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 3002 on node burl-ct-x2200-6 
<br>
exited on signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
4 total processes killed (some possibly by mpirun during cleanup)
<br>
mpirun: clean termination accomplished
<br>
<p>[burl-ct-x2200-6:02990] 2 more processes have sent help message 
<br>
help-mpi-btl-openib.txt / default subnet prefix
<br>
<p>Now check tmp directories:
<br>
[rolfv_at_burl-ct-x2200-6 ~/examples]$ ls -lt /tmp/openmpi-sessions-rolfv* 
<br>
ls: No match.
<br>
[rolfv_at_burl-ct-x2200-7 ~]$ ls -lt /tmp/openmpi-sessions-rolfv*
<br>
total 8
<br>
drwx------ 3 rolfv hpcgroup 4096 Mar  1 17:27 20007/
<br>
<p>Rolf
<br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12195.php">Ralph Castain: "Re: [OMPI users] Leftover session directories [was sm btl choices]"</a>
<li><strong>Previous message:</strong> <a href="12193.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<li><strong>In reply to:</strong> <a href="12191.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12195.php">Ralph Castain: "Re: [OMPI users] Leftover session directories [was sm btl choices]"</a>
<li><strong>Reply:</strong> <a href="12195.php">Ralph Castain: "Re: [OMPI users] Leftover session directories [was sm btl choices]"</a>
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
