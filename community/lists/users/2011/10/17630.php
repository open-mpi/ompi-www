<?
$subject_val = "[OMPI users] Solved:  Visual debugging on the cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 26 12:29:17 2011" -->
<!-- isoreceived="20111026162917" -->
<!-- sent="Wed, 26 Oct 2011 17:29:11 +0100 (BST)" -->
<!-- isosent="20111026162911" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] Solved:  Visual debugging on the cluster" -->
<!-- id="1319646551.72361.YahooMailNeo_at_web29619.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F25CB9D01FEBAE4A82E2845BBF7F494533FFCC46_at_CH1PRD0302MB129.namprd03.prod.outlook.com" -->
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
<strong>Subject:</strong> [OMPI users] Solved:  Visual debugging on the cluster<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-26 12:29:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17631.php">Mudassar Majeed: "[OMPI users] Want to find LogGP parameters. Please help"</a>
<li><strong>Previous message:</strong> <a href="17629.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Meredith

Hmm.. Got my X forwarding to work, so can debug on multiple computers. So far, so good!

Marking the problem as solved. Thanks for your time.

Best

Devendra Rai


________________________________
From: Meredith Creekmore &lt;mtcreekmore_at_[hidden]&gt;
To: devendra rai &lt;rai.devendra_at_[hidden]&gt;
Sent: Tuesday, 25 October 2011, 18:06
Subject: RE: [OMPI users] Visual debugging on the cluster


 
Another dumb/obvious question, but have you tried to submit a sample compiled application across multiple nodes? I once did this and it was forever stuck in a wait state. The reasoning behind this was the admin did not clear my account to use multiple nodes. Once he realized the job had been stuck that way for over a month, he corrected it.
&#160;
There are video tutorials available online, I think. I personally found a Power Point presentation which went step by step. The problem is Eclipse and the plugin changes so often, those tutorials can be a bit hard to follow because many things may have been changed, especially in the menus where they tell you to find things.
&#160;
&#160;
From:devendra rai [mailto:rai.devendra_at_[hidden]] 
Sent: Tuesday, October 25, 2011 5:29 AM
To: Meredith Creekmore; Open MPI Users
Subject: Re: [OMPI users] Visual debugging on the cluster
&#160;
Hello Meredith,
&#160;
Yes, I have tried the plugin already. The problem is that the plugin seems to be forever stuck in &quot;Waiting for job information&quot; stage. I scouted around a bit on how to solve the problem, and it did not seem straightforward. At least, the solution to me seemed like a one-time wonder.
&#160;
And, this is how I shifted to parallel visual debuggers, using other tools like kdbg.
&#160;
However, in case you have PTP plugin working for you on Linux, it would help a lot if you can send screenshots/notes on how to set it up for multiple machines.
&#160;
So, summing up, I am still clueless.
&#160;
Thanks for your time though.
&#160;
Best
&#160;
Devendra
&#160;

________________________________
 
From:Meredith Creekmore &lt;mtcreekmore_at_[hidden]&gt;
To: devendra rai &lt;rai.devendra_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Monday, 24 October 2011, 22:31
Subject: RE: [OMPI users] Visual debugging on the cluster
Not a direct answer to your question, but have you tried using Eclipse with the Parallel Platform Tools installed?
&#160;
<a href="http://eclipse.org/ptp/">http://eclipse.org/ptp/</a>
&#160;
From:users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of devendra rai
Sent: Monday, October 24, 2011 2:50 PM
To: users_at_[hidden]
Subject: [OMPI users] Visual debugging on the cluster
&#160;
Hello Community,
&#160;
I have been struggling with visual debugging on cluster machines. So far, I tried to work around the problem, or total avoid it, but no more.
&#160;
I have three machines on the cluster: a.s1.s2, b.s1.s2 and c.s1.s2. I do not have admin privileges on any of these machines.
&#160;
Now, I want to run a visual debugger on all of these machines, and have the windows come up. 
&#160;
So for from: (<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>? category=running)
&#160;
13. Can I run GUI applications with Open MPI? 
Yes, but it will depend on your local setup and may require additional setup. 
In short: you will need to have X forwarding enabled from the remote processes to the display where you want output to appear. In a secure environment, you can simply allow all X requests to be shown on the target display and set the DISPLAYenvironment variable in all MPI process' environments to the target display, perhaps something like this: 
shell$ hostname
my_desktop.secure-cluster. example.com
shell$ xhost +
shell$ mpirun -np 4 -x DISPLAY=my_desktop.secure- cluster.example.com a.out 
However, this technique is not generally suitable for unsecure environments (because it allows anyone to read and write to your display). A slightly more secure way is to only allow X connections from the nodes where your application will be running: 
shell$ hostname
my_desktop.secure-cluster. example.com
shell$ xhost +compute1 +compute2 +compute3 +compute4
compute1 being added to access control list
compute2 being added to access control list
compute3 being added to access control list
compute4 being added to access control list
shell$ mpirun -np 4 -x DISPLAY=my_desktop.secure- cluster.example.com a.out 
(assuming that the four nodes you are running on are compute1through compute4). 
Other methods are available, but they involve sophisticated X forwarding through mpirun and are generally more complicated than desirable.

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



&#160;

________________________________
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17630/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17631.php">Mudassar Majeed: "[OMPI users] Want to find LogGP parameters. Please help"</a>
<li><strong>Previous message:</strong> <a href="17629.php">Gus Correa: "Re: [OMPI users] exited on signal 11 (Segmentation fault)."</a>
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
