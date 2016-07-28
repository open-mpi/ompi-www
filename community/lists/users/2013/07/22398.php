<?
$subject_val = "Re: [OMPI users] MPI_Bcast hanging after some amount of data	transferred on Infiniband network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 26 08:16:17 2013" -->
<!-- isoreceived="20130726121617" -->
<!-- sent="Fri, 26 Jul 2013 12:16:03 +0000" -->
<!-- isosent="20130726121603" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast hanging after some amount of data	transferred on Infiniband network" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F76F8A4_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CACndTaeH7QWvGET8rTWRK1DMtyCUU3MLKeFRLCRdoEMdH_3jgA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast hanging after some amount of data	transferred on Infiniband network<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-26 08:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22399.php">Dave Love: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Locker memory Limits error"</a>
<li><strong>In reply to:</strong> <a href="22395.php">Dusan Zoric: "[OMPI users] MPI_Bcast hanging after some amount of data transferred on Infiniband network"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1.4.3 is fairly ancient.
<br>
<p>Can you upgrade to 1.6.5?
<br>
<p>On Jul 26, 2013, at 3:15 AM, Dusan Zoric &lt;dusan.zoric_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running application that performs some transformations of large matrices on 7-node cluster. Nodes are connected via QDR 40 Gbit Infiniband. Open MPI 1.4.3 is installed on the system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given matrix transformation requires large data exchange between nodes in such a way that at each algorithm step there is one node that sends data and all others receive. Number of processes is equal to number of nodes used. I have to say that I am relatively new at MPI, but it seemed that ideal way of performing this is by using MPI_Bcast.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything worked fine for some not so large matrices. However, when matrix size increases, at some point application hangs and stays there forever.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not completely sure, but it seems like there is no errors in my code. I traced it in detail in order to check if there are some uncompleted collective operations before that specific call of MPI_Bcast, but everything looks fine. Also, for that specific call, root is correctly set in all processes, as well as message type and size, and, of course, MPI_Bcast is called in all processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also ran a lot of scenarios (running application on matrices of different sizes and changing the number of processes) in order to figure out when this happens. What can be observed is the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	&#149; for the matrix of the same size, application successfully finishes if I decrees number of processes
</span><br>
<span class="quotelev1">&gt; 	&#149; however, for given number of processes application will hang for some slightly larger matrix
</span><br>
<span class="quotelev1">&gt; 	&#149; for the given matrix size and number of processes where I have program hanging, if I reduce the size of the message in each MPI_Bcat call twice (of course the result will not be correct), there will not be hanging
</span><br>
<span class="quotelev1">&gt; So, it seems to me that problem could be in some buffers that MPI uses, and maybe some default MCA parameter should be changed, but, as I said, I do not have a lot of experience in MPI programming, and I have not found solution for this problem. So, the question is whether anyone has had a similar problem, and maybe knows if this could be solved by setting appropriate MCA parameter, or knows any other solution or explanation? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dusan Zoric
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22399.php">Dave Love: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Locker memory Limits error"</a>
<li><strong>In reply to:</strong> <a href="22395.php">Dusan Zoric: "[OMPI users] MPI_Bcast hanging after some amount of data transferred on Infiniband network"</a>
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
