<?
$subject_val = "Re: [OMPI users] Question on MPI_Ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 05:28:20 2011" -->
<!-- isoreceived="20110914092820" -->
<!-- sent="Wed, 14 Sep 2011 10:28:15 +0100 (BST)" -->
<!-- isosent="20110914092815" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on MPI_Ssend" -->
<!-- id="1315992495.1355.YahooMailNeo_at_web29618.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="68D89FEB-DDCD-4C4F-A469-332A4036DB47_at_cisco.com" -->
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
<strong>Date:</strong> 2011-09-14 05:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17281.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17279.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17255.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Reply:</strong> <a href="17282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello MPI Forum, Jeff

Well, the problem is not with incorrect arguments with MPI_Ssend(...) and/or MPI_Recv(...).&#160; I confirmed this. Also, if there were any obvious programming and logical errors, I would never have any successful run. In fact, I am having some&#160; runs which go through successfully.

The problem seems to be random, and therefore, I am finding it hard to debug. I am using Open MPI v. 1.4.3, on Linux kernel 2.6.37.6-0.7. 


I am also using tags, in addition to normal sender node and receiver nodes. I am using integers for tags, and none of the tags are more than 1000. I am also running MPI_Ssends and MPI_Recv within pthreads, and I believe that it should be okay.

So, the question is, am I stumbling across a bug, or an incorrect MPI installation?

Thanks a lot.

Best

Devendra



________________________________
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: devendra rai &lt;rai.devendra_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Tuesday, 13 September 2011, 16:13
Subject: Re: [OMPI users] Question on MPI_Ssend

On Sep 13, 2011, at 8:41 AM, devendra rai wrote:

&gt; Also, I read the definition of MPI_Ssend(...) that you sent, but then it does not explain why both MPI_Ssend(...) and MPI_Recv(...) are blocked seemingly forever. 

Oh, they're blocked *forever*!&#160; Sorry; I didn't get that from your prior description -- I thought you just wanted non-blocking instead of blocking.

&gt; I notice that such a block happens when MPI_Recv(...) is posted before MPI_Ssend(...).

It doesn't matter if the receive is posted before the send or the other way around.

When blocking sends/receives block forever, it usually means that there's a mismatch in the communicator, tag, or src/dest arguments between the two.

-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17280/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17281.php">Jeff Squyres: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17279.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17255.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Reply:</strong> <a href="17282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on MPI_Ssend"</a>
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
