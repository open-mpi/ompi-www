<?
$subject_val = "Re: [OMPI users] Configuration for rendezvous and eager protocols:	two-sided comm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 16 03:41:27 2013" -->
<!-- isoreceived="20131216084127" -->
<!-- sent="Mon, 16 Dec 2013 09:41:23 +0100 (CET)" -->
<!-- isosent="20131216084123" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration for rendezvous and eager protocols:	two-sided comm" -->
<!-- id="2094114483.51493.1387183282958.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAPkf6e24z5NT+rL=uF0m7vDVO__t7NEe33NkDFib814fFSPDAQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuration for rendezvous and eager protocols:	two-sided comm<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-16 03:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23197.php">Siddhartha Jana: "Re: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Previous message:</strong> <a href="23195.php">Siddhartha Jana: "[OMPI users] Recommended tool to measure packet counters"</a>
<li><strong>In reply to:</strong> <a href="23194.php">Siddhartha Jana: "[OMPI users] Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23197.php">Siddhartha Jana: "Re: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Reply:</strong> <a href="23197.php">Siddhartha Jana: "Re: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siddhartha,
<br>
<p>MPI_Send/Recv in Open MPI implements both protocols and chooses based on the message size which one to use.
<br>
You can use the mca parameter &quot;btl_sm_eager_limit&quot; to modify the behaviour.
<br>
<p>Here the corresponding info obtained from the ompi_info tool:
<br>
<p>&quot;btl_sm_eager_limit&quot; (current value: &lt;4096&gt;, data source: default value)
<br>
Maximum size (in bytes) of &quot;short&quot; messages (must be &gt;= 1)
<br>
<p>Regards
<br>
Christoph Niethammer
<br>
<p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203
email: niethammer_at_[hidden]
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
----- Urspr&#195;&#188;ngliche Mail -----
Von: &quot;Siddhartha Jana&quot; &lt;siddharthajana24_at_[hidden]&gt;
An: &quot;OpenMPI users mailing list&quot; &lt;users_at_[hidden]&gt;
Gesendet: Samstag, 14. Dezember 2013 13:44:12
Betreff: [OMPI users] Configuration for rendezvous and eager protocols:	two-sided comm
Hi 
In OpenMPI, are MPI_Send, MPI_Recv (and friends) implemented using rendezvous protocol or eager protocol? 
If both, is there a way to choose one or the other during runtime or while building the library? 
If there is a threshold of the message size that dictates the protocol to be used, is there a way I can alter that threshold value? 
If different protocols were used for different versions of the library in the past, could someone please direct me to the exact version numbers of the implementations that used one or the other protocol? 
Thanks a lot, 
Siddhartha 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23197.php">Siddhartha Jana: "Re: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Previous message:</strong> <a href="23195.php">Siddhartha Jana: "[OMPI users] Recommended tool to measure packet counters"</a>
<li><strong>In reply to:</strong> <a href="23194.php">Siddhartha Jana: "[OMPI users] Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23197.php">Siddhartha Jana: "Re: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Reply:</strong> <a href="23197.php">Siddhartha Jana: "Re: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm"</a>
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
