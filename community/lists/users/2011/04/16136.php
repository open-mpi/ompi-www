<?
$subject_val = "[OMPI users] problems with the -xterm option";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 06:46:26 2011" -->
<!-- isoreceived="20110405104626" -->
<!-- sent="Tue, 5 Apr 2011 12:46:20 +0200" -->
<!-- isosent="20110405104620" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] problems with the -xterm option" -->
<!-- id="BANLkTimOGNpih-TEL1_eooGuOm7A+J5kjQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] problems with the -xterm option<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-05 06:46:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16137.php">SLIM H.A.: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Previous message:</strong> <a href="16135.php">Reuti: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16154.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16154.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>On my workstation and  the cluster i set up OpenMPI (v 1.4.2) so that
<br>
it works in &quot;text-mode&quot;:
<br>
&nbsp;&nbsp;$ mpirun -np 4  -x DISPLAY -host squid_0   printenv | grep WORLD_RANK
<br>
&nbsp;&nbsp;OMPI_COMM_WORLD_RANK=0
<br>
&nbsp;&nbsp;OMPI_COMM_WORLD_RANK=1
<br>
&nbsp;&nbsp;OMPI_COMM_WORLD_RANK=2
<br>
&nbsp;&nbsp;OMPI_COMM_WORLD_RANK=3
<br>
<p>but when i use  the -xterm option to mpirun, it doesn't work
<br>
<p>&nbsp;$ mpirun -np 4  -x DISPLAY -host squid_0 -xterm 1,2  printenv | grep WORLD_RANK
<br>
&nbsp;&nbsp;Warning: untrusted X11 forwarding setup failed: xauth key data not generated
<br>
&nbsp;&nbsp;Warning: No xauth data; using fake authentication data for X11 forwarding.
<br>
&nbsp;&nbsp;OMPI_COMM_WORLD_RANK=0
<br>
&nbsp;&nbsp;[squid_0:05266] [[55607,0],1]-&gt;[[55607,0],0]
<br>
mca_oob_tcp_msg_send_handler: writev failed: Bad file descriptor (9)
<br>
[sd = 8]
<br>
&nbsp;&nbsp;[squid_0:05266] [[55607,0],1] routed:binomial: Connection to
<br>
lifeline [[55607,0],0] lost
<br>
&nbsp;&nbsp;/usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
<br>
&nbsp;&nbsp;/usr/bin/xterm Xt error: Can't open display: chefli.uzh.ch:0.0
<br>
<p>(strange: somebody wrote his message to the console)
<br>
<p>No matter whether i set the DISPLAY variable to the full hostname of
<br>
the workstation,
<br>
to the IP-Adress of the workstation or simply to &quot;:0.0&quot;, it doesn't work
<br>
<p>But i do have xauth data (as far as i know):
<br>
On the remote (squid_0):
<br>
&nbsp;&nbsp;jody_at_squid_0 ~ $ xauth list
<br>
&nbsp;&nbsp;chefli/unix:10  MIT-MAGIC-COOKIE-1  5293e179bc7b2036d87cbcdf14891d0c
<br>
&nbsp;&nbsp;chefli/unix:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
<br>
&nbsp;&nbsp;chefli.uzh.ch:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
<br>
<p>on the workstation:
<br>
&nbsp;&nbsp;$ xauth list
<br>
&nbsp;&nbsp;chefli/unix:10  MIT-MAGIC-COOKIE-1  5293e179bc7b2036d87cbcdf14891d0c
<br>
&nbsp;&nbsp;chefli/unix:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
<br>
&nbsp;&nbsp;localhost.localdomain/unix:0  MIT-MAGIC-COOKIE-1
<br>
146c7f438fab79deb8a8a7df242b6f4b
<br>
&nbsp;&nbsp;chefli.uzh.ch/unix:0  MIT-MAGIC-COOKIE-1  146c7f438fab79deb8a8a7df242b6f4b
<br>
<p>In sshd_config on the workstation i have 'X11Forwarding yes'
<br>
I have also done
<br>
&nbsp;&nbsp;&nbsp;xhost + squid_0
<br>
on the workstation.
<br>
<p><p>How can i get the -xterm option running?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16137.php">SLIM H.A.: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Previous message:</strong> <a href="16135.php">Reuti: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16154.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Reply:</strong> <a href="16154.php">Ralph Castain: "Re: [OMPI users] problems with the -xterm option"</a>
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
