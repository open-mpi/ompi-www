<?
$subject_val = "Re: [OMPI users] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 21:47:00 2015" -->
<!-- isoreceived="20150520014700" -->
<!-- sent="Wed, 20 May 2015 10:47:04 +0900" -->
<!-- isosent="20150520014704" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI collectives algorithm selection" -->
<!-- id="555BE798.5020204_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CABb4ZDdZ75VNjZ0z=ok43F6R_z_45eh0Rz5NBu9cXeTtxaLfuQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-19 21:47:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26888.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26886.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26886.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26888.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="26888.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Khalid,
<br>
<p>this is probably not the intended behavior, i will followup on the devel 
<br>
mailing list.
<br>
<p>Thanks for reporting this
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 5/20/2015 10:30 AM, Khalid Hasanov wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you a lot, it works now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just one minor thing I have seen now. If I use some communicator size 
</span><br>
<span class="quotelev1">&gt; which does not exist in the configuration file, it will still use the 
</span><br>
<span class="quotelev1">&gt; configuration file. For example, if I use the previous config file 
</span><br>
<span class="quotelev1">&gt; with mpirun -n 4 it will use the config for the comm size 5 (the first 
</span><br>
<span class="quotelev1">&gt; one). The same happens if n is less than 16. If n &gt; 16 it will use the 
</span><br>
<span class="quotelev1">&gt; config for the communicator size 16 (the second one). I am writing 
</span><br>
<span class="quotelev1">&gt; this just in case it is not expected behaviour.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Khalid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 20, 2015 at 2:12 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Khalid,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i checked the source code and it turns out rules must be ordered :
</span><br>
<span class="quotelev1">&gt;     - first by communicator size
</span><br>
<span class="quotelev1">&gt;     - second by message size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Here is attached an updated version of the ompi_tuned_file.conf
</span><br>
<span class="quotelev1">&gt;     you should use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 5/20/2015 8:39 AM, Khalid Hasanov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hello,
</span><br>
<span class="quotelev2">&gt;&gt;     I am trying to use coll_tuned_dynamic_rules_filename option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I am not sure if I do everything right or not. But my impression
</span><br>
<span class="quotelev2">&gt;&gt;     is that config file feature does not work as expected.
</span><br>
<span class="quotelev2">&gt;&gt;     For example, if I specify config file as in the attached
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_tuned_file.conf and execute the attached simple broadcast
</span><br>
<span class="quotelev2">&gt;&gt;     example as :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun -n 16 --mca coll_tuned_use_dynamic_rules 1  --mca
</span><br>
<span class="quotelev2">&gt;&gt;         coll_tuned_dynamic_rules_filename ompi_tuned_file.conf   -mca
</span><br>
<span class="quotelev2">&gt;&gt;         coll_base_verbose 1  bcast_example
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="https://mail.google.com/mail/u/0/?ui=2&amp;ik=e63390c27f&amp;view=att&amp;th=14d6e6bef2c6fbca&amp;attid=0.2&amp;disp=safe&amp;realattid=f_i9vxd25k1&amp;zw">https://mail.google.com/mail/u/0/?ui=2&amp;ik=e63390c27f&amp;view=att&amp;th=14d6e6bef2c6fbca&amp;attid=0.2&amp;disp=safe&amp;realattid=f_i9vxd25k1&amp;zw</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I would expect that during run time the config file should be
</span><br>
<span class="quotelev2">&gt;&gt;         ignored as it does not contain any configuration for
</span><br>
<span class="quotelev2">&gt;&gt;         communicator size 16. However, it uses configuration for the
</span><br>
<span class="quotelev2">&gt;&gt;         last communicator for which the size is 5. I have attached
</span><br>
<span class="quotelev2">&gt;&gt;         tuned_output file for more information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Similar problem exists even if the configuration file
</span><br>
<span class="quotelev2">&gt;&gt;         contains config for communicator size 16. For example , I
</span><br>
<span class="quotelev2">&gt;&gt;         added to the configuration file first communicator size 16
</span><br>
<span class="quotelev2">&gt;&gt;         then communicator size 5. But it used configuration for
</span><br>
<span class="quotelev2">&gt;&gt;         communicator size 5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Another interesting thing is that if the second communicator
</span><br>
<span class="quotelev2">&gt;&gt;         size is greater than the first communicator in the config
</span><br>
<span class="quotelev2">&gt;&gt;         file then it seems to work correctly. At least I tested it
</span><br>
<span class="quotelev2">&gt;&gt;         for the case where communicator one had size 16 and second
</span><br>
<span class="quotelev2">&gt;&gt;         had 55.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I used a development version of Open MPI (1.9.0a1). I forked
</span><br>
<span class="quotelev2">&gt;&gt;         it into my own github
</span><br>
<span class="quotelev2">&gt;&gt;         (<a href="https://github.com/khalid-hasanov/ompi">https://github.com/khalid-hasanov/ompi</a>) and I have attached
</span><br>
<span class="quotelev2">&gt;&gt;         ompi_info outputs as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I have added some printfs into coll_tuned_decision_dynamic.c
</span><br>
<span class="quotelev2">&gt;&gt;         file to double check it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         if (alg) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;Men burdayam: alg=%d\n&quot;, alg);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /* we have found a valid choice from the file based rules for
</span><br>
<span class="quotelev2">&gt;&gt;         this message size */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         return ompi_coll_tuned_bcast_intra_do_this (buff, count,
</span><br>
<span class="quotelev2">&gt;&gt;         datatype, root,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         comm, module,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         alg, faninout, segsize);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 } /* found a method */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;         Khalid
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/05/26882.php">http://www.open-mpi.org/community/lists/users/2015/05/26882.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/05/26885.php">http://www.open-mpi.org/community/lists/users/2015/05/26885.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26886.php">http://www.open-mpi.org/community/lists/users/2015/05/26886.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26887/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26888.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26886.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26886.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26888.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="26888.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
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
