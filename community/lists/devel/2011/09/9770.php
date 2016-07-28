<?
$subject_val = "[OMPI devel] RE :  RE :  Implementation of MPI_Iprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 22:05:26 2011" -->
<!-- isoreceived="20110928020526" -->
<!-- sent="Tue, 27 Sep 2011 22:05:21 -0400" -->
<!-- isosent="20110928020521" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI devel] RE :  RE :  Implementation of MPI_Iprobe" -->
<!-- id="C4217F2ABFA5D44BA8F3DCD899E5B0C8F267700734_at_EXCH-MBX-F.ulaval.ca" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DF4C16E6-64D8-4F14-AA65-7D998C49E563_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 22:05:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9771.php">Jeff Squyres: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="9769.php">George Bosilca: "Re: [OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="9769.php">George Bosilca: "Re: [OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9771.php">Jeff Squyres: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="9771.php">Jeff Squyres: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello/bonjour,
<br>
<p><p>I modified your patch so that in the worse case exactly comm-&gt;num_procs are probed (I just changed a &lt; for a &lt;= in the second for loop).
<br>
<p>The behavior of your patch was to probe a maximum of comm-&gt;num_procs - 1, thus hanging if comm-&gt;last_probed has to be probed.
<br>
<p><p>With the patch, I get a few good time slices, but most are not productive, see below.
<br>
<p><p>Therefore I strongly think that you were right to say that my program should not use MPI_ANY_SOURCE in the first place.
<br>
<p><p>I'll stick with my round-robin reception in which many calls to MPI_Iprobe says &quot;no message&quot;.
<br>
<p><p>In my round-robin reception, I guess that the opal_progress() call in mca_pml_ob1_iprobe (ompi/mca/pml/ob1/pml_ob1_iprobe.c) for all the calls
<br>
to MPI_Iprobe with no match is *really* what helps draining the messages and presumably contributing to the fairness of the whole thing.
<br>
<p><p><p>What do you think ?
<br>
<p><p><p><p>If I run Ray in gdb:
<br>
<p>(gdb) run
<br>
Starting program: /home/sboisver12/git-clones/ray/Ray 
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 0x40a00940 (LWP 16867)]
<br>
[New Thread 0x41401940 (LWP 16869)]
<br>
<p><p>I see two new threads that are spawned. 
<br>
<p>The draining of messages is also done in a &quot;progress thread&quot;, right ?
<br>
<p><p><p>Thank you.
<br>
<p><p>Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4176.47 s Speed= 90354 Sent= 30 (processMessages: 30, processData: 0) Received= 30 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4176.57 s Speed= 93748 Sent= 26 (processMessages: 26, processData: 0) Received= 26 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4176.67 s Speed= 92086 Sent= 66 (processMessages: 66, processData: 0) Received= 66 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4176.77 s Speed= 93501 Sent= 104 (processMessages: 104, processData: 0) Received= 104 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4176.87 s Speed= 94512 Sent= 85 (processMessages: 85, processData: 0) Received= 85 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4176.97 s Speed= 93262 Sent= 138 (processMessages: 138, processData: 0) Received= 138 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4177.07 s Speed= 94944 Sent= 125 (processMessages: 125, processData: 0) Received= 125 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4177.17 s Speed= 95377 Sent= 119 (processMessages: 119, processData: 0) Received= 119 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4177.27 s Speed= 91206 Sent= 129 (processMessages: 129, processData: 0) Received= 129 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4177.37 s Speed= 92937 Sent= 83 (processMessages: 83, processData: 0) Received= 83 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4177.47 s Speed= 90803 Sent= 142 (processMessages: 142, processData: 0) Received= 142 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4177.57 s Speed= 94807 Sent= 87 (processMessages: 87, processData: 0) Received= 87 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4177.67 s Speed= 92527 Sent= 176 (processMessages: 176, processData: 0) Received= 176 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4177.77 s Speed= 93514 Sent= 151 (processMessages: 151, processData: 0) Received= 151 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4177.87 s Speed= 94102 Sent= 81 (processMessages: 81, processData: 0) Received= 81 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4177.97 s Speed= 95072 Sent= 104 (processMessages: 104, processData: 0) Received= 104 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4178.07 s Speed= 90934 Sent= 99 (processMessages: 99, processData: 0) Received= 99 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4178.17 s Speed= 92640 Sent= 117 (processMessages: 117, processData: 0) Received= 117 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4178.27 s Speed= 93260 Sent= 84 (processMessages: 84, processData: 0) Received= 84 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4178.37 s Speed= 94774 Sent= 134 (processMessages: 134, processData: 0) Received= 134 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4178.47 s Speed= 94714 Sent= 84 (processMessages: 84, processData: 0) Received= 84 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4178.57 s Speed= 94921 Sent= 55 (processMessages: 55, processData: 0) Received= 55 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4178.67 s Speed= 94461 Sent= 48 (processMessages: 48, processData: 0) Received= 48 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4178.77 s Speed= 93824 Sent= 58 (processMessages: 58, processData: 0) Received= 58 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4178.87 s Speed= 90685 Sent= 131 (processMessages: 131, processData: 0) Received= 131 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4178.97 s Speed= 92930 Sent= 65 (processMessages: 65, processData: 0) Received= 65 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4179.07 s Speed= 93235 Sent= 38 (processMessages: 38, processData: 0) Received= 38 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4179.17 s Speed= 92487 Sent= 56 (processMessages: 56, processData: 0) Received= 56 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4179.27 s Speed= 92559 Sent= 61 (processMessages: 61, processData: 0) Received= 61 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4179.37 s Speed= 91398 Sent= 47 (processMessages: 47, processData: 0) Received= 47 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4179.47 s Speed= 94528 Sent= 72 (processMessages: 72, processData: 0) Received= 72 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4179.57 s Speed= 93548 Sent= 112 (processMessages: 112, processData: 0) Received= 112 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4179.67 s Speed= 94701 Sent= 54 (processMessages: 54, processData: 0) Received= 54 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4179.77 s Speed= 94900 Sent= 50 (processMessages: 50, processData: 0) Received= 50 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4179.87 s Speed= 92868 Sent= 43 (processMessages: 43, processData: 0) Received= 43 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4179.97 s Speed= 92996 Sent= 170 (processMessages: 54, processData: 116) Received= 170 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4180.07 s Speed= 88456 Sent= 93 (processMessages: 77, processData: 16) Received= 93 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4180.17 s Speed= 88194 Sent= 874 (processMessages: 83, processData: 791) Received= 874 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4180.27 s Speed= 84966 Sent= 439 (processMessages: 79, processData: 360) Received= 439 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4180.37 s Speed= 83100 Sent= 406 (processMessages: 67, processData: 339) Received= 406 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4180.47 s Speed= 88243 Sent= 215 (processMessages: 54, processData: 161) Received= 215 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4180.57 s Speed= 87354 Sent= 550 (processMessages: 201, processData: 349) Received= 550 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4180.67 s Speed= 94519 Sent= 55 (processMessages: 55, processData: 0) Received= 55 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4180.77 s Speed= 90221 Sent= 79 (processMessages: 79, processData: 0) Received= 79 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4180.87 s Speed= 92418 Sent= 146 (processMessages: 146, processData: 0) Received= 146 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4180.97 s Speed= 94045 Sent= 68 (processMessages: 68, processData: 0) Received= 68 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4181.07 s Speed= 94432 Sent= 64 (processMessages: 64, processData: 0) Received= 64 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4181.17 s Speed= 90937 Sent= 68 (processMessages: 68, processData: 0) Received= 68 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4181.27 s Speed= 88159 Sent= 62 (processMessages: 62, processData: 0) Received= 62 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4181.37 s Speed= 94526 Sent= 84 (processMessages: 84, processData: 0) Received= 84 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4181.47 s Speed= 93362 Sent= 73 (processMessages: 73, processData: 0) Received= 73 Balance= 0
<br>
Rank 255: RAY_SLAVE_MODE_EXTENSION Time= 4181.57 s Speed= 90062 Sent= 45 (processMessages: 45, processData: 0) Received= 45 Balance= 0
<br>
<p><p><span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; De : devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] de la part de George Bosilca [bosilca_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Date d'envoi : 27 septembre 2011 16:44
</span><br>
<span class="quotelev1">&gt; &#192; : Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] RE :  Implementation of MPI_Iprobe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sebastien,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please try the attached patch. It is made against the trunk, so you might have to adapt it slightly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know of the outcome, so we can decide if it's worth pushing it in the next releases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&#233;bastien
<br>

<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9770/iprobe_starvation_fixed.patch">iprobe_starvation_fixed.patch</a>
</ul>
<!-- attachment="iprobe_starvation_fixed.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9771.php">Jeff Squyres: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="9769.php">George Bosilca: "Re: [OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="9769.php">George Bosilca: "Re: [OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9771.php">Jeff Squyres: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="9771.php">Jeff Squyres: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
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
