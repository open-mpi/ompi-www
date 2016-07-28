<?
$subject_val = "Re: [MTT users] How to test just one MPI version?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 16:12:31 2008" -->
<!-- isoreceived="20080513201231" -->
<!-- sent="Tue, 13 May 2008 16:12:21 -0400" -->
<!-- isosent="20080513201221" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] How to test just one MPI version?" -->
<!-- id="20080513201221.GA51303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1210701286.6755.22.camel_at_T42" -->
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
<strong>Subject:</strong> Re: [MTT users] How to test just one MPI version?<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 16:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0554.php">Jeff Squyres: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>Previous message:</strong> <a href="0552.php">Rafael Folco: "[MTT users] How to test just one MPI version?"</a>
<li><strong>In reply to:</strong> <a href="0552.php">Rafael Folco: "[MTT users] How to test just one MPI version?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0554.php">Jeff Squyres: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>Reply:</strong> <a href="0554.php">Jeff Squyres: "Re: [MTT users] How to test just one MPI version?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May/13/2008 02:54:46PM, Rafael Folco wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I appreciate if anyone can give me some help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How to run MTT tests just against one specific MPI version ? It is
</span><br>
<span class="quotelev1">&gt; running against all MPI versions: ompi-nightly-v1.1, ompi-nightly-trunk,
</span><br>
<span class="quotelev1">&gt; and ompi-nightly-v1.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've already tried to use the following configurations. Did I miss
</span><br>
<span class="quotelev1">&gt; anything ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI Get phase:
</span><br>
<span class="quotelev1">&gt; ==============
</span><br>
<span class="quotelev1">&gt; [MPI get: OpenMPI-1.2.5]
</span><br>
<span class="quotelev1">&gt; mpi_details = Open MPI 1.2.5
</span><br>
<span class="quotelev1">&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI Install phase:
</span><br>
<span class="quotelev1">&gt; ==================
</span><br>
<span class="quotelev1">&gt; [MPI install: OpenMPI-1.2.5]
</span><br>
<span class="quotelev1">&gt; module = Analyze::OMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Test Build phase:
</span><br>
<span class="quotelev1">&gt; =================
</span><br>
<span class="quotelev1">&gt; skip_mpi_get = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt; skip_mpi_install = ompi-nightly-v1.1, ompi-nightly-trunk,
</span><br>
<span class="quotelev1">&gt; ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Command line:
</span><br>
<span class="quotelev1">&gt; =============
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # client/mtt -d --force -f samples/ompi-core.ini
</span><br>
<span class="quotelev1">&gt; alreadyinstalled_dir=/usr/lib64/openmpi/1.2.5-gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<p><p>You can skip sections in the INI file by inserting
<br>
a text string (e.g., &quot;skip&quot;) into the section names. E.g.,
<br>
<p>&nbsp;&nbsp;[SKIP MPI get: ompi-nightly-v1.1]
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;[SKIP MPI get: ompi-nightly-v1.2]
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;[SKIP MPI get: ompi-nightly-trunk]
<br>
&nbsp;&nbsp;...
<br>
<p>There's also a &quot;--[no]-section&quot; option if you'd rather leave your
<br>
INI file clean. E.g.,
<br>
<p>&nbsp;&nbsp;$ client/mtt -d --force -f samples/ompi-core.ini \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;alreadyinstalled_dir=/usr/lib64/openmpi/1.2.5-gcc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--section &quot;OpenMPI-1.2.5 trivial ibm intel mpicxx&quot;
<br>
<p>MTT will do a pattern match on each INI section, and execute
<br>
only the sections listed in your --section argument. In the
<br>
above example, sections matching either &quot;OpenMPI-1.2.5&quot;,
<br>
&quot;trivial&quot;, &quot;ibm&quot;, &quot;intel&quot;, or &quot;mpicxx&quot; will be run.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rafael Folco
</span><br>
<span class="quotelev1">&gt; OpenHPC / Brazil Test Lead
</span><br>
<span class="quotelev1">&gt; IBM Linux Technology Center
</span><br>
<span class="quotelev1">&gt; E-Mail: rfolco_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0554.php">Jeff Squyres: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>Previous message:</strong> <a href="0552.php">Rafael Folco: "[MTT users] How to test just one MPI version?"</a>
<li><strong>In reply to:</strong> <a href="0552.php">Rafael Folco: "[MTT users] How to test just one MPI version?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0554.php">Jeff Squyres: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>Reply:</strong> <a href="0554.php">Jeff Squyres: "Re: [MTT users] How to test just one MPI version?"</a>
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
