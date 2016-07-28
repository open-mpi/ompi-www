<?
$subject_val = "Re: [MTT users] mtt IBM reduce_scatter_in_place test failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 08:58:57 2008" -->
<!-- isoreceived="20080917125857" -->
<!-- sent="Wed, 17 Sep 2008 08:58:52 -0400" -->
<!-- isosent="20080917125852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt IBM reduce_scatter_in_place test failure" -->
<!-- id="6655B409-0E5F-410C-9F68-B2F82F765AA5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990809162251y52020bb9y897b6b3476819c27_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT users] mtt IBM reduce_scatter_in_place test failure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 08:58:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0615.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0613.php">Lenny Verkhovsky: "[MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>In reply to:</strong> <a href="0613.php">Lenny Verkhovsky: "[MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just replied on the ompi devel list.
<br>
<p>FWIW, OMPI-specific test results should probably be discussed over  
<br>
there; it's not really an MTT issue (i.e., there's no bug in MTT --  
<br>
it's an OMPI or OMPI test problem).
<br>
<p><p>On Sep 17, 2008, at 1:51 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running mtt test on our  cluster and I found error for IBM  
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="0615.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0613.php">Lenny Verkhovsky: "[MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>In reply to:</strong> <a href="0613.php">Lenny Verkhovsky: "[MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
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
