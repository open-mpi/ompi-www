<?
$subject_val = "Re: [OMPI users] Message compression in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 13:26:03 2008" -->
<!-- isoreceived="20080422172603" -->
<!-- sent="Tue, 22 Apr 2008 13:25:54 -0400" -->
<!-- isosent="20080422172554" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Message compression in OpenMPI" -->
<!-- id="2F3EA1D2-6AD6-4B9E-9ADE-B63C19BB1D93_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="480DE23E.8070603_at_fgi.fi" -->
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
<strong>Subject:</strong> Re: [OMPI users] Message compression in OpenMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 13:25:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5453.php">gildo.rex_at_[hidden]: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5451.php">Arif Ali: "[OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="5445.php">Tomas Ukkonen: "[OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5485.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5485.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The paper you cited, while presenting a particular implementation  
<br>
doesn't bring present any new ideas. The compression of the data was  
<br>
studied for long time, and [unfortunately] it always came back to the  
<br>
same result. In the general case, not worth the effort !
<br>
<p>Now of course, if one limit itself to very regular applications (such  
<br>
as the one presented in the paper), where the matrices involved in the  
<br>
computation are well conditioned (such as in the paper), and if you  
<br>
only use MPI_DOUBLE (\cite{same_paper}), and finally if you only  
<br>
expect to run over slow Ethernet (1Gbs) (\cite{same_paper_again})...  
<br>
then yes one might get some benefit.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 22, 2008, at 9:03 AM, Tomas Ukkonen wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I read from somewhere that OpenMPI supports
</span><br>
<span class="quotelev1">&gt; some kind of data compression but I couldn't find
</span><br>
<span class="quotelev1">&gt; any information about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this true and how it can be used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any experiences about using it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to use compression in just some
</span><br>
<span class="quotelev1">&gt; subset of communications (communicator
</span><br>
<span class="quotelev1">&gt; specific compression settings)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In our MPI application we are transferring large
</span><br>
<span class="quotelev1">&gt; amounts of sparse/redundant data that compresses
</span><br>
<span class="quotelev1">&gt; very well. Also my initial tests showed significant
</span><br>
<span class="quotelev1">&gt; improvements in performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are also articles that suggest that compression
</span><br>
<span class="quotelev1">&gt; should be used [1].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] J. Ke, M. Burtcher and E. Speight.
</span><br>
<span class="quotelev1">&gt; Runtime Compression of MPI Messages to Improve the
</span><br>
<span class="quotelev1">&gt; Performance and Scalability of Parallel Applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Tomas
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
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5452/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5453.php">gildo.rex_at_[hidden]: "Re: [OMPI users] Problems with program-execution	with	OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5451.php">Arif Ali: "[OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="5445.php">Tomas Ukkonen: "[OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5485.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5485.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
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
