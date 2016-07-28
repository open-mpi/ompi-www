<?
$subject_val = "[OMPI users] How does mpirun handle Ctrl+C?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 17:31:27 2015" -->
<!-- isoreceived="20150507213127" -->
<!-- sent="Thu, 7 May 2015 14:31:26 -0700" -->
<!-- isosent="20150507213126" -->
<!-- name="Seth Axen" -->
<!-- email="seth.axen_at_[hidden]" -->
<!-- subject="[OMPI users] How does mpirun handle Ctrl+C?" -->
<!-- id="CADusZCaYzJVho=ZbCjPj59hbEzh1fqQ1in=1_ztNzxfxOhXvgw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How does mpirun handle Ctrl+C?<br>
<strong>From:</strong> Seth Axen (<em>seth.axen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-07 17:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26849.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Previous message:</strong> <a href="26847.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26849.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Reply:</strong> <a href="26849.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
How does mpirun or mpiexec handle Ctrl+C? I noticed when I use Ctrl+C on a
<br>
running python script (without MPI), this generates a KeyboardInterrupt
<br>
exception which I can catch and do something with, but when I use mpirun to
<br>
run the python script, so far as I can tell, no exception is generated; the
<br>
script just dies. I'd like to be able to catch an exception within my
<br>
script and do some cleaning up before killing the script, but I can't
<br>
figure out how to do this. I've already posted on the mpi4py message board (
<br>
<a href="https://groups.google.com/forum/#!topic/mpi4py/x8tloLNGWTk">https://groups.google.com/forum/#!topic/mpi4py/x8tloLNGWTk</a>) and was
<br>
referred here.
<br>
Thanks!
<br>
Seth
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26848/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26849.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Previous message:</strong> <a href="26847.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26849.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
<li><strong>Reply:</strong> <a href="26849.php">Ralph Castain: "Re: [OMPI users] How does mpirun handle Ctrl+C?"</a>
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
