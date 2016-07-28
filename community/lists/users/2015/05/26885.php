<?
$subject_val = "Re: [OMPI users] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 21:12:05 2015" -->
<!-- isoreceived="20150520011205" -->
<!-- sent="Wed, 20 May 2015 10:12:06 +0900" -->
<!-- isosent="20150520011206" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI collectives algorithm selection" -->
<!-- id="555BDF66.3020004_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CABb4ZDcAEMxqi3=EZOdaa7s5+hcV1OSoOTGt5RWGPHk6LD5Dzg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI collectives algorithm selection<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-19 21:12:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26886.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26884.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>In reply to:</strong> <a href="26882.php">Khalid Hasanov: "[OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26886.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="26886.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Khalid,
<br>
<p>i checked the source code and it turns out rules must be ordered :
<br>
- first by communicator size
<br>
- second by message size
<br>
<p>Here is attached an updated version of the ompi_tuned_file.conf you 
<br>
should use
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 5/20/2015 8:39 AM, Khalid Hasanov wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am trying to use coll_tuned_dynamic_rules_filename option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure if I do everything right or not. But my impression is 
</span><br>
<span class="quotelev1">&gt; that config file feature does not work as expected.
</span><br>
<span class="quotelev1">&gt; For example, if I specify config file as in the attached 
</span><br>
<span class="quotelev1">&gt; ompi_tuned_file.conf and execute the attached simple broadcast example 
</span><br>
<span class="quotelev1">&gt; as :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun -n 16 --mca coll_tuned_use_dynamic_rules 1  --mca
</span><br>
<span class="quotelev1">&gt;     coll_tuned_dynamic_rules_filename ompi_tuned_file.conf   -mca
</span><br>
<span class="quotelev1">&gt;     coll_base_verbose 1 bcast_example
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="https://mail.google.com/mail/u/0/?ui=2&amp;ik=e63390c27f&amp;view=att&amp;th=14d6e6bef2c6fbca&amp;attid=0.2&amp;disp=safe&amp;realattid=f_i9vxd25k1&amp;zw">https://mail.google.com/mail/u/0/?ui=2&amp;ik=e63390c27f&amp;view=att&amp;th=14d6e6bef2c6fbca&amp;attid=0.2&amp;disp=safe&amp;realattid=f_i9vxd25k1&amp;zw</a>&gt;
</span><br>
<span class="quotelev1">&gt;     I would expect that during run time the config file should be
</span><br>
<span class="quotelev1">&gt;     ignored as it does not contain any configuration for communicator
</span><br>
<span class="quotelev1">&gt;     size 16. However, it uses configuration for the last communicator
</span><br>
<span class="quotelev1">&gt;     for which the size is 5. I have attached tuned_output file for
</span><br>
<span class="quotelev1">&gt;     more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Similar problem exists even if the configuration file contains
</span><br>
<span class="quotelev1">&gt;     config for communicator size 16. For example , I added to the
</span><br>
<span class="quotelev1">&gt;     configuration file first communicator size 16 then communicator
</span><br>
<span class="quotelev1">&gt;     size 5. But it used configuration for communicator size 5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Another interesting thing is that if the second communicator size
</span><br>
<span class="quotelev1">&gt;     is greater than the first communicator in the config file then it
</span><br>
<span class="quotelev1">&gt;     seems to work correctly. At least I tested it for the case where
</span><br>
<span class="quotelev1">&gt;     communicator one had size 16 and second had 55.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I used a development version of Open MPI (1.9.0a1). I forked it
</span><br>
<span class="quotelev1">&gt;     into my own github (<a href="https://github.com/khalid-hasanov/ompi">https://github.com/khalid-hasanov/ompi</a>) and I
</span><br>
<span class="quotelev1">&gt;     have attached ompi_info outputs as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I have added some printfs into coll_tuned_decision_dynamic.c file
</span><br>
<span class="quotelev1">&gt;     to double check it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (alg) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Men burdayam: alg=%d\n&quot;, alg);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* we have found a valid choice from the file based rules for this
</span><br>
<span class="quotelev1">&gt;     message size */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return ompi_coll_tuned_bcast_intra_do_this (buff, count, datatype,
</span><br>
<span class="quotelev1">&gt;     root,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       comm, module,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       alg, faninout, segsize);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             } /* found a method */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best regards,
</span><br>
<span class="quotelev1">&gt;     Khalid
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26882.php">http://www.open-mpi.org/community/lists/users/2015/05/26882.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26885/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26885/ompi_tuned_file.conf">ompi_tuned_file.conf</a>
</ul>
<!-- attachment="ompi_tuned_file.conf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26886.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26884.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>In reply to:</strong> <a href="26882.php">Khalid Hasanov: "[OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26886.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="26886.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
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
