<?
$subject_val = "Re: [OMPI users] *** An error occurred in MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 09:06:28 2009" -->
<!-- isoreceived="20090511130628" -->
<!-- sent="Mon, 11 May 2009 09:06:25 -0400" -->
<!-- isosent="20090511130625" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] *** An error occurred in MPI_Init" -->
<!-- id="5182DA38-9CE3-4481-83B2-40A0F260EA71_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="567186.7882.qm_at_web31006.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-11 09:06:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9289.php">Anton Starikov: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9287.php">Jeff Squyres: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>In reply to:</strong> <a href="9273.php">Kritiraj Sajadah: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What versions of BLCR and Open MPI are you using?
<br>
<p>Have you tried to checkpoint/restart a single (non-MPI) application  
<br>
with BLCR? BLCR ships with some examples, and I would suggest trying  
<br>
to make sure those work before moving onto Open MPI.
<br>
<p>Typically this type of failure is the result of BLCRs cr_init()  
<br>
failing. Do you happen to see an error message like the following:
<br>
&nbsp;&nbsp;&nbsp;Error: crs:blcr: module_init: cr_init failed
<br>
<p>You could also try to see if something more subtle is happening by  
<br>
turning on verbosity with the following command line switch:
<br>
&nbsp;&nbsp;&nbsp;-mca crs_base_verbose 10
<br>
<p>Let me know how those go, and we can keep debugging from there.
<br>
<p>-- Josh
<br>
<p>On May 8, 2009, at 6:47 PM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks for your email. I have /usr/local/bin included in my  
</span><br>
<span class="quotelev1">&gt; $PATH. (Not /usr/local/include - it was just a copying mistake).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked where mpicc and mpirun are and i got the following path
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The BLCR  I am using was downloaded and installed seperately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Do you think i may be using the wrong version of BLCR?.
</span><br>
<span class="quotelev1">&gt;    There is a directory called blcr within the openmpi tarball  
</span><br>
<span class="quotelev1">&gt; (openmpi-1.3/opal/mca/crs/blcr). Should I use this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) DO you think it's better to install openmpi in /usr/local/openmpi  
</span><br>
<span class="quotelev1">&gt; and blcr in/usr/local/blcr?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) If so, how do i uninstall the one i have already?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kritiraj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Fri, 5/8/09, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Friday, May 8, 2009, 6:33 PM
</span><br>
<span class="quotelev2">&gt;&gt; PS - Kritiraj
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reading your message more carefully, I saw that you did
</span><br>
<span class="quotelev2">&gt;&gt; this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ****
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
<span class="quotelev2">&gt;&gt; ****
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, this is what you should have done:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ****
</span><br>
<span class="quotelev2">&gt;&gt; Open the $HOME/.bashrc and added the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATH=&quot;/usr/local/bin:$PATH&quot;
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=&quot;/usr/local/lib:$LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ****
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that /usr/local/bin, not /usr/local/include should be
</span><br>
<span class="quotelev2">&gt;&gt; pre-pended to your PATH!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Kritiraj
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This looks like as many other errors reported on this
</span><br>
<span class="quotelev2">&gt;&gt; list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that are caused by using the wrong MPI compiler
</span><br>
<span class="quotelev2">&gt;&gt; wrappers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or the wrong mpirun/mpiexec.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Typically this is caused by a PATH environment
</span><br>
<span class="quotelev2">&gt;&gt; variable that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is pointing to the wrong executables (mpicc, mpirun).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Most Linux distributions, compilers, etc, come with
</span><br>
<span class="quotelev2">&gt;&gt; their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; own MPI versions, and this can be very confusing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try using full path names for mpicc and for mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is bullet proof method to get exactly what you
</span><br>
<span class="quotelev2">&gt;&gt; want.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In your case use /usr/local/bin (as you configured
</span><br>
<span class="quotelev2">&gt;&gt; with --prefix=/usr/local).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Actually, I prefer to configure with a more
</span><br>
<span class="quotelev2">&gt;&gt; distinctive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name to the prefix, something like
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.3.2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to avoid any confusion with other MPIs.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can also try &quot;which mpicc&quot; and &quot;which mpirun&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or &quot;mpicc --showme&quot; and &quot;mpirun --help&quot; to get a bit
</span><br>
<span class="quotelev2">&gt;&gt; more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information about what you are really using.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia
</span><br>
<span class="quotelev2">&gt;&gt; University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kritiraj Sajadah wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            I
</span><br>
<span class="quotelev2">&gt;&gt; have install and configured openmpi with BLCR on my laptop:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) configure and install blcr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug=yes --enable-libcr-tracing=yes
</span><br>
<span class="quotelev2">&gt;&gt; --enable-kernel-tracing=yes --enable-testsuite=yes
</span><br>
<span class="quotelev2">&gt;&gt; --enable-all-static=yes --enable-static=yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) configure and install openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=/usr/local/ --enable-picky
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug --enable-mpi-profile --enable-mpi-cxx
</span><br>
<span class="quotelev2">&gt;&gt; --enable-pretty-print-stacktrace --enable-binaries
</span><br>
<span class="quotelev2">&gt;&gt; --enable-trace --enable-static=yes --enable-debug
</span><br>
<span class="quotelev2">&gt;&gt; --with-devel-headers=1 --with-mpi-param-check=always
</span><br>
<span class="quotelev2">&gt;&gt; --with-ft=cr --enable-ft-thread --with-blcr=/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr-libdir=/usr/local/lib --enable-mpi-threads=yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make all install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3) add the environment variables.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open the $HOME/.bashrc and added the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH=&quot;/usr/local/include:$PATH&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=&quot;/usr/local/lib:$LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now the problem:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to checkpoint the following MPI
</span><br>
<span class="quotelev2">&gt;&gt; application:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int node;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;node);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;Hello World from Node
</span><br>
<span class="quotelev2">&gt;&gt; %d\n&quot;,node);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am running mpirun as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; raj-laptop&gt; mpirun -am ft-enable-cr
</span><br>
<span class="quotelev2">&gt;&gt; helloworld.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The errors are as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like opal_init failed for some reason;
</span><br>
<span class="quotelev2">&gt;&gt; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that
</span><br>
<span class="quotelev2">&gt;&gt; a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during opal_init; some of which are due to
</span><br>
<span class="quotelev2">&gt;&gt; configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment problems.  This failure appears
</span><br>
<span class="quotelev2">&gt;&gt; to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here's some additional information (which may only
</span><br>
<span class="quotelev2">&gt;&gt; be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    opal_cr_init() failed failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --&gt; Returned value -1 instead
</span><br>
<span class="quotelev2">&gt;&gt; of OPAL_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now
</span><br>
<span class="quotelev2">&gt;&gt; abort)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [raj-laptop:9439] Abort before MPI_INIT completed
</span><br>
<span class="quotelev2">&gt;&gt; successfully; not able to guarantee that all other processes
</span><br>
<span class="quotelev2">&gt;&gt; were killed!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [raj-laptop:09439] [[INVALID],INVALID]
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line
</span><br>
<span class="quotelev2">&gt;&gt; 77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason;
</span><br>
<span class="quotelev2">&gt;&gt; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that
</span><br>
<span class="quotelev2">&gt;&gt; a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to
</span><br>
<span class="quotelev2">&gt;&gt; configuration or environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems.  This failure appears to be an
</span><br>
<span class="quotelev2">&gt;&gt; internal failure; here's some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; additional information (which may only be relevant
</span><br>
<span class="quotelev2">&gt;&gt; to an Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --&gt; Returned &quot;Error&quot; (-1)
</span><br>
<span class="quotelev2">&gt;&gt; instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it something to do with me running it on a
</span><br>
<span class="quotelev2">&gt;&gt; single node; i.e my laptop? or is it something to do with
</span><br>
<span class="quotelev2">&gt;&gt; configurations or libraries?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any help will be very appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Raj
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="9289.php">Anton Starikov: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9287.php">Jeff Squyres: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>In reply to:</strong> <a href="9273.php">Kritiraj Sajadah: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
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
