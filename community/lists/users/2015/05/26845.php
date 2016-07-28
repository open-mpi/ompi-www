<?
$subject_val = "[OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 02:24:56 2015" -->
<!-- isoreceived="20150507062456" -->
<!-- sent="Wed, 6 May 2015 23:24:53 -0700" -->
<!-- isosent="20150507062453" -->
<!-- name="Rahul Yadav" -->
<!-- email="roborahul_at_[hidden]" -->
<!-- subject="[OMPI users] Error: &amp;quot;all nodes which are allocated for this job are already filled&amp;quot;" -->
<!-- id="CAEB3Xu4Cy4=vHaCbQSf1Wh9iKfwrODLEm2pziYCe7DjRb8H-7A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;<br>
<strong>From:</strong> Rahul Yadav (<em>roborahul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-07 02:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26846.php">Steven Vancoillie: "Re: [OMPI users] performance issue mpi_init"</a>
<li><strong>Previous message:</strong> <a href="26844.php">Kaushal Kumar: "Re: [OMPI users] Support for progress threads in 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26847.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Reply:</strong> <a href="26847.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We have been trying to run MPI jobs (consisting of two different binaries,
<br>
one each ) in two nodes,  using hostfile option as following
<br>
<p>mpirun --allow-run-as-root --mca pml yalla -n 1 --hostfile /root/host1
<br>
/root/app2 : -n 1 --hostfile /root/host2 /root/backend
<br>
<p>We are doing this in chroot environment. We have set the HPCX env in
<br>
chroot'ed environment itself. /root/host1 and /root/host2 (inside chroot
<br>
env) contains IPs of two nodes respectively.
<br>
<p>We are getting following error
<br>
<p>&quot; all nodes which are allocated for this job are already filled &quot;
<br>
<p>However when we use chroot but don't use hostfile option (both processes
<br>
run in same node) OR we use hostfile option but outside chroot, it works.
<br>
<p>Anyone has any idea if chroot can cause above error and how to solve it ?
<br>
<p>Thanks
<br>
Rahul
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26845/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26846.php">Steven Vancoillie: "Re: [OMPI users] performance issue mpi_init"</a>
<li><strong>Previous message:</strong> <a href="26844.php">Kaushal Kumar: "Re: [OMPI users] Support for progress threads in 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26847.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Reply:</strong> <a href="26847.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
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
