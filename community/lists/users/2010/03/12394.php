<?
$subject_val = "[OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 16:42:17 2010" -->
<!-- isoreceived="20100322204217" -->
<!-- sent="Mon, 22 Mar 2010 13:41:51 -0700" -->
<!-- isosent="20100322204151" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E7069D10D5_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20users]%20mpirun%20with%20-am%20ft-enable-cr%20option%20runs%20slow%20if%20hyperthreading%20is%20disabled"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-03-22 16:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12395.php">fengguang tian: "[OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12393.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12450.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
<li><strong>Reply:</strong> <a href="12450.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>&nbsp;
<br>
<p>If the run my compute intensive openmpi based program using regular
<br>
invocation of mpirun (ie; mpirun -host &lt;hostnamelist&gt; -np &lt;number of
<br>
cores&gt;), it gets completed in few seconds but if I run the same program
<br>
with &quot;-am ft-enable-cr&quot; option, the program takes 10x time to complete.
<br>
<p>&nbsp;
<br>
<p>If I enable hyperthreading on my cluster nodes and then call mpirun with
<br>
&quot;-am ft-enable-cr&quot; option, the program gets completed with few
<br>
additional seconds than the normal mpirun!!
<br>
<p>&nbsp;
<br>
<p>How can I improve the performance of mpirun with &quot;-am ft-enable-cr&quot;
<br>
option when I disable hyperthreading on my cluster nodes? Any pointers
<br>
will be really useful.
<br>
<p>&nbsp;
<br>
<p>FYI, I am using openmpi 1.3.4 library and BLCR 0.8.2. Cluster nodes are
<br>
Nehalem based nodes with  8 cores.
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
Anand
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12394/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12395.php">fengguang tian: "[OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12393.php">Richard Treumann: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12450.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
<li><strong>Reply:</strong> <a href="12450.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
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
