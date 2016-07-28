<?
$subject_val = "Re: [OMPI users] users Digest, Vol 2064, Issue 3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 14:23:01 2011" -->
<!-- isoreceived="20111110192301" -->
<!-- sent="Thu, 10 Nov 2011 11:22:55 -0800 (PST)" -->
<!-- isosent="20111110192255" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 2064, Issue 3" -->
<!-- id="1320952975.92633.YahooMailNeo_at_web121712.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.4512.1320950894.6917.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 2064, Issue 3<br>
<strong>From:</strong> Mudassar Majeed (<em>mudassarm30_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 14:22:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17757.php">Thomas Anderson: "[OMPI users] Type struct question"</a>
<li><strong>Previous message:</strong> <a href="17755.php">amosleff_at_[hidden]: "Re: [OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have mentioned it two times that by doing this we got good results and the question was just in terms of process migration ...... I have explained the current work as well. 

regards,
Mudassar



________________________________
From: &quot;users-request_at_[hidden]&quot; &lt;users-request_at_[hidden]&gt;
To: users_at_[hidden]
Sent: Thursday, November 10, 2011 7:48 PM
Subject: users Digest, Vol 2064, Issue 3

Send users mailing list submissions to
&#160;&#160;&#160; users_at_[hidden]

To subscribe or unsubscribe via the World Wide Web, visit
&#160;&#160;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
or, via email, send a message with subject or body 'help' to
&#160;&#160;&#160; users-request_at_[hidden]

You can reach the person managing the list at
&#160;&#160;&#160; users-owner_at_[hidden]

When replying, please edit your Subject line so it is more specific
than &quot;Re: Contents of users digest...&quot;


Today's Topics:

&#160;  1. Re: Process Migration (Jeff Squyres)
&#160;  2. Re: Problems compiling and running openmpi-1.4.4
&#160; &#160; &#160; (amosleff_at_[hidden])


----------------------------------------------------------------------

Message: 1
Date: Thu, 10 Nov 2011 12:59:17 -0500
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
Subject: Re: [OMPI users] Process Migration
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID: &lt;811FFDFC-C3B6-4BF7-9E53-95C0B572FD74_at_[hidden]&gt;
Content-Type: text/plain; charset=us-ascii

On Nov 10, 2011, at 11:30 AM, Mudassar Majeed wrote:

&gt; For example there are 10 nodes, and each node contains 20 cores. We will have 200 cores in total and let say there are 2000 MPI processes. We start the application with 10 MPI on each core.

Is this just to be able to simulate very large MPI jobs, or are you thinking that people will actually run that way (heavily over-subscribing cores)?

&gt; Let say Comm(Pi, Pj) denotes how much communication Pi and Pj make with each other and let say each process Pi has to communicate with few other processes Pj, Pk, Pl, Pm..... Pz. Secondly let say Load(Pi) denotes the computational load of process Pi. 

Depending on how you define Load(Pi), this really only matters if you're over-subscribing processors.&#160; Meaning: if you have only one MPI process per processor core, then Load(Pi) is probably irrelevant (excluding other effects, like cache thrashing, memory and PCI bandwidth usage, etc.).

Right?

&gt; Now, we know that sending a message between two nodes is more expensive then sending a message within a node (two processes that communicate reside on the cores that exist in the same node). This is true atleast in my supercomputing centers that I use. In my previous work I only consider Load[ ] and not Comm[ ]. In that work, all the MPI processes calculate their new ranks and then call MPI_Comm_split with key = new_rank and color = 0. So all the processes get the new rank and then the actual data is provided to each process for computation. We have found that the total execution time decreases.

In an oversubscribed case, I'm still not sure how this works.&#160; Do you have some MPI processes doing work and some not?&#160; (e.g., blocking in sleep() or something)

I think the reason for my confusion is that MPI processes are generally designed to run 1 per core (or perhaps 1 MPI process per more-than-1-core, if the MPI process is multi-threaded).&#160; MPI processes are generally assumed to aggressively use the entire computational resource that is given to them -- sharing computational resources (e.g., cores) between multiple MPI processes would seem to violate that assumption, and therefore result in bad overall performance.

I feel like I must be missing something in what you're trying to describe...

&gt; Now we need to consider the communications as well. We will bring the computational load balance but those MPI which communicate more will be mapped to the same node (not necessarily same cores). I have solved this optimization problem using ILP and that shows good results. But the thing is, in the solution I have found that after applying ILP or my heuristic, the cores (on all nodes) will no longer contain same number of MPI processes (load and communications are balanced instead of count of MPI processes per core). So this means either I use process migration for few processes or I run more than 2000 (means at every core I run few more processes) so that at the end imbalance in the number or MPI processes per core can be achieved (to achieve balance in load and communications). I need your suggestions in these regards,
&gt; 
&gt; thanks and best regards,
&gt; Mudassar
&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Cc: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;
&gt; Sent: Thursday, November 10, 2011 5:11 PM
&gt; Subject: Re: [OMPI users] Process Migration
&gt; 
&gt; Note that the &quot;migrate me from my current node to node &lt;foo&gt;&quot; scenario
&gt; is covered by the migration API exported by the C/R infrastructure, as
&gt; I noted earlier.
&gt;&#160;  <a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_migrate">http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_migrate</a>
&gt; 
&gt; The &quot;move rank N to node &lt;foo&gt;&quot; scenario could probably be added as an
&gt; extension of this interface (since you can do that via the command
&gt; line now) if that is what you are looking for.
&gt; 
&gt; -- Josh
&gt; 
&gt; On Thu, Nov 10, 2011 at 11:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; &gt; So what you are looking for is an MPI extension API that let's you say
&gt; &gt; &quot;migrate me from my current node to node &lt;foo&gt;&quot;? Or do you have a rank that
&gt; &gt; is the &quot;master&quot; that would order &quot;move rank N to node &lt;foo&gt;&quot;?
&gt; &gt; Either could be provided, I imagine - just want to ensure I understand what
&gt; &gt; you need. Can you pass along a brief description of the syntax and
&gt; &gt; functionality you would need?
&gt; &gt;
&gt; &gt; On Nov 10, 2011, at 8:27 AM, Mudassar Majeed wrote:
&gt; &gt;
&gt; &gt; Thank you for your reply. In our previous publication, we have figured it
&gt; &gt; out that run more than one processes on cores and balancing the
&gt; &gt; computational load considerably reduces the total execution time. You know
&gt; &gt; the MPI_Graph_create function, we created another function MPI_Load_create
&gt; &gt; that maps the processes on cores such that balance of computational load can
&gt; &gt; be achieved on cores. We were having some issues with increase in
&gt; &gt; communication cost due to ranks rearrangements (due to MPI_Comm_split, with
&gt; &gt; color=0), so in this research work we will see how can we balance both
&gt; &gt; computation load on each core and communication load on each node. Those
&gt; &gt; processes that communicate more will reside on the same node keeping the
&gt; &gt; computational load balance over the cores. I solved this problem using ILP
&gt; &gt; but ILP takes time and can't be used in run time so I am thinking about an
&gt; &gt; heuristic. That's why I want to see if it is possible to migrate a process
&gt; &gt; from one core to another or not. Then I will see how good my heuristic will
&gt; &gt; be.
&gt; &gt;
&gt; &gt; thanks
&gt; &gt; Mudassar
&gt; &gt;
&gt; &gt; ________________________________
&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; &gt; To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;; Open MPI Users
&gt; &gt; &lt;users_at_[hidden]&gt;
&gt; &gt; Cc: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt; &gt; Sent: Thursday, November 10, 2011 2:19 PM
&gt; &gt; Subject: Re: [OMPI users] Process Migration
&gt; &gt;
&gt; &gt; On Nov 10, 2011, at 8:11 AM, Mudassar Majeed wrote:
&gt; &gt;
&gt; &gt;&gt; Thank you for your reply. I am implementing a load balancing function for
&gt; &gt;&gt; MPI, that will balance the computation load and the communication both at a
&gt; &gt;&gt; time. So my algorithm assumes that all the cores may at the end get
&gt; &gt;&gt; different number of processes to run.
&gt; &gt;
&gt; &gt; Are you talking about over-subscribing cores?&#160; I.e., putting more than 1 MPI
&gt; &gt; process on each core?
&gt; &gt;
&gt; &gt; In general, that's not a good idea.
&gt; &gt;
&gt; &gt;&gt; In the beginning (before that function will be called), each core will
&gt; &gt;&gt; have equal number of processes. So I am thinking either to start more
&gt; &gt;&gt; processes on each core (than needed) and run my function for load balancing
&gt; &gt;&gt; and then block the remaining processes (on each core). In this way I will be
&gt; &gt;&gt; able to achieve different number of processes per core.
&gt; &gt;
&gt; &gt; Open MPI spins aggressively looking for network progress.&#160; For example, if
&gt; &gt; you block in an MPI_RECV waiting for a message, Open MPI is actively banging
&gt; &gt; on the CPU looking for network progress.&#160; Because of this (and other
&gt; &gt; reasons), you probably do not want to over-subscribe your processors
&gt; &gt; (meaning: you probably don't want to put more than 1 process per core).
&gt; &gt;
&gt; &gt; --
&gt; &gt; Jeff Squyres
&gt; &gt; jsquyres_at_[hidden]
&gt; &gt; For corporate legal information go to:
&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; 
&gt; 
&gt; 
&gt; -- 
&gt; Joshua Hursey
&gt; Postdoctoral Research Associate
&gt; Oak Ridge National Laboratory
&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>




------------------------------

Message: 2
Date: Thu, 10 Nov 2011 13:48:06 -0500
From: &quot;amosleff_at_[hidden]&quot; &lt;amosleff_at_[hidden]&gt;
Subject: Re: [OMPI users] Problems compiling and running openmpi-1.4.4
To: Open MPI Users &lt;users_at_[hidden]&gt;
Message-ID:
&#160;&#160;&#160; &lt;CAHNB0nPJzkK7Q9jxR8UhDrPO_Vvm+Myjy+zZ6LEh6r38k-_-Ag_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;

Hi Jeff,
&#160; &#160; &#160; &#160; &#160; In the attached file Compile_out.tar.bz2 I have included the out
files for config, make, and install.&#160; I also included another copy of the
out_test file so that it gives you all of the info that I have.&#160; Again your
help is much appreciated.

Amos Leffler

On Wed, Nov 9, 2011 at 12:23 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:

&gt; On Nov 9, 2011, at 12:16 PM, amosleff_at_[hidden] wrote:
&gt;
&gt; &gt;&#160; &#160; &#160; &#160; &#160; &#160; The file was the output to the command:
&gt; &gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &quot;mpicc hello_cc.c -o hello_cc
&gt; &gt; and lists files which do not appear to be present.&#160; I checked the
&gt; permissions and they seem to be correct so I am stumped,&#160; I did use the
&gt; make and install commands and they seemed to go properly.&#160; I have the out
&gt; files for the three commands and could send them to you if you want.
&gt;
&gt; Please send all the information listed here:
&gt;
&gt;&#160; &#160; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
-------------- next part --------------
HTML attachment scrubbed and removed
-------------- next part --------------
A non-text attachment was scrubbed...
Name: out_test~
Type: application/octet-stream
Size: 581 bytes
Desc: not available
URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20111110/edb0c48e/attachment.obj">http://www.open-mpi.org/MailArchives/users/attachments/20111110/edb0c48e/attachment.obj</a>&gt;
-------------- next part --------------
A non-text attachment was scrubbed...
Name: Compile_out.tar.bz2
Type: application/x-bzip2
Size: 85433 bytes
Desc: not available
URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20111110/edb0c48e/attachment.bz2">http://www.open-mpi.org/MailArchives/users/attachments/20111110/edb0c48e/attachment.bz2</a>&gt;

------------------------------

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

End of users Digest, Vol 2064, Issue 3
**************************************
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17756/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17757.php">Thomas Anderson: "[OMPI users] Type struct question"</a>
<li><strong>Previous message:</strong> <a href="17755.php">amosleff_at_[hidden]: "Re: [OMPI users] Problems compiling and running openmpi-1.4.4"</a>
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
