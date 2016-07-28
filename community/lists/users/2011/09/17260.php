<?
$subject_val = "Re: [OMPI users] OpenMPI Nonblocking Send/Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 15:26:56 2011" -->
<!-- isoreceived="20110913192656" -->
<!-- sent="Tue, 13 Sep 2011 15:26:51 -0400" -->
<!-- isosent="20110913192651" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Nonblocking Send/Recv" -->
<!-- id="CAHwLALM0jh6RaAN_P5+jitaBmDw2MtZsTFR-m2VQq8MWkK-udw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAd4iBmHG2rZ3vv9PE55u12HYKOhYK6nkb5SZpVvGY0LfYiNOw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Nonblocking Send/Recv<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 15:26:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17261.php">amosleff_at_[hidden]: "[OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="17259.php">Xin Tong Utoronto: "[OMPI users] OpenMPI Nonblocking Send/Recv"</a>
<li><strong>In reply to:</strong> <a href="17259.php">Xin Tong Utoronto: "[OMPI users] OpenMPI Nonblocking Send/Recv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Xin,
<br>
<p>Since it is not Open MPI specific, you might want to try to work with
<br>
the SciNet guys first. The &quot;SciNet Research Computing Consulting
<br>
Clinic&quot; is specifically formed to help U of T students &amp; researchers
<br>
develop and design compute-intensive programs.
<br>
<p><a href="http://www.scinet.utoronto.ca/">http://www.scinet.utoronto.ca/</a>
<br>
<a href="http://www.scinet.utoronto.ca/support/Research_Computing_Consulting_Clinic.htm">http://www.scinet.utoronto.ca/support/Research_Computing_Consulting_Clinic.htm</a>
<br>
<p>The service is free, so just send them an email... Of course, they
<br>
can't help you with your coursework! :-D
<br>
<p>Rayson
<br>
<p>=================================
<br>
Grid Engine / Open Grid Scheduler
<br>
<a href="http://gridscheduler.sourceforge.net">http://gridscheduler.sourceforge.net</a>
<br>
<p><p>On Tue, Sep 13, 2011 at 12:49 PM, Xin Tong Utoronto &lt;x.tong_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I am new to openmpi. I am not sure whether my logic below will work or not.
</span><br>
<span class="quotelev1">&gt; Can someone please confirm for me on that ? Basically, what this does is
</span><br>
<span class="quotelev1">&gt; trying to check whether there are anything to send, if there are, send it
</span><br>
<span class="quotelev1">&gt; right away and set sentinit to true. Then check whether there are anything
</span><br>
<span class="quotelev1">&gt; to receive, if there are receive it. I am running this on a client-server
</span><br>
<span class="quotelev1">&gt; model (2 nodes sending and receiving data between each other)
</span><br>
<span class="quotelev1">&gt; for (;;) &#160;{
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;if (sendinit &amp;&amp; MPI_Test(&amp;sendreq, &amp;sendcomplete,
</span><br>
<span class="quotelev1">&gt; &amp;sendstatus)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; if (sendcomplete) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;if (pollv[1].revents &amp; POLLIN) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;printf(&quot;Trying to send in rank %d\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;nx=vde_recv(conn,sendbuff,BUFSIZE-2,0);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;vdestream_mpisend(vdestream,sendbuff, nx,
</span><br>
<span class="quotelev1">&gt; GET_PAIR_RANK(rank), &amp;sendreq);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;// no in-flight request.
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;sendinit = false;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; }
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; // no in-flight request. try to start one
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; if (!sendinit &amp;&amp; pollv[1].revents &amp; POLLIN) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;nx=vde_recv(conn,sendbuff,BUFSIZE-2,0);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;printf(&quot;Trying to send in rank %d\n&quot;, rank );
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;vdestream_mpisend(vdestream,sendbuff, nx,
</span><br>
<span class="quotelev1">&gt; GET_PAIR_RANK(rank), &amp;sendreq);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;sendinit = true;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;if (recvinit &amp;&amp; MPI_Test(&amp;recvreq, &amp;recvcomplete,
</span><br>
<span class="quotelev1">&gt; &amp;recvstatus)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; if (recvcomplete) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; printf(&quot;Receive completed\n&quot;);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; // get the actual number of byet received.
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MPI_Get_count(&amp;recvstatus, MPI_CHAR, &amp;recvcount);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; vdestream_recv(vdestream, recvbuff, recvcount);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; // no more in-flight recv.
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; recvinit = false;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; }
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;} else {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; if (!recvinit) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;printf(&quot;Trying to receive in rank %d\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;// no in-flight recv. try to start one.
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;vdestream_mpirecv(vdestream, recvbuff, BUFSIZE-2,
</span><br>
<span class="quotelev1">&gt; GET_PAIR_RANK(rank), &amp;recvreq);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;recvinit = true;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; }
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;}
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kind Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Xin Tong
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17261.php">amosleff_at_[hidden]: "[OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="17259.php">Xin Tong Utoronto: "[OMPI users] OpenMPI Nonblocking Send/Recv"</a>
<li><strong>In reply to:</strong> <a href="17259.php">Xin Tong Utoronto: "[OMPI users] OpenMPI Nonblocking Send/Recv"</a>
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
