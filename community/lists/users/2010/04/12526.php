<?
$subject_val = "[OMPI users] Problem running mpirun with ssh on remote nodes - Daemon did not report back when launched problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 17:00:35 2010" -->
<!-- isoreceived="20100402210035" -->
<!-- sent="Fri, 2 Apr 2010 14:00:30 -0700 (PDT)" -->
<!-- isosent="20100402210030" -->
<!-- name="rohan nigam" -->
<!-- email="locaterohan_at_[hidden]" -->
<!-- subject="[OMPI users] Problem running mpirun with ssh on remote nodes - Daemon did not report back when launched problem" -->
<!-- id="908254.62757.qm_at_web63703.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problem running mpirun with ssh on remote nodes - Daemon did not report back when launched problem<br>
<strong>From:</strong> rohan nigam (<em>locaterohan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 17:00:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12527.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12525.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12555.php">Jeff Squyres: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
<li><strong>Reply:</strong> <a href="12555.php">Jeff Squyres: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to run a simple hello world program before actually launching some very heavy load testing over the Xen SMP set up that I have. 
<br>
<p>I am trying to run this command over four different hosts, Dom0&#160; being the host where i am launching mpirun and rest three being xen guest domains.
<br>
<p>I have password less login setup across all the hosts. These hosts are actually on AMD Opteron dual socket Quad core with 2 cores assigned to each host/domain.
<br>
<p>mpirun --prefix /root/xentools/openmpi-gcc/ -mca
 plm_rsh_agent ssh --host localhost, xenguest1 -np 4 
/root/xentools/hello
<br>
<p>I am able to run mpirun successfully when I launch this command from one of the guests and also when i lauch this command on dom0 (localhost)&#160; alone. But when i launch mpirun from the Dom 0 on one or more guests there is no response from the guests and I am eventually having to kill the process which reports saying 
<br>
&#160;&#160;&#160;&#160;&#160; xenguest1 - daemon did not report back when launched
<br>
<p>Can someone point out where I am going wrong. I have seen people having similar problem in the list but no one posted how they got around this problem.
<br>
<p>Note: I also tried setting the default agent launcher to ssh. Also, on every host the directory structure is exactly the same and also the Library paths and paths are also set up properly and the executable is also present at the exact same location..
<br>
<p>Thanks,
<br>
Rohan Nigam
<br>
Research Asst, 
<br>
Univ. of Houston
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12526/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12527.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12525.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12555.php">Jeff Squyres: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
<li><strong>Reply:</strong> <a href="12555.php">Jeff Squyres: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
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
