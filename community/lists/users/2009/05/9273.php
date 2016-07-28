<?
$subject_val = "Re: [OMPI users] *** An error occurred in MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 18:47:44 2009" -->
<!-- isoreceived="20090508224744" -->
<!-- sent="Fri, 8 May 2009 15:47:38 -0700 (PDT)" -->
<!-- isosent="20090508224738" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="Re: [OMPI users] *** An error occurred in MPI_Init" -->
<!-- id="567186.7882.qm_at_web31006.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] *** An error occurred in MPI_Init" -->
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
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-08 18:47:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9274.php">Allan Menezes: "[OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
<li><strong>Previous message:</strong> <a href="9272.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Maybe in reply to:</strong> <a href="9270.php">Kritiraj Sajadah: "[OMPI users] *** An error occurred in MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9288.php">Josh Hursey: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Reply:</strong> <a href="9288.php">Josh Hursey: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for your email. I have /usr/local/bin included in my $PATH. (Not /usr/local/include - it was just a copying mistake).
<br>
<p>I checked where mpicc and mpirun are and i got the following path 
<br>
<p>/usr/local/bin/mpirun
<br>
/usr/local/bin/mpicc
<br>
<p>The BLCR  I am using was downloaded and installed seperately.
<br>
<p>1) Do you think i may be using the wrong version of BLCR?.  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;There is a directory called blcr within the openmpi tarball (openmpi-1.3/opal/mca/crs/blcr). Should I use this?
<br>
<p>2) DO you think it's better to install openmpi in /usr/local/openmpi and blcr in/usr/local/blcr?
<br>
<p>3) If so, how do i uninstall the one i have already?
<br>
<p>Thank you
<br>
<p>Kritiraj 
<br>
<p><p><p>--- On Fri, 5/8/09, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Friday, May 8, 2009, 6:33 PM
</span><br>
<span class="quotelev1">&gt; PS - Kritiraj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reading your message more carefully, I saw that you did
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ****
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
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, this is what you should have done:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt; Open the $HOME/.bashrc and added the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH=&quot;/usr/local/bin:$PATH&quot;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=&quot;/usr/local/lib:$LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that /usr/local/bin, not /usr/local/include should be
</span><br>
<span class="quotelev1">&gt; pre-pended to your PATH!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Kritiraj
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This looks like as many other errors reported on this
</span><br>
<span class="quotelev1">&gt; list
</span><br>
<span class="quotelev2">&gt; &gt; that are caused by using the wrong MPI compiler
</span><br>
<span class="quotelev1">&gt; wrappers
</span><br>
<span class="quotelev2">&gt; &gt; or the wrong mpirun/mpiexec.
</span><br>
<span class="quotelev2">&gt; &gt; Typically this is caused by a PATH environment
</span><br>
<span class="quotelev1">&gt; variable that
</span><br>
<span class="quotelev2">&gt; &gt; is pointing to the wrong executables (mpicc, mpirun).
</span><br>
<span class="quotelev2">&gt; &gt; Most Linux distributions, compilers, etc, come with
</span><br>
<span class="quotelev1">&gt; their
</span><br>
<span class="quotelev2">&gt; &gt; own MPI versions, and this can be very confusing.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Try using full path names for mpicc and for mpirun.
</span><br>
<span class="quotelev2">&gt; &gt; That is bullet proof method to get exactly what you
</span><br>
<span class="quotelev1">&gt; want.
</span><br>
<span class="quotelev2">&gt; &gt; In your case use /usr/local/bin (as you configured
</span><br>
<span class="quotelev1">&gt; with --prefix=/usr/local).
</span><br>
<span class="quotelev2">&gt; &gt; (Actually, I prefer to configure with a more
</span><br>
<span class="quotelev1">&gt; distinctive
</span><br>
<span class="quotelev2">&gt; &gt; name to the prefix, something like
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3.2,
</span><br>
<span class="quotelev2">&gt; &gt; to avoid any confusion with other MPIs.)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You can also try &quot;which mpicc&quot; and &quot;which mpirun&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; or &quot;mpicc --showme&quot; and &quot;mpirun --help&quot; to get a bit
</span><br>
<span class="quotelev1">&gt; more
</span><br>
<span class="quotelev2">&gt; &gt; information about what you are really using.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I hope this helps.
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt; &gt; Lamont-Doherty Earth Observatory - Columbia
</span><br>
<span class="quotelev1">&gt; University
</span><br>
<span class="quotelev2">&gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kritiraj Sajadah wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear All,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#160; &#160; &#160; &#160; &#160;&#160;&#160;I
</span><br>
<span class="quotelev1">&gt; have install and configured openmpi with BLCR on my laptop:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1) configure and install blcr
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./configure --prefix=/usr/local/
</span><br>
<span class="quotelev1">&gt; --enable-debug=yes --enable-libcr-tracing=yes
</span><br>
<span class="quotelev1">&gt; --enable-kernel-tracing=yes --enable-testsuite=yes
</span><br>
<span class="quotelev1">&gt; --enable-all-static=yes --enable-static=yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make install
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2) configure and install openmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./configure --prefix=/usr/local/ --enable-picky
</span><br>
<span class="quotelev1">&gt; --enable-debug --enable-mpi-profile --enable-mpi-cxx
</span><br>
<span class="quotelev1">&gt; --enable-pretty-print-stacktrace --enable-binaries
</span><br>
<span class="quotelev1">&gt; --enable-trace --enable-static=yes --enable-debug
</span><br>
<span class="quotelev1">&gt; --with-devel-headers=1 --with-mpi-param-check=always
</span><br>
<span class="quotelev1">&gt; --with-ft=cr --enable-ft-thread --with-blcr=/usr/local/
</span><br>
<span class="quotelev1">&gt; --with-blcr-libdir=/usr/local/lib --enable-mpi-threads=yes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make all install
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3) add the environment variables.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open the $HOME/.bashrc and added the following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PATH=&quot;/usr/local/include:$PATH&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; LD_LIBRARY_PATH=&quot;/usr/local/lib:$LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Now the problem:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am trying to checkpoint the following MPI
</span><br>
<span class="quotelev1">&gt; application:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#160; &#160; int node;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#160; &#160; MPI_Comm_rank(MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; &amp;node);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;printf(&quot;Hello World from Node
</span><br>
<span class="quotelev1">&gt; %d\n&quot;,node);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am running mpirun as follows:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; raj-laptop&gt; mpirun -am ft-enable-cr
</span><br>
<span class="quotelev1">&gt; helloworld.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The errors are as follows:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like opal_init failed for some reason;
</span><br>
<span class="quotelev1">&gt; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort.&#160; There are many reasons that
</span><br>
<span class="quotelev1">&gt; a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during opal_init; some of which are due to
</span><br>
<span class="quotelev1">&gt; configuration or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment problems.&#160; This failure appears
</span><br>
<span class="quotelev1">&gt; to be an internal failure;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; here's some additional information (which may only
</span><br>
<span class="quotelev1">&gt; be relevant to an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#160;&#160;&#160;opal_cr_init() failed failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#160;&#160;&#160;--&gt; Returned value -1 instead
</span><br>
<span class="quotelev1">&gt; of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now
</span><br>
<span class="quotelev1">&gt; abort)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [raj-laptop:9439] Abort before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt; successfully; not able to guarantee that all other processes
</span><br>
<span class="quotelev1">&gt; were killed!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [raj-laptop:09439] [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line
</span><br>
<span class="quotelev1">&gt; 77
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like MPI_INIT failed for some reason;
</span><br>
<span class="quotelev1">&gt; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort.&#160; There are many reasons that
</span><br>
<span class="quotelev1">&gt; a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during MPI_INIT; some of which are due to
</span><br>
<span class="quotelev1">&gt; configuration or environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problems.&#160; This failure appears to be an
</span><br>
<span class="quotelev1">&gt; internal failure; here's some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; additional information (which may only be relevant
</span><br>
<span class="quotelev1">&gt; to an Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#160;&#160;&#160;ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#160;&#160;&#160;--&gt; Returned &quot;Error&quot; (-1)
</span><br>
<span class="quotelev1">&gt; instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is it something to do with me running it on a
</span><br>
<span class="quotelev1">&gt; single node; i.e my laptop? or is it something to do with
</span><br>
<span class="quotelev1">&gt; configurations or libraries?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any help will be very appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Raj
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9274.php">Allan Menezes: "[OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
<li><strong>Previous message:</strong> <a href="9272.php">Gus Correa: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Maybe in reply to:</strong> <a href="9270.php">Kritiraj Sajadah: "[OMPI users] *** An error occurred in MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9288.php">Josh Hursey: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Reply:</strong> <a href="9288.php">Josh Hursey: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
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
