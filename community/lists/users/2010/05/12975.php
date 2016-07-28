<?
$subject_val = "Re: [OMPI users] communicate C++ STL strucutures ??";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 16:49:47 2010" -->
<!-- isoreceived="20100507204947" -->
<!-- sent="Fri, 7 May 2010 17:49:43 -0300" -->
<!-- isosent="20100507204943" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] communicate C++ STL strucutures ??" -->
<!-- id="p2x9108753b1005071349oeef3129mcf5c615e55862ef5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="j2ob66245471005071333g790b98c5h98ce97b75ecee7fe_at_mail.gmail.com" -->
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
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 16:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12976.php">Secretan Yves: "[OMPI users] MPI_FILE_SET_ERRHANDLER returns an error with MPI_FILE_NULL"</a>
<li><strong>Previous message:</strong> <a href="12974.php">Cristobal Navarro: "[OMPI users] communicate C++ STL strucutures ??"</a>
<li><strong>In reply to:</strong> <a href="12974.php">Cristobal Navarro: "[OMPI users] communicate C++ STL strucutures ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12978.php">Cristobal Navarro: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<li><strong>Reply:</strong> <a href="12978.php">Cristobal Navarro: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14125.php">Cristobal Navarro: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, May 7, 2010 at 5:33 PM, Cristobal Navarro &lt;axischire_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my question is the following.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is it possible to send and receive C++ objects or STL structures (for
</span><br>
<span class="quotelev1">&gt; example, send map&lt;a,b&gt; myMap) through openMPI SEND and RECEIVE functions?
</span><br>
<span class="quotelev1">&gt; at first glance i thought it was possible, but after reading some doc, im
</span><br>
<span class="quotelev1">&gt; not sure.
</span><br>
<span class="quotelev1">&gt; i dont have my source code at that stage for testing yet
</span><br>
<p>Not normally, you have to serialize it before sending and deserialize
<br>
it after sending. You could use Boost.MPI and Boost.Serialize too,
<br>
that would probably be the best way to go.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12976.php">Secretan Yves: "[OMPI users] MPI_FILE_SET_ERRHANDLER returns an error with MPI_FILE_NULL"</a>
<li><strong>Previous message:</strong> <a href="12974.php">Cristobal Navarro: "[OMPI users] communicate C++ STL strucutures ??"</a>
<li><strong>In reply to:</strong> <a href="12974.php">Cristobal Navarro: "[OMPI users] communicate C++ STL strucutures ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12978.php">Cristobal Navarro: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<li><strong>Reply:</strong> <a href="12978.php">Cristobal Navarro: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14125.php">Cristobal Navarro: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
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
