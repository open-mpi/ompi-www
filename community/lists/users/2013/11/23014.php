<?
$subject_val = "Re: [OMPI users] Bug MPI_Iscatter";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 21 18:31:17 2013" -->
<!-- isoreceived="20131121233117" -->
<!-- sent="Thu, 21 Nov 2013 17:30:55 -0600" -->
<!-- isosent="20131121233055" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug MPI_Iscatter" -->
<!-- id="CAGKz=uK3eGF_yjQ8rrY=RtQG+wjcSZe2STeTX4xEqeqONTF4Aw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-21 18:30:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23015.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Previous message:</strong> <a href="23013.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI SC'13 BOF slides posted"</a>
<li><strong>In reply to:</strong> <a href="23011.php">Pierre Jolivet: "[OMPI users] Bug MPI_Iscatter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23015.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This program makes no sense and is wrong in multiple ways.
<br>
<p>Jeff
<br>
<p>On Thu, Nov 21, 2013 at 4:19 PM, Pierre Jolivet &lt;jolivet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; The following code doesn&#226;&#128;&#153;t execute properly :
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;     int          taskid, ntasks;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Request rq;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;ntasks);
</span><br>
<span class="quotelev1">&gt;     double* r;
</span><br>
<span class="quotelev1">&gt;     int l = 0;
</span><br>
<span class="quotelev1">&gt;     if(taskid &gt; 0)
</span><br>
<span class="quotelev1">&gt;         MPI_Iscatter(NULL, 0, MPI_DATATYPE_NULL, r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD, &amp;rq);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
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
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23015.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Previous message:</strong> <a href="23013.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI SC'13 BOF slides posted"</a>
<li><strong>In reply to:</strong> <a href="23011.php">Pierre Jolivet: "[OMPI users] Bug MPI_Iscatter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23015.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
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
