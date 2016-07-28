<?
$subject_val = "Re: [OMPI users] How does binding option affect network traffic?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 16:16:31 2014" -->
<!-- isoreceived="20140829201631" -->
<!-- sent="Fri, 29 Aug 2014 13:16:30 -0700" -->
<!-- isosent="20140829201630" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does binding option affect network traffic?" -->
<!-- id="CAMD57odN6CA+TsDv0C3uuTkRLF0EuQKzAQAX-XykwH6Z0_QbGg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="bef8cbe8f24c452c90aa19fcdf9bab5f_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does binding option affect network traffic?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 16:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25201.php">tmishima_at_[hidden]: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Previous message:</strong> <a href="25199.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25199.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25201.php">tmishima_at_[hidden]: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be okay. I suspect you are correct in that something isn't right in
<br>
the fabric.
<br>
<p><p><p>On Fri, Aug 29, 2014 at 1:06 PM, McGrattan, Kevin B. Dr. &lt;
<br>
kevin.mcgrattan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I am able to run all 15 of my jobs simultaneously; 16 MPI processes per
</span><br>
<span class="quotelev1">&gt; job; mapping by socket and binding to socket. On a given socket, 6 MPI
</span><br>
<span class="quotelev1">&gt; processes from 6 separate mpiruns share the 6 cores, or at least I assume
</span><br>
<span class="quotelev1">&gt; they are sharing. The load for all CPUs and all processes is 100%. I
</span><br>
<span class="quotelev1">&gt; understand that I am loading the system to its limits, but is what I am
</span><br>
<span class="quotelev1">&gt; doing OK? My jobs are running, and the only problem seems to be that some
</span><br>
<span class="quotelev1">&gt; jobs are hanging at random times. This is a new cluster I am shaking down,
</span><br>
<span class="quotelev1">&gt; and I am guessing that the message passing traffic is causing packet
</span><br>
<span class="quotelev1">&gt; losses. I am working with the vendor to sort this out, but I am curious
</span><br>
<span class="quotelev1">&gt; whether or not I am using OpenMPI appropriately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=8:ppn=2
</span><br>
<span class="quotelev1">&gt; mpirun --report-bindings --bind-to socket --map-by socket:PE=1 -np 16 &lt;executable
</span><br>
<span class="quotelev1">&gt; file name&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bindings are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [burn004:07244] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]:   [B/B/B/B/B/B][./././././.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [burn004:07244] MCW rank 1 bound to socket 1[core 6[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [burn008:07256] MCW rank 3 bound to socket 1[core 6[hwt 0]], socket 1[core
</span><br>
<span class="quotelev1">&gt; 7[hwt 0]], socket 1[core 8[hwt 0]], socket 1[core 9[hwt 0]], socket 1[core
</span><br>
<span class="quotelev1">&gt; 10[hwt 0]], socket 1[core 11[hwt 0]]: [./././././.][B/B/B/B/B/B]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [burn008:07256] MCW rank 2 bound to socket 0[core 0[hwt 0]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core
</span><br>
<span class="quotelev1">&gt; 4[hwt 0]], socket 0[core 5[hwt 0]]:   [B/B/B/B/B/B][./././././.] and so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users [mailto:users-bounces_at_[hidden]] *On Behalf Of *Ralph
</span><br>
<span class="quotelev1">&gt; Castain
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, August 29, 2014 3:26 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] How does binding option affect network
</span><br>
<span class="quotelev1">&gt; traffic?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2014, at 10:51 AM, McGrattan, Kevin B. Dr. &lt;
</span><br>
<span class="quotelev1">&gt; kevin.mcgrattan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for the tip. I understand how using the --cpuset option would
</span><br>
<span class="quotelev1">&gt; help me in the example I described. However, suppose I have multiple users
</span><br>
<span class="quotelev1">&gt; submitting MPI jobs of various sizes? I wouldn't know a priori which cores
</span><br>
<span class="quotelev1">&gt; were in use and which weren't. I always assumed that this is what these
</span><br>
<span class="quotelev1">&gt; various schedulers did. Is there a way to map-by socket but not allow a
</span><br>
<span class="quotelev1">&gt; single core to be used by more than one process. At first glance, I thought
</span><br>
<span class="quotelev1">&gt; that --map-by socket and --bind-to core would do this. Would one of these
</span><br>
<span class="quotelev1">&gt; &quot;NOOVERSUBSCRIBE&quot; options help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid not - the issue here is that the mpirun's don't know about each
</span><br>
<span class="quotelev1">&gt; other. What you'd need to do is have your scheduler assign cores for our
</span><br>
<span class="quotelev1">&gt; use - we'll pick that up and stay inside that envelope. The exact scheduler
</span><br>
<span class="quotelev1">&gt; command depends on the scheduler, of course, but the scheduler would then
</span><br>
<span class="quotelev1">&gt; have the more global picture and could keep things separated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, in my test case, I have exactly the right amount of cores (240) to
</span><br>
<span class="quotelev1">&gt; run 15 jobs using 16 MPI processes. I am shaking down a new cluster we just
</span><br>
<span class="quotelev1">&gt; bought. This is an extreme case, but not atypical of the way we use our
</span><br>
<span class="quotelev1">&gt; clusters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, you do, but not exactly the way you showed you were trying to use
</span><br>
<span class="quotelev1">&gt; this. If you try to run as you described, with 2ppn for each mpirun and 12
</span><br>
<span class="quotelev1">&gt; cores/node, you can run a maximum of 6 mpirun's at a time across a given
</span><br>
<span class="quotelev1">&gt; set of nodes. So you'd need to stage your allocations correctly to make it
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, 28 Aug 2014 13:27:12 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How does binding option affect network
</span><br>
<span class="quotelev1">&gt;                 traffic?
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;637CAEF5-BBB3-46C2-9387-DECDF8CBDDD6_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2014, at 11:50 AM, McGrattan, Kevin B. Dr. &lt;
</span><br>
<span class="quotelev1">&gt; kevin.mcgrattan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My institute recently purchased a linux cluster with 20 nodes; 2 sockets
</span><br>
<span class="quotelev1">&gt; per node; 6 cores per socket. OpenMPI v 1.8.1 is installed. I want to run
</span><br>
<span class="quotelev1">&gt; 15 jobs. Each job requires 16 MPI processes.  For each job, I want to use
</span><br>
<span class="quotelev1">&gt; two cores on each node, mapping by socket. If I use these options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=8:ppn=2
</span><br>
<span class="quotelev1">&gt; mpirun --report-bindings --bind-to core --map-by socket:PE=1 -np 16
</span><br>
<span class="quotelev1">&gt; &lt;executable file name&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reported bindings are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [burn001:09186] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././.][./././././.] [burn001:09186] MCW rank 1 bound to socket
</span><br>
<span class="quotelev1">&gt; 1[core 6[hwt 0]]: [./././././.][B/././././.] [burn004:07113] MCW rank
</span><br>
<span class="quotelev1">&gt; 6 bound to socket 0[core 0[hwt 0]]: [B/././././.][./././././.]
</span><br>
<span class="quotelev1">&gt; [burn004:07113] MCW rank 7 bound to socket 1[core 6[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././.][B/././././.] and so on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These bindings appear to be OK, but when I do a ?top ?H? on each node, I
</span><br>
<span class="quotelev1">&gt; see that all 15 jobs use core 0 and core 6 on each node. This means, I
</span><br>
<span class="quotelev1">&gt; believe, that I am only using 1/6 or my resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is correct. The problem is that each mpirun execution has no idea
</span><br>
<span class="quotelev1">&gt; what the others are doing, or even that they exist. Thus, they will each
</span><br>
<span class="quotelev1">&gt; independently bind to core zero and core 6, as you observe. You can get
</span><br>
<span class="quotelev1">&gt; around this by submitting each with a separate --cpuset argument telling it
</span><br>
<span class="quotelev1">&gt; which cpus it is allowed to use - something like this (note that there is
</span><br>
<span class="quotelev1">&gt; no value to having pe=1 as that is automatically what happens with bind-to
</span><br>
<span class="quotelev1">&gt; core):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --cpuset 0,6 --bind-to core  ....
</span><br>
<span class="quotelev1">&gt; mpirun --cpuset 1,7 --bind-to core  ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; etc. You specified only two procs/node with your PBS request, so we'll
</span><br>
<span class="quotelev1">&gt; only map two on each node. This command line tells the first mpirun to only
</span><br>
<span class="quotelev1">&gt; use cores 0 and 6, and to bind each proc to one of those cores. The second
</span><br>
<span class="quotelev1">&gt; uses only cores 1 and 7, and thus is separated from the first command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, you should note that you can't run 15 jobs at the same time in
</span><br>
<span class="quotelev1">&gt; the manner you describe without overloading some cores as you only have 12
</span><br>
<span class="quotelev1">&gt; cores/node. This will create a poor-performance situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I want to use 100%. So I try this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=8:ppn=2
</span><br>
<span class="quotelev1">&gt; mpirun --report-bindings --bind-to socket --map-by socket:PE=1 -np 16
</span><br>
<span class="quotelev1">&gt; &lt;executable file name&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now it appears that I am getting 100% usage of all cores on all nodes. The
</span><br>
<span class="quotelev1">&gt; bindings are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [burn004:07244] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/B/B/B/B/B][./././././.] [burn004:07244] MCW rank 1 bound to socket
</span><br>
<span class="quotelev1">&gt; 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././.][B/B/B/B/B/B] [burn008:07256] MCW rank 3 bound to socket
</span><br>
<span class="quotelev1">&gt; 1[core 6[hwt 0]], socket 1[core 7[hwt 0]], socket 1[core 8[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 1[core 9[hwt 0]], socket 1[core 10[hwt 0]], socket 1[core 11[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././.][B/B/B/B/B/B] [burn008:07256] MCW rank 2 bound to socket
</span><br>
<span class="quotelev1">&gt; 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket
</span><br>
<span class="quotelev1">&gt; 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/B/B/B/B/B][./././././.] and so on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem now is that some of my jobs are hanging. They all start
</span><br>
<span class="quotelev1">&gt; running fine, and produce output. But at some point I lose about 4 out of
</span><br>
<span class="quotelev1">&gt; 15 jobs due to hanging. I suspect that an MPI message is passed and not
</span><br>
<span class="quotelev1">&gt; received. The number of jobs that hang and the time when they hang varies
</span><br>
<span class="quotelev1">&gt; from test to test. We have run these cases successfully on our old cluster
</span><br>
<span class="quotelev1">&gt; dozens of times ? they are part of our benchmark suite.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you have more cores on your old cluster? I suspect the problem here is
</span><br>
<span class="quotelev1">&gt; resource exhaustion, especially if you are using Infiniband as you are
</span><br>
<span class="quotelev1">&gt; overloading some of the cores, as mentioned above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run these jobs using a map by core strategy (that is, the MPI
</span><br>
<span class="quotelev1">&gt; processes are just mapped by core, and each job only uses 16 cores on two
</span><br>
<span class="quotelev1">&gt; nodes), I do not see as much hanging. It still occurs, but less often. This
</span><br>
<span class="quotelev1">&gt; leads me to suspect that there is something about the increased network
</span><br>
<span class="quotelev1">&gt; traffic due to the map-by-socket approach that is the cause of the problem.
</span><br>
<span class="quotelev1">&gt; But I do not know what to do about it. I think that the map-by-socket
</span><br>
<span class="quotelev1">&gt; approach is the right one, but I do not know if I have my OpenMPI options
</span><br>
<span class="quotelev1">&gt; just right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you tell me what OpenMPI options to use, and can you tell me how I
</span><br>
<span class="quotelev1">&gt; might debug the hanging issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kevin McGrattan
</span><br>
<span class="quotelev1">&gt; National Institute of Standards and Technology
</span><br>
<span class="quotelev1">&gt; 100 Bureau Drive, Mail Stop 8664
</span><br>
<span class="quotelev1">&gt; Gaithersburg, Maryland 20899
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 301 975 2712
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25195.php">http://www.open-mpi.org/community/lists/users/2014/08/25195.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25199.php">http://www.open-mpi.org/community/lists/users/2014/08/25199.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25200/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25201.php">tmishima_at_[hidden]: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>Previous message:</strong> <a href="25199.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25199.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25201.php">tmishima_at_[hidden]: "Re: [OMPI users] How does binding option affect network traffic?"</a>
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
