<?
$subject_val = "Re: [OMPI users] newbe question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  9 20:56:09 2010" -->
<!-- isoreceived="20100310015609" -->
<!-- sent="Tue, 9 Mar 2010 18:55:59 -0700" -->
<!-- isosent="20100310015559" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] newbe question" -->
<!-- id="177EC72D-87C2-4CA9-A5AD-5F6B77BE0A76_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1268161804.3410.45.camel_at_mobile.selfvps.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] newbe question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-09 20:55:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12290.php">Lasse Kliemann: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>Previous message:</strong> <a href="12288.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>In reply to:</strong> <a href="12286.php">Vasiliy G Tolstov: "[OMPI users] newbe question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12292.php">Terry Frankcombe: "Re: [OMPI users] newbe question"</a>
<li><strong>Reply:</strong> <a href="12292.php">Terry Frankcombe: "Re: [OMPI users] newbe question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Running an orted directly won't work - it is intended solely to be launched when running a job with &quot;mpirun&quot;.
<br>
<p>You application doesn't immediately sounds like it -needs- MPI, though you could always use it anyway. The MPI messaging system is fast, but it isn't clear if your application will necessarily benefit from that speed. It depends upon how much communication is going on vs computation and idle time.
<br>
<p>If you are more familiar with the non-MPI methods, I would personally do it that way unless I found a need for MPI - for example, a place where MPI collectives such as MPI_Allgather would be helpful.
<br>
<p><p>On Mar 9, 2010, at 12:10 PM, Vasiliy G Tolstov wrote:
<br>
<p><span class="quotelev1">&gt; Hello.
</span><br>
<span class="quotelev1">&gt; Some times ago i run study MPI (openmpi). 
</span><br>
<span class="quotelev1">&gt; I need to write application (client/server) runs on 50 servers in
</span><br>
<span class="quotelev1">&gt; parallel. Each application can communicate with others by tcp/ip (send
</span><br>
<span class="quotelev1">&gt; commands, doing some parallel computations).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Master - controls all clients - slaves (send control commands, if needed
</span><br>
<span class="quotelev1">&gt; restart clients). If master machine with server application die, some
</span><br>
<span class="quotelev1">&gt; other server need to recive master role and controls other slaves.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can i do this things with openmpi? Or i need to write standart tcp/ip
</span><br>
<span class="quotelev1">&gt; client/server application?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm try to read some search results in google like this -
</span><br>
<span class="quotelev1">&gt; <a href="http://docs.sun.com/source/819-7480-11/ExecutingPrograms.htmlaopenmpi">http://docs.sun.com/source/819-7480-11/ExecutingPrograms.htmlaopenmpi</a>%
</span><br>
<span class="quotelev1">&gt; 20orted%20persistent%20daemon
</span><br>
<span class="quotelev1">&gt; but orted return error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orted --daemonize
</span><br>
<span class="quotelev1">&gt; [mobile:24107] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You. Sorry for my poor english.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Vasiliy G Tolstov &lt;v.tolstov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Selfip.Ru
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12290.php">Lasse Kliemann: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>Previous message:</strong> <a href="12288.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>In reply to:</strong> <a href="12286.php">Vasiliy G Tolstov: "[OMPI users] newbe question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12292.php">Terry Frankcombe: "Re: [OMPI users] newbe question"</a>
<li><strong>Reply:</strong> <a href="12292.php">Terry Frankcombe: "Re: [OMPI users] newbe question"</a>
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
