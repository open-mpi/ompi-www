<?
$subject_val = "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 10:16:28 2011" -->
<!-- isoreceived="20110914141628" -->
<!-- sent="Wed, 14 Sep 2011 10:16:17 -0400" -->
<!-- isosent="20110914141617" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?" -->
<!-- id="62D81746-0AAE-4140-8726-8B156BC1E98B_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="da8fe76431336c216185f0e8c0883a49.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 10:16:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17285.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17283.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17275.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You would recommend you to verify, that you don't have any bad cables or ports in your IB network. You may to use one of OFA network check tools, for example ibdiagnet.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Sep 13, 2011, at 6:33 PM, &lt;Kevin.Buckley_at_[hidden]&gt; &lt;Kevin.Buckley_at_[hidden]&gt; wrote:
&gt;&gt; So the error output is not showing what you two think should be
&gt;&gt; the default value, 20, but then nor is it showing what I think I
&gt;&gt; have set it to globally, again, 20.
&gt;&gt; 
&gt;&gt; But anyroad, what I wanted from this is confirmation that the output
&gt;&gt; is telling me the value that the job was running with, 10.
&gt;&gt; 
&gt;&gt; Now to find out why it appears as 10, because,
&gt;&gt; 
&gt;&gt; a) that's not seemingly the default
&gt;&gt; b) it's not being set to 10 globally by me as the admin
&gt;&gt; c) it wasn't being set to anything by the user's submission script
&gt;&gt; 
&gt;&gt; I'll have a dig around and get back to the thread,
&gt; 
&gt; So, getting back,
&gt; 
&gt; there have been two runs of jobs that invoked the mpirun using these
&gt; OpenMPI parameter setting flags (basically, these mimic what I have
&gt; in the global config file)
&gt; 
&gt; -mca btl_openib_ib_timeout 20 -mca btl_openib_ib_min_rnr_timer 25
&gt; 
&gt; when both of the job failed, the error output was
&gt; 
&gt; -----8&lt;----------8&lt;----------8&lt;----------8&lt;----------8&lt;-----
&gt; 
&gt; [[31705,1],77][btl_openib_component.c:2951:handle_wc] from
&gt; scifachpc-c06n01 to: scifachpc-c06n03 error polling LP CQ with status
&gt; RETRY EXCEEDED ERROR status number 12 for wr_id 294230912 opcode 1  vendor
&gt; error 129 qp_idx 1
&gt; --------------------------------------------------------------------------
&gt; The InfiniBand retry count between two MPI processes has been
&gt; exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
&gt; (section 12.7.38):
&gt; 
&gt;    The total number of times that the sender wishes the receiver to
&gt;    retry timeout, packet sequence, etc. errors before posting a
&gt;    completion error.
&gt; 
&gt; This error typically means that there is something awry within the
&gt; InfiniBand fabric itself.  You should note the hosts on which this
&gt; error has occurred; it has been observed that rebooting or removing a
&gt; particular host from the job can sometimes resolve this issue.
&gt; 
&gt; Two MCA parameters can be used to control Open MPI's behavior with
&gt; respect to the retry count:
&gt; 
&gt; * btl_openib_ib_retry_count - The number of times the sender will
&gt;  attempt to retry (defaulted to 7, the maximum value).
&gt; * btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
&gt;  to 10).  The actual timeout value used is calculated as:
&gt; 
&gt;     4.096 microseconds * (2^btl_openib_ib_timeout)
&gt; 
&gt;  See the InfiniBand spec 1.2 (section 12.7.34) for more details.
&gt; 
&gt; Below is some information about the host that raised the error and the
&gt; peer to which it was connected:
&gt; 
&gt;  Local host:   somename
&gt;  Local device: mlx4_0
&gt;  Peer host:    someothername
&gt; 
&gt; You may need to consult with your system administrator to get this
&gt; problem fixed.
&gt; --------------------------------------------------------------------------
&gt; --------------------------------------------------------------------------
&gt; mpirun has exited due to process rank 77 with PID 14705 on
&gt; node somename exiting without calling &quot;finalize&quot;. This may
&gt; have caused other processes in the application to be
&gt; terminated by signals sent by mpirun (as reported here).
&gt; --------------------------------------------------------------------------
&gt; 
&gt; 
&gt; -----8&lt;----------8&lt;----------8&lt;----------8&lt;----------8&lt;-----
&gt; 
&gt; 
&gt; Note that the error output it still showing that mysterious &quot;10&quot;
&gt; in there for btl_openib_ib_timeout value.
&gt; 
&gt; When I run ompi_info from a login shell on the node I see
&gt; 
&gt; -----8&lt;----------8&lt;----------8&lt;----------8&lt;----------8&lt;-----
&gt; 
&gt; ompi_info --param btl openib | grep ib_timeout
&gt;                 MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current
&gt; value: &quot;20&quot;, data source: file
&gt; [/usr/lib64/openmpi/1.4-gcc/etc/openmpi-mca-params.conf])
&gt;                          InfiniBand transmit timeout, plugged into
&gt; formula: 4.096 microseconds *
&gt; (2^btl_openib_ib_timeout)(must be &gt;= 0 and &lt;=
&gt; 31)
&gt; 
&gt; -----8&lt;----------8&lt;----------8&lt;----------8&lt;----------8&lt;-----
&gt; 
&gt; For info,
&gt; 
&gt; the underlying IB kit is Mellanox Connect-X HCA running on a stock
&gt; RHEL5.6 OS with the following OpenMPI
&gt; 
&gt; openmpi-1 . 4-4 . el5
&gt; 
&gt; indeed, everything is pretty much out of the box here.
&gt; 
&gt; I have noticed that the same node is apearing in the error output
&gt; each time, so I'll try taking that one out of the test PE that the
&gt; jobs are executing in and seeing if I can tie it to hardware.
&gt; 
&gt; 
&gt; -- 
&gt; Kevin M. Buckley                                  Room:  CO327
&gt; School of Engineering and                         Phone: +64 4 463 5971
&gt; Computer Science
&gt; Victoria University of Wellington
&gt; New Zealand
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/users
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17285.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17283.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17275.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
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
