<?
$subject_val = "[OMPI users] --preload-binary does not work";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 15:02:02 2014" -->
<!-- isoreceived="20140606190202" -->
<!-- sent="Fri, 6 Jun 2014 15:02:02 -0400" -->
<!-- isosent="20140606190202" -->
<!-- name="E.O." -->
<!-- email="ooyama.eiichi_at_[hidden]" -->
<!-- subject="[OMPI users] --preload-binary does not work" -->
<!-- id="CANhoU+iopeHqdCRWv4A=TV9wgb3v_Kb=XgiWfUJkJR8osBDt8Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] --preload-binary does not work<br>
<strong>From:</strong> E.O. (<em>ooyama.eiichi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 15:02:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24580.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24578.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24581.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>Reply:</strong> <a href="24581.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
I am using OpenMPI ver 1.8.1 on a cluster of 4 machines.
<br>
One Redhat 6.2 and three busybox machine. They are all 64bit environment.
<br>
<p>I want to use --preload-binary option to send the binary file to hosts but
<br>
it's not working.
<br>
<p># /mpi/bin/mpirun --prefix /mpi --preload-files ./a.out --allow-run-as-root
<br>
--np 4 --host box0101,box0103 --preload-binary ./a.out
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not access
<br>
or execute an executable:
<br>
<p>Executable: ./a.out
<br>
Node: box0101
<br>
<p>while attempting to start process rank 17.
<br>
--------------------------------------------------------------------------
<br>
17 total processes failed to start
<br>
#
<br>
<p>If I sent the binary by SCP beforehand, the command works fine. SCP is
<br>
working fine without password between the hosts.
<br>
Is the option supposed to work?
<br>
Thank you,
<br>
<p>Eiichi
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24579/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24580.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24578.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24581.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>Reply:</strong> <a href="24581.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
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
