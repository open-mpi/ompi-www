<?
$subject_val = "[OMPI users] Error from mpirun command";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 18:02:22 2011" -->
<!-- isoreceived="20110112230222" -->
<!-- sent="Wed, 12 Jan 2011 14:57:38 -0800" -->
<!-- isosent="20110112225738" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="[OMPI users] Error from mpirun command" -->
<!-- id="C95371E2.DC9B%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> [OMPI users] Error from mpirun command<br>
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 17:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15345.php">Gus Correa: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Previous message:</strong> <a href="15343.php">Gus Correa: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15345.php">Gus Correa: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Reply:</strong> <a href="15345.php">Gus Correa: "Re: [OMPI users] Error from mpirun command"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to run simple mpirun commands (pretty much straight out of
<br>
mpirun man page) and getting a bit of error message.  Here&#146;s what I mean:
<br>
<p>&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$ hostname
<br>
&nbsp;&nbsp;&nbsp;vixen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname
<br>
&nbsp;&nbsp;&nbsp;vixen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$ mpirun -H blitzen -np 1 hostname
<br>
&nbsp;&nbsp;&nbsp;stty: standard input: Invalid argument
<br>
&nbsp;&nbsp;&nbsp;blitzen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 1 hostname
<br>
&nbsp;&nbsp;&nbsp;stty: standard inputvixen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;blitzen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$ : Invalid argument
<br>
<p>&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 1 hostname 2&gt; stdErr
<br>
&nbsp;&nbsp;&nbsp;vixen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;blitzen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$ cat stdErr
<br>
&nbsp;&nbsp;&nbsp;stty: standard input: Invalid argument
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$ ssh -l tsakai blitzen
<br>
&nbsp;&nbsp;&nbsp;Last login: Wed Jan 12 15:41:59 2011 from vixen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;Platform OCS Frontend Node - Blitzen Cluster
<br>
&nbsp;&nbsp;&nbsp;Platform OCS 4.5.1 (Flintstone)
<br>
&nbsp;&nbsp;&nbsp;Profile built 11:01 10-Jul-2008
<br>
<p>&nbsp;&nbsp;&nbsp;Kickstarted 11:02 10-Jul-2008
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$ hostname
<br>
&nbsp;&nbsp;&nbsp;blitzen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$ mpirun -H blitzen -np 1 hostname
<br>
&nbsp;&nbsp;&nbsp;blitzen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname
<br>
&nbsp;&nbsp;&nbsp;stty: standard inputvixen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$ : Invalid argument
<br>
<p>&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 1 hostname
<br>
&nbsp;&nbsp;&nbsp;stty: standard inputblitzen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;vixen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$ : Invalid argument
<br>
<p>&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$ mpirun -H vixen -np 1 hostname : -H blitzen -np 1 hostname 2&gt; stdErr
<br>
&nbsp;&nbsp;&nbsp;blitzen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;vixen.egcrc.org
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$ cat stdErr
<br>
&nbsp;&nbsp;&nbsp;stty: standard input: Invalid argument
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_blitzen ~]$ exit
<br>
&nbsp;&nbsp;&nbsp;logout
<br>
&nbsp;&nbsp;&nbsp;[tsakai_at_vixen Rmpi]$
<br>
<p>I am using two hosts: vixen and blitzen.  It appears that when a machine other than
<br>
the one I am on it is specified via &#150;H flag, I get &#147;stty: standard input: Invalid argument&#148;
<br>
message to stderr.  It doesn&#146;t seem to impeed the execution of the command (in
<br>
my example, hostname), though.
<br>
<p>Can somebody please tell me what this means and what it takes to cure the problem?
<br>
<p>Thank you.
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15344/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15345.php">Gus Correa: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Previous message:</strong> <a href="15343.php">Gus Correa: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15345.php">Gus Correa: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Reply:</strong> <a href="15345.php">Gus Correa: "Re: [OMPI users] Error from mpirun command"</a>
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
