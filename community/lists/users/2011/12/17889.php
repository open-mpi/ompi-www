<?
$subject_val = "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  5 11:28:32 2011" -->
<!-- isoreceived="20111205162832" -->
<!-- sent="Mon, 5 Dec 2011 11:28:27 -0500" -->
<!-- isosent="20111205162827" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?" -->
<!-- id="4A82E972-8CE4-4DE7-9865-91B633049635_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ED91723.4020205_at_rz.rwth-aachen.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-05 11:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17890.php">Bogdan Costescu: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="17888.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="17884.php">Paul Kapinos: "[OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17896.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>Reply:</strong> <a href="17896.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've never recommended the use of dapl on Linux.  I think it might have worked at one time, but I don't think anyone bothered to maintain it.  
<br>
<p>On Linux, you should probably use native verbs support, instead.
<br>
<p><p>On Dec 2, 2011, at 1:21 PM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OFED 1.5.4 will contain DAPL 2.0.34.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to compile the newest release of Open MPI (1.5.4) with this DAPL release and I was not successful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configuring with --with-udapl=/path/to/2.0.34/dapl
</span><br>
<span class="quotelev1">&gt; got the error &quot;/path/to/2.0.34/dapl/include/dat/udat.h not found&quot;
</span><br>
<span class="quotelev1">&gt; Looking into include dir: there is no 'dat' subdir but 'dat2'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just for fun I also tried to move 'dat2' to 'dat' back (dirty hack I know :-) - the configure stage was then successful but the compilation failed. The header seem to be really changed, not just moved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The question: are the Open MPI developer aware of this changes, and when a version of Open MPI will be available with support for DAPL 2.0.34?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Background: we have some trouble with Intel MPI and current DAPL which we do not have with DAPL 2.0.34, so our dream is to update as soon as possible)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes and an nice weekend,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.openfabrics.org/downloads/OFED/release_notes/OFED_1.5.4_release_notes">http://www.openfabrics.org/downloads/OFED/release_notes/OFED_1.5.4_release_notes</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17890.php">Bogdan Costescu: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="17888.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="17884.php">Paul Kapinos: "[OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17896.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>Reply:</strong> <a href="17896.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
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
