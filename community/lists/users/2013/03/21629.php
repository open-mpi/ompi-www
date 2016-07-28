<?
$subject_val = "[OMPI users] OpenMPI + BLCR + LSF integration";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 30 04:01:56 2013" -->
<!-- isoreceived="20130330080156" -->
<!-- sent="Sat, 30 Mar 2013 11:01:31 +0300" -->
<!-- isosent="20130330080131" -->
<!-- name="Jorge Naranjo Bouzas" -->
<!-- email="jonarbo_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI + BLCR + LSF integration" -->
<!-- id="CACATR0aLpjXuO=OQOc0gNRLcdLbeHXBHejf1CCpQQcDDAb3X-Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI + BLCR + LSF integration<br>
<strong>From:</strong> Jorge Naranjo Bouzas (<em>jonarbo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-30 04:01:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21630.php">Patrick Bégou: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21628.php">Duke Nguyen: "[OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21640.php">Ralph Castain: "Re: [OMPI users] OpenMPI + BLCR + LSF integration"</a>
<li><strong>Reply:</strong> <a href="21640.php">Ralph Castain: "Re: [OMPI users] OpenMPI + BLCR + LSF integration"</a>
<li><strong>Maybe reply:</strong> <a href="21642.php">Ralph Castain: "Re: [OMPI users] OpenMPI + BLCR + LSF integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>We are having problems integrating BLCR + OpenMPI + LSF in a linux cluster
<br>
with Infiniband
<br>
<p>We compiled OpenMPI version 1.6 with gcc version 4.6.0 ... The configure
<br>
line was like:
<br>
<p>./configure --prefix=/opt/share/mpi-openmpi/1.6-gcc-4.6.0/el6/x86_64
<br>
--with-lsf --with-openib --with-blcr=/opt/share/blcrv0.8.4.app/
<br>
--with-ft=cr --enable-ft-thread --enable-opal-multi-threads --with-psm
<br>
<p>The problem I am having is that for some reason the ft-enable-cr features
<br>
freezes my mpi application when I use more that one node. The job is never
<br>
started ...
<br>
<p>We narrowed the search down and we noticed that when mpirun is used out of
<br>
the batch system, it works... but as soon as the mpirun detects the env
<br>
variable LSB_JOBID and assumes it is under LSF environment, the problem
<br>
arises... Additionally, if we use &quot;--mca plm rsh&quot; which should deactivate
<br>
the LSF integration , it works again, as expected...
<br>
<p>So, or guess is: or there is something misconfigured in our LSF or there is
<br>
a problem in the plm module inside openmpi ...
<br>
<p>Any hint???
<br>
<p>Thanks!!
<br>
<p>Jorge Naranjo
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21630.php">Patrick Bégou: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21628.php">Duke Nguyen: "[OMPI users] memory per core/process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21640.php">Ralph Castain: "Re: [OMPI users] OpenMPI + BLCR + LSF integration"</a>
<li><strong>Reply:</strong> <a href="21640.php">Ralph Castain: "Re: [OMPI users] OpenMPI + BLCR + LSF integration"</a>
<li><strong>Maybe reply:</strong> <a href="21642.php">Ralph Castain: "Re: [OMPI users] OpenMPI + BLCR + LSF integration"</a>
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
