<?
$subject_val = "Re: [OMPI users] Best way to communicate a 2d array with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 14:18:05 2014" -->
<!-- isoreceived="20140822181805" -->
<!-- sent="Fri, 22 Aug 2014 20:17:35 +0200" -->
<!-- isosent="20140822181735" -->
<!-- name="Oscar Vega-Gisbert" -->
<!-- email="ovega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to communicate a 2d array with Java binding" -->
<!-- id="53F7893F.1060207_at_dsic.upv.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+ssbKUafJ4WBqxCVwfRLx7Y_ZatPW9+tcnXFF0wcE8g+RgLEw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Best way to communicate a 2d array with Java binding<br>
<strong>From:</strong> Oscar Vega-Gisbert (<em>ovega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-22 14:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25132.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25130.php">Saliya Ekanayake: "[OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25130.php">Saliya Ekanayake: "[OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25132.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25132.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
El 22/08/14 17:10, Saliya Ekanayake escribi&#243;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've a quick question about the usage of Java binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Say there's a 2 dimensional double array (size m x n) that needs to be 
</span><br>
<span class="quotelev1">&gt; sent to another rank. I see two options to get this done,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Copy values to a direct buffer of size m*n and send it
</span><br>
<span class="quotelev1">&gt; 2. Copy values to a 1D array of size m*n and send it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess 2 would internally do the copying to a buffer and use it, so 
</span><br>
<span class="quotelev1">&gt; suggesting 1. is the best option. Is this the case or is there a 
</span><br>
<span class="quotelev1">&gt; better way to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The best option is 1 because 2 requires one extra copy to C heap.
<br>
Supposing the matrix is the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double matrix[][] = new double[m][n];
<br>
<p>Then you can allocate a direct DoubleBuffer:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DoubleBuffer buffer = MPI.newDoubleBuffer(m * n);
<br>
<p>In order to send/receive the matrix I suggest to use the bulk put/get 
<br>
methods:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; m; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer.put(matrix[i]); // Copy to the buffer.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.send(buffer, m*n, MPI.DOUBLE, 1, 0);
<br>
<p>The receive code:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.recv(buffer, m*n, MPI.DOUBLE, 0, 0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i = 0; i &lt; m; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer.get(matrix[i]); // Copy from the buffer.
<br>
<p>Note that bulk get/put methods increment the buffer position in n. So if 
<br>
you want reuse the buffer you must set the buffer position to 0 before 
<br>
copy the matrix:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer.position(0);
<br>
<p>Regards,
<br>
Oscar
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25130.php">http://www.open-mpi.org/community/lists/users/2014/08/25130.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25132.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Previous message:</strong> <a href="25130.php">Saliya Ekanayake: "[OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25130.php">Saliya Ekanayake: "[OMPI users] Best way to communicate a 2d array with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25132.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>Reply:</strong> <a href="25132.php">Saliya Ekanayake: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
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
