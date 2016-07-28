<?
$subject_val = "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 14:14:36 2014" -->
<!-- isoreceived="20140423181436" -->
<!-- sent="Wed, 23 Apr 2014 18:14:33 +0000" -->
<!-- isosent="20140423181433" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC3FE7C54D_at_ALPMBAPA12.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C887C5EA-4066-4A48-BE10-34885D73B196_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 14:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24249.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Previous message:</strong> <a href="24247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>In reply to:</strong> <a href="24247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank-you Jeff.  I re-ran IMB (a 64-core run, distributed across a number of nodes) under different mca parameters.  Here are the results using OpenMPI 1.6.5:
<br>
<p>1. --mca btl openib,sm,self --mca btl_openib_receive_queues X,9216,256,128,32:X,65536,256,128,32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMB did not hang.  Consumed 9263 sec (aggregate) CPU time and 8986 MB memory
<br>
<p>2. --mca btl openib,sm,self --mca btl_openib_receive_queues X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMB hung on Bcast benchmark on a 64-process run, with message size of 64 bytes
<br>
<p>3. --mca btl openib,sm,self
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMB did not hang.  Consumed 9360 sec (aggregate) CPU time and 9360 MB memory
<br>
<p>4. --mca btl openib,tcp,self
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMB did not hang.  Consumed 41911 sec (aggregate) CPU time and 9239 MB memory
<br>
<p>I did not try OpenMPI 1.8.1 since I am restricted to 1.6.5 at this time, but I'm doing a build of 1.8.1 now to test out.  BTW, the release notes refer to 1.8.2 but the site only has 1.8.1 available for download.
<br>
<p>I am a bit concerned, however, with my prior runs hanging.  First, I was unable to discern why IMB was hanging so any advice/guidance would be greatly appreciated.  I tried doing an strace on an MPI process but no helpful info.   
<br>
<p>Second, the motivation behind using XRC was to cut down on memory demands w.r.t. the RC QPs.   I'd like to get this working, unless someone can elaborate on the negative aspects of using XRC instead of RC QPs.  Thanks!
<br>
<p>--john
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Wednesday, April 23, 2014 11:19 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC
<br>
<p>A few suggestions:
<br>
<p>- Try using Open MPI 1.8.1.  It's the newest release, and has many improvements since the 1.6.x series.
<br>
<p>- Try using &quot;--mca btl openib,sm,self&quot; (in both v1.6.x and v1.8.x).  This allows Open MPI to use shared memory to communicate between processes on the same server, which can be a significant performance improvement over TCP or even IB.
<br>
<p><p><p>On Apr 23, 2014, at 11:10 AM, &quot;Sasso, John (GE Power &amp; Water, Non-GE)&quot; &lt;John1.Sasso_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am running IMB (Intel MPI Benchmarks), the MPI-1 benchmarks, which was built with Intel 12.1 compiler suite and OpenMPI 1.6.5 (and running w/ OMPI 1.6.5).  I decided to use the following for the mca parameters:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --mca btl openib,tcp,self --mca btl_openib_receive_queues X,9216,256,128,32:X,65536,256,128,32
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; where before, I always used &quot;--mca btl openib,tcp,self&quot;.  This is for performance analysis.  On the SendRecv benchmark at 32 processes, IMB hangs.  I then tried:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_receive_queues X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; and IMB also hangs on the SendRecv benchmark, though at 64 processes.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; No errors have been recorded, not even in any system log files but 'top' shows the MPI tasks running.  How can I go about troubleshooting this hang, as well as figuring out what (If any) MCA XRC-related parameters in btl_openib_receive_queues I have to specify to get IMB running properly?   I did verify the IB cards are ConnectX.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --john
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24249.php">Ross Boylan: "Re: [OMPI users] mpi.isend still not working (was trying to use personal copy of 1.7.4--solved)"</a>
<li><strong>Previous message:</strong> <a href="24247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>In reply to:</strong> <a href="24247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
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
