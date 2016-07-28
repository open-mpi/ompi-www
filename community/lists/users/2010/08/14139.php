<?
$subject_val = "[OMPI users] Fwd: Problems with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 12:32:49 2010" -->
<!-- isoreceived="20100831163249" -->
<!-- sent="Tue, 31 Aug 2010 13:32:42 -0300" -->
<!-- isosent="20100831163242" -->
<!-- name="Osvaldo Reis" -->
<!-- email="osvaldoreisss_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: Problems with OpenMPI" -->
<!-- id="AANLkTi=Xy-hD2HXnUswOTr-ko6-QVH+CAAFn=M76YhGH_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikS8MU3CBfShQPZibWmb-SCYAzeGEC9Nr-nHA=p_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: Problems with OpenMPI<br>
<strong>From:</strong> Osvaldo Reis (<em>osvaldoreisss_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 12:32:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14140.php">David Zhang: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="14138.php">Markus Schmidberger: "[OMPI users] [R] Short survey concerning the use of software engineering in the field of High Performance Computing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14140.php">David Zhang: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="14140.php">David Zhang: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I wanted to use openmpi, I install with no errors, and when I run de
<br>
examples in local it work well, but when I specify another host to run it
<br>
doesn't work. There are no errors but the it doesn't show anything and don't
<br>
start the process in another host and don't stop to run in localhost. Then I
<br>
press Crtl+C to killl the process and it shows:
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;anotherhost - daemon did not report back when launched
<br>
<p>I loot at /var/log/secure and it started the connection but after he close
<br>
without execute anything.
<br>
<p><p>Running localhost
<br>
<p>[user_at_host1 examples]$ mpirun -np 8 --host localhost ./hello_c
<br>
Hello, world, I am 0 of 8
<br>
Hello, world, I am 1 of 8
<br>
Hello, world, I am 2 of 8
<br>
Hello, world, I am 4 of 8
<br>
Hello, world, I am 5 of 8
<br>
Hello, world, I am 6 of 8
<br>
Hello, world, I am 7 of 8
<br>
Hello, world, I am 3 of 8
<br>
<p>Running in another host
<br>
<p>[user_at_host1 examples]$ mpirun -np 8 --host anotherhost ./hello_c
<br>
<p><p>Some help please!
<br>
<p><p><p><pre>
-- 
Osvaldo Reis Junior
Engenharia de Computa&#231;&#227;o - UEPG
Laborat&#243;rio de Gen&#244;mica e Express&#227;o - LGE
Universidade Estadual de Campinas - UNICAMP
MSN: osvaldoreis85_at_[hidden]
Skype: osvaldoreisss
Cel: (19) 8128-5273
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14139/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14140.php">David Zhang: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="14138.php">Markus Schmidberger: "[OMPI users] [R] Short survey concerning the use of software engineering in the field of High Performance Computing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14140.php">David Zhang: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="14140.php">David Zhang: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
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
