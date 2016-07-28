<?
$subject_val = "Re: [OMPI users] Performance issue of mpirun/mpi_init";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 00:20:43 2014" -->
<!-- isoreceived="20140411042043" -->
<!-- sent="Thu, 10 Apr 2014 21:19:47 -0700" -->
<!-- isosent="20140411041947" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance issue of mpirun/mpi_init" -->
<!-- id="2E103C41-4CA4-451D-94C8-D10C7DB39695_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8D58A4B5E6148C419C6AD6334962375DC211912E_at_UWMBX04.uw.lu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance issue of mpirun/mpi_init<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 00:19:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24148.php">Ralph Castain: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<li><strong>Previous message:</strong> <a href="24146.php">Saliya Ekanayake: "[OMPI users] Optimal mapping/binding when threads are used?"</a>
<li><strong>In reply to:</strong> <a href="24141.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24177.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Reply:</strong> <a href="24177.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I shaved about 30% off the time - the patch is waiting for 1.8.1, but you can try it now (see the ticket for the changeset):
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4510#comment:1">https://svn.open-mpi.org/trac/ompi/ticket/4510#comment:1</a>
<br>
<p>I've added you to the ticket so you can follow what I'm doing. Getting any further improvement will take a little longer due to travel and vacation, but I'll keep poking at it.
<br>
<p>Ralph
<br>
<p>On Apr 10, 2014, at 10:25 AM, Victor Vysotskiy &lt;Victor.Vysotskiy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Okay, I'll try to do a little poking around. Meantime, please send along the output from &gt;&quot;ompi_info&quot; so we can see how this was configured and what built.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; enclosed please find the requested information. It would be great to have an workaround for 1.8 because with 1.8 our  verification suite takes (6.2 hrs) 2x times longer to complete compared to 1.6.5  (3 hrs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Victor.
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.linux.tar&gt;&lt;ompi_info.mac.tar&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24147/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24148.php">Ralph Castain: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<li><strong>Previous message:</strong> <a href="24146.php">Saliya Ekanayake: "[OMPI users] Optimal mapping/binding when threads are used?"</a>
<li><strong>In reply to:</strong> <a href="24141.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24177.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Reply:</strong> <a href="24177.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
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
