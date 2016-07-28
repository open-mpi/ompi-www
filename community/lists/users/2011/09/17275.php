<?
$subject_val = "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 18:33:39 2011" -->
<!-- isoreceived="20110913223339" -->
<!-- sent="Wed, 14 Sep 2011 10:33:33 +1200" -->
<!-- isosent="20110913223333" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?" -->
<!-- id="da8fe76431336c216185f0e8c0883a49.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52b9452f9fdff90941bbeaf1a8f0c030.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenIB%20error%20messages:%20reporting%20the%20default%20or%20telling%20you%20what's%20happening?"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-09-13 18:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17276.php">Reuti: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>Previous message:</strong> <a href="17274.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>In reply to:</strong> <a href="17243.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17281.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17281.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17284.php">Shamis, Pavel: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; So the error output is not showing what you two think should be
</span><br>
<span class="quotelev1">&gt; the default value, 20, but then nor is it showing what I think I
</span><br>
<span class="quotelev1">&gt; have set it to globally, again, 20.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But anyroad, what I wanted from this is confirmation that the output
</span><br>
<span class="quotelev1">&gt; is telling me the value that the job was running with, 10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now to find out why it appears as 10, because,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) that's not seemingly the default
</span><br>
<span class="quotelev1">&gt; b) it's not being set to 10 globally by me as the admin
</span><br>
<span class="quotelev1">&gt; c) it wasn't being set to anything by the user's submission script
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll have a dig around and get back to the thread,
</span><br>
<p>So, getting back,
<br>
<p>there have been two runs of jobs that invoked the mpirun using these
<br>
OpenMPI parameter setting flags (basically, these mimic what I have
<br>
in the global config file)
<br>
<p>&nbsp;-mca btl_openib_ib_timeout 20 -mca btl_openib_ib_min_rnr_timer 25
<br>
<p>when both of the job failed, the error output was
<br>
<p>-----8&lt;----------8&lt;----------8&lt;----------8&lt;----------8&lt;-----
<br>
<p>[[31705,1],77][btl_openib_component.c:2951:handle_wc] from
<br>
scifachpc-c06n01 to: scifachpc-c06n03 error polling LP CQ with status
<br>
RETRY EXCEEDED ERROR status number 12 for wr_id 294230912 opcode 1  vendor
<br>
error 129 qp_idx 1
<br>
--------------------------------------------------------------------------
<br>
The InfiniBand retry count between two MPI processes has been
<br>
exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
<br>
(section 12.7.38):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The total number of times that the sender wishes the receiver to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;retry timeout, packet sequence, etc. errors before posting a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;completion error.
<br>
<p>This error typically means that there is something awry within the
<br>
InfiniBand fabric itself.  You should note the hosts on which this
<br>
error has occurred; it has been observed that rebooting or removing a
<br>
particular host from the job can sometimes resolve this issue.
<br>
<p>Two MCA parameters can be used to control Open MPI's behavior with
<br>
respect to the retry count:
<br>
<p>* btl_openib_ib_retry_count - The number of times the sender will
<br>
&nbsp;&nbsp;attempt to retry (defaulted to 7, the maximum value).
<br>
* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
<br>
&nbsp;&nbsp;to 10).  The actual timeout value used is calculated as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.096 microseconds * (2^btl_openib_ib_timeout)
<br>
<p>&nbsp;&nbsp;See the InfiniBand spec 1.2 (section 12.7.34) for more details.
<br>
<p>Below is some information about the host that raised the error and the
<br>
peer to which it was connected:
<br>
<p>&nbsp;&nbsp;Local host:   somename
<br>
&nbsp;&nbsp;Local device: mlx4_0
<br>
&nbsp;&nbsp;Peer host:    someothername
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 77 with PID 14705 on
<br>
node somename exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p><p>-----8&lt;----------8&lt;----------8&lt;----------8&lt;----------8&lt;-----
<br>
<p><p>Note that the error output it still showing that mysterious &quot;10&quot;
<br>
in there for btl_openib_ib_timeout value.
<br>
<p>When I run ompi_info from a login shell on the node I see
<br>
<p>-----8&lt;----------8&lt;----------8&lt;----------8&lt;----------8&lt;-----
<br>
<p>ompi_info --param btl openib | grep ib_timeout
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current
<br>
value: &quot;20&quot;, data source: file
<br>
[/usr/lib64/openmpi/1.4-gcc/etc/openmpi-mca-params.conf])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;InfiniBand transmit timeout, plugged into
<br>
formula: 4.096 microseconds *
<br>
(2^btl_openib_ib_timeout)(must be &gt;= 0 and &lt;=
<br>
31)
<br>
<p>-----8&lt;----------8&lt;----------8&lt;----------8&lt;----------8&lt;-----
<br>
<p>For info,
<br>
<p>the underlying IB kit is Mellanox Connect-X HCA running on a stock
<br>
RHEL5.6 OS with the following OpenMPI
<br>
<p>openmpi-1.4-4.el5
<br>
<p>indeed, everything is pretty much out of the box here.
<br>
<p>I have noticed that the same node is apearing in the error output
<br>
each time, so I'll try taking that one out of the test PE that the
<br>
jobs are executing in and seeing if I can tie it to hardware.
<br>
<p><p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17276.php">Reuti: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>Previous message:</strong> <a href="17274.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>In reply to:</strong> <a href="17243.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17281.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17281.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17284.php">Shamis, Pavel: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
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
