<?
$subject_val = "[OMPI users] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 19:39:10 2015" -->
<!-- isoreceived="20150519233910" -->
<!-- sent="Wed, 20 May 2015 00:39:08 +0100" -->
<!-- isosent="20150519233908" -->
<!-- name="Khalid Hasanov" -->
<!-- email="xalid.h_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI collectives algorithm selection" -->
<!-- id="CABb4ZDcAEMxqi3=EZOdaa7s5+hcV1OSoOTGt5RWGPHk6LD5Dzg_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI collectives algorithm selection<br>
<strong>From:</strong> Khalid Hasanov (<em>xalid.h_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-19 19:39:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26883.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26881.php">Lev Givon: "[OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26885.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="26885.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to use coll_tuned_dynamic_rules_filename option.
<br>
<p>I am not sure if I do everything right or not. But my impression is that
<br>
config file feature does not work as expected.
<br>
<p>For example, if I specify config file as in the attached
<br>
ompi_tuned_file.conf and execute the attached simple broadcast example as :
<br>
<p><p><span class="quotelev1">&gt; mpirun -n 16 --mca coll_tuned_use_dynamic_rules 1  --mca
</span><br>
<span class="quotelev1">&gt; coll_tuned_dynamic_rules_filename ompi_tuned_file.conf   -mca
</span><br>
<span class="quotelev1">&gt; coll_base_verbose 1  bcast_example
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://mail.google.com/mail/u/0/?ui=2&amp;ik=e63390c27f&amp;view=att&amp;th=14d6e6bef2c6fbca&amp;attid=0.2&amp;disp=safe&amp;realattid=f_i9vxd25k1&amp;zw">https://mail.google.com/mail/u/0/?ui=2&amp;ik=e63390c27f&amp;view=att&amp;th=14d6e6bef2c6fbca&amp;attid=0.2&amp;disp=safe&amp;realattid=f_i9vxd25k1&amp;zw</a>&gt;
</span><br>
<span class="quotelev1">&gt; I would expect that during run time the config file should be ignored as
</span><br>
<span class="quotelev1">&gt; it does not contain any configuration for communicator size 16. However, it
</span><br>
<span class="quotelev1">&gt; uses configuration for the last communicator for which the size is 5. I
</span><br>
<span class="quotelev1">&gt; have attached tuned_output file for more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Similar problem exists even if the configuration file contains config for
</span><br>
<span class="quotelev1">&gt; communicator size 16. For example , I added to the configuration file first
</span><br>
<span class="quotelev1">&gt; communicator size 16 then communicator size 5. But it used configuration
</span><br>
<span class="quotelev1">&gt; for communicator size 5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another interesting thing is that if the second communicator size is
</span><br>
<span class="quotelev1">&gt; greater than the first communicator in the config file then it seems to
</span><br>
<span class="quotelev1">&gt; work correctly. At least I tested it for the case where communicator one
</span><br>
<span class="quotelev1">&gt; had size 16 and second had 55.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used a development version of Open MPI (1.9.0a1). I forked it into my
</span><br>
<span class="quotelev1">&gt; own github (<a href="https://github.com/khalid-hasanov/ompi">https://github.com/khalid-hasanov/ompi</a>) and I have attached
</span><br>
<span class="quotelev1">&gt; ompi_info outputs as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have added some printfs into coll_tuned_decision_dynamic.c file to
</span><br>
<span class="quotelev1">&gt; double check it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (alg) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Men burdayam: alg=%d\n&quot;, alg);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /* we have found a valid choice from the file based rules for
</span><br>
<span class="quotelev1">&gt; this message size */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             return ompi_coll_tuned_bcast_intra_do_this (buff, count,
</span><br>
<span class="quotelev1">&gt; datatype, root,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                         comm, module,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                         alg, faninout,
</span><br>
<span class="quotelev1">&gt; segsize);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         } /* found a method */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Khalid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26882/bcast_example.c">bcast_example.c</a>
</ul>
<!-- attachment="bcast_example.c" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26882/ompi_tuned_file.conf">ompi_tuned_file.conf</a>
</ul>
<!-- attachment="ompi_tuned_file.conf" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26882/ompi_info_output">ompi_info_output</a>
</ul>
<!-- attachment="ompi_info_output" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26882/tuned_output">tuned_output</a>
</ul>
<!-- attachment="tuned_output" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26883.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26881.php">Lev Givon: "[OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26885.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="26885.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
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
