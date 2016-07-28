<?
$subject_val = "Re: [OMPI users] Question on MPI_Ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 08:41:11 2011" -->
<!-- isoreceived="20110913124111" -->
<!-- sent="Tue, 13 Sep 2011 13:41:05 +0100 (BST)" -->
<!-- isosent="20110913124105" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on MPI_Ssend" -->
<!-- id="1315917665.27418.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9A4BFC3F-4B92-40FA-BC9E-713D9A425EC1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on MPI_Ssend<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 08:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17255.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Previous message:</strong> <a href="17253.php">Jeff Squyres: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>In reply to:</strong> <a href="17249.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17255.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Reply:</strong> <a href="17255.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff and MPI Users,


Yes, I know about the ISends. I do not want to have ISends for other reasons. 


The problem that bothers me is that I have one process waiting on MPI_Recv(...) and the other process on MPI_Ssend(...), but still both are blocked. 


This happens arbitrarily. At other times, these calls go through perfectly.

Also, I read the definition of MPI_Ssend(...) that you sent, but then it does not explain why both MPI_Ssend(...) and MPI_Recv(...) are blocked seemingly forever. 


I notice that such a block happens when MPI_Recv(...) is posted before MPI_Ssend(...).

Any ideas?

Thanks for your input already.


Best

Devendra



________________________________
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: devendra rai &lt;rai.devendra_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Tuesday, 13 September 2011, 13:16
Subject: Re: [OMPI users] Question on MPI_Ssend

On Sep 13, 2011, at 5:02 AM, devendra rai wrote:

&gt; I am using MPI_Ssend and a corresponding a MPI_Recv. I notice that whenever MPI_Recv starts waiting firs, and then MPI_Ssend is posted, the MPI calls just block. This, of course results in non-coherent application behavior. 

I'm not sure what you mean by &quot;non-coherent application behavior.&quot;

Note that MPI_SSEND is a synchronous send, which, by definition, means that it won't complete until the matching receive has been posted.&#160; In practice, this usually means that the receiver has started to receive (and sent an ACK back to the sender).&#160; 

If you want non-blocking behavior, you might want to investigate MPI_ISEND and MPI_IRECV.

-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17254/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17255.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Previous message:</strong> <a href="17253.php">Jeff Squyres: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>In reply to:</strong> <a href="17249.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17255.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Reply:</strong> <a href="17255.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
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
