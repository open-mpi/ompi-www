<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 18:25:10 2006" -->
<!-- isoreceived="20061026222510" -->
<!-- sent="Thu, 26 Oct 2006 18:24:49 -0400" -->
<!-- isosent="20061026222449" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance &amp;amp; Behavior" -->
<!-- id="ED1BA47D-6104-4AC8-A328-2D13D5EF0FF8_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f869b68c0610261515j46f66240j6e2b645ec687b8f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-10-26 18:24:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2066.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>Previous message:</strong> <a href="2064.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<li><strong>In reply to:</strong> <a href="2063.php">Durga Choudhury: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2067.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Moreover ... you have to have the admin right in order to modify  
<br>
these parameters. If it's the case, there is a trick for MX too. One  
<br>
can recompile it, with a different timeout (recompilation is required  
<br>
as far as I remember). Grep for timeout in the MX sources and you  
<br>
will find out how to do it. If you choose this path, be not cautious  
<br>
but CAUTIOUS :)
<br>
<p>In the case you don't want to alter these default arguments for TCP  
<br>
and MX, or if you don't have admin rights, there is one and only one  
<br>
solution possible ... the DR PML as explained in my previous email.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 26, 2006, at 6:15 PM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; As an alternate suggestion (although George's is better, since this  
</span><br>
<span class="quotelev1">&gt; will affect your entire network connectivity), you could override  
</span><br>
<span class="quotelev1">&gt; the default TCP timeout values with the &quot;sysctl -w&quot; command.
</span><br>
<span class="quotelev1">&gt; The following three OIDs affect TCP timeout behavior under Linux:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; net.ipv4.tcp_keepalive_intvl = 75 &lt;----- How often (in seconds) to  
</span><br>
<span class="quotelev1">&gt; send keepalive probes
</span><br>
<span class="quotelev1">&gt; net.ipv4.tcp_keepalive_probes = 9 &lt;----- How many probes to send  
</span><br>
<span class="quotelev1">&gt; before declaring the connection dead.
</span><br>
<span class="quotelev1">&gt; net.ipv4.tcp_keepalive_time = 7200 &lt;----- How long the connection  
</span><br>
<span class="quotelev1">&gt; may be idle before the first keepalive is sent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, use them with caution and not on a live internet server.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/26/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote: The Open  
</span><br>
<span class="quotelev1">&gt; MPI behavior is the same independently of the network used
</span><br>
<span class="quotelev1">&gt; for the job. At least the behavior dictated by our internal message
</span><br>
<span class="quotelev1">&gt; passing layer. But, for this to happens we should get a warning from
</span><br>
<span class="quotelev1">&gt; the network that something is wrong (such a timeout). In the case of
</span><br>
<span class="quotelev1">&gt; TCP (and Myrinet) the timeout is so high that Open MPI was not
</span><br>
<span class="quotelev1">&gt; informed that something went wrong (we printout some warnings when
</span><br>
<span class="quotelev1">&gt; this happens). It was happily waiting for a message to complete ...
</span><br>
<span class="quotelev1">&gt; Once the network cable was reconnected, the network device itself
</span><br>
<span class="quotelev1">&gt; recover and resume the communication, leading to a correct send
</span><br>
<span class="quotelev1">&gt; operation (and this without involving Open MPI at all). There is
</span><br>
<span class="quotelev1">&gt; nothing (that has a reasonable cost) we can do about this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For IB, look like the network timeout is smaller. Open MPI knew that
</span><br>
<span class="quotelev1">&gt; something was wrong (the output prove it), and tried to continue
</span><br>
<span class="quotelev1">&gt; using the other available devices. If none are available, then Open
</span><br>
<span class="quotelev1">&gt; MPI is supposed to abort the job. For your particular run did you had
</span><br>
<span class="quotelev1">&gt; Ethernet between the nodes ? If yes, I'm quite sure the MPI run
</span><br>
<span class="quotelev1">&gt; wasn't stopped ... it continued using the TCP device (if not disabled
</span><br>
<span class="quotelev1">&gt; by hand at mpirun time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's not what is supposed to happens right now. If there are other
</span><br>
<span class="quotelev1">&gt; devices (such as TCP) the MPI job will print out some warnings and
</span><br>
<span class="quotelev1">&gt; will continue over the remaining networks (some will continue to use
</span><br>
<span class="quotelev1">&gt; the other networks, only the peer where the network went down get
</span><br>
<span class="quotelev1">&gt; affected). If the network timeout is too high, Open MPI will never
</span><br>
<span class="quotelev1">&gt; notice that something went wrong. At least not the default message
</span><br>
<span class="quotelev1">&gt; layer (PML).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to have the job abort when your main network goes down,
</span><br>
<span class="quotelev1">&gt; disable the usage of the others available network. More specifically
</span><br>
<span class="quotelev1">&gt; disable the TCP. A simple way to do it, it's to add the following
</span><br>
<span class="quotelev1">&gt; argument to your mpirun command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca btl ^tcp (or --mca btl opnib,sm,self).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: There are several internal message passing modules available for
</span><br>
<span class="quotelev1">&gt; Open MPI. The default one, look more for performance than
</span><br>
<span class="quotelev1">&gt; reliability. If reliability it's what you need you should use the DR
</span><br>
<span class="quotelev1">&gt; PML. For this, you can specify --mca pml dr at mpirun time. This (DR)
</span><br>
<span class="quotelev1">&gt; PML has data reliability and timeout (Open MPI internal timeout that
</span><br>
<span class="quotelev1">&gt; are configurable), allowing to recover faster from a network failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 26, 2006, at 3:52 PM, Troy Telford wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've recently had the chance to see how Open MPI (as well as other
</span><br>
<span class="quotelev2">&gt; &gt; MPIs)
</span><br>
<span class="quotelev2">&gt; &gt; behave in the case of network failure.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've looked at what happens when a node has its network connection
</span><br>
<span class="quotelev2">&gt; &gt; disconnected in the middle of a job, with Ethernet, Myrinet (GM),  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt; InfiniBand (OpenIB).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With Ethernet and Myrinet, the job more or less pauses until the
</span><br>
<span class="quotelev2">&gt; &gt; cable is
</span><br>
<span class="quotelev2">&gt; &gt; re-connected.  (I imagine timeouts still apply, but I wasn't patient
</span><br>
<span class="quotelev2">&gt; &gt; enough to wait for them)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With InfiniBand, the job pauses and Open MPI throws a few error
</span><br>
<span class="quotelev2">&gt; &gt; messages.
</span><br>
<span class="quotelev2">&gt; &gt; After the cable is plugged back in (and the SM catches up), the job
</span><br>
<span class="quotelev2">&gt; &gt; remains where it was when it was paused.  I'd guess that part of
</span><br>
<span class="quotelev2">&gt; &gt; this is
</span><br>
<span class="quotelev2">&gt; &gt; that the timeout is much shorter with IB than with Myri or
</span><br>
<span class="quotelev2">&gt; &gt; Ethernet, and
</span><br>
<span class="quotelev2">&gt; &gt; that when I unplug the IB cable, it times out fairly quickly (and  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI throws its error messages).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At any rate, the thought occurs (and it may just be my ignorance of
</span><br>
<span class="quotelev2">&gt; &gt; MPI):
</span><br>
<span class="quotelev2">&gt; &gt; After a network connection times out (as was apparently the case
</span><br>
<span class="quotelev2">&gt; &gt; with IB),
</span><br>
<span class="quotelev2">&gt; &gt; is the job salvageable?  If the jobs are not salvageable, why
</span><br>
<span class="quotelev2">&gt; &gt; didn't Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI abort the job (and clean up the running processes on the nodes)?
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Troy Telford
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Devil wanted omnipresence;
</span><br>
<span class="quotelev1">&gt; He therefore created communists.
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
<li><strong>Next message:</strong> <a href="2066.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>Previous message:</strong> <a href="2064.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<li><strong>In reply to:</strong> <a href="2063.php">Durga Choudhury: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2067.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
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
