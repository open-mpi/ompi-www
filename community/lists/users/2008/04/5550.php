<?
$subject_val = "Re: [OMPI users] Message compression in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 03:15:18 2008" -->
<!-- isoreceived="20080428071518" -->
<!-- sent="Mon, 28 Apr 2008 10:15:11 +0300" -->
<!-- isosent="20080428071511" -->
<!-- name="Tomas Ukkonen" -->
<!-- email="tomas.ukkonen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Message compression in OpenMPI" -->
<!-- id="4815797F.6010505_at_fgi.fi" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3D6371B-EF04-494B-BA7B-8B8D409D81DE_at_eecs.utk.edu" -->
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
<strong>From:</strong> Tomas Ukkonen (<em>tomas.ukkonen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-28 03:15:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5551.php">Leonardo Fialho: "[OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Previous message:</strong> <a href="5549.php">Alberto Giannetti: "[OMPI users] MPI_Lookup_name error"</a>
<li><strong>In reply to:</strong> <a href="5513.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aur&#233;lien Bouteiller wrote:
<br>
<span class="quotelev1">&gt;  From a pretty old experiment I made, compression was giving good  
</span><br>
<span class="quotelev1">&gt; results on 10Mbps network but was actually decreasing RTT on 100Mbs  
</span><br>
<span class="quotelev1">&gt; and more. I played with all the zlib settings from 1 to 9, and  
</span><br>
<span class="quotelev1">&gt; actually even the low compression setting was unable to reach decent  
</span><br>
<span class="quotelev1">&gt; performance. I don't believe that the computing/bandwidth ratio has  
</span><br>
<span class="quotelev1">&gt; changed to favor compression.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok.
<br>
So it is only useful to use compression in narrow special cases.
<br>
Thanks for info.
<br>
<p><span class="quotelev1">&gt; Aurelien.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 24 avr. 08 &#224; 11:06, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Actually, even in this particular condition (over internet)1  
</span><br>
<span class="quotelev2">&gt;&gt; compression make sense only for very specific data. The problem is  
</span><br>
<span class="quotelev2">&gt;&gt; that usually the compression algorithm is very expensive if you want  
</span><br>
<span class="quotelev2">&gt;&gt; to really get a interesting factor of size reduction. And there is  
</span><br>
<span class="quotelev2">&gt;&gt; the tradeoff, what you save in terms of data transfer you lose in  
</span><br>
<span class="quotelev2">&gt;&gt; terms of compression time. In other terms, the compression became  
</span><br>
<span class="quotelev2">&gt;&gt; interesting in only 2 scenarios: you have a very congested network  
</span><br>
<span class="quotelev2">&gt;&gt; (really very very congested) or you have a network with a limited  
</span><br>
<span class="quotelev2">&gt;&gt; bandwidth.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The algorithm use in the paper you cited is fast, but unfortunately  
</span><br>
<span class="quotelev2">&gt;&gt; very specific for MPI_DOUBLE and only works if the data exhibit the  
</span><br>
<span class="quotelev2">&gt;&gt; properties I cited in my previous email. The generic compression  
</span><br>
<span class="quotelev2">&gt;&gt; algorithms are at least one order of magnitude slower. And then  
</span><br>
<span class="quotelev2">&gt;&gt; again, one needs a very slow network in order to get any benefits  
</span><br>
<span class="quotelev2">&gt;&gt; from doing the compression ... And of course slow networks is not  
</span><br>
<span class="quotelev2">&gt;&gt; exactly the most common place where you will find MPI applications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But as Jeff stated in his email, contributions are always welcomed :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 24, 2008, at 8:26 AM, Tomas Ukkonen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The paper you cited, while presenting a particular implementation  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't bring present any new ideas. The compression of the data  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was studied for long time, and [unfortunately] it always came back  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the same result. In the general case, not worth the effort !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now of course, if one limit itself to very regular applications  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (such as the one presented in the paper), where the matrices  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; involved in the computation are well conditioned (such as in the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paper), and if you only use MPI_DOUBLE (\cite{same_paper}), and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; finally if you only expect to run over slow Ethernet (1Gbs)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (\cite{same_paper_again})... then yes one might get some benefit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, you are probably right that its not worth the effort in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; general and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; especially not in HPC environments where you have very fast network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I can think of (rather important) special cases where it is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; important
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - non HPC environments with slow network: beowulf clusters and/or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  internet + normal PCs where you use existing workstations and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  for computations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - communication/io-bound computations where you transfer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  large redundant datasets between nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it would be nice to be able to turn on the compression (for spefic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicators and/or data transfers) when you need it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tomas
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 22, 2008, at 9:03 AM, Tomas Ukkonen wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I read from somewhere that OpenMPI supports
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some kind of data compression but I couldn't find
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; any information about it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this true and how it can be used?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does anyone have any experiences about using it?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is it possible to use compression in just some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subset of communications (communicator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specific compression settings)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In our MPI application we are transferring large
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; amounts of sparse/redundant data that compresses
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; very well. Also my initial tests showed significant
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; improvements in performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There are also articles that suggest that compression
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; should be used [1].
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [1] J. Ke, M. Burtcher and E. Speight.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Runtime Compression of MPI Messages to Improve the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Performance and Scalability of Parallel Applications.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tomas
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Tomas Ukkonen, tutkija
Finnish Geodetic Institute
PL 15 (Geodeetinrinne 2)
02431 MASALA, FINLAND
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5551.php">Leonardo Fialho: "[OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>Previous message:</strong> <a href="5549.php">Alberto Giannetti: "[OMPI users] MPI_Lookup_name error"</a>
<li><strong>In reply to:</strong> <a href="5513.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Message compression in OpenMPI"</a>
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
