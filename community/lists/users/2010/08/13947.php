<?
$subject_val = "Re: [OMPI users] MPI Template Datatype?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 16:28:17 2010" -->
<!-- isoreceived="20100809202817" -->
<!-- sent="Mon, 9 Aug 2010 16:27:52 -0400" -->
<!-- isosent="20100809202752" -->
<!-- name="Alexandru Blidaru" -->
<!-- email="alexsb92_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Template Datatype?" -->
<!-- id="AANLkTimhYnrjU2_nJNhSqTB7dK+zE-uBzCjuXgUByqQq_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTineaP_WEjPhwUxVZiyiJ+wOvhogQ=TbUN2bvSus_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Template Datatype?<br>
<strong>From:</strong> Alexandru Blidaru (<em>alexsb92_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 16:27:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13948.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="13946.php">Riccardo Murri: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>In reply to:</strong> <a href="13946.php">Riccardo Murri: "Re: [OMPI users] MPI Template Datatype?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13950.php">Riccardo Murri: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>Reply:</strong> <a href="13950.php">Riccardo Murri: "Re: [OMPI users] MPI Template Datatype?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Riccardo,
<br>
<p>I basically have to implement a 4D vector. An additional goal of my project
<br>
is to support char, int, float and double datatypes in the vector. I figured
<br>
that the only way to do this is through a template. Up to this point I was
<br>
only supporting doubles in my vector, and I was sending each element
<br>
individually from node to node. Since MPI_Send and MPI_Recv require the
<br>
programmer to specify which datatype to use, and since I would only use
<br>
doubles in the initial version of my project, using  MPI_Send and MPI_Recv
<br>
was easy. However if I am to declare my 4D vector like this std::vector&lt;T&gt; ,
<br>
there will be no way for me to know which datatype to specify in the  MPI_Send
<br>
and MPI_Recv commands.
<br>
<p>No I haven't looked at Boost.MPI . I did a quick Ctrl-F of Boost.MPI in the
<br>
MPI 2.2 doc that i found here: <a href="http://www.mpi-forum.org/docs/docs.html">http://www.mpi-forum.org/docs/docs.html</a> , but
<br>
i was unable to find it. Could you point me to some resources about it? It
<br>
would be a lot easier to use that rather than send every element 1 by 1.
<br>
<p>Thank you very much for your help.
<br>
<p>Alex
<br>
<p>On Mon, Aug 9, 2010 at 4:09 PM, Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello Alexandru,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 9, 2010 at 6:05 PM, Alexandru Blidaru &lt;alexsb92_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have to send some vectors from node to node, and the vecotrs are built
</span><br>
<span class="quotelev2">&gt; &gt; using a template. The datatypes used in the template will be long, int,
</span><br>
<span class="quotelev2">&gt; &gt; double, and char. How may I send those vectors since I wouldn't know what
</span><br>
<span class="quotelev2">&gt; &gt; MPI datatype i have to specify in MPI_Send and MPI Recv. Is there any way
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; do this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand what your question is about: are you asking
</span><br>
<span class="quotelev1">&gt; what MPI datatypes you should use to send C types &quot;long&quot;, &quot;int&quot;, etc.,
</span><br>
<span class="quotelev1">&gt; or are you trying to send a more complex C type (&quot;vector&quot;)?
</span><br>
<span class="quotelev1">&gt; Can you send some code demonstrating the  problem you are trying to solve?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Besides, your wording suggests that you are trying to send a C++
</span><br>
<span class="quotelev1">&gt; std::vector&lt;T&gt; over MPI: have you already had a look at Boost.MPI?  It
</span><br>
<span class="quotelev1">&gt; has out-of-the-box support for STL containers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Riccardo
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
<p><p><p><pre>
-- 
Alexandru Blidaru
University of Waterloo - Electrical Engineering '15
University email: asblidar_at_[hidden]
Twitter handle: @G_raph
Blog: <a href="http://alexblidaru.wordpress.com/">http://alexblidaru.wordpress.com/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13947/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13948.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="13946.php">Riccardo Murri: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>In reply to:</strong> <a href="13946.php">Riccardo Murri: "Re: [OMPI users] MPI Template Datatype?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13950.php">Riccardo Murri: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>Reply:</strong> <a href="13950.php">Riccardo Murri: "Re: [OMPI users] MPI Template Datatype?"</a>
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
