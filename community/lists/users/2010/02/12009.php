<?
$subject_val = "[OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 16:52:09 2010" -->
<!-- isoreceived="20100204215209" -->
<!-- sent="Thu, 04 Feb 2010 13:52:05 -0800" -->
<!-- isosent="20100204215205" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="[OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?" -->
<!-- id="E1Nd9cL-00016Z-6d_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 16:52:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12010.php">Jeffrey M Ceason: "[OMPI users] AUTO: Jeffrey M Ceason is out of the office. (returning 02/13/2010)"</a>
<li><strong>Previous message:</strong> <a href="12008.php">Dorian Krause: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12019.php">Iain Bason: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Reply:</strong> <a href="12019.php">Iain Bason: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Maybe reply:</strong> <a href="12020.php">Terry Dontje: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Maybe reply:</strong> <a href="12025.php">David Mathog: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anybody built 1.4.1 on Solaris 8 (Sparc), because it isn't going
<br>
very well here.  If you succeeded at this please tell me how you did it.
<br>
<p>Here is my tale of woe.
<br>
<p>First attempt with gcc (3.4.6 from SunFreeware) and
<br>
<p>&nbsp;&nbsp;./configure --with-sge --prefix=/opt/ompi141
<br>
&nbsp;&nbsp;gmake all install &gt;build_log1 2&gt;&amp;1
<br>
<p>built ok (needed the same source changes described by Brian Blank for
<br>
1.3.1 or it wouldn't compile
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2009/02/7994.php">http://www.open-mpi.org/community/lists/users/2009/02/7994.php</a>
<br>
<p>), and mpirun worked OK with hello_c so long as it only sent jobs to the
<br>
same machine like this:
<br>
<p>&nbsp;&nbsp;cat &gt;justme &lt;&lt;EOD
<br>
&nbsp;&nbsp;nameofsolaris8machine
<br>
&nbsp;&nbsp;EOD
<br>
&nbsp;&nbsp;mpirun --prefix /opt/ompi141 --mca plm_rsh_agent rsh \
<br>
&nbsp;&nbsp;-np 1 --hostfile justme hello_c
<br>
<p>&nbsp;but try to send them to another machine (Linux IA32) and...
<br>
<p>&nbsp;&nbsp;cat &gt;linuxboxen &lt;&lt;EOD
<br>
&nbsp;&nbsp;linuxia32_1
<br>
&nbsp;&nbsp;linuxia32_2
<br>
&nbsp;&nbsp;linuxia32_3
<br>
&nbsp;&nbsp;EOD
<br>
&nbsp;&nbsp;mpirun --prefix /opt/ompi141 --mca plm_rsh_agent rsh \
<br>
&nbsp;&nbsp;-np 1 --hostfile linuxboxen hello_c
<br>
<p>&nbsp;&nbsp;mca_oob_tcp_msg_send_handler:  writev failed;  Bad file descriptor
<br>
<p>Note that the IA32 machines can send jobs back and forth to each other
<br>
without a problem using the same sort of test.
<br>
<p>Second attempt, tried building with the Forte 7 tools instead of gcc:
<br>
<p>&nbsp;./configure --with-sge  --prefix=/opt/ompi141 \
<br>
&nbsp;CFLAGS=&quot;-xarch=v8plusa&quot; \
<br>
&nbsp;CXXFLAGS=&quot;-xarch=v8plusa&quot; \
<br>
&nbsp;FFLAGS=&quot;-xarch=v8plusa&quot; \
<br>
&nbsp;FCFLAGS=&quot;-xarch=v8plusa&quot; \
<br>
&nbsp;CC=/opt/SUNWspro/bin/cc \
<br>
&nbsp;CXX=/opt/SUNWspro/bin/CC \
<br>
&nbsp;F77=/opt/SUNWspro/bin/f77 \
<br>
&nbsp;FC=/opt/SUNWspro/bin/f95 \
<br>
&nbsp;CCAS=/opt/SUNWspro/bin/cc \
<br>
&nbsp;CCASFLAGS=&quot;-xarch=v8plusa&quot; &gt;saf_configure_4.log 2&gt;&amp;1 &amp;
<br>
&nbsp;gmake all install &gt;build_log2 2&gt;&amp;1
<br>
<p>and it had problems with vt_tracefilter.cc, where it stopped at:
<br>
<p>&quot;The compiler currently does not permit non-POD variables (&quot;name&quot;) in
<br>
OpenMP regions&quot;.
<br>
<p>This was because of -DVT_OMP on the compilation line.  Removed it, then
<br>
the compiler did not include omp.h (ancient OpenMPI header file that
<br>
came with Forte 7), compiled that one file manually, restarted the gmake
<br>
and hit:
<br>
<p>&nbsp;/opt/SUNWspro/bin/CC -DHAVE_CONFIG_H -I. -I../.. \
<br>
&nbsp;-I../../extlib/otf/otflib -I../../extlib/otf/otflib \
<br>
&nbsp;-I../../vtlib/   -xopenmp -DVT_OMP -xarch=v8plusa -c \
<br>
&nbsp;-o vtunify-vt_unify.o \
<br>
`test -f 'vt_unify.cc' || echo './'`vt_unify.cc
<br>
CC: Warning: Optimizer level changed from 0 to 3 to support parallelized
<br>
code
<br>
&quot;vt_unify_stats.h&quot;, line 70: Error: m_iFuncStatSortFlags is not
<br>
accessible from Statistics::FuncStat_struct::operator&lt;(const
<br>
Statistics::FuncStat_struct&amp;) const.
<br>
1 Error(s) detected.
<br>
<p>This error didn't go away when -DVT_OMP was removed, nor when -xopenmp
<br>
was also taken away, and so the final score is:  working OpenMPI 1.4.1
<br>
on Solaris = 0 for 2 attempts.
<br>
<p>Thanks,
<br>
<p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12010.php">Jeffrey M Ceason: "[OMPI users] AUTO: Jeffrey M Ceason is out of the office. (returning 02/13/2010)"</a>
<li><strong>Previous message:</strong> <a href="12008.php">Dorian Krause: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12019.php">Iain Bason: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Reply:</strong> <a href="12019.php">Iain Bason: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Maybe reply:</strong> <a href="12020.php">Terry Dontje: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Maybe reply:</strong> <a href="12025.php">David Mathog: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
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
