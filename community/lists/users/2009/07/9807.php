<?
$subject_val = "Re: [OMPI users] OpenMPI vs Intel MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 10:38:03 2009" -->
<!-- isoreceived="20090702143803" -->
<!-- sent="Thu, 02 Jul 2009 07:38:10 -0700" -->
<!-- isosent="20090702143810" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI vs Intel MPI" -->
<!-- id="4A4CC652.6030300_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990907020732o685d2ca5l66c37f86f54ea1bb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI vs Intel MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-02 10:38:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9808.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9806.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>In reply to:</strong> <a href="9805.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9806.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
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
Lenny Verkhovsky wrote:
<blockquote
 cite="mid453d39990907020732o685d2ca5l66c37f86f54ea1bb@mail.gmail.com"
 type="cite">
  <div dir="ltr">2.&nbsp;&nbsp; if you are using Open MPI 1.3 you dont have to
use mpi_leave_pinned 1 , since it's a default value</div>
</blockquote>
And if you're using "-mca btl self,sm" on a single node, I think
mpi_leave_pinned is immaterial (since it's for openib).<br>
<blockquote
 cite="mid453d39990907020732o685d2ca5l66c37f86f54ea1bb@mail.gmail.com"
 type="cite">
  <div dir="ltr">On Thu, Jul 2, 2009 at 4:47 PM, Swamy Kandadai <span
 dir="ltr">&lt;<a href="mailto:swamy@us.ibm.com">swamy@us.ibm.com</a>&gt;</span>
wrote:<br>
  <div class="gmail_quote">
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0px 0px 0px 0.8ex; padding-left: 1ex;">
    <div>
    <p>Here are muy options with OpenMPI:<br>
    <br>
mpirun -n 8 --machinefile hf --mca rmaps_rank_file_path rankfile --mca
coll_sm_info_num_procs 8 --mca btl self,sm -mca mpi_leave_pinned 1
./xhpl_ompi<br>
    <br>
Here is my rankfile:<br>
    <br>
at rankfile<br>
rank 0=i02n05 slot=0<br>
rank 1=i02n05 slot=1<br>
rank 2=i02n05 slot=2<br>
rank 3=i02n05 slot=3<br>
rank 4=i02n05 slot=4<br>
rank 5=i02n05 slot=5<br>
rank 6=i02n05 slot=6<br>
rank 7=i02n05 slot=7</p>
    </div>
  </blockquote>
  </div>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9808.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9806.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<li><strong>In reply to:</strong> <a href="9805.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9806.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel MPI"</a>
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
