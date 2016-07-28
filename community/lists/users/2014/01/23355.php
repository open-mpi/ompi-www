<?
$subject_val = "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 13 20:23:18 2014" -->
<!-- isoreceived="20140114012318" -->
<!-- sent="Tue, 14 Jan 2014 02:23:14 +0100" -->
<!-- isosent="20140114012314" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards" -->
<!-- id="6755E9EF-B341-4594-91FE-9555C9E52D36_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CEF9C601.16C9A%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-13 20:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23356.php">Jed Brown: "[OMPI users] CXX=no in config.status, breaks mpic++ wrapper"</a>
<li><strong>Previous message:</strong> <a href="23354.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<li><strong>In reply to:</strong> <a href="23354.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Victor,
<br>
<p>If the MX library supports a mapper, Open MPI takes provide selective hardware activation. Look at the MCA parameters supported by the MX devices to get more info (ompi_info &#151;mca btl mx). The one that is of interest in this particular case is mx_if_include, allowing MX based jobs to only use the Myrinet card that has a mapper matching the provided key. You should set this MCA parameter to the last 6 digits of your mapper MAC (&#151;mca btl mx_if_include abcdef).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jan 14, 2014, at 00:36 , Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Victor -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think our multi-port support with MX is particularly well tested (I know I don't test that path).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like you might be able to work around the problem by setting -mca mtl_mx_endpoint_num 1 on the mpirun command line, which will only use the first port found.  But I could be wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/9/14 5:02 PM, &quot;Victor Prosolin&quot; &lt;Victor.Prosolin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; H,
</span><br>
<span class="quotelev2">&gt;&gt; Our cluster has servers with either a single port or a dual port Myrinet card. In case of a dual card, only one port is connected to the Myrinet switch. The OpenMPI library is configured with &#147;--with-mx=&#133;&#148; option and it works fine when I submit jobs to single port servers only. However, when I try to include a server with a dual port card, I get a bunch of errors like the following:
</span><br>
<span class="quotelev2">&gt;&gt; [compute-08:17788] mx_connect fail for unknown 60dd464f9d nic_id with key aaaaffff (error Destination NIC not found in network table)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 60dd464f9d is the wrong MAC address corresponding to port 1 (not connected) when port 0 is connected to the switch and has MAC  60dd464f9c.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; This is how (try to) I run the job:
</span><br>
<span class="quotelev2">&gt;&gt; 1.       mpiexec -np 32 -host compute-08,compute-17,compute-18,compute-16 -mca mtl mx --mca pml cm ./wrf.exe
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; 2.       Using a similar command but via Sun Grid Engine.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; The OS is Centos 6.4, 64bit. OpenMPI 1.6.5 compiled from the official src rpm with gcc 4.4.7, MX library 1.2.16 manually compiled. Again, this configuration works fine when only single port servers are used.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to tell OpenMPI to stick to the one port that is connected? I haven&#146;t found any options through ompi_info or via google&#133; Any help will be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt; Victor.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23355/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23356.php">Jed Brown: "[OMPI users] CXX=no in config.status, breaks mpic++ wrapper"</a>
<li><strong>Previous message:</strong> <a href="23354.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<li><strong>In reply to:</strong> <a href="23354.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
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
