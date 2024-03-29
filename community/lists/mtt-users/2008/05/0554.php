<?
$subject_val = "Re: [MTT users] How to test just one MPI version?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 16:20:33 2008" -->
<!-- isoreceived="20080513202033" -->
<!-- sent="Tue, 13 May 2008 16:20:19 -0400" -->
<!-- isosent="20080513202019" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] How to test just one MPI version?" -->
<!-- id="15B5B0C8-2C9A-4A7D-B5BE-72D0422D0BF6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080513201221.GA51303_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 16:20:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0555.php">Rafael Folco: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>Previous message:</strong> <a href="0553.php">Ethan Mallove: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>In reply to:</strong> <a href="0553.php">Ethan Mallove: "Re: [MTT users] How to test just one MPI version?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0555.php">Rafael Folco: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>Reply:</strong> <a href="0555.php">Rafael Folco: "Re: [MTT users] How to test just one MPI version?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I heavily use the --section and --[no]-&lt;phase&gt; command line  
<br>
arguments in my automated Cisco MTT setup.
<br>
<p><p>On May 13, 2008, at 4:12 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, May/13/2008 02:54:46PM, Rafael Folco wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I appreciate if anyone can give me some help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How to run MTT tests just against one specific MPI version ? It is
</span><br>
<span class="quotelev2">&gt;&gt; running against all MPI versions: ompi-nightly-v1.1, ompi-nightly- 
</span><br>
<span class="quotelev2">&gt;&gt; trunk,
</span><br>
<span class="quotelev2">&gt;&gt; and ompi-nightly-v1.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've already tried to use the following configurations. Did I miss
</span><br>
<span class="quotelev2">&gt;&gt; anything ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI Get phase:
</span><br>
<span class="quotelev2">&gt;&gt; ==============
</span><br>
<span class="quotelev2">&gt;&gt; [MPI get: OpenMPI-1.2.5]
</span><br>
<span class="quotelev2">&gt;&gt; mpi_details = Open MPI 1.2.5
</span><br>
<span class="quotelev2">&gt;&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI Install phase:
</span><br>
<span class="quotelev2">&gt;&gt; ==================
</span><br>
<span class="quotelev2">&gt;&gt; [MPI install: OpenMPI-1.2.5]
</span><br>
<span class="quotelev2">&gt;&gt; module = Analyze::OMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Test Build phase:
</span><br>
<span class="quotelev2">&gt;&gt; =================
</span><br>
<span class="quotelev2">&gt;&gt; skip_mpi_get = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly- 
</span><br>
<span class="quotelev2">&gt;&gt; v1.2
</span><br>
<span class="quotelev2">&gt;&gt; skip_mpi_install = ompi-nightly-v1.1, ompi-nightly-trunk,
</span><br>
<span class="quotelev2">&gt;&gt; ompi-nightly-v1.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Command line:
</span><br>
<span class="quotelev2">&gt;&gt; =============
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # client/mtt -d --force -f samples/ompi-core.ini
</span><br>
<span class="quotelev2">&gt;&gt; alreadyinstalled_dir=/usr/lib64/openmpi/1.2.5-gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can skip sections in the INI file by inserting
</span><br>
<span class="quotelev1">&gt; a text string (e.g., &quot;skip&quot;) into the section names. E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [SKIP MPI get: ompi-nightly-v1.1]
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;  [SKIP MPI get: ompi-nightly-v1.2]
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;  [SKIP MPI get: ompi-nightly-trunk]
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's also a &quot;--[no]-section&quot; option if you'd rather leave your
</span><br>
<span class="quotelev1">&gt; INI file clean. E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ client/mtt -d --force -f samples/ompi-core.ini \
</span><br>
<span class="quotelev1">&gt;    alreadyinstalled_dir=/usr/lib64/openmpi/1.2.5-gcc \
</span><br>
<span class="quotelev1">&gt;      --section &quot;OpenMPI-1.2.5 trivial ibm intel mpicxx&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MTT will do a pattern match on each INI section, and execute
</span><br>
<span class="quotelev1">&gt; only the sections listed in your --section argument. In the
</span><br>
<span class="quotelev1">&gt; above example, sections matching either &quot;OpenMPI-1.2.5&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;trivial&quot;, &quot;ibm&quot;, &quot;intel&quot;, or &quot;mpicxx&quot; will be run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Rafael Folco
</span><br>
<span class="quotelev2">&gt;&gt; OpenHPC / Brazil Test Lead
</span><br>
<span class="quotelev2">&gt;&gt; IBM Linux Technology Center
</span><br>
<span class="quotelev2">&gt;&gt; E-Mail: rfolco_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0555.php">Rafael Folco: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>Previous message:</strong> <a href="0553.php">Ethan Mallove: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>In reply to:</strong> <a href="0553.php">Ethan Mallove: "Re: [MTT users] How to test just one MPI version?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0555.php">Rafael Folco: "Re: [MTT users] How to test just one MPI version?"</a>
<li><strong>Reply:</strong> <a href="0555.php">Rafael Folco: "Re: [MTT users] How to test just one MPI version?"</a>
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
