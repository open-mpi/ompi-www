<?
$subject_val = "Re: [OMPI users] *** An error occurred in MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 13:33:31 2009" -->
<!-- isoreceived="20090508173331" -->
<!-- sent="Fri, 08 May 2009 13:33:26 -0400" -->
<!-- isosent="20090508173326" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] *** An error occurred in MPI_Init" -->
<!-- id="4A046CE6.7000100_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A045E68.8070404_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2009-05-08 13:33:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9273.php">Kritiraj Sajadah: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="9271.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="9271.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9273.php">Kritiraj Sajadah: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
PS - Kritiraj
<br>
<p>Reading your message more carefully, I saw that you did this:
<br>
<p>****
<br>
Open the $HOME/.bashrc and added the following:
<br>
<p>PATH=&quot;/usr/local/include:$PATH&quot;
<br>
LD_LIBRARY_PATH=&quot;/usr/local/lib:$LD_LIBRARY_PATH&quot;
<br>
<p>****
<br>
<p>However, this is what you should have done:
<br>
<p>****
<br>
Open the $HOME/.bashrc and added the following:
<br>
<p>PATH=&quot;/usr/local/bin:$PATH&quot;
<br>
LD_LIBRARY_PATH=&quot;/usr/local/lib:$LD_LIBRARY_PATH&quot;
<br>
<p>****
<br>
<p>Note that /usr/local/bin, not /usr/local/include should be
<br>
pre-pended to your PATH!
<br>
<p><p>Gus Correa
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
<p><p>Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Kritiraj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks like as many other errors reported on this list
</span><br>
<span class="quotelev1">&gt; that are caused by using the wrong MPI compiler wrappers
</span><br>
<span class="quotelev1">&gt; or the wrong mpirun/mpiexec.
</span><br>
<span class="quotelev1">&gt; Typically this is caused by a PATH environment variable that
</span><br>
<span class="quotelev1">&gt; is pointing to the wrong executables (mpicc, mpirun).
</span><br>
<span class="quotelev1">&gt; Most Linux distributions, compilers, etc, come with their
</span><br>
<span class="quotelev1">&gt; own MPI versions, and this can be very confusing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try using full path names for mpicc and for mpirun.
</span><br>
<span class="quotelev1">&gt; That is bullet proof method to get exactly what you want.
</span><br>
<span class="quotelev1">&gt; In your case use /usr/local/bin (as you configured with 
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/local).
</span><br>
<span class="quotelev1">&gt; (Actually, I prefer to configure with a more distinctive
</span><br>
<span class="quotelev1">&gt; name to the prefix, something like /usr/local/openmpi-1.3.2,
</span><br>
<span class="quotelev1">&gt; to avoid any confusion with other MPIs.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can also try &quot;which mpicc&quot; and &quot;which mpirun&quot;,
</span><br>
<span class="quotelev1">&gt; or &quot;mpicc --showme&quot; and &quot;mpirun --help&quot; to get a bit more
</span><br>
<span class="quotelev1">&gt; information about what you are really using.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kritiraj Sajadah wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt;           I have install and configured openmpi with BLCR on my laptop:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) configure and install blcr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local/ --enable-debug=yes 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-libcr-tracing=yes --enable-kernel-tracing=yes 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-testsuite=yes --enable-all-static=yes --enable-static=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make
</span><br>
<span class="quotelev2">&gt;&gt; make install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) configure and install openmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local/ --enable-picky --enable-debug 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-profile --enable-mpi-cxx --enable-pretty-print-stacktrace 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-binaries --enable-trace --enable-static=yes --enable-debug 
</span><br>
<span class="quotelev2">&gt;&gt; --with-devel-headers=1 --with-mpi-param-check=always --with-ft=cr 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-ft-thread --with-blcr=/usr/local/ 
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr-libdir=/usr/local/lib --enable-mpi-threads=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make all install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) add the environment variables.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open the $HOME/.bashrc and added the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATH=&quot;/usr/local/include:$PATH&quot;
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=&quot;/usr/local/lib:$LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now the problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to checkpoint the following MPI application:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int node;
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;node);
</span><br>
<span class="quotelev2">&gt;&gt;         printf(&quot;Hello World from Node %d\n&quot;,node);
</span><br>
<span class="quotelev2">&gt;&gt;                MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running mpirun as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; raj-laptop&gt; mpirun -am ft-enable-cr helloworld.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The errors are as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   opal_cr_init() failed failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [raj-laptop:9439] Abort before MPI_INIT completed successfully; not 
</span><br>
<span class="quotelev2">&gt;&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; [raj-laptop:09439] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init.c at line 77
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it something to do with me running it on a single node; i.e my 
</span><br>
<span class="quotelev2">&gt;&gt; laptop? or is it something to do with configurations or libraries?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help will be very appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Raj
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="9273.php">Kritiraj Sajadah: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="9271.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="9271.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9273.php">Kritiraj Sajadah: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
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
