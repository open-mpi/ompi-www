<?
$subject_val = "Re: [OMPI users] mpi problems,";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 13:17:21 2011" -->
<!-- isoreceived="20110406171721" -->
<!-- sent="Wed, 06 Apr 2011 10:17:13 -0700" -->
<!-- isosent="20110406171713" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems," -->
<!-- id="4D9CA019.9010708_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTim1nvNdJh+xtTTM7BWmR7-o=R8Njg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi problems,<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 13:17:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16161.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16159.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16159.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16161.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Nehemiah Dacres wrote:
<blockquote cite="midBANLkTim1nvNdJh+xtTTM7BWmR7-o=R8Njg@mail.gmail.com"
 type="cite">also, I'm not sure if I'm reading the results right.
According to the last run, did using the sun compilers (update 1 )&nbsp;
result in higher performance with sunct? <br>
  <br>
  <div class="gmail_quote">On Wed, Apr 6, 2011 at 11:38 AM, Nehemiah
Dacres <span dir="ltr">&lt;<a href="mailto:dacresni@slu.edu">dacresni@slu.edu</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;"><span
 style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: normal; font-style: normal; text-decoration: none; vertical-align: baseline;">this
first test was run as a base case to see if MPI works., the sedcond run
is to see the speed up using OpenIB provides</span><br>
    <span
 style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: normal; font-style: normal; text-decoration: none; vertical-align: baseline;">[jian@therock
~]$ mpirun -machinefile list /opt/iba/src/mpi_apps/mpi_stress/mpi_stress</span><br>
    <span
 style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: normal; font-style: normal; text-decoration: none; vertical-align: baseline;">[jian@therock
~]$ mpirun -mca orte_base_help_aggregate btl,openib,self, -machinefile
list /opt/iba/src/mpi_apps/mpi_stress/mpi_stress</span><span
 style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: normal; font-style: normal; text-decoration: none; vertical-align: baseline;"></span><span
 style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: normal; font-style: normal; text-decoration: none; vertical-align: baseline;"></span><span
 style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: normal; font-style: normal; text-decoration: none; vertical-align: baseline;"></span><br>
    <span
 style="font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: normal; font-style: normal; text-decoration: none; vertical-align: baseline;">[jian@therock
~]$ mpirun -mca orte_base_help_aggregate btl,openib,self, -machinefile
list sunMpiStress</span></blockquote>
  </div>
</blockquote>
I don't think the command-line syntax for the MCA parameters is quite
right.&nbsp; I suspect it should be<br>
<br>
--mca orte_base_help_aggregate 1 --mca btl openib,self<br>
<br>
Further, they are unnecessary.&nbsp; The first is on by default and the
second is unnecessary since OMPI finds the fastest interconnect
automatically (presumably openib,self, with sm if there are on-node
processes).&nbsp; Another way of setting MCA parameters is with environment
variables:<br>
<br>
setenv OMPI_MCA_orte_base_help_aggregate 1<br>
setenv OMPI_MCA_btl openib,self<br>
<br>
since then you can use ompi_info to check your settings.<br>
<br>
Anyhow, it looks like your runs are probably all using openib and I
don't know why the last one is 2x faster.&nbsp; If you're testing the
interconnect, the performance should be limited by the IB (more or
less) and not by the compiler.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16161.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16159.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16159.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16161.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
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
