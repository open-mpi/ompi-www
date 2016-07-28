<?
$subject_val = "Re: [OMPI users] Allgather Implementation Details";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 09:15:09 2015" -->
<!-- isoreceived="20150701131509" -->
<!-- sent="Wed, 1 Jul 2015 09:14:59 -0400" -->
<!-- isosent="20150701131459" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Allgather Implementation Details" -->
<!-- id="CA+ssbKU44DrV9PStiQt5023saY_tGBLwpxhMjt4bKxzZByGbRA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWSMkG82n3UGs3qRV7PQW23PA4v=hs7k+TiBpMN9aopcA_at_mail.gmail.com" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 09:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27237.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27235.php">Steven Eliuk: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27232.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27237.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>Reply:</strong> <a href="27237.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you George. This is very informative.
<br>
<p>Is it possible to pass the option in runtime rather setting up in the
<br>
config file?
<br>
<p>Thank you
<br>
Saliya
<br>
<p>On Tue, Jun 30, 2015 at 7:20 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Saliya,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 30, 2015 at 10:50 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am experiencing some bottleneck with allgatherv routine in one of our
</span><br>
<span class="quotelev2">&gt;&gt; programs and wonder how it works internally. Could you please share some
</span><br>
<span class="quotelev2">&gt;&gt; details on this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI has a tunable approach to all the collective algorithms. In case
</span><br>
<span class="quotelev1">&gt; you have the tuned collective enabled (--mca coll tuned,inter,self,basic as
</span><br>
<span class="quotelev1">&gt; an example) you do have access to the pipelined ring version you made
</span><br>
<span class="quotelev1">&gt; reference to. However, in addition to that particular version you also have
</span><br>
<span class="quotelev1">&gt; access to other, sometimes faster, algorithms such as Bruck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do a quick &quot;ompi_info --param coll tuned -l 9&quot; to see all the tuned
</span><br>
<span class="quotelev1">&gt; collective options. You can alter the selection of a particular AllgatherV
</span><br>
<span class="quotelev1">&gt; algorithm in Open MPI by adding the 2 following lines in yout
</span><br>
<span class="quotelev1">&gt; ${HOME}/.openmpi/mca-params.conf file.
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules = 1
</span><br>
<span class="quotelev1">&gt; coll_tuned_allgatherv_algorithm = 3
</span><br>
<span class="quotelev1">&gt; With the above 2 lines I force the Bruck algorithm (which has ID 3 in the
</span><br>
<span class="quotelev1">&gt; output of ompi_info) for all allgathev collectives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can benchmark the MPI_Allgatherv for your particular case and then
</span><br>
<span class="quotelev1">&gt; force the selection of the right algorithm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found this [1] paper from Gropp discussing an efficient implementation.
</span><br>
<span class="quotelev2">&gt;&gt; Is this similar to what we get in OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [1]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.researchgate.net/profile/William_Gropp/publication/221597354_A_Simple_Pipelined_Algorithm_for_Large_Irregular_All-gather_Problems/links/00b49525d291830c67000000.pdf">http://www.researchgate.net/profile/William_Gropp/publication/221597354_A_Simple_Pipelined_Algorithm_for_Large_Irregular_All-gather_Problems/links/00b49525d291830c67000000.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27229.php">http://www.open-mpi.org/community/lists/users/2015/06/27229.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27232.php">http://www.open-mpi.org/community/lists/users/2015/06/27232.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27236/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27237.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27235.php">Steven Eliuk: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27232.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27237.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>Reply:</strong> <a href="27237.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
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
