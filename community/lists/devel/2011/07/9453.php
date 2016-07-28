<?
$subject_val = "[OMPI devel] Question about hanging mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  1 12:43:50 2011" -->
<!-- isoreceived="20110701164350" -->
<!-- sent="Fri, 1 Jul 2011 16:42:10 +0000" -->
<!-- isosent="20110701164210" -->
<!-- name="Colon, Joseanibal" -->
<!-- email="joseanibal.colon_at_[hidden]" -->
<!-- subject="[OMPI devel] Question about hanging mpirun" -->
<!-- id="21316B765A6B9D46A5CCE36DDD1199C26EE2268B2A_at_GVW1339EXA.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Question about hanging mpirun<br>
<strong>From:</strong> Colon, Joseanibal (<em>joseanibal.colon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-01 12:42:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9454.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Previous message:</strong> <a href="9452.php">Mike Dubman: "[OMPI devel] RFC: extend MTL API"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9454.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Reply:</strong> <a href="9454.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My mpi application is hanging forever when called with mpirun -np &gt;1 (that is 2 or more... not actually typing the '&gt;').
<br>
<p>So I built openmpi 1.4.3 with default options except I used -prefix=/usr/local/openmpi. I compiled an application against it but I need to run this application elsewhere. So brought in my entire installation directory /usr/local/openmpi to this new machine along with my binary to test it. Ran the following command... (If i did't use the -mca options it would print out messages about missing OpenFrabric):
<br>
/usr/local/openmpi/bin/mpirun --mca btl tcp,self -np 2 ./my_application
<br>
<p>This actually works for -np 1. But requesting another process makes the call hang forever. 'strace' of the above call shows an never ending calls to &quot;poll&quot; resulting in (timeout) every time.
<br>
Executing /usr/local/openmpi/bin/ompi_info still shows the configure and build host as the machine I built on, but I don't know if this may cause a problem. I also see &quot;Thread support: posix (mpi: no, progress: no)&quot;
<br>
<p>Unfortunately I need to do it this way.. I cannot build openmpi on the target machine, so I need to make it portable. This other machine should be the same architecture and OS and everything.
<br>
<p>I should have solved this yesterday, please help, and thanks!
<br>
<p>-Joseanibal
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9453/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9454.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Previous message:</strong> <a href="9452.php">Mike Dubman: "[OMPI devel] RFC: extend MTL API"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9454.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Reply:</strong> <a href="9454.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
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
