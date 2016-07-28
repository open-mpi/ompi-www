<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 25 09:51:49 2006" -->
<!-- isoreceived="20060525135149" -->
<!-- sent="Thu, 25 May 2006 09:51:39 -0400" -->
<!-- isosent="20060525135139" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pallas assistance ?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8C4286_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] pallas assistance ?" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-25 09:51:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1293.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1291.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SEGV_ACCERR Failing at addr ..."</a>
<li><strong>Maybe in reply to:</strong> <a href="1281.php">Paul: "[OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1294.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Reply:</strong> <a href="1294.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb just committed some fixes for the PPC64 issue last night
<br>
(<a href="https://svn.open-mpi.org/trac/ompi/changeset/10059">https://svn.open-mpi.org/trac/ompi/changeset/10059</a>).  It should only
<br>
affect the eager RDMA issues, but it would be a worthwhile datapoint if
<br>
you could test with (i.e., specify no MCA parameters on your mpirun
<br>
command line, so it should use RDMA by default).
<br>
&nbsp;
<br>
I'm waiting for my own PPC64 machine to be reconfigured so that I can
<br>
test again; can you try with r10059 or later?
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of Paul
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Wednesday, May 24, 2006 9:35 PM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: Open MPI Users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] pallas assistance ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It makes no difference on my end. Exact same error.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On 5/24/06, Andrew Friedley &lt;afriedle_at_[hidden]&gt; wrote: 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paul wrote:
<br>
<span class="quotelev1">		&gt; Somebody call orkin. ;-P
</span><br>
<span class="quotelev1">		&gt; Well I tried running it with things set as noted in
</span><br>
the bug report. 
<br>
<span class="quotelev1">		&gt; However it doesnt change anything on my end. I am
</span><br>
willing to do any
<br>
<span class="quotelev1">		&gt; verification you guys need (time permitting and all).
</span><br>
Anything special
<br>
<span class="quotelev1">		&gt; needed to get mpi_latency to compile ? I can run that
</span><br>
to verify that 
<br>
<span class="quotelev1">		&gt; things are actually working on my end.
</span><br>
<span class="quotelev1">		&gt;
</span><br>
<span class="quotelev1">		&gt; [root_at_something ompi]#  
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shouldn't the parameter be '--mca
<br>
btl_openib_use_eager_rdma'?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev1">		&gt; [root_at_something ompi]# /opt/ompi/bin/mpirun --mca
</span><br>
btl_openmpi_use_srq 1 
<br>
<span class="quotelev1">		&gt; -np 2 -hostfile machine.list ./IMB-MPI1
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Same here - '--mca btl_openib_use_srq'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Andrew
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1293.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1291.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SEGV_ACCERR Failing at addr ..."</a>
<li><strong>Maybe in reply to:</strong> <a href="1281.php">Paul: "[OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1294.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Reply:</strong> <a href="1294.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
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
