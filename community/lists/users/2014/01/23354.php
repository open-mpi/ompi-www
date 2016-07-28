<?
$subject_val = "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 13 18:37:06 2014" -->
<!-- isoreceived="20140113233706" -->
<!-- sent="Mon, 13 Jan 2014 23:36:44 +0000" -->
<!-- isosent="20140113233644" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards" -->
<!-- id="CEF9C601.16C9A%bwbarre_at_sandia.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="3ee5731d1e04446bad7d3059a8becc9d_at_GUE-W12S-MBX2.rwdigroup.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-13 18:36:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23355.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<li><strong>Previous message:</strong> <a href="23353.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>In reply to:</strong> <a href="23348.php">Victor Prosolin: "[OMPI users] OpenMPI with dual port Myrinet cards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23355.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<li><strong>Reply:</strong> <a href="23355.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Victor -
<br>
<p>I don't think our multi-port support with MX is particularly well tested (I know I don't test that path).
<br>
<p>It looks like you might be able to work around the problem by setting -mca mtl_mx_endpoint_num 1 on the mpirun command line, which will only use the first port found.  But I could be wrong.
<br>
<p>Brian
<br>
<p>On 1/9/14 5:02 PM, &quot;Victor Prosolin&quot; &lt;Victor.Prosolin_at_[hidden]&lt;mailto:Victor.Prosolin_at_[hidden]&gt;&gt; wrote:
<br>
<p>H,
<br>
Our cluster has servers with either a single port or a dual port Myrinet card. In case of a dual card, only one port is connected to the Myrinet switch. The OpenMPI library is configured with &#147;--with-mx=&#133;&#148; option and it works fine when I submit jobs to single port servers only. However, when I try to include a server with a dual port card, I get a bunch of errors like the following:
<br>
[compute-08:17788] mx_connect fail for unknown 60dd464f9d nic_id with key aaaaffff (error Destination NIC not found in network table)
<br>
<p>60dd464f9d is the wrong MAC address corresponding to port 1 (not connected) when port 0 is connected to the switch and has MAC  60dd464f9c.
<br>
<p>This is how (try to) I run the job:
<br>
<p>1.       mpiexec -np 32 -host compute-08,compute-17,compute-18,compute-16 -mca mtl mx --mca pml cm ./wrf.exe
<br>
or
<br>
<p>2.       Using a similar command but via Sun Grid Engine.
<br>
<p>The OS is Centos 6.4, 64bit. OpenMPI 1.6.5 compiled from the official src rpm with gcc 4.4.7, MX library 1.2.16 manually compiled. Again, this configuration works fine when only single port servers are used.
<br>
<p>Is there a way to tell OpenMPI to stick to the one port that is connected? I haven&#146;t found any options through ompi_info or via google&#133; Any help will be greatly appreciated.
<br>
<p>Sincerely,
<br>
Victor.
<br>
<p><p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23354/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23355.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<li><strong>Previous message:</strong> <a href="23353.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>In reply to:</strong> <a href="23348.php">Victor Prosolin: "[OMPI users] OpenMPI with dual port Myrinet cards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23355.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<li><strong>Reply:</strong> <a href="23355.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
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
