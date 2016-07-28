<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  3 12:51:16 2006" -->
<!-- isoreceived="20061003165116" -->
<!-- sent="Tue, 03 Oct 2006 10:51:14 -0600" -->
<!-- isosent="20061003165114" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI(1.1.1) and Xgrid" -->
<!-- id="1159894274.16526.38.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="c3c420ae0609220139k16ed833dg45a2a8b5ad5a191d_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-03 12:51:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1920.php">Janet Tvedt: "[OMPI users] IB HCA support"</a>
<li><strong>Previous message:</strong> <a href="1918.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1889.php">alberto: "[OMPI users] OpenMPI(1.1.1) and Xgrid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2006-09-22 at 10:39 +0200, alberto wrote:
<br>
<span class="quotelev1">&gt; When I execute the simple program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 1;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; without Xgrid it succed (the execution finish).
</span><br>
<span class="quotelev1">&gt; If I add the environment variables XGRID_CONTROLLER_PASSWORD and
</span><br>
<span class="quotelev1">&gt; XGRID_CONTROLLER_HOSTNAME and I launch the execution:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; coltrane:~ giacomini$ mpirun -d -np 1 ./nano_test
</span><br>
<p>I apologize for the very slow reply.  We let an error in the xgrid pls
<br>
slip into the Open MPI 1.1.1 release.  we are in the process of
<br>
releasing Open MPI 1.1.2, which should fix this issue.
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1920.php">Janet Tvedt: "[OMPI users] IB HCA support"</a>
<li><strong>Previous message:</strong> <a href="1918.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/09/1889.php">alberto: "[OMPI users] OpenMPI(1.1.1) and Xgrid"</a>
<!-- nextthread="start" -->
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
