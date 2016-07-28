<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3:";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 10:08:15 2009" -->
<!-- isoreceived="20090223150815" -->
<!-- sent="Mon, 23 Feb 2009 10:08:09 -0500" -->
<!-- isosent="20090223150809" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3:" -->
<!-- id="7583DEEA-FD41-46DB-8452-E9E301895C8D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499EC3F0.8060701_at_mpip-mainz.mpg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3:<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 10:08:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8159.php">Ralph Castain: "Re: [OMPI users] How to quit asynchronous processes"</a>
<li><strong>Previous message:</strong> <a href="8157.php">Jeff Squyres: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="8135.php">Olaf Lenz: "[OMPI users] OpenMPI 1.3:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8160.php">Olaf Lenz: "[OMPI users] Bug reporting [was: OpenMPI 1.3]"</a>
<li><strong>Reply:</strong> <a href="8160.php">Olaf Lenz: "[OMPI users] Bug reporting [was: OpenMPI 1.3]"</a>
<li><strong>Reply:</strong> <a href="8174.php">Olaf Lenz: "Re: [OMPI users] OpenMPI 1.3:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 20, 2009, at 9:53 AM, Olaf Lenz wrote:
<br>
<p><span class="quotelev1">&gt; However, I'm using OpenMPI to run a program that we currently develop
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.espresso-pp.de">http://www.espresso-pp.de</a>). The software uses Python as a front-end
</span><br>
<span class="quotelev1">&gt; language, which loads the MPI-enabled shared library. When I start
</span><br>
<span class="quotelev1">&gt; python with a script using this parallel lib via mpiexec, I get the
</span><br>
<span class="quotelev1">&gt; following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -n 4 python examples/hello.py
</span><br>
<span class="quotelev1">&gt; python: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /people/thnfs/homes/lenzo/software.thop/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_paffinity_linux.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: mca_base_param_reg_int
</span><br>
<p>We've talked about similar errors before; I thought that the issue was  
<br>
caused by the Python front-end calling dlopen() to manually open the  
<br>
libmpi.so library.  Is that the cause in your scenario?
<br>
<p>If so, note that it needs to load libmpi.so with RTLD_GLOBAL.  For  
<br>
example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#loading-libmpi-dynamically">http://www.open-mpi.org/faq/?category=running#loading-libmpi-dynamically</a>
<br>
<p><span class="quotelev1">&gt; When I compile OpenMPI 1.3 using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	--enable-shared --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the problem disappears. Note also, that the same program works when  
</span><br>
<span class="quotelev1">&gt; I'm
</span><br>
<span class="quotelev1">&gt; using OpenMPI 1.2.x (tested 1.2.6 and 1.2.9). I do believe that the
</span><br>
<span class="quotelev1">&gt; problem is connected with the problem described here:
</span><br>
<p>Yes, this makes sense, given the way that linkers work.  If you don't  
<br>
dlopen with RTLD_GLOBAL, then libmpi is opened into a private  
<br>
namespace in the process, and then OMPI's plugins that are  
<br>
subsequently opened cannot find the symbols that they expect to find  
<br>
(from libmpi).
<br>
<p>If you compile statically, there's no issue because all the libmpi's  
<br>
symbols are globally available to any plugins that are loaded at run- 
<br>
time.
<br>
<p>(note that I say &quot;libmpi&quot;, but I'm really referring to all three of  
<br>
OMPI's support libraries: libmpi, libopen-rte, libopen-pal)
<br>
<p><span class="quotelev1">&gt; PS: It is not obvious on the OpenMPI web site where to report bugs.  
</span><br>
<span class="quotelev1">&gt; When
</span><br>
<span class="quotelev1">&gt; clicking on &quot;Bug Tracking&quot;, which seems most obvious, I'm redirected  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; the Trac Timeline, and there is no place where I can report bugs or
</span><br>
<span class="quotelev1">&gt; anything.
</span><br>
<p>Bummer; I had thought the Big Red Links for &quot;Getting Help/Support&quot;  
<br>
were obvious.  :-(  Indeed, the very first line of text on the <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> 
<br>
&nbsp;&nbsp;page says:
<br>
<p>&quot;If you have a bug report and/or patch for Open MPI, you should  
<br>
probably subscribe to the Open MPI developer's list and post it there.  
<br>
Open MPI uses Trac for its bug tracking (see the &quot;Bug Tracking&quot; link  
<br>
in the left-hand navigation), but only developers are allowed to open  
<br>
new tickets (mainly as an artifact of our SVN+Trac authentication  
<br>
system; it's never been a big enough issue for us to figure out how to  
<br>
issue non-developer/Trac-only accounts).&quot;
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8159.php">Ralph Castain: "Re: [OMPI users] How to quit asynchronous processes"</a>
<li><strong>Previous message:</strong> <a href="8157.php">Jeff Squyres: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="8135.php">Olaf Lenz: "[OMPI users] OpenMPI 1.3:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8160.php">Olaf Lenz: "[OMPI users] Bug reporting [was: OpenMPI 1.3]"</a>
<li><strong>Reply:</strong> <a href="8160.php">Olaf Lenz: "[OMPI users] Bug reporting [was: OpenMPI 1.3]"</a>
<li><strong>Reply:</strong> <a href="8174.php">Olaf Lenz: "Re: [OMPI users] OpenMPI 1.3:"</a>
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
