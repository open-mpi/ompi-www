<?
$subject_val = "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 12:25:08 2010" -->
<!-- isoreceived="20100205172508" -->
<!-- sent="Fri, 05 Feb 2010 12:24:13 -0500" -->
<!-- isosent="20100205172413" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?" -->
<!-- id="4B6C543D.1010704_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.15.1265389233.1374.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-05 12:24:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12021.php">Mike Hanby: "[OMPI users] Infiniband Question"</a>
<li><strong>Previous message:</strong> <a href="12019.php">Iain Bason: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Maybe in reply to:</strong> <a href="12009.php">David Mathog: "[OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12025.php">David Mathog: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We haven't tried Solaris 8 in quite some time.  However, for your first 
<br>
issue did you include the --enable-heterogeneous option on your 
<br>
configure command?
<br>
<p>Since you are mix IA-32 and SPARC nodes you'll want to include this so 
<br>
the endian issue doesn't bite you.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Thu, 04 Feb 2010 13:52:05 -0800
</span><br>
<span class="quotelev1">&gt; From: &quot;David Mathog&quot; &lt;mathog_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Anybody built a working 1.4.1 on Solaris 8
</span><br>
<span class="quotelev1">&gt; 	(Sparc)?
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;E1Nd9cL-00016Z-6d_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=iso-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anybody built 1.4.1 on Solaris 8 (Sparc), because it isn't going
</span><br>
<span class="quotelev1">&gt; very well here.  If you succeeded at this please tell me how you did it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is my tale of woe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First attempt with gcc (3.4.6 from SunFreeware) and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ./configure --with-sge --prefix=/opt/ompi141
</span><br>
<span class="quotelev1">&gt;   gmake all install &gt;build_log1 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; built ok (needed the same source changes described by Brian Blank for
</span><br>
<span class="quotelev1">&gt; 1.3.1 or it wouldn't compile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/community/lists/users/2009/02/7994.php">http://www.open-mpi.org/community/lists/users/2009/02/7994.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ), and mpirun worked OK with hello_c so long as it only sent jobs to the
</span><br>
<span class="quotelev1">&gt; same machine like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   cat &gt;justme &lt;&lt;EOD
</span><br>
<span class="quotelev1">&gt;   nameofsolaris8machine
</span><br>
<span class="quotelev1">&gt;   EOD
</span><br>
<span class="quotelev1">&gt;   mpirun --prefix /opt/ompi141 --mca plm_rsh_agent rsh \
</span><br>
<span class="quotelev1">&gt;   -np 1 --hostfile justme hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  but try to send them to another machine (Linux IA32) and...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   cat &gt;linuxboxen &lt;&lt;EOD
</span><br>
<span class="quotelev1">&gt;   linuxia32_1
</span><br>
<span class="quotelev1">&gt;   linuxia32_2
</span><br>
<span class="quotelev1">&gt;   linuxia32_3
</span><br>
<span class="quotelev1">&gt;   EOD
</span><br>
<span class="quotelev1">&gt;   mpirun --prefix /opt/ompi141 --mca plm_rsh_agent rsh \
</span><br>
<span class="quotelev1">&gt;   -np 1 --hostfile linuxboxen hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mca_oob_tcp_msg_send_handler:  writev failed;  Bad file descriptor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the IA32 machines can send jobs back and forth to each other
</span><br>
<span class="quotelev1">&gt; without a problem using the same sort of test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second attempt, tried building with the Forte 7 tools instead of gcc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --with-sge  --prefix=/opt/ompi141 \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-xarch=v8plusa&quot; \
</span><br>
<span class="quotelev1">&gt;  CXXFLAGS=&quot;-xarch=v8plusa&quot; \
</span><br>
<span class="quotelev1">&gt;  FFLAGS=&quot;-xarch=v8plusa&quot; \
</span><br>
<span class="quotelev1">&gt;  FCFLAGS=&quot;-xarch=v8plusa&quot; \
</span><br>
<span class="quotelev1">&gt;  CC=/opt/SUNWspro/bin/cc \
</span><br>
<span class="quotelev1">&gt;  CXX=/opt/SUNWspro/bin/CC \
</span><br>
<span class="quotelev1">&gt;  F77=/opt/SUNWspro/bin/f77 \
</span><br>
<span class="quotelev1">&gt;  FC=/opt/SUNWspro/bin/f95 \
</span><br>
<span class="quotelev1">&gt;  CCAS=/opt/SUNWspro/bin/cc \
</span><br>
<span class="quotelev1">&gt;  CCASFLAGS=&quot;-xarch=v8plusa&quot; &gt;saf_configure_4.log 2&gt;&amp;1 &amp;
</span><br>
<span class="quotelev1">&gt;  gmake all install &gt;build_log2 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it had problems with vt_tracefilter.cc, where it stopped at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;The compiler currently does not permit non-POD variables (&quot;name&quot;) in
</span><br>
<span class="quotelev1">&gt; OpenMP regions&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was because of -DVT_OMP on the compilation line.  Removed it, then
</span><br>
<span class="quotelev1">&gt; the compiler did not include omp.h (ancient OpenMPI header file that
</span><br>
<span class="quotelev1">&gt; came with Forte 7), compiled that one file manually, restarted the gmake
</span><br>
<span class="quotelev1">&gt; and hit:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/SUNWspro/bin/CC -DHAVE_CONFIG_H -I. -I../.. \
</span><br>
<span class="quotelev1">&gt;  -I../../extlib/otf/otflib -I../../extlib/otf/otflib \
</span><br>
<span class="quotelev1">&gt;  -I../../vtlib/   -xopenmp -DVT_OMP -xarch=v8plusa -c \
</span><br>
<span class="quotelev1">&gt;  -o vtunify-vt_unify.o \
</span><br>
<span class="quotelev1">&gt; `test -f 'vt_unify.cc' || echo './'`vt_unify.cc
</span><br>
<span class="quotelev1">&gt; CC: Warning: Optimizer level changed from 0 to 3 to support parallelized
</span><br>
<span class="quotelev1">&gt; code
</span><br>
<span class="quotelev1">&gt; &quot;vt_unify_stats.h&quot;, line 70: Error: m_iFuncStatSortFlags is not
</span><br>
<span class="quotelev1">&gt; accessible from Statistics::FuncStat_struct::operator&lt;(const
</span><br>
<span class="quotelev1">&gt; Statistics::FuncStat_struct&amp;) const.
</span><br>
<span class="quotelev1">&gt; 1 Error(s) detected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error didn't go away when -DVT_OMP was removed, nor when -xopenmp
</span><br>
<span class="quotelev1">&gt; was also taken away, and so the final score is:  working OpenMPI 1.4.1
</span><br>
<span class="quotelev1">&gt; on Solaris = 0 for 2 attempts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David Mathog
</span><br>
<span class="quotelev1">&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12021.php">Mike Hanby: "[OMPI users] Infiniband Question"</a>
<li><strong>Previous message:</strong> <a href="12019.php">Iain Bason: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Maybe in reply to:</strong> <a href="12009.php">David Mathog: "[OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12025.php">David Mathog: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
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
