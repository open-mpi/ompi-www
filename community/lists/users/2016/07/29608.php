<?
$subject_val = "Re: [OMPI users] mpi_reduce implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 09:50:12 2016" -->
<!-- isoreceived="20160708135012" -->
<!-- sent="Fri, 8 Jul 2016 22:50:11 +0900" -->
<!-- isosent="20160708135011" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_reduce implementation" -->
<!-- id="CAAkFZ5vsAmJwMA=+6-X0frnr5rgwfJS0Vz8oYDCR2NqQ1h1u-Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1467983613.5372.16.camel_at_est.fib.upc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_reduce implementation<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-08 09:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29609.php">Juan Francisco Martínez: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Previous message:</strong> <a href="29607.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>In reply to:</strong> <a href="29606.php">Juan Francisco Mart&#237;nez: "[OMPI users] mpi_reduce implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29611.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Juan,
<br>
<p>if you need synchronization after MPI_Reduce, you can reimplement the
<br>
function like this
<br>
<p>int MPI_Reduce(...) {
<br>
&nbsp;&nbsp;&nbsp;PMPI_Reduce(...);
<br>
&nbsp;&nbsp;&nbsp;return PMPI_Barrier();
<br>
}
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, July 8, 2016, Juan Francisco Mart&#195;&#173;nez &lt;
<br>
juan.francisco.martinez_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all I want to congratulate all of you because the quality of
</span><br>
<span class="quotelev1">&gt; the community, I have solved a lot of doubts just reading the mailing
</span><br>
<span class="quotelev1">&gt; list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However I have a question that I can not solve... Until now I though
</span><br>
<span class="quotelev1">&gt; that all the collective operations have an implicit sincronization, but
</span><br>
<span class="quotelev1">&gt; I can see that this is not true at all (because optimizations?). Then,
</span><br>
<span class="quotelev1">&gt; after searching a little bit on the web I saw that there are several
</span><br>
<span class="quotelev1">&gt; implementations of the reduction in openmpi, in fact there are 6
</span><br>
<span class="quotelev1">&gt; possible algorithm (at least on OMPI 1.6) that you can use by mean of
</span><br>
<span class="quotelev1">&gt; the mca parameters...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought that one of them behaves as a synchronization but after
</span><br>
<span class="quotelev1">&gt; execute a test with each one, no one behaves as it. Then my question
</span><br>
<span class="quotelev1">&gt; is, there is any possibility, by tuning ompi, the reduce operation
</span><br>
<span class="quotelev1">&gt; syncrhonize all the ranks that are involved at the end of the
</span><br>
<span class="quotelev1">&gt; operation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also I would like to know if there is any mechanism to know at runtime
</span><br>
<span class="quotelev1">&gt; which algorithm is being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all!
</span><br>
<span class="quotelev1">&gt; - Fran
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29606.php">http://www.open-mpi.org/community/lists/users/2016/07/29606.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29608/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29609.php">Juan Francisco Martínez: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Previous message:</strong> <a href="29607.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>In reply to:</strong> <a href="29606.php">Juan Francisco Mart&#237;nez: "[OMPI users] mpi_reduce implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29611.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
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
