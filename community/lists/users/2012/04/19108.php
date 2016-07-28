<?
$subject_val = "[OMPI users] MPI doesn't recognize multiple cores available on multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 17:52:19 2012" -->
<!-- isoreceived="20120424215219" -->
<!-- sent="Tue, 24 Apr 2012 15:52:15 -0600" -->
<!-- isosent="20120424215215" -->
<!-- name="Kyle Boe" -->
<!-- email="boex0040_at_[hidden]" -->
<!-- subject="[OMPI users] MPI doesn't recognize multiple cores available on multicore machines" -->
<!-- id="CA+vDB+PM460n8s9iRJmgMfzBqten3Q_a3wkOsixLZK+g4ah99w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI doesn't recognize multiple cores available on multicore machines<br>
<strong>From:</strong> Kyle Boe (<em>boex0040_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 17:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19109.php">Jingcha Joba: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19107.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19109.php">Jingcha Joba: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19109.php">Jingcha Joba: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Maybe reply:</strong> <a href="19112.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having a problem trying to use OpenMPI on some multicore machines I
<br>
have. The code I am running was giving me errors which suggested that MPI
<br>
was assigning multiple processes to the same core (which I do not want).
<br>
So, I tried launching my job using the -nooversubscribe option, and I get
<br>
this error:
<br>
<p>bash-3.2$ mpirun -np 2 -nooversubscribe &lt;executable and options here&gt;
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 2 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;&lt;executable name&gt;
<br>
<p>Either request fewer slots for your application, or make more slots
<br>
available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>I am just trying to run on the localhost, not on any remote machines. This
<br>
happens on both my 8 (2*4) core and 24 (4*6) core machines. Relevant info:
<br>
I am not using any type of scheduler here, although from the searching I've
<br>
done that doesn't seem like a requirement. The only thing I can think is
<br>
there must be some type of configuration or option I'm not setting for
<br>
using on shared memory machines (either at compile or run time), but I
<br>
can't find anyone else who has come across this error. Any thoughts?
<br>
<p>Thanks,
<br>
<p>Kyle
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19108/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19109.php">Jingcha Joba: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19107.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19109.php">Jingcha Joba: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19109.php">Jingcha Joba: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Maybe reply:</strong> <a href="19112.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
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
