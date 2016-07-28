<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 12:27:02 2009" -->
<!-- isoreceived="20091030162702" -->
<!-- sent="Fri, 30 Oct 2009 12:26:38 -0400" -->
<!-- isosent="20091030162638" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="abbyzcool_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart in OpenMPI" -->
<!-- id="223eadbc0910300926j1bcc85a9qf2e014061b0b5771_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="57272.88433.qm_at_web54306.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint/Restart in OpenMPI<br>
<strong>From:</strong> Abhishek Kulkarni (<em>abbyzcool_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 12:26:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11028.php">Gus Correa: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="11026.php">Peter Kjellstrom: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="11012.php">Andreea m. \(Costea\): "[OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Oct 30, 2009 at 4:51 AM, Andreea m. (Costea) &lt;doodlie_snew_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a newbie, and I want to test the checkpoint/restart mechanism included
</span><br>
<span class="quotelev1">&gt; in OpenMPI v 1.3.3. I have tried to search for some documentation about how
</span><br>
<span class="quotelev1">&gt; to install the OpenMPI implementation in order to support
</span><br>
<span class="quotelev1">&gt; checkpoint/restart, and I found lots of links to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev1">&gt; which seems not to work. Can you please advise me what to read or what
</span><br>
<span class="quotelev1">&gt; steps to follow in order to have everything working?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
There is an updated guide on configuring and running Open MPI with C/R
<br>
(with a few examples and a demo video) at:
<br>
<p><a href="http://osl.iu.edu/research/ft/ompi-cr/">http://osl.iu.edu/research/ft/ompi-cr/</a>
<br>
<p>If there's a specific issue that you are facing, searching through
<br>
the archives might help.
<br>
<p><p><p><span class="quotelev1">&gt; I already installed OpenMPI but checkpoint/restart doesn't work. During
</span><br>
<span class="quotelev1">&gt; installation, in installation log I found teh following lines (don't know if
</span><br>
<span class="quotelev1">&gt; it's my software configuration fault or the way I installed OpenMPI):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --- MCA component pml:crcpw (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component pml:crcpw compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking if MCA component pml:crcpw can compile... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ Configuring MCA framework crcp
</span><br>
<span class="quotelev1">&gt; checking for no configure components in framework crcp...
</span><br>
<span class="quotelev1">&gt; checking for m4 configure components in framework crcp... bkmrk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component crcp:bkmrk (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component crcp:bkmrk compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking if MCA component crcp:bkmrk can compile... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11027/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11028.php">Gus Correa: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="11026.php">Peter Kjellstrom: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="11012.php">Andreea m. \(Costea\): "[OMPI users] Checkpoint/Restart in OpenMPI"</a>
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
