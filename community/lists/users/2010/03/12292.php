<?
$subject_val = "Re: [OMPI users] newbe question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  9 22:38:26 2010" -->
<!-- isoreceived="20100310033826" -->
<!-- sent="Wed, 10 Mar 2010 14:38:15 +1100" -->
<!-- isosent="20100310033815" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] newbe question" -->
<!-- id="1268192295.29418.18.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="177EC72D-87C2-4CA9-A5AD-5F6B77BE0A76_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-09 22:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12293.php">piening: "[OMPI users] openmpi-1.4.1 Debian-Live Cd"</a>
<li><strong>Previous message:</strong> <a href="12291.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>In reply to:</strong> <a href="12289.php">Ralph Castain: "Re: [OMPI users] newbe question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like, with the fault tolerance features specifically mentioned
<br>
by Vasiliy, MPI in its current form may not be the simplest choice.
<br>
<p><p>On Tue, 2010-03-09 at 18:55 -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Running an orted directly won't work - it is intended solely to be launched when running a job with &quot;mpirun&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You application doesn't immediately sounds like it -needs- MPI, though you could always use it anyway. The MPI messaging system is fast, but it isn't clear if your application will necessarily benefit from that speed. It depends upon how much communication is going on vs computation and idle time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are more familiar with the non-MPI methods, I would personally do it that way unless I found a need for MPI - for example, a place where MPI collectives such as MPI_Allgather would be helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 9, 2010, at 12:10 PM, Vasiliy G Tolstov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello.
</span><br>
<span class="quotelev2">&gt; &gt; Some times ago i run study MPI (openmpi). 
</span><br>
<span class="quotelev2">&gt; &gt; I need to write application (client/server) runs on 50 servers in
</span><br>
<span class="quotelev2">&gt; &gt; parallel. Each application can communicate with others by tcp/ip (send
</span><br>
<span class="quotelev2">&gt; &gt; commands, doing some parallel computations).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Master - controls all clients - slaves (send control commands, if needed
</span><br>
<span class="quotelev2">&gt; &gt; restart clients). If master machine with server application die, some
</span><br>
<span class="quotelev2">&gt; &gt; other server need to recive master role and controls other slaves.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can i do this things with openmpi? Or i need to write standart tcp/ip
</span><br>
<span class="quotelev2">&gt; &gt; client/server application?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm try to read some search results in google like this -
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://docs.sun.com/source/819-7480-11/ExecutingPrograms.htmlaopenmpi">http://docs.sun.com/source/819-7480-11/ExecutingPrograms.htmlaopenmpi</a>%
</span><br>
<span class="quotelev2">&gt; &gt; 20orted%20persistent%20daemon
</span><br>
<span class="quotelev2">&gt; &gt; but orted return error:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; orted --daemonize
</span><br>
<span class="quotelev2">&gt; &gt; [mobile:24107] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt; &gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  orte_ess_base_select failed
</span><br>
<span class="quotelev2">&gt; &gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank You. Sorry for my poor english.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Vasiliy G Tolstov &lt;v.tolstov_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Selfip.Ru
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<li><strong>Next message:</strong> <a href="12293.php">piening: "[OMPI users] openmpi-1.4.1 Debian-Live Cd"</a>
<li><strong>Previous message:</strong> <a href="12291.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>In reply to:</strong> <a href="12289.php">Ralph Castain: "Re: [OMPI users] newbe question"</a>
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
