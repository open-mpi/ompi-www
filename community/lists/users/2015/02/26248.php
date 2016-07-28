<?
$subject_val = "Re: [OMPI users] vector type";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 17:26:24 2015" -->
<!-- isoreceived="20150201222624" -->
<!-- sent="Sun, 1 Feb 2015 22:26:03 +0000" -->
<!-- isosent="20150201222603" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] vector type" -->
<!-- id="CAAbhqc7tpS59=t-u5e6AkMcAwrTXwUCeCOFqpnqrAjvyzh9Cxw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y4szUv1aVXN+Ot7PYh6g1PVMTi90HxQ=-jfeeH2FSb_tA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] vector type<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-01 17:26:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26249.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26247.php">Oscar Vega-Gisbert: "Re: [OMPI users] Segfault in mpi-java"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26246.php">Diego Avesani: "[OMPI users] vector type"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Because the compiler does not know that you want to send the entire
<br>
sub-matrix, passing non-contiguous arrays to a function is, at best,
<br>
dangerous, do not do that unless you know the function can handle that.
<br>
Do AA(1,1,2) and then it works. (in principle you then pass the starting
<br>
memory location and MPI assumes it to be contiguous).
<br>
Or do A(:,:,2:3), which ensures that the matrix is passed by reference and
<br>
hence the memory will also be contiguous.
<br>
<p><p><p><p>2015-01-31 22:16 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; here how I create a 2D vector type to send 3D array element:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (in the attachment)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The vectors are:
</span><br>
<span class="quotelev1">&gt; real*4  AA(4,5,3), BB(4,5,3)
</span><br>
<span class="quotelev1">&gt; In my idea both AA and BB have three elements (last columns) and each
</span><br>
<span class="quotelev1">&gt; elements has (4x5) features.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) What do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) why I can not send AA(1,1,2:3) as
</span><br>
<span class="quotelev1">&gt;  call MPI_SEND(AA(1,1,2:3), 2, rowtype, 1, 300, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26246.php">http://www.open-mpi.org/community/lists/users/2015/01/26246.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26248/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26249.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26247.php">Oscar Vega-Gisbert: "Re: [OMPI users] Segfault in mpi-java"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26246.php">Diego Avesani: "[OMPI users] vector type"</a>
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
