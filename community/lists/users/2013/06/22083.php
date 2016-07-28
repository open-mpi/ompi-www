<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 12 15:00:49 2013" -->
<!-- isoreceived="20130612190049" -->
<!-- sent="Wed, 12 Jun 2013 19:00:08 +0000" -->
<!-- isosent="20130612190008" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CA15ADF_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyYhip+ing-RQxkgxmpGVfjF5YpeKcPue=8AMDg4n-P-ig_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-12 15:00:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22084.php">Brian Budge: "[OMPI users] design advice for multi-threaded load balancing application"</a>
<li><strong>Previous message:</strong> <a href="22082.php">Mike Dubman: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
<li><strong>In reply to:</strong> <a href="22082.php">Mike Dubman: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The version of mxm is reports as:  Version     : 1.5.dc8c171
<br>
The version of OFED reports as:  MLNX_OFED_LINUX-2.0-2.0.5:
<br>
<p>Here are some revised scaling numbers after configuring OpenMPI to use MXM.  I'm not sure if I posted medium or small case last time, but this is the &quot;small&quot; case.  By the time you get out to 800 cores, each process talks to between 10 to 16 other processes (this is a physical domain decomposition), and the message sizes can be described by saying there is a distribution from 1K bytes up to 10K bytes (25%), 3 times larger (50%), and 3 times smaller (25%). On the &quot;medium&quot; case, the difference between OpenMPI and MVAPICH is smaller, but OpenMPI is still doing better.
<br>
<p><p>Scalability - 1 domain per process
<br>
&nbsp;&nbsp;&nbsp;MPI              # cores   Ave. Rate   Std. Dev. %  # timings   Speedup    Efficiency
<br>
================================================================================================
<br>
MVAPICH            |   16   |    7.5822  |   0.171 % |       3  |   16.000  |  1.0000
<br>
MVAPICH            |   48   |    7.7416  |   0.804 % |       3  |   47.011  |  0.9794
<br>
MVAPICH            |   80   |    7.6365  |   0.252 % |       3  |   79.431  |  0.9929
<br>
MVAPICH            |  160   |    7.4802  |   0.887 % |       3  |  162.182  |  1.0136
<br>
MVAPICH            |  256   |    7.7930  |   1.554 % |       3  |  249.073  |  0.9729
<br>
MVAPICH            |  320   |    7.7346  |   0.423 % |       3  |  313.695  |  0.9803
<br>
MVAPICH            |  480   |    7.9225  |   2.594 % |       3  |  459.378  |  0.9570
<br>
MVAPICH            |  640   |    8.3111  |   2.416 % |       3  |  583.866  |  0.9123
<br>
MVAPICH            |  800   |    8.9315  |   5.059 % |       3  |  679.137  |  0.8489
<br>
OpenMPI            |   16   |    7.5919  |   0.879 % |       3  |   16.000  |  1.0000
<br>
OpenMPI            |   48   |    7.7469  |   0.478 % |       3  |   47.040  |  0.9800
<br>
OpenMPI            |   80   |    7.6654  |   0.544 % |       3  |   79.233  |  0.9904
<br>
OpenMPI            |  160   |    7.7252  |   2.202 % |       3  |  157.239  |  0.9827
<br>
OpenMPI            |  256   |    7.7043  |   0.563 % |       3  |  252.265  |  0.9854
<br>
OpenMPI            |  320   |    7.6727  |   6.086 % |       3  |  316.629  |  0.9895
<br>
OpenMPI            |  480   |    7.7016  |   0.450 % |       3  |  473.163  |  0.9858
<br>
OpenMPI            |  640   |    8.0357  |   0.572 % |       3  |  604.651  |  0.9448
<br>
OpenMPI            |  800   |    8.4328  |   3.198 % |       3  |  720.223  |  0.9003
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Mike Dubman
<br>
Sent: Wednesday, June 12, 2013 7:01 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem
<br>
<p>Also, what ofed version (ofed_info -s) and mxm version (rpm -qi mxm) do you use?
<br>
<p>On Wed, Jun 12, 2013 at 3:30 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Great! Would you mind showing the revised table? I'm curious as to the relative performance.
<br>
<p><p>On Jun 11, 2013, at 4:53 PM, eblosch_at_[hidden]&lt;mailto:eblosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Problem solved. I did not configure with --with-mxm=/opt/mellanox/mcm and
</span><br>
<span class="quotelev1">&gt; this location was not auto-detected.  Once I rebuilt with this option,
</span><br>
<span class="quotelev1">&gt; everything worked fine. Scaled better than MVAPICH out to 800. MVAPICH
</span><br>
<span class="quotelev1">&gt; configure log showed that it had found this component of the OFED stack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you run at 224 and things look okay, then I would suspect something in
</span><br>
<span class="quotelev2">&gt;&gt; the upper level switch that spans cabinets. At that point, I'd have to
</span><br>
<span class="quotelev2">&gt;&gt; leave it to Mellanox to advise.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 11, 2013, at 6:55 AM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried adding &quot;-mca btl openib,sm,self&quot;  but it did not make any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; difference.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jesus' e-mail this morning has got me thinking.  In our system, each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cabinet has 224 cores, and we are reaching a different level of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system architecture when we go beyond 224.  I got an additional data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; point at 256 and found that performance is already falling off. Perhaps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did not build OpenMPI properly to support the Mellanox adapters that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are used in the backplane, or I need some configuration setting similar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to FAQ #19 in the Tuning/Openfabrics section.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Sunday, June 09, 2013 6:48 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Need advice on performance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Strange - it looks like a classic oversubscription behavior. Another
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possibility is that it isn't using IB for some reason when extended to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the other nodes. What does your cmd line look like? Have you tried
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adding &quot;-mca btl openib,sm,self&quot; just to ensure it doesn't use TCP for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some reason?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 9, 2013, at 4:31 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correct.  20 nodes, 8 cores per dual-socket on each node = 360.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Sunday, June 09, 2013 6:18 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Need advice on performance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, just to be sure - when you run 320 &quot;cores&quot;, you are running across
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 20 nodes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just want to ensure we are using &quot;core&quot; the same way - some people
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confuse cores with hyperthreads.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 9, 2013, at 3:50 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16.  dual-socket Xeon, E5-2670.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying a larger model to see if the performance drop-off happens at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a different number of cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also I'm running some intermediate core-count sizes to refine the curve
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a bit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also added mpi_show_mca_params all, and at the same time,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_use_eager_rdma 1, just to see if that does anything.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Sunday, June 09, 2013 5:04 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: EXTERNAL: Re: [OMPI users] Need advice on performance problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks to me like things are okay thru 160, and then things fall apart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after that point. How many cores are on a node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 9, 2013, at 1:59 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having some trouble getting good scaling with OpenMPI 1.6.4 and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't know where to start looking. This is an Infiniband FDR network
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Sandy Bridge nodes.  I am using affinity (--bind-to-core) but no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other options. As the number of cores goes up, the message sizes are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typically going down. There seem to be lots of options in the FAQ, and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would welcome any advice on where to start.  All these timings are on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; completely empty system except for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI              # cores   Ave. Rate   Std. Dev. %  # timings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Speedup    Efficiency
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ================================================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MVAPICH            |   16   |    8.6783  |   0.995 % |       2  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16.000  |  1.0000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MVAPICH            |   48   |    8.7665  |   1.937 % |       3  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 47.517  |  0.9899
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MVAPICH            |   80   |    8.8900  |   2.291 % |       3  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 78.095  |  0.9762
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MVAPICH            |  160   |    8.9897  |   2.409 % |       3  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 154.457  |  0.9654
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MVAPICH            |  320   |    8.9780  |   2.801 % |       3  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 309.317  |  0.9666
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MVAPICH            |  480   |    8.9704  |   2.316 % |       3  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 464.366  |  0.9674
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MVAPICH            |  640   |    9.0792  |   1.138 % |       3  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 611.739  |  0.9558
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MVAPICH            |  720   |    9.1328  |   1.052 % |       3  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 684.162  |  0.9502
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MVAPICH            |  800   |    9.1945  |   0.773 % |       3  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 755.079  |  0.9438
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI            |   16   |    8.6743  |   2.335 % |       2  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16.000  |  1.0000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI            |   48   |    8.7826  |   1.605 % |       2  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 47.408  |  0.9877
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI            |   80   |    8.8861  |   0.120 % |       2  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 78.093  |  0.9762
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI            |  160   |    8.9774  |   0.785 % |       2  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 154.598  |  0.9662
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI            |  320   |   12.0585  |  16.950 % |       2  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 230.191  |  0.7193
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI            |  480   |   14.8330  |   1.300 % |       2  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 280.701  |  0.5848
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI            |  640   |   17.1723  |   2.577 % |       3  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 323.283  |  0.5051
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI            |  720   |   18.2153  |   2.798 % |       3  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 342.868  |  0.4762
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI            |  800   |   19.3603  |   2.254 % |       3  |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 358.434  |  0.4480
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22083/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22084.php">Brian Budge: "[OMPI users] design advice for multi-threaded load balancing application"</a>
<li><strong>Previous message:</strong> <a href="22082.php">Mike Dubman: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
<li><strong>In reply to:</strong> <a href="22082.php">Mike Dubman: "Re: [OMPI users] EXTERNAL: Re: Need advice on performance problem"</a>
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
