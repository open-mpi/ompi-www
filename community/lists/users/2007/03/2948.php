<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 29 17:53:03 2007" -->
<!-- isoreceived="20070329215303" -->
<!-- sent="Thu, 29 Mar 2007 17:48:21 -0400" -->
<!-- isosent="20070329214821" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Measuring MPI message size used by application" -->
<!-- id="EE7AA5D8-0500-4D46-89D4-EB26D0A40FED_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C231544B.1396%heywood_at_cshl.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-29 17:48:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2949.php">stephen mulcahy: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2947.php">Jeff Squyres: "Re: [OMPI users] Can anybody guide me how to make a openmpi file"</a>
<li><strong>In reply to:</strong> <a href="2942.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2949.php">stephen mulcahy: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Reply:</strong> <a href="2949.php">stephen mulcahy: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Reply:</strong> <a href="2957.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I used it on a IA64 platform, so I supposed x86_64 is supported, but  
<br>
I never use it on an AMD 64. On the mpiP webpage they claim they  
<br>
support the Cray XT3, which as far as I know are based on AMD Opteron  
<br>
64 bits. So, there is at least a spark of hope in the dark ...
<br>
<p>I decide to give it a try on my x86_64 AMD box (Debian based system).  
<br>
First problem, my box didn't have the libunwind. Not a big deal, it's  
<br>
freely available on HP website (<a href="http://www.hpl.hp.com/research/linux/">http://www.hpl.hp.com/research/linux/</a> 
<br>
libunwind/download.php4). Few minutes later, the libunwind was  
<br>
installed in /lib64. Now, time to focus on mpiP ... For some obscure  
<br>
reason the configure script was unable to detect my g77 compiler  
<br>
(whatever!!!) nor the installation of libunwind. Moreover, it keep  
<br>
trying to use the clock_gettime call. Fortunately (which make me  
<br>
think I'm not the only one having trouble with this), mpiP provide  
<br>
configure options for all these. The final configure line was: ./ 
<br>
configure --prefix=/opt/ --without-f77 --with-wtime --with-include=-I/ 
<br>
include --with-lib=-L/lib64. Then a quick &quot;make shared&quot; followed by  
<br>
&quot;make install&quot;, complete the work. So, at least mpiP can compile on a  
<br>
x86_64 box.
<br>
<p>Now, I modify the makefile of NetPIPE, and add the &quot;-lmpiP -lunwind&quot;,  
<br>
compile NetPIPE and run it. The mpiP headers showed up, the  
<br>
application run to completion and my human readable output was there.
<br>
<p>@ mpiP
<br>
@ Command : ./NPmpi
<br>
@ Version                  : 3.1.0
<br>
@ MPIP Build date          : Mar 29 2007, 13:35:47
<br>
@ Start time               : 2007 03 29 13:43:40
<br>
@ Stop time                : 2007 03 29 13:44:42
<br>
@ Timer Used               : PMPI_Wtime
<br>
@ MPIP env var             : [null]
<br>
@ Collector Rank           : 0
<br>
@ Collector PID            : 22838
<br>
@ Final Output Dir         : .
<br>
@ Report generation        : Single collector task
<br>
@ MPI Task Assignment      : 0 dancer
<br>
@ MPI Task Assignment      : 1 dancer
<br>
<p>However, I got some strange reading inside the output.
<br>
------------------------------------------------------------------------ 
<br>
<pre>
---
@--- Callsites: 5  
---------------------------------------------------------
------------------------------------------------------------------------ 
---
ID Lev File/Address        Line Parent_Funct             MPI_Call
   1   0 0x0000000000402ffb       [unknown]                Barrier
   2   0 0x0000000000403103       [unknown]                Recv
   3   0 0x00000000004030ad       [unknown]                Send
   4   0 0x000000000040319f       [unknown]                Send
   5   0 0x00000000004031d5       [unknown]                Recv
I didn't dig further to see why. But, this prove that for at least a  
basic usage (general statistics gathering) mpiP works on x86_64  
platforms.
   Have fun,
     george.
On Mar 29, 2007, at 11:32 AM, Heywood, Todd wrote:
&gt; George,
&gt;
&gt; Any other simple, small, text-based (!) suggestions? mpiP seg  
&gt; faults on
&gt; x86_64, and indeed its web page doesn't list x86_64 Linux as a  
&gt; supported
&gt; platform.
&gt;
&gt; Todd
&gt;
&gt;
&gt; On 3/28/07 10:39 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; Stephen,
&gt;&gt;
&gt;&gt; There are a huge number of MPI profiling tools out there. My
&gt;&gt; preference will be something small, fast and where the output is in
&gt;&gt; human readable text format (and not fancy graphics). The tools I'm
&gt;&gt; talking about is called mpiP (<a href="http://mpip.sourceforge.net/">http://mpip.sourceforge.net/</a>). It's not
&gt;&gt; Open MPI specific, but it's really simple to use.
&gt;&gt;
&gt;&gt;    george.
&gt;&gt;
&gt;&gt; On Mar 28, 2007, at 10:10 AM, stephen mulcahy wrote:
&gt;&gt;
&gt;&gt;&gt; Hi,
&gt;&gt;&gt;
&gt;&gt;&gt; What is the best way of getting statistics on the size of MPI  
&gt;&gt;&gt; messages
&gt;&gt;&gt; being sent/received by my OpenMPI-using application? I'm guessing
&gt;&gt;&gt; MPE is
&gt;&gt;&gt; one route but is there anything built into OpenMPI that will give me
&gt;&gt;&gt; this specific statistic?
&gt;&gt;&gt;
&gt;&gt;&gt; Thanks,
&gt;&gt;&gt;
&gt;&gt;&gt; -stephen
&gt;&gt;&gt;
&gt;&gt;&gt; -- 
&gt;&gt;&gt; Stephen Mulcahy, Applepie Solutions Ltd, Innovation in Business
&gt;&gt;&gt; Center,
&gt;&gt;&gt;     GMIT, Dublin Rd, Galway, Ireland.      <a href="http://www.aplpi.com">http://www.aplpi.com</a>
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&quot;Half of what I say is meaningless; but I say it so that the other  
half may reach you&quot;
                                   Kahlil Gibran
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2949.php">stephen mulcahy: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2947.php">Jeff Squyres: "Re: [OMPI users] Can anybody guide me how to make a openmpi file"</a>
<li><strong>In reply to:</strong> <a href="2942.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2949.php">stephen mulcahy: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Reply:</strong> <a href="2949.php">stephen mulcahy: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Reply:</strong> <a href="2957.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
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
