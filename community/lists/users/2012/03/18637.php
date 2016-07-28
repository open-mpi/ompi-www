<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 06:16:15 2012" -->
<!-- isoreceived="20120301111615" -->
<!-- sent="Thu, 1 Mar 2012 06:16:10 -0500" -->
<!-- isosent="20120301111610" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1" -->
<!-- id="AEA969C8-3067-4956-805E-FC95E4BCD6A7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOf_+-VfmKcf=Eb6o+UZ3gXw6aKkOsNebWP-3GbZagV7tp3_9g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-03-01 06:16:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18638.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18636.php">Jeffrey Squyres: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>In reply to:</strong> <a href="18629.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18627.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would just ignore these tests:
<br>
<p>1. The use of MPI one-sided functionality is extremely rare out in the real world.
<br>
2. Brian said there were probably bugs in Open MPI's implementation of the MPI one-sided functionality itself, and he's in the middle of re-writing the one-sided functionality anyway.
<br>
<p><p>On Mar 1, 2012, at 1:26 AM, Jingcha Joba wrote:
<br>
<p><span class="quotelev1">&gt; Well, as Jeff says, looks like its to do with the 1 sided comm. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the reason why I said was because of what I experienced a couple of months ago: When I had a Myri-10G and an Intel gigabit ethernet card lying around, I wanted to test the kernel bypass using open-mx stack and I ran the osu benchmark.
</span><br>
<span class="quotelev1">&gt; Though all the tests worked fine with the Myri 10g, I seemed to get this &quot;hanging&quot; issue when running using Intel Gigabit ethernet, esp for a size more than 1K on put/get / bcast. I tried with the tcp stack instead of mx, and it seemed to work fine, though with bad latency numbers (which is kind of obvious, considering that cpu overhead due to tcp).
</span><br>
<span class="quotelev1">&gt; I never really got a change to dig deep, but I was pretty much sure that this is to do with the open-mx. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 29, 2012 at 9:13 PM, Venkateswara Rao Dokku &lt;dvrao.584_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;       I tried executing those tests with the other devices like tcp instead of ib with the same open-mpi 1.4.3.. It went fine but it took time to execute, when i tried to execute the same test on the customized OFED ,tests are hanging at the same message size..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can u please tel me, what could me the possible issue over there, so that you can narrow down the issue..
</span><br>
<span class="quotelev1">&gt; i.e.. Do i have to move to open-mpi 1.5 tree or there is a issue with the customized OFED ( in RDMA scenario's or anything (if u can specify)).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 1, 2012 at 1:45 AM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Feb 29, 2012, at 2:57 PM, Jingcha Joba wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So if I understand correctly, if a message size is smaller than it will use the MPI way (non-RDMA, 2 way communication), if its larger, then it would use the Open Fabrics, by using the ibverbs (and ofed stack) instead of using the MPI's stack?
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
<span class="quotelev1">&gt; All MPI communication calls will use verbs under the covers.  They may use verbs send/receive semantics in some cases, and RDMA semantics in other cases.  &quot;It depends&quot; -- on a lot of things, actually.  It's hard to come up with a good rule of thumb for when it uses one or the other; this is one of the reasons that the openib BTL code is so complex.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The main points here are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. you can trust the openib BTL to do the Best thing possible to get the message to the other side.  Regardless of whether that message is an MPI_SEND or an MPI_PUT (for example).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. MPI_PUT does not necessarily == verbs RDMA write (and likewise, MPI_GET does not necessarily == verbs RDMA read).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If so, could that be the reason why the MPI_Put &quot;hangs&quot; when sending a message more than 512KB (or may be 1MB)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.  I'm guessing that there's some kind of bug in the MPI_PUT implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also is there a way to know if for a particular MPI call, OF uses send/recv or RDMA exchange?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not really.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically: all things being equal, you don't care which is used.  You just want your message to get to the receiver/target as fast as possible.  One of the main ideas of MPI is to hide those kinds of details from the user.  I.e., you call MPI_SEND.  A miracle occurs.  The message is received on the other side.
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; D.Venkateswara Rao,
</span><br>
<span class="quotelev1">&gt; Software Engineer,One Convergence Devices Pvt Ltd.,
</span><br>
<span class="quotelev1">&gt; Jubille Hills,Hyderabad.
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
<li><strong>Next message:</strong> <a href="18638.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18636.php">Jeffrey Squyres: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>In reply to:</strong> <a href="18629.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18627.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
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
