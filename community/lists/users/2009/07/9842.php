<?
$subject_val = "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 15:21:09 2009" -->
<!-- isoreceived="20090706192109" -->
<!-- sent="Mon, 6 Jul 2009 15:20:55 -0400" -->
<!-- isosent="20090706192055" -->
<!-- name="Luis Vitorio Cargnini" -->
<!-- email="lvcargnini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers" -->
<!-- id="F198185A-F877-4939-8840-E77980086062_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="h2rn1j$ihi$1_at_ger.gmane.org" -->
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
<strong>Date:</strong> 2009-07-06 15:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9843.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Previous message:</strong> <a href="9841.php">Ross Boylan: "[OMPI users] any way to get serial time on head node?"</a>
<li><strong>In reply to:</strong> <a href="9830.php">John Phillips: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9850.php">John Phillips: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Reply:</strong> <a href="9850.php">John Phillips: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
just one additional and if I have:
<br>
vector&lt; vector&lt;double&gt; &gt; x;
<br>
<p>How to use the MPI_Send
<br>
<p>MPI_Send(&amp;x[0][0], x[0].size(),MPI_DOUBLE, 2, 0, MPI_COMM_WORLD);
<br>
<p>?
<br>
<p>Le 09-07-05 &#224; 22:20, John Phillips a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Luis Vitorio Cargnini wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; So, after some explanation I start to use the bindings of C inside  
</span><br>
<span class="quotelev2">&gt;&gt; my C++ code, then comme my new doubt:
</span><br>
<span class="quotelev2">&gt;&gt; How to send a object through Send and Recv of MPI ? Because the  
</span><br>
<span class="quotelev2">&gt;&gt; types are CHAR, int, double, long double, you got.
</span><br>
<span class="quotelev2">&gt;&gt; Someone have any suggestion ?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; Vitorio.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Vitorio,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If you are sending collections of built in data types (ints,  
</span><br>
<span class="quotelev1">&gt; doubles, that sort of thing), then it may be easy, and it isn't  
</span><br>
<span class="quotelev1">&gt; awful. You want the data in a single stretch of continuous memory.  
</span><br>
<span class="quotelev1">&gt; If you are using an STL vector, this is already true. If you are  
</span><br>
<span class="quotelev1">&gt; using some other container, then no guarantees are provided for  
</span><br>
<span class="quotelev1">&gt; whether the memory is continuous.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Imagine you are using a vector, and you know the number of entries  
</span><br>
<span class="quotelev1">&gt; in that vector. You want to send that vector to processor 2 on the  
</span><br>
<span class="quotelev1">&gt; world communicator with tag 0. Then, the code snippet would be;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; std::vector&lt;double&gt; v;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... code that fills v with something ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int send_error;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; send_error = MPI_Send(&amp;v[0], v.size(), MPI_DOUBLE, 2, 0, 		
</span><br>
<span class="quotelev1">&gt; 		      MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The &amp;v[0] part provides a pointer to the first member of the array  
</span><br>
<span class="quotelev1">&gt; that holds the data for the vector. If you know how long it will be,  
</span><br>
<span class="quotelev1">&gt; you could use that constant instead of using the v.size() function.  
</span><br>
<span class="quotelev1">&gt; Knowing the length also simplifies the send, since the remote  
</span><br>
<span class="quotelev1">&gt; process also knows the length and doesn't need a separate send to  
</span><br>
<span class="quotelev1">&gt; provide that information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  It is also possible to provide a pointer to the start of storage  
</span><br>
<span class="quotelev1">&gt; for the character array that makes up a string. Both of these legacy  
</span><br>
<span class="quotelev1">&gt; friendly interfaces are part of the standard, and should be  
</span><br>
<span class="quotelev1">&gt; available on any reasonable implementation of the STL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If you are using a container that is not held in continuous memory,  
</span><br>
<span class="quotelev1">&gt; and the data is all of a single built in data type, then you need to  
</span><br>
<span class="quotelev1">&gt; first serialize the data into a block of continuous memory before  
</span><br>
<span class="quotelev1">&gt; sending it. (If the data block is large, then you may actually have  
</span><br>
<span class="quotelev1">&gt; to divide it into pieces and send them separately.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If the data is not a block of all a single built in type, (It may  
</span><br>
<span class="quotelev1">&gt; include several built in types, or it may be a custom data class  
</span><br>
<span class="quotelev1">&gt; with complex internal structure, for example.) then the  
</span><br>
<span class="quotelev1">&gt; serialization problem gets harder. In this case, look at the MPI  
</span><br>
<span class="quotelev1">&gt; provided facilities for dealing with complex data types and compare  
</span><br>
<span class="quotelev1">&gt; to the boost provided facilities. There is an initial learning curve  
</span><br>
<span class="quotelev1">&gt; for the boost facilities, but in the long run it may provide a  
</span><br>
<span class="quotelev1">&gt; substantial development time savings if you need to transmit and  
</span><br>
<span class="quotelev1">&gt; receive several complex types. In most cases, the run time cost is  
</span><br>
<span class="quotelev1">&gt; small for using the boost facilities. (according to the tests run  
</span><br>
<span class="quotelev1">&gt; during library development and documented with the library)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 			John Phillips
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9842/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9842/PGP.sig">Ceci est une signature &#233;lectronique PGP</a>
</ul>
<!-- attachment="PGP.sig" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9843.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Previous message:</strong> <a href="9841.php">Ross Boylan: "[OMPI users] any way to get serial time on head node?"</a>
<li><strong>In reply to:</strong> <a href="9830.php">John Phillips: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9850.php">John Phillips: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Reply:</strong> <a href="9850.php">John Phillips: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
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
