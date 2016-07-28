<?
$subject_val = "Re: [OMPI users] Performance issue of mpirun/mpi_init";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 10:17:09 2014" -->
<!-- isoreceived="20140414141709" -->
<!-- sent="Mon, 14 Apr 2014 07:15:49 -0700" -->
<!-- isosent="20140414141549" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance issue of mpirun/mpi_init" -->
<!-- id="088AA3B2-4D9E-43A1-8BA6-08A5B311C709_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2E103C41-4CA4-451D-94C8-D10C7DB39695_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-04-14 10:15:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24178.php">Djordje Romanic: "[OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24176.php">Ralph Castain: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>In reply to:</strong> <a href="24147.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24212.php">Victor Vysotskiy: "[OMPI users] FW:  Performance issue of mpirun/mpi_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm still poking around, but would appreciate a little more info to ensure I'm looking in the right places. How many nodes are you running your application across for your verification suite? I suspect it isn't just one :-)
<br>
<p><p>On Apr 10, 2014, at 9:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I shaved about 30% off the time - the patch is waiting for 1.8.1, but you can try it now (see the ticket for the changeset):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4510#comment:1">https://svn.open-mpi.org/trac/ompi/ticket/4510#comment:1</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've added you to the ticket so you can follow what I'm doing. Getting any further improvement will take a little longer due to travel and vacation, but I'll keep poking at it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 10, 2014, at 10:25 AM, Victor Vysotskiy &lt;Victor.Vysotskiy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi again,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Okay, I'll try to do a little poking around. Meantime, please send along the output from &gt;&quot;ompi_info&quot; so we can see how this was configured and what built.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; enclosed please find the requested information. It would be great to have an workaround for 1.8 because with 1.8 our  verification suite takes (6.2 hrs) 2x times longer to complete compared to 1.6.5  (3 hrs).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Victor.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_info.linux.tar&gt;&lt;ompi_info.mac.tar&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24177/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24178.php">Djordje Romanic: "[OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24176.php">Ralph Castain: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>In reply to:</strong> <a href="24147.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24212.php">Victor Vysotskiy: "[OMPI users] FW:  Performance issue of mpirun/mpi_init"</a>
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
