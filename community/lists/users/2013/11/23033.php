<?
$subject_val = "Re: [OMPI users] Bug MPI_Iscatter";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 19:19:21 2013" -->
<!-- isoreceived="20131123001921" -->
<!-- sent="Fri, 22 Nov 2013 18:18:43 -0600" -->
<!-- isosent="20131123001843" -->
<!-- name="Pierre Jolivet" -->
<!-- email="jolivet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug MPI_Iscatter" -->
<!-- id="82E03711-E656-48A1-9118-E74247E1D7D5_at_ann.jussieu.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="978B7536-9FCA-4F97-A08C-B67B0A491B53_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-11-22 19:18:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23034.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Previous message:</strong> <a href="23032.php">Meredith, Karl: "[OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23017.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23034.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Reply:</strong> <a href="23034.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>On Nov 22, 2013, at 5:21 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Pierre,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2013, at 02:39 , Pierre Jolivet &lt;jolivet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt; I completely agree that the code I sent was a good example of what NOT to do with collective and non-blocking communications, so I&#146;m sending a better one.
</span><br>
<span class="quotelev2">&gt;&gt; 1. I&#146;m setting MPI_DATATYPE_NULL only on non-root processes. The root has a real datatype. Why should both match when using MPI_IN_PLACE ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because it is a strong requirement of the MPI standard: the typemap of a send should be matched by its corresponding receive. Otherwise, it is legal to raise an exception of type MPI_ERR_TYPE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2-3-4. Yes, all these points are valid, this is of course just a minimalist example.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question is, if you are indeed saying that it is not a OpenMPI bug, what is the rationale for changing the behavior between MPI_Scatter and MPI_Iscatter when it comes down to the send type on non-root processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Different algorithms implemented by different people. Some of them are more robust, while others less. In this case Scatter translate the count = 0 to a message length = 0, while the Iscatter always look for the extent of the datatype.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don&#146;t see any remark on that matter on the MPI 3.0 documentation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, and there is at least one example where MPI_DATATYPE_NULL is explicitly used for calls where the datatype does not matter (4.23 as an example). Horrible!!!
</span><br>
<p>That&#146;s what I don&#146;t get, why are you saying it&#146;s horrible ? It is clearly written in the spec. that the data type is only significant at root (for Scatter), and that Iscatter is nothing else than a nonblocking variant of Scatter (so the value should also be significant only at root).
<br>
<p>Moreover, there is at least one thing that is wrong in the sources:
<br>
1) in ompi/mca/coll/libnbc/nbc_igather.c, line 55 should read:
<br>
&nbsp;&nbsp;if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Comm_size() (%i)\n&quot;, res); return res; }
<br>
instead of:
<br>
&nbsp;&nbsp;if (MPI_SUCCESS != res) { printf(&quot;MPI Error in MPI_Comm_rank() (%i)\n&quot;, res); return res; }
<br>
<p>And I still have a hard time believing that the test line 56 in ompi/mca/coll/libnbc/nbc_igather.c &#151; if (rank == root) &#151; is not missing in ompi/mca/coll/libnbc/nbc_iscatter.c line 58, but I guess I will have to trust you on this one.
<br>
<p>You should probably specify somewhere that you differ from the standard for that function, other MPI implementations don&#146;t have this limitation, c.f.<a href="http://pic.dhe.ibm.com/infocenter/zos/v1r12/index.jsp?topic=%2Fcom.ibm.zos.r12.fomp200%2Fipezps0025.htm">http://pic.dhe.ibm.com/infocenter/zos/v1r12/index.jsp?topic=%2Fcom.ibm.zos.r12.fomp200%2Fipezps0025.htm</a> or <a href="http://trac.mpich.org/projects/mpich/browser/src/mpi/coll/iscatter.c#L601">http://trac.mpich.org/projects/mpich/browser/src/mpi/coll/iscatter.c#L601</a>
<br>
<p>Pierre
<br>
<p><span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt;   // This will run fine. MPI_DOUBLE
</span><br>
<span class="quotelev2">&gt;&gt;   if(taskid &gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Iscatter(NULL, 0, MPI_DOUBLE, r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD, &amp;rq);
</span><br>
<span class="quotelev2">&gt;&gt;   else
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Iscatter(r, l, MPI_DOUBLE, MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, 0, MPI_COMM_WORLD, &amp;rq);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Wait(&amp;rq, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;   // This will run fine. MPI_DATATYPE_NULL
</span><br>
<span class="quotelev2">&gt;&gt;   if(taskid &gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Scatter(NULL, 0, MPI_DATATYPE_NULL, r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;   else
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Scatter(r, l, MPI_DOUBLE, MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;   // This will not run fine. MPI_DATATYPE_NULL
</span><br>
<span class="quotelev2">&gt;&gt;   if(taskid &gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Iscatter(NULL, 0, MPI_DATATYPE_NULL, r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD, &amp;rq);
</span><br>
<span class="quotelev2">&gt;&gt;   else
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Iscatter(r, l, MPI_DOUBLE, MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, 0, MPI_COMM_WORLD, &amp;rq);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Wait(&amp;rq, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 21, 2013, at 4:34 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pierre,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are several issues with the code you provided.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. You can&#146;t use an MPI_DATATYPE_NULL as the send datatype, not even when count is zero. At least the root must provide a real datatype. In fact the type signature of the send message (datatype and count) should match the type signature of the receiving datatype.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. I know your count is zero, and no data will be transmitted but your code is difficult to read and understand.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. MPI_Iscatter is a collective communication. As such all processes in the associated communicator (MPI_COMM_WORLD in your case) must participate to the collective. Thus, calling MPI_Iscatter only where tasked &gt; 0 is incorrect (you explicitly excluded 0).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. From the MPI standard perspective your example is not correct, as you are not allowed to call MPI_Finalize while there are messages pending. Now, Open MPI tolerate this, but it is clearly not standard behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int          taskid, ntasks;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Request rq;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;ntasks);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  double r;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int l = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Iscatter(NULL, 0, MPI_DOUBLE, &amp;r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD, &amp;rq);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Wait(&amp;rq, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 21, 2013, at 23:19 , Pierre Jolivet &lt;jolivet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The following code doesn&#146;t execute properly :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int          taskid, ntasks;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Request rq;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD,&amp;ntasks);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; double* r;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int l = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if(taskid &gt; 0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Iscatter(NULL, 0, MPI_DATATYPE_NULL, r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD, &amp;rq);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Outcome:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** An error occurred in MPI_Type_extent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hotfix: change MPI_DATATYPE_NULL to something else.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for a quick fix.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23033/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23034.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Previous message:</strong> <a href="23032.php">Meredith, Karl: "[OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23017.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23034.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Reply:</strong> <a href="23034.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
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
