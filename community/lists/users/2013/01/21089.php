<?
$subject_val = "[OMPI users] some comments on derived datatypes in mpiJava";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 10:03:58 2013" -->
<!-- isoreceived="20130108150358" -->
<!-- sent="Tue, 8 Jan 2013 15:56:55 +0100 (CET)" -->
<!-- isosent="20130108145655" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] some comments on derived datatypes in mpiJava" -->
<!-- id="201301081456.r08EuthD018199_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] some comments on derived datatypes in mpiJava<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-08 09:56:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21090.php">Crni Gorac: "[OMPI users] problem with MPI datatypes not defined as constants in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21088.php">Matthias Jurenz: "Re: [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21109.php">Jeff Squyres (jsquyres): "Re: [OMPI users] some comments on derived datatypes in mpiJava"</a>
<li><strong>Reply:</strong> <a href="21109.php">Jeff Squyres (jsquyres): "Re: [OMPI users] some comments on derived datatypes in mpiJava"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>In C a 2-dimensional array with m rows is stored row-wise in a
<br>
contiguous memory area while it is stored in m+1 1-dimensional
<br>
arrays in Java (each 1-dimensional array is stored in a contiguous
<br>
memory area, but the whole matrix isn't stored in a contiguous
<br>
memory area). &quot;Datatype.Vector&quot; is implemented via JNI and calls
<br>
the C function MPI_Type_vector which expects that a matrix is
<br>
stored in a contiguous memory area. This leads to wrong results
<br>
if you want to construct a new datatype for column elements of a
<br>
matrix in Java. Jeff suggested some possible solutions in the last
<br>
weeks which I will now discuss.
<br>
<p>1) Simulate a 2-dimensional (m,n)-array in one 1-dimensional array
<br>
&nbsp;&nbsp;&nbsp;with m*n elements and perform all necessary index computations
<br>
&nbsp;&nbsp;&nbsp;yourself. This solution works and with the new method
<br>
&nbsp;&nbsp;&nbsp;Datatype.Resized you can scatter all columns of a matrix to
<br>
&nbsp;&nbsp;&nbsp;different processes.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;The problem is that you don't use a multi-dimensional array
<br>
&nbsp;&nbsp;&nbsp;from Java. I'm not a Java expert, but I suppose that it even
<br>
&nbsp;&nbsp;&nbsp;contradicts the philosophy of object-oriented programming.
<br>
&nbsp;&nbsp;&nbsp;In my opinion this solution will also add new sources of errors
<br>
&nbsp;&nbsp;&nbsp;if you must implement complicated algorithms (bugs with index
<br>
&nbsp;&nbsp;&nbsp;computations, unreadable source code, etc.).
<br>
<p>2) Implement a wrapper class in Java so that you don't have to deal
<br>
&nbsp;&nbsp;&nbsp;with index computations in your normal program.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;As far as I know, it would have been necessary to use set- and
<br>
&nbsp;&nbsp;&nbsp;get-methods to write and read matrix elements in that case,
<br>
&nbsp;&nbsp;&nbsp;because Java doesn't allow operator overloading (I'm not even
<br>
&nbsp;&nbsp;&nbsp;sure, if it would have been possible to overload &quot;[][]&quot; in the
<br>
&nbsp;&nbsp;&nbsp;case that overloading would have been supported). In my opinion
<br>
&nbsp;&nbsp;&nbsp;this approach wouldn't solve the problem, because I wouldn't be
<br>
&nbsp;&nbsp;&nbsp;able to apply Datatype.Vector to an object of this new class.
<br>
&nbsp;&nbsp;&nbsp;If I'm right, &quot;Datatype.Vector&quot; would be needless or I would have
<br>
&nbsp;&nbsp;&nbsp;to implement methods to create a column datatype and to send and
<br>
&nbsp;&nbsp;&nbsp;to receive column blocks in that class as well. I think, that I
<br>
&nbsp;&nbsp;&nbsp;would also get once more complicated and unreadable source code.
<br>
<p>3) Implement a wrapper class which possibly needs to be written in C.
<br>
&nbsp;&nbsp;&nbsp;Yesterday I tried to understand how I can use JNI to solve this
<br>
&nbsp;&nbsp;&nbsp;problem, because I didn't have any experience with JNI before.
<br>
&nbsp;&nbsp;&nbsp;I can use JNI to convert a Java matrix into a C matrix and vice
<br>
&nbsp;&nbsp;&nbsp;versa and in this way my original Java matrix can be stored into
<br>
&nbsp;&nbsp;&nbsp;a contiguous memory area. However, in that case I can also use
<br>
&nbsp;&nbsp;&nbsp;MPI_Type_vector, because I'm already using C, so that
<br>
&nbsp;&nbsp;&nbsp;Datatype.Vector would be needless.
<br>
<p>In my opinion Datatype.Vector and friends should be implemented in
<br>
a way that they can be used with multi-dimensional Java arrays,
<br>
although I'm not sure if that is possible. The current version of
<br>
their implementation is not optimal, but nevertheless better than
<br>
nothing. Does somebody have other ideas or comments?
<br>
<p>Jeff, thank you very much for all your time and comments. Now I
<br>
will try some other methods and I let you know, if I find more
<br>
problems :-))
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21090.php">Crni Gorac: "[OMPI users] problem with MPI datatypes not defined as constants in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21088.php">Matthias Jurenz: "Re: [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21109.php">Jeff Squyres (jsquyres): "Re: [OMPI users] some comments on derived datatypes in mpiJava"</a>
<li><strong>Reply:</strong> <a href="21109.php">Jeff Squyres (jsquyres): "Re: [OMPI users] some comments on derived datatypes in mpiJava"</a>
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
