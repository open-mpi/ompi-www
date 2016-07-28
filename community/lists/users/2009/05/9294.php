<?
$subject_val = "[OMPI users] mpirun fails on remote applications";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 01:18:29 2009" -->
<!-- isoreceived="20090512051829" -->
<!-- sent="Mon, 11 May 2009 22:18:24 -0700 (PDT)" -->
<!-- isosent="20090512051824" -->
<!-- name="feng chen" -->
<!-- email="fch6699_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun fails on remote applications" -->
<!-- id="375049.35098.qm_at_web53604.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun fails on remote applications<br>
<strong>From:</strong> feng chen (<em>fch6699_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 01:18:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9295.php">Anton Starikov: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9293.php">Anton Starikov: "Re: [OMPI users] strange bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9298.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Reply:</strong> <a href="9298.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun fails on remote applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi all,
<br>
<p>First of all,i'm new to openmpi. So i don't know much about mpi setting. That's why i'm following manual and FAQ suggestions from the beginning.
<br>
Everything went well untile i try to run a pllication on a remote node by using 'mpirun -np' command. It just hanging there without doing anything, no error messanges, no 
<br>
complaining or whatsoever. What confused me is that i can run application over ssh with no problem, while it comes to mpirun, just stuck in there does nothing.
<br>
I'm pretty sure i got everyting setup in the right way manner, including no password signin over ssh, environment variables for bot interactive and non-interactive logons.
<br>
A sample list of commands been used list as following:
<br>
<p><p><p><p>[fch6699_at_anfield05 test]$ mpicc -o hello hello.f
<br>
[fch6699_at_anfield05 test]$ ssh anfield04 ./hello
<br>
0 of 1: Hello world!
<br>
[fch6699_at_anfield05 test]$ mpirun -host anfield05 -np 4 ./hello
<br>
0 of 4: Hello world!
<br>
2 of 4: Hello world!
<br>
3 of 4: Hello world!
<br>
1 of 4: Hello world!
<br>
[fch6699_at_anfield05 test]$ mpirun -host anfield04 -np 4 ./hello
<br>
just hanging there for years!!!
<br>
need help to fix this !!
<br>
if u try it in another way
<br>
[fch6699_at_anfield05 test]$ mpirun -hostfile my_hostfile -np 4 ./hell
<br>
still nothing happened, no warnnings, no complains, no error messages.. !!
<br>
<p><p>All other files related to this issue can be found in my_files.tar.gz in attachment.
<br>
<p>.cshrc
<br>
The output of the &quot;ompi_info --all&quot; command.
<br>
my_hostfile
<br>
hello.c
<br>
output of iptables
<br>
<p>The only thing i've noticed is that the port of our ssh has been changed from 22 to other number for security issues.
<br>
Don't know will that have anything to with it or not.
<br>
<p><p>Any help will be highly appreciated!!
<br>
<p>thanks in advance!
<br>
<p>Kevin
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9294/my_files.tar.gz">my_files.tar.gz</a>
</ul>
<!-- attachment="my_files.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9295.php">Anton Starikov: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9293.php">Anton Starikov: "Re: [OMPI users] strange bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9298.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Reply:</strong> <a href="9298.php">Lenny Verkhovsky: "Re: [OMPI users] mpirun fails on remote applications"</a>
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
