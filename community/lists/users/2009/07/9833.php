<?
$subject_val = "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 04:49:15 2009" -->
<!-- isoreceived="20090706084915" -->
<!-- sent="Mon, 06 Jul 2009 09:49:10 +0100" -->
<!-- isosent="20090706084910" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers" -->
<!-- id="4A51BA86.6050606_at_ntlworld.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8ECBD961-14D4-4219-9E7F-86F8D8F9F159_at_gmail.com" -->
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
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 04:49:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9834.php">Manuel Holtgrewe: "[OMPI users] Parallel I/O Usage"</a>
<li><strong>Previous message:</strong> <a href="9832.php">Mallikarjuna Shastry: "[OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="9831.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9843.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Reply:</strong> <a href="9843.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I strongly suggest you take a look at boost::mpi, 
<br>
<a href="http://www.boost.org/doc/libs/1_39_0/doc/html/mpi.html">http://www.boost.org/doc/libs/1_39_0/doc/html/mpi.html</a>
<br>
<p>It handles serialization transparently and has some great natural 
<br>
extensions to the MPI C interface for C++, e.g.
<br>
<p>bool global = all_reduce(comm, local, logical_and&lt;bool&gt;());
<br>
<p>This sets &quot;global&quot; to &quot;local_0 &amp;&amp; local_1 &amp;&amp; ... &amp;&amp; local_N-1&quot;
<br>
<p><p>Luis Vitorio Cargnini wrote:
<br>
<span class="quotelev1">&gt; Thank you very much John, the explanation of &amp;v[0], was the kind of 
</span><br>
<span class="quotelev1">&gt; think that I was looking for, thank you very much.
</span><br>
<span class="quotelev1">&gt; This kind of approach solves my problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 09-07-05 &#224; 22:20, John Phillips a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Luis Vitorio Cargnini wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, after some explanation I start to use the bindings of C inside my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C++ code, then comme my new doubt:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How to send a object through Send and Recv of MPI ? Because the types 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are CHAR, int, double, long double, you got.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Someone have any suggestion ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vitorio.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Vitorio,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  If you are sending collections of built in data types (ints, doubles, 
</span><br>
<span class="quotelev2">&gt;&gt; that sort of thing), then it may be easy, and it isn't awful. You want 
</span><br>
<span class="quotelev2">&gt;&gt; the data in a single stretch of continuous memory. If you are using an 
</span><br>
<span class="quotelev2">&gt;&gt; STL vector, this is already true. If you are using some other 
</span><br>
<span class="quotelev2">&gt;&gt; container, then no guarantees are provided for whether the memory is 
</span><br>
<span class="quotelev2">&gt;&gt; continuous.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Imagine you are using a vector, and you know the number of entries in 
</span><br>
<span class="quotelev2">&gt;&gt; that vector. You want to send that vector to processor 2 on the world 
</span><br>
<span class="quotelev2">&gt;&gt; communicator with tag 0. Then, the code snippet would be;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; std::vector&lt;double&gt; v;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ... code that fills v with something ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int send_error;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; send_error = MPI_Send(&amp;v[0], v.size(), MPI_DOUBLE, 2, 0,        
</span><br>
<span class="quotelev2">&gt;&gt;               MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The &amp;v[0] part provides a pointer to the first member of the array 
</span><br>
<span class="quotelev2">&gt;&gt; that holds the data for the vector. If you know how long it will be, 
</span><br>
<span class="quotelev2">&gt;&gt; you could use that constant instead of using the v.size() function. 
</span><br>
<span class="quotelev2">&gt;&gt; Knowing the length also simplifies the send, since the remote process 
</span><br>
<span class="quotelev2">&gt;&gt; also knows the length and doesn't need a separate send to provide that 
</span><br>
<span class="quotelev2">&gt;&gt; information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  It is also possible to provide a pointer to the start of storage for 
</span><br>
<span class="quotelev2">&gt;&gt; the character array that makes up a string. Both of these legacy 
</span><br>
<span class="quotelev2">&gt;&gt; friendly interfaces are part of the standard, and should be available 
</span><br>
<span class="quotelev2">&gt;&gt; on any reasonable implementation of the STL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  If you are using a container that is not held in continuous memory, 
</span><br>
<span class="quotelev2">&gt;&gt; and the data is all of a single built in data type, then you need to 
</span><br>
<span class="quotelev2">&gt;&gt; first serialize the data into a block of continuous memory before 
</span><br>
<span class="quotelev2">&gt;&gt; sending it. (If the data block is large, then you may actually have to 
</span><br>
<span class="quotelev2">&gt;&gt; divide it into pieces and send them separately.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  If the data is not a block of all a single built in type, (It may 
</span><br>
<span class="quotelev2">&gt;&gt; include several built in types, or it may be a custom data class with 
</span><br>
<span class="quotelev2">&gt;&gt; complex internal structure, for example.) then the serialization 
</span><br>
<span class="quotelev2">&gt;&gt; problem gets harder. In this case, look at the MPI provided facilities 
</span><br>
<span class="quotelev2">&gt;&gt; for dealing with complex data types and compare to the boost provided 
</span><br>
<span class="quotelev2">&gt;&gt; facilities. There is an initial learning curve for the boost 
</span><br>
<span class="quotelev2">&gt;&gt; facilities, but in the long run it may provide a substantial 
</span><br>
<span class="quotelev2">&gt;&gt; development time savings if you need to transmit and receive several 
</span><br>
<span class="quotelev2">&gt;&gt; complex types. In most cases, the run time cost is small for using the 
</span><br>
<span class="quotelev2">&gt;&gt; boost facilities. (according to the tests run during library 
</span><br>
<span class="quotelev2">&gt;&gt; development and documented with the library)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             John Phillips
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9834.php">Manuel Holtgrewe: "[OMPI users] Parallel I/O Usage"</a>
<li><strong>Previous message:</strong> <a href="9832.php">Mallikarjuna Shastry: "[OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="9831.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9843.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Reply:</strong> <a href="9843.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
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
