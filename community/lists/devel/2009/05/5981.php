<?
$subject_val = "[OMPI devel] MPI_Group_compare is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 18:21:05 2009" -->
<!-- isoreceived="20090507222105" -->
<!-- sent="Thu, 7 May 2009 15:20:39 -0700" -->
<!-- isosent="20090507222039" -->
<!-- name="Geoffrey Irving" -->
<!-- email="irving_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Group_compare is broken" -->
<!-- id="7f9d599f0905071520s3be9c9d7k7dec341b805c25dd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Group_compare is broken<br>
<strong>From:</strong> Geoffrey Irving (<em>irving_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-07 18:20:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5982.php">Edgar Gabriel: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>Previous message:</strong> <a href="5980.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5982.php">Edgar Gabriel: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>Reply:</strong> <a href="5982.php">Edgar Gabriel: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>MPI_Group_compare is broken in both 1.3.2 and svn.  Here is a patch
<br>
which fixes the problem:
<br>
<p>diff --git a/ompi/mpi/c/group_compare.c b/ompi/mpi/c/group_compare.c
<br>
index 0d199c1..89c83f9 100644
<br>
--- a/ompi/mpi/c/group_compare.c
<br>
+++ b/ompi/mpi/c/group_compare.c
<br>
@@ -106,6 +106,7 @@ int MPI_Group_compare(MPI_Group group1, MPI_Group
<br>
group2, int *result) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} /* end proc2 loop */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( match== -1 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;similar=false;
<br>
+            identical=false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} /* end proc1 loop */
<br>
<p>and a C test program which illustrates it:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc,char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group group;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_group(MPI_COMM_WORLD, &amp;group);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int r1[2] = {0, 1};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int r2[2] = {1, 2};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group g1, g2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group_incl(group, 2, r1, &amp;g1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group_incl(group, 2, r2, &amp;g2);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int cmp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group_compare(g1, g2, &amp;cmp);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;compare %d, ident %d\n&quot;, cmp, MPI_IDENT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;assert(cmp != MPI_IDENT);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>A quick glance through the history (thanks git log -pM --follow) seems
<br>
to indicate that MPI_Group_compare hasn't ever worked in OpenMPI, so
<br>
apparently I'm the only user of this function. :)
<br>
<p>Geoffrey
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5982.php">Edgar Gabriel: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>Previous message:</strong> <a href="5980.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5982.php">Edgar Gabriel: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>Reply:</strong> <a href="5982.php">Edgar Gabriel: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
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
