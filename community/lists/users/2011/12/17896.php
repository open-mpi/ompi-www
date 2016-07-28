<?
$subject_val = "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  6 15:29:12 2011" -->
<!-- isoreceived="20111206202912" -->
<!-- sent="Tue, 06 Dec 2011 21:29:07 +0100" -->
<!-- isosent="20111206202907" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?" -->
<!-- id="4EDE7B13.8000609_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A82E972-8CE4-4DE7-9865-91B633049635_at_cisco.com" -->
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
<strong>Date:</strong> 2011-12-06 15:29:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17897.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Previous message:</strong> <a href="17895.php">Paul Kapinos: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>In reply to:</strong> <a href="17889.php">Jeff Squyres: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18043.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>Reply:</strong> <a href="18043.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good morning,
<br>
<p><span class="quotelev1">&gt; We've never recommended the use of dapl on Linux.  
</span><br>
<span class="quotelev1">&gt; I think it might have worked at one time, but I don't think anyone bothered to maintain it.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Linux, you should probably use native verbs support, instead.
</span><br>
<p>Well, we use 'Open MPI + openib' since some years now (started with 
<br>
Sun's ClusterTools and Open MPI 1.2.x, now we have self-build 1.4.x and 
<br>
1.5.x Open MPI).
<br>
<p>The problem is, that on our new, big, sexy cluster (some 1700 nodes 
<br>
connected to common QDR InfiniBand fabric), running MPI over DAPL seem 
<br>
to be quite faster than running over native IB.  Yes, it is puzzling.
<br>
<p>But  reproducible:
<br>
Intel MPI (over DAPL) =&gt; 100%
<br>
OpenMPI (over openib) =&gt; 90% on some 4/5 machines (Westmere dual-Socket)
<br>
OpenMPI (over openib) =&gt; 45% on some 1/5 machines (Nehalem quad-Socket)
<br>
Intel MPI (over ofa) ==&gt; the same values than OpenMPI!
<br>
<p>(Bandwidth in a PingPong test, e.g. Intel MPI benchmark, and two other 
<br>
PingPongs)
<br>
<p>The question about WHY native IB is slower than DAPL is a very good one 
<br>
(did you have any ideas?). As said it is reproducible: switching from 
<br>
dapl to ofa in Intel MPI also switches the performance of PingPong.
<br>
<p>(You may say &quot;your test is wrong&quot; but we tried out three different 
<br>
PingPong tests, producing very similar values).
<br>
<p>The second question is How to Learn OpenMPI to Use DAPL.
<br>
<p>Meanwhile, I compiled lotz of versions (1.4.3, 1.4.4, 1.5.3, 1.5.4) 
<br>
using at least two DAPL versions and option --with-udapl. The versions 
<br>
are build well, but always on start, the initialisation of DAPL fails 
<br>
(message see below) and the communication runs as usual over openib.
<br>
<p>Also the error message says &quot;may be an invalid Registry in the dat.conf 
<br>
file&quot;, this seem to be very unlikely: with the same dat.conf the Intel 
<br>
MPI can use DAPL. (and yes, OpenMPI really use the same dat.conf than 
<br>
Intel MPI, set over DAT_OVERRIDE - checked and double-checked).
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: Failed to open &quot;ofa-v2-mlx4_0-1u&quot; 
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
<p>Because of the anticipated performance gain we would be very keen on 
<br>
using DAPL with Open MPI. Does somebody have any idea what could be 
<br>
wrong and what to check?
<br>
<p><p><p><p><p><span class="quotelev1">&gt; On Dec 2, 2011, at 1:21 PM, Paul Kapinos wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OFED 1.5.4 will contain DAPL 2.0.34.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to compile the newest release of Open MPI (1.5.4) with this DAPL release and I was not successful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configuring with --with-udapl=/path/to/2.0.34/dapl
</span><br>
<span class="quotelev2">&gt;&gt; got the error &quot;/path/to/2.0.34/dapl/include/dat/udat.h not found&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Looking into include dir: there is no 'dat' subdir but 'dat2'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just for fun I also tried to move 'dat2' to 'dat' back (dirty hack I know :-) - the configure stage was then successful but the compilation failed. The header seem to be really changed, not just moved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The question: are the Open MPI developer aware of this changes, and when a version of Open MPI will be available with support for DAPL 2.0.34?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Background: we have some trouble with Intel MPI and current DAPL which we do not have with DAPL 2.0.34, so our dream is to update as soon as possible)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best wishes and an nice weekend,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.openfabrics.org/downloads/OFED/release_notes/OFED_1.5.4_release_notes">http://www.openfabrics.org/downloads/OFED/release_notes/OFED_1.5.4_release_notes</a>
</span><br>
<p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17896/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17897.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Previous message:</strong> <a href="17895.php">Paul Kapinos: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>In reply to:</strong> <a href="17889.php">Jeff Squyres: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18043.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>Reply:</strong> <a href="18043.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
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
