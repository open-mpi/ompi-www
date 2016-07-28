<?
$subject_val = "Re: [OMPI users] compile crash with pathscale and openmpi-1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 14:54:53 2009" -->
<!-- isoreceived="20090317185453" -->
<!-- sent="Tue, 17 Mar 2009 13:54:48 -0500" -->
<!-- isosent="20090317185448" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compile crash with pathscale and openmpi-1.3" -->
<!-- id="20090317185448.GA26929_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BAA91867-B74D-478B-9D3C-5F74104FBF13_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compile crash with pathscale and openmpi-1.3<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 14:54:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8486.php">Ron Babich: "[OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Previous message:</strong> <a href="8484.php">Elvedin Trnjanin: "Re: [OMPI users] WRF Slow Down"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7828.php">Jeff Squyres: "Re: [OMPI users] compile crash with pathscale and openmpi-1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan/26/2009 12:16:47PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Yowza!  Bummer.  Please let us know what Pathscale says.
</span><br>
<p>I encountered the same issue and here is Pathscale's
<br>
response:
<br>
<p>&nbsp;&nbsp;&quot;C++ OpenMP is not fully supported in the GCC3-based
<br>
&nbsp;&nbsp;front-end, that your compilation is using. This old
<br>
&nbsp;&nbsp;front-end is being used probably because you are compiling
<br>
&nbsp;&nbsp;on a GCC3-based linux distribution. You are seeing this
<br>
&nbsp;&nbsp;failure due to this incomplete support. A solution is
<br>
&nbsp;&nbsp;moving to a GCC4-based distribution so that the compiler
<br>
&nbsp;&nbsp;uses the new GCC4-based front-end with C++ OpenMP support.
<br>
&nbsp;&nbsp;You can also trying adding -gnu4 option to your
<br>
&nbsp;&nbsp;compilation on a GCC3-based system, but it is not always
<br>
&nbsp;&nbsp;guaranteed to work on GCC3-based systems.&quot;
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2009, at 8:53 PM, Alain Miniussi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FYI:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following problem when compiling openmpi-1.3 at -O2 and beyond:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [alainm_at_rossini vtfilter]$pwd
</span><br>
<span class="quotelev2">&gt;&gt; /misc/nice1/alainm/openmpi-1.3/ompi/contrib/vt/vt/tools/vtfilter
</span><br>
<span class="quotelev2">&gt;&gt; [alainm_at_rossini vtfilter]$make CXXFLAGS=-O2
</span><br>
<span class="quotelev2">&gt;&gt; pathCC -DHAVE_CONFIG_H -I. -I../.. -I../../extlib/otf/otflib
</span><br>
<span class="quotelev2">&gt;&gt; -I../../extlib/otf/otflib -I../../vtlib/ -I../../vtlib  -D_GNU_SOURCE -mp
</span><br>
<span class="quotelev2">&gt;&gt; -DVT_OMP -O2 -MT vtfilter-vt_tracefilter.o -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt; .deps/vtfilter-vt_tracefilter.Tpo -c -o vtfilter-vt_tracefilter.o `test -f
</span><br>
<span class="quotelev2">&gt;&gt; 'vt_tracefilter.cc' || echo './'`vt_tracefilter.cc
</span><br>
<span class="quotelev2">&gt;&gt; Signal: Segmentation fault in Global Optimization -- Dead Store
</span><br>
<span class="quotelev2">&gt;&gt; Elimination phase.
</span><br>
<span class="quotelev2">&gt;&gt; Error: Signal Segmentation fault in phase Global Optimization -- Dead
</span><br>
<span class="quotelev2">&gt;&gt; Store Elimination -- processing aborted
</span><br>
<span class="quotelev2">&gt;&gt; *** Internal stack backtrace:
</span><br>
<span class="quotelev2">&gt;&gt; pathCC INTERNAL ERROR: /opt/pathscale/lib/3.2/be died due to signal 4
</span><br>
<span class="quotelev2">&gt;&gt; Please report this problem to &lt;support_at_[hidden]&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; Problem report saved as /home/alainm/.ekopath-bugs/pathCC_error_15P2Vc.ii
</span><br>
<span class="quotelev2">&gt;&gt; Please review the above file and, if possible, attach it to your problem
</span><br>
<span class="quotelev2">&gt;&gt; report.
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [vtfilter-vt_tracefilter.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; [alainm_at_rossini vtfilter]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the problem disapear at -O1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I sent all the relevent informations to pathscale support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Alain Miniussi
</span><br>
<span class="quotelev2">&gt;&gt; Equipe CRIMSON                          Mesocentre de Calcul SIGAMM
</span><br>
<span class="quotelev2">&gt;&gt; +33 492 00 30 09                        <a href="https://crimson.oca.eu">https://crimson.oca.eu</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="8486.php">Ron Babich: "[OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Previous message:</strong> <a href="8484.php">Elvedin Trnjanin: "Re: [OMPI users] WRF Slow Down"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7828.php">Jeff Squyres: "Re: [OMPI users] compile crash with pathscale and openmpi-1.3"</a>
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
