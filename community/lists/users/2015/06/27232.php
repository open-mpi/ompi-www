<?
$subject_val = "Re: [OMPI users] Allgather Implementation Details";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 19:20:39 2015" -->
<!-- isoreceived="20150630232039" -->
<!-- sent="Tue, 30 Jun 2015 19:20:37 -0400" -->
<!-- isosent="20150630232037" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Allgather Implementation Details" -->
<!-- id="CAMJJpkWSMkG82n3UGs3qRV7PQW23PA4v=hs7k+TiBpMN9aopcA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKVipTJyavCJ0gyP8hLf+X4wfy7o3e3gYQu-86TjOOLEig_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Allgather Implementation Details<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-30 19:20:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27233.php">Howard Pritchard: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Previous message:</strong> <a href="27231.php">Steven Eliuk: "[OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>In reply to:</strong> <a href="27229.php">Saliya Ekanayake: "[OMPI users] Allgather Implementation Details"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27236.php">Saliya Ekanayake: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27236.php">Saliya Ekanayake: "Re: [OMPI users] Allgather Implementation Details"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Saliya,
<br>
<p>On Tue, Jun 30, 2015 at 10:50 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am experiencing some bottleneck with allgatherv routine in one of our
</span><br>
<span class="quotelev1">&gt; programs and wonder how it works internally. Could you please share some
</span><br>
<span class="quotelev1">&gt; details on this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Open MPI has a tunable approach to all the collective algorithms. In case
<br>
you have the tuned collective enabled (--mca coll tuned,inter,self,basic as
<br>
an example) you do have access to the pipelined ring version you made
<br>
reference to. However, in addition to that particular version you also have
<br>
access to other, sometimes faster, algorithms such as Bruck.
<br>
<p>Do a quick &quot;ompi_info --param coll tuned -l 9&quot; to see all the tuned
<br>
collective options. You can alter the selection of a particular AllgatherV
<br>
algorithm in Open MPI by adding the 2 following lines in yout
<br>
${HOME}/.openmpi/mca-params.conf file.
<br>
coll_tuned_use_dynamic_rules = 1
<br>
coll_tuned_allgatherv_algorithm = 3
<br>
With the above 2 lines I force the Bruck algorithm (which has ID 3 in the
<br>
output of ompi_info) for all allgathev collectives.
<br>
<p>You can benchmark the MPI_Allgatherv for your particular case and then
<br>
force the selection of the right algorithm.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found this [1] paper from Gropp discussing an efficient implementation.
</span><br>
<span class="quotelev1">&gt; Is this similar to what we get in OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.researchgate.net/profile/William_Gropp/publication/221597354_A_Simple_Pipelined_Algorithm_for_Large_Irregular_All-gather_Problems/links/00b49525d291830c67000000.pdf">http://www.researchgate.net/profile/William_Gropp/publication/221597354_A_Simple_Pipelined_Algorithm_for_Large_Irregular_All-gather_Problems/links/00b49525d291830c67000000.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27229.php">http://www.open-mpi.org/community/lists/users/2015/06/27229.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27232/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27233.php">Howard Pritchard: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Previous message:</strong> <a href="27231.php">Steven Eliuk: "[OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>In reply to:</strong> <a href="27229.php">Saliya Ekanayake: "[OMPI users] Allgather Implementation Details"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27236.php">Saliya Ekanayake: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27236.php">Saliya Ekanayake: "Re: [OMPI users] Allgather Implementation Details"</a>
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
