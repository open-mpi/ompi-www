<?
$subject_val = "Re: [OMPI users] communicate C++ STL strucutures ??";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 17:05:42 2010" -->
<!-- isoreceived="20100507210542" -->
<!-- sent="Fri, 7 May 2010 17:05:17 -0400" -->
<!-- isosent="20100507210517" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] communicate C++ STL strucutures ??" -->
<!-- id="y2vb66245471005071405tf2d54559y61cd1d75751d525a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-05-07 17:05:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12979.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="12977.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="12975.php">Fernando Lemos: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14125.php">Cristobal Navarro: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the answer,
<br>
<p>ill will look at them when i get to this point, i've heard good comments
<br>
about boost.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12979.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="12977.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="12975.php">Fernando Lemos: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14125.php">Cristobal Navarro: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
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
