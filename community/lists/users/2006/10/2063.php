<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 18:16:03 2006" -->
<!-- isoreceived="20061026221603" -->
<!-- sent="Thu, 26 Oct 2006 18:15:55 -0400" -->
<!-- isosent="20061026221555" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerance &amp;amp; Behavior" -->
<!-- id="f869b68c0610261515j46f66240j6e2b645ec687b8f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C2A4B790-FAC3-4C62-B0ED-DC12B90F418F_at_cs.utk.edu" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-26 18:15:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2064.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<li><strong>Previous message:</strong> <a href="2062.php">Tony Ladd: "[OMPI users] OMPI collectives"</a>
<li><strong>In reply to:</strong> <a href="2058.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2065.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2065.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As an alternate suggestion (although George's is better, since this will
<br>
affect your entire network connectivity), you could override the default TCP
<br>
timeout values with the &quot;sysctl -w&quot; command.
<br>
The following three OIDs affect TCP timeout behavior under Linux:
<br>
<p>net.ipv4.tcp_keepalive_intvl = 75 &lt;----- How often (in seconds) to send
<br>
keepalive probes
<br>
net.ipv4.tcp_keepalive_probes = 9 &lt;----- How many probes to send before
<br>
declaring the connection dead.
<br>
net.ipv4.tcp_keepalive_time = 7200 &lt;----- How long the connection may be
<br>
idle before the first keepalive is sent.
<br>
<p>Again, use them with caution and not on a live internet server.
<br>
<p>Durga
<br>
<p><p>On 10/26/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Open MPI behavior is the same independently of the network used
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
<span class="quotelev2">&gt; &gt; disconnected in the middle of a job, with Ethernet, Myrinet (GM), and
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
<span class="quotelev2">&gt; &gt; that when I unplug the IB cable, it times out fairly quickly (and then
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
<p><p><p><pre>
-- 
Devil wanted omnipresence;
He therefore created communists.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2063/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2064.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<li><strong>Previous message:</strong> <a href="2062.php">Tony Ladd: "[OMPI users] OMPI collectives"</a>
<li><strong>In reply to:</strong> <a href="2058.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2065.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Reply:</strong> <a href="2065.php">George Bosilca: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
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
