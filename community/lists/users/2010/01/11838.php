<?
$subject_val = "[OMPI users] checkpointing multi node and multi process applications";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 08:27:27 2010" -->
<!-- isoreceived="20100121132727" -->
<!-- sent="Thu, 21 Jan 2010 05:27:21 -0800 (PST)" -->
<!-- isosent="20100121132721" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="[OMPI users] checkpointing multi node and multi process applications" -->
<!-- id="830797.5290.qm_at_web28304.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1B0AA6EA-0E5E-4E23-9A07-A8F68DFF8628_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] checkpointing multi node and multi process applications<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-21 08:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11839.php">Michael Di Domenico: "[OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="11837.php">Peter Thompson: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin"</a>
<li><strong>In reply to:</strong> <a href="11735.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11870.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="11870.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh/all,
<br>
<p>I have upgraded the openmpi to v 1.4&#160; but still get the same error when I try executing the application on multiple nodes:
<br>
<p>*******************
<br>
&#160;Error: expected_component: PID information unavailable!
<br>
&#160;Error: expected_component: Component Name information unavailable!
<br>
*******************
<br>
<p>I am running my application from the node 'portal11' as follows:
<br>
<p>mpirun -am ft-enable-cr -np 2 --hostfile hosts&#160; myapp.
<br>
<p>The file 'hosts' contains two host names: portal10, portal11.
<br>
<p>I am triggering the checkpoint using ompi-checkpoint -v 'PID' from portal11.
<br>
<p><p>I configured open mpi as follows:
<br>
<p>#####################
<br>
<p>./configure --prefix=/home/jean/openmpi/ --enable-picky --enable-debug --enable-mpi-profile --enable-mpi-cxx --enable-pretty-print-stacktrace --enable-binaries --enable-trace --enable-static=yes --enable-debug --with-devel-headers=1 --with-mpi-param-check=always --with-ft=cr --enable-ft-thread --with-blcr=/usr/local/blcr/ --with-blcr-libdir=/usr/local/blcr/lib --enable-mpi-threads=yes
<br>
#########################
<br>
<p>Question:
<br>
<p><p><p>Thank you
<br>
<p>Jean
<br>
<p><p>&#160;&#160;&#160;&#160; 
<br>
<p>--- On Mon, 11/1/10, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p>From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] checkpointing multi node and multi process applications
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, 11 January, 2010, 21:42
<br>
<p><p>On Dec 19, 2009, at 7:42 AM, Jean Potsam wrote:
<br>
<p><span class="quotelev1">&gt; Hi Everyone,
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; I am trying to checkpoint an mpi application running on multiple nodes. However, I get some error messages when i trigger the checkpointing process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error: expected_component: PID information unavailable!
</span><br>
<span class="quotelev1">&gt; Error: expected_component: Component Name information unavailable!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using&#160; open mpi 1.3 and blcr 0.8.1
</span><br>
<p>Can you try the v1.4 release and see if the problem persists?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I execute my application as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr -np 3 --hostfile hosts gol.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does openmpi with blcr support checkpointing of multi node execution of mpi application? If so, can you provide me with some information on how to achieve this.
</span><br>
<p>Open MPI is able to checkpoint a multi-node application (that's what it was designed to do). There are some examples at the link below:
<br>
&#160; <a href="http://www.osl.iu.edu/research/ft/ompi-cr/examples.php">http://www.osl.iu.edu/research/ft/ompi-cr/examples.php</a>
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jean.
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11838/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11839.php">Michael Di Domenico: "[OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="11837.php">Peter Thompson: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin"</a>
<li><strong>In reply to:</strong> <a href="11735.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11870.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="11870.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
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
