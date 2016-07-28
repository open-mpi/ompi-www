<?
$subject_val = "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 04:50:01 2012" -->
<!-- isoreceived="20120202095001" -->
<!-- sent="Thu, 2 Feb 2012 01:49:56 -0800 (PST)" -->
<!-- isosent="20120202094956" -->
<!-- name="adrian sabou" -->
<!-- email="adrian.sabou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI / SLURM -&amp;gt; Send/Recv blocking" -->
<!-- id="1328176196.19747.YahooMailNeo_at_web161701.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D6D3CEE0-C747-4811-BB4D-1C6C2A856531_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking<br>
<strong>From:</strong> adrian sabou (<em>adrian.sabou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 04:49:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18374.php">Syed Ahsan Ali: "[OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)"</a>
<li><strong>Previous message:</strong> <a href="18372.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>In reply to:</strong> <a href="18372.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18376.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Reply:</strong> <a href="18376.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

The only example that works is hello_c.c. All others (that use MPI_Send and MPI_Recv)(connectivity_c.c and ring_c.c) block after the first MPI_Send / MPI_Recv (although the first Send/Receive pair works well for all 
processes, subsequent Send/Receive pairs block). My slurm version is 
2.1.0. It is also worth mentioning that all examples work when not using SLURM (launching with &quot;mpirun -np 5 &lt;exaple_app&gt;&quot;). Blocking 
occurs only when I try to run on multiple hosts with SLURM (&quot;salloc -N5 
mpirun &lt;example_app&gt;&quot;).

Adrian


________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: adrian sabou &lt;adrian.sabou_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Wednesday, February 1, 2012 10:32 PM
Subject: Re: [OMPI users]  OpenMPI / SLURM -&gt; Send/Recv blocking
 
On Jan 31, 2012, at 11:16 AM, adrian sabou wrote:

&gt; Like I said, a very simple program.
&gt; When launching this application with SLURM (using &quot;salloc -N2 mpirun ./&lt;my_app&gt;&quot;), it hangs at the barrier.

Are you able to run the MPI example programs in examples/ ?

&gt; However, it passes the barrier if I launch it without SLURM (using &quot;mpirun -np 2 ./&lt;my_app&gt;&quot;). I first noticed this problem when my application hanged if I tried to send two successive messages from a process to another. Only the first MPI_Send would work. The second MPI_Send would block indefinitely. I was wondering whether any of you have encountered a similar problem, or may have an ideea as to what is causing the Send/Receive pair to block when using SLURM. The exact output in my console is as follows:
&gt;&#160; 
&gt;&#160; &#160; &#160; &#160;  salloc: Granted job allocation 1138
&gt;&#160; &#160; &#160; &#160;  Process 0 - Sending...
&gt;&#160; &#160; &#160; &#160;  Process 1 - Receiving...
&gt;&#160; &#160; &#160; &#160;  Process 1 - Received.
&gt;&#160; &#160; &#160; &#160;  Process 1 - Barrier reached.
&gt;&#160; &#160; &#160; &#160;  Process 0 - Sent.
&gt;&#160; &#160; &#160; &#160;  Process 0 - Barrier reached.
&gt;&#160; &#160; &#160; &#160;  (it just hangs here)
&gt;&#160; 
&gt; I am new to MPI programming and to OpenMPI and would greatly appreciate any help. My OpenMPI version is 1.4.4 (although I have also tried it on 1.5.4), my SLURM version is 0.3.3-1 (slurm-llnl 2.1.0-1),

I'm not sure what SLURM version that is -- my &quot;srun --version&quot; shows 2.2.4.&#160; 0.3.3 would be pretty ancient, no?

-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18373/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18374.php">Syed Ahsan Ali: "[OMPI users] Error building Openmpi (configure: error: C compiler cannot create executables)"</a>
<li><strong>Previous message:</strong> <a href="18372.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>In reply to:</strong> <a href="18372.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18376.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Reply:</strong> <a href="18376.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
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
