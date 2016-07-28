<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 19:53:46 2013" -->
<!-- isoreceived="20130611235346" -->
<!-- sent="Tue, 11 Jun 2013 18:53:40 -0500 (CDT)" -->
<!-- isosent="20130611235340" -->
<!-- name="eblosch_at_[hidden]" -->
<!-- email="eblosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem" -->
<!-- id="3715905adec03581c4cb306677fcb1ed.squirrel_at_mailfe1.america.net" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="315F0933-1DA4-496A-AA35-D45032574CF9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem<br>
<strong>From:</strong> <a href="mailto:eblosch_at_[hidden]?Subject=Re:%20[OMPI%20users]%20EXTERNAL:%20Re:%20%20Need%20advice%20on%20performance%20problem"><em>eblosch_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-06-11 19:53:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22080.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>Previous message:</strong> <a href="22078.php">Ralph Castain: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>In reply to:</strong> <a href="22076.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22080.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>Reply:</strong> <a href="22080.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Problem solved. I did not configure with --with-mxm=/opt/mellanox/mcm and
<br>
this location was not auto-detected.  Once I rebuilt with this option,
<br>
everything worked fine. Scaled better than MVAPICH out to 800. MVAPICH
<br>
configure log showed that it had found this component of the OFED stack.
<br>
<p>Ed
<br>
<p><p><span class="quotelev1">&gt; If you run at 224 and things look okay, then I would suspect something in
</span><br>
<span class="quotelev1">&gt; the upper level switch that spans cabinets. At that point, I'd have to
</span><br>
<span class="quotelev1">&gt; leave it to Mellanox to advise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 11, 2013, at 6:55 AM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried adding &quot;-mca btl openib,sm,self&quot;  but it did not make any
</span><br>
<span class="quotelev2">&gt;&gt; difference.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jesus&#146; e-mail this morning has got me thinking.  In our system, each
</span><br>
<span class="quotelev2">&gt;&gt; cabinet has 224 cores, and we are reaching a different level of the
</span><br>
<span class="quotelev2">&gt;&gt; system architecture when we go beyond 224.  I got an additional data
</span><br>
<span class="quotelev2">&gt;&gt; point at 256 and found that performance is already falling off. Perhaps
</span><br>
<span class="quotelev2">&gt;&gt; I did not build OpenMPI properly to support the Mellanox adapters that
</span><br>
<span class="quotelev2">&gt;&gt; are used in the backplane, or I need some configuration setting similar
</span><br>
<span class="quotelev2">&gt;&gt; to FAQ #19 in the Tuning/Openfabrics section.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Sunday, June 09, 2013 6:48 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Need advice on performance
</span><br>
<span class="quotelev2">&gt;&gt; problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Strange - it looks like a classic oversubscription behavior. Another
</span><br>
<span class="quotelev2">&gt;&gt; possibility is that it isn't using IB for some reason when extended to
</span><br>
<span class="quotelev2">&gt;&gt; the other nodes. What does your cmd line look like? Have you tried
</span><br>
<span class="quotelev2">&gt;&gt; adding &quot;-mca btl openib,sm,self&quot; just to ensure it doesn't use TCP for
</span><br>
<span class="quotelev2">&gt;&gt; some reason?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2013, at 4:31 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Correct.  20 nodes, 8 cores per dual-socket on each node = 360.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Sunday, June 09, 2013 6:18 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Need advice on performance
</span><br>
<span class="quotelev2">&gt;&gt; problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, just to be sure - when you run 320 &quot;cores&quot;, you are running across
</span><br>
<span class="quotelev2">&gt;&gt; 20 nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just want to ensure we are using &quot;core&quot; the same way - some people
</span><br>
<span class="quotelev2">&gt;&gt; confuse cores with hyperthreads.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2013, at 3:50 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 16.  dual-socket Xeon, E5-2670.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying a larger model to see if the performance drop-off happens at
</span><br>
<span class="quotelev2">&gt;&gt; a different number of cores.
</span><br>
<span class="quotelev2">&gt;&gt; Also I&#146;m running some intermediate core-count sizes to refine the curve
</span><br>
<span class="quotelev2">&gt;&gt; a bit.
</span><br>
<span class="quotelev2">&gt;&gt; I also added mpi_show_mca_params all, and at the same time,
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_use_eager_rdma 1, just to see if that does anything.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Sunday, June 09, 2013 5:04 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: EXTERNAL: Re: [OMPI users] Need advice on performance problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks to me like things are okay thru 160, and then things fall apart
</span><br>
<span class="quotelev2">&gt;&gt; after that point. How many cores are on a node?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2013, at 1:59 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m having some trouble getting good scaling with OpenMPI 1.6.4 and I
</span><br>
<span class="quotelev2">&gt;&gt; don&#146;t know where to start looking. This is an Infiniband FDR network
</span><br>
<span class="quotelev2">&gt;&gt; with Sandy Bridge nodes.  I am using affinity (--bind-to-core) but no
</span><br>
<span class="quotelev2">&gt;&gt; other options. As the number of cores goes up, the message sizes are
</span><br>
<span class="quotelev2">&gt;&gt; typically going down. There seem to be lots of options in the FAQ, and I
</span><br>
<span class="quotelev2">&gt;&gt; would welcome any advice on where to start.  All these timings are on a
</span><br>
<span class="quotelev2">&gt;&gt; completely empty system except for me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI              # cores   Ave. Rate   Std. Dev. %  # timings
</span><br>
<span class="quotelev2">&gt;&gt; Speedup    Efficiency
</span><br>
<span class="quotelev2">&gt;&gt; ================================================================================================
</span><br>
<span class="quotelev2">&gt;&gt; MVAPICH            |   16   |    8.6783  |   0.995 % |       2  |
</span><br>
<span class="quotelev2">&gt;&gt; 16.000  |  1.0000
</span><br>
<span class="quotelev2">&gt;&gt; MVAPICH            |   48   |    8.7665  |   1.937 % |       3  |
</span><br>
<span class="quotelev2">&gt;&gt; 47.517  |  0.9899
</span><br>
<span class="quotelev2">&gt;&gt; MVAPICH            |   80   |    8.8900  |   2.291 % |       3  |
</span><br>
<span class="quotelev2">&gt;&gt; 78.095  |  0.9762
</span><br>
<span class="quotelev2">&gt;&gt; MVAPICH            |  160   |    8.9897  |   2.409 % |       3  |
</span><br>
<span class="quotelev2">&gt;&gt; 154.457  |  0.9654
</span><br>
<span class="quotelev2">&gt;&gt; MVAPICH            |  320   |    8.9780  |   2.801 % |       3  |
</span><br>
<span class="quotelev2">&gt;&gt; 309.317  |  0.9666
</span><br>
<span class="quotelev2">&gt;&gt; MVAPICH            |  480   |    8.9704  |   2.316 % |       3  |
</span><br>
<span class="quotelev2">&gt;&gt; 464.366  |  0.9674
</span><br>
<span class="quotelev2">&gt;&gt; MVAPICH            |  640   |    9.0792  |   1.138 % |       3  |
</span><br>
<span class="quotelev2">&gt;&gt; 611.739  |  0.9558
</span><br>
<span class="quotelev2">&gt;&gt; MVAPICH            |  720   |    9.1328  |   1.052 % |       3  |
</span><br>
<span class="quotelev2">&gt;&gt; 684.162  |  0.9502
</span><br>
<span class="quotelev2">&gt;&gt; MVAPICH            |  800   |    9.1945  |   0.773 % |       3  |
</span><br>
<span class="quotelev2">&gt;&gt; 755.079  |  0.9438
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI            |   16   |    8.6743  |   2.335 % |       2  |
</span><br>
<span class="quotelev2">&gt;&gt; 16.000  |  1.0000
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI            |   48   |    8.7826  |   1.605 % |       2  |
</span><br>
<span class="quotelev2">&gt;&gt; 47.408  |  0.9877
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI            |   80   |    8.8861  |   0.120 % |       2  |
</span><br>
<span class="quotelev2">&gt;&gt; 78.093  |  0.9762
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI            |  160   |    8.9774  |   0.785 % |       2  |
</span><br>
<span class="quotelev2">&gt;&gt; 154.598  |  0.9662
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI            |  320   |   12.0585  |  16.950 % |       2  |
</span><br>
<span class="quotelev2">&gt;&gt; 230.191  |  0.7193
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI            |  480   |   14.8330  |   1.300 % |       2  |
</span><br>
<span class="quotelev2">&gt;&gt; 280.701  |  0.5848
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI            |  640   |   17.1723  |   2.577 % |       3  |
</span><br>
<span class="quotelev2">&gt;&gt; 323.283  |  0.5051
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI            |  720   |   18.2153  |   2.798 % |       3  |
</span><br>
<span class="quotelev2">&gt;&gt; 342.868  |  0.4762
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI            |  800   |   19.3603  |   2.254 % |       3  |
</span><br>
<span class="quotelev2">&gt;&gt; 358.434  |  0.4480
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
<li><strong>Next message:</strong> <a href="22080.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>Previous message:</strong> <a href="22078.php">Ralph Castain: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>In reply to:</strong> <a href="22076.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22080.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>Reply:</strong> <a href="22080.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
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
