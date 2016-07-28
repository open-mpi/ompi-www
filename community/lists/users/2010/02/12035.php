<?
$subject_val = "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 02:38:36 2010" -->
<!-- isoreceived="20100208073836" -->
<!-- sent="Mon, 08 Feb 2010 08:38:29 +0100" -->
<!-- isosent="20100208073829" -->
<!-- name="Rafael Arco Arredondo" -->
<!-- email="rafaarco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale" -->
<!-- id="1265614709.30467.3.camel_at_boabdilmec" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.1287.1264496258.28087.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale<br>
<strong>From:</strong> Rafael Arco Arredondo (<em>rafaarco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 02:38:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12036.php">Jed Brown: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<li><strong>Previous message:</strong> <a href="12034.php">Andreea Costea: "[OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11863.php">Rafael Arco Arredondo: "[OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12055.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12055.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>It does work with version 1.4. This is the hello world that hangs with
<br>
1.4.1:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int node, size;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;node);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;printf(&quot;Hello World from Node %d of %d.\n&quot;, node, size);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>El mar, 26-01-2010 a las 03:57 -0500, &#195;&#133;ke Sandgren escribi&#195;&#179;:
<br>
<span class="quotelev1">&gt; 1 - Do you have problems with openmpi 1.4 too? (I don't, haven't built
</span><br>
<span class="quotelev1">&gt; 1.4.1 yet)
</span><br>
<span class="quotelev1">&gt; 2 - There is a bug in the pathscale compiler with -fPIC and -g that
</span><br>
<span class="quotelev1">&gt; generates incorrect dwarf2 data so debuggers get really confused and
</span><br>
<span class="quotelev1">&gt; will have BIG problems debugging the code. I'm chasing them to get a
</span><br>
<span class="quotelev1">&gt; fix...
</span><br>
<span class="quotelev1">&gt; 3 - Do you have an example code that have problems? 
</span><br>
<p><pre>
-- 
Rafael Arco Arredondo
Centro de Servicios de Inform&#195;&#161;tica y Redes de Comunicaciones
Universidad de Granada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12036.php">Jed Brown: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<li><strong>Previous message:</strong> <a href="12034.php">Andreea Costea: "[OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11863.php">Rafael Arco Arredondo: "[OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12055.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12055.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
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
