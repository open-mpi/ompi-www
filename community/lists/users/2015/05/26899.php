<?
$subject_val = "Re: [OMPI users] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 04:10:04 2015" -->
<!-- isoreceived="20150521081004" -->
<!-- sent="Thu, 21 May 2015 09:09:51 +0100" -->
<!-- isosent="20150521080951" -->
<!-- name="Khalid Hasanov" -->
<!-- email="xalid.h_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI collectives algorithm selection" -->
<!-- id="CABb4ZDd4HGQG2Xj9xus3hvt8K3UfBkAXmzHuep-i+e4pNQJeWw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkXVeWVvHbes87VMbBOwmfvHgo63bMFPhn6C8yx297g=Pw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-21 04:09:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26900.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26898.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26898.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Thank you a lot. It makes more sense now.
<br>
<p>Best regards,
<br>
Khalid
<br>
<p>On Thu, May 21, 2015 at 4:14 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Khalid,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rule number zero is always selected by default. If the size you look
</span><br>
<span class="quotelev1">&gt; for (message or communicator) is larger than zero then another rule will be
</span><br>
<span class="quotelev1">&gt; selected, otherwise zero is the best selection. Same thing for communicator
</span><br>
<span class="quotelev1">&gt; and size, a consistent approach from my perspective.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't want to define the behavior for a particular range you should
</span><br>
<span class="quotelev1">&gt; set the algorithm of the range to zero, in which case the control will be
</span><br>
<span class="quotelev1">&gt; given back (for that particular range) to the default algorithm selection
</span><br>
<span class="quotelev1">&gt; function (the one hardcoded in Open MPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So going back to your example, if what you expect not to select an
</span><br>
<span class="quotelev1">&gt; algorithm for communicator sizes less than 5, add a rule for a communicator
</span><br>
<span class="quotelev1">&gt; size of zero for using the algorithm zero. In this case, the rule 0 will be
</span><br>
<span class="quotelev1">&gt; automatically the default until another one is matched.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 20, 2015 at 7:52 PM, Khalid Hasanov &lt;xalid.h_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your answer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another confusing thing is that, If I use some communicator size which
</span><br>
<span class="quotelev2">&gt;&gt; does not exist in the configuration file, some rule from the configuration
</span><br>
<span class="quotelev2">&gt;&gt; file will be used anyway.
</span><br>
<span class="quotelev2">&gt;&gt; For example, let say I have a configuration file with two communicator
</span><br>
<span class="quotelev2">&gt;&gt; sizes 5 and 16. If I execute mpirun with any number of processes from 2 up
</span><br>
<span class="quotelev2">&gt;&gt; to 15 then the rule for communicator of size 5 (the first in the config
</span><br>
<span class="quotelev2">&gt;&gt; file) is used. If I use mpirun with -n 16 or greater then the rule for 16
</span><br>
<span class="quotelev2">&gt;&gt; (the last in the config file) is going to be used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure if the exclusive approach you mentioned applies here as
</span><br>
<span class="quotelev2">&gt;&gt; well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Khalid
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, May 21, 2015 at 12:05 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Khalid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The way we designed these rules was to define intervals in a 2 dimension
</span><br>
<span class="quotelev3">&gt;&gt;&gt; space (communicator size, message size). You should imagine these rules as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exclusive, you match them in the order defined by the configuration file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and you use the algorithm defined by the last matching rule.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, May 19, 2015 at 9:30 PM, Khalid Hasanov &lt;xalid.h_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you a lot, it works now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just one minor thing I have seen now. If I use some communicator size
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which does not exist in the configuration file, it will still use the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configuration file. For example, if I use the previous config file with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -n 4 it will use the config for the comm size 5 (the first one). The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same happens if n is less than 16. If n &gt; 16 it will use the config for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communicator size 16 (the second one). I am writing this just in case it is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not expected behaviour.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks again.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Khalid
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, May 20, 2015 at 2:12 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Hi Khalid,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i checked the source code and it turns out rules must be ordered :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - first by communicator size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - second by message size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is attached an updated version of the ompi_tuned_file.conf you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; should use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 5/20/2015 8:39 AM, Khalid Hasanov wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am trying to use coll_tuned_dynamic_rules_filename option.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  I am not sure if I do everything right or not. But my impression is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that config file feature does not work as expected.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For example, if I specify config file as in the attached
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_tuned_file.conf and execute the attached simple broadcast example as :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   mpirun -n 16 --mca coll_tuned_use_dynamic_rules 1  --mca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; coll_tuned_dynamic_rules_filename ompi_tuned_file.conf   -mca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; coll_base_verbose 1  bcast_example
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;<a href="https://mail.google.com/mail/u/0/?ui=2&amp;ik=e63390c27f&amp;view=att&amp;th=14d6e6bef2c6fbca&amp;attid=0.2&amp;disp=safe&amp;realattid=f_i9vxd25k1&amp;zw">https://mail.google.com/mail/u/0/?ui=2&amp;ik=e63390c27f&amp;view=att&amp;th=14d6e6bef2c6fbca&amp;attid=0.2&amp;disp=safe&amp;realattid=f_i9vxd25k1&amp;zw</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I would expect that during run time the config file should be ignored
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; as it does not contain any configuration for communicator size 16. However,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it uses configuration for the last communicator for which the size is 5. I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have attached tuned_output file for more information.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Similar problem exists even if the configuration file contains
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config for communicator size 16. For example , I added to the configuration
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file first communicator size 16 then communicator size 5. But it used
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; configuration for communicator size 5.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Another interesting thing is that if the second communicator size
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is greater than the first communicator in the config file then it seems to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; work correctly. At least I tested it for the case where communicator one
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; had size 16 and second had 55.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  I used a development version of Open MPI (1.9.0a1). I forked it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; into my own github (<a href="https://github.com/khalid-hasanov/ompi">https://github.com/khalid-hasanov/ompi</a>) and I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have attached ompi_info outputs as well.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  I have added some printfs into coll_tuned_decision_dynamic.c file
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to double check it:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  if (alg) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         printf(&quot;Men burdayam: alg=%d\n&quot;, alg);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             /* we have found a valid choice from the file based
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rules for this message size */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             return ompi_coll_tuned_bcast_intra_do_this (buff, count,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; datatype, root,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                                         comm, module,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                                                         alg,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; faninout, segsize);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         } /* found a method */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Khalid
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26882.php">http://www.open-mpi.org/community/lists/users/2015/05/26882.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26885.php">http://www.open-mpi.org/community/lists/users/2015/05/26885.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26886.php">http://www.open-mpi.org/community/lists/users/2015/05/26886.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26896.php">http://www.open-mpi.org/community/lists/users/2015/05/26896.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26897.php">http://www.open-mpi.org/community/lists/users/2015/05/26897.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26898.php">http://www.open-mpi.org/community/lists/users/2015/05/26898.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26899/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26900.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26898.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26898.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
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
