<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 17 05:45:10 2006" -->
<!-- isoreceived="20060317104510" -->
<!-- sent="Fri, 17 Mar 2006 11:38:43 +0100" -->
<!-- isosent="20060317103843" -->
<!-- name="Jean Latour" -->
<!-- email="latour_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance of ping-pong using OpenMPI over	Infiniband" -->
<!-- id="441A91B3.1090400_at_fujitsu.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="Pine.OSX.4.61.0603161242510.14245_at_applebasket.cs.utk.edu" -->
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
<strong>From:</strong> Jean Latour (<em>latour_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-17 05:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0882.php">Jayabrata Chakrabarty: "Re: [OMPI users] Two Gigabit NiCs"</a>
<li><strong>Previous message:</strong> <a href="0880.php">Charles Wright: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect:	connection	failed"</a>
<li><strong>In reply to:</strong> <a href="0874.php">George Bosilca: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following your advices and those in the FAQ pages,
<br>
I have added the file
<br>
$(HOME)/.openmpi/mca-params.conf
<br>
with :
<br>
<p>btl_mvapi_flags=6
<br>
mpi_leave_pinned=1
<br>
pml_ob1_leave_pinned_pipeline=1
<br>
mpool_base_use_mem_hooks=1
<br>
<p>The parameter    btl_mvapi_eager_limit  gives the best results, when set 
<br>
to 8 K or 16 K.
<br>
The pingpong test result  is now :
<br>
<p>LOOPS: 1000 BYTES: 4096 SECONDS: 0.085643  MBytes/sec: 95.652825
<br>
LOOPS: 1000 BYTES: 8192 SECONDS: 0.050893  MBytes/sec: 321.931400
<br>
LOOPS: 1000 BYTES: 16384 SECONDS: 0.106791  MBytes/sec: 306.842281
<br>
LOOPS: 1000 BYTES: 32768 SECONDS: 0.154873  MBytes/sec: 423.159259
<br>
LOOPS: 1000 BYTES: 65536 SECONDS: 0.250849  MBytes/sec: 522.513526
<br>
LOOPS: 1000 BYTES: 131072 SECONDS: 0.443162  MBytes/sec: 591.530910
<br>
LOOPS: 1000 BYTES: 262144 SECONDS: 0.827640  MBytes/sec: 633.473448
<br>
LOOPS: 1000 BYTES: 524288 SECONDS: 1.596701  MBytes/sec: 656.714101
<br>
LOOPS: 1000 BYTES: 1048576 SECONDS: 3.134974  MBytes/sec: 668.953554
<br>
LOOPS: 1000 BYTES: 2097152 SECONDS: 6.210786  MBytes/sec: 675.325785
<br>
LOOPS: 1000 BYTES: 4194304 SECONDS: 12.384103  MBytes/sec: 677.369053
<br>
LOOPS: 1000 BYTES: 8388608 SECONDS: 27.377714  MBytes/sec: 612.805580
<br>
<p>which is exactly what we can get also with mvapich on the same network.
<br>
<p>Since we do NOT  have a PCI-X hardware, I believe this is the maximum we 
<br>
can get from the
<br>
hardware.
<br>
<p>Thanks a lot for your explanations for this tunning of OpenMPI
<br>
Best Regards,
<br>
Jean
<br>
<p>George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt;On Thu, 16 Mar 2006, Jean Latour wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;My questions are :
</span><br>
<span class="quotelev2">&gt;&gt;a)  Is OpenMPI doing in this case TCP/IP over IB ? (I guess so)
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If the path to the mvapi library is correct then Open MPI will use mvapi 
</span><br>
<span class="quotelev1">&gt;not TCP over IB. There is a simple way to check. &quot;ompi_info --param btl 
</span><br>
<span class="quotelev1">&gt;mvapi&quot; will print all the parameters attached to the mvapi driver. If 
</span><br>
<span class="quotelev1">&gt;there is no mvapi in the output, then mvapi was not correctly detected. 
</span><br>
<span class="quotelev1">&gt;But I don't think it's the case, because if I remember well we have a 
</span><br>
<span class="quotelev1">&gt;protection at configure time. If you specify one of the drivers and we're 
</span><br>
<span class="quotelev1">&gt;not able to correctly use the libraries, we will stop the configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;b) Is it possible to improve significantly these values by changing the 
</span><br>
<span class="quotelev2">&gt;&gt;defaults ?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;By default we are using a very conservative approach. We never leave the 
</span><br>
<span class="quotelev1">&gt;memory pinned down, and that decrease the performance for a ping-pong. 
</span><br>
<span class="quotelev1">&gt;There are pro and cons for that, too long to be explained here, but in 
</span><br>
<span class="quotelev1">&gt;general we're seeing better performance for real-life applications with 
</span><br>
<span class="quotelev1">&gt;our default approach, and that's our main goal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Now, if you want to get better performance for the ping-pong test please 
</span><br>
<span class="quotelev1">&gt;read the FAQ at <a href="http://www.open-mpi.org/faq/?category=infiniband">http://www.open-mpi.org/faq/?category=infiniband</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;These are the 3 flags that affect the mvapi performance for the ping-pong 
</span><br>
<span class="quotelev1">&gt;case (add them in $(HOME)/.openmpi/mca-params.conf):
</span><br>
<span class="quotelev1">&gt;btl_mvapi_flags=6
</span><br>
<span class="quotelev1">&gt;mpi_leave_pinned=1
</span><br>
<span class="quotelev1">&gt;pml_ob1_leave_pinned_pipeline=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I have used several mca btl parameters but without improving the maximum 
</span><br>
<span class="quotelev2">&gt;&gt;bandwith.
</span><br>
<span class="quotelev2">&gt;&gt; For example :  --mca btl mvapi   --mca btl_mvapi_max_send_size 8388608
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It is difficult to improve the maximum bandwidth without the leave_pinned 
</span><br>
<span class="quotelev1">&gt;activated. But you can improve the bandwidth for medium size messages. 
</span><br>
<span class="quotelev1">&gt;Play with btl_mvapi_eager_limit to set the limit between short and 
</span><br>
<span class="quotelev1">&gt;rendez-vous protocol. &quot;ompi_info --param btl mvapi&quot; will give you a full 
</span><br>
<span class="quotelev1">&gt;list of parameters as well as their description.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;c) Is it possible that other IB hardware implementations  have better
</span><br>
<span class="quotelev2">&gt;&gt;  performances with OpenMPI ?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The maximum bandwidth depend on several factors. One of the most 
</span><br>
<span class="quotelev1">&gt;importants is the maximum bandwidth on your node bus. To reach 800 and 
</span><br>
<span class="quotelev1">&gt;more MB/s you definitively need a PCI-X 16 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;d) Is it possible to use specific IB drivers  for optimal performance  ? 
</span><br>
<span class="quotelev2">&gt;&gt;(should reach almost 800 MB/sec)
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Once the 3 options are set, you should see an improvement on the 
</span><br>
<span class="quotelev1">&gt;bandwidth.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Let me know if it does not solve your problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt;hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                   Martin Luther King
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0882.php">Jayabrata Chakrabarty: "Re: [OMPI users] Two Gigabit NiCs"</a>
<li><strong>Previous message:</strong> <a href="0880.php">Charles Wright: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect:	connection	failed"</a>
<li><strong>In reply to:</strong> <a href="0874.php">George Bosilca: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
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
