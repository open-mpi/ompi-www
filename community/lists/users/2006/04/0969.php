<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr  6 06:12:10 2006" -->
<!-- isoreceived="20060406101210" -->
<!-- sent="Thu, 06 Apr 2006 13:12:06 +0300" -->
<!-- isosent="20060406101206" -->
<!-- name="spil_at_[hidden]" -->
<!-- email="spil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem while building open MPI" -->
<!-- id="BAY111-F2611F3BD9505BC8C76165ADBC80_at_phx.gbl" -->
<!-- inreplyto="919B187C-030D-4B09-BBC3-35E2696EF31D_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:spil_at_[hidden]?Subject=Re:%20[OMPI%20users]%20problem%20while%20building%20open%20MPI"><em>spil_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-04-06 06:12:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0970.php">john casu: "[OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>Previous message:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI users] problem while building open MPI"</a>
<li><strong>In reply to:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI users] problem while building open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply. I finally found what had happened. The problem occured 
<br>
because i extracted the tarball to a directory with a space character on its 
<br>
name.
<br>
<p>spilphys
<br>
<p><p><span class="quotelev1">&gt;From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] problem while building open MPI
</span><br>
<span class="quotelev1">&gt;Date: Wed, 5 Apr 2006 18:58:28 -0400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Apr 5, 2006, at 6:37 AM, spil@ phys wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i have suse linux 10 (x86_64) and when i try to build open MPI
</span><br>
<span class="quotelev2">&gt; &gt; (version
</span><br>
<span class="quotelev2">&gt; &gt; 1.0.1) an error occurs. When i run
</span><br>
<span class="quotelev2">&gt; &gt; ./configure .. i receive the following error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** Final output
</span><br>
<span class="quotelev2">&gt; &gt; configure: creating ./config.status
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/maffinity/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: error: cannot find input file: opal/mca/maffinity/
</span><br>
<span class="quotelev2">&gt; &gt; Makefile.in
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would appreciate having some help. Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This generally indicates that you do not have a complete tarball of
</span><br>
<span class="quotelev1">&gt;Open MPI.  I would try starting from a fresh tarball and see if that
</span><br>
<span class="quotelev1">&gt;helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_________________________________________________________________
<br>
Don't just search. Find. Check out the new MSN Search! 
<br>
<a href="http://search.msn.click-url.com/go/onm00200636ave/direct/01/">http://search.msn.click-url.com/go/onm00200636ave/direct/01/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0970.php">john casu: "[OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>Previous message:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI users] problem while building open MPI"</a>
<li><strong>In reply to:</strong> <a href="0968.php">Brian Barrett: "Re: [OMPI users] problem while building open MPI"</a>
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
