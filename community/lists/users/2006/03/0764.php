<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 18:50:42 2006" -->
<!-- isoreceived="20060302235042" -->
<!-- sent="Thu, 2 Mar 2006 18:50:35 -0500" -->
<!-- isosent="20060302235035" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running open mpi across nodes." -->
<!-- id="E165415D-73F4-436E-A0AF-C46E95E0ED0A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C02CAA1A.8F45%xyang_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-02 18:50:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0765.php">Andy Selle: "[OMPI users] C++ bool type reduction failing"</a>
<li><strong>Previous message:</strong> <a href="0763.php">Xiaoning (David) Yang: "[OMPI users] Problem running open mpi across nodes."</a>
<li><strong>In reply to:</strong> <a href="0763.php">Xiaoning (David) Yang: "[OMPI users] Problem running open mpi across nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0766.php">Xiaoning (David) Yang: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Reply:</strong> <a href="0766.php">Xiaoning (David) Yang: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2006, at 3:56 PM, Xiaoning (David) Yang wrote:
<br>
<p><span class="quotelev1">&gt; I installed Open MPI on two Mac G5s, one with 2 cpus and the other  
</span><br>
<span class="quotelev1">&gt; with 4
</span><br>
<span class="quotelev1">&gt; cpus. I can run jobs on either of the machines fine. But when I ran  
</span><br>
<span class="quotelev1">&gt; a job on
</span><br>
<span class="quotelev1">&gt; machine one across the two nodes, the all processes I requested  
</span><br>
<span class="quotelev1">&gt; would start,
</span><br>
<span class="quotelev1">&gt; but they then seemed to hang and I got the error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with
</span><br>
<span class="quotelev1">&gt; errno=60[0,1,0][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 559:mca_btl_tcp_endpoint_complete_connect
</span><br>
<span class="quotelev1">&gt; ] connect() failed with errno=60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I ran the job on machine two across the nodes, only processes  
</span><br>
<span class="quotelev1">&gt; on this
</span><br>
<span class="quotelev1">&gt; machine would start and then hung. No processes would start on  
</span><br>
<span class="quotelev1">&gt; machine one
</span><br>
<span class="quotelev1">&gt; and I didn't get any messages. In both cases, I have to Ctrl+C to  
</span><br>
<span class="quotelev1">&gt; kill the
</span><br>
<span class="quotelev1">&gt; jobs. Any idea what was wrong? Thanks a lot!
</span><br>
<p>errno 60 is ETIMEDOUT, which means that the connect() timed out  
<br>
before the remote side answered.  The other way was probably a  
<br>
similar problem - there's something strange going on with the routing  
<br>
on the two nodes that's causing OMPI to get confused.  Do your G5  
<br>
machines have ethernet adapters other than the primary GigE cards  
<br>
(wireless, a second GigE card, a Firewire TCP stack) by any chance?   
<br>
There's an issue with situations where there are multiple ethernet  
<br>
cards that causes the TCP btl to behave badly like this.  We think we  
<br>
have it fixed in the latest 1.0.2 pre-release tarball of Open MPI, so  
<br>
it might help to upgrade to that version:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.0/">http://www.open-mpi.org/software/ompi/v1.0/</a>
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0765.php">Andy Selle: "[OMPI users] C++ bool type reduction failing"</a>
<li><strong>Previous message:</strong> <a href="0763.php">Xiaoning (David) Yang: "[OMPI users] Problem running open mpi across nodes."</a>
<li><strong>In reply to:</strong> <a href="0763.php">Xiaoning (David) Yang: "[OMPI users] Problem running open mpi across nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0766.php">Xiaoning (David) Yang: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Reply:</strong> <a href="0766.php">Xiaoning (David) Yang: "Re: [OMPI users] Problem running open mpi across nodes."</a>
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
