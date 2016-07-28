<?
$subject_val = "Re: [OMPI users] Problems Broadcasting/Scattering Data";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 13:31:12 2008" -->
<!-- isoreceived="20080108183112" -->
<!-- sent="Tue, 08 Jan 2008 19:31:51 +0100" -->
<!-- isosent="20080108183151" -->
<!-- name="Dino Rossegger" -->
<!-- email="dino.rossegger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Broadcasting/Scattering Data" -->
<!-- id="4783C197.5060109_at_gmx.at" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="20080108180158.GC692_at_wintermute" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Broadcasting/Scattering Data<br>
<strong>From:</strong> Dino Rossegger (<em>dino.rossegger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-08 13:31:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4793.php">Parag Kalra: "[OMPI users] MPI/Pro Error"</a>
<li><strong>Previous message:</strong> <a href="4791.php">Andreas Sch&#228;fer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>In reply to:</strong> <a href="4791.php">Andreas Sch&#228;fer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4797.php">Andreas Schäfer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Reply:</strong> <a href="4797.php">Andreas Schäfer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
thanks for the programm, but sadly I can't get it work :(.
<br>
It's the same error as in my programm. I get the following output:
<br>
0
<br>
0
<br>
0
<br>
10
<br>
0
<br>
0
<br>
11
<br>
0
<br>
0
<br>
<p>Which as far as I know can't be correct. It's the same problem that I 
<br>
had in my programm. The process with the rank 0 has the right data in 
<br>
it's array, all the others only 0.
<br>
Andreas Sch&#228;fer schrieb:
<br>
<span class="quotelev1">&gt; Hi Dino,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 18:05 Tue 08 Jan     , Dino Rossegger wrote:
</span><br>
<span class="quotelev2">&gt;&gt; In fact it is initialized, as I stated in my first mail I only left out 
</span><br>
<span class="quotelev2">&gt;&gt; the code where it gets initialized, since it reads the data from a file 
</span><br>
<span class="quotelev2">&gt;&gt; and that works (I have tested it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (you should have provided a self contained excerpt)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have reworked your program to check what's running wrong. In fact it
</span><br>
<span class="quotelev1">&gt; seems to work as expected, although you might want to double check
</span><br>
<span class="quotelev1">&gt; your array sizes, they're named a bit confusingly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe it didn't work because there was no MPI_Finalize() at the
</span><br>
<span class="quotelev1">&gt; end. But then again I might not understand your problem. The other
</span><br>
<span class="quotelev1">&gt; machines do no output, so how can their output be wrong? If you expect
</span><br>
<span class="quotelev1">&gt; the other processors to have the same data in stat3 as rank 0 does,
</span><br>
<span class="quotelev1">&gt; then you should rather use MPI_Allgather than MPI_Gather, as
</span><br>
<span class="quotelev1">&gt; MPI_Gather will only concentrate the data on the root node, which is 0
</span><br>
<span class="quotelev1">&gt; in your case. Thus, the other nodes cannot produce the same output as
</span><br>
<span class="quotelev1">&gt; node 0.
</span><br>
<p>No, I had a MPI_Finalize only cutted it away when I was pasting the 
<br>
programm. And I also understand that ther can't be the same output but 
<br>
only 0 is a little bit confusing for me.
<br>
<span class="quotelev1">&gt; I've attached my reworked version (including some initialization
</span><br>
<span class="quotelev1">&gt; code for clarity). If you want me again to debug a program of yours,
</span><br>
<span class="quotelev1">&gt; send a floppy along with a pizza Hawai (cartwheel size) to:
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena
</span><br>
<span class="quotelev1">&gt; Ernst-Abbe-Platz 2
</span><br>
<span class="quotelev1">&gt; 07743 Jena
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seriously, that would be cool :P
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; -Andi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I would send you a pizza haway with a floppy but I fear that it will be 
<br>
cold until it gets to you ;).
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="4793.php">Parag Kalra: "[OMPI users] MPI/Pro Error"</a>
<li><strong>Previous message:</strong> <a href="4791.php">Andreas Sch&#228;fer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>In reply to:</strong> <a href="4791.php">Andreas Sch&#228;fer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4797.php">Andreas Schäfer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Reply:</strong> <a href="4797.php">Andreas Schäfer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
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
