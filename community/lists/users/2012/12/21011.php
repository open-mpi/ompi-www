<?
$subject_val = "Re: [OMPI users] Infiniband errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 09:50:19 2012" -->
<!-- isoreceived="20121219145019" -->
<!-- sent="Wed, 19 Dec 2012 09:50:13 -0500" -->
<!-- isosent="20121219145013" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband errors" -->
<!-- id="F5182EC6-419D-4BCB-8F87-079A24E999D0_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMvdAsKC43YgB_OO5C+MLY68w8mAqxYxjmkpZXA3Zy=7bHYCoA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband errors<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-19 09:50:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21012.php">Yann Droneaud: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>Previous message:</strong> <a href="21010.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="21005.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21012.php">Yann Droneaud: "Re: [OMPI users] Infiniband errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Seems like driver was not started. I would suggest to run lspci and check if the HCA is visible on HW level.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Dec 19, 2012, at 2:12 AM, Syed Ahsan Ali wrote:
Dear John
I found this output of ibstatus on some nodes (most probably the problem causing)
[root_at_compute-01-08 ~]# ibstatus
Fatal error:  device '*': sys files not found (/sys/class/infiniband/*/ports)
Does this show any hardware or software issue?
Thanks
On Wed, Nov 28, 2012 at 3:17 PM, John Hearns &lt;hearnsj_at_[hidden]&lt;mailto:hearnsj_at_[hidden]&gt;&gt; wrote:
Those diagnostics are from Openfabrics.
What type of infiniband card do you have?
What drivers are you using?
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21012.php">Yann Droneaud: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>Previous message:</strong> <a href="21010.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="21005.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21012.php">Yann Droneaud: "Re: [OMPI users] Infiniband errors"</a>
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
