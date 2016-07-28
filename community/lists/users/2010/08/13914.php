<?
$subject_val = "Re: [OMPI users] OpenMPI providing rank?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  4 16:21:05 2010" -->
<!-- isoreceived="20100804202105" -->
<!-- sent="Wed, 04 Aug 2010 13:19:11 -0700" -->
<!-- isosent="20100804201911" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI providing rank?" -->
<!-- id="4C59CB3F.2070103_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C55036E.1040408_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI providing rank?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-04 16:19:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13915.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13913.php">Eugene Loh: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13885.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
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
Eugene Loh wrote:
<blockquote cite="mid4C55036E.1040408@oracle.com" type="cite">
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
Yves Caniou wrote:
  <blockquote cite="mid201007281511.29517.yves.caniou@ens-lyon.fr"
 type="cite">
    <pre wrap="">Le Wednesday 28 July 2010 15:05:28, vous avez &eacute;crit&nbsp;:
    </pre>
    <blockquote type="cite">
      <pre wrap="">I am confused. I thought all you wanted to do is report out the binding of
the process - yes? Are you trying to set the affinity bindings yourself?

If the latter, then your script doesn't do anything that mpirun wouldn't
do, and doesn't do it as well. You would be far better off just adding
--bind-to-core to the mpirun cmd line.
      </pre>
    </blockquote>
    <pre wrap=""><!---->"mpirun -h" says that it is the default, so there is not even something to do?
I don't even have to add "--mca mpi_paffinity_alone 1" ?
    </pre>
  </blockquote>
Wow.&nbsp; I just tried "mpirun -h" and, yes, it claims that
"--bind-to-core" is the default.&nbsp; I believe this is wrong... or at
least "misleading."&nbsp; :^)</blockquote>
To close the loop on this, Ralph just fixed this error in r23537.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13915.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13913.php">Eugene Loh: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13885.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
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
