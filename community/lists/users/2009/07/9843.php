<?
$subject_val = "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 15:24:17 2009" -->
<!-- isoreceived="20090706192417" -->
<!-- sent="Mon, 6 Jul 2009 15:24:07 -0400" -->
<!-- isosent="20090706192407" -->
<!-- name="Luis Vitorio Cargnini" -->
<!-- email="lvcargnini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers" -->
<!-- id="023BDA27-CFB8-47DC-980A-CE44DDEF886F_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A51BA86.6050606_at_ntlworld.com" -->
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
<strong>From:</strong> Luis Vitorio Cargnini (<em>lvcargnini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 15:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9844.php">Justin Luitjens: "[OMPI users] Segfault when using valgrind"</a>
<li><strong>Previous message:</strong> <a href="9842.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>In reply to:</strong> <a href="9833.php">Number Cruncher: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9846.php">Raymond Wan: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Reply:</strong> <a href="9846.php">Raymond Wan: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, but I really do not want to use Boost.
<br>
Is easier ? certainly is, but I want to make it using only MPI itself  
<br>
and not been dependent of a Library, or templates like the majority of  
<br>
boost a huge set of templates and wrappers for different libraries,  
<br>
implemented in C, supplying a wrapper for C++.
<br>
I admit Boost is a valuable tool, but in my case, as much independent  
<br>
I could be from additional libs, better.
<br>
<p>Le 09-07-06 &#224; 04:49, Number Cruncher a &#233;crit :
<br>
<p><span class="quotelev1">&gt; I strongly suggest you take a look at boost::mpi, <a href="http://www.boost.org/doc/libs/1_39_0/doc/html/mpi.html">http://www.boost.org/doc/libs/1_39_0/doc/html/mpi.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It handles serialization transparently and has some great natural  
</span><br>
<span class="quotelev1">&gt; extensions to the MPI C interface for C++, e.g.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bool global = all_reduce(comm, local, logical_and&lt;bool&gt;());
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This sets &quot;global&quot; to &quot;local_0 &amp;&amp; local_1 &amp;&amp; ... &amp;&amp; local_N-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Luis Vitorio Cargnini wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much John, the explanation of &amp;v[0], was the kind of  
</span><br>
<span class="quotelev2">&gt;&gt; think that I was looking for, thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt; This kind of approach solves my problems.
</span><br>
<span class="quotelev2">&gt;&gt; Le 09-07-05 &#224; 22:20, John Phillips a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Luis Vitorio Cargnini wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, after some explanation I start to use the bindings of C  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inside my C++ code, then comme my new doubt:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How to send a object through Send and Recv of MPI ? Because the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; types are CHAR, int, double, long double, you got.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Someone have any suggestion ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Vitorio.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vitorio,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are sending collections of built in data types (ints,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doubles, that sort of thing), then it may be easy, and it isn't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; awful. You want the data in a single stretch of continuous memory.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are using an STL vector, this is already true. If you are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using some other container, then no guarantees are provided for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whether the memory is continuous.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Imagine you are using a vector, and you know the number of entries  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in that vector. You want to send that vector to processor 2 on the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; world communicator with tag 0. Then, the code snippet would be;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::vector&lt;double&gt; v;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... code that fills v with something ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int send_error;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send_error = MPI_Send(&amp;v[0], v.size(), MPI_DOUBLE, 2,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0,                      MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &amp;v[0] part provides a pointer to the first member of the array  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that holds the data for the vector. If you know how long it will  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be, you could use that constant instead of using the v.size()  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function. Knowing the length also simplifies the send, since the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote process also knows the length and doesn't need a separate  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send to provide that information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is also possible to provide a pointer to the start of storage  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the character array that makes up a string. Both of these  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; legacy friendly interfaces are part of the standard, and should be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available on any reasonable implementation of the STL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are using a container that is not held in continuous  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory, and the data is all of a single built in data type, then  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you need to first serialize the data into a block of continuous  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory before sending it. (If the data block is large, then you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may actually have to divide it into pieces and send them  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separately.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the data is not a block of all a single built in type, (It may  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include several built in types, or it may be a custom data class  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with complex internal structure, for example.) then the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; serialization problem gets harder. In this case, look at the MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provided facilities for dealing with complex data types and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compare to the boost provided facilities. There is an initial  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; learning curve for the boost facilities, but in the long run it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may provide a substantial development time savings if you need to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; transmit and receive several complex types. In most cases, the run  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time cost is small for using the boost facilities. (according to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the tests run during library development and documented with the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            John Phillips
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9843/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9843/PGP.sig">Ceci est une signature &#233;lectronique PGP</a>
</ul>
<!-- attachment="PGP.sig" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9844.php">Justin Luitjens: "[OMPI users] Segfault when using valgrind"</a>
<li><strong>Previous message:</strong> <a href="9842.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>In reply to:</strong> <a href="9833.php">Number Cruncher: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9846.php">Raymond Wan: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Reply:</strong> <a href="9846.php">Raymond Wan: "Re: [OMPI users] MPI and C++ (Boost)"</a>
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
