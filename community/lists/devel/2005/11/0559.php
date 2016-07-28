<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 12:36:31 2005" -->
<!-- isoreceived="20051129173631" -->
<!-- sent="Tue, 29 Nov 2005 10:36:26 -0700" -->
<!-- isosent="20051129173626" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  TCP performance" -->
<!-- id="438C919A.5090108_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.WNT.4.63.0511291131350.3416_at_bosilca" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-29 12:36:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0560.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0558.php">Jeff Squyres: "Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0557.php">George Bosilca: "TCP performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0564.php">George Bosilca: "Re:  TCP performance"</a>
<li><strong>Reply:</strong> <a href="0564.php">George Bosilca: "Re:  TCP performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Can you try out the changes I just commited on the trunk? We were doing
<br>
more select/recvs then necessary.
<br>
<p>Thanks,
<br>
Tim
<br>
<p><p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I run Netpipe on 4 different clusters with differents OSes and Eternet 
</span><br>
<span class="quotelev1">&gt; devices. The results is that nearly the same behaviour happens all the 
</span><br>
<span class="quotelev1">&gt; time for small messages. Basically, our latency is really bad. Attached 
</span><br>
<span class="quotelev1">&gt; are 2 of the graphs on one MAC OS X cluster (wotan) and a Linux 2.6.10 
</span><br>
<span class="quotelev1">&gt; 32 bits one. The graph are for Netpipe compiled over tcp, and for Open 
</span><br>
<span class="quotelev1">&gt; MPI with all the PMLs (uniq, teg and ob1).Here is the global trend:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - we are always slower than native TCP (what a guess!)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - uniq is faster than teg by a fraction of second (it's more visible on 
</span><br>
<span class="quotelev1">&gt; fast networks).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - teg and uniq are always better than ob1 in terms of latency.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - the behaviour of ob1 differ on wotan and boba. On boba the 
</span><br>
<span class="quotelev1">&gt; performances are a lot closer to the other PML when on wotan it's like 
</span><br>
<span class="quotelev1">&gt; 40 micro-second slower (it nearly double the raw TCP latency).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the same nodes I run other Netpipe with SM and MX and the results are 
</span><br>
<span class="quotelev1">&gt; pretty good. So I think we have this latency problem only on TCP. I will 
</span><br>
<span class="quotelev1">&gt; take a look to see how exactly is happens but any help is welcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt; hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                   Martin Luther King
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0560.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0558.php">Jeff Squyres: "Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0557.php">George Bosilca: "TCP performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0564.php">George Bosilca: "Re:  TCP performance"</a>
<li><strong>Reply:</strong> <a href="0564.php">George Bosilca: "Re:  TCP performance"</a>
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
