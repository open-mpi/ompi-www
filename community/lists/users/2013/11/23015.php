<?
$subject_val = "Re: [OMPI users] Bug MPI_Iscatter";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 21 18:34:56 2013" -->
<!-- isoreceived="20131121233456" -->
<!-- sent="Fri, 22 Nov 2013 00:34:58 +0100" -->
<!-- isosent="20131121233458" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug MPI_Iscatter" -->
<!-- id="01271E96-E708-483B-8A94-63EFA7307D73_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="43AA9D3E-C3E3-4D60-B182-03C7A73C95E7_at_ann.jussieu.fr" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-21 18:34:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23016.php">Pierre Jolivet: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Previous message:</strong> <a href="23014.php">Jeff Hammond: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>In reply to:</strong> <a href="23011.php">Pierre Jolivet: "[OMPI users] Bug MPI_Iscatter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23016.php">Pierre Jolivet: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Reply:</strong> <a href="23016.php">Pierre Jolivet: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pierre,
<br>
There are several issues with the code you provided.
<br>
<p>1. You can&#146;t use an MPI_DATATYPE_NULL as the send datatype, not even when count is zero. At least the root must provide a real datatype. In fact the type signature of the send message (datatype and count) should match the type signature of the receiving datatype.
<br>
<p>2. I know your count is zero, and no data will be transmitted but your code is difficult to read and understand.
<br>
<p>3. MPI_Iscatter is a collective communication. As such all processes in the associated communicator (MPI_COMM_WORLD in your case) must participate to the collective. Thus, calling MPI_Iscatter only where tasked &gt; 0 is incorrect (you explicitly excluded 0).
<br>
<p>4. From the MPI standard perspective your example is not correct, as you are not allowed to call MPI_Finalize while there are messages pending. Now, Open MPI tolerate this, but it is clearly not standard behavior.
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int          taskid, ntasks;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request rq;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;ntasks);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double r;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int l = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Iscatter(NULL, 0, MPI_DOUBLE, &amp;r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD, &amp;rq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;rq, MPI_STATUS_IGNORE);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Nov 21, 2013, at 23:19 , Pierre Jolivet &lt;jolivet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; The following code doesn&#146;t execute properly :
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;    int          taskid, ntasks;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Request rq;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;ntasks);
</span><br>
<span class="quotelev1">&gt;    double* r;
</span><br>
<span class="quotelev1">&gt;    int l = 0;
</span><br>
<span class="quotelev1">&gt;    if(taskid &gt; 0)
</span><br>
<span class="quotelev1">&gt;        MPI_Iscatter(NULL, 0, MPI_DATATYPE_NULL, r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD, &amp;rq);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Outcome:
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Type_extent
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hotfix: change MPI_DATATYPE_NULL to something else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for a quick fix.
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
<li><strong>Next message:</strong> <a href="23016.php">Pierre Jolivet: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Previous message:</strong> <a href="23014.php">Jeff Hammond: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>In reply to:</strong> <a href="23011.php">Pierre Jolivet: "[OMPI users] Bug MPI_Iscatter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23016.php">Pierre Jolivet: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Reply:</strong> <a href="23016.php">Pierre Jolivet: "Re: [OMPI users] Bug MPI_Iscatter"</a>
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
