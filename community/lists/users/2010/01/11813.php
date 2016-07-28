<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 08:01:41 2010" -->
<!-- isoreceived="20100119130141" -->
<!-- sent="Tue, 19 Jan 2010 21:01:36 +0800" -->
<!-- isosent="20100119130136" -->
<!-- name="Andreea Costea" -->
<!-- email="andre.costea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart error" -->
<!-- id="68119efe1001190501g441ed35ana3c172b93f8efe56_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="68119efe1001182051o49b653fdq6d2afdda2b9fd364_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-01-19 08:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11814.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11812.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>In reply to:</strong> <a href="11809.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11861.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11861.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed one more thing. As I still have some VMs that have OpenMPI version
<br>
1.3.3 installed I started to use those machines 'till I fix the problem with
<br>
1.4.1 And while checkpointing on one of this VMs I realized that
<br>
checkpointing as a guest works fine and checkpointing as a root outputs the
<br>
same error like in 1.4.1. : ORTE_ERROR_LOG: Not found in file
<br>
orte-checkpoint.c at line 405
<br>
<p>I logged the outputs of &quot;ompi_info --param all all&quot; which I run for root and
<br>
for another user and the only differences were at these parameters:
<br>
<p>mca_component_path
<br>
mca_param_files
<br>
snapc_base_global_snapshot_dir
<br>
<p>All 3 params differ because of the $HOME.
<br>
One more thing: I don't have the directory $HOME/.openmpi
<br>
<p>Ideas?
<br>
<p>Thanks,
<br>
Andreea
<br>
<p><p><p><p>On Tue, Jan 19, 2010 at 12:51 PM, Andreea Costea &lt;andre.costea_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Well... I decided to install a fresh OS to be sure that there is no OpenMPI
</span><br>
<span class="quotelev1">&gt; version conflict. So I formatted one of my VMs, did a fresh CentOS install,
</span><br>
<span class="quotelev1">&gt; installed BLCR 0.8.2 and OpenMPI 1.4.1 and the result: the same. mpirun
</span><br>
<span class="quotelev1">&gt; works but ompi-checkpoint has that error at line 405:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[35906,0],0] ORTE_ERROR_LOG: Not found in file orte-checkpoint.c at line
</span><br>
<span class="quotelev1">&gt; 405
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for the files remaining after uninstalling: Jeff you were rigth. There
</span><br>
<span class="quotelev1">&gt; is no file left, just some empty directories.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which might be the problem with that ORTE_ERROR_LOG error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 15, 2010 at 11:47 PM, Andreea Costea &lt;andre.costea_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's almost midnight here, so I left home, but I will try it tomorrow.
</span><br>
<span class="quotelev2">&gt;&gt; There were some directories left after &quot;make uninstall&quot;. I will give more
</span><br>
<span class="quotelev2">&gt;&gt; details tomorrow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; Andreea
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 15, 2010 at 11:30 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 15, 2010, at 8:07 AM, Andreea Costea wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; - I wanted to update to version 1.4.1 and I uninstalled previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version like this: make uninstall, and than manually deleted all the left
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over files. the directory where I installed was /usr/local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll let Josh answer your CR questions, but I did want to ask about this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; point.  AFAIK, &quot;make uninstall&quot; removes *all* Open MPI files.  For example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [7:25] $ cd /path/to/my/OMPI/tree
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [7:25] $ make install &gt; /dev/null
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [7:26] $ find /tmp/bogus/ -type f | wc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    646     646   28082
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [7:26] $ make uninstall &gt; /dev/null
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [7:27] $ find /tmp/bogus/ -type f | wc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      0       0       0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [7:27] $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I realize that some *directories* are left in $prefix, but there should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be no *files* left.  Are you seeing something different?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11813/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11814.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11812.php">T. Farago: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>In reply to:</strong> <a href="11809.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11861.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11861.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
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
