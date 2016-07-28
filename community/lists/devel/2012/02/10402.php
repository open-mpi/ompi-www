<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 13 06:43:29 2012" -->
<!-- isoreceived="20120213114329" -->
<!-- sent="Mon, 13 Feb 2012 12:43:22 +0100" -->
<!-- isosent="20120213114322" -->
<!-- name="sylvain.jeaugey_at_[hidden]" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="OFE9A27280.50A27645-ONC12579A3.00401479-C12579A3.004065C8_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201202131212.00586.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] poor btl sm latency<br>
<strong>From:</strong> <a href="mailto:sylvain.jeaugey_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20poor%20btl%20sm%20latency"><em>sylvain.jeaugey_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-13 06:43:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10403.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10401.php">Matthias Jurenz: "[OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10401.php">Matthias Jurenz: "[OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10403.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10403.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Matthias,
<br>
<p>You might want to play with process binding to see if your problem is 
<br>
related to bad memory affinity.
<br>
<p>Try to launch pingpong on two CPUs of the same socket, then on different 
<br>
sockets (i.e. bind each process to a core, and try different 
<br>
configurations).
<br>
<p>Sylvain
<br>
<p><p><p>De :    Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt;
<br>
A :     Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Date :  13/02/2012 12:12
<br>
Objet : [OMPI devel] poor btl sm latency
<br>
Envoy&#233; par :    devel-bounces_at_[hidden]
<br>
<p><p><p>Hello all,
<br>
<p>on our new AMD cluster (AMD Opteron 6274, 2,2GHz) we get very bad 
<br>
latencies 
<br>
(~1.5us) when performing 0-byte p2p communication on one single node using 
<br>
the 
<br>
Open MPI sm BTL. When using Platform MPI we get ~0.5us latencies which is 
<br>
pretty good. The bandwidth results are similar for both MPI 
<br>
implementations 
<br>
(~3,3GB/s) - this is okay.
<br>
<p>One node has 64 cores and 64Gb RAM where it doesn't matter how many ranks 
<br>
allocated by the application. We get similar results with different number 
<br>
of 
<br>
ranks.
<br>
<p>We are using Open MPI 1.5.4 which is built by gcc 4.3.4 without any 
<br>
special 
<br>
configure options except the installation prefix and the location of the 
<br>
LSF 
<br>
stuff.
<br>
<p>As mentioned at <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> we tried to use 
<br>
/dev/shm instead of /tmp for the session directory, but it had no effect. 
<br>
Furthermore, we tried the current release candidate 1.5.5rc1 of Open MPI 
<br>
which 
<br>
provides an option to use the SysV shared memory (-mca shmem sysv) - also 
<br>
this 
<br>
results in similar poor latencies.
<br>
<p>Do you have any idea? Please help!
<br>
<p>Thanks,
<br>
Matthias
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10402/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10403.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10401.php">Matthias Jurenz: "[OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10401.php">Matthias Jurenz: "[OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10403.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10403.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
