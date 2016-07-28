<?
$subject_val = "[OMPI users] Why do I only see 1 process running? Please help!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 17:38:19 2009" -->
<!-- isoreceived="20090417213819" -->
<!-- sent="Fri, 17 Apr 2009 14:38:00 -0700" -->
<!-- isosent="20090417213800" -->
<!-- name="Grady Laksmono" -->
<!-- email="gradyfausta_at_[hidden]" -->
<!-- subject="[OMPI users] Why do I only see 1 process running? Please help!" -->
<!-- id="a6cfb8020904171438t56c8e265ofb6083c8ce42fe81_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Why do I only see 1 process running? Please help!<br>
<strong>From:</strong> Grady Laksmono (<em>gradyfausta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-17 17:38:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8968.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8966.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8971.php">jody: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>Reply:</strong> <a href="8971.php">jody: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>Reply:</strong> <a href="8998.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, here's what I have:
<br>
<p>*hello_cxx example
<br>
*[hpc_at_localhost examples]$ mpirun -n 2 hello_cxx
<br>
hello_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared
<br>
object, co nsider re-linking
<br>
hello_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared
<br>
object, co nsider re-linking
<br>
Hello, world!  I am 0 of 1
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[0,0,0]: OpenIB on host localhost.localdomain was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[0,0,0]: OpenIB on host localhost.localdomain was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
Hello, world!  I am 0 of 1
<br>
<p>*ring_cxx example
<br>
*[hpc_at_localhost examples]$ mpirun -n 2 ring_cxx
<br>
ring_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared object,
<br>
consider re-linking
<br>
ring_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared object,
<br>
consider re-linking
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[0,0,0]: OpenIB on host localhost.localdomain was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
[0,0,0]: OpenIB on host localhost.localdomain was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
Process 0 sending 10 to 0, tag 201 (1 processes in ring)
<br>
Process 0 sending 10 to 0, tag 201 (1 processes in ring)
<br>
Process 0 sent to 0
<br>
Process 0 sent to 0
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
<p>which is weird, I'm not sure what's wrong, but one thing that I realized is
<br>
that the documentation for running openmpi is outdated? here's my $PATH and
<br>
$LD_LIBRARY_PATH
<br>
<p>[hpc_at_localhost ~]$ cat .bash_profile
<br>
# .bash_profile
<br>
<p># Get the aliases and functions
<br>
if [ -f ~/.bashrc ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. ~/.bashrc
<br>
fi
<br>
<p># User specific environment and startup programs
<br>
<p>PATH=$PATH:$HOME/bin:/usr/lib/openmpi/1.2.5-gcc/bin
<br>
LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/lib/openmpi/1.2.5-gcc/lib
<br>
<p>export PATH
<br>
export LD_LIBRARY_PATH
<br>
unset USERNAME
<br>
<p>It's different that what the documentation had, because there's I couldn't
<br>
find the files in the /opt/openmpi
<br>
I hope that anyone could help?
<br>
<p>Thanks a lot!
<br>
<p>-- Grady
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8967/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8968.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8966.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8971.php">jody: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>Reply:</strong> <a href="8971.php">jody: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>Reply:</strong> <a href="8998.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
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
