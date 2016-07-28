<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 08:16:45 2007" -->
<!-- isoreceived="20070726121645" -->
<!-- sent="Thu, 26 Jul 2007 08:16:28 -0400" -->
<!-- isosent="20070726121628" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program" -->
<!-- id="EEBACCFB-C635-4AE6-B7DB-4AEB97DD8564_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="EA09C4B2B0F16E44B8F3311629493C0DCCD0A3_at_DJFPOST01.djf.agrsci.dk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-26 08:16:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3769.php">Lourival Mendes: "[OMPI users] Open MPI and Pascal Environment"</a>
<li><strong>Previous message:</strong> <a href="3767.php">Per Madsen: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<li><strong>In reply to:</strong> <a href="3767.php">Per Madsen: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for not replying earlier -- yes, this should work.  It's a  
<br>
known issue that we have MCA parameter &quot;contamination&quot; if you try to  
<br>
fork/exec an mpirun from within an MPI process.
<br>
<p>On Jul 26, 2007, at 1:48 AM, Per Madsen wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have found a solution to my problem with executing a MPI program  
</span><br>
<span class="quotelev1">&gt; from within a MPI program via a system call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A related problem has been discussed in the thread: &#147;Recursive use  
</span><br>
<span class="quotelev1">&gt; of orterun&#148;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem was the setup and export of environment variables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I solved my problem by adding the following to the script starting  
</span><br>
<span class="quotelev1">&gt; the second MPI program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for i in $(env | grep OMPI_MCA |sed 's/=/ /' | awk '{print $1}')
</span><br>
<span class="quotelev1">&gt;     do
</span><br>
<span class="quotelev1">&gt;        unset $i
</span><br>
<span class="quotelev1">&gt;     done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This clear the environment for the child process for all variables  
</span><br>
<span class="quotelev1">&gt; with name starting with &#147;OMPI_NCA&#148;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Per Madsen
</span><br>
<span class="quotelev1">&gt; Senior scientist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          AARHUS UNIVERSITET / UNIVERSITY OF AARHUS
</span><br>
<span class="quotelev1">&gt; Det Jordbrugsvidenskabelige Fakultet / Faculty of Agricultural  
</span><br>
<span class="quotelev1">&gt; Sciences
</span><br>
<span class="quotelev1">&gt; Forskningscenter Foulum / Research Centre Foulum
</span><br>
<span class="quotelev1">&gt; Genetik og Bioteknologi / Dept. of Genetics and Biotechnology
</span><br>
<span class="quotelev1">&gt; Blichers All&#233; 20, P.O. BOX 50
</span><br>
<span class="quotelev1">&gt; DK-8830 Tjele
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3769.php">Lourival Mendes: "[OMPI users] Open MPI and Pascal Environment"</a>
<li><strong>Previous message:</strong> <a href="3767.php">Per Madsen: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<li><strong>In reply to:</strong> <a href="3767.php">Per Madsen: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
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
