<?
$subject_val = "Re: [OMPI devel] MPI_Group_compare is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 18:38:18 2009" -->
<!-- isoreceived="20090507223818" -->
<!-- sent="Thu, 07 May 2009 17:38:21 -0500" -->
<!-- isosent="20090507223821" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Group_compare is broken" -->
<!-- id="4A0362DD.7070103_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7f9d599f0905071520s3be9c9d7k7dec341b805c25dd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Group_compare is broken<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-07 18:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5983.php">Geoffrey Irving: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>Previous message:</strong> <a href="5981.php">Geoffrey Irving: "[OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>In reply to:</strong> <a href="5981.php">Geoffrey Irving: "[OMPI devel] MPI_Group_compare is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5983.php">Geoffrey Irving: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>Reply:</strong> <a href="5983.php">Geoffrey Irving: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you are right. At first I thought that the loop above that should catch 
<br>
that condition but it doesn't. I will apply your patch and file a CMR 
<br>
for the 1.3 branch...
<br>
<p>Thanks for the bug report and the fix right away...
<br>
Edgar
<br>
<p>Geoffrey Irving wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Group_compare is broken in both 1.3.2 and svn.  Here is a patch
</span><br>
<span class="quotelev1">&gt; which fixes the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mpi/c/group_compare.c b/ompi/mpi/c/group_compare.c
</span><br>
<span class="quotelev1">&gt; index 0d199c1..89c83f9 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mpi/c/group_compare.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mpi/c/group_compare.c
</span><br>
<span class="quotelev1">&gt; @@ -106,6 +106,7 @@ int MPI_Group_compare(MPI_Group group1, MPI_Group
</span><br>
<span class="quotelev1">&gt; group2, int *result) {
</span><br>
<span class="quotelev1">&gt;          } /* end proc2 loop */
</span><br>
<span class="quotelev1">&gt;          if( match== -1 ) {
</span><br>
<span class="quotelev1">&gt;              similar=false;
</span><br>
<span class="quotelev1">&gt; +            identical=false;
</span><br>
<span class="quotelev1">&gt;              break;
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      } /* end proc1 loop */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and a C test program which illustrates it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc,char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Group group;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_group(MPI_COMM_WORLD, &amp;group);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     int r1[2] = {0, 1};
</span><br>
<span class="quotelev1">&gt;     int r2[2] = {1, 2};
</span><br>
<span class="quotelev1">&gt;     MPI_Group g1, g2;
</span><br>
<span class="quotelev1">&gt;     MPI_Group_incl(group, 2, r1, &amp;g1);
</span><br>
<span class="quotelev1">&gt;     MPI_Group_incl(group, 2, r2, &amp;g2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     int cmp;
</span><br>
<span class="quotelev1">&gt;     MPI_Group_compare(g1, g2, &amp;cmp);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;compare %d, ident %d\n&quot;, cmp, MPI_IDENT);
</span><br>
<span class="quotelev1">&gt;     assert(cmp != MPI_IDENT);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A quick glance through the history (thanks git log -pM --follow) seems
</span><br>
<span class="quotelev1">&gt; to indicate that MPI_Group_compare hasn't ever worked in OpenMPI, so
</span><br>
<span class="quotelev1">&gt; apparently I'm the only user of this function. :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Geoffrey
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5983.php">Geoffrey Irving: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>Previous message:</strong> <a href="5981.php">Geoffrey Irving: "[OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>In reply to:</strong> <a href="5981.php">Geoffrey Irving: "[OMPI devel] MPI_Group_compare is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5983.php">Geoffrey Irving: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
<li><strong>Reply:</strong> <a href="5983.php">Geoffrey Irving: "Re: [OMPI devel] MPI_Group_compare is broken"</a>
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
