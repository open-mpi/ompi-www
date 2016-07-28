<?
$subject_val = "Re: [OMPI users] MPI_Allreduce()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 17:19:31 2008" -->
<!-- isoreceived="20080313211931" -->
<!-- sent="Thu, 13 Mar 2008 17:18:51 -0400" -->
<!-- isosent="20080313211851" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce()" -->
<!-- id="30C8F6AB-370F-4C75-A57B-FACB1C48050B_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAC366E7-EB76-4422-B3DF-4CD30B6CA277_at_eecs.utk.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 17:18:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5194.php">Giovani: "[OMPI users] Receive operations hanging forever"</a>
<li><strong>Previous message:</strong> <a href="5192.php">Audet, Martin: "[OMPI users] RE : users Digest, Vol 841, Issue 3"</a>
<li><strong>In reply to:</strong> <a href="5188.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5248.php">Dave Grote: "[OMPI users] More on AlltoAll"</a>
<li><strong>Reply:</strong> <a href="5248.php">Dave Grote: "[OMPI users] More on AlltoAll"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is good information for me!
<br>
<p>For my users though its over the top.  I was looking for simple  
<br>
reasons why,  I think I have that now though.  Thanks!
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Mar 13, 2008, at 11:16 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Collective communication was a hot topic for the last [at least  
</span><br>
<span class="quotelev1">&gt; one] decade, and it is still today. Just minimizing the number of  
</span><br>
<span class="quotelev1">&gt; messages is not generally the best approach. The collectives are  
</span><br>
<span class="quotelev1">&gt; sensitive to the network characteristics and to the amount of data  
</span><br>
<span class="quotelev1">&gt; in a very complex way. The best approach is a well balanced  
</span><br>
<span class="quotelev1">&gt; algorithms, where the number of messages and the amount of data on  
</span><br>
<span class="quotelev1">&gt; each message is computed based on the network properties. This  
</span><br>
<span class="quotelev1">&gt; paper can give you an idea about this (<a href="http://csdl2.computer.org/">http://csdl2.computer.org/</a> 
</span><br>
<span class="quotelev1">&gt; persagen/DLAbsToc.jsp?resourcePath=/dl/proceedings/&amp;toc=comp/ 
</span><br>
<span class="quotelev1">&gt; proceedings/ipdps/2005/2312/16/2312toc.xml&amp;DOI=10.1109/IPDPS. 
</span><br>
<span class="quotelev1">&gt; 2005.335).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In terms of theoretical complexity, the best Allreduce algorithm  
</span><br>
<span class="quotelev1">&gt; I'm aware about allow you to decrease the complexity to O(log 
</span><br>
<span class="quotelev1">&gt; (size)) + O(count), where size is the size of the message and count  
</span><br>
<span class="quotelev1">&gt; is the number of participants in the communicator. You can find a  
</span><br>
<span class="quotelev1">&gt; reference to this algorithm here (<a href="http://www.hlrs.de/organization/">http://www.hlrs.de/organization/</a> 
</span><br>
<span class="quotelev1">&gt; par/services/models/mpi/myreduce.html).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even the Alltoall can be optimized, but unfortunately not as much  
</span><br>
<span class="quotelev1">&gt; as the other collective. This collective is considered as the most  
</span><br>
<span class="quotelev1">&gt; difficult to implement and to optimize, even on homogeneous  
</span><br>
<span class="quotelev1">&gt; environments. Another interesting paper on alltoall is http:// 
</span><br>
<span class="quotelev1">&gt; ieeexplore.ieee.org/Xplore/login.jsp?url=/ 
</span><br>
<span class="quotelev1">&gt; iel4/71/13981/00642949.pdf?arnumber=642949.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything more complex than a alltoall ... Well you can  
</span><br>
<span class="quotelev1">&gt; take a look in the same family of collectives communication  
</span><br>
<span class="quotelev1">&gt; patterns to alltoall[vwx].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2008, at 9:29 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, I know what you mean about if you have to use a 'all to all'
</span><br>
<span class="quotelev2">&gt;&gt; use MPI_Alltoall() don't roll your own.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So on paper, alltoall at first glance appears to be:  n*(n-1) -&gt; n^2-
</span><br>
<span class="quotelev2">&gt;&gt; n  -&gt; n^2 (for large n).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce  appears to be  simplest, n point to points followed by a
</span><br>
<span class="quotelev2">&gt;&gt; bcast().  Which can be simplified to gather + bcast.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Last I knew MPI_Bcast() was log(n)  and gather is (n).  So for
</span><br>
<span class="quotelev2">&gt;&gt; allreduce I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; n+log(n)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess I am confused how to get alltoall() down from n^2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 12, 2008, at 6:05 PM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you can avoid them it is better to avoid them. However it is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; always
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better to use a MPI_Alltoall than coding your own all to all with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; point to point, and in some algorithms you *need* to make a all  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication. What you should understand by &quot;avoid all to all&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; avoid MPI_alltoall, but choose a mathematic algorithm that does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need all to all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  The algorithmic complexity of AllReduce is the same as AlltoAll.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 12 mars 08 &#224; 17:01, Brock Palen a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have always been told that calls like MPI_Barrior()  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Allreduce()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and MPI_Alltoall() should be avoided.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I understand MPI_Alltoall()  as it goes n*(n-1) sends and thus  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grows
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; very very quickly.  MPI_Barrior() is very latency sensitive and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; generally is not needed in most cases I have seen it used.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But why MPI_Allreduce()?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What other functions should generally be avoided?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry this is kinda off topic for the list :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5194.php">Giovani: "[OMPI users] Receive operations hanging forever"</a>
<li><strong>Previous message:</strong> <a href="5192.php">Audet, Martin: "[OMPI users] RE : users Digest, Vol 841, Issue 3"</a>
<li><strong>In reply to:</strong> <a href="5188.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5248.php">Dave Grote: "[OMPI users] More on AlltoAll"</a>
<li><strong>Reply:</strong> <a href="5248.php">Dave Grote: "[OMPI users] More on AlltoAll"</a>
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
