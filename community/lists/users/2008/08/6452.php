<?
$subject_val = "[OMPI users] Help: MPIBLAST Crash";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 30 01:27:47 2008" -->
<!-- isoreceived="20080830052747" -->
<!-- sent="Sat, 30 Aug 2008 13:27:42 +0800" -->
<!-- isosent="20080830052742" -->
<!-- name="Lee Amy" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="[OMPI users] Help: MPIBLAST Crash" -->
<!-- id="289665360808292227h3638274cgc3fc94d4d4aca04f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Help: MPIBLAST Crash<br>
<strong>From:</strong> Lee Amy (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-30 01:27:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6453.php">Jeff Squyres: "Re: [OMPI users] Help: MPIBLAST Crash"</a>
<li><strong>Previous message:</strong> <a href="6451.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6453.php">Jeff Squyres: "Re: [OMPI users] Help: MPIBLAST Crash"</a>
<li><strong>Reply:</strong> <a href="6453.php">Jeff Squyres: "Re: [OMPI users] Help: MPIBLAST Crash"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6455.php">Brock Palen: "Re: [OMPI users] Help: MPIBLAST Crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I use Open MPI 1.2.5 to compile MPIBLAST 1.5, it runs well. When I run job
<br>
by this following command:
<br>
<p>mpirun -np 21 -mca pls_rsh_agent rsh mpiblast -p blastn -d test.fa -i
<br>
/usr/local/aaa.fa -o output
<br>
<p>It shows these error messages:
<br>
<p>ADIOI_GEN_DELETE (line 22): **io No such file or directoryFatal Error:
<br>
mpiblast.cppError reading database mbf file
<br>
[gnode1:26957] MPI_ABORT invoked on rank 0 in communicator MPI_COMM_WORLD
<br>
with errorcode -1
<br>
4    0.010139    Bailing out with signal 15
<br>
[gnode2:11975] MPI_ABORT invoked on rank 4 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
20    0.01599    Bailing out with signal 15
<br>
[gnode1:26961] MPI_ABORT invoked on rank 20 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
16    0.00986695    Bailing out with signal 15
<br>
[gnode5:10829] MPI_ABORT invoked on rank 16 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
5    0.0122449    Bailing out with signal 15
<br>
[gnode2:11976] MPI_ABORT invoked on rank 5 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
1    0.0102971    Bailing out with signal 15
<br>
[gnode1:26958] MPI_ABORT invoked on rank 1 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
17    0.012876    Bailing out with signal 15
<br>
[gnode5:10830] MPI_ABORT invoked on rank 17 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
6    0.014256    Bailing out with signal 15
<br>
[gnode2:11977] MPI_ABORT invoked on rank 6 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
2    0.0124009    Bailing out with signal 15
<br>
[gnode1:26959] MPI_ABORT invoked on rank 2 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
18    0.0144899    Bailing out with signal 15
<br>
[gnode5:10831] MPI_ABORT invoked on rank 18 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
7    0.016083    Bailing out with signal 15
<br>
[gnode2:11978] MPI_ABORT invoked on rank 7 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
3    0.011174    Bailing out with signal 15
<br>
[gnode1:26960] MPI_ABORT invoked on rank 3 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
19    0.0175061    Bailing out with signal 15
<br>
[gnode5:10832] MPI_ABORT invoked on rank 19 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
12    0.00988579    Bailing out with signal 15
<br>
[gnode4:13462] MPI_ABORT invoked on rank 12 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
13    0.012902    Bailing out with signal 15
<br>
[gnode4:13463] MPI_ABORT invoked on rank 13 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
14    0.0149741    Bailing out with signal 15
<br>
[gnode4:13464] MPI_ABORT invoked on rank 14 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
15    0.016958    Bailing out with signal 15
<br>
[gnode4:13465] MPI_ABORT invoked on rank 15 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
8    0.0100341    Bailing out with signal 15
<br>
[gnode3:13459] MPI_ABORT invoked on rank 8 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
9    0.0302022    Bailing out with signal 15
<br>
[gnode3:13460] MPI_ABORT invoked on rank 9 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
10    0.032104    Bailing out with signal 15
<br>
[gnode3:13461] MPI_ABORT invoked on rank 10 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
11    0.0338449    Bailing out with signal 15
<br>
[gnode3:13462] MPI_ABORT invoked on rank 11 in communicator MPI_COMM_WORLD
<br>
with errorcode 0
<br>
<p>And the job stop. However, I don't know why this problem happened.
<br>
<p>Could you tell me how to fix that?
<br>
<p>Huge thanks to you.
<br>
<p>Best Regards,
<br>
<p>Amy Lee
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6452/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6453.php">Jeff Squyres: "Re: [OMPI users] Help: MPIBLAST Crash"</a>
<li><strong>Previous message:</strong> <a href="6451.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6453.php">Jeff Squyres: "Re: [OMPI users] Help: MPIBLAST Crash"</a>
<li><strong>Reply:</strong> <a href="6453.php">Jeff Squyres: "Re: [OMPI users] Help: MPIBLAST Crash"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6455.php">Brock Palen: "Re: [OMPI users] Help: MPIBLAST Crash"</a>
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
