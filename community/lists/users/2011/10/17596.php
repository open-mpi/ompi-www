<?
$subject_val = "[OMPI users] Visual debugging on the cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 24 15:49:46 2011" -->
<!-- isoreceived="20111024194946" -->
<!-- sent="Mon, 24 Oct 2011 20:49:40 +0100 (BST)" -->
<!-- isosent="20111024194940" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] Visual debugging on the cluster" -->
<!-- id="1319485780.27177.YahooMailNeo_at_web29618.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0C3C2B7A-52D0-4FE3-AF29-A16925CDCC9F_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] Visual debugging on the cluster<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-24 15:49:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17597.php">Meredith Creekmore: "Re: [OMPI users] Visual debugging on the cluster"</a>
<li><strong>Previous message:</strong> <a href="17595.php">Nguyen Toan: "[OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>In reply to:</strong> <a href="17590.php">Jeff Squyres: "Re: [OMPI users] orte_grpcomm_modex failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17597.php">Meredith Creekmore: "Re: [OMPI users] Visual debugging on the cluster"</a>
<li><strong>Reply:</strong> <a href="17597.php">Meredith Creekmore: "Re: [OMPI users] Visual debugging on the cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Community,

I have been struggling with visual debugging on cluster machines. So far, I tried to work around the problem, or total avoid it, but no more.

I have three machines on the cluster: a.s1.s2, b.s1.s2 and c.s1.s2. I do not have admin privileges on any of these machines.

Now, I want to run a visual debugger on all of these machines, and have the windows come up. 


So for from: (<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>? category=running)

13. Can I run GUI applications with Open MPI?  
Yes, but it will depend on your local setup and may require
additional setup. 
In short: you will need to have X forwarding enabled from the remote
processes to the display where you want output to appear.  In a secure
environment, you can simply allow all X requests to be shown on the
target display and set the DISPLAY environment variable in all MPI
process' environments to the target display, perhaps something like
this: 
shell$ hostname my_desktop.secure-cluster. example.com shell$ xhost +
shell$ mpirun -np 4 -x DISPLAY=my_desktop.secure- cluster.example.com a.out  
However, this technique is not generally suitable for unsecure
environments (because it allows anyone to read and write to your
display).  A slightly more secure way is to only allow X connections
from the nodes where your application will be running: 
shell$ hostname my_desktop.secure-cluster. example.com shell$ xhost +compute1 +compute2 +compute3 +compute4
compute1 being added to access control list
compute2 being added to access control list
compute3 being added to access control list
compute4 being added to access control list
shell$ mpirun -np 4 -x DISPLAY=my_desktop.secure- cluster.example.com a.out  
(assuming that the four nodes you are running on are compute1 through compute4). 
Other methods are available, but they involve sophisticated X
forwarding through mpirun and are generally more complicated than
desirable.
This still gives me &quot;Error: Can't open display:&quot; problem. 

My mpirun shell script contains:

mpirun-1.4.3 -hostfile hostfile -np 3 -v -nooversubscribe --rankfile rankfile.txt --report-bindings&#160; -timestamp-output ./testdisplay-window.sh 


where rankfile and hostfile contain a.s1.s2, b.s1.s2 and c.s1.s2, and are proper.

The file ./testdisplay-window.sh:

#!/bin/bash
echo &quot;Running xeyes on `hostname`&quot;
DISPLAY=a.s1.s2:11.0
xeyes
exit 0

I see that my xauth list output already contains entries like:

a.s1.s2/unix:12&#160; MIT-MAGIC-COOKIE-1&#160; aa16a9573f42224d760c7bb618b48a6f
a.s1.s2/unix:10&#160; MIT-MAGIC-COOKIE-1&#160; 0fb6fe3c2e35676136c8642412fb5809
a.s1.s2/unix:11&#160; MIT-MAGIC-COOKIE-1&#160; a3a65970b5f545bc750e3520a4e3b872


I seem to have run out of ideas now.

However, this works prefectly on any of the machines a.s1.s2, b.s1.s2or c.s1.s2:

(for example, running from a.s1.s2):

ssh b.s1.s2 xeyes

Can someone help?


Best

Devendra Rai






________________________________
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: devendra rai &lt;rai.devendra_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Friday, 21 October 2011, 13:14
Subject: Re: [OMPI users] orte_grpcomm_modex failed

This usually means that you have a Open MPI version mismatch between some of your nodes.&#160; Meaning: on some nodes, you're finding version X.Y.Z of Open MPI by default, but on other nodes, you're finding version A.B.C.


On Oct 21, 2011, at 7:00 AM, devendra rai wrote:

&gt; Hello Community,
&gt; 
&gt; I have been struggling with this error for quite some time:
&gt; 
&gt; It looks like MPI_INIT failed for some reason; your parallel process is
&gt; likely to abort.&#160; There are many reasons that a parallel process can
&gt; fail during MPI_INIT; some of which are due to configuration or environment
&gt; problems.&#160; This failure appears to be an internal failure; here's some
&gt; additional information (which may only be relevant to an Open MPI
&gt; developer):
&gt; 
&gt;&#160;  orte_grpcomm_modex failed
&gt;&#160;  --&gt; Returned &quot;Data unpack would read
 past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
&gt; --------------------------------------------------------------------------
&gt; --------------------------------------------------------------------------
&gt; mpirun has exited due to process rank 1 with PID 18945 on
&gt; node tik35x.ethz.ch exiting without calling &quot;finalize&quot;. This may
&gt; have caused other processes in the application to be
&gt; terminated by signals sent by mpirun (as reported here).
&gt; 
&gt; I am running this on a cluster and this has started happening only after a recent rebuild of openmpi-1.4.3. Interestingly, I have the same version of openmpi on my PC, and the same application works fine.
&gt; 
&gt; I have looked into this error on the web, but there is very little discussion, on the causes, or how to correct it. I asked the admin to attempt a re-install of openmpi, but I am not sure whether this will solve the problem.
&gt; 
&gt; Can
 some one please help?
&gt; 
&gt; Thanks a lot.
&gt; 
&gt; Best,
&gt; 
&gt; Devendra Rai
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17597.php">Meredith Creekmore: "Re: [OMPI users] Visual debugging on the cluster"</a>
<li><strong>Previous message:</strong> <a href="17595.php">Nguyen Toan: "[OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>In reply to:</strong> <a href="17590.php">Jeff Squyres: "Re: [OMPI users] orte_grpcomm_modex failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17597.php">Meredith Creekmore: "Re: [OMPI users] Visual debugging on the cluster"</a>
<li><strong>Reply:</strong> <a href="17597.php">Meredith Creekmore: "Re: [OMPI users] Visual debugging on the cluster"</a>
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
