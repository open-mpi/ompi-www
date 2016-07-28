<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul  8 20:22:14 2007" -->
<!-- isoreceived="20070709002214" -->
<!-- sent="Mon, 9 Jul 2007 10:22:04 +1000" -->
<!-- isosent="20070709002204" -->
<!-- name="Neville Clark" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] Can I run MPI and non MPI programs together" -->
<!-- id="001301c7c1bf$2e196900$0380a8c0_at_EMU" -->
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
<strong>From:</strong> Neville Clark (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-08 20:22:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3597.php">Tim Prins: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>Previous message:</strong> <a href="3595.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3597.php">Tim Prins: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>Reply:</strong> <a href="3597.php">Tim Prins: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have openmpi installed and running, but have a need to run non mpi
<br>
programs (3rd party software for which I don't have the source) together
<br>
with mpi programs.
<br>
<p>Have managed to simplify the problem down to the following
<br>
<p>JobA
<br>
int main(.)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Starting JobA\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Init();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;JobA Init done\n&quot;);
<br>
}
<br>
<p>JobB
<br>
Int main(.)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Starting JobB\n&quot;);
<br>
}
<br>
<p>And running with 
<br>
mpirun -mca btl tcp,self,sm -np 1 -host lyre JobA  : -np 1 -host lyre JobB
<br>
<p>The output is the two messages &quot;Starting .&quot; message and then hangs.
<br>
<p>It would appear that the MPI::Init() is waiting for all Ranks to call
<br>
MPI::Init() before continuing.
<br>
<p>Please note the above works as expected if we run either two JobAs or two
<br>
JobBs. Only have a problem if there is a mixture of JobAs and JobBs.
<br>
<p>Is there a way around this problem?
<br>
<p>Thanks in advance Neville
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3597.php">Tim Prins: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>Previous message:</strong> <a href="3595.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3597.php">Tim Prins: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
<li><strong>Reply:</strong> <a href="3597.php">Tim Prins: "Re: [OMPI users] Can I run MPI and non MPI programs together"</a>
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
