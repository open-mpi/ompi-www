<?
$subject_val = "Re: [OMPI users] MPI_Allreduce()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 11:17:00 2008" -->
<!-- isoreceived="20080313151700" -->
<!-- sent="Thu, 13 Mar 2008 10:16:44 -0500" -->
<!-- isosent="20080313151644" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce()" -->
<!-- id="CAC366E7-EB76-4422-B3DF-4CD30B6CA277_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E2DDE6E8-5EF1-40B3-85B0-1A77CC0A0FBF_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 11:16:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5189.php">Rolly Ng: "[OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>Previous message:</strong> <a href="5187.php">Lawrence Stewart: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>In reply to:</strong> <a href="5185.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5193.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Reply:</strong> <a href="5193.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Collective communication was a hot topic for the last [at least one]  
<br>
decade, and it is still today. Just minimizing the number of messages  
<br>
is not generally the best approach. The collectives are sensitive to  
<br>
the network characteristics and to the amount of data in a very  
<br>
complex way. The best approach is a well balanced algorithms, where  
<br>
the number of messages and the amount of data on each message is  
<br>
computed based on the network properties. This paper can give you an  
<br>
idea about this (<a href="http://csdl2.computer.org/persagen/DLAbsToc.jsp?resourcePath=/dl/proceedings/&amp;toc=comp/proceedings/ipdps/2005/2312/16/2312toc.xml&amp;DOI=10.1109/IPDPS.2005.335">http://csdl2.computer.org/persagen/DLAbsToc.jsp?resourcePath=/dl/proceedings/&amp;toc=comp/proceedings/ipdps/2005/2312/16/2312toc.xml&amp;DOI=10.1109/IPDPS.2005.335</a> 
<br>
).
<br>
<p>In terms of theoretical complexity, the best Allreduce algorithm I'm  
<br>
aware about allow you to decrease the complexity to O(log(size)) +  
<br>
O(count), where size is the size of the message and count is the  
<br>
number of participants in the communicator. You can find a reference  
<br>
to this algorithm here (<a href="http://www.hlrs.de/organization/par/services/models/mpi/myreduce.html">http://www.hlrs.de/organization/par/services/models/mpi/myreduce.html</a> 
<br>
).
<br>
<p>Even the Alltoall can be optimized, but unfortunately not as much as  
<br>
the other collective. This collective is considered as the most  
<br>
difficult to implement and to optimize, even on homogeneous  
<br>
environments. Another interesting paper on alltoall is <a href="http://ieeexplore.ieee.org/Xplore/login.jsp?url=/iel4/71/13981/00642949.pdf">http://ieeexplore.ieee.org/Xplore/login.jsp?url=/iel4/71/13981/00642949.pdf</a> 
<br>
?arnumber=642949.
<br>
<p>Is there anything more complex than a alltoall ... Well you can take a  
<br>
look in the same family of collectives communication patterns to  
<br>
alltoall[vwx].
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 13, 2008, at 9:29 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Yeah, I know what you mean about if you have to use a 'all to all'
</span><br>
<span class="quotelev1">&gt; use MPI_Alltoall() don't roll your own.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So on paper, alltoall at first glance appears to be:  n*(n-1) -&gt; n^2-
</span><br>
<span class="quotelev1">&gt; n  -&gt; n^2 (for large n).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Allreduce  appears to be  simplest, n point to points followed by a
</span><br>
<span class="quotelev1">&gt; bcast().  Which can be simplified to gather + bcast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Last I knew MPI_Bcast() was log(n)  and gather is (n).  So for
</span><br>
<span class="quotelev1">&gt; allreduce I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; n+log(n)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess I am confused how to get alltoall() down from n^2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2008, at 6:05 PM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you can avoid them it is better to avoid them. However it is  
</span><br>
<span class="quotelev2">&gt;&gt; always
</span><br>
<span class="quotelev2">&gt;&gt; better to use a MPI_Alltoall than coding your own all to all with
</span><br>
<span class="quotelev2">&gt;&gt; point to point, and in some algorithms you *need* to make a all to  
</span><br>
<span class="quotelev2">&gt;&gt; all
</span><br>
<span class="quotelev2">&gt;&gt; communication. What you should understand by &quot;avoid all to all&quot; is  
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; avoid MPI_alltoall, but choose a mathematic algorithm that does not
</span><br>
<span class="quotelev2">&gt;&gt; need all to all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The algorithmic complexity of AllReduce is the same as AlltoAll.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 12 mars 08 &#224; 17:01, Brock Palen a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have always been told that calls like MPI_Barrior()  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Allreduce()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and MPI_Alltoall() should be avoided.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I understand MPI_Alltoall()  as it goes n*(n-1) sends and thus grows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very very quickly.  MPI_Barrior() is very latency sensitive and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generally is not needed in most cases I have seen it used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But why MPI_Allreduce()?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What other functions should generally be avoided?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry this is kinda off topic for the list :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5188/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5189.php">Rolly Ng: "[OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<li><strong>Previous message:</strong> <a href="5187.php">Lawrence Stewart: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>In reply to:</strong> <a href="5185.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5193.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Reply:</strong> <a href="5193.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
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
