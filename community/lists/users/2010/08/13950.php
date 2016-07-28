<?
$subject_val = "Re: [OMPI users] MPI Template Datatype?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 17:02:55 2010" -->
<!-- isoreceived="20100809210255" -->
<!-- sent="Mon, 9 Aug 2010 23:02:51 +0200" -->
<!-- isosent="20100809210251" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Template Datatype?" -->
<!-- id="AANLkTi=Peq+CQ6t+EXaKhwOT=wd0B8VjWc88sHXqrdYw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTimhYnrjU2_nJNhSqTB7dK+zE-uBzCjuXgUByqQq_at_mail.gmail.com" -->
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
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 17:02:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13951.php">Jeff Squyres: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Previous message:</strong> <a href="13949.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>In reply to:</strong> <a href="13947.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13960.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>Reply:</strong> <a href="13960.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alexandru,
<br>
<p>you can read all about Boost.MPI at:
<br>
<p>&nbsp;&nbsp;<a href="http://www.boost.org/doc/libs/1_43_0/doc/html/mpi.html">http://www.boost.org/doc/libs/1_43_0/doc/html/mpi.html</a>
<br>
<p><p>On Mon, Aug 9, 2010 at 10:27 PM, Alexandru Blidaru &lt;alexsb92_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I basically have to implement a 4D vector. An additional goal of my project
</span><br>
<span class="quotelev1">&gt; is to support char, int, float and double datatypes in the vector.
</span><br>
<p>If your &quot;vector&quot; is fixed-size (i.e., all vectors are comprised of
<br>
4 elements), then you can likely dispose of std::vector, use
<br>
C-style arrays with templated send/receive calls (that would
<br>
be just interfaces to MPI_Send/MPI_Recv)
<br>
<p>&nbsp;&nbsp;&nbsp;// BEWARE: untested code!!!
<br>
<p>&nbsp;&nbsp;&nbsp;template &lt;typename T&gt;
<br>
&nbsp;&nbsp;&nbsp;int send(T* vector, int dest, int tag, MPI_Comm comm) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw std::logic_error(&quot;called generic MyVector::send&quot;);
<br>
&nbsp;&nbsp;&nbsp;};
<br>
<p>&nbsp;&nbsp;&nbsp;template &lt;typename T&gt;
<br>
&nbsp;&nbsp;&nbsp;int recv(T* vector, int source, int tag, MPI_Comm comm) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw std::logic_error(&quot;called generic MyVector::send&quot;);
<br>
&nbsp;&nbsp;&nbsp;};
<br>
<p>and then you specialize the template for the types you actually use:
<br>
<p>&nbsp;&nbsp;template &lt;&gt;
<br>
&nbsp;&nbsp;int send&lt;double&gt;(int* vector, int dest, int tag, MPI_Comm comm)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return MPI_Send(vector, 4, MPI_DOUBLE, dest, tag, comm);
<br>
&nbsp;&nbsp;};
<br>
<p>&nbsp;&nbsp;template &lt;&gt;
<br>
&nbsp;&nbsp;int recv&lt;double&gt;(int* vector, int src, int tag, MPI_Comm comm)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return MPI_Recv(vector, 4, MPI_DOUBLE, dest, tag, comm);
<br>
&nbsp;&nbsp;};
<br>
<p>&nbsp;&nbsp;// etc.
<br>
<p>However, let me warn you that it would likely take more time and
<br>
effort to write all the template specializations and get them working
<br>
than just use Boost.MPI.
<br>
<p>Best regards,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13951.php">Jeff Squyres: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Previous message:</strong> <a href="13949.php">John Hsu: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>In reply to:</strong> <a href="13947.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13960.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>Reply:</strong> <a href="13960.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
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
