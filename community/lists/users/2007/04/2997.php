<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 02:20:54 2007" -->
<!-- isoreceived="20070404062054" -->
<!-- sent="Wed, 04 Apr 2007 08:20:48 +0200" -->
<!-- isosent="20070404062048" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]" -->
<!-- id="461343C0.4060707_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="14791.129.7.242.175.1175611270.squirrel_at_mail.cs.uh.edu" -->
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
<strong>From:</strong> Bas van der Vlies (<em>basv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 02:20:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2998.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="2996.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>In reply to:</strong> <a href="2990.php">Mohamad Chaarawi: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2998.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Reply:</strong> <a href="2998.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mohamad Chaarawi wrote:
<br>
<span class="quotelev1">&gt; Yes we saw the memory leak, and a fix is already in the trunk right now..
</span><br>
<span class="quotelev1">&gt; Sorry i didn't reply back earlier...
</span><br>
<span class="quotelev1">&gt; The fix will be merged in V1.2, as soon as the release managers approve it..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks we will test it and do some more scalapack testing.
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, April 3, 2007 5:14 am, Bas van der Vlies wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Mr. Van der Vlies,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are currently looking into this problem and will send out an email as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; soon as we recognize something and fix it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mohamed,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Just curious. Did you test this program and see the same behavior as
</span><br>
<span class="quotelev2">&gt;&gt; at our site?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Memory leak in openmpi-1.2?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Tue, 27 Mar 2007 13:58:15 +0200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Bas van der Vlies &lt;basv_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; References: &lt;460905A3.7080908_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bas van der Vlies wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   We are testing openmpi version 1.2 on Debian etch with openib. Some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; our users are using scalapack/blacs that are running for a long time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a lot of mpi_comm functions. we have made a small C example that test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the mpi can handle this situation  (see attach file). When we run this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program wit argument 1000000 we see that it consumes more and more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; memory, eg:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    &lt;progname&gt;  1000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Forgot to attach theh file :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; *                                                                  *
</span><br>
<span class="quotelev2">&gt;&gt; *  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
</span><br>
<span class="quotelev2">&gt;&gt; *  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
</span><br>
<span class="quotelev2">&gt;&gt; *  Kruislaan 415                         fax:    +31 20 6683167    *
</span><br>
<span class="quotelev2">&gt;&gt; *  1098 SJ Amsterdam                                               *
</span><br>
<span class="quotelev2">&gt;&gt; *                                                                  *
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************
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
<p><p><pre>
-- 
********************************************************************
*                                                                  *
*  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
*  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
*  Kruislaan 415                         fax:    +31 20 6683167    *
*  1098 SJ Amsterdam                                               *
*                                                                  *
********************************************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2998.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="2996.php">Jeff Squyres: "Re: [OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>In reply to:</strong> <a href="2990.php">Mohamad Chaarawi: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2998.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Reply:</strong> <a href="2998.php">Bas van der Vlies: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
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
