<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 30 14:43:51 2007" -->
<!-- isoreceived="20070330184351" -->
<!-- sent="Fri, 30 Mar 2007 14:43:45 -0400" -->
<!-- isosent="20070330184345" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Measuring MPI message size used by application" -->
<!-- id="C232D2A1.13E7%heywood_at_cshl.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EE7AA5D8-0500-4D46-89D4-EB26D0A40FED_at_cs.utk.edu" -->
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
<strong>From:</strong> Heywood, Todd (<em>heywood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-30 14:43:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2958.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2956.php">Prakash Velayutham: "[OMPI users] Spawning to processors outside of the process manager assigned	nodes"</a>
<li><strong>In reply to:</strong> <a href="2948.php">George Bosilca: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2958.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Reply:</strong> <a href="2958.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>It turns out I didn't have libunwind either, but didn't notice since mpiP
<br>
compiled/linked without it (OK, so I should have checked the config log).
<br>
However, once I got it it wouldn't compile on my RHEL system.
<br>
<p>So, following this thread:
<br>
<p><a href="http://www.mail-archive.com/libunwind-devel&#64;nongnu.org/msg00067.html">http://www.mail-archive.com/libunwind-devel&#64;nongnu.org/msg00067.html</a>
<br>
<p>I had to download an alpha version of libunwind:
<br>
<p><a href="http://download.savannah.nongnu.org/releases/libunwind/libunwind-snap-070224">http://download.savannah.nongnu.org/releases/libunwind/libunwind-snap-070224</a>
<br>
.tar.gz
<br>
<p>... And build it with:
<br>
<p>CFLAGS=-fPIC ./configure
<br>
make CFLAGS=-fPIC LDFLAGS=-fPIC shared
<br>
make CFLAGS=-fPIC LDFLAGS=-fPIC install
<br>
<p>After that, everything went as you described. The &quot;strange readings&quot; in the
<br>
output did list the Parent_Funct's though:
<br>
<p>---------------------------------------------------------------------------
<br>
@--- Callsites: 5 ---------------------------------------------------------
<br>
---------------------------------------------------------------------------
<br>
&nbsp;ID Lev File/Address        Line Parent_Funct             MPI_Call
<br>
&nbsp;&nbsp;1   0 0x000000000041341d       RecvData                 Recv
<br>
&nbsp;&nbsp;2   0 0x00000000004133c7       SendData                 Send
<br>
&nbsp;&nbsp;3   0 0x00000000004134b9       SendRepeat               Send
<br>
&nbsp;&nbsp;4   0 0x0000000000413315       Sync                     Barrier
<br>
&nbsp;&nbsp;5   0 0x00000000004134ef       RecvRepeat               Recv
<br>
<p><p>Thanks for the help!
<br>
<p>Todd
<br>
<p><p>On 3/29/07 5:48 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I used it on a IA64 platform, so I supposed x86_64 is supported, but
</span><br>
<span class="quotelev1">&gt; I never use it on an AMD 64. On the mpiP webpage they claim they
</span><br>
<span class="quotelev1">&gt; support the Cray XT3, which as far as I know are based on AMD Opteron
</span><br>
<span class="quotelev1">&gt; 64 bits. So, there is at least a spark of hope in the dark ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I decide to give it a try on my x86_64 AMD box (Debian based system).
</span><br>
<span class="quotelev1">&gt; First problem, my box didn't have the libunwind. Not a big deal, it's
</span><br>
<span class="quotelev1">&gt; freely available on HP website (<a href="http://www.hpl.hp.com/research/linux/">http://www.hpl.hp.com/research/linux/</a>
</span><br>
<span class="quotelev1">&gt; libunwind/download.php4). Few minutes later, the libunwind was
</span><br>
<span class="quotelev1">&gt; installed in /lib64. Now, time to focus on mpiP ... For some obscure
</span><br>
<span class="quotelev1">&gt; reason the configure script was unable to detect my g77 compiler
</span><br>
<span class="quotelev1">&gt; (whatever!!!) nor the installation of libunwind. Moreover, it keep
</span><br>
<span class="quotelev1">&gt; trying to use the clock_gettime call. Fortunately (which make me
</span><br>
<span class="quotelev1">&gt; think I'm not the only one having trouble with this), mpiP provide
</span><br>
<span class="quotelev1">&gt; configure options for all these. The final configure line was: ./
</span><br>
<span class="quotelev1">&gt; configure --prefix=/opt/ --without-f77 --with-wtime --with-include=-I/
</span><br>
<span class="quotelev1">&gt; include --with-lib=-L/lib64. Then a quick &quot;make shared&quot; followed by
</span><br>
<span class="quotelev1">&gt; &quot;make install&quot;, complete the work. So, at least mpiP can compile on a
</span><br>
<span class="quotelev1">&gt; x86_64 box.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, I modify the makefile of NetPIPE, and add the &quot;-lmpiP -lunwind&quot;,
</span><br>
<span class="quotelev1">&gt; compile NetPIPE and run it. The mpiP headers showed up, the
</span><br>
<span class="quotelev1">&gt; application run to completion and my human readable output was there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @ mpiP
</span><br>
<span class="quotelev1">&gt; @ Command : ./NPmpi
</span><br>
<span class="quotelev1">&gt; @ Version                  : 3.1.0
</span><br>
<span class="quotelev1">&gt; @ MPIP Build date          : Mar 29 2007, 13:35:47
</span><br>
<span class="quotelev1">&gt; @ Start time               : 2007 03 29 13:43:40
</span><br>
<span class="quotelev1">&gt; @ Stop time                : 2007 03 29 13:44:42
</span><br>
<span class="quotelev1">&gt; @ Timer Used               : PMPI_Wtime
</span><br>
<span class="quotelev1">&gt; @ MPIP env var             : [null]
</span><br>
<span class="quotelev1">&gt; @ Collector Rank           : 0
</span><br>
<span class="quotelev1">&gt; @ Collector PID            : 22838
</span><br>
<span class="quotelev1">&gt; @ Final Output Dir         : .
</span><br>
<span class="quotelev1">&gt; @ Report generation        : Single collector task
</span><br>
<span class="quotelev1">&gt; @ MPI Task Assignment      : 0 dancer
</span><br>
<span class="quotelev1">&gt; @ MPI Task Assignment      : 1 dancer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I got some strange reading inside the output.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; @--- Callsites: 5
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; ID Lev File/Address        Line Parent_Funct             MPI_Call
</span><br>
<span class="quotelev1">&gt;    1   0 0x0000000000402ffb       [unknown]                Barrier
</span><br>
<span class="quotelev1">&gt;    2   0 0x0000000000403103       [unknown]                Recv
</span><br>
<span class="quotelev1">&gt;    3   0 0x00000000004030ad       [unknown]                Send
</span><br>
<span class="quotelev1">&gt;    4   0 0x000000000040319f       [unknown]                Send
</span><br>
<span class="quotelev1">&gt;    5   0 0x00000000004031d5       [unknown]                Recv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't dig further to see why. But, this prove that for at least a
</span><br>
<span class="quotelev1">&gt; basic usage (general statistics gathering) mpiP works on x86_64
</span><br>
<span class="quotelev1">&gt; platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Have fun,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 29, 2007, at 11:32 AM, Heywood, Todd wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any other simple, small, text-based (!) suggestions? mpiP seg
</span><br>
<span class="quotelev2">&gt;&gt; faults on
</span><br>
<span class="quotelev2">&gt;&gt; x86_64, and indeed its web page doesn't list x86_64 Linux as a
</span><br>
<span class="quotelev2">&gt;&gt; supported
</span><br>
<span class="quotelev2">&gt;&gt; platform.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Todd
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/28/07 10:39 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stephen,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are a huge number of MPI profiling tools out there. My
</span><br>
<span class="quotelev3">&gt;&gt;&gt; preference will be something small, fast and where the output is in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; human readable text format (and not fancy graphics). The tools I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; talking about is called mpiP (<a href="http://mpip.sourceforge.net/">http://mpip.sourceforge.net/</a>). It's not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI specific, but it's really simple to use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 28, 2007, at 10:10 AM, stephen mulcahy wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is the best way of getting statistics on the size of MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; being sent/received by my OpenMPI-using application? I'm guessing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPE is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one route but is there anything built into OpenMPI that will give me
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this specific statistic?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -stephen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Stephen Mulcahy, Applepie Solutions Ltd, Innovation in Business
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Center,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     GMIT, Dublin Rd, Galway, Ireland.      <a href="http://www.aplpi.com">http://www.aplpi.com</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
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
<li><strong>Next message:</strong> <a href="2958.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2956.php">Prakash Velayutham: "[OMPI users] Spawning to processors outside of the process manager assigned	nodes"</a>
<li><strong>In reply to:</strong> <a href="2948.php">George Bosilca: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2958.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Reply:</strong> <a href="2958.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
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
