<?
$subject_val = "Re: [OMPI users] Memchecker failure with empty struct type";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 17:00:00 2012" -->
<!-- isoreceived="20120925210000" -->
<!-- sent="Tue, 25 Sep 2012 13:59:52 -0700" -->
<!-- isosent="20120925205952" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memchecker failure with empty struct type" -->
<!-- id="B49B1602-A724-4387-9ECC-44BBC2FA30F5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.02.1209251500260.46469_at_flowerpot.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memchecker failure with empty struct type<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 16:59:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20317.php">Jeremiah Willcock: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<li><strong>Previous message:</strong> <a href="20315.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>In reply to:</strong> <a href="20312.php">Jeremiah Willcock: "[OMPI users] Memchecker failure with empty struct type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20317.php">Jeremiah Willcock: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<li><strong>Reply:</strong> <a href="20317.php">Jeremiah Willcock: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IIRC, we found a configure &quot;bug&quot; that allowed you to enable-memchecker without also including the required --with-valgrind. You might try again with 1.6.2, which includes the change - and be sure to add the extra configure flag.
<br>
<p><p>On Sep 25, 2012, at 12:04 PM, Jeremiah Willcock &lt;jewillco_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The following C program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;  int blocklengths;
</span><br>
<span class="quotelev1">&gt;  MPI_Aint displacements;
</span><br>
<span class="quotelev1">&gt;  MPI_Datatype types, dt;
</span><br>
<span class="quotelev1">&gt;  int x;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_struct(0, &amp;blocklengths, &amp;displacements, &amp;types, &amp;dt);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_commit(&amp;dt);
</span><br>
<span class="quotelev1">&gt;  MPI_Send(&amp;x, 1, dt, MPI_PROC_NULL, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  MPI_Type_free(&amp;dt);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; produces a segmentation fault (caused by a NULL pointer dereference) when run with Open MPI 1.6.1, but only when using Valgrind.  Running without Valgrind does not cause any issues; the failure appears to be in the code that checks whether MPI buffers are valid.  The configure flags I used to build Open MPI were a prefix and:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --disable-pretty-print-stacktrace --enable-mpi-thread-multiple --enable-memchecker --enable-mca-no-build=btl-openib --enable-debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I am using GCC 4.7.1 on Linux.  Is this a known issue?  Thank you for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Jeremiah Willcock
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
<li><strong>Next message:</strong> <a href="20317.php">Jeremiah Willcock: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<li><strong>Previous message:</strong> <a href="20315.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>In reply to:</strong> <a href="20312.php">Jeremiah Willcock: "[OMPI users] Memchecker failure with empty struct type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20317.php">Jeremiah Willcock: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<li><strong>Reply:</strong> <a href="20317.php">Jeremiah Willcock: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
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
