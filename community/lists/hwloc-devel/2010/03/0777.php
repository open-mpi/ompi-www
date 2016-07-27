<?
$subject_val = "[hwloc-devel] Change bind API.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 21 08:31:21 2010" -->
<!-- isoreceived="20100321123121" -->
<!-- sent="Sun, 21 Mar 2010 13:31:14 +0100" -->
<!-- isosent="20100321123114" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[hwloc-devel] Change bind API." -->
<!-- id="36ca99e91003210531h73cea6b9v782611cce17c8f39_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Change bind API.<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-21 08:31:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0778.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<li><strong>Previous message:</strong> <a href="0776.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0778.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<li><strong>Reply:</strong> <a href="0778.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>as some of you may know, I've once done some work to teach htop a
<br>
topology aware affinity setting dialog with the help the PLPA.
<br>
Recently Jeff pinged me that hwloc is looking for a topology aware top
<br>
like tool too. So I've start looking into the htop and hwloc code
<br>
again. What caught my current attention is the circumstance that the
<br>
get*cpubind interfaces always allocate a hwloc_cpuset_t. For a
<br>
top-like tool, which would like to print the current cpubind set for
<br>
each process at avery refresh, there should be only one cpuset_alloc
<br>
for the whole lifetime of the process, not for each refresh. Therefore
<br>
I would like to propose an interface change for these function, so
<br>
that the caller provide the to-be-filled cpuset, to reduce the
<br>
alloc/free frequency.
<br>
<p>Thanks.
<br>
<p>Regards,
<br>
Bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0778.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<li><strong>Previous message:</strong> <a href="0776.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0778.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<li><strong>Reply:</strong> <a href="0778.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
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
