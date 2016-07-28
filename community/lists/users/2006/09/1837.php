<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 05:46:29 2006" -->
<!-- isoreceived="20060907094629" -->
<!-- sent="Thu, 7 Sep 2006 10:46:25 +0100" -->
<!-- isosent="20060907094625" -->
<!-- name="Renato Golin" -->
<!-- email="rengolin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration file problem?" -->
<!-- id="d9b9d95f0609070246l1b849971h1077431ef37d1301_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1054C976-5494-44A2-A645-64131EA91FCE_at_aist.go.jp" -->
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
<strong>From:</strong> Renato Golin (<em>rengolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 05:46:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1838.php">Renato Golin: "Re: [OMPI users] MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1836.php">Eng. A.A. Isola: "[OMPI users] MPI_LOOKUP_NAME BUG"</a>
<li><strong>In reply to:</strong> <a href="1835.php">Paul Fons: "[OMPI users] configuration file problem?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/7/06, Paul Fons &lt;paul-fons_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I would be happy if I could just solve this problem, but I do have
</span><br>
<span class="quotelev1">&gt; another (more complicated) question.  Soon I will have yet another
</span><br>
<span class="quotelev1">&gt; remote machine (a new &quot;woodcrest&quot; quad core macintosh) to connect
</span><br>
<span class="quotelev1">&gt; to.  The two remote machines have two NICs.  Routine communications
</span><br>
<span class="quotelev1">&gt; are set within the OS to use en0 (ethernet 0).  I would like openmpi
</span><br>
<span class="quotelev1">&gt; to use en1 on the remote boxes and en0 on my main box (dual 3 GHz
</span><br>
<span class="quotelev1">&gt; G5's) as I only have a single NIC on the main box.
</span><br>
<p>Hi,
<br>
<p>I'm not a MPI expert but I guess this is more of a OS problem than MPI
<br>
itself. You can force MPI to use one NIC instead of the other but that
<br>
wuold lead with route problem that the OS would not be able to solve
<br>
(at least not nicely).
<br>
<p>On unix you can tell which NIC should be used to which network and you
<br>
could create two sub-networks, plug each one on each NIC, tell unix
<br>
(using 'route') which NIC is to which sub-net and hope things work by
<br>
themselves.
<br>
<p>This should work on both cases.
<br>
<p><span class="quotelev1">&gt; To put it in
</span><br>
<span class="quotelev1">&gt; other words, how can I specify a preferred interface on each box
</span><br>
<span class="quotelev1">&gt; (hopefully not all from the command line!).
</span><br>
<p>man route
<br>
<p>and why not from the command line ? ;)
<br>
<p>cheers,
<br>
--renato
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1838.php">Renato Golin: "Re: [OMPI users] MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1836.php">Eng. A.A. Isola: "[OMPI users] MPI_LOOKUP_NAME BUG"</a>
<li><strong>In reply to:</strong> <a href="1835.php">Paul Fons: "[OMPI users] configuration file problem?"</a>
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
