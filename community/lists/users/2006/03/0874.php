<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 16 13:06:14 2006" -->
<!-- isoreceived="20060316180614" -->
<!-- sent="Thu, 16 Mar 2006 13:04:46 -0500 (EST)" -->
<!-- isosent="20060316180446" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband" -->
<!-- id="Pine.OSX.4.61.0603161242510.14245_at_applebasket.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4419A1AD.9040805_at_fujitsu.fr" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-16 13:04:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0875.php">Jayabrata Chakrabarty: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>Previous message:</strong> <a href="0873.php">Galen M. Shipman: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>In reply to:</strong> <a href="0872.php">Jean Latour: "[OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0881.php">Jean Latour: "Re: [OMPI users] Performance of ping-pong using OpenMPI over	Infiniband"</a>
<li><strong>Reply:</strong> <a href="0881.php">Jean Latour: "Re: [OMPI users] Performance of ping-pong using OpenMPI over	Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 16 Mar 2006, Jean Latour wrote:
<br>
<p><span class="quotelev1">&gt; My questions are :
</span><br>
<span class="quotelev1">&gt; a)  Is OpenMPI doing in this case TCP/IP over IB ? (I guess so)
</span><br>
<p>If the path to the mvapi library is correct then Open MPI will use mvapi 
<br>
not TCP over IB. There is a simple way to check. &quot;ompi_info --param btl 
<br>
mvapi&quot; will print all the parameters attached to the mvapi driver. If 
<br>
there is no mvapi in the output, then mvapi was not correctly detected. 
<br>
But I don't think it's the case, because if I remember well we have a 
<br>
protection at configure time. If you specify one of the drivers and we're 
<br>
not able to correctly use the libraries, we will stop the configure.
<br>
<p><p><span class="quotelev1">&gt; b) Is it possible to improve significantly these values by changing the 
</span><br>
<span class="quotelev1">&gt; defaults ?
</span><br>
<p>By default we are using a very conservative approach. We never leave the 
<br>
memory pinned down, and that decrease the performance for a ping-pong. 
<br>
There are pro and cons for that, too long to be explained here, but in 
<br>
general we're seeing better performance for real-life applications with 
<br>
our default approach, and that's our main goal.
<br>
<p>Now, if you want to get better performance for the ping-pong test please 
<br>
read the FAQ at <a href="http://www.open-mpi.org/faq/?category=infiniband">http://www.open-mpi.org/faq/?category=infiniband</a>.
<br>
<p>These are the 3 flags that affect the mvapi performance for the ping-pong 
<br>
case (add them in $(HOME)/.openmpi/mca-params.conf):
<br>
btl_mvapi_flags=6
<br>
mpi_leave_pinned=1
<br>
pml_ob1_leave_pinned_pipeline=1
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I have used several mca btl parameters but without improving the maximum 
</span><br>
<span class="quotelev1">&gt; bandwith.
</span><br>
<span class="quotelev1">&gt;  For example :  --mca btl mvapi   --mca btl_mvapi_max_send_size 8388608
</span><br>
<p>It is difficult to improve the maximum bandwidth without the leave_pinned 
<br>
activated. But you can improve the bandwidth for medium size messages. 
<br>
Play with btl_mvapi_eager_limit to set the limit between short and 
<br>
rendez-vous protocol. &quot;ompi_info --param btl mvapi&quot; will give you a full 
<br>
list of parameters as well as their description.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; c) Is it possible that other IB hardware implementations  have better
</span><br>
<span class="quotelev1">&gt;   performances with OpenMPI ?
</span><br>
<p>The maximum bandwidth depend on several factors. One of the most 
<br>
importants is the maximum bandwidth on your node bus. To reach 800 and 
<br>
more MB/s you definitively need a PCI-X 16 ...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; d) Is it possible to use specific IB drivers  for optimal performance  ? 
</span><br>
<span class="quotelev1">&gt; (should reach almost 800 MB/sec)
</span><br>
<p>Once the 3 options are set, you should see an improvement on the 
<br>
bandwidth.
<br>
<p>Let me know if it does not solve your problems.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0875.php">Jayabrata Chakrabarty: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>Previous message:</strong> <a href="0873.php">Galen M. Shipman: "Re: [OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<li><strong>In reply to:</strong> <a href="0872.php">Jean Latour: "[OMPI users] Performance of ping-pong using OpenMPI over Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0881.php">Jean Latour: "Re: [OMPI users] Performance of ping-pong using OpenMPI over	Infiniband"</a>
<li><strong>Reply:</strong> <a href="0881.php">Jean Latour: "Re: [OMPI users] Performance of ping-pong using OpenMPI over	Infiniband"</a>
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
