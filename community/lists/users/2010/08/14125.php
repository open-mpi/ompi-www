<?
$subject_val = "Re: [OMPI users] communicate C++ STL strucutures ??";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 14:55:01 2010" -->
<!-- isoreceived="20100825185501" -->
<!-- sent="Wed, 25 Aug 2010 14:54:35 -0400" -->
<!-- isosent="20100825185435" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] communicate C++ STL strucutures ??" -->
<!-- id="AANLkTikkZJ-TEMUJrneHjBKrZg6NzLMVAP8i75LeNg=5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="p2x9108753b1005071349oeef3129mcf5c615e55862ef5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] communicate C++ STL strucutures ??<br>
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 14:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14126.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14124.php">Jeff Squyres: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12975.php">Fernando Lemos: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
regarding Boost::MPI, does this library serialize custom objects??
<br>
this is the object i need to send:
<br>
<p>class Lattice{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int numNodes;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int numEdges;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;map&lt;int, Edge&gt; edges;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;map&lt;int, Node&gt; nodes;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stringstream key;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list&lt; list&lt;int&gt; &gt; keyLists;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool corrupt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool rec;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int nop;
<br>
}
<br>
<p>//and Edge, Node are classes too:
<br>
class Edge{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int n1,n2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int id;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool sp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool dead;
<br>
};
<br>
class Node{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool sp; //special flag
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int id, ext;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float x, y, z;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;public:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multimap&lt;int,int&gt; eMap;
<br>
};
<br>
<p>they have their corresponding methods and constructors, but those are their
<br>
data structures.
<br>
you recommend use Boost::MPI:Serialize or do manual Serialize?
<br>
best regards
<br>
Cristobal
<br>
<p><p><p><p>On Fri, May 7, 2010 at 4:49 PM, Fernando Lemos &lt;fernandotcl_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, May 7, 2010 at 5:33 PM, Cristobal Navarro &lt;axischire_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; my question is the following.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; is it possible to send and receive C++ objects or STL structures (for
</span><br>
<span class="quotelev2">&gt; &gt; example, send map&lt;a,b&gt; myMap) through openMPI SEND and RECEIVE functions?
</span><br>
<span class="quotelev2">&gt; &gt; at first glance i thought it was possible, but after reading some doc, im
</span><br>
<span class="quotelev2">&gt; &gt; not sure.
</span><br>
<span class="quotelev2">&gt; &gt; i dont have my source code at that stage for testing yet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not normally, you have to serialize it before sending and deserialize
</span><br>
<span class="quotelev1">&gt; it after sending. You could use Boost.MPI and Boost.Serialize too,
</span><br>
<span class="quotelev1">&gt; that would probably be the best way to go.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14125/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14126.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14124.php">Jeff Squyres: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12975.php">Fernando Lemos: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<!-- nextthread="start" -->
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
