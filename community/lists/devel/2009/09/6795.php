<?
$subject_val = "[OMPI devel] application hangs with multiple dup";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 08:58:56 2009" -->
<!-- isoreceived="20090908125856" -->
<!-- sent="Tue, 08 Sep 2009 15:00:01 +0200" -->
<!-- isosent="20090908130001" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="[OMPI devel] application hangs with multiple dup" -->
<!-- id="4AA65551.9030106_at_irisa.fr" -->
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
<strong>Subject:</strong> [OMPI devel] application hangs with multiple dup<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-08 09:00:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6796.php">Arthur Huillet: "[OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="6794.php">Chris Samuel: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6807.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6807.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm working on r21949 of the trunk.
<br>
<p>When I run on a single node with 4 processes this simple program calling 
<br>
2 times MPI_Comm_dup , the processes hang from time to time in the 2nd dup.
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Comm comm,comm2;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm_dup(MPI_COMM_WORLD,&amp;comm);
<br>
&nbsp;&nbsp;MPI_Comm_dup(comm,&amp;comm2);
<br>
....
<br>
<p>}
<br>
<p>Thomas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6796.php">Arthur Huillet: "[OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="6794.php">Chris Samuel: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6807.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>Reply:</strong> <a href="6807.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
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
