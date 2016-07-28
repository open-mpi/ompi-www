<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  7 11:45:14 2006" -->
<!-- isoreceived="20060207164514" -->
<!-- sent="Tue, 7 Feb 2006 08:45:04 -0800 (PST)" -->
<!-- isosent="20060207164504" -->
<!-- name="Konstantin Kudin" -->
<!-- email="konstantin_kudin_at_[hidden]" -->
<!-- subject="[O-MPI users] &amp;quot;alltoall&amp;quot; vs &amp;quot;alltoallv&amp;quot;" -->
<!-- id="20060207164505.31038.qmail_at_web52006.mail.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200602071621.05042.Keller_at_hlrs.de" -->
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
<strong>From:</strong> Konstantin Kudin (<em>konstantin_kudin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-07 11:45:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0595.php">Bill Saphir: "[O-MPI users] Multiply-defined munmap on OSX"</a>
<li><strong>Previous message:</strong> <a href="0593.php">Rainer Keller: "Re: [O-MPI users] mpirun with make"</a>
<li><strong>In reply to:</strong> <a href="0593.php">Rainer Keller: "Re: [O-MPI users] mpirun with make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0641.php">George Bosilca: "Re: [OMPI users] [O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<li><strong>Reply:</strong> <a href="0641.php">George Bosilca: "Re: [OMPI users] [O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi all,
<br>
<p>&nbsp;I was wondering if it would be possible to use the same scheduling for
<br>
&quot;alltoallv&quot; as for &quot;alltoall&quot;. If one assumes the messages of roughly
<br>
the same size, then &quot;alltoall&quot; would not be an unreasonable
<br>
approximation for &quot;alltoallv&quot;. As is, it appears that in v1.1
<br>
&quot;alltoallv&quot; is done via a bunch of &quot;isend+irecv&quot;, while &quot;alltoall&quot; is a
<br>
bit more clever.
<br>
<p>&nbsp;One could then also have a runtime flag to use this sort of
<br>
substitution.
<br>
<p>&nbsp;Thanks!
<br>
&nbsp;Kostya
<br>
<p>&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
<p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0595.php">Bill Saphir: "[O-MPI users] Multiply-defined munmap on OSX"</a>
<li><strong>Previous message:</strong> <a href="0593.php">Rainer Keller: "Re: [O-MPI users] mpirun with make"</a>
<li><strong>In reply to:</strong> <a href="0593.php">Rainer Keller: "Re: [O-MPI users] mpirun with make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0641.php">George Bosilca: "Re: [OMPI users] [O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<li><strong>Reply:</strong> <a href="0641.php">George Bosilca: "Re: [OMPI users] [O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
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
