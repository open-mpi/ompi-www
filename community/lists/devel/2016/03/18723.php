<?
$subject_val = "Re: [OMPI devel] Confusion about slots";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 12:36:02 2016" -->
<!-- isoreceived="20160323163602" -->
<!-- sent="Wed, 23 Mar 2016 17:35:48 +0100" -->
<!-- isosent="20160323163548" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Confusion about slots" -->
<!-- id="CADf4hJ+WKK+h+B8ey-UJLsw0nzMe7Sp5dC3cLXq7tp00NsdNQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADf4hJ+TfdhPAw3oU-0U5Am2GZ17L3UJHnm7tYY1QsE2tgjjEw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Confusion about slots<br>
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 12:35:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18724.php">Ralph Castain: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Previous message:</strong> <a href="18722.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="18718.php">Federico Reghenzani: "[OMPI devel] Confusion about slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18724.php">Ralph Castain: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Reply:</strong> <a href="18724.php">Ralph Castain: "Re: [OMPI devel] Confusion about slots"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I've investigated further today, it seems &quot;--map-by hwthread&quot; does not
<br>
remove the problem. However, if I specified in the hostfile &quot;node0
<br>
slots=32&quot; it runs really slower than specifying only &quot;node0&quot;. In both cases
<br>
I run mpirun with -np 32. So I'm quite sure I didn't understand what slots
<br>
are.
<br>
<p>__
<br>
Federico Reghenzani
<br>
M.Eng. Student @ Politecnico di Milano
<br>
Computer Science and Engineering
<br>
<p><p><p>2016-03-22 18:56 GMT+01:00 Federico Reghenzani &lt;
<br>
federico1.reghenzani_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm really confused about *slots* in resource allocation: I thought that
</span><br>
<span class="quotelev1">&gt; slots are the number of processes spawnable in a certain node, so it should
</span><br>
<span class="quotelev1">&gt; correspond to the number of Processing Elements of the node. For example,
</span><br>
<span class="quotelev1">&gt; on each of my nodes I have 2 processors, total 16 cores with
</span><br>
<span class="quotelev1">&gt; hyperthreading, so a total of 32 processing elements per node (i.e. 32 hw
</span><br>
<span class="quotelev1">&gt; threads). However, considering a single node, passing in the hostfile 32
</span><br>
<span class="quotelev1">&gt; slots and requesting &quot;-np 32&quot; results is a performance degradation of 20x
</span><br>
<span class="quotelev1">&gt; slower than using only &quot;-np 16&quot;. The problem disappears specifing --map-by
</span><br>
<span class="quotelev1">&gt; hwthread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Investigating on the problem I found these counterintuitive things:
</span><br>
<span class="quotelev1">&gt; - here
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://www.open-mpi.org/faq/?category=running#slots-without-hostfiles">https://www.open-mpi.org/faq/?category=running#slots-without-hostfiles</a>&gt; is
</span><br>
<span class="quotelev1">&gt; stated &quot;*slots* are Open MPI's representation of how many processors are
</span><br>
<span class="quotelev1">&gt; available&quot;
</span><br>
<span class="quotelev1">&gt; - here &lt;<a href="https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php#sect6">https://www.open-mpi.org/doc/v1.10/man1/mpirun.1.php#sect6</a>&gt; is
</span><br>
<span class="quotelev1">&gt; stated &quot;Slots indicate how many processes can potentially execute on a
</span><br>
<span class="quotelev1">&gt; node. For best performance, the number of slots may be chosen to be the
</span><br>
<span class="quotelev1">&gt; number of cores on the node or the number of processor sockets&quot;
</span><br>
<span class="quotelev1">&gt; - I tried to remove the slots information from the hostfile, so according
</span><br>
<span class="quotelev1">&gt; to this
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://www.open-mpi.org/faq/?category=running#slots-without-hostfiles">https://www.open-mpi.org/faq/?category=running#slots-without-hostfiles</a>&gt;
</span><br>
<span class="quotelev1">&gt; should be interpreted as &quot;1&quot;, but it spawns anyway 32 processes
</span><br>
<span class="quotelev1">&gt; - I'm not sure what --map-by and --rank-by do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In custom RAS we are developing, what we have to send to mpirun? The
</span><br>
<span class="quotelev1">&gt; number of processor sockets, the number of cores or the number of hwthread
</span><br>
<span class="quotelev1">&gt; available? How --map-by and --rank-by affect the spawn policy?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OFFTOPIC: is someone going to EuroMPI 2016 in September? We will be there
</span><br>
<span class="quotelev1">&gt; to present our migration technique.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Federico
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __
</span><br>
<span class="quotelev1">&gt; Federico Reghenzani
</span><br>
<span class="quotelev1">&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev1">&gt; Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18723/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18724.php">Ralph Castain: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Previous message:</strong> <a href="18722.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="18718.php">Federico Reghenzani: "[OMPI devel] Confusion about slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18724.php">Ralph Castain: "Re: [OMPI devel] Confusion about slots"</a>
<li><strong>Reply:</strong> <a href="18724.php">Ralph Castain: "Re: [OMPI devel] Confusion about slots"</a>
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
