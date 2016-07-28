<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 00:13:32 2012" -->
<!-- isoreceived="20120301051332" -->
<!-- sent="Thu, 1 Mar 2012 10:43:28 +0530" -->
<!-- isosent="20120301051328" -->
<!-- name="Venkateswara Rao Dokku" -->
<!-- email="dvrao.584_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1" -->
<!-- id="CACiOAOBVinpANQXnYqQrjmxHtW-y3jHdp9UUpW2VL7_FRu=F=w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8C5F3514-D043-4919-A767-1941B006E03F_at_cisco.com" -->
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
<strong>From:</strong> Venkateswara Rao Dokku (<em>dvrao.584_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 00:13:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18627.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18625.php">Shaandar Nyamtulga: "[OMPI users] Simple question on GRID"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18617.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18629.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="18629.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I tried executing those tests with the other devices like tcp instead
<br>
of ib with the same open-mpi 1.4.3.. It went fine but it took time to
<br>
execute, when i tried to execute the same test on the customized OFED
<br>
,tests are hanging at the same message size..
<br>
<p>Can u please tel me, what could me the possible issue over there, so that
<br>
you can narrow down the issue..
<br>
i.e.. Do i have to move to open-mpi 1.5 tree or there is a issue with the
<br>
customized OFED ( in RDMA scenario's or anything (if u can specify)).
<br>
<p>On Thu, Mar 1, 2012 at 1:45 AM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 29, 2012, at 2:57 PM, Jingcha Joba wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; So if I understand correctly, if a message size is smaller than it will
</span><br>
<span class="quotelev1">&gt; use the MPI way (non-RDMA, 2 way communication), if its larger, then it
</span><br>
<span class="quotelev1">&gt; would use the Open Fabrics, by using the ibverbs (and ofed stack) instead
</span><br>
<span class="quotelev1">&gt; of using the MPI's stack?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Er... no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So let's talk MPI-over-OpenFabrics-verbs specifically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All MPI communication calls will use verbs under the covers.  They may use
</span><br>
<span class="quotelev1">&gt; verbs send/receive semantics in some cases, and RDMA semantics in other
</span><br>
<span class="quotelev1">&gt; cases.  &quot;It depends&quot; -- on a lot of things, actually.  It's hard to come up
</span><br>
<span class="quotelev1">&gt; with a good rule of thumb for when it uses one or the other; this is one of
</span><br>
<span class="quotelev1">&gt; the reasons that the openib BTL code is so complex.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main points here are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. you can trust the openib BTL to do the Best thing possible to get the
</span><br>
<span class="quotelev1">&gt; message to the other side.  Regardless of whether that message is an
</span><br>
<span class="quotelev1">&gt; MPI_SEND or an MPI_PUT (for example).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. MPI_PUT does not necessarily == verbs RDMA write (and likewise, MPI_GET
</span><br>
<span class="quotelev1">&gt; does not necessarily == verbs RDMA read).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If so, could that be the reason why the MPI_Put &quot;hangs&quot; when sending a
</span><br>
<span class="quotelev1">&gt; message more than 512KB (or may be 1MB)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.  I'm guessing that there's some kind of bug in the MPI_PUT
</span><br>
<span class="quotelev1">&gt; implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also is there a way to know if for a particular MPI call, OF uses
</span><br>
<span class="quotelev1">&gt; send/recv or RDMA exchange?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not really.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically: all things being equal, you don't care which is used.
</span><br>
<span class="quotelev1">&gt;  You just want your message to get to the receiver/target as fast as
</span><br>
<span class="quotelev1">&gt; possible.  One of the main ideas of MPI is to hide those kinds of details
</span><br>
<span class="quotelev1">&gt; from the user.  I.e., you call MPI_SEND.  A miracle occurs.  The message is
</span><br>
<span class="quotelev1">&gt; received on the other side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
Thanks &amp; Regards,
D.Venkateswara Rao,
Software Engineer,One Convergence Devices Pvt Ltd.,
Jubille Hills,Hyderabad.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18626/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18627.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18625.php">Shaandar Nyamtulga: "[OMPI users] Simple question on GRID"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18617.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18629.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="18629.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
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
