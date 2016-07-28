<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 17:12:00 2006" -->
<!-- isoreceived="20061026211200" -->
<!-- sent="Thu, 26 Oct 2006 17:11:46 -0400" -->
<!-- isosent="20061026211146" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance &amp;amp; Behavior" -->
<!-- id="C2A4B790-FAC3-4C62-B0ED-DC12B90F418F_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.th1n43kvzidtg1_at_rygel.lnxi.com" -->
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
<strong>Date:</strong> 2006-10-26 17:11:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2059.php">Ralph H Castain: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="2057.php">Daniel Vollmer: "[OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="2056.php">Troy Telford: "[OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2063.php">Durga Choudhury: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2063.php">Durga Choudhury: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2067.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI behavior is the same independently of the network used  
<br>
for the job. At least the behavior dictated by our internal message  
<br>
passing layer. But, for this to happens we should get a warning from  
<br>
the network that something is wrong (such a timeout). In the case of  
<br>
TCP (and Myrinet) the timeout is so high that Open MPI was not  
<br>
informed that something went wrong (we printout some warnings when  
<br>
this happens). It was happily waiting for a message to complete ...  
<br>
Once the network cable was reconnected, the network device itself  
<br>
recover and resume the communication, leading to a correct send  
<br>
operation (and this without involving Open MPI at all). There is  
<br>
nothing (that has a reasonable cost) we can do about this.
<br>
<p>For IB, look like the network timeout is smaller. Open MPI knew that  
<br>
something was wrong (the output prove it), and tried to continue  
<br>
using the other available devices. If none are available, then Open  
<br>
MPI is supposed to abort the job. For your particular run did you had  
<br>
Ethernet between the nodes ? If yes, I'm quite sure the MPI run  
<br>
wasn't stopped ... it continued using the TCP device (if not disabled  
<br>
by hand at mpirun time).
<br>
<p>That's not what is supposed to happens right now. If there are other  
<br>
devices (such as TCP) the MPI job will print out some warnings and  
<br>
will continue over the remaining networks (some will continue to use  
<br>
the other networks, only the peer where the network went down get  
<br>
affected). If the network timeout is too high, Open MPI will never  
<br>
notice that something went wrong. At least not the default message  
<br>
layer (PML).
<br>
<p>If you want to have the job abort when your main network goes down,  
<br>
disable the usage of the others available network. More specifically  
<br>
disable the TCP. A simple way to do it, it's to add the following  
<br>
argument to your mpirun command:
<br>
<p>--mca btl ^tcp (or --mca btl opnib,sm,self).
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: There are several internal message passing modules available for  
<br>
Open MPI. The default one, look more for performance than  
<br>
reliability. If reliability it's what you need you should use the DR  
<br>
PML. For this, you can specify --mca pml dr at mpirun time. This (DR)  
<br>
PML has data reliability and timeout (Open MPI internal timeout that  
<br>
are configurable), allowing to recover faster from a network failure.
<br>
<p><p>On Oct 26, 2006, at 3:52 PM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; I've recently had the chance to see how Open MPI (as well as other  
</span><br>
<span class="quotelev1">&gt; MPIs)
</span><br>
<span class="quotelev1">&gt; behave in the case of network failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've looked at what happens when a node has its network connection
</span><br>
<span class="quotelev1">&gt; disconnected in the middle of a job, with Ethernet, Myrinet (GM), and
</span><br>
<span class="quotelev1">&gt; InfiniBand (OpenIB).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With Ethernet and Myrinet, the job more or less pauses until the  
</span><br>
<span class="quotelev1">&gt; cable is
</span><br>
<span class="quotelev1">&gt; re-connected.  (I imagine timeouts still apply, but I wasn't patient
</span><br>
<span class="quotelev1">&gt; enough to wait for them)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With InfiniBand, the job pauses and Open MPI throws a few error  
</span><br>
<span class="quotelev1">&gt; messages.
</span><br>
<span class="quotelev1">&gt; After the cable is plugged back in (and the SM catches up), the job
</span><br>
<span class="quotelev1">&gt; remains where it was when it was paused.  I'd guess that part of  
</span><br>
<span class="quotelev1">&gt; this is
</span><br>
<span class="quotelev1">&gt; that the timeout is much shorter with IB than with Myri or  
</span><br>
<span class="quotelev1">&gt; Ethernet, and
</span><br>
<span class="quotelev1">&gt; that when I unplug the IB cable, it times out fairly quickly (and then
</span><br>
<span class="quotelev1">&gt; Open MPI throws its error messages).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At any rate, the thought occurs (and it may just be my ignorance of  
</span><br>
<span class="quotelev1">&gt; MPI):
</span><br>
<span class="quotelev1">&gt; After a network connection times out (as was apparently the case  
</span><br>
<span class="quotelev1">&gt; with IB),
</span><br>
<span class="quotelev1">&gt; is the job salvageable?  If the jobs are not salvageable, why  
</span><br>
<span class="quotelev1">&gt; didn't Open
</span><br>
<span class="quotelev1">&gt; MPI abort the job (and clean up the running processes on the nodes)?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Troy Telford
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
<li><strong>Next message:</strong> <a href="2059.php">Ralph H Castain: "Re: [OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="2057.php">Daniel Vollmer: "[OMPI users] mpirun crashes when compiled in 64-bit mode on Apple Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="2056.php">Troy Telford: "[OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2063.php">Durga Choudhury: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2063.php">Durga Choudhury: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2067.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
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
