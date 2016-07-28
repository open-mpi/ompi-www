<?
$subject_val = "Re: [OMPI users] what is a &quot;node&quot;?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 08:07:48 2012" -->
<!-- isoreceived="20120830120748" -->
<!-- sent="Thu, 30 Aug 2012 08:07:43 -0400" -->
<!-- isosent="20120830120743" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] what is a &amp;quot;node&amp;quot;?" -->
<!-- id="8023E98D-4B94-40A8-A634-8B20C549A7FD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="503F3467.2030108_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] what is a &quot;node&quot;?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 08:07:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20067.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Previous message:</strong> <a href="20065.php">Jeff Squyres: "Re: [OMPI users] fork in Fortran"</a>
<li><strong>In reply to:</strong> <a href="20062.php">Zbigniew Koza: "[OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20074.php">Gus Correa: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20074.php">Gus Correa: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the OMPI v1.6 series, you can use the processor affinity options.  And you can use --report-bindings to show exactly where processes were bound.  For example:
<br>
<p>-----
<br>
% mpirun -np 4 --bind-to-core --report-bindings -bycore uptime
<br>
[svbu-mpi056:18904] MCW rank 0 bound to socket 0[core 0]: [B . . .][. . . .]
<br>
[svbu-mpi056:18904] MCW rank 1 bound to socket 0[core 1]: [. B . .][. . . .]
<br>
[svbu-mpi056:18904] MCW rank 2 bound to socket 0[core 2]: [. . B .][. . . .]
<br>
[svbu-mpi056:18904] MCW rank 3 bound to socket 0[core 3]: [. . . B][. . . .]
<br>
&nbsp;05:06:13 up 7 days,  6:57,  1 user,  load average: 0.29, 0.10, 0.03
<br>
&nbsp;05:06:13 up 7 days,  6:57,  1 user,  load average: 0.29, 0.10, 0.03
<br>
&nbsp;05:06:13 up 7 days,  6:57,  1 user,  load average: 0.29, 0.10, 0.03
<br>
&nbsp;05:06:13 up 7 days,  6:57,  1 user,  load average: 0.29, 0.10, 0.03
<br>
% 
<br>
-----
<br>
<p>I bound each process to a single core, and mapped them on a round-robin basis by core.  Hence, all 4 processes ended up on their own cores on a single processor socket.
<br>
<p>The --report-bindings output shows that this particular machine has 2 sockets, each with 4 cores.
<br>
<p><p><p>On Aug 30, 2012, at 5:37 AM, Zbigniew Koza wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; consider this specification:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Curie fat consists in 360 nodes which contains 4 eight cores CPU Nehalem-EX clocked at 2.27 GHz, let 32 cores / node and 11520 cores for the full fat configuration&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Suppose I would like to run some performance tests just on a single processor rather than 4 of them.
</span><br>
<span class="quotelev1">&gt; Is there a way to do this?
</span><br>
<span class="quotelev1">&gt; I'm afraid specifying that I need 1 cluster node with 8 MPI prcesses
</span><br>
<span class="quotelev1">&gt; will result in OS distributing these 8 processes among 4
</span><br>
<span class="quotelev1">&gt; processors forming the node, and this is not what I'm after.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Z Koza
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20067.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Previous message:</strong> <a href="20065.php">Jeff Squyres: "Re: [OMPI users] fork in Fortran"</a>
<li><strong>In reply to:</strong> <a href="20062.php">Zbigniew Koza: "[OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20074.php">Gus Correa: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20074.php">Gus Correa: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
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
