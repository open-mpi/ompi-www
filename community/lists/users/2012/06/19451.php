<?
$subject_val = "[OMPI users] MPI and gprof";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  5 10:38:47 2012" -->
<!-- isoreceived="20120605143847" -->
<!-- sent="Tue, 05 Jun 2012 16:38:39 +0200" -->
<!-- isosent="20120605143839" -->
<!-- name="TAY wee-beng" -->
<!-- email="zonexo_at_[hidden]" -->
<!-- subject="[OMPI users] MPI and gprof" -->
<!-- id="4FCE19EF.6030007_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI and gprof<br>
<strong>From:</strong> TAY wee-beng (<em>zonexo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-05 10:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19452.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19450.php">Siegmar Gross: "[OMPI users] problem with sctp.h on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to use gprof with my mpi code. I googled and saw this msg:
<br>
<p>Open-MPI and gprof:
<br>
<p>/Yes you can profile MPI applications by compiling with -pg. However, by
<br>
/
<br>
<p>/default each process will produce an output file called &quot;gmon.out&quot;,
<br>
which is a problem if all processes are writing to the same global file
<br>
system (i.e. all processes will try to write to the same file).
<br>
/
<br>
<p>/There is an undocumented feature of gprof that allows you to specify the
<br>
filename for profiling output via the environment variable
<br>
GMON_OUT_PREFIX. For example, one can set this variable in the .bashrc
<br>
file for every node to insure unique profile filenames, i.e.:
<br>
/
<br>
<p>/export GMON_OUT_PREFIX='gmon.out-'`/bin/uname -n`
<br>
/
<br>
<p>/The filename will appear as GMON_OUT_PREFIX.pid, where pid is the
<br>
process id on a given node (so this will work when multiple nodes are
<br>
contained in a single host). /
<br>
<p><p>However, this msg was written in 2009. I wonder if it is still the same 
<br>
method. Also, in that case, if i run on 10 cpus, I will have 10 such 
<br>
outputs. Is it possible to get an average result instead of individual 
<br>
results?
<br>
<p>I run the mpi code but without using the above instructions and got just 
<br>
1 file - gmon.out. Does it mean that this result is for the current node?
<br>
<p>Thank you!
<br>
<p><pre>
-- 
Yours sincerely,
TAY wee-beng
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19451/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19452.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19450.php">Siegmar Gross: "[OMPI users] problem with sctp.h on Solaris"</a>
<!-- nextthread="start" -->
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
