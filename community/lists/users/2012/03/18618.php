<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 01:26:33 2012" -->
<!-- isoreceived="20120301062633" -->
<!-- sent="Wed, 29 Feb 2012 22:26:08 -0800" -->
<!-- isosent="20120301062608" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1" -->
<!-- id="CAOf_+-VfmKcf=Eb6o+UZ3gXw6aKkOsNebWP-3GbZagV7tp3_9g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACiOAOBVinpANQXnYqQrjmxHtW-y3jHdp9UUpW2VL7_FRu=F=w_at_mail.gmail.com" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 01:26:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18619.php">PukkiMonkey: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18617.php">Alexander Beck-Ratzka: "Re: [OMPI users] Simple question on GRID"</a>
<li><strong>In reply to:</strong> <a href="18615.php">Venkateswara Rao Dokku: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18626.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="18626.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, as Jeff says, looks like its to do with the 1 sided comm.
<br>
<p>But the reason why I said was because of what I experienced a couple of
<br>
months ago: When I had a Myri-10G and an Intel gigabit ethernet card lying
<br>
around, I wanted to test the kernel bypass using open-mx stack and I ran
<br>
the osu benchmark.
<br>
Though all the tests worked fine with the Myri 10g, I seemed to get this
<br>
&quot;hanging&quot; issue when running using Intel Gigabit ethernet, esp for a size
<br>
more than 1K on put/get / bcast. I tried with the tcp stack instead of mx,
<br>
and it seemed to work fine, though with bad latency numbers (which is kind
<br>
of obvious, considering that cpu overhead due to tcp).
<br>
I never really got a change to dig deep, but I was pretty much sure that
<br>
this is to do with the open-mx.
<br>
<p><p>On Wed, Feb 29, 2012 at 9:13 PM, Venkateswara Rao Dokku &lt;dvrao.584_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;       I tried executing those tests with the other devices like tcp
</span><br>
<span class="quotelev1">&gt; instead of ib with the same open-mpi 1.4.3.. It went fine but it took time
</span><br>
<span class="quotelev1">&gt; to execute, when i tried to execute the same test on the customized OFED
</span><br>
<span class="quotelev1">&gt; ,tests are hanging at the same message size..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can u please tel me, what could me the possible issue over there, so that
</span><br>
<span class="quotelev1">&gt; you can narrow down the issue..
</span><br>
<span class="quotelev1">&gt; i.e.. Do i have to move to open-mpi 1.5 tree or there is a issue with the
</span><br>
<span class="quotelev1">&gt; customized OFED ( in RDMA scenario's or anything (if u can specify)).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 1, 2012 at 1:45 AM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 29, 2012, at 2:57 PM, Jingcha Joba wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So if I understand correctly, if a message size is smaller than it will
</span><br>
<span class="quotelev2">&gt;&gt; use the MPI way (non-RDMA, 2 way communication), if its larger, then it
</span><br>
<span class="quotelev2">&gt;&gt; would use the Open Fabrics, by using the ibverbs (and ofed stack) instead
</span><br>
<span class="quotelev2">&gt;&gt; of using the MPI's stack?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Er... no.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So let's talk MPI-over-OpenFabrics-verbs specifically.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All MPI communication calls will use verbs under the covers.  They may
</span><br>
<span class="quotelev2">&gt;&gt; use verbs send/receive semantics in some cases, and RDMA semantics in other
</span><br>
<span class="quotelev2">&gt;&gt; cases.  &quot;It depends&quot; -- on a lot of things, actually.  It's hard to come up
</span><br>
<span class="quotelev2">&gt;&gt; with a good rule of thumb for when it uses one or the other; this is one of
</span><br>
<span class="quotelev2">&gt;&gt; the reasons that the openib BTL code is so complex.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The main points here are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. you can trust the openib BTL to do the Best thing possible to get the
</span><br>
<span class="quotelev2">&gt;&gt; message to the other side.  Regardless of whether that message is an
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SEND or an MPI_PUT (for example).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. MPI_PUT does not necessarily == verbs RDMA write (and likewise,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_GET does not necessarily == verbs RDMA read).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If so, could that be the reason why the MPI_Put &quot;hangs&quot; when sending a
</span><br>
<span class="quotelev2">&gt;&gt; message more than 512KB (or may be 1MB)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No.  I'm guessing that there's some kind of bug in the MPI_PUT
</span><br>
<span class="quotelev2">&gt;&gt; implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Also is there a way to know if for a particular MPI call, OF uses
</span><br>
<span class="quotelev2">&gt;&gt; send/recv or RDMA exchange?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not really.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More specifically: all things being equal, you don't care which is used.
</span><br>
<span class="quotelev2">&gt;&gt;  You just want your message to get to the receiver/target as fast as
</span><br>
<span class="quotelev2">&gt;&gt; possible.  One of the main ideas of MPI is to hide those kinds of details
</span><br>
<span class="quotelev2">&gt;&gt; from the user.  I.e., you call MPI_SEND.  A miracle occurs.  The message is
</span><br>
<span class="quotelev2">&gt;&gt; received on the other side.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-18618/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18619.php">PukkiMonkey: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18617.php">Alexander Beck-Ratzka: "Re: [OMPI users] Simple question on GRID"</a>
<li><strong>In reply to:</strong> <a href="18615.php">Venkateswara Rao Dokku: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18626.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Reply:</strong> <a href="18626.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
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
