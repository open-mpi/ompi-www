<?
$subject_val = "Re: [OMPI users] Partitioning problem set data";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 11:23:23 2010" -->
<!-- isoreceived="20100720152323" -->
<!-- sent="Tue, 20 Jul 2010 08:25:59 -0700" -->
<!-- isosent="20100720152559" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Partitioning problem set data" -->
<!-- id="4C45C007.90707_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinIDdlfS08n_QbRvUcbLSuZeKL7Ld0wEMP9puL-_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Partitioning problem set data<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 11:25:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13719.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13717.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13716.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13723.php">Bill Rankin: "Re: [OMPI users] Partitioning problem set data"</a>
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
The reason so many different distributions are described is because
what is optimal depends so much on your own case.<br>
<br>
Even if one disregards CYCLIC axes, there are still all those BLOCK
choices you mention.&nbsp; It isn't just a matter of choosing which axes
will be * since * is just a special case of BLOCK.&nbsp; You have to choose
the shape or aspect ratio of the subgrids.<br>
<br>
In some problems, it is desirable to minimize the surface-to-volume
ratio of each local subgrid so that interprocess communication costs
are minimized relative to the computational work each process has to
do.&nbsp; So, you would want to make each subgrid as "cubic" as possible.&nbsp;
Some sort of BLOCK,BLOCK,BLOCK.<br>
<br>
The "physics" may argue otherwise.&nbsp; Not all directions may be the
same.&nbsp; E.g., in atmospheric models, the vertical direction is very
different from the horizontal ones.<br>
<br>
Algorithms may also drive your choice.&nbsp; E.g., for multidimensional
FFTs, you might want one axis to be local.&nbsp; Then, you would transpose
axes to make another one local.<br>
<br>
You might also want the "innermost axis" (in the process's linear
address space) to be as long as possible to benefit from
software/hardware vectorization of computationally expensive loops.<br>
<br>
Lots of choices.&nbsp; It depends on your problem.<br>
<br>
Alexandru Blidaru wrote:
<blockquote
 cite="midAANLkTinIDdlfS08n_QbRvUcbLSuZeKL7Ld0wEMP9puL-@mail.gmail.com"
 type="cite">If there is an already existing implementation of the
*Block or Block* methods that splits the array and sends the individual
pieces to the&nbsp;proper&nbsp;nodes, can you point me to it please?&nbsp;<br>
  <br>
  <div class="gmail_quote">On Tue, Jul 20, 2010 at 9:52 AM, Alexandru
Blidaru <span dir="ltr">&lt;<a href="mailto:alexsb92@gmail.com">alexsb92@gmail.com</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">I
have a 3D array, which I need to split into equal n parts, so that each
part would run on a different node. I found the picture in the
attachment from this website (<a
 href="https://computing.llnl.gov/tutorials/parallel_comp/#DesignPartitioning"
 target="_blank">https://computing.llnl.gov/tutorials/parallel_comp/#DesignPartitioning</a>)&nbsp;on
the different ways to partition data. I am interested in the block
methods, as the cyclic methods wouldn't really work for me at all.
Obviously the *, BLOCK and the BLOCK, * methods would be really easy to
implement for 3D arrays, assuming that the 2D picture would be looking
at the array from the top. My question is if there are other better
ways to do it from a performance standpoint?</blockquote>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13719.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13717.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13716.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13723.php">Bill Rankin: "Re: [OMPI users] Partitioning problem set data"</a>
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
