<?
$subject_val = "Re: [OMPI users] can't run mpi-jobs on remote host";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 13 20:32:33 2014" -->
<!-- isoreceived="20140414003233" -->
<!-- sent="Sun, 13 Apr 2014 17:31:17 -0700" -->
<!-- isosent="20140414003117" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't run mpi-jobs on remote host" -->
<!-- id="955B6726-7C27-453F-A0D0-EDD1B52E8C77_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0bbc5c84406948f389e554d22d39a510_at_AMSPR03MB614.eurprd03.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] can't run mpi-jobs on remote host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-13 20:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24170.php">Daniel Milroy: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="24168.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>In reply to:</strong> <a href="24168.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24171.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, first ensure you configured --enable-debug, and then add &quot;-mca plm_base_verbose 10 --debug-daemons&quot; to your mpirun cmd line. This will tell you what is happening during the launch.
<br>
<p><p>On Apr 13, 2014, at 12:31 PM, Lubrano Francesco &lt;lubrano.francesco_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for my late reply
</span><br>
<span class="quotelev1">&gt; I tried previously with passfrase and, in this particular case, this is not the problem: the error occurs also without asking password.
</span><br>
<span class="quotelev1">&gt; thus I think there is something else. 
</span><br>
<span class="quotelev1">&gt; Francesco
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24169/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24170.php">Daniel Milroy: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="24168.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>In reply to:</strong> <a href="24168.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24171.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
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
