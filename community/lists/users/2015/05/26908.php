<?
$subject_val = "[OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 24 04:24:25 2015" -->
<!-- isoreceived="20150524082425" -->
<!-- sent="Sun, 24 May 2015 18:24:19 +1000" -->
<!-- isosent="20150524082419" -->
<!-- name="XingFENG" -->
<!-- email="xingfeng_at_[hidden]" -->
<!-- subject="[OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine" -->
<!-- id="CAKY4v98RtygdZNiWhA_373SH0c2rz3LF3mKnf_7b_Rq_RTUX2A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine<br>
<strong>From:</strong> XingFENG (<em>xingfeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-24 04:24:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26909.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Previous message:</strong> <a href="26907.php">Gilles Gouaillardet: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26909.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Reply:</strong> <a href="26909.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, OPENMPI users,
<br>
<p>I have met some problem while doing experiments on Amazon EC2. I have
<br>
chosen instance type r3.2xlarge. As amazon claimed, it has 8 vcpu. Each
<br>
vCPU is a hyperthread of an Intel Xeon core for M3, C4, C3, R3, HS1, G2,
<br>
I2, and D2. (from *<a href="https://aws.amazon.com/ec2/instance-types/">https://aws.amazon.com/ec2/instance-types/</a>
<br>
&lt;<a href="https://aws.amazon.com/ec2/instance-types/">https://aws.amazon.com/ec2/instance-types/</a>&gt;)*
<br>
<p>However, when I try to run experiments on 4 machines, each with 8 slots.
<br>
OPENMPI reminds me that I am oversubscribing.
<br>
<p>Does anyone know the reason? Thanks in advance!
<br>
<p><p><pre>
-- 
Best Regards.
---
Xing FENG
PhD Candidate
Database Research Group
School of Computer Science and Engineering
University of New South Wales
NSW 2052, Sydney
Phone: (+61) 413 857 288
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26908/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26909.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Previous message:</strong> <a href="26907.php">Gilles Gouaillardet: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26909.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Reply:</strong> <a href="26909.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
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
