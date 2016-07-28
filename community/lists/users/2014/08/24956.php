<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1'	is already defined";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 10 12:40:15 2014" -->
<!-- isoreceived="20140810164015" -->
<!-- sent="Sun, 10 Aug 2014 16:40:11 +0000" -->
<!-- isosent="20140810164011" -->
<!-- name="Yang, David" -->
<!-- email="xyang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.1: &amp;quot;make all&amp;quot; error: symbol `Lhwloc1'	is already defined" -->
<!-- id="9A54BF04-C836-44C1-82BE-D979C952C773_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="17DEF6D9-E1AF-4AD0-913C-B41134A05308_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1'	is already defined<br>
<strong>From:</strong> Yang, David (<em>xyang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-10 12:40:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24957.php">Yang, David: "[OMPI users] Open MPI disappeared after Mavericks upgrade"</a>
<li><strong>Previous message:</strong> <a href="24955.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>In reply to:</strong> <a href="24955.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24959.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol	`Lhwloc1'	is already defined"</a>
<li><strong>Reply:</strong> <a href="24959.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol	`Lhwloc1'	is already defined"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, I got the same error.
<br>
<p><p>David
<br>
<p>Correspondence/TSPA
<br>
<p><p><p><p><p>On Aug 10, 2014, at 10:32 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You might try the 1.8.2 release candidate and see if that helps - some fortran changes were in there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2014, at 8:16 AM, Jorge D'Elia &lt;jdelia_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried to re-compile Open MPI 1.8.1 version for Linux 
</span><br>
<span class="quotelev2">&gt;&gt; on an ia32 machine with Fedora 14 although using the 
</span><br>
<span class="quotelev2">&gt;&gt; last version of Gfortran (Gfortran 4.10 is required 
</span><br>
<span class="quotelev2">&gt;&gt; by a user program which runs ok).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, the &quot;make all&quot; phase breaks with the 
</span><br>
<span class="quotelev2">&gt;&gt; error message:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Error: symbol `Lhwloc1' is already defined
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I attached a tgz file (tar -zcvf) with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Output &quot;configure.txt&quot; from &quot;./configure&quot; Open MPI phase;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;config.log&quot; file from the top-level Open MPI directory;
</span><br>
<span class="quotelev2">&gt;&gt; Output &quot;make.txt&quot;    from &quot;make all&quot; to build Open MPI;
</span><br>
<span class="quotelev2">&gt;&gt; Output &quot;make-v1.txt&quot; from &quot;make V=1&quot; to build Open MPI;
</span><br>
<span class="quotelev2">&gt;&gt; Outputs from cat /proc/version and cat /proc/cpuinfo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please, any clue in order to fix?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards in advance.
</span><br>
<span class="quotelev2">&gt;&gt; Jorge.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; CIMEC (UNL-CONICET) Predio CONICET-Santa Fe, Colectora Ruta Nac 168,
</span><br>
<span class="quotelev2">&gt;&gt; Paraje El Pozo, S3000GLN Santa Fe, ARGENTINA, <a href="http://www.cimec.org.ar/">http://www.cimec.org.ar/</a>
</span><br>
<span class="quotelev2">&gt;&gt; Tel +54 342 451.15.94/95 ext 1018, fax: +54-342-451.11.69
</span><br>
<span class="quotelev2">&gt;&gt; &lt;symbol-already-defined.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24953.php">http://www.open-mpi.org/community/lists/users/2014/08/24953.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24955.php">http://www.open-mpi.org/community/lists/users/2014/08/24955.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24957.php">Yang, David: "[OMPI users] Open MPI disappeared after Mavericks upgrade"</a>
<li><strong>Previous message:</strong> <a href="24955.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>In reply to:</strong> <a href="24955.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24959.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol	`Lhwloc1'	is already defined"</a>
<li><strong>Reply:</strong> <a href="24959.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol	`Lhwloc1'	is already defined"</a>
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
