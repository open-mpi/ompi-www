<?
$subject_val = "Re: [OMPI users] checkpointing multi node and multi process applications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 15:51:33 2010" -->
<!-- isoreceived="20100125205133" -->
<!-- sent="Mon, 25 Jan 2010 15:51:28 -0500" -->
<!-- isosent="20100125205128" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpointing multi node and multi process applications" -->
<!-- id="44C23DAC-E9E9-44BD-8434-D9F4C0195473_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E1F120AC-7A82-4F2E-98A8-3D53CA995461_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-01-25 15:51:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11879.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Previous message:</strong> <a href="11877.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>In reply to:</strong> <a href="11877.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, let me roll that back a bit. I was preparing a custom patch  
<br>
for the v1.4 series, and it seems that the code does not have the bug  
<br>
I mentioned. It is only the v1.5 and trunk that were effected by this.  
<br>
The v1.4 series should be fine.
<br>
<p>I will still ask that the error message fix be brought over to the  
<br>
v1.4 branch, but it is unlikely to fix your problem. However it would  
<br>
be useful to know if upgrading to the trunk or v1.5 series fixes this  
<br>
problem. The v1.4 series has an old version of the file and metadata  
<br>
handling mechanisms, so I am encouraging people to move to the v1.5  
<br>
series if possible.
<br>
<p>-- Josh
<br>
<p>On Jan 25, 2010, at 3:33 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; So while working on the error message, I noticed that the global  
</span><br>
<span class="quotelev1">&gt; coordinator was using the wrong path to investigate the checkpoint  
</span><br>
<span class="quotelev1">&gt; metadata. This particular section of code is not often used (which  
</span><br>
<span class="quotelev1">&gt; is probably why I could not reproduce). I just committed a fix to  
</span><br>
<span class="quotelev1">&gt; the Open MPI development trunk:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/changeset/22479">https://svn.open-mpi.org/trac/ompi/changeset/22479</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, I am asking for this to be brought over to the v1.4  
</span><br>
<span class="quotelev1">&gt; and v1.5 release branches:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/2195">https://svn.open-mpi.org/trac/ompi/ticket/2195</a>
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/2196">https://svn.open-mpi.org/trac/ompi/ticket/2196</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to solve the problem as I could reproduce it. Can you try  
</span><br>
<span class="quotelev1">&gt; the trunk (either SVN checkout or nightly tarball from tonight) and  
</span><br>
<span class="quotelev1">&gt; check if this solves your problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 25, 2010, at 12:14 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not able to reproduce this problem with the 1.4 branch using a  
</span><br>
<span class="quotelev2">&gt;&gt; hostfile, and node configuration like you mentioned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect that the error is caused by a failed local checkpoint.  
</span><br>
<span class="quotelev2">&gt;&gt; The error message is triggered when the global coordinator (located  
</span><br>
<span class="quotelev2">&gt;&gt; in 'mpirun') tries to read the metadata written by the application  
</span><br>
<span class="quotelev2">&gt;&gt; in the local snapshot. If the global coordinator cannot properly  
</span><br>
<span class="quotelev2">&gt;&gt; read the metadata, then it will print a variety of error messages  
</span><br>
<span class="quotelev2">&gt;&gt; depending on what is going wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If these are the only two errors produced, then this typically  
</span><br>
<span class="quotelev2">&gt;&gt; means that the local metadata file has been found, but is empty/ 
</span><br>
<span class="quotelev2">&gt;&gt; corrupted. Can you send me the contents of the local checkpoint  
</span><br>
<span class="quotelev2">&gt;&gt; metadata file:
</span><br>
<span class="quotelev2">&gt;&gt; shell$ cat GLOBAL_SNAPSHOT_DIR/ompi_global_snapshot_YYY.ckpt/0/ 
</span><br>
<span class="quotelev2">&gt;&gt; opal_snapshot_0.ckpt/snapshot_meta.data
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It should look something like:
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # PID: 23915
</span><br>
<span class="quotelev2">&gt;&gt; # Component: blcr
</span><br>
<span class="quotelev2">&gt;&gt; # CONTEXT: ompi_blcr_context.23915
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It may also help to see the following metadata file as well:
</span><br>
<span class="quotelev2">&gt;&gt; shell$ cat GLOBAL_SNAPSHOT_DIR/ompi_global_snapshot_YYY.ckpt/ 
</span><br>
<span class="quotelev2">&gt;&gt; global_snapshot_meta.data
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If there are other errors printed by the process, that would  
</span><br>
<span class="quotelev2">&gt;&gt; potentially indicate a different problem. So if there are, let me  
</span><br>
<span class="quotelev2">&gt;&gt; know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This error message should be a bit more specific about which  
</span><br>
<span class="quotelev2">&gt;&gt; process checkpoint is causing the problem, and what the this  
</span><br>
<span class="quotelev2">&gt;&gt; usually indicates. I filed a bug to cleanup the error:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2190">https://svn.open-mpi.org/trac/ompi/ticket/2190</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 21, 2010, at 8:27 AM, Jean Potsam wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Josh/all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have upgraded the openmpi to v 1.4  but still get the same error  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when I try executing the application on multiple nodes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *******************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: expected_component: PID information unavailable!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: expected_component: Component Name information unavailable!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *******************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running my application from the node 'portal11' as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -am ft-enable-cr -np 2 --hostfile hosts  myapp.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The file 'hosts' contains two host names: portal10, portal11.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am triggering the checkpoint using ompi-checkpoint -v 'PID' from  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; portal11.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I configured open mpi as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #####################
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/home/jean/openmpi/ --enable-picky --enable- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug --enable-mpi-profile --enable-mpi-cxx --enable-pretty-print- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stacktrace --enable-binaries --enable-trace --enable-static=yes -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable-debug --with-devel-headers=1 --with-mpi-param-check=always  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-ft=cr --enable-ft-thread --with-blcr=/usr/local/blcr/ -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with-blcr-libdir=/usr/local/blcr/lib --enable-mpi-threads=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #########################
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Question:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what do you think can be wrong? Please instruct me on how to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resolve this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jean
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- On Mon, 11/1/10, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] checkpointing multi node and multi  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process applications
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Monday, 11 January, 2010, 21:42
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 19, 2009, at 7:42 AM, Jean Potsam wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi Everyone,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;                        I am trying to checkpoint an mpi  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application running on multiple nodes. However, I get some error  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages when i trigger the checkpointing process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Error: expected_component: PID information unavailable!
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Error: expected_component: Component Name information unavailable!
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am using  open mpi 1.3 and blcr 0.8.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you try the v1.4 release and see if the problem persists?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I execute my application as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun -am ft-enable-cr -np 3 --hostfile hosts gol.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; My question:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Does openmpi with blcr support checkpointing of multi node  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execution of mpi application? If so, can you provide me with some  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information on how to achieve this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI is able to checkpoint a multi-node application (that's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what it was designed to do). There are some examples at the link  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.osl.iu.edu/research/ft/ompi-cr/examples.php">http://www.osl.iu.edu/research/ft/ompi-cr/examples.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Jean.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="11879.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Previous message:</strong> <a href="11877.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>In reply to:</strong> <a href="11877.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
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
