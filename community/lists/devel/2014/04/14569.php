<?
$subject_val = "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 19:32:55 2014" -->
<!-- isoreceived="20140421233255" -->
<!-- sent="Mon, 21 Apr 2014 19:32:50 -0400" -->
<!-- isosent="20140421233250" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()" -->
<!-- id="62C48832-229F-4387-A2A6-04A33E4D79B5_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwCT_Jc26xpGrRoSJ_3usj36iv98jM30c9qN7XwHwj5PPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-21 19:32:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14570.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Previous message:</strong> <a href="14568.php">George Bosilca: "Re: [OMPI devel] querying Op commutativity for predefined reduction operations."</a>
<li><strong>In reply to:</strong> <a href="14565.php">Lisandro Dalcin: "[OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14570.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Reply:</strong> <a href="14570.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r31473 should fix this issue.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Apr 21, 2014, at 10:05 , Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm not sure this is actually a bug, but the difference may surprise
</span><br>
<span class="quotelev1">&gt; users. It seems that the implementation of
</span><br>
<span class="quotelev1">&gt; MPI_Ireduce_scatter(MPI_IN_PLACE,...) (ab?)uses the recvbuf to compute
</span><br>
<span class="quotelev1">&gt; the intermediate reduction, while MPI_Reduce_scatter(MPI_IN_PLACE,...)
</span><br>
<span class="quotelev1">&gt; does not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Look at the following code (setup to be run in up to 16 processes).
</span><br>
<span class="quotelev1">&gt; While MPI_Reduce_scatter() does not change the second and following
</span><br>
<span class="quotelev1">&gt; elements of recvbuf, the nonblocking variant do modify the second and
</span><br>
<span class="quotelev1">&gt; following entries in some ranks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ cat ireduce_scatter.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int i,size,rank;
</span><br>
<span class="quotelev1">&gt;  int recvbuf[] = {1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1};
</span><br>
<span class="quotelev1">&gt;  int rcounts[] = {1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1};
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  if (size &gt; 16) MPI_Abort(MPI_COMM_WORLD,1);
</span><br>
<span class="quotelev1">&gt; #ifndef NBCOLL
</span><br>
<span class="quotelev1">&gt; #define NBCOLL 1
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #if NBCOLL
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_Request request;
</span><br>
<span class="quotelev1">&gt;    MPI_Ireduce_scatter(MPI_IN_PLACE, recvbuf, rcounts, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                        MPI_SUM, MPI_COMM_WORLD, &amp;request);
</span><br>
<span class="quotelev1">&gt;    MPI_Wait(&amp;request,MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;  MPI_Reduce_scatter(MPI_IN_PLACE, recvbuf, rcounts, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                     MPI_SUM, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;  printf(&quot;[%d] rbuf[%d]=%2d  expected:%2d\n&quot;, rank, 0, recvbuf[i], size);
</span><br>
<span class="quotelev1">&gt;  for (i=1; i&lt;size; i++) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;[%d] rbuf[%d]=%2d  expected:%2d\n&quot;, rank, i, recvbuf[i], 1);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ mpicc -DNBCOLL=0 ireduce_scatter.c
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ mpiexec -n 3 ./a.out | sort
</span><br>
<span class="quotelev1">&gt; [0] rbuf[0]= 3  expected: 3
</span><br>
<span class="quotelev1">&gt; [0] rbuf[1]= 1  expected: 1
</span><br>
<span class="quotelev1">&gt; [0] rbuf[2]= 1  expected: 1
</span><br>
<span class="quotelev1">&gt; [1] rbuf[0]= 3  expected: 3
</span><br>
<span class="quotelev1">&gt; [1] rbuf[1]= 1  expected: 1
</span><br>
<span class="quotelev1">&gt; [1] rbuf[2]= 1  expected: 1
</span><br>
<span class="quotelev1">&gt; [2] rbuf[0]= 3  expected: 3
</span><br>
<span class="quotelev1">&gt; [2] rbuf[1]= 1  expected: 1
</span><br>
<span class="quotelev1">&gt; [2] rbuf[2]= 1  expected: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ mpicc -DNBCOLL=1 ireduce_scatter.c
</span><br>
<span class="quotelev1">&gt; [dalcinl_at_kw2060 openmpi]$ mpiexec -n 3 ./a.out | sort
</span><br>
<span class="quotelev1">&gt; [0] rbuf[0]= 3  expected: 3
</span><br>
<span class="quotelev1">&gt; [0] rbuf[1]= 2  expected: 1
</span><br>
<span class="quotelev1">&gt; [0] rbuf[2]= 2  expected: 1
</span><br>
<span class="quotelev1">&gt; [1] rbuf[0]= 3  expected: 3
</span><br>
<span class="quotelev1">&gt; [1] rbuf[1]= 1  expected: 1
</span><br>
<span class="quotelev1">&gt; [1] rbuf[2]= 1  expected: 1
</span><br>
<span class="quotelev1">&gt; [2] rbuf[0]= 3  expected: 3
</span><br>
<span class="quotelev1">&gt; [2] rbuf[1]= 1  expected: 1
</span><br>
<span class="quotelev1">&gt; [2] rbuf[2]= 1  expected: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (UNL/CONICET)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; 3000 Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1016)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14565.php">http://www.open-mpi.org/community/lists/devel/2014/04/14565.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14570.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Previous message:</strong> <a href="14568.php">George Bosilca: "Re: [OMPI devel] querying Op commutativity for predefined reduction operations."</a>
<li><strong>In reply to:</strong> <a href="14565.php">Lisandro Dalcin: "[OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14570.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Reply:</strong> <a href="14570.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
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
