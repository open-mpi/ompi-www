<?
$subject_val = "Re: [OMPI users] Memchecker failure with empty struct type";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 17:07:34 2012" -->
<!-- isoreceived="20120925210734" -->
<!-- sent="Tue, 25 Sep 2012 17:07:33 -0400 (EDT)" -->
<!-- isosent="20120925210733" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memchecker failure with empty struct type" -->
<!-- id="alpine.LRH.2.02.1209251703470.46469_at_flowerpot.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B49B1602-A724-4387-9ECC-44BBC2FA30F5_at_open-mpi.org" -->
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
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 17:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20318.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20316.php">Ralph Castain: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<li><strong>In reply to:</strong> <a href="20316.php">Ralph Castain: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My config.log shows that it found Valgrind even though I didn't specify 
<br>
--with-valgrind.  It looks like the issue is in the datatype creation 
<br>
code; looking at the data structure shows unusual values for true_ub and 
<br>
true_lb:
<br>
<p>{super = {super = {obj_magic_id = 16046253926196952813, obj_class = 
<br>
0x5005880, obj_reference_count = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cls_init_file_name = 0x4da6f2f &quot;ompi_datatype_create.c&quot;, 
<br>
cls_init_lineno = 71}, flags = 276, id = 0, bdt_used = 0, size = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true_lb = 9223372036854775807, true_ub = -9223372036854775808, lb = 0, 
<br>
ub = 0, align = 1, nbElems = 0, name = '\000' &lt;repeats 63 times&gt;, desc = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;length = 1, used = 0, desc = 0x54348e0}, opt_desc = {length = 0, 
<br>
used = 0, desc = 0x0}, btypes = {0 &lt;repeats 46 times&gt;}}, id = 68, 
<br>
d_f_to_c_index = 68,
<br>
&nbsp;&nbsp;&nbsp;d_keyhash = 0x0, args = 0x8a7b780, packed_description = 0x0, name = 
<br>
'\000' &lt;repeats 63 times&gt;}
<br>
<p>In particular, the true_extent computed on line 99 of memchecker.h is 
<br>
computed as 1 (because of overflows) while the datatype has size 0.  This 
<br>
causes it to be treated as non-contiguous, while its desc field is NULL; 
<br>
the code then loops over elements of desc as if it was an array.  Fixing 
<br>
true_lb and true_ub might be enough to make the current memchecker code 
<br>
work (since the datatype is actually contiguous).
<br>
<p>-- Jeremiah Willcock
<br>
<p>On Tue, 25 Sep 2012, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; IIRC, we found a configure &quot;bug&quot; that allowed you to enable-memchecker without also including the required --with-valgrind. You might try again with 1.6.2, which includes the change - and be sure to add the extra configure flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2012, at 12:04 PM, Jeremiah Willcock &lt;jewillco_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The following C program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev2">&gt;&gt;  int blocklengths;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Aint displacements;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Datatype types, dt;
</span><br>
<span class="quotelev2">&gt;&gt;  int x;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Type_struct(0, &amp;blocklengths, &amp;displacements, &amp;types, &amp;dt);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Type_commit(&amp;dt);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Send(&amp;x, 1, dt, MPI_PROC_NULL, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Type_free(&amp;dt);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; produces a segmentation fault (caused by a NULL pointer dereference) when run with Open MPI 1.6.1, but only when using Valgrind.  Running without Valgrind does not cause any issues; the failure appears to be in the code that checks whether MPI buffers are valid.  The configure flags I used to build Open MPI were a prefix and:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --disable-pretty-print-stacktrace --enable-mpi-thread-multiple --enable-memchecker --enable-mca-no-build=btl-openib --enable-debug
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and I am using GCC 4.7.1 on Linux.  Is this a known issue?  Thank you for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Jeremiah Willcock
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20318.php">Mariana Vargas Magana: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20316.php">Ralph Castain: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
<li><strong>In reply to:</strong> <a href="20316.php">Ralph Castain: "Re: [OMPI users] Memchecker failure with empty struct type"</a>
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
