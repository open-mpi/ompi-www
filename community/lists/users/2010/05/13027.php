<?
$subject_val = "[OMPI users] Question on virtual memory allocated";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 08:19:33 2010" -->
<!-- isoreceived="20100512121933" -->
<!-- sent="Wed, 12 May 2010 14:19:28 +0200" -->
<!-- isosent="20100512121928" -->
<!-- name="Olivier Riff" -->
<!-- email="oliriff_at_[hidden]" -->
<!-- subject="[OMPI users] Question on virtual memory allocated" -->
<!-- id="AANLkTinL9BJ1oSAvJXxTuBiQhucnFoiRdwDQPNLErYuW_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Question on virtual memory allocated<br>
<strong>From:</strong> Olivier Riff (<em>oliriff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 08:19:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13028.php">Damien Hocking: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<li><strong>Previous message:</strong> <a href="13026.php">Shiqing Fan: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13047.php">Jeff Squyres: "Re: [OMPI users] Question on virtual memory allocated"</a>
<li><strong>Reply:</strong> <a href="13047.php">Jeff Squyres: "Re: [OMPI users] Question on virtual memory allocated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>My question is about virtual memory allocated by an open-mpi program. I am
<br>
not familiar with memory managment and I will be grateful if you could
<br>
explain me what I am observing when I launch my openMpi program on several
<br>
machines.
<br>
<p>My program is started on a server machine which comunicate with 72 client
<br>
machines.
<br>
When I am doing a &quot;top&quot; on the Linux shell of the server machine: I can
<br>
observe:
<br>
<p>Mem:   2074468k total,     777848k used,      1296628k free,          4224k
<br>
buffers
<br>
Swap:  4192924k total,               52k used,      4192872k free,
<br>
339184k cached
<br>
PID       USER      PR  NI   VIRT       RES       SHR    S       %CPU
<br>
%MEM     TIME+        COMMAND
<br>
28211  realtime  20   0     *2104m*    158m     29m    S        100
<br>
4.6             1:04.14       MyOpenMPIProgram
<br>
<p>What I do not understand is where the value of 2104m for the virtual memory
<br>
comes from.
<br>
When I add the value of Mem used (777848k) to the value of the cache
<br>
(339184k) : the amount is by far inferior to the Virtual memory (2104m).
<br>
Are here part of the memory allocated by the clients taken into account ?
<br>
Where are physically allocated these 2104m of data ?
<br>
I was assuming that a process cannot allocate more the 2Go of RAM on a 32bit
<br>
machine, this would meant that part of this 2104m is located on the disk or
<br>
anywhere else...
<br>
<p>My configuration is:
<br>
OpenMPI 1.4 on Mandriva 2008 (32bit)
<br>
Program is started using: mpirun --mca btl_tcp_eager_limit 50000000 -v
<br>
-machinefile machinefile.txt MyOpenMPIProgram
<br>
<p>Thanks in advance for any help/tips (and sorry if this is not completly
<br>
related to openmpi).
<br>
<p>Olivier
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13027/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13028.php">Damien Hocking: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<li><strong>Previous message:</strong> <a href="13026.php">Shiqing Fan: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13047.php">Jeff Squyres: "Re: [OMPI users] Question on virtual memory allocated"</a>
<li><strong>Reply:</strong> <a href="13047.php">Jeff Squyres: "Re: [OMPI users] Question on virtual memory allocated"</a>
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
