<?
$subject_val = "[OMPI users] More newbie question: --hostfile option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 21:28:08 2011" -->
<!-- isoreceived="20110113022808" -->
<!-- sent="Wed, 12 Jan 2011 18:23:25 -0800" -->
<!-- isosent="20110113022325" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="[OMPI users] More newbie question: --hostfile option" -->
<!-- id="C953A21D.DCB7%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] More newbie question: --hostfile option<br>
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 21:23:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15351.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="15349.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15352.php">Ralph Castain: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Reply:</strong> <a href="15352.php">Ralph Castain: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Reply:</strong> <a href="15353.php">David Zhang: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Reply:</strong> <a href="15354.php">Gus Correa: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I can execute the command below:
<br>
&nbsp;&nbsp;&nbsp;$ mpirun -H vixen -np 1 hostname : -H compute-0-0,compute-0-1,compute-0-2 -np 3 hostname
<br>
and I get:
<br>
&nbsp;&nbsp;&nbsp;vixen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;compute-0-0.local
<br>
&nbsp;&nbsp;&nbsp;compute-0-1.local
<br>
&nbsp;&nbsp;&nbsp;compute-0-2.local
<br>
<p>I have a file myhosts, which looks like:
<br>
&nbsp;&nbsp;&nbsp;compute-0-0 slots=1
<br>
&nbsp;&nbsp;&nbsp;compute-0-1 slots=1
<br>
&nbsp;&nbsp;&nbsp;compute-0-2 slots=1
<br>
but when I execute:
<br>
&nbsp;&nbsp;&nbsp;$ mpirun -H vixen -np 1 hostname : --hostfile myhosts -np 3 hostname
<br>
I get:
<br>
&nbsp;&nbsp;&nbsp;There are no allocated resources for the application
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname
<br>
&nbsp;&nbsp;&nbsp;that match the requested mapping:
<br>
<p>&nbsp;&nbsp;&nbsp;Verify that you have mapped the allocated resources properly using the
<br>
&nbsp;&nbsp;&nbsp;--host or --hostfile specification.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
&nbsp;&nbsp;&nbsp;launch so we are aborting.
<br>
<p>&nbsp;&nbsp;&nbsp;There may be more information reported by the environment (see above).
<br>
<p>&nbsp;&nbsp;&nbsp;This may be because the daemon was unable to find all the needed shared
<br>
&nbsp;&nbsp;&nbsp;libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
&nbsp;&nbsp;&nbsp;location of the shared libraries on the remote nodes and this will
<br>
&nbsp;&nbsp;&nbsp;automatically be forwarded to the remote nodes.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;mpirun noticed that the job aborted, but has no info as to the process
<br>
&nbsp;&nbsp;&nbsp;that caused that situation.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;mpirun: clean termination accomplished
<br>
<p>Interestingly, this works:
<br>
&nbsp;&nbsp;&nbsp;$ mpirun --hostfile myhosts -np 3 hostname
<br>
&nbsp;&nbsp;&nbsp;compute-0-0.local
<br>
&nbsp;&nbsp;&nbsp;compute-0-1.local
<br>
&nbsp;&nbsp;&nbsp;compute-0-2.local
<br>
&nbsp;&nbsp;&nbsp;$
<br>
<p>Am I correct in concluding that &#150;H and &#151;hostfile cannot be issued in the
<br>
same mpirun command which contains a colon (:)?  Or is there any trick
<br>
or work-around to have both &#150;H and &#151;hostfile?
<br>
<p>Thank you.
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15350/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15351.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="15349.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15352.php">Ralph Castain: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Reply:</strong> <a href="15352.php">Ralph Castain: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Reply:</strong> <a href="15353.php">David Zhang: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Reply:</strong> <a href="15354.php">Gus Correa: "Re: [OMPI users] More newbie question: --hostfile option"</a>
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
