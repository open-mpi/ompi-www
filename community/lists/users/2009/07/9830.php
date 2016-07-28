<?
$subject_val = "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  5 22:25:08 2009" -->
<!-- isoreceived="20090706022508" -->
<!-- sent="Sun, 05 Jul 2009 22:20:23 -0400" -->
<!-- isosent="20090706022023" -->
<!-- name="John Phillips" -->
<!-- email="phillips_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers" -->
<!-- id="h2rn1j$ihi$1_at_ger.gmane.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="59846B78-A04A-4C82-B459-6F43E48CB33E_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers<br>
<strong>From:</strong> John Phillips (<em>phillips_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-05 22:20:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9831.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Previous message:</strong> <a href="9829.php">Robert Kubrick: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>In reply to:</strong> <a href="9828.php">Luis Vitorio Cargnini: "[OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9831.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Reply:</strong> <a href="9831.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Reply:</strong> <a href="9842.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Luis Vitorio Cargnini wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, after some explanation I start to use the bindings of C inside my 
</span><br>
<span class="quotelev1">&gt; C++ code, then comme my new doubt:
</span><br>
<span class="quotelev1">&gt; How to send a object through Send and Recv of MPI ? Because the types 
</span><br>
<span class="quotelev1">&gt; are CHAR, int, double, long double, you got.
</span><br>
<span class="quotelev1">&gt; Someone have any suggestion ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Vitorio.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>&nbsp;&nbsp;&nbsp;Vitorio,
<br>
<p>&nbsp;&nbsp;&nbsp;If you are sending collections of built in data types (ints, doubles, 
<br>
that sort of thing), then it may be easy, and it isn't awful. You want 
<br>
the data in a single stretch of continuous memory. If you are using an 
<br>
STL vector, this is already true. If you are using some other container, 
<br>
then no guarantees are provided for whether the memory is continuous.
<br>
<p>&nbsp;&nbsp;&nbsp;Imagine you are using a vector, and you know the number of entries in 
<br>
that vector. You want to send that vector to processor 2 on the world 
<br>
communicator with tag 0. Then, the code snippet would be;
<br>
<p>std::vector&lt;double&gt; v;
<br>
<p>... code that fills v with something ...
<br>
<p>int send_error;
<br>
<p>send_error = MPI_Send(&amp;v[0], v.size(), MPI_DOUBLE, 2, 0, 		
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;The &amp;v[0] part provides a pointer to the first member of the array 
<br>
that holds the data for the vector. If you know how long it will be, you 
<br>
could use that constant instead of using the v.size() function. Knowing 
<br>
the length also simplifies the send, since the remote process also knows 
<br>
the length and doesn't need a separate send to provide that information.
<br>
<p>&nbsp;&nbsp;&nbsp;It is also possible to provide a pointer to the start of storage for 
<br>
the character array that makes up a string. Both of these legacy 
<br>
friendly interfaces are part of the standard, and should be available on 
<br>
any reasonable implementation of the STL.
<br>
<p>&nbsp;&nbsp;&nbsp;If you are using a container that is not held in continuous memory, 
<br>
and the data is all of a single built in data type, then you need to 
<br>
first serialize the data into a block of continuous memory before 
<br>
sending it. (If the data block is large, then you may actually have to 
<br>
divide it into pieces and send them separately.)
<br>
<p>&nbsp;&nbsp;&nbsp;If the data is not a block of all a single built in type, (It may 
<br>
include several built in types, or it may be a custom data class with 
<br>
complex internal structure, for example.) then the serialization problem 
<br>
gets harder. In this case, look at the MPI provided facilities for 
<br>
dealing with complex data types and compare to the boost provided 
<br>
facilities. There is an initial learning curve for the boost facilities, 
<br>
but in the long run it may provide a substantial development time 
<br>
savings if you need to transmit and receive several complex types. In 
<br>
most cases, the run time cost is small for using the boost facilities. 
<br>
(according to the tests run during library development and documented 
<br>
with the library)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;John Phillips
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9831.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Previous message:</strong> <a href="9829.php">Robert Kubrick: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>In reply to:</strong> <a href="9828.php">Luis Vitorio Cargnini: "[OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9831.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Reply:</strong> <a href="9831.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Reply:</strong> <a href="9842.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
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
