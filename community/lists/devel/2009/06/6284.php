<?
$subject_val = "Re: [OMPI devel] why does --rankfile need hostlist?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 16:21:39 2009" -->
<!-- isoreceived="20090619202139" -->
<!-- sent="Fri, 19 Jun 2009 13:21:43 -0700" -->
<!-- isosent="20090619202143" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] why does --rankfile need hostlist?" -->
<!-- id="4A3BF357.3030300_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0906181809g7603a542n9bc2049a05f926d9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] why does --rankfile need hostlist?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 16:21:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6285.php">Eugene Loh: "[OMPI devel] OMPI performance competitiveness"</a>
<li><strong>Previous message:</strong> <a href="6283.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6277.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6287.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6287.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
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
Ralph Castain wrote:
<blockquote
 cite="mid71d2d8cc0906181809g7603a542n9bc2049a05f926d9@mail.gmail.com"
 type="cite">The two files have a slightly different format</blockquote>
Agreed.<br>
<blockquote
 cite="mid71d2d8cc0906181809g7603a542n9bc2049a05f926d9@mail.gmail.com"
 type="cite">and completely different meaning.</blockquote>
Somewhat agreed.&nbsp; They're both related to mapping processes onto a
cluster.<br>
<blockquote
 cite="mid71d2d8cc0906181809g7603a542n9bc2049a05f926d9@mail.gmail.com"
 type="cite">The hostfile specifies how many slots are on a node. The
rankfile specifies a rank and what node/slot it is to be mapped onto.</blockquote>
Agreed.<br>
<blockquote
 cite="mid71d2d8cc0906181809g7603a542n9bc2049a05f926d9@mail.gmail.com"
 type="cite">
  <div>Rankfiles can use relative node indexing and refer to nodes
received from a resource manager - i.e., without any hostfile.</div>
</blockquote>
This is the main part I'm concerned about.&nbsp; E.g.,<br>
<br>
% cat rankfile<br>
rank 0=node0 slot=0<br>
rank 1=node1 slot=0<br>
% mpirun -np 2 -rf rankfile ./a.out<br>
--------------------------------------------------------------------------<br>
Rankfile claimed host node1 that was not allocated or oversubscribed
it's slots:<br>
<br>
--------------------------------------------------------------------------<br>
[node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
rmaps_rank_file.c at line 107<br>
[node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
base/rmaps_base_map_job.c at line 86<br>
[node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
base/plm_base_launch_support.c at line 86<br>
[node0:14611] [[61560,0],0] ORTE_ERROR_LOG: Bad parameter in file
plm_rsh_module.c at line 1016<br>
% mpirun -np 2 -host node0,node1 -rf rankfile ./a.out<br>
0 on node0<br>
1 on node1<br>
done<br>
<br>
It seems to me that the rankfile has sufficient information to express
what I want it to do.&nbsp; But mpirun won't accept this.&nbsp; To fix this, I
have to, e.g., supply/maintain/specify redundant information in a
hostfile or host list.<br>
<blockquote
 cite="mid71d2d8cc0906181809g7603a542n9bc2049a05f926d9@mail.gmail.com"
 type="cite">
  <div>So the files are intentionally quite different. Trying to
combine them would be rather ugly.<br>
  </div>
</blockquote>
Right.&nbsp; And my issue is that I'm forced to use both when I only want
rankfile functionality.<br>
<blockquote
 cite="mid71d2d8cc0906181809g7603a542n9bc2049a05f926d9@mail.gmail.com"
 type="cite">
  <div>
  <div class="gmail_quote">On Thu, Jun 18, 2009 at 1:52 PM, Eugene Loh <span
 dir="ltr">&lt;<a href="mailto:Eugene.Loh@sun.com">Eugene.Loh@sun.com</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">In
order to use "mpirun --rankfile", I also need to specify
hosts/hostlist. &nbsp;But that information is redundant with what I provide
in the rankfile. &nbsp;So, from a user's point of view, this strikes me as
broken. &nbsp;Yes? &nbsp;Should I file a ticket, or am I missing something here
about this functionality?<br>
  </blockquote>
  </div>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6285.php">Eugene Loh: "[OMPI devel] OMPI performance competitiveness"</a>
<li><strong>Previous message:</strong> <a href="6283.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6277.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6287.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Reply:</strong> <a href="6287.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
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
