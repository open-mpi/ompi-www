<?
$subject_val = "[OMPI users] *** An error occurred in MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 11:45:14 2009" -->
<!-- isoreceived="20090508154514" -->
<!-- sent="Fri, 8 May 2009 08:45:08 -0700 (PDT)" -->
<!-- isosent="20090508154508" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="[OMPI users] *** An error occurred in MPI_Init" -->
<!-- id="43874.40225.qm_at_web31007.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] *** An error occurred in MPI_Init<br>
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-08 11:45:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9271.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="9269.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9271.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Reply:</strong> <a href="9271.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Maybe reply:</strong> <a href="9273.php">Kritiraj Sajadah: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have install and configured openmpi with BLCR on my laptop:
<br>
<p>1) configure and install blcr
<br>
<p>./configure --prefix=/usr/local/ --enable-debug=yes --enable-libcr-tracing=yes --enable-kernel-tracing=yes --enable-testsuite=yes --enable-all-static=yes --enable-static=yes
<br>
<p>make
<br>
make install
<br>
<p>2) configure and install openmpi
<br>
<p>./configure --prefix=/usr/local/ --enable-picky --enable-debug --enable-mpi-profile --enable-mpi-cxx --enable-pretty-print-stacktrace --enable-binaries --enable-trace --enable-static=yes --enable-debug --with-devel-headers=1 --with-mpi-param-check=always --with-ft=cr --enable-ft-thread --with-blcr=/usr/local/ --with-blcr-libdir=/usr/local/lib --enable-mpi-threads=yes
<br>
<p>make all install
<br>
<p>3) add the environment variables.
<br>
<p><p>Open the $HOME/.bashrc and added the following:
<br>
<p>PATH=&quot;/usr/local/include:$PATH&quot;
<br>
LD_LIBRARY_PATH=&quot;/usr/local/lib:$LD_LIBRARY_PATH&quot;
<br>
<p>Now the problem:
<br>
<p>I am trying to checkpoint the following MPI application:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int node;
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;node);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Hello World from Node %d\n&quot;,node);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>I am running mpirun as follows:
<br>
<p>raj-laptop&gt; mpirun -am ft-enable-cr helloworld.
<br>
<p>The errors are as follows:
<br>
<p>--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_cr_init() failed failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[raj-laptop:9439] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[raj-laptop:09439] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 77
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
<p>Is it something to do with me running it on a single node; i.e my laptop? or is it something to do with configurations or libraries?
<br>
<p><p>Any help will be very appreciated.
<br>
<p>Regards,
<br>
<p>Raj
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9271.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="9269.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9271.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Reply:</strong> <a href="9271.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Maybe reply:</strong> <a href="9273.php">Kritiraj Sajadah: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
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
