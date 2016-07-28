<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 10:41:05 2007" -->
<!-- isoreceived="20070403144105" -->
<!-- sent="Tue, 3 Apr 2007 09:41:10 -0500 (CDT)" -->
<!-- isosent="20070403144110" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]" -->
<!-- id="14791.129.7.242.175.1175611270.squirrel_at_mail.cs.uh.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="46122914.9090607_at_sara.nl" -->
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
<strong>From:</strong> Mohamad Chaarawi (<em>mschaara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-03 10:41:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2991.php">Jeff Squyres: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2989.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="2987.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2997.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Reply:</strong> <a href="2997.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes we saw the memory leak, and a fix is already in the trunk right now..
<br>
Sorry i didn't reply back earlier...
<br>
The fix will be merged in V1.2, as soon as the release managers approve it..
<br>
<p>Thank you,
<br>
<p><p>On Tue, April 3, 2007 5:14 am, Bas van der Vlies wrote:
<br>
<span class="quotelev1">&gt; Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Mr. Van der Vlies,
</span><br>
<span class="quotelev2">&gt;&gt; We are currently looking into this problem and will send out an email as
</span><br>
<span class="quotelev2">&gt;&gt; soon as we recognize something and fix it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Mohamed,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Just curious. Did you test this program and see the same behavior as
</span><br>
<span class="quotelev1">&gt; at our site?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Memory leak in openmpi-1.2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tue, 27 Mar 2007 13:58:15 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Bas van der Vlies &lt;basv_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; References: &lt;460905A3.7080908_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bas van der Vlies wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   We are testing openmpi version 1.2 on Debian etch with openib. Some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; our users are using scalapack/blacs that are running for a long time
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a lot of mpi_comm functions. we have made a small C example that test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the mpi can handle this situation  (see attach file). When we run this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program wit argument 1000000 we see that it consumes more and more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory, eg:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    &lt;progname&gt;  1000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Forgot to attach theh file :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt; *                                                                  *
</span><br>
<span class="quotelev1">&gt; *  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
</span><br>
<span class="quotelev1">&gt; *  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
</span><br>
<span class="quotelev1">&gt; *  Kruislaan 415                         fax:    +31 20 6683167    *
</span><br>
<span class="quotelev1">&gt; *  1098 SJ Amsterdam                                               *
</span><br>
<span class="quotelev1">&gt; *                                                                  *
</span><br>
<span class="quotelev1">&gt; ********************************************************************
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
<p><p><pre>
-- 
Mohamad Chaarawi
Philip G. Hall Room 526
Department of Computer Science
University of Houston
Houston, TX 77204
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2991.php">Jeff Squyres: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2989.php">Jeff Squyres: "Re: [OMPI users] problems with profile.d scripts generated using openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="2987.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2997.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Reply:</strong> <a href="2997.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
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
