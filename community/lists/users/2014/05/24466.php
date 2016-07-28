<?
$subject_val = "Re: [OMPI users] MPI_Finalize() maintains load at 100%.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 10:21:28 2014" -->
<!-- isoreceived="20140523142128" -->
<!-- sent="Fri, 23 May 2014 16:21:16 +0200 (CEST)" -->
<!-- isosent="20140523142116" -->
<!-- name="Iv&#195;&#161;n Cores Gonz&#195;&#161;lez" -->
<!-- email="ivan.coresg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize() maintains load at 100%." -->
<!-- id="1238112006.17674428.1400854876581.JavaMail.zimbra_at_udc.es" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1423790865.17046572.1400834748602.JavaMail.zimbra_at_udc.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Finalize() maintains load at 100%.<br>
<strong>From:</strong> Iv&#195;&#161;n Cores Gonz&#195;&#161;lez (<em>ivan.coresg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 10:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24467.php">Ralph Castain: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Previous message:</strong> <a href="24465.php">Albert Solernou: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>In reply to:</strong> <a href="24456.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "[OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24468.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24468.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
Thanks for your response. 
<br>
I see your point, I try to change the algorithm but some processes finish while the others are still calling MPI functions. I can't avoid this behaviour. 
<br>
The ideal behavior is the processes go to sleep (or don't use the 100% of load) when the MPI_Finalize is called.
<br>
<p>For the time being maybe the fastest solution is instert a &quot;manual&quot; sleep before the MPI_Finalize.  
<br>
<p>Another question, Could be possible kill some MPI processes and avoid that the mpirun fails? Or this behaviuor is impossible?
<br>
<p>Thanks,
<br>
Ivan Cores
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24467.php">Ralph Castain: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Previous message:</strong> <a href="24465.php">Albert Solernou: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>In reply to:</strong> <a href="24456.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "[OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24468.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24468.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
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
