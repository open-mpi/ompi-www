<?
$subject_val = "Re: [OMPI users] Help: MPIBLAST Crash";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 09:10:19 2008" -->
<!-- isoreceived="20080902131019" -->
<!-- sent="Tue, 2 Sep 2008 09:09:28 -0400" -->
<!-- isosent="20080902130928" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: MPIBLAST Crash" -->
<!-- id="F6674FA1-8221-41A4-9FF9-6FB0B73562CE_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="289665360808292227h3638274cgc3fc94d4d4aca04f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: MPIBLAST Crash<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-02 09:09:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6456.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6454.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6452.php">Lee Amy: "[OMPI users] Help: MPIBLAST Crash"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check out the first error:
<br>
<span class="quotelev1">&gt; ADIOI_GEN_DELETE (line 22): **io No such file or directoryFatal Error:
</span><br>
<span class="quotelev1">&gt; mpiblast.cppError reading database mbf file
</span><br>
<p>Check to make sure all your files are in place.
<br>
Also many times you need to set you .ncbirc
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Aug 30, 2008, at 1:27 AM, Lee Amy wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use Open MPI 1.2.5 to compile MPIBLAST 1.5, it runs well. When I  
</span><br>
<span class="quotelev1">&gt; run job by this following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 21 -mca pls_rsh_agent rsh mpiblast -p blastn -d test.fa - 
</span><br>
<span class="quotelev1">&gt; i /usr/local/aaa.fa -o output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It shows these error messages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ADIOI_GEN_DELETE (line 22): **io No such file or directoryFatal Error:
</span><br>
<span class="quotelev1">&gt; mpiblast.cppError reading database mbf file
</span><br>
<span class="quotelev1">&gt; [gnode1:26957] MPI_ABORT invoked on rank 0 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode -1
</span><br>
<span class="quotelev1">&gt; 4    0.010139    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode2:11975] MPI_ABORT invoked on rank 4 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 20    0.01599    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode1:26961] MPI_ABORT invoked on rank 20 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 16    0.00986695    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode5:10829] MPI_ABORT invoked on rank 16 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 5    0.0122449    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode2:11976] MPI_ABORT invoked on rank 5 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 1    0.0102971    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode1:26958] MPI_ABORT invoked on rank 1 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 17    0.012876    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode5:10830] MPI_ABORT invoked on rank 17 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 6    0.014256    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode2:11977] MPI_ABORT invoked on rank 6 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 2    0.0124009    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode1:26959] MPI_ABORT invoked on rank 2 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 18    0.0144899    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode5:10831] MPI_ABORT invoked on rank 18 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 7    0.016083    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode2:11978] MPI_ABORT invoked on rank 7 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 3    0.011174    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode1:26960] MPI_ABORT invoked on rank 3 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 19    0.0175061    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode5:10832] MPI_ABORT invoked on rank 19 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 12    0.00988579    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode4:13462] MPI_ABORT invoked on rank 12 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 13    0.012902    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode4:13463] MPI_ABORT invoked on rank 13 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 14    0.0149741    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode4:13464] MPI_ABORT invoked on rank 14 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 15    0.016958    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode4:13465] MPI_ABORT invoked on rank 15 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 8    0.0100341    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode3:13459] MPI_ABORT invoked on rank 8 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 9    0.0302022    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode3:13460] MPI_ABORT invoked on rank 9 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 10    0.032104    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode3:13461] MPI_ABORT invoked on rank 10 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt; 11    0.0338449    Bailing out with signal 15
</span><br>
<span class="quotelev1">&gt; [gnode3:13462] MPI_ABORT invoked on rank 11 in communicator  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD with errorcode 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the job stop. However, I don't know why this problem happened.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you tell me how to fix that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Huge thanks to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Amy Lee
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6456.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6454.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6452.php">Lee Amy: "[OMPI users] Help: MPIBLAST Crash"</a>
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
