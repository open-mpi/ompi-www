<?
$subject_val = "Re: [OMPI users] Visual debugging on the cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 24 16:31:59 2011" -->
<!-- isoreceived="20111024203159" -->
<!-- sent="Mon, 24 Oct 2011 20:31:42 +0000" -->
<!-- isosent="20111024203142" -->
<!-- name="Meredith Creekmore" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Visual debugging on the cluster" -->
<!-- id="F25CB9D01FEBAE4A82E2845BBF7F494533FFCB9D_at_CH1PRD0302MB129.namprd03.prod.outlook.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1319485780.27177.YahooMailNeo_at_web29618.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Visual debugging on the cluster<br>
<strong>From:</strong> Meredith Creekmore (<em>mtcreekmore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-24 16:31:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17598.php">吕慧伟: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Previous message:</strong> <a href="17596.php">devendra rai: "[OMPI users] Visual debugging on the cluster"</a>
<li><strong>In reply to:</strong> <a href="17596.php">devendra rai: "[OMPI users] Visual debugging on the cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17601.php">devendra rai: "Re: [OMPI users] Visual debugging on the cluster"</a>
<li><strong>Reply:</strong> <a href="17601.php">devendra rai: "Re: [OMPI users] Visual debugging on the cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not a direct answer to your question, but have you tried using Eclipse with the Parallel Platform Tools installed?
<br>
<p><a href="http://eclipse.org/ptp/">http://eclipse.org/ptp/</a>
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of devendra rai
<br>
Sent: Monday, October 24, 2011 2:50 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Visual debugging on the cluster
<br>
<p>Hello Community,
<br>
<p><p>I have been struggling with visual debugging on cluster machines. So far, I tried to work around the problem, or total avoid it, but no more.
<br>
<p><p>I have three machines on the cluster: a.s1.s2, b.s1.s2 and c.s1.s2. I do not have admin privileges on any of these machines.
<br>
<p><p>Now, I want to run a visual debugger on all of these machines, and have the windows come up.
<br>
<p><p><p>So for from: (<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>? category=running&lt;<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>&gt;)
<br>
<p><p>13. Can I run GUI applications with Open MPI?
<br>
Yes, but it will depend on your local setup and may require additional setup.
<br>
In short: you will need to have X forwarding enabled from the remote processes to the display where you want output to appear. In a secure environment, you can simply allow all X requests to be shown on the target display and set the DISPLAY environment variable in all MPI process' environments to the target display, perhaps something like this:
<br>
<p>shell$ hostname
<br>
<p>my_desktop.secure-cluster. example.com&lt;<a href="http://my_desktop.secure-cluster.example.com/">http://my_desktop.secure-cluster.example.com/</a>&gt;
<br>
<p>shell$ xhost +
<br>
<p>shell$ mpirun -np 4 -x DISPLAY=my_desktop.secure- cluster.example.com&lt;<a href="http://my_desktop.secure-cluster.example.com/">http://my_desktop.secure-cluster.example.com/</a>&gt; a.out
<br>
<p>However, this technique is not generally suitable for unsecure environments (because it allows anyone to read and write to your display). A slightly more secure way is to only allow X connections from the nodes where your application will be running:
<br>
<p>shell$ hostname
<br>
<p>my_desktop.secure-cluster. example.com&lt;<a href="http://my_desktop.secure-cluster.example.com/">http://my_desktop.secure-cluster.example.com/</a>&gt;
<br>
<p>shell$ xhost +compute1 +compute2 +compute3 +compute4
<br>
<p>compute1 being added to access control list
<br>
<p>compute2 being added to access control list
<br>
<p>compute3 being added to access control list
<br>
<p>compute4 being added to access control list
<br>
<p>shell$ mpirun -np 4 -x DISPLAY=my_desktop.secure- cluster.example.com&lt;<a href="http://my_desktop.secure-cluster.example.com/">http://my_desktop.secure-cluster.example.com/</a>&gt; a.out
<br>
<p>(assuming that the four nodes you are running on are compute1 through compute4).
<br>
Other methods are available, but they involve sophisticated X forwarding through mpirun and are generally more complicated than desirable.
<br>
<p>This still gives me &quot;Error: Can't open display:&quot; problem.
<br>
<p>My mpirun shell script contains:
<br>
<p>mpirun-1.4.3 -hostfile hostfile -np 3 -v -nooversubscribe --rankfile rankfile.txt --report-bindings  -timestamp-output ./testdisplay-window.sh
<br>
<p><p>where rankfile and hostfile contain a.s1.s2, b.s1.s2 and c.s1.s2, and are proper.
<br>
<p>The file ./testdisplay-window.sh:
<br>
<p>#!/bin/bash
<br>
echo &quot;Running xeyes on `hostname`&quot;
<br>
DISPLAY=a.s1.s2:11.0
<br>
xeyes
<br>
exit 0
<br>
<p>I see that my xauth list output already contains entries like:
<br>
<p>a.s1.s2/unix:12  MIT-MAGIC-COOKIE-1  aa16a9573f42224d760c7bb618b48a6f
<br>
a.s1.s2/unix:10  MIT-MAGIC-COOKIE-1  0fb6fe3c2e35676136c8642412fb5809
<br>
a.s1.s2/unix:11  MIT-MAGIC-COOKIE-1  a3a65970b5f545bc750e3520a4e3b872
<br>
<p><p>I seem to have run out of ideas now.
<br>
<p>However, this works prefectly on any of the machines a.s1.s2, b.s1.s2 or c.s1.s2:
<br>
<p>(for example, running from a.s1.s2):
<br>
<p>ssh b.s1.s2 xeyes
<br>
<p>Can someone help?
<br>
<p><p>Best
<br>
<p>Devendra Rai
<br>
<p><p><p><p>________________________________
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
To: devendra rai &lt;rai.devendra_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Sent: Friday, 21 October 2011, 13:14
<br>
Subject: Re: [OMPI users] orte_grpcomm_modex failed
<br>
<p>This usually means that you have a Open MPI version mismatch between some of your nodes.  Meaning: on some nodes, you're finding version X.Y.Z of Open MPI by default, but on other nodes, you're finding version A.B.C.
<br>
<p><p>On Oct 21, 2011, at 7:00 AM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; Hello Community,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been struggling with this error for quite some time:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_grpcomm_modex failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 18945 on
</span><br>
<span class="quotelev1">&gt; node tik35x.ethz.ch exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running this on a cluster and this has started happening only after a recent rebuild of openmpi-1.4.3. Interestingly, I have the same version of openmpi on my PC, and the same application works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have looked into this error on the web, but there is very little discussion, on the causes, or how to correct it. I asked the admin to attempt a re-install of openmpi, but I am not sure whether this will solve the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can some one please help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Devendra Rai
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17598.php">吕慧伟: "Re: [OMPI users] Hybrid MPI/Pthreads program behaves differently on two different machines with same hardware"</a>
<li><strong>Previous message:</strong> <a href="17596.php">devendra rai: "[OMPI users] Visual debugging on the cluster"</a>
<li><strong>In reply to:</strong> <a href="17596.php">devendra rai: "[OMPI users] Visual debugging on the cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17601.php">devendra rai: "Re: [OMPI users] Visual debugging on the cluster"</a>
<li><strong>Reply:</strong> <a href="17601.php">devendra rai: "Re: [OMPI users] Visual debugging on the cluster"</a>
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
