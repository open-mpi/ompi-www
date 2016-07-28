<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 04:25:51 2005" -->
<!-- isoreceived="20051021092551" -->
<!-- sent="Fri, 21 Oct 2005 13:25:44 +0400 (MSD)" -->
<!-- isosent="20051021092544" -->
<!-- name="Konstantin Karganov" -->
<!-- email="kostik_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI debugging support" -->
<!-- id="Pine.LNX.4.44.0510211304540.16976-100000_at_ispserv.ispras.ru" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.44.0510211049530.16976-100000_at_ispserv.ispras.ru" -->
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
<strong>From:</strong> Konstantin Karganov (<em>kostik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 04:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0217.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0215.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0215.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0217.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; The question was merely how to do it: call &quot;gdb orterun&quot; and catch it 
</span><br>
<span class="quotelev1">&gt; somewhere on breakpoint or attach to orterun later or smth else.
</span><br>
Reply to myself:
<br>
# gdb orterun
<br>
(gdb) br MPIR_Breakpoint
<br>
(gdb) run
<br>
(gdb) &lt;get the table&gt;
<br>
(gdb) detach
<br>
(gdb) exit
<br>
<p>Am I right?
<br>
<p>Best regards,
<br>
Konstantin.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0217.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0215.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0215.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0217.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
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
