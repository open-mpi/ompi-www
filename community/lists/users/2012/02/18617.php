<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 15:15:55 2012" -->
<!-- isoreceived="20120229201555" -->
<!-- sent="Wed, 29 Feb 2012 15:15:51 -0500" -->
<!-- isosent="20120229201551" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1" -->
<!-- id="8C5F3514-D043-4919-A767-1941B006E03F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOf_+-U_nj23PqBTpj6OEo4e+OhuOyUqd=mrytXgxxYf-1JeCw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 15:15:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18618.php">Denver Smith: "[OMPI users] ssh between nodes"</a>
<li><strong>Previous message:</strong> <a href="18616.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="18616.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18626.php">Venkateswara Rao Dokku: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18626.php">Venkateswara Rao Dokku: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18627.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18664.php">Prentice Bisbal: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 29, 2012, at 2:57 PM, Jingcha Joba wrote:
<br>
<p><span class="quotelev1">&gt; So if I understand correctly, if a message size is smaller than it will use the MPI way (non-RDMA, 2 way communication), if its larger, then it would use the Open Fabrics, by using the ibverbs (and ofed stack) instead of using the MPI's stack?
</span><br>
<p>Er... no.
<br>
<p>So let's talk MPI-over-OpenFabrics-verbs specifically.
<br>
<p>All MPI communication calls will use verbs under the covers.  They may use verbs send/receive semantics in some cases, and RDMA semantics in other cases.  &quot;It depends&quot; -- on a lot of things, actually.  It's hard to come up with a good rule of thumb for when it uses one or the other; this is one of the reasons that the openib BTL code is so complex.  :-)
<br>
<p>The main points here are:
<br>
<p>1. you can trust the openib BTL to do the Best thing possible to get the message to the other side.  Regardless of whether that message is an MPI_SEND or an MPI_PUT (for example).
<br>
<p>2. MPI_PUT does not necessarily == verbs RDMA write (and likewise, MPI_GET does not necessarily == verbs RDMA read).
<br>
<p><span class="quotelev1">&gt; If so, could that be the reason why the MPI_Put &quot;hangs&quot; when sending a message more than 512KB (or may be 1MB)?
</span><br>
<p>No.  I'm guessing that there's some kind of bug in the MPI_PUT implementation.
<br>
<p><span class="quotelev1">&gt; Also is there a way to know if for a particular MPI call, OF uses send/recv or RDMA exchange?
</span><br>
<p>Not really.
<br>
<p>More specifically: all things being equal, you don't care which is used.  You just want your message to get to the receiver/target as fast as possible.  One of the main ideas of MPI is to hide those kinds of details from the user.  I.e., you call MPI_SEND.  A miracle occurs.  The message is received on the other side.
<br>
<p>:-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18618.php">Denver Smith: "[OMPI users] ssh between nodes"</a>
<li><strong>Previous message:</strong> <a href="18616.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="18616.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18626.php">Venkateswara Rao Dokku: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18626.php">Venkateswara Rao Dokku: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18627.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18664.php">Prentice Bisbal: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
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
