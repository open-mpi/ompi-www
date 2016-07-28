<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 10 12:33:18 2014" -->
<!-- isoreceived="20140810163318" -->
<!-- sent="Sun, 10 Aug 2014 09:32:37 -0700" -->
<!-- isosent="20140810163237" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.1: &amp;quot;make all&amp;quot; error: symbol `Lhwloc1' is already defined" -->
<!-- id="17DEF6D9-E1AF-4AD0-913C-B41134A05308_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="360446735.872.1407683813535.JavaMail.zimbra_at_intec.unl.edu.ar" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-10 12:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24956.php">Yang, David: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1'	is already defined"</a>
<li><strong>Previous message:</strong> <a href="24954.php">Yang, David: "[OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<li><strong>In reply to:</strong> <a href="24953.php">Jorge D'Elia: "[OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24956.php">Yang, David: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1'	is already defined"</a>
<li><strong>Reply:</strong> <a href="24956.php">Yang, David: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1'	is already defined"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might try the 1.8.2 release candidate and see if that helps - some fortran changes were in there.
<br>
<p>On Aug 10, 2014, at 8:16 AM, Jorge D'Elia &lt;jdelia_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to re-compile Open MPI 1.8.1 version for Linux 
</span><br>
<span class="quotelev1">&gt; on an ia32 machine with Fedora 14 although using the 
</span><br>
<span class="quotelev1">&gt; last version of Gfortran (Gfortran 4.10 is required 
</span><br>
<span class="quotelev1">&gt; by a user program which runs ok).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the &quot;make all&quot; phase breaks with the 
</span><br>
<span class="quotelev1">&gt; error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error: symbol `Lhwloc1' is already defined
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I attached a tgz file (tar -zcvf) with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output &quot;configure.txt&quot; from &quot;./configure&quot; Open MPI phase;
</span><br>
<span class="quotelev1">&gt; The &quot;config.log&quot; file from the top-level Open MPI directory;
</span><br>
<span class="quotelev1">&gt; Output &quot;make.txt&quot;    from &quot;make all&quot; to build Open MPI;
</span><br>
<span class="quotelev1">&gt; Output &quot;make-v1.txt&quot; from &quot;make V=1&quot; to build Open MPI;
</span><br>
<span class="quotelev1">&gt; Outputs from cat /proc/version and cat /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please, any clue in order to fix?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards in advance.
</span><br>
<span class="quotelev1">&gt; Jorge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; CIMEC (UNL-CONICET) Predio CONICET-Santa Fe, Colectora Ruta Nac 168,
</span><br>
<span class="quotelev1">&gt; Paraje El Pozo, S3000GLN Santa Fe, ARGENTINA, <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
</span><br>
<span class="quotelev1">&gt; Tel +54 342 451.15.94/95 ext 1018, fax: +54-342-451.11.69
</span><br>
<span class="quotelev1">&gt; &lt;symbol-already-defined.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24953.php">http://www.open-mpi.org/community/lists/users/2014/08/24953.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24956.php">Yang, David: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1'	is already defined"</a>
<li><strong>Previous message:</strong> <a href="24954.php">Yang, David: "[OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<li><strong>In reply to:</strong> <a href="24953.php">Jorge D'Elia: "[OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24956.php">Yang, David: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1'	is already defined"</a>
<li><strong>Reply:</strong> <a href="24956.php">Yang, David: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1'	is already defined"</a>
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
