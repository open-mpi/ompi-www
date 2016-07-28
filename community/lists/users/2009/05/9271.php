<?
$subject_val = "Re: [OMPI users] *** An error occurred in MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 12:31:41 2009" -->
<!-- isoreceived="20090508163141" -->
<!-- sent="Fri, 08 May 2009 12:31:36 -0400" -->
<!-- isosent="20090508163136" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] *** An error occurred in MPI_Init" -->
<!-- id="4A045E68.8070404_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="43874.40225.qm_at_web31007.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] *** An error occurred in MPI_Init<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-08 12:31:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9272.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="9270.php">Kritiraj Sajadah: "[OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="9270.php">Kritiraj Sajadah: "[OMPI users] *** An error occurred in MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9272.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Reply:</strong> <a href="9272.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Kritiraj
<br>
<p>This looks like as many other errors reported on this list
<br>
that are caused by using the wrong MPI compiler wrappers
<br>
or the wrong mpirun/mpiexec.
<br>
Typically this is caused by a PATH environment variable that
<br>
is pointing to the wrong executables (mpicc, mpirun).
<br>
Most Linux distributions, compilers, etc, come with their
<br>
own MPI versions, and this can be very confusing.
<br>
<p>Try using full path names for mpicc and for mpirun.
<br>
That is bullet proof method to get exactly what you want.
<br>
In your case use /usr/local/bin (as you configured with 
<br>
--prefix=/usr/local).
<br>
(Actually, I prefer to configure with a more distinctive
<br>
name to the prefix, something like /usr/local/openmpi-1.3.2,
<br>
to avoid any confusion with other MPIs.)
<br>
<p>You can also try &quot;which mpicc&quot; and &quot;which mpirun&quot;,
<br>
or &quot;mpicc --showme&quot; and &quot;mpirun --help&quot; to get a bit more
<br>
information about what you are really using.
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Kritiraj Sajadah wrote:
<br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;           I have install and configured openmpi with BLCR on my laptop:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) configure and install blcr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/ --enable-debug=yes --enable-libcr-tracing=yes --enable-kernel-tracing=yes --enable-testsuite=yes --enable-all-static=yes --enable-static=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) configure and install openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/ --enable-picky --enable-debug --enable-mpi-profile --enable-mpi-cxx --enable-pretty-print-stacktrace --enable-binaries --enable-trace --enable-static=yes --enable-debug --with-devel-headers=1 --with-mpi-param-check=always --with-ft=cr --enable-ft-thread --with-blcr=/usr/local/ --with-blcr-libdir=/usr/local/lib --enable-mpi-threads=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) add the environment variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open the $HOME/.bashrc and added the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH=&quot;/usr/local/include:$PATH&quot;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=&quot;/usr/local/lib:$LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to checkpoint the following MPI application:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int node;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;node);
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Hello World from Node %d\n&quot;,node);
</span><br>
<span class="quotelev1">&gt;             
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running mpirun as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; raj-laptop&gt; mpirun -am ft-enable-cr helloworld.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The errors are as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_cr_init() failed failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [raj-laptop:9439] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [raj-laptop:09439] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it something to do with me running it on a single node; i.e my laptop? or is it something to do with configurations or libraries?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help will be very appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Raj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9272.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="9270.php">Kritiraj Sajadah: "[OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="9270.php">Kritiraj Sajadah: "[OMPI users] *** An error occurred in MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9272.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Reply:</strong> <a href="9272.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
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
