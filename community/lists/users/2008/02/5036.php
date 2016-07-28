<?
$subject_val = "Re: [OMPI users] funnel-threaded application blocks from time to time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 12:38:39 2008" -->
<!-- isoreceived="20080218173839" -->
<!-- sent="Mon, 18 Feb 2008 12:38:26 -0500" -->
<!-- isosent="20080218173826" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] funnel-threaded application blocks from time to time" -->
<!-- id="8480FC56-CD36-467E-A24B-F4C3A7A1C77B_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47B9A4B3.3060606_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] funnel-threaded application blocks from time to time<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-18 12:38:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5037.php">Joao Vicente Lima: "[OMPI users] MPI_Comm_spawn errors"</a>
<li><strong>Previous message:</strong> <a href="5035.php">Alexandru-Adrian TANTAR: "[OMPI users] funnel-threaded application blocks from time to time"</a>
<li><strong>In reply to:</strong> <a href="5035.php">Alexandru-Adrian TANTAR: "[OMPI users] funnel-threaded application blocks from time to time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alex,
<br>
<p>We are currently on the process of improving thread safety in Open  
<br>
MPI. First we need to know which release you have been using to get  
<br>
into the problem.
<br>
<p>the --enable-progress-threads  enables an internal feature of Open MPI  
<br>
to progress
<br>
non blocking communications during computations on devices that do not  
<br>
support dma transfer (mostly tcp and sm). It has known issues and  
<br>
should not work correctly before the 1.3 release (though hopefully we  
<br>
plan to fix it in trunk during the next month or so).
<br>
<p>The good news are that you do not need this flag to play with funneled  
<br>
threads. Just use the -enable-mpi-threads should be enough and should  
<br>
(as far as our tests go) work fine.
<br>
<p>Let us know of any problem you encounter, as we are working on it we  
<br>
are really greedy of bug reports.
<br>
<p>Thanks,
<br>
Aurelien
<br>
<p><p><p>Le 18 f&#233;vr. 08 &#224; 10:30, Alexandru-Adrian TANTAR a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem regarding funnel-threaded OpenMPI-based applications.
</span><br>
<span class="quotelev1">&gt; The application I try to launch (nothing complicated) blocks during  
</span><br>
<span class="quotelev1">&gt; the execution from time to time. And I have to say this is quite a  
</span><br>
<span class="quotelev1">&gt; fun-breaker :D.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try to put this in a very simple way: I have the following  
</span><br>
<span class="quotelev1">&gt; code which does nothing more than a &quot;request&quot; for a funneled  
</span><br>
<span class="quotelev1">&gt; &quot;environment&quot; which, once initialized, is right away shut down:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cassert&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         int provided = MPI_THREAD_FUNNELED;
</span><br>
<span class="quotelev1">&gt;         MPI_Init_thread ( &amp;argc, &amp;argv, MPI_THREAD_FUNNELED,  
</span><br>
<span class="quotelev1">&gt; &amp;provided );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         assert (provided == MPI_THREAD_FUNNELED);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the compilation, I did not specify anything special: mpicxx  
</span><br>
<span class="quotelev1">&gt; example.cpp -o example
</span><br>
<span class="quotelev1">&gt; When launching, in order to test, I used a loop like the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for ((i=0;i&lt;100;i++)); do echo $i &quot;&lt;--------- &quot;; mpiexec -n 2 ./ 
</span><br>
<span class="quotelev1">&gt; example; done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, the thing is that this usually does not go further than at most  
</span><br>
<span class="quotelev1">&gt; the 30th iteration. And, of course, I get this also by launching  
</span><br>
<span class="quotelev1">&gt; manually, just that it takes more time to get there ;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would extremely appreciate if someone can give a hint on this. Is  
</span><br>
<span class="quotelev1">&gt; there anything special that I should look for, is there a  
</span><br>
<span class="quotelev1">&gt; compilation switch I should turn on, etc.? I get the same behavior  
</span><br>
<span class="quotelev1">&gt; on bi-cores, 4x-cores, different environments... I don't know if  
</span><br>
<span class="quotelev1">&gt; this helps but the line I used for configuring the OpenMPI package  
</span><br>
<span class="quotelev1">&gt; is the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/globus/openmpi/ --enable-mpi-cxx
</span><br>
<span class="quotelev1">&gt; --enable-shared --enable-smp-locks  --enable-cxx-exceptions
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads --enable-progress-threads --enable-io-romio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your time and looking forward to your answer(s)!
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p>Dr. Aur&#233;lien Bouteiller
<br>
Sr. Research Associate - Innovative Computing Laboratory
<br>
Suite 350, 1122 Volunteer Boulevard
<br>
Knoxville, TN 37996
<br>
865 974 6321
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5037.php">Joao Vicente Lima: "[OMPI users] MPI_Comm_spawn errors"</a>
<li><strong>Previous message:</strong> <a href="5035.php">Alexandru-Adrian TANTAR: "[OMPI users] funnel-threaded application blocks from time to time"</a>
<li><strong>In reply to:</strong> <a href="5035.php">Alexandru-Adrian TANTAR: "[OMPI users] funnel-threaded application blocks from time to time"</a>
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
