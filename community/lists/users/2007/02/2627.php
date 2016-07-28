<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  6 12:38:07 2007" -->
<!-- isoreceived="20070206173807" -->
<!-- sent="Tue, 6 Feb 2007 12:38:01 -0500" -->
<!-- isosent="20070206173801" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails" -->
<!-- id="2453e2900702060938t1fbb7741o68e187168d3fb6f7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="08D53AF3-4BFC-44D8-A311-B5850044E06C_at_cisco.com" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-06 12:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2628.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Previous message:</strong> <a href="2626.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>In reply to:</strong> <a href="2621.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2628.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2628.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply, Jeff.
<br>
<p><span class="quotelev2">&gt; &gt; It never occurred to me that the headnode would try to communicate
</span><br>
<span class="quotelev2">&gt; &gt; with the slave using infiniband interfaces... Orthogonally, what are
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem here is that since your IB IP addresses are
</span><br>
<span class="quotelev1">&gt; &quot;public&quot; (meaning that they're not in the IETF defined ranges for
</span><br>
<span class="quotelev1">&gt; private IP addresses), Open MPI assumes that they can be used to
</span><br>
<span class="quotelev1">&gt; communicate with your back-end nodes on the IPoIB network.  See this
</span><br>
<span class="quotelev1">&gt; FAQ entry for details:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
</span><br>
<p>The pointer was rather informative. We do have to use non-standard
<br>
ranges for IB interfaces, because we're performing automatic IP over
<br>
IB configuration based on the eth0 IP and netmask. Given 10.x.y.z/8
<br>
configuration for eth0, the IPs assigned to infiniband interfaces will
<br>
not only end up on the same subnet ID, but may even conflict with
<br>
existing ethernet interface IP addresses. Hence the use of 20.x.y.z
<br>
and 30.x.y.z for ib0 &amp; ib1 respectively.
<br>
<p><span class="quotelev2">&gt; &gt; the industry standard OpenMPI benchmark tests I could run to perform a
</span><br>
<span class="quotelev2">&gt; &gt; real test?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just about anything will work -- NetPIPE, the Intel Benchmarks, ...etc.
</span><br>
I actually tried benchmarking with HPLinpack. Specifically, I'm
<br>
interested in measuring performance improvements when running OpenMPI
<br>
jobs over several available interconnects. However, I have difficulty
<br>
interpreting the cryptic HPL output. I've seen members of the list
<br>
using xhpl benchmark. Perhaps someone could shed some light on how to
<br>
read its output? Also, my understanding is that the only advantage of
<br>
multiple interconnect availability is the increased bandwidth for
<br>
OpenMPI message striping - correct? In that case, I would probably
<br>
benefit from a more bandwidth intensive benchmark. If the OpenMPI
<br>
community could point me in the right direction for that, it would be
<br>
greatly appreciated. I have a feeling that this is not one of HPL's
<br>
strongest points.
<br>
<p>Thanks again for your willingness to help and share your expertise.
<br>
<p>Sincerely,
<br>
Alex.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2628.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Previous message:</strong> <a href="2626.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>In reply to:</strong> <a href="2621.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2628.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2628.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
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
