<?
$subject_val = "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 11:19:29 2014" -->
<!-- isoreceived="20140423151929" -->
<!-- sent="Wed, 23 Apr 2014 15:19:28 +0000" -->
<!-- isosent="20140423151928" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC" -->
<!-- id="C887C5EA-4066-4A48-BE10-34885D73B196_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="4F505D9A84D1D74E9397FB427DDF95BC3FE7C45B_at_ALPMBAPA12.e2k.ad.ge.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 11:19:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24248.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>Previous message:</strong> <a href="24246.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>In reply to:</strong> <a href="24246.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24248.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>Reply:</strong> <a href="24248.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few suggestions:
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
<span class="quotelev1">&gt; where before, I always used &#147;--mca btl openib,tcp,self&#148;.  This is for performance analysis.  On the SendRecv benchmark at 32 processes, IMB hangs.  I then tried:
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
<span class="quotelev1">&gt; No errors have been recorded, not even in any system log files but &#145;top&#146; shows the MPI tasks running.  How can I go about troubleshooting this hang, as well as figuring out what (If any) MCA XRC-related parameters in btl_openib_receive_queues I have to specify to get IMB running properly?   I did verify the IB cards are ConnectX.
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24248.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>Previous message:</strong> <a href="24246.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>In reply to:</strong> <a href="24246.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24248.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
<li><strong>Reply:</strong> <a href="24248.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] IMB Sendrecv hangs with OpenMPI 1.6.5 and XRC"</a>
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
