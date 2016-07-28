<?
$subject_val = "Re: [OMPI users] checkpointing multi node and multi process applications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 12:14:37 2010" -->
<!-- isoreceived="20100125171437" -->
<!-- sent="Mon, 25 Jan 2010 12:14:33 -0500" -->
<!-- isosent="20100125171433" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpointing multi node and multi process applications" -->
<!-- id="6A962063-DDBC-4B52-92B3-36F10D5A7D37_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="830797.5290.qm_at_web28304.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] checkpointing multi node and multi process applications<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 12:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11871.php">Jeff Squyres: "[OMPI users] Searching the FAQ"</a>
<li><strong>Previous message:</strong> <a href="11869.php">Mathieu Gontier: "[OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>In reply to:</strong> <a href="11838.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11877.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="11877.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not able to reproduce this problem with the 1.4 branch using a  
<br>
hostfile, and node configuration like you mentioned.
<br>
<p>I suspect that the error is caused by a failed local checkpoint. The  
<br>
error message is triggered when the global coordinator (located in  
<br>
'mpirun') tries to read the metadata written by the application in the  
<br>
local snapshot. If the global coordinator cannot properly read the  
<br>
metadata, then it will print a variety of error messages depending on  
<br>
what is going wrong.
<br>
<p>If these are the only two errors produced, then this typically means  
<br>
that the local metadata file has been found, but is empty/corrupted.  
<br>
Can you send me the contents of the local checkpoint metadata file:
<br>
&nbsp;&nbsp;&nbsp;shell$ cat GLOBAL_SNAPSHOT_DIR/ompi_global_snapshot_YYY.ckpt/0/ 
<br>
opal_snapshot_0.ckpt/snapshot_meta.data
<br>
<p>It should look something like:
<br>
---------------------------------
<br>
#
<br>
# PID: 23915
<br>
# Component: blcr
<br>
# CONTEXT: ompi_blcr_context.23915
<br>
---------------------------------
<br>
<p>It may also help to see the following metadata file as well:
<br>
&nbsp;&nbsp;shell$ cat GLOBAL_SNAPSHOT_DIR/ompi_global_snapshot_YYY.ckpt/ 
<br>
global_snapshot_meta.data
<br>
<p><p>If there are other errors printed by the process, that would  
<br>
potentially indicate a different problem. So if there are, let me know.
<br>
<p>This error message should be a bit more specific about which process  
<br>
checkpoint is causing the problem, and what the this usually  
<br>
indicates. I filed a bug to cleanup the error:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2190">https://svn.open-mpi.org/trac/ompi/ticket/2190</a>
<br>
<p>-- Josh
<br>
<p>On Jan 21, 2010, at 8:27 AM, Jean Potsam wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh/all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have upgraded the openmpi to v 1.4  but still get the same error  
</span><br>
<span class="quotelev1">&gt; when I try executing the application on multiple nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *******************
</span><br>
<span class="quotelev1">&gt;  Error: expected_component: PID information unavailable!
</span><br>
<span class="quotelev1">&gt;  Error: expected_component: Component Name information unavailable!
</span><br>
<span class="quotelev1">&gt; *******************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running my application from the node 'portal11' as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr -np 2 --hostfile hosts  myapp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file 'hosts' contains two host names: portal10, portal11.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am triggering the checkpoint using ompi-checkpoint -v 'PID' from  
</span><br>
<span class="quotelev1">&gt; portal11.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I configured open mpi as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #####################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/jean/openmpi/ --enable-picky --enable- 
</span><br>
<span class="quotelev1">&gt; debug --enable-mpi-profile --enable-mpi-cxx --enable-pretty-print- 
</span><br>
<span class="quotelev1">&gt; stacktrace --enable-binaries --enable-trace --enable-static=yes -- 
</span><br>
<span class="quotelev1">&gt; enable-debug --with-devel-headers=1 --with-mpi-param-check=always -- 
</span><br>
<span class="quotelev1">&gt; with-ft=cr --enable-ft-thread --with-blcr=/usr/local/blcr/ --with- 
</span><br>
<span class="quotelev1">&gt; blcr-libdir=/usr/local/blcr/lib --enable-mpi-threads=yes
</span><br>
<span class="quotelev1">&gt; #########################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what do you think can be wrong? Please instruct me on how to resolve  
</span><br>
<span class="quotelev1">&gt; this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Mon, 11/1/10, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] checkpointing multi node and multi process  
</span><br>
<span class="quotelev1">&gt; applications
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, 11 January, 2010, 21:42
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2009, at 7:42 AM, Jean Potsam wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Everyone,
</span><br>
<span class="quotelev2">&gt; &gt;                        I am trying to checkpoint an mpi  
</span><br>
<span class="quotelev1">&gt; application running on multiple nodes. However, I get some error  
</span><br>
<span class="quotelev1">&gt; messages when i trigger the checkpointing process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Error: expected_component: PID information unavailable!
</span><br>
<span class="quotelev2">&gt; &gt; Error: expected_component: Component Name information unavailable!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using  open mpi 1.3 and blcr 0.8.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try the v1.4 release and see if the problem persists?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I execute my application as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -am ft-enable-cr -np 3 --hostfile hosts gol.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My question:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does openmpi with blcr support checkpointing of multi node  
</span><br>
<span class="quotelev1">&gt; execution of mpi application? If so, can you provide me with some  
</span><br>
<span class="quotelev1">&gt; information on how to achieve this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI is able to checkpoint a multi-node application (that's what  
</span><br>
<span class="quotelev1">&gt; it was designed to do). There are some examples at the link below:
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.osl.iu.edu/research/ft/ompi-cr/examples.php">http://www.osl.iu.edu/research/ft/ompi-cr/examples.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jean.
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
<li><strong>Next message:</strong> <a href="11871.php">Jeff Squyres: "[OMPI users] Searching the FAQ"</a>
<li><strong>Previous message:</strong> <a href="11869.php">Mathieu Gontier: "[OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>In reply to:</strong> <a href="11838.php">Jean Potsam: "[OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11877.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="11877.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
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
