<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 15:20:24 2007" -->
<!-- isoreceived="20071031192024" -->
<!-- sent="Wed, 31 Oct 2007 20:20:18 +0100" -->
<!-- isosent="20071031192018" -->
<!-- name="Oleg Morajko" -->
<!-- email="olegmorajko_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to construct a datatype over two different arrays?" -->
<!-- id="6ab5deaf0710311220q4ffe0020nb8f85882238597e2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="547db2260710311101g41acb975i487448472158cfe_at_mail.gmail.com" -->
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
<strong>From:</strong> Oleg Morajko (<em>olegmorajko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 15:20:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4371.php">Jon Mason: "[OMPI users] mpirun udapl problem"</a>
<li><strong>Previous message:</strong> <a href="4369.php">kyron_at_[hidden]: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>In reply to:</strong> <a href="4365.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4380.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4380.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure if you understood my question. The case is not trivial at all
<br>
or I miss something important.
<br>
Try to design this derived datatype and you will understand my point.
<br>
<p>Thanks anyway.
<br>
<p><p>On 10/31/07, Amit Kumar Saha &lt;amitsaha.in_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/31/07, Oleg Morajko &lt;olegmorajko_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have the following problem. There areI two arrays somewere in the
</span><br>
<span class="quotelev2">&gt; &gt; program:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; double weights [MAX_SIZE];
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; int       values [MAX_SIZE];
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I need to be able to send a single pair { weights [i], values [i] } with
</span><br>
<span class="quotelev2">&gt; &gt; a single MPI_Send call Or receive it directly into both arrays at at given
</span><br>
<span class="quotelev2">&gt; &gt; index i. How can I define a datatype that spans this pair over both arrays?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you have a look at topics like - MPI derived data types, MPI packing?
</span><br>
<span class="quotelev1">&gt; May be they can help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Amit Kumar Saha
</span><br>
<span class="quotelev1">&gt; *NetBeans Community Docs
</span><br>
<span class="quotelev1">&gt; Contribution Coordinator*
</span><br>
<span class="quotelev1">&gt; me blogs@ <a href="http://amitksaha.blogspot.com">http://amitksaha.blogspot.com</a>
</span><br>
<span class="quotelev1">&gt; URL: <a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4370/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4371.php">Jon Mason: "[OMPI users] mpirun udapl problem"</a>
<li><strong>Previous message:</strong> <a href="4369.php">kyron_at_[hidden]: "Re: [OMPI users] &quot;Hostfile&quot; on Multicore Node?"</a>
<li><strong>In reply to:</strong> <a href="4365.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4380.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4380.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
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
