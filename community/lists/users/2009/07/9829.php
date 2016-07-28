<?
$subject_val = "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  5 21:07:48 2009" -->
<!-- isoreceived="20090706010748" -->
<!-- sent="Sun, 5 Jul 2009 21:04:49 -0400" -->
<!-- isosent="20090706010449" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers" -->
<!-- id="DF66DACE-9D3E-4603-9C24-5EB9A0BC6392_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-05 21:04:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9830.php">John Phillips: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Previous message:</strong> <a href="9828.php">Luis Vitorio Cargnini: "[OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>In reply to:</strong> <a href="9828.php">Luis Vitorio Cargnini: "[OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9830.php">John Phillips: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Regardless of MPI, when sending C++ object over the network you have  
<br>
to serialize their contents. The structures, or classes, have to be  
<br>
coded to a stream of bytes, sent over the network, then recoded into  
<br>
their complex object types by the receiving application. There is no  
<br>
way to send object instances in their original memory format because  
<br>
the object layout is dependent on the machine/memory/compiler (plus a  
<br>
number of other things, I'm simplifying here).
<br>
<p>boost offers a library to easy the serialization work, but you still  
<br>
have to provide hooks to convert the object to a network format.
<br>
<p><a href="http://www.boost.org/doc/libs/1_39_0/libs/serialization/doc/index.html">http://www.boost.org/doc/libs/1_39_0/libs/serialization/doc/index.html</a>
<br>
<p><p>On Jul 5, 2009, at 8:54 PM, Luis Vitorio Cargnini wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, after some explanation I start to use the bindings of C inside  
</span><br>
<span class="quotelev1">&gt; my C++ code, then comme my new doubt:
</span><br>
<span class="quotelev1">&gt; How to send a object through Send and Recv of MPI ? Because the  
</span><br>
<span class="quotelev1">&gt; types are CHAR, int, double, long double, you got.
</span><br>
<span class="quotelev1">&gt; Someone have any suggestion ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Vitorio._______________________________________________
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
<li><strong>Next message:</strong> <a href="9830.php">John Phillips: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Previous message:</strong> <a href="9828.php">Luis Vitorio Cargnini: "[OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>In reply to:</strong> <a href="9828.php">Luis Vitorio Cargnini: "[OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9830.php">John Phillips: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
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
