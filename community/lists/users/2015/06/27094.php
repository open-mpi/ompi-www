<?
$subject_val = "[OMPI users] orted segmentation fault in pmix on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 10:26:24 2015" -->
<!-- isoreceived="20150611142624" -->
<!-- sent="Thu, 11 Jun 2015 14:26:06 +0000" -->
<!-- isosent="20150611142606" -->
<!-- name="Leiter, Kenneth W CIV USARMY ARL (US)" -->
<!-- email="kenneth.w.leiter2.civ_at_[hidden]" -->
<!-- subject="[OMPI users] orted segmentation fault in pmix on master" -->
<!-- id="3338D43B4B3406468B642ACE86F41E7E3AE80139_at_ucolhpks.easf.csd.disa.mil" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] orted segmentation fault in pmix on master<br>
<strong>From:</strong> Leiter, Kenneth W CIV USARMY ARL (US) (<em>kenneth.w.leiter2.civ_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-11 10:26:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27095.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27093.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27095.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27095.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am attempting to use the openmpi development master for a code that uses
<br>
dynamic process management (i.e. MPI_Comm_spawn) on our Cray XC40 at the
<br>
Army Research Laboratory. After reading through the mailing list I came to
<br>
the conclusion that the master branch is the only hope for getting this to
<br>
work on the newer Cray machines.
<br>
<p>To test I am using the cpi-master.c cpi-worker.c example. The test works
<br>
when executing on a small number of processors, five or less, but begins to
<br>
fail with segmentation faults in orted when using more processors. Even with
<br>
five or fewer processors, I am spreading the computation to more than one
<br>
node. I am using the cray ugni btl through the alps scheduler.
<br>
<p>I get a core file from orted and have the seg fault tracked down to
<br>
pmix_server_process_msgs.c:420 where req-&gt;proxy is NULL. I have tried
<br>
reading the code to understand how this happens, but am unsure. I do see
<br>
that in the if statement where I take the else branch, the other branch
<br>
specifically checks &quot;if (NULL == req-&gt;proxy)&quot; - however, no such check is
<br>
done the the else branch.
<br>
<p>I have debug output dumped for the failing runs. I can provide the output
<br>
along with ompi_info output and config.log to anyone who is interested.
<br>
<p>- Ken Leiter
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27094/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27095.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27093.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27095.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27095.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
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
