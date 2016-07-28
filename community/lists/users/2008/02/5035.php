<?
$subject_val = "[OMPI users] funnel-threaded application blocks from time to time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 10:31:06 2008" -->
<!-- isoreceived="20080218153106" -->
<!-- sent="Mon, 18 Feb 2008 16:30:59 +0100" -->
<!-- isosent="20080218153059" -->
<!-- name="Alexandru-Adrian TANTAR" -->
<!-- email="Alexandru-Adrian.Tantar_at_[hidden]" -->
<!-- subject="[OMPI users] funnel-threaded application blocks from time to time" -->
<!-- id="47B9A4B3.3060606_at_inria.fr" -->
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
<strong>Subject:</strong> [OMPI users] funnel-threaded application blocks from time to time<br>
<strong>From:</strong> Alexandru-Adrian TANTAR (<em>Alexandru-Adrian.Tantar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-18 10:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5036.php">Aurélien Bouteiller: "Re: [OMPI users] funnel-threaded application blocks from time to time"</a>
<li><strong>Previous message:</strong> <a href="5034.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5036.php">Aurélien Bouteiller: "Re: [OMPI users] funnel-threaded application blocks from time to time"</a>
<li><strong>Reply:</strong> <a href="5036.php">Aurélien Bouteiller: "Re: [OMPI users] funnel-threaded application blocks from time to time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I have a problem regarding funnel-threaded OpenMPI-based applications.
<br>
The application I try to launch (nothing complicated) blocks during the 
<br>
execution from time to time. And I have to say this is quite a 
<br>
fun-breaker :D.
<br>
<p>I will try to put this in a very simple way: I have the following code 
<br>
which does nothing more than a &quot;request&quot; for a funneled &quot;environment&quot; 
<br>
which, once initialized, is right away shut down:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
#include &lt;cassert&gt;
<br>
<p>using namespace std;
<br>
<p>int main(int argc, char** argv) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int provided = MPI_THREAD_FUNNELED;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init_thread ( &amp;argc, &amp;argv, MPI_THREAD_FUNNELED, &amp;provided );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert (provided == MPI_THREAD_FUNNELED);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p>For the compilation, I did not specify anything special: mpicxx 
<br>
example.cpp -o example
<br>
When launching, in order to test, I used a loop like the following:
<br>
<p>for ((i=0;i&lt;100;i++)); do echo $i &quot;&lt;--------- &quot;; mpiexec -n 2 ./example; done
<br>
<p><p>Now, the thing is that this usually does not go further than at most the 
<br>
30th iteration. And, of course, I get this also by launching manually, 
<br>
just that it takes more time to get there ;).
<br>
<p>I would extremely appreciate if someone can give a hint on this. Is 
<br>
there anything special that I should look for, is there a compilation 
<br>
switch I should turn on, etc.? I get the same behavior on bi-cores, 
<br>
4x-cores, different environments... I don't know if this helps but the 
<br>
line I used for configuring the OpenMPI package is the following:
<br>
<p>./configure --prefix=/opt/globus/openmpi/ --enable-mpi-cxx 
<br>
--enable-shared --enable-smp-locks  --enable-cxx-exceptions 
<br>
--enable-mpi-threads --enable-progress-threads --enable-io-romio
<br>
<p><p>Thanks in advance for your time and looking forward to your answer(s)!
<br>
Alex
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5035/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5036.php">Aurélien Bouteiller: "Re: [OMPI users] funnel-threaded application blocks from time to time"</a>
<li><strong>Previous message:</strong> <a href="5034.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5036.php">Aurélien Bouteiller: "Re: [OMPI users] funnel-threaded application blocks from time to time"</a>
<li><strong>Reply:</strong> <a href="5036.php">Aurélien Bouteiller: "Re: [OMPI users] funnel-threaded application blocks from time to time"</a>
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
