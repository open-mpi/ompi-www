<?
$subject_val = "Re: [OMPI devel] mtt IBM reduce_scatter_in_place test failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 08:58:17 2008" -->
<!-- isoreceived="20080917125817" -->
<!-- sent="Wed, 17 Sep 2008 08:58:10 -0400" -->
<!-- isosent="20080917125810" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mtt IBM reduce_scatter_in_place test failure" -->
<!-- id="A035F8E7-70BF-4ACF-AB3C-0F046B968827_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990809161000m4ab253bfj2dcfccd87e8aed36_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mtt IBM reduce_scatter_in_place test failure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 08:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4654.php">Aurélien Bouteiller: "[OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4652.php">Roland Dreier: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>In reply to:</strong> <a href="4649.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM reduce_scatter_in_place test failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At first glance, the test looks ok.
<br>
<p>Why do you think &lt;= is incorrect?  Is there a buffer length problem  
<br>
somewhere?
<br>
<p>I am able to reproduce the problem with 10 procs, though.  But it runs  
<br>
successfully at 8.  Same results with both openib btl and tcp btl.
<br>
<p>Can you file a ticket / dig a little deeper to see what's going wrong?
<br>
<p><p>On Sep 16, 2008, at 1:00 PM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; I am running mtt test on our  cluster and I found error for IBM  
</span><br>
<span class="quotelev1">&gt; reduce_scatter_in_place  test for np&gt;8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_1_3_TRUNK/bin/mpirun -np 10 -H witch2 ./ 
</span><br>
<span class="quotelev1">&gt; reduce_scatter_in_place
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **WARNING**]: MPI_COMM_WORLD rank 4, file reduce_scatter_in_place.c: 
</span><br>
<span class="quotelev1">&gt; 80:
</span><br>
<span class="quotelev1">&gt; bad answer (0) at index 0 of 1000 (should be 40000)
</span><br>
<span class="quotelev1">&gt; [**WARNING**]: MPI_COMM_WORLD rank 3, file reduce_scatter_in_place.c: 
</span><br>
<span class="quotelev1">&gt; 80:
</span><br>
<span class="quotelev1">&gt; [**WARNING**]: MPI_COMM_WORLD rank 2, file reduce_scatter_in_place.c: 
</span><br>
<span class="quotelev1">&gt; 80:
</span><br>
<span class="quotelev1">&gt; bad answer (20916) at index 0 of 1000 (should be 20000)
</span><br>
<span class="quotelev1">&gt; bad answer (0) at index 0 of 1000 (should be 30000)
</span><br>
<span class="quotelev1">&gt; [**WARNING**]: MPI_COMM_WORLD rank 5, file reduce_scatter_in_place.c: 
</span><br>
<span class="quotelev1">&gt; 80:
</span><br>
<span class="quotelev1">&gt; bad answer (0) at index 0 of 1000 (should be 50000)
</span><br>
<span class="quotelev1">&gt; [**WARNING**]: MPI_COMM_WORLD rank 6, file reduce_scatter_in_place.c: 
</span><br>
<span class="quotelev1">&gt; 80:
</span><br>
<span class="quotelev1">&gt; bad answer (0) at index 0 of 1000 (should be 60000)
</span><br>
<span class="quotelev1">&gt; [**WARNING**]: MPI_COMM_WORLD rank 7, file reduce_scatter_in_place.c: 
</span><br>
<span class="quotelev1">&gt; 80:
</span><br>
<span class="quotelev1">&gt; [**WARNING**]: MPI_COMM_WORLD rank 8, file reduce_scatter_in_place.c: 
</span><br>
<span class="quotelev1">&gt; 80:
</span><br>
<span class="quotelev1">&gt; bad answer (0) at index 0 of 1000 (should be 80000)
</span><br>
<span class="quotelev1">&gt; bad answer (0) at index 0 of 1000 (should be 70000)
</span><br>
<span class="quotelev1">&gt; [**WARNING**]: MPI_COMM_WORLD rank 9, file reduce_scatter_in_place.c: 
</span><br>
<span class="quotelev1">&gt; 80:
</span><br>
<span class="quotelev1">&gt; bad answer (0) at index 0 of 1000 (should be 90000)
</span><br>
<span class="quotelev1">&gt; [**WARNING**]: MPI_COMM_WORLD rank 0, file reduce_scatter_in_place.c: 
</span><br>
<span class="quotelev1">&gt; 80:
</span><br>
<span class="quotelev1">&gt; bad answer (-516024720) at index 0 of 1000 (should be 0)
</span><br>
<span class="quotelev1">&gt; [**WARNING**]: MPI_COMM_WORLD rank 1, file reduce_scatter_in_place.c: 
</span><br>
<span class="quotelev1">&gt; 80:
</span><br>
<span class="quotelev1">&gt; bad answer (28112) at index 0 of 1000 (should be 10000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that the error is in the test itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- sources/test_get__ibm/ibm/collective/reduce_scatter_in_place.c  
</span><br>
<span class="quotelev1">&gt; 2005-09-28 18:11:37.000000000 +0300
</span><br>
<span class="quotelev1">&gt; +++ installs/LKcC/tests/ibm/ibm/collective/reduce_scatter_in_place.c  
</span><br>
<span class="quotelev1">&gt; 2008-09-16 19:32:48.000000000 +0300
</span><br>
<span class="quotelev1">&gt; @@ -64,7 +64,7 @@ int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;   ompitest_error(__FILE__, __LINE__, &quot;Doh! Rank %d was not able to  
</span><br>
<span class="quotelev1">&gt; allocate enough memory.  MPI test aborted!\n&quot;, myself);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - for (j = 1; j &lt;= MAXLEN; j *= 10) {
</span><br>
<span class="quotelev1">&gt; + for (j = 1; j &lt; MAXLEN; j *= 10) {
</span><br>
<span class="quotelev1">&gt;   for (i = 0; i &lt; tasks; i++) {
</span><br>
<span class="quotelev1">&gt;   recvcounts[i] = j;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure if this is right fix and who can review/commit it to  
</span><br>
<span class="quotelev1">&gt; the test trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4654.php">Aurélien Bouteiller: "[OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4652.php">Roland Dreier: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>In reply to:</strong> <a href="4649.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM reduce_scatter_in_place test failure"</a>
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
