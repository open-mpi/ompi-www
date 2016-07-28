<?
$subject_val = "Re: [OMPI users] checkpointing multi node and multi process applications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 15:33:19 2010" -->
<!-- isoreceived="20100125203319" -->
<!-- sent="Mon, 25 Jan 2010 15:33:15 -0500" -->
<!-- isosent="20100125203315" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpointing multi node and multi process applications" -->
<!-- id="E1F120AC-7A82-4F2E-98A8-3D53CA995461_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6A962063-DDBC-4B52-92B3-36F10D5A7D37_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-01-25 15:33:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11878.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="11876.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>In reply to:</strong> <a href="11870.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11878.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="11878.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So while working on the error message, I noticed that the global  
<br>
coordinator was using the wrong path to investigate the checkpoint  
<br>
metadata. This particular section of code is not often used (which is  
<br>
probably why I could not reproduce). I just committed a fix to the  
<br>
Open MPI development trunk:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/22479">https://svn.open-mpi.org/trac/ompi/changeset/22479</a>
<br>
<p>Additionally, I am asking for this to be brought over to the v1.4 and  
<br>
v1.5 release branches:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2195">https://svn.open-mpi.org/trac/ompi/ticket/2195</a>
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2196">https://svn.open-mpi.org/trac/ompi/ticket/2196</a>
<br>
<p>It seems to solve the problem as I could reproduce it. Can you try the  
<br>
trunk (either SVN checkout or nightly tarball from tonight) and check  
<br>
if this solves your problem?
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Jan 25, 2010, at 12:14 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; I am not able to reproduce this problem with the 1.4 branch using a  
</span><br>
<span class="quotelev1">&gt; hostfile, and node configuration like you mentioned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that the error is caused by a failed local checkpoint. The  
</span><br>
<span class="quotelev1">&gt; error message is triggered when the global coordinator (located in  
</span><br>
<span class="quotelev1">&gt; 'mpirun') tries to read the metadata written by the application in  
</span><br>
<span class="quotelev1">&gt; the local snapshot. If the global coordinator cannot properly read  
</span><br>
<span class="quotelev1">&gt; the metadata, then it will print a variety of error messages  
</span><br>
<span class="quotelev1">&gt; depending on what is going wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If these are the only two errors produced, then this typically means  
</span><br>
<span class="quotelev1">&gt; that the local metadata file has been found, but is empty/corrupted.  
</span><br>
<span class="quotelev1">&gt; Can you send me the contents of the local checkpoint metadata file:
</span><br>
<span class="quotelev1">&gt;  shell$ cat GLOBAL_SNAPSHOT_DIR/ompi_global_snapshot_YYY.ckpt/0/ 
</span><br>
<span class="quotelev1">&gt; opal_snapshot_0.ckpt/snapshot_meta.data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should look something like:
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # PID: 23915
</span><br>
<span class="quotelev1">&gt; # Component: blcr
</span><br>
<span class="quotelev1">&gt; # CONTEXT: ompi_blcr_context.23915
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may also help to see the following metadata file as well:
</span><br>
<span class="quotelev1">&gt; shell$ cat GLOBAL_SNAPSHOT_DIR/ompi_global_snapshot_YYY.ckpt/ 
</span><br>
<span class="quotelev1">&gt; global_snapshot_meta.data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there are other errors printed by the process, that would  
</span><br>
<span class="quotelev1">&gt; potentially indicate a different problem. So if there are, let me  
</span><br>
<span class="quotelev1">&gt; know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error message should be a bit more specific about which process  
</span><br>
<span class="quotelev1">&gt; checkpoint is causing the problem, and what the this usually  
</span><br>
<span class="quotelev1">&gt; indicates. I filed a bug to cleanup the error:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/2190">https://svn.open-mpi.org/trac/ompi/ticket/2190</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2010, at 8:27 AM, Jean Potsam wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Josh/all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have upgraded the openmpi to v 1.4  but still get the same error  
</span><br>
<span class="quotelev2">&gt;&gt; when I try executing the application on multiple nodes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *******************
</span><br>
<span class="quotelev2">&gt;&gt; Error: expected_component: PID information unavailable!
</span><br>
<span class="quotelev2">&gt;&gt; Error: expected_component: Component Name information unavailable!
</span><br>
<span class="quotelev2">&gt;&gt; *******************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running my application from the node 'portal11' as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -am ft-enable-cr -np 2 --hostfile hosts  myapp.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The file 'hosts' contains two host names: portal10, portal11.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am triggering the checkpoint using ompi-checkpoint -v 'PID' from  
</span><br>
<span class="quotelev2">&gt;&gt; portal11.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I configured open mpi as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #####################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/home/jean/openmpi/ --enable-picky --enable- 
</span><br>
<span class="quotelev2">&gt;&gt; debug --enable-mpi-profile --enable-mpi-cxx --enable-pretty-print- 
</span><br>
<span class="quotelev2">&gt;&gt; stacktrace --enable-binaries --enable-trace --enable-static=yes -- 
</span><br>
<span class="quotelev2">&gt;&gt; enable-debug --with-devel-headers=1 --with-mpi-param-check=always -- 
</span><br>
<span class="quotelev2">&gt;&gt; with-ft=cr --enable-ft-thread --with-blcr=/usr/local/blcr/ --with- 
</span><br>
<span class="quotelev2">&gt;&gt; blcr-libdir=/usr/local/blcr/lib --enable-mpi-threads=yes
</span><br>
<span class="quotelev2">&gt;&gt; #########################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what do you think can be wrong? Please instruct me on how to  
</span><br>
<span class="quotelev2">&gt;&gt; resolve this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jean
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- On Mon, 11/1/10, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] checkpointing multi node and multi  
</span><br>
<span class="quotelev2">&gt;&gt; process applications
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Monday, 11 January, 2010, 21:42
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 19, 2009, at 7:42 AM, Jean Potsam wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Everyone,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                        I am trying to checkpoint an mpi  
</span><br>
<span class="quotelev2">&gt;&gt; application running on multiple nodes. However, I get some error  
</span><br>
<span class="quotelev2">&gt;&gt; messages when i trigger the checkpointing process.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Error: expected_component: PID information unavailable!
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Error: expected_component: Component Name information unavailable!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am using  open mpi 1.3 and blcr 0.8.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you try the v1.4 release and see if the problem persists?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I execute my application as follows:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun -am ft-enable-cr -np 3 --hostfile hosts gol.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; My question:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Does openmpi with blcr support checkpointing of multi node  
</span><br>
<span class="quotelev2">&gt;&gt; execution of mpi application? If so, can you provide me with some  
</span><br>
<span class="quotelev2">&gt;&gt; information on how to achieve this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI is able to checkpoint a multi-node application (that's  
</span><br>
<span class="quotelev2">&gt;&gt; what it was designed to do). There are some examples at the link  
</span><br>
<span class="quotelev2">&gt;&gt; below:
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.osl.iu.edu/research/ft/ompi-cr/examples.php">http://www.osl.iu.edu/research/ft/ompi-cr/examples.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jean.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="11878.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="11876.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>In reply to:</strong> <a href="11870.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11878.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="11878.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
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
