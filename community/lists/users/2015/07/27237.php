<?
$subject_val = "Re: [OMPI users] Allgather Implementation Details";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 09:17:11 2015" -->
<!-- isoreceived="20150701131711" -->
<!-- sent="Wed, 1 Jul 2015 09:16:37 -0400" -->
<!-- isosent="20150701131637" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Allgather Implementation Details" -->
<!-- id="CAMJJpkXLxhJqfMO7aJQmA2vJ_YTEVmw2J8ft3cagpr2mcuS6Eg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKU44DrV9PStiQt5023saY_tGBLwpxhMjt4bKxzZByGbRA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-07-01 09:16:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27238.php">Stefan Paquay: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Previous message:</strong> <a href="27236.php">Saliya Ekanayake: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>In reply to:</strong> <a href="27236.php">Saliya Ekanayake: "Re: [OMPI users] Allgather Implementation Details"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Use --mca to pass the options directly through the mpirun.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Jul 1, 2015 at 9:14 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you George. This is very informative.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to pass the option in runtime rather setting up in the
</span><br>
<span class="quotelev1">&gt; config file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 30, 2015 at 7:20 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Saliya,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jun 30, 2015 at 10:50 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am experiencing some bottleneck with allgatherv routine in one of our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs and wonder how it works internally. Could you please share some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; details on this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI has a tunable approach to all the collective algorithms. In case
</span><br>
<span class="quotelev2">&gt;&gt; you have the tuned collective enabled (--mca coll tuned,inter,self,basic as
</span><br>
<span class="quotelev2">&gt;&gt; an example) you do have access to the pipelined ring version you made
</span><br>
<span class="quotelev2">&gt;&gt; reference to. However, in addition to that particular version you also have
</span><br>
<span class="quotelev2">&gt;&gt; access to other, sometimes faster, algorithms such as Bruck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do a quick &quot;ompi_info --param coll tuned -l 9&quot; to see all the tuned
</span><br>
<span class="quotelev2">&gt;&gt; collective options. You can alter the selection of a particular AllgatherV
</span><br>
<span class="quotelev2">&gt;&gt; algorithm in Open MPI by adding the 2 following lines in yout
</span><br>
<span class="quotelev2">&gt;&gt; ${HOME}/.openmpi/mca-params.conf file.
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_use_dynamic_rules = 1
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_allgatherv_algorithm = 3
</span><br>
<span class="quotelev2">&gt;&gt; With the above 2 lines I force the Bruck algorithm (which has ID 3 in the
</span><br>
<span class="quotelev2">&gt;&gt; output of ompi_info) for all allgathev collectives.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can benchmark the MPI_Allgatherv for your particular case and then
</span><br>
<span class="quotelev2">&gt;&gt; force the selection of the right algorithm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found this [1] paper from Gropp discussing an efficient
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation. Is this similar to what we get in OpenMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.researchgate.net/profile/William_Gropp/publication/221597354_A_Simple_Pipelined_Algorithm_for_Large_Irregular_All-gather_Problems/links/00b49525d291830c67000000.pdf">http://www.researchgate.net/profile/William_Gropp/publication/221597354_A_Simple_Pipelined_Algorithm_for_Large_Irregular_All-gather_Problems/links/00b49525d291830c67000000.pdf</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cell 812-391-4914
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27229.php">http://www.open-mpi.org/community/lists/users/2015/06/27229.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27232.php">http://www.open-mpi.org/community/lists/users/2015/06/27232.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27236.php">http://www.open-mpi.org/community/lists/users/2015/07/27236.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27237/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27238.php">Stefan Paquay: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Previous message:</strong> <a href="27236.php">Saliya Ekanayake: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>In reply to:</strong> <a href="27236.php">Saliya Ekanayake: "Re: [OMPI users] Allgather Implementation Details"</a>
<!-- nextthread="start" -->
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
