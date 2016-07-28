<?
$subject_val = "[OMPI users] Re :Re: Linpack Benchmark and File Descriptor Limits";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 02:21:05 2008" -->
<!-- isoreceived="20080919062105" -->
<!-- sent="19 Sep 2008 06:20:53 -0000" -->
<!-- isosent="20080919062053" -->
<!-- name="Neeraj Chourasia" -->
<!-- email="neeraj_ch1_at_[hidden]" -->
<!-- subject="[OMPI users] Re :Re: Linpack Benchmark and File Descriptor Limits" -->
<!-- id="1221781757.S.7852.552.f4mail-235-217.rediffmail.com.1221805252.26182_at_webmail.rediffmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Re :Re: Linpack Benchmark and File Descriptor Limits<br>
<strong>From:</strong> Neeraj Chourasia (<em>neeraj_ch1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 02:20:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6610.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6608.php">Robert Kubrick: "[OMPI users] MPI_Win_unlock error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,&amp;nbsp;&amp;nbsp;&amp;nbsp; With openmpi-1.3,&amp;nbsp; new mca feature is introduced namely --mca routed binomial. This ensures out of band communication to happen in binomial fashion and reduces the net socket opening and hence solves file open issues.-NeerajOn Thu, 18 Sep 2008 16:46:23 -0700 Open MPI Users  wrote  I'm just running it using mpirun from the command line. Thanks for the reply.        On Thu, Sep 18, 2008 at 4:35 PM, John Hearns  wrote:            2008/9/18 Alex Wolfe       Hello,    I am trying to run the HPL benchmarking software on a new 1024 core cluster that we have set up. Unfortunately I'm hitting the &quot;mca_oob_tcp_accept: accept() failed: Too many open files (24)&quot; error known in verson 1.2 of openmpi. No matter what I set the file-descriptor limit for my account to, I am still limited to only 808 or so processes. Does anyone have any suggestions?          Are you running the Linpack via a batch system or just using mpirun from the command line?    If via a batch system, looks for FAQs on how <br>
to set the resource limits for that batch system.              _______________________________________________    users mailing list    users_at_[hidden]    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>            
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6609/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6610.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6608.php">Robert Kubrick: "[OMPI users] MPI_Win_unlock error"</a>
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
