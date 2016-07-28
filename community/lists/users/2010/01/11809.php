<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 18 23:51:46 2010" -->
<!-- isoreceived="20100119045146" -->
<!-- sent="Tue, 19 Jan 2010 12:51:41 +0800" -->
<!-- isosent="20100119045141" -->
<!-- name="Andreea Costea" -->
<!-- email="andre.costea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart error" -->
<!-- id="68119efe1001182051o49b653fdq6d2afdda2b9fd364_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="68119efe1001150747p23fac3e0j11fa8eb1db43262b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint/Restart error<br>
<strong>From:</strong> Andreea Costea (<em>andre.costea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-18 23:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11810.php">T. Farago: "[OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Previous message:</strong> <a href="11808.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11799.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11813.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11813.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well... I decided to install a fresh OS to be sure that there is no OpenMPI
<br>
version conflict. So I formatted one of my VMs, did a fresh CentOS install,
<br>
installed BLCR 0.8.2 and OpenMPI 1.4.1 and the result: the same. mpirun
<br>
works but ompi-checkpoint has that error at line 405:
<br>
<p>[[35906,0],0] ORTE_ERROR_LOG: Not found in file orte-checkpoint.c at line
<br>
405
<br>
<p>As for the files remaining after uninstalling: Jeff you were rigth. There is
<br>
no file left, just some empty directories.
<br>
<p>Which might be the problem with that ORTE_ERROR_LOG error?
<br>
<p>Thanks,
<br>
Andreea
<br>
<p>On Fri, Jan 15, 2010 at 11:47 PM, Andreea Costea &lt;andre.costea_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; It's almost midnight here, so I left home, but I will try it tomorrow.
</span><br>
<span class="quotelev1">&gt; There were some directories left after &quot;make uninstall&quot;. I will give more
</span><br>
<span class="quotelev1">&gt; details tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Jeff,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 15, 2010 at 11:30 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 15, 2010, at 8:07 AM, Andreea Costea wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - I wanted to update to version 1.4.1 and I uninstalled previous version
</span><br>
<span class="quotelev2">&gt;&gt; like this: make uninstall, and than manually deleted all the left over
</span><br>
<span class="quotelev2">&gt;&gt; files. the directory where I installed was /usr/local
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll let Josh answer your CR questions, but I did want to ask about this
</span><br>
<span class="quotelev2">&gt;&gt; point.  AFAIK, &quot;make uninstall&quot; removes *all* Open MPI files.  For example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; [7:25] $ cd /path/to/my/OMPI/tree
</span><br>
<span class="quotelev2">&gt;&gt; [7:25] $ make install &gt; /dev/null
</span><br>
<span class="quotelev2">&gt;&gt; [7:26] $ find /tmp/bogus/ -type f | wc
</span><br>
<span class="quotelev2">&gt;&gt;    646     646   28082
</span><br>
<span class="quotelev2">&gt;&gt; [7:26] $ make uninstall &gt; /dev/null
</span><br>
<span class="quotelev2">&gt;&gt; [7:27] $ find /tmp/bogus/ -type f | wc
</span><br>
<span class="quotelev2">&gt;&gt;      0       0       0
</span><br>
<span class="quotelev2">&gt;&gt; [7:27] $
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I realize that some *directories* are left in $prefix, but there should be
</span><br>
<span class="quotelev2">&gt;&gt; no *files* left.  Are you seeing something different?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11809/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11810.php">T. Farago: "[OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Previous message:</strong> <a href="11808.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11799.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11813.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11813.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
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
