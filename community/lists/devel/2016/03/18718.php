<?
$subject_val = "[OMPI devel] Confusion about slots";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 13:56:56 2016" -->
<!-- isoreceived="20160322175656" -->
<!-- sent="Tue, 22 Mar 2016 18:56:50 +0100" -->
<!-- isosent="20160322175650" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="[OMPI devel] Confusion about slots" -->
<!-- id="CADf4hJ+TfdhPAw3oU-0U5Am2GZ17L3UJHnm7tYY1QsE2tgjjEw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Confusion about slots<br>
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-22 13:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18719.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="18717.php">Jeff Squyres (jsquyres): "[OMPI devel] Github updates to PRs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18723.php">Federico Reghenzani: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Reply:</strong> <a href="18723.php">Federico Reghenzani: "Re: [OMPI devel] Confusion about slots"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>I'm really confused about *slots* in resource allocation: I thought that
<br>
slots are the number of processes spawnable in a certain node, so it should
<br>
correspond to the number of Processing Elements of the node. For example,
<br>
on each of my nodes I have 2 processors, total 16 cores with
<br>
hyperthreading, so a total of 32 processing elements per node (i.e. 32 hw
<br>
threads). However, considering a single node, passing in the hostfile 32
<br>
slots and requesting &quot;-np 32&quot; results is a performance degradation of 20x
<br>
slower than using only &quot;-np 16&quot;. The problem disappears specifing --map-by
<br>
hwthread.
<br>
<p>Investigating on the problem I found these counterintuitive things:
<br>
- here
<br>
&lt;<a href="https://www.open-mpi.org/faq/?category=running#slots-without-hostfiles">https://www.open-mpi.org/faq/?category=running#slots-without-hostfiles</a>&gt; is
<br>
stated &quot;*slots* are Open MPI's representation of how many processors are
<br>
available&quot;
<br>
- here &lt;<a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php#sect6">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php#sect6</a>&gt; is
<br>
stated &quot;Slots indicate how many processes can potentially execute on a
<br>
node. For best performance, the number of slots may be chosen to be the
<br>
number of cores on the node or the number of processor sockets&quot;
<br>
- I tried to remove the slots information from the hostfile, so according
<br>
to this
<br>
&lt;<a href="https://www.open-mpi.org/faq/?category=running#slots-without-hostfiles">https://www.open-mpi.org/faq/?category=running#slots-without-hostfiles</a>&gt;
<br>
should be interpreted as &quot;1&quot;, but it spawns anyway 32 processes
<br>
- I'm not sure what --map-by and --rank-by do
<br>
<p>In custom RAS we are developing, what we have to send to mpirun? The number
<br>
of processor sockets, the number of cores or the number of hwthread
<br>
available? How --map-by and --rank-by affect the spawn policy?
<br>
<p><p>Thank you!
<br>
<p><p>OFFTOPIC: is someone going to EuroMPI 2016 in September? We will be there
<br>
to present our migration technique.
<br>
<p><p>Cheers,
<br>
Federico
<br>
<p>__
<br>
Federico Reghenzani
<br>
M.Eng. Student @ Politecnico di Milano
<br>
Computer Science and Engineering
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18718/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18719.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Previous message:</strong> <a href="18717.php">Jeff Squyres (jsquyres): "[OMPI devel] Github updates to PRs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18723.php">Federico Reghenzani: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Reply:</strong> <a href="18723.php">Federico Reghenzani: "Re: [OMPI devel] Confusion about slots"</a>
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
