<?
$subject_val = "[OMPI users] Program hangs when run in the remote host ...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 13:17:17 2009" -->
<!-- isoreceived="20090918171717" -->
<!-- sent="Fri, 18 Sep 2009 22:47:12 +0530" -->
<!-- isosent="20090918171712" -->
<!-- name="souvik bhattacherjee" -->
<!-- email="souvik99_at_[hidden]" -->
<!-- subject="[OMPI users] Program hangs when run in the remote host ..." -->
<!-- id="b568ee700909181017o679b7a68x869807ded8a6f946_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Program hangs when run in the remote host ...<br>
<strong>From:</strong> souvik bhattacherjee (<em>souvik99_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-18 13:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10688.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Previous message:</strong> <a href="10686.php">Constantinos Makassikis: "[OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10688.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Reply:</strong> <a href="10688.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>Myself quite new to Open MPI. Recently, I had installed openmpi-1.3.3
<br>
separately on two of my machines ict1 and ict2. These machines are
<br>
dual-socket quad-core (Intel Xeon E5410) i.e. each having 8 processors and
<br>
are connected by Gigabit ethernet switch. As a prerequisite, I can ssh
<br>
between them without a password or passphrase ( I did not supply the
<br>
passphrase at all ). Thereafter,
<br>
<p>$ cd openmpi-1.3.3
<br>
$ mkdir build
<br>
$ cd build
<br>
$ ../configure --prefix=/usr/local/openmpi-1.3.3/
<br>
<p>Then as a root user,
<br>
<p># make all install
<br>
<p>Also .bash_profile and .bashrc had the following lines written into them:
<br>
<p>PATH=$PATH:/usr/local/openmpi-1.3.3/bin/
<br>
LD_LIBRARY_PATH=/usr/local/openmpi-1.3.3/lib/
<br>
<p>----------------------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
<p><p>$ cd ../examples/
<br>
$ make
<br>
$ mpirun -np 2 --host ict1 hello_c
<br>
&nbsp;&nbsp;&nbsp;hello_c: error while loading shared libraries: libmpi.so.0: cannot open
<br>
shared object file: No suchfile or directory
<br>
&nbsp;&nbsp;&nbsp;hello_c: error while loading shared libraries: libmpi.so.0: cannot open
<br>
shared object file: No suchfile or directory
<br>
<p>$ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict1 hello_c
<br>
&nbsp;&nbsp;&nbsp;Hello, world, I am 1 of 2
<br>
&nbsp;&nbsp;&nbsp;Hello, world, I am 0 of 2
<br>
<p>But the program hangs when ....
<br>
<p>$ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict1,ict2 hello_c
<br>
<p>This statement does not produce any output. Doing top on either machines
<br>
does not show any hello_c running. However, when I press Ctrl+C the
<br>
following output appears
<br>
<p>^Cmpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ict2 - daemon did not report back when launched
<br>
<p>$
<br>
<p>The same thing repeats itself when hello_c is run from ict2. Since, the
<br>
program does not produce any error, it becomes difficult to locate where I
<br>
might have gone wrong.
<br>
<p>Did anyone of you encounter this problem or anything similar ? Any help
<br>
would be much appreciated.
<br>
<p>Thanks,
<br>
<p><pre>
-- 
Souvik
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10687/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10688.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Previous message:</strong> <a href="10686.php">Constantinos Makassikis: "[OMPI users] Changing location where checkpoints are saved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10688.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Reply:</strong> <a href="10688.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
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
