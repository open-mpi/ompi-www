<?
$subject_val = "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 22 13:43:11 2011" -->
<!-- isoreceived="20111222184311" -->
<!-- sent="Thu, 22 Dec 2011 19:43:05 +0100" -->
<!-- isosent="20111222184305" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?" -->
<!-- id="4EF37A39.4020106_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EDE7B13.8000609_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-22 13:43:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18044.php">Jed Brown: "[OMPI users] One-sided bugs"</a>
<li><strong>Previous message:</strong> <a href="18042.php">Roger Martin: "[OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>In reply to:</strong> <a href="17896.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18046.php">Beat Rubischon: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>Reply:</strong> <a href="18046.php">Beat Rubischon: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, no single answer on this, try to revive the question.
<br>
<p>Anybody: does someone have OpenMPI up'n'running using DAPL 2.0 on Linux?
<br>
<p>Why: on some computers, using native openib (Intel says 'ofa') interface 
<br>
leads to 50% performance loss (Badwidth 1.3 Gb/s instead of 3Gb/s with 
<br>
DAPL+IntelMPI in a PingPong test).
<br>
<p>I was able to compiler several Open MPI versiouns with support for DAPL. 
<br>
All what I get was this:
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: Failed to open &quot;ofa-v2-ib0&quot; 
<br>
[DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
<br>
This may be a real error or it may be an invalid entry in the uDAPL
<br>
Registry which is contained in the dat.conf file. Contact your local
<br>
System Administrator to confirm the availability of the interfaces in
<br>
the dat.conf file.
<br>
--------------------------------------------------------------------------
<br>
[linuxbdc05.rz.RWTH-Aachen.DE][[30122,1],0][btl_udapl.c:833:mca_btl_udapl_assign_netmask] 
<br>
uDAPL BTL address 134.61.208.204 : if_mask = 19
<br>
[linuxbdc06.rz.RWTH-Aachen.DE][[30122,1],1][btl_udapl.c:833:mca_btl_udapl_assign_netmask] 
<br>
uDAPL BTL address 134.61.208.205 : if_mask = 19
<br>
[linuxbdc06.rz.RWTH-Aachen.DE][[30122,1],1][btl_udapl_proc.c:235:mca_btl_udapl_proc_address_match] 
<br>
uDAPL BTL module(134.61.208.205) matched 134.61.208.204
<br>
[linuxbdc05.rz.RWTH-Aachen.DE][[30122,1],0][btl_udapl_proc.c:235:mca_btl_udapl_proc_address_match] 
<br>
uDAPL BTL module(134.61.208.204) matched 134.61.208.205
<br>
......
<br>
[linuxbdc01.rz.RWTH-Aachen.DE:26268] 13 more processes have sent help 
<br>
message help-mpi-btl-udapl.txt / dat_ia_open fail
<br>
[linuxbdc01.rz.RWTH-Aachen.DE:26268] Set MCA parameter 
<br>
&quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
--------------------------------------------------------------------------
<br>
<p><p>... and the program runs with 'openib' speed (= too slow, but faster 
<br>
than IPoIB).
<br>
<p>The interface &quot;ofa-v2-ib0&quot;:
<br>
--------------------------------------------------------------------------
<br>
ofa-v2-ib0 u2.0 nonthreadsafe default libdaplofa.so.2 dapl.2.0 &quot;ib0 0&quot; &quot;&quot;
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;... is the interface from $DAT_OVERIDE which is sucessfully used by 
<br>
the Intel MPI, so this is _not_ &quot;a invalid entry in the uDAPL Registry 
<br>
which is contained in the dat.conf file.&quot;
<br>
<p>Well. Any suggestions? Does OpenMPI ever able to use DAPL 2.0 on Linux?
<br>
<p><p>Merry Christmas from westernest Germany,
<br>
<p>Paul
<br>
<p><p><p><p><p><p>Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Good morning,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We've never recommended the use of dapl on Linux.  I think it might 
</span><br>
<span class="quotelev2">&gt;&gt; have worked at one time, but I don't think anyone bothered to maintain 
</span><br>
<span class="quotelev2">&gt;&gt; it. 
</span><br>
<span class="quotelev2">&gt;&gt; On Linux, you should probably use native verbs support, instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, we use 'Open MPI + openib' since some years now (started with 
</span><br>
<span class="quotelev1">&gt; Sun's ClusterTools and Open MPI 1.2.x, now we have self-build 1.4.x and 
</span><br>
<span class="quotelev1">&gt; 1.5.x Open MPI).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is, that on our new, big, sexy cluster (some 1700 nodes 
</span><br>
<span class="quotelev1">&gt; connected to common QDR InfiniBand fabric), running MPI over DAPL seem 
</span><br>
<span class="quotelev1">&gt; to be quite faster than running over native IB.  Yes, it is puzzling.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But  reproducible:
</span><br>
<span class="quotelev1">&gt; Intel MPI (over DAPL) =&gt; 100%
</span><br>
<span class="quotelev1">&gt; OpenMPI (over openib) =&gt; 90% on some 4/5 machines (Westmere dual-Socket)
</span><br>
<span class="quotelev1">&gt; OpenMPI (over openib) =&gt; 45% on some 1/5 machines (Nehalem quad-Socket)
</span><br>
<span class="quotelev1">&gt; Intel MPI (over ofa) ==&gt; the same values than OpenMPI!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Bandwidth in a PingPong test, e.g. Intel MPI benchmark, and two other 
</span><br>
<span class="quotelev1">&gt; PingPongs)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The question about WHY native IB is slower than DAPL is a very good one 
</span><br>
<span class="quotelev1">&gt; (did you have any ideas?). As said it is reproducible: switching from 
</span><br>
<span class="quotelev1">&gt; dapl to ofa in Intel MPI also switches the performance of PingPong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (You may say &quot;your test is wrong&quot; but we tried out three different 
</span><br>
<span class="quotelev1">&gt; PingPong tests, producing very similar values).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The second question is How to Learn OpenMPI to Use DAPL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meanwhile, I compiled lotz of versions (1.4.3, 1.4.4, 1.5.3, 1.5.4) 
</span><br>
<span class="quotelev1">&gt; using at least two DAPL versions and option --with-udapl. The versions 
</span><br>
<span class="quotelev1">&gt; are build well, but always on start, the initialisation of DAPL fails 
</span><br>
<span class="quotelev1">&gt; (message see below) and the communication runs as usual over openib.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also the error message says &quot;may be an invalid Registry in the dat.conf 
</span><br>
<span class="quotelev1">&gt; file&quot;, this seem to be very unlikely: with the same dat.conf the Intel 
</span><br>
<span class="quotelev1">&gt; MPI can use DAPL. (and yes, OpenMPI really use the same dat.conf than 
</span><br>
<span class="quotelev1">&gt; Intel MPI, set over DAT_OVERRIDE - checked and double-checked).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: Failed to open &quot;ofa-v2-mlx4_0-1u&quot; 
</span><br>
<span class="quotelev1">&gt; [DAT_PROVIDER_NOT_FOUND:DAT_NAME_NOT_REGISTERED].
</span><br>
<span class="quotelev1">&gt; This may be a real error or it may be an invalid entry in the uDAPL
</span><br>
<span class="quotelev1">&gt; Registry which is contained in the dat.conf file. Contact your local
</span><br>
<span class="quotelev1">&gt; System Administrator to confirm the availability of the interfaces in
</span><br>
<span class="quotelev1">&gt; the dat.conf file.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because of the anticipated performance gain we would be very keen on 
</span><br>
<span class="quotelev1">&gt; using DAPL with Open MPI. Does somebody have any idea what could be 
</span><br>
<span class="quotelev1">&gt; wrong and what to check?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 2, 2011, at 1:21 PM, Paul Kapinos wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OFED 1.5.4 will contain DAPL 2.0.34.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to compile the newest release of Open MPI (1.5.4) with this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DAPL release and I was not successful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configuring with --with-udapl=/path/to/2.0.34/dapl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; got the error &quot;/path/to/2.0.34/dapl/include/dat/udat.h not found&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking into include dir: there is no 'dat' subdir but 'dat2'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just for fun I also tried to move 'dat2' to 'dat' back (dirty hack I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know :-) - the configure stage was then successful but the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation failed. The header seem to be really changed, not just 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; moved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The question: are the Open MPI developer aware of this changes, and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when a version of Open MPI will be available with support for DAPL 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.0.34?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Background: we have some trouble with Intel MPI and current DAPL 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which we do not have with DAPL 2.0.34, so our dream is to update as 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; soon as possible)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best wishes and an nice weekend,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.openfabrics.org/downloads/OFED/release_notes/OFED_1.5.4_release_notes">http://www.openfabrics.org/downloads/OFED/release_notes/OFED_1.5.4_release_notes</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18043/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18044.php">Jed Brown: "[OMPI users] One-sided bugs"</a>
<li><strong>Previous message:</strong> <a href="18042.php">Roger Martin: "[OMPI users] OBJ_CLASS_INSTANCE error: initializer element is not constant - Windows 7 64 bit mingw-w64 4.6.3"</a>
<li><strong>In reply to:</strong> <a href="17896.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18046.php">Beat Rubischon: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>Reply:</strong> <a href="18046.php">Beat Rubischon: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
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
