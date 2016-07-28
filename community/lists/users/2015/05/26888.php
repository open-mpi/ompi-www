<?
$subject_val = "Re: [OMPI users] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 21:53:09 2015" -->
<!-- isoreceived="20150520015309" -->
<!-- sent="Wed, 20 May 2015 02:53:04 +0100" -->
<!-- isosent="20150520015304" -->
<!-- name="Khalid Hasanov" -->
<!-- email="xalid.h_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI collectives algorithm selection" -->
<!-- id="CABb4ZDc1iBe61pfybSuU409zLzUAynmnfoKy9WB7OKaTwAJSvQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="555BE798.5020204_at_rist.or.jp" -->
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
<strong>From:</strong> Khalid Hasanov (<em>xalid.h_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-19 21:53:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26889.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26887.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26887.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26896.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot, Gilles.
<br>
<p>On Wed, May 20, 2015 at 2:47 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  Khalid,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is probably not the intended behavior, i will followup on the devel
</span><br>
<span class="quotelev1">&gt; mailing list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for reporting this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/20/2015 10:30 AM, Khalid Hasanov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thank you a lot, it works now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Just one minor thing I have seen now. If I use some communicator size
</span><br>
<span class="quotelev1">&gt; which does not exist in the configuration file, it will still use the
</span><br>
<span class="quotelev1">&gt; configuration file. For example, if I use the previous config file with
</span><br>
<span class="quotelev1">&gt; mpirun -n 4 it will use the config for the comm size 5 (the first one). The
</span><br>
<span class="quotelev1">&gt; same happens if n is less than 16. If n &gt; 16 it will use the config for the
</span><br>
<span class="quotelev1">&gt; communicator size 16 (the second one). I am writing this just in case it is
</span><br>
<span class="quotelev1">&gt; not expected behaviour.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Best regards,
</span><br>
<span class="quotelev1">&gt; Khalid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 20, 2015 at 2:12 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi Khalid,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i checked the source code and it turns out rules must be ordered :
</span><br>
<span class="quotelev2">&gt;&gt; - first by communicator size
</span><br>
<span class="quotelev2">&gt;&gt; - second by message size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is attached an updated version of the ompi_tuned_file.conf you
</span><br>
<span class="quotelev2">&gt;&gt; should use
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/20/2015 8:39 AM, Khalid Hasanov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to use coll_tuned_dynamic_rules_filename option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I am not sure if I do everything right or not. But my impression is
</span><br>
<span class="quotelev2">&gt;&gt; that config file feature does not work as expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, if I specify config file as in the attached
</span><br>
<span class="quotelev2">&gt;&gt; ompi_tuned_file.conf and execute the attached simple broadcast example as :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mpirun -n 16 --mca coll_tuned_use_dynamic_rules 1  --mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_tuned_dynamic_rules_filename ompi_tuned_file.conf   -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_base_verbose 1  bcast_example
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="https://mail.google.com/mail/u/0/?ui=2&amp;ik=e63390c27f&amp;view=att&amp;th=14d6e6bef2c6fbca&amp;attid=0.2&amp;disp=safe&amp;realattid=f_i9vxd25k1&amp;zw">https://mail.google.com/mail/u/0/?ui=2&amp;ik=e63390c27f&amp;view=att&amp;th=14d6e6bef2c6fbca&amp;attid=0.2&amp;disp=safe&amp;realattid=f_i9vxd25k1&amp;zw</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would expect that during run time the config file should be ignored as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it does not contain any configuration for communicator size 16. However, it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uses configuration for the last communicator for which the size is 5. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have attached tuned_output file for more information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Similar problem exists even if the configuration file contains config
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for communicator size 16. For example , I added to the configuration file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first communicator size 16 then communicator size 5. But it used
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration for communicator size 5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Another interesting thing is that if the second communicator size is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; greater than the first communicator in the config file then it seems to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work correctly. At least I tested it for the case where communicator one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; had size 16 and second had 55.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I used a development version of Open MPI (1.9.0a1). I forked it into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my own github (<a href="https://github.com/khalid-hasanov/ompi">https://github.com/khalid-hasanov/ompi</a>) and I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attached ompi_info outputs as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I have added some printfs into coll_tuned_decision_dynamic.c file to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; double check it:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if (alg) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;Men burdayam: alg=%d\n&quot;, alg);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             /* we have found a valid choice from the file based rules
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for this message size */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             return ompi_coll_tuned_bcast_intra_do_this (buff, count,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; datatype, root,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                         comm, module,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                         alg, faninout,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segsize);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         } /* found a method */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Khalid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26882.php">http://www.open-mpi.org/community/lists/users/2015/05/26882.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26885.php">http://www.open-mpi.org/community/lists/users/2015/05/26885.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26886.php">http://www.open-mpi.org/community/lists/users/2015/05/26886.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26887.php">http://www.open-mpi.org/community/lists/users/2015/05/26887.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26888/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26889.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26887.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26887.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26896.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
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
