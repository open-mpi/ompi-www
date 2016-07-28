<?
$subject_val = "[OMPI users] mpiexec hangs - new install";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 23 17:05:35 2010" -->
<!-- isoreceived="20100723210535" -->
<!-- sent="Fri, 23 Jul 2010 14:05:42 -0700" -->
<!-- isosent="20100723210542" -->
<!-- name="James" -->
<!-- email="jamesqf_at_[hidden]" -->
<!-- subject="[OMPI users] mpiexec hangs - new install" -->
<!-- id="op.vgbd7sat75arni_at_t61.site" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mpiexec hangs - new install<br>
<strong>From:</strong> James (<em>jamesqf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-23 17:05:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13766.php">Ralph Castain: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13764.php">Avneesh Pant: "Re: [OMPI users] psm mtl not appearing in ompi_info in 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13766.php">Ralph Castain: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13766.php">Ralph Castain: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to get OpenMPI running on my home network.  This has two
<br>
machines, t61 and quad, both running SuSE 11. I'm using the &quot;hello_c&quot;
<br>
program from the examples as a test.  It will run fine on each machine,
<br>
using whatever number or processes I specify.  However, when I try to
<br>
run on multiple machines, it hangs.
<br>
<p>If I start from t61 with the command &quot;mpiexec -host t61,quad -np 2 hello&quot;
<br>
then I see that command when I do a ps -ax on t61.   On quad I see
<br>
&quot;orted --daemonize (long parameter string)&quot;.  Both of them seem to be
<br>
silently waiting on some event, but I've no idea what.
<br>
<p>Both machines are running OpenMPI 1.4.2 (compiled from same tar file),
<br>
installed in /opt/openmpi.  The executables are in the same user/path
<br>
on each machine (/home/me/src/openmpi/examples), and path,
<br>
LD_LIBRARY_PATH, and so on all seem the same.
<br>
<p>Any suggestions?
<br>
<p>Thanks,
<br>
James
<br>
<p>PS: Also, may I suggest putting something in the FAQ pointing out
<br>
that the environment vars need to be set in .tcshrc, not .login?
<br>
It would have saved me several hours.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13766.php">Ralph Castain: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13764.php">Avneesh Pant: "Re: [OMPI users] psm mtl not appearing in ompi_info in 1.4.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13766.php">Ralph Castain: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13766.php">Ralph Castain: "Re: [OMPI users] mpiexec hangs - new install"</a>
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
