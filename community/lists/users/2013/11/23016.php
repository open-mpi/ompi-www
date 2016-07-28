<?
$subject_val = "Re: [OMPI users] Bug MPI_Iscatter";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 21 20:39:52 2013" -->
<!-- isoreceived="20131122013952" -->
<!-- sent="Thu, 21 Nov 2013 18:39:14 -0700" -->
<!-- isosent="20131122013914" -->
<!-- name="Pierre Jolivet" -->
<!-- email="jolivet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug MPI_Iscatter" -->
<!-- id="579D981D-3DE1-419C-931F-4E26E8E4514A_at_ann.jussieu.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="01271E96-E708-483B-8A94-63EFA7307D73_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug MPI_Iscatter<br>
<strong>From:</strong> Pierre Jolivet (<em>jolivet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-21 20:39:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23017.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Previous message:</strong> <a href="23015.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>In reply to:</strong> <a href="23015.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23017.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Reply:</strong> <a href="23017.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
I completely agree that the code I sent was a good example of what NOT to do with collective and non-blocking communications, so I&#146;m sending a better one.
<br>
1. I&#146;m setting MPI_DATATYPE_NULL only on non-root processes. The root has a real datatype. Why should both match when using MPI_IN_PLACE ?
<br>
2-3-4. Yes, all these points are valid, this is of course just a minimalist example.
<br>
<p>My question is, if you are indeed saying that it is not a OpenMPI bug, what is the rationale for changing the behavior between MPI_Scatter and MPI_Iscatter when it comes down to the send type on non-root processes.
<br>
I don&#146;t see any remark on that matter on the MPI 3.0 documentation.
<br>
<p>Thanks.
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int          taskid, ntasks;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request rq;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;ntasks);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double* r;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int l = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// This will run fine. MPI_DOUBLE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(taskid &gt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Iscatter(NULL, 0, MPI_DOUBLE, r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD, &amp;rq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Iscatter(r, l, MPI_DOUBLE, MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, 0, MPI_COMM_WORLD, &amp;rq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;rq, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// This will run fine. MPI_DATATYPE_NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(taskid &gt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Scatter(NULL, 0, MPI_DATATYPE_NULL, r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Scatter(r, l, MPI_DOUBLE, MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// This will not run fine. MPI_DATATYPE_NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(taskid &gt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Iscatter(NULL, 0, MPI_DATATYPE_NULL, r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD, &amp;rq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Iscatter(r, l, MPI_DOUBLE, MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, 0, MPI_COMM_WORLD, &amp;rq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;rq, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>On Nov 21, 2013, at 4:34 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Pierre,
</span><br>
<span class="quotelev1">&gt; There are several issues with the code you provided.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. You can&#146;t use an MPI_DATATYPE_NULL as the send datatype, not even when count is zero. At least the root must provide a real datatype. In fact the type signature of the send message (datatype and count) should match the type signature of the receiving datatype.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. I know your count is zero, and no data will be transmitted but your code is difficult to read and understand.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. MPI_Iscatter is a collective communication. As such all processes in the associated communicator (MPI_COMM_WORLD in your case) must participate to the collective. Thus, calling MPI_Iscatter only where tasked &gt; 0 is incorrect (you explicitly excluded 0).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. From the MPI standard perspective your example is not correct, as you are not allowed to call MPI_Finalize while there are messages pending. Now, Open MPI tolerate this, but it is clearly not standard behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int          taskid, ntasks;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Request rq;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;ntasks);
</span><br>
<span class="quotelev1">&gt;    double r;
</span><br>
<span class="quotelev1">&gt;    int l = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Iscatter(NULL, 0, MPI_DOUBLE, &amp;r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD, &amp;rq);
</span><br>
<span class="quotelev1">&gt;    MPI_Wait(&amp;rq, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 21, 2013, at 23:19 , Pierre Jolivet &lt;jolivet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; The following code doesn&#146;t execute properly :
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev2">&gt;&gt;   int          taskid, ntasks;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Request rq;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;ntasks);
</span><br>
<span class="quotelev2">&gt;&gt;   double* r;
</span><br>
<span class="quotelev2">&gt;&gt;   int l = 0;
</span><br>
<span class="quotelev2">&gt;&gt;   if(taskid &gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Iscatter(NULL, 0, MPI_DATATYPE_NULL, r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD, &amp;rq);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Outcome:
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Type_extent
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hotfix: change MPI_DATATYPE_NULL to something else.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for a quick fix.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23017.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Previous message:</strong> <a href="23015.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>In reply to:</strong> <a href="23015.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23017.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Reply:</strong> <a href="23017.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
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
